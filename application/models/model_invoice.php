<?php
class Model_invoice extends CI_Model{
    public function pesan($data,$table){
    $this->db->insert($table,$data);
    }
}
?>