<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Poli extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_poli');
	}

	public function index()
	{
		$data['userdata'] = $this->userdata;
		$data['dataPoli'] = $this->M_poli->select_all();

		$data['page'] = "Poli";
		$data['judul'] = "Poli";
		$data['deskripsi'] = "Manage Poli Data";

		$data['modal_tambah_poli'] = show_my_modal('modals/modal_tambah_poli', 'tambah-poli', $data);

		$js = $this->load->view('poli/poli-js', null, true);
		$this->template->views('poli/home', $data, $js);
	}

	public function tampil()
	{
		$data['dataPoli'] = $this->M_poli->select_all();
		$this->load->view('poli/list_data', $data);
	}

	public function prosesTambah()
	{
		$this->form_validation->set_rules('id', 'Poli ID', 'trim|required');
		$this->form_validation->set_rules('nama', 'Poli Name', 'trim|required');
		$this->form_validation->set_rules('gedung', 'Poli Gedung', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_poli->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Poli Data Successfully Added', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Poli Data Failed To Add', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function update()
	{
		$id = trim($_POST['id']);

		$data['dataPoli'] = $this->M_poli->select_by_id($id);
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_poli', 'update-poli', $data);
	}

	public function prosesUpdate()
	{
		$this->form_validation->set_rules('nama', 'Poli Name', 'trim|required');
		$this->form_validation->set_rules('gedung', 'Poli Gedung', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_poli->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Poli Data Successfully Changed', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Poli Data Failed To Change', '20px');
			}
		} else {
			$out['status'] = 'form';
			$out['msg'] = show_err_msg(validation_errors());
		}

		echo json_encode($out);
	}

	public function delete()
	{
		$id = $_POST['id'];
		$result = $this->M_poli->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Poli Data Successfully Deleted', '20px');
		} else {
			echo show_err_msg('Poli Data Failed To Delete', '20px');
		}
	}
}

/* End of file Poli.php */
/* Location: ./application/controllers/Poli.php */