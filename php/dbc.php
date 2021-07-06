<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
?>

<?php
$servername="localhost";
$username="root";
$password=" ";
$dbname="form";
//create connection
$connet=new mysqli($servername,$username,$password,$dbname);
//check connection
if($connect->connect_error){
	die("connection failed:" .$connect->connect_error);
}

?>