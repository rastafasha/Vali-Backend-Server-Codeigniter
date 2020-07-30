<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_luxuring extends CI_Model 
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



// Facial Luxury
public function get_admin_luxurings()
{
	$this->db->select('luxuring.*, u.first_name, u.last_name');
	$this->db->from('luxurings luxuring');
	$this->db->join('users u', 'u.id=luxuring.user_id');
	$this->db->order_by('luxuring.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_luxuring($id)
{
	$this->db->select('luxuring.*, u.first_name, u.last_name');
	$this->db->from('luxurings luxuring');
	$this->db->join('users u', 'u.id=luxuring.user_id');
	$this->db->where('luxuring.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//

// Facial Luxury
		
public function insertLuxuring($luxuringData)
{
	$this->db->insert('luxurings', $luxuringData);
	return $this->db->insert_id();
}

public function updateLuxuring($id, $luxuringData)
{
	$this->db->where('id', $id);
	$this->db->update('luxurings', $luxuringData);
}

public function deleteLuxuring($id)
{
	$this->db->where('id', $id);
	$this->db->delete('luxurings');
}

//

	
	
	
}
