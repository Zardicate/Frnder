-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2020 at 09:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frnder`
--

-- --------------------------------------------------------

--
-- Table structure for table `matchs`
--

CREATE TABLE `matchs` (
  `matchsId` int(11) NOT NULL,
  `usersId` int(11) NOT NULL,
  `matchsQ1` varchar(128) NOT NULL,
  `matchsQ2` varchar(128) NOT NULL,
  `matchsQ3` varchar(128) NOT NULL,
  `matchsQ4` varchar(128) NOT NULL,
  `matchsQ5` varchar(128) NOT NULL,
  `matchsQ6` varchar(128) NOT NULL,
  `matchsQ7` varchar(128) NOT NULL,
  `matchsQ8` varchar(128) NOT NULL,
  `matchsQ9` varchar(128) NOT NULL,
  `matchsQ10` varchar(128) NOT NULL,
  `matchsQ11` varchar(128) NOT NULL,
  `matchsQ12` varchar(128) NOT NULL,
  `matchsQ13` varchar(128) NOT NULL,
  `matchsQ14` varchar(128) NOT NULL,
  `matchsQ15` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matchs`
--

INSERT INTO `matchs` (`matchsId`, `usersId`, `matchsQ1`, `matchsQ2`, `matchsQ3`, `matchsQ4`, `matchsQ5`, `matchsQ6`, `matchsQ7`, `matchsQ8`, `matchsQ9`, `matchsQ10`, `matchsQ11`, `matchsQ12`, `matchsQ13`, `matchsQ14`, `matchsQ15`) VALUES
(1, 1, 'Andhra Pradesh', 'Hindi', 'Male', 'seas', 'cse', 'Football', 'Dance', '1/w', 'yes', 'yes', 'veg', 'yes', 'yes', 'night', 'snxskksk k x'),
(2, 3, 'Chandigarh', 'Hindi', 'Male', 'som', 'bba', 'Football', 'Dance', '1/m', 'yes', 'no', 'veg', 'yes', 'no', 'day', 'I am hard working and looking for a trust worthy roommate.'),
(3, 4, 'Chandigarh', 'Hindi', 'Male', 'seas', 'cse', 'Football', 'Dance', '1/w', 'yes', 'yes', 'non-veg', 'yes', 'no', 'night', 'whatsupppppp'),
(4, 2, 'Chandigarh', 'Hindi', 'Male', 'seas', 'cse', 'Football', 'Dance', '1/w', 'yes', 'yes', 'non-veg', 'yes', 'no', 'night', 'Waiting to meet my friend match.'),
(5, 5, 'Andhra Pradesh', 'Hindi', 'Male', 'seas', 'cse', 'Football', 'Dance', '1/w', 'yes', 'yes', 'veg', 'yes', 'yes', 'night', 'Looking for amazing roommate!!!! to spend my time with.'),
(6, 6, 'Andaman and Nicobar Islands', 'Hindi', 'Male', 'seas', 'cse', 'Football', 'Dance', '1/w', 'yes', 'yes', 'veg', 'yes', 'yes', 'night', 'Waiting to meet someone.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'madhav', 'madhavginoria@gmail.com', 'madhav', '$2y$10$VMqHaJKMg8u1kR/9cLpoMuGuNyE0kRe29CNTWpy/B510zuoaghT3i'),
(2, 'Abhishek', 'abhishek@gmail.com', 'Abhi', '$2y$10$S/e3XMIEQRIFmiiQ12Swq.zi7hIsdTZlTHULdRua8DiihfTi9m8Mm'),
(3, 'Manoj', 'manoj@gmail.com', 'Manoj1', '$2y$10$te2T5v5fW1TBN9iOS2GLk.hU.Vgu5rFnNKDJV1aaNdrjjIwPzMLhq'),
(4, 'Sodhi', 'sodhi@gmail.com', 'Sodhi0', '$2y$10$I1IvYYNoHhUIvlE6JDr4tO5xGcOV1RSvlt7j7pPh2e6iMRDWo6FiG'),
(5, 'Rahul', 'rahul@gmail.com', 'Rahul', '$2y$10$mXOwip3V6Q4OirEkClh4J.2jnYlq15PpJ6o1o8CUtVbLOa9GelcAu'),
(6, 'Ram', 'ram@gmail.com', 'ram', '$2y$10$mFJ4l4RqyiTZDcqJhgvfxuywOvJKSG7Bdqj8v/CB0wIMTmocc2epe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matchs`
--
ALTER TABLE `matchs`
  ADD PRIMARY KEY (`matchsId`),
  ADD KEY `usersId` (`usersId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `matchs`
--
ALTER TABLE `matchs`
  MODIFY `matchsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `matchs`
--
ALTER TABLE `matchs`
  ADD CONSTRAINT `matchs_ibfk_1` FOREIGN KEY (`usersId`) REFERENCES `users` (`usersId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
