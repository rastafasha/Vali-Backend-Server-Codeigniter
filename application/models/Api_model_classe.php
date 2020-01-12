<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_classe extends CI_Model 
{
	
    
// Makeup Clasess

public function get_clasess($featured, $recentpost)
{
	$this->db->select('clases.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('clasess clases');
	$this->db->join('users u', 'u.id=clases.user_id');
	$this->db->join('categories cat', 'cat.id=clases.category_id', 'left');
	$this->db->where('clases.is_active', 1);

	if($featured) {
		$this->db->where('clases.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('clases.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_clases($id)
{
	$this->db->select('clases.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('clasess clases');
	$this->db->where('clases.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//

	
	
}
