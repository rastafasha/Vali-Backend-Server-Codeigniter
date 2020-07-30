<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_franchise extends CI_Model 
{
	
    
	// Facial Antiage

	public function get_franchises($featured, $recentpost)
	{
		$this->db->select('franchise.*');
		$this->db->from('franchises franchise');
		$this->db->where('franchise.is_active', 1);

		if($featured) {
			$this->db->where('franchise.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('franchise.created_at', 'asc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_antiage($id)
	{
		$this->db->select('franchise.*');
		$this->db->from('franchises franchise');
		$this->db->where('franchise.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//



// Facial Antiage

public function get_admin_franchises()
{
	$this->db->select('franchise.*, u.first_name, u.last_name');
	$this->db->from('franchises franchise');
	$this->db->join('users u', 'u.id=franchise.user_id');
	$this->db->order_by('franchise.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_franchise($id)
{
	$this->db->select('franchise.*, u.first_name, u.last_name');
	$this->db->from('franchises antiage');
	$this->db->join('users u', 'u.id=franchise.user_id');
	$this->db->where('franchise.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//



	// Facial Antiage
	public function insertFranchise($franchiseData)
	{
		$this->db->insert('franchises', $franchiseData);
		return $this->db->insert_id();
	}

	public function updateFranchise($id, $franchiseData)
	{
		$this->db->where('id', $id);
		$this->db->update('franchises', $franchiseData);
	}

	public function deleteFranchise($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('franchises');
	}

	
	
}
