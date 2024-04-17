<?php 

  if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php' ;

    $success = 0 ;
    $user = 0;
    $login = 0;
    $invalid = 0;

    if(isset($_POST['username'])){
      echo " name = username !!" ;
    }
    if(isset($_POST['username_used'])){
      echo " name = username_used !!" ;
    }


    
    if(isset($_POST['username'])){

      $name = $_POST['name'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $conf_password = $_POST['conf_password'];
      
      if($conf_password == $password){

        if($username != null){
        $sql =  "SELECT * FROM admin_reg WHERE username = '$username' ";
        $sql1 = "SELECT * FROM user_reg WHERE username = '$username' ";

        $result = mysqli_query($con,$sql);
        $result1 = mysqli_query($con,$sql1);


        if($result && $result1){
            $num1 = mysqli_num_rows($result1);
            $num = mysqli_num_rows($result);
            
            if($num > 0 || $num1 > 0){
              echo " --- !! user already exist ";
              $user = 1 ;
            }else{

              $sql = "INSERT INTO admin_reg "."(name,username,password) "."VALUES"."('$name','$username','$password')";
              $result = mysqli_query($con,$sql);
              
              if($result){
                echo " --- !! signed up successfully --- data inserted";
                $success = 1 ;

                  $sql = "CREATE TABLE $username (id INT NOT NULL AUTO_INCREMENT,
                  filename VARCHAR(255) NOT NULL, fileid VARCHAR(255) NOT NULL,
                  PRIMARY KEY (id) )" ;
          
                  $result = mysqli_query($con, $sql);


            }
            else{
              die(mysqli_error($con));
          
            }
          }
        } 
        else {
          
          die(mysqli_error($con));
        }
      }
        else{ echo " -- error : Please enter Username ; Null value not allowed" ; }
      }
      else{ echo '-- both passwords must match'; }
    }

    $success = 0 ;
    $user = 0 ;
    $login = 0 ;
    $invalid = 0;

    if(isset($_POST['username_used'])){
      
      $username = $_POST['username_used'];
      $password = $_POST['password_used'];

      $sql = "SELECT *  FROM admin_reg WHERE username = '$username' AND password = '$password '";

      $result = mysqli_query($con , $sql) ;
      if($result){
        $num = mysqli_num_rows($result);
        if($num > 0){

          echo " --- !! login successfull";
          $login = 1;
        
          session_start();
          $_SESSION['username_sess_admin'] = $username;

          


          $_SESSION['number_of_rows'] = $num;

          header('location:Dashboard_admin/dashboard-admin.php');
        }
        else {
  
          echo " --- !! invalid data ";
          $invalid = 1;
        }
      }
    }

}


?>


<!DOCTYPE html>
<head>
  <title>admin-login</title>
    <link rel="stylesheet" href="signup_admin.css">
    <script src="signup_admin.js"></script>
</head>
<body style = 'background-color:balck;'>
<div class="cont_principal">
<h1 style = "text-align: center; position: relative; margin-top : 70px;  font-family: candara, sans-serif;
color : grey; font-style: italic;">Admin Login</h1>
<div class="complex11"  style = " position:relative; margin-top:205px;">
  <div class="cont_centrar">
  <div class="cont_login">
  <!-- onsubmit="setAction()"   -->
  <form action = "signup_admin.php" method = "post" id="form126">
    <div class="cont_tabs_login">
      <ul class='ul_tabs'>
        <li class="active"><a href="#" onclick="sign_in()">SIGN IN</a>
        <span class="linea_bajo_nom"></span>
        </li>
        <li><a href="#up" onclick="sign_up()">SIGN UP</a><span class="linea_bajo_nom"></span>
        </li>
      </ul>
      </div>
  <div class="cont_text_inputs">
      <input type="text" class="input_form_sign " placeholder="NAME" name="name" id ="nameID" />
    
    <input type="text" class="input_form_sign d_block active_inp" placeholder="USERNAME" name="username_used" id = "usernameID" />

    <input type="password" class="input_form_sign d_block  active_inp" placeholder="PASSWORD" name="password_used" id = "passwordID"/>  
   <input type="password" class="input_form_sign" placeholder="CONFIRM PASSWORD" name="conf_password" id = "conf_passwordID"/>
   

    
      </div>
      
<div class="cont_btn">
     <button class="btn_sign" type="submitt">SIGN IN</button>
      
      </div>
      
    </form>
    </div>
    
  </div>

</div>
</div>
</body>
</html>