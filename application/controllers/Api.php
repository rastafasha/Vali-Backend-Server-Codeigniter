<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
	}

	public function blogs()
	{
		header("Access-Control-Allow-Origin: *");

		$blogs = $this->api_model->get_blogs($featured=false, $recentpost=false);

		$posts = array();
		if(!empty($blogs)){
			foreach($blogs as $blog){

				$short_desc = strip_tags(character_limiter($blog->description, 70));
				$author = $blog->first_name.' '.$blog->last_name;

				$posts[] = array(
					'id' => $blog->id,
					'title' => $blog->title,
					'short_desc' => html_entity_decode($short_desc),
					'author' => $author,
					'image' => base_url('media/images/'.$blog->image),
					'created_at' => $blog->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function featured_blogs()
	{
		header("Access-Control-Allow-Origin: *");

		$blogs = $this->api_model->get_blogs($featured=true, $recentpost=false);

		$posts = array();
		if(!empty($blogs)){
			foreach($blogs as $blog){
				
				$short_desc = strip_tags(character_limiter($blog->description, 70));
				$author = $blog->first_name.' '.$blog->last_name;

				$posts[] = array(
					'id' => $blog->id,
					'title' => $blog->title,
					'short_desc' => html_entity_decode($short_desc),
					'author' => $author,
					'image' => base_url('media/images/'.$blog->image),
					'created_at' => $blog->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function blog($id)
	{
		header("Access-Control-Allow-Origin: *");
		
		$blog = $this->api_model->get_blog($id);

		$author = $blog->first_name.' '.$blog->last_name;

		$post = array(
			'id' => $blog->id,
			'title' => $blog->title,
			'description' => $blog->description,
			'author' => $author,
			'image' => base_url('media/images/'.$blog->image),
			'created_at' => $blog->created_at
		);
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($post));
	}

	public function recent_blogs()
	{
		header("Access-Control-Allow-Origin: *");

		$blogs = $this->api_model->get_blogs($featured=false, $recentpost=5);

		$posts = array();
		if(!empty($blogs)){
			foreach($blogs as $blog){
				
				$short_desc = strip_tags(character_limiter($blog->description, 70));
				$author = $blog->first_name.' '.$blog->last_name;

				$posts[] = array(
					'id' => $blog->id,
					'title' => $blog->title,
					'short_desc' => html_entity_decode($short_desc),
					'author' => $author,
					'image' => base_url('media/images/'.$blog->image),
					'created_at' => $blog->created_at
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

// Gallery 

public function gallerys()
{
	header("Access-Control-Allow-Origin: *");

	$gallerys = $this->api_model->get_gallerys($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($gallerys)){
		foreach($gallerys as $gallery){

			$short_desc = strip_tags(character_limiter($gallery->description, 70));
			$author = $gallery->first_name.' '.$gallery->last_name;

			$posts[] = array(
				'id' => $gallery->id,
				'title' => $gallery->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/gallery/'.$gallery->image),
				'created_at' => $gallery->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_gallerys()
{
	header("Access-Control-Allow-Origin: *");

	$gallerys = $this->api_model->get_gallerys($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($gallerys)){
		foreach($gallerys as $gallery){
			
			$short_desc = strip_tags(character_limiter($gallery->description, 70));
			$author = $gallery->first_name.' '.$gallery->last_name;

			$posts[] = array(
				'id' => $gallery->id,
				'title' => $gallery->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/gallery/'.$gallery->image),
				'created_at' => $gallery->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function gallery($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$gallery = $this->api_model->get_gallery($id);

	$author = $gallery->first_name.' '.$gallery->last_name;

	$post = array(
		'id' => $gallery->id,
		'title' => $gallery->title,
		'description' => $gallery->description,
		'author' => $author,
		'image' => base_url('media/images/gallery/'.$gallery->image),
		'created_at' => $gallery->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_gallerys()
{
	header("Access-Control-Allow-Origin: *");

	$gallerys = $this->api_model->get_gallerys($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($gallery)){
		foreach($gallerys as $gallery){
			
			$short_desc = strip_tags(character_limiter($gallery->description, 70));
			$author = $gallery->first_name.' '.$gallery->last_name;

			$posts[] = array(
				'id' => $gallery->id,
				'title' => $gallery->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/gallery/'.$gallery->image),
				'created_at' => $gallery->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//

// Modal 

public function modals()
{
	header("Access-Control-Allow-Origin: *");

	$modals = $this->api_model->get_modals($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($modals)){
		foreach($modals as $modal){

			$short_desc = strip_tags(character_limiter($modal->description, 70));
			$author = $modal->first_name.' '.$modal->last_name;

			$posts[] = array(
				'id' => $modal->id,
				'title' => $modal->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/modal/'.$modal->image),
				'created_at' => $modal->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_modals()
{
	header("Access-Control-Allow-Origin: *");

	$modals = $this->api_model->get_modals($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($modals)){
		foreach($modals as $modal){
			
			$short_desc = strip_tags(character_limiter($modal->description, 70));
			$author = $modal->first_name.' '.$modal->last_name;

			$posts[] = array(
				'id' => $modal->id,
				'title' => $modal->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/modal/'.$modal->image),
				'created_at' => $modal->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function modal($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$modal = $this->api_model->get_modal($id);

	$author = $modal->first_name.' '.$modal->last_name;

	$post = array(
		'id' => $modal->id,
		'title' => $modal->title,
		'description' => $modal->description,
		'author' => $author,
		'image' => base_url('media/images/modal/'.$modal->image),
		'created_at' => $modal->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_modals()
{
	header("Access-Control-Allow-Origin: *");

	$modals = $this->api_model->get_modals($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($modal)){
		foreach($modals as $modal){
			
			$short_desc = strip_tags(character_limiter($modal->description, 70));
			$author = $modal->first_name.' '.$modal->last_name;

			$posts[] = array(
				'id' => $modal->id,
				'title' => $modal->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/modal/'.$modal->image),
				'created_at' => $modal->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//


// publicacions

public function publicacions()
{
	header("Access-Control-Allow-Origin: *");

	$publicacions = $this->api_model->get_publicacions($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($publicacions)){
		foreach($publicacions as $publicacion){

			$short_desc = strip_tags(character_limiter($publicacion->description, 70));
			$author = $publicacion->first_name.' '.$publicacion->last_name;

			$posts[] = array(
				'id' => $publicacion->id,
				'title' => $publicacion->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/publicacion/'.$publicacion->image),
				'created_at' => $publicacion->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_publicacions()
{
	header("Access-Control-Allow-Origin: *");

	$publicacions = $this->api_model->get_publicacions($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($publicacions)){
		foreach($publicacions as $publicacion){
			
			$short_desc = strip_tags(character_limiter($publicacion->description, 70));
			$author = $publicacion->first_name.' '.$publicacion->last_name;

			$posts[] = array(
				'id' => $publicacion->id,
				'title' => $publicacion->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/publicacion/'.$publicacion->image),
				'created_at' => $publicacion->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function publicacion($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$publicacion = $this->api_model->get_publicacion($id);

	$author = $publicacion->first_name.' '.$publicacion->last_name;

	$post = array(
		'id' => $publicacion->id,
		'title' => $publicacion->title,
		'description' => $publicacion->description,
		'author' => $author,
		'image' => base_url('media/images/publicacion/'.$publicacion->image),
		'created_at' => $publicacion->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_publicacions()
{
	header("Access-Control-Allow-Origin: *");

	$publicacions = $this->api_model->get_publicacions($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($publicacion)){
		foreach($publicacions as $publicacion){
			
			$short_desc = strip_tags(character_limiter($publicacion->description, 70));
			$author = $publicacion->first_name.' '.$publicacion->last_name;

			$posts[] = array(
				'id' => $publicacion->id,
				'title' => $publicacion->title,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'image' => base_url('media/images/publicacion/'.$publicacion->image),
				'created_at' => $publicacion->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}


//


// Users 

public function users()
{
	header("Access-Control-Allow-Origin: *");

	$users = $this->api_model->get_users($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($users)){
		foreach($users as $user){

			$short_desc = strip_tags(character_limiter($user->description, 70));
			$author = $user->first_name.' '.$user->last_name;

			$posts[] = array(
				'id' => $user->id,
				'username' => $user->username,
				'password' => $user->password,
				'first_name' => $user->first_name,
				'last_name' => $user->last_name,
				'image' => base_url('media/images/user/'.$user->image),
				'created_at' => $user->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}


public function user($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$user = $this->api_model->get_user($id);

	$author = $user->first_name.' '.$user->last_name;

	$post = array(
		'id' => $user->id,
		'username' => $user->username,
		'password' => $user->password,
		'first_name' => $user->first_name,
		'last_name' => $user->last_name,
		'image' => base_url('media/images/user/'.$user->image),
		'created_at' => $user->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}
//




// Wax 

public function waxs()
{
	header("Access-Control-Allow-Origin: *");

	$waxs = $this->api_model->get_waxs($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($waxs)){
		foreach($waxs as $wax){

			$short_desc = strip_tags(character_limiter($wax->description, 70));
			$author = $wax->first_name.' '.$wax->last_name;

			$posts[] = array(
				'id' => $wax->id,
				'title' => $wax->title,
				'titleesp' => $wax->titleesp,
				'descriptionesp' => $wax->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $wax->price,
				'popup' => $wax->popup,
				'description' => $wax->description,
				'button' => $wax->button,
				'image' => base_url('media/images/servicios/wax/'.$wax->image),
				'created_at' => $wax->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_waxs()
{
	header("Access-Control-Allow-Origin: *");

	$permanents = $this->api_model->get_waxs($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($waxs)){
		foreach($waxs as $wax){
			
			$short_desc = strip_tags(character_limiter($wax->description, 70));
			$author = $wax->first_name.' '.$wax->last_name;

			$posts[] = array(
				'id' => $wax->id,
				'title' => $wax->title,
				'titleesp' => $wax->titleesp,
				'descriptionesp' => $wax->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $wax->price,
				'popup' => $wax->popup,
				'description' => $wax->description,
				'button' => $wax->button,
				'image' => base_url('media/images/servicios/wax/'.$wax->image),
				'created_at' => $wax->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function wax($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$wax = $this->api_model->get_wax($id);

	$author = $wax->first_name.' '.$wax->last_name;

	$post = array(
		'id' => $wax->id,
		'title' => $wax->title,
		'description' => $wax->description,
		'titleesp' => $wax->titleesp,
		'descriptionesp' => $wax->descriptionesp,
		'price' => $wax->price,
		'popup' => $wax->popup,
		'button' => $wax->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/wax/'.$wax->image),
		'created_at' => $wax->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_waxs()
{
	header("Access-Control-Allow-Origin: *");

	$waxs = $this->api_model->get_waxs($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($wax)){
		foreach($waxs as $wax){
			
			$short_desc = strip_tags(character_limiter($wax->description, 70));
			$author = $wax->first_name.' '.$wax->last_name;

			$posts[] = array(
				'id' => $wax->id,
				'title' => $wax->title,
				'titleesp' => $wax->titleesp,
				'descriptionesp' => $wax->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $wax->price,
				'popup' => $wax->popup,
				'button' => $wax->button,
				'image' => base_url('media/images/servicios/wax/'.$wax->image),
				'created_at' => $wax->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//



// Permanent Makeup 

public function permanents()
{
	header("Access-Control-Allow-Origin: *");

	$permanents = $this->api_model->get_permanents($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($permanents)){
		foreach($permanents as $permanent){

			$short_desc = strip_tags(character_limiter($permanent->description, 70));
			$author = $permanent->first_name.' '.$permanent->last_name;

			$posts[] = array(
				'id' => $permanent->id,
				'title' => $permanent->title,
				'titleesp' => $permanent->titleesp,
				'descriptionesp' => $permanent->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $permanent->price,
				'popup' => $permanent->popup,
				'description' => $permanent->description,
				'button' => $permanent->button,
				'image' => base_url('media/images/servicios/permanent/'.$permanent->image),
				'created_at' => $permanent->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_permanents()
{
	header("Access-Control-Allow-Origin: *");

	$permanents = $this->api_model->get_permanents($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($permanents)){
		foreach($permanents as $permanent){
			
			$short_desc = strip_tags(character_limiter($permanent->description, 70));
			$author = $permanent->first_name.' '.$permanent->last_name;

			$posts[] = array(
				'id' => $permanent->id,
				'title' => $permanent->title,
				'titleesp' => $permanent->titleesp,
				'descriptionesp' => $permanent->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $permanent->price,
				'popup' => $permanent->popup,
				'description' => $permanent->description,
				'button' => $permanent->button,
				'image' => base_url('media/images/servicios/permanent/'.$permanent->image),
				'created_at' => $permanent->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function permanent($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$permanent = $this->api_model->get_permanent($id);

	$author = $permanent->first_name.' '.$permanent->last_name;

	$post = array(
		'id' => $permanent->id,
		'title' => $permanent->title,
		'description' => $permanent->description,
		'titleesp' => $permanent->titleesp,
		'descriptionesp' => $permanent->descriptionesp,
		'price' => $permanent->price,
		'popup' => $permanent->popup,
		'button' => $permanent->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/permanent/'.$permanent->image),
		'created_at' => $permanent->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_permanents()
{
	header("Access-Control-Allow-Origin: *");

	$permanents = $this->api_model->get_permanents($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($permanent)){
		foreach($permanents as $permanent){
			
			$short_desc = strip_tags(character_limiter($permanent->description, 70));
			$author = $permanent->first_name.' '.$permanent->last_name;

			$posts[] = array(
				'id' => $permanent->id,
				'title' => $permanent->title,
				'titleesp' => $permanent->titleesp,
				'descriptionesp' => $permanent->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $permanent->price,
				'popup' => $permanent->popup,
				'button' => $permanent->button,
				'image' => base_url('media/images/servicios/permanent/'.$permanent->image),
				'created_at' => $permanent->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//

// Special Treatments 

public function specialts()
{
	header("Access-Control-Allow-Origin: *");

	$specialts = $this->api_model->get_specialts($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($specialts)){
		foreach($specialts as $specialt){

			$short_desc = strip_tags(character_limiter($specialt->description, 70));
			$author = $specialt->first_name.' '.$specialt->last_name;

			$posts[] = array(
				'id' => $specialt->id,
				'title' => $specialt->title,
				'titleesp' => $specialt->titleesp,
				'descriptionesp' => $specialt->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $specialt->price,
				'popup' => $specialt->popup,
				'description' => $specialt->description,
				'button' => $specialt->button,
				'image' => base_url('media/images/servicios/specialt/'.$specialt->image),
				'created_at' => $specialt->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_specialts()
{
	header("Access-Control-Allow-Origin: *");

	$specialts = $this->api_model->get_specialts($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($specialts)){
		foreach($specialts as $specialt){
			
			$short_desc = strip_tags(character_limiter($specialt->description, 70));
			$author = $specialt->first_name.' '.$specialt->last_name;

			$posts[] = array(
				'id' => $specialt->id,
				'title' => $specialt->title,
				'titleesp' => $specialt->titleesp,
				'descriptionesp' => $specialt->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $specialt->price,
				'popup' => $specialt->popup,
				'description' => $specialt->description,
				'button' => $specialt->button,
				'image' => base_url('media/images/servicios/specialt/'.$specialt->image),
				'created_at' => $specialt->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function specialt($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$specialt = $this->api_model->get_specialt($id);

	$author = $specialt->first_name.' '.$specialt->last_name;

	$post = array(
		'id' => $specialt->id,
		'title' => $specialt->title,
		'description' => $specialt->description,
		'titleesp' => $specialt->titleesp,
		'descriptionesp' => $specialt->descriptionesp,
		'price' => $specialt->price,
		'popup' => $specialt->popup,
		'button' => $specialt->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/specialt/'.$specialt->image),
		'created_at' => $specialt->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_specialts()
{
	header("Access-Control-Allow-Origin: *");

	$specialts = $this->api_model->get_specialts($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($specialt)){
		foreach($specialts as $specialt){
			
			$short_desc = strip_tags(character_limiter($specialt->description, 70));
			$author = $specialt->first_name.' '.$specialt->last_name;

			$posts[] = array(
				'id' => $specialt->id,
				'title' => $specialt->title,
				'titleesp' => $specialt->titleesp,
				'descriptionesp' => $specialt->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $specialt->price,
				'popup' => $specialt->popup,
				'button' => $specialt->button,
				'image' => base_url('media/images/servicios/specialt/'.$specialt->image),
				'created_at' => $specialt->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

///


// Facial Antiage 

public function antiages()
{
	header("Access-Control-Allow-Origin: *");

	$antiages = $this->api_model->get_antiages($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($antiages)){
		foreach($antiages as $antiage){

			$short_desc = strip_tags(character_limiter($antiage->description, 70));
			$author = $antiage->first_name.' '.$antiage->last_name;

			$posts[] = array(
				'id' => $antiage->id,
				'title' => $antiage->title,
				'titleesp' => $antiage->titleesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $antiage->price,
				'popup' => $antiage->popup,
				'description' => $antiage->description,
				'descriptionesp' => $antiage->descriptionesp,
				'button' => $antiage->button,
				'image' => base_url('media/images/servicios/facial/antiage/'.$antiage->image),
				'created_at' => $antiage->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_antiages()
{
	header("Access-Control-Allow-Origin: *");

	$antiages = $this->api_model->get_antiages($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($antiages)){
		foreach($antiages as $antiage){
			
			$short_desc = strip_tags(character_limiter($antiage->description, 70));
			$author = $antiage->first_name.' '.$antiage->last_name;

			$posts[] = array(
				'id' => $antiage->id,
				'title' => $antiage->title,
				'titleesp' => $antiage->titleesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $antiage->price,
				'popup' => $antiage->popup,
				'description' => $antiage->description,
				'descriptionesp' => $antiage->descriptionesp,
				'button' => $antiage->button,
				'image' => base_url('media/images/servicios/facial/antiage/'.$antiage->image),
				'created_at' => $antiage->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function antiage($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$antiage = $this->api_model->get_antiage($id);

	$author = $antiage->first_name.' '.$antiage->last_name;

	$post = array(
		'id' => $antiage->id,
		'title' => $antiage->title,
		'titleesp' => $antiage->titleesp,
		'description' => $antiage->description,
		'descriptionesp' => $antiage->descriptionesp,
		'price' => $antiage->price,
		'popup' => $antiage->popup,
		'button' => $antiage->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/facial/antiage/'.$antiage->image),
		'created_at' => $antiage->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_antiages()
{
	header("Access-Control-Allow-Origin: *");

	$antiages = $this->api_model->get_antiages($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($antiage)){
		foreach($antiages as $antiage){
			
			$short_desc = strip_tags(character_limiter($antiage->description, 70));
			$author = $antiage->first_name.' '.$antiage->last_name;

			$posts[] = array(
				'id' => $antiage->id,
				'title' => $antiage->title,
				'titleesp' => $antiage->titleesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $antiage->price,
				'popup' => $antiage->popup,
				'description' => $antiage->description,
				'descriptionesp' => $antiage->descriptionesp,
				'button' => $antiage->button,
				'image' => base_url('media/images/servicios/facial/antiage/'.$antiage->image),
				'created_at' => $antiage->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

///


// Facial restorative 

public function restoratives()
{
	header("Access-Control-Allow-Origin: *");

	$restoratives = $this->api_model->get_restoratives($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($restoratives)){
		foreach($restoratives as $restorative){

			$short_desc = strip_tags(character_limiter($restorative->description, 70));
			$author = $restorative->first_name.' '.$restorative->last_name;

			$posts[] = array(
				'id' => $restorative->id,
				'title' => $restorative->title,
				'titleesp' => $restorative->titleesp,
				'descriptionesp' => $restorative->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $restorative->price,
				'popup' => $restorative->popup,
				'description' => $restorative->description,
				'button' => $restorative->button,
				'image' => base_url('media/images/servicios/facial/restorative/'.$restorative->image),
				'created_at' => $restorative->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_restoratives()
{
	header("Access-Control-Allow-Origin: *");

	$restoratives = $this->api_model->get_restoratives($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($restoratives)){
		foreach($restoratives as $restorative){
			
			$short_desc = strip_tags(character_limiter($restorative->description, 70));
			$author = $restorative->first_name.' '.$restorative->last_name;

			$posts[] = array(
				'id' => $restorative->id,
				'title' => $restorative->title,
				'titleesp' => $restorative->titleesp,
				'descriptionesp' => $restorative->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $restorative->price,
				'popup' => $restorative->popup,
				'description' => $restorative->description,
				'button' => $restorative->button,
				'image' => base_url('media/images/servicios/facial/restorative/'.$restorative->image),
				'created_at' => $restorative->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function restorative($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$restorative = $this->api_model->get_restorative($id);

	$author = $restorative->first_name.' '.$restorative->last_name;

	$post = array(
		'id' => $restorative->id,
		'title' => $restorative->title,
		'description' => $restorative->description,
		'titleesp' => $restorative->titleesp,
		'descriptionesp' => $restorative->descriptionesp,
		'price' => $restorative->price,
		'popup' => $restorative->popup,
		'button' => $restorative->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/facial/restorative/'.$restorative->image),
		'created_at' => $restorative->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_restoratives()
{
	header("Access-Control-Allow-Origin: *");

	$restoratives = $this->api_model->get_restoratives($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($restorative)){
		foreach($restoratives as $restorative){
			
			$short_desc = strip_tags(character_limiter($restorative->description, 70));
			$author = $restorative->first_name.' '.$restorative->last_name;

			$posts[] = array(
				'id' => $restorative->id,
				'title' => $restorative->title,
				'titleesp' => $restorative->titleesp,
				'descriptionesp' => $restorative->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $restorative->price,
				'popup' => $restorative->popup,
				'description' => $restorative->description,
				'button' => $restorative->button,
				'image' => base_url('media/images/servicios/facial/restorative/'.$restorative->image),
				'created_at' => $restorative->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

///









// Facial Calming 

public function calmings()
{
	header("Access-Control-Allow-Origin: *");

	$calmings = $this->api_model->get_calmings($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($calmings)){
		foreach($calmings as $calming){

			$short_desc = strip_tags(character_limiter($calming->description, 70));
			$author = $calming->first_name.' '.$calming->last_name;

			$posts[] = array(
				'id' => $calming->id,
				'title' => $calming->title,
				'titleesp' => $calming->titleesp,
				'descriptionesp' => $calming->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $calming->price,
				'popup' => $calming->popup,
				'description' => $calming->description,
				'button' => $calming->button,
				'image' => base_url('media/images/servicios/facial/calming/'.$calming->image),
				'created_at' => $calming->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_calmings()
{
	header("Access-Control-Allow-Origin: *");

	$calmings = $this->api_model->get_calmings($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($calmings)){
		foreach($calmings as $calming){
			
			$short_desc = strip_tags(character_limiter($calming->description, 70));
			$author = $calming->first_name.' '.$calming->last_name;

			$posts[] = array(
				'id' => $calming->id,
				'title' => $calming->title,
				'titleesp' => $calming->titleesp,
				'descriptionesp' => $calming->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $calming->price,
				'popup' => $calming->popup,
				'description' => $calming->description,
				'button' => $calming->button,
				'image' => base_url('media/images/servicios/facial/calming/'.$calming->image),
				'created_at' => $calming->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function calming($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$calming = $this->api_model->get_calming($id);

	$author = $calming->first_name.' '.$calming->last_name;

	$post = array(
		'id' => $calming->id,
		'title' => $calming->title,
		'description' => $calming->description,
		'titleesp' => $calming->titleesp,
				'descriptionesp' => $calming->descriptionesp,
		'price' => $calming->price,
		'popup' => $calming->popup,
		'button' => $calming->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/facial/calming/'.$calming->image),
		'created_at' => $calming->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_calmings()
{
	header("Access-Control-Allow-Origin: *");

	$calmings = $this->api_model->get_calmings($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($calming)){
		foreach($calmings as $calming){
			
			$short_desc = strip_tags(character_limiter($calming->description, 70));
			$author = $calming->first_name.' '.$calming->last_name;

			$posts[] = array(
				'id' => $calming->id,
				'title' => $calming->title,
				'titleesp' => $calming->titleesp,
				'descriptionesp' => $calming->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $calming->price,
				'popup' => $calming->popup,
				'description' => $calming->description,
				'button' => $calming->button,
				'image' => base_url('media/images/servicios/facial/calming/'.$calming->image),
				'created_at' => $calming->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

///

// Facial brightening 

public function brightenings()
{
	header("Access-Control-Allow-Origin: *");

	$brightenings = $this->api_model->get_brightenings($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($brightenings)){
		foreach($brightenings as $brightening){

			$short_desc = strip_tags(character_limiter($brightening->description, 70));
			$author = $brightening->first_name.' '.$brightening->last_name;

			$posts[] = array(
				'id' => $brightening->id,
				'title' => $brightening->title,
				'titleesp' => $brightening->titleesp,
				'descriptionesp' => $brightening->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $brightening->price,
				'popup' => $brightening->popup,
				'description' => $brightening->description,
				'button' => $brightening->button,
				'image' => base_url('media/images/servicios/facial/brightening/'.$brightening->image),
				'created_at' => $brightening->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_brightenings()
{
	header("Access-Control-Allow-Origin: *");

	$brightenings = $this->api_model->get_brightenings($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($brightenings)){
		foreach($brightenings as $brightening){
			
			$short_desc = strip_tags(character_limiter($brightening->description, 70));
			$author = $brightening->first_name.' '.$brightening->last_name;

			$posts[] = array(
				'id' => $brightening->id,
				'title' => $brightening->title,
				'titleesp' => $brightening->titleesp,
				'descriptionesp' => $brightening->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $brightening->price,
				'popup' => $brightening->popup,
				'description' => $brightening->description,
				'button' => $brightening->button,
				'image' => base_url('media/images/servicios/facial/brightening/'.$brightening->image),
				'created_at' => $brightening->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function brightening($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$brightening = $this->api_model->get_brightening($id);

	$author = $brightening->first_name.' '.$brightening->last_name;

	$post = array(
		'id' => $brightening->id,
		'title' => $brightening->title,
		'description' => $brightening->description,
		'titleesp' => $brightening->titleesp,
				'descriptionesp' => $brightening->descriptionesp,
		'price' => $brightening->price,
		'popup' => $brightening->popup,
		'button' => $brightening->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/facial/brightening/'.$brightening->image),
		'created_at' => $brightening->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_brightenings()
{
	header("Access-Control-Allow-Origin: *");

	$brightening = $this->api_model->get_brightenings($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($brightening)){
		foreach($brightenings as $brightening){
			
			$short_desc = strip_tags(character_limiter($brightening->description, 70));
			$author = $brightening->first_name.' '.$brightening->last_name;

			$posts[] = array(
				'id' => $brightening->id,
				'title' => $brightening->title,
				'titleesp' => $brightening->titleesp,
				'descriptionesp' => $brightening->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $brightening->price,
				'popup' => $brightening->popup,
				'description' => $brightening->description,
				'button' => $brightening->button,
				'image' => base_url('media/images/servicios/facial/brightening/'.$brightening->image),
				'created_at' => $brightening->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

///


// Facial specialf 

public function specialfs()
{
	header("Access-Control-Allow-Origin: *");

	$specialfs = $this->api_model->get_specialfs($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($specialfs)){
		foreach($specialfs as $specialf){

			$short_desc = strip_tags(character_limiter($specialf->description, 70));
			$author = $specialf->first_name.' '.$specialf->last_name;

			$posts[] = array(
				'id' => $specialf->id,
				'title' => $specialf->title,
				'titleesp' => $specialf->titleesp,
				'descriptionesp' => $specialf->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $specialf->price,
				'popup' => $specialf->popup,
				'description' => $specialf->description,
				'button' => $specialf->button,
				'image' => base_url('media/images/servicios/facial/specialf/'.$specialf->image),
				'created_at' => $specialf->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_specialfs()
{
	header("Access-Control-Allow-Origin: *");

	$specialfs = $this->api_model->get_specialfs($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($specialfs)){
		foreach($specialfs as $specialf){
			
			$short_desc = strip_tags(character_limiter($specialf->description, 70));
			$author = $specialf->first_name.' '.$specialf->last_name;

			$posts[] = array(
				'id' => $specialf->id,
				'title' => $specialf->title,
				'titleesp' => $specialf->titleesp,
				'descriptionesp' => $specialf->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $specialf->price,
				'popup' => $specialf->popup,
				'description' => $specialf->description,
				'button' => $specialf->button,
				'image' => base_url('media/images/servicios/facial/specialf/'.$specialf->image),
				'created_at' => $specialf->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function specialf($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$specialf = $this->api_model->specialf($id);

	$author = $specialf->first_name.' '.$specialf->last_name;

	$post = array(
		'id' => $specialf->id,
		'title' => $specialf->title,
		'description' => $specialf->description,
		'titleesp' => $specialf->titleesp,
				'descriptionesp' => $specialf->descriptionesp,
		'price' => $specialf->price,
		'popup' => $specialf->popup,
		'button' => $specialf->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/facial/specialf/'.$specialf->image),
		'created_at' => $specialf->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_specialfs()
{
	header("Access-Control-Allow-Origin: *");

	$specialf = $this->api_model->get_specialfs($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($specialf)){
		foreach($specialfs as $specialf){
			
			$short_desc = strip_tags(character_limiter($specialf->description, 70));
			$author = $specialf->first_name.' '.$specialf->last_name;

			$posts[] = array(
				'id' => $specialf->id,
				'title' => $specialf->title,
				'titleesp' => $specialf->titleesp,
				'descriptionesp' => $specialf->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $specialf->price,
				'popup' => $specialf->popup,
				'description' => $specialf->description,
				'button' => $specialf->button,
				'image' => base_url('media/images/servicios/facial/specialf/'.$specialf->image),
				'created_at' => $specialf->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

///

// Facial Luxury

public function luxurings()
{
	header("Access-Control-Allow-Origin: *");

	$luxurings = $this->api_model->get_luxurings($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($luxurings)){
		foreach($luxurings as $luxuring){

			$short_desc = strip_tags(character_limiter($luxuring->description, 70));
			$author = $luxuring->first_name.' '.$luxuring->last_name;

			$posts[] = array(
				'id' => $luxuring->id,
				'title' => $luxuring->title,
				'titleesp' => $luxuring->titleesp,
				'descriptionesp' => $luxuring->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $luxuring->price,
				'popup' => $luxuring->popup,
				'description' => $luxuring->description,
				'button' => $luxuring->button,
				'image' => base_url('media/images/servicios/facial/luxury/'.$luxuring->image),
				'created_at' => $luxuring->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_luxurings()
{
	header("Access-Control-Allow-Origin: *");

	$luxurings = $this->api_model->get_luxurings($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($luxurings)){
		foreach($luxurings as $luxuring){
			
			$short_desc = strip_tags(character_limiter($luxuring->description, 70));
			$author = $luxuring->first_name.' '.$luxuring->last_name;

			$posts[] = array(
				'id' => $luxuring->id,
				'title' => $luxuring->title,
				'titleesp' => $luxuring->titleesp,
				'descriptionesp' => $luxuring->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $luxuring->price,
				'popup' => $luxuring->popup,
				'description' => $luxuring->description,
				'button' => $luxuring->button,
				'image' => base_url('media/images/servicios/facial/luxury/'.$luxuring->image),
				'created_at' => $luxuring->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function luxuring($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$luxuring = $this->api_model->get_luxuring($id);

	$author = $luxuring->first_name.' '.$luxuring->last_name;

	$post = array(
		'id' => $luxuring->id,
		'title' => $luxuring->title,
		'description' => $luxuring->description,
		'titleesp' => $luxuring->titleesp,
		'descriptionesp' => $luxuring->descriptionesp,
		'price' => $luxuring->price,
		'popup' => $luxuring->popup,
		'button' => $luxuring->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/facial/luxury/'.$luxuring->image),
		'created_at' => $luxuring->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_luxurings()
{
	header("Access-Control-Allow-Origin: *");

	$luxurings = $this->api_model->get_luxurings($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($luxuring)){
		foreach($luxurings as $luxuring){
			
			$short_desc = strip_tags(character_limiter($luxuring->description, 70));
			$author = $luxuring->first_name.' '.$luxuring->last_name;

			$posts[] = array(
				'id' => $luxuring->id,
				'title' => $luxuring->title,
				'titleesp' => $luxuring->titleesp,
				'descriptionesp' => $luxuring->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $luxuring->price,
				'popup' => $luxuring->popup,
				'description' => $luxuring->description,
				'button' => $luxuring->button,
				'image' => base_url('media/images/servicios/facial/luxury/'.$luxuring->image),
				'created_at' => $luxuring->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}


//




// Body Hand and legs 

public function hands()
{
	header("Access-Control-Allow-Origin: *");

	$hands = $this->api_model->get_hands($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($hands)){
		foreach($hands as $hand){

			$short_desc = strip_tags(character_limiter($hand->description, 70));
			$author = $hand->first_name.' '.$hand->last_name;

			$posts[] = array(
				'id' => $hand->id,
				'title' => $hand->title,
				'titleesp' => $hand->titleesp,
				'descriptionesp' => $hand->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $hand->price,
				'popup' => $hand->popup,
				'description' => $hand->description,
				'button' => $hand->button,
				'image' => base_url('media/images/servicios/body/hand/'.$hand->image),
				'created_at' => $hand->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_hands()
{
	header("Access-Control-Allow-Origin: *");

	$hands = $this->api_model->get_hands($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($hands)){
		foreach($hands as $hand){
			
			$short_desc = strip_tags(character_limiter($hand->description, 70));
			$author = $hand->first_name.' '.$hand->last_name;

			$posts[] = array(
				'id' => $hand->id,
				'title' => $hand->title,
				'titleesp' => $hand->titleesp,
				'descriptionesp' => $hand->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $hand->price,
				'popup' => $hand->popup,
				'description' => $hand->description,
				'button' => $hand->button,
				'image' => base_url('media/images/servicios/body/hand/'.$hand->image),
				'created_at' => $hand->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function hand($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$hand = $this->api_model->get_hand($id);

	$author = $hand->first_name.' '.$hand->last_name;

	$post = array(
		'id' => $hand->id,
		'title' => $hand->title,
		'description' => $hand->description,
		'titleesp' => $hand->titleesp,
				'descriptionesp' => $hand->descriptionesp,
		'price' => $hand->price,
		'popup' => $hand->popup,
		'button' => $hand->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/body/hand/'.$hand->image),
		'created_at' => $hand->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_hands()
{
	header("Access-Control-Allow-Origin: *");

	$hands = $this->api_model->get_hands($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($hand)){
		foreach($hands as $hand){
			
			$short_desc = strip_tags(character_limiter($hand->description, 70));
			$author = $hand->first_name.' '.$hand->last_name;

			$posts[] = array(
				'id' => $hand->id,
				'title' => $hand->title,
				'titleesp' => $hand->titleesp,
				'descriptionesp' => $hand->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $hand->price,
				'popup' => $hand->popup,
				'description' => $hand->description,
				'button' => $hand->button,
				'image' => base_url('media/images/servicios/body/hand/'.$hand->image),
				'created_at' => $hand->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//



// Body sculptings

public function sculptings()
{
	header("Access-Control-Allow-Origin: *");

	$sculptings = $this->api_model->get_sculptings($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($sculptings)){
		foreach($sculptings as $sculpting){

			$short_desc = strip_tags(character_limiter($sculpting->description, 70));
			$author = $sculpting->first_name.' '.$sculpting->last_name;

			$posts[] = array(
				'id' => $sculpting->id,
				'title' => $sculpting->title,
				'titleesp' => $sculpting->titleesp,
				'descriptionesp' => $sculpting->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $sculpting->price,
				'popup' => $sculpting->popup,
				'description' => $sculpting->description,
				'button' => $sculpting->button,
				'image' => base_url('media/images/servicios/body/sculpting/'.$sculpting->image),
				'created_at' => $sculpting->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_sculptings()
{
	header("Access-Control-Allow-Origin: *");

	$sculptings = $this->api_model->get_sculptings($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($sculptings)){
		foreach($sculptings as $sculpting){
			
			$short_desc = strip_tags(character_limiter($sculpting->description, 70));
			$author = $sculpting->first_name.' '.$sculpting->last_name;

			$posts[] = array(
				'id' => $sculpting->id,
				'title' => $sculpting->title,
				'titleesp' => $sculpting->titleesp,
				'descriptionesp' => $sculpting->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $sculpting->price,
				'popup' => $sculpting->popup,
				'description' => $sculpting->description,
				'button' => $sculpting->button,
				'image' => base_url('media/images/servicios/body/sculpting/'.$sculpting->image),
				'created_at' => $sculpting->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function sculpting($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$sculpting = $this->api_model->get_sculpting($id);

	$author = $sculpting->first_name.' '.$sculpting->last_name;

	$post = array(
		'id' => $sculpting->id,
		'title' => $sculpting->title,
		'description' => $sculpting->description,
		'titleesp' => $sculpting->titleesp,
				'descriptionesp' => $sculpting->descriptionesp,
		'price' => $sculpting->price,
		'popup' => $sculpting->popup,
		'button' => $sculpting->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/body/sculpting/'.$sculpting->image),
		'created_at' => $sculpting->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_sculptings()
{
	header("Access-Control-Allow-Origin: *");

	$sculptings = $this->api_model->get_sculptings($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($sculpting)){
		foreach($sculptings as $sculpting){
			
			$short_desc = strip_tags(character_limiter($sculpting->description, 70));
			$author = $sculpting->first_name.' '.$sculpting->last_name;

			$posts[] = array(
				'id' => $sculpting->id,
				'title' => $sculpting->title,
				'titleesp' => $sculpting->titleesp,
				'descriptionesp' => $sculpting->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $sculpting->price,
				'popup' => $sculpting->popup,
				'description' => $sculpting->description,
				'button' => $sculpting->button,
				'image' => base_url('media/images/servicios/body/sculpting/'.$sculpting->image),
				'created_at' => $sculpting->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//


// Body wrapping

public function wrappings()
{
	header("Access-Control-Allow-Origin: *");

	$wrappings = $this->api_model->get_wrappings($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($wrappings)){
		foreach($wrappings as $wrapping){

			$short_desc = strip_tags(character_limiter($wrapping->description, 70));
			$author = $wrapping->first_name.' '.$wrapping->last_name;

			$posts[] = array(
				'id' => $wrapping->id,
				'title' => $wrapping->title,
				'titleesp' => $wrapping->titleesp,
				'descriptionesp' => $wrapping->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $wrapping->price,
				'popup' => $wrapping->popup,
				'description' => $wrapping->description,
				'button' => $wrapping->button,
				'image' => base_url('media/images/servicios/body/wrapping/'.$wrapping->image),
				'created_at' => $wrapping->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_wrappings()
{
	header("Access-Control-Allow-Origin: *");

	$wrappings = $this->api_model->get_wrappings($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($wrappings)){
		foreach($wrappings as $wrapping){
			
			$short_desc = strip_tags(character_limiter($wrapping->description, 70));
			$author = $wrapping->first_name.' '.$wrapping->last_name;

			$posts[] = array(
				'id' => $wrapping->id,
				'title' => $wrapping->title,
				'titleesp' => $sculpting->titleesp,
				'descriptionesp' => $sculpting->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $wrapping->price,
				'popup' => $wrapping->popup,
				'description' => $wrapping->description,
				'button' => $wrapping->button,
				'image' => base_url('media/images/servicios/body/wrapping/'.$wrapping->image),
				'created_at' => $wrapping->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function wrapping($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$wrapping = $this->api_model->get_wrapping($id);

	$author = $wrapping->first_name.' '.$wrapping->last_name;

	$post = array(
		'id' => $wrapping->id,
		'title' => $wrapping->title,
		'description' => $wrapping->description,
		'titleesp' => $wrapping->titleesp,
				'descriptionesp' => $wrapping->descriptionesp,
		'price' => $wrapping->price,
		'popup' => $wrapping->popup,
		'button' => $wrapping->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/body/wrapping/'.$wrapping->image),
		'created_at' => $wrapping->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_wrappings()
{
	header("Access-Control-Allow-Origin: *");

	$wrappings = $this->api_model->get_wrappings($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($wrapping)){
		foreach($wrappings as $wrapping){
			
			$short_desc = strip_tags(character_limiter($wrapping->description, 70));
			$author = $wrapping->first_name.' '.$wrapping->last_name;

			$posts[] = array(
				'id' => $wrapping->id,
				'title' => $wrapping->title,
				'titleesp' => $wrapping->titleesp,
				'descriptionesp' => $wrapping->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $wrapping->price,
				'popup' => $wrapping->popup,
				'description' => $wrapping->description,
				'button' => $wrapping->button,
				'image' => base_url('media/images/servicios/body/wrapping/'.$wrapping->image),
				'created_at' => $wrapping->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//


// Makeup looks

public function looks()
{
	header("Access-Control-Allow-Origin: *");

	$looks = $this->api_model->get_looks($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($looks)){
		foreach($looks as $look){

			$short_desc = strip_tags(character_limiter($look->description, 70));
			$author = $look->first_name.' '.$look->last_name;

			$posts[] = array(
				'id' => $look->id,
				'title' => $look->title,
				'titleesp' => $look->titleesp,
				'descriptionesp' => $look->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $look->price,
				'popup' => $look->popup,
				'description' => $look->description,
				'button' => $look->button,
				'image' => base_url('media/images/servicios/makeup/looks/'.$look->image),
				'created_at' => $look->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_looks()
{
	header("Access-Control-Allow-Origin: *");

	$looks = $this->api_model->get_looks($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($looks)){
		foreach($looks as $look){
			
			$short_desc = strip_tags(character_limiter($look->description, 70));
			$author = $look->first_name.' '.$look->last_name;

			$posts[] = array(
				'id' => $look->id,
				'title' => $look->title,
				'titleesp' => $look->titleesp,
				'descriptionesp' => $look->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $look->price,
				'popup' => $look->popup,
				'description' => $look->description,
				'button' => $look->button,
				'image' => base_url('media/images/servicios/makeup/looks/'.$look->image),
				'created_at' => $look->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function look($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$look = $this->api_model->get_look($id);

	$author = $look->first_name.' '.$look->last_name;

	$post = array(
		'id' => $look->id,
		'title' => $look->title,
		'description' => $look->description,
		'titleesp' => $look->titleesp,
				'descriptionesp' => $look->descriptionesp,
		'price' => $look->price,
		'popup' => $look->popup,
		'button' => $look->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/makeup/looks/'.$look->image),
		'created_at' => $look->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_looks()
{
	header("Access-Control-Allow-Origin: *");

	$looks = $this->api_model->get_looks($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($look)){
		foreach($looks as $look){
			
			$short_desc = strip_tags(character_limiter($look->description, 70));
			$author = $look->first_name.' '.$look->last_name;

			$posts[] = array(
				'id' => $look->id,
				'title' => $look->title,
				'titleesp' => $look->titleesp,
				'descriptionesp' => $look->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $look->price,
				'popup' => $look->popup,
				'description' => $look->description,
				'button' => $look->button,
				'image' => base_url('media/images/servicios/makeup/looks/'.$look->image),
				'created_at' => $look->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//

// Makeup bridal looks

public function bridals()
{
	header("Access-Control-Allow-Origin: *");

	$bridals = $this->api_model->get_bridals($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($bridals)){
		foreach($bridals as $bridal){

			$short_desc = strip_tags(character_limiter($bridal->description, 70));
			$author = $bridal->first_name.' '.$bridal->last_name;

			$posts[] = array(
				'id' => $bridal->id,
				'title' => $bridal->title,
				'titleesp' => $bridal->titleesp,
				'descriptionesp' => $bridal->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $bridal->price,
				'popup' => $bridal->popup,
				'description' => $bridal->description,
				'button' => $bridal->button,
				'image' => base_url('media/images/servicios/makeup/bridal/'.$bridal->image),
				'created_at' => $bridal->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_bridals()
{
	header("Access-Control-Allow-Origin: *");

	$bridals = $this->api_model->get_bridals($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($bridals)){
		foreach($bridals as $bridal){
			
			$short_desc = strip_tags(character_limiter($bridal->description, 70));
			$author = $bridal->first_name.' '.$bridal->last_name;

			$posts[] = array(
				'id' => $bridal->id,
				'title' => $bridal->title,
				'titleesp' => $bridal->titleesp,
				'descriptionesp' => $bridal->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $bridal->price,
				'popup' => $bridal->popup,
				'description' => $bridal->description,
				'button' => $bridal->button,
				'image' => base_url('media/images/servicios/makeup/bridal/'.$bridal->image),
				'created_at' => $bridal->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function bridal($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$bridal = $this->api_model->get_bridal($id);

	$author = $bridal->first_name.' '.$bridal->last_name;

	$post = array(
		'id' => $bridal->id,
		'title' => $bridal->title,
		'description' => $bridal->description,
		'titleesp' => $bridal->titleesp,
				'descriptionesp' => $bridal->descriptionesp,
		'price' => $bridal->price,
		'popup' => $bridal->popup,
		'button' => $bridal->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/makeup/bridal/'.$bridal->image),
		'created_at' => $bridal->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_bridals()
{
	header("Access-Control-Allow-Origin: *");

	$bridals = $this->api_model->get_bridal($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($bridal)){
		foreach($bridals as $bridal){
			
			$short_desc = strip_tags(character_limiter($bridal->description, 70));
			$author = $bridal->first_name.' '.$bridal->last_name;

			$posts[] = array(
				'id' => $bridal->id,
				'title' => $bridal->title,
				'titleesp' => $bridal->titleesp,
				'descriptionesp' => $bridal->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $bridal->price,
				'popup' => $bridal->popup,
				'description' => $bridal->description,
				'button' => $bridal->button,
				'image' => base_url('media/images/servicios/makeup/bridal/'.$bridal->image),
				'created_at' => $bridal->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//




// Makeup Clasess

public function clasess()
{
	header("Access-Control-Allow-Origin: *");

	$clasess = $this->api_model->get_clasess($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($clasess)){
		foreach($clasess as $clases){

			$short_desc = strip_tags(character_limiter($clases->description, 70));
			$author = $clases->first_name.' '.$clases->last_name;

			$posts[] = array(
				'id' => $clases->id,
				'title' => $clases->title,
				'titleesp' => $clases->titleesp,
				'descriptionesp' => $clases->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $clases->price,
				'popup' => $clases->popup,
				'description' => $clases->description,
				'button' => $clases->button,
				'image' => base_url('media/images/servicios/makeup/clases/'.$clases->image),
				'created_at' => $clases->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_clasess()
{
	header("Access-Control-Allow-Origin: *");

	$clasess = $this->api_model->get_clasess($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($clasess)){
		foreach($clasess as $clases){
			
			$short_desc = strip_tags(character_limiter($clases->description, 70));
			$author = $clases->first_name.' '.$clases->last_name;

			$posts[] = array(
				'id' => $clases->id,
				'title' => $clases->title,
				'titleesp' => $clases->titleesp,
				'descriptionesp' => $clases->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $clases->price,
				'popup' => $clases->popup,
				'description' => $clases->description,
				'button' => $clases->button,
				'image' => base_url('media/images/servicios/makeup/clases/'.$clases->image),
				'created_at' => $clases->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function clases($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$clases = $this->api_model->get_clases($id);

	$author = $clases->first_name.' '.$clases->last_name;

	$post = array(
		'id' => $clases->id,
		'title' => $clases->title,
		'description' => $clases->description,
		'titleesp' => $clases->titleesp,
				'descriptionesp' => $clases->descriptionesp,
		'price' => $clases->price,
		'popup' => $clases->popup,
		'button' => $clases->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/makeup/clases/'.$clases->image),
		'created_at' => $clases->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_clasess()
{
	header("Access-Control-Allow-Origin: *");

	$clasess = $this->api_model->get_clases($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($clases)){
		foreach($clasess as $clases){
			
			$short_desc = strip_tags(character_limiter($clases->description, 70));
			$author = $clases->first_name.' '.$clases->last_name;

			$posts[] = array(
				'id' => $clases->id,
				'title' => $clases->title,
				'titleesp' => $clases->titleesp,
				'descriptionesp' => $clases->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $clases->price,
				'popup' => $clases->popup,
				'description' => $clases->description,
				'button' => $clases->button,
				'image' => base_url('media/images/servicios/makeup/clases/'.$clases->image),
				'created_at' => $clases->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//

// Fibroblast fibroface 

public function fibrofaces()
{
	header("Access-Control-Allow-Origin: *");

	$fibrofaces = $this->api_model->get_fibrofaces($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($fibrofaces)){
		foreach($fibrofaces as $fibroface){

			$short_desc = strip_tags(character_limiter($fibroface->description, 70));
			$author = $fibroface->first_name.' '.$fibroface->last_name;

			$posts[] = array(
				'id' => $fibroface->id,
				'title' => $fibroface->title,
				'titleesp' => $fibroface->titleesp,
				'descriptionesp' => $fibroface->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $fibroface->price,
				'popup' => $fibroface->popup,
				'description' => $fibroface->description,
				'button' => $fibroface->button,
				'image' => base_url('media/images/servicios/fibroblast/fibroface/'.$fibroface->image),
				'created_at' => $fibroface->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_fibrofaces()
{
	header("Access-Control-Allow-Origin: *");

	$fibrofaces = $this->api_model->get_fibrofaces($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($fibrofaces)){
		foreach($fibrofaces as $fibroface){
			
			$short_desc = strip_tags(character_limiter($fibroface->description, 70));
			$author = $fibroface->first_name.' '.$fibroface->last_name;

			$posts[] = array(
				'id' => $fibroface->id,
				'title' => $fibroface->title,
				'titleesp' => $fibroface->titleesp,
				'descriptionesp' => $fibroface->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $fibroface->price,
				'popup' => $fibroface->popup,
				'description' => $fibroface->description,
				'button' => $fibroface->button,
				'image' => base_url('media/images/servicios/fibroblast/fibroface/'.$fibroface->image),
				'created_at' => $fibroface->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function fibroface($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$fibroface = $this->api_model->get_fibroface($id);

	$author = $fibroface->first_name.' '.$fibroface->last_name;

	$post = array(
		'id' => $fibroface->id,
		'title' => $fibroface->title,
		'description' => $fibroface->description,
		'titleesp' => $fibroface->titleesp,
				'descriptionesp' => $fibroface->descriptionesp,
		'price' => $fibroface->price,
		'popup' => $fibroface->popup,
		'button' => $fibroface->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/fibroblast/fibroface/'.$fibroface->image),
		'created_at' => $fibroface->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_fibrofaces()
{
	header("Access-Control-Allow-Origin: *");

	$fibrofaces = $this->api_model->get_fibroface($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($fibroface)){
		foreach($fibrofaces as $fibroface){
			
			$short_desc = strip_tags(character_limiter($fibroface->description, 70));
			$author = $fibroface->first_name.' '.$fibroface->last_name;

			$posts[] = array(
				'id' => $fibroface->id,
				'title' => $fibroface->title,
				'titleesp' => $fibroface->titleesp,
				'descriptionesp' => $fibroface->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $fibroface->price,
				'popup' => $fibroface->popup,
				'description' => $fibroface->description,
				'button' => $fibroface->button,
				'image' => base_url('media/images/servicios/fibroblast/fibroface/'.$fibroface->image),
				'created_at' => $fibroface->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//

// Fibroblast Body 

public function bodys()
{
	header("Access-Control-Allow-Origin: *");

	$bodys = $this->api_model->get_bodys($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($bodys)){
		foreach($bodys as $body){

			$short_desc = strip_tags(character_limiter($body->description, 70));
			$author = $body->first_name.' '.$body->last_name;

			$posts[] = array(
				'id' => $body->id,
				'title' => $body->title,
				'description' => $body->description,
				'titleesp' => $body->titleesp,
				'descriptionesp' => $body->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $body->price,
				'popup' => $body->popup,
				'button' => $body->button,
				'image' => base_url('media/images/servicios/fibroblast/body/'.$body->image),
				'created_at' => $body->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_bodys()
{
	header("Access-Control-Allow-Origin: *");

	$bodys = $this->api_model->get_bodys($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($bodys)){
		foreach($bodys as $body){
			
			$short_desc = strip_tags(character_limiter($body->description, 70));
			$author = $body->first_name.' '.$body->last_name;

			$posts[] = array(
				'id' => $body->id,
				'title' => $body->title,
				'description' => $body->description,
				'titleesp' => $body->titleesp,
				'descriptionesp' => $body->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $body->price,
				'popup' => $body->popup,
				'button' => $body->button,
				'image' => base_url('media/images/servicios/fibroblast/body/'.$body->image),
				'created_at' => $body->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function body($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$body = $this->api_model->get_body($id);

	$author = $body->first_name.' '.$body->last_name;

	$post = array(
		'id' => $body->id,
		'title' => $body->title,
		'description' => $body->description,
		'titleesp' => $body->titleesp,
				'descriptionesp' => $body->descriptionesp,
		'price' => $body->price,
		'popup' => $body->popup,
		'button' => $body->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/fibroblast/body/'.$body->image),
		'created_at' => $body->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_bodys()
{
	header("Access-Control-Allow-Origin: *");

	$bodys = $this->api_model->get_bodys($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($body)){
		foreach($bodys as $body){
			
			$short_desc = strip_tags(character_limiter($body->description, 70));
			$author = $body->first_name.' '.$body->last_name;

			$posts[] = array(
				'id' => $body->id,
				'title' => $body->title,
				'description' => $body->description,
				'titleesp' => $body->titleesp,
				'descriptionesp' => $body->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $body->price,
				'popup' => $body->popup,
				'button' => $body->button,
				'image' => base_url('media/images/servicios/fibroblast/body/'.$body->image),
				'created_at' => $body->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//

// Fibroblast hypertrophics 

public function hypertrophics()
{
	header("Access-Control-Allow-Origin: *");

	$hypertrophics = $this->api_model->get_hypertrophics($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($hypertrophics)){
		foreach($hypertrophics as $hypertrophic){

			$short_desc = strip_tags(character_limiter($hypertrophic->description, 70));
			$author = $hypertrophic->first_name.' '.$hypertrophic->last_name;

			$posts[] = array(
				'id' => $hypertrophic->id,
				'title' => $hypertrophic->title,
				'description' => $hypertrophic->description,
				'titleesp' => $hypertrophic->titleesp,
				'descriptionesp' => $hypertrophic->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $hypertrophic->price,
				'popup' => $hypertrophic->popup,
				'button' => $hypertrophic->button,
				'image' => base_url('media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image),
				'created_at' => $hypertrophic->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_hypertrophics()
{
	header("Access-Control-Allow-Origin: *");

	$hypertrophics = $this->api_model->get_hypertrophics($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($hypertrophics)){
		foreach($hypertrophics as $hypertrophic){
			
			$short_desc = strip_tags(character_limiter($hypertrophic->description, 70));
			$author = $hypertrophic->first_name.' '.$hypertrophic->last_name;

			$posts[] = array(
				'id' => $hypertrophic->id,
				'title' => $hypertrophic->title,
				'description' => $hypertrophic->description,
				'titleesp' => $hypertrophic->titleesp,
				'descriptionesp' => $hypertrophic->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $hypertrophic->price,
				'popup' => $hypertrophic->popup,
				'button' => $hypertrophic->button,
				'image' => base_url('media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image),
				'created_at' => $hypertrophic->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function hypertrophic($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$hypertrophic = $this->api_model->get_hypertrophic($id);

	$author = $hypertrophic->first_name.' '.$hypertrophic->last_name;

	$post = array(
		'id' => $hypertrophic->id,
		'title' => $hypertrophic->title,
		'description' => $hypertrophic->description,
		'titleesp' => $hypertrophic->titleesp,
		'descriptionesp' => $hypertrophic->descriptionesp,
		'price' => $hypertrophic->price,
		'popup' => $hypertrophic->popup,
		'button' => $hypertrophic->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image),
		'created_at' => $hypertrophic->created_at
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_hypertrophics()
{
	header("Access-Control-Allow-Origin: *");

	$hypertrophics = $this->api_model->get_hypertrophics($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($hypertrophic)){
		foreach($hypertrophics as $hypertrophic){
			
			$short_desc = strip_tags(character_limiter($hypertrophic->description, 70));
			$author = $hypertrophic->first_name.' '.$hypertrophic->last_name;

			$posts[] = array(
				'id' => $hypertrophic->id,
				'title' => $hypertrophic->title,
				'description' => $hypertrophic->description,
				'titleesp' => $hypertrophic->titleesp,
				'descriptionesp' => $hypertrophic->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $hypertrophic->price,
				'popup' => $hypertrophic->popup,
				'button' => $hypertrophic->button,
				'image' => base_url('media/images/servicios/fibroblast/hypertrophic/'.$hypertrophic->image),
				'created_at' => $hypertrophic->created_at
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//



public function categories()
	{
		header("Access-Control-Allow-Origin: *");

		$categories = $this->api_model->get_categories();

		$category = array();
		if(!empty($categories)){
			foreach($categories as $cate){
				$category[] = array(
					'id' => $cate->id,
					'name' => $cate->category_name
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($category));
	}


// Contact

	

	public function contact()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header('Access-Control-Allow-Headers: Accept,Accept-Language,Content-Language,Content-Type');

		$formdata = json_decode(file_get_contents('php://input'), true);

		if( ! empty($formdata)) {

			$name = $formdata['name'];
			$lastname = $formdata['lastname'];
			$email = $formdata['email'];
			$phone = $formdata['phone'];
			$message = $formdata['message'];

			$contactData = array(
				'name' => $name,
				'lastname' => $lastname,
				'email' => $email,
				'phone' => $phone,
				'message' => $message,
				'created_at' => date('Y-m-d H:i:s', time())
			);
			
			$id = $this->api_model->insert_contact($contactData);

			$this->sendemail($contactData);
			
			$response = array('id' => $id);
		}
		else {
			$response = array('id' => '');
		}
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	public function adminContacts()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$contacts = $this->api_model->get_admin_contacts();
			foreach($contacts as $contact) {
				$posts[] = array(
					'id' => $contact->id,
					'name' => $contact->name,
					'lastname' => $contact->lastname,
					'email' => $contact->email,
					'phone' => $contact->phone,
					'message' => $contact->message,
					'created_at' => $contact->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminContact($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$contact = $this->api_model->get_admin_contact($id);

			$post = array(
				'id' => $contact->id,
				'name' => $contact->name,
				'lastname' => $contact->lastname,
				'email' => $contact->email,
				'phone' => $contact->phone,
				'message' => $contact->message
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function updateContact($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$contact = $this->api_model->get_admin_contact($id);

			$name = $this->input->post('title');
			$lastname = $this->input->post('lastname');
			$email = $this->input->post('email');
			$phone = $this->input->post('phone');
			$message = $this->input->post('message');
			
			

			$isUploadError = FALSE;

			if( ! $isUploadError) {
	        	$contactData = array(
					'name' => $name,
					'lastname' => $lastname,
					'email' => $email,
					'phone' => $phone,
					'message' => $message
				);

				$this->api_model->updateContact($id, $contactData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteContact($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$contact = $this->api_model->get_admin_contact($id);

			$this->api_model->deleteContact($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function sendemail($contactData)
	{
		$message = '<p>Hi, <br />Some one has submitted contact form.</p>';
		$message .= '<p><strong>Name: </strong>'.$contactData['name'].'</p>';
		$message .= '<p><strong>Lastname: </strong>'.$contactData['lastname'].'</p>';
		$message .= '<p><strong>Email: </strong>'.$contactData['email'].'</p>';
		$message .= '<p><strong>Phone: </strong>'.$contactData['phone'].'</p>';
		$message .= '<p><strong>Name: </strong>'.$contactData['message'].'</p>';
		$message .= '<br />Thanks';

		$this->load->library('email');

		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';

		$this->email->initialize($config);

		$this->email->from('info@valispa.com', 'vali skin care');
		$this->email->to('info@valispa.com');
		$this->email->cc('');
		$this->email->bcc('');

		$this->email->subject('Contact Form');
		$this->email->message($message);

		$this->email->send();
	}

	//

	// subcritores

	

	public function subcritore()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header('Access-Control-Allow-Headers: Accept,Accept-Language,Content-Language,Content-Type');

		$formdata = json_decode(file_get_contents('php://input'), true);

		if( ! empty($formdata)) {

			$email = $formdata['email'];

			$subcritoreData = array(
				'email' => $email,
				'created_at' => date('Y-m-d H:i:s', time())
			);
			
			$id = $this->api_model->insert_subcritore($subcritoreData);

			$this->sendregistro($subcritoreData);
			
			$response = array('id' => $id);
		}
		else {
			$response = array('id' => '');
		}
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}

	public function adminSubcritores()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$subcritores = $this->api_model->get_admin_subcritores();
			foreach($subcritores as $subcritore) {
				$posts[] = array(
					'id' => $subcritore->id,
					'email' => $subcritore->email,
					'created_at' => $subcritore->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminSubcritore($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$subcritore = $this->api_model->get_admin_subcritore($id);

			$post = array(
				'id' => $subcritore->id,
				'email' => $subcritore->email,
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function updateSubcritore($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$subcritore = $this->api_model->get_admin_subcritore($id);

			$email = $this->input->post('email');

			$isUploadError = FALSE;

			if( ! $isUploadError) {
	        	$subcritoreData = array(
					'email' => $email,
				);

				$this->api_model->updateSubcritore($id, $subcritoreData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteSubcritore($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$subcritore = $this->api_model->get_admin_subcritore($id);

			$this->api_model->deleteSubcritore($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function sendregistro($subcritoreData)
	{
		$message = '<p>Hi, <br />Some one has submitted contact form.</p>';
		$message .= '<p><strong>Email: </strong>'.$subcritoreData['email'].'</p>';
		$message .= '<br />Thanks';

		$this->load->library('email');

		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';

		$this->email->initialize($config);

		$this->email->from('info@valispa.com', 'vali skin care');
		$this->email->to('info@valispa.com');
		$this->email->cc('');
		$this->email->bcc('');

		$this->email->subject('subscribe Form');
		$this->email->message($message);

		$this->email->send();
	}
	
	//

	// login
	public function login() 
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header('Access-Control-Allow-Headers: Accept,Accept-Language,Content-Language,Content-Type');

		$formdata = json_decode(file_get_contents('php://input'), true);

		$username = $formdata['username'];
		$password = $formdata['password'];

		$user = $this->api_model->login($username, $password);

		if($user) {
			$response = array(
				'user_id' => $user->id,
				'first_name' => $user->first_name,
				'last_name' => $user->last_name,
				'token' => $user->token
			);
		}
		else {
			$response = array();
		}

		$this->output
				->set_content_type('application/json')
				->set_output(json_encode($response));
	}
//

	// blog

	public function adminBlogs()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$blogs = $this->api_model->get_admin_blogs();
			foreach($blogs as $blog) {
				$posts[] = array(
					'id' => $blog->id,
					'title' => $blog->title,
					'image' => base_url('media/images/'.$blog->image),
					'created_at' => $blog->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminBlog($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$blog = $this->api_model->get_admin_blog($id);

			$post = array(
				'id' => $blog->id,
				'title' => $blog->title,
				'description' => $blog->description,
				'image' => base_url('media/images/'.$blog->image),
				'is_featured' => $blog->is_featured,
				'is_active' => $blog->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createBlog()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$blogData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertBlog($blogData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateBlog($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$blog = $this->api_model->get_admin_blog($id);
			$filename = $blog->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($blog->image && file_exists(FCPATH.'media/images/'.$blog->image))
					{
						unlink(FCPATH.'media/images/'.$blog->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$blogData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateBlog($id, $blogData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteBlog($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$blog = $this->api_model->get_admin_blog($id);

			if($blog->image && file_exists(FCPATH.'media/images/'.$blog->image))
			{
				unlink(FCPATH.'media/images/'.$blog->image);
			}

			$this->api_model->deleteBlog($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}


	// Gallery

	public function adminGallerys()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$gallerys = $this->api_model->get_admin_gallerys();
			foreach($gallerys as $gallery) {
				$posts[] = array(
					'id' => $gallery->id,
					'title' => $gallery->title,
					'image' => base_url('media/images/gallery/'.$gallery->image),
					'created_at' => $gallery->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminGallery($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$gallery = $this->api_model->get_admin_gallery($id);

			$post = array(
				'id' => $gallery->id,
				'title' => $gallery->title,
				'description' => $gallery->description,
				'image' => base_url('media/images/gallery/'.$gallery->image),
				'is_featured' => $gallery->is_featured,
				'is_active' => $gallery->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createGallery()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/gallery/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$galleryData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertGallery($galleryData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateGallery($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$gallery = $this->api_model->get_admin_gallery($id);
			$filename = $gallery->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/gallery/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($gallery->image && file_exists(FCPATH.'media/images/gallery/'.$gallery->image))
					{
						unlink(FCPATH.'media/images/gallery/'.$gallery->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$galleryData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateGallery($id, $galleryData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteGallery($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$gallery = $this->api_model->get_admin_gallery($id);

			if($gallery->image && file_exists(FCPATH.'media/images/gallery/'.$gallery->image))
			{
				unlink(FCPATH.'media/images/gallery/'.$gallery->image);
			}

			$this->api_model->deleteGallery($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}



	// Modal

	public function adminModals()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$modals = $this->api_model->get_admin_modals();
			foreach($modals as $modal) {
				$posts[] = array(
					'id' => $modal->id,
					'title' => $modal->title,
					'image' => base_url('media/images/modal/'.$modal->image),
					'created_at' => $modal->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminModal($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$modal = $this->api_model->get_admin_modal($id);

			$post = array(
				'id' => $modal->id,
				'title' => $modal->title,
				'description' => $modal->description,
				'image' => base_url('media/images/modal/'.$modal->image),
				'is_featured' => $modal->is_featured,
				'is_active' => $modal->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createModal()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/modal/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$modalData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertModal($modalData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateModal($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$modal = $this->api_model->get_admin_modal($id);
			$filename = $modal->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/modal/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($modal->image && file_exists(FCPATH.'media/images/modal/'.$modal->image))
					{
						unlink(FCPATH.'media/images/modal/'.$modal->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$modalData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateModal($id, $modalData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteModal($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$modal = $this->api_model->get_admin_modal($id);

			if($modal->image && file_exists(FCPATH.'media/images/modal/'.$modal->image))
			{
				unlink(FCPATH.'media/images/modal/'.$modal->image);
			}

			$this->api_model->deleteModal($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}


	// publicacions

	public function adminPublicacions()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$publicacions = $this->api_model->get_admin_publicacions();
			foreach($publicacions as $publicacion) {
				$posts[] = array(
					'id' => $publicacion->id,
					'title' => $publicacion->title,
					'image' => base_url('media/images/publicacion/'.$publicacion->image),
					'created_at' => $publicacion->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminPublicacion($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$publicacion = $this->api_model->get_admin_publicacion($id);

			$post = array(
				'id' => $publicacion->id,
				'title' => $publicacion->title,
				'description' => $publicacion->description,
				'image' => base_url('media/images/publicacion/'.$publicacion->image),
				'is_featured' => $publicacion->is_featured,
				'is_active' => $publicacion->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createPublicacion()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/publicacion/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$publicacionData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertPublicacion($publicacionData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updatePublicacion($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$publicacion = $this->api_model->get_admin_publicacion($id);
			$filename = $publicacion->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/publicacion/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($publicacion->image && file_exists(FCPATH.'media/images/publicacion/'.$publicacion->image))
					{
						unlink(FCPATH.'media/images/publicacion/'.$publicacion->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$publicacionData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updatePublicacion($id, $publicacionData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deletePublicacion($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$publicacion = $this->api_model->get_admin_publicacion($id);

			if($publicacion->image && file_exists(FCPATH.'media/images/publicacion/'.$publicacion->image))
			{
				unlink(FCPATH.'media/images/publicacion/'.$publicacion->image);
			}

			$this->api_model->deletePublicacion($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}
//

// Users

public function adminUsers()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$users = $this->api_model->get_admin_users();
		foreach($users as $user) {
			$posts[] = array(
				'id' => $user->id,
				'username' => $user->username,
				'password' => $user->password,
				'first_name' => $user->first_name,
				'last_name' => $user->last_name,
				'image' => base_url('media/images/user/'.$user->image),
				'created_at' => $user->created_at
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($posts)); 
	}
}

public function adminUser($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$user = $this->api_model->get_admin_user($id);

		$post = array(
			'id' => $user->id,
			'username' => $user->username,
			'password' => $user->password,
			'first_name' => $user->first_name,
			'last_name' => $user->last_name,
			'image' => base_url('media/images/user/'.$user->image),
			'is_featured' => $user->is_featured,
			'is_active' => $user->is_active
		);
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($post)); 
	}
}

public function createUser()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$filename = NULL;

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/user/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image')) {

				$isUploadError = TRUE;

				$response = array(
					'status' => 'error',
					'message' => $this->upload->display_errors()
				);
			}
			else {
				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$userData = array(
				'username' => $username,
				'password' => $password,
				'first_name' => $first_name,
				'last_name' => $last_name,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active,
				'created_at' => date('Y-m-d H:i:s', time())
			);

			$id = $this->api_model->insertUser($userData);

			$response = array(
				'status' => 'success'
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

public function updateUser($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$user = $this->api_model->get_admin_user($id);
		$filename = $user->image;

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/user/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image')) {

				$isUploadError = TRUE;

				$response = array(
					'status' => 'error',
					'message' => $this->upload->display_errors()
				);
			}
			else {
   
				if($user->image && file_exists(FCPATH.'media/images/user/'.$user->image))
				{
					unlink(FCPATH.'media/images/servicios/user/'.$user->image);
				}

				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$userData = array(
				'username' => $username,
				'password' => $password,
				'first_name' => $first_name,
				'last_name' => $last_name,
				'button' => $button,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active
			);

			$this->api_model->updateUser($id, $userData);

			$response = array(
				'status' => 'success'
			);
		   }

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

public function deleteUser($id)
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$user = $this->api_model->get_admin_user($id);

		if($user->image && file_exists(FCPATH.'media/images/user/'.$user->image))
		{
			unlink(FCPATH.'media/images/user/'.$user->image);
		}

		$this->api_model->deleteUser($id);

		$response = array(
			'status' => 'success'
		);

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

	// Wax

	public function adminWaxs()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$waxs = $this->api_model->get_admin_waxs();
			foreach($waxs as $wax) {
				$posts[] = array(
					'id' => $wax->id,
					'title' => $wax->title,
					'price' => $wax->price,
					'titleesp' => $wax->titleesp,
					'descriptionesp' => $wax->descriptionesp,
					'popup' => $wax->popup,
					'button' => $wax->button,
					'image' => base_url('media/images/servicios/wax/'.$wax->image),
					'created_at' => $wax->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminWax($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$wax = $this->api_model->get_admin_wax($id);

			$post = array(
				'id' => $wax->id,
				'title' => $wax->title,
				'description' => $wax->description,
				'titleesp' => $wax->titleesp,
					'descriptionesp' => $wax->descriptionesp,
				'price' => $wax->price,
				'popup' => $wax->popup,
				'button' => $wax->button,
				'image' => base_url('media/images/servicios/wax/'.$wax->image),
				'is_featured' => $wax->is_featured,
				'is_active' => $wax->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createWax()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/wax/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$waxData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertWax($waxData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateWax($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$wax = $this->api_model->get_admin_wax($id);
			$filename = $wax->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/wax/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($wax->image && file_exists(FCPATH.'media/images/servicios/wax/'.$wax->image))
					{
						unlink(FCPATH.'media/images/servicios/wax/'.$wax->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$waxData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateWax($id, $waxData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteWax($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$wax = $this->api_model->get_admin_wax($id);

			if($wax->image && file_exists(FCPATH.'media/images/servicios/wax/'.$wax->image))
			{
				unlink(FCPATH.'media/images/servicios/wax/'.$wax->image);
			}

			$this->api_model->deletePermanent($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	
//


	// Permanent Makeup

	public function adminPermanents()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$permanents = $this->api_model->get_admin_permanents();
			foreach($permanents as $permanent) {
				$posts[] = array(
					'id' => $permanent->id,
					'title' => $permanent->title,
					'price' => $permanent->price,
					'titleesp' => $permanent->titleesp,
					'descriptionesp' => $permanent->descriptionesp,
					'popup' => $permanent->popup,
					'button' => $permanent->button,
					'image' => base_url('media/images/servicios/permanent/'.$permanent->image),
					'created_at' => $permanent->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminPermanent($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$permanent = $this->api_model->get_admin_permanent($id);

			$post = array(
				'id' => $permanent->id,
				'title' => $permanent->title,
				'description' => $permanent->description,
				'titleesp' => $permanent->titleesp,
					'descriptionesp' => $permanent->descriptionesp,
				'price' => $permanent->price,
				'popup' => $permanent->popup,
				'button' => $permanent->button,
				'image' => base_url('media/images/servicios/permanent/'.$permanent->image),
				'is_featured' => $permanent->is_featured,
				'is_active' => $permanent->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createPermanent()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/permanent/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$permanentData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertPermanent($permanentData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updatePermanent($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$permanent = $this->api_model->get_admin_permanent($id);
			$filename = $permanent->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/permanent/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($permanent->image && file_exists(FCPATH.'media/images/servicios/permanent/'.$permanent->image))
					{
						unlink(FCPATH.'media/images/servicios/permanent/'.$permanent->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$permanentData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updatePermanent($id, $permanentData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deletePermanent($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$permanent = $this->api_model->get_admin_permanent($id);

			if($permanent->image && file_exists(FCPATH.'media/images/servicios/permanent/'.$permanent->image))
			{
				unlink(FCPATH.'media/images/servicios/permanent/'.$permanent->image);
			}

			$this->api_model->deletePermanent($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}
	//


	// Special treatment

	public function adminSpecialts()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$specialts = $this->api_model->get_admin_specialts();
			foreach($specialts as $specialt) {
				$posts[] = array(
					'id' => $specialt->id,
					'title' => $specialt->title,
					'description' => $specialt->description,
					'titleesp' => $specialt->titleesp,
					'descriptionesp' => $specialt->descriptionesp,
					'price' => $specialt->price,
					'popup' => $specialt->popup,
					'button' => $specialt->button,
					'image' => base_url('media/images/servicios/specialt/'.$specialt->image),
					'created_at' => $specialt->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminSpecialt($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$specialt = $this->api_model->get_admin_specialt($id);

			$post = array(
				'id' => $specialt->id,
				'title' => $specialt->title,
				'description' => $specialt->description,
				'titleesp' => $specialt->titleesp,
				'descriptionesp' => $specialt->descriptionesp,
				'price' => $specialt->price,
				'popup' => $specialt->popup,
				'button' => $specialt->button,
				'image' => base_url('media/images/servicios/specialt/'.$specialt->image),
				'is_featured' => $specialt->is_featured,
				'is_active' => $specialt->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createSpecialt()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/specialt/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$specialtData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertSpecialt($specialtData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateSpecialt($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$specialt = $this->api_model->get_admin_specialt($id);
			$filename = $specialt->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/specialt/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($specialt->image && file_exists(FCPATH.'media/images/servicios/specialt/'.$specialt->image))
					{
						unlink(FCPATH.'media/images/servicios/specialt/'.$specialt->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$specialtData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateSpecialt($id, $specialtData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteSpecialt($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$specialt = $this->api_model->get_admin_specialt($id);

			if($specialt->image && file_exists(FCPATH.'media/images/servicios/specialt/'.$specialt->image))
			{
				unlink(FCPATH.'media/images/servicios/specialt/'.$specialt->image);
			}

			$this->api_model->deleteSpecialt($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}



	// Facial Antiage

	public function adminAntiages()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$antiages = $this->api_model->get_admin_antiages();
			foreach($antiages as $antiage) {
				$posts[] = array(
					'id' => $antiage->id,
					'title' => $antiage->title,
					'titleesp' => $antiage->titleesp,
					'price' => $antiage->price,
					'popup' => $antiage->popup,
					'description' => $antiage->description,
					'descriptionesp' => $antiage->descriptionesp,
					'button' => $antiage->button,
					'image' => base_url('media/images/servicios/facial/antiage/'.$antiage->image),
					'created_at' => $antiage->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminAntiage($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$antiage = $this->api_model->get_admin_antiage($id);

			$post = array(
				'id' => $antiage->id,
				'title' => $antiage->title,
				'description' => $antiage->description,
				'titleesp' => $antiage->titleesp,
				'descriptionesp' => $antiage->descriptionesp,
				'price' => $antiage->price,
				'popup' => $antiage->popup,
				'button' => $antiage->button,
				'image' => base_url('media/images/servicios/facial/antiage/'.$antiage->image),
				'is_featured' => $antiage->is_featured,
				'is_active' => $antiage->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createAntiage()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/facial/antiage/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$antiageData = array(
					'title' => $title,
					'titleesp' => $titleesp,
					'user_id' => 1,
					'description' => $description,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertAntiage($antiageData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateAntiage($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$antiage = $this->api_model->get_admin_antiage($id);
			$filename = $antiage->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/facial/antiage/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($antiage->image && file_exists(FCPATH.'media/images/servicios/facial/antiage/'.$antiage->image))
					{
						unlink(FCPATH.'media/images/servicios/facial/antiage/'.$antiage->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$antiageData = array(
					'title' => $title,
					'titleesp' => $titleesp,
					'user_id' => 1,
					'description' => $description,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateAntiage($id, $antiageData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteAntiage($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$antiage = $this->api_model->get_admin_antiage($id);

			if($antiage->image && file_exists(FCPATH.'media/images/servicios/facial/antiage/'.$antiage->image))
			{
				unlink(FCPATH.'media/images/servicios/facial/antiage/'.$antiage->image);
			}

			$this->api_model->deleteAntiage($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	//





	// Facial Restorative

	public function adminRestoratives()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$restoratives = $this->api_model->get_admin_restoratives();
			foreach($restoratives as $restorative) {
				$posts[] = array(
					'id' => $restorative->id,
					'title' => $restorative->title,
					'description' => $restorative->description,
					'titleesp' => $restorative->titleesp,
					'descriptionesp' => $restorative->descriptionesp,
					'price' => $restorative->price,
					'popup' => $restorative->popup,
					'button' => $restorative->button,
					'image' => base_url('media/images/servicios/facial/restorative/'.$restorative->image),
					'created_at' => $restorative->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminRestorative($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$restorative = $this->api_model->get_admin_restorative($id);

			$post = array(
				'id' => $restorative->id,
				'title' => $restorative->title,
				'description' => $restorative->description,
				'titleesp' => $restorative->titleesp,
				'descriptionesp' => $restorative->descriptionesp,
				'price' => $restorative->price,
				'popup' => $restorative->popup,
				'button' => $restorative->button,
				'image' => base_url('media/images/servicios/facial/restorative/'.$restorative->image),
				'is_featured' => $restorative->is_featured,
				'is_active' => $restorative->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createRestorative()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/facial/restorative/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$restorativeData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertRestorative($restorativeData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateRestorative($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$restorative = $this->api_model->get_admin_restorative($id);
			$filename = $restorative->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/facial/restorative/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($restorative->image && file_exists(FCPATH.'media/images/servicios/facial/restorative/'.$restorative->image))
					{
						unlink(FCPATH.'media/images/servicios/facial/restorative/'.$restorative->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$restorativeData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateRestorative($id, $restorativeData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteRestorative($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$restorative = $this->api_model->get_admin_restorative($id);

			if($restorative->image && file_exists(FCPATH.'media/images/servicios/facial/restorative/'.$restorative->image))
			{
				unlink(FCPATH.'media/images/servicios/facial/restorative/'.$restorative->image);
			}

			$this->api_model->deleteRestorative($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}


	// Facial Calming

	public function adminCalmings()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$calmings = $this->api_model->get_admin_calmings();
			foreach($calmings as $calming) {
				$posts[] = array(
					'id' => $calming->id,
					'title' => $calming->title,
					'description' => $calming->description,
					'titleesp' => $calming->titleesp,
					'descriptionesp' => $calming->descriptionesp,
					'price' => $calming->price,
					'popup' => $calming->popup,
					'button' => $calming->button,
					'image' => base_url('media/images/servicios/facial/calming/'.$calming->image),
					'created_at' => $calming->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminCalming($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$calming = $this->api_model->get_admin_calming($id);

			$post = array(
				'id' => $calming->id,
				'title' => $calming->title,
				'description' => $calming->description,
				'titleesp' => $calming->titleesp,
				'descriptionesp' => $calming->descriptionesp,
				'price' => $calming->price,
				'popup' => $calming->popup,
				'button' => $calming->button,
				'image' => base_url('media/images/servicios/facial/calming/'.$calming->image),
				'is_featured' => $calming->is_featured,
				'is_active' => $calming->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createCalming()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/facial/calming/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$calmingData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertCalming($calmingData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateCalming($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$calming = $this->api_model->get_admin_calming($id);
			$filename = $calming->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/facial/calming/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($calming->image && file_exists(FCPATH.'media/images/servicios/facial/calming/'.$calming->image))
					{
						unlink(FCPATH.'media/images/servicios/facial/calming/'.$calming->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$calmingData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateCalming($id, $calmingData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteCalming($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$calming = $this->api_model->get_admin_calming($id);

			if($calming->image && file_exists(FCPATH.'media/images/servicios/facial/calming/'.$calming->image))
			{
				unlink(FCPATH.'media/images/servicios/facial/calming/'.$calming->image);
			}

			$this->api_model->deleteCalming($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

//


	// Facial brightening

	public function adminBrightenings()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$brightenings = $this->api_model->get_admin_brightenings();
			foreach($brightenings as $brightening) {
				$posts[] = array(
					'id' => $brightening->id,
					'title' => $brightening->title,
					'description' => $brightening->description,
					'titleesp' => $brightening->titleesp,
					'descriptionesp' => $brightening->descriptionesp,
					'price' => $brightening->price,
					'popup' => $brightening->popup,
					'button' => $brightening->button,
					'image' => base_url('media/images/servicios/facial/brightening/'.$brightening->image),
					'created_at' => $brightening->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminBrightening($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$brightening = $this->api_model->get_admin_brightening($id);

			$post = array(
				'id' => $brightening->id,
				'title' => $brightening->title,
				'description' => $brightening->description,
				'titleesp' => $brightening->titleesp,
				'descriptionesp' => $brightening->descriptionesp,
				'price' => $brightening->price,
				'popup' => $brightening->popup,
				'button' => $brightening->button,
				'image' => base_url('media/images/servicios/facial/brightening/'.$brightening->image),
				'is_featured' => $brightening->is_featured,
				'is_active' => $brightening->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createBrightening()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/facial/brightening/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$brighteningData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertBrightening($brighteningData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateBrightening($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$brightening = $this->api_model->get_admin_brightening($id);
			$filename = $brightening->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/facial/brightening/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($brightening->image && file_exists(FCPATH.'media/images/servicios/facial/brightening/'.$brightening->image))
					{
						unlink(FCPATH.'media/images/servicios/facial/brightening/'.$brightening->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$brighteningData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateBrightening($id, $brighteningData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteBrightening($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$brightening = $this->api_model->get_admin_brightening($id);

			if($brightening->image && file_exists(FCPATH.'media/images/servicios/facial/brightening/'.$brightening->image))
			{
				unlink(FCPATH.'media/images/servicios/facial/brightening/'.$brightening->image);
			}

			$this->api_model->deleteBrightening($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}


	// Facial specialf

	public function adminSpecialfs()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$specialfs = $this->api_model->get_admin_specialfs();
			foreach($specialfs as $specialf) {
				$posts[] = array(
					'id' => $specialf->id,
					'title' => $specialf->title,
					'description' => $specialf->description,
					'titleesp' => $specialf->titleesp,
					'descriptionesp' => $specialf->descriptionesp,
					'price' => $specialf->price,
					'popup' => $specialf->popup,
					'button' => $specialf->button,
					'image' => base_url('media/images/servicios/facial/specialf/'.$specialf->image),
					'created_at' => $specialf->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminSpecialf($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$specialf = $this->api_model->get_admin_specialf($id);

			$post = array(
				'id' => $specialf->id,
				'title' => $specialf->title,
				'description' => $specialf->description,
				'titleesp' => $specialf->titleesp,
				'descriptionesp' => $specialf->descriptionesp,
				'price' => $specialf->price,
				'popup' => $specialf->popup,
				'button' => $specialf->button,
				'image' => base_url('media/images/servicios/facial/specialf/'.$specialf->image),
				'is_featured' => $specialf->is_featured,
				'is_active' => $specialf->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createSpecialf()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/facial/specialf/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$specialfData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertSpecialf($specialfData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateSpecialf($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$specialf = $this->api_model->get_admin_specialf($id);
			$filename = $specialf->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/facial/specialf/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($specialf->image && file_exists(FCPATH.'media/images/servicios/facial/specialf/'.$specialf->image))
					{
						unlink(FCPATH.'media/images/servicios/facial/specialf/'.$specialf->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$specialfData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateSpecialf($id, $specialfData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteSpecialf($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$specialf = $this->api_model->get_admin_specialf($id);

			if($specialf->image && file_exists(FCPATH.'media/images/servicios/facial/specialf/'.$specialf->image))
			{
				unlink(FCPATH.'media/images/servicios/facial/specialf/'.$specialf->image);
			}

			$this->api_model->deleteSpecialf($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

// Facial Luxury

public function adminLuxurings()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$luxurings = $this->api_model->get_admin_luxurings();
			foreach($luxurings as $luxuring) {
				$posts[] = array(
					'id' => $luxuring->id,
					'title' => $luxuring->title,
					'description' => $luxuring->description,
					'titleesp' => $luxuring->titleesp,
					'descriptionesp' => $luxuring->descriptionesp,
					'price' => $luxuring->price,
					'popup' => $luxuring->popup,
					'button' => $luxuring->button,
					'image' => base_url('media/images/servicios/facial/luxury/'.$luxuring->image),
					'created_at' => $luxuring->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminLuxuring($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$luxuring = $this->api_model->get_admin_luxuring($id);

			$post = array(
				'id' => $luxuring->id,
				'title' => $luxuring->title,
				'description' => $luxuring->description,
				'titleesp' => $luxuring->titleesp,
				'descriptionesp' => $luxuring->descriptionesp,
				'price' => $luxuring->price,
				'popup' => $luxuring->popup,
				'button' => $luxuring->button,
				'image' => base_url('media/images/servicios/facial/luxury/'.$luxuring->image),
				'is_featured' => $luxuring->is_featured,
				'is_active' => $luxuring->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createLuxuring()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/facial/luxury/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$luxuringData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertLuxuring($luxuringData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateLuxuring($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$luxuring = $this->api_model->get_admin_luxuring($id);
			$filename = $luxuring->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/facial/luxury/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($luxuring->image && file_exists(FCPATH.'media/images/servicios/facial/luxury/'.$luxuring->image))
					{
						unlink(FCPATH.'media/images/servicios/facial/luxury/'.$luxuring->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$luxuringData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateLuxuring($id, $luxuringData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteLuxuring($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$luxuring = $this->api_model->get_admin_luxuring($id);

			if($luxuring->image && file_exists(FCPATH.'media/images/servicios/facial/luxury/'.$luxuring->image))
			{
				unlink(FCPATH.'media/images/servicios/facial/luxury/'.$luxuring->image);
			}

			$this->api_model->deleteLuxuring($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

//


	

	// Body hand and legs

	public function adminHands()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$hands = $this->api_model->get_admin_hands();
			foreach($hands as $hand) {
				$posts[] = array(
					'id' => $hand->id,
					'title' => $hand->title,
					'description' => $hand->description,
					'titleesp' => $hand->titleesp,
					'descriptionesp' => $hand->descriptionesp,
					'price' => $hand->price,
					'popup' => $hand->popup,
					'button' => $hand->button,
					'image' => base_url('media/images/servicios/body/hand/'.$hand->image),
					'created_at' => $hand->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminHand($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$hand = $this->api_model->get_admin_hand($id);

			$post = array(
				'id' => $hand->id,
				'title' => $hand->title,
				'description' => $hand->description,
				'titleesp' => $hand->titleesp,
				'descriptionesp' => $hand->descriptionesp,
				'price' => $hand->price,
				'popup' => $hand->popup,
				'button' => $hand->button,
				'image' => base_url('media/images/servicios/body/hand/'.$hand->image),
				'is_featured' => $hand->is_featured,
				'is_active' => $hand->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createHand()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/body/hand/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$handData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertHand($handData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateHand($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$hand = $this->api_model->get_admin_hand($id);
			$filename = $hand->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/body/hand/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($hand->image && file_exists(FCPATH.'media/images/servicios/body/hand/'.$hand->image))
					{
						unlink(FCPATH.'media/images/servicios/body/hand/'.$hand->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$handData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateHand($id, $handData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteHand($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$hand = $this->api_model->get_admin_hand($id);

			if($hand->image && file_exists(FCPATH.'media/images/servicios/body/hand/'.$hand->image))
			{
				unlink(FCPATH.'media/images/servicios/body/hand/'.$hand->image);
			}

			$this->api_model->deleteHand($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}


	// 

	// Body sculptings

	public function adminSculptings()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$sculptings = $this->api_model->get_admin_sculptings();
			foreach($sculptings as $sculpting) {
				$posts[] = array(
					'id' => $sculpting->id,
					'title' => $sculpting->title,
					'description' => $sculpting->description,
					'titleesp' => $sculpting->titleesp,
					'descriptionesp' => $sculpting->descriptionesp,
					'price' => $sculpting->price,
					'popup' => $sculpting->popup,
					'button' => $sculpting->button,
					'image' => base_url('media/images/servicios/body/sculpting/'.$sculpting->image),
					'created_at' => $sculpting->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminSculpting($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$sculpting = $this->api_model->get_admin_sculpting($id);

			$post = array(
				'id' => $sculpting->id,
				'title' => $sculpting->title,
				'description' => $sculpting->description,
				'titleesp' => $sculpting->titleesp,
				'descriptionesp' => $sculpting->descriptionesp,
				'price' => $sculpting->price,
				'popup' => $sculpting->popup,
				'button' => $sculpting->button,
				'image' => base_url('media/images/servicios/body/sculpting/'.$sculpting->image),
				'is_featured' => $sculpting->is_featured,
				'is_active' => $sculpting->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createSculpting()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/body/sculpting/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$sculptingData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertSculpting($sculptingData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateSculpting($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$sculpting = $this->api_model->get_admin_sculpting($id);
			$filename = $sculpting->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/body/sculpting/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($sculpting->image && file_exists(FCPATH.'media/images/servicios/body/sculpting/'.$sculpting->image))
					{
						unlink(FCPATH.'media/images/servicios/body/sculpting/'.$sculpting->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$sculptingData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateSculpting($id, $sculptingData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteSculpting($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$sculpting = $this->api_model->get_admin_sculpting($id);

			if($sculpting->image && file_exists(FCPATH.'media/images/servicios/body/sculpting/'.$sculpting->image))
			{
				unlink(FCPATH.'media/images/servicios/body/sculpting/'.$sculpting->image);
			}

			$this->api_model->deleteSculpting($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}


// Body Wrappings

	public function adminWrappings()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$wrappings = $this->api_model->get_admin_wrappings();
			foreach($wrappings as $wrapping) {
				$posts[] = array(
					'id' => $wrapping->id,
					'title' => $wrapping->title,
					'description' => $wrapping->description,
					'titleesp' => $wrapping->titleesp,
					'descriptionesp' => $wrapping->descriptionesp,
					'price' => $wrapping->price,
					'popup' => $wrapping->popup,
					'button' => $wrapping->button,
					'image' => base_url('media/images/servicios/body/wrapping/'.$wrapping->image),
					'created_at' => $wrapping->created_at
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminWrapping($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$wrapping = $this->api_model->get_admin_wrapping($id);

			$post = array(
				'id' => $wrapping->id,
				'title' => $wrapping->title,
				'description' => $wrapping->description,
				'titleesp' => $wrapping->titleesp,
				'descriptionesp' => $wrapping->descriptionesp,
				'price' => $wrapping->price,
				'popup' => $wrapping->popup,
				'button' => $wrapping->button,
				'image' => base_url('media/images/servicios/body/wrapping/'.$wrapping->image),
				'is_featured' => $wrapping->is_featured,
				'is_active' => $wrapping->is_active
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createWrapping()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/body/wrapping/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$wrappingData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model->insertWrapping($wrappingData);

				$response = array(
					'status' => 'success'
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function updateWrapping($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$wrapping = $this->api_model->get_admin_wrapping($id);
			$filename = $wrapping->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/body/wrapping/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            $config['max_size']             = 500;

	            $this->load->library('upload', $config);
	            if ( ! $this->upload->do_upload('image')) {

	            	$isUploadError = TRUE;

					$response = array(
						'status' => 'error',
						'message' => $this->upload->display_errors()
					);
	            }
	            else {
	   
					if($wrapping->image && file_exists(FCPATH.'media/images/servicios/body/wrapping/'.$wrapping->image))
					{
						unlink(FCPATH.'media/images/servicios/body/wrapping/'.$wrapping->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$wrappingData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active
				);

				$this->api_model->updateWrapping($id, $wrappingData);

				$response = array(
					'status' => 'success'
				);
           	}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}

	public function deleteWrapping($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$wrapping = $this->api_model->get_admin_wrapping($id);

			if($wrapping->image && file_exists(FCPATH.'media/images/servicios/body/wrapping/'.$wrapping->image))
			{
				unlink(FCPATH.'media/images/servicios/body/wrapping/'.$wrapping->image);
			}

			$this->api_model->deleteWrapping($id);

			$response = array(
				'status' => 'success'
			);

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($response)); 
		}
	}


// Makeup looks

public function adminLooks()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$looks = $this->api_model->get_admin_looks();
		foreach($looks as $look) {
			$posts[] = array(
				'id' => $look->id,
				'title' => $look->title,
				'description' => $look->description,
				'titleesp' => $look->titleesp,
				'descriptionesp' => $look->descriptionesp,
				'price' => $look->price,
				'popup' => $look->popup,
				'button' => $look->button,
				'image' => base_url('media/images/servicios/makeup/looks/'.$look->image),
				'created_at' => $look->created_at
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($posts)); 
	}
}

public function adminLook($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$look = $this->api_model->get_admin_look($id);

		$post = array(
			'id' => $look->id,
			'title' => $look->title,
			'description' => $look->description,
			'titleesp' => $look->titleesp,
			'descriptionesp' => $look->descriptionesp,
			'price' => $look->price,
			'popup' => $look->popup,
			'button' => $look->button,
			'image' => base_url('media/images/servicios/makeup/looks/'.$look->image),
			'is_featured' => $look->is_featured,
			'is_active' => $look->is_active
		);
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($post)); 
	}
}

public function createLook()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$titleesp = $this->input->post('titleesp');
		$descriptionesp = $this->input->post('descriptionesp');
		$price = $this->input->post('price');
		$popup = $this->input->post('popup');
		$button = $this->input->post('button');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$filename = NULL;

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/servicios/makeup/looks/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image')) {

				$isUploadError = TRUE;

				$response = array(
					'status' => 'error',
					'message' => $this->upload->display_errors()
				);
			}
			else {
				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$lookData = array(
				'user_id' => 1,
				'title' => $title,
				'description' => $description,
				'titleesp' => $titleesp,
				'descriptionesp' => $descriptionesp,
				'price' => $price,
				'popup' => $popup,
				'button' => $button,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active,
				'created_at' => date('Y-m-d H:i:s', time())
			);

			$id = $this->api_model->insertLook($lookData);

			$response = array(
				'status' => 'success'
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

public function updateLook($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$look = $this->api_model->get_admin_look($id);
		$filename = $look->image;

		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$titleesp = $this->input->post('titleesp');
		$descriptionesp = $this->input->post('descriptionesp');
		$price = $this->input->post('price');
		$popup = $this->input->post('popup');
		$button = $this->input->post('button');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/servicios/makeup/looks/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image')) {

				$isUploadError = TRUE;

				$response = array(
					'status' => 'error',
					'message' => $this->upload->display_errors()
				);
			}
			else {
   
				if($look->image && file_exists(FCPATH.'media/images/servicios/makeup/looks/'.$look->image))
				{
					unlink(FCPATH.'media/images/servicios/makeup/looks/'.$look->image);
				}

				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$lookData = array(
				'user_id' => 1,
				'title' => $title,
				'description' => $description,
				'titleesp' => $titleesp,
				'descriptionesp' => $descriptionesp,
				'price' => $price,
				'popup' => $popup,
				'button' => $button,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active
			);

			$this->api_model->updateLook($id, $lookData);

			$response = array(
				'status' => 'success'
			);
		   }

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

public function deleteLook($id)
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$look = $this->api_model->get_admin_look($id);

		if($look->image && file_exists(FCPATH.'media/images/servicios/makeup/looks/'.$look->image))
		{
			unlink(FCPATH.'media/images/servicios/makeup/looks/'.$look->image);
		}

		$this->api_model->deleteLook($id);

		$response = array(
			'status' => 'success'
		);

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

// Makeup bridal looks

public function adminBridals()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$bridals = $this->api_model->get_admin_bridals();
		foreach($bridals as $bridal) {
			$posts[] = array(
				'id' => $bridal->id,
				'title' => $bridal->title,
				'description' => $bridal->description,
				'titleesp' => $bridal->titleesp,
				'descriptionesp' => $bridal->descriptionesp,
				'price' => $bridal->price,
				'popup' => $bridal->popup,
				'button' => $bridal->button,
				'image' => base_url('media/images/servicios/makeup/bridal/'.$bridal->image),
				'created_at' => $bridal->created_at
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($posts)); 
	}
}

public function adminBridal($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$bridal = $this->api_model->get_admin_bridal($id);

		$post = array(
			'id' => $bridal->id,
			'title' => $bridal->title,
			'description' => $bridal->description,
			'titleesp' => $bridal->titleesp,
			'descriptionesp' => $bridal->descriptionesp,
			'price' => $bridal->price,
			'popup' => $bridal->popup,
			'button' => $bridal->button,
			'image' => base_url('media/images/servicios/makeup/bridal/'.$bridal->image),
			'is_featured' => $bridal->is_featured,
			'is_active' => $bridal->is_active
		);
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($post)); 
	}
}

public function createBridal()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$titleesp = $this->input->post('titleesp');
		$descriptionesp = $this->input->post('descriptionesp');
		$price = $this->input->post('price');
		$popup = $this->input->post('popup');
		$button = $this->input->post('button');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$filename = NULL;

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/servicios/makeup/bridal/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image')) {

				$isUploadError = TRUE;

				$response = array(
					'status' => 'error',
					'message' => $this->upload->display_errors()
				);
			}
			else {
				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$bridalData = array(
				'user_id' => 1,
				'title' => $title,
				'description' => $description,
				'titleesp' => $titleesp,
				'descriptionesp' => $descriptionesp,
				'price' => $price,
				'popup' => $popup,
				'button' => $button,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active,
				'created_at' => date('Y-m-d H:i:s', time())
			);

			$id = $this->api_model->insertBridal($bridalData);

			$response = array(
				'status' => 'success'
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

public function updateBridal($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$bridal = $this->api_model->get_admin_bridal($id);
		$filename = $bridal->image;

		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$titleesp = $this->input->post('titleesp');
		$descriptionesp = $this->input->post('descriptionesp');
		$price = $this->input->post('price');
		$popup = $this->input->post('popup');
		$button = $this->input->post('button');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/servicios/makeup/bridal/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image')) {

				$isUploadError = TRUE;

				$response = array(
					'status' => 'error',
					'message' => $this->upload->display_errors()
				);
			}
			else {
   
				if($bridal->image && file_exists(FCPATH.'media/images/servicios/makeup/bridal/'.$bridal->image))
				{
					unlink(FCPATH.'media/images/servicios/makeup/bridal/'.$bridal->image);
				}

				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$bridalData = array(
				'user_id' => 1,
				'title' => $title,
				'description' => $description,
				'titleesp' => $titleesp,
				'descriptionesp' => $descriptionesp,
				'price' => $price,
				'popup' => $popup,
				'button' => $button,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active
			);

			$this->api_model->updateBridal($id, $bridalData);

			$response = array(
				'status' => 'success'
			);
		   }

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

public function deleteBridal($id)
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$bridal = $this->api_model->get_admin_bridal($id);

		if($bridal->image && file_exists(FCPATH.'media/images/servicios/makeup/bridal/'.$bridal->image))
		{
			unlink(FCPATH.'media/images/servicios/makeup/bridal/'.$bridal->image);
		}

		$this->api_model->deleteBridal($id);

		$response = array(
			'status' => 'success'
		);

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}



// Makeup clasess

public function adminClasess()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$clasess = $this->api_model->get_admin_clasess();
		foreach($clasess as $clases) {
			$posts[] = array(
				'id' => $clases->id,
				'title' => $clases->title,
				'description' => $clases->description,
				'titleesp' => $clases->titleesp,
				'descriptionesp' => $clases->descriptionesp,
				'price' => $clases->price,
				'popup' => $clases->popup,
				'button' => $clases->button,
				'image' => base_url('media/images/servicios/makeup/clases/'.$clases->image),
				'created_at' => $clases->created_at
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($posts)); 
	}
}

public function adminClases($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$clases = $this->api_model->get_admin_clases($id);

		$post = array(
			'id' => $clases->id,
			'title' => $clases->title,
			'description' => $clases->description,
			'titleesp' => $clases->titleesp,
			'descriptionesp' => $clases->descriptionesp,
			'price' => $clases->price,
			'popup' => $clases->popup,
			'button' => $clases->button,
			'image' => base_url('media/images/servicios/makeup/clases/'.$clases->image),
			'is_featured' => $clases->is_featured,
			'is_active' => $clases->is_active
		);
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($post)); 
	}
}

public function createClases()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$titleesp = $this->input->post('titleesp');
		$descriptionesp = $this->input->post('descriptionesp');
		$price = $this->input->post('price');
		$popup = $this->input->post('popup');
		$button = $this->input->post('button');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$filename = NULL;

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/servicios/makeup/clases/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image')) {

				$isUploadError = TRUE;

				$response = array(
					'status' => 'error',
					'message' => $this->upload->display_errors()
				);
			}
			else {
				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$clasesData = array(
				'user_id' => 1,
				'title' => $title,
				'description' => $description,
				'titleesp' => $titleesp,
				'descriptionesp' => $descriptionesp,
				'price' => $price,
				'popup' => $popup,
				'button' => $button,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active,
				'created_at' => date('Y-m-d H:i:s', time())
			);

			$id = $this->api_model->insertClases($clasesData);

			$response = array(
				'status' => 'success'
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

public function updateClases($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$clases = $this->api_model->get_admin_clases($id);
		$filename = $clases->image;

		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$titleesp = $this->input->post('titleesp');
		$descriptionesp = $this->input->post('descriptionesp');
		$price = $this->input->post('price');
		$popup = $this->input->post('popup');
		$button = $this->input->post('button');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/servicios/makeup/clases/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image')) {

				$isUploadError = TRUE;

				$response = array(
					'status' => 'error',
					'message' => $this->upload->display_errors()
				);
			}
			else {
   
				if($clases->image && file_exists(FCPATH.'media/images/servicios/makeup/clases/'.$clases->image))
				{
					unlink(FCPATH.'media/images/servicios/makeup/clases/'.$clases->image);
				}

				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$clasesData = array(
				'user_id' => 1,
				'title' => $title,
				'description' => $description,
				'titleesp' => $titleesp,
				'descriptionesp' => $descriptionesp,
				'price' => $price,
				'popup' => $popup,
				'button' => $button,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active
			);

			$this->api_model->updateClases($id, $clasesData);

			$response = array(
				'status' => 'success'
			);
		   }

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

public function deleteClases($id)
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$clases = $this->api_model->get_admin_clases($id);

		if($clases->image && file_exists(FCPATH.'media/images/servicios/makeup/clases/'.$clases->image))
		{
			unlink(FCPATH.'media/images/servicios/makeup/clases/'.$clases->image);
		}

		$this->api_model->deleteClases($id);

		$response = array(
			'status' => 'success'
		);

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

// Fibroblast fibroface

public function adminFibrofaces()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$fibrofaces = $this->api_model->get_admin_fibrofaces();
		foreach($fibrofaces as $fibroface) {
			$posts[] = array(
				'id' => $fibroface->id,
				'title' => $fibroface->title,
				'description' => $fibroface->description,
				'titleesp' => $fibroface->titleesp,
				'descriptionesp' => $fibroface->descriptionesp,
				'price' => $fibroface->price,
				'popup' => $fibroface->popup,
				'button' => $fibroface->button,
				'image' => base_url('media/images/servicios/fibroblast/fibroface/'.$fibroface->image),
				'created_at' => $fibroface->created_at
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($posts)); 
	}
}

public function adminFibroface($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$fibroface = $this->api_model->get_admin_fibroface($id);

		$post = array(
			'id' => $fibroface->id,
			'title' => $fibroface->title,
			'description' => $fibroface->description,
			'titleesp' => $fibroface->titleesp,
			'descriptionesp' => $fibroface->descriptionesp,
			'price' => $fibroface->price,
			'popup' => $fibroface->popup,
			'button' => $fibroface->button,
			'image' => base_url('media/images/servicios/fibroblast/fibroface/'.$fibroface->image),
			'is_featured' => $fibroface->is_featured,
			'is_active' => $fibroface->is_active
		);
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($post)); 
	}
}

public function createFibroface()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$titleesp = $this->input->post('titleesp');
		$descriptionesp = $this->input->post('descriptionesp');
		$price = $this->input->post('price');
		$popup = $this->input->post('popup');
		$button = $this->input->post('button');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$filename = NULL;

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/servicios/fibroblast/fibroface/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image')) {

				$isUploadError = TRUE;

				$response = array(
					'status' => 'error',
					'message' => $this->upload->display_errors()
				);
			}
			else {
				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$fibrofaceData = array(
				'user_id' => 1,
				'title' => $title,
				'description' => $description,
				'titleesp' => $titleesp,
				'descriptionesp' => $descriptionesp,
				'price' => $price,
				'popup' => $popup,
				'button' => $button,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active,
				'created_at' => date('Y-m-d H:i:s', time())
			);

			$id = $this->api_model->insertFibroface($fibrofaceData);

			$response = array(
				'status' => 'success'
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

public function updateFibroface($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$fibroface = $this->api_model->get_admin_fibroface($id);
		$filename = $fibroface->image;

		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$titleesp = $this->input->post('titleesp');
		$descriptionesp = $this->input->post('descriptionesp');
		$price = $this->input->post('price');
		$popup = $this->input->post('popup');
		$button = $this->input->post('button');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/servicios/fibroblast/fibroface/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image')) {

				$isUploadError = TRUE;

				$response = array(
					'status' => 'error',
					'message' => $this->upload->display_errors()
				);
			}
			else {
   
				if($fibroface->image && file_exists(FCPATH.'media/images/servicios/fibroblast/fibroface/'.$fibroface->image))
				{
					unlink(FCPATH.'media/images/servicios/fibroblast/fibroface/'.$fibroface->image);
				}

				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$fibrofaceData = array(
				'user_id' => 1,
				'title' => $title,
				'description' => $description,
				'titleesp' => $titleesp,
				'descriptionesp' => $descriptionesp,
				'price' => $price,
				'popup' => $popup,
				'button' => $button,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active
			);

			$this->api_model->updateFibroface($id, $fibrofaceData);

			$response = array(
				'status' => 'success'
			);
		   }

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

public function deleteFibroface($id)
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$fibroface = $this->api_model->get_admin_fibroface($id);

		if($fibroface->image && file_exists(FCPATH.'media/images/servicios/fibroblast/fibroface/'.$fibroface->image))
		{
			unlink(FCPATH.'media/images/servicios/fibroblast/fibroface/'.$fibroface->image);
		}

		$this->api_model->deleteFibroface($id);

		$response = array(
			'status' => 'success'
		);

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

//


// Fibroblast Body

public function adminBodys()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$bodys = $this->api_model->get_admin_bodys();
		foreach($bodys as $body) {
			$posts[] = array(
				'id' => $body->id,
				'title' => $body->title,
				'description' => $body->description,
				'titleesp' => $body->titleesp,
				'descriptionesp' => $body->descriptionesp,
				'price' => $body->price,
				'popup' => $body->popup,
				'button' => $body->button,
				'image' => base_url('media/images/servicios/fibroblast/body/'.$body->image),
				'created_at' => $body->created_at
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($posts)); 
	}
}

public function adminBody($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$body = $this->api_model->get_admin_body($id);

		$post = array(
			'id' => $body->id,
			'title' => $body->title,
			'description' => $body->description,
			'titleesp' => $body->titleesp,
			'descriptionesp' => $body->descriptionesp,
			'price' => $body->price,
			'popup' => $body->popup,
			'button' => $body->button,
			'image' => base_url('media/images/servicios/fibroblast/body/'.$body->image),
			'is_featured' => $body->is_featured,
			'is_active' => $body->is_active
		);
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($post)); 
	}
}

public function createBody()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$titleesp = $this->input->post('titleesp');
		$descriptionesp = $this->input->post('descriptionesp');
		$price = $this->input->post('price');
		$popup = $this->input->post('popup');
		$button = $this->input->post('button');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$filename = NULL;

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/servicios/fibroblast/body/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image')) {

				$isUploadError = TRUE;

				$response = array(
					'status' => 'error',
					'message' => $this->upload->display_errors()
				);
			}
			else {
				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$bodyData = array(
				'user_id' => 1,
				'title' => $title,
				'description' => $description,
				'titleesp' => $titleesp,
				'descriptionesp' => $descriptionesp,
				'price' => $price,
				'popup' => $popup,
				'button' => $button,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active,
				'created_at' => date('Y-m-d H:i:s', time())
			);

			$id = $this->api_model->insertBody($bodyData);

			$response = array(
				'status' => 'success'
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

public function updateBody($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$body = $this->api_model->get_admin_body($id);
		$filename = $body->image;

		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$titleesp = $this->input->post('titleesp');
		$descriptionesp = $this->input->post('descriptionesp');
		$price = $this->input->post('price');
		$popup = $this->input->post('popup');
		$button = $this->input->post('button');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/servicios/fibroblast/body/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image')) {

				$isUploadError = TRUE;

				$response = array(
					'status' => 'error',
					'message' => $this->upload->display_errors()
				);
			}
			else {
   
				if($body->image && file_exists(FCPATH.'media/images/servicios/fibroblast/body/'.$body->image))
				{
					unlink(FCPATH.'media/images/servicios/fibroblast/body/'.$body->image);
				}

				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$bodyData = array(
				'user_id' => 1,
				'title' => $title,
				'description' => $description,
				'titleesp' => $titleesp,
				'descriptionesp' => $descriptionesp,
				'price' => $price,
				'popup' => $popup,
				'button' => $button,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active
			);

			$this->api_model->updateBody($id, $bodyData);

			$response = array(
				'status' => 'success'
			);
		   }

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

public function deleteBody($id)
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$body = $this->api_model->get_admin_body($id);

		if($body->image && file_exists(FCPATH.'media/images/servicios/fibroblast/body/'.$body->image))
		{
			unlink(FCPATH.'media/images/servicios/fibroblast/body/'.$body->image);
		}

		$this->api_model->deleteBody($id);

		$response = array(
			'status' => 'success'
		);

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}


//





// Fibroblast hypertrophic

public function adminHypertrophics()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$hypertrophics = $this->api_model->get_admin_hypertrophics();
		foreach($hypertrophics as $hypertrophic) {
			$posts[] = array(
				'id' => $hypertrophic->id,
				'title' => $hypertrophic->title,
				'description' => $hypertrophic->description,
				'titleesp' => $hypertrophic->titleesp,
				'descriptionesp' => $hypertrophic->descriptionesp,
				'price' => $hypertrophic->price,
				'popup' => $hypertrophic->popup,
				'button' => $hypertrophic->button,
				'image' => base_url('media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image),
				'created_at' => $hypertrophic->created_at
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($posts)); 
	}
}

public function adminHypertrophic($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$hypertrophic = $this->api_model->get_admin_hypertrophic($id);

		$post = array(
			'id' => $hypertrophic->id,
			'title' => $hypertrophic->title,
			'description' => $hypertrophic->description,
			'titleesp' => $hypertrophic->titleesp,
			'descriptionesp' => $hypertrophic->descriptionesp,
			'price' => $hypertrophic->price,
			'popup' => $hypertrophic->popup,
			'button' => $hypertrophic->button,
			'image' => base_url('media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image),
			'is_featured' => $hypertrophic->is_featured,
			'is_active' => $hypertrophic->is_active
		);
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($post)); 
	}
}

public function createHypertrophic()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$titleesp = $this->input->post('titleesp');
		$descriptionesp = $this->input->post('descriptionesp');
		$price = $this->input->post('price');
		$popup = $this->input->post('popup');
		$button = $this->input->post('button');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$filename = NULL;

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/servicios/fibroblast/hypertrophics/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image')) {

				$isUploadError = TRUE;

				$response = array(
					'status' => 'error',
					'message' => $this->upload->display_errors()
				);
			}
			else {
				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$hypertrophicData = array(
				'user_id' => 1,
				'title' => $title,
				'description' => $description,
				'titleesp' => $titleesp,
				'descriptionesp' => $descriptionesp,
				'price' => $price,
				'popup' => $popup,
				'button' => $button,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active,
				'created_at' => date('Y-m-d H:i:s', time())
			);

			$id = $this->api_model->insertHypertrophic($hypertrophicData);

			$response = array(
				'status' => 'success'
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

public function updateHypertrophic($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$hypertrophic = $this->api_model->get_admin_hypertrophic($id);
		$filename = $hypertrophic->image;

		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$titleesp = $this->input->post('titleesp');
		$descriptionesp = $this->input->post('descriptionesp');
		$price = $this->input->post('price');
		$popup = $this->input->post('popup');
		$button = $this->input->post('button');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/servicios/fibroblast/hypertrophics/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500;

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('image')) {

				$isUploadError = TRUE;

				$response = array(
					'status' => 'error',
					'message' => $this->upload->display_errors()
				);
			}
			else {
   
				if($hypertrophic->image && file_exists(FCPATH.'media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image))
				{
					unlink(FCPATH.'media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image);
				}

				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$hypertrophicData = array(
				'user_id' => 1,
				'title' => $title,
				'description' => $description,
				'titleesp' => $titleesp,
				'descriptionesp' => $descriptionesp,
				'price' => $price,
				'popup' => $popup,
				'button' => $button,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active
			);

			$this->api_model->updateHypertrophic($id, $hypertrophicData);

			$response = array(
				'status' => 'success'
			);
		   }

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

public function deleteHypertrophic($id)
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$hypertrophic = $this->api_model->get_admin_hypertrophic($id);

		if($hypertrophic->image && file_exists(FCPATH.'media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image))
		{
			unlink(FCPATH.'media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image);
		}

		$this->api_model->deleteHypertrophic($id);

		$response = array(
			'status' => 'success'
		);

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

// buscar 


public function search()
	{
		header("Access-Control-Allow-Origin: *");
		header("Content-Type:application/json; charset=UTF-8");


		$text = $this->input->get('text');


		$data['product'] = $this->api_model->search_products($text);
		// echo $text;
		 //print_r($data); // traemos el array
		$data = json_encode( $data, JSON_FORCE_OBJECT );// se convierte a json
		echo $data."\n";



		$this->output
			->set_content_type('application/json');
		
	}

public function adminSearch (){

	$text = $this->input->get('text');

	$this->load->view('product');

	
}




}
