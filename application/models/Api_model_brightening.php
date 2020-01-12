<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_brightening extends CI_Model 
{
	
    
	

	// Facial brightenings

	public function get_brightenings($featured, $recentpost)
	{
		$this->db->select('brightening.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('brightenings brightening');
		$this->db->join('users u', 'u.id=brightening.user_id');
		$this->db->join('categories cat', 'cat.id=brightening.category_id', 'left');
		$this->db->where('brightening.is_active', 1);

		if($featured) {
			$this->db->where('brightening.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('brightening.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_brightening($id)
	{
		$this->db->select('brightening.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('brightenings brightening');
		$this->db->where('brightening.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//

	
}
