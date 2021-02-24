-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 06:20 PM
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
-- Database: `braindemydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventiid` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_content` text DEFAULT NULL,
  `event_date` datetime DEFAULT NULL,
  `event_image` varchar(255) DEFAULT NULL,
  `event_end_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventiid`, `event_title`, `event_content`, `event_date`, `event_image`, `event_end_date`) VALUES
(1, 'Erasmus for Entrepreneurs', 'Erasmus for Young Entrepreneurs is a cross-border exchange programme which gives new or aspiring entrepreneurs the chance to learn from experienced entrepreneurs.', '2021-11-27 10:30:00', 'E_Thumbnail_1.png', '2021-11-27 14:30:00'),
(2, 'Starting business during pandemy', 'Tune into our Business Tuesday event where we get to hear firsthand by these established people on their journey to put their ideas into the world to make it.', '2021-02-14 12:00:00', 'B_Thumbnail.jpg', '2021-02-14 14:00:00'),
(3, 'EqualiTECH - Human Rights Hackathon', 'In an effort to reduce this gap, we invite participants with various backgrounds, skills\r\n\r\nand creative abilities to form multidisciplinary teams and invent unique', '2021-10-27 10:30:00', 'Webp.net-resizeimage-3_.jpg', '2021-10-27 14:30:00'),
(4, 'Startup Social Venture Workshop', 'Tune into our Business Tuesday event where we get to hear firsthand by these established people on their journey to put their ideas into the world to make it.', '2021-04-14 12:00:00', 'Thumbnail_13.png', '2021-04-14 14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `trainingid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`trainingid`, `title`, `content`, `image`) VALUES
(1, 'Cyber Security', 'Cyber Security refers to the body of technologies, processes, and practices designed to protect networks,devices, programs, and data from attack, damage, or unauthorized access.', 'CU_Thumbnail.jpg'),
(2, 'Java Training', 'Java is one of the most popular programming languages in the world.Java is HLL and is used in professional application development.', 'Thumbnail_Java.png'),
(3, 'Python', 'Python is an interpreted, high-level, general-purpose programming language. Python is\r\n\r\ndesign philosophy emphasizes code readability with its notable use of significant whitespace.', 'Thumbnaill222.png'),
(4, 'Android App Development', 'Android App Development is the set of processes and procedures involved in writing software\r\nfor devices and covers all the concepts you need to get you started.', 'Image_Android.png'),
(5, 'WEB Design', 'Web design (HTML5CSS3) encompasses many different skills and disciplines in the production and maintenance of websites.', 'w_Thumbnail.jpg'),
(9, 'aaa', 'aaaa ', 'apply.jpg'),
(10, 'bbb', 'asdasdasd ', 'apply.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `training_applications`
--

CREATE TABLE `training_applications` (
  `tappid` int(11) NOT NULL,
  `trainingid` int(11) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `training_applications`
--

INSERT INTO `training_applications` (`tappid`, `trainingid`, `user_name`, `user_email`) VALUES
(1, 2, 'asdasd@gmail.com', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `email`, `username`, `password`, `role`) VALUES
(1, 'sidorela@gmail.com', 'sidorelarexha', 'sidorela123', 1),
(3, 'albion@gmail.com', 'albionbabaj', 'albion123', 1),
(4, 'user@gmail.com', 'user', 'user123', 0),
(9, 'test@gmail.com', 'test4', 'test12345', 1),
(10, 'test@gmail.com', 'test5', 'test1234', 0),
(11, 'asdasd@gmail.com', 'asdasd', 'asad123asdasd1', 0),
(13, 'test@gmail.com', 'test', 'teststew123', 0),
(14, 'test@gmail.cm', 'test123', 'testetset', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_contacts`
--

CREATE TABLE `user_contacts` (
  `contactid` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_text` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventiid`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`trainingid`);

--
-- Indexes for table `training_applications`
--
ALTER TABLE `training_applications`
  ADD PRIMARY KEY (`tappid`),
  ADD KEY `trainingid` (`trainingid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user_contacts`
--
ALTER TABLE `user_contacts`
  ADD PRIMARY KEY (`contactid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `trainingid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `training_applications`
--
ALTER TABLE `training_applications`
  MODIFY `tappid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_contacts`
--
ALTER TABLE `user_contacts`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `training_applications`
--
ALTER TABLE `training_applications`
  ADD CONSTRAINT `training_applications_ibfk_2` FOREIGN KEY (`trainingid`) REFERENCES `trainings` (`trainingid`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
