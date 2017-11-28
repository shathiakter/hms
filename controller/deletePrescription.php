<?php include("../dbConfig.php");

$id = $_GET['id'];

$sql = mysql_query("DELETE FROM prescription  WHERE prescription_id='$id'");

header("Location:../view_prescription_list.php");


?>