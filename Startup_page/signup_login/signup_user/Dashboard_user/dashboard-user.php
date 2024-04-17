<?php 

session_start();

if($_SESSION['username_sess']){

include 'connect.php' ;
            
$username = $_SESSION['username_sess'];

$sql = "SELECT * FROM $username ";
$result = mysqli_query($con,$sql);

if($result){
	$numfiles = mysqli_num_rows($result);


$numpics = 0 ;

while($data = $result->fetch_assoc()){

	$_filename = $data['filename'] ;
	$fileExt = explode('.', $_filename);
    $fileActualExtension = strtolower(end($fileExt));

	if($fileActualExtension == "jpg" || $fileActualExtension == "jpeg" || 
	   $fileActualExtension == "png" || $fileActualExtension == "gif"){

		$numpics += 1 ;
	}


}

}

}
else{
	header('Refresh: 0, url = http://localhost/projects/D_10,12,49,61_Group-9/TSEMini/Startup_page/startup.php?logout=1');
}

?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- displays site properly based on user's device -->

		<link rel="icon" type="image/png" sizes="32x32" href="https://github.com/iMJ007/Time-Tracking-Dashboard/blob/main/images/favicon-32x32.png">

		<title>User/Dashboard</title>

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link
			href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
			rel="stylesheet">
		<link rel="stylesheet" href="dashboard-user.css">
        <script src="dashboard-user.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

		<style>
			.attribution {
				font-size: 11px;
				text-align: center;
			}

			.attribution a {
				color: #4CCE84;
			}
			html{
				zoom : 65%;
			}
			
		</style>
	</head>
	
	<body >

	
			<div class="rectangle" Style='position:absolute;
			top : 0 ;
			margin-bottom: 480px;
			height: 50px;
			width: 100%;
			background-color: #302f31; 
			opacity: 20% ;'></div>		

			<h1 class='supertop'
			Style='position:absolute; top : 4px ;
			margin-bottom: 480px;'>Dashboard </h1>
			
			<!-- <button class="backbutton" 
			onclick="window.location.href = 'navigate.php';"
			style=" background-color: transparent;
					color : transparent ; 
					position : absolute; top : 4px ;
					margin-right: 1560px;
					margin-bottom: 475px;
					border:none ;
					">
					<img class="backbuttonimg" src= "backbutton.png" alt="backbutton"
					style = "
					background-color: transparent;
					color : transparent ; filter: hue-rotate(-180deg);
					height: 40px; 
					">
			</button> -->

			<button class="powerbutton" 
			onclick="window.location.href = 'navigate.php?logout=1';"
			style=" background-color: transparent;
					color : transparent ;
					position : absolute; top : 8px ;
					margin-left: 1530px;
					margin-bottom: 480px;
					border:none ;
					">
					<img class="backbuttonimg" src="../../../../res/power-button.png" alt="backbutton"
					style = "
					background-color: transparent;
					color : transparent ;
					height: 30px;
					">
					
			</button>
			
		
		<main style="margin-top:200px">
			
			<section id="mainCard">

				<div>
					<img id="profilePic" src="../../../../res/userprofile.png" alt="profile pic">
					<p>HOME</p><br>
					<h1>Welcome <?php echo $_SESSION['username_sess'];?></h1>
				</div>

				<fieldset>
					<input type="radio" name="period" id="daily" value="Daily" checked><label for="daily">ID : SM756482</label>
					<input type="radio" name="period" id="weekly" value="Weekly"><label for="weekly">Senior Professor</label>
					<input type="radio" name="period" id="monthly" value="Monthly"><label for="monthly">CSE Department</label>
				</fieldset>
			</section>

			
				<div class="activity-container" onclick="window.location.href = 'dash_components/all-files.php';">
					<span>All Documents</span>
					<img class="menu-button" src="https://github.com/iMJ007/Time-Tracking-Dashboard/raw/main/images/icon-ellipsis.svg" alt="menu">
					<h2>~<?php echo $numfiles ?></h2>
					<p>Pictures and Documents</p>
				</div> 

				<div class="activity-container" onclick="window.location.href = 'dash_components/FileUpload/90index.php?type=0';">
					<span> Upload Files +</span>
					<img class="menu-button" src="https://github.com/iMJ007/Time-Tracking-Dashboard/raw/main/images/icon-ellipsis.svg" alt="menu">
					<h2>~<?php echo $numfiles ?></h2>
					<p>Select files<br>
					txt , pdf , doc , pptx , xlsx</p>
				</div>

				<div class="activity-container" onclick="window.location.href = 'dash_components/FileUpload/90index.php?type=1';">
					<span style= " color: inherit;">Upload Photos +</span>
					<img class="menu-button" src="https://github.com/iMJ007/Time-Tracking-Dashboard/raw/main/images/icon-ellipsis.svg" alt="menu">
					<h2>~<?php echo $numpics ?></h2>
					<p>Select photos <br>
					jpg , jpeg , png , gif </p>
				</div>
		
			
		</main>

		
	</body>
	
	

</html>