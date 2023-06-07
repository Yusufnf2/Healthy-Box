<?php $this->load->view('templates/header') ?>
    <section class="section-keranjang p-5">
        <div class="container">
            <h4 class="mb-3">Detail Pesanan</h4>

            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Sub Total</th>
                </tr>

                <?php
                $no=1;
                foreach ($this->cart->contents() as $items) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $items['name'] ?></td>
                        <td><?php echo $items['qty'] ?></td>
                        <td> Rp. <?php echo number_format($items['price'],0,',','.')  ?></td>
                        <td> Rp. <?php echo number_format($items['subtotal'],0,',','.') ?></td>
                    </tr>

                <?php endforeach; ?>

                    <tr>
                        <td colspan="4">Jumlah Total</td>
                        <td> Rp. <?php echo number_format($this->cart->total(),0,',','.') ?></td>
                    </tr>

            </table>

            <div align="right">
                <a href="<?php echo base_url('produk/hapus_keranjang/')?>"><div class="btn btn-danger">Hapus Pesanan</div></a>
                <a href="<?php echo base_url('pr/index/')?>"><div class="btn btn-gr">Lanjutkan Belanja</div></a>
                <a href="<?php echo base_url('produk/pembayaran/')?>"><div class="btn btn-primary">Pembayaran</div></a>
            </div>

        </div>
    </section>
<?php $this->load->view('templates/footer') ?>
