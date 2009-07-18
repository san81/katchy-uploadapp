KatchyMedia <?php echo $_GET['forUser']; ?> Login
<form name='loginForm' action="" onSubmit="checkUser();return false"; method="post">	
<input type=hidden name="userType" >	
		<table>
			<tr>
				<td colspan=3>
					<div id='errors'></div>
				</td>
			</tr>
			<tr>
				<td>Login</td>
				<td>:</td>
				<td><input type=text name=username></td>				
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type=password name=password></td>				
			</tr>
			<tr>
				<td colspan=3 align="center"><input type=submit value="Login"></td>				
			</tr>
		</table>
</form>