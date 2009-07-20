<?php
session_start();
include('connect.php');
if(!isset($_SESSION['userInSession'])) die('user not logged in');

if(!isset($_GET['user']))
	$username=$_SESSION['userInSession'];
else
	$username=$_GET['user'];
	
$query = "select * from hospitals where sno in (select hospitalid from link where userid=(select sno from users where username='$username'))";
$result_set_obj = mysql_query($query);
$result_set = mysql_fetch_array($result_set_obj);
$i=0;
?>

<table border="0">

<tr><td> Your hospitals 
<table>
<?php
while($i<mysql_num_rows($result_set_obj)){
	echo "<tr><td><a href='#' onClick='listFiles(\"$result_set[1]\")'>".$result_set[1]."</a></td></tr>";
	$result_set = mysql_fetch_array($result_set_obj);
	$i++;
}
?>
</table>
</td>
<td width="20px"></td>
<td valign="top"> Files
	<div id="fileList"></div>
</td>

</tr>
</table>
