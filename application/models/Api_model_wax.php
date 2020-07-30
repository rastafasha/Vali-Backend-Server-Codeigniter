<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_wax extends CI_Model 
{
	
	// wax

	public function get_waxs($featured, $recentpost)
	{
		$this->db->select('wax.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('waxs wax');
		$this->db->join('users u', 'u.id=wax.user_id');
		$this->db->join('categories cat', 'cat.id=wax.category_id', 'left');
		$this->db->where('wax.is_active', 1);

		if($featured) {
			$this->db->where('wax.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('wax.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_wax($id)
	{
		$this->db->select('wax.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('waxs wax');
		$this->db->where('wax.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//

	// wax

public function get_admin_waxs()
{
	$this->db->select('wax.*, u.first_name, u.last_name');
	$this->db->from('waxs wax');
	$this->db->join('users u', 'u.id=wax.user_id');
	$this->db->order_by('wax.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_wax($id)
{
	$this->db->select('wax.*, u.first_name, u.last_name');
	$this->db->from('waxs wax');
	$this->db->join('users u', 'u.id=wax.user_id');
	$this->db->where('wax.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//


// wax
public function insertWax($waxData)
{
	$this->db->insert('waxs', $waxData);
	return $this->db->insert_id();
}

public function updateWax($id, $waxData)
{
	$this->db->where('id', $id);
	$this->db->update('waxs', $waxData);
}

public function deleteWax($id)
{
	$this->db->where('id', $id);
	$this->db->delete('waxs');
}

//


	

	
	
	
}
