<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Master_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("master_user_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
        $this->config->load('config_api');
        // cek is_login?
        if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
        // cek is_admin?
        if($this->session->userdata('user_logged')->role != 'admin') redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["m_user"] = $this->master_user_model->getAllexcept();

        $this->load->view("admin/master_user/list", $data);
    }

    public function add()
    {
        $m_user = $this->master_user_model;
        $validation = $this->form_validation;
        $api = $this->config->item('api');
        $validation->set_rules($m_user->rules());

        $data["api_key"] = $api['key'];
        $data["api_plant"] = $api['get_plant'];

        if ($validation->run()) {
            $m_user->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan !');
        }

        $this->load->view("admin/master_user/new_form", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/master_user');
       
        $m_user = $this->master_user_model;
        $validation = $this->form_validation;
        $api = $this->config->item('api');
        $validation->set_rules($m_user->rules());

        $data["api_key"] = $api['key'];
        $data["api_plant"] = $api['get_plant'];

        if ($validation->run()) {
            $m_user->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["m_user"] = $m_user->getById($id);
        if (!$data["m_user"]) show_404();
        
        $this->load->view("admin/master_user/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->master_user_model->delete($id)) {
            redirect(site_url('admin/master_user'));
        }
    }
}