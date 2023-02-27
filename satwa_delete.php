<?php
	include('koneksi.php');
	$id_satwa = $_GET['id_satwa'];	
	$cek = mysqli_query($koneksi, "SELECT * FROM tb_satwa WHERE id_satwa='$id_satwa'") or die(mysqli_error($koneksi));
	if(mysqli_num_rows($cek) > 0)
	{
		$del = mysqli_query($koneksi, "DELETE FROM tb_satwa WHERE id_satwa='$id_satwa'") or die(mysqli_error($koneksi));
		if($del)
		{
			echo '<script>alert("Berhasil menghapus data."); document.location="satwa.php";</script>';
		}
		else
		{
			echo '<script>alert("Gagal menghapus data."); document.location="satwa.php";</script>';
		}
	}
	else
	{
		echo '<script>alert("ID tidak ditemukan di database."); document.location="satwa.php";</script>';
	}
?>