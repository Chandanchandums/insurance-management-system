<?php
include('connection.php');
$iname=$_POST['iname'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$mobno=$_POST['mbno'];
$address=$_POST['address'];
$vno=$_POST['vno'];
$vtype=$_POST['vtype'];
$vbrand=$_POST['vbrand'];
$regy=$_POST['regy'];
$pid=$_POST['pid'];
$id=$_POST['id'];
$q="SELECT * FROM vehicle_ins WHERE vplanid='$pid'";
$query=mysqli_query($con,$q);
$res=mysqli_fetch_array($query);
$pname=$res['plan_name'];
$q1="INSERT INTO `vreg` (`cid`,`iname`, `dob`, `email`, `mobno`, `address`, `pname`, `vno`, `vtype`, `vbrand`, `regy`, `pid`) 
    VALUES ($id,'$iname', '$dob', '$email', '$mobno', '$address', '$pname', '$vno', '$vtype', '$vbrand', '$regy','$pid')";
$query=mysqli_query($con,$q1);
if($query){
    header("Location:./cvregd.php?id=$id");
}
?>