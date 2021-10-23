-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Okt 2021 pada 11.42
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bansos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bantuan`
--

CREATE TABLE `bantuan` (
  `id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `jkl` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `pekerjaan` varchar(128) DEFAULT NULL,
  `penghasilan` int(11) DEFAULT NULL,
  `jml_tanggungan` int(11) NOT NULL,
  `jml_anak` int(11) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `jenis_bantuan_id` int(11) NOT NULL,
  `lahan_kontrak` varchar(50) DEFAULT NULL,
  `lahan_pribadi` varchar(50) DEFAULT NULL,
  `rumah` varchar(50) DEFAULT NULL,
  `old_pekerjaan` varchar(128) DEFAULT NULL,
  `nganggur` varchar(128) DEFAULT NULL,
  `lama_bekerja` varchar(128) DEFAULT NULL,
  `is_active` int(11) NOT NULL,
  `menerima` int(11) NOT NULL,
  `acc_staff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bantuan`
--

INSERT INTO `bantuan` (`id`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `jkl`, `status`, `pekerjaan`, `penghasilan`, `jml_tanggungan`, `jml_anak`, `alamat`, `jenis_bantuan_id`, `lahan_kontrak`, `lahan_pribadi`, `rumah`, `old_pekerjaan`, `nganggur`, `lama_bekerja`, `is_active`, `menerima`, `acc_staff`) VALUES
(1, '7371100108980006', 'Aswandi B', 'Ujung Pandang', '2021-10-12', 'Pria', 'Menikah', 'Mahasiswa', 10000000, 5, 4, 'Jln. Swadaya Komp. Veteran', 1, '25', '10', NULL, NULL, NULL, NULL, 0, 0, 0),
(2, '737110010898000', 'Baso Mawar', 'Ujung Pandang', '2021-10-06', 'Pria', 'Menikah', 'Mahasiswa', 10000000, 5, 4, 'Jln. Swadaya Komp. Veteran', 3, NULL, '10', 'Kayu', NULL, NULL, NULL, 0, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_bantuan`
--

CREATE TABLE `jenis_bantuan` (
  `id` int(11) NOT NULL,
  `nama_bantuan` varchar(256) NOT NULL,
  `slug_bantuan` varchar(256) NOT NULL,
  `jml_penerima` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `persyaratan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_bantuan`
--

INSERT INTO `jenis_bantuan` (`id`, `nama_bantuan`, `slug_bantuan`, `jml_penerima`, `is_active`, `image`, `persyaratan`) VALUES
(1, 'Bantuan Pertanian', 'bantuan-pertanian', 1, 0, 'logo_pertanian.png', ''),
(2, 'Bantuan Perikanan', 'bantuan-perikanan', 1, 1, 'logo_perikanan.png', ''),
(3, 'Bantuan RASKIN', 'bantuan-raskin', 1, 1, 'logo_raskin.png', ''),
(4, 'Bantuan PHK', 'bantuan-phk', 1, 1, 'logo_phk.png', ''),
(5, 'Bantuan Guru Mengaji', 'bantuan-guru-mengaji', 1, 1, 'logo_guru_mengaji.png', ''),
(6, 'Bantuan Imam Masjid', 'bantuan-imam-masjid', 1, 1, 'logo_imam_masjid.png', ''),
(7, 'Bantuan Pemandi Jenazah', 'bantuan-pemandi-jenazah', 1, 1, 'logo_pemandi_mayat.png', ''),
(8, 'Bantuan Pembersih Makam', 'bantuan-pembersih-makam', 1, 1, 'logo_pembersih_makam.png', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_bantuan`
--

CREATE TABLE `kriteria_bantuan` (
  `id` int(11) NOT NULL,
  `bantuan_kode` varchar(50) NOT NULL,
  `value_1` varchar(256) NOT NULL,
  `value_2` varchar(256) NOT NULL,
  `value_3` varchar(256) NOT NULL,
  `value_4` varchar(256) NOT NULL,
  `value_5` varchar(256) NOT NULL,
  `value_6` varchar(256) NOT NULL,
  `value_7` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis_bantuan_id` int(11) NOT NULL,
  `date_created` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `title`, `deskripsi`, `jenis_bantuan_id`, `date_created`, `image`) VALUES
(2, 'Penyaluran Bantuan Tahap Pertama', 'Wajib membawa KTP Asli/Fotocopy atau KK asli/Fotocopy', 3, '11 September 2021', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(256) NOT NULL,
  `bidang` varchar(128) NOT NULL,
  `alamat_perusahaan` varchar(256) NOT NULL,
  `kota` varchar(128) NOT NULL,
  `telp` varchar(16) NOT NULL,
  `image` varchar(256) NOT NULL,
  `fb` varchar(256) NOT NULL,
  `instagram` varchar(256) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama_perusahaan`, `bidang`, `alamat_perusahaan`, `kota`, `telp`, `image`, `fb`, `instagram`, `email`) VALUES
(1, 'Bantuan Sosial', 'Bansos', 'Jln. Swadaya Komp. Veteran', 'Pangkep', '082159171114', 'logo_bansos.png', 'aswandi', 'aswandi', 'aswandi@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `setting`
--

INSERT INTO `setting` (`id`, `image`, `is_active`) VALUES
(1, 'login-page-img.png', 1),
(2, 'register-page-img.png', 1),
(3, 'logo_bansos12.png', 1),
(4, 'logo_bansos1.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `address` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `telp`, `address`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Admin', 'admin@gmail.com', 'default.jpg', '$2y$10$.VktElhCBLghl9FsoUvkp.Q1ONNweZdYN0hYKEpciF8L3NVzBr/ma', '', '', 1, 1, 1628930731),
(21, 'Lurah', 'lurah@gmail.com', 'default.jpg', '$2y$10$6VE1twcjPmOcdg1qb66R8ubhVCu/jYuHW9ttIJ7brXFV5GCJjzfTS', '', '', 2, 1, 1633079770),
(22, 'Bansos', 'bansos@gmail.com', 'default.jpg', '$2y$10$drLOegF6vPXJJmtqgAAVoeHvmtbNfhyyy//kizkrY1BHp/Crm7Jwe', '', '', 3, 1, 1633079792),
(23, 'Staff', 'staff@gmail.com', 'default.jpg', '$2y$10$AVcJv2fiOxShSxIpkpwVEehr5HzMgWnqTk6KaEBlpMdJvUvAvkbXG', '', '', 4, 1, 1633079809);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 18),
(4, 1, 19),
(5, 1, 20),
(6, 1, 21),
(7, 1, 22),
(8, 2, 20),
(9, 2, 2),
(10, 2, 19),
(11, 2, 21),
(12, 4, 2),
(13, 4, 19),
(14, 4, 20),
(15, 4, 21),
(16, 3, 2),
(17, 3, 19),
(18, 3, 20),
(19, 3, 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `icon`) VALUES
(1, 'Admin', 'dw-analytics-9'),
(2, 'User', 'dw-user1'),
(18, 'Bantuan', 'icon-copy dw dw-analytics-8\"'),
(19, 'Penerima', 'icon-copy dw dw-id-card2'),
(20, 'Informasi', 'icon-copy dw dw-lighthouse'),
(21, 'Rekap', 'icon-copy dw dw-notepad-2'),
(22, 'Settings', 'dw');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Lurah'),
(3, 'Bansos'),
(4, 'Staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 0),
(2, 1, 'Role', 'admin/role', 1),
(3, 1, 'Menu Management', 'admin/menu', 1),
(4, 1, 'Submenu Management', 'admin/submenu', 1),
(5, 2, 'My Profile', 'user', 1),
(6, 2, 'Change Password', 'user/changepassword', 1),
(8, 1, 'Icons', 'admin/icon', 1),
(48, 18, 'Jenis Bantuan', 'bantuan', 1),
(49, 19, 'Data Penerima', 'penerima/datapenerima', 1),
(50, 19, 'B Pertanian', 'penerima/pertanian', 1),
(51, 19, 'B Perikanan', 'penerima/perikanan', 1),
(52, 19, 'B Raskin', 'penerima/raskin', 1),
(53, 19, 'B Guru Mengaji', 'penerima/guru', 1),
(54, 19, 'B Imam Masjid', 'penerima/imam', 1),
(55, 19, 'B Pemandi Jenaza', 'penerima/pjenaza', 1),
(56, 19, 'B Pembersih Kuburan', 'penerima/makam', 1),
(57, 19, 'B PKH', 'penerima/pkh', 1),
(58, 1, 'Data User', 'admin/user', 1),
(59, 20, 'Data Informasi', 'informasi', 1),
(60, 21, 'Data Rekap', 'rekap', 1),
(61, 22, 'Admin Setting', 'settings/admin', 1),
(62, 22, 'Auth Setting', 'settings/auth', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_bantuan`
--
ALTER TABLE `jenis_bantuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriteria_bantuan`
--
ALTER TABLE `kriteria_bantuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bantuan`
--
ALTER TABLE `bantuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jenis_bantuan`
--
ALTER TABLE `jenis_bantuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kriteria_bantuan`
--
ALTER TABLE `kriteria_bantuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
