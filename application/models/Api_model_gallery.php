<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_gallery extends CI_Model 
{
	
    
	// gallery

	public function get_gallerys($featured, $recentpost)
	{
		$this->db->select('gallery.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('gallerys gallery');
		$this->db->join('users u', 'u.id=gallery.user_id');
		$this->db->join('categories cat', 'cat.id=gallery.category_id', 'left');
		$this->db->where('gallery.is_active', 1);

		if($featured) {
			$this->db->where('gallery.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('gallery.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_gallery($id)
	{
		$this->db->select('gallery.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('gallerys gallery');
		$this->db->where('gallery.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//

	// gallery

	public function get_admin_gallerys()
	{
		$this->db->select('gallery.*');
		$this->db->from('gallerys gallery');
		$this->db->order_by('gallery.created_at', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_gallery($id)
	{
		$this->db->select('gallery.*');
		$this->db->from('gallerys gallery');
		$this->db->where('gallery.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
//

// gallery
public function insertGallery($galleryData)
{
	$this->db->insert('gallerys', $galleryData);
	return $this->db->insert_id();
}

public function updateGallery($id, $galleryData)
{
	$this->db->where('id', $id);
	$this->db->update('gallerys', $galleryData);
}

public function deleteGallery($id)
{
	$this->db->where('id', $id);
	$this->db->delete('gallerys');
}

	
	
}
