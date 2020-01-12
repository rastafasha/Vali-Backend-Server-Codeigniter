<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_contact extends CI_Model 
{
	
    
	// contact

	/*public function get_contacts($featured, $recentpost)
	{
		$this->db->select('contact.*');
		$this->db->from('contacts contact');

		if($recentpost){
			$this->db->order_by('contact.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_contact($id)
	{
		$this->db->select('contact.*');
		$this->db->from('contacts contact');
		$this->db->join('name u', 'u.id=contact.name');
		$this->db->join('lastname u', 'u.id=contact.lastname');
		$this->db->join('email u', 'u.id=contact.email');
		$this->db->join('phone u', 'u.id=contact.phone');
		$this->db->join('message u', 'u.id=contact.message');
		$this->db->where('contact.id', $id);
		$query = $this->db->get();
		return $query->row();
	}*/

	public function get_contacts($featured, $recentpost)
	{
		$this->db->select('contact.*');
		$this->db->from('contacts contact');

		
		$query = $this->db->get();
		return $query->result();
	}

	public function get_contact($id)
	{
		$this->db->select('contact.*');
		$this->db->from('contacts contact');
		$query = $this->db->get();
		return $query->row();
	}
	//

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

// contact
public function insert_contact($contactData)
{
	$this->db->insert('contacts', $contactData);
	return $this->db->insert_id();
}

public function updateContact($id, $contactData)
{
$this->db->where('id', $id);
$this->db->update('contacts', $contactData);
}

public function deleteContact($id)
{
$this->db->where('id', $id);
$this->db->delete('contacts');
}


//

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
