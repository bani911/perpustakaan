<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Master_api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("master_api_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
        // cek is_admin?
        if($this->session->userdata('user_logged')->role != 'admin') redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["api"] = $this->master_api_model->getAll();
        $this->load->view("admin/master_api/list", $data);
    }

    public function add()
    {
        $api = $this->master_api_model;
        $validation = $this->form_validation;
        $validation->set_rules($api->rules());

        if ($validation->run()) {
            $api->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan !');
        }

        $this->load->view("admin/master_api/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/master_api');
       
        $api = $this->master_api_model;
        $validation = $this->form_validation;
        $validation->set_rules($api->rules());

        if ($validation->run()) {
            $api->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["api"] = $api->getById($id);
        if (!$data["api"]) show_404();
        
        $this->load->view("admin/master_api/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->master_api_model->delete($id)) {
            redirect(site_url('admin/master_api'));
        }
    }
}