<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_look extends CI_Model 
{

// Makeup looks

public function get_looks($featured, $recentpost)
{
	$this->db->select('look.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('looks look');
	$this->db->join('users u', 'u.id=look.user_id');
	$this->db->join('categories cat', 'cat.id=look.category_id', 'left');
	$this->db->where('look.is_active', 1);

	if($featured) {
		$this->db->where('look.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('look.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_look($id)
{
	$this->db->select('look.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('looks look');
	$this->db->where('look.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//

	
	
	
}
