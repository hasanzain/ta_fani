-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 05:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_orang`
--

-- --------------------------------------------------------

--
-- Table structure for table `datakorban`
--

CREATE TABLE `datakorban` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `pekerja` varchar(20) NOT NULL,
  `Divisi` varchar(20) NOT NULL,
  `xt` float NOT NULL,
  `yt` float NOT NULL,
  `xreal` float NOT NULL,
  `yreal` float NOT NULL,
  `timestamp` varchar(30) NOT NULL,
  `lantai` varchar(20) NOT NULL,
  `timestamp1` varchar(20) NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datakorban`
--

INSERT INTO `datakorban` (`id`, `nama`, `pekerja`, `Divisi`, `xt`, `yt`, `xreal`, `yreal`, `timestamp`, `lantai`, `timestamp1`, `status`) VALUES
(1, 'Irfani ', 'ac:23:3f:26:08:fe', 'Electrical', 10, 20, 10, 30, '2020-03-06 14:30:47', '0', '2020-03-06 14:30:47', ''),
(2, 'Deviyanti ', 'ac:23:3f:26:08:6e', 'IT', 20, 10, 0, 0, '2020-01-13 17:23:18', '0', '2020-01-13 17:23:18', ''),
(3, 'Dewi Titha', 'ac:23:3f:2f:a9:ed', 'Instrument', 1.1, 20.9286, 2.5788, 18.975, '2020-03-25 22:51:53', 'lt4', '2020-01-13 16:22:48', ''),
(4, 'Devi', 'ac:23:3f:26:08:6f', 'Mechanical', 0, 0, 0, 0, '2020-02-25 14:41:20', '0', '2020-02-25 14:41:20', ''),
(5, 'Fahmi NHN', 'f8:c3:9e:81:43:7c', 'Electrical', 0, 0, 0, 0, '2020-01-14 10:11:51', '0', '2020-01-14 10:11:51', ''),
(8, 'Irfani Widya ', 'e3:99:b8:5e:d1:6a', 'Mechanical', 1.1, 20.103, 1.765, 22.123, '2020-04-19 20:11:44', 'lt4', '2020-02-25 14:41:21', ''),
(10, 'Rizka Rifdatus', 'ac:23:3f:26:08:f2', 'Mechanical', 1.24416, 20.9651, 1.5, 23, '2020-04-19 20:11:44', 'lt4', '2020-03-25 21:45:07', 'prediksi'),
(11, 'Rizka Rifdatus', 'ac:23:3f:26:08:f2', 'Mechanical', 1.5, 23, 1.5, 23, '2020-04-19 20:11:44', 'lt4', '2020-03-25 21:45:07', 'real');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datakorban`
--
ALTER TABLE `datakorban`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datakorban`
--
ALTER TABLE `datakorban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
