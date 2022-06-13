<?php defined('BASEPATH') or exit('No direct script access allowed');

class approve_prf_f extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user');
		$this->load->model('Ppdb_model', 'ppdb');
		$this->load->library('Validate');
	}
    public function disetujui($id)
    {
        $sql="UPDATE tabel_pembayaran SET status='disetujui' WHERE no_pembayaran=$id";
        $this->db->query($sql);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">  Pembayaran Telah Disetujui<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect(site_url('approve_prf_f'));
    }

    public function ditolak($id)
    {
        $sql="UPDATE tabel_pembayaran SET status='ditolak' WHERE no_pembayaran=$id";
        $this->db->query($sql);
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">  Data Telah Ditolak<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect(site_url('approve_prf_f'));
    }
}