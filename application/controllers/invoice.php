<?php
class Invoice extends CI_Controller{

    public function tambah_aksi() {
        $nama    = $this->input->post('nama');
        $alamat     = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');

        
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime( date('H'),date('i'),date('s'), date('m'),date('d') + 1,date('Y'))),
            'no_telp' => $no_telp
        );

        $this->model_invoice->pesan($data,'invoice');
        $this->cart->destroy();
        $data['title'] = "Proses";
        $this->load->view('proses_pemesanan',$data);
    }
    public function proses_pemesanan(){
        $this->cart->destroy();
        $data['title'] = "Proses";
        $this->load->view('proses_pemesanan',$data);
    }

}
?>