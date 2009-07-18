<?php
session_start();
include('../connect.php');
if(!isset($_SESSION['userInSession'])) die('user not logged in');

$userid=$_GET['userid'];

$query = "select * from hospitals u left join (select * from link where userid=$userid) l on l.hospitalid=u.sno";
$result_set_obj = mysql_query($query);
$result_set = mysql_fetch_array($result_set_obj);
$i=0;
?>

<table border="0">

<?php
while($i<mysql_num_rows($result_set_obj)){
	if($result_set[4]==null)
		echo "<tr><td>".$result_set[1]."&nbsp;&nbsp;<a href='#' onClick='addLink($userid,$result_set[0])'>Add</a></td></tr>";
	else
		echo "<tr><td>".$result_set[1]."&nbsp;&nbsp;<a href='#' onClick='removeLink($userid,$result_set[0])'>Remove</a></td></tr>";
	$result_set = mysql_fetch_array($result_set_obj);
	$i++;
}
?>
</table>
