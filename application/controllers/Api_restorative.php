<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Restorative extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_restorative');
		$this->load->helper('url');
		$this->load->helper('text');
    }



// Facial restorative 

public function restoratives()
{
	header("Access-Control-Allow-Origin: *");

	$restoratives = $this->api_model_restorative->get_restoratives($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($restoratives)){
		foreach($restoratives as $restorative){

			$short_desc = strip_tags(character_limiter($restorative->description, 70));
			$author = $restorative->first_name.' '.$restorative->last_name;

			$posts[] = array(
				'id' => $restorative->id,
				'title' => $restorative->title,
				'titleesp' => $restorative->titleesp,
				'descriptionesp' => $restorative->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $restorative->price,
				'popup' => $restorative->popup,
				'description' => $restorative->description,
				'button' => $restorative->button,
				'buttonEs' => $restorative->buttonEs,
				'target' => $restorative->target,
				'image' => base_url('media/images/servicios/facial/restorative/'.$restorative->image),
				'created_at' => $restorative->created_at,
				'is_active' => $restorative->is_active,
				'textFinanc' => $restorative->textFinanc,
				'textFinancEsp' => $restorative->textFinancEsp,
				'is_activeTf'=> $restorative->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_restoratives()
{
	header("Access-Control-Allow-Origin: *");

	$restoratives = $this->api_model_restorative->get_restoratives($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($restoratives)){
		foreach($restoratives as $restorative){
			
			$short_desc = strip_tags(character_limiter($restorative->description, 70));
			$author = $restorative->first_name.' '.$restorative->last_name;

			$posts[] = array(
					'id' => $restorative->id,
					'title' => $restorative->title,
					'titleesp' => $restorative->titleesp,
					'descriptionesp' => $restorative->descriptionesp,
					'short_desc' => html_entity_decode($short_desc),
					'author' => $author,
					'price' => $restorative->price,
					'popup' => $restorative->popup,
					'description' => $restorative->description,
					'button' => $restorative->button,
					'buttonEs' => $restorative->buttonEs,
					'target' => $restorative->target,
					'image' => base_url('media/images/servicios/facial/restorative/'.$restorative->image),
					'created_at' => $restorative->created_at,
					'is_active' => $restorative->is_active,
					'textFinanc' => $restorative->textFinanc,
					'textFinancEsp' => $restorative->textFinancEsp,
					'is_activeTf'=> $restorative->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function restorative($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$restorative = $this->api_model_restorative->get_restorative($id);

	$author = $restorative->first_name.' '.$restorative->last_name;

	$post = array(
				'id' => $restorative->id,
				'title' => $restorative->title,
				'description' => $restorative->description,
				'titleesp' => $restorative->titleesp,
				'descriptionesp' => $restorative->descriptionesp,
				'price' => $restorative->price,
				'popup' => $restorative->popup,
				'button' => $restorative->button,
				'buttonEs' => $restorative->buttonEs,
				'target' => $restorative->target,
				'author' => $author,
				'image' => base_url('media/images/servicios/facial/restorative/'.$restorative->image),
				'created_at' => $restorative->created_at,
				'is_active' => $restorative->is_active,
				'textFinanc' => $restorative->textFinanc,
				'textFinancEsp' => $restorative->textFinancEsp,
				'is_activeTf'=> $restorative->is_activeTf
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_restoratives()
{
	header("Access-Control-Allow-Origin: *");

	$restoratives = $this->api_model_restorative->get_restoratives($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($restorative)){
		foreach($restoratives as $restorative){
			
			$short_desc = strip_tags(character_limiter($restorative->description, 70));
			$author = $restorative->first_name.' '.$restorative->last_name;

			$posts[] = array(
				'id' => $restorative->id,
				'title' => $restorative->title,
				'titleesp' => $restorative->titleesp,
				'descriptionesp' => $restorative->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $restorative->price,
				'popup' => $restorative->popup,
				'description' => $restorative->description,
				'button' => $restorative->button,
				'buttonEs' => $restorative->buttonEs,
				'target' => $restorative->target,
				'image' => base_url('media/images/servicios/facial/restorative/'.$restorative->image),
				'created_at' => $restorative->created_at,
				'is_active' => $restorative->is_active,
				'textFinanc' => $restorative->textFinanc,
				'textFinancEsp' => $restorative->textFinancEsp,
				'is_activeTf'=> $restorative->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

///

//Crud




	// Facial Restorative

	public function adminRestoratives()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$restoratives = $this->api_model_restorative->get_admin_restoratives();
			foreach($restoratives as $restorative) {
				$posts[] = array(
					'id' => $restorative->id,
					'title' => $restorative->title,
					'description' => $restorative->description,
					'titleesp' => $restorative->titleesp,
					'descriptionesp' => $restorative->descriptionesp,
					'price' => $restorative->price,
					'popup' => $restorative->popup,
					'button' => $restorative->button,
					'buttonEs' => $restorative->buttonEs,
					'target' => $restorative->target,
					'image' => base_url('media/images/servicios/facial/restorative/'.$restorative->image),
					'created_at' => $restorative->created_at,
					'is_active' => $restorative->is_active,
					'textFinanc' => $restorative->textFinanc,
					'textFinancEsp' => $restorative->textFinancEsp,
				    'is_activeTf'=> $restorative->is_activeTf
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminRestorative($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$restorative = $this->api_model_restorative->get_admin_restorative($id);

			$post = array(
				'id' => $restorative->id,
				'title' => $restorative->title,
				'description' => $restorative->description,
				'titleesp' => $restorative->titleesp,
				'descriptionesp' => $restorative->descriptionesp,
				'price' => $restorative->price,
				'popup' => $restorative->popup,
				'button' => $restorative->button,
				'buttonEs' => $restorative->buttonEs,
				'target' => $restorative->target,
				'image' => base_url('media/images/servicios/facial/restorative/'.$restorative->image),
				'is_featured' => $restorative->is_featured,
				'is_active' => $restorative->is_active,
				'textFinanc' => $restorative->textFinanc,
				'textFinancEsp' => $restorative->textFinancEsp,
				'is_activeTf'=> $restorative->is_activeTf
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createRestorative()
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
			$buttonEs = $this->input->post('buttonEs');
			$target = $this->input->post('target');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');
			$textFinanc = $this->input->post('textFinanc');
			$textFinancEsp = $this->input->post('textFinancEsp');
			$is_activeTf = $this->input->post('is_activeTf');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/facial/restorative/';
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
	        	$restorativeData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'buttonEs' => $buttonEs,
					'target' => $target,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'textFinanc' => $textFinanc,
					'textFinancEsp' => $textFinancEsp,
					'is_activeTf' => $is_activeTf,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model_restorative->insertRestorative($restorativeData);

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

	public function updateRestorative($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$restorative = $this->api_model_restorative->get_admin_restorative($id);
			$filename = $restorative->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$buttonEs = $this->input->post('buttonEs');
			$target = $this->input->post('target');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');
			$textFinanc = $this->input->post('textFinanc');
			$textFinancEsp = $this->input->post('textFinancEsp');
			$is_activeTf = $this->input->post('is_activeTf');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/facial/restorative/';
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
	   
					if($restorative->image && file_exists(FCPATH.'media/images/servicios/facial/restorative/'.$restorative->image))
					{
						unlink(FCPATH.'media/images/servicios/facial/restorative/'.$restorative->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$restorativeData = array(
					'user_id' => 1,
					'title' => $title,
					'description' => $description,
					'titleesp' => $titleesp,
					'descriptionesp' => $descriptionesp,
					'price' => $price,
					'popup' => $popup,
					'button' => $button,
					'buttonEs' => $buttonEs,
					'target' => $target,
					'image' => $filename,
					'is_featured' => $is_featured,
					'is_active' => $is_active,
					'textFinanc' => $textFinanc,
					'textFinancEsp' => $textFinancEsp,
					'is_activeTf' => $is_activeTf,
				);

				$this->api_model_restorative->updateRestorative($id, $restorativeData);

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

	public function deleteRestorative($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$restorative = $this->api_model_restorative->get_admin_restorative($id);

			if($restorative->image && file_exists(FCPATH.'media/images/servicios/facial/restorative/'.$restorative->image))
			{
				unlink(FCPATH.'media/images/servicios/facial/restorative/'.$restorative->image);
			}

			$this->api_model_restorative->deleteRestorative($id);

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