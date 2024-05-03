<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Master_members extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("master_members_model");
        $this->load->library('form_validation');
        $this->load->model("user_model");
        //$this->config->load('config_api');

        // cek is_login?
        if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
        // cek is_admin?
        if($this->session->userdata('user_logged')->role != 'admin') redirect(site_url('admin/login'));
    }

    public function index()
    {
        $data["m_members"] = $this->master_members_model->getAll();

        $this->load->view("admin/master_members/list", $data);
    }

    public function add()
    {
        $m_members = $this->master_members_model;
        $validation = $this->form_validation;
        $validation->set_rules($m_members->rules());

        if ($validation->run()) {
            $m_members->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan !');
        }

        $this->load->view("admin/master_members/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/master_members');
       
        $m_members = $this->master_members_model;
        $validation = $this->form_validation;
        $validation->set_rules($m_members->rules());

        if ($validation->run()) {
            $m_members->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["m_members"] = $m_members->getById($id);
        if (!$data["m_members"]) show_404();
        
        $this->load->view("admin/master_members/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->master_members_model->delete($id)) {
            redirect(site_url('admin/master_members'));
        }
    }
}