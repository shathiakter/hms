<?php include("dbConfig.php"); ?>
<table width="100%">
<thead>
<tr>
<th>Appointment ID</th>
<th>Doctor Name</th>
<th>Patient Name</th>
<th>Patient_Age</th>
<th>Patient_Gender</th>
<th>Appointment date</th>
<th>Action</th>
<tr>
</thead>
<?php

$query = mysql_query("SELECT * FROM appointment");

while($data = mysql_fetch_array($query)){
	?>
	<tr>
	<td><?php echo $data['appointment_id']; ?></td>
	<td><?php echo $data['doctor_name']; ?></td>
	<td><?php echo $data['patient_name']; ?></td>
	<td><?php echo $data['patient_age']; ?></td>
	<td><?php echo $data['patient_gender']; ?></td>
	<td><?php echo $data['date']; ?></td>
	<td><a href="controller/deleteAppointment.php?id=<?php echo $data['appointment_id']; ?>" onclick="return confirm('Delete All information?')">Delete</a></td>
	
    </tr>
<?php
}
?>

</table>