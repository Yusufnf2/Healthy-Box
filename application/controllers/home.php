<?php

class Home extends CI_Controller{
    public function index(){
        $data['title'] = "Healthy Box";
        $this->load->view('home',$data);
    }
}

?>