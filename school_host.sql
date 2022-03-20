-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2022 at 07:28 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_host`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(10) NOT NULL,
  `grade` int(10) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `grade`, `c_name`) VALUES
(1, 7, 'A'),
(2, 8, 'A'),
(3, 9, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `m_id` int(10) NOT NULL,
  `English` int(10) NOT NULL,
  `IT` int(50) NOT NULL,
  `Science` int(10) NOT NULL,
  `Maths` int(10) NOT NULL,
  `History` int(10) NOT NULL,
  `average` float NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`m_id`, `English`, `IT`, `Science`, `Maths`, `History`, `average`, `total`) VALUES
(2, 85, 55, 44, 96, 0, 70, 280),
(1000, 45, 66, 77, 88, 99, 69, 276);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `nic1` varchar(15) NOT NULL,
  `mobile1` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `user_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `fname`, `lname`, `email`, `gender`, `nic1`, `mobile1`, `dob`, `user_status`) VALUES
(2, 'Nimal', 'kandy', 'jehankandy@gmail.com', 'male', '200133202630', '0781177181', '2022-03-07', 1),
(1000, 'Kamal', 'Nimal', 'nimali@123.com', 'male', '200157896322', '+940711758851', '2022-03-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nic1` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `mobile1` varchar(15) NOT NULL,
  `user_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `fname`, `username`, `pass`, `gender`, `email`, `nic1`, `dob`, `mobile1`, `user_status`) VALUES
(1, 'Jehan', '456', '202cb962ac59075b964b07152d234b70', 'male', '123@gmail.com', '123456789', '2022-03-01', '2589632147', 1),
(2, 'nimal', '789', '68053af2923e00204c3ca7c6a3150cf7', 'male', '789@789', '789789789', '2022-03-13', '789654123', 1),
(3, 'Amara', '963', '1ce927f875864094e3906a4a0b5ece68', 'male', '963@963', '963258741', '2005-02-05', '963258741', 1),
(4, 'Jehan', 'Admin', '250cf8b51c773f3f8dc8b4be867a9a02', 'male', 'admin@gmail.com', '200589748596', '2022-03-31', '+940711758851', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
