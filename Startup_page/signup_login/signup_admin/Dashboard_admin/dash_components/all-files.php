<?php
session_start();
if($_SESSION['username_sess_admin']){}
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

		<title>Admin/allFiles</title>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link
			href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
			rel="stylesheet">
		<link rel="stylesheet" href="common.css">
        <script src="common.js"></script>
		<!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
		<style>
			.attribution {
				font-size: 11px;
				text-align: center;
			}

			.attribution a {
				color: #4CCE84;
			}
			html{
				zoom : 60%;
			}
			main{
				postion:relative;
				margin-top:150px;
			}

		</style>
	</head>

	<body>

	
	<div class="rectangle" Style='position:fixed;
		margin-bottom: 680px;
		height: 50px;
		width: 2000px;
		background-color: #302f31;'></div>		

		<h1 class='supertop'
		Style='position:fixed;
		margin-bottom: 680px;'

		>All Files </h1>
		
		<button class="backbutton" 
		onclick="window.location.href = 'navigate.php';"
		style=" background-color: transparent;
				color : transparent ;
				position : fixed;
				margin-right: 1660px;
				margin-bottom: 675px;
				border:none ;
				">
				<img class="backbuttonimg" src="backbutton.png" alt="backbutton"
				style = "
				background-color: transparent;
				color : transparent ;
				height: 40px;
				">
				
		</button>

		<button class="powerbutton"
		onclick="window.location.href = 'navigate.php?logout=1';"
		style=" background-color: transparent;
				color : transparent ;
				position : fixed;
				margin-left: 1660px;
				margin-bottom: 680px;
				border:none ;
				">
				
				<img class="backbuttonimg" src="power.png" alt="backbutton"
				
				style = "
				background-color: transparent;
				color : transparent ;
				height: 40px;
				">
				
		</button>
	
		<main class = "allicons">

			
		<?php 
    
			

	$username = $_SESSION['username_sess_admin'];

	$hostname = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "signupform";

	
	$con = mysqli_connect($hostname, $dbusername, $dbpassword, $dbname) or die(mysqli_error($con));   
	$sql = "SELECT * FROM $username ";
	$result = mysqli_query($con,$sql);

	$sql2 = "SELECT * FROM user_reg ";
	$result2 = mysqli_query($con,$sql2);
	

	while($data = $result->fetch_assoc()){
		$_filename = $data['filename'];
		$_fileid = $data['fileid'];
	
		$name_without_extension = substr($_filename,0,strrpos($_filename,"."));
		$_fileExt = explode('.', $_filename);
		$_fileActualExtension = strtolower(end($_fileExt));

		$filepath = 'FileUpload/'.$_fileid;
		$size = filesize($filepath);
		$sizemb = $size/1000000;
	
		$source = 'null';
		if($_fileActualExtension == 'jpg' || $_fileActualExtension == 'jpeg'
		|| $_fileActualExtension == 'gif' || $_fileActualExtension == 'png'){
			$source = 'image.png';
		}
		if($_fileActualExtension == 'txt'){$source = 'file.png';}
		if($_fileActualExtension == 'docx'){$source = 'doc.png';}
		if($_fileActualExtension == 'pdf'){$source = 'pdf.png';}
		if($_fileActualExtension == 'pptx'){$source = 'ppt.png';}
		if($_fileActualExtension == 'xlsx'){$source = 'xls.png';}

	$element = " <div><div class='activity-container' onclick='sayHello()'  style = ' background = red ;' >
	<span>$name_without_extension<br></span>
	
	<img class='menu-button' src='$source' alt='menu' style=' width:25px;'>
	
	<h6 style='margin-top:10px; text-decoration:none'; font-family: 'Courier New', Courier, monospace;>$_fileActualExtension</h6>
	<h6 style='margin-top:10px; text-decoration:none; font-family: 'Courier New', Courier, monospace;>size : $size B</h6>
	

	</div>

	<button style='background-image: radial-gradient(rgb(217, 211, 254),rgb(103, 96, 170));' > <a href = 'open.php?file_id=$_fileid&extension=$_fileActualExtension' style = ' text-align: center; position: relative; text-decoration : none; color : black; margin-right:6px;'> open </a></button> 
	<button style='background-image: radial-gradient(rgb(217, 211, 254),rgb(103, 96, 170));'> <a href = 'download.php?file_id=$_fileid&extension=$_fileActualExtension' style = ' text-align: center; position: relative;text-decoration : none; color : black;  margin-right:6px;'> download </a></button> 
	<button style='background-image: radial-gradient(rgb(217, 211, 254),rgb(103, 96, 170));'> <a href = 'delete.php?file_id=$_fileid&extension=$_fileActualExtension' style = 'text-align: center; position: relative; text-decoration : none; color : black; margin-right:6px;'> delete </a></button> 
	<button style='background-image: radial-gradient(rgb(217, 211, 254),rgb(103, 96, 170));'> <a href = 'rename.php?file_id=$_fileid&extension=$_fileActualExtension' style = ' text-align: center; position: relative;text-decoration : none; color : black; margin-right:6px;'> rename </a></button> 

	
	
	</div>";
	
	echo $element ;

	}

	?> 
    


		</main>

	</body>


</html>