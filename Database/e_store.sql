-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 23, 2019 at 05:03 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`) VALUES
(1, 'ASUS Zenfone Max Pro M2', 14990, '6.29\" Display | 4GB RAM | 64GB Internal Memory | 5000 mAh Battery', 'images/products/zenfone-max-pro-m2'),
(2, 'Motorola One Power', 13990, '6.2\" Display | 4GB RAM | 64GB Internal Memory | 5000 mAH Battery', 'images\\products\\moto-one-power'),
(3, 'Vivo Z1 Pro', 14990, '4 GB RAM | 64 GB ROM | 6.53 inch Display | 5000 mAh Battery', 'images/products/vivo.jpeg'),
(4, 'Redmi Note 7 Pro', 13999, 'Redmi Note 7 Pro (Space Black, 64 GB)  (4 GB RAM)', 'images/products/redmi.jpeg'),
(5, 'Realme C2', 5000, 'Realme C2 (Diamond Black, 16 GB)  (2 GB RAM)', 'images/products/realme.jpeg'),
(6, 'Realme 3', 8999, 'Realme 3 (Dynamic Black, 32 GB)  (3 GB RAM)', 'images/products/realme3.jpeg'),
(7, 'OPPO F11', 17990, 'OPPO F11 (Fluorite Purple, 128 GB)  (4 GB RAM)', 'images/products/oppo.jpeg'),
(8, 'Samsung Galaxy A50', 21490, 'Samsung Galaxy A50 (White, 64 GB)  (6 GB RAM)', 'images/products/samsungA50.jpeg'),
(9, 'Samsung Galaxy S10 Plus', 117900, 'Samsung Galaxy S10 Plus (Ceramic White, 1 TB)  (12 GB RAM)', 'images/products/samsungS10.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Prateek Kumar', 'prateekkr.o@gmail.com', 'd59f158e5d1f2056f565e83174bcc66a', '9931905946', 'Ranchi', 'Jharkhand - 834005');

-- --------------------------------------------------------

--
-- Table structure for table `users_products`
--

DROP TABLE IF EXISTS `users_products`;
CREATE TABLE IF NOT EXISTS `users_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_products`
--

INSERT INTO `users_products` (`id`, `user_id`, `product_id`, `status`) VALUES
(1, 1, 1, 'Confirmed'),
(2, 1, 2, 'Confirmed'),
(3, 1, 9, 'Confirmed');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
