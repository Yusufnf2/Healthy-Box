<?php $this->load->view('templates/header') ?>

<section class="detail-produk p-5">
    <div class="container">
        <h4 class="mb-3">Detail Produk</h4>
        <?php foreach($barang as $brg): ?>
            <div class="produk border p-3">
                <div class="col-sm-12">
                    <div class="img-produk p-2">
                        <img src="<?php echo base_url().'/upload/'.$brg->gambar ?>" width="100%" alt="">
                    </div>
                </div>
                <div class="col-sm-12 ">
                    <div class="detail-produk">
                        <table class="table">
                            <tr>
                                <td>Nama Produk</td>
                                <td><strong><?php echo $brg->nama_produk ?></strong></td>
                            </tr>
                            <tr>
                            <td>Kategori</td>
                                <td><strong><?php echo $brg->kategori ?></strong></td>
                            </tr>  
                            <tr>
                                <td>Harga</td>
                                <td><strong><div class="btn btn-danger">Rp. <?php echo number_format($brg->harga,0,',','.') ?></div></strong></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td><strong><?php echo $brg->keterangan ?></strong></td>
                            </tr>
                        </table>
                        
                        <div align="right">
                        <?php echo anchor('pr/index/' .$brg->id_produk, '<div class="btn btn-secondary">Kembali</div>')?>
                            <?php echo anchor('produk/tambah_keranjang/' .$brg->id_produk, '<div class="btn btn-gr">Tambah Ke Keranjang</div>')?>   
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php $this->load->view('templates/footer') ?>