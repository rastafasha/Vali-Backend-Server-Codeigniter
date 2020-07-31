<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Fibroface extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_fibroface');
		$this->load->helper('url');
		$this->load->helper('text');
	}


// Fibroblast fibroface 

public function fibrofaces()
{
	header("Access-Control-Allow-Origin: *");

	$fibrofaces = $this->api_model_fibroface->get_fibrofaces($featured=false, $recentpost=false);

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
				'buttonEs' => $fibroface->buttonEs,
				'target' => $fibroface->target,
				'image' => base_url('media/images/servicios/fibroblast/fibroface/'.$fibroface->image),
				'created_at' => $fibroface->created_at,
				'is_active' => $fibroface->is_active,
				'textFinanc' => $fibroface->textFinanc,
				'textFinancEsp' => $fibroface->textFinancEsp,
				'is_activeTf'=> $fibroface->is_activeTf
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

	$fibrofaces = $this->api_model_fibroface->get_fibrofaces($featured=true, $recentpost=false);

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
				'buttonEs' => $fibroface->buttonEs,
				'target' => $fibroface->target,
				'image' => base_url('media/images/servicios/fibroblast/fibroface/'.$fibroface->image),
				'created_at' => $fibroface->created_at,
				'is_active' => $fibroface->is_active,
				'textFinanc' => $fibroface->textFinanc,
				'textFinancEsp' => $fibroface->textFinancEsp,
				'is_activeTf'=> $fibroface->is_activeTf
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
	
	$fibroface = $this->api_model_fibroface->get_fibroface($id);

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
				'buttonEs' => $fibroface->buttonEs,
				'target' => $fibroface->target,
				'author' => $author,
				'image' => base_url('media/images/servicios/fibroblast/fibroface/'.$fibroface->image),
				'created_at' => $fibroface->created_at,
				'is_active' => $fibroface->is_active,
				'textFinanc' => $fibroface->textFinanc,
				'textFinancEsp' => $fibroface->textFinancEsp,
				'is_activeTf'=> $fibroface->is_activeTf
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_fibrofaces()
{
	header("Access-Control-Allow-Origin: *");

	$fibrofaces = $this->api_model_fibroface->get_fibroface($featured=false, $recentpost=5);

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
				'buttonEs' => $fibroface->buttonEs,
				'target' => $fibroface->target,
				'image' => base_url('media/images/servicios/fibroblast/fibroface/'.$fibroface->image),
				'created_at' => $fibroface->created_at,
				'is_active' => $fibroface->is_active,
				'textFinanc' => $fibroface->textFinanc,
				'textFinancEsp' => $fibroface->textFinancEsp,
				'is_activeTf'=> $fibroface->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//


//Crud

// Fibroblast fibroface

public function adminFibrofaces()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$fibrofaces = $this->api_model_fibroface->get_admin_fibrofaces();
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
				'buttonEs' => $fibroface->buttonEs,
				'target' => $fibroface->target,
				'image' => base_url('media/images/servicios/fibroblast/fibroface/'.$fibroface->image),
				'created_at' => $fibroface->created_at,
				'is_active' => $fibroface->is_active,
				'textFinanc' => $fibroface->textFinanc,
				'textFinancEsp' => $fibroface->textFinancEsp,
				'is_activeTf'=> $fibroface->is_activeTf
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

		$fibroface = $this->api_model_fibroface->get_admin_fibroface($id);

		$post = array(
			'id' => $fibroface->id,
			'title' => $fibroface->title,
			'description' => $fibroface->description,
			'titleesp' => $fibroface->titleesp,
			'descriptionesp' => $fibroface->descriptionesp,
			'price' => $fibroface->price,
			'popup' => $fibroface->popup,
			'button' => $fibroface->button,
			'buttonEs' => $fibroface->buttonEs,
			'target' => $fibroface->target,
			'image' => base_url('media/images/servicios/fibroblast/fibroface/'.$fibroface->image),
			'is_featured' => $fibroface->is_featured,
			'is_active' => $fibroface->is_active,
			'textFinanc' => $fibroface->textFinanc,
			'textFinancEsp' => $fibroface->textFinancEsp,
				'is_activeTf'=> $fibroface->is_activeTf
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

		$fibroface = $this->api_model_fibroface->get_admin_fibroface($id);
		$filename = $fibroface->image;

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
				'buttonEs' => $buttonEs,
				'target' => $target,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active,
				'textFinanc' => $textFinanc,
				'textFinancEsp' => $textFinancEsp,
				'is_activeTf' => $is_activeTf,
			);

			$this->api_model_fibroface->updateFibroface($id, $fibrofaceData);

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

		$fibroface = $this->api_model_fibroface->get_admin_fibroface($id);

		if($fibroface->image && file_exists(FCPATH.'media/images/servicios/fibroblast/fibroface/'.$fibroface->image))
		{
			unlink(FCPATH.'media/images/servicios/fibroblast/fibroface/'.$fibroface->image);
		}

		$this->api_model_fibroface->deleteFibroface($id);

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
}