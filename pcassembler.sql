-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2019 at 03:25 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcassembler`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Cid` int(5) NOT NULL,
  `Mid` int(5) NOT NULL,
  `Quantity` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `component`
--

CREATE TABLE `component` (
  `ID` int(5) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Feature` varchar(200) NOT NULL,
  `Price` int(10) NOT NULL,
  `Qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `component`
--

INSERT INTO `component` (`ID`, `Type`, `Name`, `Feature`, `Price`, `Qty`) VALUES
(1, 'Processor', 'Intel Core i3 3210', '2 Cores, 3.2 GHz', 7850, 50),
(2, 'Processor', 'Intel Core i5 7500', '4 Cores, 3.8 GHz', 17000, 50),
(3, 'Processor', 'Intel i7 4820k', '4 Cores, 4.2 GHz', 28990, 50),
(4, 'Processor', 'AMD FX 9590', '8 Cores, 4.7 GHz', 3400, 50),
(5, 'Processor', 'Intel Xeon E5 2620', '6 Cores, 2.1 GHz', 42990, 50),
(6, 'Motherboard', 'Gigabyte GA H6M1', 'Micro ATX, Intel H61', 2900, 30),
(7, 'Motherboard', 'MSI H61M P20', 'Micro ATX, Intel H61', 3050, 30),
(8, 'Motherboard', 'ASUS Maximus V Formula', 'Extended ATX, Intel Z97', 24000, 30),
(9, 'Motherboard', 'ASRock Z97 Extreme9', 'ATX, Intel Z97', 23999, 30),
(10, 'Motherboard', 'Intel 77RE', 'ATX, Intel X77', 28600, 30),
(11, 'RAM', 'Corsair CMZ8G', '8 GB DDR3', 7550, 60),
(12, 'RAM', 'G.SKILL RipjawsZ', '16 GB DDR4', 14900, 60),
(13, 'RAM', 'Kingston KVR1333D', '4 GB DDR3', 2850, 60),
(14, 'RAM', 'Kingston HX318', '8 GB DDR3 SDRAM', 2900, 60),
(15, 'RAM', 'Transcend JM312', '2 GB DDR4', 1675, 60),
(16, 'Storage', 'Seagate Baracuda ST1000D', '1 TB HARD DRIVE', 3390, 35),
(17, 'Storage', 'WD Caviar Green 20EZRX', '1 TB HARD DRIVE', 3850, 35),
(18, 'Storage', 'SAMSUNG 840 MZ 7TD', '128 GB SSD', 7520, 35),
(19, 'Storage', 'Corsair Neutron CSSD', '240 GB SSD', 15500, 35),
(20, 'Graphic Card', 'ASUS Geforce GTX Titan X', '12 GB GDDR5', 97500, 60),
(21, 'Graphic Card', 'Zotac Geforce GTX 1050', '4 GB DDR5', 10000, 35),
(22, 'Graphic Card', 'Sapphire AMD Radeon HD 7970', '6 GB DDR5', 50860, 60),
(23, 'Graphic Card', 'ASUS AMD Radeon 5450', '1GB DDR3', 1900, 60),
(24, 'Graphic Card', 'MSI Geforce GTX 960', '2 GB DDR5', 17500, 60),
(25, 'Graphic Card', 'Zotac Geforce GTX 970', '4 GB DDR5', 25760, 60),
(26, 'Cabinet', 'Zebronics Golf', 'ATX', 1300, 50),
(27, 'Cabinet', 'Cooler Master Elite 310', 'ATX Mid Tower', 2180, 50),
(28, 'Cabinet', 'Antec Twelve Hundred', 'ATX Fulltower', 13200, 50),
(29, 'Optical Drive', 'LG', 'GH24NS95 DVD BURNER', 1000, 50),
(30, 'Optical Drive', 'ASUS', 'DRW24B5ST DVD BURNER', 1010, 50),
(31, 'Optical Drive', 'SAMSUNG', 'SH-224BB DVD BURNER', 1150, 50),
(32, 'Optical Drive', 'HP', 'DVD1260i DVD BURNER', 1400, 50),
(33, 'Optical Drive', 'LiteOn', 'iHBS312 Blu-ray Burner', 6600, 50),
(34, 'Monitor', 'Dell', '18.5 inches, 1366x768', 4989, 50),
(35, 'Monitor', 'Samsung', '18.5 inches, 1366x768', 6000, 50),
(36, 'Monitor', 'AOC', '15.6 inches, 1366x768', 3729, 50),
(37, 'Keyboard', 'Zebronics', 'K11 USB', 310, 50),
(38, 'Keyboard', 'Amkette', 'Multimedia RX3 USB', 360, 50),
(39, 'Keyboard', 'iBall', 'Amazer PS/2 ', 390, 50),
(41, 'Keyboard', 'Dell', 'KB212 USB', 421, 50),
(42, 'Keyboard', 'Logitech', 'K100 USB', 450, 50),
(43, 'Mouse', 'Dell', 'MS111 USB Optical Mouse', 290, 50),
(44, 'Mouse', 'Belkin', 'Compact Mouse M100', 340, 50),
(45, 'Mouse', 'HP', 'Black Mouse', 340, 50),
(46, 'Mouse', 'Microsoft', 'MS 100 USB', 450, 50),
(47, 'Mouse', 'Logitech', 'M1005 Logitech Mouse', 500, 50);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created _at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) NOT NULL,
  `phone_no` int(10) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `lin` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created _at`, `name`, `phone_no`, `address`, `email_id`, `user_type`, `lin`) VALUES
(9, 'sandeep', '$2y$10$.wXKs994vNKPotlPiM99BOQ/RxMqIoIG1qn8n8H2VohVE64HhGyUi', '2018-10-23 10:46:26', '', NULL, '', '', '', 0),
(10, 'swapnil', '$2y$10$hBi4oVt0T3LAfvsmyYPHg.7qGLR1XbVKK3I1okmKU3xFEg72jGM9a', '2018-10-23 11:40:48', '', NULL, '', '', '', 0),
(11, 'yoyo124', '$2y$10$atjCFDILVE89CUmU/DxKZuSuV92Vw8IWdPcH05xVGC.LXbpsJwbki', '2019-03-10 19:23:28', '', NULL, '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cid`,`Mid`);

--
-- Indexes for table `component`
--
ALTER TABLE `component`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `component`
--
ALTER TABLE `component`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
