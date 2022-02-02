
<?php
class Home extends CI_Controller {
public function index()
{  $this->load->model('Product_model');
    $FeaturePronew=$this->Product_model->getFeatureProduct(1,4);
    $featureProOld=$this->Product_model->getFeatureProduct(2,4);
    $homeLatestPro=$this->Product_model->getFeatureProduct(3,6);
    $getAllCat=$this->Product_model->getAllCategory();
    
    $this->load->helper('url');
    $this->load->view('common/header',['getAllCat'=>$getAllCat]);
    $this->load->view('homebanner');
    $this->load->view('common/sidebar',['getAllCat'=>$getAllCat]);
    $this->load->view('home',['featureProNew'=>$FeaturePronew,'featureProOld'=>$featureProOld,'homeLatestPro'=>$homeLatestPro]);
    $this->load->view('common/footer');
    $this->load->library('session');
}
}
?>