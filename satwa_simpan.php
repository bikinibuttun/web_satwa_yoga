<?php
	include('koneksi.php');
	//nama db 		//nama di web
	$id_satwa		=	$_POST['id_satwa'];
	$gambar		=	$_POST['gambar'];
	$nama		=	$_POST['nama'];
	$biografi		=	$_POST['biografi'];
	$jumlah		=	$_POST['jumlah'];
	
	$sql = mysqli_query($koneksi, "INSERT INTO tb_satwa(id_satwa, gambar, nama, biografi, jumlah) VALUES('$id_satwa', '$gambar', '$nama', '$biografi', '$jumlah')") or die(mysqli_error($koneksi)); //GANTI
				
				if($sql) //jika data berhasil ditambahkan, maka halaman yang akan terbuka adalah halaman namafile1
				{
					echo '<script>alert("Berhasil melakukan tambah data."); document.location="satwa.php";</script>'; //GANTI
				}
				else //jika tidak berhasi ditambahkan ke database, maka halaman yang akan terbuka adalah halaman namafile2
				{
					echo '<script>alert("Gagal melakukan proses tambah data"); document.location="satwa_tambah.php";</script>'; //GANTI
				}
?>