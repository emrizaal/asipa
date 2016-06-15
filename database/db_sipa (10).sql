-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 15. Juni 2016 jam 06:04
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sipa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat`
--

CREATE TABLE IF NOT EXISTS `alat` (
  `ID_ALAT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_JURUSAN` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_LOKASI` int(11) DEFAULT NULL,
  `ID_PAKET` int(11) DEFAULT NULL,
  `ID_FASE` int(11) DEFAULT NULL,
  `ID_USULAN` int(11) DEFAULT NULL,
  `NAMA_ALAT` varchar(50) DEFAULT NULL,
  `SPESIFIKASI` longtext,
  `SETARA` longtext,
  `SATUAN` varchar(20) DEFAULT NULL,
  `JUMLAH_ALAT` decimal(8,0) DEFAULT NULL,
  `HARGA_SATUAN` decimal(8,0) DEFAULT NULL,
  `JUMLAH_DISTRIBUSI` decimal(8,0) DEFAULT NULL,
  `KONFIRMASI` longtext,
  `REFERENSI_TERKAIT` longtext,
  `DATA_AHLI` smallint(6) DEFAULT NULL,
  `REVISI` decimal(8,0) NOT NULL DEFAULT '0',
  `PRIORITY` varchar(3) NOT NULL,
  `TANGGAL_UPDATE` datetime NOT NULL,
  `ID_KATEGORI` int(11) NOT NULL,
  `NO_INVENTARIS` varchar(50) NOT NULL,
  `IS_FINAL` tinyint(1) NOT NULL DEFAULT '0',
  `REVISI_PAKET` int(11) NOT NULL,
  PRIMARY KEY (`ID_ALAT`),
  KEY `FK_RELATIONSHIP_10` (`ID_LOKASI`),
  KEY `FK_RELATIONSHIP_16` (`ID_FASE`),
  KEY `FK_RELATIONSHIP_18` (`ID_JURUSAN`),
  KEY `FK_RELATIONSHIP_26` (`ID_PAKET`),
  KEY `FK_RELATIONSHIP_29` (`ID_USULAN`),
  KEY `FK_RELATIONSHIP_6` (`ID_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `alat`
--

INSERT INTO `alat` (`ID_ALAT`, `ID_JURUSAN`, `ID_USER`, `ID_LOKASI`, `ID_PAKET`, `ID_FASE`, `ID_USULAN`, `NAMA_ALAT`, `SPESIFIKASI`, `SETARA`, `SATUAN`, `JUMLAH_ALAT`, `HARGA_SATUAN`, `JUMLAH_DISTRIBUSI`, `KONFIRMASI`, `REFERENSI_TERKAIT`, `DATA_AHLI`, `REVISI`, `PRIORITY`, `TANGGAL_UPDATE`, `ID_KATEGORI`, `NO_INVENTARIS`, `IS_FINAL`, `REVISI_PAKET`) VALUES
(17, 1, 1, 2, NULL, 1, 9, 'PC', 'aa', 'aaa', 'Unit', 1, 100000, 1, NULL, 'sales.php', 1, 0, '1', '2016-06-15 10:52:31', 1, '', 1, 0),
(18, 1, 2, 1, NULL, 1, 10, 'alat', '11', 'a', 'Unit', 1, 10000, 1, NULL, 'sales1.php', 1, 0, '1', '2016-06-15 10:54:26', 2, '', 1, 0),
(19, 1, 3, 1, NULL, 1, 11, 'alat ini', '1', '1', 'Unit', 1, 1000000, 1, NULL, 'sales2.php', 1, 0, '1', '2016-06-15 10:56:19', 8, '', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bast`
--

CREATE TABLE IF NOT EXISTS `bast` (
  `ID_BAST` int(11) NOT NULL AUTO_INCREMENT,
  `NO_DOK` varchar(50) DEFAULT NULL,
  `TANGGAL_DOK` date DEFAULT NULL,
  `NAMA_PPK` varchar(50) DEFAULT NULL,
  `NAMA_DIREKTUR` varchar(50) DEFAULT NULL,
  `NAMA_PENYEDIA` varchar(50) DEFAULT NULL,
  `TEMPAT_KEDUDUKAN_PENYEDIA` varchar(50) DEFAULT NULL,
  `NO_AKTA_NOTARIS` varchar(50) DEFAULT NULL,
  `TANGGAL_AKTA_NOTARIS` date DEFAULT NULL,
  `NAMA_NOTARIS` varchar(50) DEFAULT NULL,
  `TOTAL_HARGA_KONTRAK` decimal(8,0) DEFAULT NULL,
  `NAMA_WAKIL_SAH_PARA_PIHAK` varchar(50) DEFAULT NULL,
  `WAKTU_DIMULAINYA_PERKERJAAN_PENGADAAN_BARANG` varchar(50) DEFAULT NULL,
  `JANGKA_WAKTU_PENYELESAIAN_PEKERJAAN` varchar(50) DEFAULT NULL,
  `NAMA_DAN_NO_REKENING_PEMBAYARAN_PRESTASI` varchar(50) DEFAULT NULL,
  `TAHUN_ANGGARAN_DIPA` varchar(4) DEFAULT NULL,
  `NO_DIPA` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_BAST`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukti_penerimaan`
--

CREATE TABLE IF NOT EXISTS `bukti_penerimaan` (
  `ID_BUKTI` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PAKET` int(11) DEFAULT NULL,
  `TANGGAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `FILE` text,
  `KETERANGAN` tinytext,
  PRIMARY KEY (`ID_BUKTI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `deadline`
--

CREATE TABLE IF NOT EXISTS `deadline` (
  `ID_FASE` int(11) NOT NULL,
  `WAKTU_PELAKSANAAN` int(11) NOT NULL,
  `WAKTU_TAMBAHAN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `deadline`
--

INSERT INTO `deadline` (`ID_FASE`, `WAKTU_PELAKSANAAN`, `WAKTU_TAMBAHAN`) VALUES
(1, 30, 16),
(2, 10, 4),
(3, 30, 15),
(4, 7, 3),
(5, 9, 9),
(6, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fase`
--

CREATE TABLE IF NOT EXISTS `fase` (
  `ID_FASE` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_FASE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_FASE`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `fase`
--

INSERT INTO `fase` (`ID_FASE`, `NAMA_FASE`) VALUES
(1, 'Pengajuan'),
(2, 'VerifikasiHPS'),
(3, 'Pengadaan'),
(4, 'PenetapanKontrak'),
(5, 'Penerimaan'),
(6, 'Pencatatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_user`
--

CREATE TABLE IF NOT EXISTS `jenis_user` (
  `ID_JENIS_USER` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_JENIS_USER` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_JENIS_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data untuk tabel `jenis_user`
--

INSERT INTO `jenis_user` (`ID_JENIS_USER`, `NAMA_JENIS_USER`) VALUES
(1, 'Teknisi'),
(2, 'Kepala Lab'),
(3, 'Manajemen'),
(4, 'Pembantu Direktur 2'),
(5, 'PPK'),
(6, 'Tim HPS'),
(7, 'ULP'),
(8, 'Tim Penerima'),
(9, 'PPSPM'),
(10, 'Direktur'),
(99, 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `ID_JURUSAN` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_JURUSAN` varchar(50) DEFAULT NULL,
  `INISIAL` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_JURUSAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`ID_JURUSAN`, `NAMA_JURUSAN`, `INISIAL`) VALUES
(0, NULL, NULL),
(1, 'Teknik Komputer dan Informatika', 'JTK'),
(2, 'Administrasi Niaga', 'AN'),
(3, 'Teknik Sipil', 'Sipil'),
(4, 'Teknik Mesin', 'Mesin'),
(5, 'Teknik Refrigerasi dan Tata Udara', 'Refri'),
(6, 'Teknik Konversi Energi', 'Energi'),
(7, 'Teknik Elektro', 'JTE'),
(8, 'Teknik Kimia', 'KI'),
(9, 'Akuntansi', 'Akun'),
(10, 'Bahasa Inggris', 'BI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `ID_KATEGORI` int(11) NOT NULL AUTO_INCREMENT,
  `KATEGORI` varchar(150) NOT NULL,
  `KETERANGAN` text NOT NULL,
  PRIMARY KEY (`ID_KATEGORI`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`ID_KATEGORI`, `KATEGORI`, `KETERANGAN`) VALUES
(1, 'Bahan Kimia', ''),
(2, 'Alat Berat', ''),
(3, 'Kendaraan Bermotor', ''),
(4, 'Alat Kebersihan', ''),
(5, 'Material Konstruksi', ''),
(6, 'Tata Lingkungan', ''),
(7, 'Internet Service Provider', ''),
(8, 'Komunikasi & Informatika', ''),
(9, 'Peralatan Kantor', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontrak`
--

CREATE TABLE IF NOT EXISTS `kontrak` (
  `ID_KONTRAK` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PAKET` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `KETERANGAN` longtext,
  `FILE` longtext,
  PRIMARY KEY (`ID_KONTRAK`),
  KEY `FK_RELATIONSHIP_24` (`ID_USER`),
  KEY `FK_RELATIONSHIP_25` (`ID_PAKET`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `ID_LOKASI` int(11) NOT NULL AUTO_INCREMENT,
  `ID_JURUSAN` int(11) DEFAULT NULL,
  `NAMA_LOKASI` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_LOKASI`),
  KEY `FK_RELATIONSHIP_15` (`ID_JURUSAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`ID_LOKASI`, `ID_JURUSAN`, `NAMA_LOKASI`) VALUES
(1, 1, 'RSG'),
(2, 1, 'Lab. RPL'),
(3, 2, 'Lab Bisnis'),
(4, 2, 'Ruang Rapat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pagu`
--

CREATE TABLE IF NOT EXISTS `pagu` (
  `ID_PAGU` int(11) NOT NULL AUTO_INCREMENT,
  `ID_JURUSAN` int(11) DEFAULT NULL,
  `PAGU_ALAT` int(11) DEFAULT NULL,
  `TAHUN_ANGGARAN` char(4) DEFAULT NULL,
  `TANGGAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TANGGAL_MULAI` date NOT NULL,
  PRIMARY KEY (`ID_PAGU`),
  KEY `FK_RELATIONSHIP_17` (`ID_JURUSAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data untuk tabel `pagu`
--

INSERT INTO `pagu` (`ID_PAGU`, `ID_JURUSAN`, `PAGU_ALAT`, `TAHUN_ANGGARAN`, `TANGGAL`, `TANGGAL_MULAI`) VALUES
(41, 1, 10000000, '2016', '2016-06-15 03:51:26', '2016-06-15'),
(42, 2, 4000000, '2016', '2016-06-15 03:51:26', '2016-06-15'),
(43, 3, 0, '2016', '2016-06-15 03:51:26', '2016-06-15'),
(44, 4, 0, '2016', '2016-06-15 03:51:26', '2016-06-15'),
(45, 5, 0, '2016', '2016-06-15 03:51:26', '2016-06-15'),
(46, 6, 0, '2016', '2016-06-15 03:51:26', '2016-06-15'),
(47, 7, 0, '2016', '2016-06-15 03:51:26', '2016-06-15'),
(48, 8, 0, '2016', '2016-06-15 03:51:26', '2016-06-15'),
(49, 9, 0, '2016', '2016-06-15 03:51:26', '2016-06-15'),
(50, 10, 0, '2016', '2016-06-15 03:51:26', '2016-06-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
  `ID_PAKET` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_TEAM_PENERIMA` int(11) DEFAULT NULL,
  `ID_TEAM_HPS` int(11) DEFAULT NULL,
  `NAMA_PAKET` longtext,
  `STATUS` smallint(6) DEFAULT NULL,
  `TANGGAL_DIBUAT` datetime NOT NULL,
  `TAHUN_ANGGARAN` char(4) DEFAULT NULL,
  `TOTAL_ANGGARAN` int(11) DEFAULT NULL,
  `LAST_UPDATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TENDER_A` varchar(50) NOT NULL,
  `NAMA_A` varchar(55) NOT NULL,
  `NPWP_A` varchar(40) NOT NULL,
  `ALAMAT_A` text NOT NULL,
  `TENDER_B` varchar(50) NOT NULL,
  `NAMA_B` varchar(55) NOT NULL,
  `NPWP_B` varchar(40) NOT NULL,
  `ALAMAT_B` text NOT NULL,
  `TENDER_C` varchar(50) NOT NULL,
  `NAMA_C` varchar(55) NOT NULL,
  `NPWP_C` varchar(40) NOT NULL,
  `ALAMAT_C` text NOT NULL,
  `KETERANGAN_GAGAL_KONTRAK` text NOT NULL,
  `PENYEDIA` varchar(50) NOT NULL,
  `WAKTU_PENGADAAN` varchar(50) NOT NULL,
  `ID_KATEGORI` int(11) NOT NULL,
  `STATUS_BAYAR` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_PAKET`),
  KEY `FK_RELATIONSHIP_2` (`ID_TEAM_HPS`),
  KEY `FK_RELATIONSHIP_3` (`ID_TEAM_PENERIMA`),
  KEY `FK_RELATIONSHIP_4` (`ID_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`ID_PAKET`, `ID_USER`, `ID_TEAM_PENERIMA`, `ID_TEAM_HPS`, `NAMA_PAKET`, `STATUS`, `TANGGAL_DIBUAT`, `TAHUN_ANGGARAN`, `TOTAL_ANGGARAN`, `LAST_UPDATE`, `TENDER_A`, `NAMA_A`, `NPWP_A`, `ALAMAT_A`, `TENDER_B`, `NAMA_B`, `NPWP_B`, `ALAMAT_B`, `TENDER_C`, `NAMA_C`, `NPWP_C`, `ALAMAT_C`, `KETERANGAN_GAGAL_KONTRAK`, `PENYEDIA`, `WAKTU_PENGADAAN`, `ID_KATEGORI`, `STATUS_BAYAR`) VALUES
(8, 5, 1, 2, 'Paket Komputer JTK dan AN', 9, '2016-06-14 20:36:26', '2016', 3700000, '2016-06-14 15:32:11', 'P1', 'N1', 'NP1', 'A1', 'P2', 'N2', 'NP2', 'A2aaa', '', '', '', '', '', 'P2', '20/Hari Kerja', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `NIP` bigint(20) NOT NULL,
  `NAMA_PEGAWAI` varchar(35) NOT NULL,
  `NO_HP` varchar(20) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `IS_TEKNISI` tinyint(1) NOT NULL DEFAULT '0',
  `HPS_CERTIFIED` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`NIP`, `NAMA_PEGAWAI`, `NO_HP`, `EMAIL`, `IS_TEKNISI`, `HPS_CERTIFIED`) VALUES
(6, 'Didi', '6345345', 'didi@gmail.com', 0, 1),
(7, 'Charlie', '0239124', 'ch@gmail.com', 1, 0),
(8, 'Bima', '29312831', 'bim@gmail.com', 0, 1),
(9, 'Arjuna', '92315123', 'arj@gmail.com', 1, 0),
(10, 'Cindy', '080', 'c@gmail.com', 0, 0),
(11, 'Tiara', '080', 't@gmail.com', 0, 0),
(12, 'BobiT', '080', 'b@gmcil.com', 0, 0),
(13, 'Amos', '080', 'am@gmail.com', 0, 0),
(14, 'Amara', '2080', 'asd@asd', 0, 0),
(15, 'Amru', '01238', 'a@amc.', 0, 0),
(16, 'Amri', '12389', 'a@asma', 0, 0),
(17, 'Asma', '23123', 'as@ma', 0, 0),
(18, 'Amsah', '2912', 'a2S@asm', 0, 0),
(19, 'Amy', '2892839', 'asdm@ma', 0, 0),
(66666, 'Budi', '08666666', 'f@gmail.com', 0, 0),
(555555, 'Arif', '08555555', 'e@gmail.com', 0, 0),
(2222222, 'Andi', '08222222', 'b@gmail.com', 0, 0),
(3333333, 'Andika', '083333333', 'c@gmail.com', 0, 0),
(4444444, 'Annisa', '084444444', 'd@gmail.com', 0, 0),
(7777777, 'Chandri', '087777777', 'g@gmail.com', 0, 0),
(8888888, 'Erwin', '08888888', 'h@gmail.com', 0, 0),
(11111111, 'Adit', '08111111', 'a@gmail.com', 1, 0),
(99999999, 'Julid', '089999999', 'i@gmail.com', 0, 0),
(101010101010, 'Luthpi', '0810101010', 'j@gmail.com', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerimaan`
--

CREATE TABLE IF NOT EXISTS `penerimaan` (
  `ID_PENERIMAAN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ALAT` int(11) DEFAULT NULL,
  `ID_TEAM_PENERIMA` int(11) DEFAULT NULL,
  `TANGGAL_PENERIMAAN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `JUMLAH` decimal(8,0) DEFAULT NULL,
  `ID_PAKET` int(11) NOT NULL,
  `KETERANGAN` text NOT NULL,
  `STATUS_KONFIRMASI` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_PENERIMAAN`),
  KEY `FK_RELATIONSHIP_8` (`ID_TEAM_PENERIMA`),
  KEY `FK_RELATIONSHIP_9` (`ID_ALAT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `progress_paket`
--

CREATE TABLE IF NOT EXISTS `progress_paket` (
  `ID_PROGRESS_PAKET` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PAKET` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_FASE` int(11) DEFAULT NULL,
  `ID_USULAN` int(11) DEFAULT NULL,
  `STATUS` smallint(6) DEFAULT NULL,
  `TANGGAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ID_JENIS_USER` int(11) NOT NULL,
  `ID_JURUSAN` int(11) NOT NULL,
  `REVISI_KE` int(11) NOT NULL,
  PRIMARY KEY (`ID_PROGRESS_PAKET`),
  KEY `FK_RELATIONSHIP_12` (`ID_FASE`),
  KEY `FK_RELATIONSHIP_13` (`ID_USER`),
  KEY `FK_RELATIONSHIP_14` (`ID_PAKET`),
  KEY `FK_RELATIONSHIP_28` (`ID_USULAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data untuk tabel `progress_paket`
--

INSERT INTO `progress_paket` (`ID_PROGRESS_PAKET`, `ID_PAKET`, `ID_USER`, `ID_FASE`, `ID_USULAN`, `STATUS`, `TANGGAL`, `ID_JENIS_USER`, `ID_JURUSAN`, `REVISI_KE`) VALUES
(49, NULL, 1, 1, 9, 11, '2016-06-15 03:52:41', 1, 1, 0),
(50, NULL, 2, 1, 9, 22, '2016-06-15 03:53:27', 2, 1, 0),
(51, NULL, 2, 1, 10, 22, '2016-06-15 03:54:33', 2, 1, 0),
(52, NULL, 3, 1, 10, 2, '2016-06-15 03:57:09', 3, 1, 0),
(53, NULL, 3, 1, 9, 2, '2016-06-15 03:57:42', 3, 1, 0),
(54, NULL, 3, 1, 11, 3, '2016-06-15 03:58:11', 3, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `team_hps`
--

CREATE TABLE IF NOT EXISTS `team_hps` (
  `ID_TEAM_HPS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USER` int(11) DEFAULT NULL,
  `NAMA_TIM` varchar(100) NOT NULL,
  `LIST_USER_HPS` longtext,
  PRIMARY KEY (`ID_TEAM_HPS`),
  KEY `FK_RELATIONSHIP_19` (`ID_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `team_penerima`
--

CREATE TABLE IF NOT EXISTS `team_penerima` (
  `ID_TEAM_PENERIMA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USER` int(11) DEFAULT NULL,
  `NAMA_TIM` varchar(100) NOT NULL,
  `LIST_USER_PENERIMA` longtext,
  PRIMARY KEY (`ID_TEAM_PENERIMA`),
  KEY `FK_RELATIONSHIP_20` (`ID_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID_USER` int(11) NOT NULL AUTO_INCREMENT,
  `ID_JENIS_USER` int(11) DEFAULT NULL,
  `ID_JURUSAN` int(11) DEFAULT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `NIP` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_USER`),
  KEY `FK_RELATIONSHIP_1` (`ID_JENIS_USER`),
  KEY `FK_RELATIONSHIP_23` (`ID_JURUSAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID_USER`, `ID_JENIS_USER`, `ID_JURUSAN`, `USERNAME`, `PASSWORD`, `NIP`) VALUES
(1, 1, 1, 'TeknisiJTK', '5f4dcc3b5aa765d61d8327deb882cf99', '11111111'),
(2, 2, 1, 'KalabJTK', '5f4dcc3b5aa765d61d8327deb882cf99', '2222222'),
(3, 3, 1, 'KajurJTK', '5f4dcc3b5aa765d61d8327deb882cf99', '3333333'),
(4, 4, 0, 'PD2', '5f4dcc3b5aa765d61d8327deb882cf99', '4444444'),
(5, 5, 0, 'PPK', '5f4dcc3b5aa765d61d8327deb882cf99', '555555'),
(6, 6, 0, 'TimHPS', '5f4dcc3b5aa765d61d8327deb882cf99', '66666'),
(7, 7, 0, 'ULP', '5f4dcc3b5aa765d61d8327deb882cf99', '7777777'),
(8, 8, 0, 'TimPenerima', '5f4dcc3b5aa765d61d8327deb882cf99', '8888888'),
(9, 9, 0, 'PPSPM', '5f4dcc3b5aa765d61d8327deb882cf99', '99999999'),
(10, 10, 0, 'Direktur', '5f4dcc3b5aa765d61d8327deb882cf99', '101010101010'),
(11, 99, 0, 'Admin', '5f4dcc3b5aa765d61d8327deb882cf99', '-'),
(16, 1, 2, 'TeknisiAN', '5f4dcc3b5aa765d61d8327deb882cf99', '7'),
(17, 2, 2, 'KalabAN', '5f4dcc3b5aa765d61d8327deb882cf99', '6'),
(18, 3, 2, 'KajurAN', '5f4dcc3b5aa765d61d8327deb882cf99', '8'),
(22, 3, 1, 'Sekjur1JTK', '5f4dcc3b5aa765d61d8327deb882cf99', '10'),
(23, 3, 1, 'Sekjur2JTK', '5f4dcc3b5aa765d61d8327deb882cf99', '11'),
(24, 3, 2, 'Sekjur1AN', '5f4dcc3b5aa765d61d8327deb882cf99', '12'),
(25, 3, 2, 'Sekjur2AN', '5f4dcc3b5aa765d61d8327deb882cf99', '13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `usulan`
--

CREATE TABLE IF NOT EXISTS `usulan` (
  `ID_USULAN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USER` int(11) DEFAULT NULL,
  `ID_JURUSAN` int(11) DEFAULT NULL,
  `NAMA_PAKET` longtext,
  `STATUS` smallint(6) DEFAULT NULL,
  `TANGGAL_DIBUAT` datetime NOT NULL,
  `TAHUN_ANGGARAN` char(4) DEFAULT NULL,
  `PD` char(2) DEFAULT NULL,
  `TOTAL_ANGGARAN` int(11) DEFAULT NULL,
  `LAST_UPDATE` datetime NOT NULL,
  `ID_JENIS_USER` int(11) NOT NULL,
  PRIMARY KEY (`ID_USULAN`),
  KEY `FK_RELATIONSHIP_27` (`ID_USER`),
  KEY `FK_RELATIONSHIP_30` (`ID_JURUSAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `usulan`
--

INSERT INTO `usulan` (`ID_USULAN`, `ID_USER`, `ID_JURUSAN`, `NAMA_PAKET`, `STATUS`, `TANGGAL_DIBUAT`, `TAHUN_ANGGARAN`, `PD`, `TOTAL_ANGGARAN`, `LAST_UPDATE`, `ID_JENIS_USER`) VALUES
(9, 1, 1, 'Paket Teknisi JTK', NULL, '2016-06-15 10:52:30', '2016', NULL, 121000, '0000-00-00 00:00:00', 1),
(10, 2, 1, 'USulan KALAB', NULL, '2016-06-15 10:54:25', '2016', NULL, 12100, '0000-00-00 00:00:00', 2),
(11, 3, 1, 'Usulan Manajemen', NULL, '2016-06-15 10:56:19', '2016', NULL, 1210000, '0000-00-00 00:00:00', 3);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alat`
--
ALTER TABLE `alat`
  ADD CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`ID_LOKASI`) REFERENCES `lokasi` (`ID_LOKASI`),
  ADD CONSTRAINT `FK_RELATIONSHIP_16` FOREIGN KEY (`ID_FASE`) REFERENCES `fase` (`ID_FASE`),
  ADD CONSTRAINT `FK_RELATIONSHIP_18` FOREIGN KEY (`ID_JURUSAN`) REFERENCES `jurusan` (`ID_JURUSAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_26` FOREIGN KEY (`ID_PAKET`) REFERENCES `paket` (`ID_PAKET`),
  ADD CONSTRAINT `FK_RELATIONSHIP_29` FOREIGN KEY (`ID_USULAN`) REFERENCES `usulan` (`ID_USULAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `kontrak`
--
ALTER TABLE `kontrak`
  ADD CONSTRAINT `FK_RELATIONSHIP_24` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `FK_RELATIONSHIP_25` FOREIGN KEY (`ID_PAKET`) REFERENCES `paket` (`ID_PAKET`);

--
-- Ketidakleluasaan untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD CONSTRAINT `FK_RELATIONSHIP_15` FOREIGN KEY (`ID_JURUSAN`) REFERENCES `jurusan` (`ID_JURUSAN`);

--
-- Ketidakleluasaan untuk tabel `pagu`
--
ALTER TABLE `pagu`
  ADD CONSTRAINT `FK_RELATIONSHIP_17` FOREIGN KEY (`ID_JURUSAN`) REFERENCES `jurusan` (`ID_JURUSAN`);

--
-- Ketidakleluasaan untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`ID_ALAT`) REFERENCES `alat` (`ID_ALAT`),
  ADD CONSTRAINT `penerimaan_ibfk_1` FOREIGN KEY (`ID_TEAM_PENERIMA`) REFERENCES `team_penerima` (`ID_TEAM_PENERIMA`);

--
-- Ketidakleluasaan untuk tabel `progress_paket`
--
ALTER TABLE `progress_paket`
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`ID_FASE`) REFERENCES `fase` (`ID_FASE`),
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `FK_RELATIONSHIP_14` FOREIGN KEY (`ID_PAKET`) REFERENCES `paket` (`ID_PAKET`),
  ADD CONSTRAINT `FK_RELATIONSHIP_28` FOREIGN KEY (`ID_USULAN`) REFERENCES `usulan` (`ID_USULAN`);

--
-- Ketidakleluasaan untuk tabel `team_hps`
--
ALTER TABLE `team_hps`
  ADD CONSTRAINT `team_hps_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `team_penerima`
--
ALTER TABLE `team_penerima`
  ADD CONSTRAINT `team_penerima_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_JENIS_USER`) REFERENCES `jenis_user` (`ID_JENIS_USER`),
  ADD CONSTRAINT `FK_RELATIONSHIP_23` FOREIGN KEY (`ID_JURUSAN`) REFERENCES `jurusan` (`ID_JURUSAN`);

--
-- Ketidakleluasaan untuk tabel `usulan`
--
ALTER TABLE `usulan`
  ADD CONSTRAINT `FK_RELATIONSHIP_27` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `FK_RELATIONSHIP_30` FOREIGN KEY (`ID_JURUSAN`) REFERENCES `jurusan` (`ID_JURUSAN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
