<?php
session_start();
if($_SESSION['username_sess_admin']){}
else{
	header('Refresh: 0, url = http://localhost/projects/D_10,12,49,61_Group-9/TSEMini/Startup_page/startup.php');
}


?>

<?php

$HOSTNAME = 'localhost';
$USERNAME = 'root';
$PASSWORD = '';
$DATABase = 'signupform';
$con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABase);
if($con){}
else{ die(mysqli_error($con));}


$username = $_SESSION['username_sess_admin'];

$fileid = $_GET['file_id'];
$filepath = 'FileUpload/uploads/'.basename($_GET['file_id']);
$extension = $_GET['extension'];

if(!unlink($filepath)){
    echo 'Could not delete uploaded file';
}
else{
    $sql = "DELETE FROM $username WHERE fileid = '$fileid' ";
    $result= mysqli_query($con, $sql);
    if($result){
        header('location:all-files.php?delete_success=1');
    }
    else{
        echo 'error : error in performing delete query';
    }
    
}


?>