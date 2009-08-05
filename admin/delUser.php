<?php
session_start();
include('../connect.php');
if(!isset($_SESSION['userInSession']) && $_SESSION['userInSession']=='Admin') die('user not logged in');

$username=$_GET['userName'];

echo mysql_query("delete from users where username='$username'");

mysql_close();
?>