<!DOCTYPE html>

<html>
	<head>
	
	<title> new form </title>
	
	</head>
	
	<body>

	  <form method="post" name="application_form" action="#">
	  Name: <input type="text" name="name"/>
	  Password:<input type="password" name="pwd"/>
	  <input type="submit" value="Send" name="submit">
	  
	  </form>
		<?php
		
		include "dbc.php";
		if (isset($_POST[submit]))
		{
			extract($_POST);
			$result=mysql_query(insert into formdata('name','pwd')values("$name","$pwd");
			
			if($result)
			{
				echo"success";
			}else
			{
				echo"failed";
			}
			
			if($name=="robo" && $pwd=="123")
			{
				session_start();
				$_SESSION['id']=201;
				header("location:welcome.php");
			}else{
				echo "mismatch";
				}
		}
		
		
		
		
		
		?>
		
	  
	
	
	
	</body>

</html>