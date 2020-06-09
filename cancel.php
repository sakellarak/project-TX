<?php
$host = "localhost";
$username = "root";
$pass = "";
$con = mysqli_connect($host, $username, $pass, "project");
$id = $_GET['appointmentID'];
$query = "SELECT * from appointment where appointmentID='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Appointment Canceled</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h1>Appointment Canceled</h1>
<?php
$update="DELETE FROM appointment WHERE appointmentID = $id ";
mysqli_query($con, $update) or die(mysqli_error());
?>
</div>
</div>
</body>
</html>