<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Master_loans extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("master_loans_model");
        $this->load->model("master_returns_model");
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
        // $data["m_loans"] = $this->master_loans_model->getAll();

        // $this->load->view("admin/master_loans/list", $data);

        // Load model
        $m_loans = $this->master_loans_model;

        // Get loan data with join returns table
        $data['m_loans'] = $m_loans->get_loan_list();

        // echo '<pre>';
        // print_r($data['books']);
        // echo '</pre>';
        // die;

        // Load view
        $this->load->view("admin/master_loans/list", $data);
    }

    // ===========================================================

    // load form loan
    public function create_loan() {
        // Validasi form peminjaman
        $this->form_validation->set_rules('book_id', 'Book ID', 'required|integer');
        $this->form_validation->set_rules('member_id', 'Member ID', 'required|integer');
        $this->form_validation->set_rules('due_date', 'Due Date', 'required');

        // Load model
        $m_loans = $this->master_loans_model;
        $data['books'] = $m_loans->get_books();
        $data['members'] = $m_loans->get_members();

        // echo '<pre>';
        // print_r($data['books']);
        // echo '</pre>';
        // die;

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan form peminjaman kembali
            $this->load->view("admin/master_loans/new_form", $data);
        }
    }

    // ===========================================================

    // save loan
    public function add()
    {
        $m_loans = $this->master_loans_model;
        $validation = $this->form_validation;
        $validation->set_rules($m_loans->rules());

        if ($validation->run()) {
            $m_loans->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan !');
        }

        // $data["m_loans"] = $m_loans->getAll();
        $data['m_loans'] = $m_loans->get_loan_list();

        $this->load->view("admin/master_loans/list", $data);
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/master_loans');
       
        $m_loans = $this->master_loans_model;
        $data['books'] = $m_loans->get_books();
        $data['members'] = $m_loans->get_members();
        $validation = $this->form_validation;
        $validation->set_rules($m_loans->rules());

        if ($validation->run()) {
            $m_loans->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["m_loans"] = $m_loans->getById($id);
        if (!$data["m_loans"]) show_404();
        
        $this->load->view("admin/master_loans/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->master_loans_model->delete($id)) {
            redirect(site_url('admin/master_loans'));
        }
    }

    public function extend_loan($id = null) {
        if (!isset($id)) redirect('admin/master_loans');
       
        $m_loans = $this->master_loans_model;
        $validation = $this->form_validation;
        $validation->set_rules($m_loans->rules_extend());

        if ($validation->run()) {
            $m_loans->update_extend_loan();
            $this->session->set_flashdata('success', 'Berhasil diupdate');
        }

        $data["m_loans"] = $m_loans->getById($id);
        if (!$data["m_loans"]) show_404();
        
        $this->load->view("admin/master_loans/extend_loan_form", $data);

    }

    public function create_return($id=null) {
        // Validasi form peminjaman
        $this->form_validation->set_rules('loan_id', 'Loan ID', 'required|integer');
        $this->form_validation->set_rules('return_date', 'Return Date', 'required|date');
        $m_loans = $this->master_loans_model;

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan form peminjaman kembali
            $data["m_loans"] = $m_loans->getById($id);
            if (!$data["m_loans"]) show_404();

            $this->load->view("admin/master_loans/return_form", $data);
        }
    }

    public function return_loan($id = null) {
        $m_loans = $this->master_loans_model;
        $m_returns = $this->master_returns_model;
        $validation = $this->form_validation;
        $validation->set_rules($m_returns->rules());

        if ($validation->run()) {
            $m_loans->update_loan_return_flag($id);
            $m_returns->save();
            $this->session->set_flashdata('success', 'Berhasil diproses !');
        }

        // $data["m_loans"] = $m_loans->getAll();
        $data['m_loans'] = $m_loans->get_loan_list();
        $this->load->view("admin/master_loans/list", $data);

    }

}