-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2017 at 08:19 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menda`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `pic`) VALUES
(1, 'banner.jpg'),
(2, 'banner.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buye`
--

CREATE TABLE `buye` (
  `id` int(11) NOT NULL,
  `id_product` varchar(255) DEFAULT NULL,
  `id_user` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buye`
--

INSERT INTO `buye` (`id`, `id_product`, `id_user`, `action`) VALUES
(2, '42', '2', '1'),
(3, '42', '2', '1'),
(4, '42', '2', '1'),
(5, '42', '2', '1'),
(6, '42', '2', '1'),
(7, '42', '2', '1'),
(8, '42', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `text` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `lastname`, `tel`, `email`, `text`) VALUES
(1, 't', 'a', 'a', '+989194331008', 'dwdw');

-- --------------------------------------------------------

--
-- Table structure for table `darkhast`
--

CREATE TABLE `darkhast` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `mablagh` bigint(20) NOT NULL,
  `active` int(11) NOT NULL,
  `shomare` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `darkhast`
--

INSERT INTO `darkhast` (`id`, `id_user`, `mablagh`, `active`, `shomare`) VALUES
(1, 2, 100, 1, '144223'),
(2, 2, 100, 1, '23232'),
(3, 2, 100, 1, '23232'),
(4, 2, 100, 1, '1239'),
(5, 2, 100, 1, '151'),
(6, 2, 160, 1, '51515'),
(7, 2, 160, 1, '51515'),
(8, 2, 160, 1, '51515');

-- --------------------------------------------------------

--
-- Table structure for table `love`
--

CREATE TABLE `love` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pic`
--

CREATE TABLE `pic` (
  `id` int(11) NOT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `id_p` int(11) NOT NULL,
  `action` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pic`
--

INSERT INTO `pic` (`id`, `pic`, `id_p`, `action`) VALUES
(102, '2017-01-31-13-40-481.jpg', 42, NULL),
(103, '2017-01-31-13-40-482.jpg', 42, NULL),
(104, '2017-01-31-13-40-483.jpg', 42, NULL),
(105, '2017-01-31-13-40-484.jpg', 42, NULL),
(106, '2017-02-06-10-48-421.jpg', 43, 1),
(107, '2017-02-06-10-48-422.jpg', 43, 1),
(108, '2017-02-06-10-48-423.jpg', 43, 1),
(109, '2017-02-06-10-48-424.jpg', 43, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `text` varchar(255) DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `visit` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `sell` int(12) DEFAULT NULL,
  `active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `id_user`, `text`, `price`, `visit`, `type`, `sell`, `active`) VALUES
(42, 'jiej', 2, 'ofkokeokfokeokfe', 168, 0, 3, 1, 1),
(43, 'hamid', 3, '9fk9ei9fi9f9ugrgijrigjirjifjijeiijifjifjeijijrgijihjtuvjnj', 940, 0, 2, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `love` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `id_prudoct` int(11) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `companyname` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `sellp` int(11) DEFAULT NULL,
  `sellpb` int(11) DEFAULT NULL,
  `action` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `love`, `pic`, `id_prudoct`, `tel`, `companyname`, `email`, `adress`, `city`, `lastname`, `sellp`, `sellpb`, `action`) VALUES
(1, 'ynutn', '74b87337454200d4d33f80c4663dc5e5', '', '', 0, '34464646', 'companu', 'a@a.com', ';pjforkgvolrebvr', 1, 'getg', 180, 160, 1),
(2, 'hamid', '99d56b682426ee50895fff5655743098', '', '', 0, '09194331008', 'company', 'h.mosaferkocholo@gmail.com', 'hamid', 1, 'nasr', 168, 900, 0),
(3, 'bhjb', '99d56b682426ee50895fff5655743098', '', '', 0, '545', 'jbj', 'h.mosaferkocholo@gmail.com', 'h.mosaferkocholo@gmail.com', 1, 'gg', 0, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buye`
--
ALTER TABLE `buye`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `darkhast`
--
ALTER TABLE `darkhast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `love`
--
ALTER TABLE `love`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `buye`
--
ALTER TABLE `buye`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `darkhast`
--
ALTER TABLE `darkhast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `love`
--
ALTER TABLE `love`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pic`
--
ALTER TABLE `pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
