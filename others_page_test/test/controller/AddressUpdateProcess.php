<?php
session_start();
include("../dbconnection/dbConn.php");

$cus_firstname = $_POST['firstname'];
$cus_lastname = $_POST['lastname'];
$cus_email = $_POST['email']; 
$cus_password = $_POST['password'];
$cus_phone = $_POST['mobile'];
$cus_address = $_POST['address']; 
$address_id = $_POST['address_id'];

$id = $_POST['cus_id']; 

$sql = $conn->exec("UPDATE customers SET cus_firstname='$cus_firstname',cus_lastname='$cus_lastname', cus_email='$cus_email', cus_phone='$cus_phone', cus_address='$cus_address', address_id='$address_id' WHERE cus_id='$id'");


if($sql){
	$_SESSION['mgs'] = 'Address information has been Updated!!';
}
else{
	$_SESSION['mgs'] = 'Unable to Update data!!';
}

header("Location:../addressUpdate.php?id=".$id);

?>
