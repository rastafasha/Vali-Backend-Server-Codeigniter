<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_calming extends CI_Model 
{
	
    
	
	// Facial Calming

	public function get_calmings($featured, $recentpost)
	{
		$this->db->select('calming.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('calmings calming');
		$this->db->join('users u', 'u.id=calming.user_id');
		$this->db->join('categories cat', 'cat.id=calming.category_id', 'left');
		$this->db->where('calming.is_active', 1);

		if($featured) {
			$this->db->where('calming.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('calming.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_calming($id)
	{
		$this->db->select('calming.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('calmings calming');
		$this->db->where('calming.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//
	
	
}
