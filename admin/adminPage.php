<?php
session_start();
if(isset($_POST['username']) && isset($_POST['password'])) {
$username=$_POST['username'];
$password=$_POST['password'];
if($username=='Admin' && $password=='Sreenivas')
{
	$_SESSION['userInSession']='Admin';
?>
<html>
	<head>	
		<title>Katchy Login</title>
		
		<script language="JavaScript" type="text/javascript" src="../scripts/adminjs.js"></script>
		<script language="JavaScript" type="text/javascript" src="../scripts/zxml.js"></script>
		<script language="JavaScript" type="text/javascript" src="../scripts/sendRequest.js"></script>
	</head>
	<body>
		<table border=1 height=100% width=100%>
			<tr height=30%>
				<td colspan=2> Welcome <?php echo $_SESSION['userInSession']; ?> </td>
			<tr>
			<tr height=70%>
				<td width=20%>
					<ul>
						<li><a href="#" onClick="createUserForm()"> Create User</a></li>						
						<li><a href="#" onClick="createHospitalForm()"> Create Hospital</a></li>
						<li><a href="#" onClick="viewUsers()"> View User</a></li>
						<li><a href="#" onClick="viewHospitals()"> View Hospitals</a></li>						
						<li><a  href="#" onClick="associate()"> Associate</a></li>
						<li><a  href="../logout.php"> Logout</a></li>
					<ul>
				</td>
				<td width=80%>
					<div id="workingDiv">
					</div>
				</td>
			</tr>
		</table>
	</body>
</html>
<?php
}	
}else{
	echo "<script>window.location='../index.php';</script>";
}
?>