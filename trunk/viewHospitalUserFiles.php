<?php
session_start();
if(!isset($_SESSION['userInSession'])) die('usernot logged in');
include('connect.php');

$query="select * from documents where hospital_id=".$_SESSION['userIDInSession'];

$result_set = mysql_query($query);

?>
Documents Uploaded by Hospital :  <b><?php echo $_SESSION['userInSession']; ?></b>
<table border=1>
	<tr>
		<td>
			<b>Document Name</b>
		</td>
		<td>
			<b>Upload DateTime</b>
		</td>
		<td>
			<b>Download status</b>
		</td>
	</tr>
<?php
	$i=0;
	while($i<mysql_num_rows($result_set)){
	$current_row = mysql_fetch_array($result_set);
		?>
	<tr>
		<td>
			<?php echo $current_row['document_name']; ?>
		</td>
		<td>
			<?php echo $current_row['uploaded_date']; ?>
		</td>
		<td>
			<?php echo $current_row['download_status']; ?>
		</td>
	</tr>
	<?php
	$i++;
	}
?>
</table>