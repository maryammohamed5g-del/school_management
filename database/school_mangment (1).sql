-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2025 at 06:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_mangment`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_rooms`
--

CREATE TABLE `class_rooms` (
  `id` int(11) NOT NULL,
  `name_class` varchar(250) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `capacity` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `class_rooms`
--

INSERT INTO `class_rooms` (`id`, `name_class`, `grade`, `capacity`, `user_id`) VALUES
(2, 'lila', '3', '60', 1),
(4, 'duck', '3', '40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students_info`
--

CREATE TABLE `students_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `students_info`
--

INSERT INTO `students_info` (`id`, `first_name`, `last_name`, `email`, `age`, `user_id`) VALUES
(15, 'mariem', 'mohamed', 'fffggf@gf', 20, 0),
(16, 'mariem', 'mohamed', 'fffggf@gf', 20, 0),
(17, 'mariem', 'mohamed', 'fffggf@gf', 20, 0),
(18, 'mariem', 'mohamed', 'fffggf@gf', 20, 0),
(19, 'mariem', 'mohamed', 'fffggf@gf', 20, 0),
(20, 'mariem', 'mohamed', 'fffggf@gf', 20, 0),
(22, 'mariem', 'mohamed', 'fffggf@gf', 20, 0),
(23, 'mariem', 'momo', 'fffggf@gf', 20, 0),
(24, 'mariem', 'mohamed', 'fffggf@gf', 20, 0),
(26, 'mariem', 'mohamed', 'fffggf@gf', 20, 0),
(27, 'mariem', 'mohamed', 'fffggf@gf', 20, 0),
(28, 'mariem', 'mohamed', 'fffggf@gf', 20, 0),
(29, 'mariem', 'mohamed', 'fffggf@gf', 20, 0),
(31, 'mariem', 'mohamed', 'fffggf@gf', 20, 0),
(32, 'tark', 'essa', 'hahy@gmail.com', 50, 0),
(33, 'omar', 'ali', 'gfgdg@hgh', 20, 0),
(34, 'omar', 'ali', 'gfgdg@hgh', 20, 0),
(40, 'احمد', 'محمد', 'a@.com', 10, 1),
(41, 'sarah', 'nasser', 'sn@gmail.com', 18, 1),
(42, 'nada', 'ayman', 'hyg@.com', 25, 1),
(43, 'lolo', 'memo', 'mm@gmail.com', 23, 1),
(44, 'taher', 'nagar', 'mm@gmail', 30, 1),
(46, 'nn', 'mm', 'hahy@gmail.com', 50, 1),
(47, 'student_api', 'any', 'any@.com', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `subject`, `phone`, `email`, `age`, `user_id`) VALUES
(4, 'hany', 'math', '01256278957', 'mm@gmail', 23, 1),
(5, 'ali amr', 'math', '01225897203', 'mm@gmail', 30, 1),
(7, 'hany', 'camistry', '01250545881', 'mm@gmail', 34, 1),
(10, 'ندي احمد', 'انجليزي', '0105678924', 'mm@.com', 20, 1),
(11, 'mariem', 'camistry', '01025698751', 'hyg@.com', 29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email`, `password`) VALUES
(1, 'mariem', 'hahy@gmail.com', '2147'),
(3, 'lolo', 'lolo@gmail.com', '25478'),
(4, 'ahmed', 'fffggf@gf', '5417'),
(5, 'mariem', 'fffggf@gf', '2147'),
(6, 'mariem', 'fffggf@gf', '2147'),
(7, 'mariem', '', '2147'),
(8, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_rooms`
--
ALTER TABLE `class_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_info`
--
ALTER TABLE `students_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_rooms`
--
ALTER TABLE `class_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students_info`
--
ALTER TABLE `students_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
