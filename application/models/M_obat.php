<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_obat extends CI_Model
{
	private $tableName = 'obat';

	public function select_all_obat()
	{

		$sql = "SELECT * FROM obat ORDER BY obat.nama_obat";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all()
	{

		$query = $this->db->select([
			'o.id_obat',
			'o.nama_obat',
			'o.keterangan_obat',
			'o.harga_obat',
			'o.stok_obat',
			'o.tanggal_expired'
		])->from("{$this->tableName} o")
			->order_by('o.id_obat', 'ASC')
			->get();

		return $query->result();
	}

	public function select_obat()
	{

		$query = $this->db->select([
			'o.id_obat',
			'r.id_rm_obat',
			'r.id_rm',
			'o.nama_obat',
			'o.keterangan_obat'
		])->from("{$this->tableName} o")
			->join("rm_obat r", "o.id_obat = r.id_obat")
			->order_by('o.id_obat', 'ASC')
			->get();

		return $query->result();
	}

	public function select_by_id($id)
	{
		$query = $this->db->select([
			'o.id_obat',
			'o.nama_obat',
			'o.keterangan_obat',
			'o.harga_obat',
			'o.stok_obat',
			'o.tanggal_expired'
		])->from("{$this->tableName} o")
			->where('o.id_obat', $id)
			->order_by('o.id_obat', 'ASC')
			->get();

		return $query->row();
	}

	public function check_obat($kode)
	{
		$this->db->where('id_obat', $kode);
		$data = $this->db->get('obat');

		return $data->num_rows();
	}


	public function update($params)
	{
		$data = array(
			'nama_obat' => $params['nama'],
			'keterangan_obat' => $params['keterangan'],
			'harga_obat' => $params['harga'],
			'stok_obat' => $params['stok']
		);

		$where = array('id_obat' => $params['id']);
		$this->db->update($this->tableName, $data, $where);

		return $this->db->affected_rows();
	}

	public function delete($id)
	{
		$this->db->delete($this->tableName, ['id_obat' => $id]);

		if ($this->db->error()['code'] == 1451) {
			return false;
		} else {
			return true;
		}
	}

	public function insert($params)
	{

		$data = [
			'id_obat' => $params['id'],
			'nama_obat' => $params['nama'],
			'keterangan_obat' => $params['keterangan'],
			'harga_obat' => $params['harga'],
			'stok_obat' => $params['stok'],
			'tanggal_expired' => $params['tgl']
		];
		$this->db->insert($this->tableName, $data);

		return $this->db->affected_rows();
	}

	public function insert_batch($data)
	{

		$this->db->insert_batch($this->tableName, $data);

		return $this->db->affected_rows();
	}

	public function check_id($nama)
	{

		$this->db->where('id_obat', $nama);
		$data = $this->db->get('obat');

		return $data->num_rows();
	}

	public function total_rows()
	{
		$data = $this->db->get($this->tableName);

		return $data->num_rows();
	}
}

/* End of file M_obat.php */
/* Location: ./application/models/M_obat.php */