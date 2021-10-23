<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                  ORDER BY `user_sub_menu`.`menu_id` ASC
                ";
        return $this->db->query($query)->result_array();
    }
    public function getUser()
    {
        $query = "SELECT `user`.*, `user_role`.`role`
                  FROM `user` JOIN `user_role`
                  ON `user`.`role_id` = `user_role`.`id`
                  WHERE `user`.`role_id` > '1'
                  ORDER BY `user`.`role_id` ASC
                ";
        return $this->db->query($query)->result_array();
    }
    public function editMenu($id)
    {
        $query = "SELECT * FROM user_menu WHERE id = '$id'";
        return $this->db->query($query)->result_array();
    }
    public function editSubMenu($id)
    {
        $query = "SELECT user_sub_menu.*, user_menu.menu FROM user_sub_menu join user_menu on user_sub_menu.menu_id = user_menu.id WHERE user_sub_menu.id = '$id'";
        return $this->db->query($query)->result_array();
    }
    public function editMetode($id)
    {
        $query = "SELECT * FROM metode_pembayaran WHERE id = '$id'";
        return $this->db->query($query)->result_array();
    }
    public function getTotalPenyuluh()
    {
        $query = "SELECT COUNT(*) as totalPenyuluh FROM user WHERE role_id = 2   ";
        return $this->db->query($query)->result_array();
    }
    public function getTotalTani()
    {
        $query = "SELECT COUNT(*) as totalTani FROM user WHERE role_id = 3   ";
        return $this->db->query($query)->result_array();
    }
    public function getTotalDesa()
    {
        $query = "SELECT COUNT(*) as totalDesa FROM desa   ";
        return $this->db->query($query)->result_array();
    }
    public function getTotalKeluhan()
    {
        $query = "SELECT COUNT(*) as totalKeluhan FROM keluhan   ";
        return $this->db->query($query)->result_array();
    }
    public function getJadwal()
    {
        $query = "SELECT * FROM jadwal_penyuluh WHERE selesai = 0 ORDER BY tanggal ASC   ";
        return $this->db->query($query)->result_array();
    }
    public function getKeluhan()
    {
        $query = "SELECT * FROM keluhan  ORDER BY tanggal ASC   ";
        return $this->db->query($query)->result_array();
    }
}
