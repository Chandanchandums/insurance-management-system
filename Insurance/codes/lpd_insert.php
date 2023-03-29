<?php
include('connection.php');
$pname=$_POST['pname'];
$pamnt=$_POST['pamnt'];
$iamnt=$_POST['iamnt'];
$tp=$_POST['tp'];
$q="INSERT INTO life_ins(pname,pamnt,iamnt,tp) VALUES ('$pname','$pamnt','$iamnt','$tp')";
$query=mysqli_query($con,$q);
if($query)
{
    header("Location:./lpd.php");
}
?>