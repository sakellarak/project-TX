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


<div class="add-area">
	<form action="" method="POST">
		<label for="name"><b>Name</b></label>
		<input type="text" name="name" placeholder="Name">
		
		<br>
		<br>
		
		<label for="name"><b>Password</b></label>
		<input type="text" name="password" placeholder="Password">
		
		<br>
		<br>
		
		<label for="name"><b>Email</b></label>
		<input type="text" name="email" placeholder="E-mail">
		
		<br>
		<br>
		
		<label for="name"><b>Telephone number</b></label>		
		<input type="text" name="telephonenumber" placeholder="Telephone Number">
		
		<br>
		<br>
		
		<label for="name"><b>Address</b></label>
		<input type="text" name="address" placeholder="Address">
		
		<br>
		<br>
		
				<label for="name"><b>Range</b></label>

		<input type="text" name="rangee" placeholder="Range Eksuphrethshs">
		
		<br>
		<br>
		
		<label for="name"><b>Working Hours</b></label>
		<input type="text" name="workingHours" placeholder="Working Hours">
		
		<br>
		<br>
		
				<label for="name"><b>Charge</b></label>
				<input type="text" name="charge" placeholder="Charge per Hour">
		
		<br>
		<br>
		
				<label for="name"><b>Payment Method</b></label>

		<input type="text" name="paymentMethod" placeholder="Payment Method">
		<input type="submit" value="submit" name="add">
	</form>
</div>

<?php
if( isset( $_POST['add'] )){
	$i = 1;
	$name=$_POST['name'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$telephonenumber=$_POST['telephonenumber'];
	$address=$_POST['address'];
	$rangee=$_POST['rangee'];
	$workingHours=$_POST['workingHours'];
	$charge=$_POST['charge'];
	$paymentMethod=$_POST['paymentMethod'];
	
	if ( $address == 'lathos'){
		echo "H dieuthinsi den egine apodekti<br>";
		echo "Eisagete ksana ola ta stoixeia kai pathste submit<br>";
		$i = 0;
	}
	if ( $rangee == 'lathos' ){
		echo "To range eksuphrethshs den sumfwnei me thn dieuthinsi<br>";
		echo "Eisagete ksana ola ta stoixeia kai pathste submit<br>";
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
		
	if ( $i == 1 ){
		$sql = "INSERT INTO professional (name,passwrd,email,telephonenumber,address,rangee,workingHours,charge,paymentMethod) VALUES ('$name','$password','$email','$telephonenumber','$address','$rangee','$workingHours','$charge','$paymentMethod')";
		echo "Epituxes Sign Up<br>";
		mysqli_query($con, $sql);
	}
}
?>