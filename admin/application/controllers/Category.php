<?php
class Category extends CI_Controller
{
    public function __construct()
    {
       parent::__construct();
       
        $this->load->helper('url');
        $this->load->model('Category_model');
       
    }
    public function addNewCategory()
    {
        if ($this->input->post('submit')) {
         
            $catname=$this->input->post('catname');
            $catdesc=$this->input->post('catdesc');
            if($catname!="" && $catdesc!="")
            {
            $data=[
                'cat_name'=>$catname,
                'cat_desc'=>$catdesc
            ];
            $res=$this->Category_model->addNewCat($data);
          
    
            if($res)
            {
                redirect('allCategory');
            }
            else{
                echo "failed";
            }
         }
        }
        else {
            
            $this->load->view('common/header.php');
            $this->load->view('common/sidebar.php');
            $this->load->view('addNewCat');
            $this->load->view('common/footer.php');
        }
    }


    function edit($cat_id)
    {   $this->load->model('Category_model');
        $category=$this->Category_model->getAllCategory($cat_id);
        $data=array();
        $data['category']=$category;
        $this->form_validation->set_rules('cat_name','cat_name','required');
        $this->form_validation->set_rules('cat_desc','cat_desc','required');
        if($this->form_validation->run()==false)
        {
            $this->load->view('common/header.php');
            $this->load->view('common/sidebar.php');
            $this->load->view('editCat',$data);
            $this->load->view('common/footer.php');
        }
        else
        {
            $formArray=array();
            $formArray['cat_name']=$this->input->post('cat_name');
            $formArray['cat_desc']=$this->input->post('cat_desc');
            
            $this->Category_model->editCat($cat_id,$formArray);
            $this->load->view('common/header.php');
            $this->load->view('common/sidebar.php');
            $this->load->view('editCat');
            $this->load->view('common/footer.php');
            // $this->session->set_flashdata('success','Reccord not found');
            redirect(base_url().'allCategory');
         }
}
}
?>