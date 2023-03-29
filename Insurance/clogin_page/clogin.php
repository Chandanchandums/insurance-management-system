<?php
	include('connection.php');
    $username = $_POST['email'];
    $password = $_POST['pass'];
    $ret=mysqli_query($con,"SELECT * FROM clogin WHERE uname='$username' and pass='$password'");
	$num=mysqli_fetch_array($ret);
		if($num > 0)
		{	
			$ret=mysqli_query($con,"SELECT * FROM clogin WHERE uname='$username' and pass='$password'");
			while($data=mysqli_fetch_array($ret)){
				$id=$data['id'];
				echo $id;
			header("Location:../cust.php?rn=$id");
			break;
			}
			  
		}
	else
	{
		echo  "Login failed. Invalid username or password";
	}
?>