-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 08, 2021 at 09:09 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ttest_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `mytask`
--

CREATE TABLE `mytask` (
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL,
  `etat` tinyint(1) DEFAULT 0,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mytask`
--

INSERT INTO `mytask` (`title`, `content`, `date`, `ID`, `etat`, `id_user`) VALUES
('test', 'test 123', '2021-08-18', 1, 1, 0),
('add', 'page form ', '2021-08-16', 2, 0, 0),
('test', 'add or no  ', '2021-08-17', 6, 0, 0),
('test', 'edit', '2022-08-19', 13, 0, 0),
('test', 'dising', '2021-08-21', 14, 0, 1),
('dfdfv', 'bdfbdfbdf ', '2021-08-24', 15, 0, 2),
('DW2', 'D23D ', '2021-08-13', 16, 1, 2),
('desing', 'desing  ', '2021-08-19', 17, 0, 3),
('test3000', 'good day', '2021-08-22', 21, 0, 1),
('recete', 'farine 1 kg   2 oeuf l1 verr  1 leau  verr ait levure ', '2021-08-23', 23, 0, 21),
('edit', 'hhhh ', '2021-08-13', 24, 0, 20),
('save', 'ok ', '2021-09-02', 25, 0, 20),
('add', 'www ', '2021-06-11', 26, 0, 21),
('test', 'hello ', '2021-08-24', 27, 0, 1),
('test', 'aaa ', '2021-08-13', 28, 1, 1),
('test6', 'scrol ', '2021-08-26', 29, 1, 1),
('yy', 'ujyun ', '2021-08-13', 30, 1, 1),
('trhrt', 'modife', '2021-08-25', 31, 0, 1),
('aa', 'dsdv ', '2021-08-13', 32, 1, 1),
('ggg', 'qasfsgfs ', '2021-08-13', 33, 1, 1),
('new', 'task ', '2021-08-13', 34, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `user_img` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `user_img`) VALUES
(1, 'aymen', '123', 'Aymen', '1jpg'),
(2, 'yasser', '123456789', 'Yasser', '2png'),
(3, 'saad', '678', 'saad', 'IMG-6123b9f6b2c705.78775966.jpg'),
(5, 'ahmed', '123', 'ahmed', ''),
(16, 'legend', '123', 'lol', ''),
(21, 'haddad', '1234', 'maroi', 'IMG-6123c5794dde75.29413591.jpg'),
(22, 'aaa', 'aaa', 'aaa', 'img');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mytask`
--
ALTER TABLE `mytask`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mytask`
--
ALTER TABLE `mytask`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
