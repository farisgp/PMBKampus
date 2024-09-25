<?php
$model = new Siswa();
$data_siswa = $model->dataSiswa();
$sesi = $_SESSION['MEMBER'];
?>
<section class="section" id="pricing">
        <div class="container">
        <!-- Content -->
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Jurnal Pendaftaran
                        </h2>
                    </div>
                </div>
            </div> <!-- / .row -->
			<table class="table table-striped">
                <?php
                if(isset($sesi)){?>
                <a class="btn-info btn-sm" href="index.php?hal=siswa_form" role="button"
                    title="Pendaftaran Mahasiswa Baru">
                    &nbsp;<i class="fa fa-plus" aria-hidden="true"></i>&nbsp;
                </a>
                <br/><br/>
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NISN</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Asal Sekolah</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Prodi Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($data_siswa as $row){
                        ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['nisn'] ?></td>
                            <td><?= $row['jenis_kelamin'] ?></td>
                            <td><?= $row['alamat'] ?></td>
                            <td><?= $row['asal_sekolah'] ?></td>
                            <td><?= $row['umur'] ?></td>
                            <td><?= $row['nama_prodi'] ?></td>
                            <?php
                                if($sesi['role'] == 'admin'){
                            ?>
                            <td>
                                <form action="siswa_controller.php" method="POST">
                                    <a href="index.php?hal=siswa_detail&idmhs=<?= $row["nisn"] ?>">
                                        <button type="button" class="btn-info btn-sm" title="Detail Siswa">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    </a>
                                    <a href="index.php?hal=siswa_formEdit&idmhs=<?= $row["nisn"] ?>">
                                        <button type="button" class="btn-warning btn-sm" title="Ubah Siswa">
                                            <i class="fa fa-pencil" aria-hidden="true" ></i>
                                        </button>
                                    </a>
                                    <input type="hidden" name="idmhs" id="idmhs" value="<?= $row["nisn"] ?>">
                                    <button type="submit" class="btn-danger btn-sm" name="proses" value="hapus"
                                        onclick="return confirm('Anda Yakin Data akan diHapus?')" title="Hapus Siswa">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                            <?php } ?>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </tbody>
                <?php } 
                else {?>
                <br/><br/>
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NISN</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Asal Sekolah</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Prodi Pilihan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($data_siswa as $row){
                        ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $row['nama'] ?></td>
                            <td><?= $row['nisn'] ?></td>
                            <td><?= $row['jenis_kelamin'] ?></td>
                            <td><?= $row['alamat'] ?></td>
                            <td><?= $row['asal_sekolah'] ?></td>
                            <td><?= $row['umur'] ?></td>
                            <td><?= $row['nama_prodi'] ?></td>
                            <?php
                                if($sesi['role'] == 'admin'){
                            ?>
                            <td>
                                <form action="siswa_controller.php" method="POST">
                                    <a href="index.php?hal=siswa_detail&idmhs=<?= $row["nisn"] ?>">
                                        <button type="button" class="btn-info btn-sm" title="Detail Siswa">
                                            <i class="fa fa-eye"></i>
                                        </button>
                                    </a>
                                    <a href="index.php?hal=siswa_formEdit&idmhs=<?= $row["nisn"] ?>">
                                        <button type="button" class="btn-warning btn-sm" title="Ubah Siswa">
                                            <i class="fa fa-pencil" aria-hidden="true" ></i>
                                        </button>
                                    </a>
                                    <input type="hidden" name="idmhs" id="idmhs" value="<?= $row["nisn"] ?>">
                                    <button type="submit" class="btn-danger btn-sm" name="proses" value="hapus"
                                        onclick="return confirm('Anda Yakin Data akan diHapus?')" title="Hapus Siswa">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                            <?php } ?>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </tbody>
                    <?php } ?>

            </table>
        </div>
    </section>