<?php
class Category_model extends CI_Model
{
public function addNewCat($data)
    {
  return $this->db->insert('category',$data);
    }


    public function all()
    {
      return $categories =$this->db->get('category')->result_array();
    }
    public function getAllCategory($cat_id)
    {   
       $this->db->where('cat_id',$cat_id);
       return $category=$this->db->get('category')->row_array();
     }
     
     public function editCat($cat_id,$formArray)
     {  $this->db->where('cat_id',$cat_id);
      $this->db->update('category',$formArray);
     }
     public function deleteCategory($cat_id)
     {
         $this->db->where('cat_id',$cat_id);
         $this->db->delete('category');
     }
     }
  
?>