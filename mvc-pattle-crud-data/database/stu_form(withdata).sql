-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2019 at 06:29 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stu_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `stu_infor`
--

CREATE TABLE `stu_infor` (
  `id` int(11) NOT NULL,
  `prefixname` varchar(20) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `stampdate` date NOT NULL,
  `id_stu` varchar(8) NOT NULL,
  `code` int(1) NOT NULL,
  `fly` int(1) NOT NULL,
  `shoot` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stu_infor`
--

INSERT INTO `stu_infor` (`id`, `prefixname`, `firstname`, `lastname`, `stampdate`, `id_stu`, `code`, `fly`, `shoot`) VALUES
(1, 'นาย', 'ธัญพิสิษฐ์', 'ซื่อตรง', '2019-05-09', '60160165', 1, 1, 0),
(2, 'นาย', 'ธัญพิสิษฐ์', 'ซื่อตรง', '2019-05-09', '60160165', 1, 1, 0),
(3, 'นาย', 'โดเรม่อน', 'มังมีศรีสุข', '2019-05-17', '99999999', 0, 1, 1),
(4, 'เด็กหญิง', 'คณาธิป', 'ซื่อตรง', '2019-05-16', '99999999', 1, 0, 0),
(5, '', '', '', '0000-00-00', '', 0, 0, 0),
(6, 'นางสาว', 'โดเรม่อน', 'มังมีศรีสุข', '2019-05-12', '60161129', 0, 1, 0),
(7, '', 'คณาธิป', 'มังมีศรีสุข', '2019-05-01', '65413872', 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stu_infor`
--
ALTER TABLE `stu_infor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stu_infor`
--
ALTER TABLE `stu_infor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
