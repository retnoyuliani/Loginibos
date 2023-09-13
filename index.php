<?php
include '../koneksi.php';
//mengaktifkan session
session_start();
//cek apakah user telh login. Jika belum, alihkan ke halaman login
if($_SESSION['status']!="login"){
    header("location:../index.php");
}
//menampilkan pesan alamat datang
echo " Hai selamat datang".$_SESSION['username'];
?>
<br>
</br>
<a href="logout.php">LOGOUT</a>