<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Admin_model', 'admin');
        ini_set('display_errors', 'off');
    }

    public function auth()
    {
        $data['title'] = 'Auth Setting';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['settingWhite'] = $this->setting->settingWhite();
        $data['settingBlack'] = $this->setting->settingBlack();
        $data['settingLogin'] = $this->setting->settingLogin();
        $data['settingRegister'] = $this->setting->settingRegister();
        $data['footer'] = $this->db->get('perusahaan')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('setting/auth', $data);
        $this->load->view('templates/footer', $data);
    }
    public function admin()
    {
        $data['title'] = 'Admin Setting';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['settingWhite'] = $this->setting->settingWhite();
        $data['settingPerusahaan'] = $this->setting->settingPerusahaan();
        $data['footer'] = $this->db->get('perusahaan')->result_array();

        $this->form_validation->set_rules('telp', 'Phone Number', 'required|trim|numeric');
        $this->form_validation->set_rules('nama_perusahaan', 'Nama Perusahaan', 'required');
        $this->form_validation->set_rules('bidang', 'Bideng', 'required');
        $this->form_validation->set_rules('alamat_perusahaan', 'Alamat', 'required');
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('setting/admin', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/perusahaan/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $this->input->post('old_image');
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/perusahaan/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }
            $this->db->set('nama_perusahaan', $this->input->post('nama_perusahaan'));
            $this->db->set('alamat_perusahaan', $this->input->post('alamat_perusahaan'));
            $this->db->set('bidang', $this->input->post('bidang'));
            $this->db->set('kota', $this->input->post('kota'));
            $this->db->set('telp', $this->input->post('telp'));
            $this->db->set('email', $this->input->post('email'));
            $this->db->set('fb', $this->input->post('fb'));
            $this->db->set('instagram', $this->input->post('instagram'));
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('perusahaan');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile perusahaan has been updated!</div>');
            redirect('settings/admin');
        }
    }
    public function updateBackground()
    { // cek jika ada gambar yang akan diupload
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']      = '2048';
            $config['upload_path'] = './assets/img/setting/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $old_image = $this->input->post('old_image');
                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/setting/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->dispay_errors();
            }
        }
        $this->db->set('is_active', '1');
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('setting');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Background login has been updated!</div>');
        redirect('settings/auth');
    }
}
