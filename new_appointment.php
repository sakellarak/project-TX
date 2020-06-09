<?php
	$host = "localhost";
	$username = "root";
	$pass = "";
	$con = mysqli_connect($host, $username, $pass, "project", "3308");
?>

<?php
$query = "select appointmentID, datetime from appointment where new_appointment = 1";

$result = mysqli_query($con, $query);

if ( mysqli_num_rows($result) > 0) {
	echo "New Appointment Applications Found:<br>";
	while( $row = mysqli_fetch_assoc($result) ) {
    echo "Appointment ID: " . $row["appointmentID"]. " - Date And Location: " . $row["datetime"];
  }
} 
else {
  echo "There Are No New Appointment Applications";
}
mysqli_close($con);
?>

