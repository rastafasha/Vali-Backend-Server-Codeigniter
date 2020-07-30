<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_fibrobody extends CI_Model 
{
	
	
   
// Fibroblast Body

public function get_bodys($featured, $recentpost)
{
	$this->db->select('body.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('bodys body');
	$this->db->join('users u', 'u.id=body.user_id');
	$this->db->join('categories cat', 'cat.id=body.category_id', 'left');
	$this->db->where('body.is_active', 1);

	if($featured) {
		$this->db->where('body.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('body.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_body($id)
{
	$this->db->select('body.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('bodys body');
	$this->db->where('body.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//

// Fibroblast Body

public function get_admin_bodys()
{
	$this->db->select('body.*, u.first_name, u.last_name');
	$this->db->from('bodys body');
	$this->db->join('users u', 'u.id=body.user_id');
	$this->db->order_by('body.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_body($id)
{
	$this->db->select('body.*, u.first_name, u.last_name');
	$this->db->from('bodys body');
	$this->db->join('users u', 'u.id=body.user_id');
	$this->db->where('body.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//

// Fibroblast Body
public function insertBody($bodyData)
{
	$this->db->insert('bodys', $bodyData);
	return $this->db->insert_id();
}

public function updateBody($id, $bodyData)
{
	$this->db->where('id', $id);
	$this->db->update('bodys', $bodyData);
}

public function deleteBody($id)
{
	$this->db->where('id', $id);
	$this->db->delete('bodys');
}

}