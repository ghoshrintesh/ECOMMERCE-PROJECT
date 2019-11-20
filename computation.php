<?php

$db=mysqli_connect('localhost','root','','newfood');
if(isset($_POST['go'])){
	$cost=implode(',',$_POST['food']);
	$query4="SELECT price FROM food WHERE fname='$cost' AND rid='$rid'";
	$result4=mysqli_query($db,$query4);
	if($row4= mysqli_fetch_array($result4)){
		echo "<script>alert($row4)</script>";
	}
}
?>