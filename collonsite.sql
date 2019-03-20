-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2017 at 08:37 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collonsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `userName` varchar(30) NOT NULL,
  `userAddress` varchar(30) NOT NULL,
  `userAge` int(10) NOT NULL,
  `question1` varchar(5) NOT NULL,
  `question2` varchar(5) NOT NULL,
  `question3` varchar(200) NOT NULL,
  `userComment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`userName`, `userAddress`, `userAge`, `question1`, `question2`, `question3`, `userComment`) VALUES
('TJ', 'Louth', 21, 'yes', 'yes', 'its cool', 'the petrol station has nice people!'),
('Sean', 'Louth', 21, 'no', 'no', 'its not cool', 'faster internet please!'),
('Molly', 'Meath', 21, 'yes', 'no', 'its ok', 'swfkjjdf'),
('Anonymous', 'Dublin', 0, 'no', 'yes', 'looks nice', 'dhfibhfhsdki fhdfsdhfsdfkj bskdfbhksdbfk  jdsbfkjb skjfkjsdbhf kjsdhf kjhsdkjfhk sdjhfkjhsd'),
('test', 'Clare', 12, 'on', 'on', 'Test', 'TEst'),
('Test2', 'Laois', 12, 'on', 'on', 'Test2', 'Test2'),
('Test3', 'Kerry', 12, 'yes', 'no', 'Test3', 'Test3'),
('Anonymous', 'Antrim', 21, 'no', 'yes', 'Nope', 'I am not being forced to say this website is good.'),
('Antrim', 'Antrim', 31, 'no', 'yes', 'Test if error', 'Hope it works'),
('Anonymous', 'Laois', 41, 'yes', 'no', 'Forced to', 'Nope');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
