<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('api_model');
        $this->load->model('api_model_contact');
		$this->load->helper('url');
		$this->load->helper('text');
	}

	
// Contact


public function getcontacts()
{
	header("Access-Control-Allow-Origin: *");

	$getcontacts = $this->api_model_contact->get_contacts($featured=false, $recentpost=false);

	$posts = array();
	if(!empty($getcontacts)){
		foreach($getcontacts as $getcontact){


			$posts[] = array(
				'id' => $getcontact->id,
				'name' => $getcontact->name,
				'lastname' => $getcontact->lastname,
				'email' => $getcontact->email,
				'phone' => $getcontact->phone,
				'created_at' => $getcontact->created_at,
			);
		}
	}

	$this->output
		->set_content_type('application/json')
		->set_output(json_encode($posts));
}

	

public function contact()
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
    header('Access-Control-Allow-Headers: Accept,Accept-Language,Content-Language,Content-Type');

    $formdata = json_decode(file_get_contents('php://input'), true);

    if( ! empty($formdata)) {

        $name = $formdata['name'];
        $lastname = $formdata['lastname'];
        $email = $formdata['email'];
        $phone = $formdata['phone'];
        $message = $formdata['message'];

        $contactData = array(
            'name' => $name,
            'lastname' => $lastname,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
            'created_at' => date('Y-m-d H:i:s', time())
        );
        
        $id = $this->api_model->insert_contact($contactData);

        $this->sendemail($contactData);
        
        $response = array('id' => $id);
    }
    else {
        $response = array('id' => '');
    }
    
    $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
}

public function adminContacts()
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: authorization, Content-Type");

    $token = $this->input->get_request_header('Authorization');

    $isValidToken = $this->api_model->checkToken($token);

    $posts = array();
    if($isValidToken) {
        $contacts = $this->api_model->get_admin_contacts();
        foreach($contacts as $contact) {
            $posts[] = array(
                'id' => $contact->id,
                'name' => $contact->name,
                'lastname' => $contact->lastname,
                'email' => $contact->email,
                'phone' => $contact->phone,
                'message' => $contact->message,
                'created_at' => $contact->created_at
            );
        }

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($posts)); 
    }
}

public function adminContact($id)
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: authorization, Content-Type");

    $token = $this->input->get_request_header('Authorization');

    $isValidToken = $this->api_model->checkToken($token);

    if($isValidToken) {

        $contact = $this->api_model->get_admin_contact($id);

        $post = array(
            'id' => $contact->id,
            'name' => $contact->name,
            'lastname' => $contact->lastname,
            'email' => $contact->email,
            'phone' => $contact->phone,
            'message' => $contact->message
        );
        

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($post)); 
    }
}

public function updateContact($id)
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: authorization, Content-Type");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

    $token = $this->input->get_request_header('Authorization');

    $isValidToken = $this->api_model->checkToken($token);

    if($isValidToken) {

        $contact = $this->api_model->get_admin_contact($id);

        $name = $this->input->post('title');
        $lastname = $this->input->post('lastname');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $message = $this->input->post('message');
        
        

        $isUploadError = FALSE;

        if( ! $isUploadError) {
            $contactData = array(
                'name' => $name,
                'lastname' => $lastname,
                'email' => $email,
                'phone' => $phone,
                'message' => $message
            );

            $this->api_model->updateContact($id, $contactData);

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

public function deleteContact($id)
{
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Headers: authorization, Content-Type");

    $token = $this->input->get_request_header('Authorization');

    $isValidToken = $this->api_model->checkToken($token);

    if($isValidToken) {

        $contact = $this->api_model->get_admin_contact($id);

        $this->api_model->deleteContact($id);

        $response = array(
            'status' => 'success'
        );

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($response)); 
    }
}

public function sendemail($contactData)
{
    $message = '<p>Hi, <br />Some one has submitted contact form.</p>';
    $message .= '<p><strong>Name: </strong>'.$contactData['name'].'</p>';
    $message .= '<p><strong>Lastname: </strong>'.$contactData['lastname'].'</p>';
    $message .= '<p><strong>Email: </strong>'.$contactData['email'].'</p>';
    $message .= '<p><strong>Phone: </strong>'.$contactData['phone'].'</p>';
    $message .= '<p><strong>Name: </strong>'.$contactData['message'].'</p>';
    $message .= '<br />Thanks';

    $this->load->library('email');

    $config['protocol'] = 'sendmail';
    $config['mailpath'] = '/usr/sbin/sendmail';
    $config['charset'] = 'iso-8859-1';
    $config['wordwrap'] = TRUE;
    $config['mailtype'] = 'html';

    $this->email->initialize($config);

    $this->email->from('info@valispa.com', 'vali skin care');
    $this->email->to('info@valispa.com');
    $this->email->cc('');
    $this->email->bcc('');

    $this->email->subject('Contact Form');
    $this->email->message($message);

    $this->email->send();
}




}
