<?php
class allCategory extends CI_Controller
{    public function __construct()
    {
       parent::__construct();
       
        $this->load->helper('url');
        $this->load->model('Category_model');
       
    }

    function index()
    {   $this->load->model('Category_model');
        $categories=$this->Category_model->all();
        $data=array();
        $data['categories']=$categories;
        $this->load->view('common/header.php');
        $this->load->view('common/sidebar.php');

        $this->load->view('showAllCategory',$data);
       $this->load->view('common/footer.php');
    }
    function all()
    {
        return $categories=$this->db->get('category')->result_array();
    }


    
    function delete($cat_id)
    {
    $this->load->model('Category_model');
    $category=$this->Category_model->getAllCategory($cat_id);
    if(empty($category))
    {
       
        redirect('allCategory');   
    }
    
    $this->Category_model->deleteCategory($cat_id);
        
        redirect('allCategory');    
    
    }
    }
   
      
    



?>