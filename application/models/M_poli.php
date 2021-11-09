<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_poli extends CI_Model {
	private $tableName = 'poli';

	public function select_all_poli() {
		
		$sql = "SELECT * FROM poli ORDER BY poli.nama_poli";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all() {

		$query = $this->db->select([
				'pk.id_poli',
				'pk.nama_poli',
				'pk.gedung'
			])->from("{$this->tableName} pk")
				->order_by('pk.id_poli', 'ASC')
				->get();

		return $query->result();
	}

	public function select_by_id($id) {
		$query = $this->db->select([
				'pk.id_poli',
				'pk.nama_poli',
				'pk.gedung'
			])->from("{$this->tableName} pk")
				->where('pk.id_poli', $id)
				->order_by('pk.id_poli', 'ASC')
				->get();
		
		return $query->row();
	}

	public function check_poli($kode)
	{
		$this->db->where('id_poli', $kode);
		$data = $this->db->get('poli');

		return $data->num_rows();
	}


	public function update($params) {
		$data = array(
			'nama_poli' => $params['nama'],
			'gedung' => $params['gedung']
		);

		$where = array('id_poli' => $params['id']);
		$this->db->update($this->tableName, $data, $where);

		return $this->db->affected_rows();
	}

	public function delete($id) {
		$this->db->delete($this->tableName, ['id_poli' => $id]);

		if ($this->db->error()['code'] == 1451) {
			return false;
		} else {
			return true;
		}
	}

	public function insert($params) {
		
		$data = [
			'id_poli' => $params['id'],
			'nama_poli' => $params['nama'],
			'gedung' => $params['gedung']
		];
		$this->db->insert($this->tableName, $data);
		
		return $this->db->affected_rows();
	}

	public function insert_batch($data) {
		
		$this->db->insert_batch($this->tableName, $data);
		
		return $this->db->affected_rows();
	}

	public function check_id($nama) {
		
		$this->db->where('id_poli', $nama);
		$data = $this->db->get('poli');

		return $data->num_rows();
	}

	public function total_rows() {
		$data = $this->db->get($this->tableName);

		return $data->num_rows();
	}
}

/* End of file M_poli.php */
/* Location: ./application/models/M_poli.php */