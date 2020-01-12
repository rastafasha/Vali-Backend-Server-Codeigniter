<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_fibroface extends CI_Model 
{
// Fibroblast fibrofaces

public function get_fibrofaces($featured, $recentpost)
{
	$this->db->select('fibroface.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('fibrofaces fibroface');
	$this->db->join('users u', 'u.id=fibroface.user_id');
	$this->db->join('categories cat', 'cat.id=fibroface.category_id', 'left');
	$this->db->where('fibroface.is_active', 1);

	if($featured) {
		$this->db->where('fibroface.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('fibroface.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_fibroface($id)
{
	$this->db->select('fibroface.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('fibrofaces fibroface');
	$this->db->where('fibroface.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//


	
	
	
}
