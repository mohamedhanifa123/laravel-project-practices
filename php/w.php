<?php
	//include('session.php');
	?>


<html>
<head> 
<link href="style.css" rel="stylesheet" type="text/css"/>
</head>
	<body>
	<!--<div style="align_centre" class="container">
	 
	 <div class="header">
	   <p style="align_centre">welcome to integrass </p>
	 </div>
	 
		<div class="content1">
		
		<p>PHP - Keep The Values in The Form
To show the values in the input fields after the user hits the submit button, we add a little PHP script inside the value attribute of the following input fields: name, email, and website. In the comment textarea field, we put the script between the <textarea> and </textarea> tags. The little script outputs the value of the $name, $email, $website, and $comment variables. 

Then, we also need to show which radio button that was checked. For this, we must manipulate the checked attribute (not the value attribute for radio buttons):</p>
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC); 
	

		</div>
		
		<div class="content2">
		<p>PHP - Keep The Values in The Form
To show the values in the input fields after the user hits the submit button, we add a little PHP script inside the value attribute of the following input fields: name, email, and website. In the comment textarea field, we put the script between the <textarea> and </textarea> tags. The little script outputs the value of the $name, $email, $website, and $comment variables. 
		</p>
		
		
		</div>
		
		<div class="footer">
		<p> &copy copy rights:2021@integrass
		</div>
		</div> -->
		
	<table>
	<tr>name</tr></br>
	<tr>email</tr></br>
	<tr>address</tr></br>
	<tr>mobile</tr></br>
	<tr>password</tr></br>
	
	</table>
	<?php
	
	
		include "dbc.php";
		session_start();
		
		{
	$myusername=mysqli_real_escape_string($connect,$GET['name']);
	$email=mysqli_real_escape_string($connect,$GET['email']);
	$address=mysqli_real_escape_string($connect,$GET['address']);
	$mobile=mysqli_real_escape_string($connect,$GET['mobile']);
	$password=mysqli_real_escape_string($connect,$GET['password']);
	
	$sql = "SELECT * FROM formdata WHERE name = '$myusername' password = '$mypassword'";
	 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  
		
			$count=mysqli_num_rows($result);
			print_r($row);
	?>
	
	</body>


</html>