<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokter extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_dokter');
	}

	public function index()
	{
		$data['userdata'] = $this->userdata;
		$data['dataDokter'] = $this->M_dokter->select_all();

		$data['page'] = "Dokter";
		$data['judul'] = "Dokter";
		$data['deskripsi'] = "Manage Dokter Data";

		$data['modal_tambah_dokter'] = show_my_modal('modals/modal_tambah_dokter', 'tambah-dokter', $data);

		$js = $this->load->view('dokter/dokter-js', null, true);
		$this->template->views('dokter/home', $data, $js);
	}

	public function tampil()
	{
		$data['dataDokter'] = $this->M_dokter->select_all();
		$this->load->view('dokter/list_data', $data);
	}

	public function prosesTambah()
	{
		$this->form_validation->set_rules('idDok', 'Dokter ID', 'trim|required');
		$this->form_validation->set_rules('nama', 'dokter Name', 'trim|required');
		$this->form_validation->set_rules('spesialis', 'Spesisalis Dokter', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Address', 'trim|required');
		$this->form_validation->set_rules('telp', 'No Telpon Dokter', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {

			$result = $this->M_dokter->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Dokter Data Successfully Added', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Dokter Data Failed To Add', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function update()
	{
		$id = trim($_POST['idDok']);

		$data['dataDokter'] = $this->M_dokter->select_by_id($id);
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_dokter', 'update-dokter', $data);
	}

	public function prosesUpdate()
	{
		$this->form_validation->set_rules('nama', 'dokter Name', 'trim|required');
		$this->form_validation->set_rules('spesialis', 'Spesisalis Dokter', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Address', 'trim|required');
		$this->form_validation->set_rules('telp', 'No Telpon Dokter', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_dokter->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Dokter Data Successfully Changed', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Dokter Data Failed To Change', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function delete()
	{
		$id = $_POST['idDok'];
		$result = $this->M_dokter->delete($id);

		if ($result) {
			echo show_succ_msg('Dokter Data Successfully Deleted', '20px');
		} else {
			echo show_err_msg('Dokter Data Failed To Delete', '20px');
		}
	}
}

/* End of file dokter.php */
/* Location: ./application/controllers/dokter.php */