KatchyMedia  <?php echo $_GET['usertype'];?> Creation
<form name='createUserForm' action="" onSubmit="createUser();return false"; method="post">	
<input type=hidden name="userType" value="<?php echo $_GET['usertype'];?>" >	
		<table>
			<tr>
				<td colspan=3>
					<div id='errors'></div>
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type=text name=username></td>				
			</tr>
			<tr>
				<td>password</td>
				<td>:</td>
				<td><input type=password name=password></td>				
			</tr>
			<tr>
				<td colspan=3 align="center">
				<input type=submit value="Create">
				</td>				
			</tr>
		</table>
</form>