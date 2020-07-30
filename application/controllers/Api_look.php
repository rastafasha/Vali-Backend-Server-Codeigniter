<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Look extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_look');
		$this->load->helper('url');
		$this->load->helper('text');
    }




// Makeup looks

public function looks()
{
	header("Access-Control-Allow-Origin: *");

	$looks = $this->api_model_look->get_looks($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($looks)){
		foreach($looks as $look){

			$short_desc = strip_tags(character_limiter($look->description, 70));
			$author = $look->first_name.' '.$look->last_name;

			$posts[] = array(
				'id' => $look->id,
				'title' => $look->title,
				'titleesp' => $look->titleesp,
				'descriptionesp' => $look->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $look->price,
				'popup' => $look->popup,
				'description' => $look->description,
				'button' => $look->button,
				'image' => base_url('media/images/servicios/makeup/looks/'.$look->image),
				'created_at' => $look->created_at,
				'is_active' => $look->is_active,
				'textFinanc' => $look->textFinanc,
				'textFinancEsp' => $look->textFinancEsp,
				'is_activeTf'=> $look->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_looks()
{
	header("Access-Control-Allow-Origin: *");

	$looks = $this->api_model_look->get_looks($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($looks)){
		foreach($looks as $look){
			
			$short_desc = strip_tags(character_limiter($look->description, 70));
			$author = $look->first_name.' '.$look->last_name;

			$posts[] = array(
				'id' => $look->id,
				'title' => $look->title,
				'titleesp' => $look->titleesp,
				'descriptionesp' => $look->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $look->price,
				'popup' => $look->popup,
				'description' => $look->description,
				'button' => $look->button,
				'image' => base_url('media/images/servicios/makeup/looks/'.$look->image),
				'created_at' => $look->created_at,
				'is_active' => $look->is_active,
				'textFinanc' => $look->textFinanc,
				'textFinancEsp' => $look->textFinancEsp,
				'is_activeTf'=> $look->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function look($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$look = $this->api_model_look->get_look($id);

	$author = $look->first_name.' '.$look->last_name;

	$post = array(
		'id' => $look->id,
		'title' => $look->title,
		'description' => $look->description,
		'titleesp' => $look->titleesp,
				'descriptionesp' => $look->descriptionesp,
		'price' => $look->price,
		'popup' => $look->popup,
		'button' => $look->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/makeup/looks/'.$look->image),
		'created_at' => $look->created_at,
		'is_active' => $look->is_active,
		'textFinanc' => $look->textFinanc,
		'textFinancEsp' => $look->textFinancEsp,
		'is_activeTf'=> $look->is_activeTf
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_looks()
{
	header("Access-Control-Allow-Origin: *");

	$looks = $this->api_model_look->get_looks($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($look)){
		foreach($looks as $look){
			
			$short_desc = strip_tags(character_limiter($look->description, 70));
			$author = $look->first_name.' '.$look->last_name;

			$posts[] = array(
				'id' => $look->id,
				'title' => $look->title,
				'titleesp' => $look->titleesp,
				'descriptionesp' => $look->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $look->price,
				'popup' => $look->popup,
				'description' => $look->description,
				'button' => $look->button,
				'image' => base_url('media/images/servicios/makeup/looks/'.$look->image),
				'created_at' => $look->created_at,
				'is_active' => $look->is_active,
				'textFinanc' => $look->textFinanc,
				'textFinancEsp' => $look->textFinancEsp,
				'is_activeTf'=> $look->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//

//Crud

// Makeup looks

public function adminLooks()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$looks = $this->api_model_look->get_admin_looks();
		foreach($looks as $look) {
			$posts[] = array(
				'id' => $look->id,
				'title' => $look->title,
				'description' => $look->description,
				'titleesp' => $look->titleesp,
				'descriptionesp' => $look->descriptionesp,
				'price' => $look->price,
				'popup' => $look->popup,
				'button' => $look->button,
				'image' => base_url('media/images/servicios/makeup/looks/'.$look->image),
				'created_at' => $look->created_at,
				'is_active' => $look->is_active,
				'textFinanc' => $look->textFinanc,
				'textFinancEsp' => $look->textFinancEsp,
				'is_activeTf'=> $look->is_activeTf
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($posts)); 
	}
}

public function adminLook($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$look = $this->api_model_look->get_admin_look($id);

		$post = array(
			'id' => $look->id,
			'title' => $look->title,
			'description' => $look->description,
			'titleesp' => $look->titleesp,
			'descriptionesp' => $look->descriptionesp,
			'price' => $look->price,
			'popup' => $look->popup,
			'button' => $look->button,
			'image' => base_url('media/images/servicios/makeup/looks/'.$look->image),
			'is_featured' => $look->is_featured,
			'is_active' => $look->is_active,
			'textFinanc' => $look->textFinanc,
			'textFinancEsp' => $look->textFinancEsp,
			'is_activeTf'=> $look->is_activeTf
		);
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($post)); 
	}
}

public function createLook()
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

			$config['upload_path']          = './media/images/servicios/makeup/looks/';
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
			$lookData = array(
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

			$id = $this->api_model->insertLook($lookData);

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

public function updateLook($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$look = $this->api_model_look->get_admin_look($id);
		$filename = $look->image;

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

			$config['upload_path']          = './media/images/servicios/makeup/looks/';
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
   
				if($look->image && file_exists(FCPATH.'media/images/servicios/makeup/looks/'.$look->image))
				{
					unlink(FCPATH.'media/images/servicios/makeup/looks/'.$look->image);
				}

				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$lookData = array(
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

			$this->api_model_look->updateLook($id, $lookData);

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

public function deleteLook($id)
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$look = $this->api_model_look->get_admin_look($id);

		if($look->image && file_exists(FCPATH.'media/images/servicios/makeup/looks/'.$look->image))
		{
			unlink(FCPATH.'media/images/servicios/makeup/looks/'.$look->image);
		}

		$this->api_model_look->deleteLook($id);

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