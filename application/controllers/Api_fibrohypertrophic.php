<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Fibrohypertrophic extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_hypertrophic');
		$this->load->helper('url');
		$this->load->helper('text');
	}

// Fibroblast hypertrophics 

public function hypertrophics()
{
	header("Access-Control-Allow-Origin: *");

	$hypertrophics = $this->api_model_hypertrophic->get_hypertrophics($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($hypertrophics)){
		foreach($hypertrophics as $hypertrophic){

			$short_desc = strip_tags(character_limiter($hypertrophic->description, 70));
			$author = $hypertrophic->first_name.' '.$hypertrophic->last_name;

			$posts[] = array(
				'id' => $hypertrophic->id,
				'title' => $hypertrophic->title,
				'description' => $hypertrophic->description,
				'titleesp' => $hypertrophic->titleesp,
				'descriptionesp' => $hypertrophic->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $hypertrophic->price,
				'popup' => $hypertrophic->popup,
				'button' => $hypertrophic->button,
				'image' => base_url('media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image),
				'created_at' => $hypertrophic->created_at,
				'is_active' => $hypertrophic->is_active,
				'textFinanc' => $hypertrophic->textFinanc,
				'textFinancEsp' => $hypertrophic->textFinancEsp,
				'is_activeTf'=> $hypertrophic->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_hypertrophics()
{
	header("Access-Control-Allow-Origin: *");

	$hypertrophics = $this->api_model_hypertrophic->get_hypertrophics($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($hypertrophics)){
		foreach($hypertrophics as $hypertrophic){
			
			$short_desc = strip_tags(character_limiter($hypertrophic->description, 70));
			$author = $hypertrophic->first_name.' '.$hypertrophic->last_name;

			$posts[] = array(
				'id' => $hypertrophic->id,
				'title' => $hypertrophic->title,
				'description' => $hypertrophic->description,
				'titleesp' => $hypertrophic->titleesp,
				'descriptionesp' => $hypertrophic->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $hypertrophic->price,
				'popup' => $hypertrophic->popup,
				'button' => $hypertrophic->button,
				'image' => base_url('media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image),
				'created_at' => $hypertrophic->created_at,
				'is_active' => $hypertrophic->is_active,
				'textFinanc' => $hypertrophic->textFinanc,
				'textFinancEsp' => $hypertrophic->textFinancEsp,
				'is_activeTf'=> $hypertrophic->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function hypertrophic($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$hypertrophic = $this->api_model_hypertrophic->get_hypertrophic($id);

	$author = $hypertrophic->first_name.' '.$hypertrophic->last_name;

	$post = array(
		'id' => $hypertrophic->id,
		'title' => $hypertrophic->title,
		'description' => $hypertrophic->description,
		'titleesp' => $hypertrophic->titleesp,
		'descriptionesp' => $hypertrophic->descriptionesp,
		'price' => $hypertrophic->price,
		'popup' => $hypertrophic->popup,
		'button' => $hypertrophic->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image),
		'created_at' => $hypertrophic->created_at,
		'is_active' => $hypertrophic->is_active,
		'textFinanc' => $hypertrophic->textFinanc,
		'textFinancEsp' => $hypertrophic->textFinancEsp,
		'is_activeTf'=> $hypertrophic->is_activeTf
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_hypertrophics()
{
	header("Access-Control-Allow-Origin: *");

	$hypertrophics = $this->api_model_hypertrophic->get_hypertrophics($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($hypertrophic)){
		foreach($hypertrophics as $hypertrophic){
			
			$short_desc = strip_tags(character_limiter($hypertrophic->description, 70));
			$author = $hypertrophic->first_name.' '.$hypertrophic->last_name;

			$posts[] = array(
				'id' => $hypertrophic->id,
				'title' => $hypertrophic->title,
				'description' => $hypertrophic->description,
				'titleesp' => $hypertrophic->titleesp,
				'descriptionesp' => $hypertrophic->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $hypertrophic->price,
				'popup' => $hypertrophic->popup,
				'button' => $hypertrophic->button,
				'image' => base_url('media/images/servicios/fibroblast/hypertrophic/'.$hypertrophic->image),
				'created_at' => $hypertrophic->created_at,
				'is_active' => $hypertrophic->is_active,
				'textFinanc' => $hypertrophic->textFinanc,
				'textFinancEsp' => $hypertrophic->textFinancEsp,
				'is_activeTf'=> $hypertrophic->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//

//Crud



// Fibroblast hypertrophic

public function adminHypertrophics()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$hypertrophics = $this->api_model_hypertrophic->get_admin_hypertrophics();
		foreach($hypertrophics as $hypertrophic) {
			$posts[] = array(
				'id' => $hypertrophic->id,
				'title' => $hypertrophic->title,
				'description' => $hypertrophic->description,
				'titleesp' => $hypertrophic->titleesp,
				'descriptionesp' => $hypertrophic->descriptionesp,
				'price' => $hypertrophic->price,
				'popup' => $hypertrophic->popup,
				'button' => $hypertrophic->button,
				'image' => base_url('media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image),
				'created_at' => $hypertrophic->created_at,
				'is_active' => $hypertrophic->is_active,
				'textFinanc' => $hypertrophic->textFinanc,
				'textFinancEsp' => $hypertrophic->textFinancEsp,
				'is_activeTf'=> $hypertrophic->is_activeTf
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($posts)); 
	}
}

public function adminHypertrophic($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$hypertrophic = $this->api_model_hypertrophic->get_admin_hypertrophic($id);

		$post = array(
			'id' => $hypertrophic->id,
			'title' => $hypertrophic->title,
			'description' => $hypertrophic->description,
			'titleesp' => $hypertrophic->titleesp,
			'descriptionesp' => $hypertrophic->descriptionesp,
			'price' => $hypertrophic->price,
			'popup' => $hypertrophic->popup,
			'button' => $hypertrophic->button,
			'image' => base_url('media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image),
			'is_featured' => $hypertrophic->is_featured,
			'is_active' => $hypertrophic->is_active,
			'textFinanc' => $hypertrophic->textFinanc,
			'textFinancEsp' => $hypertrophic->textFinancEsp,
			'is_activeTf'=> $hypertrophic->is_activeTf
		);
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($post)); 
	}
}

public function createHypertrophic()
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

			$config['upload_path']          = './media/images/servicios/fibroblast/hypertrophics/';
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
			$hypertrophicData = array(
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

			$id = $this->api_model_hypertrophic->insertHypertrophic($hypertrophicData);

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

public function updateHypertrophic($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$hypertrophic = $this->api_model_hypertrophic->get_admin_hypertrophic($id);
		$filename = $hypertrophic->image;

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

			$config['upload_path']          = './media/images/servicios/fibroblast/hypertrophics/';
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
   
				if($hypertrophic->image && file_exists(FCPATH.'media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image))
				{
					unlink(FCPATH.'media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image);
				}

				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$hypertrophicData = array(
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

			$this->api_model_hypertrophic->updateHypertrophic($id, $hypertrophicData);

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

public function deleteHypertrophic($id)
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$hypertrophic = $this->api_model_hypertrophic->get_admin_hypertrophic($id);

		if($hypertrophic->image && file_exists(FCPATH.'media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image))
		{
			unlink(FCPATH.'media/images/servicios/fibroblast/hypertrophics/'.$hypertrophic->image);
		}

		$this->api_model_hypertrophic->deleteHypertrophic($id);

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