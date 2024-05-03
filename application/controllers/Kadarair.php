<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kadarair extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */

    public function __construct()
    {
        parent::__construct();
        $this->load->model("master_api_model");
		$this->config->load('config_api');
    }

	public function index()
	{
		// fungsi untuk me-load view scan_vss.php
		$api = $this->config->item('api');
		$data['name'] = "Insan Adhimix";
		
		$data["api_key"] = $api['key'];
		$data["api_get_timbang"] = $api['get_data_timbang'];
		$data["api_put_kadarair"] = $api['update_kadar_air'];
		
		$this->load->view("kadarair", $data);
	}

}
