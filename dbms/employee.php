<?php 
	include "../conn.php";
	$name = $_POST['name'];
	$designation=$_POST['designation'];
	$teamname=$_POST['teamname'];
	$companyname = $_POST['companyname'];
	$address=$_POST['address'];
	$age=$_POST['age'];
	$phno = $_POST['phno'];
	$dob=$_POST['dob'];
	



	$query="INSERT INTO `register`(`name`,`designation`,`teamname`,`companyname`,`address`,`age`,`phno`,`dob`) VALUES('$name','$designation','$teamname','$companyname','$address','$age','$phno','$dob')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "successfully registered";

	}
	else
	{
		echo "registeration not done";

	}

	
?>	