<?php
include "dbc.php";
if(isset($_POST['submit']))
{
			$myusername=mysqli_real_escape_string($connect,$_POST['name']);
			$mypassword=mysqli_real_escape_string($connect,$_POST['password']);
			$myemail=mysqli_real_escape_string($connect,$_POST['email']);
			$myaddress=mysqli_real_escape_string($connect,$_POST['address']);
			$mymobile=mysqli_real_escape_string($connect,$_POST['mobile']);
			$sql = "INSERT INTO formdata (name,password,email,address,mobile)
					VALUES ('$myusername', '$mypassword', '$myemail','$myaddress','	$mymobile')";
if ($connect->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $connect->error;
}

$connect->close();
}

?>
<?php
	include "dbc.php";
	if(isset($_POST['submit']))
	{
		$myusername=mysqli_real_escape_string($connect,$_POST['name']);
		$mypassword=mysqli_real_escape_string($connect,$_POST['password']);
		$myemail=mysqli_real_escape_string($connect,$_POST['email']);
		$myaddress=mysqli_real_escape_string($connect,$_POST['address']);
		$mymobile=mysqli_real_escape_string($connect,$_POST['mobile']);
		$sql="INSERT INTO formdata(name,password,email,address,mobile)
		VALUES('$myusername','$mypassword','$myemail','$myaddress','$mymobile')";
		if($connect->query($sql)===true){
			echo "new record created successfully";
		}
		else{
			echo "Error:" . $sql . "<br>" .$connect->error;
		}
		$connect->close();
	}?>


<!DOCTYPE html>
<html>
<head>
<title> registration form </title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container" align="center">
<h2 align="center"> Registration Form </h2>
</div>

<div>
	<form method="post" name="register" action=" " align="center">
	
	<lable> username: </lable> <input type="text" name="name"> </br>
	<lable> Email: </lable> <input type="text" name="email"> </br>
	<lable> address: </lable> <input type="text" name="address"> </br>
	<lable> mobile: </lable> <input type="text" name="mobile"> </br>
	<lable> password: </lable> <input type="password" name="password"> </br>
	<input type="submit" name="submit" value="submit">
	</form>
</div>


</body>
</html>