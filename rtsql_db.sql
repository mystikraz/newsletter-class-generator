-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2016 at 07:33 AM
-- Server version: 5.5.47-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rtsql_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `font_family` varchar(255) NOT NULL,
  `font_color` varchar(255) NOT NULL,
  `font_size` varchar(255) NOT NULL,
  `font_lineheight` varchar(255) NOT NULL,
  `link_color` varchar(255) NOT NULL,
  `text_decoration` varchar(255) NOT NULL,
  `font_bold` varchar(255) NOT NULL,
  `link_bold` varchar(250) NOT NULL,
  `httphttps` varchar(300) NOT NULL,
  `webisteurl` varchar(300) NOT NULL,
  `user` varchar(255) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `text_transform` varchar(300) NOT NULL,
  `user_ip` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=553 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class_name`, `font_family`, `font_color`, `font_size`, `font_lineheight`, `link_color`, `text_decoration`, `font_bold`, `link_bold`, `httphttps`, `webisteurl`, `user`, `time`, `text_transform`, `user_ip`) VALUES
(515, 'snippet_tekst', 'Arial, Helvetica, ''Helvetica Neue'', sans-serif', '#181714', '12', '15', '#181714', 'none', 'bold', 'none', 'http', 'www.example.com', 'shyamk', '2016-06-20 05:17:24.000000', 'none', ''),
(516, 'nb_leesmeer', 'Arial, Helvetica, ''Helvetica Neue'', sans-serif', '#fffffe', '16', '18', '#fffffe', 'none', 'bold', 'none', 'http', 'www.example.com', 'shyamk', '2016-06-20 05:19:23.000000', 'uppercase', ''),
(517, 'new_prijs', 'Arial, Helvetica, ''Helvetica Neue'', sans-serif', '#000001', '13', '16', '#000001', 'none', 'none', 'none', 'http', 'www.example.com', 'shyamk', '2016-06-20 05:22:53.000000', 'none', ''),
(518, 'nb_btm_tekst', 'Arial, Helvetica, ''Helvetica Neue'', sans-serif', '#fffffe', '12', '15', '#fffffe', 'none', 'none', 'none', 'http', 'www.example.com', 'shyamk', '2016-06-20 05:24:00.000000', 'none', ''),
(519, 'nb_servicelinks', 'Arial, Helvetica, ''Helvetica Neue'', sans-serif', '#181714', '12', '15', '#181714', 'none', 'none', 'none', 'http', 'www.example.com', 'shyamk', '2016-06-20 05:25:01.000000', 'none', ''),
(551, 'price_top', 'Futura, ''Trebuchet MS'', Arial, sans-serif', '#ed1c24', '18', '', '#ed1c24', 'none', 'none', 'none', 'http', 'www.example.com', 'raj', '2016-06-29 06:55:58.000000', 'none', '192.168.47.165'),
(552, 'old_price', 'Futura, ''Trebuchet MS'', Arial, sans-serif', '#37424a', '14', '17', '#37424a', 'none', 'none', 'none', 'http', 'www.example.com', 'raj', '2016-06-29 08:42:00.000000', 'none', '192.168.47.165');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `password`) VALUES
(1, 'raj', 'raj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=553;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
