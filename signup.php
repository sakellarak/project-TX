<?php
	$host = "localhost";
	$username = "root";
	$pass = "";
	$con = mysqli_connect($host, $username, $pass, "project");
	
?>

<div class="add-area">
	<form action="" method="POST">
		<input type="text" name="name" placeholder="name">
		<input type="text" name="password" placeholder="password">
		<input type="text" name="userID" placeholder="userID">
		<input type="text" name="email" placeholder="email">
		<input type="text" name="telephonenumber" placeholder="telephonenumber">
		<input type="text" name="address" placeholder="address">
		<input type="text" name="paymentID" placeholder="paymentID">
		<input type="submit" value="submit" name="add">
	</form>
</div>

<?php

if( isset( $_POST['add'] )){
	
	$name=$_POST['name'];
	$password=$_POST['password'];
	$userID=$_POST['userID'];
	$email=$_POST['email'];
	$telephonenumber=$_POST['telephonenumber'];
	$address=$_POST['address'];
	$paymentID=$_POST['paymentID'];
	
	$sql = "INSERT INTO customer (name,passwrd,userID,email,telephonenumber,address,paymentID) VALUES ('$name','$password','$userID','$email','$telephonenumber','$address','$paymentID')";
	mysqli_query($con, $sql);
	

}
?>