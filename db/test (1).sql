-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2015 at 09:33 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `employes`
--

CREATE TABLE IF NOT EXISTS `employes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Emp_cnic` varchar(20) DEFAULT NULL,
  `Emp_name` varchar(255) DEFAULT NULL,
  `Emp_father_name` varchar(255) DEFAULT NULL,
  `Emp_scale` int(100) DEFAULT NULL,
  `Emp_post` varchar(255) DEFAULT NULL,
  `Emp_address` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `employes`
--

INSERT INTO `employes` (`id`, `Emp_cnic`, `Emp_name`, `Emp_father_name`, `Emp_scale`, `Emp_post`, `Emp_address`) VALUES
(1, NULL, 'Nasir', 'Bashir AHMAD', 0, 'asd', 'gjc'),
(2, NULL, 'sadas', 'das', 0, 'asd', 'asd'),
(3, NULL, 'zxc', 'zxc', 0, 'zxc', 'zxc'),
(4, NULL, 'xcv', 'xcv', 0, 'xcvxc', 'vcx'),
(7, NULL, 'hjghjghjghj', 'Bashir AHMAD', 0, '', ''),
(11, NULL, 'hassan', 'nazer', 14, 'hJKASK', 'sshjhshj');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `groups_name_unique` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Moderator', '{"admin":1,"users":1}', '2015-08-03 16:49:27', '2015-08-03 16:49:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'sdfsdf', 'sdfsd', 'fsdfsdfsd'),
(2, 'malik', 'malik', 'malik'),
(3, 'malik', 'malik', 'nnkds'),
(4, 'malik', 'malik', 'nnkds'),
(5, 'malik', 'malik', 'nnkds'),
(6, 'dfgdg', 'dfgdg', 'sdsf'),
(7, 'ghfg', 'ghfg', 'chc'),
(8, 'gxg', 'gxg', 'xdgdfg'),
(9, 'dgfdg', 'dgfdg', 'lkj'),
(10, 'kk;k', 'kkk', 'pk'),
(11, 'dfgdg', 'dfgdg', 'zd'),
(12, 'tysy', 'tysy', 'seys'),
(13, 'bbxb', 'bbxb', 'zbz'),
(14, 'nadir', 'nadir', 'malik'),
(15, 'nadir', 'nadir', 'malik'),
(16, 'malik', 'malik', 'ali'),
(17, 'rsre', 'rsre', 'wrwr'),
(18, 'nadir', 'nadir', 'jkslksj'),
(19, 'ADfhgjgf', 'adfhgjgf', 'Qfdgdh'),
(20, 'sgkgs', 'sgkgs', 'nadir malik'),
(21, 'BF', 'bf', 'DGDG'),
(22, 'l;l;l', 'lll', 'l'';'),
(23, 'ui', 'ui', '5768'),
(24, 'mkp;p', 'mkpp', '6879'),
(25, 'dfhgdgh', 'dfhgdgh', 'fgfg');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(255) DEFAULT NULL,
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `class` varchar(255) DEFAULT NULL,
  `session` int(100) DEFAULT NULL,
  `address` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54326 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `id`, `class`, `session`, `address`) VALUES
('', 1, '', 0, ''),
('akram', 789, 'mcs', 4526, 'ddddd'),
('yqoeyqoiu', 2013, 'wwiwwi', 687, 'snsns'),
('asda', 2324, 'da', 3242, 'zXXx'),
('jhkjh', 5767, 'khlk', 678, 'gkgc'),
('ssd', 54322, 'fsf', 553, 'ccc'),
('hjhg', 54323, 'ghj', 0, 'ghj'),
('nadir MALIK', 54324, 'mcd', 2013, 'sama satta'),
('dfz', 54325, 'fasf', 0, 'bxc');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(4) NOT NULL DEFAULT '0',
  `banned` tinyint(4) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(4) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_activation_code_index` (`activation_code`),
  KEY `users_reset_password_code_index` (`reset_password_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'nadir@example.com', '$2y$10$VzPGb0T7tOzT7Waq9CQ.KuGDMEVwKPx8VBfG3UpI/LzVyZIjkwfKW', '{"user.create":-1,"user.delete":-1,"user.view":1,"user.update":1}', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-08-03 16:51:26', '2015-08-03 16:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
