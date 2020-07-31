<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Fibrobody extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_fibrobody');
		$this->load->helper('url');
		$this->load->helper('text');
    }
    

// Fibroblast Body 

public function bodys()
{
	header("Access-Control-Allow-Origin: *");

	$bodys = $this->api_model_fibrobody->get_bodys($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($bodys)){
		foreach($bodys as $body){

			$short_asc = strip_tags(character_limiter($body->description, 70));
			$author = $body->first_name.' '.$body->last_name;

			$posts[] = array(
				'id' => $body->id,
				'title' => $body->title,
				'description' => $body->description,
				'titleesp' => $body->titleesp,
				'descriptionesp' => $body->descriptionesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $body->price,
				'popup' => $body->popup,
				'button' => $body->button,
				'buttonEs' => $body->buttonEs,
				'target' => $body->target,
				'image' => base_url('media/images/servicios/fibroblast/body/'.$body->image),
				'created_at' => $body->created_at,
				'is_active' => $body->is_active,
				'textFinanc' => $body->textFinanc,
				'textFinancEsp' => $body->textFinancEsp,
				'is_activeTf'=> $body->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_bodys()
{
	header("Access-Control-Allow-Origin: *");

	$bodys = $this->api_model_fibrobody->get_bodys($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($bodys)){
		foreach($bodys as $body){
			
			$short_asc = strip_tags(character_limiter($body->description, 70));
			$author = $body->first_name.' '.$body->last_name;

			$posts[] = array(
				'id' => $body->id,
				'title' => $body->title,
				'description' => $body->description,
				'titleesp' => $body->titleesp,
				'descriptionesp' => $body->descriptionesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $body->price,
				'popup' => $body->popup,
				'button' => $body->button,
				'buttonEs' => $body->buttonEs,
				'target' => $body->target,
				'image' => base_url('media/images/servicios/fibroblast/body/'.$body->image),
				'created_at' => $body->created_at,
				'is_active' => $body->is_active,
				'textFinanc' => $body->textFinanc,
				'textFinancEsp' => $body->textFinancEsp,
				'is_activeTf'=> $body->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function body($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$body = $this->api_model_fibrobody->get_body($id);

	$author = $body->first_name.' '.$body->last_name;

	$post = array(
				'id' => $body->id,
				'title' => $body->title,
				'description' => $body->description,
				'titleesp' => $body->titleesp,
				'descriptionesp' => $body->descriptionesp,
				'price' => $body->price,
				'popup' => $body->popup,
				'button' => $body->button,
				'buttonEs' => $body->buttonEs,
				'target' => $body->target,
				'author' => $author,
				'image' => base_url('media/images/servicios/fibroblast/body/'.$body->image),
				'created_at' => $body->created_at,
				'is_active' => $body->is_active,
				'textFinanc' => $body->textFinanc,
				'textFinancEsp' => $body->textFinancEsp,
				'is_activeTf'=> $body->is_activeTf
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_bodys()
{
	header("Access-Control-Allow-Origin: *");

	$bodys = $this->api_model_fibrobody->get_bodys($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($body)){
		foreach($bodys as $body){
			
			$short_asc = strip_tags(character_limiter($body->description, 70));
			$author = $body->first_name.' '.$body->last_name;

			$posts[] = array(
				'id' => $body->id,
				'title' => $body->title,
				'description' => $body->description,
				'titleesp' => $body->titleesp,
				'descriptionesp' => $body->descriptionesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $body->price,
				'popup' => $body->popup,
				'button' => $body->button,
				'buttonEs' => $body->buttonEs,
				'target' => $body->target,
				'image' => base_url('media/images/servicios/fibroblast/body/'.$body->image),
				'created_at' => $body->created_at,
				'is_active' => $body->is_active,
				'textFinanc' => $body->textFinanc,
				'textFinancEsp' => $body->textFinancEsp,
				'is_activeTf'=> $body->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//

//Crud



// Fibroblast Body

public function adminBodys()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$bodys = $this->api_model_fibrobody->get_admin_bodys();
		foreach($bodys as $body) {
			$posts[] = array(
				'id' => $body->id,
				'title' => $body->title,
				'description' => $body->description,
				'titleesp' => $body->titleesp,
				'descriptionesp' => $body->descriptionesp,
				'price' => $body->price,
				'popup' => $body->popup,
				'button' => $body->button,
				'buttonEs' => $body->buttonEs,
				'target' => $body->target,
				'image' => base_url('media/images/servicios/fibroblast/body/'.$body->image),
				'created_at' => $body->created_at,
				'is_active' => $body->is_active,
				'textFinanc' => $body->textFinanc,
				'textFinancEsp' => $body->textFinancEsp,
				'is_activeTf'=> $body->is_activeTf
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($posts)); 
	}
}

public function adminBody($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$body = $this->api_model_fibrobody->get_admin_body($id);

		$post = array(
			'id' => $body->id,
			'title' => $body->title,
			'description' => $body->description,
			'titleesp' => $body->titleesp,
			'descriptionesp' => $body->descriptionesp,
			'price' => $body->price,
			'popup' => $body->popup,
			'button' => $body->button,
			'buttonEs' => $body->buttonEs,
			'target' => $body->target,
			'image' => base_url('media/images/servicios/fibroblast/body/'.$body->image),
			'is_featured' => $body->is_featured,
			'is_active' => $body->is_active,
			'textFinanc' => $body->textFinanc,
			'textFinancEsp' => $body->textFinancEsp,
				'is_activeTf'=> $body->is_activeTf
		);
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($post)); 
	}
}

public function createBody()
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

			$config['upload_path']          = './media/images/servicios/fibroblast/body/';
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
			$bodyData = array(
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

			$id = $this->api_model_fibrobody->insertBody($bodyData);

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

public function updateBody($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$body = $this->api_model_fibrobody->get_admin_body($id);
		$filename = $body->image;

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

			$config['upload_path']          = './media/images/servicios/fibroblast/body/';
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
   
				if($body->image && file_exists(FCPATH.'media/images/servicios/fibroblast/body/'.$body->image))
				{
					unlink(FCPATH.'media/images/servicios/fibroblast/body/'.$body->image);
				}

				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$bodyData = array(
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

			$this->api_model_fibrobody->updateBody($id, $bodyData);

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

public function deleteBody($id)
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$body = $this->api_model_fibrobody->get_admin_body($id);

		if($body->image && file_exists(FCPATH.'media/images/servicios/fibroblast/body/'.$body->image))
		{
			unlink(FCPATH.'media/images/servicios/fibroblast/body/'.$body->image);
		}

		$this->api_model_fibrobody->deleteBody($id);

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
