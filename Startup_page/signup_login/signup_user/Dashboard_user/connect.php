<?php 
    $HOSTNAME = 'localhost';
    $USERNAME = 'root';
    $PASSWORD = '';
    $DATABase = 'signupform';

    $con = mysqli_connect($HOSTNAME, $USERNAME, $PASSWORD, $DATABase);

    if($con){
        
    }else{
        die(mysqli_error($con));
    }


?>