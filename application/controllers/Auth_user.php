<?php defined('BASEPATH') or exit('No direct script access allowed');

class Auth_user extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user');
		$this->load->model('Ppdb_model', 'ppdb');
		$this->load->library('Validate');
	}

	public function index()
	{
		$kode = $this->ppdb->getAll('tabel_pendaftaran')->result_array();
		foreach ($kode as $k) {
			# code...
			if (empty($k)) {
				$no = "1";
				$data['kode'] = "0" . $no++;
			} else {

				$noPendaftaran = $k['no_pendaftaran'];
				$split = str_split($noPendaftaran);
				$p   = $split[0];
				$nol = $split[1];
				$satu = $split[2] ;
				$data['kode'] = $p . $nol . $satu;
				//  garis 28 tambah +1
			}
		}
		$data['title'] = "Pendaftaran akun";
		$this->load->view('auth/header', $data);
		$this->load->view('auth/register', $data);
		$this->load->view('auth/footer');
	}

	public function dashboard()
	{

		$data['judulAwal'] = "PPDB ONLINE";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/content');
		$this->load->view('templates/footer');
	}

	public function register()
	{
		$kode = $this->ppdb->getAll('tabel_pendaftaran')->result_array();
		foreach ($kode as $k) {
			# code...
			if (empty($k)) {
				$no = "1";
				$data['kode'] = "0" . $no++;
			} else {
				$noPendaftaran = $k['no_pendaftaran'];
				$split = str_split($noPendaftaran);
				$p   = $split[0];
				$nol = $split[1];
				$satu = $split[2] + 1;
				$data['kode'] =  $nol . $satu;
			}
		}

		$data['title'] = "Pendaftaran akun";
		$this->load->view('auth/header', $data);
		$this->load->view('auth/register', $data);
		$this->load->view('auth/footer');
	}

	public function registrasi()
	{
		$kode = $this->ppdb->getAll('tabel_pendaftaran')->result_array();
		foreach ($kode as $k) {
			# code...
			if (empty($k)) {
				$no = "1";
				$data['kode'] = "0" . $no++;
			} else {

				$noPendaftaran = $k['no_pendaftaran'];
				$split = str_split($noPendaftaran);
				$p   = $split[0];
				$nol = $split[1];
				$satu = $split[2] + 1;
				$data['kode'] =  $nol . $satu;
			}
		}

		$data['title'] = "Pendaftaran akun";

		$validation = Validate::validasi();

		$this->form_validation->set_rules('username', 'Username', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('nik', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('nama_lengkap', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('nama_panggilan', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('tempat_lahir', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('agama', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('alamat', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('rt', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('rw', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('desa', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('kec', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('kab', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('anak_ke', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('jmlh_suara_kandung', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('tinggi', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('berat', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('gol_darah', 'Full Name', 'required|trim', $validation, TRUE);
		// AYAH
		$this->form_validation->set_rules('nik_ayah', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('nama_ayah', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('tempat_lahir_ayah', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('pend_terakhir_ayah', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('pekerjaan_ayah', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('alamat_ayah', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('rt_ayah', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('rw_ayah', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('kec_ayah', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('kab_ayah', 'Full Name', 'required|trim', $validation, TRUE);
		// IBU
		$this->form_validation->set_rules('nik_ibu', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('nama_ibu', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('tempat_lahir_ibu', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('pend_terakhir_ibu', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('pekerjaan_ibu', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('alamat_ibu', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('rt_ibu', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('rw_ibu', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('kec_ibu', 'Full Name', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('kab_ibu', 'Full Name', 'required|trim', $validation, TRUE);
		if ($this->form_validation->run() === false) {

			$this->load->view('auth/header', $data);
			$this->load->view('auth/register', $data);
			$this->load->view('auth/footer');
		} else {
			if (isset($_POST['submit'])) {
				# code....

				$pathAnak = './assets/img-pendaftaran/photo_siswa/';
				$username 			= $this->input->post('username');
				$nik 				= $this->input->post('nik');
				$namaLengkap 		= $this->input->post('nama_lengkap');
				$namaPanggilan 		= $this->input->post('nama_panggilan');
				$jk 				= $this->input->post('jk');
				$tempatLahir 		= $this->input->post('tempat_lahir');
				$tanggalLahir 		= $this->input->post('tgl_lahir');
				$agama 				= $this->input->post('agama');
				$alamat 			= $this->input->post('alamat');
				$rt 				= $this->input->post('rt');
				$rw 				= $this->input->post('rw');
				$desa 				= $this->input->post('desa');
				$kec 				= $this->input->post('kec');
				$kab 				= $this->input->post('kab');
				$anakKe 			= $this->input->post('anak_ke');
				$jmlhSuaraKandung	= $this->input->post('jmlh_suara_kandung');
				$tinggi 			= $this->input->post('tinggi');
				$berat 				= $this->input->post('berat');
				$gol_darah 			= $this->input->post('gol_darah');
				$photoAnak 			= $this->ppdb->uploadFile('photo', $pathAnak);
				$extAnak 			= $nik . $photoAnak['file_ext'];
				$name				= $photoAnak['file_name'];
				rename($pathAnak . $name, $pathAnak . "anak" . "_" . $extAnak);

				// DATA AYAH
				$nikAyah 			= $this->input->post('nik_ayah');
				$namaAyah 			= $this->input->post('nama_ayah');
				$tempatLahirAyah 	= $this->input->post('tempat_lahir_ayah');
				$tanggalLahirAyah 	= $this->input->post('tgl_lahir_ayah');
				$pendAyah 			= $this->input->post('pend_terakhir_ayah');
				$pekerjaanAyah 		= $this->input->post('pekerjaan_ayah');
				$alamatAyah 		= $this->input->post('alamat_ayah');
				$rtAyah 			= $this->input->post('rt_ayah');
				$rwAyah 			= $this->input->post('rw_ayah');
				$desaAyah 			= $this->input->post('desa_ayah');
				$kecAyah 			= $this->input->post('kec_ayah');
				$kabAyah 			= $this->input->post('kab_ayah');
				$photoAyah 			= $this->ppdb->uploadFile('photo_ayah', $pathAnak);
				$extAyah 			= $nikAyah . $photoAyah['file_ext'];
				$nameAyah			= $photoAyah['file_name'];
				rename($pathAnak . $nameAyah, $pathAnak . "ayah" . "_" . $extAyah);

				// DATA IBU
				$nikIbu 		 = $this->input->post('nik_ibu');
				$namaIbu 		 = $this->input->post('nama_ibu');
				$tempatLahirIbu  = $this->input->post('tempat_lahir_ibu');
				$tanggalLahirIbu = $this->input->post('tgl_lahir_ibu');
				$pedIbu 		 = $this->input->post('pend_terakhir_ibu');
				$pekerjaanIbu 	 = $this->input->post('pekerjaan_ibu');
				$alamatIbu 		 = $this->input->post('alamat_ibu');
				$rtIbu 			 = $this->input->post('rt_ibu');
				$rwIbu 			 = $this->input->post('rw_ibu');
				$desaIbu 		 = $this->input->post('desa_ibu');
				$kecIbu 		 = $this->input->post('kec_ibu');
				$kabIbu 		 = $this->input->post('kab_ibu');
				$photoIbu 		 = $this->ppdb->uploadFile('photo_ibu', $pathAnak);
				$extIbu 		= $nikIbu . $photoAnak['file_ext'];
				$nameIbu			= $photoIbu['file_name'];
				rename($pathAnak . $nameIbu, $pathAnak . "ibu" . "_" . $extIbu);
				$kode 		 = $this->input->post('kode');



				$dataAnak = [
					'nik_siswa'  			=> $nik,
					'username' 				=> $username,
					'nama_lengkap' 			=> $namaLengkap,
					'nama_panggilan'  		=> $namaPanggilan,
					'jenis_kelamin'  		=> $jk,
					'tempat_lahir'  		=> $tempatLahir,
					'tanggal_lahir'  		=> $tanggalLahir,
					'agama'  				=> $agama,
					'alamat'  				=> $alamat . "-" . $rt . "-" . $rw . "-" . $desa . "-" . $kec . "-" . $kab,
					'anak_ke'  				=> $anakKe,
					'jmlh_saudara_kandung'  => $jmlhSuaraKandung,
					'berat_badan'  			=> $berat,
					'tinggi_badan'  		=> $tinggi,
					'gol_darah' 			=> $gol_darah,
					'photo'  				=> "anak" . "_" . $extAnak,

				];
				$dataAyah = [
					'nik_ayah'  				=> $nikAyah,
					'nama_ayah' 				=> $namaAyah,
					'tempat_lahir_ayah'  		=> $tempatLahirAyah,
					'tanggal_lahir_ayah'  		=> $tanggalLahirAyah,
					'pendidikan_terakhir_ayah'  => $pendAyah,
					'pekerjaan_ayah'  			=> $pekerjaanAyah,
					'alamat_ayah'  				=> $alamatAyah . "-" . $rtAyah . "-" . $rwAyah . "-" . $desaAyah . "-" . $kecAyah . "-" . $kabAyah,
					'photo_ayah'  				=> "ayah" . "_" . $extAyah,
				];

				$dataIbu = [
					'nik_ibu'  			 		=> $nikIbu,
					'nama_ibu' 					=> $namaIbu,
					'tempat_lahir_ibu'  		=> $tempatLahirIbu,
					'tanggal_lahir_ibu'  		=> $tanggalLahirIbu,
					'pendidikan_terakhir_ibu'   => $pedIbu,
					'pekerjaan_ibu'  			=> $pekerjaanIbu,
					'alamat_ibu'  				=> $alamatIbu . "-" . $rtIbu . "-" . $rwIbu . "-" . $desaIbu . "-" . $kecIbu . "-" . $kabIbu,
					'photo_ibu'  				=> "ibu" . "_" . $extIbu,
				];
				$dataPendaftaran = [
					'no_pendaftaran' => "P" . $kode,
					'tgl_daftar'	 => date('d-m-y'),
					'nik_siswa'		 => $nik,
					'nik_ayah'  	 => $nikAyah,
					'nik_ibu'  		 => $nikIbu,
					'id_admin'  	 => 1,
					'no_pembayaran'  => 'B' . time()
				];
				$dataPembayaran = [
					'no_pembayaran'  	=> 'B' . time(),
					'tgl_bayar'	 		=> date('d-m-y'),
					'pemilik_rek'		=> $namaLengkap,
					'bank'				=> 'mandiri',
					'bukti_bayar' 		=> 'default.jpg',
					'status'			=> "Terkonfirmasi"

				];


				$this->ppdb->insert_data($dataAnak, 'tabel_siswa');
				$this->ppdb->insert_data($dataAyah, 'tabel_ayah');
				$this->ppdb->insert_data($dataIbu, 'tabel_ibu');
				$this->ppdb->insert_data($dataPendaftaran, 'tabel_pendaftaran');
				$this->ppdb->insert_data($dataPembayaran, 'tabel_pembayaran');

				echo "<script>alert('Selamat anda berhasil registrasi. Silahkan Login!')</script>";
				redirect('login', 'refresh');
			}
		}
	}

	public function login()
	{
		$data['title'] = "Login";

		$validation = Validate::validasi();

		$this->form_validation->set_rules('username', 'Username', 'required|trim', $validation, TRUE);
		$this->form_validation->set_rules('tgl_lahir', 'Password', 'required|trim', $validation, TRUE);
		if ($this->form_validation->run() === false) {
			$this->load->view('auth/header', $data);
			$this->load->view('auth/login', $data);
			$this->load->view('auth/footer');
		} else {
			$username 		= $this->input->post('username');
			$password 		= $this->input->post('tgl_lahir');
			$databaseUser 	= $this->db->get_where('tabel_siswa', ['username' => $username])->row_array();

			// CEK USER APAKAH SUDAH TERDAFTAR
			if ($databaseUser) {
				// CEK PASSWORD SESUAI ATAU TIDAK
				$uname 			= $databaseUser['username'];
				$pass 			= $databaseUser['tanggal_lahir'];

				if ($password == $pass) {
					$dataSession = [
						'username' => $uname,
						'nama_lengkap' => $databaseUser['nama_lengkap']
					];

					$this->session->set_userdata('sesi', $dataSession);

					echo "<script>alert('Login berhasil!')</script>";
					redirect('user', 'refresh');
				} else {
					echo "<script>alert('Login gagal!')</script>";
					redirect('login', 'refresh');
				}
			} else {
				echo "<script>alert('Username belum terdaftar!')</script>";
				redirect('login', 'refresh');
			}
		}
	}

	public function ajax()
	{
	}
	public function requestAjax()
	{
		$username = $_POST['username'];
		$database = $this->db->get_where('tabel_siswa', ['username' => $username])->row_array();
		echo json_encode($database);
	}

	public function logout()
	{
		$this->session->unset_userdata('sesi');
		delete_cookie('nama');
		redirect('auth_user/dashboard');
	}
	// public function register()
	// {
	// 	$username = $this->input->post('username');
	// 	$fullName = $this->input->post('full_name');
	// 	$pass1 = $this->input->post('password1');
	// 	$pass2 = $this->input->post('password2');
	// 	$database = $this->db->get_where('user', ['username' => $username]);
	// 	if (isset($_POST['daftar'])) {
	// 		// CEK JIKA DATA KOSONG
	// 		if (empty($username) || empty($fullName) || empty($pass1) || empty($pass2)) {
	// 			echo "<script>alert('Data tidak boleh kosong')</script>";
	// 		} elseif ($database) {
	// 			# Cek username apakah sudah terdaftar
	// 			echo "<script>alert('Data sudah terdaftar!')</script>";
	// 		} elseif (($pass1) !== ($pass2)) {
	// 			// CEK APAKAH PASSWORD TIDAK SAMA
	// 			echo "<script>alert('Password tidak sama!')</script>";
	// 		} else {
	// 			# Jika data berhasil
	// 			$data = [
	// 				'username'  => htmlspecialchars(strip_tags($username), TRUE),
	// 				'full_name' => htmlspecialchars(strip_tags($fullName), TRUE),
	// 				'password'  => password_hash($pass1, PASSWORD_DEFAULT)
	// 			];
	// 			$this->user->insert_data($data, 'user');
	// 			echo "<script>alert('Berhasil daftar')</script>";
	// 			redirect('user', 'refresh');
	// 		}
	// 	}
	// 	$this->load->view('auth/header');
	// 	$this->load->view('auth/register');
	// }

	// public function login()
	// {
	// 	$username = $this->input->post('username_login');
	// 	$pass = $this->input->post('password');

	// 	if (isset($_POST['login'])) {
	// 		if (empty($username) || empty($pass)) {
	// 			# Jika Data Kosong
	// 			echo "<script>alert('Data tidak boleh kosong')</script>";
	// 		}
	// 		$userDatabase = $this->db->get_where('user', ['username' => $username])->row_array();
	// 		# Cek apa user terdaftar
	// 		if ($userDatabase) {
	// 			# Cek Password apa sama?
	// 			if (password_verify($pass, $userDatabase['password'])) {
	// 				echo "<script>alert('Login berhasil')</script>";
	// 				redirect('user', 'refresh');
	// 			} else {
	// 				# Jika login gagal
	// 				echo "<script>alert('Login gagal')</script>";
	// 				redirect('auth_user', 'refresh');
	// 			}
	// 		} else {
	// 			# Jika data belum terdaftar
	// 			echo "<script>alert('Data belum terdaftar!')</script>";
	// 			redirect('auth_user', 'refresh');
	// 		}
	// 	}
	// 	$this->load->view('auth/akun');
	// }
}
