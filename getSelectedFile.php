<?php
session_start();
if(!isset($_SESSION['userInSession'])) die('user not logged in');

$fileName = $_GET['fileName'];
$target_path = "alluploads/".$_GET['hospitalName']."/";
$file = $target_path.$fileName;

$fileExt = strrchr($contents[$i],'.');

$contentType='image/jpg';

if($fileExt=='jpeg')
	$contentType='image/jpg';
else if($fileExt=='gif')
	$contentType='image/gif';
else if($fileExt=='swf')
	$contentType='application/octet-stream';
else
    $ContentType='text/plain';
	
if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: $contentType');
    header('Content-Disposition: attachment; filename='.basename($file));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
}
?>
