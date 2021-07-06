<!DOCTYPE html>
<html>
<body>

<?php
session_start();
include "dbc.php";
$user=$_SESSION['login_user'];
$sql = "SELECT * from formdata where name='$user'";
$result = mysqli_query($connect,$sql);
      
	  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  
		
			$count=mysqli_num_rows($result);
			//print_r($row);

if($count != 0) {
    // output data of each row
   // foreach($row as $sk => $s) {
        echo "<br>  - Name: ". $row["name"]. " email:" . $row["email"] . "<br>";
    //}
} else {
    echo "0 results";
}

$connect->close();
?>

</body>
</html>