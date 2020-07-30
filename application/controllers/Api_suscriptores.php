<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Suscriptores extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('api_model');
        $this->load->model('api_model_suscriptores');
		$this->load->helper('url');
		$this->load->helper('text');
	}

	

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
