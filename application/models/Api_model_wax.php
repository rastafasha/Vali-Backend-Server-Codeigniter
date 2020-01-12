<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_wax extends CI_Model 
{
	
	// wax

	public function get_waxs($featured, $recentpost)
	{
		$this->db->select('wax.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('waxs wax');
		$this->db->join('users u', 'u.id=wax.user_id');
		$this->db->join('categories cat', 'cat.id=wax.category_id', 'left');
		$this->db->where('wax.is_active', 1);

		if($featured) {
			$this->db->where('wax.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('wax.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_wax($id)
	{
		$this->db->select('wax.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('waxs wax');
		$this->db->where('wax.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//

	
	
	
}
