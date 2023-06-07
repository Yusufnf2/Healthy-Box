<?php $this->load->view('templates/header') ?>

<section class="section-produk p-5">
    <div class="container">

        <div class="mb-3">
            <h4>Healthy Box</h4>
        </div>

        <div class="row">
            <?php foreach ($barang as $brg): ?>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="produk mt-3">
                        <div class="img-produk">
                            <img src="<?php echo base_url().'/upload/'.$brg->gambar?>" width="100%" alt="">
                        </div>
                        <div class="body-produk mt-2">
                                <span class="badge badge-pill badge-danger">Rp. <?php echo number_format($brg->harga,0,',','.') ?></span>
                            <h5 class="title-produk"><?php echo $brg->nama_produk ?></h5>
                            <p><?php echo $brg->keterangan ?></p>
                            
                            <?php echo anchor('produk/tambah_keranjang/' .$brg->id_produk, '<div class="btn btn-gr">Tambah Ke Keranjang</div>')?>
                            
                            <?php echo anchor('produk/detail/' .$brg->id_produk, '<div class="btn btn-yl mt-2">Lihat Detail</div>')?>
                            
                            
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php $this->load->view('templates/footer') ?>
