<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Fspecial extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
    }



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
				'created_at' => $specialf->created_at,
				'is_active' => $specialf->is_active
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
				'created_at' => $specialf->created_at,
				'is_active' => $specialf->is_active
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
				'created_at' => $specialf->created_at,
				'is_active' => $specialf->is_active
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

///

//Crud

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
					'created_at' => $specialf->created_at,
					'is_active' => $specialf->is_active
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


}
