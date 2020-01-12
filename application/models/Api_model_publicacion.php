<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_publicacion extends CI_Model 
{
	
    
	
	// publicacion

	public function get_publicacions($featured, $recentpost)
	{
		$this->db->select('publicacion.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('publicacions publicacion');
		$this->db->join('users u', 'u.id=publicacion.user_id');
		$this->db->join('categories cat', 'cat.id=publicacion.category_id', 'left');
		$this->db->where('publicacion.is_active', 1);

		if($featured) {
			$this->db->where('publicacion.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('publicacion.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_publicacion($id)
	{
		$this->db->select('publicacion.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('publicacions publicacion');
		$this->db->where('publicacion.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//
	
}
