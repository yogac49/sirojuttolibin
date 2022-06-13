<?php defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ppdb_model', 'ppdb');
		$this->load->library('Validate');
	}
	public function index()
	{
		$data['sesi'] = $this->session->userdata('sesi');
		$sesi = $data['sesi'];
		$database = $this->ppdb->getOneData(['username' => $sesi['username']], 'tabel_siswa')->row_array();
		$pembayaran = $this->ppdb->joinAllSiswa($sesi['username'])->row_array();
		$data['pembayaran'] = $pembayaran['status'];
		$data['photo'] = $database['photo'];
		$data['namaLengkap'] = $database['nama_lengkap'];

		$data['title'] = "Dashboard";
		$this->load->view('user/header', $data);
		$this->load->view('user/navbar', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('user/footer');
	}

	public function data_diri()
	{
		$data['sesi'] = $this->session->userdata('sesi');
		$sesi = $data['sesi'];
		$data['siswa'] = $this->ppdb->joinAllSiswa($sesi['username'])->row_array();
		$database = $this->ppdb->getOneData(['username' => $sesi['username']], 'tabel_siswa')->row_array();
		$data['photo'] = $database['photo'];
		$data['namaLengkap'] = $database['nama_lengkap'];
		$data['title'] = "Profile";
		$this->load->view('user/header', $data);
		$this->load->view('user/navbar', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/profile', $data);
		$this->load->view('user/footer');
	}

	public function pendaftaran()
	{
		$data['sesi'] = $this->session->userdata('sesi');
		$sesi = $data['sesi'];
		$data['dataJoin'][] = $this->ppdb->joinTableSiswa($sesi['username'])->row_array();

		foreach ($data['dataJoin'] as $dp) {
			$data['namaLengkap'] = $dp['nama_lengkap'];
			$data['nol'] = "0";
			$alamat = $dp['alamat'];
			$pecah = explode("-", $alamat);
			$data['alamat'] = $pecah[0];
			$data['rt'] = $pecah[1];
			$data['rw'] = $pecah[2];
			$data['desa'] = $pecah[3];
			$data['kec'] = $pecah[4];
			$data['kab'] = $pecah[5];
			$data['status'] = $dp['status'];
			$data['namaLengkap'] = $dp['nama_lengkap'];
			$data['photo'] = $dp['photo'];
		}
		$data['title'] = "Data Pendaftaran";
		$this->load->view('user/header', $data);
		$this->load->view('user/navbar', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/data_pendaftaran', $data);
		$this->load->view('user/footer');
	}

	public function pembayaran()
	{
		$data['sesi'] = $this->session->userdata('sesi');
		$sesi = $data['sesi'];
		$database = $this->ppdb->getOneData(['username' => $sesi['username']], 'tabel_siswa')->row_array();
		$data['photo'] = $database['photo'];
		$data['namaLengkap'] = $database['nama_lengkap'];
		$data['title'] = "Data Pembayaran";
		$this->load->view('user/header', $data);
		$this->load->view('user/navbar', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/pembayaran', $data);
		$this->load->view('user/footer');
	}

	public function bayar()
	{
		$data['sesi'] = $this->session->userdata('sesi');
		$sesi = $data['sesi'];
		$data['siswa'] = $this->ppdb->joinAllSiswa($sesi['username'])->row_array();
		$database = $this->ppdb->getOneData(['username' => $sesi['username']], 'tabel_siswa')->row_array();
		$data['photo'] = $database['photo'];
		$data['namaLengkap'] = $database['nama_lengkap'];
		$data['title'] = "Bayar";
		$this->load->view('user/header', $data);
		$this->load->view('user/navbar', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/bayar', $data);
		$this->load->view('user/footer');
	}

	public function edit($nik)
	{
		$data['sesi'] = $this->session->userdata('sesi');
		$sesi = $data['sesi'];
		$data['siswa'] = $this->ppdb->joinAllSiswa($sesi['username'])->row_array();
		$database = $this->ppdb->getOneData(['nik_siswa' => $nik], 'tabel_siswa')->row_array();
		$data['allSiswa'] = $database;
		$alamat = $database['alamat'];
		$pecah = explode("-", $alamat);
		$data['alamat'] = $pecah[0];
		$data['rt'] = $pecah[1];
		$data['rw'] = $pecah[2];
		$data['desa'] = $pecah[3];
		$data['kec'] = $pecah[4];
		$data['kab'] = $pecah[5];
		$data['photo'] = $database['photo'];
		$data['namaLengkap'] = $database['nama_lengkap'];
		$data['title'] = "Edit Profile";
		$this->load->view('user/header', $data);
		$this->load->view('user/navbar', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/edit', $data);
		$this->load->view('user/footer');
	}

	public function cetak()
	{
		$mpdf = new \Mpdf\Mpdf();
		$data['sesi'] = $this->session->userdata('sesi');
		$sesi = $data['sesi'];
		$data['pendaftaran'][] = $this->ppdb->joinAllSiswa($sesi['username'])->row_array();

		foreach ($data['pendaftaran'] as $p) {
			$data['nama_lengkap']    = $p['nama_lengkap'];
			$data['nama_panggilan']  = $p['nama_panggilan'];
			$data['jk']  = $p['jenis_kelamin'];
			$t_lahir     = $p['tempat_lahir'];
			$tgl_lahir   = $p['tanggal_lahir'];
			$data['ttl'] = $t_lahir . ", " . date('d F Y', strtotime($tgl_lahir));
			$data['nik'] = $p['nik_siswa'];
			$data['agama'] = $p['agama'];
			$data['agama'] = $p['agama'];
			// alamat
			$alamat = $p['alamat'];
			$pecah = explode("-", $alamat);
			$alamat = $pecah[0];
			$rt = $pecah[1];
			$rw = $pecah[2];
			$desa = $pecah[3];
			$kec = $pecah[4];
			$kab = $pecah[5];
			$data['alamatTinggal'] = $alamat . " " . "RT" . "00" . $rt . "/" . "00" . $rw . " Desa." . $desa . ". Kec. " . $kec . ". Kab." . $kab;
			$data['anakKe']  	  = $p['anak_ke'];
			$data['jmlhSaudara']  = $p['jmlh_saudara_kandung'];
			$data['berat']  	  = $p['berat_badan'];
			$data['tinggi']  	  = $p['tinggi_badan'];
			$data['goldar']  	  = $p['gol_darah'];
			$data['photo_siswa']  = $p['photo'];
			// AYAH
			$data['nik_ayah']  = $p['nik_ayah'];
			$data['nama_ayah'] = $p['nama_ayah'];
			$t_lahir_ayah      = $p['tempat_lahir_ayah'];
			$tgl_lahir_ayah    = $p['tanggal_lahir_ayah'];
			$data['ttl_ayah']  = $t_lahir_ayah . ", " . date('d F Y', strtotime($tgl_lahir_ayah));
			$alamat_ayah = $p['alamat_ayah'];
			$pecah_a = explode("-", $alamat_ayah);
			$alamat_ayah = $pecah_a[0];
			$rt_a   = $pecah_a[1];
			$rw_a 	= $pecah_a[2];
			$desa_a = $pecah_a[3];
			$kec_a  = $pecah_a[4];
			$kab_a  = $pecah_a[5];
			$data['alamat_ayah'] 	= $alamat_ayah . " " . "RT" . "00" . $rt_a . "/" . "00" . $rw_a . " Desa." . $desa_a . ". Kec. " . $kec_a . ". Kab." . $kab_a;
			$data['pend_ayah'] 		= $p['pendidikan_terakhir_ayah'];
			$data['pekerjaan_ayah'] = $p['pekerjaan_ayah'];
			$data['no_hp']			= $p['no_hp'];
			$data['photo_ayah']     = $p['photo_ayah'];

			// AYAH
			$data['nik_ibu']  = $p['nik_ibu'];
			$data['nama_ibu'] = $p['nama_ibu'];
			$t_lahir_ibu      = $p['tempat_lahir_ibu'];
			$tgl_lahir_ibu    = $p['tanggal_lahir_ibu'];
			$data['ttl_ibu']  = $t_lahir_ibu . ", " . date('d F Y', strtotime($tgl_lahir_ibu));
			$alamat_ibu = $p['alamat_ibu'];
			$pecah_a = explode("-", $alamat_ibu);
			$alamat_ibu = $pecah_a[0];
			$rt_a   = $pecah_a[1];
			$rw_a 	= $pecah_a[2];
			$desa_a = $pecah_a[3];
			$kec_a  = $pecah_a[4];
			$kab_a  = $pecah_a[5];
			$data['alamat_ibu'] 	= $alamat_ibu . " " . "RT" . "00" . $rt_a . "/" . "00" . $rw_a . " Desa." . $desa_a . ". Kec. " . $kec_a . ". Kab." . $kab_a;
			$data['pend_ibu'] 		= $p['pendidikan_terakhir_ibu'];
			$data['pekerjaan_ibu'] = $p['pekerjaan_ibu'];
			$data['photo_ibu']     = $p['photo_ibu'];
		}
		$data['judul'] = "Data Pensiun";
		$mpdf->addPage('P');
		$html = $this->load->view('user/cetakPendaftaran', $data, TRUE);
		$mpdf->WriteHtml($html);
		$mpdf->Output();
	}
	public function logout()
	{
		$this->session->unset_userdata('sesi');
		redirect('auth_user/dashboard');
	}
}
