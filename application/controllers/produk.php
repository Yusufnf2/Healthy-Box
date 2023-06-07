<?php

class Produk extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda Belum Login!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('auth/login');
        }
    }

    public function tambah_keranjang($id){

        $barang = $this->model_barang->find($id);
        
        $data = array(
            'id'    => $barang->id_produk,
            'qty'   => 1,
            'price' => $barang->harga,
            'name' => $barang->nama_produk
        );

        $this->cart->insert($data);
        redirect('pr');
    }

    public function detail_keranjang(){
        $data['title'] = "Detail Pesanan";
        $this->load->view('keranjang',$data);
    }

    public function hapus_keranjang(){
        $this->cart->destroy();
        redirect('pr/index');
    }
    public function pembayaran(){
        $data['title'] = "Pembayaran";
        $this->load->view('pembayaran',$data);
    }
    
   
    public function detail($id_produk){
        $data['barang'] = $this->model_barang->detail_barang($id_produk);
        $data['title'] = "Detail Produk";
        $this->load->view('detail_barang',$data);
    }
}

?>