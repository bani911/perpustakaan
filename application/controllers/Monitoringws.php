<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoringws extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */

    public function __construct()
    {
        parent::__construct();
        $this->load->model("master_api_model");
    }

	public function index()
	{
		// fungsi untuk me-load view
		$data['url_ws'] = $this->master_api_model->getAll();
		$this->load->view("monitoringws", $data);
	}

}
