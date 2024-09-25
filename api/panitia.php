<?php
$model = new Panitia();
$data_panitia = $model->dataPanitia();
?>
<section class="section" id="pricing">
        <div class="container">
        <!-- Content -->
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title">
                            Panitia Yang Bertugas
                        </h2>
                    </div>
                </div>
            </div> <!-- / .row -->
			<table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID Panitia</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Umur</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($data_panitia as $row){
                        ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['nama_panitia'] ?></td>
                            <td><?= $row['jenis_kelamin'] ?></td>
                            <td><?= $row['alamat'] ?></td>
                            <td><?= $row['umur'] ?></td>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </tbody>
            </table>
        </div>
    </section>