-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 11, 2019 at 06:28 PM
-- Server version: 5.7.19
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
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

DROP TABLE IF EXISTS `adminlogin`;
CREATE TABLE IF NOT EXISTS `adminlogin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `secque` varchar(50) DEFAULT NULL,
  `secans` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`, `email`, `secque`, `secans`) VALUES
(1, 'admin', '12345', 'admin@gmail.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `item` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `username`, `item`, `price`, `total`, `quantity`, `date`) VALUES
(16, 'priyanka', 'Medicine 2', '150', '150', '1', '2019-05-03'),
(17, 'priyanka', 'D&D Baby Soap', '70', '140', '2', '2019-05-03'),
(18, 'priyanka', 'Head and Shoulders Shampoo', '130', '130', '1', '2019-05-03'),
(20, 'Soundarya', 'Head and Shoulders Shampoo', '130', '260', '2', '2019-05-04'),
(21, 'Soundarya', 'Medicine 2', '150', '150', '1', '2019-05-04'),
(22, 'Soundarya', 'Johnsons Baby Lotion', '180', '180', '1', '2019-05-04'),
(23, 'Soundarya', 'Johnsons Baby Powder', '100', '100', '1', '2019-05-06'),
(24, 'Soundarya', 'Medicine 2', '150', '300', '2', '2019-05-06'),
(25, 'Soundarya', 'Head and Shoulders Shampoo', '130', '130', '1', '2019-05-06'),
(26, 'Soundarya', 'Garnier Face Wash', '90', '90', '1', '2019-05-11'),
(27, 'Soundarya', 'Tresemme Shampoo', '140', '140', '1', '2019-05-11'),
(28, 'Soundarya', 'Johnsons Baby Soap', '100', '100', '1', '2019-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `stock` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `img` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `category`, `price`, `stock`, `description`, `img`) VALUES
(3, 'Dr.Ortho Pain Relief Oil', 'Ayurvedic', 120, 'In Stock', 'Dr.Ortho Pain Relief Oil', '2.jpg'),
(24, 'Chestal Honey', 'Homeopathy', 100, 'In Stock', 'Cough Syrup', '6.jpg'),
(28, 'Garnier Face Wash', 'Daily Care', 90, 'In Stock', 'Womens Face Wash', '16.jpg'),
(6, 'D&D Baby Soap', 'Baby Care', 70, 'In Stock', 'D&D Private Limited 75g', '2.jpg'),
(7, 'Pigeon Baby Transparent Soap', 'Baby Care', 100, 'In Stock', 'Baby Soap', '14.jpg'),
(26, 'Tresemme Shampoo', 'Daily Care', 140, 'In Stock', 'Hair Product', '5.jpg'),
(27, 'Dove Mens Face Wash', 'Daily Care', 100, 'In Stock', 'Mens Face Wash', '10.jpg'),
(11, 'Dr.Vaidyas LivitUp Capsules', 'Allopathic', 70, 'In Stock', 'Dr.Vaidyas LivitUp Capsules 5', '1.jpg'),
(23, 'Alpha Coff', 'Homeopathy', 100, 'In Stock', 'Cough Syrup', '4.jpg'),
(13, 'Dr.Vaidya Herbofit Pills', 'Allopathic', 160, 'In Stock', 'Dr.Vaidya Herbofit Pills', '2.jpg'),
(14, 'Rhumasyl Pain Reliever', 'Ayurvedic', 170, 'In Stock', 'Rhumasyl Pain Reliever', '3.jpg'),
(22, 'Similasan Allergy Eye Relief', 'Homeopathy', 200, 'In Stock', 'Eye Drops', '3.jpg'),
(19, 'Sri Sri Tattva ', 'Ayurvedic', 100, 'In Stock', 'Cough Syrup', '4.jpg'),
(25, 'Johnsons Baby Soap', 'Baby Care', 100, 'In Stock', 'Baby Soap', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

DROP TABLE IF EXISTS `userlogin`;
CREATE TABLE IF NOT EXISTS `userlogin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `secque` varchar(50) DEFAULT NULL,
  `secans` varchar(50) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `username`, `password`, `email`, `secque`, `secans`, `phone`, `address`) VALUES
(1, 'Soundarya', '12345', 'sound@gmail.com', 'Which is your favourite color?', 'Blue', '8978523456', '#44, 9th Main, 1st Cross, AR Colony, Bangalore');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
