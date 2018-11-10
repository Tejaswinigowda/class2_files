<?php 
	include "../conn.php";
	$name = $_POST['name'];
	$cost=$_POST['cost'];
	
	$vendor=$_POST['vendor'];
	
	


	$query="INSERT INTO `equipment`(`name`,`cost`,`vendor`) VALUES('$name','$cost','$vendor')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "successfully registered";

	}
	else
	{
		echo "error in registration";

	}

	
?>	
	