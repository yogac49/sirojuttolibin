<?php defined('BASEPATH') or exit('No direct script access allowed');

class Ppdb_model extends CI_Model
{
	function insert_data($data, $table)
	{
		return $this->db->insert($table, $data);
	}

	public function upddata($data) {
		$this->db->where(array('status' => 'Sudah Bayar' , 'no_pembayaran' => $data['no_pembayaran']));
		$query =   $this->db->update(studentstatus ,array('status' => 'Sudah Di Konfirmasi'));
		return true;
	  }
	function getAll($table)
	{
		return $this->db->get($table);
	}
	function getOneData($data, $table)
	{
		return $this->db->get_where($table, $data);
	}

	function joinTableSiswa($username)
	{
		$this->db->select('tabel_pembayaran.status,tabel_pembayaran.no_pembayaran,tabel_siswa.*')
			->from('tabel_pendaftaran')
			->join('tabel_siswa', 'tabel_siswa.nik_siswa=tabel_pendaftaran.nik_siswa')
			->join('tabel_pembayaran', 'tabel_pendaftaran.no_pembayaran=tabel_pembayaran.no_pembayaran')
			->where("tabel_siswa.username", $username);
		return	$this->db->get();
	}

	function joinSiswa()
	{
		$this->db->select('tabel_pembayaran.*,tabel_siswa.*')
			->from('tabel_pendaftaran')
			->join('tabel_siswa', 'tabel_siswa.nik_siswa=tabel_pendaftaran.nik_siswa')
			->join('tabel_pembayaran', 'tabel_pendaftaran.no_pembayaran=tabel_pembayaran.no_pembayaran')
			->order_by('tabel_pembayaran.no_pembayaran');
		return	$this->db->get();
	}

	function joinAll($username)
	{
		$this->db->select('tabel_siswa.*,tabel_pendaftaran.*,tabel_ibu.*,tabel_ayah.*,tabel_pembayaran.*')
			->from('tabel_pendaftaran')
			->join('tabel_siswa', 'tabel_siswa.nik_siswa=tabel_pendaftaran.nik_siswa')
			->join('tabel_ayah', 'tabel_pendaftaran.nik_ayah=tabel_ayah.nik_ayah')
			->join('tabel_ibu', 'tabel_pendaftaran.nik_ibu=tabel_ibu.nik_ibu')
			->where("tabel_siswa.username", $username);
		return	$this->db->get();
	}

	function joinAllSiswa($username)
	{
		$this->db->select('tabel_siswa.*,tabel_pendaftaran.*,tabel_pembayaran.*,tabel_ibu.*,tabel_ayah.*')
			->from('tabel_pendaftaran')
			->join('tabel_ayah', 'tabel_pendaftaran.nik_ayah=tabel_ayah.nik_ayah')
			->join('tabel_ibu', 'tabel_pendaftaran.nik_ibu=tabel_ibu.nik_ibu')
			->join('tabel_siswa', 'tabel_siswa.nik_siswa=tabel_pendaftaran.nik_siswa')
			->join('tabel_pembayaran', 'tabel_pendaftaran.no_pembayaran=tabel_pembayaran.no_pembayaran')
			->where("tabel_siswa.username", $username);
		return	$this->db->get();
	}

	public function uploadFile($name, $path)
	{
		if (!file_exists($path))
			mkdir($path);

		$config = [
			'upload_path'	=> $path,
			'allowed_types' => 'jpg|png|jpeg',
			'overwrite'		=> TRUE,
			'max_size'		=> 1024
		];
		$this->load->library('upload', $config);
		if (!$this->upload->do_upload($name)) {
			$eror = "EROR";
			$this->session->set_flashdata('msg', $this->upload->display_errors());
			redirect('daftar-akun');
		}
		$uploaded_data =  $this->upload->data();
		$this->upload->overwrite = TRUE;
		return $uploaded_data;
	}
	
}
