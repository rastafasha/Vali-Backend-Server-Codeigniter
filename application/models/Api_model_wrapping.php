<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_wrapping extends CI_Model 
{
	



// Body wrappings

public function get_wrappings($featured, $recentpost)
{
	$this->db->select('wrapping.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('wrappings wrapping');
	$this->db->join('users u', 'u.id=wrapping.user_id');
	$this->db->join('categories cat', 'cat.id=wrapping.category_id', 'left');
	$this->db->where('wrapping.is_active', 1);

	if($featured) {
		$this->db->where('wrapping.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('wrapping.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_wrapping($id)
{
	$this->db->select('wrapping.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('wrappings wrapping');
	$this->db->where('wrapping.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//

// Body wrapping

public function get_admin_wrappings()
{
	$this->db->select('wrapping.*, u.first_name, u.last_name');
	$this->db->from('wrappings wrapping');
	$this->db->join('users u', 'u.id=wrapping.user_id');
	$this->db->order_by('wrapping.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_wrapping($id)
{
	$this->db->select('wrapping.*, u.first_name, u.last_name');
	$this->db->from('wrappings wrapping');
	$this->db->join('users u', 'u.id=wrapping.user_id');
	$this->db->where('wrapping.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//

	// Body wrapping
	public function insertWrapping($wrappingData)
	{
		$this->db->insert('wrappings', $wrappingData);
		return $this->db->insert_id();
	}

	public function updateWrapping($id, $wrappingData)
	{
		$this->db->where('id', $id);
		$this->db->update('wrappings', $wrappingData);
	}

	public function deleteWrapping($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('wrappings');
	}

	
	
	
}
