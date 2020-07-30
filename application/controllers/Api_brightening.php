<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Brightening extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_brightening');
		$this->load->helper('url');
		$this->load->helper('text');
    }



// Facial brightenings 

public function brightenings()
{
	header("Access-Control-Allow-Origin: *");

	$brightenings = $this->api_model_brightening->get_brightenings($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($brightenings)){
		foreach($brightenings as $brightening){

			$short_asc = strip_tags(character_limiter($brightening->description, 70));
			$author = $brightening->first_name.' '.$brightening->last_name;

			$posts[] = array(
				'id' => $brightening->id,
				'title' => $brightening->title,
				'titleesp' => $brightening->titleesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $brightening->price,
				'popup' => $brightening->popup,
				'description' => $brightening->description,
				'descriptionesp' => $brightening->descriptionesp,
				'button' => $brightening->button,
				'image' => base_url('media/images/servicios/facial/brightening/'.$brightening->image),
				'created_at' => $brightening->created_at,
				'is_active' => $brightening->is_active,
				'textFinanc' => $brightening->textFinanc,
				'is_activeTf'=> $brightening->is_activeTf
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

	$brightenings = $this->api_model_brightening->get_brightenings($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($brightenings)){
		foreach($brightenings as $brightening){
			
			$short_asc = strip_tags(character_limiter($brightening->description, 70));
			$author = $brightening->first_name.' '.$brightening->last_name;

			$posts[] = array(
				'id' => $brightening->id,
				'title' => $brightening->title,
				'titleesp' => $brightening->titleesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $brightening->price,
				'popup' => $brightening->popup,
				'description' => $brightening->description,
				'descriptionesp' => $brightening->descriptionesp,
				'button' => $brightening->button,
				'image' => base_url('media/images/servicios/facial/brightening/'.$brightening->image),
				'created_at' => $brightening->created_at,
				'is_active' => $brightening->is_active,
				'textFinanc' => $brightening->textFinanc,
				'is_activeTf'=> $brightening->is_activeTf
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
	
	$brightening = $this->api_model_brightening->get_brightening($id);

	$author = $brightening->first_name.' '.$brightening->last_name;

	$post = array(
		'id' => $brightening->id,
		'title' => $brightening->title,
		'titleesp' => $brightening->titleesp,
		'description' => $brightening->description,
		'descriptionesp' => $brightening->descriptionesp,
		'price' => $brightening->price,
		'popup' => $brightening->popup,
		'button' => $brightening->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/facial/brightening/'.$brightening->image),
		'created_at' => $brightening->created_at,
		'is_active' => $brightening->is_active,
		'textFinanc' => $brightening->textFinanc,
		'is_activeTf'=> $brightening->is_activeTf
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_brightenings()
{
	header("Access-Control-Allow-Origin: *");

	$brightenings = $this->api_model_brightening->get_brightenings($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($brightening)){
		foreach($brightenings as $brightening){
			
			$short_asc = strip_tags(character_limiter($brightening->description, 70));
			$author = $brightening->first_name.' '.$brightening->last_name;

			$posts[] = array(
				'id' => $brightening->id,
				'title' => $brightening->title,
				'titleesp' => $brightening->titleesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $brightening->price,
				'popup' => $brightening->popup,
				'description' => $brightening->description,
				'descriptionesp' => $brightening->descriptionesp,
				'button' => $brightening->button,
				'image' => base_url('media/images/servicios/facial/brightening/'.$brightening->image),
				'created_at' => $brightening->created_at,
				'is_active' => $brightening->is_active,
				'textFinanc' => $brightening->textFinanc,
				'is_activeTf'=> $brightening->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

///

//Crud

	// Facial brightening

	public function adminBrightenings()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$brightenings = $this->api_model_brightening->get_admin_brightenings();
			foreach($brightenings as $brightening) {
				$posts[] = array(
					'id' => $brightening->id,
					'title' => $brightening->title,
					'titleesp' => $brightening->titleesp,
					'price' => $brightening->price,
					'popup' => $brightening->popup,
					'description' => $brightening->description,
					'descriptionesp' => $brightening->descriptionesp,
					'button' => $brightening->button,
					'image' => base_url('media/images/servicios/facial/brightening/'.$brightening->image),
					'created_at' => $brightening->created_at,
					'is_active' => $brightening->is_active,
					'textFinanc' => $brightening->textFinanc,
				'is_activeTf'=> $brightening->is_activeTf
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

			$brightening = $this->api_model_brightening->get_admin_brightening($id);

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
				'is_active' => $brightening->is_active,
				'textFinanc' => $brightening->textFinanc,
				'is_activeTf'=> $brightening->is_activeTf
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
			$textFinanc = $this->input->post('textFinanc');
			$is_activeTf = $this->input->post('is_activeTf');

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
					'textFinanc' => $textFinanc,
					'is_activeTf' => $is_activeTf,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model_brightening->insertBrightening($brighteningData);

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

			$brightening = $this->api_model_brightening->get_admin_brightening($id);
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
			$textFinanc = $this->input->post('textFinanc');
			$is_activeTf = $this->input->post('is_activeTf');

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
					'textFinanc' => $textFinanc,
					'is_activeTf' => $is_activeTf,
				);

				$this->api_model_brightening->updateBrightening($id, $brighteningData);

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

			$brightening = $this->api_model_brightening->get_admin_brightening($id);

			if($brightening->image && file_exists(FCPATH.'media/images/servicios/facial/brightening/'.$brightening->image))
			{
				unlink(FCPATH.'media/images/servicios/facial/brightening/'.$brightening->image);
			}

			$this->api_model_brightening->deleteBrightening($id);

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
