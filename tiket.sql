-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2019 at 03:54 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `idlevel` int(5) NOT NULL,
  `namalevel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`idlevel`, `namalevel`) VALUES
(1, 'admin'),
(2, 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `idpemesanan` int(5) NOT NULL,
  `tempatpemesanan` varchar(60) NOT NULL,
  `tglpemesanan` date NOT NULL,
  `idpenumpang` int(5) NOT NULL,
  `ruteawal` varchar(100) NOT NULL,
  `ruteakhir` varchar(100) NOT NULL,
  `tglberangkat` date NOT NULL,
  `jumlahkursi` int(2) NOT NULL,
  `totalbayar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `idpenumpang` int(5) NOT NULL,
  `namapenumpang` varchar(60) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jk` varchar(1) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `idlevel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`idpenumpang`, `namapenumpang`, `username`, `password`, `alamat`, `tanggallahir`, `jk`, `telp`, `idlevel`) VALUES
(3, 'Dodi Wijaya', 'dodi', '$2y$10$lb7Gxwj9jwZimRfr7OBjM..5/aYIvRDaVfMXjeiey6yjMg231Gl6q', 'tangerang selatan', '1993-08-15', 'l', '082625372537', 2),
(4, 'Didik Kusuma', 'didik', '$2y$10$2AFbv8pYxKNu451X.b.JM.ijzaZymVG.KO9S8ZfrcIMw/3EpWJRoS', 'tangerang', '1992-08-14', 'l', '082625372532', 2),
(5, 'Wiwin Uno', 'wiwin', '$2y$10$Lm0W3UIWncY3mzJmK6gDl.33SOq.ZTApG7JQp4Zv5w37Aib4h3uGS', 'tangerang', '1992-08-31', 'p', '082625372539', 2),
(6, 'arief wicaskono', 'arief123', '$2y$10$zHEqYL/ESgOzZOl0hFbDdeQJ/7GABJngPqcqU52pPaButbEshHjMO', 'pamulang', '2019-09-20', 'l', '082625372932', 2);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `idpetugas` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(256) NOT NULL,
  `namapetugas` varchar(60) NOT NULL,
  `idlevel` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`idpetugas`, `username`, `password`, `namapetugas`, `idlevel`) VALUES
(6, 'admin', '$2y$10$EhoguORQ2F2VjlJU.Ux4LeJTteX4zrvsBhVe2vAypycexa93YcnvG', 'Admin', 1),
(9, 'mimin', '$2y$10$znkZqIlkQDLrvwq.M0lCC.d7i.Uc8ePOcx0.mMvHTDwu2g1EIq4LG', 'Mimin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rutekereta`
--

CREATE TABLE `rutekereta` (
  `idrutekereta` int(5) NOT NULL,
  `ruteawal` varchar(100) NOT NULL,
  `ruteakhir` varchar(100) NOT NULL,
  `jamberangkat` varchar(10) NOT NULL,
  `jamtiba` varchar(10) NOT NULL,
  `harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rutekereta`
--

INSERT INTO `rutekereta` (`idrutekereta`, `ruteawal`, `ruteakhir`, `jamberangkat`, `jamtiba`, `harga`) VALUES
(1, 'GMR-Gambir Station, Jakarta', 'KPN-Keoanjen Station, Malang', '08:30', '10:30', 550000),
(2, 'GMR-Gambir Station, Jakarta', 'CCL-Cicalengka Station, Bandung', '10:00', '12:00', 200000),
(3, 'KPN-Keoanjen Station, Malang', 'CCL-Cicalengka Station, Bandung', '10:00', '14:00', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `rutepesawat`
--

CREATE TABLE `rutepesawat` (
  `idrutepesawat` int(5) NOT NULL,
  `ruteawal` varchar(100) NOT NULL,
  `ruteakhir` varchar(100) NOT NULL,
  `jamberangkat` varchar(10) NOT NULL,
  `jamtiba` varchar(10) NOT NULL,
  `harga` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rutepesawat`
--

INSERT INTO `rutepesawat` (`idrutepesawat`, `ruteawal`, `ruteakhir`, `jamberangkat`, `jamtiba`, `harga`) VALUES
(1, 'CGK-Soekarno Hatta Internasional Airport, Jakarta', 'DPS-Ngurah Rai Internasional Airport, Bali', '04:30', '07:20', 845000),
(2, 'CGK-Soekarno Hatta Internasional Airport, Jakarta', 'SUB-Juanda Internasional Airport, Surabaya', '08:30', '10:30', 900000),
(3, 'DPS-Ngurah Rai Internasional Airport, Bali', 'SUB-Juanda Internasional Airport, Surabaya', '07:00', '07:46', 300000),
(4, 'DPS-Ngurah Rai Internasional Airport, Bali', 'CGK-Soekarno Hatta Internasional Airport, Jakarta', '01:02', '02:03', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `transportasi`
--

CREATE TABLE `transportasi` (
  `idtransportasi` int(5) NOT NULL,
  `jumlahkursi` int(2) NOT NULL,
  `idtypetransportasi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `typetransportasi`
--

CREATE TABLE `typetransportasi` (
  `idtypetransportasi` int(5) NOT NULL,
  `namatype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`idlevel`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`idpemesanan`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`idpenumpang`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`idpetugas`);

--
-- Indexes for table `rutekereta`
--
ALTER TABLE `rutekereta`
  ADD PRIMARY KEY (`idrutekereta`);

--
-- Indexes for table `rutepesawat`
--
ALTER TABLE `rutepesawat`
  ADD PRIMARY KEY (`idrutepesawat`);

--
-- Indexes for table `transportasi`
--
ALTER TABLE `transportasi`
  ADD PRIMARY KEY (`idtransportasi`);

--
-- Indexes for table `typetransportasi`
--
ALTER TABLE `typetransportasi`
  ADD PRIMARY KEY (`idtypetransportasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `idlevel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `idpemesanan` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `idpenumpang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `idpetugas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `rutekereta`
--
ALTER TABLE `rutekereta`
  MODIFY `idrutekereta` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rutepesawat`
--
ALTER TABLE `rutepesawat`
  MODIFY `idrutepesawat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transportasi`
--
ALTER TABLE `transportasi`
  MODIFY `idtransportasi` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `typetransportasi`
--
ALTER TABLE `typetransportasi`
  MODIFY `idtypetransportasi` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
