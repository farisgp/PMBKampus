<?php
class Jurusan{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function dataJurusan(){
        $sql = "SELECT * from jurusan";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function jumlahJurusan () {
        $sql = "SELECT COUNT(nama_prodi) as jumlah FROM jurusan";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetch();
        return $rs;
    }
}