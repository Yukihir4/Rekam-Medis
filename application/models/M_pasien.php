<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pasien extends CI_Model
{
	private $tableName = 'pasien';

	public function select_all_pasien()
	{

		$sql = "SELECT * FROM pasien ORDER BY pasien.nama_pasien";

		$data = $this->db->query($sql);

		return $data->result();
	}

	public function select_all()
	{

		$query = $this->db->select([
			'p.id_pasien',
			'p.nomor_identitas',
			'p.nama_pasien',
			'p.jenis_kelamin',
			'p.alamat',
			'p.no_telp',
			'p.nomor_rm',
			'p.tempat_lahir',
			'p.tanggal_lahir',
			'p.usia',
			'p.agama',
			'p.pekerjaan',
			'p.status'
		])->from("{$this->tableName} p")
			->order_by('p.id_pasien', 'ASC')
			->get();

		return $query->result();
	}

	public function select_by_id($id)
	{
		$query = $this->db->select([
			'p.id_pasien',
			'p.nomor_identitas',
			'p.nama_pasien',
			'p.jenis_kelamin',
			'p.alamat',
			'p.no_telp',
			'p.nomor_rm',
			'p.tempat_lahir',
			'p.tanggal_lahir',
			'p.usia',
			'p.agama',
			'p.pekerjaan',
			'p.status'
		])->from("{$this->tableName} p")
			->where('p.id_pasien', $id)
			->order_by('p.id_pasien', 'ASC')
			->get();

		return $query->row();
	}

	public function check_pasien($kode)
	{
		$this->db->where('id_pasien', $kode);
		$data = $this->db->get('pasien');

		return $data->num_rows();
	}


	public function update($params)
	{
		$data = array(
			'nomor_identitas' => $params['nomorId'],
			'nama_pasien' => $params['nama'],
			'jenis_kelamin' => $params['kelamin'],
			'alamat' => $params['alamat'],
			'no_telp' => $params['telp'],
			'nomor_rm' => $params['nomorRM'],
			'tempat_lahir' => $params['tempatLahir'],
			'tanggal_lahir' => $params['tglLahir'],
			'usia' => $params['usia'],
			'agama' => $params['agama'],
			'pekerjaan' => $params['pekerjaan'],
			'status' => $params['status']
		);

		$where = array('id_pasien' => $params['id']);
		$this->db->update($this->tableName, $data, $where);

		return $this->db->affected_rows();
	}

	public function delete($id)
	{
		$this->db->delete($this->tableName, ['id_pasien' => $id]);

		if ($this->db->error()['code'] == 1451) {
			return false;
		} else {
			return true;
		}
	}

	public function insert($params)
	{

		$data = [
			'id_pasien' => $params['id'],
			'nomor_identitas' => $params['nomorId'],
			'nama_pasien' => $params['nama'],
			'jenis_kelamin' => $params['kelamin'],
			'alamat' => $params['alamat'],
			'no_telp' => $params['telp'],
			'nomor_rm' => $params['nomorRM'],
			'tempat_lahir' => $params['tempatLahir'],
			'tanggal_lahir' => $params['tglLahir'],
			'usia' => $params['usia'],
			'agama' => $params['agama'],
			'pekerjaan' => $params['pekerjaan'],
			'status' => $params['status']
		];
		$this->db->insert($this->tableName, $data);

		return $this->db->affected_rows();
	}

	public function check_id($nama)
	{

		$this->db->where('id_pasien', $nama);
		$data = $this->db->get('pasien');

		return $data->num_rows();
	}

	public function total_rows()
	{
		$data = $this->db->get($this->tableName);

		return $data->num_rows();
	}
}

/* End of file M_pasien.php */
/* Location: ./application/models/M_pasien.php */