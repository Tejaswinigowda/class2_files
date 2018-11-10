<?php
$con=mysqli_connect("localhost","root","","table");
if(mysqli_connect_errno())
{
		echo "failed to connect to MySql".mysqli_connect_error();

}
?>