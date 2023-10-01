-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Bulan Mei 2022 pada 14.29
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp_skanilan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbadmin`
--

CREATE TABLE `tbadmin` (
  `name` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbadmin`
--

INSERT INTO `tbadmin` (`name`, `pass`) VALUES
('rizal', 'admin'),
('niko', 'niko123'),
('rafif', 'rafif123'),
('rini', 'rini123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbakl`
--

CREATE TABLE `tbakl` (
  `kode_unit` varchar(20) NOT NULL,
  `judul_unit` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbakl`
--

INSERT INTO `tbakl` (`kode_unit`, `judul_unit`) VALUES
('M.692000.001.02', 'Menerapkan Prinsip Praktik Profesional dalam Bekerja'),
('M.692000.002.02', 'Menerapkan Praktik-Praktik Kesehatan dan Keselamatan di Tempat Kerja'),
('M.692000.007.02', 'Memproses Entry Jurnal'),
('M.692000.008.02', 'Memproses Buku Besar'),
('M.692000.013.02', 'Menyusun Laporan Keuangan'),
('M.69200.022.02', 'Mengoperasikan Paket Program Pengolah Angka/Spreadsheet'),
('M.692000.023.02', 'Mengoperasikan Aplikasi Komputer Akuntansi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbasesi`
--

CREATE TABLE `tbasesi` (
  `nama_lengkap` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nomor_HP` varchar(25) NOT NULL,
  `alamat_rumah` varchar(500) NOT NULL,
  `kompetensi_keahlian` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbasesi`
--

INSERT INTO `tbasesi` (`nama_lengkap`, `email`, `nomor_HP`, `alamat_rumah`, `kompetensi_keahlian`) VALUES
('Rizal Ahmad Maulana', 'rizalram100@gmail.com', '081215462920', 'JL Bayu Prasetya Timur Raya, RT 03, RW 07', 'Rekayasa Perangkat Lunak ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbasesor`
--

CREATE TABLE `tbasesor` (
  `nomor_registrasi` varchar(11) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `unit_kompetensi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbasesor`
--

INSERT INTO `tbasesor` (`nomor_registrasi`, `nama_lengkap`, `unit_kompetensi`) VALUES
('M1001', 'Rizal Ahmad Maulana', 'Rekayasa Perangkat Lunak'),
('M1002', 'Nicholas', 'Akuntasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbdp`
--

CREATE TABLE `tbbdp` (
  `kode_unit` varchar(20) NOT NULL,
  `judul_unit` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbbdp`
--

INSERT INTO `tbbdp` (`kode_unit`, `judul_unit`) VALUES
('KOP.RK01.001.01', 'Mempersiapkan diri untuk bekerja'),
('KOP.RK01.002.01', 'Berkomunikasi dengan target pelanggan'),
('KOP.RK01.003.01', 'Mengidentifikasi respon pelanggan'),
('KOP.RK01.004.01', 'Melaksanakan Pelayanan Pelanggan'),
('KOP.RK01.005.01', 'Melakukan Konfirmasi keputusan Pelanggan'),
('KOP.RK02.001.01	', 'Mengoperasikan Peralatan Transaksi di Lokasi Penjualan'),
('KOP.RK02.002.01', 'Melakukan Transaksi Penjualan dengan pelanggan Anggota maupun non anggota'),
('KOP.RK02.003.01', 'Melakukan Penyerahan Produk'),
('KOP.RK02.004.01', 'Melakukan Proses Administrasi Transaksi'),
('KOP.RK02.005.01', 'Melaksanakan dan Menjaga Kebersihan dan Ketertiban Lingkungan Kerja'),
('KOP.RK02.007.01', 'Melakukan Proses Administrasi Pengelolaan Produk'),
('KOP.RK02.008.01', 'Menemukan Peluang Baru dari Pelanggan'),
('KOP.RK02.011.01', 'Melakukan Stock opname'),
('KOP.RK02.012.01', 'Menata Produk'),
('KOP.RK02.013.01', 'Melakukan Rencana Pembelian Produk'),
('M.702090.001.01', 'Mengidentifikasi elemen pemasaran perusahaan'),
('M.702090.002.01', 'Melaksanakan komunikasi efektif'),
('M.702090.003.01', 'Melaksanakan penulisan bisnis (business writing)'),
('M.702090.004.01', 'Melakukan pendekatan kepada calon pelanggan potensial'),
('M.702090.005.01', 'Melaksanakan keterampilan penjualan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbcalendar`
--

CREATE TABLE `tbcalendar` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbjadwal`
--

CREATE TABLE `tbjadwal` (
  `hari` varchar(10) NOT NULL,
  `kegiatan` varchar(500) NOT NULL,
  `mulai_kegiatan` datetime NOT NULL,
  `akhir_kegiatan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbjadwal`
--

INSERT INTO `tbjadwal` (`hari`, `kegiatan`, `mulai_kegiatan`, `akhir_kegiatan`) VALUES
('Selasa', 'Magang', '2022-02-09 14:45:00', '2022-02-09 19:51:00'),
('Senin', 'Ujian Kompetensi Rekayasa Perangkat Lunak', '2022-02-08 08:30:00', '2022-02-08 16:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbotkp`
--

CREATE TABLE `tbotkp` (
  `kode_unit` varchar(20) NOT NULL,
  `judul_unit` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbotkp`
--

INSERT INTO `tbotkp` (`kode_unit`, `judul_unit`) VALUES
('N.821100.001.02', 'Menangani Penerimaan/ Pengiriman Surat/ Dokumen'),
('N.821100.004.02', 'Memproduksi Dokumen'),
('N.821100.028.02', 'Mengaplikasikan Keterampilan Dasar Komunikasi'),
('N.821100.029.02', 'Melakukan Komunikasi Melalui Telepon'),
('N.821100.030.02', 'Melakukan Komunikasi Lisan dengan Kolega/Pelanggan'),
('N.821100.032.02', 'Melakukan Komunikasi Lisan dalam Bahasa Inggris pada Tingkat Operasional Dasar'),
('N.821100.033.02', 'Membaca dalam Bahasa Inggris pada Tingkat Operasional Dasar'),
('N.821100.044.02', 'Menerapkan kerjasama dengan kolega/Pelanggan'),
('N.821100.046.02', 'Mengelola Layanan kepada Pelanggan'),
('N.821100.047.01', 'Menangani Konflik'),
('N.821100.048.01', 'Memproses Keluhan Pelanggan'),
('N.821100.051.01', 'Menerapkan Etika Profesi'),
('N.821100.054.01', 'Menggunakan Peralatan Komunikasi'),
('N.821100.053.02', 'Memproduksi Dokumen di Komputer'),
('N.821100.057.02', 'Mengoperasikan Aplikasi Perangkat Lunak'),
('N.821100.059.02', 'Menggunakan Peralatan dan Sumberdaya Kerja'),
('N.821100.067.01', 'Melakukan Transaksi Perbankan Sederhana'),
('N.821100.073.02', 'Mengelola Arsip'),
('N.821100.075.02', 'Menerapkan Prosedur K3 Perkantoran'),
('N.821100.076.02', 'Meminimalisir Pencurian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbrpl`
--

CREATE TABLE `tbrpl` (
  `kode_unit` varchar(20) NOT NULL,
  `judul_unit` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbrpl`
--

INSERT INTO `tbrpl` (`kode_unit`, `judul_unit`) VALUES
('LOG.OO01.002.01', 'Menerapkan prinsip-prinsip keselamatan dan kesehatan kerja di lingkungan kerja'),
('LOG.OO01.004.01', 'Merencanakan tugas rutin'),
('TIK.OP01.002.01', 'Mengidentifikasi aspek kode etik dan HAKI dibidang TIK'),
('J.620100.011.01', 'Melakukan Instalasi Software Tools Pemrograman'),
('J.620100.012.01', 'Melakukan Pengaturan Software Tools Pemrograman'),
('J.620100.017.01', 'Mengimplementasikan Pemrograman Terstruktur'),
('J.620100.022.02', 'Mengimplementasikan Algoritma Pemrograman'),
('J.620100.025.02', 'Melakukan Debugging'),
('LOG.OO01.001.01', 'Melakukan Komunikasi Kerja timbal balik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `name` varchar(500) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`name`, `pass`) VALUES
('rizal', 'admin'),
('niko', 'niko123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbasesor`
--
ALTER TABLE `tbasesor`
  ADD PRIMARY KEY (`nomor_registrasi`);

--
-- Indeks untuk tabel `tbcalendar`
--
ALTER TABLE `tbcalendar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbjadwal`
--
ALTER TABLE `tbjadwal`
  ADD PRIMARY KEY (`hari`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbcalendar`
--
ALTER TABLE `tbcalendar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
