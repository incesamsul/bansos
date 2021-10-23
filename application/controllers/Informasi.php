<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
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
        $data['title'] = 'Data Informasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['settingWhite'] = $this->setting->settingWhite();
        $data['footer'] = $this->db->get('perusahaan')->result_array();

        $data['getNews'] = $this->bansos->getNews();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('informasi/index', $data);
        $this->load->view('templates/footer', $data);
    }
    public function addinformasi()
    {
        $data['title'] = 'Add Informasi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['settingWhite'] = $this->setting->settingWhite();
        $data['footer'] = $this->db->get('perusahaan')->result_array();
        $data['jenisBantuan'] = $this->db->get('jenis_bantuan')->result_array();

        $this->form_validation->set_rules('title', 'title', 'required|trim');
        $this->form_validation->set_rules('date_created', 'tanggal', 'required|trim');
        $this->form_validation->set_rules('jenis_bantuan_id', 'jenis bantuan', 'required|trim');
        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('informasi/add-informasi', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'date_created' => $this->input->post('date_created'),
                'jenis_bantuan_id' => $this->input->post('jenis_bantuan_id'),
                'deskripsi' => $this->input->post('deskripsi'),
            ];
            $this->db->insert('news', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New informasi added!</div>');
            redirect('informasi');
        }
    }
    public function editinformasi($id)
    { {
            $data['title'] = 'Edit informasi';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['settingWhite'] = $this->setting->settingWhite();
            $data['footer'] = $this->db->get('perusahaan')->result_array();
            $data['jenisBantuan'] = $this->db->get('jenis_bantuan')->result_array();

            $data['editNews'] = $this->bansos->editNews($id);

            $this->form_validation->set_rules('title', 'title', 'required|trim');
            $this->form_validation->set_rules('date_created', 'tanggal', 'required|trim');
            $this->form_validation->set_rules('jenis_bantuan_id', 'jenis bantuan', 'required|trim');
            $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|trim');

            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('informasi/edit-informasi', $data);
                $this->load->view('templates/footer', $data);
            } else {
                $this->db->set('title', $this->input->post('title'));
                $this->db->set('date_created', $this->input->post('date_created'));
                $this->db->set('jenis_bantuan_id', $this->input->post('jenis_bantuan_id'));
                $this->db->set('deskripsi', $this->input->post('deskripsi'));
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('news');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data informasi updated!</div>');
                redirect('informasi');
            }
        }
    }
    public function deleteinformasi($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('news');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data informasi deleted!</div>');
        redirect('informasi');
    }
}
