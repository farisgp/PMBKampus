<?php
class Siswa{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function dataSiswa(){
        $sql = "SELECT * from siswa s
        INNER JOIN jurusan j on s.prodi_pilihan = j.id order by s.id asc";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
    public function getSiswa($nisn){
        $sql = "SELECT * from siswa s
        INNER JOIN jurusan j on j.id = s.prodi_pilihan WHERE s.nisn = ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$nisn]);
        $rs = $ps->fetch(); 
        return $rs;   
    }
    public function simpan($datasiswa){
        $sql = "INSERT INTO siswa (nama, nisn, jenis_kelamin,asal_sekolah, umur, prodi_pilihan, alamat) VALUES (?,?,?,?,?,?,?)";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($datasiswa);  
    }
    public function ubah($datasiswa){
        $sql = "UPDATE siswa SET nama=?, nisn=?, jenis_kelamin=?, asal_sekolah=?, 
               umur=?, prodi_pilihan=?, alamat=? WHERE nisn=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($datasiswa);  
    }
    public function hapus($nisn){
        $sql = "DELETE FROM siswa WHERE nisn=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$nisn]);  
    }
    public function jumlahSiswa () {
        $sql = "SELECT COUNT(nama) as jumlah FROM siswa";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetch();
        return $rs;
    }
}
?>