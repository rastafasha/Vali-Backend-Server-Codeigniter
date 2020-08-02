<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_financing extends CI_Model 
{
	
	

public function get_financings($featured, $recentpost)
{
	$this->db->select('financing.*');
	$this->db->from('financings financing');
	$this->db->join('users u', 'u.id=financing.user_id');
	$this->db->where('financing.is_active', 1);

	if($featured) {
		$this->db->where('financing.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('financing.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_financing($id)
{
	$this->db->select('financing.*');
	$this->db->from('financings financing');
	$this->db->where('financing.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//



// 

public function get_admin_financings()
{
	$this->db->select('financing.*');
	$this->db->from('financings financing');
	$this->db->join('users u', 'u.id=financing.user_id');
	$this->db->order_by('financing.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_financing($id)
{
	$this->db->select('financing.*');
	$this->db->from('financings financing');
	$this->db->join('users u', 'u.id=financing.user_id');
	$this->db->where('financing.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//

// crud
public function insertFinancing($financingData)
{
	$this->db->insert('financings', $financingData);
	return $this->db->insert_id();
}

public function getFinancing($financingData)
{
	$this->db->get('financings', $financingData);
	return $this->db->insert_id();
}

public function updateFinancing($id, $financingData)
{
	$this->db->where('id', $id);
	$this->db->update('financings', $financingData);
}

public function deleteFinancing($id)
{
	$this->db->where('id', $id);
	$this->db->delete('financings');
}

	
	
	
}
