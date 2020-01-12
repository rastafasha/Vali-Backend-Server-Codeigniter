<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Buscar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->helper('url');
		$this->load->helper('text');
    }



public function search()
{
    header("Access-Control-Allow-Origin: *");
    header("Content-Type:application/json; charset=UTF-8");


    $text = $this->input->get('text');


    $data['product'] = $this->api_model->search_products($text);
    // echo $text;
     //print_r($data); // traemos el array
    $data = json_encode( $data, JSON_FORCE_OBJECT );// se convierte a json
    echo $data."\n";



    $this->output
        ->set_content_type('application/json');
    
}

public function adminSearch (){

$text = $this->input->get('text');

$this->load->view('product');


}



}