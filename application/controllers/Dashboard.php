<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_dokter');
		$this->load->model('M_pasien');
	}

	public function index() {
		$data['jml_pasien'] 	= $this->M_pasien->total_rows();
		$data['jml_dokter'] 	= $this->M_dokter->total_rows();
		$data['userdata'] 		= $this->userdata;


		$data['page'] 			= "dashboard";
		$data['judul'] 			= "Dashboard";
		$data['deskripsi'] 		= "";

		$this->template->views('dashboard', $data);
	}
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */