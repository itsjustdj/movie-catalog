-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 05, 2021 at 04:46 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies_books`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `ID` int(11) NOT NULL,
  `Title` varchar(45) NOT NULL,
  `Year` int(11) DEFAULT NULL,
  `Genre` text,
  `Director` varchar(35) NOT NULL,
  `Actor1` text,
  `Actor2` text,
  `Actor3` text,
  `Rating` int(11) DEFAULT NULL,
  `Type` text,
  `Summary` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`ID`, `Title`, `Year`, `Genre`, `Director`, `Actor1`, `Actor2`, `Actor3`, `Rating`, `Type`, `Summary`) VALUES
(2, 'Batman', 1989, 'Action', 'Tim Burton', 'Michael Keaton', 'Kim Basinger', 'Jack Nicholson', 4, 'DVD', ''),
(3, 'Cocoon', 1985, 'Sci-Fi', 'Ron Howard', 'Steve Gutenberg', 'Wilford Brimley', 'Brian Denehy', 5, 'DVD', ''),
(4, 'Ferris Buehlers Day Off', 1985, 'Comedy', 'John Hughes', 'Matthew Broderick', 'Alan Ruck', 'Mia Sara', 5, 'DVD', ''),
(5, 'Ghandi', 1982, 'Biography', 'Richard Attenborough', 'Ben Kingsley', 'Martin Sheen', 'Candace Bergen', 5, 'DVD', ''),
(7, 'When Harry Met Sally', 1985, 'Comedy', 'Rob Reiner', 'Billy Crystal', 'Meg Ryan', 'Carrie Fisher', 5, 'DVD', ''),
(9, 'Back to the Future', 1985, 'Sci-Fi/Comedy', 'Robert Zemeckis', 'Michael J. Fox', 'Christopher Lloyd', 'Lea Thompson', 5, 'DVD', ''),
(10, 'Die Hard', 1988, 'Action', 'John McTiernan', 'Bruce Willis', 'Alan Rickman', 'Bonnie Bedelia', 5, 'Drive', ''),
(11, 'Indiana Jones and the Last Crusade', 1989, 'Action', 'Steven Spielberg', 'Harrison Ford', 'Sean Connery', 'Alison Doody', 4, 'DVD', 'jones'),
(12, 'Matilda', 1996, 'Family', 'Danny DeVito', 'Mara Wilson', 'Embeth Davidtz', 'Danny Devito', 5, 'DVD', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
