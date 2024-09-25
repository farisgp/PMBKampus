<?php 
// panggil sesion
$sesi = $_SESSION["MEMBER"];
?>


    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
            <div class="row justify-content-center">
                        <div class="col-lg-6 pl-4 text-center">
                            <div class="service-content">
                                <h1>My Profile</h1>
                                <div class="alert alert-success" role="alert">
                                <table align="center">
                                    <tr>
                                        <td align="left">Nama Lengkap</td>
                                        <td>:</td>
                                        <td align="right"><?=$sesi["fullname"]?></td>
                                    <tr>
                                    <tr>
                                        <td align="left">Email</td>
                                        <td>:</td>
                                        <td align="right"><?=$sesi["email"]?></td>
                                    <tr>
                                    <tr>
                                        <td align="left">Nama Pengguna</td>
                                        <td>:</td>
                                        <td align="right"><?=$sesi["username"]?></td>
                                    <tr>
                                    <tr>
                                        <td align="left">Role</td>
                                        <td>:</td>
                                        <td align="right"><?=$sesi["role"]?></td>
                                    <tr>
                                    
                                </table>
                                </div>
                            </div>
                        </div>
            </div>
    </section><!-- End Cource Details Section -->

    </><!-- End #main -->