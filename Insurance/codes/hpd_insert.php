<?php
include('connection.php');
$pname=$_POST['pname'];
$pamnt=$_POST['pamnt'];
$iamnt=$_POST['iamnt'];
$tp=$_POST['tp'];
$q="INSERT INTO health_ins(plan_name,pamnt,iamnt,tp) VALUES ('$pname','$pamnt','$iamnt','$tp')";
$query=mysqli_query($con,$q);
if($query)
{
    header("Location:./hpd.php");
}
?>