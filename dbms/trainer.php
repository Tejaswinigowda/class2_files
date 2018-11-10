<?php 
	include "../conn.php";
	$name = $_POST['name'];
	$email=$_POST['email'];
	
	$phone=$_POST['phone'];
	$age=$_POST['age'];
	


	$query="INSERT INTO `trainee`(`name`,`email`,`phone`,`age`) VALUES('$name','$email','$phone','$age')";
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
	