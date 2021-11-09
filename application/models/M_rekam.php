<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_rekam extends CI_Model {
	private $tableName = 'rekammedis';
	private $tableNameObat = 'rm_obat';

	public function select_all_rekam() {
		
		$sql = "SELECT * FROM rekammeids ORDER BY rekam.id_rm";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all() {

		$query = $this->db->select([
				'rm.id_rm',
				// 'r.id_rm_obat',
				// 'r.id_obat',
				'rm.id_pasien',
				'p.nomor_identitas',
				'p.nama_pasien',
				'p.jenis_kelamin',
				'p.alamat',
				'p.no_telp',
				'rm.keluhan',
				'rm.id_dokter',
				'd.nama_dokter',
				'd.spesialis',
				'd.alamat',
				'd.no_telp',
				'rm.diagnosis',
				'rm.id_poli',
				'pk.nama_poli',
				'pk.gedung',
				'rm.tgl_periksa'
			])->from("{$this->tableName} rm")
				// ->join("rm_obat r", "r.id_rm = rm.id_rm")
				->join("pasien p", "p.id_pasien = rm.id_pasien")
				->join("dokter d", "d.id_dokter = rm.id_dokter")
				->join("poli pk", "pk.id_poli = rm.id_poli")
				->order_by('rm.id_rm', 'ASC')
				->get();

		return $query->result();
	}

	public function select_by_id($id) {
		$query = $this->db->select([
				'rm.id_rm',
				'r.id_rm_obat',
				'r.id_obat',
				'o.nama_obat',
				'o.keterangan_obat',
				'rm.id_pasien',
				'p.nomor_identitas',
				'p.nama_pasien',
				'p.jenis_kelamin',
				'p.alamat',
				'p.no_telp',
				'rm.keluhan',
				'rm.id_dokter',
				'd.nama_dokter',
				'd.spesialis',
				'd.alamat',
				'd.no_telp',
				'rm.diagnosis',
				'rm.id_poli',
				'pk.nama_poli',
				'pk.gedung',
				'rm.tgl_periksa'
			])->from("{$this->tableName} rm")
				->join("rm_obat r", "r.id_rm = rm.id_rm")
				->join("obat o", "o.id_obat = r.id_obat")
				->join("pasien p", "p.id_pasien = rm.id_pasien")
				->join("dokter d", "d.id_dokter = rm.id_dokter")
				->join("poli pk", "pk.id_poli = rm.id_poli")
				->where('rm.id_rm', $id)
				->order_by('rm.id_rm', 'ASC')
				->get();
		
		return $query->row();
	}

	public function check_rekam($kode)
	{
		$this->db->where('id_rm', $kode);
		$data = $this->db->get('rekam');

		return $data->num_rows();
	}

	public function delete($id) {
		$this->db->delete($this->tableName, ['id_rm' => $id]);

		if ($this->db->error()['code'] == 1451) {
			return false;
		} else {
			return true;
		}
	}

	public function insert($params) {
		
		$this->db->insert($this->tableName, $params);
		
		return $this->db->affected_rows();
	}

	public function insert_obat($params) {
		
		$this->db->insert($this->tableNameObat, $params);
		
		return $this->db->affected_rows();
	}

	public function insert_batch($data) {
		
		$this->db->insert_batch($this->tableName, $data);
		
		return $this->db->affected_rows();
	}

	public function check_id($nama) {
		
		$this->db->where('id_rm', $nama);
		$data = $this->db->get('rekam');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get($this->tableName);

		return $data->num_rows();
	}
}

/* End of file M_rekam.php */
/* Location: ./application/models/M_rekam.php */