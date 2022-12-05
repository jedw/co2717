-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 02, 2022 at 11:14 AM
-- Server version: 5.7.37-0ubuntu0.18.04.1
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax`
--

CREATE TABLE `ajax` (
  `id` int(3) NOT NULL,
  `thing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajax`
--

INSERT INTO `ajax` (`id`, `thing`) VALUES
(1, 'Hello'),
(2, 'This'),
(3, 'Is'),
(4, 'A'),
(5, 'Test'),
(6, 'another');

-- --------------------------------------------------------

--
-- Table structure for table `ajaxcheckuser`
--

CREATE TABLE `ajaxcheckuser` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `surname` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ajaxcheckuser`
--

INSERT INTO `ajaxcheckuser` (`id`, `firstname`, `surname`, `email`, `username`, `password`) VALUES
(1, 'Jonathan', 'jedwards', 'jedwards8@uclan.ac.uk', 'jedwards', 'password'),
(2, 'Jooolie', 'jallen', 'jallen17@uclan.ac.uk', 'jallen', 'keanu');

-- --------------------------------------------------------

--
-- Table structure for table `coords`
--

CREATE TABLE `coords` (
  `id` int(11) NOT NULL,
  `team` text NOT NULL,
  `lat` text NOT NULL,
  `lon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coords`
--

INSERT INTO `coords` (`id`, `team`, `lat`, `lon`) VALUES
(1, 'Jonathan', '53.7640447', '-2.7109535'),
(2, 'Joooolie', '53.7564388', '-2.7063827'),
(3, 'Nicky', '53.770717', '-2.735308');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `Username`, `Password`) VALUES
(1, 'jedw', '$2y$12$Ivq1xwwcxnE329IaDkaRjO9r7KPhMJNyFp5TDJgu6pgEU9LWH/In2');

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `ID` int(3) NOT NULL,
  `Forname` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`ID`, `Forname`, `Surname`, `Age`) VALUES
(1, 'Jonathan', 'Edwards', 34),
(5, 'Mickey', 'Mouse', 80),
(6, 'Donald', 'Duck', 90),
(7, 'Wiley', 'Coyote', 70),
(8, 'Fred', 'Flintstone', 55),
(9, 'Billybob', 'McGuiggins', 12);

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `surname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `firstname`, `surname`) VALUES
(1, 'Jonathan', 'Edwards'),
(2, 'Joooolie', 'Allen'),
(3, 'Juan', 'Kerr'),
(4, 'Ioannis', 'The Menace'),
(5, 'Nicky', 'Dunno'),
(6, 'Lesley', 'Maybe'),
(7, 'Sharan', 'O\'Kay'),
(8, 'Butch', 'Cassidy'),
(9, 'Big Gav', 'Sim'),
(10, 'Rick', 'Schnitzel'),
(11, 'Master', 'Bateman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax`
--
ALTER TABLE `ajax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ajaxcheckuser`
--
ALTER TABLE `ajaxcheckuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coords`
--
ALTER TABLE `coords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajax`
--
ALTER TABLE `ajax`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ajaxcheckuser`
--
ALTER TABLE `ajaxcheckuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `coords`
--
ALTER TABLE `coords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mytable`
--
ALTER TABLE `mytable`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
