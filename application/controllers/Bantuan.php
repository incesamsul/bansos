<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bantuan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Admin_model', 'admin');
		ini_set('display_errors', 'off');
	}

	public function index()
	{
		$data['title'] = 'Jenis Bantuan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['settingWhite'] = $this->setting->settingWhite();
		$data['footer'] = $this->db->get('perusahaan')->result_array();

		$data['getBantuan'] = $this->bansos->getBantuan();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('bantuan/index', $data);
		$this->load->view('templates/footer', $data);
	}
	public function addBantuan()
	{
		$data['title'] = 'Add Jenis Bantuan';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['settingWhite'] = $this->setting->settingWhite();
		$data['footer'] = $this->db->get('perusahaan')->result_array();

		$this->form_validation->set_rules('nama_bantuan', 'Nama bantuan', 'required|trim|is_unique[jenis_bantuan.nama_bantuan]');
		$this->form_validation->set_rules('jml_penerima', 'Jumlah penerima', 'required|trim|numeric');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('bantuan/add-bantuan', $data);
			$this->load->view('templates/footer', $data);
		} else {
			$slug_bantuan = url_title($this->input->post('nama_bantuan'), '-', true);
			$data = [
				'nama_bantuan' => $this->input->post('nama_bantuan'),
				'jml_penerima' => $this->input->post('jml_penerima'),
				'slug_bantuan'  => $slug_bantuan,
				'is_active'     => 1
			];
			// cek jika ada gambar yang akan diupload
			$upload_image = $_FILES['image']['name'];
			if ($upload_image == "") {
				$this->db->set('image', 'default.jpg');
			} else {
				if ($upload_image) {
					$config['allowed_types'] = 'gif|jpg|png|jpeg';
					$config['max_size']      = '2048';
					$config['upload_path'] = './assets/img/bantuan/';

					$this->load->library('upload', $config);

					if ($this->upload->do_upload('image')) {
						$new_image = $this->upload->data('file_name');
						$this->db->set('image', $new_image);
					} else {
						echo $this->upload->dispay_errors();
					}
				}
			}
			$this->db->insert('jenis_bantuan', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New bantuan added!</div>');
			redirect('bantuan');
		}
	}
	public function editBantuan($slug_bantuan)
	{
		$data['title'] = 'Edit merk';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['settingWhite'] = $this->setting->settingWhite();
		$data['footer'] = $this->db->get('perusahaan')->result_array();

		$data['editBantuan'] = $this->bansos->editBantuan($slug_bantuan);

		$this->form_validation->set_rules('nama_bantuan', 'Nama bantuan', 'required|trim');
		$this->form_validation->set_rules('jml_penerima', 'Jumlah penerima', 'required|trim|numeric');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('bantuan/edit-bantuan', $data);
			$this->load->view('templates/footer', $data);
		} else {
			$slug_bantuan1 = url_title($this->input->post('nama_bantuan'), '-', true);
			// cek jika ada gambar yang akan diupload
			$upload_image = $_FILES['image']['name'];
			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_size']      = '2048';
				$config['upload_path'] = './assets/img/bantuan/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_image = $this->input->post('old_image');
					if ($old_image != 'default.jpg') {
						unlink(FCPATH . 'assets/img/bantuan/' . $old_image);
					}
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->dispay_errors();
				}
			}

			$this->db->set('nama_bantuan', $this->input->post('nama_bantuan'));
			$this->db->set('jml_penerima', $this->input->post('jml_penerima'));
			$this->db->set('slug_bantuan', $slug_bantuan1);
			$this->db->where('id', $this->input->post('id'));
			$this->db->update('jenis_bantuan');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data bantuan updated!</div>');
			redirect('bantuan');
		}
	}
}
