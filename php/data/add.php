<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>gender</td>
				<td><input name="gender"></td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		//$id = $_POST['id'];
		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];

		// include database connection file
		include("connection.php");
		$sql = "INSERT INTO sampletable(name,gender,email) VALUES('$name','$gender','$email')";

	$data1=mysqli_query($conn,$sql);
	if($data1)
	{
		echo "add successfully";
	}else{
		echo "disconnected";
	}
	 header('location:index.php');
		
		//$result = mysqli_query($conn, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
		//$result = mysqli_query($conn, "SELECT * FROM sampletable");

		// Show message when user added
		//echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>