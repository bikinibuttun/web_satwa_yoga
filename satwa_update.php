<?php
	include('koneksi.php');
	//gambar db 		//gambar di web
	$id_satwa		=	$_POST['id_satwa'];
	$gambar		=	$_POST['gambar'];
	$nama		=	$_POST['nama'];
	$biografi		=	$_POST['biografi'];
	$jumlah		=	$_POST['jumlah'];
	
	$sql = mysqli_query($koneksi, "UPDATE tb_satwa SET id_satwa='$id_satwa', gambar='$gambar', nama='$nama', biografi='$biografi', jumlah='$jumlah' WHERE id_satwa='$id_satwa'") or die(mysqli_error($koneksi));
			
			if($sql)
			{
				echo '<script>alert("Berhasil menyimpan data."); document.location="satwa.php";</script>';
			}
			else
			{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
?>