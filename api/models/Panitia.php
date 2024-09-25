<?php
class Panitia{
    private $koneksi;
    public function __construct(){
        global $dbh;
        $this->koneksi = $dbh;
    }
    public function dataPanitia(){
        $sql = "SELECT * from panitia_pendaftaran order by id asc";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}
?>