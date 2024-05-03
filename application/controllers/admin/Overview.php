<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model("user_model");
		if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
		
		if($this->session->userdata('user_logged')->role != 'admin') redirect(site_url('admin/login'));
		// echo $this->session->userdata('user_logged')->role;
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view("admin/overview");
	}
}