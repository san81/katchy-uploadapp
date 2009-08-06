<?php
session_start();
if(!isset($_SESSION['userInSession'])) die('usernot logged in');

include('connect.php');

$fileToUpload_name = $_FILES['fileToUpload']['tmp_name'];
$target_path = "alluploads/".$_SESSION['userInSession']."/";
if(!file_exists($target_path)){
	mkdir($target_path);
}
$target_path = $target_path . basename( $_FILES['fileToUpload']['name']); 


if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['fileToUpload']['name']). 
    " has been uploaded. Please visit us again for uploading content. Thank you ";
} else{
    echo "There was an error uploading the file, please try again, or contact Mr. Sreenivas for clarifications. Email: Sreeni@katchymedia.com!";
}
$query = "insert into documents (hospital_id,document_name) values (".$_SESSION['userIDInSession'].",'".$_FILES['fileToUpload']['name']."') ";

mysql_query($query);
mysql_close();
?>