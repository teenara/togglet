<?php
class Dashboard extends CI_Controller
{
    
	public function index()
	
	{ 
		$this->load->helper('url');
        $this->load->view('common/header.php');
        $this->load->view('common/sidebar.php');
        $this->load->view('dashboard');
        $this->load->view('common/footer.php');
	}
	
    
}
?>