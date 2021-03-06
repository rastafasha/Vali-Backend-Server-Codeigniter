<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_bridal extends CI_Model 
{


// Makeup Bridal look

public function get_bridals($featured, $recentpost)
{
	$this->db->select('bridal.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('bridals bridal');
	$this->db->join('users u', 'u.id=bridal.user_id');
	$this->db->join('categories cat', 'cat.id=bridal.category_id', 'left');
	$this->db->where('bridal.is_active', 1);

	if($featured) {
		$this->db->where('bridal.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('bridal.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_bridal($id)
{
	$this->db->select('bridal.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('bridals bridal');
	$this->db->where('bridal.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//


// Makeup Bridal looks

public function get_admin_bridals()
{
	$this->db->select('bridal.*, u.first_name, u.last_name');
	$this->db->from('bridals bridal');
	$this->db->join('users u', 'u.id=bridal.user_id');
	$this->db->order_by('bridal.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_bridal($id)
{
	$this->db->select('bridal.*, u.first_name, u.last_name');
	$this->db->from('bridals bridal');
	$this->db->join('users u', 'u.id=bridal.user_id');
	$this->db->where('bridal.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//

// Makeup  Bridal looks
public function insertBridal($bridalData)
{
	$this->db->insert('bridals', $bridalData);
	return $this->db->insert_id();
}

public function updateBridal($id, $bridalData)
{
	$this->db->where('id', $id);
	$this->db->update('bridals', $bridalData);
}

public function deleteBridal($id)
{
	$this->db->where('id', $id);
	$this->db->delete('bridals');
}

	
	
	
}
