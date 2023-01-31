<?php

	$food = $_POST['food'];
	$cash = $_POST['cash'];
	$preloved = $_POST['preloved'];
	$petcon = $_POST['petcon'];
	$petaddr = $_POST['petaddr'];

//Database Connection
$conn = new mysqli('localhost','root','','woofers');

if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}

else{ 
	
	$stmt = $conn->prepare("INSERT INTO pet_donation(food, cash, preloved, contdon, pickdon)
	VALUES(?,?,?,?,?)");
	$stmt->bind_param("sisis", $food, $cash, $preloved, $petcon, $petaddr);
	$stmt->execute();
	echo "THANK YOU FOR DONATING!";
	$stmt->close();
	$conn->close();
} 

?>