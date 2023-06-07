<?php

class Testimonial extends CI_Controller{
    public function index(){
        $data['title'] = "Testimonial";
        $this->load->view('testimonial',$data);
    }
}

?>