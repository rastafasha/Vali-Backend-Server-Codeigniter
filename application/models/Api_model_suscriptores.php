<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_suscriptores extends CI_Model 
{
	
    

	// subcriptores

	public function get_subcriptores($featured, $recentpost)
	{
		$this->db->select('subcriptore.*');
		$this->db->from('subcriptores subcriptore');

		if($recentpost){
			$this->db->order_by('subcriptore.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_subcriptore($id)
	{
		$this->db->select('subcriptore.*');
		$this->db->from('subcriptores subcriptore');
		$this->db->join('email u', 'u.id=subcriptore.email');
		$this->db->where('subcriptore.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

//Crud

// subcriptores
public function insert_subcritore($subcritoreData)
{
	$this->db->insert('subcriptores', $subcritoreData);
	return $this->db->insert_id();
}

public function login($username, $password) 
{
	$this->db->where('username', $username);
	$this->db->where('password', md5($password));
	$query = $this->db->get('users');

	if($query->num_rows() == 1) {
		return $query->row();
	}
}

//

	
	
}
