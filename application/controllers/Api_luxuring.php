<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Luxuring extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_luxuring');
		$this->load->helper('url');
		$this->load->helper('text');
    }


// Facial Luxury

public function luxurings()
{
	header("Access-Control-Allow-Origin: *");

	$luxurings = $this->api_model_luxuring->get_luxurings($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($luxurings)){
		foreach($luxurings as $luxuring){

			$short_desc = strip_tags(character_limiter($luxuring->description, 70));
			$author = $luxuring->first_name.' '.$luxuring->last_name;

			$posts[] = array(
				'id' => $luxuring->id,
				'title' => $luxuring->title,
				'titleesp' => $luxuring->titleesp,
				'descriptionesp' => $luxuring->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $luxuring->price,
				'popup' => $luxuring->popup,
				'description' => $luxuring->description,
				'button' => $luxuring->button,
				'buttonEs' => $luxuring->buttonEs,
				'target' => $luxuring->target,
				'image' => base_url('media/images/servicios/facial/luxury/'.$luxuring->image),
				'created_at' => $luxuring->created_at,
				'is_active' => $luxuring->is_active,
				'textFinanc' => $luxuring->textFinanc,
				'textFinancEsp' => $luxuring->textFinancEsp,
				'is_activeTf'=> $luxuring->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_luxurings()
{
	header("Access-Control-Allow-Origin: *");

	$luxurings = $this->api_model_luxuring->get_luxurings($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($luxurings)){
		foreach($luxurings as $luxuring){
			
			$short_desc = strip_tags(character_limiter($luxuring->description, 70));
			$author = $luxuring->first_name.' '.$luxuring->last_name;

			$posts[] = array(
				'id' => $luxuring->id,
				'title' => $luxuring->title,
				'titleesp' => $luxuring->titleesp,
				'descriptionesp' => $luxuring->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $luxuring->price,
				'popup' => $luxuring->popup,
				'description' => $luxuring->description,
				'button' => $luxuring->button,
				'buttonEs' => $luxuring->buttonEs,
				'target' => $luxuring->target,
				'image' => base_url('media/images/servicios/facial/luxury/'.$luxuring->image),
				'created_at' => $luxuring->created_at,
				'is_active' => $luxuring->is_active,
				'textFinanc' => $luxuring->textFinanc,
				'textFinancEsp' => $luxuring->textFinancEsp,
				'is_activeTf'=> $luxuring->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function luxuring($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$luxuring = $this->api_model_luxuring->get_luxuring($id);

	$author = $luxuring->first_name.' '.$luxuring->last_name;

	$post = array(
				'id' => $luxuring->id,
				'title' => $luxuring->title,
				'description' => $luxuring->description,
				'titleesp' => $luxuring->titleesp,
				'descriptionesp' => $luxuring->descriptionesp,
				'price' => $luxuring->price,
				'popup' => $luxuring->popup,
				'button' => $luxuring->button,
				'buttonEs' => $luxuring->buttonEs,
				'target' => $luxuring->target,
				'author' => $author,
				'image' => base_url('media/images/servicios/facial/luxury/'.$luxuring->image),
				'created_at' => $luxuring->created_at,
				'is_active' => $luxuring->is_active,
				'textFinanc' => $luxuring->textFinanc,
				'textFinancEsp' => $luxuring->textFinancEsp,
				'is_activeTf'=> $luxuring->is_activeTf
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_luxurings()
{
	header("Access-Control-Allow-Origin: *");

	$luxurings = $this->api_model_luxuring->get_luxurings($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($luxuring)){
		foreach($luxurings as $luxuring){
			
			$short_desc = strip_tags(character_limiter($luxuring->description, 70));
			$author = $luxuring->first_name.' '.$luxuring->last_name;

			$posts[] = array(
				'id' => $luxuring->id,
				'title' => $luxuring->title,
				'titleesp' => $luxuring->titleesp,
				'descriptionesp' => $luxuring->descriptionesp,
				'short_desc' => html_entity_decode($short_desc),
				'author' => $author,
				'price' => $luxuring->price,
				'popup' => $luxuring->popup,
				'description' => $luxuring->description,
				'button' => $luxuring->button,
				'buttonEs' => $luxuring->buttonEs,
				'target' => $luxuring->target,
				'image' => base_url('media/images/servicios/facial/luxury/'.$luxuring->image),
				'created_at' => $luxuring->created_at,
				'is_active' => $luxuring->is_active,
				'textFinanc' => $luxuring->textFinanc,
				'textFinancEsp' => $luxuring->textFinancEsp,
				'is_activeTf'=> $luxuring->is_activeTf
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}


//

//Crud

// Facial Luxury

public function adminLuxurings()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$luxurings = $this->api_model_luxuring->get_admin_luxurings();
			foreach($luxurings as $luxuring) {
				$posts[] = array(
					'id' => $luxuring->id,
					'title' => $luxuring->title,
					'description' => $luxuring->description,
					'titleesp' => $luxuring->titleesp,
					'descriptionesp' => $luxuring->descriptionesp,
					'price' => $luxuring->price,
					'popup' => $luxuring->popup,
					'button' => $luxuring->button,
					'buttonEs' => $luxuring->buttonEs,
					'target' => $luxuring->target,
					'image' => base_url('media/images/servicios/facial/luxury/'.$luxuring->image),
					'created_at' => $luxuring->created_at,
					'is_active' => $luxuring->is_active,
					'textFinanc' => $luxuring->textFinanc,
					'textFinancEsp' => $luxuring->textFinancEsp,
				    'is_activeTf'=> $luxuring->is_activeTf
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminLuxuring($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$luxuring = $this->api_model_luxuring->get_admin_luxuring($id);

			$post = array(
				'id' => $luxuring->id,
				'title' => $luxuring->title,
				'description' => $luxuring->description,
				'titleesp' => $luxuring->titleesp,
				'descriptionesp' => $luxuring->descriptionesp,
				'price' => $luxuring->price,
				'popup' => $luxuring->popup,
				'button' => $luxuring->button,
				'buttonEs' => $luxuring->buttonEs,
				'target' => $luxuring->target,
				'image' => base_url('media/images/servicios/facial/luxury/'.$luxuring->image),
				'is_featured' => $luxuring->is_featured,
				'is_active' => $luxuring->is_active,
				'textFinanc' => $luxuring->textFinanc,
				'textFinancEsp' => $luxuring->textFinancEsp,
				'is_activeTf'=> $luxuring->is_activeTf
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createLuxuring()
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
			$is_activeTf = $this->input->post('is_activeTf');
			$textFinanc = $this->input->post('textFinanc');
			$textFinancEsp = $this->input->post('textFinancEsp');
			$is_activeTf = $this->input->post('is_activeTf');

			$filename = NULL;

			$isUploadError = FALSE;

			if ($_FILES && $_FILES['image']['name']) {

				$config['upload_path']          = './media/images/servicios/facial/luxury/';
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
	        	$luxuringData = array(
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

				$id = $this->api_model_luxuring->insertLuxuring($luxuringData);

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

	public function updateLuxuring($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$luxuring = $this->api_model_luxuring->get_admin_luxuring($id);
			$filename = $luxuring->image;

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

				$config['upload_path']          = './media/images/servicios/facial/luxury/';
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
	   
					if($luxuring->image && file_exists(FCPATH.'media/images/servicios/facial/luxury/'.$luxuring->image))
					{
						unlink(FCPATH.'media/images/servicios/facial/luxury/'.$luxuring->image);
					}

	            	$uploadData = $this->upload->data();
            		$filename = $uploadData['file_name'];
	            }
			}

			if( ! $isUploadError) {
	        	$luxuringData = array(
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

				$this->api_model_luxuring->updateLuxuring($id, $luxuringData);

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

	public function deleteLuxuring($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$luxuring = $this->api_model_luxuring->get_admin_luxuring($id);

			if($luxuring->image && file_exists(FCPATH.'media/images/servicios/facial/luxury/'.$luxuring->image))
			{
				unlink(FCPATH.'media/images/servicios/facial/luxury/'.$luxuring->image);
			}

			$this->api_model_luxuring->deleteLuxuring($id);

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

