<?php
class Member{
    //member1 variabel
    private $koneksi;
    //member2 konstruktor untuk koneksi database
    public function __construct(){
        global $dbh; //panggil instance object di koneksi.php 
        $this->koneksi = $dbh;
    }
    //member3 method2 CRUD
    public function dataMember(){
        $sql = "SELECT * FROM member ORDER BY id DESC";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll(); 
        return $rs;   
    }
    public function getMember($id){
        $sql = "SELECT * FROM member WHERE id = ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch(); 
        return $rs;   
    }
    public function simpan($data){
        $sql = "INSERT INTO member (fullname, email, username, password, role) VALUES 
                (?,?,?,SHA1(MD5(SHA1(?))),?)";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);  
    }
    public function ubah($password){
        $sql = "UPDATE member SET fullname=?, email=?, username=?, 
                password=SHA1(MD5(SHA1(?))), role=? WHERE id=?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$password]);
        $rs = $ps -> fetch();
        return $rs;
    }
    public function cekLogin($data){
        $sql = "SELECT * FROM member WHERE username = ? and password =SHA1(MD5(SHA1(?)))";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps -> fetch();
        return $rs;
    }
}
?>