<?php
	include('koneksi.php');
	//nama db 		//nama di web
	$id_satwa				=	$_POST['id_satwa'];
	$nama_satwa				=	$_POST['nama_satwa'];
	$spesies				=	$_POST['spesies'];
	$gambar					=	$_POST['gambar'];
	$jumlah_satwa			=	$_POST['jumlah_satwa'];
	
	$sql = mysqli_query($koneksi, "UPDATE tb_satwa SET id_satwa='$id_satwa', nama_satwa='$nama_satwa', spesies='$spesies', gambar='$gambar', jumlah_satwa='$jumlah_satwa' WHERE id_satwa='$id_satwa'") or die(mysqli_error($koneksi)); //GANTI
			
			if($sql)
			{
				echo '<script>alert("Berhasil menyimpan data."); document.location="data_satwa.php";</script>'; //GANTI
			}
			else
			{
				echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
			}
?>