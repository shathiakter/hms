<?php
session_start();
include("../dbconnection/dbConn.php");

$username = $_POST['username'];
$password = $_POST['password']; 

$q= $conn->query("SELECT * FROM users WHERE username='$username'");

$getData = $q->fetch(PDO::FETCH_ASSOC);
 
if($getData['password']==md5($password)){
	
	$_SESSION['user_id'] = $getData['user_id'];
	$_SESSION['username'] = $getData['username'];
	$_SESSION['user_email'] = $getData['email'];
	$_SESSION['user_fullname'] = $getData['first_name'];
	
	header("Location:../index.php");
	
	
}
else{
	
	header("Location:../login.php");
}


?>