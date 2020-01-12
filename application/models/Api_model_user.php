<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_user extends CI_Model 
{
	
	
    
    // Users

public function get_users($featured, $recentpost)
{
    $this->db->select('user.*, cat.category_name, u.first_name, u.last_name');
    $this->db->from('users user');
    $this->db->join('users u', 'u.id=user.user_id');
    $this->db->where('user.is_active', 1);

    if($featured) {
        $this->db->where('user.is_featured', 1);
    }
    if($recentpost){
        $this->db->order_by('user.created_at', 'desc');
        $this->db->limit($recentpost);
    }
    $query = $this->db->get();
    return $query->result();
}

public function get_user($id)
{
    $this->db->select('user.*');
    $this->db->from('users user');
    $this->db->where('user.id', $id);
    $query = $this->db->get();
    return $query->row();
}

//


public function get_admin_users()
	{
		$this->db->select('user.*, u.first_name, u.last_name');
		$this->db->from('users blog');
		$this->db->join('users u', 'u.id=user.user_id');
		$this->db->order_by('user.created_at', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_user($id)
	{
		$this->db->select('user.*, u.first_name, u.last_name');
		$this->db->from('users blog');
		$this->db->join('users u', 'u.id=user.user_id');
		$this->db->where('user.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
}