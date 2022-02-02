<?php
class Product extends CI_Controller
{
    public function ProductDetails()

    {   $pid= $this->input->get('pid');
        $this->load->model('Product_model');
        $productDetailsData=$this->Product_model->productDetails($pid);
        $this->load->helper('url');
        $getAllCat=$this->Product_model->getAllCategory();
        $this->load->view('common/header');
        $this->load->view('homebanner');
        $this->load->view('common/sidebar',['getAllCat'=>$getAllCat]);
        $this->load->view('product/ProductDetails',['proDetails'=>$productDetailsData]);
        $this->load->view('common/footer');
    }
    public function searchProduct()

    {   $this->load->helper('form');
        if ($this->input->post('cat_id')!='') {
            $cat_id=$this->input->post('cat_id');
        }
        if ($this->input->get('cat_id')!="") {
            $cat_id=$this->input->get('cat_id');
        }
        
        $keyword=$this->input->post('searchpro');
        $this->load->model('Product_model');
        $getAllCat=$this->Product_model->getAllCategory();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->view('common/header',['getAllCat'=>$getAllCat]);
        $this->load->view('homebanner');
        $this->load->view('common/sidebar',['getAllCat'=>$getAllCat]);
        $searchProRes=$this->Product_model->getSearchProResult($keyword,$cat_id);
       $this->load->view('product/searchProduct',['searchProRes'=>$searchProRes]);
       $this->load->view('common/footer');
    }
    public function ProductCart()

    {   $pid= $this->input->get('pid');
        $this->load->model('Product_model');
        $proCart=$this->Product_model->ProductCart($pid);
        $this->load->helper('url');
        $getAllCat=$this->Product_model->getAllCategory();
        $this->load->view('common/header');
        $this->load->view('homebanner');
        $this->load->view('common/sidebar',['getAllCat'=>$getAllCat]);
        $proCart=$this->Product_model->productCart($pid);
        $this->load->view('product/ProductCart',['proCart'=>$proCart]);
        $this->load->view('common/footer');
    }
}
?>