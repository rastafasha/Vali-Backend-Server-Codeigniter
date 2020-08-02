<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Financing extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_financing');
		$this->load->helper('url');
		$this->load->helper('text');
	}



// 

public function financings()
{
	header("Access-Control-Allow-Origin: *");

	$financings = $this->api_model_financing->get_financings($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($financings)){
		foreach($financings as $financing){


			$posts[] = array(
				'id' => $financing->id,
					'video' => $financing->video,
					'videoEsp' => $financing->videoEsp,
					'verVideo' => $financing->verVideo,
					'image' => base_url('media/images/financing/'.$financing->image),
					'verImagen' => $financing->verImagen,
					'created_at' => $financing->created_at,
					'is_active' => $financing->is_active,
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_financings()
{
	header("Access-Control-Allow-Origin: *");

	$financings = $this->api_model_financing->get_financings($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($financings)){
		foreach($financings as $financing){
			

			$posts[] = array(
				'id' => $financing->id,
					'video' => $financing->video,
					'videoEsp' => $financing->videoEsp,
					'verVideo' => $financing->verVideo,
					'image' => base_url('media/images/financing/'.$financing->image),
					'verImagen' => $financing->verImagen,
					'created_at' => $financing->created_at,
					'is_active' => $financing->is_active,
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function financing($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$financing = $this->api_model_financing->get_financing($id);

	$post = array(
		'id' => $financing->id,
		'video' => $financing->video,
		'videoEsp' => $financing->videoEsp,
		'verVideo' => $financing->verVideo,
		'image' => base_url('media/images/financing/'.$financing->image),
		'verImagen' => $financing->verImagen,
		'created_at' => $financing->created_at,
		'is_active' => $financing->is_active,
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_financings()
{
	header("Access-Control-Allow-Origin: *");

	$financings = $this->api_model_financing->get_financings($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($financing)){
		foreach($financings as $financing){
			

			$posts[] = array(
				'id' => $financing->id,
					'video' => $financing->video,
					'videoEsp' => $financing->videoEsp,
					'verVideo' => $financing->verVideo,
					'image' => base_url('media/images/financing/'.$financing->image),
					'verImagen' => $financing->verImagen,
					'created_at' => $financing->created_at,
					'is_active' => $financing->is_active,
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//

//Crud


	// 

	public function adminFinancings()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$financings = $this->api_model_financing->get_admin_financings();
			foreach($financings as $financing) {
				$posts[] = array(
					'id' => $financing->id,
					'video' => $financing->video,
					'videoEsp' => $financing->videoEsp,
					'verVideo' => $financing->verVideo,
					'image' => base_url('media/images/financing/'.$financing->image),
					'verImagen' => $financing->verImagen,
					'created_at' => $financing->created_at,
					'is_active' => $financing->is_active,
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminFinancing($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$financing = $this->api_model_financing->get_admin_financing($id);

			$post = array(
				'id' => $financing->id,
					'video' => $financing->video,
					'videoEsp' => $financing->videoEsp,
					'verVideo' => $financing->verVideo,
					'image' => base_url('media/images/financing/'.$financing->image),
					'verImagen' => $financing->verImagen,
					'created_at' => $financing->created_at,
					'is_active' => $financing->is_active,
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createFinancing()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$video = $this->input->post('video');
			$videoEsp = $this->input->post('videoEsp');
			$verVideo = $this->input->post('verVideo');
			$verImagen = $this->input->post('verImagen');
			$is_active = $this->input->post('is_active');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/financing/';
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
	        	$financingData = array(
					'user_id' => 1,
					'video' => $video,
					'videoEsp' => $videoEsp,
					'verVideo' => $verVideo,
					'verImagen' => $verImagen,
					'image' => $filename,
					'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model_financing->insertfinancing($financingData);

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

	public function updateFinancing($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$financing = $this->api_model_financing->get_admin_financing($id);
			$filename = $financing->image;

			$video = $this->input->post('video');
			$videoEsp = $this->input->post('videoEsp');
			$verVideo = $this->input->post('verVideo');
			$verImagen = $this->input->post('verImagen');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/financing/';
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
	   
					if($financing->image && file_exists(FCPATH.'media/images/financing/'.$financing->image))
					{
						unlink(FCPATH.'media/images/financing/'.$financing->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$financingData = array(
					'user_id' => 1,
					'video' => $video,
					'videoEsp' => $videoEsp,
					'verVideo' => $verVideo,
					'verImagen' => $verImagen,
					'image' => $filename,
					'is_active' => $is_active,
				);

				$this->api_model_financing->updateFinancing($id, $financingData);

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

	public function deleteFinancing($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$financing = $this->api_model_financing->get_admin_financing($id);

			if($financing->image && file_exists(FCPATH.'media/images/financing/'.$financing->image))
			{
				unlink(FCPATH.'media/images/financing/'.$financing->image);
			}

			$this->api_model_financing->deleteFinancing($id);

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