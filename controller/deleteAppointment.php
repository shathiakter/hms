<?php include("../dbConfig.php");

$id = $_GET['id'];

$sql = mysql_query("DELETE FROM appointment  WHERE appointment_id='$id'");

header("Location:../view_appointment_list.php");


?>