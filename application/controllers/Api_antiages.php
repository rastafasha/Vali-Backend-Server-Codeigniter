<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Antiages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
    }



// Facial Antiage 

public function antiages()
{
	header("Access-Control-Allow-Origin: *");

	$antiages = $this->api_model->get_antiages($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($antiages)){
		foreach($antiages as $antiage){

			$short_asc = strip_tags(character_limiter($antiage->description, 70));
			$author = $antiage->first_name.' '.$antiage->last_name;

			$posts[] = array(
				'id' => $antiage->id,
				'title' => $antiage->title,
				'titleesp' => $antiage->titleesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $antiage->price,
				'popup' => $antiage->popup,
				'description' => $antiage->description,
				'descriptionesp' => $antiage->descriptionesp,
				'button' => $antiage->button,
				'image' => base_url('media/images/servicios/facial/antiage/'.$antiage->image),
				'created_at' => $antiage->created_at,
				'is_active' => $antiage->is_active
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
			
			$short_asc = strip_tags(character_limiter($antiage->description, 70));
			$author = $antiage->first_name.' '.$antiage->last_name;

			$posts[] = array(
				'id' => $antiage->id,
				'title' => $antiage->title,
				'titleesp' => $antiage->titleesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $antiage->price,
				'popup' => $antiage->popup,
				'description' => $antiage->description,
				'descriptionesp' => $antiage->descriptionesp,
				'button' => $antiage->button,
				'image' => base_url('media/images/servicios/facial/antiage/'.$antiage->image),
				'created_at' => $antiage->created_at,
				'is_active' => $antiage->is_active
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
		'created_at' => $antiage->created_at,
		'is_active' => $antiage->is_active
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
			
			$short_asc = strip_tags(character_limiter($antiage->description, 70));
			$author = $antiage->first_name.' '.$antiage->last_name;

			$posts[] = array(
				'id' => $antiage->id,
				'title' => $antiage->title,
				'titleesp' => $antiage->titleesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $antiage->price,
				'popup' => $antiage->popup,
				'description' => $antiage->description,
				'descriptionesp' => $antiage->descriptionesp,
				'button' => $antiage->button,
				'image' => base_url('media/images/servicios/facial/antiage/'.$antiage->image),
				'created_at' => $antiage->created_at,
				'is_active' => $antiage->is_active
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

///

//Crud

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
					'created_at' => $antiage->created_at,
					'is_active' => $antiage->is_active
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



}
