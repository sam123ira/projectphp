-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 08:34 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsletter`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcontent`
--

CREATE TABLE `addcontent` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `text` varchar(200) COLLATE utf8mb4_persian_ci NOT NULL,
  `datetime` date NOT NULL,
  `the_writer` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `category_id` varchar(30) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `addcontent`
--

INSERT INTO `addcontent` (`id`, `title`, `text`, `datetime`, `the_writer`, `category_id`, `email`) VALUES
(39, 'خداحافظی گزینه مدنظر پرسپولیس با هواداران تیمش', 'نوچهر صفروف بازیکن جدید پرسپولیس در پیامی که منتشر کرده بود از رئیس‌جمهور تاجیکستان هم بابت حمایت‌هایش تشکر کرد که این مسئله در نوع خود عجیب بود.\r\n\r\nمنوچهر صفروف امیدوار است در پرسپولیس بدرخشد و توانا', '2021-11-09', 'adminr123', '2', '123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'ورزشی'),
(2, 'اجتماعی'),
(3, 'سیاسی');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_persian_ci NOT NULL,
  `opinion` varchar(400) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `opinion`) VALUES
(4, 'sara', 'خوب بود.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `first_name` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_persian_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_persian_ci NOT NULL,
  `education` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `password`, `email`, `gender`, `education`) VALUES
('admin', 'r123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '123@gmail.com', 'woman', 'Dip'),
('maryam', '444', '9a3e61b6bcc8abec08f195526c3132d5a4a98cc0', '444@gmail.com', 'woman', '444');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcontent`
--
ALTER TABLE `addcontent`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `id_3` (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcontent`
--
ALTER TABLE `addcontent`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
