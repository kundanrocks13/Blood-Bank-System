-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2017 at 02:49 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbloodinfo`
--

CREATE TABLE `addbloodinfo` (
  `ID` int(4) NOT NULL,
  `Blood_Group1` varchar(15) DEFAULT NULL,
  `BloodBank1` varchar(20) DEFAULT NULL,
  `Address1` varchar(200) DEFAULT NULL,
  `Blood_Group2` varchar(15) DEFAULT NULL,
  `BloodBank2` varchar(20) DEFAULT NULL,
  `Address2` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addbloodinfo`
--

INSERT INTO `addbloodinfo` (`ID`, `Blood_Group1`, `BloodBank1`, `Address1`, `Blood_Group2`, `BloodBank2`, `Address2`) VALUES
(1, 'A-A+   ', 'mumbai', 'abc', 'AB-AB+   ', 'bandra', 'sdfdsf'),
(3, 'A-A+   ', 'westbengal', 'durgapur', 'AB+  ', 'benachity', 'durgapur'),
(6, 'B+  ', 'amit boold bank', 'city', ' ', 'sona boold bank', 'new area');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_registration`
--

CREATE TABLE `hospital_registration` (
  `id` int(4) NOT NULL,
  `Hospital_Name` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `gst` int(25) DEFAULT NULL,
  `Mobile` int(10) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Bed` int(10) DEFAULT NULL,
  `Web` varchar(100) DEFAULT NULL,
  `Registration` varchar(30) DEFAULT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_registration`
--

INSERT INTO `hospital_registration` (`id`, `Hospital_Name`, `Email`, `gst`, `Mobile`, `Address`, `Bed`, `Web`, `Registration`, `Password`) VALUES
(5, 'amarpali hospital', 'amarpali@gmail.com', 5, 5456454, 'asdsd', 20, 'http://www.gsadsdj.com', 'New Text Document.txt', 'asAS12!@'),
(6, 'amarpali hospital', 'amarpali@gmail.com', 45645, 2147483647, 'orissa', 20, 'http://www.amr.com', 'Kundan_Kumar_off_campuse.pdf', 'asdAs12'),
(9, 'amarpali hospital', 'amarpali@gmail.com', 0, 2147483647, 'sfdf', 20, 'http://www.gsadsdj.com', 'Kundan_Kumar_off_campuse.pdf', '123456789'),
(10, 'amarpali hospital', 'amarpali@gmail.com', 123456789, 2147483647, 'orissa', 20, 'http://www.dgj.com', 'New Text Document.txt', '212132132'),
(11, 'amarpali hospital', 'alex@gmail.com', 123456789, 2147483647, 'mumbai', 40, 'http://www.gsadsdj.com', 'New Text Document.txt', 'ghhgj'),
(12, 'IQ city', 'iqcity@gmail.com', 0, 2147483647, 'durgapur', 80, 'http://www.iqcity.com', 'C.pdf', '123456'),
(13, 'jkl', 'jkl@gmail.com', 0, 1234567890, 'ghgjghj', 50, 'http://www.jhgj.com', 'New Text Document.txt', 'ASas!@12'),
(14, 'Star Hospital', 'str@gmail.com', 78676867, 2147483647, 'hjjgh', 60, 'http://www.hg.com', 'resume_off_campus.pdf', 'ASas!212'),
(15, 'manav hospital', 'mnv@gmail.com', 2343, 2147483647, 'dsfdsf', 80, 'http://www.mnv.com', 'resume_off_campus.pdf', '12ASas!@'),
(16, 'human Hospital', 'hmn@gmail.com', 43432, 1236549870, 'dsfsd', 40, 'http://www.hmn.com', 'tcs prog.pdf', 'ASas!@12'),
(17, 'tmn hospital', 'tm@gmail.com', 0, 2147483647, 'werew', 50, 'http://www.srs.com', 'bookmarks.txt', 'DFas12@#'),
(18, 'sharma hospital', 'shrm@gmail.com', 0, 2147483647, 'sdfsdf', 60, 'http://www.fg.com', 'kk.oxps', 'Asas!@12');

-- --------------------------------------------------------

--
-- Table structure for table `request_samples`
--

CREATE TABLE `request_samples` (
  `ID` int(4) NOT NULL,
  `Receiver_Name` varchar(50) DEFAULT NULL,
  `request_Blood_group` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_samples`
--

INSERT INTO `request_samples` (`ID`, `Receiver_Name`, `request_Blood_group`) VALUES
(1, 'Rohit sharma', ' A-'),
(2, 'kundan kumar', 'B+'),
(3, 'david', ' o+'),
(4, 'sonu singh', 'AB-'),
(5, 'Anuj kumar', 'AB-'),
(6, 'Pandey', 'O+'),
(7, 'ravi', 'A-');

-- --------------------------------------------------------

--
-- Table structure for table `user_resitration`
--

CREATE TABLE `user_resitration` (
  `ID` int(4) NOT NULL,
  `Name` varchar(40) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Age` int(2) NOT NULL,
  `mobile` varchar(10) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `Blood` varchar(5) DEFAULT NULL,
  `pass1` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_resitration`
--

INSERT INTO `user_resitration` (`ID`, `Name`, `Email`, `Age`, `mobile`, `Address`, `Gender`, `Blood`, `pass1`) VALUES
(1, 'kundan', 'k@gmail.com', 22, '97080', 'nit', 'M', 'a+', '24446'),
(2, 'kundan', 'ssfsf', 4545, '5444645', 'gfgsdfsd', 'Male', 'O-', 'hfgf4'),
(4, 'nandani', 'n@gmail.com', 19, '1234567890', 'nit', 'Female', 'AB+', 'zxcv'),
(7, 'kundan', 'kk34773@gmail.com', 22, '2147483647', 'nit durgapur', 'Male', 'O+', 'ASas!@12'),
(9, 'kundan', 'kk34773@gmail.com', 20, '2147483647', 'gurgaon', 'Male', 'A+', 'asdsfsafd'),
(10, 'anuj', 'anuj@gmail.com', 22, '2147483647', 'room416', 'Male', 'AB-', 'asdfghjkl'),
(11, 'anuj', 'anuj@gmail.com', 22, '2147483647', 'room416', 'Male', 'AB-', 'asdfghjkl'),
(12, 'nmb', 'cv@gmail.com', 67, '2147483647', 'dgr', 'Male', 'O+', 'As12!@qw'),
(13, 'kundan kuwar', 'kk@gmail.com', 21, '2147483647', 'nit', 'Male', 'AB-', 'Asas!@12'),
(14, 'anand', 'a@gmail.com', 25, '9708058323', 'aara', 'Male', 'O-', 'Asas!@12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbloodinfo`
--
ALTER TABLE `addbloodinfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `hospital_registration`
--
ALTER TABLE `hospital_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_samples`
--
ALTER TABLE `request_samples`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_resitration`
--
ALTER TABLE `user_resitration`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addbloodinfo`
--
ALTER TABLE `addbloodinfo`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `hospital_registration`
--
ALTER TABLE `hospital_registration`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `request_samples`
--
ALTER TABLE `request_samples`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_resitration`
--
ALTER TABLE `user_resitration`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
