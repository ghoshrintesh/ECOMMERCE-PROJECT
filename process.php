<?php

$username="";
$password="";
$errors=array();
$db=mysqli_connect('localhost','root','','newfood');
session_start();

if(isset($_POST['login']))
{
	if(empty($_POST['username']) || empty($_POST['password']))
	{
		array_push($errors, "Username/Password is required");
		
	}
	else
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query="SELECT * FROM registration WHERE username='$username' AND password =
		'$password'";
		$result=mysqli_query($db,$query);
		$row= mysqli_fetch_array($result);
		if($row>0){
			$_SESSION['name']=$row['name'];
			header("location:dashboard.php");

		}
		else
		{
			array_push($errors, "Invalid username/password");
		}
	}
}
?>