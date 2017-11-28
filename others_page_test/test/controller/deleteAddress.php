<?php
session_start();
include("../dbconnection/dbConn.php");

$id = $_GET['id'];

$sql = $conn->query("DELETE FROM customers  WHERE cus_id='$id'");

header("Location:../addressList.php");


?>