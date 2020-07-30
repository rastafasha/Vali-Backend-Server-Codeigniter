<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Permanent extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_permanent');
		$this->load->helper('url');
		$this->load->helper('text');
    }
    


// Permanent Makeup 

public function permanents()
{
	header("Access-Control-Allow-Origin: *");

	$permanents = $this->api_model_permanent->get_permanents($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($permanents)){
		foreach($permanents as $permanent){

			$short_desc = strip_tags(character_limiter($permanent->description, 70));
			$author = $permanent->first_name.' '.$permanent->last_name;

			$posts[] = array(
				'id' => $permanent->id,
				'title' => $permanent->title,
				'titleesp' => $permanent->titleesp,
				'descriptionesp' => $permanent->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $permanent->price,
				'popup' => $permanent->popup,
				'description' => $permanent->description,
				'button' => $permanent->button,
				'image' => base_url('media/images/servicios/permanent/'.$permanent->image),
				'created_at' => $permanent->created_at,
				'is_active' => $permanent->is_active,
				'textFinanc' => $permanent->textFinanc,
				'textFinancEsp' => $permanent->textFinancEsp,
				'is_activeTf'=> $permanent->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_permanents()
{
	header("Access-Control-Allow-Origin: *");

	$permanents = $this->api_model_permanent->get_permanents($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($permanents)){
		foreach($permanents as $permanent){
			
			$short_desc = strip_tags(character_limiter($permanent->description, 70));
			$author = $permanent->first_name.' '.$permanent->last_name;

			$posts[] = array(
				'id' => $permanent->id,
				'title' => $permanent->title,
				'titleesp' => $permanent->titleesp,
				'descriptionesp' => $permanent->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $permanent->price,
				'popup' => $permanent->popup,
				'description' => $permanent->description,
				'button' => $permanent->button,
				'image' => base_url('media/images/servicios/permanent/'.$permanent->image),
				'created_at' => $permanent->created_at,
				'is_active' => $permanent->is_active,
				'textFinanc' => $permanent->textFinanc,
				'textFinancEsp' => $permanent->textFinancEsp,
				'is_activeTf'=> $permanent->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function permanent($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$permanent = $this->api_model_permanent->get_permanent($id);

	$author = $permanent->first_name.' '.$permanent->last_name;

	$post = array(
		'id' => $permanent->id,
		'title' => $permanent->title,
		'description' => $permanent->description,
		'titleesp' => $permanent->titleesp,
		'descriptionesp' => $permanent->descriptionesp,
		'price' => $permanent->price,
		'popup' => $permanent->popup,
		'button' => $permanent->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/permanent/'.$permanent->image),
		'created_at' => $permanent->created_at,
		'is_active' => $permanent->is_active,
		'textFinanc' => $permanent->textFinanc,
		'textFinancEsp' => $permanent->textFinancEsp,
		'is_activeTf'=> $permanent->is_activeTf
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_permanents()
{
	header("Access-Control-Allow-Origin: *");

	$permanents = $this->api_model_permanent->get_permanents($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($permanent)){
		foreach($permanents as $permanent){
			
			$short_desc = strip_tags(character_limiter($permanent->description, 70));
			$author = $permanent->first_name.' '.$permanent->last_name;

			$posts[] = array(
				'id' => $permanent->id,
				'title' => $permanent->title,
				'titleesp' => $permanent->titleesp,
				'descriptionesp' => $permanent->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $permanent->price,
				'popup' => $permanent->popup,
				'button' => $permanent->button,
				'image' => base_url('media/images/servicios/permanent/'.$permanent->image),
				'created_at' => $permanent->created_at,
				'is_active' => $permanent->is_active,
				'textFinanc' => $permanent->textFinanc,
				'textFinancEsp' => $permanent->textFinancEsp,
				'is_activeTf'=> $permanent->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//

//Crud


	// Permanent Makeup

	public function adminPermanents()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$permanents = $this->api_model_permanent->get_admin_permanents();
			foreach($permanents as $permanent) {
				$posts[] = array(
					'id' => $permanent->id,
					'title' => $permanent->title,
					'price' => $permanent->price,
					'titleesp' => $permanent->titleesp,
					'descriptionesp' => $permanent->descriptionesp,
					'popup' => $permanent->popup,
					'button' => $permanent->button,
					'image' => base_url('media/images/servicios/permanent/'.$permanent->image),
					'created_at' => $permanent->created_at,
					'is_active' => $permanent->is_active,
					'textFinanc' => $permanent->textFinanc,
					'textFinancEsp' => $permanent->textFinancEsp,
				    'is_activeTf'=> $permanent->is_activeTf
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminPermanent($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$permanent = $this->api_model_permanent->get_admin_permanent($id);

			$post = array(
				'id' => $permanent->id,
				'title' => $permanent->title,
				'description' => $permanent->description,
				'titleesp' => $permanent->titleesp,
					'descriptionesp' => $permanent->descriptionesp,
				'price' => $permanent->price,
				'popup' => $permanent->popup,
				'button' => $permanent->button,
				'image' => base_url('media/images/servicios/permanent/'.$permanent->image),
				'is_featured' => $permanent->is_featured,
				'is_active' => $permanent->is_active,
				'textFinanc' => $permanent->textFinanc,
				'textFinancEsp' => $permanent->textFinancEsp,
				'is_activeTf'=> $permanent->is_activeTf
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createPermanent()
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

				$config['upload_path']          = './media/images/servicios/permanent/';
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
	        	$permanentData = array(
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

				$id = $this->api_model_permanent->insertPermanent($permanentData);

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

	public function updatePermanent($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$permanent = $this->api_model_permanent->get_admin_permanent($id);
			$filename = $permanent->image;

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

				$config['upload_path']          = './media/images/servicios/permanent/';
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
	   
					if($permanent->image && file_exists(FCPATH.'media/images/servicios/permanent/'.$permanent->image))
					{
						unlink(FCPATH.'media/images/servicios/permanent/'.$permanent->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$permanentData = array(
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

				$this->api_model_permanent->updatePermanent($id, $permanentData);

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

	public function deletePermanent($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$permanent = $this->api_model_permanent->get_admin_permanent($id);

			if($permanent->image && file_exists(FCPATH.'media/images/servicios/permanent/'.$permanent->image))
			{
				unlink(FCPATH.'media/images/servicios/permanent/'.$permanent->image);
			}

			$this->api_model_permanent->deletePermanent($id);

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