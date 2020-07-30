<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Publicacion extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_publicacion');
		$this->load->helper('url');
		$this->load->helper('text');
	}


// publicacions

public function publicacions()
{
	header("Access-Control-Allow-Origin: *");

	$publicacions = $this->api_model_publicacion->get_publicacions($featured=false, $recentpost=false);

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
				'created_at' => $publicacion->created_at,
				'is_active' => $publicacion->is_active
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

	$publicacions = $this->api_model_publicacion->get_publicacions($featured=true, $recentpost=false);

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
				'created_at' => $publicacion->created_at,
				'is_active' => $publicacion->is_active
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
	
	$publicacion = $this->api_model_publicacion->get_publicacion($id);

	$author = $publicacion->first_name.' '.$publicacion->last_name;

	$post = array(
		'id' => $publicacion->id,
		'title' => $publicacion->title,
		'description' => $publicacion->description,
		'author' => $author,
		'image' => base_url('media/images/publicacion/'.$publicacion->image),
		'created_at' => $publicacion->created_at,
		'is_active' => $publicacion->is_active
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_publicacions()
{
	header("Access-Control-Allow-Origin: *");

	$publicacions = $this->api_model_publicacion->get_publicacions($featured=false, $recentpost=5);

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
				'created_at' => $publicacion->created_at,
				'is_active' => $publicacion->is_active
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}


//


//Crud


	// publicacions

	public function adminPublicacions()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$publicacions = $this->api_model_publicacion->get_admin_publicacions();
			foreach($publicacions as $publicacion) {
				$posts[] = array(
					'id' => $publicacion->id,
					'title' => $publicacion->title,
					'image' => base_url('media/images/publicacion/'.$publicacion->image),
					'created_at' => $publicacion->created_at,
					'is_active' => $publicacion->is_active
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

			$publicacion = $this->api_model_publicacion->get_admin_publicacion($id);

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

				$id = $this->api_model_publicacion->insertPublicacion($publicacionData);

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

			$publicacion = $this->api_model_publicacion->get_admin_publicacion($id);
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

				$this->api_model_publicacion->updatePublicacion($id, $publicacionData);

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

			$publicacion = $this->api_model_publicacion->get_admin_publicacion($id);

			if($publicacion->image && file_exists(FCPATH.'media/images/publicacion/'.$publicacion->image))
			{
				unlink(FCPATH.'media/images/publicacion/'.$publicacion->image);
			}

			$this->api_model_publicacion->deletePublicacion($id);

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
