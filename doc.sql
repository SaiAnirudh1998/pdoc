-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2017 at 06:09 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doc`
--

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `dis_id` int(5) NOT NULL,
  `dis_name` varchar(25) DEFAULT NULL,
  `type_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`dis_id`, `dis_name`, `type_id`) VALUES
(101, 'Dengue', 501),
(102, 'Malaria', 501),
(103, 'Cholera', 501),
(104, 'Stomach infection', 504),
(105, 'Jaundice', 501),
(106, 'Myopia', 503),
(107, 'Heart attack', 502),
(108, 'Tuberculosis', 503),
(109, 'Viral fever', 501),
(110, 'Throat infection', 503),
(998, 'yjy998', 502),
(99999, 'd_name999', 501);

-- --------------------------------------------------------

--
-- Table structure for table `distype`
--

CREATE TABLE `distype` (
  `type_id` int(5) NOT NULL,
  `type_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distype`
--

INSERT INTO `distype` (`type_id`, `type_name`) VALUES
(0, NULL),
(501, 'General'),
(502, 'Heart'),
(503, 'ENT'),
(504, 'Gastro');

-- --------------------------------------------------------

--
-- Table structure for table `disym`
--

CREATE TABLE `disym` (
  `dis_id` int(5) NOT NULL,
  `sym_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disym`
--

INSERT INTO `disym` (`dis_id`, `sym_id`) VALUES
(101, 201),
(101, 210),
(101, 213),
(102, 201),
(102, 204),
(102, 205),
(103, 201),
(103, 203),
(104, 203),
(104, 209),
(104, 212),
(105, 204),
(105, 209),
(105, 216),
(106, 202),
(106, 216),
(106, 218),
(107, 205),
(107, 217),
(107, 220),
(108, 201),
(108, 214),
(108, 220),
(109, 201),
(109, 202),
(109, 205),
(110, 201),
(110, 207),
(110, 209);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_id` int(5) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `type_id` int(5) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_id`, `name`, `type_id`, `phone`, `address`, `email`) VALUES
(601, 'Dr. Prakash', 501, 1515151515, 'House no. 26', 'prakash@gmail.com'),
(602, 'Dr. Chirag', 504, 1010101010, 'House no. 21', 'chirag@gmail.com'),
(603, 'Dr. Aadarsh', 503, 1212121212, 'House no. 11', 'aadarsh@gmail.com'),
(604, 'Dr. Jainil', 502, 1313131313, 'No house', 'jainil@gmail.com'),
(605, 'Dr. Harnoor', 501, 1414141414, 'House no. 2', 'harnoor@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `dosage`
--

CREATE TABLE `dosage` (
  `med_id` int(5) NOT NULL,
  `age` int(3) NOT NULL,
  `freq` int(1) DEFAULT NULL,
  `qty` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosage`
--

INSERT INTO `dosage` (`med_id`, `age`, `freq`, `qty`) VALUES
(301, 10, 3, '2');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `med_id` int(5) NOT NULL,
  `med_name` varchar(25) DEFAULT NULL,
  `comp_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`med_id`, `med_name`, `comp_name`) VALUES
(301, 'Med A', 'Comp A'),
(302, 'Med B', 'Comp B'),
(303, 'Med C', 'Comp C'),
(304, 'Med D', 'Comp B'),
(305, 'Med E', 'Comp A'),
(306, 'Med F', 'Comp B'),
(307, 'Med G', 'Comp B'),
(308, 'Med H', 'Comp C'),
(309, 'Med I', 'Comp A'),
(310, 'Med J', 'Comp A');

-- --------------------------------------------------------

--
-- Table structure for table `prevent`
--

CREATE TABLE `prevent` (
  `dis_id` int(5) NOT NULL,
  `prev` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prevent`
--

INSERT INTO `prevent` (`dis_id`, `prev`) VALUES
(101, 'B'),
(102, 'E'),
(103, 'A'),
(104, 'G'),
(105, 'D'),
(106, 'F'),
(107, 'C'),
(108, 'I'),
(109, 'J'),
(110, 'H');

-- --------------------------------------------------------

--
-- Table structure for table `risks`
--

CREATE TABLE `risks` (
  `dis_id` int(5) NOT NULL,
  `risk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `risks`
--

INSERT INTO `risks` (`dis_id`, `risk`) VALUES
(101, 'B'),
(102, 'E'),
(103, 'A'),
(104, 'G'),
(105, 'D'),
(106, 'F'),
(107, 'C'),
(108, 'I'),
(109, 'J'),
(110, 'H');

-- --------------------------------------------------------

--
-- Table structure for table `symptom`
--

CREATE TABLE `symptom` (
  `sym_id` int(5) NOT NULL,
  `sym_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `symptom`
--

INSERT INTO `symptom` (`sym_id`, `sym_name`) VALUES
(201, 'Fever'),
(202, 'Headache'),
(203, 'Diarrhoea'),
(204, 'Fatigue'),
(205, 'Muscle aches'),
(206, 'Coughing'),
(207, 'Sore throat'),
(208, 'Chills'),
(209, 'Vomiting'),
(210, 'Rashes'),
(211, 'Swelling'),
(212, 'Stomach ache'),
(213, 'Sensitivity'),
(214, 'Weight loss'),
(215, 'Hairloss'),
(216, 'Blurry vision'),
(217, 'Chest pain'),
(218, 'Dizziness'),
(219, 'Fainting'),
(220, 'Sweating');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `dis_id` int(5) NOT NULL,
  `med_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment`
--

INSERT INTO `treatment` (`dis_id`, `med_id`) VALUES
(101, 306),
(101, 310),
(102, 307),
(102, 309),
(103, 301),
(103, 303),
(104, 306),
(104, 308),
(105, 305),
(105, 308),
(106, 302),
(106, 304),
(107, 302),
(107, 304),
(108, 303),
(108, 305),
(109, 307),
(109, 309),
(110, 301),
(110, 310);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(25) NOT NULL,
  `pass` varchar(25) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `pass`, `name`, `dob`, `phone`) VALUES
('sachet@gmail.com', 'sachet123', 'Sachet Zode', '1999-04-12', 1234567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`dis_id`),
  ADD KEY `Foreign Key` (`type_id`);

--
-- Indexes for table `distype`
--
ALTER TABLE `distype`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `disym`
--
ALTER TABLE `disym`
  ADD PRIMARY KEY (`dis_id`,`sym_id`),
  ADD KEY `sym_id` (`sym_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `dosage`
--
ALTER TABLE `dosage`
  ADD PRIMARY KEY (`med_id`,`age`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`med_id`);

--
-- Indexes for table `prevent`
--
ALTER TABLE `prevent`
  ADD PRIMARY KEY (`dis_id`,`prev`);

--
-- Indexes for table `risks`
--
ALTER TABLE `risks`
  ADD PRIMARY KEY (`dis_id`,`risk`);

--
-- Indexes for table `symptom`
--
ALTER TABLE `symptom`
  ADD PRIMARY KEY (`sym_id`,`sym_name`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`dis_id`,`med_id`),
  ADD KEY `med_id` (`med_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disease`
--
ALTER TABLE `disease`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`type_id`) REFERENCES `distype` (`type_id`);

--
-- Constraints for table `disym`
--
ALTER TABLE `disym`
  ADD CONSTRAINT `disym_ibfk_1` FOREIGN KEY (`dis_id`) REFERENCES `disease` (`dis_id`),
  ADD CONSTRAINT `disym_ibfk_2` FOREIGN KEY (`sym_id`) REFERENCES `symptom` (`sym_id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `distype` (`type_id`);

--
-- Constraints for table `dosage`
--
ALTER TABLE `dosage`
  ADD CONSTRAINT `dosage_ibfk_1` FOREIGN KEY (`med_id`) REFERENCES `medicine` (`med_id`);

--
-- Constraints for table `prevent`
--
ALTER TABLE `prevent`
  ADD CONSTRAINT `prevent_ibfk_1` FOREIGN KEY (`dis_id`) REFERENCES `disease` (`dis_id`);

--
-- Constraints for table `risks`
--
ALTER TABLE `risks`
  ADD CONSTRAINT `risks_ibfk_1` FOREIGN KEY (`dis_id`) REFERENCES `disease` (`dis_id`);

--
-- Constraints for table `treatment`
--
ALTER TABLE `treatment`
  ADD CONSTRAINT `treatment_ibfk_1` FOREIGN KEY (`dis_id`) REFERENCES `disease` (`dis_id`),
  ADD CONSTRAINT `treatment_ibfk_2` FOREIGN KEY (`med_id`) REFERENCES `medicine` (`med_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
