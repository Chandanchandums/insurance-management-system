<?php
include('connection.php');
$iname=$_POST['iname'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$mobno=$_POST['mbno'];
$address=$_POST['address'];
$nname=$_POST['nname'];
$nrelation=$_POST['nrelation'];
$ncontact=$_POST['ncontact'];
$pid=$_POST['pid'];
$id=$_POST['id'];
$q="SELECT * FROM life_ins WHERE lplanid='$pid'";
$query=mysqli_query($con,$q);
$res=mysqli_fetch_array($query);
$pname=$res['pname'];
$q1="INSERT INTO `lreg` (cid,`iname`, `dob`, `email`, `mobno`, `address`, `pname`, `nname`, `nrelation`, `ncontact`, `pid`) 
    VALUES ($id,'$iname', '$dob', '$email', '$mobno', '$address', '$pname', '$nname', '$nrelation', '$ncontact', '$pid' )";
$query=mysqli_query($con,$q1);
if($query){
    header("Location:./clregd.php?id=$id");
}
?>