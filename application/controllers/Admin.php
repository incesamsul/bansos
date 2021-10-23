<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['settingWhite'] = $this->setting->settingWhite();
        $data['footer'] = $this->db->get('perusahaan')->result_array();

        $data['getTotalPenyuluh'] = $this->admin->getTotalPenyuluh();
        $data['getTotalTani'] = $this->admin->getTotalTani();
        $data['getTotalDesa'] = $this->admin->getTotalDesa();
        $data['getTotalKeluhan'] = $this->admin->getTotalKeluhan();

        $data['getJadwal'] = $this->admin->getJadwal();
        $data['getKeluhan'] = $this->admin->getKeluhan();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer', $data);
    }


    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();
        $data['settingWhite'] = $this->setting->settingWhite();
        $data['footer'] = $this->db->get('perusahaan')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $this->db->insert('user_role',  ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New role added!</div>');
            redirect('admin/role');
        }
    }

    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['settingWhite'] = $this->setting->settingWhite();
        $data['footer'] = $this->db->get('perusahaan')->result_array();
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer', $data);
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Access Changed!</div>');
    }
    public function changeisactive()
    {
        $id = $this->input->post('val');
        $user_active = $this->input->post('apply');

        $result = $this->db->get_where('user_sub_menu', $id);

        if ($result->num_rows() < 1) {
            $this->db->query("UPDATE  user_sub_menu SET is_active = $user_active  WHERE id = $id");
        } else {
            $this->db->query("UPDATE  user_sub_menu SET is_active = $user_active  WHERE id = $id");
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >Submenu is active changed!</div>');
    }
    public function menu()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['settingWhite'] = $this->setting->settingWhite();
        $data['footer'] = $this->db->get('perusahaan')->result_array();

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');
        $this->form_validation->set_rules('icon', 'Icon', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/menu', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'menu' => $this->input->post('menu'),
                'icon' => $this->input->post('icon')
            ];
            $this->db->insert('user_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New menu added!</div>');
            redirect('admin/menu');
        }
    }
    public function submenu()
    {
        $data['title'] = 'Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['settingWhite'] = $this->setting->settingWhite();
        $data['footer'] = $this->db->get('perusahaan')->result_array();

        $data['submenu'] = $this->admin->getSubMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('menu_id', 'Menu', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/submenu', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'menu_id' => $this->input->post('menu_id'),
                'url' => $this->input->post('url'),
                'is_active' => $this->input->post('is_active')
            ];
            $this->db->insert('user_sub_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New sub menu added!</div>');
            redirect('admin/submenu');
        }
    }

    public function user()
    {
        $data['title'] = 'Data User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['settingWhite'] = $this->setting->settingWhite();
        $data['footer'] = $this->db->get('perusahaan')->result_array();

        $data['users'] = $this->admin->getUser();

        $this->db->where('id !=', 1);
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already registered!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]', [
            'min_length' => 'Password too short!'
        ]);

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/user', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'name'          => htmlspecialchars($this->input->post('name', true)),
                'email'         => htmlspecialchars($this->input->post('email', true)),
                'image'         => 'default.jpg',
                'password'      => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id'       => htmlspecialchars($this->input->post('role_id', true)),
                'is_active'     => 0,
                'date_created'  => time()
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New data penyuluh added!</div>');
            redirect('admin/user');
        }
    }

    public function changeUserActive()
    {
        $id = $this->input->post('val');
        $user_active = $this->input->post('apply');

        $result = $this->db->get_where('user', $id);

        if ($result->num_rows() < 1) {
            $this->db->query("UPDATE  user SET is_active = $user_active  WHERE id = $id");
        } else {
            $this->db->query("UPDATE  user SET is_active = $user_active  WHERE id = $id");
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert" >User is active changed!</div>');
    }

    public function icon()
    {
        $data['title'] = 'Icons';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['settingWhite'] = $this->setting->settingWhite();
        $data['footer'] = $this->db->get('perusahaan')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/icon', $data);
        $this->load->view('templates/footer', $data);
    }
    public function metode()
    {


        $data['title'] = 'Metode Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['settingWhite'] = $this->setting->settingWhite();
        $data['footer'] = $this->db->get('perusahaan')->result_array();

        $data['metode_pembayaran'] = $this->db->get('metode_pembayaran')->result_array();

        $this->form_validation->set_rules('nama_bank', 'Nama Bank', 'required');
        $this->form_validation->set_rules('no_rek', 'No Rekening', 'required|numeric');
        $this->form_validation->set_rules('nama_rek', 'Atas Nama', 'required');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/metode', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $data = [
                'nama_bank' => $this->input->post('nama_bank'),
                'no_rek' => $this->input->post('no_rek'),
                'nama_rek' => $this->input->post('nama_rek'),
            ];
            $this->db->insert('metode_pembayaran', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New metode pembayaran added!</div>');
            redirect('admin/metode');
        }
    }

    // ===========================================================================================================================
    // Function Delete

    public function deleteMenu($id)
    {
        if ($id > '10') {
            $this->db->where('id', $id);
            $this->db->delete('user_menu');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu deleted!</div>');
            redirect('admin/menu');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Can not deleted menu!</div>');
            redirect('admin/menu');
        }
    }
    public function deleteSubMenu($id)
    {
        // $this->db->where('id', $id);
        // $this->db->delete('user_sub_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Can not deleted submenu!</div>');
        redirect('admin/submenu');
    }
    public function deleteRole($id)
    {
        if ($id > '4') {
            $this->db->where('id', $id);
            $this->db->delete('user_role');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Role deleted!</div>');
            redirect('admin/role');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Can not deleted role!</div>');
            redirect('admin/role');
        }
    }
    public function deleteMetode($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('metode_pembayaran');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Metode pembayaran deleted!</div>');
        redirect('admin/metode');
    }

    // ===========================================================================================================================
    // Function Edit

    public function editMenu($id)
    {


        $data['title'] = 'Edit Menu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['settingWhite'] = $this->setting->settingWhite();
        $data['footer'] = $this->db->get('perusahaan')->result_array();

        $data['editMenu'] = $this->admin->editMenu($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit-menu', $data);
        $this->load->view('templates/footer', $data);
    }
    public function actionEditMenu()
    {
        $id = $this->input->post('id');
        $menu = $this->input->post('menu');
        $icon = $this->input->post('icon');

        $this->db->set('menu', $menu);
        $this->db->set('icon', $icon);
        $this->db->where('id', $id);
        $this->db->update('user_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Menu updated!</div>');
        redirect('admin/menu');
    }
    public function editSubMenu($id)
    {


        $data['title'] = 'Edit Submenu Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['settingWhite'] = $this->setting->settingWhite();
        $data['footer'] = $this->db->get('perusahaan')->result_array();

        $data['editSubMenu'] = $this->admin->editSubMenu($id);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit-submenu', $data);
        $this->load->view('templates/footer', $data);
    }
    public function actionEditSubMenu()
    {
        $id = $this->input->post('id');
        $menu_id = $this->input->post('menu_id');
        $title = $this->input->post('title');
        $url = $this->input->post('url');

        $this->db->set('menu_id', $menu_id);
        $this->db->set('title', $title);
        $this->db->set('url', $url);
        $this->db->where('id', $id);
        $this->db->update('user_sub_menu');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sub Menu updated!</div>');
        redirect('admin/submenu');
    }
    public function editMetode($id)
    {


        $data['title'] = 'Edit Metode Pembayaran';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['settingWhite'] = $this->setting->settingWhite();
        $data['footer'] = $this->db->get('perusahaan')->result_array();

        $data['editMetode'] = $this->admin->editMetode($id);

        $this->form_validation->set_rules('nama_rek', 'Atas Nama', 'required');
        $this->form_validation->set_rules('no_rek', 'No Rekening', 'required|numeric');
        $this->form_validation->set_rules('nama_bank', 'Nama Bank', 'required');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit-metode', $data);
            $this->load->view('templates/footer', $data);
        } else {
            $id = $this->input->post('id');
            $nama_rek = $this->input->post('nama_rek');
            $no_rek = $this->input->post('no_rek');
            $nama_bank = $this->input->post('nama_bank');

            $this->db->set('nama_rek', $nama_rek);
            $this->db->set('no_rek', $no_rek);
            $this->db->set('nama_bank', $nama_bank);
            $this->db->where('id', $id);
            $this->db->update('metode_pembayaran');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Metode pembayaran updated!</div>');
            redirect('admin/metode');
        }
    }
}
