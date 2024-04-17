<?php
// session_start();
// if($_SESSION['username_sess']){}
// else{
// 	header('Refresh: 0, url = http://localhost/projects/D_10,12,49,61_Group-9/TSEMini/Startup_page/startup.php');
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <script src="test.js"></script>
    <title>Document</title>
</head>
<body>


<!-- <main class = "allicons">
    <?php 
    
    // $username = $_SESSION['username_sess'];
	// $hostname = "localhost";
    // $dbusername = "root" ;
    // $dbpassword = "" ;
    // $dbname = "signupform" ;

    // $con = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname) or die(mysqli_error($con));
    // $sql = "SELECT * FROM $username" ;
    // $result = mysqli_query($con, $sql) ;

    // while($data = $result->fetch_assoc()){
    //     $_filename = $data['filename'];
    //     $_fileid = $data['fileid'];
    
    //     $name_without_extension = substr($_filename,0,strrpos($_filename,"."));
    //     $_fileExt = explode('.', $_filename);
    //     $_fileActualExtension = strtolower(end($_fileExt));

    //     $filepath = 'FileUpload/'.$_fileid;
    //     $size = filesize($filepath);
    //     $sizemb = $size/1000000;
    //     $sizeround = round($sizemb , 2) ;
    
    //     $source = 'null';
    //     if($_fileActualExtension == 'jpg' || $_fileActualExtension == 'jpeg'
    //     || $_fileActualExtension == 'gif' || $_fileActualExtension == 'png'){
    //         $source = 'image.png';
    //     }
    //     if($_fileActualExtension == 'txt'){$source = '../../../../../res/file.png';}
    //     if($_fileActualExtension == 'docx'){$source = '../../../../../res/doc.png';}
    //     if($_fileActualExtension == 'pdf'){$source = '../../../../../res/pdf.png';}
    //     if($_fileActualExtension == 'pptx'){$source = '../../../../../res/ppt.png';}
    //     if($_fileActualExtension == 'xlsx'){$source = '../../../../../res/xls.png';}

    //     $element = 
    //     '   
    //     <div id="$_fileid" onClick=rc(this.id) style=align-items: center; display: flex; justify-content: center; padding: 4rem">
    //         <div class="container">
    //             <div class="container__trigger"  >Right-click me</div>
        
    //             <ul id="menu" class="container__menu container__menu--hidden">
    //                 <li class="container__item">First action</li>
    //                 <li class="container__item">Second action</li>
    //                 <li class="container__divider"></li>
    //                 <li class="container__item">Yet another action</li>
    //             </ul>
    //         </div>
    //     </div>
            
    //     ';

    //     echo $element ;
    // }

    ?>


</main> -->


    <div id="flip-card">
        <div class="flip-card-front">
            <p>

            </p>
            <button id="flip-card-btn-turn-to-back" >
            <img id='menubtn' src='../../../../../res/open-menu.png' />
        </button></div>

        <div class="flip-card-back">
                <p>
                
                </p>
            <button id="flip-card-btn-turn-to-front">
                <img id='closebtn' src='../../../../../res/interface.png' />
        </button></div>
        
    </div>


    <div id="flip-card" style = " left : 500px ;">
        <div class="flip-card-front">
            <p>

            </p>
            <button id="flip-card-btn-turn-to-back" >
            <img id='menubtn' src='../../../../../res/open-menu.png' />
        </button></div>

        <div class="flip-card-back">
                <p>
                
                </p>
            <button id="flip-card-btn-turn-to-front">
                <img id='closebtn' src='../../../../../res/interface.png' />
        </button></div>
        
    </div>





</body>
</html>