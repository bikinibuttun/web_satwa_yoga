<?php
	include('koneksi.php'); 
    $id_satwa = $_GET['id_satwa'];
    $select = mysqli_query($koneksi, "SELECT * FROM tb_satwa WHERE id_satwa='$id_satwa'") or die(mysqli_error($koneksi));
    $data = mysqli_fetch_assoc($select);
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
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="position-relative d-inline text-primary ps-4">Edit Data</h1>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <form method="POST" action="satwa_update.php">
                                <div class="row g-3">
								 <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="id_satwa" id="subject" placeholder="ID" readonly value="<?php echo $data['id_satwa']?>"></input>
                                            <label for="subject">ID</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
											</input><img src="img/<?php echo $data['gambar']?>" width="150px">
                                            <input type="file" class="form-control" name="gambar" id="subject" required value="<?php echo $data['gambar']?>"><? echo $data['gambar']?></input>
                                            <label for="subject">GAMBAR</label>
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="nama" id="subject" placeholder="NAMA SATWA" required value="<?php echo $data['nama']?>"></input>
                                            <label for="subject">NAMA SATWA</label>
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="biografi." name="biografi" id="subject" style="height: 150px" required><?=$data['biografi']?></textarea>
                                            <label for="subject">BIOGRAFI</label>
                                        </div>
                                    </div>
									<div class="col-12">
                                        <div class="form-floating">
                                            <input class="form-control" name="jumlah" id="subject" placeholder="JUMLAH" required value="<?php echo $data['jumlah']?>">
                                            <label for="subject">JUMLAH</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Simpan Perubahan</button>
										<a href="satwa.php" class="nav-item nav-link active">Batal</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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