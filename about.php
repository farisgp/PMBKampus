<?php

$model = new Siswa();
$jml = $model->jumlahSiswa();
$model_jur = new Jurusan();
$jrs = $model_jur->jumlahJurusan();
?>
<section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="">
                        <!-- Heading -->
                        <h2 class="section-title">
                            About Us
                        </h2>

                        <!-- Subheading -->
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium magna sed nibh efficitur rutrum. Pellentesque pellentesque lectus at lectus maximus, sit amet efficitur nisi mattis.
                        </p>

                    </div>
                </div>
            </div>
        </div>
</section>

    <section id="projects" class="section-bottom">
        <div class="container">
            <div class="row py-4">
                <div class="col-lg-7 col-md-12 col-sm-12 ">
                    <div class="single-project">
                        <img src="images/bg/banner_bg.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 ">
                    <div class="project-content-block">
                        <h2>Do you know who we are?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium magna sed nibh efficitur rutrum. Pellentesque pellentesque lectus at lectus maximus, sit amet efficitur nisi mattis. Aenean quis accumsan nibh. Fusce ac ex non augue auctor rhoncus vitae non leo. Aenean vel lobortis nibh. Cras viverra mi sed ex laoreet fringilla. Donec rhoncus tristique condimentum. Aliquam sodales, leo ac finibus pretium, velit dui dictum arcu, id congue ex nibh ac augue.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="counts" class="counts section-bg mb-4">
         <div class="container">
             <div class="row counters justify-content-center">
                 <div class="col-lg-3 col-6 text-center">
                     <h1><?=$jml["jumlah"]?></h1>
                     <h4>Mahasiswa</h4>
                 </div>
                 <div class="col-lg-3 col-6 text-center">

                     <h1><?=$jrs["jumlah"]?></h1>

                     <h4>Pilihan Pendidikan</h4>
                 </div>
             </div>

         </div>
     </section>
