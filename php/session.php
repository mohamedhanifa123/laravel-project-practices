<?php
include('dbc.php');
session_start();
$user_check=$_SESSION['login.user'];
$ses_sql=mysqli_query($connect,"select username from adminn where username='$user_check'");
$row=mysqli_fetch array($ses_sql,MYSQLI_ASSOC);
$login_session=$row['username'];
if(!isset($_SESSION['login_user']))
{
	header("location:form.php");
	die();
}
?>