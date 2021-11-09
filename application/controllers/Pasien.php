<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pasien');
	}

	public function index()
	{
		$data['userdata'] = $this->userdata;
		$data['dataPasien'] = $this->M_pasien->select_all();

		$data['page'] = "Pasien";
		$data['judul'] = "Pasien";
		$data['deskripsi'] = "Manage Pasien Data";

		$data['modal_tambah_pasien'] = show_my_modal('modals/modal_tambah_pasien', 'tambah-pasien', $data);

		$js = $this->load->view('pasien/pasien-js', null, true);
		$this->template->views('pasien/home', $data, $js);
	}

	public function tampil()
	{
		$data['dataPasien'] = $this->M_pasien->select_all();
		$this->load->view('pasien/list_data', $data);
	}

	public function prosesTambah()
	{
		$this->form_validation->set_rules('id', 'Pasien ID', 'trim|required');
		$this->form_validation->set_rules('nomorRM', 'Nomor Rekam Medis Pasien', 'trim|required');
		$this->form_validation->set_rules('nomorId', 'Nomor Identitas Pasien', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Pasien', 'trim|required');
		$this->form_validation->set_rules('kelamin', 'Jenis Kelamin Pasien', 'trim|required');
		$this->form_validation->set_rules('tempatLahir', 'Tempat Lahir Pasien', 'trim|required');
		$this->form_validation->set_rules('tglLahir', 'Tanggal Lahir Pasien', 'trim|required');
		$this->form_validation->set_rules('usia', 'Usia Pasien', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama Pasien', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat Pasien', 'trim|required');
		$this->form_validation->set_rules('telp', 'No Hp Pasien', 'trim|required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan Pasien', 'trim|required');
		$this->form_validation->set_rules('status', 'Status Pasien', 'trim|required');

		$data = $this->input->post();

		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_pasien->insert($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Pasien Data Successfully Added', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Pasien Data Failed To Add', '20px');
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

		$data['dataPasien'] = $this->M_pasien->select_by_id($id);
		$data['userdata'] = $this->userdata;

		echo show_my_modal('modals/modal_update_pasien', 'update-pasien', $data);
	}

	public function prosesUpdate()
	{
		$this->form_validation->set_rules('nomorRM', 'Nomor Rekam Medis Pasien', 'trim|required');
		$this->form_validation->set_rules('nomorId', 'Nomor Identitas Pasien', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Pasien', 'trim|required');
		$this->form_validation->set_rules('kelamin', 'Jenis Kelamin Pasien', 'trim|required');
		$this->form_validation->set_rules('tempatLahir', 'Tempat Lahir Pasien', 'trim|required');
		$this->form_validation->set_rules('tglLahir', 'Tanggal Lahir Pasien', 'trim|required');
		$this->form_validation->set_rules('usia', 'Usia Pasien', 'trim|required');
		$this->form_validation->set_rules('agama', 'Agama Pasien', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat Pasien', 'trim|required');
		$this->form_validation->set_rules('telp', 'No Hp Pasien', 'trim|required');
		$this->form_validation->set_rules('pekerjaan', 'Pekerjaan Pasien', 'trim|required');
		$this->form_validation->set_rules('status', 'Status Pasien', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {
			$result = $this->M_pasien->update($data);

			if ($result > 0) {
				$out['status'] = '';
				$out['msg'] = show_succ_msg('Pasien Data Successfully Changed', '20px');
			} else {
				$out['status'] = '';
				$out['msg'] = show_err_msg('Pasien Data Failed To Change', '20px');
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
		$result = $this->M_pasien->delete($id);

		if ($result > 0) {
			echo show_succ_msg('Pasien Data Successfully Deleted', '20px');
		} else {
			echo show_err_msg('Pasien Data Failed To Delete', '20px');
		}
	}

	public function getpasienJson()
	{
		$dataPasien = $this->M_pasien->select_all_pasien();

		$response = [
			"data" => $dataPasien
		];
		echo json_encode($response);
	}
}

/* End of file Pasien.php */
/* Location: ./application/controllers/Pasien.php */