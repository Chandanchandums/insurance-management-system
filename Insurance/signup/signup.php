<?php
	include('connection.php');
    $name=$_POST['name'];
    $username = $_POST['email'];
    $password = $_POST['pass'];
    $sql = "INSERT INTO clogin (cname,uname,pass)
    VALUES ('$name','$username','$password')";
if(mysqli_query($con, $sql)){
    header("Location:../clogin_page/login.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
?>