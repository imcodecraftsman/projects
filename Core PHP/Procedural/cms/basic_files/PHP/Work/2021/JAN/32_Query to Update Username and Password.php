<?php
include "functions.php";
$conn = mysqli_connect('localhost','root','','loginapp');


if (isset($_POST['submit'])) {

	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];


	$query = "UPDATE users SET username = '$username' ,password = '$password' WHERE id = $id";
	$result = mysqli_query($conn,$query);

	if (!$result) {
		die("Query Failed". mysqli_error($conn));	
	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Query to Update Username and Password</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

<div class="container" style="padding-top: 64px;">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<form action="32_Query to Update Username and Password.php" method="post">
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" name="username" id="username" class="form-control" placeholder="Enter Username" required="true" >
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required="true">
				</div>
				<div class="form-group">
					<label for="id">Select Id</label>
					  <select class="form-control" name="id" id="id" required="true" >
					  	<option value="">Select Id</option>
					  	<?php SelectData(); ?>
					  </select>
				</div>
				<hr>
				<input type="submit" name="submit" value="Update" class="btn btn-primary">
			</form>
		</div>
		<div class="col-sm-4"></div>
	</div>
	
</div>

</body>
</html>