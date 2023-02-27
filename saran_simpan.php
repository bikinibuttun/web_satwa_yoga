<?php
	include('koneksi.php');
	//nama db 		//nama di web
	$id_saran		=	$_POST['id_saran'];
	$surel		=	$_POST['surel'];
	$nama		=	$_POST['nama'];
	$isi		=	$_POST['isi'];
	
	$sql = mysqli_query($koneksi, "INSERT INTO tb_saran(id_saran, surel, nama, isi) VALUES('$id_saran', '$surel', '$nama', '$isi')") or die(mysqli_error($koneksi)); //GANTI
				
				if($sql) //jika data berhasil ditambahkan, maka halaman yang akan terbuka adalah halaman namafile1
				{
					echo '<script>alert("Berhasil melakukan tambah data."); document.location="saran.php";</script>'; //GANTI
				}
				else //jika tidak berhasi ditambahkan ke database, maka halaman yang akan terbuka adalah halaman namafile2
				{
					echo '<script>alert("Gagal melakukan proses tambah data"); document.location="saran.php";</script>'; //GANTI
				}
?>