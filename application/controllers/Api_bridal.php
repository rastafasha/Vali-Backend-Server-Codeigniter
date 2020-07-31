<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Bridal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_bridal');
		$this->load->helper('url');
		$this->load->helper('text');
    }


// Makeup bridal looks

public function bridals()
{
	header("Access-Control-Allow-Origin: *");

	$bridals = $this->api_model_bridal->get_bridals($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($bridals)){
		foreach($bridals as $bridal){

			$short_asc = strip_tags(character_limiter($bridal->description, 70));
			$author = $bridal->first_name.' '.$bridal->last_name;

			$posts[] = array(
				'id' => $bridal->id,
				'title' => $bridal->title,
				'titleesp' => $bridal->titleesp,
				'descriptionesp' => $bridal->descriptionesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $bridal->price,
				'popup' => $bridal->popup,
				'description' => $bridal->description,
				'button' => $bridal->button,
				'buttonEs' => $bridal->buttonEs,
				'target' => $bridal->target,
				'image' => base_url('media/images/servicios/makeup/bridal/'.$bridal->image),
				'created_at' => $bridal->created_at,
				'is_active' => $bridal->is_active,
				'textFinanc' => $bridal->textFinanc,
				'textFinancEsp' => $bridal->textFinancEsp,
				'is_activeTf'=> $bridal->is_activeTf
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

	$bridals = $this->api_model_bridal->get_bridals($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($bridals)){
		foreach($bridals as $bridal){
			
			$short_asc = strip_tags(character_limiter($bridal->description, 70));
			$author = $bridal->first_name.' '.$bridal->last_name;

			$posts[] = array(
				'id' => $bridal->id,
				'title' => $bridal->title,
				'titleesp' => $bridal->titleesp,
				'descriptionesp' => $bridal->descriptionesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $bridal->price,
				'popup' => $bridal->popup,
				'description' => $bridal->description,
				'button' => $bridal->button,
				'buttonEs' => $bridal->buttonEs,
				'target' => $bridal->target,
				'image' => base_url('media/images/servicios/makeup/bridal/'.$bridal->image),
				'created_at' => $bridal->created_at,
				'is_active' => $bridal->is_active,
				'textFinanc' => $bridal->textFinanc,
				'textFinancEsp' => $bridal->textFinancEsp,
				'is_activeTf'=> $bridal->is_activeTf
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
	
	$bridal = $this->api_model_bridal->get_bridal($id);

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
				'buttonEs' => $bridal->buttonEs,
				'target' => $bridal->target,
				'author' => $author,
				'image' => base_url('media/images/servicios/makeup/bridal/'.$bridal->image),
				'created_at' => $bridal->created_at,
				'is_active' => $bridal->is_active,
				'textFinanc' => $bridal->textFinanc,
				'textFinancEsp' => $bridal->textFinancEsp,
				'is_activeTf'=> $bridal->is_activeTf
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_bridals()
{
	header("Access-Control-Allow-Origin: *");

	$bridals = $this->api_model_bridal->get_bridal($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($bridal)){
		foreach($bridals as $bridal){
			
			$short_asc = strip_tags(character_limiter($bridal->description, 70));
			$author = $bridal->first_name.' '.$bridal->last_name;

			$posts[] = array(
				'id' => $bridal->id,
				'title' => $bridal->title,
				'titleesp' => $bridal->titleesp,
				'descriptionesp' => $bridal->descriptionesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $bridal->price,
				'popup' => $bridal->popup,
				'description' => $bridal->description,
				'button' => $bridal->button,
				'buttonEs' => $bridal->buttonEs,
				'target' => $bridal->target,
				'image' => base_url('media/images/servicios/makeup/bridal/'.$bridal->image),
				'created_at' => $bridal->created_at,
				'is_active' => $bridal->is_active,
				'textFinanc' => $bridal->textFinanc,
				'textFinancEsp' => $bridal->textFinancEsp,
				'is_activeTf'=> $bridal->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}


//

//Crud

// Makeup bridal looks

public function adminBridals()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$bridals = $this->api_model_bridal->get_admin_bridals();
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
				'buttonEs' => $bridal->buttonEs,
				'target' => $bridal->target,
				'image' => base_url('media/images/servicios/makeup/bridal/'.$bridal->image),
				'created_at' => $bridal->created_at,
				'is_active' => $bridal->is_active,
				'textFinanc' => $bridal->textFinanc,
				'textFinancEsp' => $bridal->textFinancEsp,
				'is_activeTf'=> $bridal->is_activeTf
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

		$bridal = $this->api_model_bridal->get_admin_bridal($id);

		$post = array(
				'id' => $bridal->id,
				'title' => $bridal->title,
				'description' => $bridal->description,
				'titleesp' => $bridal->titleesp,
				'descriptionesp' => $bridal->descriptionesp,
				'price' => $bridal->price,
				'popup' => $bridal->popup,
				'button' => $bridal->button,
				'buttonEs' => $bridal->buttonEs,
				'target' => $bridal->target,
				'image' => base_url('media/images/servicios/makeup/bridal/'.$bridal->image),
				'is_featured' => $bridal->is_featured,
				'is_active' => $bridal->is_active,
				'textFinanc' => $bridal->textFinanc,
				'textFinancEsp' => $bridal->textFinancEsp,
				'is_activeTf'=> $bridal->is_activeTf
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
		$buttonEs = $this->input->post('buttonEs');
		$target = $this->input->post('target');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');
		$textFinanc = $this->input->post('textFinanc');
		$textFinancEsp = $this->input->post('textFinancEsp');
		$is_activeTf = $this->input->post('is_activeTf');

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
				'buttonEs' => $buttonEs,
				'target' => $target,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active,
				'textFinanc' => $textFinanc,
				'textFinancEsp' => $textFinancEsp,
				'is_activeTf' => $is_activeTf,
				'created_at' => date('Y-m-d H:i:s', time())
			);

			$id = $this->api_model_bridal->insertBridal($bridalData);

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

		$bridal = $this->api_model_bridal->get_admin_bridal($id);
		$filename = $bridal->image;

		$title = $this->input->post('title');
		$description = $this->input->post('description');
		$titleesp = $this->input->post('titleesp');
		$descriptionesp = $this->input->post('descriptionesp');
		$price = $this->input->post('price');
		$popup = $this->input->post('popup');
		$button = $this->input->post('button');
		$buttonEs = $this->input->post('buttonEs');
		$target = $this->input->post('target');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');
		$textFinanc = $this->input->post('textFinanc');
		$textFinancEsp = $this->input->post('textFinancEsp');
		$is_activeTf = $this->input->post('is_activeTf');

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
				'buttonEs' => $buttonEs,
				'target' => $target,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active,
				'textFinanc' => $textFinanc,
				'textFinancEsp' => $textFinancEsp,
				'is_activeTf' => $is_activeTf
			);

			$this->api_model_bridal->updateBridal($id, $bridalData);

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

		$bridal = $this->api_model_bridal->get_admin_bridal($id);

		if($bridal->image && file_exists(FCPATH.'media/images/servicios/makeup/bridal/'.$bridal->image))
		{
			unlink(FCPATH.'media/images/servicios/makeup/bridal/'.$bridal->image);
		}

		$this->api_model_bridal->deleteBridal($id);

		$response = array(
			'status' => 'success'
		);

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($response)); 
	}
}

}
