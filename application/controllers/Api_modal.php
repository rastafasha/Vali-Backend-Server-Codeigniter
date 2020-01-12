<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Modal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
	}


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
				'created_at' => $modal->created_at,
				'is_active' => $modal->is_active
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
				'created_at' => $modal->created_at,
				'is_active' => $modal->is_active
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
		'created_at' => $modal->created_at,
		'is_active' => $modal->is_active
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
				'created_at' => $modal->created_at,
				'is_active' => $modal->is_active
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//



//Crud


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
					'created_at' => $modal->created_at,
					'is_active' => $modal->is_active
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



}
