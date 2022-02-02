<?php
class Product_model extends CI_Model{
    public function getFeatureProduct($type_id,$limit)
    {
        $this->db->where('product_type',$type_id);
        $this->db->limit($limit);
        $res=$this->db->get('product');
        
        //$this->db->last_query();
        return $res->result();
    }
    public function productDetails($pid)
    {
    $this->db->where('product_id',$pid);

    $res=$this->db->get('product');
    return $res->row();
    }
    public function getAllCategory()
    {
        $res=$this->db->get("category");
        return $res->result();
    }
public function getSearchProResult($keyword,$cat_id)

{   
    $this->db->like('product_name',$keyword);
    $this->db->where('cat_id',$cat_id);
    $res=$this->db->get('product');
    return $res->result();
}
public function productCart($pid)
{
    $this->db->where('product_id',$pid);

    $res=$this->db->get('product');
    return $res->row();
}
}

?>
