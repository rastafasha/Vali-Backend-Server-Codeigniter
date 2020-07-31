<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Classe extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_classe');
		$this->load->helper('url');
		$this->load->helper('text');
	}



// Makeup Clasess

public function clasess()
{
	header("Access-Control-Allow-Origin: *");

	$clasess = $this->api_model_classe->get_clasess($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($clasess)){
		foreach($clasess as $clases){

			$short_asc = strip_tags(character_limiter($clases->description, 70));
			$author = $clases->first_name.' '.$clases->last_name;

			$posts[] = array(
				'id' => $clases->id,
				'title' => $clases->title,
				'titleesp' => $clases->titleesp,
				'descriptionesp' => $clases->descriptionesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $clases->price,
				'popup' => $clases->popup,
				'description' => $clases->description,
				'button' => $clases->button,
				'buttonEs' => $clases->buttonEs,
				'target' => $clases->target,
				'image' => base_url('media/images/servicios/makeup/clases/'.$clases->image),
				'created_at' => $clases->created_at,
				'is_active' => $clases->is_active,
				'textFinanc' => $clases->textFinanc,
				'textFinancEsp' => $clases->textFinancEsp,
				'is_activeTf'=> $clases->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_clasess()
{
	header("Access-Control-Allow-Origin: *");

	$clasess = $this->api_model_classe->get_clasess($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($clasess)){
		foreach($clasess as $clases){
			
			$short_asc = strip_tags(character_limiter($clases->description, 70));
			$author = $clases->first_name.' '.$clases->last_name;

			$posts[] = array(
				'id' => $clases->id,
				'title' => $clases->title,
				'titleesp' => $clases->titleesp,
				'descriptionesp' => $clases->descriptionesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $clases->price,
				'popup' => $clases->popup,
				'description' => $clases->description,
				'button' => $clases->button,
				'buttonEs' => $clases->buttonEs,
				'target' => $clases->target,
				'image' => base_url('media/images/servicios/makeup/clases/'.$clases->image),
				'created_at' => $clases->created_at,
				'is_active' => $clases->is_active,
				'textFinanc' => $clases->textFinanc,
				'textFinancEsp' => $clases->textFinancEsp,
				'is_activeTf'=> $clases->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function clases($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$clases = $this->api_model_classe->get_clases($id);

	$author = $clases->first_name.' '.$clases->last_name;

	$post = array(
				'id' => $clases->id,
				'title' => $clases->title,
				'description' => $clases->description,
				'titleesp' => $clases->titleesp,
				'descriptionesp' => $clases->descriptionesp,
				'price' => $clases->price,
				'popup' => $clases->popup,
				'button' => $clases->button,
				'buttonEs' => $clases->buttonEs,
				'target' => $clases->target,
				'author' => $author,
				'image' => base_url('media/images/servicios/makeup/clases/'.$clases->image),
				'created_at' => $clases->created_at,
				'is_active' => $clases->is_active,
				'textFinanc' => $clases->textFinanc,
				'textFinancEsp' => $clases->textFinancEsp,
				'is_activeTf'=> $clases->is_activeTf
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_clasess()
{
	header("Access-Control-Allow-Origin: *");

	$clasess = $this->api_model_classe->get_clases($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($clases)){
		foreach($clasess as $clases){
			
			$short_asc = strip_tags(character_limiter($clases->description, 70));
			$author = $clases->first_name.' '.$clases->last_name;

			$posts[] = array(
				'id' => $clases->id,
				'title' => $clases->title,
				'titleesp' => $clases->titleesp,
				'descriptionesp' => $clases->descriptionesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $clases->price,
				'popup' => $clases->popup,
				'description' => $clases->description,
				'button' => $clases->button,
				'buttonEs' => $clases->buttonEs,
				'target' => $clases->target,
				'image' => base_url('media/images/servicios/makeup/clases/'.$clases->image),
				'created_at' => $clases->created_at,
				'is_active' => $clases->is_active,
				'textFinanc' => $clases->textFinanc,
				'textFinancEsp' => $clases->textFinancEsp,
				'is_activeTf'=> $clases->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//

//Crud


// Makeup clasess

public function adminClasess()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$clasess = $this->api_model_classe->get_admin_clasess();
		foreach($clasess as $clases) {
			$posts[] = array(
				'id' => $clases->id,
				'title' => $clases->title,
				'description' => $clases->description,
				'titleesp' => $clases->titleesp,
				'descriptionesp' => $clases->descriptionesp,
				'price' => $clases->price,
				'popup' => $clases->popup,
				'button' => $clases->button,
				'buttonEs' => $clases->buttonEs,
				'target' => $clases->target,
				'image' => base_url('media/images/servicios/makeup/clases/'.$clases->image),
				'created_at' => $clases->created_at,
				'is_active' => $clases->is_active,
				'textFinanc' => $clases->textFinanc,
				'textFinancEsp' => $clases->textFinancEsp,
				'is_activeTf'=> $clases->is_activeTf
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($posts)); 
	}
}

public function adminClases($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$clases = $this->api_model_classe->get_admin_clases($id);

		$post = array(
				'id' => $clases->id,
				'title' => $clases->title,
				'description' => $clases->description,
				'titleesp' => $clases->titleesp,
				'descriptionesp' => $clases->descriptionesp,
				'price' => $clases->price,
				'popup' => $clases->popup,
				'button' => $clases->button,
				'buttonEs' => $clases->buttonEs,
				'target' => $clases->target,
				'image' => base_url('media/images/servicios/makeup/clases/'.$clases->image),
				'is_featured' => $clases->is_featured,
				'is_active' => $clases->is_active,
				'textFinanc' => $clases->textFinanc,
				'textFinancEsp' => $clases->textFinancEsp,
				'is_activeTf'=> $clases->is_activeTf
		);
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($post)); 
	}
}

public function createClases()
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

			$config['upload_path']          = './media/images/servicios/makeup/clases/';
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
			$clasesData = array(
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

			$id = $this->api_model_classe->insertClases($clasesData);

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

public function updateClases($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$clases = $this->api_model_classe->get_admin_clases($id);
		$filename = $clases->image;

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

			$config['upload_path']          = './media/images/servicios/makeup/clases/';
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
   
				if($clases->image && file_exists(FCPATH.'media/images/servicios/makeup/clases/'.$clases->image))
				{
					unlink(FCPATH.'media/images/servicios/makeup/clases/'.$clases->image);
				}

				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$clasesData = array(
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
				'is_activeTf' => $is_activeTf
			);

			$this->api_model_classe->updateClases($id, $clasesData);

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

public function deleteClases($id)
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$clases = $this->api_model_classe->get_admin_clases($id);

		if($clases->image && file_exists(FCPATH.'media/images/servicios/makeup/clases/'.$clases->image))
		{
			unlink(FCPATH.'media/images/servicios/makeup/clases/'.$clases->image);
		}

		$this->api_model_classe->deleteClases($id);

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