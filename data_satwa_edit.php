<?php
	include('koneksi.php'); 
    $id_satwa = $_GET['id_satwa'];
    $select = mysqli_query($koneksi, "SELECT * FROM tb_satwa WHERE id_satwa='$id_satwa'") or die(mysqli_error($koneksi));
    $data = mysqli_fetch_assoc($select);
?>


<!DOCTYPE html>
<html>
<head>
	<title>WEB SATWA LANGKA</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css"/>
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
</head>
<body>
	<div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
		<header class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div class="top-header-block">
							<a href="mailto:info@educationpro.com" itemprop="email"><i class="fas fa-envelope"></i>websatwa@gmail.com</a>
						</div>
					</div>
					<div class="top-header-right">
						<div class="login-block">
							
						</div>
					</div>
				</div>
			</div>
			<!-- Top header Close -->
			<div class="main-header">
				<div class="container">
					<div class="logo-wrap" itemprop="logo">
						<img src="images/logogilman.png" alt="Logo Image">
						<!-- <h1>Education</h1> -->
					</div>
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">
								<li><a href="dashboard_pengunjung.php">Dashboard</a></li>
								<li><a href="data_satwa.php">Data Satwa</a></li>
								<li><a href="logout.php">logout</a></li>
							</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header Close -->
		<section class="contact-page-section">
			<div class="container">
				<div class="people-info-wrap">
					<h2>EDIT DATA SATWA</h2>
					
					<form role="form" method="POST" action="data_satwa_update.php">
						<input type="text" placeholder="ID Satwa" class="input- subject" name="id_satwa" required readonly value="<?php echo $data['id_satwa']?>">
						<input type="text" placeholder="Nama Satwa" class="input- subject" name="nama_satwa" required value="<?php echo $data['nama_satwa']?>">
						<input type="text" placeholder="Spesies" class="input- subject" name="spesies" required value="<?php echo $data['spesies']?>">
						<input type="text" placeholder="Gambar" class="input- subject" name="gambar" required value="<?php echo $data['gambar']?>">
						<input type="text" placeholder="Jumlah Satwa" class="input- subject" name="jumlah_satwa" required value="<?php echo $data['jumlah_satwa']?>">

						<input type="submit" value="Simpan perubahan">
					</form>
				</div>
			</div>
		</section>
	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>