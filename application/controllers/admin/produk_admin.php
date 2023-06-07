<?php
class Produk_admin extends CI_Controller{
    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('admin/produk',$data);
    }

    public function tambah_aksi() {
        $nama_produk    = $this->input->post('nama_produk');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('harga');
        $gambar         = $_FILES['gambar']['name'];
        if ($gambar =''){}
        else {
            $config ['upload_path'] = './upload';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal di Upload!";
            }else {
                $gambar=$this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_produk' => $nama_produk,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok,
            'gambar' => $gambar
        );

        $this->model_barang->tambah_barang($data,'produk');
        redirect('admin/produk_admin/index');
    }

    public function edit($id)
    {
        $where = array('id_produk' =>$id);
        $data['barang'] = $this->model_barang->edit_barang($where,'produk')->result();
        $this->load->view('admin/edit_barang',$data);

    }

    public function update(){
        $id             = $this->input->post('id_produk');
        $nama_produk    = $this->input->post('nama_produk');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');

        $data = array(
            'nama_produk'   => $nama_produk,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok
        );

        $where = array(
            'id_produk' =>$id
        );

        $this->model_barang->update_data($where,$data, 'produk');
        redirect('admin/produk_admin/index');
    }

    public function hapus ($id)
    {
        $where = array('id_produk' =>$id);
        $this->model_barang->hapus_data($where, 'produk');
        redirect('admin/produk_admin/index');

    }
}

?>