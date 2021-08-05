-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 03, 2021 at 01:48 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BuyStyle`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `product_id` int(50) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `product_discription` varchar(300) NOT NULL,
  `product_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`product_id`, `product_image`, `product_title`, `product_discription`, `product_price`) VALUES
(1, 'Gallery/men1.png', 'T-shirt', 'Red color casual shirt', 700),
(2, 'Gallery/men2.jpg', 'T-shirt', 'White casual t-shirt', 500),
(3, 'Gallery/men3.jpg', 'T-shirt', 'Sky blue casual t-shirt', 500),
(4, 'Gallery/men2.jpg', 'T-shirt', 'Grey casual t-shirt', 1000),
(5, 'Gallery/men5.jpg', 'T-shirt', 'Black casual t-shirt', 800),
(6, 'Gallery/men4.jpg', 'T-shirt', 'Skin color t-shirt', 700);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(50) NOT NULL,
  `uname` text NOT NULL,
  `upass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `uname`, `upass`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `menorder`
--

CREATE TABLE `menorder` (
  `id` int(11) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `product_discription` varchar(300) NOT NULL,
  `product_price` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` int(20) NOT NULL,
  `email` varchar(300) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `anymsg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menorder`
--

INSERT INTO `menorder` (`id`, `product_image`, `product_title`, `product_discription`, `product_price`, `name`, `contact`, `email`, `address`, `city`, `anymsg`) VALUES
(111, 'gallery/men1.jpg', 'T-shirt', 'red color casual t-shirt', 700, 'muzaffar', 23324324, 'muzaffr@gmail.com', 'R-555 sector-5 n.nazimabad', 'karachi', '32323');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `cusid` int(11) NOT NULL,
  `cusname` varchar(200) NOT NULL,
  `cusemail` varchar(200) NOT NULL,
  `cusphone` int(20) NOT NULL,
  `cusmsg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`cusid`, `cusname`, `cusemail`, `cusphone`, `cusmsg`) VALUES
(1, 'smaksma', 'kashaf@gmail.com', 2342343, 'sxsax'),
(2, 'smaksma', 'sa@google.com', 546564, 'hiiii'),
(3, 'hgfd', 'hgfd@google.com', 546564, 'dxcvx');

-- --------------------------------------------------------

--
-- Table structure for table `wgallery`
--

CREATE TABLE `wgallery` (
  `product_id` int(11) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_title` varchar(50) NOT NULL,
  `product_discription` varchar(300) NOT NULL,
  `product_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wgallery`
--

INSERT INTO `wgallery` (`product_id`, `product_image`, `product_title`, `product_discription`, `product_price`) VALUES
(11, 'Gallery/women1.jpg', 'Shalwar Kameez', 'Grey and Black color embroided linen shalwar kameez', 1700),
(12, 'Gallery/women2.jpg', 'Shalwar Kameez', 'Shocking Pink color cotton fabric shalwar kameez', 2500),
(13, 'Gallery/women3.jpg', 'Shalwar Kameez', 'Foan and maroon color loan fabric shalwar kameez', 2000),
(14, 'Gallery/women4.jpg', 'Shalwar Kameez', 'Red and black color reshmeen fabric shalwar kameez', 1800),
(15, 'Gallery/women5.jpg', 'Shalwar Kameez', 'Purple color reshmeen fabric shalwar kameez', 1800),
(16, 'Gallery/women6.jpg', 'Shalwar Kameez', 'Blue and bredlack color cotton fabric shalwar kameez', 1800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `menorder`
--
ALTER TABLE `menorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`cusid`);

--
-- Indexes for table `wgallery`
--
ALTER TABLE `wgallery`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menorder`
--
ALTER TABLE `menorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `cusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wgallery`
--
ALTER TABLE `wgallery`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
