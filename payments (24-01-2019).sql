-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 23 Jan 2020 pada 23.15
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `payments`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `academic_book`
--

CREATE TABLE IF NOT EXISTS `academic_book` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(50) NOT NULL,
  `claim` int(11) NOT NULL,
  `school` varchar(30) NOT NULL,
  `year` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `academic_book`
--

INSERT INTO `academic_book` (`id`, `jenis`, `claim`, `school`, `year`) VALUES
(3, 'LKS Bahasa Indonesia Semester IV', 15000, 'MI KH.MOHAMMAD SAID', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `academic_uas`
--

CREATE TABLE IF NOT EXISTS `academic_uas` (
  `id_academic` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(20) NOT NULL,
  `school` varchar(30) NOT NULL,
  `year` varchar(11) NOT NULL,
  `claim` int(11) NOT NULL,
  `end` int(12) DEFAULT NULL,
  PRIMARY KEY (`id_academic`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `academic_uas`
--

INSERT INTO `academic_uas` (`id_academic`, `jenis`, `school`, `year`, `claim`, `end`) VALUES
(1, 'UAS Semester Ganjil', 'MI KH.MOHAMMAD SAID', '2020', 30000, NULL),
(3, 'UTS Semester Ganjil', 'MI KH.MOHAMMAD SAID', '2020', 50000, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `academic_uniform`
--

CREATE TABLE IF NOT EXISTS `academic_uniform` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(30) NOT NULL,
  `claim` int(12) NOT NULL,
  `school` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `academic_uniform`
--

INSERT INTO `academic_uniform` (`id`, `jenis`, `claim`, `school`) VALUES
(3, 'Batik', 20000, 'MI KH.MOHAMMAD SAID'),
(4, 'Olahraga', 100000, 'MI KH.MOHAMMAD SAID'),
(5, 'Pramuka', 50000, 'MI KH.MOHAMMAD SAID');

-- --------------------------------------------------------

--
-- Struktur dari tabel `academic_year`
--

CREATE TABLE IF NOT EXISTS `academic_year` (
  `id_academic` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(30) NOT NULL,
  `school` varchar(30) NOT NULL,
  `year` varchar(12) NOT NULL,
  `claim` int(20) NOT NULL,
  `end` int(11) NOT NULL,
  PRIMARY KEY (`id_academic`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `academic_year`
--

INSERT INTO `academic_year` (`id_academic`, `jenis`, `school`, `year`, `claim`, `end`) VALUES
(1, 'SPP', 'MI KH.MOHAMMAD SAID', '2019', 50000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id_payment` int(11) NOT NULL AUTO_INCREMENT,
  `nis` int(12) NOT NULL,
  `month_name` varchar(12) NOT NULL,
  `claim` int(20) NOT NULL,
  `status` int(11) NOT NULL,
  `date` date NOT NULL,
  `class` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id_payment`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `payment`
--

INSERT INTO `payment` (`id_payment`, `nis`, `month_name`, `claim`, `status`, `date`, `class`, `name`) VALUES
(8, 981724, 'Januari', 50000, 1, '2020-01-22', '3', 'Rijal Ammar'),
(9, 981724, 'Februari', 50000, 2, '2020-01-22', '3', 'Rijal Ammar'),
(10, 981724, 'Maret', 50000, 3, '2020-01-22', '3', 'Rijal Ammar'),
(11, 981724, 'April', 50000, 4, '2020-01-22', '3', 'Rijal Ammar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment_book`
--

CREATE TABLE IF NOT EXISTS `payment_book` (
  `id_payment` int(11) NOT NULL AUTO_INCREMENT,
  `nis` int(20) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `claim` int(12) NOT NULL,
  `date` varchar(12) NOT NULL,
  `class` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id_payment`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `payment_book`
--

INSERT INTO `payment_book` (`id_payment`, `nis`, `jenis`, `claim`, `date`, `class`, `name`) VALUES
(1, 981724, 'LKS Bahasa Indonesia Semester IV', 15000, '2020-01-23', '3', 'Rijal Amar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment_uas`
--

CREATE TABLE IF NOT EXISTS `payment_uas` (
  `id_payment` int(11) NOT NULL AUTO_INCREMENT,
  `nis` int(11) NOT NULL,
  `jenis` varchar(30) DEFAULT NULL,
  `claim` int(11) NOT NULL,
  `date` date NOT NULL,
  `class` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id_payment`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `payment_uas`
--

INSERT INTO `payment_uas` (`id_payment`, `nis`, `jenis`, `claim`, `date`, `class`, `name`) VALUES
(1, 981724, 'UAS', 30000, '2020-01-23', '3', 'Rijal'),
(2, 981724, 'UTS', 50000, '2020-01-23', '3', 'Rijal'),
(3, 981724, 'UAS Semester Ganjil', 30000, '2020-01-23', '3', 'Rijal'),
(4, 981724, 'UTS Semester Ganjil', 50000, '2020-01-23', '3', 'Rijal Amar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `payment_uniform`
--

CREATE TABLE IF NOT EXISTS `payment_uniform` (
  `id_payment` int(11) NOT NULL AUTO_INCREMENT,
  `nis` int(11) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `claim` int(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `class` varchar(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id_payment`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `payment_uniform`
--

INSERT INTO `payment_uniform` (`id_payment`, `nis`, `jenis`, `claim`, `status`, `date`, `class`, `name`) VALUES
(1, 1, 'Seragam', 50000, '1', '2020-01-23', '3', 'Rijal'),
(2, 1, 'Batik', 80000, '1', '2020-01-23', '3', 'Rijal'),
(3, 981724, 'Batik', 80000, '1', '2020-01-23', '3', 'Rijal'),
(4, 981724, 'Seragam', 80000, '1', '2020-01-23', '3', 'Rijal'),
(5, 981724, 'Seragam', 100000, '1', '2020-01-23', '3', 'Rijal'),
(6, 981724, 'Seragam', 50000, '1', '2020-01-23', '3', 'Rijal'),
(7, 981724, 'Olahraga', 100000, '1', '2020-01-23', '3', 'Rijal Amar'),
(8, 981724, 'Olahraga', 100000, '1', '2020-01-23', '3', 'Rijal Amar'),
(9, 981724, 'Pramuka', 50000, '1', '2020-01-23', '3', 'Rijal Amar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `nis` int(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `class` varchar(10) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `students`
--

INSERT INTO `students` (`nis`, `name`, `class`, `status`) VALUES
(981724, 'Rijal Amar', '3', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
