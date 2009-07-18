<?php
session_start();
include('../connect.php');
if(!isset($_SESSION['userInSession'])) die('user not logged in');
if(isset($_POST['username']) && isset($_POST['password'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];
	$usertype=$_POST['userType'];
	$query="insert into users (username,password,usertype) values ('$username','$password','$usertype')";
	if(mysql_query($query)==1)
		echo $_POST['userType']." created";
}
?>