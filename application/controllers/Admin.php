<?php defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ppdb_model', 'ppdb');
		$this->load->library('Validate');
	}

	public function update()
	{
	   $this->load->model("ppdb_model");
	   if ($this->input->post('konfirmasi')) {
	   $data = array('konfirmasi' => $this->input->post('no_pembayaran'));
	   $query     = $this->model("ppdb_model")->upddata($data);
	  }
	}

	public function disetujui($id)
    {
		
        $sql="UPDATE tabel_pembayaran SET status='Sudah Di Konfirmasi' WHERE no_pembayaran='$id'";
        $this->db->query($sql);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">  Pembayaran Telah Disetujui<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect(site_url('dataPendaftaran'));
		
    }

    public function ditolak($id)
    {
        $sql="UPDATE tabel_pembayaran SET status='ditolak' WHERE no_pembayaran=$id";
        $this->db->query($sql);
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">  Data Telah Ditolak<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect(site_url('approve_prf_f'));
    }
	public function index()
	{
		$sesi = $this->session->userdata('sesi');
		$database = $this->ppdb->getOneData(['username' => $sesi['username']], 'tabel_admin')->row_array();
		$data['nama'] = $database['nama'];
		$data['pendaftaran'] = $this->db->get('tabel_pendaftaran')->num_rows();
		$data['siswa'] = $this->db->get('tabel_siswa')->num_rows();
		$data['pembayaran'] = $this->db->get('tabel_pembayaran')->num_rows();
		$data['admin'] = $this->db->get('tabel_admin')->num_rows();
		$data['title'] = 'Dashboard';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/navbar', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates_admin/footer');
	}
	public function alur(){
		$this->load->view('auth/alur');
	}
	public function data_pendaftaran()
	{
		$sesi = $this->session->userdata('sesi');
		$database = $this->ppdb->getOneData(['username' => $sesi['username']], 'tabel_admin')->row_array();
		$data['nama'] = $database['nama'];
		$data['dataSiswa'] = $this->ppdb->joinSiswa()->result_array();
		
		$data['title'] = 'Data Pendaftaran';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/navbar', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/data_pendaftaran', $data);
		$this->load->view('templates_admin/footer');
	}

	public function data_pembayaran()
	{
		$sesi = $this->session->userdata('sesi');
		$database = $this->ppdb->getOneData(['username' => $sesi['username']], 'tabel_admin')->row_array();
		$data['nama'] = $database['nama'];
		$data['dataBayar'] = $this->ppdb->joinSiswa()->result_array();
		$data['title'] = 'Data Pembayaran';
		$this->load->view('templates_admin/header', $data);
		$this->load->view('templates_admin/navbar', $data);
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/data_pembayaran', $data);
		$this->load->view('templates_admin/footer');
	}

	public function login()
	{

		$validation = Validate::validasi();
		$this->form_validation->set_rules('username', 'Username', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('password', 'Password', 'required|trim', $validation, TRUE);
		$data['title'] = "Login Admin";
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/header', $data);
			$this->load->view('admin/login', $data);
			$this->load->view('admin/footer');
		} else {
			if (isset($_POST['submit'])) {
				# code...
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$databaseAdmin = $this->ppdb->getOneData(['username' => $username], 'tabel_admin')->row_array();
				if ($databaseAdmin) {
					if (md5($password) == $databaseAdmin['password']) {
						$dataSession = [
							'username' => $databaseAdmin['username'],
						];

						$this->session->set_userdata('sesi', $dataSession);

						echo "<script>alert('Login berhasil!')</script>";
						redirect('admin/dashboard', 'refresh');
					} else {
						echo "<script>alert('Password salah!')</script>";
						redirect('admin', 'refresh');
					}
				} else {
					echo "<script>alert('Username belum terdaftar!')</script>";
					redirect('admin', 'refresh');
				}
			}
		}
	}

	public function cetakPendaftaran()
	{
		$mpdf = new \Mpdf\Mpdf();
		$sesi = $this->session->userdata('sesi');
		$database = $this->ppdb->getOneData(['username' => $sesi['username']], 'tabel_admin')->row_array();
		$data['nama'] = $database['nama'];
		$data['dataSiswa'] = $this->ppdb->joinSiswa()->result_array();
		$data['title'] = 'Data Pendaftaran';
		$html = $this->load->view('admin/cetakPendaftaran', $data, TRUE);
		$mpdf->WriteHtml($html);
		$mpdf->Output();
	}
	public function logout()
	{
		$this->session->unset_userdata('sesi');
		redirect('admin');
	}
}
