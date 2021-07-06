<?php

	include("connection.php");

	$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM testdata WHERE id=$id");


header("Location:insert.php");
?>