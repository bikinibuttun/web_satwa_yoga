<?php
session_start();
$_SESSION['id_akun']='';
unset($_SESSION['id_akun']);
session_unset();
session_destroy();
header('Location:tamu.php');
?>
