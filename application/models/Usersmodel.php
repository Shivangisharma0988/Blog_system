<?php
class Usersmodel extends CI_Model
{
    public function getusers()
    {
        $this->load->database();
        $q=$this->db->get("user");
        $result=$q->result_array();
        
        print_r($result);
        
    }
}
?>