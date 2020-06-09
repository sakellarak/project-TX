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
<title>Approved Application</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h1>Application Approved</h1>
<?php
$update="UPDATE appointment SET new_appointment = 0,set_appointment = 1 WHERE appointmentID = $id ";
mysqli_query($con, $update) or die(mysqli_error());
?>
</div>
</div>
</body>
</html>