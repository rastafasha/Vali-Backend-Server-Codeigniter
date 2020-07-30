<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Sculpting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_sculpting');
		$this->load->helper('url');
		$this->load->helper('text');
	}



// Body sculptings

public function sculptings()
{
	header("Access-Control-Allow-Origin: *");

	$sculptings = $this->api_model_sculpting->get_sculptings($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($sculptings)){
		foreach($sculptings as $sculpting){

			$short_desc = strip_tags(character_limiter($sculpting->description, 70));
			$author = $sculpting->first_name.' '.$sculpting->last_name;

			$posts[] = array(
				'id' => $sculpting->id,
				'title' => $sculpting->title,
				'titleesp' => $sculpting->titleesp,
				'descriptionesp' => $sculpting->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $sculpting->price,
				'popup' => $sculpting->popup,
				'description' => $sculpting->description,
				'button' => $sculpting->button,
				'image' => base_url('media/images/servicios/body/sculpting/'.$sculpting->image),
				'created_at' => $sculpting->created_at,
				'is_active' => $sculpting->is_active,
				'textFinanc' => $sculpting->textFinanc,
				'textFinancEsp' => $sculpting->textFinancEsp,
				'is_activeTf'=> $sculpting->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_sculptings()
{
	header("Access-Control-Allow-Origin: *");

	$sculptings = $this->api_model_sculpting->get_sculptings($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($sculptings)){
		foreach($sculptings as $sculpting){
			
			$short_desc = strip_tags(character_limiter($sculpting->description, 70));
			$author = $sculpting->first_name.' '.$sculpting->last_name;

			$posts[] = array(
				'id' => $sculpting->id,
				'title' => $sculpting->title,
				'titleesp' => $sculpting->titleesp,
				'descriptionesp' => $sculpting->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $sculpting->price,
				'popup' => $sculpting->popup,
				'description' => $sculpting->description,
				'button' => $sculpting->button,
				'image' => base_url('media/images/servicios/body/sculpting/'.$sculpting->image),
				'created_at' => $sculpting->created_at,
				'is_active' => $sculpting->is_active,
				'textFinanc' => $sculpting->textFinanc,
				'textFinancEsp' => $sculpting->textFinancEsp,
				'is_activeTf'=> $sculpting->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function sculpting($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$sculpting = $this->api_model_sculpting->get_sculpting($id);

	$author = $sculpting->first_name.' '.$sculpting->last_name;

	$post = array(
		'id' => $sculpting->id,
		'title' => $sculpting->title,
		'description' => $sculpting->description,
		'titleesp' => $sculpting->titleesp,
				'descriptionesp' => $sculpting->descriptionesp,
		'price' => $sculpting->price,
		'popup' => $sculpting->popup,
		'button' => $sculpting->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/body/sculpting/'.$sculpting->image),
		'created_at' => $sculpting->created_at,
		'is_active' => $sculpting->is_active,
		'textFinanc' => $sculpting->textFinanc,
		'textFinancEsp' => $sculpting->textFinancEsp,
		'is_activeTf'=> $sculpting->is_activeTf
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_sculptings()
{
	header("Access-Control-Allow-Origin: *");

	$sculptings = $this->api_model_sculpting->get_sculptings($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($sculpting)){
		foreach($sculptings as $sculpting){
			
			$short_desc = strip_tags(character_limiter($sculpting->description, 70));
			$author = $sculpting->first_name.' '.$sculpting->last_name;

			$posts[] = array(
				'id' => $sculpting->id,
				'title' => $sculpting->title,
				'titleesp' => $sculpting->titleesp,
				'descriptionesp' => $sculpting->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $sculpting->price,
				'popup' => $sculpting->popup,
				'description' => $sculpting->description,
				'button' => $sculpting->button,
				'image' => base_url('media/images/servicios/body/sculpting/'.$sculpting->image),
				'created_at' => $sculpting->created_at,
				'is_active' => $sculpting->is_active,
				'textFinanc' => $sculpting->textFinanc,
				'textFinancEsp' => $sculpting->textFinancEsp,
				'is_activeTf'=> $sculpting->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//


//Crud


	// Body sculptings

	public function adminSculptings()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$sculptings = $this->api_model_sculpting->get_admin_sculptings();
			foreach($sculptings as $sculpting) {
				$posts[] = array(
					'id' => $sculpting->id,
					'title' => $sculpting->title,
					'description' => $sculpting->description,
					'titleesp' => $sculpting->titleesp,
					'descriptionesp' => $sculpting->descriptionesp,
					'price' => $sculpting->price,
					'popup' => $sculpting->popup,
					'button' => $sculpting->button,
					'image' => base_url('media/images/servicios/body/sculpting/'.$sculpting->image),
					'created_at' => $sculpting->created_at,
					'is_active' => $sculpting->is_active,
					'textFinanc' => $sculpting->textFinanc,
					'textFinancEsp' => $sculpting->textFinancEsp,
				'is_activeTf'=> $sculpting->is_activeTf
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminSculpting($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$sculpting = $this->api_model_sculpting->get_admin_sculpting($id);

			$post = array(
				'id' => $sculpting->id,
				'title' => $sculpting->title,
				'description' => $sculpting->description,
				'titleesp' => $sculpting->titleesp,
				'descriptionesp' => $sculpting->descriptionesp,
				'price' => $sculpting->price,
				'popup' => $sculpting->popup,
				'button' => $sculpting->button,
				'image' => base_url('media/images/servicios/body/sculpting/'.$sculpting->image),
				'is_featured' => $sculpting->is_featured,
				'is_active' => $sculpting->is_active,
				'textFinanc' => $sculpting->textFinanc,
				'textFinancEsp' => $sculpting->textFinancEsp,
				'is_activeTf'=> $sculpting->is_activeTf
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createSculpting()
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

				$config['upload_path']          = './media/images/servicios/body/sculpting/';
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
	        	$sculptingData = array(
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

				$id = $this->api_model_sculpting->insertSculpting($sculptingData);

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

	public function updateSculpting($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$sculpting = $this->api_model_sculpting->get_admin_sculpting($id);
			$filename = $sculpting->image;

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

				$config['upload_path']          = './media/images/servicios/body/sculpting/';
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
	   
					if($sculpting->image && file_exists(FCPATH.'media/images/servicios/body/sculpting/'.$sculpting->image))
					{
						unlink(FCPATH.'media/images/servicios/body/sculpting/'.$sculpting->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$sculptingData = array(
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
				);

				$this->api_model_sculpting->updateSculpting($id, $sculptingData);

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

	public function deleteSculpting($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$sculpting = $this->api_model_sculpting->get_admin_sculpting($id);

			if($sculpting->image && file_exists(FCPATH.'media/images/servicios/body/sculpting/'.$sculpting->image))
			{
				unlink(FCPATH.'media/images/servicios/body/sculpting/'.$sculpting->image);
			}

			$this->api_model_sculpting->deleteSculpting($id);

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