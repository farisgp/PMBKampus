<?php
//ciptakan object dari class Jabatan & Divisi

$obj_jurusan = new Jurusan();
$obj_siswa = new Siswa();
//panggil fungsi untuk menampilkan data jabatan & divisi
$data_jurusan = $obj_jurusan->dataJurusan(); 

//------------proses edit data------------
//tangkap request nisnEdit di url (setelah klik tombol edit/icon pencil)
$nisnEdit = $_REQUEST['idmhs'];
$siswa = $obj_siswa->getSiswa($nisnEdit);
?>
<!--====  End of Page Title  ====-->


<section class="section contact-form">
    <div class="container">
        <form action="siswa_controller.php" method="POST" class="row">
            <div class="col-12 mb-4">
                <div class="col-md-8 col-lg-12 text-center">
                        <h2 class="section-title">
                            Form Edit Data Mahasiswa
                        </h2>
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Nama</b></label>
                <input type="text" class="form-control main" name="nama" id="nama" placeholder="Nama" value="<?=$siswa['nama']?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>NISN</b></label>
                <input type="text" class="form-control main" name="nisn" id="nisn" placeholder="Nisn" value="<?=$siswa['nisn']?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Jenis Kelamin</b></label>
                <?php
                $ar_gender = ['Laki-laki', 'Perempuan'];
                foreach($ar_gender as $k => $jk){
                    //proses edit gender
                    $cek = $siswa['jenis_kelamin'] == $jk ? 'checked' : '';
                ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="<?= $jk ?>" <?= $cek ?>>
                    <label class="form-check-label"><?= $jk ?></label>
                </div>
                <?php } ?>

            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Asal Sekolah</b></label>
                <input type="text" class="form-control main" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah" value="<?=$siswa['asal_sekolah']?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Umur</b></label>
                <input type="text" class="form-control main" name="umur" placeholder="Umur" value="<?=$siswa['umur']?>">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Program Studi</b></label>
                <div class="form-group">
                    <select class="form-control main" name="prodi_pilihan">
                        <option disabled>-- Pilih Program Studi --</option>
                        <option value="<?=$siswa["prodi_pilihan"]?>">
                            <?=$siswa["nama_prodi"]?>
                        </option>
                        <?php
                    foreach($data_jurusan as $jur){
                    ?>
                        <option value="<?= $jur['id'] ?>"><?= $jur['nama_prodi'] ?></option>
                        <?php
                    }
                    ?>
                    </select>
                </div>
            </div>
            <div class="col-md-12">
                <label class="form-label"><b>Alamat</b></label>
                <textarea name="alamat" id="alamat" class="form-control main" rows="10"
                    placeholder="Alamat"><?= $siswa['alamat'] ?></textarea>
            </div>
            <div class="col-12 text-center">
                <button type="submit" name="proses" value="ubah" class="btn-warning btn-sm">Ubah</button>
                <!-- hidden field untuk klausa where id=? -->
                <input type="hidden" name="idmhs" id="idmhs" value="<?= $nisnEdit ?>">
                <button type=" submit" name="proses" value="batal" class="btn-info btn-sm">
                Batal</button>

            </div>
        </form>
    </div>
</section>