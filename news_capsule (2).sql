-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2021 at 12:59 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_capsule`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertisments`
--

CREATE TABLE `tbl_advertisments` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `image` varchar(60) NOT NULL,
  `expire_date` datetime NOT NULL,
  `link` varchar(40) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `Rank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `slug` varchar(30) NOT NULL,
  `rank` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(40) DEFAULT NULL,
  `created_at` datetime(4) DEFAULT NULL,
  `updated_at` datetime(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `name`, `slug`, `rank`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'sports news', 'sports-news', 1, '0', 1, 1, '2020-09-02 18:02:30.0000', '2020-09-08 18:31:00.0000'),
(3, 'politices news', 'politices-news', 3, '0', 1, NULL, '2020-09-21 18:42:28.0000', NULL),
(4, 'Health news', 'health-news', 4, '0', 1, NULL, '2020-09-21 18:47:56.0000', NULL),
(5, 'corona News', 'corona-news', 4, '1', 1, NULL, '2020-09-21 18:58:49.0000', NULL),
(6, 'educational News', 'educational-news', 5, '1', 1, NULL, '2020-09-21 19:06:52.0000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` varchar(30) NOT NULL,
  `comment_date` datetime NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `slug` varchar(30) NOT NULL,
  `feature_image` varchar(40) NOT NULL,
  `short_description` varchar(40) NOT NULL,
  `description` varchar(40) NOT NULL,
  `feature_key` tinyint(1) DEFAULT NULL,
  `breaking_key` tinyint(1) DEFAULT NULL,
  `slider_key` tinyint(1) DEFAULT NULL,
  `status` enum('0','1') NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `view_counts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `category_id`, `title`, `slug`, `feature_image`, `short_description`, `description`, `feature_key`, `breaking_key`, `slider_key`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `view_counts`) VALUES
(1, 2, 'college life', 'college-life', '5f58f55c7ca27_my.jpg', 'college life is memorable .', '<p><strong>hello college life</strong></', 1, 1, 0, '0', 1, NULL, '2020-09-09', NULL, 0),
(2, 3, 'वामदेव गौतमको मनोनयनविरुद्ध सर', 'bamdev-gautam', '5f68d8fc7e8b4_thumb.jpg', 'वरिष्ठ अधिवक्ता दिनेश त्रिपाठीले दायर गर', '<p>काठमाडौँ — प्रतिनिधिसभा निर्वाचनमा पर', 1, 1, 1, '1', 1, NULL, '2020-09-21', NULL, 0),
(3, 4, '‘प्रतिनिधिसभा निर्वाचनमा पराजि', 'health-news', '5f68d9aa32369_thumb (1).jpg', 'कालिकोट — तिलागुफा–११ ठिन्केकी १९ वर्षीय', '<p>कालिकोट — तिलागुफा–११ ठिन्केकी १९ वर्', 1, 1, 1, '1', 1, NULL, '2020-09-21', NULL, 0),
(4, 3, 'संसदीय समितिलाई राजदूतहरूको आग', 'political-news', '5f68db9446c65_thumb (2).jpg', 'काठमाडौँ — वैदेशिक रोजगारी र अन्य कामले ', '<p>काठमाडौँ — वैदेशिक रोजगारी र अन्य काम', 1, 0, 1, '1', 1, NULL, '2020-09-21', NULL, 0),
(5, 5, 'Nepal reports 16 more Covid-19', 'nepal-reports-16-more-covid-19', '5f68dc752fc90_thumb (3).jpg', 'Country’s infection tally reaches 65,276', '<p>Nepal on Monday reported 16 Covid-19-', 1, 0, 1, '1', 1, NULL, '2020-09-21', NULL, 0),
(6, 5, 'Domestic carriers resume opera', 'domestic-carriers-resume-opera', '5f68dd6150eb7_IMG8116-1600669401.jpg', 'According to the Civil Aviation Authorit', '<p>According to the Civil Aviation Autho', 1, 1, 0, '1', 1, NULL, '2020-09-21', NULL, 0),
(7, 6, 'Reduction of school curriculum', 'reduction-of-school-curriculum', '5f68de55c45c4_thumb (4).jpg', 'Many schools are still unclear on how to', '<p>Many schools are still unclear on how', 1, 0, 1, '1', 1, NULL, '2020-09-21', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `slug` varchar(40) NOT NULL,
  `short_description` varchar(150) NOT NULL,
  `description` varchar(400) NOT NULL,
  `page_image` varchar(50) NOT NULL,
  `page_status` enum('0','1') NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `name`, `status`) VALUES
(1, 'authors5', 1),
(2, 'mukesh mandal', 1),
(3, 'mukesh mandal', 1),
(4, 'mukesh madndal', 0),
(5, 'writter', 1),
(6, 'manager', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pam_vat` varchar(255) DEFAULT NULL,
  `reg_no` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `logo` varchar(255) NOT NULL DEFAULT '',
  `fav_icon` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `last_login` date DEFAULT NULL,
  `image` varchar(600) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `email`, `username`, `password`, `last_login`, `image`, `status`, `role_id`) VALUES
(1, 'Mukesh', 'mukesh123@gmail.com', 'mukesh', 'mukesh123', NULL, '', 1, 1),
(4, 'mukesh mandal', 'metheamar111@gmail.com', 'mukesh111', 'mukesh@1', NULL, NULL, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_advertisments`
--
ALTER TABLE `tbl_advertisments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_advertisments`
--
ALTER TABLE `tbl_advertisments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_advertisments`
--
ALTER TABLE `tbl_advertisments`
  ADD CONSTRAINT `tbl_advertisments_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `tbl_users` (`id`),
  ADD CONSTRAINT `tbl_advertisments_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD CONSTRAINT `tbl_categories_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `tbl_users` (`id`),
  ADD CONSTRAINT `tbl_categories_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD CONSTRAINT `tbl_comment_ibfk_1` FOREIGN KEY (`news_id`) REFERENCES `tbl_news` (`id`);

--
-- Constraints for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD CONSTRAINT `tbl_news_ibfk_1` FOREIGN KEY (`updated_by`) REFERENCES `tbl_users` (`id`),
  ADD CONSTRAINT `tbl_news_ibfk_2` FOREIGN KEY (`created_by`) REFERENCES `tbl_users` (`id`),
  ADD CONSTRAINT `tbl_news_ibfk_3` FOREIGN KEY (`category_id`) REFERENCES `tbl_categories` (`id`);

--
-- Constraints for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD CONSTRAINT `tbl_page_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `tbl_users` (`id`),
  ADD CONSTRAINT `tbl_page_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD CONSTRAINT `tbl_settings_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `tbl_users` (`id`),
  ADD CONSTRAINT `tbl_settings_ibfk_2` FOREIGN KEY (`updated_by`) REFERENCES `tbl_users` (`id`);

--
-- Constraints for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tbl_roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
