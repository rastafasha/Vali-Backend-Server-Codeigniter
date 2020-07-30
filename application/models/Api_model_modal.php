<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_modal extends CI_Model 
{
	
    
	
	// modal home

	public function get_modals($featured, $recentpost)
	{
		$this->db->select('modal.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('modals modal');
		$this->db->join('users u', 'u.id=modal.user_id');
		$this->db->join('categories cat', 'cat.id=modal.category_id', 'left');
		$this->db->where('modal.is_active', 1);

		if($featured) {
			$this->db->where('modal.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('modal.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_modal($id)
	{
		$this->db->select('modal.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('modals modal');
		$this->db->where('modal.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//


	// Modal home

	public function get_admin_modals()
	{
		$this->db->select('modal.*, u.first_name, u.last_name');
		$this->db->from('modals modal');
		$this->db->join('users u', 'u.id=modal.user_id');
		$this->db->order_by('modal.created_at', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_modal($id)
	{
		$this->db->select('modal.*, u.first_name, u.last_name');
		$this->db->from('modals modal');
		$this->db->join('users u', 'u.id=modal.user_id');
		$this->db->where('modal.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
//

// Modal home
public function insertModal($modalData)
{
	$this->db->insert('modals', $modalData);
	return $this->db->insert_id();
}

public function updateModal($id, $modalData)
{
	$this->db->where('id', $id);
	$this->db->update('modals', $modalData);
}

public function deleteModal($id)
{
	$this->db->where('id', $id);
	$this->db->delete('modals');
}


	
	
}
