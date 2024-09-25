<?php
$model = new Jurusan();
$data_jurusan = $model->dataJurusan();
?>
<section class="section">
        <div class="container">
        <!-- Content -->
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                        <h2 class="section-title">
                            Daya Tampung Program Studi
                        </h2>
                </div>
            </div> <!-- / .row -->
			<table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Prodi</th>
                            <th scope="col">Daya Tampung</th>
                            <th scope="col">Syarat Lulusan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($data_jurusan as $row){
                        ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $row['nama_prodi'] ?></td>
                            <td><?= $row['daya_tampung'] ?></td>
                            <td><?= $row['syarat_lulusan'] ?></td>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </tbody>
            </table>
        </div>
    </section>