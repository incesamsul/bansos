<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting_model extends CI_Model
{
    public function pesanNotif()
    {
        $query = "SELECT notifikasi.*, barang.nama_barang, barang.image, barang.stok_barang, barang.satuan FROM notifikasi JOIN barang ON notifikasi.barang_kode = barang.kode_barang ";
        return $this->db->query($query)->result_array();
    }
    public function settingLogin()
    {
        $query = "SELECT * FROM setting WHERE id = '1'";
        return $this->db->query($query)->result_array();
    }
    public function settingRegister()
    {
        $query = "SELECT * FROM setting WHERE id = '2'";
        return $this->db->query($query)->result_array();
    }
    public function settingWhite()
    {
        $query = "SELECT * FROM setting WHERE id = '3'";
        return $this->db->query($query)->result_array();
    }
    public function settingBlack()
    {
        $query = "SELECT * FROM setting WHERE id = '4'";
        return $this->db->query($query)->result_array();
    }
    public function settingPerusahaan()
    {
        $query = "SELECT * FROM perusahaan WHERE id = '1'";
        return $this->db->query($query)->result_array();
    }
    public function getBannerHome()
    {
        $query = "SELECT * FROM banner WHERE is_active = '1' LIMIT 1";
        return $this->db->query($query)->result_array();
    }
    public function editBanner($id)
    {
        $query = "SELECT * FROM banner WHERE id = '$id'";
        return $this->db->query($query)->result_array();
    }
}
