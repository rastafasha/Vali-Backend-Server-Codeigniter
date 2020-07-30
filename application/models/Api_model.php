<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model 
{
	
	// resultados

	public function search_products($text)
	{
		$this->db->select('*');
		$this->db->from('products product');
		$this->db->like('title', $text, 'both');
		$this->db->like('titleesp', $text, 'both');
		$this->db->or_like('type', $text, 'both');
		$this->db->or_like('description', $text, 'both');
		$this->db->or_like('descriptionesp', $text, 'both');

		$query = $this->db->get();
		return $query->result();
	}

	//

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


	//categorias

	public function get_categories()
	{
		$query = $this->db->get('categories');
		return $query->result();
	}
	//pages

	public function get_page($slug)
	{
		$this->db->where('slug', $slug);
		$query = $this->db->get('pages');
		return $query->row();
	}

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


// login
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


// Users

public function get_users()
{
    $this->db->select('user.*');
    $this->db->from('users user');
    $this->db->where('user.is_active', 1);

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
		$this->db->select('user.*');
		$this->db->from('users user');
		$this->db->order_by('user.created_at', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_user($id)
	{
		$this->db->select('user.*');
		$this->db->from('users user');
		$this->db->join('users u', 'u.id=user.user_id');
		$this->db->where('user.id', $id);
		$query = $this->db->get();
		return $query->row();
	}


// contact

public function get_admin_contacts()
{
	$this->db->select('contact.*');
	$this->db->from('contacts contact');
	$this->db->order_by('contact.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_contact($id)
{
	$this->db->select('contact.*');
	$this->db->from('contacts contact');
	$this->db->where('contact.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//
	public function checkToken($token)
	{
		$this->db->where('token', $token);
		$query = $this->db->get('users');

		if($query->num_rows() == 1) {
			return true;
		}
		return false;
	}

	

	
// User
	public function insertUser($userData)
	{
		$this->db->insert('users', $userData);
		return $this->db->insert_id();
	}

	public function updateUser($id, $userData)
	{
		$this->db->where('id', $id);
		$this->db->update('users', $userData);
	}

	public function deleteUser($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('users');
	}
	//
}
