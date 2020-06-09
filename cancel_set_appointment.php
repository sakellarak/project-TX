<?php
	$host = "localhost";
	$username = "root";
	$pass = "";
	$con = mysqli_connect($host, $username, $pass, "project", "3308");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Set Appointments</title>

</head>
<body>
<div class="form">
<h2>View Set Appointments</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Appointment ID</strong></th>
<th><strong>Date And Time</strong></th>
<th><strong>Address</strong></th>
<th><strong>Cancel Appointment</strong></th>
</tr>
</thead>
<tbody>
<?php
$query = "select appointmentID, datetime, address from appointment where set_appointment = 1";
$result = mysqli_query($con,$query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="center"><?php echo $row["appointmentID"]; ?></td>
<td align="center"><?php echo $row["datetime"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center">
<a href="http://localhost/project/cancel.php?appointmentID=<?php echo $row["appointmentID"]; ?>">Cancel</a>
</td>
<td align="center">
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>