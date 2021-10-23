<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// is_logged_in();
		$this->load->model('Admin_model', 'admin');
		// ini_set('display_errors', 'off');
	}

	public function index()
	{
		if ($this->session->userdata('role_id') > 2) {
			redirect('user');
		}
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['settingWhite'] = $this->setting->settingWhite();
		$data['footer'] = $this->db->get('perusahaan')->result_array();

		$data['getBantuan'] = $this->bansos->getBantuan();
		$data['getTotal'] = $this->bansos->getTotal();
		$data['getCalonPenerima'] = $this->bansos->getCalonPenerima();

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
		$this->load->view('home/dashboard', $data);
		$this->load->view('templates/footer', $data);
	}
	public function changeActiveCalon()
	{
		$id = $this->input->post('val');
		$user_active = $this->input->post('apply');

		$result = $this->db->get_where('bantuan', $id);

		if ($result->num_rows() < 1) {
			$this->db->query("UPDATE  bantuan SET is_active = $user_active  WHERE id = $id");
		} else {
			$this->db->query("UPDATE  bantuan SET is_active = $user_active  WHERE id = $id");
		}
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Submenu is active changed!</div>');
	}
}
