<?php

class Kontak extends CI_Controller{
    public function index(){
        $data['title'] = "Kontak";
        $this->load->view('kontak',$data);
    }
}

?>