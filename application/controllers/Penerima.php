<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penerima extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model', 'admin');
		// ini_set('display_errors', 'off');
	}

	public function index()
	{
		$data['title'] = 'Cek Penerima';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['settingWhite'] = $this->setting->settingWhite();
		$data['footer'] = $this->db->get('perusahaan')->result_array();

		if (isset($_POST['submit'])) {
			$keyword = $this->input->post('search_penerima', true);
			$data['getSearch'] = $this->bansos->getSearch($keyword);
			$sql = "SELECT bantuan.*, jenis_bantuan.nama_bantuan FROM bantuan JOIN jenis_bantuan ON bantuan.jenis_bantuan_id = jenis_bantuan.id WHERE bantuan.nik = '$keyword'";
			$datas  = $this->db->query($sql)->result();
			$cek = count($datas);
			if ($cek > 0) {
				foreach ($datas as $d) {
					$pesan = '<div class="alert alert-success" role="alert">Nik :' . $d->nik . '<br> Nama : ' . $d->nama . '<br>Bantuan : ' . $d->nama_bantuan . '</div>';
					$this->session->set_flashdata('message', $pesan);
				}
			} else {
				$pesan = '<div class="alert alert-danger" role="alert">Maaf, nik : ' . $keyword . ' belum terdaftar!</div>';
				$this->session->set_flashdata('message', $pesan);
			}
		}

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('home/penerima', $data);
		$this->load->view('templates/footer', $data);
	}
	public function dataPenerima()
	{
		is_logged_in();
		$data['title'] = 'Data Penerima';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['settingWhite'] = $this->setting->settingWhite();
		$data['footer'] = $this->db->get('perusahaan')->result_array();

		$data['getDataPenerima'] = $this->bansos->getDataPenerimaStaff();
		$data['getDataPenerimaLurah'] = $this->bansos->getDataPenerimaLurah();
		$data['getDataPenerimaAcc'] = $this->bansos->getDataPenerimaAccStaff();
		$data['getDataPenerimaAccLurah'] = $this->bansos->getDataPenerimaAccLurah();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('penerima/index', $data);
		$this->load->view('templates/footer', $data);
	}
	public function perikanan()
	{
		is_logged_in();
		$data['title'] = 'B Perikanan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['settingWhite'] = $this->setting->settingWhite();
		$data['footer'] = $this->db->get('perusahaan')->result_array();

		$data['getPerikanan'] = $this->bansos->getPerikanan();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('penerima/perikanan', $data);
		$this->load->view('templates/footer', $data);
	}
	public function pertanian()
	{
		is_logged_in();
		$data['title'] = 'B Pertanian';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['settingWhite'] = $this->setting->settingWhite();
		$data['footer'] = $this->db->get('perusahaan')->result_array();

		$data['getPertanian'] = $this->bansos->getPertanian();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('penerima/pertanian', $data);
		$this->load->view('templates/footer', $data);
	}
	public function Raskin()
	{
		is_logged_in();
		$data['title'] = 'B Raskin';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['settingWhite'] = $this->setting->settingWhite();
		$data['footer'] = $this->db->get('perusahaan')->result_array();

		$data['getRaskin'] = $this->bansos->getRaskin();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('penerima/raskin', $data);
		$this->load->view('templates/footer', $data);
	}
	public function guru()
	{
		is_logged_in();
		$data['title'] = 'B Guru Mengaji';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['settingWhite'] = $this->setting->settingWhite();
		$data['footer'] = $this->db->get('perusahaan')->result_array();

		$data['getGuru'] = $this->bansos->getGuru();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('penerima/guru', $data);
		$this->load->view('templates/footer', $data);
	}
	public function Imam()
	{
		is_logged_in();
		$data['title'] = 'B Imam Masjid';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['settingWhite'] = $this->setting->settingWhite();
		$data['footer'] = $this->db->get('perusahaan')->result_array();

		$data['getImam'] = $this->bansos->getImam();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('penerima/imam', $data);
		$this->load->view('templates/footer', $data);
	}
	public function pjenaza()
	{
		is_logged_in();
		$data['title'] = 'B Pemandi Jenaza';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['settingWhite'] = $this->setting->settingWhite();
		$data['footer'] = $this->db->get('perusahaan')->result_array();

		$data['getJenaza'] = $this->bansos->getJenaza();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('penerima/jenaza', $data);
		$this->load->view('templates/footer', $data);
	}
	public function Makam()
	{
		is_logged_in();
		$data['title'] = 'B Pembersih Kuburan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['settingWhite'] = $this->setting->settingWhite();
		$data['footer'] = $this->db->get('perusahaan')->result_array();

		$data['getKuburan'] = $this->bansos->getKuburan();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('penerima/kuburan', $data);
		$this->load->view('templates/footer', $data);
	}
	public function Pkh()
	{
		is_logged_in();
		$data['title'] = 'B PKH';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['settingWhite'] = $this->setting->settingWhite();
		$data['footer'] = $this->db->get('perusahaan')->result_array();

		$data['getPkh'] = $this->bansos->getPkh();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('penerima/pkh', $data);
		$this->load->view('templates/footer', $data);
	}
	public function accStaff()
	{
		$id = $this->input->post('val');
		$user_active = $this->input->post('apply');

		$result = $this->db->get_where('bantuan', $id);

		if ($result->num_rows() < 1) {
			$this->db->query("UPDATE  bantuan SET acc_staff = $user_active  WHERE id = $id");
		} else {
			$this->db->query("UPDATE  bantuan SET acc_staff = $user_active  WHERE id = $id");
		}
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Konfirmasi!</div>');
	}
	public function changeUserActive()
	{
		$id = $this->input->post('val');
		$user_active = $this->input->post('apply');

		$result = $this->db->get_where('bantuan', $id);

		if ($result->num_rows() < 1) {
			$this->db->query("UPDATE  bantuan SET menerima = $user_active  WHERE id = $id");
		} else {
			$this->db->query("UPDATE  bantuan SET menerima = $user_active  WHERE id = $id");
		}
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Submenu is active changed!</div>');
	}

	// HAPUS PENERIMA
	public function hapuspenerima($nik)
	{
		$this->db->query("DELETE FROM bantuan WHERE nik = '$nik'");
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Data Terhapus!</div>');
		redirect('/penerima/datapenerima');
	}

	public function editpenerima($nik)
	{
		var_dump($nik);
		var_dump($this->input->post());
		$data['bantuan'] = $this->bansos->getDataEdit($nik)[0];

		$data['title'] = 'Update Bantuan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['settingWhite'] = $this->setting->settingWhite();
		$data['footer'] = $this->db->get('perusahaan')->result_array();

		$this->form_validation->set_rules('nama_lengkap', 'nama lengkap', 'required|trim');
		$this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'required|trim');
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'required|trim');
		$this->form_validation->set_rules('jkl', 'jenis kelamin', 'required|trim');
		$this->form_validation->set_rules('status', 'status', 'required|trim');
		$this->form_validation->set_rules('alamat', 'alamat', 'required|trim');
		$this->form_validation->set_rules('jml_tanggungan', 'jml_tanggungan', 'required|trim|numeric');
		$this->form_validation->set_rules('jml_anak', 'jml_anak', 'required|trim|numeric');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('home/edit-pendaftaran', $data);
			$this->load->view('templates/footer', $data);
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
				// 'jenis_bantuan_id' => $this->input->post('jenis_bantuan_id'),
				'rumah' => $this->input->post('rumah'),
				'old_pekerjaan' => $this->input->post('old_pekerjaan'),
				'nganggur' => $this->input->post('nganggur'),
				'lama_bekerja' => $this->input->post('lama_bekerja'),
			];
			$this->db->where('nik', $nik);
			$this->db->update('bantuan', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data pribadi anda sudah di daftar!</div>');
			redirect('/penerima/datapenerima');
		}
	}
}
