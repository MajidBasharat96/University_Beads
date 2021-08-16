-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 09:11 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beads`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '123'),
('shahzaib@admin.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(7, 'First Tier'),
(8, 'Second Tier'),
(9, 'Third Tier');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dept_ID` int(11) NOT NULL,
  `Uni_ID` int(11) NOT NULL,
  `Dept_Name` varchar(255) NOT NULL,
  `PHD_Faculty` int(10) NOT NULL,
  `Last_Merit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dept_ID`, `Uni_ID`, `Dept_Name`, `PHD_Faculty`, `Last_Merit`) VALUES
(1, 1, 'Computer Science', 9, 45),
(2, 1, 'BBA', 4, 40),
(3, 2, 'Computer Science', 9, 45),
(4, 2, 'BBA', 4, 40),
(5, 3, 'Software Engineering', 3, 55),
(6, 3, 'Computer Science', 4, 40),
(7, 2, 'Bs Acoounting and Finance', 3, 45),
(8, 2, 'BS Clinical phsycology', 4, 45),
(9, 1, 'Textile Engineering', 11, 49),
(10, 1, 'Fashion', 4, 47),
(11, 2, 'Fashion Design', 2, 40),
(12, 2, 'Software Engineering', 9, 50),
(13, 1, 'Software Engineering', 18, 55),
(14, 6, 'Computer Science', 8, 60),
(15, 6, 'Software Engineering', 8, 65),
(16, 7, 'Computer Science', 4, 50),
(17, 7, 'BBA', 2, 47),
(18, 9, 'Computer Science', 4, 47),
(19, 9, 'Software Engineering', 4, 50),
(20, 9, 'BBA', 2, 50),
(21, 12, 'MBBS', 107, 91),
(22, 12, 'Dentist', 107, 79),
(23, 13, 'MBBS', 178, 92),
(24, 1, 'Acoounting and finance', 9, 60);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL,
  `s_phone` varchar(255) NOT NULL,
  `s_Matric marks` varchar(255) NOT NULL,
  `s_interests` varchar(255) NOT NULL,
  `s_password` varchar(255) NOT NULL,
  `s_Gender` int(11) NOT NULL,
  `s_Entry Test Marks` int(11) NOT NULL,
  `s_inter Marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_email`, `s_phone`, `s_Matric marks`, `s_interests`, `s_password`, `s_Gender`, `s_Entry Test Marks`, `s_inter Marks`) VALUES
(1, 'Majid', '15137011@gift.edu.pk', '0123456789', '777', 'Computer Science', '123456', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `id` int(10) NOT NULL,
  `First_name` varchar(10) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `interMarks` int(4) NOT NULL,
  `Gender` varchar(4) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Email` text NOT NULL,
  `Interested_Dept` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cpassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`id`, `First_name`, `Last_name`, `phone_number`, `interMarks`, `Gender`, `City`, `Email`, `Interested_Dept`, `password`, `cpassword`) VALUES
(2, 'Shahzaib', 'Rajput', 2147483647, 90, 'Male', 'Ghakkhar mandi', 'sal@gmail.com', '', '123', '123'),
(3, 'Sal', 'Jad', 2147483647, 90, 'Male', 'Ghakkhar mandi', 'admin', '', '123', '123'),
(4, 'Shahzaib', 'Rajput', 2147483647, 60, 'Male', 'Ghakkhar mandi', 'lordshahzaib823@gmail.com', '', 'uni55555', 'uni55555');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `Uni_Id` int(10) NOT NULL,
  `Uni_Name` varchar(100) NOT NULL,
  `Uni_City` varchar(25) NOT NULL,
  `Uni_URL` varchar(255) NOT NULL,
  `Uni_PHD` int(10) NOT NULL,
  `Uni_Category` int(5) NOT NULL,
  `uni_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`Uni_Id`, `Uni_Name`, `Uni_City`, `Uni_URL`, `Uni_PHD`, `Uni_Category`, `uni_pic`) VALUES
(1, 'University of Centeral Punjab', 'Lahore', 'www.ucp.edu.pk/how-to-apply', 72, 0, 'ucp.jpg'),
(2, 'Gift University', 'Gujranwala', 'www.gift.edu.pj', 29, 0, '2.jpg'),
(3, 'University of Sialkot', 'Sialkot', 'www.uskt.edu.pk', 10, 0, 'uos.jpg'),
(4, 'University of Gujrat', 'Gujrat', 'www.uog.edu.pk', 12, 0, 'uog.jpg'),
(5, 'Punjab University', 'Lahore', 'www.pu.edu.pk', 178, 1, 'pu.jpg'),
(6, 'Punjab University', 'Gujranwala', 'www.pu.edu.pk', 22, 1, 'pu.jpg'),
(7, 'University of Central Punjab', 'Gujranwala', 'www.ucp.edu.pk', 9, 0, 'UCP.JPG'),
(8, 'University of Lahore', 'Lahore', 'www.uol.edu.pk', 92, 0, 'uol.jpg'),
(9, 'University of Lahore', 'Gujrat', 'www.uol.edu.pk/Campuses/GujratCampus', 12, 0, 'uol.jpg'),
(10, 'Rachna College of Engg and Technology', 'Gujranwala', 'www.uet.edu.pk/campus?RID=info&campus_id=4', 8, 1, 'rc.jpg'),
(11, 'University of Management Sciences', 'Lahore', 'www.umt.edu.pk', 244, 0, 'umt.jpg'),
(12, 'Islam Medical College', 'Sialkot', 'www.imdc.edu.pk', 257, 0, 'islam.jpg'),
(13, 'University of Health Sciences', 'Lahore', 'www.uhs.edu.pk', 320, 1, 'uhs.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dept_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`Uni_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Dept_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `Uni_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
