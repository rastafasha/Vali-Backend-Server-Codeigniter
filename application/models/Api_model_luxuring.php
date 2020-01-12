<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_wax extends CI_Model 
{
	
	// facial luxury

public function get_luxurings($featured, $recentpost)
{
	$this->db->select('luxuring.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('luxurings luxuring');
	$this->db->join('users u', 'u.id=luxuring.user_id');
	$this->db->join('categories cat', 'cat.id=luxuring.category_id', 'left');
	$this->db->where('luxuring.is_active', 1);

	if($featured) {
		$this->db->where('luxuring.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('luxuring.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_luxuring($id)
{
	$this->db->select('luxuring.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('luxurings luxuring');
	$this->db->where('luxuring.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//

	
	
	
}
