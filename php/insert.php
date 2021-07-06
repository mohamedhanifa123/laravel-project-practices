<?php
	
	include "connection.php";
	if(isset($_POST['submit']))
	{
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$password=$_POST['password'];
	}
	$sql="INSERT INTO testdata(firstname,lastname,gender,email,password)
	 VALUES('$firstname','$lastname','$gender','$email','$password')"; 
	$result=mysqli_query($conn,$sql);
	if($result==TRUE)
	{
		echo "connect successfully";
	}
	else{
		echo "failed";
	}

?>



<!DOCTYPE html>
<html>
<head> <title> insert data </title>
</head>
<body>

	<form action=" " method="post">
	
	firstname: <input type="text" name="firstname"> </br>
	lastname: <input type="text" name="lastname"> </br>
	gender: <input type="text" name="gender"> </br>
	email: <input type="text" name="email"> </br>
	password: <input type="password" name="password"> </br>
	<input type="submit" name="submit" value="submit">
	
	
	</form>

</body>

</html>

