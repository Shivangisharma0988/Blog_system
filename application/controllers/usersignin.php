<?php
class Usersignin extends CI_Controller
{
public function index()
{
    $this->load->view('public/signup');
}
public function user_signup()
{
    $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
    if($this->form_validation->run('signup__rules'))
    {
        //sucess
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $confirm_password=$this->input->post('confirm_password');
        $email=$this->input->post('email');
        $city=$this->input->post('city');
        
        }
    else{
        //failed
        $this->session->set_flashdata('signup_failed','Details are wrong.');
        $this->load->view('public/signup');
    }
}
}

?>