<?php
class Register extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Product_model');

    }
    

public function index()
    {$this->load->model('Product_model');
    $getAllCat=$this->Product_model->getAllCategory();
 
    $this->load->view('common/header',['getAllCat'=>$getAllCat]);
    $this->load->view('common/sidebar',['getAllCat'=>$getAllCat]);
    $this->load->view('register');
    $this->load->view('common/footer');
}
public function signup()
{   
    $username=$this->input->post('username');
    $fname=$this->input->post('fname');
    $lname=$this->input->post('lname');
    $email=$this->input->post('email');
    $pwd=$this->input->post('pwd');
    $mphone=$this->input->post('mphone');


    $this->form_validation->set_rules('username', 'username', 'required|is_unique[user.username]|min_length[4]');
    $this->form_validation->set_rules('fname', 'Firstname', 'required');
    $this->form_validation->set_rules('lname', 'Lastname', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('pwd', 'Password', 'required|alpha_numeric');
    $this->form_validation->set_rules('mphone', 'Mobile', 'required|exact_length[10]');


    if($this->form_validation->run()===FALSE)
    {
    $this->load->helper('url');
    $this->load->helper('form');
    $this->load->model('Product_model');
    $getAllCat=$this->Product_model->getAllCategory();
    $this->load->view('common/header',['getAllCat'=>$getAllCat]);
    $this->load->view('common/sidebar',['getAllCat'=>$getAllCat]);
    $this->load->view('register');
    $this->load->view('common/footer');
    }
else{
    $this->load->model('Register_model');
    $data=[
        'username'=>$username,
         'fname'=>$fname,
         'lname'=>$lname,
         'email'=>$email,
         'password'=>md5($pwd),
         'mobile'=>$mphone,
         'ip'=>$this->input->ip_address(),
         
    ];
    $last_id=$this->Register_model->signupData($data);
    if($last_id)
    {
        $this->session->set_flashdata('signupSuccess','u have successfully Registered Please login',);
        redirect('register');
    }


}
}
}
?>
