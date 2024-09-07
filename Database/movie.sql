-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2024 at 05:33 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `catogory`
--

CREATE TABLE `catogory` (
  `id` int NOT NULL,
  `catogory_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `catogory`
--

INSERT INTO `catogory` (`id`, `catogory_name`) VALUES
(27, 'English'),
(28, 'Bangla'),
(29, 'Hindi'),
(30, 'South');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int NOT NULL,
  `catogory` varchar(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `baner_image` varchar(500) NOT NULL,
  `subtitle` longtext NOT NULL,
  `view_image` longtext NOT NULL,
  `download_link` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `catogory`, `title`, `baner_image`, `subtitle`, `view_image`, `download_link`) VALUES
(25, '29', 'MoviePad Gaye Pange 2024 Hindi Movie HDTC 480p 720p 1080p', '31-Aug-2024-1725134825.jpeg', ' mive,mive,mive,mive,mive,mive,mive,mive,mive,', ',31-Aug-2024-17251348251.jpg,31-Aug-2024-17251348252.jpg,31-Aug-2024-17251348253.jpg', 'https://new6.gdtot.dad/file/2220708391'),
(26, '27', 'Pad Gaye Pange 2024 Hindi Movie HDTC 480p 720p 1080p', '31-Aug-2024-1725136221.jpg', 'try,ami,kori,tasi', ',31-Aug-2024-17251362211.jpeg,31-Aug-2024-17251362212.jpeg,31-Aug-2024-17251362213.jpg,31-Aug-2024-17251362214.jpg', 'https://new6.gdtot.dad/file/2220708391'),
(27, '28', 'Kiona Suarez', '31-Aug-2024-1725138764.jpg', 'Rerum ut quo magnam , Rerum ut quo magnam , Rerum ut quo magnam', ',31-Aug-2024-17251387641.jpeg,31-Aug-2024-17251387642.jpeg,31-Aug-2024-17251387643.jpeg,31-Aug-2024-17251387644.jpeg', 'Amity Faulkner'),
(28, '28', 'Inspector Nalinikanta 2024 S02 Complete Bengali ORG 1080p 720p 480p WEB-DL x265', '31-Aug-2024-1725140847.png', ' MDb Rating: x/10,\nGenres: Crime Drama Thriller,\nLanguage: Bengali (ORG),\nQuality: 1080p / 720p / 480p [WEB-DL],\nSize: See below,\nStars: Rajatava Datta Amrita Chattopadhyay Suprabhat Das,\nStoryline: Detective Nalini anta uncovers secrets of affairs old murders and lies in the hills but the case takes an unexpected turn during, the investigation.\n', ',31-Aug-2024-17251408471.jpg,31-Aug-2024-17251408472.jpg,31-Aug-2024-17251408473.jpg,31-Aug-2024-17251408474.jpg,31-Aug-2024-17251408475.jpg,31-Aug-2024-17251408476.jpg,31-Aug-2024-17251408477.jpg,31-Aug-2024-17251408478.jpg,31-Aug-2024-17251408479.jpg,31-Aug-2024-172514084710.jpg,31-Aug-2024-172514084711.jpg,31-Aug-2024-172514084712.jpg', 'https://new6.gdtot.dad/file/3015472450'),
(29, '28', 'sanjit', '04-Sep-2024-1725433028.jpg', ' my name is sanjit,this my fast movie', ',04-Sep-2024-17254330281.jpg,04-Sep-2024-17254330282.jpg,04-Sep-2024-17254330283.jpg,04-Sep-2024-17254330284.jpg,04-Sep-2024-17254330285.jpg,04-Sep-2024-17254330286.jpg,04-Sep-2024-17254330287.jpg', 'https://new6.gdtot.dad/file/2220708391');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`) VALUES
(1, 'sumon', '023267');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catogory`
--
ALTER TABLE `catogory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catogory`
--
ALTER TABLE `catogory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
