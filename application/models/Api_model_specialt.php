<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_specialt extends CI_Model 
{
	
    // special treatments

	public function get_specialts($featured, $recentpost)
	{
		$this->db->select('specialt.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('specialts specialt');
		$this->db->join('users u', 'u.id=specialt.user_id');
		$this->db->join('categories cat', 'cat.id=specialt.category_id', 'left');
		$this->db->where('specialt.is_active', 1);

		if($featured) {
			$this->db->where('specialt.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('specialt.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_specialt($id)
	{
		$this->db->select('specialt.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('specialts specialt');
		$this->db->where('specialt.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//



// special treatment

public function get_admin_specialts()
{
	$this->db->select('specialt.*, u.first_name, u.last_name');
	$this->db->from('specialts specialt');
	$this->db->join('users u', 'u.id=specialt.user_id');
	$this->db->order_by('specialt.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_specialt($id)
{
	$this->db->select('specialt.*, u.first_name, u.last_name');
	$this->db->from('specialts specialt');
	$this->db->join('users u', 'u.id=specialt.user_id');
	$this->db->where('specialt.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//

// special treatment
public function insertSpecialt($specialtData)
{
	$this->db->insert('specialts', $specialtData);
	return $this->db->insert_id();
}

public function updateSpecialt($id, $specialtData)
{
	$this->db->where('id', $id);
	$this->db->update('specialts', $specialtData);
}

public function deleteSpecialt($id)
{
	$this->db->where('id', $id);
	$this->db->delete('specialts');
}

	
	
}
