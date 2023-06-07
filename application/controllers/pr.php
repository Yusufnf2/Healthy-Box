<?php

class Pr extends CI_Controller{
    public function index(){
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $data['title'] = "Produk";
        $this->load->view('produk',$data);

    }
    

}

?>