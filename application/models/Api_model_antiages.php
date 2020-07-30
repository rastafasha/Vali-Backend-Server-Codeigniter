<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_antiages extends CI_Model 
{
	
    
	// Facial Antiage

	public function get_antiages($featured, $recentpost)
	{
		$this->db->select('antiage.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('antiages antiage');
		$this->db->join('users u', 'u.id=antiage.user_id');
		$this->db->join('categories cat', 'cat.id=antiage.category_id', 'left');
		$this->db->where('antiage.is_active', 1);

		if($featured) {
			$this->db->where('antiage.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('antiage.created_at', 'asc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_antiage($id)
	{
		$this->db->select('antiage.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('antiages antiage');
		$this->db->where('antiage.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//



// Facial Antiage

public function get_admin_antiages()
{
	$this->db->select('antiage.*, u.first_name, u.last_name');
	$this->db->from('antiages antiage');
	$this->db->join('users u', 'u.id=antiage.user_id');
	$this->db->order_by('antiage.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_antiage($id)
{
	$this->db->select('antiage.*, u.first_name, u.last_name');
	$this->db->from('antiages antiage');
	$this->db->join('users u', 'u.id=antiage.user_id');
	$this->db->where('antiage.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//



	// Facial Antiage
	public function insertAntiage($antiageData)
	{
		$this->db->insert('antiages', $antiageData);
		return $this->db->insert_id();
	}

	public function updateAntiage($id, $antiageData)
	{
		$this->db->where('id', $id);
		$this->db->update('antiages', $antiageData);
	}

	public function deleteAntiage($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('antiages');
	}

	
	
}
