<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_pages');
		$this->load->helper('url');
		$this->load->helper('text');
	}

	public function pages()
	{
		header("Access-Control-Allow-Origin: *");

		$pages = $this->api_model_pages->get_pages($featured=false, $recentpost=false);

		$posts = array();
		if(!empty($pages)){
			foreach($pages as $page){


				$posts[] = array(
					'id' => $page->id,
					'title' => $page->title,
					'description' => $page->description,
					'description2' => $page->description2,
					'titulo' => $page->titulo,
					'descripcionesp' => $page->descripcionesp,
					'descripcionesp2' => $page->descripcionesp2,
					'video' => $page->video,
					'verVideo' => $page->verVideo,
					'verImagen' => $page->verImagen,
					'videoEsp' => $page->videoEsp,
					'image' => base_url('media/images/pages/'.$page->image),
					'created_at' => $page->created_at,
					'is_active' => $page->is_active,
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function page($id)
	{
		header("Access-Control-Allow-Origin: *");
		
		$page = $this->api_model_pages->get_page($id);


		$post = array(
			'id' => $page->id,
					'title' => $page->title,
					'description' => $page->description,
					'description2' => $page->description2,
					'titulo' => $page->titulo,
					'descripcionesp' => $page->descripcionesp,
                    'descripcionesp2' => $page->descripcionesp2,
					'video' => $page->video,
					'verVideo' => $page->verVideo,
					'verImagen' => $page->verImagen,
					'videoEsp' => $page->videoEsp,
					'image' => base_url('media/images/pages/'.$page->image),
					'created_at' => $page->created_at,
					'is_active' => $page->is_active,
		);
		
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($post));
	}

	

	public function membership()
	{
		header("Access-Control-Allow-Origin: *");

		$pages = $this->api_model_pages->get_membership();

		$posts = array();
		if(!empty($pages)){
			foreach($pages as $page){


				$posts[] = array(
					'id' => $page->id,
					'title' => $page->title,
					'description' => $page->description,
					'description2' => $page->description2,
					'titulo' => $page->titulo,
					'descripcionesp' => $page->descripcionesp,
					'descripcionesp2' => $page->descripcionesp2,
					'video' => $page->video,
					'verVideo' => $page->verVideo,
					'verImagen' => $page->verImagen,
					'videoEsp' => $page->videoEsp,
					'image' => base_url('media/images/pages/'.$page->image),
					'created_at' => $page->created_at,
					'is_active' => $page->is_active,
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	public function franchise()
	{
		header("Access-Control-Allow-Origin: *");

		$pages = $this->api_model_pages->get_franchise();

		$posts = array();
		if(!empty($pages)){
			foreach($pages as $page){


				$posts[] = array(
					'id' => $page->id,
					'title' => $page->title,
					'description' => $page->description,
					'description2' => $page->description2,
					'titulo' => $page->titulo,
					'descripcionesp' => $page->descripcionesp,
					'descripcionesp2' => $page->descripcionesp2,
					'video' => $page->video,
					'verVideo' => $page->verVideo,
					'verImagen' => $page->verImagen,
					'videoEsp' => $page->videoEsp,
					'image' => base_url('media/images/pages/'.$page->image),
					'created_at' => $page->created_at,
					'is_active' => $page->is_active,
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}


	
	public function adminPages()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$pages = $this->api_model_pages->get_admin_pages();
			foreach($pages as $page) {
				$posts[] = array(
					'id' => $page->id,
					'title' => $page->title,
					'description' => $page->description,
					'description2' => $page->description2,
					'titulo' => $page->titulo,
					'descripcionesp' => $page->descripcionesp,
                    'descripcionesp2' => $page->descripcionesp2,
					'video' => $page->video,
					'verVideo' => $page->verVideo,
					'verImagen' => $page->verImagen,
					'videoEsp' => $page->videoEsp,
					'image' => base_url('media/images/pages/'.$page->image),
					'created_at' => $page->created_at,
					'is_active' => $page->is_active,
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	




	// membership

	public function adminMemberships()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$pages = $this->api_model_pages->get_admin_pages();
			foreach($pages as $page) {
				$posts[] = array(
					'id' => $page->id,
					'title' => $page->title,
					'description' => $page->description,
					'description2' => $page->description2,
					'titulo' => $page->titulo,
					'descripcionesp' => $page->descripcionesp,
                    'descripcionesp2' => $page->descripcionesp2,
					'video' => $page->video,
					'verVideo' => $page->verVideo,
					'verImagen' => $page->verImagen,
					'videoEsp' => $page->videoEsp,
					'image' => base_url('media/images/pages/'.$page->image),
					'created_at' => $page->created_at,
					'is_active' => $page->is_active,
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminMembership($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$page = $this->api_model_pages->get_admin_page($id);

			$post = array(
				'id' => $page->id,
					'title' => $page->title,
					'description' => $page->description,
					'description2' => $page->description2,
					'titulo' => $page->titulo,
					'descripcionesp' => $page->descripcionesp,
                    'descripcionesp2' => $page->descripcionesp2,
					'video' => $page->video,
					'verVideo' => $page->verVideo,
					'verImagen' => $page->verImagen,
					'videoEsp' => $page->videoEsp,
					'image' => base_url('media/images/pages/'.$page->image),
					'created_at' => $page->created_at,
					'is_active' => $page->is_active,
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function updateMembership($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$page = $this->api_model_pages->get_admin_page($id);
			$filename = $page->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$description2 = $this->input->post('description2');
			$titulo = $this->input->post('titulo');
			$descripcionesp = $this->input->post('descripcionesp');
			$descripcionesp2 = $this->input->post('descripcionesp2');
			$video = $this->input->post('video');
			$verVideo = $this->input->post('verVideo');
			$verImagen = $this->input->post('verImagen');
			$videoEsp = $this->input->post('videoEsp');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/pages/';
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
	   
					if($page->image && file_exists(FCPATH.'media/images/pages/'.$page->image))
					{
						unlink(FCPATH.'media/images/pages/'.$page->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$pageData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
                    'image' => $filename,
                    'description' => $description,
					'description2' => $description2,
					'titulo' => $titulo,
					'descripcionesp' => $descripcionesp,
					'descripcionesp2' => $descripcionesp2,
					'video' => $video,
					'verVideo' => $verVideo,
					'verImagen' => $verImagen,
					'videoEsp' => $videoEsp,
					'is_active' => $is_active
				);

				$this->api_model_pages->updatePage($id, $pageData);

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







	// franchise

	public function adminFranchises()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$pages = $this->api_model_pages->get_admin_pages();
			foreach($pages as $page) {
				$posts[] = array(
					'id' => $page->id,
					'title' => $page->title,
					'description' => $page->description,
					'description2' => $page->description2,
					'titulo' => $page->titulo,
					'descripcionesp' => $page->descripcionesp,
                    'descripcionesp2' => $page->descripcionesp2,
					'video' => $page->video,
					'verVideo' => $page->verVideo,
					'verImagen' => $page->verImagen,
					'videoEsp' => $page->videoEsp,
					'image' => base_url('media/images/pages/'.$page->image),
					'created_at' => $page->created_at,
					'is_active' => $page->is_active,
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminFranchise($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$page = $this->api_model_pages->get_admin_page($id);

			$post = array(
				'id' => $page->id,
					'title' => $page->title,
					'description' => $page->description,
					'description2' => $page->description2,
					'titulo' => $page->titulo,
					'descripcionesp' => $page->descripcionesp,
                    'descripcionesp2' => $page->descripcionesp2,
					'video' => $page->video,
					'verVideo' => $page->verVideo,
					'verImagen' => $page->verImagen,
					'videoEsp' => $page->videoEsp,
					'image' => base_url('media/images/pages/'.$page->image),
					'created_at' => $page->created_at,
					'is_active' => $page->is_active,
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function updateFranchise($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$page = $this->api_model_pages->get_admin_page($id);
			$filename = $page->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$description2 = $this->input->post('description2');
			$titulo = $this->input->post('titulo');
			$descripcionesp = $this->input->post('descripcionesp');
			$descripcionesp2 = $this->input->post('descripcionesp2');
			$video = $this->input->post('video');
			$verVideo = $this->input->post('verVideo');
			$verImagen = $this->input->post('verImagen');
			$videoEsp = $this->input->post('videoEsp');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/pages/';
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
	   
					if($page->image && file_exists(FCPATH.'media/images/pages/'.$page->image))
					{
						unlink(FCPATH.'media/images/pages/'.$page->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$pageData = array(
					'title' => $title,
					'user_id' => 1,
					'description' => $description,
                    'image' => $filename,
                    'description' => $description,
					'description2' => $description2,
					'titulo' => $titulo,
					'descripcionesp' => $descripcionesp,
					'descripcionesp2' => $descripcionesp2,
					'video' => $video,
					'verVideo' => $verVideo,
					'verImagen' => $verImagen,
					'videoEsp' => $videoEsp,
					'is_active' => $is_active
				);

				$this->api_model_pages->updatePage($id, $pageData);

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




}
