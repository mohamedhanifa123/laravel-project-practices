<?php

	include("connection.php");

	$user_id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM testdata WHERE id=$user_id");


header("Location:view.php");
?>