<?php session_start(); ?>
<html>
	<head>	
		<title>Katchy Login</title>
	
		<script language="JavaScript" type="text/javascript" src="./scripts/indexjs.js"></script>
		<script language="JavaScript" type="text/javascript" src="./scripts/zxml.js"></script>
		<script language="JavaScript" type="text/javascript" src="./scripts/sendRequest.js"></script>
	</head>
	<body>
		<table border=1 height=100% width=100%>
			<tr height=30%>
				<td colspan=2> Header </td>
			<tr>
			<tr height=70%>
				<td width=20%>
					<ul>
						<li><a href="#" onClick="getLoginFor('Admin')"> Admin Login</a></li>
						<li><a href="#" onClick="getLoginFor('Hospital')"> Hospital Login</a></li>
						<li><a  href="#" onClick="getLoginFor('User')"> DownloadUser Login</a></li>
					<ul>
				</td>
				<td width=80%>
					<div id="loginDiv">
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>