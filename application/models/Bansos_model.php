<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bansos_model extends CI_Model
{
	// Rekap
	public function getRekapPertanian()
	{
		$query = "SELECT COUNT(*) as total FROM bantuan WHERE jenis_bantuan_id = 1 AND menerima = '1' GROUP BY jenis_bantuan_id";
		return $this->db->query($query)->result_array();
	}
	public function getRekapPertanian1()
	{
		$query = "SELECT COUNT(*) as total FROM bantuan WHERE jenis_bantuan_id = 1 AND menerima = 0 GROUP BY jenis_bantuan_id";
		return $this->db->query($query)->result_array();
	}
	public function getRekapPerikanan()
	{
		$query = "SELECT COUNT(*) as total FROM bantuan WHERE jenis_bantuan_id = 2 AND menerima = 1 GROUP BY jenis_bantuan_id";
		return $this->db->query($query)->result_array();
	}
	public function getRekapPerikanan1()
	{
		$query = "SELECT COUNT(*) as total FROM bantuan WHERE jenis_bantuan_id = 2 AND menerima = 0 GROUP BY jenis_bantuan_id";
		return $this->db->query($query)->result_array();
	}
	public function getRekapRaskin()
	{
		$query = "SELECT COUNT(*) as total FROM bantuan WHERE jenis_bantuan_id = 3 AND menerima = 1 GROUP BY jenis_bantuan_id";
		return $this->db->query($query)->result_array();
	}
	public function getRekapRaskin1()
	{
		$query = "SELECT COUNT(*) as total FROM bantuan WHERE jenis_bantuan_id = 3 AND menerima = 0 GROUP BY jenis_bantuan_id";
		return $this->db->query($query)->result_array();
	}
	public function getRekapGuru()
	{
		$query = "SELECT COUNT(*) as total FROM bantuan WHERE jenis_bantuan_id = 5 AND menerima = 1 GROUP BY jenis_bantuan_id";
		return $this->db->query($query)->result_array();
	}
	public function getRekapGuru1()
	{
		$query = "SELECT COUNT(*) as total FROM bantuan WHERE jenis_bantuan_id = 5 AND menerima = 0 GROUP BY jenis_bantuan_id";
		return $this->db->query($query)->result_array();
	}
	public function getRekapImam()
	{
		$query = "SELECT COUNT(*) as total FROM bantuan WHERE jenis_bantuan_id = 6 AND menerima = 1 GROUP BY jenis_bantuan_id";
		return $this->db->query($query)->result_array();
	}
	public function getRekapImam1()
	{
		$query = "SELECT COUNT(*) as total FROM bantuan WHERE jenis_bantuan_id = 6 AND menerima = 0 GROUP BY jenis_bantuan_id";
		return $this->db->query($query)->result_array();
	}
	public function getRekapJenazah()
	{
		$query = "SELECT COUNT(*) as total FROM bantuan WHERE jenis_bantuan_id = 7 AND menerima = 1 GROUP BY jenis_bantuan_id";
		return $this->db->query($query)->result_array();
	}
	public function getRekapJenazah1()
	{
		$query = "SELECT COUNT(*) as total FROM bantuan WHERE jenis_bantuan_id = 7 AND menerima = 0 GROUP BY jenis_bantuan_id";
		return $this->db->query($query)->result_array();
	}
	public function getRekapMakam()
	{
		$query = "SELECT COUNT(*) as total FROM bantuan WHERE jenis_bantuan_id = 8 AND menerima = 1 GROUP BY jenis_bantuan_id";
		return $this->db->query($query)->result_array();
	}
	public function getRekapMakam1()
	{
		$query = "SELECT COUNT(*) as total FROM bantuan WHERE jenis_bantuan_id = 8 AND menerima = 0 GROUP BY jenis_bantuan_id";
		return $this->db->query($query)->result_array();
	}
	public function getRekapPhk()
	{
		$query = "SELECT COUNT(*) as total FROM bantuan WHERE jenis_bantuan_id = 4 AND menerima = 1 GROUP BY jenis_bantuan_id";
		return $this->db->query($query)->result_array();
	}
	public function getRekapPhk1()
	{
		$query = "SELECT COUNT(*) as total FROM bantuan WHERE jenis_bantuan_id = 4 AND menerima = 0 GROUP BY jenis_bantuan_id";
		return $this->db->query($query)->result_array();
	}
	// Informasi
	public function getNews()
	{
		$query = "SELECT news.*, jenis_bantuan.nama_bantuan FROM news JOIN jenis_bantuan ON news.jenis_bantuan_id = jenis_bantuan.id   ORDER BY news.date_created ASC";
		return $this->db->query($query)->result_array();
	}
	public function editNews($id)
	{
		$query = "SELECT news.*, jenis_bantuan.nama_bantuan FROM news JOIN jenis_bantuan ON news.jenis_bantuan_id = jenis_bantuan.id WHERE news.id = '$id'   ORDER BY news.date_created DESC";
		return $this->db->query($query)->result_array();
	}
	// Dashboard
	public function getTotal()
	{
		// MENAMPILKAN DATA YANG AKTIF SAJA
		// $query = "SELECT bantuan.jenis_bantuan_id, jenis_bantuan.*, COUNT(*) as total FROM jenis_bantuan INNER JOIN bantuan ON jenis_bantuan.id = bantuan.jenis_bantuan_id WHERE bantuan.is_active = 1 GROUP BY id ASC";
		// MENAMPILKAN DATA YG TIDAK AKTIF
		// $query = "SELECT bantuan.jenis_bantuan_id, jenis_bantuan.*, COUNT(*) as total FROM jenis_bantuan INNER JOIN bantuan ON jenis_bantuan.id = bantuan.jenis_bantuan_id  GROUP BY id ASC";

		// MENAMPILKAN HITUNGAN DATA DAN KONFIRMASI DARI LURAH
		$query = "SELECT bantuan.jenis_bantuan_id, jenis_bantuan.*, COUNT(*) as total, menerima FROM jenis_bantuan LEFT JOIN bantuan ON jenis_bantuan.id = bantuan.jenis_bantuan_id AND menerima = 1 GROUP BY id ASC";

		return $this->db->query($query)->result_array();
	}
	public function getCalonPenerima()
	{
		$query = "SELECT bantuan.*, jenis_bantuan.nama_bantuan FROM bantuan JOIN jenis_bantuan ON bantuan.jenis_bantuan_id = jenis_bantuan.id WHERE bantuan.is_active = 0 ORDER BY bantuan.nik ASC";
		return $this->db->query($query)->result_array();
	}


	// Bantuan
	public function getBantuan()
	{
		$query = "SELECT * FROM jenis_bantuan ORDER BY id DESC ";
		return $this->db->query($query)->result_array();
	}
	public function editBantuan($slug_bantuan)
	{
		$query = "SELECT * FROM jenis_bantuan WHERE slug_bantuan = '$slug_bantuan' ";
		return $this->db->query($query)->result_array();
	}

	// Pendaftaran
	public function getPendaftaran($slug_bantuan)
	{
		$query = "SELECT * FROM jenis_bantuan WHERE slug_bantuan = '$slug_bantuan' ";
		return $this->db->query($query)->result_array();
	}

	// Search 
	public function getSearch($keyword)
	{
		$this->db->from('bantuan');
		$this->db->select('*');
		$this->db->like('nik', $keyword);
		$this->db->or_like('nama', $keyword);
		return $this->db->get()->result();
	}

	// Penerima

	public function getDataPenerima()
	{
		// $query = "SELECT bantuan.*, jenis_bantuan.nama_bantuan FROM bantuan JOIN jenis_bantuan ON bantuan.jenis_bantuan_id = jenis_bantuan.id WHERE bantuan.is_active = 1 ORDER BY bantuan.nik ASC";
		$query = "SELECT bantuan.*, jenis_bantuan.nama_bantuan FROM bantuan JOIN jenis_bantuan ON bantuan.jenis_bantuan_id = jenis_bantuan.id ORDER BY bantuan.nik ASC";
		return $this->db->query($query)->result_array();
	}
	public function getDataPenerimaLurah()
	{
		$query = "SELECT bantuan.*, jenis_bantuan.nama_bantuan FROM bantuan JOIN jenis_bantuan ON bantuan.jenis_bantuan_id = jenis_bantuan.id WHERE bantuan.acc_staff = 1 AND bantuan.menerima = 0 ORDER BY bantuan.nik ASC";
		return $this->db->query($query)->result_array();
	}
	public function getDataPenerimaAccLurah()
	{
		$query = "SELECT bantuan.*, jenis_bantuan.nama_bantuan FROM bantuan JOIN jenis_bantuan ON bantuan.jenis_bantuan_id = jenis_bantuan.id WHERE bantuan.acc_staff = 1 AND bantuan.menerima = 1 ORDER BY bantuan.nik ASC";
		return $this->db->query($query)->result_array();
	}
	public function getDataPenerimaStaff()
	{
		$query = "SELECT bantuan.*, jenis_bantuan.nama_bantuan FROM bantuan JOIN jenis_bantuan ON bantuan.jenis_bantuan_id = jenis_bantuan.id WHERE bantuan.acc_staff=0 ORDER BY bantuan.nik ASC";
		return $this->db->query($query)->result_array();
	}
	public function getDataPenerimaAccStaff()
	{
		$query = "SELECT bantuan.*, jenis_bantuan.nama_bantuan FROM bantuan JOIN jenis_bantuan ON bantuan.jenis_bantuan_id = jenis_bantuan.id WHERE bantuan.acc_staff=1 ORDER BY bantuan.nik ASC";
		return $this->db->query($query)->result_array();
	}
	public function getPerikanan()
	{
		$query = "SELECT bantuan.*, jenis_bantuan.nama_bantuan FROM bantuan JOIN jenis_bantuan ON bantuan.jenis_bantuan_id = jenis_bantuan.id WHERE bantuan.jenis_bantuan_id = 2 AND bantuan.is_active = 0 ORDER BY bantuan.nik ASC";
		return $this->db->query($query)->result_array();
	}
	public function getPertanian()
	{
		$query = "SELECT bantuan.*, jenis_bantuan.nama_bantuan FROM bantuan JOIN jenis_bantuan ON bantuan.jenis_bantuan_id = jenis_bantuan.id WHERE bantuan.jenis_bantuan_id = 1 AND bantuan.is_active = 0 ORDER BY bantuan.nik ASC";
		return $this->db->query($query)->result_array();
	}
	public function getRaskin()
	{
		$query = "SELECT bantuan.*, jenis_bantuan.nama_bantuan FROM bantuan JOIN jenis_bantuan ON bantuan.jenis_bantuan_id = jenis_bantuan.id WHERE bantuan.jenis_bantuan_id = 3 AND bantuan.is_active = 0 ORDER BY bantuan.nik ASC";
		return $this->db->query($query)->result_array();
	}
	public function getPkh()
	{
		$query = "SELECT bantuan.*, jenis_bantuan.nama_bantuan FROM bantuan JOIN jenis_bantuan ON bantuan.jenis_bantuan_id = jenis_bantuan.id WHERE bantuan.jenis_bantuan_id = 4 AND bantuan.is_active = 0 ORDER BY bantuan.nik ASC";
		return $this->db->query($query)->result_array();
	}
	public function getGuru()
	{
		$query = "SELECT bantuan.*, jenis_bantuan.nama_bantuan FROM bantuan JOIN jenis_bantuan ON bantuan.jenis_bantuan_id = jenis_bantuan.id WHERE bantuan.jenis_bantuan_id = 5 AND bantuan.is_active = 0 ORDER BY bantuan.nik ASC";
		return $this->db->query($query)->result_array();
	}
	public function getImam()
	{
		$query = "SELECT bantuan.*, jenis_bantuan.nama_bantuan FROM bantuan JOIN jenis_bantuan ON bantuan.jenis_bantuan_id = jenis_bantuan.id WHERE bantuan.jenis_bantuan_id = 6 AND bantuan.is_active = 0 ORDER BY bantuan.nik ASC";
		return $this->db->query($query)->result_array();
	}
	public function getJenaza()
	{
		$query = "SELECT bantuan.*, jenis_bantuan.nama_bantuan FROM bantuan JOIN jenis_bantuan ON bantuan.jenis_bantuan_id = jenis_bantuan.id WHERE bantuan.jenis_bantuan_id = 7 AND bantuan.is_active = 0 ORDER BY bantuan.nik ASC";
		return $this->db->query($query)->result_array();
	}
	public function getKuburan()
	{
		$query = "SELECT bantuan.*, jenis_bantuan.nama_bantuan FROM bantuan JOIN jenis_bantuan ON bantuan.jenis_bantuan_id = jenis_bantuan.id WHERE bantuan.jenis_bantuan_id = 8 AND bantuan.is_active = 0 ORDER BY bantuan.nik ASC";
		return $this->db->query($query)->result_array();
	}

	// get data edit
	public function getDataEdit($nik)
	{
		$query = "SELECT * FROM bantuan WHERE nik = '$nik'";
		return $this->db->query($query)->result_array();
	}
}
