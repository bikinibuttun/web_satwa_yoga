<?php
	include('koneksi.php');
	//nama db 		//nama di web
	$id_akun		=	$_POST['id_akun'];
	$password		=	$_POST['password'];
	$nama		=	$_POST['nama'];
	$surel		=	$_POST['surel'];
	$no_telp		=	$_POST['no_telp'];
	
	$sql = mysqli_query($koneksi, "INSERT INTO tb_akun(id_akun, password, nama, surel, no_telp) VALUES('$id_akun', '$password', '$nama', '$surel', '$no_telp')") or die(mysqli_error($koneksi)); //GANTI
				
				if($sql) //jika data berhasil ditambahkan, maka halaman yang akan terbuka adalah halaman namafile1
				{
					echo '<script>alert("Berhasil melakukan registrasi."); document.location="login.php";</script>'; //GANTI
				}
				else //jika tidak berhasi ditambahkan ke database, maka halaman yang akan terbuka adalah halaman namafile2
				{
					echo '<script>alert("Gagal melakukan proses registrasi"); document.location="register.php";</script>'; //GANTI
				}
?>