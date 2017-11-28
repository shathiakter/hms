<?php include("dbConfig.php"); ?>
<table width="100%">
<thead>
<tr>
<th>Prescription ID</th>
<th>Doctor Name</th>
<th>Patient Name</th>
<th>Patient_Age</th>
<th>Patient_Gender</th>
<th>case_history</th>
<th>medicine</th>
<th>Test</th>
<th>description</th>
<th>Action</th>
<tr>
</thead>
<?php

$query = mysql_query("SELECT * FROM prescription");

while($data = mysql_fetch_array($query)){
	?>
	<tr>
	<td><?php echo $data['prescription_id']; ?></td>
	<td><?php echo $data['doctor_name']; ?></td>
	<td><?php echo $data['patient_name']; ?></td>
	<td><?php echo $data['patient_age']; ?></td>
	<td><?php echo $data['patient_gender']; ?></td>
	<td><?php echo $data['case_history']; ?></td>
	<td><?php echo $data['medicine']; ?></td>
	<td><?php echo $data['test']; ?></td>
	<td><?php echo $data['description']; ?></td>
	<td><a href="controller/deletePrescription.php?id=<?php echo $data['prescription_id']; ?>" onclick="return confirm('Delete All information?')">Delete</a></td>
	
    </tr>
<?php
}
?>

</table>