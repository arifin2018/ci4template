-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2020 at 02:34 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mhsnim` char(50) NOT NULL,
  `mhsnama` varchar(100) NOT NULL,
  `mhsjenkel` varchar(2) NOT NULL,
  `mhstmplahir` varchar(100) NOT NULL,
  `mhstgllahir` date NOT NULL,
  `mhsalamat` varchar(100) NOT NULL,
  `mhstelp` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`mhsnim`, `mhsnama`, `mhsjenkel`, `mhstmplahir`, `mhstgllahir`, `mhsalamat`, `mhstelp`) VALUES
('181648658654864', 'Khoirunnisa miftahul Jannah', 'P', 'Jakarta', '2000-07-14', 'Jl.yonkav 7', '081315868012'),
('183112706450001', 'Nur Arivin', 'L', 'Jakarta', '2000-05-23', 'Jl.Gandaria II rt013 rw 02 no 17a\r\njakarta selatan.DKI JAKARTA', '081315868012');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mhsnim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
