<?php

	include "connection.php";
	 
	 $sql="SELECT * FROM testdata";
	 $result=mysqli_query($conn,$sql);


?>


<!DOCTYPE html>

<html>
<head>
<title> viewpage </title>

</head>
<body>
<table border="1" align="center">
	
	<thead>
	<tr>
	<th>id</th> <th>firstname</th> <th>lastname</th> <th>gender</th> <th>email</th>  <th>password</th> 
	</tr>
	
	</thead>
	<tbody>
	<?php
	
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			?>
	
					<tr>
					<td> <?php echo $row['id']; ?> </td>
					<td> <?php echo $row['firstname']; ?> </td>
					<td> <?php echo $row['lastname']; ?> </td>
					<td> <?php echo $row['gender']; ?> </td>
					<td> <?php echo $row['email']; ?> </td>
					<td> <a class="btn btn-info" href="update.php? id= <?php echo $row['id']; ?>">edit|
					<a class="btn btn-danger" href="delete1.php? id= <?php echo $row['id']; ?>">delete</td>
					
					</tr>
		<?php } 
	}
	?>
	
					
					</tbody>

	
	
	 
	
	
	

</body>

</html>