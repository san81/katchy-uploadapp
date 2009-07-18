<?php
session_start();
include('../connect.php');
if(!isset($_SESSION['userInSession'])) die('user not logged in');

$userid=$_GET['userid'];
$hospitalid=$_GET['hospitalid'];

echo mysql_query("delete from link where userid=$userid and hospitalid=$hospitalid");

?>