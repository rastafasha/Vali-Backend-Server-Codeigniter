<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_restorative extends CI_Model 
{
	
    
	
	// Facial Restorative

	public function get_restoratives($featured, $recentpost)
	{
		$this->db->select('restorative.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('restoratives restorative');
		$this->db->join('users u', 'u.id=restorative.user_id');
		$this->db->join('categories cat', 'cat.id=restorative.category_id', 'left');
		$this->db->where('restorative.is_active', 1);

		if($featured) {
			$this->db->where('restorative.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('restorative.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_restorative($id)
	{
		$this->db->select('restorative.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('restoratives restorative');
		$this->db->where('restorative.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//


// Facial Restorative

public function get_admin_restoratives()
{
	$this->db->select('restorative.*, u.first_name, u.last_name');
	$this->db->from('restoratives restorative');
	$this->db->join('users u', 'u.id=restorative.user_id');
	$this->db->order_by('restorative.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_restorative($id)
{
	$this->db->select('restorative.*, u.first_name, u.last_name');
	$this->db->from('restoratives restorative');
	$this->db->join('users u', 'u.id=restorative.user_id');
	$this->db->where('restorative.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//

	
	// Facial Restorative
	public function insertRestorative($restorativeData)
	{
		$this->db->insert('restoratives', $restorativeData);
		return $this->db->insert_id();
	}

	public function updateRestorative($id, $restorativeData)
	{
		$this->db->where('id', $id);
		$this->db->update('restoratives', $restorativeData);
	}

	public function deleteRestorative($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('restoratives');
	}
	
}
