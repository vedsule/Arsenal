<?php

$hostname = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "signupform";

$con = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname);

session_start();

$username = $_SESSION['username_sess'];
$type = $_SESSION['type'];

if(isset($_POST['submit'])){
    
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];


    $fileExt = explode('.', $fileName);
    $fileActualExtension = strtolower(end($fileExt));

    if($type == 1){ $allowed_ext = array('jpg', 'jpeg', 'png', 'gif'); }
    else { $allowed_ext = array('jpg', 'jpeg', 'png', 'gif', 'txt', 'pdf', 'docx', 'pptx', 'xlsx'); }

    if(in_array($fileActualExtension, $allowed_ext)){
        if($fileError === 0){
            if($fileSize < 5000000){
                // if file size less than 50 mb
                $fileNameNew= uniqid('',true).".".$fileActualExtension;
                $fileDestination = 'uploads/'.$fileNameNew;

                move_uploaded_file($fileTmpName, $fileDestination);


        
                $sql = "INSERT INTO $username"."(filename,fileid)"."VALUES"."('$fileName', '$fileDestination')";
                $result = mysqli_query($con,$sql);

                if($result){
                    
                    header('Refresh: 0, url = http://localhost/projects/D_10,12,49,61_Group-9/TSEMini/Startup_page/signup_login/signup_user/Dashboard_user/dashboard-user.php');
                }


            }else{
                echo " --- file too big, size should strictly be less than 5 Mb";
                echo " --- file size : " , $fileSize;
            }

        }else{
            echo " --- there was an error uploading file " ;
        }
    } else{
        echo " --- you cannot upload file of this type";
    }

}

?>