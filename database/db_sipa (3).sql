-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 01. Juni 2016 jam 06:28
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
  PRIMARY KEY (`ID_ALAT`),
  KEY `FK_RELATIONSHIP_10` (`ID_LOKASI`),
  KEY `FK_RELATIONSHIP_16` (`ID_FASE`),
  KEY `FK_RELATIONSHIP_18` (`ID_JURUSAN`),
  KEY `FK_RELATIONSHIP_26` (`ID_PAKET`),
  KEY `FK_RELATIONSHIP_29` (`ID_USULAN`),
  KEY `FK_RELATIONSHIP_6` (`ID_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `alat`
--

INSERT INTO `alat` (`ID_ALAT`, `ID_JURUSAN`, `ID_USER`, `ID_LOKASI`, `ID_PAKET`, `ID_FASE`, `ID_USULAN`, `NAMA_ALAT`, `SPESIFIKASI`, `SETARA`, `SATUAN`, `JUMLAH_ALAT`, `HARGA_SATUAN`, `JUMLAH_DISTRIBUSI`, `KONFIRMASI`, `REFERENSI_TERKAIT`, `DATA_AHLI`, `REVISI`, `PRIORITY`, `TANGGAL_UPDATE`) VALUES
(4, 1, 3, 1, NULL, 1, 13, 'asd', 'asd', 'asd', 'Unit', 2, 200000, 2, NULL, '', 1, 0, '1', '0000-00-00 00:00:00'),
(5, 1, 3, 1, NULL, 1, 13, 'PC', 'i3', 'asd', 'Unit', 2, 200000, 2, NULL, NULL, 1, 1, '1', '0000-00-00 00:00:00'),
(6, 1, 1, 1, NULL, 1, 13, 'PC', 'i5', 'Inter', 'Unit', 2, 200000, 2, NULL, NULL, 1, 2, '1', '0000-00-00 00:00:00'),
(7, 1, 3, 1, NULL, 1, 14, 'HARdisk External', '1TB', '-', 'Unit', 10, 30000, 2, NULL, 'db_sipa3.sql', 1, 0, '1', '0000-00-00 00:00:00'),
(8, 1, 1, 1, NULL, 1, 14, 'test', 'test', 'etes', 'Unit', 1, 100000, 2, NULL, NULL, 1, 1, '2', '0000-00-00 00:00:00'),
(9, 1, 1, 1, NULL, 1, 14, 'HARdisk External', '1TB', '-', 'Unit', 10, 30000, 2, NULL, NULL, 1, 1, '1', '0000-00-00 00:00:00');

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
(4, 'Pembantu Direktur'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `kontrak`
--

INSERT INTO `kontrak` (`ID_KONTRAK`, `ID_PAKET`, `ID_USER`, `KETERANGAN`, `FILE`) VALUES
(6, 2, 1, 's', ''),
(7, 2, 1, 'adendmum\r\n', 'db_sipa.sql');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`ID_LOKASI`, `ID_JURUSAN`, `NAMA_LOKASI`) VALUES
(1, 1, 'RSG'),
(2, 1, 'Lab. RPL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pagu`
--

CREATE TABLE IF NOT EXISTS `pagu` (
  `ID_PAGU` int(11) NOT NULL AUTO_INCREMENT,
  `ID_JURUSAN` int(11) DEFAULT NULL,
  `PAGU_ALAT` int(11) DEFAULT NULL,
  `TAHUN_ANGGARAN` char(4) DEFAULT NULL,
  PRIMARY KEY (`ID_PAGU`),
  KEY `FK_RELATIONSHIP_17` (`ID_JURUSAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `pagu`
--

INSERT INTO `pagu` (`ID_PAGU`, `ID_JURUSAN`, `PAGU_ALAT`, `TAHUN_ANGGARAN`) VALUES
(3, 1, 100000, '2016'),
(4, 2, 100000, '2016'),
(5, 3, 1000001, '2016'),
(6, 4, 1000001, '2016'),
(7, 5, 0, '2016'),
(8, 6, 0, '2016'),
(9, 7, 0, '2016'),
(10, 8, 0, '2016'),
(11, 9, 0, '2016'),
(12, 10, 0, '2016');

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
  `LAST_UPDATE` datetime NOT NULL,
  `TENDER_A` varchar(50) NOT NULL,
  `TENDER_B` varchar(50) NOT NULL,
  `TENDER_C` varchar(50) NOT NULL,
  `TENDER_D` varchar(50) NOT NULL,
  `TENDER_E` varchar(50) NOT NULL,
  `KETERANGAN_GAGAL_KONTRAK` text NOT NULL,
  PRIMARY KEY (`ID_PAKET`),
  KEY `FK_RELATIONSHIP_2` (`ID_TEAM_HPS`),
  KEY `FK_RELATIONSHIP_3` (`ID_TEAM_PENERIMA`),
  KEY `FK_RELATIONSHIP_4` (`ID_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`ID_PAKET`, `ID_USER`, `ID_TEAM_PENERIMA`, `ID_TEAM_HPS`, `NAMA_PAKET`, `STATUS`, `TANGGAL_DIBUAT`, `TAHUN_ANGGARAN`, `TOTAL_ANGGARAN`, `LAST_UPDATE`, `TENDER_A`, `TENDER_B`, `TENDER_C`, `TENDER_D`, `TENDER_E`, `KETERANGAN_GAGAL_KONTRAK`) VALUES
(2, 1, NULL, NULL, 'Pengelompokan JTK euy', 9, '2016-05-28 15:03:54', '2016', NULL, '2016-05-28 15:20:26', 'aa', 'bbbb', '-', '-', '-', ''),
(3, 1, NULL, NULL, 'Sipil dan Mesinn', -9, '2016-05-28 15:16:28', '2016', NULL, '2016-05-28 15:20:16', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `NIP` bigint(20) NOT NULL,
  `NAMA` varchar(35) NOT NULL,
  `NO_HP` varchar(20) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`ID_PENERIMAAN`),
  KEY `FK_RELATIONSHIP_8` (`ID_TEAM_PENERIMA`),
  KEY `FK_RELATIONSHIP_9` (`ID_ALAT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  PRIMARY KEY (`ID_PROGRESS_PAKET`),
  KEY `FK_RELATIONSHIP_12` (`ID_FASE`),
  KEY `FK_RELATIONSHIP_13` (`ID_USER`),
  KEY `FK_RELATIONSHIP_14` (`ID_PAKET`),
  KEY `FK_RELATIONSHIP_28` (`ID_USULAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `NAMA` varchar(50) DEFAULT NULL,
  `NIP` varchar(20) DEFAULT NULL,
  `NO_HP` char(13) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_USER`),
  KEY `FK_RELATIONSHIP_1` (`ID_JENIS_USER`),
  KEY `FK_RELATIONSHIP_23` (`ID_JURUSAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`ID_USER`, `ID_JENIS_USER`, `ID_JURUSAN`, `USERNAME`, `PASSWORD`, `NAMA`, `NIP`, `NO_HP`, `EMAIL`) VALUES
(1, 1, 1, 'Teknisi', '5f4dcc3b5aa765d61d8327deb882cf99', 'Adit ', '123123123123', '08292313123', 'a@gmail.com'),
(2, 2, 1, 'Kalab', '5f4dcc3b5aa765d61d8327deb882cf99', 'Andi', '123123123', '12312312', 'b@gmail.com'),
(3, 3, 1, 'Manajemen', '5f4dcc3b5aa765d61d8327deb882cf99', 'Andika', '12312312', '123123123', 'c@gmail.com'),
(4, 4, 0, 'PD', '5f4dcc3b5aa765d61d8327deb882cf99', 'Annisa', '123123123', '12312312', 'd@gmail.com'),
(5, 5, 1, 'PPK', '5f4dcc3b5aa765d61d8327deb882cf99', 'Arif', '1231313', '123123123', 'e@gmail.com'),
(6, 6, 1, 'TimHPS', '5f4dcc3b5aa765d61d8327deb882cf99', 'Budi', '123123', '1231231', 'f@gmail.com'),
(7, 7, 1, 'ULP', '5f4dcc3b5aa765d61d8327deb882cf99', 'Dwi', '123123123', '123123123', 'g@gmail.com'),
(8, 8, 1, 'TimPenerima', '5f4dcc3b5aa765d61d8327deb882cf99', 'Chandriawan', '123123123123', '32432423432', 'h@gmail.com'),
(9, 9, 1, 'PPSPM', '5f4dcc3b5aa765d61d8327deb882cf99', 'Erwin', '123123123123', '123123123123', 'i@gmail.com'),
(10, 10, 1, 'Direktur', '5f4dcc3b5aa765d61d8327deb882cf99', 'Julid', '1231231231', '123123123', 'j@gmail.com'),
(11, 99, 0, 'Admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'Administrator', '-', '-', '-');

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
  `TANGGAL_DIBUAT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TAHUN_ANGGARAN` char(4) DEFAULT NULL,
  `PD` char(2) DEFAULT NULL,
  `TOTAL_ANGGARAN` int(11) DEFAULT NULL,
  `LAST_UPDATE` datetime NOT NULL,
  PRIMARY KEY (`ID_USULAN`),
  KEY `FK_RELATIONSHIP_27` (`ID_USER`),
  KEY `FK_RELATIONSHIP_30` (`ID_JURUSAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `usulan`
--

INSERT INTO `usulan` (`ID_USULAN`, `ID_USER`, `ID_JURUSAN`, `NAMA_PAKET`, `STATUS`, `TANGGAL_DIBUAT`, `TAHUN_ANGGARAN`, `PD`, `TOTAL_ANGGARAN`, `LAST_UPDATE`) VALUES
(13, 1, 1, 'PC A', NULL, '2016-05-31 03:15:14', '2016', NULL, 484000, '2016-05-31 10:15:14'),
(14, 1, 1, 'Contoh Paket', NULL, '2016-05-31 06:27:11', '2016', NULL, 484000, '2016-05-31 13:27:11');

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
  ADD CONSTRAINT `penerimaan_ibfk_1` FOREIGN KEY (`ID_TEAM_PENERIMA`) REFERENCES `team_penerima` (`ID_TEAM_PENERIMA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`ID_ALAT`) REFERENCES `alat` (`ID_ALAT`);

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
