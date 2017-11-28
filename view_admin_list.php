<?php include("dbConfig.php"); ?>
<table width="100%">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Mobile</th>
<th>Address</th>
<th>Email</th>
<th>Password</th>
<th>Type</th>
<th>Gender</th>
<th>Action</th>
<tr>
</thead>
<?php

$query = mysql_query("SELECT * FROM admin");

while($data = mysql_fetch_array($query)){
	?>
	<tr>
	<td><?php echo $data['admin_id']; ?></td>
	<td><?php echo $data['admin_name']; ?></td>
	<td><?php echo $data['admin_mobile_no']; ?></td>
	<td><?php echo $data['admin_address']; ?></td>
	<td><?php echo $data['admin_email']; ?></td>
	<td><?php echo $data['admin_password']; ?></td>
	<td><?php echo $data['type']; ?></td>
	<td><?php echo $data['gender']; ?></td>
	<td><a href="controller/deleteAdmin.php?id=<?php echo $data['admin_id']; ?>" onclick="return confirm('Delete All information?')">Delete</a></td>
	
    </tr>
<?php
}
?>

</table>