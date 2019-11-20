<?php
	$res="";
	$loc="";

	$errors=array();
	$db=mysqli_connect('localhost','root','','newfood');

	
	if(isset($_POST['go']))
	{
	if($_POST['res']=="Select restaurant" || $_POST['loc']=="Select location")
	{
		array_push($errors, "Please select the loctaion and restaurant");
		
	}
	else
	{
		$res=$_POST['res'];
		$loc=$_POST['loc'];
		$query="SELECT * FROM restaurant WHERE rname='$res' AND location =
		'$loc'";
		$result=mysqli_query($db,$query);
		$row= mysqli_fetch_array($result);
		if($row>0){
			session_start();
			$_SESSION['rname']=$row['rname'];
			
			$_SESSION['rid']=$row['rid'];
			header("location:foodorder.php");

		}
		else
		{
			array_push($errors, "Not available");
		}


	}
}
?>