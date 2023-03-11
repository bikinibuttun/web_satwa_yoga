<?php
session_start();
if (!isset($_SESSION["id_akun"])) 
{
	echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
	exit;
}
$id_akun=$_SESSION["id_akun"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SATWA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0"><i class="fa fa-search me-2"></i>Website<span class="fs-5"> Edukasi</span></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="admin.php" class="nav-item nav-link">Dashboard</a>
                        <a href="satwa.php" class="nav-item nav-link active">Data Satwa</a>
						<a href="saran_data.php" class="nav-item nav-link">Data Saran</a>
                        <a href="logout.php" class="nav-item nav-link">Logout</a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Website Edukasi</h1>
                            <p class="text-white pb-3 animated zoomIn">Selamat datang di website saya, semoga informasi yang saya sediakan bermanfaat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h1 class="position-relative text-primary ps-4">Data Satwa Langka</h1>
                        </div>
						</div>
                </div>
            </div>
			
			 <form method="GET" action="satwa.php#example1" style="text-align: center;">
				<label> Pilih Satwa :
				<select name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>" class="form-control" id="name"  >
				    <option></option>
                    <?php 
                    	require_once 'koneksi.php';
                    	$query = "SELECT * FROM tb_satwa ORDER BY nama DESC";
                    	$result = mysqli_query($koneksi, $query);
                    				
                    	while($data = mysqli_fetch_assoc($result) )
                    	{
                    	?>
                    	<option value="<?php echo $data['nama']; ?>"><?php echo $data['nama']; ?></option>
                    	<?php 
                    	} 				
                    ?>
                    </select>
                    </label>
				<button type="submit" class="btn btn-dark">Cari</button>
			</form>
			<br>
			<div class="table-responsive-lg">
		<table id="example1" border="3px" class="table table-bordered table-striped">
			<thead align="center">
				<tr>
				<th>ID</th>
				<th>GAMBAR</th>
				<th>NAMA</th>
				<th>BIOGRAFI</th>
				<th>JUMLAH</th>
				<th colspan="2">AKSI</th>
				<tr>
			</thead>
			<tbody>
			<?php
			include('koneksi.php');
				if(isset($_GET['kata_cari'])) {
					$kata_cari = $_GET['kata_cari'];
					$query = "SELECT * FROM tb_satwa WHERE id_satwa like '%".$kata_cari."%' OR nama like '%".$kata_cari."%' OR jumlah like '%".$kata_cari."%'  ORDER BY id_satwa ASC";
				} else {
					$query = "SELECT * FROM tb_satwa ORDER BY id_satwa ASC";
				}
					
				$result = mysqli_query($koneksi, $query);

				if(!$result) {
					die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
				}
				while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td align="center"><?php echo $row['id_satwa']; ?></td>
				<td><img src="img/<?php echo $row['gambar']; ?>" width="100px"></td>
				<td><?php echo $row['nama'];  ?></td>
				<td align="justify"><?php echo $row['biografi']; ?></td>
				<td align="justify"><?php echo $row['jumlah']; ?></td>
				<td><?php echo '
				  <a href="satwa_edit.php?id_satwa='.$row['id_satwa'].'" class="nav-item nav-link""><button class="btn btn-primary"><img src="img/edit.png"/></button></a> 
				';?>
				</td>
				<td><?php echo '
				  <a href="satwa_delete.php?id_satwa='.$row['id_satwa'].'" class="nav-item nav-link" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><button class="btn btn-danger"><img src="img/hapus.png"/></button></a>
				  ';?>
				</td>
			</tr>
			<?php
			}
			?>
		</tbody>
		</table>
		<center>
		<button type="button" class="btn btn-outline-success"><a href="satwa_tambah.php" class="nav-item nav-link">+ Tambahkan Data</a></button>
		</center>
		</div>
        </div>
		
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>