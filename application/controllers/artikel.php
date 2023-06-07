<?php

class Artikel extends CI_Controller{
    public function index(){
        $data['title'] = "Artikel";
        $this->load->view('artikel',$data);
    }
}

?>