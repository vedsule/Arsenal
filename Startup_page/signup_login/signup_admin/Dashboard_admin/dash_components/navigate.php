
<?php

$logout_flag = $_GET['logout'];
echo $logout_flag;

if($_GET['logout']){
$logout_flag = $_GET['logout'];
    if($_GET['logout'] == 1){
        session_start();
        unset($_SESSION['username_sess_admin']);
        
        header('Refresh: 0, url = http://localhost/projects/D_10,12,49,61_Group-9/TSEMini/Startup_page/startup.php');
    }
}
else{
    header('Refresh: 0, url = http://localhost/projects/D_10,12,49,61_Group-9/TSEMini/Startup_page/signup_login/signup_admin/Dashboard_admin/dashboard-admin.php');
}


?>

<!DOCTYPE html>
<html>
<head>
  
</head>
<body style="background-color:black;">
    
</body>
</html>