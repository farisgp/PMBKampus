<?php
//ciptakan object dari class Jabatan & Divisi
$obj_jurusan = new Jurusan();
$obj_panitia = new Panitia();
$obj_siswa = new Siswa();
//panggil fungsi untuk menampilkan data jabatan & divisi
$data_jurusan = $obj_jurusan->dataJurusan(); 
$data_panitia = $obj_panitia->dataPanitia(); 

?>
<!--====  End of Page Title  ====-->
<section class="section contact-form">
    <div class="container">
        <form action="siswa_controller.php" method="POST" class="row">
            <div class="col-12 mb-4">
                <div class="col-md-8 col-lg-12 text-center">
                        <h2 class="section-title">
                            Form Pendaftaran Mahasiswa Baru
                        </h2>
                </div>
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Nama</b></label>
                <input type="text" class="form-control main" name="nama" id="nama" placeholder="Nama">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>NISN</b></label>
                <input type="text" class="form-control main" name="nisn" id="nisn" placeholder="NISN">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Jenis Kelamin</b></label>
                <?php
                $ar_gender = ['Laki-laki', 'Perempuan'];
                foreach($ar_gender as $k => $jk){
                    $cek = $siswa['jenis_kelamin'] == $jk ? 'checked' : '';
                ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="<?= $jk ?>" <?= $cek ?>>
                    <label class="form-check-label" value="<?= $jk ?>"><?= $jk ?></label>
                </div>
                <?php } ?>

            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Asal Sekolah</b></label>
                <input type="text" class="form-control main" name="asal_sekolah" id="asal_sekolah" placeholder="Asal Sekolah">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Umur</b></label>
                <input type="text" class="form-control main" name="umur" placeholder="Umur">
            </div>
            <div class="col-md-6">
                <label class="form-label"><b>Program Studi</b></label>
                <div class="form-group">
                    <select class="form-control main" name="prodi_pilihan">
                        <option selected disabled>-- Pilih Program Studi --</option>
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
                    placeholder="Alamat"></textarea>
            </div>
            <div class="col-12 text-center">
                <button type="submit" name="proses" value="simpan" class="btn-success btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</section>