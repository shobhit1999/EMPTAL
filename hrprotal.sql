-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2020 at 05:42 PM
-- Server version: 5.7.21-log
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrprotal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `pass`) VALUES
(1, 'shobhit', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `name` varchar(50) NOT NULL,
  `Dt` date NOT NULL,
  `present` int(11) NOT NULL,
  `absent` int(11) NOT NULL,
  `late` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `remarks` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`name`, `Dt`, `present`, `absent`, `late`, `Status`, `remarks`) VALUES
('Shobhit Mangla', '2018-06-27', 1, 0, 0, 'Present', ''),
('gagan', '2018-06-27', 1, 0, 0, 'Present', ''),
('aman', '2018-06-27', 1, 0, 0, 'Present', ''),
('Shobhit Mangla', '2018-06-28', 0, 1, 0, 'Absent', ''),
('Gagan', '2018-06-28', 0, 0, 1, 'Late', ''),
('aman', '2018-06-28', 0, 1, 0, 'Absent', ''),
('Shobhit Mangla', '2018-06-29', 1, 0, 0, 'Present', ''),
('Gagan', '2018-06-29', 1, 0, 0, 'Present', ''),
('aman', '2018-06-29', 1, 0, 0, 'Present', ''),
('Nishchay', '2018-06-29', 1, 0, 0, 'Present', ''),
('', '2018-07-04', 0, 0, 1, 'Late', ''),
('Shobhit Mangla', '2018-07-04', 0, 1, 0, 'Absent', ''),
('Gagan', '2018-07-04', 1, 0, 0, 'Present', ''),
('aman', '2018-07-04', 0, 0, 1, 'Late', ''),
('Nishchay', '2018-07-04', 1, 0, 0, 'Present', '');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `award` varchar(50) NOT NULL,
  `DOA` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `award`, `DOA`, `name`) VALUES
(1, 'Most Manufacturing Products', '2018-06-08', 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `comment`) VALUES
(1, 'Shobhit Mangla', 'manglashobhit@gmail.com', 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `Dt` date NOT NULL,
  `image` varchar(1000) DEFAULT NULL,
  `content` varchar(1000) NOT NULL,
  `writer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `Dt`, `image`, `content`, `writer`) VALUES
(1, 'Automakers warn U.S. tariffs will cost hundreds of thousands of jobs, hike prices', '2018-06-28', NULL, 'Two major auto trade groups on Wednesday warned the Trump administration that imposing up to 25 percent tariffs on imported vehicles would cost hundreds of thousands of auto jobs, dramatically hike prices on vehicles and threaten industry spending on self-driving cars.\r\n', 'Shobhit Mangla'),
(3, 'Jaguar Land Rover to set up manufacturing line for engines at Pune plant', '2018-06-28', NULL, 'Tata Motors-owned Jaguar Land Rover is committing fresh money into the parent company’s home market by investing in an engine assembly and manufacturing line at the Pune plant, as it seeks to carve a meaningful place for itself in the Indian luxury-car space.\r\n\r\nAn also-ran in the Indian market for long, JLR broke into double digits in market share for the first time last financial year, thanks to a price correction.', 'Shobhit Mangla');

-- --------------------------------------------------------

--
-- Table structure for table `parts`
--

CREATE TABLE `parts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `img_src` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `parts`
--

INSERT INTO `parts` (`id`, `name`, `code`, `img_src`) VALUES
(1, 'Clutch Shaft', '21KS20', 'https://cpimg.tistatic.com/00945991/s/4/Clutch-Shaft.jpg'),
(2, 'Cyliinder Covr', '22K210', 'https://cpimg.tistatic.com/01112814/s/4/Automobile-Cylinder-Cover.jpg'),
(3, 'Chasis Frame', '88k510', 'https://tiimg.tistatic.com/fp/thumb/4/001/320/forklift-chassis-frames-873.jpg'),
(4, 'Four Way Valve', '56473JHFC345', 'https://cpimg.tistatic.com/01662691/s/4/Four-Way-Valve-Body.jpg'),
(9, 'Chamber', '357KB8954', 'https://cpimg.tistatic.com/01188245/s/4/Screen-Chamber-Oil-Grease-Tank.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` char(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `doj` date NOT NULL,
  `department` char(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `active` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `name`, `email`, `pass`, `country`, `city`, `pincode`, `sex`, `dob`, `doj`, `department`, `address`, `phone`, `mobile`, `active`) VALUES
(1, 'Shobhit Mangla', 'manglashobhit@gmail.com', 'NTUwZGUzMTM4ZGJkNjMwMDJjZDQwZDI1YmRiOWNkMTg=', 'India', 'Faridabad', '122501', 'M', '1994-07-03', '2009-07-19', 'IT', 'Faridabad', 1234, 9992212337, '1'),
(2, 'Manager', 'manager@gmail.com', 'NTUwZGUzMTM4ZGJkNjMwMDJjZDQwZDI1YmRiOWNkMTg=', 'India', 'Gurgaon', '122403', 'M', '1991-06-27', '2006-04-23', 'HR', 'Gurugram', 53722, 9996246126, '1'),
(3, 'Gagan', 'gagan@gmail.com', 'NTUwZGUzMTM4ZGJkNjMwMDJjZDQwZDI1YmRiOWNkMTg=', 'India', 'Faridabad', '1232', 'M', '1999-04-11', '2006-01-21', 'HR', 'Faridabad', 5784387, 9756667463, '1'),
(4, 'aman', 'aman@gmail.com', 'NTUwZGUzMTM4ZGJkNjMwMDJjZDQwZDI1YmRiOWNkMTg=', 'India', 'Faridabad', '121101', 'M', '2018-12-31', '2017-09-27', 'HR', 'Faridabad', 74328, 9738219746, '1'),
(6, 'Nishchay', 'nishchay@gmail.com', 'NTUwZGUzMTM4ZGJkNjMwMDJjZDQwZDI1YmRiOWNkMTg=', 'India', 'Ludhiana', '12343', 'M', '1994-06-28', '2006-03-24', 'IT', 'Ludhiana', 77482819, 9836527612, '1'),
(7, 'Jatin Khanna', 'jatinkhanna@gmail.com', 'ZGY1NTZlM2ViNzM5NjU1ODI3NmUwNjA3MWRiNWQzODY=', 'India', 'Ludhiana', '122301', 'M', '1998-03-19', '2016-03-24', 'HR', 'Ludhiana', 27372781, 9988726371, '1'),
(8, 'Parag', 'parag@gmail.com', 'NTUwZGUzMTM4ZGJkNjMwMDJjZDQwZDI1YmRiOWNkMTg=', 'India', 'Gujarat', '1232232', 'M', '1997-05-20', '2017-06-25', 'IT', 'Gujarat', 7362712789, 9263575732, '1'),
(9, 'asdd', 'djbsdkjb@gmail.com', 'ZjkyNzRmN2QwM2FiZTIzMGY5NDU5OWI1MTUyYmM0YTc=', 'India', 'Gurgaon', '', 'M', '1999-01-29', '2014-01-29', 'IT', 'Gurugram', 223672, 9932774322, '1'),
(10, 'Shobhit Mangla', 'ashg@gmail.com', 'ZjkyNzRmN2QwM2FiZTIzMGY5NDU5OWI1MTUyYmM0YTc=', 'India', 'Faridabad', '122508', 'M', '1986-08-04', '2010-12-29', 'IT', 'Faridabad', 3667328, 9376278773, '1'),
(11, 'aman', 'a@gmail.com', 'NTUwZGUzMTM4ZGJkNjMwMDJjZDQwZDI1YmRiOWNkMTg=', 'India', 'Faridabad', '121102', 'M', '2017-12-30', '2018-12-31', 'CSE', 'Faridabad', 124987987, 9326467347, '0'),
(12, 'aman', 'a1@gmail.com', 'NTUwZGUzMTM4ZGJkNjMwMDJjZDQwZDI1YmRiOWNkMTg=', 'India', 'Faridabad', '121102', 'M', '2015-11-29', '2018-11-30', 'CSE', 'Faridabad', 129437687, 9997436766, '0'),
(13, '$hobhit Mangla', 's@yahoo.com', 'ZjkyNzRmN2QwM2FiZTIzMGY5NDU5OWI1MTUyYmM0YTc=', 'India', 'Faridabad', '123456', 'M', '1997-07-17', '2018-07-06', 'CSE', 'Faridabad', 124368726, 9976476767, '1');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fd` varchar(50) NOT NULL,
  `td` varchar(50) NOT NULL,
  `reason` char(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `status` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `fd`, `td`, `reason`, `mobile`, `status`) VALUES
(1, 'Shobhit Mangla', '2018-05-31', '2018-06-03', 'sick', 999999999, 'Accepted'),
(1, 'Shobhit Mangla', '2018-12-31', '2018-12-31', 'sick', 999999999, 'Accepted'),
(3, 'gagan', '2018-05-31', '2018-06-06', 'sick', 9928858869, 'Rejected'),
(4, 'ravinder', '2018-06-01', '2018-06-05', 'sick', 999999999, 'Accepted'),
(1, 'Shobhit Mangla', '2018-12-31', '2017-12-31', 'sick', 999999999, 'Accepted'),
(6, 'Shobhit Mangla', '2018-12-31', '2019-01-05', 'sick', 999999999, 'Accepted'),
(9, 'aman', '2018-12-31', '2018-12-31', 'sick', 1234567890, 'Accepted'),
(6, 'Shobhit Mangla', '2018-12-31', '2018-12-31', 'sick', 456789876, 'Accepted'),
(3, 'gagan', '2017-10-30', '2017-11-30', 'sick', 9376478678, 'Rejected'),
(4, 'Aman', '2018-07-10', '2018-07-14', 'sick', 9928858869, 'Accepted'),
(1, 'Shobhit Mangla', '2018-12-31', '2018-10-31', 'sick', 1234, 'Accepted'),
(1, 'Shobhit Mangla', '2018-11-22', '2018-11-23', 'sick', 9928858869, 'Accepted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parts`
--
ALTER TABLE `parts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parts`
--
ALTER TABLE `parts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
