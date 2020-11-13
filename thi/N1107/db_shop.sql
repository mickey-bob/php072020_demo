-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 02:47 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cate`
--

CREATE TABLE `tbl_cate` (
  `id_cate` int(11) NOT NULL,
  `name_cate` varchar(100) DEFAULT NULL,
  `date_cate` datetime DEFAULT NULL,
  `status_cate` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cate`
--

INSERT INTO `tbl_cate` (`id_cate`, `name_cate`, `date_cate`, `status_cate`) VALUES
(1, 'dong ho 1', '2020-11-12 00:00:00', 1),
(2, 'dong ho 2', '2020-11-12 00:00:00', 1),
(3, 'dong ho 3', '2020-11-12 00:00:00', 1),
(4, 'dong ho 4', '2020-11-12 00:00:00', 1),
(5, 'dong ho 5', '2020-11-12 00:00:00', 1),
(6, 'casio', '2020-12-11 00:00:00', 1),
(7, 'casio 2', '2020-12-11 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `id_cate` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date_creat` datetime DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `id_cate`, `name`, `price`, `description`, `date_creat`, `status`) VALUES
(2, 2, 'dong ho 2-product', 2000, 'description product table', '2020-11-12 00:00:00', 1),
(3, 3, 'dong ho 3-product', 2000, 'description product table', '2020-11-12 00:00:00', 1),
(4, 4, 'dong ho 4-product', 2000, 'description product table', '2020-11-12 00:00:00', 1),
(5, 5, 'dong ho 5-product', 2000, 'description product table', '2020-11-12 00:00:00', 1),
(6, NULL, 'casio', 90000, 'descrip casio', '2020-12-11 00:00:00', 1),
(7, NULL, 'casio', 90000, 'descrip casio', '2020-12-11 00:00:00', 1),
(8, NULL, 'casio', 90000, 'descrip casio', '2020-12-11 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cate`
--
ALTER TABLE `tbl_cate`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cate` (`id_cate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cate`
--
ALTER TABLE `tbl_cate`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`id_cate`) REFERENCES `tbl_cate` (`id_cate`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
