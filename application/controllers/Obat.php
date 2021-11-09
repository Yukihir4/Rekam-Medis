<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_obat');
	}

	public function index()
	{
		$data['userdata'] = $this->userdata;
		$data['dataObat'] = $this->M_obat->select_all();

		$data['page'] = "Obat";
		$data['judul'] = "Obat";
		$data['deskripsi'] = "Manage Obat Data";

		$data['modal_tambah_obat'] = show_my_modal('modals/modal_tambah_obat', 'tambah-obat', $data);

		$js = $this->load->view('obat/obat-js', null, true);
		$this->template->views('obat/home', $data, $js);
	}

	public function tampil()
	{
		$data['dataObat'] = $this->M_obat->select_all();
		$this->load->view('obat/list_data', $data);
	}

	public function prosesTambah()
	{
		$this->form_validation->set_rules('id', 'Obat ID', 'trim|required');
		$this->form_validation->set_rules('nama', 'Obat Name', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan Obat', 'trim|required');

		$data = $this->input->post();

		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_obat->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Obat Data Successfully Added', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Obat Data Failed To Add', '20px');
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

		$data['dataObat'] = $this->M_obat->select_by_id($id);
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_obat', 'update-obat', $data);
	}

	public function prosesUpdate()
	{
		$this->form_validation->set_rules('nama', 'Obat Name', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'Keterangan Obat', 'trim|required');
		$this->form_validation->set_rules('harga', 'Harga Obat', 'trim|required');
		$this->form_validation->set_rules('stok', 'Stok Obat', 'trim|required');
		$this->form_validation->set_rules('tgl', 'Tanggal Expired Obat', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_obat->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Obat Data Successfully Changed', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Obat Data Failed To Change', '20px');
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
		$result = $this->M_obat->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Obat Data Successfully Deleted', '20px');
		} else {
			echo show_err_msg('Obat Data Failed To Delete', '20px');
		}
	}
}

/* End of file obat.php */
/* Location: ./application/controllers/obat.php */