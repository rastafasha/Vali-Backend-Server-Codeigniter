<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Wax extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_wax');
		$this->load->helper('url');
		$this->load->helper('text');
	}


// Wax 

public function waxs()
{
	header("Access-Control-Allow-Origin: *");

	$waxs = $this->api_model_wax->get_waxs($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($waxs)){
		foreach($waxs as $wax){

			$short_desc = strip_tags(character_limiter($wax->description, 70));
			$author = $wax->first_name.' '.$wax->last_name;

			$posts[] = array(
				'id' => $wax->id,
				'title' => $wax->title,
				'titleesp' => $wax->titleesp,
				'descriptionesp' => $wax->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $wax->price,
				'popup' => $wax->popup,
				'description' => $wax->description,
				'button' => $wax->button,
				'image' => base_url('media/images/servicios/wax/'.$wax->image),
				'created_at' => $wax->created_at,
				'is_active' => $wax->is_active,
				'textFinanc' => $wax->textFinanc,
				'textFinancEsp' => $wax->textFinancEsp,
				'is_activeTf'=> $wax->is_activeTf

			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_waxs()
{
	header("Access-Control-Allow-Origin: *");

	$permanents = $this->api_model_wax->get_waxs($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($waxs)){
		foreach($waxs as $wax){
			
			$short_desc = strip_tags(character_limiter($wax->description, 70));
			$author = $wax->first_name.' '.$wax->last_name;

			$posts[] = array(
				'id' => $wax->id,
				'title' => $wax->title,
				'titleesp' => $wax->titleesp,
				'descriptionesp' => $wax->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $wax->price,
				'popup' => $wax->popup,
				'description' => $wax->description,
				'button' => $wax->button,
				'image' => base_url('media/images/servicios/wax/'.$wax->image),
				'created_at' => $wax->created_at,
				'is_active' => $wax->is_active,
				'textFinanc' => $wax->textFinanc,
				'textFinancEsp' => $wax->textFinancEsp,
				'is_activeTf'=> $wax->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function wax($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$wax = $this->api_model_wax->get_wax($id);

	$author = $wax->first_name.' '.$wax->last_name;

	$post = array(
		'id' => $wax->id,
		'title' => $wax->title,
		'description' => $wax->description,
		'titleesp' => $wax->titleesp,
		'descriptionesp' => $wax->descriptionesp,
		'price' => $wax->price,
		'popup' => $wax->popup,
		'button' => $wax->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/wax/'.$wax->image),
		'created_at' => $wax->created_at,
		'is_active' => $wax->is_active,
		'textFinanc' => $wax->textFinanc,
		'textFinancEsp' => $wax->textFinancEsp,
		'is_activeTf'=> $wax->is_activeTf
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_waxs()
{
	header("Access-Control-Allow-Origin: *");

	$waxs = $this->api_model_wax->get_waxs($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($wax)){
		foreach($waxs as $wax){
			
			$short_desc = strip_tags(character_limiter($wax->description, 70));
			$author = $wax->first_name.' '.$wax->last_name;

			$posts[] = array(
				'id' => $wax->id,
				'title' => $wax->title,
				'titleesp' => $wax->titleesp,
				'descriptionesp' => $wax->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $wax->price,
				'popup' => $wax->popup,
				'button' => $wax->button,
				'image' => base_url('media/images/servicios/wax/'.$wax->image),
				'created_at' => $wax->created_at,
				'is_active' => $wax->is_active,
				'textFinanc' => $wax->textFinanc,
				'textFinancEsp' => $wax->textFinancEsp,
				'is_activeTf'=> $wax->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//

//Crud

	// Wax

	public function adminWaxs()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$waxs = $this->api_model_wax->get_admin_waxs();
			foreach($waxs as $wax) {
				$posts[] = array(
					'id' => $wax->id,
					'title' => $wax->title,
					'price' => $wax->price,
					'titleesp' => $wax->titleesp,
					'descriptionesp' => $wax->descriptionesp,
					'popup' => $wax->popup,
					'button' => $wax->button,
					'image' => base_url('media/images/servicios/wax/'.$wax->image),
					'created_at' => $wax->created_at,
					'is_active' => $wax->is_active,
					'textFinanc' => $wax->textFinanc,
					'textFinancEsp' => $wax->textFinancEsp,
				'is_activeTf'=> $wax->is_activeTf
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminWax($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$wax = $this->api_model_wax->get_admin_wax($id);

			$post = array(
				'id' => $wax->id,
				'title' => $wax->title,
				'description' => $wax->description,
				'titleesp' => $wax->titleesp,
					'descriptionesp' => $wax->descriptionesp,
				'price' => $wax->price,
				'popup' => $wax->popup,
				'button' => $wax->button,
				'image' => base_url('media/images/servicios/wax/'.$wax->image),
				'is_featured' => $wax->is_featured,
				'is_active' => $wax->is_active,
				'textFinanc' => $wax->textFinanc,
				'textFinancEsp' => $wax->textFinancEsp,
				'is_activeTf'=> $wax->is_activeTf
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createWax()
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
			$textFinanc = $this->input->post('textFinanc');
			$textFinancEsp = $this->input->post('textFinancEsp');
			$is_activeTf = $this->input->post('is_activeTf');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/wax/';
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
	        	$waxData = array(
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
					'textFinanc' => $textFinanc,
					'textFinancEsp' => $textFinancEsp,
					'is_activeTf' => $is_activeTf,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model_wax->insertWax($waxData);

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

	public function updateWax($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$wax = $this->api_model_wax->get_admin_wax($id);
			$filename = $wax->image;

			$title = $this->input->post('title');
			$description = $this->input->post('description');
			$titleesp = $this->input->post('titleesp');
			$descriptionesp = $this->input->post('descriptionesp');
			$price = $this->input->post('price');
			$popup = $this->input->post('popup');
			$button = $this->input->post('button');
			$is_featured = $this->input->post('is_featured');
			$is_active = $this->input->post('is_active');
			$textFinanc = $this->input->post('textFinanc');
			$textFinancEsp = $this->input->post('textFinancEsp');
			$is_activeTf = $this->input->post('is_activeTf');

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/wax/';
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
	   
					if($wax->image && file_exists(FCPATH.'media/images/servicios/wax/'.$wax->image))
					{
						unlink(FCPATH.'media/images/servicios/wax/'.$wax->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$waxData = array(
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
					'textFinanc' => $textFinanc,
					'textFinancEsp' => $textFinancEsp,
					'is_activeTf' => $is_activeTf
				);

				$this->api_model_wax->updateWax($id, $waxData);

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

	public function deleteWax($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$wax = $this->api_model_wax->get_admin_wax($id);

			if($wax->image && file_exists(FCPATH.'media/images/servicios/wax/'.$wax->image))
			{
				unlink(FCPATH.'media/images/servicios/wax/'.$wax->image);
			}

			$this->api_model_wax->deleteWax($id);

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
