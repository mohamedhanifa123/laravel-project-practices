
<?php
	include "connection.php";
	error_reporting(0);
	$n=$_GET['n'];
	$un=$_GET['un'];
	$ug=$_GET['ug'];
	$em=$_GET['em'];
	?>
			

<!DOCTYPE html>
<html>
<head>
	<title> sample table </title>
</head>
<body>
<div style="backgrount-color:grey">
<center style="backgrount-color:blue">
	<h2> Customer Information </h2>
	<form action=" " method="GET">
	
	<table border="2"  bgcolor="black" cellspacing="20">
	<tr>
	<td>id</td>>    
	<td> <input type="text" value="<?php echo"$n"?>" name="id" required> </td>
	</tr>
	
	<tr>
	<td>name</td>>    
	<td> <input type="text" value="<?php echo "$un"?>"name="name" required> </td>
	</tr>
	
		
	<tr>
	<td>gender</td>>    
	<td> <input type="text" value="<?php echo "$ug"?>"name="gender" required> </td>
	</tr>
	
	<tr>
	<td>email</td>>    
	<td> <input type="text" value="<?php echo "$em"?>"name="email" required> </td>
	</tr>
	
	
	/* <th>name</th>
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
	</tr> */
	
	</table>
	</center>
	</div>

</body>

</html>