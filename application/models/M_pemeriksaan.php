<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pemeriksaan extends CI_Model
{
	private $tableName = "pemeriksaan";

	public function select_all_pemeriksaan()
	{
		$sql = "SELECT * FROM pemeriksaan";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all()
	{

		$query = $this->db->select([
			'd.id_pemeriksaan',
			'd.id_pasien',
			'p.nomor_rm',
			'p.nama_pasien',
			'd.id_dokter',
			'dk.nama_dokter',
			'dk.spesialis',
			'd.id_poli',
			'pk.nama_poli',
			'pk.gedung',
			'd.tanggal_pemeriksaan',
			'd.anamnesis',
			'd.pemeriksaan_fisik',
			'd.hasil_penunjang',
			'd.diagnosis',
			'd.tindakan',
			'd.saran',
			'd.tensi_darah',
			'd.resep'
		])->from("{$this->tableName} d")
			->join("pasien p", "p.id_pasien = d.id_pasien")
			->join("poli pk", "pk.id_poli = d.id_poli")
			->join("dokter dk", "dk.id_dokter = d.id_dokter")
			->order_by('d.id_pemeriksaan', 'ASC')
			->get();

		return $query->result();
	}

	public function select_by_id($id)
	{

		$query = $this->db->select([
			'd.id_pemeriksaan',
			'd.id_pasien',
			'p.nomor_rm',
			'p.nama_pasien',
			'd.id_dokter',
			'dk.nama_dokter',
			'dk.spesialis',
			'd.id_poli',
			'pk.nama_poli',
			'pk.gedung',
			'd.tanggal_pemeriksaan',
			'd.anamnesis',
			'd.pemeriksaan_fisik',
			'd.hasil_penunjang',
			'd.diagnosis',
			'd.tindakan',
			'd.saran',
			'd.tensi_darah',
			'd.resep'
		])->from("{$this->tableName} d")
			->join("pasien p", "p.id_pasien = d.id_pasien")
			->join("poli pk", "pk.id_poli = d.id_poli")
			->join("dokter dk", "dk.id_dokter = d.id_dokter")
			->where('d.id_pemeriksaan', $id)
			->order_by('d.id_pemeriksaan', 'ASC')
			->get();

		return $query->row();
	}

	public function delete($id)
	{
		$this->db->delete($this->tableName, ['id_pemeriksaan' => $id]);

		if ($this->db->error()['code'] == 1451) {
			return false;
		} else {
			return true;
		}
	}

	public function insert($params)
	{
		$data = array(
			'id_pemeriksaan' => $params['idPeriksa'],
			'id_pasien' => $params['pasien'],
			'id_dokter' => $params['dokter'],
			'id_poli' => $params['poli'],
			'tanggal_pemeriksaan' => $params['tgl'],
			'anamnesis' => $params['anamnesis'],
			'pemeriksaan_fisik' => $params['fisik'],
			'hasil_penunjang' => $params['penunjang'],
			'diagnosis' => $params['diagnosa'],
			'tindakan' => $params['tindakan'],
			'saran' => $params['saran'],
			'tensi_darah' => $params['tensi'],
			'resep' => $params['resep']
		);

		$this->db->insert($this->tableName, $data);

		return $this->db->affected_rows();
	}

	public function insert_batch($data)
	{
		$this->db->insert_batch($this->tableName, $data);
		return $this->db->affected_rows();
	}

	public function check_dokter($kode)
	{
		$this->db->where('id_pemeriksaan', $kode);
		$data = $this->db->get('pemeriksaan');

		return $data->num_rows();
	}

	public function total_rows()
	{
		$data = $this->db->get('pemeriksaan');

		return $data->num_rows();
	}
}

/* End of file M_dokter.php */
/* Location: ./application/models/M_dokter.php */
