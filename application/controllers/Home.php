<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		ini_set('display_errors', 'off');
	}

	public function index()
	{
		$data['title'] = 'Home';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['settingWhite'] = $this->setting->settingWhite();
		$data['footer'] = $this->db->get('perusahaan')->result_array();

		$data['getBantuan'] = $this->bansos->getBantuan();
		$data['getNews'] = $this->bansos->getNews();

		if (isset($_POST['submit'])) {
			$keyword = $this->input->post('search_penerima', true);
			$data['getSearch'] = $this->bansos->getSearch($keyword);
			$sql = "SELECT bantuan.*, jenis_bantuan.nama_bantuan FROM bantuan JOIN jenis_bantuan ON bantuan.jenis_bantuan_id = jenis_bantuan.id WHERE bantuan.nik = '$keyword'";
			$datas  = $this->db->query($sql)->result();
			$cek = count($datas);
			if ($cek > 0) {
				foreach ($datas as $d) {
					if ($d->menerima == '0') {
						$menerima = 'belum terkonfirmasi';
					} else {
						$menerima = 'sudah terkonfirmasi';
					}
					$pesan = '<div class="alert alert-success" role="alert">Nik :' . $d->nik . '<br> Nama : ' . $d->nama . '<br>Bantuan : ' . $d->nama_bantuan . '<br>Status : ' . $menerima . '</div>';
					$this->session->set_flashdata('message', $pesan);
				}
			} else {
				$pesan = '<div class="alert alert-danger" role="alert">Maaf, nik : ' . $keyword . ' belum terdaftar!</div>';
				$this->session->set_flashdata('message', $pesan);
			}
		}

		$data['getBantuan'] = $this->bansos->getBantuan();
		$data['datas'] = $datas;
		$this->load->view('home/index', $data);
	}
	public function formulir()
	{
		$data['title'] = 'Home';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['settingWhite'] = $this->setting->settingWhite();
		$data['footer'] = $this->db->get('perusahaan')->result_array();
		$data['jenis_bantuan'] = $this->db->get('jenis_bantuan')->result_array();

		// $data['getBantuan'] = $this->bansos->getBantuan();
		// $data['getNews'] = $this->bansos->getNews();
		// $data['getBantuan'] = $this->bansos->getBantuan();

		$this->load->view('home/formulir', $data);
	}
	public function pendaftaran($slug_bantuan)
	{

		$data['judul'] = $this->db->get_where('jenis_bantuan', ['slug_bantuan' => $slug_bantuan])->row_array();
		$data['title'] = $data['judul']['nama_bantuan'];
		$data['footer'] = $this->db->get('perusahaan')->result_array();

		$data['getPendaftaran'] = $this->bansos->getPendaftaran($slug_bantuan);

		$this->form_validation->set_rules('nik', 'nik', 'required|trim|numeric', [
			'is_unique' => 'NIK sudah terdaftar'
		]);
		$this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'required|trim');
		$this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'required|trim');
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'required|trim');
		$this->form_validation->set_rules('jkl', 'jenis kelamin', 'required|trim');
		$this->form_validation->set_rules('status', 'status', 'required|trim');
		$this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
		$this->form_validation->set_rules('jml_tanggungan', 'jml_tanggungan', 'required|trim|numeric');
		$this->form_validation->set_rules('jml_anak', 'jml_anak', 'required|trim|numeric');

		if ($this->form_validation->run() == false) {
			$this->load->view('home/pendaftaran-warga', $data);
		} else {

			$data = [
				'nama' => $this->input->post('nama_lengkap'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tanggal_lahir'),
				'jkl' => $this->input->post('jkl'),
				'status' => $this->input->post('status'),
				'alamat' => $this->input->post('alamat'),
				'pekerjaan' => $this->input->post('pekerjaan'),
				'penghasilan' => $this->input->post('penghasilan'),
				'jml_tanggungan' => $this->input->post('jml_tanggungan'),
				'jml_anak' => $this->input->post('jml_anak'),
				'lahan_kontrak' => $this->input->post('lahan_kontrak'),
				'lahan_pribadi' => $this->input->post('lahan_pribadi'),
				'nik' => $this->input->post('nik'),
				'jenis_bantuan_id' => $this->input->post('jenis_bantuan_id'),
				'rumah' => $this->input->post('rumah'),
				'old_pekerjaan' => $this->input->post('old_pekerjaan'),
				'nganggur' => $this->input->post('nganggur'),
				'lama_bekerja' => $this->input->post('lama_bekerja'),
			];
			$upload_image = $_FILES['foto']['name'];
			if ($upload_image == "") {
				$this->db->set('foto', 'default.jpg');
			} else {
				if ($upload_image) {
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size']      = '2048';
					$config['upload_path'] = './assets/img/foto_pendukung/';
					$new_name = time() . $_FILES["foto"]['name'];
					$config['file_name'] = $new_name;

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('foto')) {
						$new_image = $this->upload->data('file_name');
						$this->db->set('foto', $new_image);
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">file bukan gambar atau lebih besar dari 2mb!</div>');
						redirect('home/pendaftaran/' . $slug_bantuan);
						return false;
					}
				}
			}
			$this->db->insert('bantuan', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pribadi anda sudah di daftar!</div>');
			redirect('home/formulir');
		}
	}
}
