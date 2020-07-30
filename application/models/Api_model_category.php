<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_category extends CI_Model 
{
	
	

	//categorias

	public function get_categories()
	{
		$query = $this->db->get('categories');
		return $query->result();
    }
    
    public function get_productsbycategory()
	{
		$this->db->select('categories.*');
		$this->db->from('waxs wax');
        $this->db->inner_join('categories');
        $this->db->join('categories id', 'categories.id=waxs.category_id');
		$query = $this->db->get();
		return $query->row();
    }
    
    //SELECT * from waxs INNER JOIN categories on categories.id = waxs.category_id
	
}
