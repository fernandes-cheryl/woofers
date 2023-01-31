<?php

	$namerec = $_POST['namerec'];
	$agerec = $_POST['agerec'];
	$heightrec = $_POST['heightrec'];
	$weightrec = $_POST['weightrec'];
	$breedrec = $_POST['breedrec'];

//Database Connection
$conn = new mysqli('localhost','root','','woofers');

if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}

else{ 
	
	$stmt = $conn->prepare("INSERT INTO pet_records(name, age, height, breed, weight)
	VALUES(?,?,?,?,?)");
	$stmt->bind_param("sssss", $namerec, $agerec, $heightrec, $breedrec, $weightrec);
	$stmt->execute();
	echo "Pet Record Created!";
	$stmt->close();
	$conn->close();
} 

?>