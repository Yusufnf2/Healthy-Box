<?php $this->load->view('templates/header') ?>
    <section class="section-pembayaran p-5">
        <div class="container">

            <div class="text-center p-3 bg-secondary text-white mb-5">
                <h4>
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()){
                    foreach ($keranjang as $item){
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "Total Pesanan Anda: <br> Rp. ".number_format($grand_total,0,',','.');
               
                ?>
                </h4>
            </div>

            <h4 class="mb-3">Masukan Data Pemesan</h4>
            
            <form method="post" action="<?php echo base_url()?>invoice/tambah_aksi" >
            
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>No. Telepon/Hp</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telpon Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>Pilih Metode Pembayaran</label>
                    <select class="form-control">
                        <option>Pilih ---</option>
                        <option>Bank BCA</option>
                        <option>Bank Mandiri</option>
                        <option>Bank BRI</option>
                        <option>Bank BNI</option>
                        <option>Bank Niaga</option>
                        <option>OVO</option>
                        <option>DANA</option>
                        <option>GOPAY</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
            
            </form>

            <?php 
             } else{
                echo "Anda Belum Memiliki Pesanan";
             }
            ?>

        </div>
    </section>
<?php $this->load->view('templates/footer') ?>
