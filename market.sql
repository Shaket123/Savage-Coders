-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 12:13 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market`
--

-- --------------------------------------------------------

--
-- Table structure for table `prod`
--

CREATE TABLE `prod` (
  `pname` varchar(100) NOT NULL,
  `pver` varchar(20) NOT NULL,
  `pmoto` varchar(30) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `ptype` varchar(10) NOT NULL,
  `pdesc` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod`
--

INSERT INTO `prod` (`pname`, `pver`, `pmoto`, `mname`, `ptype`, `pdesc`) VALUES
('apk', '1.2.3.4', 'games', 'vinay', 'FREE', 'asdsd'),
('baf', '3.4.5.6', 'coso', 'Viassa', 'PAID', 'ahgahga'),
('qwe', '10.33', 'mus', 'SAV', 'FREE', 'verygood');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `userid` varchar(30) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `prev` varchar(300) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`userid`, `pname`, `prev`, `rate`) VALUES
('i', 'apk1.2.3.4', 'Goodsdofdslfsd;lfk;slfks;lfk', 3),
('i', 'apk1.2.3.4', '7658', 3),
('i', 'baf3.4.5.6', 'jgjgkjk', 5),
('i', 'apk1.2.3.4', 'jhkjhjhjk', 3),
('i', 'apk1.2.3.4', 'oipuoup', 4),
('i', 'qwe10.33', 'veryverygood', 5);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(100) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `socialid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `pass`, `userid`, `socialid`) VALUES
('', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
('i@gmail.com', '12eccbdd9b32918131341f38907cbbb5', 'i', 're');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
