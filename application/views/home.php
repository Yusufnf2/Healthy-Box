
    <?php $this->load->view('templates/header') ?>

    <div class="hero">
        <div class="text-center">
            <h1>
                Kami Membantu Hidup <br> 
                <span class="text-warning">Lebih Sehat</span>  Setiap Hari
            </h1>
            <p class="mt-4">
                Selalu jaga kesehatan anda mulai dari menu makanan yang anda <br> 
                konsumsi sehari-hari
            </p>
            <a href="<?php echo base_url('registrasi/index');?>" class="btn btn-yl mt-4 text-dark">Ayo Mulai</a>
        </div>
    </div>

    <section class="section-menu">
        <div class="container">
           
            <div class="section-menu-title">
                <h4 class="">Pilihan Menu Makanan Sehat</h4>
            </div>
            
            <div class="row menu-category mt-3">
                <div class="col-sm-12 col-md-6">
                    <div class="img-menu p-4">
                        <img src="<?php echo base_url()?>asset/img/1.jpg" width="100%" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="text-menu-title mt-3">
                        <img src="<?php echo base_url()?>asset/img/icon1.png" width="36px" alt="">
                        <h4>Healthy Box</h4>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-menu mt-4">
                        <p>
                            The most important implication of how Tailwind extracts class names is that it will only find classes that exist as complete unbroken strings in your source files.

                            If you use string interpolation or concatenate partial class names together, Tailwind will not find them and therefore will not generate the corresponding CSS.
                        </p>
                        <a href="<?php echo site_url('pr')?>" class="btn btn-gr mt-3">Lihat Paket</a>
                    </div>
                </div>
            </div>

            <div class="row menu-category mt-3">
                <div class="col-sm-12 col-md-6">
                    <div class="img-menu p-4">
                        <img src="<?php echo base_url()?>asset/img/2.jpg" width="100%" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="text-menu-title mt-3">
                        <img src="<?php echo base_url()?>asset/img/icon2.png" width="36px" alt="">
                        <h4>Vegetarian</h4>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-menu mt-4">
                        <p>
                            The most important implication of how Tailwind extracts class names is that it will only find classes that exist as complete unbroken strings in your source files.

                            If you use string interpolation or concatenate partial class names together, Tailwind will not find them and therefore will not generate the corresponding CSS.
                        </p>
                        <a href="<?php echo site_url('pr')?>" class="btn btn-gr mt-3">Lihat Paket</a>
                    </div>
                </div>
            </div>

            <div class="row menu-category mt-3">
                <div class="col-sm-12 col-md-6">
                    <div class="img-menu p-4">
                        <img src="<?php echo base_url()?>asset/img/3.jpg" width="100%" alt="">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="text-menu-title mt-3">
                        <img src="<?php echo base_url()?>asset/img/icon3.png" width="36px" alt="">
                        <h4>Weight Loss Fat</h4>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-menu mt-4">
                        <p>
                            The most important implication of how Tailwind extracts class names is that it will only find classes that exist as complete unbroken strings in your source files.

                            If you use string interpolation or concatenate partial class names together, Tailwind will not find them and therefore will not generate the corresponding CSS.
                        </p>
                        <a href="<?php echo site_url('pr')?>" class="btn btn-gr mt-3">Lihat Paket</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="section-article" id="article">
        <div class="container">

            <div class="text-white">
                <h4 class="">Artikel</h4>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-4 mt-3">
                    <div class="bg-article p-3">
                        <img src="<?php echo base_url()?>asset/img/arti1.png" class="mb-3" width="100%" alt="">
                        <a href="">Lakukan Hal Ini Maka Lemak Berkurang</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mt-3">
                    <div class="bg-article p-3">
                        <img src="<?php echo base_url()?>asset/img/arti2.png" class="mb-3" width="100%" alt="">
                        <a href="">Cara Menurunkan Berat Badan</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mt-3">
                    <div class="bg-article p-3">
                        <img src="<?php echo base_url()?>asset/img/arti3.png" class="mb-3" width="100%" alt="">
                        <a href="">Cara Menambah Nafsu Makan</a>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <a href="<?php echo site_url('artikel')?>" class="btn btn-yl mt-5">Tampilkan Semua</a>
            </div>

        </div>
    </section>

    <?php $this->load->view('templates/footer') ?>
  