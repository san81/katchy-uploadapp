<?php
session_start();
include('../connect.php');
if(!isset($_SESSION['userInSession'])) die('user not logged in');

$username=$_SESSION['userInSession'];

$query = "select * from users where usertype='USER'";
$result_set_obj = mysql_query($query);
$result_set = mysql_fetch_array($result_set_obj);
$i=0;
?>

<table border="0">

<tr><td> All Users
<table>
<?php
while($i<mysql_num_rows($result_set_obj)){
	echo "<tr><td><a href='#' onClick='listAssignedHospitals(\"$result_set[1]\")'>".$result_set[1]."</a>&nbsp;&nbsp;<a href='#' onClick='delUser(\"$result_set[1]\")'>del</a></td></tr>";
	$result_set = mysql_fetch_array($result_set_obj);
	$i++;
}
?>
</table>
</td>
<td width="20px"></td>
<td valign="top"> Associate Hospitals
	<div id="hospitalsList"></div>
</td>

</tr>
</table>
