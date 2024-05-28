-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 09:58 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baza_de_date_licenta`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'employee', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_postari`
--

CREATE TABLE `tabel_postari` (
  `id` int(5) NOT NULL,
  `nume_user` varchar(255) NOT NULL,
  `id_user` int(10) NOT NULL,
  `poza_user` varchar(255) NOT NULL,
  `comentariu` varchar(255) NOT NULL,
  `numar_likeuri` int(10) NOT NULL,
  `data_comentariului` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_postari`
--

INSERT INTO `tabel_postari` (`id`, `nume_user`, `id_user`, `poza_user`, `comentariu`, `numar_likeuri`, `data_comentariului`) VALUES
(1, 'Sean Rollins', 0, 'https://play-lh.googleusercontent.com/a-/ACNPEu_k_DiVhhysgKAoiWEuXvZwAD7AlKKOYM7Pl8Us5A', 'Twitter\'s obsession with turning itself into tiktok is ridiculous. It\'s now pointless to click into ...', 7121, '2022-10-28'),
(2, '\r\nAndrew Pike', 0, 'https://play-lh.googleusercontent.com/a-/ACNPEu8VHT1vDgujFXHE6AKuhd1JzzjEDPMFXPqWY6hByg', 'Absolute rubbish. It still keeps refreshing after updated. This is the only app that does this. Addi...', 4833, '2022-08-26'),
(3, 'Dean Hampton', 0, 'https://play-lh.googleusercontent.com/a/ALm5wu02sLmGpsXszeksj4-0Et08KNvxWD3r76pJ_Zuw=mo', 'The most recent update has ruined this app. The auto-generated captions are extremely inaccurate, wa...', 2409, '2024-08-26'),
(4, 'ana', 0, 'dasdabidbabsd', 'dsadada', 2, '2001-12-05'),
(5, '', 0, '', '', 0, '0000-00-00'),
(6, '', 0, '', '', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tweeter_user`
--

CREATE TABLE `tweeter_user` (
  `id_user` int(255) NOT NULL,
  `nume_user` int(255) NOT NULL,
  `influencer` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_postari`
--
ALTER TABLE `tabel_postari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tweeter_user`
--
ALTER TABLE `tweeter_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_postari`
--
ALTER TABLE `tabel_postari`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tweeter_user`
--
ALTER TABLE `tweeter_user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
