<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct()
    {
        parent::__construct();
        // $this->load->model("master_api_model");
		// $this->config->load('config_api');
		// $this->load->model("user_model");
		// if($this->user_model->isNotLogin()) redirect(site_url('login'));
        // // cek is_user?
        // if($this->session->userdata('user_logged')->role != 'user') redirect(site_url('login'));
    }

	public function index()
	{
		// fungsi untuk me-load view welcome_message.php
		$data['name'] = "Insan Adhimix";

		$this->load->view("welcome_message", $data);
	}

	public function about()
	{
		// fungsi untuk me-load view about.php
		$this->load->view('about');
	}
	
	public function contact()
	{
		// fungsi untuk me-load view contact.php
		$data['name'] = "Super CI";
		// echo view("contact", $data);
		$this->load->view("contact", $data);
	}

	public function faqs()
	{
		// fungsi untuk me-load view faqs.php
		$data['data_faqs'] = [
			[
				'question' => 'Apa itu Codeigniter?',
				'answer' => 'Codeigniter adalah framework untuk membuat web'
			],
			[
				'question' => 'Siapa yang membuat Codeiginter?',
				'answer' => 'CI awalnya dibuat oleh Ellislab'
			],
			[
				'question' => 'Codeigniter versi berapakah yang digunakan pada tutoril ini?',
				'answer' => 'Codeigniter versi 4.0.4'
			]
		];
		$this->load->view("faqs", $data);
	}

}
