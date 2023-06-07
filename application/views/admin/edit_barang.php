<?php $this->load->view('templates_admin/sidebar')?>

<div class="container">
    <h4>Edit Data Produk</h4>

    <?php foreach($barang as $brg) : ?>
        <form method="post" action="<?php echo base_url(). 'admin/produk_admin/update/'; ?>">
            <div class="form-group">
                <label for="">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" value="<?php echo $brg->nama_produk?>">
            </div>
            <div class="form-group">
                <label for="">Keterangan</label>
                <input type="hidden" name="id_produk" class="form-control" value="<?php echo $brg->id_produk?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan?>">
            </div>
            <div class="form-group">
                <label for="">Kategori</label>
                <input type="text" name="kategori" class="form-control" value="<?php echo $brg->kategori?>">
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga?>">
            </div>
            <div class="form-group">
                <label for="">Stok</label>
                <input type="text" name="stok" class="form-control" value="<?php echo $brg->stok?>">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    <?php endforeach; ?>
</div>

<?php $this->load->view('templates_admin/footer')?>