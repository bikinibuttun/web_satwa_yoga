<?php
session_start();
include "koneksi.php";
$id_akun = $_POST["id_akun"];
$password = $_POST["password"];
$sql = "select * from tb_akun where id_akun='".$id_akun."' and password='".$password."' limit 1";
$hasil = mysqli_query ($koneksi,$sql);
$jumlah = mysqli_num_rows($hasil);
?>
<?php
	if ($jumlah>0) 
	{
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["id_akun"]=$row["id_akun"];
		header("Location:admin.php");
	}
	else 
	{
?>
			<script type='text/javascript'>
				toastr.error('Invalid, Data Akun Tidak sesuai !');
				function pindah(url)
				{
					window.location = url;
				}
				setInterval('pindah("login.php")',3000);
			</script>

<?php
}
?>