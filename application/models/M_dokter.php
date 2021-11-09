<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dokter extends CI_Model
{
	private $tableName = "dokter";

	public function select_all_dokter()
	{
		$sql = "SELECT * FROM dokter";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all()
	{

		$query = $this->db->select([
			'd.id_dokter',
			'd.nama_dokter',
			'd.spesialis',
			'd.alamat',
			'd.no_telp'
		])->from("{$this->tableName} d")
			->order_by('d.id_dokter', 'ASC')
			->get();

		return $query->result();
	}

	public function select_by_id($id)
	{

		$query = $this->db->select([
			'd.id_dokter',
			'd.nama_dokter',
			'd.spesialis',
			'd.alamat',
			'd.no_telp'
		])->from("{$this->tableName} d")
			->where('d.id_dokter', $id)
			->order_by('d.id_dokter', 'ASC')
			->get();

		return $query->row();
	}

	public function update($params)
	{

		$data = array(
			'nama_dokter' => $params['nama'],
			'spesialis' => $params['spesialis'],
			'alamat' => $params['alamat'],
			'no_telp' => $params['telp']
		);

		$where = array('id_dokter' => $params['idDok']);

		$this->db->update($this->tableName, $data, $where);

		return $this->db->affected_rows();
	}

	public function delete($id)
	{
		$this->db->delete($this->tableName, ['id_dokter' => $id]);

		if ($this->db->error()['code'] == 1451) {
			return false;
		} else {
			return true;
		}
	}

	public function insert($params)
	{
		$data = array(
			'id_dokter' => $params['idDok'],
			'nama_dokter' => $params['nama'],
			'spesialis' => $params['spesialis'],
			'alamat' => $params['alamat'],
			'no_telp' => $params['telp']
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
		$this->db->where('id_dokter', $kode);
		$data = $this->db->get('dokter');

		return $data->num_rows();
	}

	public function total_rows()
	{
		$data = $this->db->get('dokter');

		return $data->num_rows();
	}
}

/* End of file M_dokter.php */
/* Location: ./application/models/M_dokter.php */