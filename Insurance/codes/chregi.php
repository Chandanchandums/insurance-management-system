<?php
include('connection.php');
$iname=$_POST['iname'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$mobno=$_POST['mbno'];
$address=$_POST['address'];
$disease=$_POST['disease'];
$pid=$_POST['pid'];
$id=$_POST['id'];
$q="SELECT * FROM health_ins WHERE hplanid='$pid'";
$query=mysqli_query($con,$q);
$res=mysqli_fetch_array($query);
$pname=$res['plan_name'];

$q1="INSERT INTO `hreg` (cid,`iname`, `dob`, `pid`,`email`, `mobno`, `address`, `pname`, `disease`) 
    VALUES ($id,'$iname', '$dob', '$pid' , '$email', '$mobno', '$address', '$pname', '$disease')";
$query=mysqli_query($con,$q1);
if($query){
    header("Location:./chregd.php?id=$id");
}
?>
