<?php
session_start();
include('connect.php');

$username=$_POST['username'];
$password=$_POST['password'];

$query = "select * from users where username='$username'";
$result_set_obj = mysql_query($query);
if(mysql_num_rows($result_set_obj)==0){
	echo "No user Exists";
}else{
		$result_set = mysql_fetch_array($result_set_obj);
		if($result_set['password']==$password){
			$_SESSION['userInSession']=$result_set['username'];
			echo $result_set['usertype'];
		}
	}
?>