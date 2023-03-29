<?php
include('connection.php');
$id=$_POST['rn'];
$q="DELETE  FROM life_ins WHERE lplanid='$id'";
$query=mysqli_query($con,$q);
if($query)
{
    header("Location:./lpd.php");
}
else{
    echo("unsuccessful");
}
?>