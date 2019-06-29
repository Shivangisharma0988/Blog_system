<?php
class Users extends CI_Controller
{
    public function index()
    {
        $this->load->model('Usersmodel');
        $data['users1']=$this->Usersmodel->getusers();
        //print_r($users1);
        //$this->load->view('userview',$data);
    }
}
?>