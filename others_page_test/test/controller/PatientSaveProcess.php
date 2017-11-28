<?php
session_start();
include("../dbconnection/dbConn.php");

$pname = $_POST['p_name'];
$fathername = $_POST['father_name']; 
$mobile = $_POST['mobile']; 
$age = $_POST['age'];
$address = $_POST['address']; 
$sql = $conn->exec("INSERT INTO patient(pname,fathername,mobile_no,	p_age, address) VALUES('$pname','$fathername', '$mobile','$age', '$address')");


if($sql){
	$_SESSION['mgs'] = 'Patient information has been saved!!';
}
else{
	$_SESSION['mgs'] = 'Unable to save data!!';
}

header("Location:../patientEntry.php");

?>
