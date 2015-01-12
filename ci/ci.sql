-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2015 at 10:33 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
`answerId` int(20) NOT NULL,
  `questionId` int(20) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `answerRating` int(100) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answerId`, `questionId`, `answer`, `answerRating`, `username`) VALUES
(6, 18, 'okay', 1, 'eshan'),
(7, 18, 'okay', 1, 'eshan'),
(8, 18, 'okay', 1, 'eshan');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('3732de726e714ada452df790d40337fd', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421095679, ''),
('c62883d53a90b73a683dabbf7dd4a18b', '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421097165, 'a:2:{s:9:"user_data";s:0:"";s:8:"username";s:7:"eshandl";}');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `session_id` varchar(40) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`session_id`, `name`) VALUES
('1d7b194ea64112c33b0213a62f05f562', 'saj'),
('1d7b194ea64112c33b0213a62f05f562', 'saj'),
('22b25968744276cda02a9a57b04827a8', 'saj'),
('3c3b1f5ddb0f0a07ad4e46775cb786a4', 'saj'),
('748a2050d35112524f5abdd63b5b7327', 'saj'),
('9a6d6c96379cb8be2a81645d7513bbfd', 'saj'),
('3b9192454193af4a97ca24a5b2c0382b', 'saj'),
('46c5f37a2b358002e37eb432f8284f3b', 'saj'),
('8707edcf5339882f07143178d74036f3', 'saj'),
('e5a00fdc2ee72bbec89aeac705814d4f', 'saj'),
('e5a00fdc2ee72bbec89aeac705814d4f', 'saj'),
('e5a00fdc2ee72bbec89aeac705814d4f', 'saj'),
('239240386f816c780a76ac61b41c44c4', 'saj'),
('239240386f816c780a76ac61b41c44c4', 'saj'),
('556d47f8eeeb1f8e0edb5e564dbda6d4', 'saj'),
('556d47f8eeeb1f8e0edb5e564dbda6d4', 'saj'),
('556d47f8eeeb1f8e0edb5e564dbda6d4', 'saj'),
('556d47f8eeeb1f8e0edb5e564dbda6d4', 'saj'),
('556d47f8eeeb1f8e0edb5e564dbda6d4', 'saj'),
('a7b8deae6fee8e3c328b518335484c4b', 'saj'),
('a7b8deae6fee8e3c328b518335484c4b', 'saj'),
('a7b8deae6fee8e3c328b518335484c4b', 'saj'),
('f2e2bf1223be20f8924962e9bb6fd3ff', 'saj'),
('7dfada1da61e8ba61fa2ffc7aad228f8', 'eshan'),
('5bcc7b1369340a5e4c8898a02d2a51e5', 'eshan'),
('0982b95968c3609145e4e805b8545a6d', 'eshan'),
('0982b95968c3609145e4e805b8545a6d', 'test'),
('f081e891dfc34ee7a84e3d8300a3b28f', 'eshan');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`questionId` int(100) NOT NULL,
  `title` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `tag1` varchar(30) NOT NULL,
  `tag2` varchar(30) NOT NULL,
  `tag3` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `qRating` int(200) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`questionId`, `title`, `description`, `tag1`, `tag2`, `tag3`, `subject`, `qRating`, `username`) VALUES
(18, 'jdk not found ?', 'i have successfully installed ', 'jdk', 'java', 'windows', 'Desktop', 4, 'eshandl'),
(19, 'my css not working?', 'i have an error in my css conf', 'css', 'web', 'windows', 'Web', 1, 'eshandl'),
(20, 'php debugging?', 'any good way to debug php?', 'php', 'web', 'windows', 'Web', 0, 'eshandl'),
(21, 'c# documentation ', 'what are the good reading sour', 'c#', 'web', 'documentation', 'Desktop', 0, 'eshandl'),
(22, 'how can I run andriod in my ph', 'how can i do andriod in my pho', 'andriod', 'mobile', 'mob', 'Mobile', 0, 'eshandl'),
(23, 'bootstrap fail', 'my css files are not working', 'css', 'web', 'windows', 'Web', 0, 'eshandl'),
(24, 'java not working', 'my javafiles are not working', 'java', 'web', 'mobile', 'Mobile', 0, 'eshandl'),
(25, 'title', 'description description descri', 'test', 'test', 'test', 'Web', 0, 'eshandl');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
`tagId` int(200) NOT NULL,
  `tag` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tagId`, `tag`) VALUES
(1, 'java'),
(2, 'c++'),
(3, 'c#'),
(4, 'php'),
(5, 'javascript');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`userId` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `salt` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `name`, `username`, `password`, `salt`) VALUES
(14, 'eshan', 'eshandl', '29dff105e7d3783c619b2b3ef4b7470feede1bdd', '130bd65b9c10be389ae9'),
(16, 'test', 'test', 'e944aa0901366158321d11774b3cb5903d799030', 'ce6aea0530334abc163f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
 ADD PRIMARY KEY (`answerId`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`questionId`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
 ADD PRIMARY KEY (`tagId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
MODIFY `answerId` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `questionId` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
MODIFY `tagId` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `userId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
