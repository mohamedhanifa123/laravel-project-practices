<!DOCTYPE html>
<html>
<head>
<title> send an email </title>
</head>
<body>
	<center style="background-color:grey">
	<h4 class="send-notification"> </h4>
		<form action=" " method="POST">
		<h1> Send an Email </h1>
		<label> name </label>
		<input name="uname" type="text" placeholder="Enter Name">
		<br> <br>
		<label> Email </label>
		<input name="Email" type="text" placeholder="Enter Email">
		<br> <br>
		<label> Subject </label>
		<input name="Subject" type="text" placeholder="Enter Subject">
		<br> <br>
		<p>Message</p>
		<textarea name="message" rows="5" cols="40" placeholder="type message"> </textarea>
		<br> <br>
		<input type="submit" name="submit" value="submit">
		</form>
	</center>
	<?php
	if(isset($_POST['submit']))
	{
		include "sendemail.php";
	}
	?>
	

	
</body>
</html>