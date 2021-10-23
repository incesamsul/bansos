<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekap extends CI_Controller
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
        $data['title'] = 'Data Rekap';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['settingWhite'] = $this->setting->settingWhite();
        $data['footer'] = $this->db->get('perusahaan')->result_array();

        $data['getNews'] = $this->bansos->getNews();
        $data['getRekapPertanian'] = $this->bansos->getRekapPertanian();
        $data['getRekapPertanian1'] = $this->bansos->getRekapPertanian1();
        $data['getRekapPerikanan'] = $this->bansos->getRekapPerikanan();
        $data['getRekapPerikanan1'] = $this->bansos->getRekapPerikanan1();
        $data['getRekapRaskin'] = $this->bansos->getRekapRaskin();
        $data['getRekapRaskin1'] = $this->bansos->getRekapRaskin1();
        $data['getRekapGuru'] = $this->bansos->getRekapGuru();
        $data['getRekapGuru1'] = $this->bansos->getRekapGuru1();
        $data['getRekapImam'] = $this->bansos->getRekapImam();
        $data['getRekapImam1'] = $this->bansos->getRekapImam1();
        $data['getRekapJenazah'] = $this->bansos->getRekapJenazah();
        $data['getRekapJenazah1'] = $this->bansos->getRekapJenazah1();
        $data['getRekapMakam'] = $this->bansos->getRekapMakam();
        $data['getRekapMakam1'] = $this->bansos->getRekapMakam1();
        $data['getRekapPhk'] = $this->bansos->getRekapPhk();
        $data['getRekapPhk1'] = $this->bansos->getRekapPhk1();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('rekap/index', $data);
        $this->load->view('templates/footer', $data);
    }
}
