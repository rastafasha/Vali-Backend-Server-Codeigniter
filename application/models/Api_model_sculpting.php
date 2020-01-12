<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_sculpting extends CI_Model 
{
	

// Body Sculpting

public function get_sculptings($featured, $recentpost)
{
	$this->db->select('sculpting.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('sculptings sculpting');
	$this->db->join('users u', 'u.id=sculpting.user_id');
	$this->db->join('categories cat', 'cat.id=sculpting.category_id', 'left');
	$this->db->where('sculpting.is_active', 1);

	if($featured) {
		$this->db->where('sculpting.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('sculpting.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_sculpting($id)
{
	$this->db->select('sculpting.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('sculptings sculpting');
	$this->db->where('sculpting.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//

	
	
	
}
