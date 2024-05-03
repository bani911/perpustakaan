<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller{

	function __construct(){
		parent::__construct();
		// $this->load->model('Master_model');
		// $this->load->helper('form','url');
	}

	public function datacheck()
	{
		$barcodeid = $_GET['id_pelanggan'];
		
		$getdata   = $this->db->query("SELECT * FROM tbl_pelanggan WHERE id_pelanggan='$barcodeid'")->row_array();
		
		if ($getdata['id'] != "") {

			$data['status'] 		= 1;
			$data['id']				= $getdata['id'];
			$data['nama']			= $getdata['nama'];
			$data['alamat']			= $getdata['alamat'];
			$data['jenis_kelamin']	= $getdata['jenis_kelamin'];
			$data['no_kendaraan']	= $getdata['no_kendaraan'];
			$data['tipe_kendaraan']	= $getdata['tipe_kendaraan'];
			$data['message'] 		= 'sucess';

		} else {
			$data['status'] = 0;
			$data['message'] = 'gagal';	
		}

		echo json_encode($data);
	}
	
}