<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<?php
		$selectedID = 3; //hardcoded ID epagelmatia
		$host = "localhost";
		$username = "root";
		$pass = "";
		$con = mysqli_connect($host, $username, $pass, "project");
	?>
	
<body>

	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  		<a class="navbar-brand" >eFreelance</a> 
	</nav>

	<div class="container">
	<br>  <h1><p class="text-center">Professional Hub</a></p></h1>
	<hr>

	<div class="row">
	<aside class="col-sm-6">
	<p>Enterprise Info</p>

	<div class="card">
		<article class="card-group-item">
			<header class="card-header">
				<h6 class="title">Enterprise Name </h6>
			</header>
			<div class="filter-content">
				<div class="card-body">
					<?php 
					$result = mysqli_query($con,"SELECT jobName FROM professional where userID = $selectedID");
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
						echo $row["jobName"];
						}
					}
					?>
				</div>
			</div>
		</article> <!-- end of name -->
		
		<article class="card-group-item">
			<header class="card-header">
				<h6 class="title">Entreprise Description </h6>
			</header>
			<div class="filter-content">
				<div class="card-body">
				
				<?php 
					$result = mysqli_query($con,"SELECT jobDescription FROM professional where userID = $selectedID");
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
						echo nl2br($row["jobDescription"]);
						}
					}
				?>
				
				<div class="card-body text-right">
				<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#descModal" data-whatever="@getbootstrap">Edit description</button>
				</div>

				<div class="modal fade" id="descModal" tabindex="-1" role="dialog" aria-labelledby="descModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="descModalLabel">Update your enterprise description</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="" method="POST">
						<div class="modal-body">
							
							<div class="form-group">
								<label for="message-text" class="col-form-label">Enter new description:</label>
								
								<textarea  class="form-control" name="change_desc" id="change_desc"> </textarea>
							</div>
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<input type="submit" class="btn btn-primary" value="Update" name="submitUpdateDesc">
						</div>
					</form>
					
				</div>
				<?php
				if( isset( $_POST['submitUpdateDesc'] )){
					$change_desc=$_POST['change_desc'];
					$sql = "UPDATE professional SET jobDescription='$change_desc' WHERE userID = $selectedID";
					mysqli_query($con, $sql);
					echo "<meta http-equiv='refresh' content='0'>";
				}
				?>
				</div>
		</article> <!-- end of desc -->
	</div> 
	</aside> 
	
	
	<aside class="col-sm-6">
	<p>Area of Operations</p>
	
	<div class="card">
		<article class="card-group-item">
			<header class="card-header"><h6 class="title">Address </h6></header>
			<div class="filter-content">
				<div class="card-body">
				
				<?php 
					$result = mysqli_query($con,"SELECT address,rangee FROM professional where userID = $selectedID");
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
						echo $row["address"] . "<br>range: " . $row["rangee"] . " km";
						}
					}
				?>

				</div>  <!-- list-group .// -->
			</div>
		</article> <!-- end of area -->

		<article class="card-group-item">
			<header class="card-header">
				<h6 class="title">Working Hours </h6>
			</header>
			<div class="filter-content">
				<div class="card-body">
				
				<?php 
					$result = mysqli_query($con,"SELECT workingHours FROM professional where userID = $selectedID");
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
						echo nl2br($row["workingHours"]);
						}
					}
				?>
				
				<div class="card-body text-right">
				<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#aoModal" data-whatever="@getbootstrap">Edit area and working hours</button>
				</div>

				<div class="modal fade" id="aoModal" tabindex="-1" role="dialog" aria-labelledby="aoModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="aoModalLabel">Update your area and working hours</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="" method="POST">
						<div class="modal-body">
							
							<div class="form-group">
								<label for="message-text" class="col-form-label">Enter new address:</label>
								
								<input  class="form-control" name="change_address" id="change_address"> </input>						
							
								<label for="message-text" class="col-form-label">Enter new range:</label>
								
								<input  class="form-control" name="change_range" id="change_range"> </input>
							
								<label for="message-text" class="col-form-label">Enter new working hours:</label>
								
								<input  class="form-control" name="change_wHours" id="change_wHours"> </input>
							</div>
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<input type="submit" class="btn btn-primary" value="Update" name="submitUpdateAO">
						</div>
					</form>
					
				</div>
				<?php
				if( isset( $_POST['submitUpdateAO'] )){
					$change_address=$_POST['change_address'];
					$change_range=$_POST['change_range'];
					$change_wHours=$_POST['change_wHours'];
					$sql = "UPDATE professional SET address='$change_address', rangee='$change_range', workingHours='$change_wHours' WHERE userID = $selectedID";
					mysqli_query($con, $sql);
					echo "<meta http-equiv='refresh' content='0'>";
				}
				?>
				</div>
		</article> <!-- end of hours -->
	</div> <!-- card.// -->
	</aside> <!-- col.// -->


	<aside class="col-sm-6">
	<p>Pricing Info</p>

	<div class="card">
		<article class="card-group-item">
			<header class="card-header">
				<h6 class="title">Price</h6>
			</header>
			<div class="filter-content">
				<div class="card-body">
				
				<?php 
					$result = mysqli_query($con,"SELECT charge FROM professional where userID = $selectedID");
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
						echo $row["charge"] . " €";
						}
					}
				?>

				</div>  <!-- list-group .// -->
			</div>
		</article> <!-- card-group-item.// -->
		<article class="card-group-item">
			<header class="card-header">
				<h6 class="title">Charging type</h6>
			</header>
			<div class="filter-content">
				<div class="card-body">
				
				<?php 
					$result = mysqli_query($con,"SELECT paymentMethod FROM professional where userID = $selectedID");
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
						echo nl2br($row["paymentMethod"]);
						}
					}
				?>
				
				<div class="card-body text-right">
				<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#priceModal" data-whatever="@getbootstrap">Edit pricing and charging type</button>
				</div>

				<div class="modal fade" id="priceModal" tabindex="-1" role="dialog" aria-labelledby="priceModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="priceModalLabel">Update pricing and charging type</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<form action="" method="POST">
						<div class="modal-body">
							
							<div class="form-group">
								<label for="message-text" class="col-form-label">Enter new price:</label>
								
								<input  class="form-control" name="change_price" id="change_price"> </input>						
							
								<label for="message-text" class="col-form-label">Enter charging type:</label>
								
								<input  class="form-control" name="change_cType" id="change_cType"> </input>
							</div>
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<input type="submit" class="btn btn-primary" value="Update" name="submitUpdatePrice">
						</div>
					</form>
					
				</div>
				<?php
				if( isset( $_POST['submitUpdatePrice'] )){
					$change_price=$_POST['change_price'];
					$change_cType=$_POST['change_cType'];
					$sql = "UPDATE professional SET charge='$change_price', paymentMethod='$change_cType' WHERE userID = $selectedID";
					mysqli_query($con, $sql);
					echo "<meta http-equiv='refresh' content='0'>";
				}
				?>

				</div> <!-- card-body.// -->
			</div>
		</article> <!-- card-group-item.// -->
	</div> <!-- card.// -->



		</aside> <!-- col.// -->




		<aside class="col-sm-6">
	<p>Recent Customers and Reviews</p>

	<div class="card">
		<article class="card-group-item">
			<header class="card-header">
				<h6 class="title">Recent Customers</h6>
			</header>
			<div class="filter-content">
				<div class="card-body">
				


				</div> <!-- card-body.// -->
			</div>
		</article> <!-- card-group-item.// -->
		<article class="card-group-item">
			<header class="card-header">
				<h6 class="title">Recent Reviews</h6>
			</header>
			<div class="filter-content">
				<div class="card-body">
					


				</div> <!-- card-body.// -->
			</div>
		</article> <!-- card-group-item.// -->
	</div> <!-- card.// -->



	</aside> <!-- col.// -->
	

	</div> <!-- row.// -->

	</div> 
	<!--container end.//-->


	</article>
</body>
</html>