-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2016 at 10:28 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

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
-- Table structure for table `alat`
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
  `REVISI` decimal(8,0) DEFAULT NULL,
  `TANGGAL_UPDATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_ALAT`),
  KEY `FK_RELATIONSHIP_10` (`ID_LOKASI`),
  KEY `FK_RELATIONSHIP_16` (`ID_FASE`),
  KEY `FK_RELATIONSHIP_18` (`ID_JURUSAN`),
  KEY `FK_RELATIONSHIP_26` (`ID_PAKET`),
  KEY `FK_RELATIONSHIP_29` (`ID_USULAN`),
  KEY `FK_RELATIONSHIP_6` (`ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bast`
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
-- Table structure for table `fase`
--

CREATE TABLE IF NOT EXISTS `fase` (
  `ID_FASE` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_FASE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_FASE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_user`
--

CREATE TABLE IF NOT EXISTS `jenis_user` (
  `ID_JENIS_USER` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_JENIS_USER` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_JENIS_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jenis_user`
--

INSERT INTO `jenis_user` (`ID_JENIS_USER`, `NAMA_JENIS_USER`) VALUES
(1, 'Manajemen');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `ID_JURUSAN` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_JURUSAN` varchar(50) DEFAULT NULL,
  `INISIAL` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_JURUSAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`ID_JURUSAN`, `NAMA_JURUSAN`, `INISIAL`) VALUES
(1, 'Teknik Komputer', 'JTK');

-- --------------------------------------------------------

--
-- Table structure for table `kontrak`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `ID_LOKASI` int(11) NOT NULL AUTO_INCREMENT,
  `ID_JURUSAN` int(11) DEFAULT NULL,
  `NAMA_LOKASI` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_LOKASI`),
  KEY `FK_RELATIONSHIP_15` (`ID_JURUSAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pagu`
--

CREATE TABLE IF NOT EXISTS `pagu` (
  `ID_PAGU` int(11) NOT NULL AUTO_INCREMENT,
  `ID_JURUSAN` int(11) DEFAULT NULL,
  `PAGU_ALAT` int(11) DEFAULT NULL,
  `TAHUN_ANGGARAN` char(4) DEFAULT NULL,
  PRIMARY KEY (`ID_PAGU`),
  KEY `FK_RELATIONSHIP_17` (`ID_JURUSAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pagu`
--

INSERT INTO `pagu` (`ID_PAGU`, `ID_JURUSAN`, `PAGU_ALAT`, `TAHUN_ANGGARAN`) VALUES
(2, 1, 3500000, '2016');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
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
  `LAST_UPDATE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID_PAKET`),
  KEY `FK_RELATIONSHIP_2` (`ID_TEAM_HPS`),
  KEY `FK_RELATIONSHIP_3` (`ID_TEAM_PENERIMA`),
  KEY `FK_RELATIONSHIP_4` (`ID_USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`ID_PAKET`, `ID_USER`, `ID_TEAM_PENERIMA`, `ID_TEAM_HPS`, `NAMA_PAKET`, `STATUS`, `TANGGAL_DIBUAT`, `TAHUN_ANGGARAN`, `TOTAL_ANGGARAN`, `LAST_UPDATE`) VALUES
(2, 1, NULL, NULL, 'Pengelompokan JTK euy', NULL, '2016-05-28 15:03:54', '2016', NULL, '2016-05-28 08:20:26'),
(3, 1, NULL, NULL, 'Sipil dan Mesinn', NULL, '2016-05-28 15:16:28', '2016', NULL, '2016-05-28 08:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan`
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
-- Table structure for table `progress_paket`
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
-- Table structure for table `team_hps`
--

CREATE TABLE IF NOT EXISTS `team_hps` (
  `ID_TEAM_HPS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USER_HPS` int(11) DEFAULT NULL,
  `LIST_USER_HPS` longtext,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_TEAM_HPS`),
  KEY `FK_RELATIONSHIP_19` (`ID_USER_HPS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `team_penerima`
--

CREATE TABLE IF NOT EXISTS `team_penerima` (
  `ID_TEAM_PENERIMA` int(11) NOT NULL AUTO_INCREMENT,
  `ID_USER_PENERIMA` int(11) DEFAULT NULL,
  `LIST_USER_PENERIMA` longtext,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_TEAM_PENERIMA`),
  KEY `FK_RELATIONSHIP_20` (`ID_USER_PENERIMA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID_USER`, `ID_JENIS_USER`, `ID_JURUSAN`, `USERNAME`, `PASSWORD`, `NAMA`, `NIP`, `NO_HP`, `EMAIL`) VALUES
(1, 1, 1, 'piko', '30f01545a850e20b5c5cedbc61e943fe', 'piko', '1', '1', 'piko@piko.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_hps`
--

CREATE TABLE IF NOT EXISTS `user_hps` (
  `ID_USER_HPS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_JURUSAN` int(11) DEFAULT NULL,
  `NAMA_USER_HPS` varchar(50) DEFAULT NULL,
  `NO_HP` char(13) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_USER_HPS`),
  KEY `FK_RELATIONSHIP_21` (`ID_JURUSAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_penerima`
--

CREATE TABLE IF NOT EXISTS `user_penerima` (
  `ID_USER_PENERIMA` int(11) NOT NULL AUTO_INCREMENT,
  `ATTRIBUTE_13` varchar(50) DEFAULT NULL,
  `NO_HP` char(13) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_USER_PENERIMA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `usulan`
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
  `LAST_UPDATE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`ID_USULAN`),
  KEY `FK_RELATIONSHIP_27` (`ID_USER`),
  KEY `FK_RELATIONSHIP_30` (`ID_JURUSAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alat`
--
ALTER TABLE `alat`
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`ID_LOKASI`) REFERENCES `lokasi` (`ID_LOKASI`),
  ADD CONSTRAINT `FK_RELATIONSHIP_16` FOREIGN KEY (`ID_FASE`) REFERENCES `fase` (`ID_FASE`),
  ADD CONSTRAINT `FK_RELATIONSHIP_18` FOREIGN KEY (`ID_JURUSAN`) REFERENCES `jurusan` (`ID_JURUSAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_26` FOREIGN KEY (`ID_PAKET`) REFERENCES `paket` (`ID_PAKET`),
  ADD CONSTRAINT `FK_RELATIONSHIP_29` FOREIGN KEY (`ID_USULAN`) REFERENCES `usulan` (`ID_USULAN`);

--
-- Constraints for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD CONSTRAINT `FK_RELATIONSHIP_25` FOREIGN KEY (`ID_PAKET`) REFERENCES `paket` (`ID_PAKET`),
  ADD CONSTRAINT `FK_RELATIONSHIP_24` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD CONSTRAINT `FK_RELATIONSHIP_15` FOREIGN KEY (`ID_JURUSAN`) REFERENCES `jurusan` (`ID_JURUSAN`);

--
-- Constraints for table `pagu`
--
ALTER TABLE `pagu`
  ADD CONSTRAINT `FK_RELATIONSHIP_17` FOREIGN KEY (`ID_JURUSAN`) REFERENCES `jurusan` (`ID_JURUSAN`);

--
-- Constraints for table `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_TEAM_HPS`) REFERENCES `team_hps` (`ID_TEAM_HPS`),
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_TEAM_PENERIMA`) REFERENCES `team_penerima` (`ID_TEAM_PENERIMA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

--
-- Constraints for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`ID_ALAT`) REFERENCES `alat` (`ID_ALAT`),
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`ID_TEAM_PENERIMA`) REFERENCES `team_penerima` (`ID_TEAM_PENERIMA`);

--
-- Constraints for table `progress_paket`
--
ALTER TABLE `progress_paket`
  ADD CONSTRAINT `FK_RELATIONSHIP_28` FOREIGN KEY (`ID_USULAN`) REFERENCES `usulan` (`ID_USULAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_12` FOREIGN KEY (`ID_FASE`) REFERENCES `fase` (`ID_FASE`),
  ADD CONSTRAINT `FK_RELATIONSHIP_13` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`),
  ADD CONSTRAINT `FK_RELATIONSHIP_14` FOREIGN KEY (`ID_PAKET`) REFERENCES `paket` (`ID_PAKET`);

--
-- Constraints for table `team_hps`
--
ALTER TABLE `team_hps`
  ADD CONSTRAINT `FK_RELATIONSHIP_19` FOREIGN KEY (`ID_USER_HPS`) REFERENCES `user_hps` (`ID_USER_HPS`);

--
-- Constraints for table `team_penerima`
--
ALTER TABLE `team_penerima`
  ADD CONSTRAINT `FK_RELATIONSHIP_20` FOREIGN KEY (`ID_USER_PENERIMA`) REFERENCES `user_penerima` (`ID_USER_PENERIMA`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_RELATIONSHIP_23` FOREIGN KEY (`ID_JURUSAN`) REFERENCES `jurusan` (`ID_JURUSAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_JENIS_USER`) REFERENCES `jenis_user` (`ID_JENIS_USER`);

--
-- Constraints for table `user_hps`
--
ALTER TABLE `user_hps`
  ADD CONSTRAINT `FK_RELATIONSHIP_21` FOREIGN KEY (`ID_JURUSAN`) REFERENCES `jurusan` (`ID_JURUSAN`);

--
-- Constraints for table `usulan`
--
ALTER TABLE `usulan`
  ADD CONSTRAINT `FK_RELATIONSHIP_30` FOREIGN KEY (`ID_JURUSAN`) REFERENCES `jurusan` (`ID_JURUSAN`),
  ADD CONSTRAINT `FK_RELATIONSHIP_27` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID_USER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
