<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model_busqueda extends CI_Model 
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

	
	
}
