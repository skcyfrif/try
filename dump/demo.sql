-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 03, 2022 at 08:04 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `no_year` int(11) NOT NULL DEFAULT '0',
  `price` decimal(10,2) NOT NULL,
  `is_active` enum('1','2') NOT NULL DEFAULT '1',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `title`, `description`, `no_year`, `price`, `is_active`, `created_on`) VALUES
(2, 'Advance', '<ul class=\"list-group text-center\">\r\n	<li class=\"list-group-item\">3 Year validity</li>\r\n	<li class=\"list-group-item\">Personal use</li>\r\n	<li class=\"list-group-item\">Unlimited projects</li>\r\n	<li class=\"list-group-item\">27/7 support</li>\r\n</ul>\r\n', 3, '75.00', '1', '2021-04-28 07:13:44'),
(1, 'Basic', '<ul class=\"list-group text-center\">\r\n	<li class=\"list-group-item\">1 Year validity</li>\r\n	<li class=\"list-group-item\">Personal use</li>\r\n	<li class=\"list-group-item\">Unlimited projects</li>\r\n	<li class=\"list-group-item\">27/7 support</li>\r\n</ul>\r\n', 1, '35.00', '1', '2021-04-28 06:13:58');

-- --------------------------------------------------------

--
-- Table structure for table `optionals`
--

CREATE TABLE `optionals` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` text NOT NULL,
  `is_active` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1-active, 2-inactive',
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `optionals`
--

INSERT INTO `optionals` (`id`, `name`, `value`, `is_active`, `created_on`) VALUES
(1, 'site_name', 'ESL Fast', '1', '2020-03-30 09:54:59'),
(2, 'site_short_name', 'EF', '1', '2020-03-30 09:54:59'),
(3, 'signup_text', '<h3>Membership Benefits and Fees</h3>\r\n\r\n<p>When you become a member, you can view the website without ads and get technical support.&nbsp;The membership fee is $35 for one year and $75 for three years.</p>\r\n\r\n<h2>Sign up now</h2>\r\n', '1', '2021-08-25 05:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `other_sites`
--

CREATE TABLE `other_sites` (
  `id` int(11) NOT NULL,
  `site_url` varchar(255) NOT NULL,
  `site_description` longtext NOT NULL,
  `is_active` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1 - active, 2- inactive',
  `sort_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `other_sites`
--

INSERT INTO `other_sites` (`id`, `site_url`, `site_description`, `is_active`, `sort_order`) VALUES
(1, 'https://www.backstageporno.com/', 'Phasellus sed sodales nibh. Integer tristique lacus non justo ornare, tincidunt mollis erat dictum. Aenean eu lectus sapien. Nullam eget hendrerit risus. Nam sapien massa, pellentesque sed suscipit quis, malesuada vulputate metus. ;\';\'', '2', 8),
(4, 'https://www.bathroomeye.com/', 'Phasellus sed sodales nibh. Integer tristique lacus non justo ornare, tincidunt mollis erat dictum. Aenean eu lectus sapien. Nullam eget hendrerit risus. Nam sapien massa, pellentesque sed suscipit quis, malesuada vulputate metus. ', '2', 3),
(5, 'https://www.nastypublicsex.com/', 'Integer tristique lacus non justo ornare, tincidunt mollis erat dictum. Aenean eu lectus sapien. Nullam eget hendrerit risus. Nam sapien massa, pellentesque sed suscipit quis, malesuada vulputate metus. ', '2', 2),
(7, 'https://www.doctorpiss.com/', 'Phasellus sed sodales nibh. Integer tristique lacus non justo ornare, tincidunt mollis erat dictum. Aenean eu lectus sapien. Nullam eget hendrerit risus. Nam sapien massa, pellentesque sed suscipit quis, malesuada vulputate metus.', '2', 1),
(8, 'https://www.ihuntmycunt.com/', 'Phasellus sed sodales nibh. Integer tristique lacus non justo ornare, tincidunt mollis erat dictum. Aenean eu lectus sapien. Nullam eget hendrerit risus. Nam sapien massa, pellentesque sed suscipit quis, malesuada vulputate metus.', '1', 7),
(9, 'https://maturegapers.com/', 'Phasellus sed sodales nibh. Integer tristique lacus non justo ornare, tincidunt mollis erat dictum. Aenean eu lectus sapien. Nullam eget hendrerit risus. Nam sapien massa, pellentesque sed suscipit quis, malesuada vulputate metus.', '1', 5),
(10, 'https://www.maturegynoexam.com/', 'Phasellus sed sodales nibh. Integer tristique lacus non justo ornare, tincidunt mollis erat dictum. Aenean eu lectus sapien. Nullam eget hendrerit risus. Nam sapien massa, pellentesque sed suscipit quis, malesuada vulputate metus.', '1', 6),
(11, 'https://www.maturegynospy.com/', 'Phasellus sed sodales nibh. Integer tristique lacus non justo ornare, tincidunt mollis erat dictum. Aenean eu lectus sapien. Nullam eget hendrerit risus. Nam sapien massa, pellentesque sed suscipit quis, malesuada vulputate metus.', '2', 4),
(12, 'https://www.oldsfuckdolls.com/', 'Phasellus sed sodales nibh. Integer tristique lacus non justo ornare, tincidunt mollis erat dictum. Aenean eu lectus sapien. Nullam eget hendrerit risus. Nam sapien massa, pellentesque sed suscipit quis, malesuada vulputate metus.', '2', 9);

-- --------------------------------------------------------

--
-- Table structure for table `paypal_details`
--

CREATE TABLE `paypal_details` (
  `id` int(11) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `client_secret` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paypal_details`
--

INSERT INTO `paypal_details` (`id`, `client_id`, `client_secret`, `created_on`) VALUES
(7, 'AeI8wFMhQ8nRBFWCOa105Gj8410H5VdCJ-iuOsRn_oT-Fy-5BIoJTFQA16vXjgtM4dWoMzixMkL7Gdo-', 'EJuSQCwh9FhPBTscifd1ZxgqK0IZfNH9GF8kI9PAo_K48TLC8XVVHT0k9SAhgK22dzLKkhLcCIJfrZM9', '2021-09-09 12:04:46');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `value` mediumtext NOT NULL,
  `display` varchar(100) NOT NULL,
  `type` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1-General, 2-Email',
  `is_active` tinyint(2) NOT NULL DEFAULT '1' COMMENT '0-Inactive, 1-Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `display`, `type`, `is_active`) VALUES
(1, 'EMAIL_FORGOT_PASS', '<p>Hi [NAME],</p>\r\n\r\n<p>Please click on the link below to change your password.</p>\r\n\r\n<p>Please click on below button to activate your account.</p>\r\n\r\n<p><a href=\"[LINK]\" style=\" background-color: #4CAF50;  border: none;  color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;\">Click to reset password</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>If click not worked,&nbsp;copy and paste below link in new tab</p>\r\n\r\n<p>[LINK]</p>\r\n', ' Forgot Password', 2, 1),
(2, 'FROM_EMAIL', 'support@eslfast.com', 'From Email ID for all notifications', 1, 1),
(3, 'PAYMENT_MAIL', '<p>&nbsp;</p>\r\n<p>Hi [NAME],</p>\r\n<p>Email: [EMAIL],</p>\r\n<p>[MEMBERSHIP_NAME] activated successfully.</p>\r\n<p>&nbsp;</p>\r\n<p>Expiry on: [EXP_DATE]</p>\r\n<p>&nbsp;</p>\r\n\r\n', 'Payment done successfully', 2, 1),
(4, 'ADMIN_TO_MAIL', 'tesl@eslfast.com', 'admin mail address', 1, 1),
(5, 'MEMBERSHIP_EXPIRY', '<p> [MSG] \r\n \r\nThanks\r\n</p>', 'Membership soon expiry', 2, 1),
(6, 'CONTACT_US', '<p>Hi admin you have Contact Message from [NAME]</p>\r\n\r\n<p>Email:[EMAIL]</p>\r\n\r\n<p>Subject:[SUBJECT]</p>\r\n\r\n<p>Message:[MESSAGE]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Best Regards,</p>\r\n\r\n', 'Message from Contact us', 2, 0),
(7, 'USER_CONTACT_US', '<p>We received your message. Our team contact you as soon as possible.</p>\r\n', 'Responce on user contact us', 2, 0),
(8, 'USER_SUBSCRIBE', '<p>Thank you for Subscribe. You receive all new and offer related message. </p>', 'User receive after subscribe', 2, 0),
(9, 'REGISTRATION', '<p>Hi [NAME],</p>\r\n\r\n<p>Your account is created successfully.</p>\r\n\r\n<p><a href=\"[LINK]\" style=\" background-color: #4CAF50;  border: none;  color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;\">Click to activate your account</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>If click not worked, copy and paste below link in new tab</p>\r\n\r\n<p>[LINK]</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'REGISTRATION', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `social_media_links`
--

CREATE TABLE `social_media_links` (
  `id` int(11) NOT NULL,
  `unq_id` varchar(200) NOT NULL,
  `name` varchar(20) NOT NULL,
  `url` varchar(150) NOT NULL,
  `icon` varchar(150) NOT NULL,
  `is_active` enum('1','2') NOT NULL DEFAULT '1' COMMENT '1-active, 2- inactive',
  `sort_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_media_links`
--

INSERT INTO `social_media_links` (`id`, `unq_id`, `name`, `url`, `icon`, `is_active`, `sort_order`) VALUES
(1, 'bf194f670c5e92f5f15f45c5afe94494', 'Facebook', 'https://facebook.com', '<i class=\"fa fa-facebook-official\"></i>', '1', 4),
(2, '27167c7dfcdd7c2b7fd5933d5e17a73e', 'Twitter', 'https://twitter.com', '<i class=\"fa fa-twitter\"></i>', '1', 2),
(4, '8714f4bb8754289dd70f0465c4ed1849', 'Googe+', 'https://google.com', '<i class=\"fa fa-google-plus \"></i>', '1', 1),
(6, '3c3b1abe7aa27bdcb44664684a8bb6d1', 'youtube', 'https://github.com', '<i class=\"fa  fa-youtube\"></i>', '1', 6),
(7, '0ad496c8e97eb11595e768d5106f334e', 'Pinterest', 'https://in.pinterest.com/drawforest/', '<i class=\"fa  fa-pinterest-square\"></i>', '1', 3),
(8, '58e5a38d5abe0ec52a98472bbad7759a', 'Linkedin', 'https://www.linkedin.com/', '<i class=\"fa  fa-linkedin-square\"></i>', '1', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `unq_id` varchar(64) NOT NULL COMMENT 'users unique id',
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL COMMENT 'used for login',
  `password` varchar(255) NOT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1- Admin Panel',
  `is_active` enum('1','2') NOT NULL DEFAULT '2' COMMENT '1 - Active, 2 - Inactive',
  `login_token` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL COMMENT 'used for facebook registration',
  `created_dt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastmodify_dt` datetime NOT NULL,
  `last_login_date` datetime NOT NULL,
  `last_login_ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unq_id`, `name`, `email`, `password`, `type`, `is_active`, `login_token`, `token`, `created_dt`, `lastmodify_dt`, `last_login_date`, `last_login_ip`) VALUES
(1, 'b95524ba7632edb931210b8e1deb617a', 'admin', 'admin@gmail.com', '$2y$10$CIJnL44OXjOcsXTRZJqDAed9IrZiOCjrqRx8eNSV2tugsQLwgR9FW', 1, '1', 'admin12232343454545', 'ab985ae164924f8c08fbbc490f72521f', '2020-01-17 05:32:46', '2020-01-17 05:32:46', '2022-01-03 06:55:51', '127.0.0.1'),
(3, '42772718c313837d5f3a9c7b63236743', 'Admin', 'admin1@gmail.com', '$2y$10$CIJnL44OXjOcsXTRZJqDAed9IrZiOCjrqRx8eNSV2tugsQLwgR9FW', 1, '1', 'admin121212121212', '', '2020-05-16 06:49:33', '2020-05-16 06:49:33', '2022-01-03 06:53:28', '127.0.0.1'),
(40, '2dd70b53616b6faadb7b70347d4a8dde', 'user', 'user@gmail.com', '$2y$10$CIJnL44OXjOcsXTRZJqDAed9IrZiOCjrqRx8eNSV2tugsQLwgR9FW', 4, '1', '4c6703f7a2bda34342c1aa9609a9743e346', '', '2021-08-26 10:03:14', '2021-08-26 10:03:14', '2021-10-09 14:14:50', '103.203.132.174');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` text,
  `path` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `country` varchar(80) DEFAULT NULL,
  `state` varchar(80) DEFAULT NULL,
  `city` varchar(80) DEFAULT NULL,
  `street_no` varchar(255) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `first_name`, `last_name`, `phone_number`, `address`, `path`, `photo`, `gender`, `country`, `state`, `city`, `street_no`, `zip_code`) VALUES
(1, 1, NULL, NULL, '6268234575', '72 Quill, Irvine, CA 92620', 'files/admin_photos/', '1589628600883644330.png', 'Male', NULL, NULL, NULL, NULL, NULL),
(35, 40, 'user', 'Sint ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_membership`
--

CREATE TABLE `user_membership` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `membership_id` int(11) NOT NULL,
  `buy_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price` decimal(10,2) NOT NULL,
  `pay_key` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `payer_id` varchar(255) NOT NULL,
  `status` enum('1','2','3') NOT NULL DEFAULT '2' COMMENT '1-success, 2 -pending, 3 - cancel',
  `is_mail` enum('1','2') NOT NULL DEFAULT '2' COMMENT '1- send, 2 -not send'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `optionals`
--
ALTER TABLE `optionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_sites`
--
ALTER TABLE `other_sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paypal_details`
--
ALTER TABLE `paypal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`),
  ADD KEY `is_active` (`is_active`);

--
-- Indexes for table `social_media_links`
--
ALTER TABLE `social_media_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_membership`
--
ALTER TABLE `user_membership`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `optionals`
--
ALTER TABLE `optionals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `other_sites`
--
ALTER TABLE `other_sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `paypal_details`
--
ALTER TABLE `paypal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `social_media_links`
--
ALTER TABLE `social_media_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4571;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4566;

--
-- AUTO_INCREMENT for table `user_membership`
--
ALTER TABLE `user_membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
