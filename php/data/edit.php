<?php
// include database connection file
include("connection.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['submit']))
{
	

	$id=$_POST['id'];
	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];


	// update user data
	$result = mysqli_query($conn, "UPDATE sampletable SET name='$name',email='$email',gender='$gender' WHERE id=$id");
	header("Location: index.php");

	
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM sampletable WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$gender = $user_data['gender'];
	$email = $user_data['email'];
}
?>



<html>
<head>
	<title>Edit User Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>

	<form name="update_user" method="post" action="edit.php">
	<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
		<table border="0">
			<tr>
				
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?> > </td>
			</tr>
			<tr>
				<td>gender</td>
				<td><input type="text" name="gender" value=<?php echo $gender;?> > </td>
			</tr>
			<tr>
				<td>email</td>
				<td><input type="text" name="email" value=<?php echo $email;?> > </td>
			</tr>
			<tr>
			
				<td><input type="submit" name="submit" value="submit"></td>
			</tr>
		</table>
	</form>
</body>
</html>