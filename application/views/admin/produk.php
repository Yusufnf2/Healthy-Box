<?php $this->load->view('templates_admin/sidebar')?>

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Produk</h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah Produk  <i class="fa fa-plus ml-2"></i>
            </button>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Keterangan</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th colspan="3">Aksi</th>
            </tr>

            <?php 
            $no=1;
            foreach($barang as $brg): ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $brg->nama_produk ?></td>
                    <td><?php echo $brg->keterangan ?></td>
                    <td><?php echo $brg->kategori ?></td>
                    <td><?php echo $brg->harga ?></td>
                    <td><?php echo $brg->stok ?></td>
                    <td><div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div></td>
                    <td><?php echo anchor('admin/produk_admin/edit/' .$brg->id_produk, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>')?></td>
                    <td><?php echo anchor('admin/produk_admin/hapus/' .$brg->id_produk, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>')?></td>
                </tr>
            
            <?php endforeach; ?>

        </table>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="<?php echo base_url(). 'admin/produk_admin/tambah_aksi';?>" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Nama Produk</label>
                                    <input type="text" name="nama_produk" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Kategori</label>
                                    <input type="text" name="kategori" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" name="harga" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Stok</label>
                                    <input type="text" name="stok" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Gambar Produk</label>
                                    <input type="file" name="gambar" class="form-control">
                                </div>

                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>

                        </form>
                    </div>
                </div>
            </div>

    </div>
           

<?php $this->load->view('templates_admin/footer')?>