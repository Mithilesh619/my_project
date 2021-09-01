-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 04:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mithilesh`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `pan_no` varchar(30) NOT NULL,
  `aadhar_no` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `password`, `gender`, `pan_no`, `aadhar_no`) VALUES
(1, 'Mithilesh', 'mith@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'F', '2222222e', '11111111'),
(11, 'seeta', 's@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'F', 'fdffef5454', '54rereref'),
(12, 'geeta', 'g@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'M', '2dfdf2', 'fffd5445'),
(15, 'dhiraj', 'dhi@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'M', '123asdf', '456asdf'),
(17, 'seema', 's@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'F', '123awsdf', '564dfad'),
(18, 'rama', 'ra@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'F', '54545465', '111111111'),
(20, 'suresh', 'sur@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'M', 'fdfd343', 'r34dfdf');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` char(1) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonecode` int(2) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `password`, `gender`, `email`, `phonecode`, `phone`) VALUES
(1, 'mithilesh', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'M', 'm@gmail.com', 91, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_document`
--

CREATE TABLE `tbl_user_document` (
  `id` int(5) NOT NULL,
  `aadhar_img` varchar(100) NOT NULL,
  `pan_img` varchar(100) NOT NULL,
  `upload_by` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user_document`
--

INSERT INTO `tbl_user_document` (`id`, `aadhar_img`, `pan_img`, `upload_by`) VALUES
(1, 'img1.jpg', 'img2.jpg', ''),
(2, 'img10.jpg', 'img11.png', ''),
(3, 'img10.jpg', 'img11.png', ''),
(4, 'img1.jpg', 'img2.jpg', ''),
(5, 'img3.jpg', 'img4.jpg', ''),
(6, 'img7.jpg', 'img8.jpg', ''),
(7, 'img7.jpg', 'img8.jpg', ''),
(8, 'img9.jpg', 'img10.jpg', ''),
(9, 'img5.jpg', 'img6.jpg', ''),
(10, 'img3.jpg', 'img4.jpg', ''),
(11, 'img6.jpg', 'img7.jpg', ''),
(12, 'img1.jpg', 'img2.jpg', ''),
(13, 'img1.jpg', 'img2.jpg', ''),
(14, 'img4.jpg', 'img5.jpg', ''),
(15, 'img6.jpg', 'img7.jpg', ''),
(16, 'img5.jpg', 'img6.jpg', ''),
(17, 'img2.jpg', 'img3.jpg', ''),
(18, 'img11.png', 'img10.jpg', ''),
(19, 'img8.jpg', 'img9.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_document`
--
ALTER TABLE `tbl_user_document`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user_document`
--
ALTER TABLE `tbl_user_document`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
