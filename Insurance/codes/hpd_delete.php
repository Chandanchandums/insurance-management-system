<?php
include('connection.php');
$id=$_POST['rn'];
$q="DELETE  FROM health_ins WHERE hplanid='$id'";
$query=mysqli_query($con,$q);
if($query)
{
    header("Location:./hpd.php");
}
else{
    echo("unsuccessful");
}
?>