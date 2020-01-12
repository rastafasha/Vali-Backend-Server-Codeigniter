<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_wax extends CI_Model 
{
	
	// Body Hand and legs

public function get_hands($featured, $recentpost)
{
	$this->db->select('hand.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('hands hand');
	$this->db->join('users u', 'u.id=hand.user_id');
	$this->db->join('categories cat', 'cat.id=hand.category_id', 'left');
	$this->db->where('hand.is_active', 1);

	if($featured) {
		$this->db->where('hand.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('hand.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_hand($id)
{
	$this->db->select('hand.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('hands hand');
	$this->db->where('hand.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//

	
	
	
}
