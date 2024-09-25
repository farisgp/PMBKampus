<?php
session_start();
error_reporting(E_ERROR | E_PARSE);
include_once 'koneksi.php';
include_once 'models/Jurusan.php';
include_once 'models/Siswa.php';
include_once 'models/Member.php';
include_once 'models/Panitia.php';


include_once 'header.php';
include_once 'navigasi.php';

$hal = $_REQUEST['hal'];
if(!empty($hal)){
    include_once $hal.'.php';
}
else{include_once 'home.php';}
include_once 'footer.php';

?>
