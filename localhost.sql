-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 15. Februari 2014 jam 04:21
-- Versi Server: 5.0.51
-- Versi PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `warbardb`
--
CREATE DATABASE `warbardb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `warbardb`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admintbl`
--

CREATE TABLE IF NOT EXISTS `admintbl` (
  `kd_adm` varchar(5) NOT NULL,
  `nm_adm` varchar(35) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY  (`kd_adm`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admintbl`
--

INSERT INTO `admintbl` (`kd_adm`, `nm_adm`, `username`, `password`) VALUES
('ADM01', 'ashana', 'admin', 'c3284d0f94606de1fd2af172aba15bf3'),
('ADM02', 'sahifa', 'ashana', 'ifa123'),
('ADM03', 'test', 'test', '6749f66daa16c1cce7325863674fe1b8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi`
--

CREATE TABLE IF NOT EXISTS `hubungi` (
  `id_hub` int(3) NOT NULL,
  `nama_hub` varchar(50) NOT NULL,
  `email_hub` varchar(50) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `tgl_hub` date NOT NULL,
  PRIMARY KEY  (`id_hub`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hubungi`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoritbl`
--

CREATE TABLE IF NOT EXISTS `kategoritbl` (
  `id` int(11) NOT NULL auto_increment,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `kategoritbl`
--

INSERT INTO `kategoritbl` (`id`, `kategori`) VALUES
(1, 'NutrisiTubuh'),
(2, 'NutrisiKulit'),
(3, 'NutrisiJantung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggantbl`
--

CREATE TABLE IF NOT EXISTS `pelanggantbl` (
  `kd_pel` int(4) NOT NULL auto_increment,
  `nm_pel` varchar(35) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY  (`kd_pel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `pelanggantbl`
--

INSERT INTO `pelanggantbl` (`kd_pel`, `nm_pel`, `alamat`, `telepon`, `email`, `username`, `password`) VALUES
(1, 'maulida ashana', 'jln.mundu no 6a jatiasih', '089669419669', 'ashana_05@yahoo.com', 'sahifa', '2c195cae548475203604d41788ea952b'),
(2, 'test', 'test', '08', 'm', 'test', '098f6bcd4621d373cade4e832627b4f6'),
(4, 'zaky', 'jaticempak', '089787565755', 'zaky@gmail.com', 'zaky', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produktbl`
--

CREATE TABLE IF NOT EXISTS `produktbl` (
  `id` int(11) NOT NULL auto_increment,
  `kd_produk` varchar(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(35) NOT NULL,
  PRIMARY KEY  (`kd_produk`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `produktbl`
--

INSERT INTO `produktbl` (`id`, `kd_produk`, `nama`, `harga`, `deskripsi`, `kategori`, `stok`, `gambar`) VALUES
(2, 'SHK001', 'Nutrition Shake Milk', 345000, 'pengganti makanan', 'NutrisiTubuh', 10, 'F1-chocolate.jpg'),
(3, 'SHK002', 'Nutrition Shake Milk', 345000, 'Pengganti Makanan', 'NutrisiTubuh', 12, 'F1-vanilla.jpg'),
(4, 'LPB055', 'Lipo-Bond', 350000, 'nutrisi untuk jantung', 'NutrisiJantung', 5, 'lipo-bond.jpg'),
(5, 'ALO011', 'Herbal Aloe Concentrate', 145000, 'hdussiio', 'NutrisiTubuh', 9, 'herbal-aloe.jpg'),
(6, 'CRM01', 'night cream', 200000, 'krim malam', 'NutrisiKulit', 5, 'Night-Cream.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temptrans`
--

CREATE TABLE IF NOT EXISTS `temptrans` (
  `kd_produk` varchar(6) NOT NULL,
  `jml_bl` int(4) NOT NULL,
  `total` double NOT NULL,
  `kd_pel` varchar(6) NOT NULL,
  `kd_trans` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `temptrans`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `tranpesan`
--

CREATE TABLE IF NOT EXISTS `tranpesan` (
  `kd_produk` varchar(6) NOT NULL,
  `jml_bl` int(4) NOT NULL,
  `total` double NOT NULL,
  `kd_pel` varchar(6) NOT NULL,
  `kd_trans` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tranpesan`
--

INSERT INTO `tranpesan` (`kd_produk`, `jml_bl`, `total`, `kd_pel`, `kd_trans`) VALUES
('ALO011', 1, 145000, '4', 'KDTR0000'),
('SHK002', 2, 690000, '1', 'KDTR0001'),
('SHK002', 1, 345000, '1', 'KDTR0002'),
('ALO011', 1, 145000, '1', 'KDTR0003'),
('ALO011', 1, 145000, '1', 'KDTR0004');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transtbl`
--

CREATE TABLE IF NOT EXISTS `transtbl` (
  `kd_trans` varchar(10) NOT NULL,
  `kd_pel` int(4) NOT NULL,
  `tgl_trans` date NOT NULL,
  `totbay` double NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transtbl`
--

INSERT INTO `transtbl` (`kd_trans`, `kd_pel`, `tgl_trans`, `totbay`, `status`) VALUES
('KDTR0000', 4, '2014-02-11', 145000, 1),
('KDTR0001', 1, '2014-02-11', 690000, 1),
('KDTR0002', 1, '2014-02-12', 345000, 1),
('KDTR0003', 1, '2014-02-14', 145000, 1),
('KDTR0004', 1, '2014-02-14', 145000, 1);
