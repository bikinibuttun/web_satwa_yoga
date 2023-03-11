<!DOCTYPE html>
<html>
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
	<h1 ></h1>
	<hr>
	<br>
	<?php
      include "koneksi.php";
      $query = mysqli_query($koneksi, "SELECT * FROM tb_satwa ORDER BY id_satwa DESC ");
      while($data = mysqli_fetch_array($query)){
	?>
	<table id="example1" class="table table-bordered table-striped">
	  <tbody>
      <tr>
        <td width="20%">Id Satwa</td>
        <td width="20%"><?=$data['id_satwa']?></td>
      </tr>
      <tr>
        <td>Gambar</td>
        <td><img src="img/<?=$data['gambar']; ?>" width="100px"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td><?=$data['nama']?></td>
      </tr>
      <tr>
        <td>Biografi</td>
        <td><?=$data['biografi']?></td>
      </tr>
      <tr>
        <td>Jumlah</td>
        <td><?=$data['jumlah']?></td>
      </tr>
      </tbody>
    </table>
  <?php
  }
  ?>
  <script>
  window.print();
  </script>
</body>
</html>