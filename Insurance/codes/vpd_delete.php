<?php
include('connection.php');
$id=$_POST['rn'];
$q="DELETE  FROM vehicle_ins WHERE vplanid='$id'";
$query=mysqli_query($con,$q);
if($query)
{
    header("Location:./vpd.php");
}
else{
    echo("unsuccessful");
}
?>