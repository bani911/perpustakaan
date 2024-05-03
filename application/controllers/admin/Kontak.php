<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller{

    var $API ="";

    public function __construct() {
        parent::__construct();
        $this->API="http://localhost/rest_full";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->model("user_model");
        if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
        // cek is_admin?
        if($this->session->userdata('user_logged')->role != 'admin') redirect(site_url('admin/login'));
    }

    // menampilkan data kontak
    function index(){
        $data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/kontak'));
        $this->load->view('admin/kontak/list',$data);
    }

    // insert data kontak
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'        =>  $this->input->post('id'),
                'nama'      =>  $this->input->post('nama'),
                'nomor'     =>  $this->input->post('nomor')
            );
            $insert =  $this->curl->simple_post($this->API.'/kontak', $data, array(CURLOPT_BUFFERSIZE => 10));
            
            if($insert){
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else{
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('admin/kontak');
        }else{
            $this->load->view('admin/kontak/create');
        }
    }

    // edit data kontak
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id'        =>  $this->input->post('id'),
                'nama'      =>  $this->input->post('nama'),
                'nomor'     =>  $this->input->post('nomor')
            );
            $update = $this->curl->simple_put($this->API.'/kontak', $data, array(CURLOPT_BUFFERSIZE => 10));

            if($update){
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else{
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('admin/kontak');
        }else{
            $params = array('id'=>  $this->uri->segment(4));
            $data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/kontak',$params));
            // echo "<pre";
            // print_r($data);
            // echo "</pre>";
            $this->load->view('admin/kontak/edit',$data);
        }
    }

    // delete data kontak
    function delete($id){
        if(empty($id)){
            redirect('admin/kontak');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/kontak', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete){
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else{
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('admin/kontak');
        }
    }

}