<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
	}



// Users 

public function users()
{
	header("Access-Control-Allow-Origin: *");

	$users = $this->api_model->get_users($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($users)){
		foreach($users as $user){

			$posts[] = array(
				'id' => $user->id,
				'username' => $user->username,
				'password' => $user->password,
				'first_name' => $user->first_name,
				'last_name' => $user->last_name,
				'image' => base_url('media/images/user/'.$user->image),
				'created_at' => $user->created_at,
				'is_active' => $user->is_active
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}


public function user($id)
{
	header("Access-Control-Allow-Origin: *");
	
	$user = $this->api_model->get_user($id);

	$author = $user->first_name.' '.$user->last_name;

	$post = array(
		'id' => $user->id,
		'username' => $user->username,
		'password' => $user->password,
		'first_name' => $user->first_name,
		'last_name' => $user->last_name,
		'image' => base_url('media/images/user/'.$user->image),
		'created_at' => $user->created_at,
		'is_active' => $user->is_active
	);
	
	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($post));
}
//

//Crud


// Users

public function adminUsers()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	$posts = array();
	if($isValidToken) {
		$users = $this->api_model->get_admin_users();
		foreach($users as $user) {
			$posts[] = array(
				'id' => $user->id,
				'username' => $user->username,
				'password' => $user->password,
				'first_name' => $user->first_name,
				'last_name' => $user->last_name,
				'image' => base_url('media/images/user/'.$user->image),
				'created_at' => $user->created_at,
				'is_active' => $user->is_active
			);
		}

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($posts)); 
	}
}

public function adminUser($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$user = $this->api_model->get_admin_user($id);

		$post = array(
			'id' => $user->id,
			'username' => $user->username,
			'password' => $user->password,
			'first_name' => $user->first_name,
			'last_name' => $user->last_name,
			'image' => base_url('media/images/user/'.$user->image),
			'is_featured' => $user->is_featured,
			'is_active' => $user->is_active
		);
		

		$this->output
			->set_status_header(200)
			->set_content_type('application/json')
			->set_output(json_encode($post)); 
	}
}

public function createUser()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$filename = NULL;

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/user/';
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
			$userData = array(
				'username' => $username,
				'password' => $password,
				'first_name' => $first_name,
				'last_name' => $last_name,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active,
				'created_at' => date('Y-m-d H:i:s', time())
			);

			$id = $this->api_model->insertUser($userData);

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

public function updateUser($id)
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Headers: authorization, Content-Type");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$user = $this->api_model->get_admin_user($id);
		$filename = $user->image;

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$is_featured = $this->input->post('is_featured');
		$is_active = $this->input->post('is_active');

		$isUploadError = FALSE;

		if ($_FILES && $_FILES['image']['name']) {

			$config['upload_path']          = './media/images/user/';
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
   
				if($user->image && file_exists(FCPATH.'media/images/user/'.$user->image))
				{
					unlink(FCPATH.'media/images/servicios/user/'.$user->image);
				}

				$uploadData = $this->upload->data();
				$filename = $uploadData['file_name'];
			}
		}

		if( ! $isUploadError) {
			$userData = array(
				'username' => $username,
				'password' => $password,
				'first_name' => $first_name,
				'last_name' => $last_name,
				'button' => $button,
				'image' => $filename,
				'is_featured' => $is_featured,
				'is_active' => $is_active
			);

			$this->api_model->updateUser($id, $userData);

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

public function deleteUser($id)
{
	header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: authorization, Content-Type");

	$token = $this->input->get_request_header('Authorization');

	$isValidToken = $this->api_model->checkToken($token);

	if($isValidToken) {

		$user = $this->api_model->get_admin_user($id);

		if($user->image && file_exists(FCPATH.'media/images/user/'.$user->image))
		{
			unlink(FCPATH.'media/images/user/'.$user->image);
		}

		$this->api_model->deleteUser($id);

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
