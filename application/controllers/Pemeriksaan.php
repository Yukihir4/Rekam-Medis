<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemeriksaan extends AUTH_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pemeriksaan');
		$this->load->model('M_pasien');
		$this->load->model('M_dokter');
		$this->load->model('M_poli');
		$this->load->library('pdf');
	}

	public function index()
	{
		$data['userdata'] = $this->userdata;
		$data['dataPemeriksaan'] = $this->M_pemeriksaan->select_all();
		$data['dataPasien'] = $this->M_pasien->select_all();
		$data['dataDokter'] = $this->M_dokter->select_all();
		$data['dataPoli'] = $this->M_poli->select_all();

		$data['page'] = "Pemeriksaan";
		$data['judul'] = "Pemeriksaan";
		$data['deskripsi'] = "Manage Pemeriksaan Data";

		$data['modal_tambah_pemeriksaan'] = show_my_modal('modals/modal_tambah_pemeriksaan', 'tambah-pemeriksaan', $data);

		$js = $this->load->view('pemeriksaan/pemeriksaan-js', null, true);
		$this->template->views('pemeriksaan/home', $data, $js);
	}

	public function tampil()
	{
		$data['dataPemeriksaan'] = $this->M_pemeriksaan->select_all();
		$this->load->view('pemeriksaan/list_data', $data);
	}

	public function prosesTambah()
	{
		$this->form_validation->set_rules('idPeriksa', 'ID Pemeriksaan', 'trim|required');
		$this->form_validation->set_rules('pasien', 'ID Pasien', 'trim|required');
		$this->form_validation->set_rules('dokter', 'ID Dokter', 'trim|required');
		$this->form_validation->set_rules('poli', 'ID Poli', 'trim|required');
		$this->form_validation->set_rules('tgl', 'Tanggal Pemerikasaan', 'trim|required');
		$this->form_validation->set_rules('anamnesis', 'Pemerikasaan Anamnesis', 'trim|required');
		$this->form_validation->set_rules('fisik', 'Pemerikasaan Fisik', 'trim|required');
		$this->form_validation->set_rules('penunjang', 'Penunjang Pemerikasaan', 'trim|required');
		$this->form_validation->set_rules('diagnosa', 'Diagnosa Dokter', 'trim|required');
		$this->form_validation->set_rules('tindakan', 'Tindakan Kepada Pasien', 'trim|required');
		$this->form_validation->set_rules('saran', 'Saran Kepada Pasien', 'trim|required');
		$this->form_validation->set_rules('tensi', 'Tensi Darah Pasien', 'trim|required');
		$this->form_validation->set_rules('resep', 'Resep Obat Pasien', 'trim|required');

		$data = $this->input->post();
		if ($this->form_validation->run() == TRUE) {

			$result = $this->M_pemeriksaan->insert($data);

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

	public function detail()
	{

		$id                 = trim($_POST['id']);
		$data['dataPemeriksaan'] = $this->M_pemeriksaan->select_by_id($id);

		echo show_my_modal('modals/modal_detail_pemeriksaan', 'detail-pemeriksaan', $data, 'lg');
	}

	public function delete()
	{
		$id = $_POST['idDok'];
		$result = $this->M_pemeriksaan->delete($id);

		if ($result) {
			echo show_succ_msg('Dokter Data Successfully Deleted', '20px');
		} else {
			echo show_err_msg('Dokter Data Failed To Delete', '20px');
		}
	}

	public function print($idPemeriksaan)
	{
		$pemeriksaan = $this->M_pemeriksaan->select_by_id($idPemeriksaan);
		if ($pemeriksaan != null) {
			$data['dataPemeriksaan'] = [$pemeriksaan];
			$html = $this->load->view('pemeriksaan/print', $data, true);
			$filename = 'report_' . time();
			$this->pdf->generate($html, $filename);
		} else {
			redirect('/Pemeriksaan', 'refresh');
		}
	}
}

/* End of file dokter.php */
/* Location: ./application/controllers/dokter.php */
