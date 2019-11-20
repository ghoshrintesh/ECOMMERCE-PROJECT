<?php
	
	$username="";
	$email="";
	$errors=array();


	$db=mysqli_connect('localhost','root','','newfood');

	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$name = $_POST['name'];
		
		$mobno = $_POST['mobno'];

		if(empty($username)){
			array_push($errors, "Username is required");
		}

		if(empty($password)){
			array_push($errors, "Password is required");
		}

		if(empty($name)){
			array_push($errors, "Full name is required");
		}

		if(empty($email)){
			array_push($errors, "Email is required");
		}

		if(empty($mobno)){
			array_push($errors, "Mobile No. is required");
		}

		if(count($errors)==0){
			
			$sql = "INSERT INTO registration(username,password,name,email,mobno)
							VALUES ('$username','$password','$name','$email','$mobno') ";
			mysqli_query($db, $sql);

			header("location:login.php");
			
		}

	}


?>