<?php
session_start();
if(!isset($_SESSION['userInSession'])) die('user not logged in');

 ?>
 <form action="uploadFiles.php" method="post" enctype="multipart/form-data">
Click the Browse button to find the file you wish to upload
<input type="file" name="fileToUpload">
<input type="hidden" name="hName" value="<?php echo $_SESSION['userInSession']; ?>">
<INPUT TYPE="submit" name="upload" value="upload">
</form>

