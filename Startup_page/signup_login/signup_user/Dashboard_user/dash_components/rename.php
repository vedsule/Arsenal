
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


$fileid = 'uploads/'.basename($_GET['file_id']);
$extension = $_GET['extension'];
$fileid1 = basename($fileid);

$rename_success = 0 ;

    if(isset($_POST['userinput_name'])){
        session_start();
        $_SESSION['userinput_name'] = $_POST['userinput_name'];
       

        $username = $_SESSION['username_sess'];        
        $newname = $_SESSION['userinput_name'];
        
        $NewName =  $newname.'.'.$extension ;
       

        $sql = " UPDATE $username SET filename = '$NewName' WHERE fileid = '$fileid' " ;
        $result = mysqli_query($con, $sql);

        if($result){ 
            echo 'File has been renamed';
            $rename_success = 1;
        }
        else { echo 'File does not exist';}       

    }

?>




<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link
			href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
			rel="stylesheet">
    <style type="text/css">
         body {
            text-align: center;
            background-color: #0a0914;
            color: white ;
            font-font-family: 'Rubik', sans-serif;
        }
        form{
            position : relative;
            text-align: center;
            margin-top: 12%;
            margin-left: auto;
        }
    </style>
    
</head>
<body>

<script type="text/javascript">
        function RefreshParent() {
            if (window.opener != null && !window.opener.closed) {
                window.opener.location.href="all-files.php" ;
                
            }
        }
        window.onbeforeunload = RefreshParent;
    </script>

    <?php

    if($rename_success == 0){

    echo "
    <form method='post' action='rename.php?file_id=$fileid1&extension=$extension'>
        TYPE A NAME : <input type='text' name='userinput_name'>
        <button type='submit' name='submit' onClick = RefreshParent() >RENAME</button>
    </form>
    ";

    }
    else{
        header("Location:all-files.php?rename_success=1");
    }
    ?>
</body>
</html>