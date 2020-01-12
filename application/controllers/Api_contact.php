<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
	}

	
// Contact

	

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

//

// subcritores

	

public function subcritore()
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Request-Headers: GET,POST,OPTIONS,DELETE,PUT");
    header('Access-Control-Allow-Headers: Accept,Accept-Language,Content-Language,Content-Type');

    $formdata = json_decode(file_get_contents('php://input'), true);

    if( ! empty($formdata)) {

        $email = $formdata['email'];

        $subcritoreData = array(
            'email' => $email,
            'created_at' => date('Y-m-d H:i:s', time())
        );
        
        $id = $this->api_model->insert_subcritore($subcritoreData);

        $this->sendregistro($subcritoreData);
        
        $response = array('id' => $id);
    }
    else {
        $response = array('id' => '');
    }
    
    $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($response));
}

public function adminSubcritores()
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: authorization, Content-Type");

    $token = $this->input->get_request_header('Authorization');

    $isValidToken = $this->api_model->checkToken($token);

    $posts = array();
    if($isValidToken) {
        $subcritores = $this->api_model->get_admin_subcritores();
        foreach($subcritores as $subcritore) {
            $posts[] = array(
                'id' => $subcritore->id,
                'email' => $subcritore->email,
                'created_at' => $subcritore->created_at
            );
        }

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($posts)); 
    }
}

public function adminSubcritore($id)
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: authorization, Content-Type");

    $token = $this->input->get_request_header('Authorization');

    $isValidToken = $this->api_model->checkToken($token);

    if($isValidToken) {

        $subcritore = $this->api_model->get_admin_subcritore($id);

        $post = array(
            'id' => $subcritore->id,
            'email' => $subcritore->email,
        );
        

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($post)); 
    }
}

public function updateSubcritore($id)
{
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: authorization, Content-Type");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

    $token = $this->input->get_request_header('Authorization');

    $isValidToken = $this->api_model->checkToken($token);

    if($isValidToken) {

        $subcritore = $this->api_model->get_admin_subcritore($id);

        $email = $this->input->post('email');

        $isUploadError = FALSE;

        if( ! $isUploadError) {
            $subcritoreData = array(
                'email' => $email,
            );

            $this->api_model->updateSubcritore($id, $subcritoreData);

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

public function deleteSubcritore($id)
{
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Access-Control-Allow-Headers: authorization, Content-Type");

    $token = $this->input->get_request_header('Authorization');

    $isValidToken = $this->api_model->checkToken($token);

    if($isValidToken) {

        $subcritore = $this->api_model->get_admin_subcritore($id);

        $this->api_model->deleteSubcritore($id);

        $response = array(
            'status' => 'success'
        );

        $this->output
            ->set_status_header(200)
            ->set_content_type('application/json')
            ->set_output(json_encode($response)); 
    }
}

public function sendregistro($subcritoreData)
{
    $message = '<p>Hi, <br />Some one has submitted contact form.</p>';
    $message .= '<p><strong>Email: </strong>'.$subcritoreData['email'].'</p>';
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

    $this->email->subject('subscribe Form');
    $this->email->message($message);

    $this->email->send();
}

//



}
