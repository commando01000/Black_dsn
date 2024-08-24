-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2024 at 11:14 AM
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
-- Database: `db_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) NOT NULL,
  `title` varchar(400) NOT NULL,
  `description` text NOT NULL,
  `cover` varchar(500) NOT NULL,
  `embed` text NOT NULL,
  `builder` varchar(45) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `title`, `description`, `cover`, `embed`, `builder`, `created_at`, `updated_at`, `created_by`) VALUES
(1, 'African Shooting Championship', 'The African shooting championship took place in October 2023, and the brief was to announce that this international championship is happening in Egypt. We came up with the creative&nbsp; as a TV copy.', 'projects/4U0zucWBcr3jKANM1BZg7UQgQlExOw2SEMVbYBWd.png', 'https://www.instagram.com/reel/CybrB3frOjg/embed/', 'on', '2024-04-22 12:42:25', '2024-04-22 12:42:41', 1),
(2, 'Criss el masry', 'Criss el masry', 'projects/fVOPZsFcUKsSMvrTJY3pQevYTsZqMORivzgU29Zk.png', 'https://player.vimeo.com/video/852312220?h=509ce9e794', 'on', '2024-04-22 12:45:04', '2024-04-22 12:47:05', 1),
(3, 'Hayah Karima', 'Hayah Karima is a well known organization for charity and donation,\r\n\r\nIn ramadan 2022, the brief was to show to public how this organization build a decent life for people&nbsp; in countryside.\r\n\r\n&nbsp;\r\n\r\nOur strategy was to grab the attention given that we are in the most competitive month in the year, all brands are coming with TV copies.\r\n\r\nWe decided to take it to up level and produced a song featuring Amir Eid and showing the difference happened because of this charity organization.&nbsp;&nbsp;', 'projects/znJUdCvgl9hIFYG5LXeaUZkXCcwpW6YbTOJ1N7Kw.png', 'https://player.vimeo.com/video/741436611?h=6cef84291a', 'on', '2024-04-22 12:46:47', '2024-04-22 12:46:47', 1),
(4, 'Meat Lovers', 'In this brief Hayah Karima was trying to encourage the audience to donate in feast with their money for the purpose of delivering meat to people who needed.', 'projects/PEONI2KKy92TQJ8c8GIujsvcBQd2KVvxzkZYPuPC.png', 'https://player.vimeo.com/video/838029333?h=25b40bb323', 'on', '2024-04-22 12:48:16', '2024-04-22 12:48:26', 1),
(5, 'New alamien', 'New Alamein festival was one of most challenging projects we had, as New Alamein city is one of the new fourth generation cities in Egypt and the brief was mainly to announce the launching of&nbsp; the city. So we decided to do the announcement but in our own way . We created a line to be the big umbrella for the concept &ldquo;العالم علمين&rdquo;\r\n\r\n&nbsp;\r\n\r\nThe line was mainly to address that the whole world is inside the city, as the festival was very inclusive and gathered a lot of different activities from fashion to sports. Because we fell in love with the line, we decided not not just implement it in one copy, but three which were: the main copy, Tazkarti, and for Cris El Masry.', 'projects/vaJHzA1mlKYhnXgB4RACOjySOn80apGvRNcpcVV7.png', 'https://player.vimeo.com/video/853727931?h=67ec2eac3a', 'on', '2024-04-22 12:49:59', '2024-04-22 12:49:59', 1),
(6, 'Tagamal Bel Akhlaa’', 'Hayah Karima is a well known organization for charity and donation,\r\n\r\nIn ramadan 2022, the brief was to show to public how this organization build a decent life for people&nbsp; in countryside.\r\n\r\n&nbsp;\r\n\r\nOur strategy was to grab the attention given that we are in the most competitive month in the year, all brands are coming with TV copies.\r\n\r\nWe decided to take it to up level and produced a song featuring Amir Eid and showing the difference happened because of this charity organization.&nbsp;', 'projects/NCdwlRhHeTYGs5TeS7B22QjYiAZaESToWGDAR0tw.png', 'https://player.vimeo.com/video/741436611?h=6cef84291a', 'on', '2024-04-22 12:51:10', '2024-04-22 12:51:10', 1),
(7, 'tazkarti', 'tazkarti', 'projects/gfYD7Ix6gjYh4qPVeOrfrVyc4bCtXv2TK7FJfotF.png', 'https://player.vimeo.com/video/852688900?h=fe9667afc4', 'on', '2024-04-22 12:52:09', '2024-04-22 12:52:09', 1),
(8, 'World Youth Forum', 'Back Together\r\n\r\nIs an international event that usually takes place every year in Sharm el Sheikh, Egypt, and its main objective is to gather all youth around the world with one goal: to discuss global issues and try to propose solutions.\r\n\r\nIn this event we produced the international main copy.', 'projects/kvhuRQ3GpZOWtAmenzo1mmQFOhsskNWy55fvPwMg.png', 'https://player.vimeo.com/video/741438244?h=07ef45f52a', 'on', '2024-04-22 12:53:20', '2024-04-22 12:53:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint(20) NOT NULL,
  `full_name` varchar(500) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(300) NOT NULL,
  `cv` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assign_forms_roles`
--

CREATE TABLE `assign_forms_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assign_forms_users`
--

CREATE TABLE `assign_forms_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `normal_description` text DEFAULT NULL,
  `description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_by` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `images`, `short_description`, `category_id`, `normal_description`, `description`, `slug`, `created_by`, `created_at`, `updated_at`) VALUES
(21, '{\"en\":\"Wild Life Could be amazing, see why\",\"ar\":null}', 'blogs/DwbubFGfpIPWjNzSvRlgrNgpl7WAhzQayjwGmcMI.jpg', '{\"en\":\"qProin faucibus necmauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas\",\"ar\":null}', 12, '{\"en\":\"qProin faucibus necmauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas\",\"ar\":null}', '{\"en\":\"<p>asdasd asdasd</p>\",\"ar\":null}', 'wild-life-could-be-amazing-see-why', '1', '2024-08-04 06:32:18', '2024-08-04 06:32:18'),
(22, '{\"en\":\"Quick tips for an effective style wedding\"}', 'blogs/JBRSrK6hpNYMd0P4LCvyvcDZGAwwmo10Gz9hKNT6.jpg', '{\"en\":\"qProin faucibus necmauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas\"}', 13, '{\"en\":\"qProin faucibus necmauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas asd asdasd\",\"ar\":null}', '{\"en\":\"<p><a href=\\\"https://blackbb.netlify.app/dark/single-post#\\\">As a leading UX design agency,</a>&nbsp;we&rsquo;re often asked by prospective clients and fellow designers similar questions: Disrupt is an experience to showcase the agency&#39;s approach to growing brands by building tech. Featured in an FWA Insights article, our team elaborates on the motivation behind the creation of this site.</p>\\r\\n\\r\\n<p><a href=\\\"https://blackbb.netlify.app/dark/single-post#\\\">As a leading UX design agency,</a>&nbsp;we&rsquo;re often asked by prospective clients and fellow designers similar questions: Disrupt is an experience to showcase the agency&#39;s approach to growing brands by building tech. Featured in an FWA Insights article, our team elaborates on the motivation behind the creation of this site.</p>\"}', 'quick-tips-for-an-effective-style-wedding', '1', '2024-08-04 06:39:54', '2024-08-10 06:09:41'),
(23, '{\"en\":\"Wild Life Could be amazing, see why\",\"ar\":null}', 'blogs/KXUeMJ2VdyRlgVu9Xsx6To7mAYZIPvp1NRu9GLoQ.jpg', '{\"en\":\"qProin faucibus necmauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas\",\"ar\":null}', 13, '{\"en\":\"qProin faucibus necmauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas\",\"ar\":null}', '{\"en\":\"<p>asd</p>\",\"ar\":null}', 'wild-life-could-be-amazing-see-why-1', '1', '2024-08-06 10:05:50', '2024-08-06 10:05:50'),
(24, '{\"en\":\"Quick tips for an effective style wedding\",\"ar\":null}', 'blogs/oSOTD05tJCInh18MBo9dE52aOzDFRXjgq7UYg3ao.jpg', '{\"en\":\"qProin faucibus necmauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas\",\"ar\":null}', 12, '{\"en\":\"qProin faucibus necmauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas\",\"ar\":null}', '{\"en\":\"<p>asd</p>\",\"ar\":null}', 'quick-tips-for-an-effective-style-wedding-1', '1', '2024-08-06 10:06:11', '2024-08-06 10:06:11'),
(25, '{\"en\":\"Wild Life Could be amazing, see why\",\"ar\":null}', 'blogs/SUPip9DsT26THnywAWEik6AavBDHFF0vDj1IoeW8.jpg', '{\"en\":\"qProin faucibus necmauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas\",\"ar\":null}', 12, '{\"en\":\"qProin faucibus necmauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas\",\"ar\":null}', '{\"en\":\"<p>sad</p>\",\"ar\":null}', 'wild-life-could-be-amazing-see-why-2', '1', '2024-08-06 10:06:35', '2024-08-06 10:06:35'),
(26, '{\"en\":\"Quick tips for an effective style wedding\",\"ar\":null}', 'blogs/smFDiW0dbE9NS8jf47HkTMp6Jl1sRka2Ur1j4SGR.jpg', '{\"en\":\"qProin faucibus necmauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas\",\"ar\":null}', 13, '{\"en\":\"qProin faucibus necmauris a sodales, sed elementum mi tincidunt. Sed eget viverra egestas\",\"ar\":null}', '{\"en\":\"<p>asd</p>\",\"ar\":null}', 'quick-tips-for-an-effective-style-wedding-2', '1', '2024-08-06 10:06:53', '2024-08-06 10:06:53');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(12, '{\"en\":\"Uncategorized\"}', 1, '2024-08-04 06:11:54', '2024-08-04 06:11:54'),
(13, '{\"en\":\"Editorial\"}', 1, '2024-08-04 06:12:02', '2024-08-04 06:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `blog_id`, `name`, `comment`, `created_at`, `updated_at`) VALUES
(2, 25, 'Mahmoud Ebrahim', 'Iam going to buy this !', '2024-08-10 07:05:53', '2024-08-10 07:05:53'),
(3, 25, 'TNT Store', 'Hello There !', '2024-08-10 07:24:14', '2024-08-10 07:24:14'),
(4, 25, 'Ahmed Khaled', 'i love this world so much man !', '2024-08-10 17:57:30', '2024-08-10 17:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments_replies`
--

CREATE TABLE `blog_comments_replies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `comment_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_comments_replies`
--

INSERT INTO `blog_comments_replies` (`id`, `name`, `comment_id`, `comment`, `created_at`, `updated_at`) VALUES
(7, 'Supraa', 3, 'Iam here Guysss !!!', '2024-08-10 16:32:11', '2024-08-10 16:32:11'),
(8, 'Ahmed Bakry', 2, 'Hello there man !', '2024-08-10 16:46:48', '2024-08-10 16:46:48'),
(9, 'nested !', 3, 'JJJJJ', '2024-08-10 16:48:17', '2024-08-10 16:48:17'),
(10, 'Hamada elsayed', 2, 'Hi man how are u doing ?', '2024-08-10 17:56:57', '2024-08-10 17:56:57');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `business_email` varchar(255) NOT NULL,
  `business_website` varchar(255) NOT NULL,
  `business_address` text NOT NULL,
  `business_number` varchar(255) NOT NULL,
  `business_phone` varchar(255) NOT NULL,
  `business_logo` varchar(255) NOT NULL,
  `booking_slots` varchar(255) NOT NULL,
  `json` longtext DEFAULT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT 0,
  `amount` decimal(10,2) DEFAULT NULL,
  `currency_symbol` varchar(255) DEFAULT NULL,
  `currency_name` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_values`
--

CREATE TABLE `booking_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `json` longtext NOT NULL,
  `amount` double(8,2) DEFAULT NULL,
  `currency_symbol` varchar(255) DEFAULT NULL,
  `currency_name` varchar(255) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `booking_slots_date` date DEFAULT NULL,
  `booking_slots` text DEFAULT NULL,
  `booking_seats_date` date DEFAULT NULL,
  `booking_seats_session` varchar(255) DEFAULT NULL,
  `booking_seats` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `booking_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) NOT NULL,
  `name` varchar(400) NOT NULL,
  `description` text DEFAULT NULL,
  `cover` varchar(500) NOT NULL,
  `client_category` bigint(20) UNSIGNED DEFAULT NULL,
  `created_by` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `description`, `cover`, `client_category`, `created_by`, `created_at`, `updated_at`) VALUES
(25, 'Mohamed Salama', 'a', 'clients/wSsTVrRCzhGAXR4vW1pig60c4pwzYKOVgq4Mbwy9.jpg', 4, 1, '2024-07-23 06:13:10', '2024-07-23 06:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `client_categories`
--

CREATE TABLE `client_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_categories`
--

INSERT INTO `client_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'ui/ux design2', 1, '2024-07-18 08:20:46', '2024-07-18 08:20:46'),
(3, 'Event Management', 0, '2024-07-18 08:36:53', '2024-07-23 06:29:21'),
(4, 'Interior – Luxury Living', 0, '2024-07-18 14:57:29', '2024-07-23 06:29:14'),
(5, 'Video Shooting', 0, '2024-07-18 14:57:52', '2024-07-23 06:29:16'),
(6, 'Creative Designs', 0, '2024-07-18 14:58:47', '2024-07-23 06:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `comments` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `firstname`, `lastname`, `name`, `email`, `subject`, `comments`, `updated_at`, `created_at`) VALUES
(40, NULL, NULL, 'Mahmoud Ebrahim', 'jfijcc124@gmail.com', 'Blackdsn', 'Hello there supraa testing the contact us', '2024-08-01 07:24:58', '2024-08-01 07:24:58'),
(41, NULL, NULL, 'Mahmoud Ibrahim', 'tnt.store03@gmail.com', 'Blackdsn', 'Hi Hi Hi', '2024-08-10 06:54:33', '2024-08-10 06:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `designs`
--

CREATE TABLE `designs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `design_category` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designs`
--

INSERT INTO `designs` (`id`, `title`, `slug`, `cover`, `description`, `design_category`, `created_at`, `updated_at`) VALUES
(1, 'Headphones', 'Headphones', 'designs/DH5rVSXb1ZqKhIUvSXxZpvq9rWI9E6Th4NfMRDQp.jpg', 'ABOUT THE PROJECT Mode is an audio range designed to provide optimal performance and comfort for every mode of use. The', 1, '2024-08-01 09:48:07', '2024-08-07 05:34:23'),
(2, 'Dog Chow', 'Dog Chow', 'designs/9E37bb9TzWwrxxUxgEcp1Hx1cYMv29UfGfOiTcaO.jpg', 'This optional section is only applicable to posts. It is a space for you to write a summary of the post.', 4, '2024-08-01 10:10:31', '2024-08-07 05:35:37'),
(3, 'AUDI RS', 'AUDI RS', 'designs/RGbZxp6Th6zF64ltXnrfc5QvKmKrHa3EQu33aRa1.jpg', 'This optional section is only applicable to posts. It is a space for you to write a summary of the post.', 4, '2024-08-01 10:12:17', '2024-08-07 05:36:59'),
(6, 'OPEN RUN', 'OPEN RUN', 'designs/w7AiaVRPkJcVkBuflW0nVizES1Z5ThG2ondZU3Ih.jpg', 'ABOUT THE PROJECT Wondour™ was tasked with creating a pair of electronic glasses that can help legally-blind and low-vision people see', 1, '2024-08-03 06:49:53', '2024-08-07 07:18:31'),
(7, 'Men Fashion', 'Men Fashion', 'designs/wJJBmcwu1mPlCQHGUpc4n72AQKy086M2UWETvKcq.jpg', 'Jaramillo Published June 15th 2022 Caption #1 Caption #2 Caption #3 How is your visual identity? we', 7, '2024-08-03 06:51:01', '2024-08-08 07:33:57'),
(13, 'ENERGY DRINK', 'ENERGY DRINK', 'designs/VOoTE6eJxRHciekrtD8yRuxsj2JjJtzA83jrN8yP.jpg', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit laborum. Sed ut perspiciatis unde omnis iste natus sit .\r\n\r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt', 5, '2024-08-03 08:10:04', '2024-08-05 16:47:22'),
(16, 'VISIONAID', 'VISIONAID', 'designs/w2S13gSB6tASJPE3fGD5Gke2Arv2TZAiLETV9nDU.jpg', 'This optional section is only applicable to posts. It is a space for you to write a summary of the post.\r\nThis optional section is only applicable to posts. It is a space for you to write a summary of the post.', 4, '2024-08-06 07:44:50', '2024-08-06 07:46:53');

-- --------------------------------------------------------

--
-- Table structure for table `design_categories`
--

CREATE TABLE `design_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `design_categories`
--

INSERT INTO `design_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Production', 1, '2024-08-01 08:47:37', '2024-08-01 08:47:37'),
(4, 'Photography & Production', 1, '2024-08-01 08:56:23', '2024-08-01 09:00:23'),
(5, 'Technology', 1, '2024-08-03 06:43:00', '2024-08-03 06:43:00'),
(6, 'Creative & Photography', 1, '2024-08-03 06:47:41', '2024-08-03 06:47:41'),
(7, 'Photography', 1, '2024-08-03 06:50:25', '2024-08-03 06:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `design_details`
--

CREATE TABLE `design_details` (
  `id` int(11) NOT NULL,
  `design_id` int(11) DEFAULT NULL,
  `advantage` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `design_details`
--

INSERT INTO `design_details` (`id`, `design_id`, `advantage`, `created_at`, `updated_at`) VALUES
(1, 13, 'Beautiful and easy to understand UIUI', '2024-08-03 08:10:04', '2024-08-04 08:40:56'),
(2, 13, 'Theme advantages are pixel perfect design', '2024-08-03 08:10:04', '2024-08-03 08:10:04'),
(3, 13, 'Present your services with flexible', '2024-08-03 08:10:04', '2024-08-03 08:10:04'),
(4, 16, 'Beautiful and easy to understand UI', '2024-08-06 07:44:51', '2024-08-06 07:44:51'),
(5, 16, 'Theme advantages are pixel perfect design', '2024-08-06 07:44:51', '2024-08-06 07:44:51'),
(6, 16, 'Present your services with flexible', '2024-08-06 07:44:51', '2024-08-06 07:44:51');

-- --------------------------------------------------------

--
-- Table structure for table `design_details_images`
--

CREATE TABLE `design_details_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `design_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `design_details_images`
--

INSERT INTO `design_details_images` (`id`, `image`, `design_id`, `created_at`, `updated_at`) VALUES
(7, 'design_images/9R0m60S4h8ZP0OE7ZemKPB7ylItzyb3hj9Hunbup.gif', 13, '2024-08-05 16:47:22', '2024-08-05 16:47:22'),
(8, 'design_images/nV6QoyYkgpMn5GjWJN0YtDrbRA80zeb312NYD2ZX.jpg', 13, '2024-08-05 16:47:22', '2024-08-05 16:47:22'),
(9, 'design_images/H8JQDI7FYVK7JxOSZ5bzEsIqSyvK5bU4GZTksMkr.jpg', 13, '2024-08-05 16:47:22', '2024-08-05 16:47:22'),
(10, 'design_images/Pqhb4PXr2vI8RVTewShVDsN1rdRsQ9U7QHWdDJLS.jpg', 13, '2024-08-05 16:47:22', '2024-08-05 16:47:22'),
(11, 'design_images/LaQ67YGwaAyk75VclJLKw3biDG7eTIiANVt3AiIK.jpg', 13, '2024-08-05 16:47:23', '2024-08-05 16:47:23'),
(12, 'design_images/ZbvWeawGQsjGnqceSjknjHO6fPtOooH7IZEE2LCt.jpg', 13, '2024-08-05 16:47:23', '2024-08-05 16:47:23'),
(14, 'design_images/3OdgrHLsEGIit2bivXUDp2bqNwximwGhgjoo8QqG.jpg', 16, '2024-08-06 07:44:51', '2024-08-06 07:44:51'),
(15, 'design_images/vTcuyPv78jLXUfw7wxEBcheIpdLRY9ad1bDnqssz.jpg', 16, '2024-08-06 07:44:51', '2024-08-06 07:44:51'),
(16, 'design_images/uxkOD6B56ASAilanVOPLH4mWMsdhxqMACWdp5ixy.jpg', 16, '2024-08-06 07:44:51', '2024-08-06 07:44:51'),
(17, 'design_images/29KYwOUzuyLZXfovgNFAyM1gnxADJmXcRYROcYm2.jpg', 16, '2024-08-06 07:44:51', '2024-08-06 07:44:51'),
(18, 'design_images/qJxj3p2NOQ7dWS7T3i6ixXfK6fS4lDS2OSnXYZ3a.jpg', 16, '2024-08-06 07:44:51', '2024-08-06 07:44:51'),
(19, 'design_images/wYhe6kgmEdt58MIl4B72JQHDq5v1bJ0OQUUMQV78.jpg', 16, '2024-08-06 07:46:53', '2024-08-06 07:46:53'),
(20, 'design_images/HldgHaXA7nTkp8sqtgMr9YTOhdAAolfUXEZuXKFz.jpg', 16, '2024-08-06 07:46:53', '2024-08-06 07:46:53'),
(21, 'design_images/fja9Nlb1rbHxoOcmmwpzJ9nps8G3riM49ZpPEbba.jpg', 16, '2024-08-06 07:46:53', '2024-08-06 07:46:53'),
(22, 'design_images/Z32Jdmvk5DsoXjkvkoNrv4EUDG2WRIkOBwzOFKvS.jpg', 16, '2024-08-06 07:46:53', '2024-08-06 07:46:53'),
(23, 'design_images/VoctUv8KLveXSJ1tEbTQQ9ZrAuZ6UrdkrzxNRXYc.jpg', 16, '2024-08-06 07:46:53', '2024-08-06 07:46:53'),
(24, 'design_images/HT6imFqKu9sKEQENc66WbaRWOkdkrAIDZWl7p5Zu.jpg', 16, '2024-08-06 07:46:53', '2024-08-06 07:46:53'),
(25, 'design_images/T2JiiNfsRjTGQJyLHDBHHL2Juh1DxJiZfRJg0GEF.gif', 1, '2024-08-07 05:34:24', '2024-08-07 05:34:24'),
(26, 'design_images/HeyYqssXnvPHBBM5yQOdt1jSTxl99y90Yjjgzooo.jpg', 1, '2024-08-07 05:34:24', '2024-08-07 05:34:24'),
(27, 'design_images/cGpi9VYKORRCPhsRsOgumUsBXgApqa6pBNlIlXa1.jpg', 1, '2024-08-07 05:34:24', '2024-08-07 05:34:24'),
(28, 'design_images/oZ5tenXrv7C5p3A8kLse7qXMk6CzJZcWvMQYWJP2.jpg', 1, '2024-08-07 05:34:24', '2024-08-07 05:34:24'),
(29, 'design_images/99trQCCCuaXe4yIYjCHaf88kufxt5V2GsI2lmKbS.jpg', 1, '2024-08-07 05:34:24', '2024-08-07 05:34:24'),
(30, 'design_images/q22OzW1q2UWKuOcqAVqHfnql9WMHhXqbyaqfAZP4.jpg', 1, '2024-08-07 05:34:24', '2024-08-07 05:34:24'),
(31, 'design_images/DhtEwZccWINlpHA1hV69hETLsVrB5StHFVdCDbbt.jpg', 2, '2024-08-07 05:35:37', '2024-08-07 05:35:37'),
(32, 'design_images/YKirsBhONBheGl6qZBNkyApQmBIsuuJ2IzM9Jj7J.jpg', 2, '2024-08-07 05:35:37', '2024-08-07 05:35:37'),
(33, 'design_images/cjROWup34AI20VY6ATpSeYGcvhgxgEzD97tvMCul.jpg', 2, '2024-08-07 05:35:37', '2024-08-07 05:35:37'),
(34, 'design_images/v5jhuWQLsO8uGN2GgPkzzcw93PKm6VHSmF4CFUx3.jpg', 2, '2024-08-07 05:35:38', '2024-08-07 05:35:38'),
(35, 'design_images/71E5esqB3QVPUpCIgPtlR6ZyQMTPJhmXoDDoCzAZ.jpg', 2, '2024-08-07 05:35:38', '2024-08-07 05:35:38'),
(36, 'design_images/CcChzY8nID7AwS2YoiYeCmqCEvOwhGAK0gleVTdR.jpg', 2, '2024-08-07 05:35:38', '2024-08-07 05:35:38'),
(37, 'design_images/qA9nEMmERMbsACygy8Xdo63Wx3MOM7yu2on4EicB.jpg', 3, '2024-08-07 05:36:59', '2024-08-07 05:36:59'),
(38, 'design_images/dYuYqnH5EYlFdtXWcgHYiVsSGP6pOx9oe9eJzvuc.jpg', 3, '2024-08-07 05:36:59', '2024-08-07 05:36:59'),
(39, 'design_images/oq56Y3tq7I1iLJ0CXH6Dpye2WI5QEBlRnIDglbe9.jpg', 3, '2024-08-07 05:36:59', '2024-08-07 05:36:59'),
(40, 'design_images/tIVxxkJfkJTlSQuJUpYo20vGHjCboaTNc4O1EP7N.jpg', 3, '2024-08-07 05:36:59', '2024-08-07 05:36:59'),
(41, 'design_images/evlGKOnOYd4u4V5lsIYh9nNi8FFDrCVir8wLUtaX.jpg', 3, '2024-08-07 05:36:59', '2024-08-07 05:36:59'),
(42, 'design_images/ofxeg47KIJw2Dc9aDWuUXrpwjhgxguWCcb1CQrHV.jpg', 3, '2024-08-07 05:36:59', '2024-08-07 05:36:59'),
(43, 'design_images/if3dlKVIrejKXVI6WicbJmwLor3NjCrjqfdN3smU.jpg', 6, '2024-08-07 07:18:31', '2024-08-07 07:18:31'),
(44, 'design_images/GWwf61UpuwmI0Cb8w137KtKKuGWWytdl1Z7wS2cH.jpg', 6, '2024-08-07 07:18:31', '2024-08-07 07:18:31'),
(45, 'design_images/MEHgAdZrmu2YEmu5VXX4IhDjlZHj3jmovrFZP8IX.jpg', 6, '2024-08-07 07:18:31', '2024-08-07 07:18:31'),
(46, 'design_images/NgUqtkIsvv8c8zMeRLaN1ryx74lAKpi9MbYGKuk1.jpg', 6, '2024-08-07 07:18:31', '2024-08-07 07:18:31'),
(47, 'design_images/DmmTOD29e4i4QI0DEIzySGQwJLH2ZW4tQyLjIKNU.jpg', 6, '2024-08-07 07:18:31', '2024-08-07 07:18:31'),
(48, 'design_images/FZbPLdrTFLLxUkz8OzKil0GqvemUN4hGupghuntZ.jpg', 6, '2024-08-07 07:18:31', '2024-08-07 07:18:31'),
(49, 'design_images/HWHDd4n4iiFPoUMiIMAzkgmKSJRobo2eXGOrTb1S.jpg', 7, '2024-08-08 07:33:57', '2024-08-08 07:33:57'),
(50, 'design_images/CZs0VxwBqnolqAkDWCnbEbjZFamD4pwV4ahNxmPq.jpg', 7, '2024-08-08 07:33:57', '2024-08-08 07:33:57'),
(51, 'design_images/Jvdfv3R3xhj8mGFhGVwuLS5QQnJhwCVSYesDX3Mq.jpg', 7, '2024-08-08 07:33:57', '2024-08-08 07:33:57'),
(52, 'design_images/AMXgVsNXLm0dGERmNSm5cYYAWtXXk9ZyO7LxNDeG.jpg', 7, '2024-08-08 07:33:57', '2024-08-08 07:33:57'),
(53, 'design_images/Rv9ZHc4AgSglQBjOOWW0XMNlZgejBhMrPaUCY4Sh.jpg', 7, '2024-08-08 07:33:57', '2024-08-08 07:33:57'),
(54, 'design_images/OTk9yO6UDuptRMye6zPgIl58AjY3D4BYDYg9pq9X.jpg', 7, '2024-08-08 07:33:57', '2024-08-08 07:33:57');

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(33, 'Ahmed Sedky', 'a.12@gmail.com', 'HEHEHEHEHHEHEHEHEHEHE', '<p>Hello there,</p>', '2024-08-21 12:17:22', '2024-08-21 12:17:22'),
(34, 'Ahmed Sedky', 'a.12@gmail.com', 'HEHEHEHEHHEHEHEHEHEHE', '<p>Hello there,</p>', '2024-08-21 12:18:13', '2024-08-21 12:18:13'),
(35, 'Ahmed Sedky', 'a.12@gmail.com', 'HEHEHEHEHHEHEHEHEHEHE', '<p>Hello there,</p>', '2024-08-21 12:18:49', '2024-08-21 12:18:49'),
(36, 'Ahmed Sedky', 'a.12@gmail.com', 'HEHEHEHEHHEHEHEHEHEHE', '<p>Hello there,</p>', '2024-08-21 12:20:04', '2024-08-21 12:20:04'),
(37, 'Ahmed Sedky', 'a.12@gmail.com', 'HEHEHEHEHHEHEHEHEHEHE', '<p>Hello there,</p>', '2024-08-21 12:20:32', '2024-08-21 12:20:32'),
(38, 'Mahmoud Ibrahim', 'tnt.store0133@gmail.com', 'Email', '<p>asdasdasdad</p>', '2024-08-21 12:27:08', '2024-08-21 12:27:08'),
(39, 'Mahmoud Ibrahim', 'tnt.store0133@gmail.com', 'Email', '<p>asdasdasdad</p>', '2024-08-21 12:28:07', '2024-08-21 12:28:07'),
(40, 'Mahmoud Ibrahim', 'tnt.store0133@gmail.com', 'Email', '<p>asdasdasdad</p>', '2024-08-21 12:28:42', '2024-08-21 12:28:42'),
(41, 'Mahmoud Ibrahim', 'tnt.store0133@gmail.com', 'Email', '<p>asdasdasdad</p>', '2024-08-21 12:29:11', '2024-08-21 12:29:11'),
(42, 'Mahmoud Ibrahim', 'tnt.store0133@gmail.com', 'Email', '<p>asdasdasdad</p>', '2024-08-21 12:30:02', '2024-08-21 12:30:02'),
(43, 'Mahmoud Ibrahim', 'tnt.store0133@gmail.com', 'Email', '<p>asdasdasdad</p>', '2024-08-21 12:30:14', '2024-08-21 12:30:14'),
(44, 'Mahmoud Ibrahim', 'tnt.store013322@gmail.com', 'Email_HEHE', '<p>SASASASA</p>', '2024-08-21 12:30:45', '2024-08-21 12:30:45'),
(45, 'TNT Store', 'SUpra@gmail.com', 'HEHEHE123455', '<p><span style=\"background-color:#1abc9c\">asdasdad</span></p>', '2024-08-21 12:35:26', '2024-08-21 12:35:26'),
(46, 'TNT Store', 'SUpra@gmail.com', 'HEHEHE123455', '<p><span style=\"background-color:#1abc9c\">asdasdad</span></p>', '2024-08-21 12:35:36', '2024-08-21 12:35:36'),
(47, 'TNT Store', 'SUpra@gmail.com', 'HEHEHE123455', '<p><span style=\"background-color:#1abc9c\">asdasdad</span></p>', '2024-08-21 12:37:02', '2024-08-21 12:37:02'),
(48, 'sushi123', 'jfijcc1242@gmail.com', 'GAGAGA', '<p>asdasdasd</p>', '2024-08-21 12:37:44', '2024-08-21 12:37:44'),
(49, 'sushi123', 'jfijcc1242@gmail.com', 'GAGAGA', '<p>asdasdasd</p>', '2024-08-21 12:40:02', '2024-08-21 12:40:02'),
(50, 'Ahmed Gamal', 'Ahmed0G@gmail.com', 'Task Submission Confirmation', '<p><span style=\"color:#e74c3c\">Hey Bro, remember to submit ur task in time !</span></p>', '2024-08-21 12:44:27', '2024-08-21 12:44:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `questions` varchar(255) DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `order` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `questions`, `answer`, `order`, `created_at`, `updated_at`) VALUES
(10, '{\"en\":\"who are you?\",\"ar\":\"كييف حالك\"}', '{\"en\":\"dddddddddddd\",\"ar\":\"الحمد الله\"}', '9', '2024-07-05 16:34:24', '2024-07-05 16:34:24'),
(11, '{\"en\":\"who are you?\",\"ar\":null}', '{\"en\":\"qqqq\",\"ar\":null}', '2', '2024-07-25 05:32:57', '2024-07-25 05:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `gallerys`
--

CREATE TABLE `gallerys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `images` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `files` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `embed` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallerys`
--

INSERT INTO `gallerys` (`id`, `title`, `images`, `files`, `embed`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'مشروع دعم النساء المعنفات بالقاهرة ونجع حمادي', NULL, NULL, '', 1, '2024-01-22 22:51:05', '2024-02-25 14:40:18'),
(22, 'الفتيات المعرضين للخطر', NULL, NULL, '', 2, '2024-02-25 14:56:47', '2024-02-25 14:56:47'),
(23, 'fd sdf sdf', 'gallery/OVQhqmOJK8COMgQdjUx3lIayhmlEMn6c4VTvKkgx.jpg', '[\"gallery\\/cK0bx5V5JuvBSlukB9ekhPqTeJcmUvXYpgm8n4SJ.jpg\",\"gallery\\/J7FOzCM6UroXcXBils0nNULlKH7YeZl3vePoSLH0.jpg\",\"gallery\\/gGKaZgjfzevLuFBt8ae74LwVJPEzjhux6tuFKsOZ.jpg\",\"gallery\\/EHOImvgDQIez37MW0hEDPzH9GDWip08JvHJDBV6M.jpg\",\"gallery\\/QZYU1oimiaHRtctlG49PSCPv3uy1xPD9AP7KAVBl.jpg\",\"gallery\\/U4tVHflkYP4EOqG9dYQT4Cv2FwGkQeZs5NEQLr8G.jpg\",\"gallery\\/EIiEIBIJrrhJuyVGCkYNRZnf849LMPboA4YDAtfG.jpg\",\"gallery\\/1ZzsXi4EeWVhRybE4rcooAlnfhSXrknreJE4Jw3g.jpg\",\"gallery\\/WnYW4By4dVuchu5mPRSwkrilnNjsgZTar4gxZfuc.jpg\",\"gallery\\/mJrhv6FDtwmgNSllWZwXWyUqlmn0XYxzDVKlyF2i.jpg\",\"gallery\\/R1mJcwHJ6Mt0yROiID7dV7zGt44H1DXXolLqCEWn.jpg\",\"gallery\\/AaBETWZYPBwtpRWpZgCVjgfCGhI1W7U8EjAceeiF.jpg\"]', '', 1, '2024-02-29 11:41:00', '2024-02-29 11:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(3, '{\"en\":\"pdfs\",\"ar\":\"ملفات\"}', 1, '2024-07-06 07:11:13', '2024-07-06 07:11:13'),
(4, '{\"en\":\"images\",\"ar\":\"صور\"}', 1, '2024-07-06 07:14:05', '2024-07-06 07:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `header_settings`
--

CREATE TABLE `header_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `header_settings`
--

INSERT INTO `header_settings` (`id`, `menu`, `slug`, `page_id`, `created_at`, `updated_at`) VALUES
(2, 'أجفنــد', 'agfnd', 3, '2024-01-25 13:55:59', '2024-01-27 13:07:40'),
(3, 'جمعية تحسين الصحة', 'gmaay-thsyn-alsh', 2, '2024-01-26 01:59:55', '2024-01-27 13:07:47'),
(4, 'عن المبادرة', 'aan-almbadr', 1, '2024-01-27 01:14:53', '2024-01-27 13:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `joins`
--

CREATE TABLE `joins` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `cv` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `joins`
--

INSERT INTO `joins` (`id`, `name`, `email`, `address`, `phone`, `cv`, `job_title`, `created_at`, `updated_at`) VALUES
(5, 'Mohamed Salama Mousa Mohamed', 'slamtm609@gmail.com', 'المحلة', '01094182099', 'CVs/2IjUUHwxj6NJabzb8wHqnTTAyYvNpzjnbkWOG9yi.pdf', '', '2024-07-02 12:49:13', '2024-07-02 09:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `leaderships`
--

CREATE TABLE `leaderships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `dribble` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaderships`
--

INSERT INTO `leaderships` (`id`, `name`, `position`, `photo`, `facebook`, `bio`, `created_at`, `updated_at`, `twitter`, `linkedin`, `github`, `dribble`) VALUES
(17, 'Mohamed Salama', 'backend', 'leadership/ifjbnDTkK39jFjUVR6nDD3zMGs4TIkcxoiQ5smQ6.jpg', 'https://www.facebook.com/profile.php?id=100018619843475', 'ssssssssssss\r\nsssssssssssss', '2024-07-21 11:11:45', '2024-07-21 11:46:25', 'https://www.facebook.com/profile.php?id=100018619843475', 'https://www.facebook.com/profile.php?id=100018619843475', 'https://www.facebook.com/profile.php?id=100018619843475', 'https://www.facebook.com/profile.php?id=100018619843475');

-- --------------------------------------------------------

--
-- Table structure for table `login_securities`
--

CREATE TABLE `login_securities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `google2fa_enable` tinyint(1) NOT NULL DEFAULT 0,
  `google2fa_secret` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mail_templates`
--

CREATE TABLE `mail_templates` (
  `id` int(10) UNSIGNED NOT NULL,
  `mailable` varchar(255) NOT NULL,
  `subject` text DEFAULT NULL,
  `html_template` longtext NOT NULL,
  `text_template` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mail_templates`
--

INSERT INTO `mail_templates` (`id`, `mailable`, `subject`, `html_template`, `text_template`, `created_at`, `updated_at`) VALUES
(1, 'App\\Mail\\TestMail', 'Mail send for testing purpose', '<p><strong>This Mail For Testing</strong></p>\n            <p><strong>Thanks</strong></p>', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(2, 'App\\Mail\\Thanksmail', 'New survey Submited - {{ title }}', '<div class=\"section-body\">\n            <div class=\"mx-0 row\">\n            <div class=\"mx-auto col-6\">\n            <div class=\"card\">\n            <div class=\"card-header\">\n            <h4 class=\"text-center w-100\">{{ title }}</h4>\n            </div>\n            <div class=\"card-body\">\n            <div class=\"text-center\">\n            <img src=\"{{image}}\" id=\"app-dark-logo\" class=\"my-5 text-center img img-responsive w-30 justify-content-center\"/>\n            </div>\n            <h2 class=\"text-center w-100\">{{ thanks_msg }}</h2>\n            </div>\n            </div>\n            </div>\n            </div>\n            </div>', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(3, 'App\\Mail\\BookingThanksmail', 'New booking Submited - {{ title }}', '<div class=\"section-body\">\n            <div class=\"mx-0 row\">\n            <div class=\"mx-auto col-6\">\n            <div class=\"card\">\n            <div class=\"card-header\">\n            <h4 class=\"text-center w-100\">{{ title }}</h4>\n            </div>\n            <div class=\"card-body\">\n            <div class=\"text-center\">\n            <img src=\"{{image}}\" id=\"app-dark-logo\" class=\"my-5 text-center img img-responsive w-30 justify-content-center\"/>\n            </div>\n            <h2 class=\"text-center w-100\">{{ thanks_msg }}</h2>\n            <h3 class=\"text-center w-100\">Click to view your booking details: <a target=\"_blank\" href=\"{{ link }}\">Click Here</a></h3>\n            </div>\n            </div>\n            </div>\n            </div>\n            </div>', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(4, 'App\\Mail\\PasswordReset', 'Reset Password Notification', '<p><strong>Hello!</strong></p><p>You are receiving this email because we received a password reset request for your account. To proceed with the password reset please click on the link below:</p><p><a href=\"{{url}}\">Reset Password</a></p><p>This password reset link will expire in 60 minutes.&nbsp;<br>If you did not request a password reset, no further action is required.</p>', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(5, 'App\\Mail\\RegisterMail', 'Register Mail.', '<p><strong>Hi {{name}}</strong></p>\n            <p><strong>Email : {{email}}</strong></p>\n            <p><strong>Thanks for registration, your account is active.</strong></p>', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(6, 'App\\Mail\\ConatctMail', 'New Enquiry Details.', '<p><strong>Name : {{name}}</strong></p>\n\n            <p><strong>Email : </strong><strong>{{email}}</strong></p>\n\n            <p><strong>Contact No : {{ contact_no }}&nbsp;</strong></p>\n\n            <p><strong>Message :&nbsp;</strong><strong>{{ message }}</strong></p>', NULL, '2024-01-22 00:14:06', '2024-01-22 00:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `meeting_polls`
--

CREATE TABLE `meeting_polls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `vote` datetime DEFAULT NULL,
  `poll_id` bigint(20) NOT NULL,
  `location` varchar(255) NOT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_settings`
--

CREATE TABLE `menu_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(225) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `sort` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_settings`
--

INSERT INTO `menu_settings` (`id`, `type`, `title`, `slug`, `parent_id`, `page_id`, `sort`, `created_at`, `updated_at`) VALUES
(21, 'system', 'News', '/blog', 0, NULL, 1, '2024-02-03 00:58:27', '2024-04-22 11:11:54'),
(30, 'link', 'Contact Us', '/contact/', 0, NULL, -1, '2024-03-01 20:42:20', '2024-04-22 11:12:06'),
(32, 'link', 'projects', '/projects', 0, NULL, 0, '2024-04-21 11:20:23', '2024-04-21 11:20:23'),
(35, 'link', 'Join us', '/join/', 0, NULL, 0, '2024-04-22 11:10:31', '2024-04-23 20:17:12'),
(36, 'link', 'FAQ', '/faqs', 0, NULL, 0, '2024-04-22 11:10:31', '2024-04-22 11:10:31'),
(38, 'link', 'Testimonials', '/testimonials', 0, NULL, 0, '2024-07-03 09:42:37', '2024-07-03 09:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_24_000000_create_settings_table', 1),
(4, '2018_10_10_000000_create_mail_templates_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_09_22_192348_create_messages_table', 1),
(7, '2019_10_16_211433_create_favorites_table', 1),
(8, '2019_10_18_223259_add_avatar_to_users', 1),
(9, '2019_10_20_211056_add_extra_fields_to_users', 1),
(10, '2019_10_20_211056_add_messenger_color_to_users', 1),
(11, '2019_10_22_000539_add_dark_mode_to_users', 1),
(12, '2019_10_25_214038_add_active_status_to_users', 1),
(13, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2020_08_22_121757_create_forms_table', 1),
(15, '2020_08_22_121758_create_form_values_table', 1),
(16, '2021_03_05_112733_create_modules_table', 1),
(17, '2021_03_10_032138_add_coloumn_module_table', 1),
(18, '2021_06_16_083454_create_login_securities_table', 1),
(19, '2021_06_16_115243_create_permission_tables', 1),
(20, '2021_08_10_060033_create_user_form_table', 1),
(21, '2021_08_25_050952_add_lang_field_in_users_table', 1),
(22, '2021_08_8_032138_add_coloumn_form_table', 1),
(23, '2021_09_21_060524_add_client_msg__to_forms__table', 1),
(24, '2021_10_14_085757_amount_to_forms_table', 1),
(25, '2021_10_14_085944_amount_to_form_values_table', 1),
(26, '2021_10_19_041655_add_payment_status_to_forms_table', 1),
(27, '2022_02_07_070446_add_payment_to_forms_table', 1),
(28, '2022_02_07_114611_add_payment_type_to_form_values_table', 1),
(29, '2022_02_21_032724_create_social_logins_table', 1),
(30, '2022_05_19_043539_social_type', 1),
(31, '2022_08_26_120030_add_status_to_form_values_table', 1),
(32, '2022_09_14_044629_create_polls_table', 1),
(33, '2022_09_23_065225_create_multiple_choices_table', 1),
(34, '2022_09_23_065251_create_meeting_polls_table', 1),
(35, '2022_09_23_065324_create_image_polls_table', 1),
(36, '2022_09_29_055159_add_forms_cc', 1),
(37, '2022_10_04_063224_create_comments_table', 1),
(38, '2022_10_04_063242_create_comments_replies_table', 1),
(39, '2022_10_13_102234_create_form_comments_controllers_table', 1),
(40, '2022_10_13_121737_create_form_comments_replies_table', 1),
(41, '2022_10_13_121754_create_form_comments_table', 1),
(42, '2022_10_14_051557_allow_section', 1),
(43, '2022_11_29_065355_create_dashboard_widgets_table', 1),
(44, '2023_01_17_072809_create_faqs_table', 1),
(45, '2023_01_17_103524_add_assign_type_to_forms_table', 1),
(46, '2023_02_06_115445_create_sms_templates_table', 1),
(47, '2023_02_06_115716_create_user_codes_table', 1),
(48, '2023_02_06_120602_add_country_code_to_users_table', 1),
(49, '2023_02_24_054509_create_assign_forms_users_table', 1),
(50, '2023_02_24_061824_create_assign_forms_roles_table', 1),
(51, '2023_03_20_065028_create_document_genrators_table', 1),
(52, '2023_03_20_095301_create_document_menus_table', 1),
(53, '2023_05_13_041437_create_events_table', 1),
(54, '2023_05_17_113006_create_testimonials_table', 1),
(55, '2023_05_18_104654_add_designation_testimonials_table', 1),
(56, '2023_05_22_131647_create_notifications_settings_table', 1),
(57, '2023_05_23_092628_create_notifications_table', 1),
(58, '2023_06_09_054119_add_set_end_date_to_forms_table', 1),
(59, '2023_06_22_084811_add_created_by_users_table', 1),
(60, '2023_07_17_061316_create_form_integration_settings_table', 1),
(61, '2023_07_27_050119_add_theme_to_forms_table', 1),
(62, '2023_08_09_065314_add_dark_to_users_table', 1),
(63, '2023_08_10_100105_create_form_templates_table', 1),
(64, '2023_08_11_100159_create_bookings_table', 1),
(65, '2023_08_14_090154_create_time_wise_bookings_table', 1),
(66, '2023_08_14_104801_create_seat_wise_bookings_table', 1),
(67, '2023_08_17_093556_create_booking_values_table', 1),
(68, '2023_08_24_035759_create_blog_categories_table', 1),
(69, '2023_08_24_062508_create_blogs_table', 1),
(70, '2023_08_24_110040_add_description_to_forms_table', 1),
(71, '2023_08_29_040231_add_created_by_to_blogs_table', 1),
(72, '2023_09_01_063412_create_footer_settings_table', 1),
(73, '2023_09_01_064016_create_page_settings_table', 1),
(74, '2023_09_04_044855_create_header_settings_table', 1),
(75, '2023_10_05_061229_create_annoucements_table', 1),
(76, '2023_10_05_113959_create_form_rules_table', 1),
(77, '2023_10_30_053352_add_conditional_rule_forms_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 6);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `permission` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `permission`, `created_at`, `updated_at`) VALUES
(2, 'user', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(3, 'role', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(13, 'blog', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(14, 'category', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(16, 'mailtemplate', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(17, 'sms-template', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(18, 'language', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(19, 'setting', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(20, 'chat', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(21, 'landing-page', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(22, 'testimonial', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(23, 'faqs', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(24, 'page-setting', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(25, 'gallery', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(26, 'project', NULL, '2024-01-22 00:14:05', '2024-01-22 00:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `multiple_choices`
--

CREATE TABLE `multiple_choices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vote` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `poll_id` bigint(20) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications_settings`
--

CREATE TABLE `notifications_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `email_notification` varchar(255) NOT NULL DEFAULT '0' COMMENT '1-On 0-Off',
  `sms_notification` varchar(255) NOT NULL DEFAULT '0' COMMENT '1-On 0-Off',
  `notify` varchar(255) NOT NULL DEFAULT '0' COMMENT '1-On 0-Off',
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications_settings`
--

INSERT INTO `notifications_settings` (`id`, `title`, `email_notification`, `sms_notification`, `notify`, `status`, `created_at`, `updated_at`) VALUES
(1, 'testing purpose', '1', '0', '1', 2, '2024-01-22 00:14:06', '2024-01-22 00:14:06'),
(2, 'new survey details', '2', '2', '1', 2, '2024-01-22 00:14:06', '2024-01-22 00:14:06'),
(3, 'From Create', '2', '2', '0', 1, '2024-01-22 00:14:06', '2024-01-22 00:14:06'),
(4, 'New Enquiry Details', '1', '2', '1', 1, '2024-01-22 00:14:06', '2024-01-22 00:14:06'),
(5, 'Register mail', '1', '2', '1', 1, '2024-01-22 00:14:06', '2024-01-22 00:14:06'),
(6, 'new booking survey details', '1', '2', '1', 1, '2024-01-22 00:14:06', '2024-01-22 00:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `page_settings`
--

CREATE TABLE `page_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `body` longtext DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `url_type` varchar(255) DEFAULT NULL,
  `page_url` varchar(255) DEFAULT NULL,
  `friendly_url` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `components` longtext CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `styles` longtext CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `html` longtext DEFAULT NULL,
  `css` longtext CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_settings`
--

INSERT INTO `page_settings` (`id`, `title`, `slug`, `body`, `type`, `url_type`, `page_url`, `friendly_url`, `description`, `components`, `styles`, `html`, `css`, `created_at`, `updated_at`) VALUES
(14, '{\"en\":\"English\",\"ar\":\"العربية\"}', 'english', '{\"en\":\"English body\",\"ar\":\"المحتوي\"}', NULL, NULL, NULL, NULL, '{\"en\":\"English des\",\"ar\":\"العربية وصف\"}', NULL, NULL, NULL, NULL, '2024-07-05 15:49:54', '2024-07-05 15:49:54'),
(15, '{\"en\":\"project 23333\",\"ar\":\"مشروع 2\"}', 'project-23333', '{\"en\":\"<p>project 2 detail</p>\",\"ar\":\"<h2 style=\\\"font-style:italic;\\\"><strong>محتوي مشروع</strong> 2</h2>\"}', NULL, NULL, NULL, NULL, '{\"en\":\"project 2 description\",\"ar\":\"وصف مشروع 2\"}', NULL, NULL, NULL, NULL, '2024-07-06 12:21:20', '2024-07-06 14:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'manage-dashboardwidget', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(2, 'create-dashboardwidget', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(3, 'edit-dashboardwidget', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(4, 'delete-dashboardwidget', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(5, 'export-dashboardwidget', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(6, 'manage-user', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(7, 'create-user', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(8, 'edit-user', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(9, 'delete-user', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(10, 'export-user', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(11, 'impersonate-user', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(12, 'phoneverified-user', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(13, 'emailverified-user', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(14, 'manage-role', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(15, 'create-role', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(16, 'edit-role', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(17, 'delete-role', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(18, 'export-role', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(19, 'manage-form-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(20, 'create-form-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(21, 'edit-form-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(22, 'delete-form-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(23, 'design-form-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(24, 'export-form-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(25, 'manage-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(26, 'create-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(27, 'edit-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(28, 'delete-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(29, 'design-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(30, 'fill-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(31, 'duplicate-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(32, 'theme-setting-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(33, 'integration-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(34, 'payment-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(35, 'export-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(36, 'dashboard-qrcode-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(37, 'manage-form-rule', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(38, 'create-form-rule', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(39, 'edit-form-rule', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(40, 'delete-form-rule', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(41, 'manage-submitted-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(42, 'edit-submitted-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(43, 'delete-submitted-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(44, 'download-submitted-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(45, 'export-submitted-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(46, 'show-submitted-form', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(47, 'manage-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(48, 'create-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(49, 'edit-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(50, 'delete-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(51, 'design-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(52, 'export-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(53, 'payment-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(54, 'fill-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(55, 'manage-booking-calendar', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(56, 'show-submitted-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(57, 'manage-submitted-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(58, 'edit-submitted-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(59, 'delete-submitted-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(60, 'export-submitted-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(61, 'copyurl-submitted-booking', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(62, 'manage-poll', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(63, 'create-poll', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(64, 'edit-poll', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(65, 'delete-poll', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(66, 'vote-poll', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(67, 'result-poll', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(68, 'export-poll', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(69, 'manage-document', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(70, 'create-document', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(71, 'edit-document', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(72, 'delete-document', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(73, 'document-generate-document', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(74, 'export-document', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(75, 'manage-blog', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(76, 'create-blog', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(77, 'edit-blog', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(78, 'delete-blog', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(79, 'show-blog', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(80, 'export-blog', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(81, 'manage-category', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(82, 'create-category', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(83, 'edit-category', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(84, 'delete-category', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(85, 'show-category', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(86, 'export-category', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(87, 'manage-event', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(88, 'create-event', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(89, 'edit-event', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(90, 'delete-event', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(91, 'manage-mailtemplate', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(92, 'edit-mailtemplate', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(93, 'export-mailtemplate', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(94, 'manage-sms-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(95, 'edit-sms-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(96, 'export-sms-template', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(97, 'create-language', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(98, 'manage-language', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(99, 'delete-language', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(100, 'manage-setting', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(101, 'manage-chat', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(102, 'manage-landing-page', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(103, 'manage-testimonial', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(104, 'create-testimonial', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(105, 'edit-testimonial', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(106, 'delete-testimonial', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(107, 'export-testimonial', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(108, 'manage-faqs', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(109, 'create-faqs', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(110, 'edit-faqs', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(111, 'delete-faqs', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(112, 'export-faqs', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(113, 'manage-page-setting', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(114, 'create-page-setting', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(115, 'edit-page-setting', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(116, 'delete-page-setting', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(117, 'export-page-setting', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(118, 'manage-gallery', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(119, 'create-gallery', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(120, 'edit-gallery', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(121, 'delete-gallery', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(122, 'export-gallery', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(123, 'manage-project', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(124, 'create-project', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(125, 'edit-project', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(126, 'delete-project', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(127, 'show-project', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(128, 'export-project', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `progress_to_leadership`
--

CREATE TABLE `progress_to_leadership` (
  `id` bigint(20) NOT NULL,
  `category` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `leadership_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `progress_to_leadership`
--

INSERT INTO `progress_to_leadership` (`id`, `category`, `number`, `leadership_id`, `created_at`, `updated_at`) VALUES
(3, 'CREATIVE DESIGNS', 100, 17, '2024-07-21 11:11:45', '2024-07-21 11:11:45'),
(4, 'MOTION GRAPHIC5', 40, 17, '2024-07-21 11:11:45', '2024-07-21 11:11:45'),
(6, 'Award Achivement', 104, 17, '2024-07-23 06:51:30', '2024-07-23 06:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `client` varchar(255) DEFAULT NULL,
  `builder` varchar(225) DEFAULT NULL,
  `project_date` text DEFAULT NULL,
  `project_timeframe` text DEFAULT NULL,
  `project_location` text DEFAULT NULL,
  `project_category` bigint(20) UNSIGNED DEFAULT 0,
  `project_status` tinyint(4) DEFAULT 0,
  `body` text DEFAULT NULL,
  `embed` text DEFAULT NULL,
  `components` longtext DEFAULT NULL,
  `styles` longtext DEFAULT NULL,
  `html` longtext DEFAULT NULL,
  `css` longtext DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `created_by` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `cover`, `description`, `client`, `builder`, `project_date`, `project_timeframe`, `project_location`, `project_category`, `project_status`, `body`, `embed`, `components`, `styles`, `html`, `css`, `slug`, `created_by`, `created_at`, `updated_at`) VALUES
(43, 'hello', 'projects/edb71LeSGcbXLpbLazudEzIuNWdO72osQewt5AiK.jpg', 'sddddddd', 'salama', NULL, 'يييييييييييي', 'd', 'd', 7, NULL, '<p>s</p>', 'd', NULL, NULL, NULL, NULL, 'hello', '1', '2024-07-23 08:32:08', '2024-07-23 08:33:01'),
(44, 'hello4', 'projects/qwbTfGJLV3gAWvwTdWDPZigqFtfhFLauvtvN6gf3.jpg', 'sssssssssss', 'salama', NULL, 'يييييييييييي', 'd', 'd', 7, NULL, NULL, '', NULL, NULL, NULL, NULL, 'hello4', '1', '2024-07-23 08:45:19', '2024-07-23 08:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `projects_images`
--

CREATE TABLE `projects_images` (
  `id` bigint(20) NOT NULL,
  `img` varchar(500) NOT NULL,
  `project_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects_images`
--

INSERT INTO `projects_images` (`id`, `img`, `project_id`) VALUES
(1, 'projects/images/8NuRnWJm2Z8JKV5evDfZJixJKV9n57c1Ga97XpJ2.png', 1),
(2, 'projects/images/L9hAnT8dT7gRpg6fxhTCqPZTd0qO17e8YUlanggK.png', 1),
(3, 'projects/images/H5OxQoGwt0jEyyNKdfc49l0BELJrTFJKUiazhYzI.png', 1),
(4, 'projects/images/EFNF3q53mspWWRRWpQKuzDsBbcDCTRnNjJ5HncL2.png', 1),
(5, 'projects/images/460Ht178qhOd6JJ2swdyqGhhrU8mAomFFXfniSpM.png', 1),
(6, 'projects/images/iNuXfXaW70ekl1nYkNTzyGEbarPt7tKoefa0grXy.png', 1),
(7, 'projects/images/wooiXJZKXP4qhjzFqKTP2L295gz9bNBO5O5cSbBb.png', 1),
(8, 'projects/images/ovJren0Ha3IpeblfwZmEE5JFBEwJZezX8Uck9ByO.png', 1),
(9, 'projects/images/u2g6C9VNdi3RqCrGIQJJ59LHWgn5xZ70eqxkbnXq.jpg', 2),
(10, 'projects/images/PMAmnsdUi5BTFlRLTnLS7NXlqYpDN1jmRprSeRSL.jpg', 2),
(11, 'projects/images/zas7i2eGnDD6SprW4XE0tXkQQB1Uo0kcsrKmGYyn.jpg', 2),
(12, 'projects/images/A70lnIkD54dfuBZY1ymVGZUFdD6XNm05LSpbNOFR.jpg', 2),
(13, 'projects/images/Kw84YYBoUC4QjZ9j0uY6E5Hqva0STwruVsYGkOgB.jpg', 2),
(14, 'projects/images/ZJRFr3qh3DbBJtIQ98vcIavSCY9Ybgw8EvtcysOP.jpg', 2),
(15, 'projects/images/k2h8rxAJq9SCYpI40JwKKrGBLyKoHSIZ4X6pob9o.jpg', 2),
(16, 'projects/images/66O547QN8UXHQTGxtJeZYUgo2ulM8tE9NSyRTSgB.jpg', 2),
(17, 'projects/images/p8M3LEi8JxqZVdNTlaVNoiDCagcUwRkElRMeY2PP.jpg', 2),
(18, 'projects/images/Rc4jlCCjR8NTFQN7tUon5DGthoZbuM0LehfMdOih.jpg', 2),
(19, 'projects/images/4ADidKnhpKiOpSMvkSlbZrsb0H2TpE36FygkO0IY.jpg', 3),
(20, 'projects/images/v0AQbtJdx1wtlN1Mn52hza1ARNVBl6aDfL5wNQ3C.jpg', 3),
(21, 'projects/images/BOWIi7Y68vCH0vZfd2Cf25r4rP9squXR2MijsivB.jpg', 3),
(22, 'projects/images/8eu1mpsaDltw4oT4kF8ABYBumDdMjH2AnZarsONM.jpg', 3),
(23, 'projects/images/Mt6sLYWWieJei3FKwLlB5yxpNfR6xkwU5jpzx8tz.jpg', 3),
(24, 'projects/images/sWDZSIUnoGCJxFrKswBKo2T4kpa1KHYRXNyeXTvT.jpg', 4),
(25, 'projects/images/hnXsQceS23y3pW48Mnv3Y89VgRhEBppDUdfBPZeQ.jpg', 4),
(26, 'projects/images/K8L8yriubvBnzhAnokkEkI2oQUfpw6u9QefMidHz.jpg', 4),
(27, 'projects/images/Tct4jZ1yi90TynaYN5THIbxRQplER2PSCNSPS2Uq.jpg', 4),
(28, 'projects/images/o5OOFlqbEaoc1YR9BtC3MwdzNZb1wJnbsIyGamYA.jpg', 4),
(29, 'projects/images/qxJRzIxmzoxNhrydPNoecFwY129AG19gJhxQqP5o.jpg', 4),
(30, 'projects/images/KyqNuAfi8h1t0PrrmO0m0s8r3nNpoNvl7jpER69o.jpg', 4),
(31, 'projects/images/OTwpdXWODJQ9trErXMvH2T6U2IcVA7xNYGKm6agb.jpg', 4),
(40, 'projects/images/L0kHGu4wNLPph3L1pl4TBa0KKmdyhgll9MYrH1Jl.png', 5),
(41, 'projects/images/2OukVIwYHZwIQRloGOPzQY1joocuW4tRyAhBMb3s.png', 5),
(42, 'projects/images/0UMFFEh8SzRJuFYmVABxZszVlK4RHpNmdeAKupm4.png', 5),
(43, 'projects/images/tWwwrIvFfaxEuNxKbeltEvsCYCHaJX9bMGkJJ5dg.png', 5),
(44, 'projects/images/QEAEnEas4Av9PypMsWgreL3YDU2yXgmjgJhjgqqe.png', 5),
(45, 'projects/images/vBGlDBc1vNi55O7UkmUo84hQhdN6bje93PJF0fPF.png', 5),
(46, 'projects/images/ichkWhzdScOYL2WoI1Z0NNp2KiN7dZGxDJSZymkl.png', 5),
(47, 'projects/images/tLpOFp3Pg5NxxQiLl22mEkfwUiY2ReetRZfD3kng.jpg', 6),
(48, 'projects/images/B0wdDtOnA1MCt8TivNO3UrV5WQx7ZEn0byuTRcgS.jpg', 6),
(49, 'projects/images/4Y42Oz1oivgTHJI9Os8PK8KUsnSnkzHZAOT3f7Ck.jpg', 6),
(50, 'projects/images/Cqwlejh3gBuPw3j9ZmYvYSQuU0tc41sTZHHf3UM1.jpg', 6),
(51, 'projects/images/YXuBpHGpWL8T3ozsYTXOxHdWqMl2ojLNSWrHH3dB.jpg', 6),
(52, 'projects/images/cSefwNxYoxdP5rR66NjRG1sOT0m5XsAtECZDGIgF.jpg', 6),
(53, 'projects/images/Me5y3uxRoaJRwjlIuqBe8UYBtn1neGgKS5kSGB56.jpg', 7),
(54, 'projects/images/bXjKMlCdYEQhVKouQtKgg8rfETGLynQ1jh8Li1lF.jpg', 7),
(55, 'projects/images/dQRlyYNgfRF5FfhHlD3hTIo5szEidFzmexzhDcJH.jpg', 7),
(56, 'projects/images/jtR49dA7aD86UO8Uh93rJZyVtCYtv3XEeYS9XFEn.jpg', 7),
(57, 'projects/images/R7CY5RlIVy9PaB94NqYBJwsWiSEYorLlcw69F2gR.jpg', 7),
(58, 'projects/images/Lnj3gRFLqdYBAz6ezn2FME2PhdQwW4lwbGZYGabR.jpg', 7),
(59, 'projects/images/UbUahDTLuta1SPNxvPzvrL5KRzfIuvahwle5QtBm.jpg', 7),
(60, 'projects/images/jUavplCiUa2vkCxkxgLrgIezg5bGe0KLMdk9wP2S.jpg', 7),
(61, 'projects/images/whBBYc4drIKLMnFfOPH0LzQWDKFM81tu2tY1Ebre.jpg', 8),
(62, 'projects/images/SuwyLdz6LSfL5s78jiLsQ2emERlbm75p4SkYKgns.jpg', 8),
(63, 'projects/images/ycXVxAit7VtTOPYNNDDE907kl8EiKWtTi9iBHTz8.jpg', 8),
(64, 'projects/images/P8jNnqIbtDUfFb6qFEDzVXvTbfMNWPgeBZoFuDt8.jpg', 8),
(65, 'projects/images/CYpgc8Q7ioEHaXVunI2GrgPcmgQ5zetwstXVSJoo.png', 8),
(66, 'projects/images/0CJvvajL80QxxELa06uSmgYrvCttLdKopwOkg1w7.png', 8),
(67, 'projects/images/OqMPtPYV7aOOvmhnXH6UaTXzN2mcBYlgh1JspLga.png', 8),
(68, 'projects/images/6FdXxlPsyaLmN5MFi8I5TzIM8IL2sgPrr4v4TnPP.jpg', 9),
(69, 'projects/images/6jLfBX1LkVSwwgZ4YIeLvvmfU0mKs4X5mg6b3lab.jpg', 9),
(70, 'projects/images/yZjwTEDCtcn0CWGjglDl25rOFa2DXGpZohSybJ2b.jpg', 9),
(71, 'projects/images/J3eYO2OSwHEGwQoYdqXdDcBbFLQAHcaDpaOq8tG5.jpg', 9),
(72, 'projects/images/jF87KvtCicUCD4MtDFHny7zsndPpAgq9rRhx625u.jpg', 9),
(73, 'projects/images/IVFoYTDrP7zBua4fH2O3Y7QPcfQet5bHAQixVyhJ.jpg', 9),
(74, 'projects/images/pTsuozr73mmvhdCnQCCSLdarfqHL4fSaIjvvm8Zr.jpg', 9),
(75, 'projects/images/JpiDU13pyeviCTugjo12L6YEzgbhzVienuojKcJy.jpg', 10),
(76, 'projects/images/o5G5P7rYX5fuuwxuQVGTkZ7gv7nH6EuZUKnHMOdS.jpg', 10),
(77, 'projects/images/gZ4EpfNiaOpAyI4DZPdQ7LvNMf8ZidOSYLRS9uhf.jpg', 10),
(78, 'projects/images/ci0hBqjquo79UVxWhFqNAM4EHk84dViXOVskAnsP.jpg', 10),
(79, 'projects/images/o72uDxQefFWPr2PP4eVTqL07loFJ0H2SpGRBOLiW.jpg', 10),
(80, 'projects/images/5iZtU1NljD5vNYqlQRrqnjVuAxHajwYJPJryLrcb.jpg', 10),
(81, 'projects/images/WBp4hDVKBjfNCd1J1ulsJHzZexsh0JZ14SSw6gwn.jpg', 29),
(82, 'projects/images/ks537Y0iP5UZ7WjVOXauyDpGnk9ygRDC2WW9Pj6W.jpg', 29),
(83, 'projects/images/pqOwMzd47cDs0WkrYTcPCfwvos0xZE72VLYNMHqw.jpg', 29),
(84, 'projects/images/SAjqGILe90JzQmYJjvFIBU2tCpYH0PNRBSk51TUe.jpg', 29),
(85, 'projects/images/XZs8wNuYEiduVTaoulCw9yOXRNH2muY0UvtbRpnc.jpg', 29),
(86, 'projects/images/oVy7yXAb1tK7mQrL7QWeYyaIalvLQ3ph2Rc4XAnx.jpg', 29),
(87, 'projects/images/HAdVlA7NkOI8EIl0cBO68GTSywaQPVNMNMCowfK5.jpg', 29),
(88, 'projects/images/110nvTDcQAeqI509vdU2jn32omIU1TE3xxieAc7v.jpg', 29),
(89, 'projects/images/ys9Gw0wsddLxaj4fKxK7JL3qfHQsBWqn0Cqc9Xpb.jpg', 30),
(90, 'projects/images/WX9rk0M8Bpj25c1UVOod6PXkduYt4E6VPS9f8KZq.jpg', 30),
(91, 'projects/images/uKKAxlhJPUm6gwC0suUPK0JrEXcNOxAAKdxqfKWE.jpg', 30),
(92, 'projects/images/MZDQBzG5kqzdDNkw5E65M1tk3O3C5MXxPz4aIQiZ.jpg', 30),
(93, 'projects/images/wwL97nSF9Sv2FchNhjG7OalpAdPoVi5uT1AqXhaK.jpg', 30),
(94, 'projects/images/0lM3dH2gWrqjfvrs0gqwVaOehYEXYmn9QsXFJxcT.jpg', 30),
(95, 'projects/images/RPPOELqhX8RtH0DpNJhxAVl5QCZ89NrOLKDWnlbW.jpg', 30),
(96, 'projects/images/WeoEJ1QX2dCOD2V05EcIZTW8YmfCVjXez26VNEa8.jpg', 30),
(97, 'projects/images/GHzNhBoDXKu3p69r2e7bSMCmO2JLLRrvDlTybbGk.jpg', 30),
(98, 'projects/images/VpC19mEe3JtKgrFtSV1NQZLaO9R1oV5N2ADwspe5.jpg', 30),
(99, 'projects/images/I3NrXCPGGyBzZBNuB3zpBisckJnRe1uWSzHqdIc2.jpg', 30),
(100, 'projects/images/DvmS6iF43C6FmOOxRrzKjLUu8e7OVOyXN8zKF8jm.jpg', 31),
(101, 'projects/images/ElTNxIT33XAl0oh1AxInH8JmI5TJhxbniFlkXc6m.jpg', 31),
(102, 'projects/images/hCvi5T5Vprw7J8XFW1JW4pbDtwuUnVJm7GjJMnM9.jpg', 31),
(103, 'projects/images/EvXdBywiQE68ChLDWmOAcPECbBwesqSdAo9tuwHN.jpg', 31),
(104, 'projects/images/fV1gQZ4xyuKBKKydifQTeEJRqsZg5o6BlID5isCp.png', 31),
(105, 'projects/images/ThH1jE6luXmrhonD0QCWSfBSSeOYnnv2aXf3Mvta.png', 31),
(106, 'projects/images/mjXml0sIjQcMlbCe4NTRufoefi6NsFo8idQo8LS0.png', 31),
(107, 'projects/images/bMaS4nokjdRGQW1qTy6YSrifeo4KYJPRqdELyM7F.png', 31),
(108, 'projects/images/jnDQr1FV7p2OLZNFmo8IpdpCqpgdtU6Qsv9K6WsA.png', 32),
(109, 'projects/images/Np5zPSKBYDdy6dlmigxEaZvWyYJZX3E5Ra0DniVV.png', 32),
(110, 'projects/images/IyZhAAIeQTbyzrC12DkHaihr8y0LR7ZxIDgCYHYY.png', 32),
(111, 'projects/images/Kc64nhVmpShA0VAHhtx3G6dNIKB28ltRA8DVXeaG.png', 32),
(112, 'projects/images/XBUIGDLhBYYqdk996C77lQKyyZzed2eiuTXWpd4H.png', 32),
(113, 'projects/images/voq5uueS746Q5Bp10ZJMLYsBL9quVASZdEHjxGsI.png', 32),
(114, 'projects/images/VGJPkZY6BfH3W4N3gHvQSljx70bqxzbBiZLQGz1r.png', 32),
(115, 'projects/images/9Px7qWA84xF4y32fxCYBq3MaoZDR4DOQEB0cSoBt.png', 32),
(116, 'projects/images/Mnpqvp4Cmm91jrkmObh2zPNI8TVXu0Cfyh7Ye6aC.png', 32),
(117, 'projects/images/BWkNa0bkHCx5p6FDYI51xmsECz2HI9p9XrgrDMDq.jpg', 33),
(118, 'projects/images/rh6IjoWteQorWbh49YUtSwkhxTWVqfynomGxqyo9.jpg', 33),
(119, 'projects/images/ovyrzcl876LLABPho5SRyDEAnp6gAokcyKVTcT2v.jpg', 33),
(120, 'projects/images/zWErQhBb3wmO6nqWFn2jU20qCTf1mVg45Hd7mjoK.jpg', 33),
(121, 'projects/images/oj2ZdQyzaQDJCAj5xmDFirgJiNg6a1Z0RM53X9C7.jpg', 33),
(122, 'projects/images/6zZIQS2PJ6xFdAsLBwbgTtQcgpcEfYf9sA7QIL5W.jpg', 33),
(123, 'projects/images/1tOETz5sK1SRMKWacbc71x6e95g73d1zlFhtYXpl.jpg', 33),
(124, 'projects/images/iiRVZ6RVwZGqD80AeIGthmFAC1Bgho2gNGl7nixf.jpg', 33),
(125, 'projects/images/cfOKw6jHxx0p7Vt5iBQEKXezkxHcTA288DMLgnMH.jpg', 34),
(126, 'projects/images/v0puTk2saOPhZ5eG6s6Qa5tUzB26lFDoOTieWhiE.jpg', 34),
(127, 'projects/images/QbQH0DoBrw4RfNdXpQkWKVJxHqMous6DkXZVCbis.jpg', 34),
(128, 'projects/images/cT6PgKTXrUJcSDtSGa6xlnfdNJK9nLATimxlVCe0.jpg', 34),
(129, 'projects/images/4lyeB9lDjGaxCaSwg0xrIF1H698xNLZiXl3ppSRA.jpg', 34),
(130, 'projects/images/Tp6T0Nnxa7o6uaTOgk650kzrAK8MTLhpqL2YrLAE.jpg', 34),
(131, 'projects/images/Dm2VKBreWq4tReWwUTL08tUhXKrSR19N6cByyvBZ.jpg', 35),
(132, 'projects/images/X741k9AJwYWNv1lGpiMDUMKsnm4sByIGjZd0lgBP.jpg', 35),
(133, 'projects/images/iZ13zujS6BZ4IR0ahZXyLDQeH7Ug9Lx4lnlh70ns.jpg', 35),
(134, 'projects/images/V5UKPgx1F53xVXgCwEUs8kLb777pHvEzdPvvFPFj.jpg', 35),
(135, 'projects/images/tYFqoDcFZNFYRyY529k8KookO37KjjvE6BmIuH8f.jpg', 35),
(136, 'projects/images/oN1CV2yeLiECh7PZos0JVT5zESvZHTm5f0bhNoJi.jpg', 35),
(137, 'projects/images/qurb86XidbxgUEKF6UYMkXnN3qisW70I8FkusUPF.jpg', 36),
(138, 'projects/images/c93Tur4ZL59GWxRv3EHtAnjqx3GZjGqplwUPRUm1.jpg', 36),
(139, 'projects/images/DUn1HgqpTG6T0ucDtv56yOgKLcRta1OgwdVuIcuj.jpg', 36),
(140, 'projects/images/3MZMjmOQtkYXm0yQ5Ue0Ax77rhnoZgx8Dle66Psu.jpg', 36),
(141, 'projects/images/aRg8M4lQe1ALqW5WqWjbQ4CMd1Bjfcubt1gHkrPd.jpg', 36),
(142, 'projects/images/TSXqY9NDRzsFU0nIjcCpl1bIUQpUdwBp77jwDhpp.jpg', 36),
(143, 'projects/images/GrIgn7mAjjCFupQcjzTdq9X5VM68cbaVNctE0xBq.png', 38);

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Photography & Productionn', 1, '2024-07-14 13:19:26', '2024-08-01 08:58:45'),
(6, 'Video Shooting', 1, '2024-07-14 13:20:00', '2024-07-23 06:21:14'),
(7, 'Event Management', 1, '2024-07-14 13:20:13', '2024-07-23 06:21:11'),
(8, 'Interior – Luxury Living', 0, '2024-07-14 13:20:27', '2024-07-23 06:21:22'),
(10, 'ui/ux design', 0, '2024-07-17 09:14:13', '2024-07-23 06:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(2, 'User', 'web', '2024-01-22 00:14:05', '2024-01-22 00:14:05'),
(3, 'Avaweg', 'web', '2024-02-18 16:03:33', '2024-02-18 16:03:33'),
(4, 'sub_user', 'web', '2024-06-23 08:59:59', '2024-06-23 08:59:59');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(6, 1),
(6, 4),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(14, 4),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(75, 1),
(75, 4),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(91, 1),
(92, 1),
(93, 1),
(94, 1),
(95, 1),
(96, 1),
(97, 1),
(98, 1),
(99, 1),
(100, 1),
(100, 4),
(101, 1),
(101, 4),
(102, 1),
(103, 1),
(104, 1),
(105, 1),
(106, 1),
(107, 1),
(108, 1),
(108, 4),
(109, 1),
(110, 1),
(111, 1),
(112, 1),
(113, 1),
(114, 1),
(115, 1),
(116, 1),
(117, 1),
(118, 1),
(119, 1),
(120, 1),
(121, 1),
(122, 1),
(123, 1),
(124, 1),
(125, 1),
(126, 1),
(127, 1),
(128, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `emdlink` text DEFAULT NULL,
  `builder` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `service_category` bigint(20) UNSIGNED DEFAULT 0,
  `service_status` tinyint(4) DEFAULT 0,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `cover`, `emdlink`, `builder`, `short_description`, `description`, `service_category`, `service_status`, `slug`, `created_at`, `updated_at`) VALUES
(14, 'Creating Reels', 'services/i65i214yg6ngi4ikf51wdGBPzGboZUO1BzD1huAG.png', NULL, NULL, 'Web design encompasses many different skills and disciplines in the production of all web.', '<p>as</p>', 3, NULL, 'Creating Reels', '2024-08-03 06:09:18', '2024-08-13 10:34:13'),
(15, 'Creating Websites', 'services/KRuWn7dVKdwWVkrQIuTuOhN5w9zltF3EOBqBwvB2.png', NULL, NULL, 'Web design encompasses many different skills and disciplines in the production of all web.', '<p>ss</p>', 9, NULL, 'Creating Websites', '2024-08-03 06:15:37', '2024-08-13 10:37:28'),
(16, 'Creating Short Films', 'services/ePTal3fYbMbWOwlLuQOH0jDVk7sSfZfXyz1f5iFw.png', NULL, NULL, 'Web design encompasses many different skills and disciplines in the production of all web.', '<p>sd</p>', 4, NULL, 'Creating Short Films', '2024-08-03 06:16:00', '2024-08-13 10:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `cover` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `status`, `cover`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Branding', 1, 'services/eyPwEhAcaGPczlKvpqE5Ac7rijvXAITNVIhwde3D.png', 'Shaping your brand’s unique identity to inspire and connect', '2024-07-19 08:51:01', '2024-08-15 17:14:24'),
(4, 'Video Production', 1, 'services/PmyshDZsOo6vriRsQp1GGizErqJ2mWiXQMdCfRO2.png', 'Capturing your story through compelling visuals', '2024-07-19 09:38:09', '2024-08-15 17:16:24'),
(5, 'Graphic Production', 1, 'services/N34Y6TwkPLkldMEL6cFdkh7HBXOwOevnnEWEnBCF.png', 'Designing visuals that captivate and communicate', '2024-07-19 09:38:24', '2024-08-15 17:19:36'),
(6, 'Content Production', 1, 'services/pZk7ZpaDsjbSWQRzRKgC6Ehg05ldGNysVrp10Yof.png', 'Crafting impactful content that resonates', '2024-07-19 09:38:47', '2024-08-15 17:21:58'),
(7, 'Digital Marketing', 1, 'services/mxdVrTU2QP9guDADrEMV6gk5TGkVMVZTh4IkROyp.png', 'Amplifying your brand’s voice across digital platforms', '2024-07-19 09:38:57', '2024-08-15 17:25:18'),
(8, 'Social Media Management', 1, 'services/7vsONmMpxtjoWiRifSEEitCxFUj3Td3WaktBVILp.png', 'Cultivating connections and driving engagement', '2024-08-13 10:20:50', '2024-08-14 10:38:06'),
(9, 'Web Development', 1, 'services/vRKvbXA8Z0vOT8iCidpQz2SdzViUv2vvlsHO9SHo.png', 'Building digital experiences that leave a mark', '2024-08-13 10:20:58', '2024-08-14 10:41:11'),
(10, 'Organizing Conferences & Events', 1, 'services/mGMcFyKHmukJsIWHiVQyWZMMFvxIzIc82fjb1ane.png', 'Creating unforgettable experiences', '2024-08-13 11:01:24', '2024-08-16 12:34:54'),
(11, 'Training individuals & institutions', 1, 'services/CU3A29dxtmGEPx6AkuWCtG0VdKrjOrepIWA8zF3k.png', 'Empowering teams with actionable skills', '2024-08-13 11:01:30', '2024-08-16 12:37:04'),
(12, 'SEO Services', 1, 'services/L9tTPxfJ2JYeH0npg5FAXRW0f9OuZipWJ13IfsLN.png', 'Elevating your online presence organically', '2024-08-13 11:01:36', '2024-08-16 12:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'app_name', 'DS+'),
(2, 'app_logo', 'app-logo/app-logo.png'),
(3, 'app_small_logo', 'app-logo/app-small-logo.png'),
(4, 'favicon_logo', 'app-logo/app-favicon-logo.png'),
(5, 'default_language', 'en'),
(6, 'color', 'theme-1'),
(7, 'app_dark_logo', 'app-logo/app-dark-logo.png'),
(8, 'storage_type', 'local'),
(9, 'date_format', 'M j, Y'),
(10, 'time_format', 'g:i A'),
(11, 'roles', 'User'),
(12, 'google_calendar_enable', 'off'),
(13, 'captcha_enable', 'off'),
(14, 'transparent_layout', 'off'),
(15, 'dark_mode', NULL),
(16, 'meta_image', '0'),
(17, 'document_theme1', 'document-theme/Stisla.png'),
(18, 'document_theme2', 'document-theme/Editor.png'),
(19, 'app_setting_status', 'on'),
(20, 'menu_setting_status', 'on'),
(21, 'feature_setting_status', 'on'),
(22, 'faq_setting_status', 'on'),
(23, 'testimonial_setting_status', 'on'),
(24, 'sidefeature_setting_status', 'on'),
(25, 'landing_page', '1'),
(26, 'apps_setting_enable', 'on'),
(27, 'apps_name', 'DS+'),
(28, 'apps_bold_name', 'DS+'),
(29, 'app_detail', 'DS+'),
(30, 'apps_image', 'landing-page/app/app.png'),
(31, 'apps_multiple_image_setting', '[{\"apps_multiple_image\":\"landing-page\\/app\\/1706059141_image.psd(15).png\"}]'),
(32, 'feature_setting_enable', 'off'),
(33, 'feature_name', 'Features'),
(34, 'feature_bold_name', 'Features'),
(35, 'feature_detail', 'test'),
(36, 'feature_setting', '[\n                                                        {\"feature_image\":\"seeder-images/active.svg\",\"feature_name\":\"Email Notification\",\"feature_bold_name\":\"On From Submit\",\"feature_detail\":\"You can send a notification email to someone in your organization when a contact submits a form. You can use this type of form processing step so that...\"},\n                                                        {\"feature_image\":\"seeder-images/security.svg\",\"feature_name\":\"Two Factor\",\"feature_bold_name\":\"Authentication\",\"feature_detail\":\"Security is our priority. With our robust two-factor authentication (2FA) feature, you can add an extra layer of protection to your Prime Laravel Form\"},\n                                                        {\"feature_image\":\"seeder-images/secretary.svg\",\"feature_name\":\"Multi Users With\",\"feature_bold_name\":\"Role & permission\",\"feature_detail\":\"Assign roles and permissions to different users based on their responsibilities and requirements. Admins can manage user accounts, define access level\"},\n                                                        {\"feature_image\":\"seeder-images/documents.svg\",\"feature_name\":\"Document builder\",\"feature_bold_name\":\"Easy and fast\",\"feature_detail\":\"Template Library: Offer a selection of pre-designed templates for various document types (e.g., contracts, reports).Template Creation: Allow users to create custom templates with placeholders for dynamic content.\\r\\n\\r\\nTemplate Library: Offer a selection of pre-designed templates for various document types (e.g., contracts, reports).Template Creation: Allow users to create custom templates with placeholders for dynamic content.\"}]'),
(37, 'menu_setting_section1_enable', 'on'),
(38, 'menu_image_section1', 'landing-page/menu/menusection1.png'),
(39, 'menu_name_section1', 'Hello we are, DS+'),
(40, 'menu_bold_name_section1', 'DS Team'),
(41, 'menu_detail_section1', 'Discover the new dimension with DS+! We focus on delivering exceptional experiences and effective communication. Join us and be part of the journey towards excellence, where creativity meets innovation.\r\nDiscover the new dimension with DS+! We focus on delivering exceptional experiences and effective communication. Join us and be part of the journey towards excellence, where creativity meets innovation.'),
(42, 'menu_setting_section2_enable', 'on'),
(43, 'menu_image_section2', 'landing-page/menu/menusection12.jpg'),
(44, 'menu_name_section2', 'Branding'),
(45, 'menu_bold_name_section2', 'Innovative Branding Solutions: Crafting Memorable Identities'),
(46, 'menu_detail_section2', '\"Branding projects are the canvas where identity, creativity, and strategic vision converge to craft compelling narratives that resonate with audiences and leave a lasting impression.\"\r\n\r\nAn example of our work: Rooted in a commitment to diversity, inclusivity, and ethical journalism, United Media Academy serves as a vibrant hub where individuals from all backgrounds can come together to learn, collaborate, and grow. Our faculty comprises industry experts, seasoned journalists, filmmakers, and media practitioners who are passionate about mentoring the next wave of talent and instilling in them the values of integrity, professionalism, and social responsibility'),
(47, 'menu_setting_section3_enable', 'on'),
(48, 'menu_image_section3', 'landing-page/menu/menusection13.jpg'),
(49, 'menu_name_section3', 'TV ADS'),
(50, 'menu_bold_name_section3', '#'),
(51, 'menu_detail_section3', 'Thanks to its exceptional professionalism and extensive experience, DS Company stands out as a leader in the television advertising creation industry, offering innovative and advanced solutions that reflect excellence and quality.'),
(52, 'business_growth_setting_enable', 'off'),
(53, 'business_growth_front_image', 'seeder-images/10.png'),
(54, 'business_growth_video', 'seeder-images/Dashboard _ Prime Laravel Form Builder.mp4'),
(55, 'business_growth_name', 'Business Growth'),
(56, 'business_growth_bold_name', 'Business Growth'),
(57, 'business_growth_detail', 'Offer unique products, services, or solutions that stand out in the market. Innovation and differentiation can attract customers and give you a competitive edge.'),
(58, 'business_growth_view_setting', '[{\"business_growth_view_name\":\"Positive Reviews\",\"business_growth_view_amount\":\"20 k+\"},{\"business_growth_view_name\":\"Total Sales\",\"business_growth_view_amount\":\"300 +\"},{\"business_growth_view_name\":\"Happy Users\",\"business_growth_view_amount\":\"100 k+\"}]'),
(59, 'business_growth_setting', '{\"1\":{\"business_growth_title\":\"Products Analytic\"},\"2\":{\"business_growth_title\":\"Manufacturers\"},\"3\":{\"business_growth_title\":\"Order Status Tracking\"},\"4\":{\"business_growth_title\":\"Supply Chain\"},\"5\":{\"business_growth_title\":\"Chatting Features\"},\"6\":{\"business_growth_title\":\"Workflows\"},\"7\":{\"business_growth_title\":\"Transformation\"},\"8\":{\"business_growth_title\":\"Easy Payout\"},\"9\":{\"business_growth_title\":\"Data Adjustment\"},\"10\":{\"business_growth_title\":\"Order Status Tracking\"},\"11\":{\"business_growth_title\":\"Store Swap Link\"},\"12\":{\"business_growth_title\":\"Manufacturers\"},\"13\":{\"business_growth_title\":\"Order Status Tracking\"},\"14\":{\"business_growth_title\":\"ggggg\"}}'),
(60, 'form_setting_enable', 'on'),
(61, 'form_name', 'Survey Form'),
(62, 'form_detail', 'Prime Laravel Form Builder is software for creating automated systems, you can create your own forms without writing a line of code. you have only to use the Drag & Drop to build your form and start using it.'),
(63, 'faq_setting_enable', 'off'),
(64, 'faq_name', 'FAQ'),
(65, 'blog_setting_enable', 'on'),
(66, 'blog_name', 'Latest News'),
(67, 'blog_detail', 'Latest and greatest post'),
(68, 'start_view_setting_enable', 'off'),
(69, 'start_view_name', 'اسم مشاهدة البداية'),
(70, 'start_view_detail', 'تفاصيل بدء المشاهدة'),
(71, 'start_view_link_name', 'Contact US'),
(72, 'start_view_link', '#'),
(73, 'start_view_image', 'seeder-images//11.png'),
(74, 'footer_setting_enable', 'on'),
(75, 'footer_description', 'إستجابةً لاحتياجات السيدات المترددات على الجمعية للحصول على الخدمات المختلفة قررت الجمعية العامة تبني قضية نبذ العنف الواقع عليهن سواء فى إطار العائلة او الشارع او المجتمع عموما والذي اتضح وتكشفت معالمه من خلال مجموعات النقاش البؤرية التي أجرتها الجمعية معهن'),
(76, 'rtl', '0'),
(77, '2fa', '0'),
(78, 'register', '0'),
(79, 'gtag', ''),
(80, 'email_verification', '0'),
(81, 'sms_verification', '0'),
(86, 'menu_button_title_section1', 'About us'),
(87, 'menu_button_url_section1', '#'),
(88, 'menu_button_title_section2', 'Learn More'),
(89, 'menu_button_url_section2', '#'),
(90, 'menu_button_title_section3', 'More advertisements'),
(91, 'menu_button_url_section3', '#'),
(92, 'seo_setting', 'on'),
(93, 'meta_title', 'DS+'),
(94, 'meta_keywords', 'DS+'),
(95, 'meta_description', 'DS+'),
(96, 'slider_setting_section1_enable', 'on'),
(97, 'slider_name_section1', 'Stay Connected'),
(98, 'slider_bold_name_section1', 'Stay Connected'),
(99, 'slider_detail_section1', 'Stay Connected'),
(100, 'slider_button_title_section1', 'View'),
(101, 'slider_button_url_section1', '#'),
(102, 'slider_image_section1', 'landing-page/slider/slidersection1.png'),
(103, 'project_setting_enable', 'off'),
(104, 'project_name', 'Projects'),
(105, 'project_detail', '\"جرت العادة أن تكون الحياة مليئة بالتحديات والتجارب. تعلمنا أن نواجهها بكل شجاعة وثقة. نحن نسعى دائماً لتحقيق النجاح والنمو الشخصي. الثقة والإيمان بالنفس يمكنهما أن يكونا المفتاح لتحقيق الطموحات والأحلام.\"'),
(106, 'testimonial_setting_enable', 'on'),
(107, 'testimonialg_setting_enable', 'on'),
(108, 'testimonial_name', 'Feedback from our clients.'),
(109, 'testimonial_detail', NULL),
(110, 'contactus_setting_enable', 'on'),
(111, 'contact_email', 'info@digitalmediafactory.org'),
(112, 'contact_address', '141, Aly Ahmed El Gretly, District 3, East Academy 11865'),
(113, 'contact_phone1', '+971509885064'),
(114, 'contact_phone2', '+201274614845'),
(115, 'contact_facebook', 'https://www.facebook.com/DigitalMFonline'),
(116, 'contact_twitter', 'https://x.com/DigitalMFonline'),
(117, 'contact_instagram', 'https://www.instagram.com/digitalmediafactory?igsh=ZXZ1Mmw0eml1NXh0'),
(118, 'contact_youtube', '⁠https://www.youtube.com/@DSPLUSEG'),
(119, 'contact_linkedin', 'https://jm.linkedin.com/company/digitalmediafactory'),
(120, 'latitude', '30.044695611218746'),
(121, 'longitude', '31.439352222850143'),
(122, 'slider_setting_section3_enable', 'off'),
(123, 'slider_setting_section2_enable', 'off'),
(124, 'slider_name_section2', 'Production'),
(125, 'slider_bold_name_section2', 'Maliha'),
(126, 'slider_detail_section2', 'Coming soon in Ramadan in collaboration with United Company'),
(127, 'slider_button_title_section2', 'view'),
(128, 'slider_button_url_section2', '#'),
(129, 'slider_image_section2', 'landing-page/slider/slidersection12.png'),
(130, 'slider_name_section3', 'events'),
(131, 'slider_bold_name_section3', 'New Suhag'),
(132, 'slider_detail_section3', 'We’re so proud of planning, producing and managing such a huge event with the presence of H.E. President Abdel Fattah El Sisi in New Suhag and Om Douma Village.'),
(133, 'slider_button_title_section3', 'view'),
(134, 'slider_button_url_section3', 'view'),
(135, 'slider_image_section3', 'landing-page/slider/slidersection13.png'),
(136, 'contact_city1', 'fIfth settlement'),
(137, 'contact_city2', 'misr el gdeda'),
(138, 'contact_address2', 'UAE, Dubai, Al Nahda 1, Me Tower, Office 1101'),
(139, 'joinus_setting_enable', 'on'),
(140, 'feature1', NULL),
(141, 'feature2', NULL),
(142, 'feature3', NULL),
(143, 'feature4', NULL),
(144, 'feature5', NULL),
(145, 'feature6', NULL),
(146, 'joinus_text', 'We build brands designed to transform business, customer, and employee experiences.'),
(147, 'joinus_feature1', '2d motion designers'),
(148, 'joinus_feature2', 'art directior'),
(149, 'joinus_feature3', 'senior graphic designer'),
(150, 'joinus_feature4', 'strategIst'),
(151, 'joinus_feature5', '3d motion designer'),
(152, 'joinus_feature6', 'typographer'),
(153, 'contact_text', '200 minds, 7 locatIons, one team'),
(154, 'google_map_enable', 'on'),
(155, 'google_map_api', 'd8ad9ad9ad'),
(156, 'joinus_feature7', 'finalizer'),
(157, 'joinus_feature8', 'video editor'),
(158, 'who_we_are_link', 'https://www.youtube.com/embed/0bjRD_FTUkE?si=2YDgWlJjy-kZu0tE'),
(159, 'privacy_setting_enable', 'on'),
(160, 'privacy_description', 'privacy_descriptionssssssssssssssssssssssss'),
(161, 'contact_dribble', 'https://dribbble.com/'),
(162, 'contact_behance', 'https://www.behance.net/'),
(163, 'landing.home.title', 'Transforming Visions into Digital Masterpieces'),
(164, 'landing.home.description', 'At Digital Media Factory, we don\'t just provide services; we craft digital \r\nexperiences. Our holistic approach ensures that every aspect of your digital presence aligns seamlessly, \r\ncreating a powerful and unified brand narrative. Join us on a journey where creativity meets strategy,and your brand\'s digital\r\npotential is realized to the fullest.'),
(165, 'home_setting_enable', 'on'),
(166, 'home_setting_enable', 'on'),
(167, 'title', 'Need help with professionalphotography? Let\'s work togetherrrrrrrrrrrrrrrrr!'),
(168, 'description', 'In my work, I try to find the right balance between form and function. From technical drawings, all the way to the photographic renders, and the actual representations of my work as a designer, my philosophy is that of simplicity.\r\nAt the same time, my style is distinctly mine – uncluttered, with clean shapes and modern space-saving solutions.'),
(169, 'home_about_us_setting_enable', 'on'),
(170, 'landing.home.about-us.title', 'WE ARE'),
(171, 'landing.home.about-us.sub-title', 'DIGITAL MEDIA'),
(172, 'landing.home.about-us.sub-title_2', 'FACTORY'),
(173, 'landing.home.about-us.cover', 'covers/lS9yHO0kOF0fpBOBaWGxMbji2Zy2p32E6zzxjpdg.jpg'),
(174, 'landing.home.about-us.background', 'backgrounds/X74kE4Uv8Dcjy7fI3tbFJiJpwsGxBIdWyZzDw9Yd.jpg'),
(175, 'landing.home.about-us.description', 'We are working on constantly exploring new technologies \r\nand trends to keep your brand ahead of the curve.'),
(176, 'services_what-we-do-setting_enable', 'on'),
(177, 'services.what.we.do.title', 'We provide you with\r\nthe best service in the\r\nmarket'),
(178, 'services.what.we.do.short-description', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration, by injected humour. words'),
(179, 'services.what.we.do.main-description', 'There are many variations of passages of Lorem Ipsum available, but \r\nthe majority have suffered alteration, Injected humour words web page\r\neditors now use as their.'),
(180, 'services.what.we.do.sub-description', 'Default and a search for will uncover many web sites still in their\r\ninfancy.suffered alteration, by injected humour words web page'),
(181, 'services.what.we.do.background_1', 'backgrounds/w5TAIeVnuTckagGVj46rIJMqoYg1madrMmQxFuOi.jpg'),
(182, 'services.what.we.do.background_2', 'backgrounds/BdeUgj0tnghb2P7QTWwuPi4wCUHy5u9bxcrHtQFh.jpg'),
(183, 'our-services.title', 'We are delivering beautiful\r\ndigital products for you.'),
(184, 'our-services.description', 'If you are looking for an agency to help you create a remarkable presence\r\n online, you’ve come to the right place. We can help you take your business\r\n to the next level.'),
(185, 'services_our-services-setting_enable', 'on'),
(186, 'our-target.title', 'We have been doing \r\nprojects since 2008.'),
(187, 'our-target.description', 'Founded in 2000, Dsn Grid has become one of the best Digital \r\nAgency in ThemeForest. Blue money going forward, but deploy\r\nto production.'),
(188, 'our-target.vision-description', 'Our vision in Digital Media Factory is simple yet transformative to be the driving force behind digital evolution. We strive to empower businesses, brands, and individuals with the tools they need to thrive in the ever-evolving digital ecosystem.'),
(189, 'our-target.goal-description', 'Our goal is to seamlessly blend creativity, technology, and strategy to deliver digital solutions that resonate and endure.'),
(190, 'our-target.mission-description', 'Our mission is to seamlessly blend creativity, technology, and strategy to deliver digital solutions that resonate and endure.'),
(191, 'services_our-target-setting_enable', 'on'),
(192, 'about-us_setting_enable', 'on'),
(193, 'about-us.title', 'Why do you need a modern media company?'),
(194, 'about-us.description', 'We provide the diverse and innovative media \r\nservices to the institutions in Middle East.'),
(195, 'about-us.content.title', 'Innovation at the Core'),
(196, 'about-us.content.description', 'Our vision in Digital Media Factory is simple yet transformative to be the driving force behind digital evolution.\r\nWe strive to empower businesses, brands, and individuals with the tools they need to thrive\r\nin the ever-evolving digital ecosystem. Our mission is to seamlessly blend creativity,\r\ntechnology, and strategy to deliver digital solutions that resonate and endure.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_templates`
--

CREATE TABLE `sms_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event` varchar(255) NOT NULL,
  `template` text DEFAULT NULL,
  `variables` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sms_templates`
--

INSERT INTO `sms_templates` (`id`, `event`, `template`, `variables`, `created_at`, `updated_at`) VALUES
(1, 'verification code sms', 'Hello :name, Your verification code is :code', 'name,code', '2024-01-22 00:14:06', '2024-01-22 00:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `social_logins`
--

CREATE TABLE `social_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_type` varchar(255) DEFAULT NULL,
  `social_id` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`id`, `title`, `cover`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(27, 'How We Work', 'statistics/Zj2i4q658Rfckyc8buDhKhPkbcOzHUl8RjPDNQeC.png', 'Lorem ipsum dolor sit amet consectetur adipiscing', NULL, '2024-08-03 04:50:47', '2024-08-15 16:38:41'),
(28, 'What We Do', 'statistics/bYmsXPGgT8hFL2onXNbsrFZwVTnJLkgNXjYffXPJ.png', 'Lorem ipsum dolor sit amet consectetur adipiscing', NULL, '2024-08-03 04:52:32', '2024-08-16 12:45:31'),
(29, 'Get A Quote', 'statistics/vcUT9byqe5VefG1L7lEiIyUqgkaeXRgcuqngmzgw.png', 'Lorem ipsum dolor sit amet consectetur adipiscing', NULL, '2024-08-03 04:52:53', '2024-08-16 12:43:11'),
(30, 'Zahrat Al Khaleej - مجلة زهرة الخليج', 'statistics/QDo6m5cS8RMawoUNJSVTFM1jvwHHTF6zHC6drryn.png', 'asdasd', NULL, '2024-08-04 06:56:04', '2024-08-13 06:29:11'),
(31, 'المسكوبية - Moscobia', 'statistics/CpP970eC1Rrbf3NymIi42e11UBywC0Oqxz6WWk7F.png', 'asda', NULL, '2024-08-04 06:56:14', '2024-08-13 06:29:33'),
(32, 'بوسطجي - Postaji', 'statistics/jSGpkNPgPz0iFvUuDlh1xadNu0piVsUE0Rq9aIBF.png', 'a sdasd', NULL, '2024-08-04 06:56:22', '2024-08-13 06:30:06'),
(33, 'DT Global', 'statistics/vdveJNwYBJAhI8djMRmlHOiG3FonXcIzBAaVNgAQ.png', 'sd jk', NULL, '2024-08-04 06:56:36', '2024-08-13 06:30:51'),
(34, 'روتانا - Rotana', 'statistics/7LSJRIsQ9uUlVN9dBGzLKRZqaNppnnL19cfgoh8K.png', 'sd', NULL, '2024-08-04 06:56:49', '2024-08-13 06:31:01'),
(35, 'الشبكة العربية للمنظمات الأهلية - Arab Network For NGOs', 'statistics/iqlXwo65grcPe1K13eMGchLuF3EyTrdhOrSOriHO.png', 'ddghg', NULL, '2024-08-04 06:57:02', '2024-08-13 06:31:14'),
(36, 'المنتدى العربي للمناخ - Arab Climate Forum', 'statistics/RyMn6wXDBIR91hfcz3i3rNi0AjdQ0qiDbtlqBAGP.png', 'dvhb', NULL, '2024-08-04 06:57:13', '2024-08-13 06:32:00'),
(37, 'جرين بالعربي - Green Arabic', 'statistics/0RJGjW4j4BpYpeXopci73u7Df5WGrEoTtIHuEovB.png', 'cvbcvb', NULL, '2024-08-04 06:57:21', '2024-08-13 06:32:43'),
(38, 'المنصة العربية للتعلم وبناء الشراكات - زي ما هما عربي', 'statistics/S7RbACnGPElKRkZJG6c0r83caPv9Nl60xdM8s1r8.png', NULL, NULL, NULL, '2024-08-13 06:32:55'),
(39, 'مشروع مناهضة العنف ضد المرأة - زي ما هما عربي', 'statistics/0iEAKctbAmm0Df2id8dsWCRwMEIPIQKMooD9vcAl.png', NULL, NULL, NULL, '2024-08-13 06:33:07'),
(40, 'نقابة الصحفيين السودانيين - Sudanese Journalists Syndicate', 'statistics/713gZlhNBfJ8q6uLcXQZfd6UcwjgIAtUOmLb2kmX.png', NULL, NULL, NULL, '2024-08-13 06:33:45'),
(41, 'Mobile Space', 'statistics/v6lYg3okXbKaAmZczNKZNdbIUWu9IAXtToTXeQ1e.png', NULL, NULL, NULL, '2024-08-13 06:33:58'),
(42, 'قناة الغد المشرق', 'statistics/5QyIw0JTJHcNkmsQctkxm6c6KOFYN83UeB6xCR7f.png', NULL, NULL, NULL, '2024-08-13 06:33:20'),
(43, 'شبكة أبوظبي للإعلام', 'statistics/ZojHD9nGc6ClErqe2FiUZVAfL2x6aV0dtMi6qjBn.png', NULL, NULL, NULL, '2024-08-13 06:37:07'),
(44, 'دبي للإعلام', 'statistics/3OYwCU0JLM4hWgEsVINc5gns1TSxAoCvs5RkvZmW.png', NULL, NULL, NULL, '2024-08-13 06:37:19'),
(45, 'دبي بوست', 'statistics/uOz9jPvhxc9Nwl5lZjtXKBfOMOs56YfNHRnXOBL3.png', NULL, NULL, NULL, '2024-08-13 06:37:31'),
(46, 'الإمارات نيوز', 'statistics/yIxShxKgUvWelkdSZbV4swPnGc1jg53DKWWpGgf5.png', NULL, NULL, NULL, '2024-08-13 06:38:01'),
(47, 'وزارة الاتصالات وتقنية المعلومات السعودية', 'statistics/JdX6L77lM6IQoueHT7mr48zPf9B4c77banjyffCM.png', NULL, NULL, NULL, '2024-08-13 06:38:11'),
(48, 'المركز الوطني لقياس أداء الأجهزة العامة ـ السعودية', 'statistics/nUp6CqssY8fL9uKHubWMJ1br8lUmWIiVIl8FGUKU.png', NULL, NULL, NULL, '2024-08-13 06:38:56'),
(49, 'CNC', 'statistics/5nXMLHPPMnHp69AUJtHQtqyPSoNdXssm2OEx1Nsv.png', NULL, NULL, NULL, '2024-08-13 06:37:41'),
(50, 'UNI', NULL, NULL, NULL, NULL, NULL),
(51, 'مجلة رواد الأعمال', 'statistics/48ZnsLrMJzvIH6lXD9QWEu2n93LOVWmp5BTVGzia.png', NULL, NULL, NULL, '2024-08-13 06:39:24'),
(52, 'Beyond Studios FZ-LLC - UAE', 'statistics/R9N4XpItSXOxvIPlASw0O5ungQJLW1X3xg6r11L7.png', NULL, NULL, NULL, '2024-08-13 06:39:32'),
(53, 'TriggersAcademy - KSA', 'statistics/o5F43m3LmW8vXQS5TbRpFy1DN40ukubAaCO0WiFf.png', NULL, NULL, NULL, '2024-08-13 06:39:52'),
(54, 'ديالكتيك', 'statistics/YsFexK6LHb5UIgQf4sHWqouIIj8ocsDDHwr8f9ed.png', NULL, NULL, NULL, '2024-08-13 06:39:11');

-- --------------------------------------------------------

--
-- Table structure for table `statistics_details`
--

CREATE TABLE `statistics_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `statistic_id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` text NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `social` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `image`, `position`, `description`, `social`, `created_at`, `updated_at`) VALUES
(14, 'MTL Graphic', 'sliders/aDxTtYUrDXKLvZwRYSdJF1pjfUq4M2v809zQ1FYE.jpg', 'Graphic Design', 'This theme is awesome and the designer is very helpful. I had a few questions purchase. He/She helped me with all the doubts. Also, they provide quick support. Thank you so much for a beautiful theme', '{\"facebook\":\"https:\\/\\/www.facebook.com\\/profile.php?id=100006772997488\",\"instagram\":\"https:\\/\\/www.facebook.com\\/profile.php?id=100006772997488\",\"linkedin\":\"https:\\/\\/github.com\\/commando01000\"}', '2024-08-03 09:54:31', '2024-08-15 18:02:53'),
(15, 'Jermey Smith', 'sliders/ibOuubTGkcBPDb8eMOjLvHyg3WqwSETIx6tqIBA5.jpg', 'Studio Head', 'This theme is awesome and the designer is very helpful. I had a few questions purchase. He/She helped me with all the doubts. Also, they provide quick support. Thank you so much for a beautiful theme', '{\"facebook\":\"https:\\/\\/www.facebook.com\\/profile.php?id=100006772997488\",\"instagram\":null,\"linkedin\":\"https:\\/\\/github.com\\/commando01000\"}', '2024-08-03 09:54:57', '2024-08-15 18:11:04'),
(16, 'Mahmoud Ibrahim', 'sliders/P3LDaqKb5LK0kx449hztuhBlsr3AjlS9IULTA7Hy.jpg', 'Software Engineer', 'This theme is awesome and the designer is very helpful. I had a few questions purchase. He/She helped me with all the doubts. Also, they provide quick support. Thank you so much for a beautiful theme', '{\"facebook\":null,\"instagram\":\"https:\\/\\/www.facebook.com\\/profile.php?id=100006772997488\",\"linkedin\":\"https:\\/\\/www.facebook.com\\/profile.php?id=100006772997488\"}', '2024-08-03 09:55:23', '2024-08-15 18:11:14'),
(17, 'Mohamed Hamad', 'sliders/wLdLtn7f2Fjs8wEiNmeQWITmANgE04BePcOwT1K4.jpg', 'Managing Director', 'This theme is awesome and the designer is very helpful. I had a few questions purchase. He/She helped me with all the doubts. Also, they provide quick support. Thank you so much for a beautiful theme', '{\"facebook\":null,\"instagram\":\"https:\\/\\/www.facebook.com\\/profile.php?id=100006772997488\",\"linkedin\":null}', '2024-08-03 09:55:41', '2024-08-15 18:09:12'),
(18, 'Hamdan Ahmed', 'sliders/Ix8CMzgqt2XAw3EXdKtH3oQxhsLSnxOyKldx8KBa.jpg', 'Financial Officer', 'This theme is awesome and the designer is very helpful. I had a few questions purchase. He/She helped me with all the doubts. Also, they provide quick support. Thank you so much for a beautiful theme', '{\"facebook\":\"https:\\/\\/www.facebook.com\\/profile.php?id=100006772997488\",\"instagram\":null,\"linkedin\":null}', '2024-08-03 09:57:03', '2024-08-15 18:09:21'),
(19, 'Salama Gamal', 'sliders/CmfJcKWTmk1tbYO3BTVYxa8YMiDbLwyXLEIhXMzy.jpg', 'Graduate', 'This theme is awesome and the designer is very helpful. I had a few questions purchase. He/She helped me with all the doubts. Also, they provide quick support. Thank you so much for a beautiful theme', '{\"facebook\":null,\"instagram\":null,\"linkedin\":\"https:\\/\\/github.com\\/commando01000\"}', '2024-08-03 09:57:19', '2024-08-15 18:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials_1`
--

CREATE TABLE `testimonials_1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rating` double(10,1) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials_1`
--

INSERT INTO `testimonials_1` (`id`, `name`, `title`, `desc`, `designation`, `image`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Mohamed', 'hello', '{\"en\":\"ssssssssssssss\",\"ar\":null}', 'c', 'testimonials/HeHITUXU1BJUWTRWkboDaU7hzfyi9OcxkHHSmKwq.jpg', 5.0, '1', '2024-07-24 09:16:17', '2024-07-24 09:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar/avatar.png',
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL DEFAULT 'India',
  `messenger_color` varchar(255) NOT NULL DEFAULT '#2180f3',
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `country_code` varchar(255) DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `dark_layout` tinyint(1) NOT NULL DEFAULT 0,
  `rtl_layout` tinyint(1) NOT NULL DEFAULT 0,
  `transprent_layout` tinyint(1) NOT NULL DEFAULT 1,
  `theme_color` varchar(255) NOT NULL DEFAULT 'theme-2',
  `users_grid_view` tinyint(1) NOT NULL DEFAULT 0,
  `forms_grid_view` tinyint(1) NOT NULL DEFAULT 0,
  `phone` varchar(255) DEFAULT NULL,
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `lang` varchar(255) DEFAULT NULL,
  `social_type` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `email_verified_at`, `password`, `remember_token`, `avatar`, `address`, `country`, `messenger_color`, `active_status`, `country_code`, `phone_verified_at`, `dark_layout`, `rtl_layout`, `transprent_layout`, `theme_color`, `users_grid_view`, `forms_grid_view`, `phone`, `dark_mode`, `lang`, `social_type`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', 'Admin', '2024-01-22 00:14:05', '$2y$12$tWPVu0dJ1z1JuqoN4rvXGOj3tMLWXGAyPHYhLsGKRzb8rWmEXRubO', NULL, 'avatar/1706198398.png', NULL, 'India', '#2180f3', 1, NULL, '2024-01-22 00:14:05', 0, 0, 0, 'theme-1', 1, 0, NULL, 0, 'en', NULL, NULL, '2024-01-22 00:14:05', '2024-08-07 05:32:21'),
(2, 'Admin', 'admin2@admin.com', 'Admin', '2024-01-21 22:14:05', '$2y$12$tWPVu0dJ1z1JuqoN4rvXGOj3tMLWXGAyPHYhLsGKRzb8rWmEXRubO', NULL, 'avatar/1706198398.png', NULL, 'India', '#2180f3', 1, NULL, '2024-01-21 22:14:05', 0, 0, 0, 'theme-1', 0, 0, NULL, 0, 'en', NULL, NULL, '2024-01-21 22:14:05', '2024-06-20 06:55:31'),
(5, 'Mohamed Salama Mousa Mohamed', 'slamtm608@gmail.com', 'Avaweg', '2024-06-23 08:57:51', '$2y$10$QDWouIXTLUTZJ6baf7kw3.9iYJGA7sC8fTkuDcbZzMhvKVGgglbxi', NULL, 'avatar/avatar.png', NULL, 'India', '#2180f3', 1, '20', '2024-06-23 08:57:51', 0, 0, 1, 'theme-2', 0, 0, '01094182099', 0, 'en', NULL, 1, '2024-06-23 08:57:51', '2024-06-23 08:57:51'),
(6, 'Mohamed', 'ms5261373@gmail.com', 'sub_user', '2024-06-23 09:01:29', '$2y$10$8u1/K4KUXson5TitOMHwxOhpBlIzoCbcms9IIca6ydSQ.Ane3scyu', NULL, 'avatar/avatar.png', NULL, 'India', '#2180f3', 1, '93', '2024-06-23 09:01:29', 0, 0, 1, 'theme-2', 0, 0, '01094182099', 0, 'en', NULL, 1, '2024-06-23 09:01:29', '2024-06-23 09:01:29');

-- --------------------------------------------------------

--
-- Table structure for table `users_origin`
--

CREATE TABLE `users_origin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar/avatar.png',
  `address` varchar(255) DEFAULT NULL,
  `country` varchar(255) NOT NULL DEFAULT 'India',
  `messenger_color` varchar(255) NOT NULL DEFAULT '#2180f3',
  `active_status` tinyint(1) NOT NULL DEFAULT 1,
  `country_code` varchar(255) DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `dark_layout` tinyint(1) NOT NULL DEFAULT 0,
  `rtl_layout` tinyint(1) NOT NULL DEFAULT 0,
  `transprent_layout` tinyint(1) NOT NULL DEFAULT 1,
  `theme_color` varchar(255) NOT NULL DEFAULT 'theme-2',
  `users_grid_view` tinyint(1) NOT NULL DEFAULT 0,
  `forms_grid_view` tinyint(1) NOT NULL DEFAULT 0,
  `phone` varchar(255) DEFAULT NULL,
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `lang` varchar(255) DEFAULT NULL,
  `social_type` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_origin`
--

INSERT INTO `users_origin` (`id`, `name`, `email`, `type`, `email_verified_at`, `password`, `remember_token`, `avatar`, `address`, `country`, `messenger_color`, `active_status`, `country_code`, `phone_verified_at`, `dark_layout`, `rtl_layout`, `transprent_layout`, `theme_color`, `users_grid_view`, `forms_grid_view`, `phone`, `dark_mode`, `lang`, `social_type`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', 'Admin', '2024-01-22 00:14:05', '$2y$10$yIUrK0VHWzO6UhSFHvkJEuLmCjvdGtgNuZDciTDkSPt7o5QHxb5yG', NULL, 'avatar/1706198398.png', NULL, 'India', '#2180f3', 1, NULL, '2024-01-22 00:14:05', 0, 0, 0, 'theme-1', 0, 0, NULL, 0, 'en', NULL, NULL, '2024-01-22 00:14:05', '2024-03-01 10:57:22'),
(4, 'Admin', 'avaw.egypt@gmail.com', 'Avaweg', '2024-02-18 15:54:46', '$2y$10$Y/YiUpztV867lAe1df8o0.TFNLI3HpN5PNLK24VzF19S/NwX4Ixvy', NULL, 'avatar/avatar.png', NULL, 'India', '#2180f3', 1, '20', '2024-02-18 15:54:46', 0, 0, 1, 'theme-2', 0, 0, '123456789', 0, 'ar', NULL, 1, '2024-02-18 15:54:46', '2024-02-18 16:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `user_codes`
--

CREATE TABLE `user_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_forms`
--

CREATE TABLE `user_forms` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `form_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_forms_roles`
--
ALTER TABLE `assign_forms_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assign_forms_roles_form_id_index` (`form_id`),
  ADD KEY `assign_forms_roles_role_id_index` (`role_id`);

--
-- Indexes for table `assign_forms_users`
--
ALTER TABLE `assign_forms_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `assign_forms_users_form_id_index` (`form_id`),
  ADD KEY `assign_forms_users_user_id_index` (`user_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments_replies`
--
ALTER TABLE `blog_comments_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reply_comment_fk` (`comment_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_values`
--
ALTER TABLE `booking_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_client_category` (`client_category`);

--
-- Indexes for table `client_categories`
--
ALTER TABLE `client_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designs`
--
ALTER TABLE `designs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `design_category_fk` (`design_category`);

--
-- Indexes for table `design_categories`
--
ALTER TABLE `design_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `design_details`
--
ALTER TABLE `design_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `design_details_fk` (`design_id`);

--
-- Indexes for table `design_details_images`
--
ALTER TABLE `design_details_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `design_id_fk_2` (`design_id`);

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_settings`
--
ALTER TABLE `header_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joins`
--
ALTER TABLE `joins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaderships`
--
ALTER TABLE `leaderships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_securities`
--
ALTER TABLE `login_securities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_templates`
--
ALTER TABLE `mail_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meeting_polls`
--
ALTER TABLE `meeting_polls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_settings`
--
ALTER TABLE `menu_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multiple_choices`
--
ALTER TABLE `multiple_choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `notifications_settings`
--
ALTER TABLE `notifications_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_settings`
--
ALTER TABLE `page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `progress_to_leadership`
--
ALTER TABLE `progress_to_leadership`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_progress` (`leadership_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_project_category` (`project_category`);

--
-- Indexes for table `projects_images`
--
ALTER TABLE `projects_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sevice_ategory` (`service_category`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_key_index` (`key`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_templates`
--
ALTER TABLE `sms_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_logins`
--
ALTER TABLE `social_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_title` (`title`);

--
-- Indexes for table `statistics_details`
--
ALTER TABLE `statistics_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statistics_details_ibfk_1` (`statistic_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials_1`
--
ALTER TABLE `testimonials_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_origin`
--
ALTER TABLE `users_origin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_codes`
--
ALTER TABLE `user_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_forms`
--
ALTER TABLE `user_forms`
  ADD KEY `user_forms_role_id_index` (`role_id`),
  ADD KEY `user_forms_form_id_index` (`form_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_forms_roles`
--
ALTER TABLE `assign_forms_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assign_forms_users`
--
ALTER TABLE `assign_forms_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_comments_replies`
--
ALTER TABLE `blog_comments_replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_values`
--
ALTER TABLE `booking_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `client_categories`
--
ALTER TABLE `client_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `designs`
--
ALTER TABLE `designs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `design_categories`
--
ALTER TABLE `design_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `design_details`
--
ALTER TABLE `design_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `design_details_images`
--
ALTER TABLE `design_details_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `header_settings`
--
ALTER TABLE `header_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `joins`
--
ALTER TABLE `joins`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `leaderships`
--
ALTER TABLE `leaderships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `login_securities`
--
ALTER TABLE `login_securities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mail_templates`
--
ALTER TABLE `mail_templates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `meeting_polls`
--
ALTER TABLE `meeting_polls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_settings`
--
ALTER TABLE `menu_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `multiple_choices`
--
ALTER TABLE `multiple_choices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications_settings`
--
ALTER TABLE `notifications_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `page_settings`
--
ALTER TABLE `page_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `progress_to_leadership`
--
ALTER TABLE `progress_to_leadership`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `projects_images`
--
ALTER TABLE `projects_images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sms_templates`
--
ALTER TABLE `sms_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_logins`
--
ALTER TABLE `social_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statistics`
--
ALTER TABLE `statistics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `statistics_details`
--
ALTER TABLE `statistics_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `testimonials_1`
--
ALTER TABLE `testimonials_1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_origin`
--
ALTER TABLE `users_origin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_codes`
--
ALTER TABLE `user_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_comments_replies`
--
ALTER TABLE `blog_comments_replies`
  ADD CONSTRAINT `reply_comment_fk` FOREIGN KEY (`comment_id`) REFERENCES `blog_comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `fk_client_category` FOREIGN KEY (`client_category`) REFERENCES `client_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `designs`
--
ALTER TABLE `designs`
  ADD CONSTRAINT `design_category_fk` FOREIGN KEY (`design_category`) REFERENCES `design_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `design_details`
--
ALTER TABLE `design_details`
  ADD CONSTRAINT `design_details_fk` FOREIGN KEY (`design_id`) REFERENCES `designs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `design_details_images`
--
ALTER TABLE `design_details_images`
  ADD CONSTRAINT `design_id_fk_2` FOREIGN KEY (`design_id`) REFERENCES `designs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `progress_to_leadership`
--
ALTER TABLE `progress_to_leadership`
  ADD CONSTRAINT `fk_progress` FOREIGN KEY (`leadership_id`) REFERENCES `leaderships` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `fk_project_category` FOREIGN KEY (`project_category`) REFERENCES `project_categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `fk_sevice_ategory` FOREIGN KEY (`service_category`) REFERENCES `service_categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `statistics_details`
--
ALTER TABLE `statistics_details`
  ADD CONSTRAINT `statistics_details_ibfk_1` FOREIGN KEY (`statistic_id`) REFERENCES `statistics` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
