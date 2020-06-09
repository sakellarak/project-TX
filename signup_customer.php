<?php
	$host = "localhost";
	$username = "root";
	$pass = "";
	$con = mysqli_connect($host, $username, $pass, "project");
?>

<html>
<div class="add-area">
<body style="background-color:#e6f7ff;">
<head>



<h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
		</body>
	<form action="" method="POST">
		<label for="name"><b>Name</b></label>
		<input type="text" name="name" placeholder="name">
		
		<br>
		<br>
	
		
		<label for="password"><b>Password</b></label>
		
		
		<input type="text" name="password" placeholder="password">
		<br>
		<br>
		<label for="email"><b>Email</b></label>
		<input type="text" name="email" placeholder="email">
		<br>
		<br>
		<label for="telephonenumber"><b>Telephone number</b></label>
		<input type="text" name="telephonenumber" placeholder="telephonenumber">
		<br>
		<br>
		<label for="address"><b>Address</b></label>
		<input type="text" name="address" placeholder="address">
		<br>
		<br>
		<label for="paymentID"><b>Id of payment</b></label>
		<input type="text" name="paymentID" placeholder="paymentID">
		
		
		<br>
		<input type="submit" value="Register" name="add">
	</form>
</div>
   
<?php
if( isset( $_POST['add'] )){
	$i = 1;
	$name=$_POST['name'];
	$password=$_POST['password'];
	//$userID=$_POST['userID'];
	$email=$_POST['email'];
	$telephonenumber=$_POST['telephonenumber'];
	$address=$_POST['address'];
	$paymentID=$_POST['paymentID'];
	if ( $address == 'lathos'){
		echo "H dieuthinsi den egine apodekti<br>";
		echo "Eisagete ksana ta stoixeia kai pathste submit<br>";
		$i = 0;
	}
	
	if ( strlen($password) > 10 ){
		echo "To password pou dwsate einai polu megalo<br>";
		echo "Eisagete ksana ola ta stoixeia kai pathste submit<br>";
		$i = 0;
	}
	if ( strlen($email) > 20 ){
		echo "To email pou dwsate den egine apodekto<br>";
		echo "Eisagete ksana ola ta stoixeia kai pathste submit<br>";
		$i = 0;
	}
	
	
	if ($i == 1){
		$sql = "INSERT INTO customer (name,passwrd,email,telephonenumber,address,paymentID) VALUES ('$name','$password','$email','$telephonenumber','$address','$paymentID')";
		echo "Epituxes Sign Up<br>";
		mysqli_query($con, $sql);
	}
}
?>
</html>