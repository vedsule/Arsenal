<?php

session_start();
if($_SESSION['username_sess']){}
else{
	header('Refresh: 0, url = http://localhost/projects/D_10,12,49,61_Group-9/TSEMini/Startup_page/startup.php');
}


$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABase = 'signupform';
$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABase);
if($con){}
else{ die(mysqli_error($con));}

$filepath = 'FileUpload/'.($_GET['file_id']);
$extension = $_GET['extension'];
$fileid = basename($_GET['file_id']) ;

$download_success = 0;

if (file_exists($filepath)) {

    echo 'file exist';
    echo "<img src='$filepath' width='25%' height=''> " ;
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.$fileid.'"' );
    header('Expires: 0');
    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filepath));
    ob_clean();
    flush();
    readfile($filepath);
    $download_success = 1 ;
    exit;
    
}
else{
    echo 'file does not exist';
}


?>