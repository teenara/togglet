<?php
class Login extends CI_Controller
{
    public function __construct()
    {
       parent::__construct();
       
        $this->load->helper('url');
        $this->load->model('Login_model');
       
       
    }
    public function index()
    { 
        if ($this->session->userdata('admin')==TRUE) {
            
            redirect('dashboard');
        } else {
            $this->load->view('login');
        }
    }   
        public function checkAdmin()
        {
           $data['admin_uname']=$this->input->post('uname',true);
           $data['admin_pwd']=$this->input->post('password',true);
           if(!empty($data['admin_uname']) && !empty($data['admin_pwd']))
           {
               $admin=$this->Login_model->checkAdmin($data);
              
               if(count($admin)==1)
               {
                   redirect("dashboard");
               }
               else{
                   echo "not found";
               }
           }
           else{
               echo "not working";
           }
        
    }

}

?>