<?php 
// Create database connection using config file
include_once("koneksi.php");

// Fetch all users data from database
?>

<!doctype html>
<html lang ="en">
<head>
	 <?php
            session_start();
            if (!isset($_SESSION["username"])) header("location:login.php");
        ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="css.css">
	
</head>
<body>
	<nav class="navbar navbar-light" style="background-color: mediumblue;">
  			<img src="Gambar.png" width="100px" height="90px">
			<center><h1>Aplikasi Pemantauan Tangkapan Ikan Berbasis IoT</h1></center>		
		<a href="logout.php"><img src="logout.png" width="80px" height="40px"></a>
	</nav>
	<div class="bar">
	</div>
	<h3>Selamat Datang Admin: <span><?php echo $_SESSION["username"]?></span></h3>
	


	<form action="" method="POST">
		<div class="container">
		<div class="row">
		<div class="col-6">	
				<a href="datakapal.php"><img src="DK.png" width="65%" height="95%" float="center"></a>
		</div>
		<div class="col-6">
				<a href="dataikan.php"><img src="DP.png" width="65%" height="95%" float="center"></a>
		</div>
		<div class="w-100"></div>
		<div class="col-6">	
				<a href="tambahdatakapal.php"><img src="TDK.png" width="65%" height="95%" float="center"></a>
		</div>
		<div class="col-6">
				<a href="tambahdataikan.php"><img src="TDP.png" width="65%" height="95%" float="center"></a>
		</div>
		</div>
		</div>
	</form>


<script src="./assets/js/jquery-3.4.1.slim.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>
