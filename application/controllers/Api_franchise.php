<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Franchise extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_franchise');
		$this->load->helper('url');
		$this->load->helper('text');
    }




// Facial franchises 

public function franchises()
{
	header("Access-Control-Allow-Origin: *");

	$franchises = $this->api_model_franchise->get_franchises($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($franchises)){
		foreach($franchises as $franchise){


			$posts[] = array(
				'id' => $franchise->id,
				'title' => $franchise->title,
				'direccion' => $franchise->direccion,
				'telefono' => $franchise->telefono,
				'email' => $franchise->email,
				'zipcode' => $franchise->zipcode,
				'lat' => $franchise->lat,
				'lng' => $franchise->lng,
				'estado' => $franchise->estado,
				'categorias'=> $franchise->categorias,
				'servicios'=> $franchise->servicios,
				'created_at' => $franchise->created_at,
				'is_active' => $franchise->is_active,
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function featured_franchises()
{
	header("Access-Control-Allow-Origin: *");

	$franchises = $this->api_model_franchise->get_franchises($featured=true, $recentpost=false);

	$posts = array();
	if(!empty($franchises)){
		foreach($franchises as $franchise){
			

			$posts[] = array(
				'id' => $franchise->id,
				'title' => $franchise->title,
				'direccion' => $franchise->direccion,
				'telefono' => $franchise->telefono,
				'email' => $franchise->email,
				'zipcode' => $franchise->zipcode,
				'lat' => $franchise->lat,
				'lng' => $franchise->lng,
				'estado' => $franchise->estado,
				'categorias'=> $franchise->categorias,
				'servicios'=> $franchise->servicios,
				'created_at' => $franchise->created_at,
				'is_active' => $franchise->is_active,
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

public function franchise($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$franchise = $this->api_model_franchise->get_franchise($id);

	$post = array(
        'id' => $franchise->id,
        'title' => $franchise->title,
        'direccion' => $franchise->direccion,
        'telefono' => $franchise->telefono,
        'email' => $franchise->email,
        'zipcode' => $franchise->zipcode,
        'lat' => $franchise->lat,
        'lng' => $franchise->lng,
        'estado' => $franchise->estado,
        'categorias'=> $franchise->categorias,
        'servicios'=> $franchise->servicios,
        'created_at' => $franchise->created_at,
        'is_active' => $franchise->is_active,
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}

public function recent_franchises()
{
	header("Access-Control-Allow-Origin: *");

	$franchises = $this->api_model_franchise->get_franchises($featured=false, $recentpost=5);

	$posts = array();
	if(!empty($franchise)){
		foreach($franchises as $franchise){
			

			$posts[] = array(
				'id' => $franchise->id,
				'title' => $franchise->title,
				'direccion' => $franchise->direccion,
				'telefono' => $franchise->telefono,
				'email' => $franchise->email,
				'zipcode' => $franchise->zipcode,
				'lat' => $franchise->lat,
				'lng' => $franchise->lng,
				'estado' => $franchise->estado,
				'categorias'=> $franchise->categorias,
				'servicios'=> $franchise->servicios,
				'created_at' => $franchise->created_at,
				'is_active' => $franchise->is_active,
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

///

//Crud

	

	public function adminFranchises()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		$posts = array();
		if($isValidToken) {
			$franchises = $this->api_model_franchise->get_admin_franchises();
			foreach($franchises as $franchise) {
				$posts[] = array(
					'id' => $franchise->id,
				'title' => $franchise->title,
				'direccion' => $franchise->direccion,
				'telefono' => $franchise->telefono,
				'email' => $franchise->email,
				'zipcode' => $franchise->zipcode,
				'lat' => $franchise->lat,
				'lng' => $franchise->lng,
				'estado' => $franchise->estado,
				'categorias'=> $franchise->categorias,
				'servicios'=> $franchise->servicios,
				'created_at' => $franchise->created_at,
				'is_active' => $franchise->is_active,
				);
			}

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($posts)); 
		}
	}

	public function adminFranchise($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$franchise = $this->api_model_franchise->get_admin_franchise($id);

			$post = array(
				'id' => $franchise->id,
				'title' => $franchise->title,
				'direccion' => $franchise->direccion,
				'telefono' => $franchise->telefono,
				'email' => $franchise->email,
				'zipcode' => $franchise->zipcode,
				'lat' => $franchise->lat,
				'lng' => $franchise->lng,
				'estado' => $franchise->estado,
				'categorias'=> $franchise->categorias,
				'servicios'=> $franchise->servicios,
				'created_at' => $franchise->created_at,
				'is_active' => $franchise->is_active,
			);
			

			$this->output
				->set_status_header(200)
				->set_content_type('application/json')
				->set_output(json_encode($post)); 
		}
	}

	public function createFranchise()
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$title = $this->input->post('title');
			$direccion = $this->input->post('direccion');
			$telefono = $this->input->post('telefono');
			$email = $this->input->post('email');
			$zipcode = $this->input->post('zipcode');
			$lat = $this->input->post('lat');
			$lng = $this->input->post('lng');
			$estado = $this->input->post('estado');
			$categorias = $this->input->post('categorias');
			$servicios = $this->input->post('servicios');
			$is_active = $this->input->post('is_active');


			$isUploadError = FALSE;

			if( ! $isUploadError) {
	        	$franchiseData = array(
					'user_id' => 1,
					'title' => $title,
                    'direccion' => $direccion,
                    'telefono' => $telefono,
                    'email' => $email,
                    'zipcode' => $zipcode,
                    'lat' => $lat,
                    'lng' => $lng,
                    'estado' => $estado,
                    'categorias'=> $categorias,
                    'servicios'=> $servicios,
                    'created_at' => $created_at,
                    'is_active' => $is_active,
					'created_at' => date('Y-m-d H:i:s', time())
				);

				$id = $this->api_model_franchise->insertCalming($franchiseData);

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

	public function updateFranchise($id)
	{
		header("Access-Control-Allow-Origin: *");
		header("Access-Control-Allow-Headers: authorization, Content-Type");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$franchise = $this->api_model_franchise->get_admin_franchise($id);

			$title = $this->input->post('title');
			$direccion = $this->input->post('direccion');
			$telefono = $this->input->post('telefono');
			$email = $this->input->post('email');
			$zipcode = $this->input->post('zipcode');
			$lat = $this->input->post('lat');
			$lng = $this->input->post('lng');
			$estado = $this->input->post('estado');
			$categorias = $this->input->post('categorias');
			$servicios = $this->input->post('servicios');
			$is_active = $this->input->post('is_active');

			$isUploadError = FALSE;


			if( ! $isUploadError) {
	        	$franchiseData = array(
					'user_id' => 1,
					'title' => $title,
					'direccion' => $direccion,
                    'telefono' => $telefono,
                    'email' => $email,
                    'zipcode' => $zipcode,
                    'lat' => $lat,
                    'lng' => $lng,
                    'estado' => $estado,
                    'categorias'=> $categorias,
                    'servicios'=> $servicios,
                    'created_at' => $created_at,
                    'is_active' => $is_active,
				);

				$this->api_model_franchise->updateFranchise($id, $franchiseData);

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

	public function deleteFranchise($id)
	{
		header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
		header("Access-Control-Allow-Headers: authorization, Content-Type");

		$token = $this->input->get_request_header('Authorization');

		$isValidToken = $this->api_model->checkToken($token);

		if($isValidToken) {

			$franchise = $this->api_model_franchise->get_admin_franchise($id);

			$this->api_model_franchise->deleteFranchise($id);

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