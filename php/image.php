<?php
$msg=" ";
if(isset($_POST['submit']))
{
	$filename=$_FILES["filetoupload"]["name"];
	$tmbname=$_FILES["filetoupload"]["tmp_name"];
	$folder="images/".$filename;
	//$db=new mysqli("localhost","root"," ","image_upload");
	//$sql="INSERT INTO image(filename) VALUES('$filename')";
	//mysqli_query($db,$sql);
	if(move_uploaded_file($tmbname,$folder))
	{
		$msg="image upload successfuly";
	}else
	{
		$msg="failed to upload image";
	}
}
//$result=mysqli_query($db,"SELECT * FROM image");
	//header("location:page2.php");

	?>


<!DOCTYPE html>
<html>
<head>

</head>

<body>
<h2 align="center"> IMAGE UPLOAD</h2>
<form method="post" action="" enctype="multipart/form-data" align="center">
	select image to upload:
	<input type="file" name="filetoupload" id="filetoupload"> </br>
	<input type="submit" name="submit" value="upload">
	
	
		

</form>
</body>

</html>