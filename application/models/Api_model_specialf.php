<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_specialf extends CI_Model 
{
	
	// Facial Special 

	public function get_specialfs($featured, $recentpost)
	{
		$this->db->select('specialf.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('specialfs specialf');
		$this->db->join('users u', 'u.id=specialf.user_id');
		$this->db->join('categories cat', 'cat.id=specialf.category_id', 'left');
		$this->db->where('specialf.is_active', 1);

		if($featured) {
			$this->db->where('specialf.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('specialf.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_specialf($id)
	{
		$this->db->select('specialf.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('specialfs specialf');
		$this->db->where('specialf.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//


// Facial special

public function get_admin_specialfs()
{
	$this->db->select('specialf.*, u.first_name, u.last_name');
	$this->db->from('specialfs specialf');
	$this->db->join('users u', 'u.id=specialf.user_id');
	$this->db->order_by('specialf.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_specialf($id)
{
	$this->db->select('specialf.*, u.first_name, u.last_name');
	$this->db->from('specialfs specialf');
	$this->db->join('users u', 'u.id=specialf.user_id');
	$this->db->where('specialf.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//


// Facial Special
public function insertSpecialf($specialfData)
{
	$this->db->insert('specialfs', $specialfData);
	return $this->db->insert_id();
}

public function updateSpecialf($id, $specialfData)
{
	$this->db->where('id', $id);
	$this->db->update('specialfs', $specialfData);
}

public function deleteSpecialf($id)
{
	$this->db->where('id', $id);
	$this->db->delete('specialfs');
}

	
	
	
}
