<?php
	include "connection.php";
	
	if(isset($_POST['submit']))
	{
		$firstname=$_POST['firstname'];
		$user_id=$_POST['user_id']
		$lastname=$_POST['lastname'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		
		$result = mysqli_query($conn, "UPDATE testdata SET firstname='$firstname',lastname='$lastname',
		email='$email',gender='$gender' WHERE id=$user_id");
		if($result=="TRUE")
		{ 
		echo "record update successfully";
		}else
		{
			echo "error:" . $sql . "</br>" .$conn->error;
		} 
	}
	
	if(isset($_GET['id']))
	{
	$user_id=$_GET['id'];
	$sql="SELECT * FROM testdata WHERE 'id=$user_id'";
	$result=mysqli query($conn,$sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$id=$row['id'];
			$firstname=$row['firstname'];
			$lastname=$row['lastname'];
			$gender=$row['gender'];
			$email=$row['email'];
			$password=$row['password'];
		}
		
	?>				
				<form action=" " method="post">
				
				firstname: <input type="text" name="firstname" value="<?php echo $firstname;?>" > </br>
				lastname: <input type="text" name="lastname" value="<?php echo $lastname;?>"> </br>
				gender: <input type="text" name="gender" value="<?php echo $gender;?>"> </br>
				email: <input type="text" name="email" value="<?php echo $email;?>"> </br>
				password: <input type="password" name="password" value="<?php echo $password;?>"> </br>
				<input type="submit" name="submit" value="submit">
				
				
				</form>
