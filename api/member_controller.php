<?php
session_start();
include_once "koneksi.php";
include_once "models/Member.php";
// tangkap request form
$username = $_POST["username"];
$password = $_POST["password"];
// simpan ke array
$data = [$username,$password];
// eksekusi tombol
$model = new Member(); 
$rs = $model->cekLogin($data);
if(!empty($rs)){
    $_SESSION['MEMBER'] = $rs;
    header('location:index.php?hal=siswa');
}else {
    echo "<script>alert('Username atau password salah');history.back();</script>";
}
?>