<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_hypertrophic extends CI_Model 
{
	
	

// Fibroblast hypertrophics

public function get_hypertrophics($featured, $recentpost)
{
	$this->db->select('hypertrophic.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('hypertrophics hypertrophic');
	$this->db->join('users u', 'u.id=hypertrophic.user_id');
	$this->db->join('categories cat', 'cat.id=hypertrophic.category_id', 'left');
	$this->db->where('hypertrophic.is_active', 1);

	if($featured) {
		$this->db->where('hypertrophic.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('hypertrophic.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_hypertrophic($id)
{
	$this->db->select('hypertrophic.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('hypertrophics hypertrophic');
	$this->db->where('hypertrophic.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//

	
	
	
}
