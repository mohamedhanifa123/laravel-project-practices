
<?php
	include "connection.php";
	error_reporting(0);
	$query="select * from sample";
	$data=mysqli_query($conn,$query);
	$total=mysqli_num_rows($data);
	if($total!=0)
	{ 
		while($result=mysqli_fetch_array($data))
		{
			echo "
			<tr>
			<td>".$result['id']."</td>
			<td>".$result['name']."</td>
			<td>".$result['gender']."</td>
			<td>".$result['email']."</td>
			<td> <a href='update.php? n=$result[id]&un=$result[name]&ug=$result[genter]&em=$result[email]'>edit</td>
			<td> <a href='update.php? n=$result[id]&un=$result[name]&ug=$result[genter]&em=$result[email]'>delete</td>
			</tr> "
		}
	}
	?>

<!DOCTYPE html>
<html>
<head>
	<title> sample table </title>
</head>
<body>
<div>
<center>
	<h2> Customer Information </h2>
	<table border="2" cellspacing="7">
	<tr>
	<th>id</th>
	<th>name</th>
	<th>gender</th>
	<th>email</th>
	<th colspan="2" align="center">operation</th>
	
	</tr>
	<tr>
	<td>1</td>
	<td>abc</td>
	<td>m</td>
	<td>abc@gmail.com</td>
	<td> <input type="submit" name="submit" value="edit"></td>
	<td> <input type="submit" name="submit" value="delete"></td>
	</tr>
	<tr>
	<td>2</td>
	<td>aaa</td>
	<td>m</td>
	<td>aaa@gmail.com</td>
	<td> <input type="submit" name="submit" value="edit"></td>
	<td> <input type="submit" name="submit" value="delete"></td>
	</tr>
	<tr>
	<td>3</td>
	<td>bbb</td>
	<td>m</td>
	<td>bbb@gmail.com</td>
	<td> <input type="submit" name="submit" value="edit"></td>
	<td> <input type="submit" name="submit" value="delete"></td>
	</tr>
	<tr>
	<td>4</td>
	<td>ccc</td>
	<td>m</td>
	<td>ccc@gmail.com</td>
	<td> <input type="submit" name="submit" value="edit"></td>
	<td> <input type="submit" name="submit" value="delete"></td>
	</tr>
	<tr>
	<td>5</td>
	<td>ddd</td>
	<td>m</td>
	<td>ddd@gmail.com</td>
	<td> <input type="submit" name="submit" value="edit"></td>
	<td> <input type="submit" name="submit" value="delete"></td>
	</tr>
	<tr>
	<td>6</td>
	<td>eee</td>
	<td>m</td>
	<td>eee@gmail.com</td>
	<td> <input type="submit" name="submit" value="edit"></td>
	<td> <input type="submit" name="submit" value="delete"></td>
	</tr>
	<tr>
	<td>7</td>
	<td>fff</td>
	<td>m</td>
	<td>fff@gmail.com</td>
	<td> <input type="submit" name="submit" value="edit"></td>
	<td> <input type="submit" name="submit" value="delete"></td>
	</tr>
	<tr>
	<td>8</td>
	<td>ggg</td>
	<td>m</td>
	<td>ggg@gmail.com</td>
	<td> <input type="submit" name="submit" value="edit"></td>
	<td> <input type="submit" name="submit" value="delete"></td>
	</tr>
	<tr>
	<td>9</td>
	<td>hhh</td>
	<td>m</td>
	<td>hhh@gmail.com</td>
	<td> <input type="submit" name="submit" value="edit"></td>
	<td> <input type="submit" name="submit" value="delete"></td>
	</tr>
	<tr>
	<td>10</td>
	<td>iii</td>
	<td>f</td>
	<td>iii@gmail.com</td>
	<td> <input type="submit" name="submit" value="edit"></td>
	<td> <input type="submit" name="submit" value="delete"></td>
	</tr>
	
	</table>
	</center>
	</div>

</body>

</html>