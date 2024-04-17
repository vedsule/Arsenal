<?php

$type = $_GET['type'];
session_start();
$_SESSION['type'] = $type;
?>


<!DOCTYPE html>
<html>
    <head>
      
        <link rel="stylesheet" href="file_upload.css">
        <script src="file_upload.js"></script>
    </head>
    <body>
       
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input  type="file" name = "file" id="fileInput" onchange="showname()"><br>
            <p id='para1'>Drag your files here or click in this area.</p>
            <button type="submit" name= "submit" style="margin-top:-10px;"> upload</button>
            <button type="button"  name ="submit" onclick="window.location.href = 'display.php'; "> display</button>
        </form>
        <div id="file-upload-filename"></div>

    </body>
</html>
