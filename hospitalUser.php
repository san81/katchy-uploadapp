<?php
session_start();
if(!isset($_SESSION['userInSession'])) die('usernot logged in');
?>
<html>
	<head>	
		<title>Katchy Hospital User Logged in</title>
	
		<script language="JavaScript" type="text/javascript" src="./scripts/indexjs.js"></script>
		<script language="JavaScript" type="text/javascript" src="./scripts/zxml.js"></script>
		<script language="JavaScript" type="text/javascript" src="./scripts/sendRequest.js"></script>
	</head>
	<body>
		<table border=1 height=100% width=100%>
			<tr height=30%>
				<td colspan=2> Welcome <?php echo $_SESSION['userInSession']; ?> </td>
			<tr>
			<tr height=70%>
				<td width=20%>
					<ul>
						<li><a href="hospitalUser.php"> Upload Files</a></li>						
						<li><a href="logout.php"> Logout</a></li>
					<ul>
				</td>
				<td width=80%>
					<div id="loginDiv">
						<iframe src="uploadFilesForm.php"></iframe>
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>