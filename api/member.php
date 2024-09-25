<?php
//ciptakan object dari class Member
$model = new Member();
//panggil fungsi untuk menampilkan data member
$data_member = $model->dataMember(); 
//beri session untuk hak akses halaman member
$sesi = $_SESSION['MEMBER'];
if(isset($sesi) && $sesi['role'] == 'admin' ){
?>
<section class="section schedule">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h3>Daftar <span class="alternate">Member</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Username</th>
                            <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($data_member as $row){
                        ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $row['fullname'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['username'] ?></td>
                            <td><?= $row['role'] ?></td>
                            <?php
                                if($sesi['role'] == 'admin'){
                            ?>
                            <td>
                                <form action="#indevelopment" method="POST">
                                    <a href="#indevelopment">
                                        <button type="button" class="btn-warning btn-sm" title="Ubah Siswa">
                                            <i class="fa fa-pencil" aria-hidden="true" ></i>
                                        </button>
                                    </a>
                                    <button type="submit" class="btn-danger btn-sm" value=""
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
                </table>
            </div>
        </div>
    </div>
</section>
<?php 
}
else{
    echo '<script>alert("Anda Terlarang Akses Halaman Ini!!!");history.back();</script>';
}
?>