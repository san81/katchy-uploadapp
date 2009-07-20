<?php
session_start();

if(!isset($_SESSION['userInSession'])) die('user not logged in');

$hospitalName=$_GET['hospitalName'];

$target_path = "alluploads/".$hospitalName."/";
if(!file_exists($target_path)){
	echo "No Files uploaded";
}else if(is_dir($target_path)){
			// directory path can be either absolute or relative
		// open the specified directory and check if it's opened successfully
		if ($handle = opendir($target_path)) {

		   // keep reading the directory entries 'til the end
		   while (false !== ($file = readdir($handle))) {

			  // just skip the reference to current and parent directory
			  if ($file != "." && $file != "..") {
				 if (is_dir("$target_path/$file")) {
					// found a directory, do something with it?
					echo "[$file]<br>";
				 } else {
					// found an ordinary file
					//$lastAccessTime = date("F d Y H:i:s.", filectime($file));
					echo "<a href='getSelectedFile.php?fileName=$file&hospitalName=$hospitalName'>$file</a>&nbsp;&nbsp;<br>";
				 }
			  }
		   }

		   // ALWAYS remember to close what you opened
		   closedir($handle);
		}
}
?>