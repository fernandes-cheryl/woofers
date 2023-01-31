<?php

	$date = $_POST['date'];
	$des = $_POST['des'];
	$med = $_POST['med'];

//Database Connection
$conn = new mysqli('localhost','root','','woofers'); 

if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}

else{ 
	
	$stmt = $conn->prepare("INSERT INTO book_appointment(preferred_date,dog_description,medical_condition)
	VALUES(?,?,?)");
	$stmt->bind_param("sss", $date, $des, $med);
	$stmt->execute();
	echo "Appointment Booked";
	$stmt->close();
	$conn->close();
} 

?>