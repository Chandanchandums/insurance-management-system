<?php
include('connection.php');
$id=$_POST['rn'];
$q="DELETE  FROM prop_ins WHERE pplanid='$id'";
$query=mysqli_query($con,$q);
if($query)
{
    header("Location:./ppd.php");
}
else{
    echo("unsuccessful");
}
?>