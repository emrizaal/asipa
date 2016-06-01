-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 01. Juni 2016 jam 13:45
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
