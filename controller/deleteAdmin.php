<?php include("../dbConfig.php");

$id = $_GET['id'];

$sql = mysql_query("DELETE FROM admin  WHERE admin_id='$id'");

header("Location:../view_admin_list.php");


?>