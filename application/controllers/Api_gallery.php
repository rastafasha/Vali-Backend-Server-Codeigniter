<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Gallery extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_gallery');
		$this->load->helper('url');
		$this->load->helper('text');
	}

    

    // Gallery 

public function gallerys()
{
	header("Access-Control-Allow-Origin: *");

	$gallerys = $this->api_model_gallery->get_gallerys($featured=false, $recentpost=false);

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
				'is_active' => $gallery->is_active,
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

	$gallerys = $this->api_model_gallery->get_gallerys($featured=true, $recentpost=false);

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
				'is_active' => $gallery->is_active,
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
	
	$gallery = $this->api_model_gallery->get_gallery($id);

	$author = $gallery->first_name.' '.$gallery->last_name;

	$post = array(
		'id' => $gallery->id,
		'title' => $gallery->title,
		'description' => $gallery->description,
		'author' => $author,
		'is_active' => $gallery->is_active,
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

	$gallerys = $this->api_model_gallery->get_gallerys($featured=false, $recentpost=5);

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
				'is_active' => $gallery->is_active,
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
    



    // Gallery

	public function adminGallerys()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$gallerys = $this->api_model_gallery->get_admin_gallerys();
			foreach($gallerys as $gallery) {
				$posts[] = array(
					'id' => $gallery->id,
					'title' => $gallery->title,
					'is_active' => $gallery->is_active,
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

			$gallery = $this->api_model_gallery->get_admin_gallery($id);

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

				$id = $this->api_model_gallery->insertGallery($galleryData);

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

			$gallery = $this->api_model_gallery->get_admin_gallery($id);
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

				$this->api_model_gallery->updateGallery($id, $galleryData);

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

			$gallery = $this->api_model_gallery->get_admin_gallery($id);

			if($gallery->image && file_exists(FCPATH.'media/images/gallery/'.$gallery->image))
			{
				unlink(FCPATH.'media/images/gallery/'.$gallery->image);
			}

			$this->api_model_gallery->deleteGallery($id);

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
