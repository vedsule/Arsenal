<?php

if($_GET['logout']){
$logout_flag = $_GET['logout'];
    if($logout_flag == 1){
        session_start();
        unset($_SESSION['username_sess']);
        
        header('Refresh: 0, url = http://localhost/projects/D_10,12,49,61_Group-9/TSEMini/Startup_page/startup.php?logout=1');
    }
}
else{
    header('Refresh: 0, url = http://localhost/projects/D_10,12,49,61_Group-9/TSEMini/Startup_page/signup_login/signup_user/signup_user.php');
}




?>
<!DOCTYPE html>
<html>
<head>
  
</head>
<body style="background-color:black;">
    
</body>
</html>

