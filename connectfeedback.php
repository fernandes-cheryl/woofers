<?php

$servername="localhost";
$username="root";
$password="";
$dbname="woofers";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
	//echo "Connected";
}

else
{
	echo"Connection Failed".mysqli_connect_error();
}

	$fn = $_POST['feedname'];
	$fe = $_POST['feedemail'];
	$fm = $_POST['feedmessage'];
	$fl = $_POST['feedlike'];
	$likechk=implode($fl);

	$query = "INSERT INTO contact_us VALUES('$fn', '$fe', '$fm', '$likechk')";
	$data=mysqli_query($conn, $query);
	
	if($data)
	{
		echo "THANKS FOR THE FEEDBACK";
	}
	else
	{
		echo"Connection Failed";
	}



?>

