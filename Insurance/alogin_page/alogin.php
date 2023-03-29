<?php
	include('connection.php');
    $username = $_POST['email'];
    $password = $_POST['pass'];
    $ret=mysqli_query($con,"SELECT * FROM alogin WHERE uname='$username' and pass='$password'");
	$num=mysqli_fetch_array($ret);
		if($num > 0)
		{
			
			header("Location:../admin.html");
			  
		}
	else
	{
		echo  "Login failed. Invalid username or password";
	}
?>