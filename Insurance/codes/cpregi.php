<?php
include('connection.php');
$iname=$_POST['iname'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$mobno=$_POST['mbno'];
$address=$_POST['address'];
$propsize=$_POST['propsize'];
$pid=$_POST['pid'];
$id=$_POST['id'];
$q="SELECT * FROM prop_ins WHERE pplanid='$pid'";
$query=mysqli_query($con,$q);
$res=mysqli_fetch_array($query);
$pname=$res['plan_name'];
$q1="INSERT INTO `preg` (cid,`iname`, `dob`, `email`, `mobno`, `pname`, `propaddress`, `propsize`, `pid`) 
        VALUES ($id,'$iname', '$dob', '$email', '$mobno', '$pname', '$address', '$propsize','$pid' )";
$query=mysqli_query($con,$q1);
if($query){
    header("Location:./cpregd.php?id=$id");
}
?>