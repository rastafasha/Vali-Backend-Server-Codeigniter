<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_model extends CI_Model 
{
	public function get_blogs($featured, $recentpost)
	{
		$this->db->select('blog.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('blogs blog');
		$this->db->join('users u', 'u.id=blog.user_id');
		$this->db->join('categories cat', 'cat.id=blog.category_id', 'left');
		$this->db->where('blog.is_active', 1);

		if($featured) {
			$this->db->where('blog.is_featured', 1);
		}
		if($recentpost){ 
			$this->db->order_by('blog.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_blog($id)
	{
		$this->db->select('blog.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('blogs blog');
		$this->db->join('users u', 'u.id=blog.user_id');
		$this->db->join('categories cat', 'cat.id=blog.category_id', 'left');
		$this->db->where('blog.is_active', 1);
		$this->db->where('blog.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

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
		$this->db->select('user.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('users user');
		$this->db->where('user.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//


	// wax

	public function get_waxs($featured, $recentpost)
	{
		$this->db->select('wax.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('waxs wax');
		$this->db->join('users u', 'u.id=wax.user_id');
		$this->db->join('categories cat', 'cat.id=wax.category_id', 'left');
		$this->db->where('wax.is_active', 1);

		if($featured) {
			$this->db->where('wax.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('wax.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_wax($id)
	{
		$this->db->select('wax.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('waxs wax');
		$this->db->where('wax.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//

	

	// permanent makeup

	public function get_permanents($featured, $recentpost)
	{
		$this->db->select('permanent.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('permanents permanent');
		$this->db->join('users u', 'u.id=permanent.user_id');
		$this->db->join('categories cat', 'cat.id=permanent.category_id', 'left');
		$this->db->where('permanent.is_active', 1);

		if($featured) {
			$this->db->where('permanent.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('permanent.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_permanent($id)
	{
		$this->db->select('permanent.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('permanents permanent');
		$this->db->where('permanent.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//


	// special treatments

	public function get_specialts($featured, $recentpost)
	{
		$this->db->select('specialt.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('specialts specialt');
		$this->db->join('users u', 'u.id=specialt.user_id');
		$this->db->join('categories cat', 'cat.id=specialt.category_id', 'left');
		$this->db->where('specialt.is_active', 1);

		if($featured) {
			$this->db->where('specialt.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('specialt.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_specialt($id)
	{
		$this->db->select('specialt.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('specialts specialt');
		$this->db->where('specialt.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//


	// Facial Antiage

	public function get_antiages($featured, $recentpost)
	{
		$this->db->select('antiage.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('antiages antiage');
		$this->db->join('users u', 'u.id=antiage.user_id');
		$this->db->join('categories cat', 'cat.id=antiage.category_id', 'left');
		$this->db->where('antiage.is_active', 1);

		if($featured) {
			$this->db->where('antiage.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('antiage.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_antiage($id)
	{
		$this->db->select('antiage.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('antiages antiage');
		$this->db->where('antiage.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//

	// Facial Restorative

	public function get_restoratives($featured, $recentpost)
	{
		$this->db->select('restorative.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('restoratives restorative');
		$this->db->join('users u', 'u.id=restorative.user_id');
		$this->db->join('categories cat', 'cat.id=restorative.category_id', 'left');
		$this->db->where('restorative.is_active', 1);

		if($featured) {
			$this->db->where('restorative.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('restorative.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_restorative($id)
	{
		$this->db->select('restorative.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('restoratives restorative');
		$this->db->where('restorative.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//

	// Facial Calming

	public function get_calmings($featured, $recentpost)
	{
		$this->db->select('calming.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('calmings calming');
		$this->db->join('users u', 'u.id=calming.user_id');
		$this->db->join('categories cat', 'cat.id=calming.category_id', 'left');
		$this->db->where('calming.is_active', 1);

		if($featured) {
			$this->db->where('calming.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('calming.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_calming($id)
	{
		$this->db->select('calming.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('calmings calming');
		$this->db->where('calming.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//


	// Facial brightenings

	public function get_brightenings($featured, $recentpost)
	{
		$this->db->select('brightening.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('brightenings brightening');
		$this->db->join('users u', 'u.id=brightening.user_id');
		$this->db->join('categories cat', 'cat.id=brightening.category_id', 'left');
		$this->db->where('brightening.is_active', 1);

		if($featured) {
			$this->db->where('brightening.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('brightening.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_brightening($id)
	{
		$this->db->select('brightening.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('brightenings brightening');
		$this->db->where('brightening.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//

	// Facial Special 

	public function get_specialfs($featured, $recentpost)
	{
		$this->db->select('specialf.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('specialfs specialf');
		$this->db->join('users u', 'u.id=specialf.user_id');
		$this->db->join('categories cat', 'cat.id=specialf.category_id', 'left');
		$this->db->where('specialf.is_active', 1);

		if($featured) {
			$this->db->where('specialf.is_featured', 1);
		}
		if($recentpost){
			$this->db->order_by('specialf.created_at', 'desc');
			$this->db->limit($recentpost);
		}
		$query = $this->db->get();
		return $query->result();
	}

	public function get_specialf($id)
	{
		$this->db->select('specialf.*, cat.category_name, u.first_name, u.last_name');
		$this->db->from('specialfs specialf');
		$this->db->where('specialf.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	//

// facial luxury

public function get_luxurings($featured, $recentpost)
{
	$this->db->select('luxuring.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('luxurings luxuring');
	$this->db->join('users u', 'u.id=luxuring.user_id');
	$this->db->join('categories cat', 'cat.id=luxuring.category_id', 'left');
	$this->db->where('luxuring.is_active', 1);

	if($featured) {
		$this->db->where('luxuring.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('luxuring.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_luxuring($id)
{
	$this->db->select('luxuring.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('luxurings luxuring');
	$this->db->where('luxuring.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//

// Body Hand and legs

public function get_hands($featured, $recentpost)
{
	$this->db->select('hand.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('hands hand');
	$this->db->join('users u', 'u.id=hand.user_id');
	$this->db->join('categories cat', 'cat.id=hand.category_id', 'left');
	$this->db->where('hand.is_active', 1);

	if($featured) {
		$this->db->where('hand.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('hand.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_hand($id)
{
	$this->db->select('hand.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('hands hand');
	$this->db->where('hand.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//

// Body Sculpting

public function get_sculptings($featured, $recentpost)
{
	$this->db->select('sculpting.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('sculptings sculpting');
	$this->db->join('users u', 'u.id=sculpting.user_id');
	$this->db->join('categories cat', 'cat.id=sculpting.category_id', 'left');
	$this->db->where('sculpting.is_active', 1);

	if($featured) {
		$this->db->where('sculpting.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('sculpting.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_sculpting($id)
{
	$this->db->select('sculpting.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('sculptings sculpting');
	$this->db->where('sculpting.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//

// Body wrappings

public function get_wrappings($featured, $recentpost)
{
	$this->db->select('wrapping.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('wrappings wrapping');
	$this->db->join('users u', 'u.id=wrapping.user_id');
	$this->db->join('categories cat', 'cat.id=wrapping.category_id', 'left');
	$this->db->where('wrapping.is_active', 1);

	if($featured) {
		$this->db->where('wrapping.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('wrapping.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_wrapping($id)
{
	$this->db->select('wrapping.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('wrappings wrapping');
	$this->db->where('wrapping.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//

// Makeup looks

public function get_looks($featured, $recentpost)
{
	$this->db->select('look.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('looks look');
	$this->db->join('users u', 'u.id=look.user_id');
	$this->db->join('categories cat', 'cat.id=look.category_id', 'left');
	$this->db->where('look.is_active', 1);

	if($featured) {
		$this->db->where('look.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('look.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_look($id)
{
	$this->db->select('look.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('looks look');
	$this->db->where('look.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//

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

// Makeup Clasess

public function get_clasess($featured, $recentpost)
{
	$this->db->select('clases.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('clasess clases');
	$this->db->join('users u', 'u.id=clases.user_id');
	$this->db->join('categories cat', 'cat.id=clases.category_id', 'left');
	$this->db->where('clases.is_active', 1);

	if($featured) {
		$this->db->where('clases.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('clases.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_clases($id)
{
	$this->db->select('clases.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('clasess clases');
	$this->db->where('clases.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//

// Fibroblast fibrofaces

public function get_fibrofaces($featured, $recentpost)
{
	$this->db->select('fibroface.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('fibrofaces fibroface');
	$this->db->join('users u', 'u.id=fibroface.user_id');
	$this->db->join('categories cat', 'cat.id=fibroface.category_id', 'left');
	$this->db->where('fibroface.is_active', 1);

	if($featured) {
		$this->db->where('fibroface.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('fibroface.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_fibroface($id)
{
	$this->db->select('fibroface.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('fibrofaces fibroface');
	$this->db->where('fibroface.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//

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



// Fibroblast hypertrophics

public function get_hypertrophics($featured, $recentpost)
{
	$this->db->select('hypertrophic.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('hypertrophics hypertrophic');
	$this->db->join('users u', 'u.id=hypertrophic.user_id');
	$this->db->join('categories cat', 'cat.id=hypertrophic.category_id', 'left');
	$this->db->where('hypertrophic.is_active', 1);

	if($featured) {
		$this->db->where('hypertrophic.is_featured', 1);
	}
	if($recentpost){
		$this->db->order_by('hypertrophic.created_at', 'desc');
		$this->db->limit($recentpost);
	}
	$query = $this->db->get();
	return $query->result();
}

public function get_hypertrophic($id)
{
	$this->db->select('hypertrophic.*, cat.category_name, u.first_name, u.last_name');
	$this->db->from('hypertrophics hypertrophic');
	$this->db->where('hypertrophic.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//



	public function get_categories()
	{
		$query = $this->db->get('categories');
		return $query->result();
	}

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

	
	//
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

	public function get_admin_blogs()
	{
		$this->db->select('blog.*, u.first_name, u.last_name');
		$this->db->from('blogs blog');
		$this->db->join('users u', 'u.id=blog.user_id');
		$this->db->order_by('blog.created_at', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_blog($id)
	{
		$this->db->select('blog.*, u.first_name, u.last_name');
		$this->db->from('blogs blog');
		$this->db->join('users u', 'u.id=blog.user_id');
		$this->db->where('blog.id', $id);
		$query = $this->db->get();
		return $query->row();
	}

	// gallery

	public function get_admin_gallerys()
	{
		$this->db->select('gallery.*, u.first_name, u.last_name');
		$this->db->from('gallerys gallery');
		$this->db->join('users u', 'u.id=gallery.user_id');
		$this->db->order_by('gallery.created_at', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_gallery($id)
	{
		$this->db->select('gallery.*, u.first_name, u.last_name');
		$this->db->from('gallerys gallery');
		$this->db->join('users u', 'u.id=gallery.user_id');
		$this->db->where('gallery.id', $id);
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


	// publicacion

	public function get_admin_publicacions()
	{
		$this->db->select('publicacion.*, u.first_name, u.last_name');
		$this->db->from('publicacions publicacion');
		$this->db->join('users u', 'u.id=publicacion.user_id');
		$this->db->order_by('publicacion.created_at', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_admin_publicacion($id)
	{
		$this->db->select('publicacion.*, u.first_name, u.last_name');
		$this->db->from('publicacions publicacion');
		$this->db->join('users u', 'u.id=publicacion.user_id');
		$this->db->where('publicacion.id', $id);
		$query = $this->db->get();
		return $query->row();
	}
//

// User

public function get_admin_users()
{
	$this->db->select('user.*, u.first_name, u.last_name');
	$this->db->from('users user');
	$this->db->join('users u', 'u.id=user.id');
	$this->db->order_by('user.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_user($id)
{
	$this->db->select('user.*, u.first_name, u.last_name');
	$this->db->from('users user');
	$this->db->join('users u', 'u.id=user.id');
	$this->db->where('user.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//


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


// wax

public function get_admin_waxs()
{
	$this->db->select('wax.*, u.first_name, u.last_name');
	$this->db->from('waxs wax');
	$this->db->join('users u', 'u.id=wax.user_id');
	$this->db->order_by('wax.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_wax($id)
{
	$this->db->select('wax.*, u.first_name, u.last_name');
	$this->db->from('waxs wax');
	$this->db->join('users u', 'u.id=wax.user_id');
	$this->db->where('wax.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//



// permanent makeup

public function get_admin_permanents()
{
	$this->db->select('permanent.*, u.first_name, u.last_name');
	$this->db->from('permanents permanent');
	$this->db->join('users u', 'u.id=permanent.user_id');
	$this->db->order_by('permanent.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_permanent($id)
{
	$this->db->select('permanent.*, u.first_name, u.last_name');
	$this->db->from('permanents permanent');
	$this->db->join('users u', 'u.id=permanent.user_id');
	$this->db->where('permanent.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//

// special treatment

public function get_admin_specialts()
{
	$this->db->select('specialt.*, u.first_name, u.last_name');
	$this->db->from('specialts specialt');
	$this->db->join('users u', 'u.id=specialt.user_id');
	$this->db->order_by('specialt.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_specialt($id)
{
	$this->db->select('specialt.*, u.first_name, u.last_name');
	$this->db->from('specialts specialt');
	$this->db->join('users u', 'u.id=specialt.user_id');
	$this->db->where('specialt.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//

// Facial Antiage

public function get_admin_antiages()
{
	$this->db->select('antiage.*, u.first_name, u.last_name');
	$this->db->from('antiages antiage');
	$this->db->join('users u', 'u.id=antiage.user_id');
	$this->db->order_by('antiage.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_antiage($id)
{
	$this->db->select('antiage.*, u.first_name, u.last_name');
	$this->db->from('antiages antiage');
	$this->db->join('users u', 'u.id=antiage.user_id');
	$this->db->where('antiage.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//

// Facial Restorative

public function get_admin_restoratives()
{
	$this->db->select('restorative.*, u.first_name, u.last_name');
	$this->db->from('restoratives restorative');
	$this->db->join('users u', 'u.id=restorative.user_id');
	$this->db->order_by('restorative.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_restorative($id)
{
	$this->db->select('restorative.*, u.first_name, u.last_name');
	$this->db->from('restoratives restorative');
	$this->db->join('users u', 'u.id=restorative.user_id');
	$this->db->where('restorative.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//

// Facial Calming

public function get_admin_calmings()
{
	$this->db->select('calming.*, u.first_name, u.last_name');
	$this->db->from('calmings calming');
	$this->db->join('users u', 'u.id=calming.user_id');
	$this->db->order_by('calming.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_calming($id)
{
	$this->db->select('calming.*, u.first_name, u.last_name');
	$this->db->from('calmings calming');
	$this->db->join('users u', 'u.id=calming.user_id');
	$this->db->where('calming.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//



// Facial brightenings

public function get_admin_brightenings()
{
	$this->db->select('brightening.*, u.first_name, u.last_name');
	$this->db->from('brightenings brightening');
	$this->db->join('users u', 'u.id=brightening.user_id');
	$this->db->order_by('brightening.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_brightening($id)
{
	$this->db->select('brightening.*, u.first_name, u.last_name');
	$this->db->from('brightenings brightening');
	$this->db->join('users u', 'u.id=brightening.user_id');
	$this->db->where('brightening.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//


// Facial special

public function get_admin_specialfs()
{
	$this->db->select('specialf.*, u.first_name, u.last_name');
	$this->db->from('specialfs specialf');
	$this->db->join('users u', 'u.id=specialf.user_id');
	$this->db->order_by('specialf.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_specialf($id)
{
	$this->db->select('specialf.*, u.first_name, u.last_name');
	$this->db->from('specialfs specialf');
	$this->db->join('users u', 'u.id=specialf.user_id');
	$this->db->where('specialf.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//

// Facial Luxury
public function get_admin_luxurings()
{
	$this->db->select('luxuring.*, u.first_name, u.last_name');
	$this->db->from('luxurings luxuring');
	$this->db->join('users u', 'u.id=luxuring.user_id');
	$this->db->order_by('luxuring.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_luxuring($id)
{
	$this->db->select('luxuring.*, u.first_name, u.last_name');
	$this->db->from('luxurings luxuring');
	$this->db->join('users u', 'u.id=luxuring.user_id');
	$this->db->where('luxuring.id', $id);
	$query = $this->db->get();
	return $query->row();
}

//

// Body hand and legs

public function get_admin_hands()
{
	$this->db->select('hand.*, u.first_name, u.last_name');
	$this->db->from('hands hand');
	$this->db->join('users u', 'u.id=hand.user_id');
	$this->db->order_by('hand.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_hand($id)
{
	$this->db->select('hand.*, u.first_name, u.last_name');
	$this->db->from('hands hand');
	$this->db->join('users u', 'u.id=hand.user_id');
	$this->db->where('hand.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//


// Body sculpting

public function get_admin_sculptings()
{
	$this->db->select('sculpting.*, u.first_name, u.last_name');
	$this->db->from('sculptings sculpting');
	$this->db->join('users u', 'u.id=sculpting.user_id');
	$this->db->order_by('sculpting.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_sculpting($id)
{
	$this->db->select('sculpting.*, u.first_name, u.last_name');
	$this->db->from('sculptings sculpting');
	$this->db->join('users u', 'u.id=sculpting.user_id');
	$this->db->where('sculpting.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//


// Body wrapping

public function get_admin_wrappings()
{
	$this->db->select('wrapping.*, u.first_name, u.last_name');
	$this->db->from('wrappings wrapping');
	$this->db->join('users u', 'u.id=wrapping.user_id');
	$this->db->order_by('wrapping.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_wrapping($id)
{
	$this->db->select('wrapping.*, u.first_name, u.last_name');
	$this->db->from('wrappings wrapping');
	$this->db->join('users u', 'u.id=wrapping.user_id');
	$this->db->where('wrapping.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//


// Makeup looks

public function get_admin_looks()
{
	$this->db->select('look.*, u.first_name, u.last_name');
	$this->db->from('looks look');
	$this->db->join('users u', 'u.id=look.user_id');
	$this->db->order_by('look.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_look($id)
{
	$this->db->select('look.*, u.first_name, u.last_name');
	$this->db->from('looks look');
	$this->db->join('users u', 'u.id=look.user_id');
	$this->db->where('look.id', $id);
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

// Makeup Clasess

public function get_admin_clasess()
{
	$this->db->select('clases.*, u.first_name, u.last_name');
	$this->db->from('clasess clases');
	$this->db->join('users u', 'u.id=clases.user_id');
	$this->db->order_by('clases.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_clases($id)
{
	$this->db->select('clases.*, u.first_name, u.last_name');
	$this->db->from('clasess clases');
	$this->db->join('users u', 'u.id=clases.user_id');
	$this->db->where('clases.id', $id);
	$query = $this->db->get();
	return $query->row();
}
//

// Fibroblast Fibrofaces

public function get_admin_fibrofaces()
{
	$this->db->select('fibroface.*, u.first_name, u.last_name');
	$this->db->from('fibrofaces fibroface');
	$this->db->join('users u', 'u.id=fibroface.user_id');
	$this->db->order_by('fibroface.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_fibroface($id)
{
	$this->db->select('fibroface.*, u.first_name, u.last_name');
	$this->db->from('fibrofaces fibroface');
	$this->db->join('users u', 'u.id=fibroface.user_id');
	$this->db->where('fibroface.id', $id);
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

// Fibroblast hypertrophic

public function get_admin_hypertrophics()
{
	$this->db->select('hypertrophic.*, u.first_name, u.last_name');
	$this->db->from('hypertrophics hypertrophic');
	$this->db->join('users u', 'u.id=hypertrophic.user_id');
	$this->db->order_by('hypertrophic.created_at', 'desc');
	$query = $this->db->get();
	return $query->result();
}

public function get_admin_hypertrophic($id)
{
	$this->db->select('hypertrophic.*, u.first_name, u.last_name');
	$this->db->from('hypertrophics hypertrophic');
	$this->db->join('users u', 'u.id=hypertrophic.user_id');
	$this->db->where('hypertrophic.id', $id);
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

	public function insertBlog($blogData)
	{
		$this->db->insert('blogs', $blogData);
		return $this->db->insert_id();
	}

	public function updateBlog($id, $blogData)
	{
		$this->db->where('id', $id);
		$this->db->update('blogs', $blogData);
	}

	public function deleteBlog($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('blogs');
	}


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


	// publicacion
	public function insertPublicacion($publicacionData)
	{
		$this->db->insert('publicacions', $publicacionData);
		return $this->db->insert_id();
	}

	public function updatePublicacion($id, $publicacionData)
	{
		$this->db->where('id', $id);
		$this->db->update('publicacions', $publicacionData);
	}

	public function deletePublicacion($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('publicacions');
	}

//
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

	// wax
	public function insertWax($waxData)
	{
		$this->db->insert('waxs', $waxData);
		return $this->db->insert_id();
	}

	public function updateWax($id, $waxData)
	{
		$this->db->where('id', $id);
		$this->db->update('waxs', $waxData);
	}

	public function deleteWax($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('waxs');
	}
	
//

	


//
	// permanent makeup
	public function insertPermanent($permanentData)
	{
		$this->db->insert('permanents', $permanentData);
		return $this->db->insert_id();
	}

	public function updatePermanent($id, $permanentData)
	{
		$this->db->where('id', $id);
		$this->db->update('permanents', $permanentData);
	}

	public function deletePermanent($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('permanents');
	}


	// special treatment
	public function insertSpecialt($specialtData)
	{
		$this->db->insert('specialts', $specialtData);
		return $this->db->insert_id();
	}

	public function updateSpecialt($id, $specialtData)
	{
		$this->db->where('id', $id);
		$this->db->update('specialts', $specialtData);
	}

	public function deleteSpecialt($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('specialts');
	}


	// Facial Antiage
	public function insertAntiage($antiageData)
	{
		$this->db->insert('antiages', $antiageData);
		return $this->db->insert_id();
	}

	public function updateAntiage($id, $antiageData)
	{
		$this->db->where('id', $id);
		$this->db->update('antiages', $antiageData);
	}

	public function deleteAntiage($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('antiages');
	}


	// Facial Restorative
	public function insertRestorative($restorativeData)
	{
		$this->db->insert('restoratives', $restorativeData);
		return $this->db->insert_id();
	}

	public function updateRestorative($id, $restorativeData)
	{
		$this->db->where('id', $id);
		$this->db->update('restoratives', $restorativeData);
	}

	public function deleteRestorative($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('restoratives');
	}

	// Facial Calming
	public function insertCalming($calmingData)
	{
		$this->db->insert('calmings', $calmingData);
		return $this->db->insert_id();
	}

	public function updateCalming($id, $calmingData)
	{
		$this->db->where('id', $id);
		$this->db->update('calmings', $calmingData);
	}

	public function deleteCalming($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('calmings');
	}

	// Facial brightenings
	public function insertBrightening($brighteningData)
	{
		$this->db->insert('brightenings', $brighteningData);
		return $this->db->insert_id();
	}

	public function updateBrightening($id, $brighteningData)
	{
		$this->db->where('id', $id);
		$this->db->update('brightenings', $brighteningData);
	}

	public function deleteBrightening($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('brightenings');
	}


		// Facial Special
		public function insertSpecialf($specialfData)
		{
			$this->db->insert('specialfs', $specialfData);
			return $this->db->insert_id();
		}
	
		public function updateSpecialf($id, $specialfData)
		{
			$this->db->where('id', $id);
			$this->db->update('specialfs', $specialfData);
		}
	
		public function deleteSpecialf($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('specialfs');
		}


		// Facial Luxury
		
		public function insertLuxuring($luxuringData)
	{
		$this->db->insert('luxurings', $luxuringData);
		return $this->db->insert_id();
	}

	public function updateLuxuring($id, $luxuringData)
	{
		$this->db->where('id', $id);
		$this->db->update('luxurings', $luxuringData);
	}

	public function deleteLuxuring($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('luxurings');
	}

//


	// Body Hand and legs
	public function insertHand($handData)
	{
		$this->db->insert('hands', $handData);
		return $this->db->insert_id();
	}

	public function updateHand($id, $handData)
	{
		$this->db->where('id', $id);
		$this->db->update('hands', $handData);
	}

	public function deleteHand($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('hands');
	}


	// Body sculpting
	public function insertSculpting($sculptingData)
	{
		$this->db->insert('sculptings', $sculptingData);
		return $this->db->insert_id();
	}

	public function updateSculpting($id, $sculptingData)
	{
		$this->db->where('id', $id);
		$this->db->update('sculptings', $sculptingData);
	}

	public function deleteSculpting($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('sculptings');
	}

	// Body wrapping
	public function insertWrapping($wrappingData)
	{
		$this->db->insert('wrappings', $wrappingData);
		return $this->db->insert_id();
	}

	public function updateWrapping($id, $wrappingData)
	{
		$this->db->where('id', $id);
		$this->db->update('wrappings', $wrappingData);
	}

	public function deleteWrapping($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('wrappings');
	}

	// Makeup looks
	public function insertLook($lookData)
	{
		$this->db->insert('looks', $lookData);
		return $this->db->insert_id();
	}

	public function updateLook($id, $lookData)
	{
		$this->db->where('id', $id);
		$this->db->update('looks', $lookData);
	}

	public function deleteLook($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('looks');
	}


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

	// Makeup  Classes
	public function insertClases($clasesData)
	{
		$this->db->insert('clasess', $clasesData);
		return $this->db->insert_id();
	}

	public function updateClases($id, $clasesData)
	{
		$this->db->where('id', $id);
		$this->db->update('clasess', $clasesData);
	}

	public function deleteClases($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('clasess');
	}

	// Fibroblast Face
	public function insertFibroface($fibrofaceData)
	{
		$this->db->insert('fibrofaces', $fibrofaceData);
		return $this->db->insert_id();
	}

	public function updateFibroface($id, $fibrofaceData)
	{
		$this->db->where('id', $id);
		$this->db->update('fibrofaces', $fibrofaceData);
	}

	public function deleteFibroface($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('fibrofaces');
	}


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

	// Fibroblast hypertrophic
	public function insertHypertrophic($hypertrophicData)
	{
		$this->db->insert('hypertrophics', $hypertrophicData);
		return $this->db->insert_id();
	}

	public function updateHypertrophic($id, $hypertrophicData)
	{
		$this->db->where('id', $id);
		$this->db->update('hypertrophics', $hypertrophicData);
	}

	public function deleteHypertrophic($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('hypertrophics');
	}

	
	
}
