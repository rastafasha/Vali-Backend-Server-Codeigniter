<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Specialt extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
    }


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
				'created_at' => $specialt->created_at,
				'is_active' => $specialt->is_active
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
				'created_at' => $specialt->created_at,
				'is_active' => $specialt->is_active
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
		'created_at' => $specialt->created_at,
		'is_active' => $specialt->is_active
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
				'created_at' => $specialt->created_at,
				'is_active' => $specialt->is_active
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

///

//Crud

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
					'created_at' => $specialt->created_at,
					'is_active' => $specialt->is_active
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

}