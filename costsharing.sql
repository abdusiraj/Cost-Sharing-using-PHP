-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 08:17 AM
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
-- Database: `costsharing`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountant`
--

CREATE TABLE `accountant` (
  `acc_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accountant`
--

INSERT INTO `accountant` (`acc_id`, `fname`, `mname`, `lname`, `address`, `email`, `age`, `sex`, `uname`, `pass`) VALUES
(1, 'mesfin', 'Alem', 'H/Mariyam', 'Adis ababa', 'mes@mes', 25, 'male', 'mes', '123');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fname`, `mname`, `lname`, `address`, `email`, `age`, `sex`, `uname`, `pass`) VALUES
(1, 'abdu', 'sirajj', 'mollaa', 'addis ababa', 'ab1@ab1', 23, 'male', 'abdu', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `costshare`
--

CREATE TABLE `costshare` (
  `id` int(11) NOT NULL,
  `year` varchar(100) NOT NULL,
  `edu_fee` varchar(255) NOT NULL,
  `acc_fee` varchar(255) NOT NULL,
  `food_fee` varchar(255) NOT NULL,
  `medical_fee` varchar(255) NOT NULL,
  `sum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `costshare`
--

INSERT INTO `costshare` (`id`, `year`, `edu_fee`, `acc_fee`, `food_fee`, `medical_fee`, `sum`) VALUES
(1, '2013', '4500', '1000', '2500', '2000', 10000),
(2, '2012', '4500', '1000', '2500', '2000', 10000),
(3, '2014', '6500', '1000', '2500', '1000', 11000);

-- --------------------------------------------------------

--
-- Table structure for table `costsharelist`
--

CREATE TABLE `costsharelist` (
  `id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `method` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `costsharelist`
--

INSERT INTO `costsharelist` (`id`, `stu_id`, `year`, `method`, `status`) VALUES
(1, 3, 2012, 'To be paid as a deducation from the income after graduation', 'paid'),
(2, 3, 2013, 'To be paid as a deducation from the income after graduation', 'paid'),
(7, 3, 2014, 'To be paid as a deducation from the income after graduation', 'paid'),
(9, 1, 2013, 'By providing professional service', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `costsharing_officer`
--

CREATE TABLE `costsharing_officer` (
  `cos_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `costsharing_officer`
--

INSERT INTO `costsharing_officer` (`cos_id`, `fname`, `mname`, `lname`, `address`, `email`, `age`, `sex`, `uname`, `pass`) VALUES
(6, 'abdul', 'siraj', 'molla', 'addis ababa', 'abd@abd.com', 23, 'male', 'abdu', '123');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `stu_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `request` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `unpaid` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `stu_id`, `code`, `request`, `paid`, `unpaid`, `status`) VALUES
(3, 3, 1676, '', '31000', '0', 'paid'),
(7, 1, 2791, '', '10000', '0', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `registrar`
--

CREATE TABLE `registrar` (
  `reg_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrar`
--

INSERT INTO `registrar` (`reg_id`, `fname`, `mname`, `lname`, `address`, `email`, `age`, `sex`, `uname`, `pass`) VALUES
(2, 'Abdurohman', 'muha', 'rophnan', 'Arba Minch', 'rop@rop', 23, 'male', 'rophnan', '123'),
(3, 'Mesfn ', 'Alem', 'H/Mariyam', 'Adis ababa', 'mes@mes', 25, 'male', 'mesfin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stu_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `faculity` varchar(255) NOT NULL,
  `year_add` varchar(255) NOT NULL,
  `year_gratu` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stu_id`, `fname`, `mname`, `lname`, `address`, `email`, `age`, `sex`, `uname`, `pass`, `faculity`, `year_add`, `year_gratu`, `status`) VALUES
(1, 'mikael', 'shferaw', 'baba', 'addis ababa', 'mk@mk', 24, 'male', 'miki', '123', 'Faculity of Computing and Software Enginering', '2013', '', ''),
(3, 'Hayat', 'Siraj', 'Molla', 'Dessi', 'hayu@si', 21, 'Female', 'hayuti', '123', 'Faculity of Computing and Software Enginering', '2012', '2014-10-26', 'complate');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(110) NOT NULL,
  `status` int(11) NOT NULL,
  `type` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pass`, `email`, `status`, `type`) VALUES
(4, 'abdu', '123', 'abd@abd.com', 1, 'officer'),
(5, 'abdu', '1234567', 'ab1@ab1', 1, 'admin'),
(8, 'rophnan', '123', 'rop@rop', 1, 'registrar'),
(10, 'mes', '123', 'mes@mes', 1, 'accountant'),
(11, 'miki', '123', 'mk@mk', 1, 'student'),
(15, 'hayuti', '123', 'hayu@si', 1, 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountant`
--
ALTER TABLE `accountant`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `costshare`
--
ALTER TABLE `costshare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costsharelist`
--
ALTER TABLE `costsharelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costsharing_officer`
--
ALTER TABLE `costsharing_officer`
  ADD PRIMARY KEY (`cos_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrar`
--
ALTER TABLE `registrar`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountant`
--
ALTER TABLE `accountant`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `costshare`
--
ALTER TABLE `costshare`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `costsharelist`
--
ALTER TABLE `costsharelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `costsharing_officer`
--
ALTER TABLE `costsharing_officer`
  MODIFY `cos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registrar`
--
ALTER TABLE `registrar`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
