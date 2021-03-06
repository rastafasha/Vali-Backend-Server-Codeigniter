<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_permanent extends CI_Model 
{
	
	
	

	// permanent makeup

	public function get_permanents($featured, $recentpost)
	{
		$this->db->select('permanent.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('permanents permanent');
		$this->db->join('users u', 'u.id=permanent.user_id');
		$this->db->join('categories cat', 'cat.id=permanent.category_id', 'left');
		$this->db->where('permanent.is_active', 1);

		if($featured) {
			$this->db->where('permanent.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('permanent.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_permanent($id)
	{
		$this->db->select('permanent.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('permanents permanent');
		$this->db->where('permanent.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//



// permanent makeup

public function get_admin_permanents()
{
	$this->db->select('permanent.*, u.first_name, u.last_name');
	$this->db->from('permanents permanent');
	$this->db->join('users u', 'u.id=permanent.user_id');
	$this->db->order_by('permanent.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_permanent($id)
{
	$this->db->select('permanent.*, u.first_name, u.last_name');
	$this->db->from('permanents permanent');
	$this->db->join('users u', 'u.id=permanent.user_id');
	$this->db->where('permanent.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//

// permanent makeup
public function insertPermanent($permanentData)
{
	$this->db->insert('permanents', $permanentData);
	return $this->db->insert_id();
}

public function updatePermanent($id, $permanentData)
{
	$this->db->where('id', $id);
	$this->db->update('permanents', $permanentData);
}

public function deletePermanent($id)
{
	$this->db->where('id', $id);
	$this->db->delete('permanents');
}


	
	
	
}
