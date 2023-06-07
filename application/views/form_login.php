<?php $this->load->view('templates/header') ?>

<section class="section-login bg-gray p-5">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-sm-6 col-md-5 p-4 border bg-white rounded">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang Kembali!</h1>
                </div>
                <?php echo $this->session->flashdata('pesan') ?>
                <form method="post" action="<?php base_url('auth/login')?>" class="user">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Username Anda..." name="username">
                        <?php echo form_error('username', '<div class="text-danger small m-2">','</div>')?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan Password Anda" name="password">
                        <?php echo form_error('password', '<div class="text-danger small m-2">','</div>')?>
                    </div>
                    
                    <button type="submit" class="btn btn-gr btn-user btn-block">Masuk</button>
                    <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                        <i class="fab fa-google fa-fw"></i> Masuk dengan Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                        <i class="fab fa-facebook-f fa-fw"></i> Masuk dengan Facebook
                    </a>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="<?php echo base_url('registrasi/index');?>">Belum punya akun? Daftar </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('templates/footer') ?>