<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Wrapping extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
    }


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

//Crud


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
    
}