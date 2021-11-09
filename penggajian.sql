-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2021 at 02:39 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajian`
--

-- --------------------------------------------------------

--
-- Table structure for table `gaji`
--

CREATE TABLE `gaji` (
  `no_slip` char(6) NOT NULL,
  `tanggal` date NOT NULL,
  `potongan` int(20) NOT NULL,
  `gaji_bersih` int(12) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `kode_petugas` varchar(11) NOT NULL,
  `absen` varchar(50) NOT NULL,
  `harian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaji`
--

INSERT INTO `gaji` (`no_slip`, `tanggal`, `potongan`, `gaji_bersih`, `nip`, `kode_petugas`, `absen`, `harian`) VALUES
('SLB001', '2019-01-03', 1050000, 9450000, '18600001', 'PTG001', '', ''),
('SLB002', '2019-01-03', 1050000, 9450000, '18600001', 'PTG001', '', ''),
('SLB003', '2019-01-03', 800000, 7200000, '18600002', 'PTG001', '', ''),
('SLB004', '2019-01-03', 560000, 5040000, '18600003', 'PTG001', '', ''),
('SLB005', '2021-02-13', 4000000, 4000000, '18600004', 'PTG001', '', ''),
('SLB006', '2021-04-13', 5250000, 5250000, '18600001', 'PTG001', '', ''),
('SLB007', '2021-04-19', 350000, 3150000, '18600006', 'PTG001', '', ''),
('SLB008', '2021-05-03', 2884625, 3384625, '18600008', 'PTG001', '25', '115385'),
('SLB009', '2021-05-05', 0, 1500000, '18600011', 'PTG001', '0', '146000'),
('SLB010', '2021-04-05', 3796000, 5296000, '18600011', 'PTG001', '26', '146000');

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `kode_golongan` char(6) NOT NULL,
  `golongan` varchar(15) NOT NULL,
  `tj_suami_istri` int(20) NOT NULL,
  `tj_anak` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`kode_golongan`, `golongan`, `tj_suami_istri`, `tj_anak`) VALUES
('GOL001', 'Golongan 1', 500000, 400000),
('GOL002', 'Golongan 2', 600000, 500000),
('GOL003', 'Golongan 3', 700000, 600000),
('GOL004', 'Golongan 4', 800000, 750000),
('GOL005', 'Golongan5', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `kode_jabatan` char(6) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL,
  `gaji_pokok` int(30) NOT NULL,
  `tj_jabatan` int(30) NOT NULL,
  `harian` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`kode_jabatan`, `nama_jabatan`, `gaji_pokok`, `tj_jabatan`, `harian`) VALUES
('JBT001', 'Projeck Manager', 8500000, 2000000, 327000),
('JBT002', 'Senior Programmer', 6500000, 1500000, 250000),
('JBT003', 'Junior Programmer', 3800000, 1500000, 146000),
('JBT004', 'HRD', 4500000, 2000000, 173000),
('JBT005', 'staff IT', 3000000, 1500000, 115000),
('JBT006', 'Satpam', 1500000, 500000, 58000),
('JBT007', 'Admin Cabang', 3000000, 500000, 115385);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nama2` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kode_jabatan` varchar(6) NOT NULL,
  `kode_golongan` varchar(6) NOT NULL DEFAULT 'GOL005',
  `status` varchar(15) NOT NULL,
  `jumlah_anak` int(6) NOT NULL,
  `alamat` text NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `nowa` varchar(50) NOT NULL,
  `tgl_gabung` date NOT NULL,
  `norek` varchar(50) NOT NULL,
  `absen` int(30) NOT NULL DEFAULT '0',
  `kelurahan` varchar(50) DEFAULT NULL,
  `kecamatan` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `kode_pos` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `nama2`, `tempat_lahir`, `tanggal_lahir`, `kode_jabatan`, `kode_golongan`, `status`, `jumlah_anak`, `alamat`, `cabang`, `nohp`, `nowa`, `tgl_gabung`, `norek`, `absen`, `kelurahan`, `kecamatan`, `kota`, `kode_pos`) VALUES
(18600001, 'Dwiki', 'Firmansyah1', 'Mojo Pati Jawa Tengah', '2002-07-03', 'JBT001', 'GOL002', 'Belum Menikah', 0, 'kp boelak', 'Ruhmtech', '082110148215', '082110148215', '2021-04-13', '1321321', 10, 'jakasetia', 'bekasi selatan', 'bekasi', '2131'),
(18600002, 'Dwiki', 'Firmansyah2', 'Kaligarang jepara', '2002-08-01', 'JBT004', 'GOL005', 'Belum Menikah', 0, '4', 'Ruhmtech', '4', '4', '2021-04-14', '4', 26, NULL, NULL, NULL, NULL),
(18600003, 'Dwiki', 'Firmansyah3', 'Sirahan Pati', '2001-06-07', 'JBT005', 'GOL005', 'Belum Menikah', 0, 'dasd', 'Ruhmtech', '01231213', '21313', '2021-04-12', '21312', 20, NULL, NULL, NULL, NULL),
(18600004, 'Dwiki', 'Firmansyah4', 'Jakarta', '1999-12-04', 'JBT002', 'GOL001', 'Belum Menikah', 0, 'dawdawdawd', 'Ruhmtech', '2323', '2323', '2021-05-05', '2323', 19, NULL, NULL, NULL, NULL),
(18600005, 'Dwi', '', 'jakarta', '1999-12-04', 'JBT001', 'GOL005', 'Belum Menikah', 0, 'dawdawd', 'Ruhmtech', '2323', '23', '2021-05-05', '232', 21, NULL, NULL, NULL, NULL),
(18600006, 'Isnaini', '', 'ngawi', '1998-04-15', 'JBT007', 'GOL005', 'Belum Menikah', 0, 'kp boalak', 'PT.Ruhmtech', '029120980', '109218209', '2021-04-19', '012818020', 20, NULL, NULL, NULL, NULL),
(18600007, 'dawdaw', '', 'asdad', '2021-05-03', 'JBT003', 'GOL005', 'Belum Menikah', 0, 'nbnb', 'LERENG LAWU BINTARA', '9778', '2434', '1999-05-31', '54754', 0, NULL, NULL, NULL, NULL),
(18600008, 'dini', '', 'jakara', '1999-04-15', 'JBT007', 'GOL005', 'Belum Menikah', 0, 'nasdnasdasdawd', 'Ruhmtech', '9898098', '9809890', '2021-05-03', '90898', 25, NULL, NULL, NULL, NULL),
(18600009, 'dadawdawd', '', '2232', '2021-05-05', 'JBT003', 'GOL005', 'Menikah', 1, 'awdawdawd', 'VIKA PRIUK', '2323', '2323', '2021-05-05', '2323', 26, NULL, NULL, NULL, NULL),
(18600010, 'omjun', '', 'bkasi', '1999-10-10', 'JBT003', 'GOL005', 'Menikah', 1, '098', 'VIKA PRIUK', '990098', '890890', '2021-05-05', '08098', 0, NULL, NULL, NULL, NULL),
(18600011, 'jono', '', 'bekasi', '1999-12-04', 'JBT003', 'GOL005', 'Menikah', 2, 'dasdasd', 'LERENG LAWU BINTARA', '135121', '21321', '2021-05-06', '321321', 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `kode_petugas` char(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`kode_petugas`, `nama`, `username`, `password`, `status`) VALUES
('PTG001', 'Komisaris 1', 'komisaris', 'komisaris', 'admin'),
('PTG002', 'Admin Cabang', 'hrd', 'hrd', 'HRD'),
('PTG003', '', 'ceo', 'ceo', 'CEO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`no_slip`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`kode_golongan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kode_jabatan`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`kode_petugas`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
