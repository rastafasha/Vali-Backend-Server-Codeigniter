<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Calming extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_calming');
		$this->load->helper('url');
		$this->load->helper('text');
    }




// Facial Calming 

public function calmings()
{
	header("Access-Control-Allow-Origin: *");

	$calmings = $this->api_model_calming->get_calmings($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($calmings)){
		foreach($calmings as $calming){

			$short_asc = strip_tags(character_limiter($calming->description, 70));
			$author = $calming->first_name.' '.$calming->last_name;

			$posts[] = array(
				'id' => $calming->id,
				'title' => $calming->title,
				'titleesp' => $calming->titleesp,
				'descriptionesp' => $calming->descriptionesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $calming->price,
				'popup' => $calming->popup,
				'description' => $calming->description,
				'button' => $calming->button,
				'buttonEs' => $calming->buttonEs,
				'target' => $calming->target,
				'image' => base_url('media/images/servicios/facial/calming/'.$calming->image),
				'created_at' => $calming->created_at,
				'is_active' => $calming->is_active,
				'textFinanc' => $calming->textFinanc,
				'textFinancEsp' => $calming->textFinancEsp,
				'is_activeTf'=> $calming->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_calmings()
{
	header("Access-Control-Allow-Origin: *");

	$calmings = $this->api_model_calming->get_calmings($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($calmings)){
		foreach($calmings as $calming){
			
			$short_asc = strip_tags(character_limiter($calming->description, 70));
			$author = $calming->first_name.' '.$calming->last_name;

			$posts[] = array(
				'id' => $calming->id,
				'title' => $calming->title,
				'titleesp' => $calming->titleesp,
				'descriptionesp' => $calming->descriptionesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $calming->price,
				'popup' => $calming->popup,
				'description' => $calming->description,
				'button' => $calming->button,
				'buttonEs' => $calming->buttonEs,
				'target' => $calming->target,
				'image' => base_url('media/images/servicios/facial/calming/'.$calming->image),
				'created_at' => $calming->created_at,
				'is_active' => $calming->is_active,
				'textFinanc' => $calming->textFinanc,
				'textFinancEsp' => $calming->textFinancEsp,
				'is_activeTf'=> $calming->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function calming($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$calming = $this->api_model_calming->get_calming($id);

	$author = $calming->first_name.' '.$calming->last_name;

	$post = array(
				'id' => $calming->id,
				'title' => $calming->title,
				'description' => $calming->description,
				'titleesp' => $calming->titleesp,
				'descriptionesp' => $calming->descriptionesp,
				'price' => $calming->price,
				'popup' => $calming->popup,
				'button' => $calming->button,
				'buttonEs' => $calming->buttonEs,
				'target' => $calming->target,
				'author' => $author,
				'image' => base_url('media/images/servicios/facial/calming/'.$calming->image),
				'created_at' => $calming->created_at,
				'is_active' => $calming->is_active,
				'textFinanc' => $calming->textFinanc,
				'textFinancEsp' => $calming->textFinancEsp,
				'is_activeTf'=> $calming->is_activeTf
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_calmings()
{
	header("Access-Control-Allow-Origin: *");

	$calmings = $this->api_model_calming->get_calmings($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($calming)){
		foreach($calmings as $calming){
			
			$short_asc = strip_tags(character_limiter($calming->description, 70));
			$author = $calming->first_name.' '.$calming->last_name;

			$posts[] = array(
				'id' => $calming->id,
				'title' => $calming->title,
				'titleesp' => $calming->titleesp,
				'descriptionesp' => $calming->descriptionesp,
				'short_asc' => html_entity_decode($short_asc),
				'author' => $author,
				'price' => $calming->price,
				'popup' => $calming->popup,
				'description' => $calming->description,
				'button' => $calming->button,
				'buttonEs' => $calming->buttonEs,
				'target' => $calming->target,
				'image' => base_url('media/images/servicios/facial/calming/'.$calming->image),
				'created_at' => $calming->created_at,
				'is_active' => $calming->is_active,
				'textFinanc' => $calming->textFinanc,
				'textFinancEsp' => $calming->textFinancEsp,
				'is_activeTf'=> $calming->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

///

//Crud

	// Facial Calming

	public function adminCalmings()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$calmings = $this->api_model_calming->get_admin_calmings();
			foreach($calmings as $calming) {
				$posts[] = array(
					'id' => $calming->id,
					'title' => $calming->title,
					'description' => $calming->description,
					'titleesp' => $calming->titleesp,
					'descriptionesp' => $calming->descriptionesp,
					'price' => $calming->price,
					'popup' => $calming->popup,
					'button' => $calming->button,
					'buttonEs' => $calming->buttonEs,
					'target' => $calming->target,
					'image' => base_url('media/images/servicios/facial/calming/'.$calming->image),
					'created_at' => $calming->created_at,
					'is_active' => $calming->is_active,
					'textFinanc' => $calming->textFinanc,
					'textFinancEsp' => $calming->textFinancEsp,
					'is_activeTf'=> $calming->is_activeTf
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminCalming($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$calming = $this->api_model_calming->get_admin_calming($id);

			$post = array(
				'id' => $calming->id,
				'title' => $calming->title,
				'description' => $calming->description,
				'titleesp' => $calming->titleesp,
				'descriptionesp' => $calming->descriptionesp,
				'price' => $calming->price,
				'popup' => $calming->popup,
				'button' => $calming->button,
				'buttonEs' => $calming->buttonEs,
				'target' => $calming->target,
				'image' => base_url('media/images/servicios/facial/calming/'.$calming->image),
				'is_featured' => $calming->is_featured,
				'is_active' => $calming->is_active,
				'textFinanc' => $calming->textFinanc,
				'textFinancEsp' => $calming->textFinancEsp,
				'is_activeTf'=> $calming->is_activeTf
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createCalming()
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

				$config['upload_path']          = './media/images/servicios/facial/calming/';
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
	        	$calmingData = array(
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

				$id = $this->api_model_calming->insertCalming($calmingData);

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

	public function updateCalming($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$calming = $this->api_model_calming->get_admin_calming($id);
			$filename = $calming->image;

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

				$config['upload_path']          = './media/images/servicios/facial/calming/';
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
	   
					if($calming->image && file_exists(FCPATH.'media/images/servicios/facial/calming/'.$calming->image))
					{
						unlink(FCPATH.'media/images/servicios/facial/calming/'.$calming->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$calmingData = array(
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

				$this->api_model_calming->updateCalming($id, $calmingData);

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

	public function deleteCalming($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$calming = $this->api_model_calming->get_admin_calming($id);

			if($calming->image && file_exists(FCPATH.'media/images/servicios/facial/calming/'.$calming->image))
			{
				unlink(FCPATH.'media/images/servicios/facial/calming/'.$calming->image);
			}

			$this->api_model_calming->deleteCalming($id);

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