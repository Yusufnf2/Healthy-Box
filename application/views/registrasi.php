<?php $this->load->view('templates/header') ?>

<section class="section-login bg-gray p-5">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-sm-6 col-md-5 p-4 border bg-white rounded">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Buat Akun </h1>
                </div>
                <form method="post" action="<?php base_url('registrasi/index')?>" class="user">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Nama Anda..." name="nama"> 
                        <?php echo form_error('nama', '<div class="text-danger small m-2">','</div>')?>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan Username Anda..." name="username"> 
                        <?php echo form_error('username', '<div class="text-danger small m-2">','</div>')?>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan Password Anda" name="password_1">
                            <?php echo form_error('password_1', '<div class="text-danger small m-2">','</div>')?>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Ulangi Password Anda" name="password_2">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-gr btn-user btn-block">Daftar Sekarang</button>
                    
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="<?php echo base_url('auth/login');?>">Sudah punya akun? Login </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('templates/footer') ?>