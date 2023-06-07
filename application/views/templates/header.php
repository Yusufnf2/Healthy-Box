<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title ?></title>

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url()?>asset/css/bootstrap.min.css" rel="stylesheet">
   
    <!-- Style CSS-->
    <link rel="stylesheet" href="<?php echo base_url()?>asset/style.css">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url()?>asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
    <style>
        .keranjang a {
            color: #fff;
        }
        .keranjang a:hover {
            text-decoration: none;
            color:  #f6c23e;
        }
        .login {
            background-color: #f6c23e;
        }
        .login a{
            color: #333;
            padding: 10px 15px;
        }
        .login a:hover{
            text-decoration: none;
        }
        
        
    </style>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body id="page-top">
    <div class="sticky-top">

        <nav class="navbar navbar-expand-lg bg-gr navbar-dark">
            <div class="container">  
                <a class="navbar-brand mr-5" href="<?php echo site_url('home')?>"><img src="<?php echo base_url()?>asset/img/logo.png" alt="" width="200px"></a>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item mr-4">
                            <a class="nav-link <?php echo active_menu('home')?>" href="<?php echo site_url('home')?>">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link <?php echo active_menu('produk')?>" href="<?php echo site_url('pr')?>">Produk</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link <?php echo active_menu('artikel')?>" href="<?php echo site_url('artikel')?>">Artikel</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link <?php echo active_menu('testimonial')?>" href="<?php echo site_url('testimonial')?>">Testimonial</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link <?php echo active_menu('kontak')?>" href="<?php echo site_url('kontak')?>">Tentang</a>
                        </li>   
                    </ul>
                </div>

                <div class="keranjang mr-3">
                    <?php $keranjang = '<i class="fa fa-shopping-cart" ></i> '.$this->cart->total_items(). ' '?>            <?php echo anchor('produk/detail_keranjang',$keranjang ) ?>
                </div>  

                <div class="login ml-3 p-2">
                    <ul class="nav navbar-nav navbar-right">
                        <?php if($this->session->userdata('username')){ ?>
                            <li><span class="text-capitalize text-black-50 font-weight-bold ml-2">(<?php echo $this->session->userdata('username')?>)</span></li>
                            <li class="ml-2"><?php echo anchor('auth/logout','Logout')?></li>
                            <?php } else {?>
                            <li><?php echo anchor('auth/login', 'Login')?></li>
                        <?php }?>
                    </ul>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </div>