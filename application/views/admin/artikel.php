<?php $this->load->view('templates_admin/sidebar')?>

    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Artikel</h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah Artikel  <i class="fa fa-plus ml-2"></i>
            </button>
        </div>

        

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
                            <form action="<?php echo base_url(). 'admin/artikel_admin/tambah_aksi';?>" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Nama Artikel</label>
                                    <input type="text" name="nama_produk" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Isi Artikel</label>
                                    <input type="text" name="keterangan" class="form-control">
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