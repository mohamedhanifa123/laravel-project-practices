<!DOCTYPE html>
<html>
<head>
<title> exercises </title>
</head>
<body>
<h1> This is my php exercises </h1>

	<?php
	 echo "hello";
	 $var="Welcome";
	 echo "</br>";
	 
	 echo "$var";
	 function mytest(){
		 static $x=0;
		 echo $x;
		 $x++;
	 }
	 mytest();
	 echo "</br>";
	 mytest();
	 echo "</br>";
	 mytest();
	 echo "</br>";
	 
	 //integer
	 
	 $a=1234;
	 
	 var_dump($a);
	 echo "</br>";
		
		$cars=array("volvo","BMW","toyota");
		var_dump($cars);


	
	?>
	
	
	<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>


	<form method="post" action="exercise.php">
	name:<input type="text" name="fname">
	<input type="submit">
	<?php
	 if($_SERVER["REQUEST_METHOD"]=="POST");
	 {
		 $name=$_POST['fname'];
		 if(empty($name));
		 {
			 echo "name is empty";
		 }
		 else
		 { 
		echo "$name";
		 }
	 }
	 ?>
	 <?php
	 //define variables are set to empty values
		$nameErr=$emailErr=$genderErr=$websiteErr="";
		$name=$email=$gender=$website=$comment="";
		if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if(empty($_POST["name"])){
				$nameErr="Name is required";
			}else{
				$name=test_input($_POST["name"]);
			}
			
			if(empty($_POST["email"])){
				$emailErr="email is required";
			}else{
				$email=test_input($_POST["email"])



?>

</body>
</html>