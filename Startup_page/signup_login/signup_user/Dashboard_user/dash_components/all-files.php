<?php
session_start();
if($_SESSION['username_sess']){}
else{
	header('Refresh: 0, url = http://localhost/projects/D_10,12,49,61_Group-9/TSEMini/Startup_page/startup.php');
}


?>



<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- displays site properly based on user's device -->

		<link rel="icon" type="image/png" sizes="32x32" href="https://github.com/iMJ007/Time-Tracking-Dashboard/blob/main/images/favicon-32x32.png">

		<title>User/allFiles</title>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link
			href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
			rel="stylesheet">
			
		<link rel="stylesheet" href="common.css">
        <script src="common.js"></script>
		

		<style>
			.attribution {
				font-size: 11px;
				text-align: center;
			}

			.attribution a {
				color: #4CCE84;
			}
			html{
				zoom: 67%;
			}
			main{
				
				margin-top:150px;
				
			}
		</style>
	</head>

<body>


<div class="rectangle" Style='position:absolute;
			top : 0 ;
			margin-bottom: 480px;
			height: 45px;
			width: 100%;
			background-color: #302f31; 
			opacity: 20% ;'></div>		

			<h1 class='supertop'
			Style='position:absolute; top : 4px ;
			margin-bottom: 480px;'>All Files </h1>
			
		 <button class="backbutton" 
			onclick="window.location.href = 'navigate.php';"
			style=" background-color: transparent;
					color : transparent ; 
					position : absolute; top : 4px ;
					margin-right: 1560px;
					margin-bottom: 475px;
					border:none ;
					">
					<img class="backbuttonimg" src= "../../../../../res/back (1).png" alt="backbutton"
					style = "
					background-color: transparent;
					color : transparent ; 
					height: 30px; 
					">
			</button> 

			<button class="powerbutton" 
			onclick="window.location.href = 'navigate.php?logout=1';"
			style=" background-color: transparent;
					color : transparent ;
					position : absolute; top : 8px ;
					margin-left: 1530px;
					margin-bottom: 480px;
					border:none ;
					">
					<img class="backbuttonimg" src="../../../../../res/power-button.png" alt="backbutton"
					style = "
					background-color: transparent;
					color : transparent ;
					height: 30px;
					">
					
			</button>

		

<main class = "allicons" >

	    <?php 
    
			
		
		$username = $_SESSION['username_sess'];

		$hostname = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "signupform";


		$con = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname) or die(mysqli_error($con));   
		$sql = "SELECT * FROM $username ";
		$result = mysqli_query($con,$sql);

		while($data = $result->fetch_assoc()){
			$_filename = $data['filename'];
			$_fileid = $data['fileid'];
		
			$name_without_extension = substr($_filename,0,strrpos($_filename,"."));
			$_fileExt = explode('.', $_filename);
    		$_fileActualExtension = strtolower(end($_fileExt));

			$filepath = 'FileUpload/'.$_fileid;
			$size = filesize($filepath);
			$sizemb = $size/1000000;
			$sizeround = round($sizemb , 2) ;
		
			$source = 'null';
			if($_fileActualExtension == 'jpg' || $_fileActualExtension == 'jpeg'
			|| $_fileActualExtension == 'gif' || $_fileActualExtension == 'png'){
				$source = '../../../../../res/image.png';
			}
			if($_fileActualExtension == 'txt'){$source = '../../../../../res/file.png';}
			if($_fileActualExtension == 'docx'){$source = '../../../../../res/doc.png';}
			if($_fileActualExtension == 'pdf'){$source = '../../../../../res/pdf.png';}
			if($_fileActualExtension == 'pptx'){$source = '../../../../../res/ppt.png';}
			if($_fileActualExtension == 'xlsx'){$source = '../../../../../res/xls.png';}

        $element = "
	  
		<div class='wrapper'>
			<div class='activity-container'  >

				<span class = 'filename'>$name_without_extension<br></span>
				<img class='menu-button' src='$source' alt='menu'>
				<span class='filler'> CLOUD <br> SHARE </span>
				<span>    </span>
				<span>	  </span>
				<span class = 'filesize' >$_fileActualExtension : $sizeround Mb<br></span>
			
			</div >

			

			<div id = 'options'>

				<button id = 'opbtn' > 
				<a href = 'open.php?file_id=$_fileid&extension=$_fileActualExtension' > 
				<img id = 'ob' src='../../../../../res/opbtns/edit.png'  /> 
				</a></button> 

				<button id = 'opbtn' > 
				<a href = 'download.php?file_id=$_fileid&extension=$_fileActualExtension' > 
				<img id = 'db' src='../../../../../res/opbtns/download.png'  /> 
				</a></button> 
				

				<button id = 'opbtn' > 
				<a  href='javascript:void(0);' NAME='rename'
				title='rename'
				onClick=window.open('rename.php?file_id=$_fileid&extension=$_fileActualExtension','Ratting','width=550,height=170,left=150,top=200,toolbar=0,status=0'); > 
				<img id = 'rb' src='../../../../../res/opbtns/rename.png'  />
				</a></button> 


				<button id = 'opbtn' > 
				<a href = 'delete.php?file_id=$_fileid&extension=$_fileActualExtension' > 
				<img id = 'delb' src='../../../../../res/opbtns/delete.png'  />
				</a></button> 

			</div>
		</div>";
        
        echo $element ;

        }

        ?> 

		
	</body>
	
	

</html>