<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Hand extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_hand');
		$this->load->helper('url');
		$this->load->helper('text');
	}



// Body Hand and legs 

public function hands()
{
	header("Access-Control-Allow-Origin: *");

	$hands = $this->api_model_hand->get_hands($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($hands)){
		foreach($hands as $hand){

			$short_desc = strip_tags(character_limiter($hand->description, 70));
			$author = $hand->first_name.' '.$hand->last_name;

			$posts[] = array(
				'id' => $hand->id,
				'title' => $hand->title,
				'titleesp' => $hand->titleesp,
				'descriptionesp' => $hand->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $hand->price,
				'popup' => $hand->popup,
				'description' => $hand->description,
				'button' => $hand->button,
				'image' => base_url('media/images/servicios/body/hand/'.$hand->image),
				'created_at' => $hand->created_at,
				'is_active' => $hand->is_active,
				'textFinanc' => $hand->textFinanc,
				'textFinancEsp' => $hand->textFinancEsp,
				'is_activeTf'=> $hand->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_hands()
{
	header("Access-Control-Allow-Origin: *");

	$hands = $this->api_model_hand->get_hands($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($hands)){
		foreach($hands as $hand){
			
			$short_desc = strip_tags(character_limiter($hand->description, 70));
			$author = $hand->first_name.' '.$hand->last_name;

			$posts[] = array(
				'id' => $hand->id,
				'title' => $hand->title,
				'titleesp' => $hand->titleesp,
				'descriptionesp' => $hand->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $hand->price,
				'popup' => $hand->popup,
				'description' => $hand->description,
				'button' => $hand->button,
				'image' => base_url('media/images/servicios/body/hand/'.$hand->image),
				'created_at' => $hand->created_at,
				'is_active' => $hand->is_active,
				'textFinanc' => $hand->textFinanc,
				'textFinancEsp' => $hand->textFinancEsp,
				'is_activeTf'=> $hand->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function hand($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$hand = $this->api_model_hand->get_hand($id);

	$author = $hand->first_name.' '.$hand->last_name;

	$post = array(
		'id' => $hand->id,
		'title' => $hand->title,
		'description' => $hand->description,
		'titleesp' => $hand->titleesp,
				'descriptionesp' => $hand->descriptionesp,
		'price' => $hand->price,
		'popup' => $hand->popup,
		'button' => $hand->button,
		'author' => $author,
		'image' => base_url('media/images/servicios/body/hand/'.$hand->image),
		'created_at' => $hand->created_at,
		'is_active' => $hand->is_active,
		'textFinanc' => $hand->textFinanc,
		'textFinancEsp' => $hand->textFinancEsp,
		'is_activeTf'=> $hand->is_activeTf
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_hands()
{
	header("Access-Control-Allow-Origin: *");

	$hands = $this->api_model_hand->get_hands($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($hand)){
		foreach($hands as $hand){
			
			$short_desc = strip_tags(character_limiter($hand->description, 70));
			$author = $hand->first_name.' '.$hand->last_name;

			$posts[] = array(
				'id' => $hand->id,
				'title' => $hand->title,
				'titleesp' => $hand->titleesp,
				'descriptionesp' => $hand->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $hand->price,
				'popup' => $hand->popup,
				'description' => $hand->description,
				'button' => $hand->button,
				'image' => base_url('media/images/servicios/body/hand/'.$hand->image),
				'created_at' => $hand->created_at,
				'is_active' => $hand->is_active,
				'textFinanc' => $hand->textFinanc,
				'textFinancEsp' => $hand->textFinancEsp,
				'is_activeTf'=> $hand->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

//

//Crud


	// Body hand and legs

	public function adminHands()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$hands = $this->api_model_hand->get_admin_hands();
			foreach($hands as $hand) {
				$posts[] = array(
					'id' => $hand->id,
					'title' => $hand->title,
					'description' => $hand->description,
					'titleesp' => $hand->titleesp,
					'descriptionesp' => $hand->descriptionesp,
					'price' => $hand->price,
					'popup' => $hand->popup,
					'button' => $hand->button,
					'image' => base_url('media/images/servicios/body/hand/'.$hand->image),
					'created_at' => $hand->created_at,
					'is_active' => $hand->is_active,
					'textFinanc' => $hand->textFinanc,
					'textFinancEsp' => $hand->textFinancEsp,
				    'is_activeTf'=> $hand->is_activeTf
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminHand($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$hand = $this->api_model_hand->get_admin_hand($id);

			$post = array(
				'id' => $hand->id,
				'title' => $hand->title,
				'description' => $hand->description,
				'titleesp' => $hand->titleesp,
				'descriptionesp' => $hand->descriptionesp,
				'price' => $hand->price,
				'popup' => $hand->popup,
				'button' => $hand->button,
				'image' => base_url('media/images/servicios/body/hand/'.$hand->image),
				'is_featured' => $hand->is_featured,
				'is_active' => $hand->is_active,
				'textFinanc' => $hand->textFinanc,
				'textFinancEsp' => $hand->textFinancEsp,
				'is_activeTf'=> $hand->is_activeTf
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createHand()
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

				$config['upload_path']          = './media/images/servicios/body/hand/';
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
	        	$handData = array(
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

				$id = $this->api_model_hand->insertHand($handData);

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

	public function updateHand($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$hand = $this->api_model_hand->get_admin_hand($id);
			$filename = $hand->image;

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

				$config['upload_path']          = './media/images/servicios/body/hand/';
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
	   
					if($hand->image && file_exists(FCPATH.'media/images/servicios/body/hand/'.$hand->image))
					{
						unlink(FCPATH.'media/images/servicios/body/hand/'.$hand->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$handData = array(
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

				$this->api_model_hand->updateHand($id, $handData);

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

	public function deleteHand($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$hand = $this->api_model_hand->get_admin_hand($id);

			if($hand->image && file_exists(FCPATH.'media/images/servicios/body/hand/'.$hand->image))
			{
				unlink(FCPATH.'media/images/servicios/body/hand/'.$hand->image);
			}

			$this->api_model_hand->deleteHand($id);

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