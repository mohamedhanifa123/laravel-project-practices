	    <?php
		
		include "dbc.php";
		session_start();
		if(isset($_POST['submit']))
		{
			//extract($_POST);
			//$result=mysqli_query($connect,"insert into form ('name','pwd') values ($name,$pwd)");
			$myusername=mysqli_real_escape_string($connect,$_POST['username']);
			$mypassword=mysqli_real_escape_string($connect,$_POST['password']);
			//$sql="select * FROM formdata WHERE username='$myusername'and password='$mypassword'";
			//result1=mysqli_query($connect,$sql);
			//$row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
			
			$sql = "SELECT * FROM formdata WHERE name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  
		
			$count=mysqli_num_rows($result);
			print_r($row);
			//exit;
			if($count==1)
			{
				
			
				$_SESSION['login_user']=$myusername;
			
				header("location:welcome.php");
			}else{
				$error="your login name or password is invalid";
				}
		}
		
		
		?>
		

<!DOCTYPE html>

<html>
	<head>
	
	<title> title page </title>
	<style type="text/css">
	body{
		font-family:arial,helvetica,sans-serif;
		font-size:14px;
	}
	label
	{
		font-weight:bold;
		width:100px;
		font-size:14px;
		
	}
	box
	{
		border:#666666 solid 1px;
	}
	</style>
	</head>
	
	<body bgcolor="#FFFFFF">
	<div align="center">
	<div style="width:300px;border:solid 1px #333333;"align="left">
	<div style="background-color:#333333;>
	<b>login</b> </div>
	<div style="margin:30px">
	

	  <form method="post" name="application_form" action="#">
	<lable>  username: </lable> <input type="text" name="username" class="box"/></br> </br>
	<lable>Password: </lable><input type="password" name="password" class="box"/></br>
	  <input type="submit" value="Submit" name="submit">
	  
	  </form>
	  <div style="font-size:11px;color:#cc0000; margin-top:10px;"> <?php echo $error;?>
	  </div>
	  </div>
	  </div>
	  </div>
	  
	
	  </body>

</html>