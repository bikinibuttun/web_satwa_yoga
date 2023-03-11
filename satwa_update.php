<?php
include 'koneksi.php';
$id_satwa = $_POST['id_satwa'];
$nama   = $_POST['nama'];
$biografi   = $_POST['biografi'];
$jumlah   = $_POST['jumlah'];
$gambar = $_FILES['gambar']['name'];
if($gambar != "") {
  $ekstensi_diperbolehkan = array('png','jpg');
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar;
  if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
    move_uploaded_file($file_tmp, 'img/'.$nama_gambar_baru);
    $query  = "UPDATE tb_satwa SET nama = '$nama', biografi = '$biografi', jumlah = '$jumlah', gambar = '$nama_gambar_baru'";
    $query .= "WHERE id_satwa = '$id_satwa'";
    $result = mysqli_query($koneksi, $query);
    if(!$result){
      die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
       " - ".mysqli_error($koneksi));
    } else {
      echo "<script>alert('Data berhasil diubah.');window.location='satwa.php';</script>";
    }
  } else {
    echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='satwa_edit.php';</script>";
  }
} else {
  $query  = "UPDATE tb_satwa SET nama = '$nama'";
  $query .= "WHERE id_satwa = '$id_satwa'";
  $result = mysqli_query($koneksi, $query);
      // periska query apakah ada error
  if(!$result){
    die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
     " - ".mysqli_error($koneksi));
  } else {
    echo "<script>alert('Data berhasil diubah.');window.location='satwa.php';</script>";
  }
}