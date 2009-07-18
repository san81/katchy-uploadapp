<?php
session_start();
include('../connect.php');
if(!isset($_SESSION['userInSession'])) die('user not logged in');

$query = "SELECT * FROM users where usertype='USER'";
$result_set_obj = mysql_query($query);
$result_set = mysql_fetch_array($result_set_obj);
$i=0;
?>
<form name="users">
<table border="0">
<tr><td> USERS  
	<table>	
<?php
while($i<mysql_num_rows($result_set_obj)){
	echo "<tr><td><a href='#' onClick='getUserHospitals($result_set[0])'>".$result_set[1]."</a></td></tr>";
	$result_set = mysql_fetch_array($result_set_obj);
	$i++;
}
?>
</table>
</td>
<td width="20px"></td>
<td valign="top"> HOSPITALS
	<div id="assHosp"></div>
</td>

</tr>

</table>