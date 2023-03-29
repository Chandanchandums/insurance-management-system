<?php
include('connection.php');
$pname=$_POST['pname'];
$pamnt=$_POST['pamnt'];
$iamnt=$_POST['iamnt'];
$tp=$_POST['tp'];
$hplanid=$_POST['hplanid'];
$q="UPDATE health_ins SET plan_name='$pname',pamnt='$pamnt',iamnt='$iamnt',tp='$tp' WHERE hplanid='$hplanid'";
$query=mysqli_query($con,$q);
if($query)
{
    header("Location:./hpd.php");
}
?>