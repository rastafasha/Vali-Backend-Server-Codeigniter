<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api_Category extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('api_model');
		$this->load->model('api_model_category');
		$this->load->helper('url');
		$this->load->helper('text');
    }
    
    public function categorys()
	{
		header("Access-Control-Allow-Origin: *");

		$categorys = $this->api_model_category->get_categories($featured=false, $recentpost=false);

		$posts = array();
		if(!empty($categorys)){
			foreach($categorys as $category){


				$posts[] = array(
					'id' => $category->id,
					'category_name' => $category->category_name,
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
    }
    
    public function productbycategory()
	{
		header("Access-Control-Allow-Origin: *");

		$categorys = $this->api_model_category->get_productsbycategory($featured=false, $recentpost=false);

		$posts = array();
		if(!empty($categorys)){
			foreach($categorys as $category){


				$posts[] = array(
					'id' => $category->id,
					'category_name' => $category->category_name,
				);
			}
		}

		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($posts));
	}

	


}
