<?php
session_start();
include("../dbconnection/dbConn.php");

$cus_firstname = $_POST['firstname'];
$cus_lastname = $_POST['lastname']; 
$cus_email = $_POST['email']; 
$cus_password = md5($_POST['password']);
$cus_phone = $_POST['mobile']; 
$cus_address = $_POST['address']; 
$address_id = $_POST['address_id'];


/* $sql = mysqli_query($conn, "INSERT INTO customers(cus_firstname,cus_lastname,cus_email,cus_password, cus_phone,cus_address,address_id) VALUES('$cus_firstname','$cus_lastname', '$cus_email','$cus_password', '$cus_phone', '$cus_address', '$address_id')"); */

/*
echo "INSERT INTO customers VALUES('$firstname', '$lastname, '$email','password', '$mobile', '$address', )";
exit();

*/

$sql = $conn->exec("INSERT INTO customers(cus_firstname,cus_lastname,cus_email,cus_password, cus_phone,cus_address,address_id) VALUES('$cus_firstname','$cus_lastname', '$cus_email','$cus_password', '$cus_phone', '$cus_address', '$address_id')");


if($sql){
	$_SESSION['mgs'] = 'Address information has been saved!!';
}
else{
	$_SESSION['mgs'] = 'Unable to save data!!';
}

header("Location:../addressEntry.php");

?>
