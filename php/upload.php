<?php
  $servername="localhost";
  $username="root";
  $password=" ";
  $dbname="image_upload";
  $conn=new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error)
  {
	  die("connection failed :" .$conn->connect_error);
  }
  
  ?>
  
  <?php
$servername="localhost";
$username="root";
$password=" ";
$dbname="page1";

//create connection
$conn=new mysqli($servername,$usernamme,$password,$dbname);

//check connection
if($conn->connect_error)
{
	die("connection failed:" .$conn->connect_error)
}else{
	echo "connect successfully";
}
?>