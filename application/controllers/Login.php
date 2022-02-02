<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Login_model');
    }
    public function userLogin()
    {
        $uname=$this->input->post('uname');
        $pwd=$this->input->post('pwd');
        if ($uname!="" && $pwd!="") {
            $loginRes=$this->Login_model->login($uname, $pwd);
            if ($loginRes>0) {
                echo "sucess";
                $this->session->set_userdata('uname', $uname);
            } else {
                echo "failed";
            }
        }
        else {
            echo "blank";
        }
    }

   public function logout()
   {
       $this->session->sess_destroy();
        redirect('Home/index');
   }
}

    


?>