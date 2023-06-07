<?php

class Registrasi extends CI_Controller {
    public function index(){
        
        $this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => 'Wajib diisi!']);
        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Wajib diisi!']);
        $this->form_validation->set_rules('password_1', 'Password', 'required|matches[password_2]', ['required' => 'Wajib diisi!']);
        $this->form_validation->set_rules('password_2', 'Password', 'required|matches[password_1]', ['required' => 'Wajib diisi!', 'matches' => 'Password tidak cocok']);

        if ($this->form_validation->run() == false){
            $data['title'] = "Registrasi";
            $this->load->view('registrasi',$data);
        } else {
            $data = array(
                'id_user'  => '',
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password_1'),
                'role_id' => 2
            );

            $this->db->insert('user', $data);
            redirect('auth/login');
        }
        
    } 
}

?>