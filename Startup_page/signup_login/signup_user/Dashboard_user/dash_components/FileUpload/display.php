<!DOCTYPE html>
<html>
    <head>
        <style type="text/css">
        body {
            margin: 0 auto;
            postion : realtive;
            text-align : center;
            background-image: linear-gradient(to right,#0b0028,#000000,#0b0028);
            
        }
        h2{
            font-style : italic;
            color : #ccdde0;
        }
        iframe {
            background-color: white;
        }
        

        </style>
    </head>
    <body >
        

        <?php 
            session_start();
            $username = $_SESSION['username_sess'];

            $hostname = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "signupform";


            $con = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname) or die(mysqli_error($con));   
            $sql = "SELECT * FROM $username ";
            $result = mysqli_query($con,$sql);

            while($data = $result->fetch_assoc()){

                $filename =   $data['filename'] ;
                $fileExt = explode('.', $filename);
                $extension = strtolower(end($fileExt));
                $filepath = $data['fileid'];

                if($extension == 'jpg' || $extension == 'jpeg' || $extension == 'png' || $extension == 'gif'){
                    echo "<h2>{$data['filename']}</h2>";
                    echo "<div style = ' background-color:white; width: 80%; height=20%; margin:0 auto;'>
                    <img src='{$data['fileid']}' width='65%' style = '  margin:0 auto;'></div> <br><br><hr><br><br> " ;
                }
                else{
                    echo "<h2>{$data['filename']}</h2>";
                    echo "
                    <div id='list'><p><iframe src= '$filepath' width='80%' height='400' frameborder='0'  ></iframe></p></div>
                    <br><br><hr><br><br>";
                }
            }

        ?>


    </body>
</html>