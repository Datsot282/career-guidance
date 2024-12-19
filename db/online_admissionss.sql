-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2024 at 03:49 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_admissionss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'super@admin.com', '$2y$10$ycTZv.aYTQTAT.Uo2Znbe.ZLFbM0DYm.8ZisLs3aK7pUYRK1TJOaO', 1, NULL, '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(1, 'Super Admin', 'super@admin.com', '$2y$10$ycTZv.aYTQTAT.Uo2Znbe.ZLFbM0DYm.8ZisLs3aK7pUYRK1TJOaO', 1, NULL, '2020-06-18 03:55:25', '2020-06-18 03:55:25');

-- --------------------------------------------------------

--
-- Table structure for table `admin_permission`
--

CREATE TABLE `admin_permission` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

CREATE TABLE `admin_role` (
  `id` int(11) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`id`, `role_id`, `admin_id`) VALUES
(1, 1, 1),
(1, 1, 1),
(1, 1, 1),
(1, 1, 1),
(1, 1, 1),
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `all_institudes`
--

CREATE TABLE `all_institudes` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `descriptiom` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `contacts` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_institudes`
--

INSERT INTO `all_institudes` (`id`, `name`, `descriptiom`, `email`, `password`, `contacts`, `location`) VALUES
(1, 'Limkokwing University', 'Creative Technology', 'limkokwing@li.co.ls', '', '22558899', 'Main SOuth 1 Maseru Lesotho'),
(1, 'Limkokwing University', 'Creative Technology', 'limkokwing@li.co.ls', '', '22558899', 'Main SOuth 1 Maseru Lesotho');

-- --------------------------------------------------------

--
-- Table structure for table `all_institudess`
--

CREATE TABLE `all_institudess` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `descriptiom` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `contacts` text NOT NULL,
  `location` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_institudess`
--

INSERT INTO `all_institudess` (`id`, `name`, `descriptiom`, `email`, `password`, `contacts`, `location`, `updated_at`, `date_added`) VALUES
(1, 'Limkokwing University', 'Creative Technology', 'limkokwing@li.co.ls', '', '22558899', 'Main SOuth 1 Maseru Lesotho', '2024-12-09 01:11:11', '2024-12-06 05:17:48'),
(1, 'Limkokwing University', 'Creative Technology', 'limkokwing@li.co.ls', '', '22558899', 'Main SOuth 1 Maseru Lesotho', '2024-12-09 01:11:11', '2024-12-06 05:17:48');

-- --------------------------------------------------------

--
-- Table structure for table `all_schools`
--

CREATE TABLE `all_schools` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `email` text NOT NULL,
  `contacts` text NOT NULL,
  `location` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_schools`
--

INSERT INTO `all_schools` (`id`, `name`, `description`, `email`, `contacts`, `location`, `created_at`) VALUES
(1, 'Lesotho Colledge Of Education', ' ', 'info@tsoool.co.ls', '56996633', 'Maseru', '2024-12-09 01:51:52'),
(13, 'Lerotholi Politechnic', ' ', 'info@sussdvtedfzh.co.ls', '22332265', 'Maseru', '2024-12-09 02:26:20'),
(15, 'NHTC', ' ', 'textscho@chool.com', '56996633', 'Maseru', '2024-12-09 02:28:25'),
(16, 'NTTC', ' ', 'this@tsot.cl.cd', '22332265', ' ', '2024-12-09 02:32:55'),
(17, 'HJOJN', 'Yet To be update', 'info@sudfwecewsfsh.co.ls', '678987', 'yet to be update', '2024-12-16 18:46:19'),
(18, 'Hae', 'Yet To be update', 'info@sufsh.co.ls', '678987', 'yet to be update', '2024-12-17 22:32:57'),
(19, 'Lesotho Institude of US', 'sdvdsvsVSD', 'this@tsfffot.cl.cd', '22323344', 'maseryfhfdfddfx', '2024-12-18 04:39:47');

-- --------------------------------------------------------

--
-- Table structure for table `application_publications`
--

CREATE TABLE `application_publications` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `created_by_user_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application_publications`
--

INSERT INTO `application_publications` (`id`, `school_id`, `course_id`, `created_by_user_id`, `date_added`) VALUES
(1, 1, 1, 6, '2024-12-07 18:04:27'),
(1, 1, 1, 6, '2024-12-07 18:04:27'),
(1, 1, 10, 6, '2024-12-16 17:24:58');

-- --------------------------------------------------------

--
-- Table structure for table `application_record`
--

CREATE TABLE `application_record` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `application_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0 - Not Submitted, 1 - Submitted, 2- Accepted, 3- Rejected',
  `course_record_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `gender_record_id` bigint(20) UNSIGNED DEFAULT NULL,
  `caste_record_id` bigint(20) UNSIGNED DEFAULT NULL,
  `religion_record_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guardian_contact` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hs_board_record_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hs_pass_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hs_division` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hs_percentage` int(11) DEFAULT NULL,
  `hs_subjects` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hs_total_marks` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hs_student_marks` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hslc_board_record_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hslc_pass_year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hslc_division` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hslc_percentage` int(11) DEFAULT NULL,
  `file_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_hs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_hslc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_caste` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkPWD` tinyint(1) NOT NULL DEFAULT '0',
  `checkBPL` tinyint(1) NOT NULL DEFAULT '0',
  `major` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elective` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complete_percentage` int(11) NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `board_record`
--

CREATE TABLE `board_record` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `board_record`
--

INSERT INTO `board_record` (`id`, `created_at`, `updated_at`, `name`) VALUES
(2, '2020-06-18 11:25:21', '2020-06-18 12:00:38', 'CBSE'),
(3, '2020-06-18 12:00:04', '2020-06-18 12:00:04', 'SEBA'),
(2, '2020-06-18 11:25:21', '2020-06-18 12:00:38', 'CBSE'),
(3, '2020-06-18 12:00:04', '2020-06-18 12:00:04', 'SEBA');

-- --------------------------------------------------------

--
-- Table structure for table `category_record`
--

CREATE TABLE `category_record` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_record`
--

INSERT INTO `category_record` (`id`, `created_at`, `updated_at`, `name`) VALUES
(2, '2020-06-18 13:27:50', '2020-06-18 13:27:50', 'ALL'),
(3, '2020-06-18 13:27:59', '2020-06-18 13:27:59', 'SC'),
(4, '2020-06-18 13:28:05', '2020-06-18 13:28:05', 'ST'),
(5, '2020-06-18 13:28:14', '2020-06-18 13:28:14', 'OBC'),
(6, '2020-06-18 13:28:36', '2020-06-18 13:28:36', 'GEN'),
(2, '2020-06-18 13:27:50', '2020-06-18 13:27:50', 'ALL'),
(3, '2020-06-18 13:27:59', '2020-06-18 13:27:59', 'SC'),
(4, '2020-06-18 13:28:05', '2020-06-18 13:28:05', 'ST'),
(5, '2020-06-18 13:28:14', '2020-06-18 13:28:14', 'OBC'),
(6, '2020-06-18 13:28:36', '2020-06-18 13:28:36', 'GEN');

-- --------------------------------------------------------

--
-- Table structure for table `course_record`
--

CREATE TABLE `course_record` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `course_prefix` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'NA',
  `course_counter` int(11) NOT NULL DEFAULT '1',
  `course_semester` int(11) NOT NULL DEFAULT '1',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `compulsory` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `major` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elective` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_record`
--

INSERT INTO `course_record` (`id`, `created_at`, `updated_at`, `name`, `description`, `course_prefix`, `course_counter`, `course_semester`, `active`, `compulsory`, `major`, `elective`) VALUES
(2, '2020-06-18 13:58:39', '2020-07-10 04:32:32', 'Arts (Honours)', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n    Vivamus accumsan libero at placerat luctus.\r\n    Sed laoreet quam at turpis molestie, vitae molestie massa sagittis.\r\n    Ut a quam porta, rhoncus mi lobortis, dictum ex.\r\n    Sed eu magna dapibus, molestie nibh vitae, euismod dui.\r\n    Suspendisse eget turpis sagittis, elementum est vitae, placerat diam.', 'ARH', 1, 2, 1, 'English,Assamese(MIL)/Alt. English,Env. Studies', 'English,Assamese,Pol. Science,Education,Logic & Philosophy', 'Pol. Science, Education, Logic & Philosophy,History,Sociology,Hindi,Arabic,Economics,Geography'),
(3, '2020-06-21 16:07:19', '2020-07-10 04:33:33', 'Arts (Regular)', 'Fusce fringilla velit quis ligula pulvinar, at gravida dui congue.\r\n    Maecenas mollis nisi eget sodales vehicula.\r\n    Integer tempor libero vel dignissim vestibulum.', 'ARR', 1, 3, 1, 'English,Assamese(MIL)/Alt. English,Env. Studies', NULL, 'Pol. Science, Education, Logic & Philosophy,History,Sociology,Hindi,Arabic,Economics,Geography'),
(2, '2020-06-18 13:58:39', '2020-07-10 04:32:32', 'Arts (Honours)', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n    Vivamus accumsan libero at placerat luctus.\r\n    Sed laoreet quam at turpis molestie, vitae molestie massa sagittis.\r\n    Ut a quam porta, rhoncus mi lobortis, dictum ex.\r\n    Sed eu magna dapibus, molestie nibh vitae, euismod dui.\r\n    Suspendisse eget turpis sagittis, elementum est vitae, placerat diam.', 'ARH', 1, 2, 1, 'English,Assamese(MIL)/Alt. English,Env. Studies', 'English,Assamese,Pol. Science,Education,Logic & Philosophy', 'Pol. Science, Education, Logic & Philosophy,History,Sociology,Hindi,Arabic,Economics,Geography'),
(3, '2020-06-21 16:07:19', '2020-07-10 04:33:33', 'Arts (Regular)', 'Fusce fringilla velit quis ligula pulvinar, at gravida dui congue.\r\n    Maecenas mollis nisi eget sodales vehicula.\r\n    Integer tempor libero vel dignissim vestibulum.', 'ARR', 1, 3, 1, 'English,Assamese(MIL)/Alt. English,Env. Studies', NULL, 'Pol. Science, Education, Logic & Philosophy,History,Sociology,Hindi,Arabic,Economics,Geography');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_record`
--

CREATE TABLE `feedback_record` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_record_id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback_message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback_record`
--

INSERT INTO `feedback_record` (`id`, `created_at`, `updated_at`, `name`, `email`, `course_record_id`, `department`, `feedback_message`) VALUES
(1, '2020-06-27 06:57:40', '2020-06-27 06:57:40', 'Saifur Rahman', 'saifur.rahman18@gmail.com', 2, NULL, 'I really love this course.'),
(1, '2020-06-27 06:57:40', '2020-06-27 06:57:40', 'Saifur Rahman', 'saifur.rahman18@gmail.com', 2, NULL, 'I really love this course.'),
(1, '2020-06-27 06:57:40', '2020-06-27 06:57:40', 'Saifur Rahman', 'saifur.rahman18@gmail.com', 2, NULL, 'I really love this course.'),
(1, '2020-06-27 06:57:40', '2020-06-27 06:57:40', 'Saifur Rahman', 'saifur.rahman18@gmail.com', 2, NULL, 'I really love this course.'),
(1, '2020-06-27 06:57:40', '2020-06-27 06:57:40', 'Saifur Rahman', 'saifur.rahman18@gmail.com', 2, NULL, 'I really love this course.'),
(1, '2020-06-27 06:57:40', '2020-06-27 06:57:40', 'Saifur Rahman', 'saifur.rahman18@gmail.com', 2, NULL, 'I really love this course.');

-- --------------------------------------------------------

--
-- Table structure for table `fee_body_record`
--

CREATE TABLE `fee_body_record` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` double(20,2) NOT NULL,
  `checkPWD` tinyint(1) NOT NULL DEFAULT '0',
  `checkBPL` tinyint(1) NOT NULL DEFAULT '0',
  `category_record_id` bigint(20) UNSIGNED NOT NULL,
  `course_record_id` bigint(20) UNSIGNED NOT NULL,
  `gender_record_id` bigint(20) UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gender_record`
--

CREATE TABLE `gender_record` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gender_record`
--

INSERT INTO `gender_record` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, '2020-06-18 12:16:31', '2020-06-18 12:16:31', 'ALL'),
(2, '2020-06-18 12:16:06', '2020-06-18 12:21:57', 'Female'),
(3, '2020-06-18 12:14:52', '2020-06-18 12:22:04', 'Male'),
(4, '2020-06-18 12:21:48', '2020-06-18 12:21:48', 'Other'),
(1, '2020-06-18 12:16:31', '2020-06-18 12:16:31', 'ALL'),
(2, '2020-06-18 12:16:06', '2020-06-18 12:21:57', 'Female'),
(3, '2020-06-18 12:14:52', '2020-06-18 12:22:04', 'Male'),
(4, '2020-06-18 12:21:48', '2020-06-18 12:21:48', 'Other'),
(1, '2020-06-18 12:16:31', '2020-06-18 12:16:31', 'ALL'),
(2, '2020-06-18 12:16:06', '2020-06-18 12:21:57', 'Female'),
(3, '2020-06-18 12:14:52', '2020-06-18 12:22:04', 'Male'),
(4, '2020-06-18 12:21:48', '2020-06-18 12:21:48', 'Other'),
(1, '2020-06-18 12:16:31', '2020-06-18 12:16:31', 'ALL'),
(2, '2020-06-18 12:16:06', '2020-06-18 12:21:57', 'Female'),
(3, '2020-06-18 12:14:52', '2020-06-18 12:22:04', 'Male'),
(4, '2020-06-18 12:21:48', '2020-06-18 12:21:48', 'Other'),
(1, '2020-06-18 12:16:31', '2020-06-18 12:16:31', 'ALL'),
(2, '2020-06-18 12:16:06', '2020-06-18 12:21:57', 'Female'),
(3, '2020-06-18 12:14:52', '2020-06-18 12:22:04', 'Male'),
(4, '2020-06-18 12:21:48', '2020-06-18 12:21:48', 'Other'),
(1, '2020-06-18 12:16:31', '2020-06-18 12:16:31', 'ALL'),
(2, '2020-06-18 12:16:06', '2020-06-18 12:21:57', 'Female'),
(3, '2020-06-18 12:14:52', '2020-06-18 12:22:04', 'Male'),
(4, '2020-06-18 12:21:48', '2020-06-18 12:21:48', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `new_fee_record`
--

CREATE TABLE `new_fee_record` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fee_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee_year` int(11) NOT NULL DEFAULT '0',
  `gen` int(11) NOT NULL,
  `sc` int(11) NOT NULL,
  `st` int(11) NOT NULL,
  `obc` int(11) NOT NULL,
  `pwd` int(11) NOT NULL,
  `bpl` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `course_record_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `new_fee_record`
--

INSERT INTO `new_fee_record` (`id`, `created_at`, `updated_at`, `fee_name`, `fee_year`, `gen`, `sc`, `st`, `obc`, `pwd`, `bpl`, `active`, `course_record_id`) VALUES
(2, '2020-06-29 12:47:24', '2020-06-29 15:09:47', 'Tuition Fees', 1, 10001, 10001, 10001, 10001, 10001, 10001, 1, 2),
(3, '2020-06-29 12:47:38', '2020-06-29 12:47:38', 'Tuition Fees', 2, 5000, 5000, 5000, 5000, 5000, 5000, 1, 2),
(4, '2020-06-29 14:03:07', '2020-06-29 15:11:41', 'Admission Fee', 0, 3001, 501, 504, 1001, 201, 10, 1, 2),
(5, '2020-06-29 14:27:28', '2020-06-29 14:27:28', 'Lab Fee', 1, 1500, 1500, 1500, 1500, 1500, 1500, 1, 2),
(6, '2020-07-10 04:30:53', '2020-07-10 04:30:53', 'Admission Fee', 0, 1000, 1000, 1000, 1000, 1000, 1000, 1, 3),
(2, '2020-06-29 12:47:24', '2020-06-29 15:09:47', 'Tuition Fees', 1, 10001, 10001, 10001, 10001, 10001, 10001, 1, 2),
(3, '2020-06-29 12:47:38', '2020-06-29 12:47:38', 'Tuition Fees', 2, 5000, 5000, 5000, 5000, 5000, 5000, 1, 2),
(4, '2020-06-29 14:03:07', '2020-06-29 15:11:41', 'Admission Fee', 0, 3001, 501, 504, 1001, 201, 10, 1, 2),
(5, '2020-06-29 14:27:28', '2020-06-29 14:27:28', 'Lab Fee', 1, 1500, 1500, 1500, 1500, 1500, 1500, 1, 2),
(6, '2020-07-10 04:30:53', '2020-07-10 04:30:53', 'Admission Fee', 0, 1000, 1000, 1000, 1000, 1000, 1000, 1, 3),
(2, '2020-06-29 12:47:24', '2020-06-29 15:09:47', 'Tuition Fees', 1, 10001, 10001, 10001, 10001, 10001, 10001, 1, 2),
(3, '2020-06-29 12:47:38', '2020-06-29 12:47:38', 'Tuition Fees', 2, 5000, 5000, 5000, 5000, 5000, 5000, 1, 2),
(4, '2020-06-29 14:03:07', '2020-06-29 15:11:41', 'Admission Fee', 0, 3001, 501, 504, 1001, 201, 10, 1, 2),
(5, '2020-06-29 14:27:28', '2020-06-29 14:27:28', 'Lab Fee', 1, 1500, 1500, 1500, 1500, 1500, 1500, 1, 2),
(6, '2020-07-10 04:30:53', '2020-07-10 04:30:53', 'Admission Fee', 0, 1000, 1000, 1000, 1000, 1000, 1000, 1, 3),
(2, '2020-06-29 12:47:24', '2020-06-29 15:09:47', 'Tuition Fees', 1, 10001, 10001, 10001, 10001, 10001, 10001, 1, 2),
(3, '2020-06-29 12:47:38', '2020-06-29 12:47:38', 'Tuition Fees', 2, 5000, 5000, 5000, 5000, 5000, 5000, 1, 2),
(4, '2020-06-29 14:03:07', '2020-06-29 15:11:41', 'Admission Fee', 0, 3001, 501, 504, 1001, 201, 10, 1, 2),
(5, '2020-06-29 14:27:28', '2020-06-29 14:27:28', 'Lab Fee', 1, 1500, 1500, 1500, 1500, 1500, 1500, 1, 2),
(6, '2020-07-10 04:30:53', '2020-07-10 04:30:53', 'Admission Fee', 0, 1000, 1000, 1000, 1000, 1000, 1000, 1, 3),
(2, '2020-06-29 12:47:24', '2020-06-29 15:09:47', 'Tuition Fees', 1, 10001, 10001, 10001, 10001, 10001, 10001, 1, 2),
(3, '2020-06-29 12:47:38', '2020-06-29 12:47:38', 'Tuition Fees', 2, 5000, 5000, 5000, 5000, 5000, 5000, 1, 2),
(4, '2020-06-29 14:03:07', '2020-06-29 15:11:41', 'Admission Fee', 0, 3001, 501, 504, 1001, 201, 10, 1, 2),
(5, '2020-06-29 14:27:28', '2020-06-29 14:27:28', 'Lab Fee', 1, 1500, 1500, 1500, 1500, 1500, 1500, 1, 2),
(6, '2020-07-10 04:30:53', '2020-07-10 04:30:53', 'Admission Fee', 0, 1000, 1000, 1000, 1000, 1000, 1000, 1, 3),
(2, '2020-06-29 12:47:24', '2020-06-29 15:09:47', 'Tuition Fees', 1, 10001, 10001, 10001, 10001, 10001, 10001, 1, 2),
(3, '2020-06-29 12:47:38', '2020-06-29 12:47:38', 'Tuition Fees', 2, 5000, 5000, 5000, 5000, 5000, 5000, 1, 2),
(4, '2020-06-29 14:03:07', '2020-06-29 15:11:41', 'Admission Fee', 0, 3001, 501, 504, 1001, 201, 10, 1, 2),
(5, '2020-06-29 14:27:28', '2020-06-29 14:27:28', 'Lab Fee', 1, 1500, 1500, 1500, 1500, 1500, 1500, 1, 2),
(6, '2020-07-10 04:30:53', '2020-07-10 04:30:53', 'Admission Fee', 0, 1000, 1000, 1000, 1000, 1000, 1000, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `otp` int(11) NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `counter` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'CreateAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(2, 'CreateRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(3, 'ReadAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(4, 'ReadRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(5, 'UpdateAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(6, 'UpdateRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(7, 'DeleteAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(8, 'DeleteRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(1, 'CreateAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(2, 'CreateRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(3, 'ReadAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(4, 'ReadRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(5, 'UpdateAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(6, 'UpdateRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(7, 'DeleteAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(8, 'DeleteRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(1, 'CreateAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(2, 'CreateRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(3, 'ReadAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(4, 'ReadRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(5, 'UpdateAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(6, 'UpdateRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(7, 'DeleteAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(8, 'DeleteRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(1, 'CreateAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(2, 'CreateRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(3, 'ReadAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(4, 'ReadRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(5, 'UpdateAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(6, 'UpdateRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(7, 'DeleteAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(8, 'DeleteRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(1, 'CreateAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(2, 'CreateRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(3, 'ReadAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(4, 'ReadRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(5, 'UpdateAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(6, 'UpdateRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(7, 'DeleteAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(8, 'DeleteRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(1, 'CreateAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(2, 'CreateRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(3, 'ReadAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(4, 'ReadRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(5, 'UpdateAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(6, 'UpdateRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(7, 'DeleteAdmin', 'Admin', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(8, 'DeleteRole', 'Role', '2020-06-18 03:55:25', '2020-06-18 03:55:25');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(11) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 8, NULL, NULL),
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 8, NULL, NULL),
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 8, NULL, NULL),
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 8, NULL, NULL),
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 8, NULL, NULL),
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `religion_record`
--

CREATE TABLE `religion_record` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `religion_record`
--

INSERT INTO `religion_record` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, '2020-06-21 11:43:39', '2020-06-21 11:46:09', 'Hinduism'),
(3, '2020-06-21 12:01:22', '2020-06-21 12:01:22', 'Islam'),
(4, '2020-06-21 12:02:23', '2020-06-21 12:02:23', 'Christianity'),
(5, '2020-06-21 12:02:37', '2020-06-21 12:02:37', 'Sikhism'),
(6, '2020-06-21 12:02:46', '2020-06-21 12:02:46', 'Jainism'),
(7, '2020-06-21 12:03:07', '2020-06-21 12:03:07', 'Zoroastrianism'),
(8, '2020-06-21 12:03:26', '2020-06-21 12:03:26', 'Judaism'),
(9, '2020-06-21 12:03:52', '2020-06-21 12:03:52', 'BahaFaith'),
(10, '2020-06-21 12:04:02', '2020-06-21 12:04:02', 'Other'),
(1, '2020-06-21 11:43:39', '2020-06-21 11:46:09', 'Hinduism'),
(3, '2020-06-21 12:01:22', '2020-06-21 12:01:22', 'Islam'),
(4, '2020-06-21 12:02:23', '2020-06-21 12:02:23', 'Christianity'),
(5, '2020-06-21 12:02:37', '2020-06-21 12:02:37', 'Sikhism'),
(6, '2020-06-21 12:02:46', '2020-06-21 12:02:46', 'Jainism'),
(7, '2020-06-21 12:03:07', '2020-06-21 12:03:07', 'Zoroastrianism'),
(8, '2020-06-21 12:03:26', '2020-06-21 12:03:26', 'Judaism'),
(9, '2020-06-21 12:03:52', '2020-06-21 12:03:52', 'BahaFaith'),
(10, '2020-06-21 12:04:02', '2020-06-21 12:04:02', 'Other'),
(1, '2020-06-21 11:43:39', '2020-06-21 11:46:09', 'Hinduism'),
(3, '2020-06-21 12:01:22', '2020-06-21 12:01:22', 'Islam'),
(4, '2020-06-21 12:02:23', '2020-06-21 12:02:23', 'Christianity'),
(5, '2020-06-21 12:02:37', '2020-06-21 12:02:37', 'Sikhism'),
(6, '2020-06-21 12:02:46', '2020-06-21 12:02:46', 'Jainism'),
(7, '2020-06-21 12:03:07', '2020-06-21 12:03:07', 'Zoroastrianism'),
(8, '2020-06-21 12:03:26', '2020-06-21 12:03:26', 'Judaism'),
(9, '2020-06-21 12:03:52', '2020-06-21 12:03:52', 'BahaFaith'),
(10, '2020-06-21 12:04:02', '2020-06-21 12:04:02', 'Other'),
(1, '2020-06-21 11:43:39', '2020-06-21 11:46:09', 'Hinduism'),
(3, '2020-06-21 12:01:22', '2020-06-21 12:01:22', 'Islam'),
(4, '2020-06-21 12:02:23', '2020-06-21 12:02:23', 'Christianity'),
(5, '2020-06-21 12:02:37', '2020-06-21 12:02:37', 'Sikhism'),
(6, '2020-06-21 12:02:46', '2020-06-21 12:02:46', 'Jainism'),
(7, '2020-06-21 12:03:07', '2020-06-21 12:03:07', 'Zoroastrianism'),
(8, '2020-06-21 12:03:26', '2020-06-21 12:03:26', 'Judaism'),
(9, '2020-06-21 12:03:52', '2020-06-21 12:03:52', 'BahaFaith'),
(10, '2020-06-21 12:04:02', '2020-06-21 12:04:02', 'Other'),
(1, '2020-06-21 11:43:39', '2020-06-21 11:46:09', 'Hinduism'),
(3, '2020-06-21 12:01:22', '2020-06-21 12:01:22', 'Islam'),
(4, '2020-06-21 12:02:23', '2020-06-21 12:02:23', 'Christianity'),
(5, '2020-06-21 12:02:37', '2020-06-21 12:02:37', 'Sikhism'),
(6, '2020-06-21 12:02:46', '2020-06-21 12:02:46', 'Jainism'),
(7, '2020-06-21 12:03:07', '2020-06-21 12:03:07', 'Zoroastrianism'),
(8, '2020-06-21 12:03:26', '2020-06-21 12:03:26', 'Judaism'),
(9, '2020-06-21 12:03:52', '2020-06-21 12:03:52', 'BahaFaith'),
(10, '2020-06-21 12:04:02', '2020-06-21 12:04:02', 'Other'),
(1, '2020-06-21 11:43:39', '2020-06-21 11:46:09', 'Hinduism'),
(3, '2020-06-21 12:01:22', '2020-06-21 12:01:22', 'Islam'),
(4, '2020-06-21 12:02:23', '2020-06-21 12:02:23', 'Christianity'),
(5, '2020-06-21 12:02:37', '2020-06-21 12:02:37', 'Sikhism'),
(6, '2020-06-21 12:02:46', '2020-06-21 12:02:46', 'Jainism'),
(7, '2020-06-21 12:03:07', '2020-06-21 12:03:07', 'Zoroastrianism'),
(8, '2020-06-21 12:03:26', '2020-06-21 12:03:26', 'Judaism'),
(9, '2020-06-21 12:03:52', '2020-06-21 12:03:52', 'BahaFaith'),
(10, '2020-06-21 12:04:02', '2020-06-21 12:04:02', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'super', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(1, 'super', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(1, 'super', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(1, 'super', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(1, 'super', '2020-06-18 03:55:25', '2020-06-18 03:55:25'),
(1, 'super', '2020-06-18 03:55:25', '2020-06-18 03:55:25');

-- --------------------------------------------------------

--
-- Table structure for table `school_courses`
--

CREATE TABLE `school_courses` (
  `id` int(11) NOT NULL,
  `fuculty_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `math` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `biology` int(11) NOT NULL,
  `physics` int(11) NOT NULL,
  `accounting` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_courses`
--

INSERT INTO `school_courses` (`id`, `fuculty_id`, `school_id`, `course_name`, `math`, `english`, `biology`, `physics`, `accounting`, `date_added`) VALUES
(1, 4, 1, 'Software Engineering', 1, 2, 4, 4, 5, '2024-12-09 15:37:28'),
(2, 4, 16, 'Design Concepts', 3, 3, 2, 4, 5, '2024-12-09 06:18:19'),
(3, 4, 16, 'Priciples of Design', 1, 3, 2, 5, 4, '2024-12-09 07:06:54'),
(4, 4, 16, 'Priciples of Design', 1, 3, 2, 5, 4, '2024-12-09 07:07:34'),
(5, 4, 16, 'Principles of Modeling', 1, 3, 3, 3, 4, '2024-12-09 07:09:24'),
(6, 4, 16, 'Web design', 2, 1, 3, 3, 5, '2024-12-09 15:48:51'),
(8, 9, 16, 'Web design', 1, 2, 2, 3, 4, '2024-12-09 16:01:26'),
(9, 10, 16, 'Newest Web design', 3, 2, 2, 3, 3, '2024-12-14 23:36:42'),
(10, 12, 16, 'Web Design', 1, 2, 4, 2, 2, '2024-12-16 17:21:17'),
(11, 16, 16, 'house', 2, 4, 5, 2, 4, '2024-12-18 03:11:35'),
(12, 6, 16, 'houseinn', 1, 1, 3, 4, 2, '2024-12-18 04:12:44'),
(13, 18, 0, 'Grops', 1, 1, 1, 5, 2, '2024-12-18 16:20:37');

-- --------------------------------------------------------

--
-- Table structure for table `school_fuculties`
--

CREATE TABLE `school_fuculties` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `school_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_fuculties`
--

INSERT INTO `school_fuculties` (`id`, `name`, `school_id`, `date_added`) VALUES
(4, 'Teaching Principles', 16, '2024-12-09 05:24:51'),
(6, 'TRaining SOmething', 16, '2024-12-09 15:41:49'),
(9, 'Innovation', 16, '2024-12-09 16:00:54'),
(10, 'Newest', 16, '2024-12-14 23:35:49'),
(11, 'Business', 16, '2024-12-16 17:20:12'),
(12, 'Business IT', 16, '2024-12-16 17:20:25'),
(13, 'Design And Innovation', 16, '2024-12-16 17:20:38'),
(14, 'Dummy Fululty', 17, '2024-12-16 18:46:19'),
(15, 'Dummy Fululty', 18, '2024-12-17 22:32:57'),
(16, 'Drawing', 16, '2024-12-18 03:09:52'),
(17, 'jn', 16, '2024-12-18 04:13:40'),
(18, 'Farming', 0, '2024-12-18 16:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `where_am_i` tinyint(4) NOT NULL DEFAULT '99',
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_verified_at` timestamp NULL DEFAULT NULL,
  `course_record_id` bigint(20) UNSIGNED DEFAULT NULL,
  `course_semester` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `where_am_i`, `mobile`, `mobile_verified_at`, `course_record_id`, `course_semester`) VALUES
(1, 'Super Student', 'super@student.com', NULL, '$2y$10$ycTZv.aYTQTAT.Uo2Znbe.ZLFbM0DYm.8ZisLs3aK7pUYRK1TJOaO', '$2y$10$ycTZv.aYTQTAT.Uo2Znbe.ZLFbM0DYm.8ZisLs3aK7pUYRK1TJOaO', NULL, NULL, 99, '533333', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_admission`
--

CREATE TABLE `student_admission` (
  `id` int(11) NOT NULL,
  `schood_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_admission`
--

INSERT INTO `student_admission` (`id`, `schood_id`, `student_id`, `course_id`, `date_added`) VALUES
(1, 1, 6, 1, '2024-12-06 05:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `student_application`
--

CREATE TABLE `student_application` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `application_email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_grade_math` int(11) NOT NULL,
  `student_grade_english` int(11) NOT NULL,
  `student_grade_biology` int(11) NOT NULL,
  `student_grade_physics` int(11) NOT NULL,
  `student_grade_accounting` int(11) NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_application`
--

INSERT INTO `student_application` (`id`, `school_id`, `course_id`, `student_id`, `application_email`, `student_grade_math`, `student_grade_english`, `student_grade_biology`, `student_grade_physics`, `student_grade_accounting`, `status`, `created_at`, `updated_at`) VALUES
(1, 16, 1, 15, '0', 0, 0, 0, 0, 0, 'Approved', NULL, '2024-12-18 12:04:41'),
(2, 1, 1, 6, 'tso@man.com', 1, 2, 2, 3, 5, 'Pending', '2024-12-07 21:49:36', '2024-12-07 21:49:36'),
(3, 16, 1, 15, 'info@sustech.co.ls', 1, 1, 1, 1, 1, 'Pending', '2024-12-17 01:29:36', '2024-12-17 01:29:36'),
(4, 1, 1, 17, 'info@gmauoij.co.ls', 1, 2, 3, 1, 2, 'Pending', '2024-12-17 02:00:21', '2024-12-17 02:00:21'),
(5, 1, 1, 24, 'chere@gmail.com', 1, 2, 4, 4, 5, 'Pending', '2024-12-18 10:18:09', '2024-12-18 10:18:09'),
(6, 1, 1, 29, 'teboho@gmail.com', 1, 2, 4, 4, 5, 'Pending', '2024-12-18 23:37:17', '2024-12-18 23:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `student_applications`
--

CREATE TABLE `student_applications` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_student`
--

CREATE TABLE `system_student` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `gender` int(11) NOT NULL,
  `dateofbirth` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `contacts` int(11) NOT NULL,
  `math` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `biology` int(11) NOT NULL,
  `physics` int(11) NOT NULL,
  `accounting` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_contacts` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `dateofbirth` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `math` int(11) NOT NULL,
  `english` int(11) NOT NULL,
  `biology` int(11) NOT NULL,
  `physics` int(11) NOT NULL,
  `accounting` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_about`, `user_contacts`, `user_type`, `gender`, `dateofbirth`, `contact`, `math`, `english`, `biology`, `physics`, `accounting`, `remember_token`, `school_id`, `created_at`, `updated_at`) VALUES
(1, 'super User', 'super@user.com', NULL, '$2y$10$ycTZv.aYTQTAT.Uo2Znbe.ZLFbM0DYm.8ZisLs3aK7pUYRK1TJOaO', '', '', 0, 0, '0', '', 0, 0, 0, 0, 0, '$2y$10$ycTZv.aYTQTAT.Uo2Znbe.ZLFbM0DYm.8ZisLs3aK7pUYRK1TJOaO', 0, NULL, NULL),
(2, 'Tsotang Khuto', 'info@tsoman.co.ls', NULL, '$2y$10$PJk7Fc4aQ.5Y3OGI5AIFmumh9ATD26DZu9hXDfB3dDclK/20v/Kwm', '', '', 0, 0, '0', '', 0, 0, 0, 0, 0, NULL, 0, '2024-12-05 20:58:02', '2024-12-05 20:58:02'),
(3, 'Tsotang Khuto', 'info@tsomand.co.ls', NULL, '$2y$10$P5ywiimWP6XxI5BVTjWPwe7ExtnFCqbU8oFWImYbsjH5YQwvEbMkG', '', '', 0, 0, '0', '', 0, 0, 0, 0, 0, NULL, 0, '2024-12-05 21:05:37', '2024-12-05 21:05:37'),
(4, 'Tsotang Khuto', 'tsot@gmail.com', NULL, '$2y$10$rZlAZgjFwFKK2mrGD/8cH.p7Jdo9pjjuI5e6jJ4QaveH0/dl4v6G6', '', '', 0, 0, '0', '', 0, 0, 0, 0, 0, NULL, 0, '2024-12-05 21:14:05', '2024-12-05 21:14:05'),
(5, 'Tsotang Khuto', 'me@tsotman.com', NULL, '$2y$10$KIp1niAzZhVt1Xn9HhTaFOFV.HUZAzPI.AiOgIiEOqrixXofruuD2', '', '', 0, 0, '0', '', 0, 0, 0, 0, 0, NULL, 0, '2024-12-05 21:58:32', '2024-12-05 21:58:32'),
(6, 'Tsotang Khuto', 'tso@man.com', NULL, '$2y$10$B.wMKGutaW2jJCecJNbYG.ZORLhhh6LS.am2DH5joB9eFW7ASF7Iu', 'abut me the user', '57526173', 2, 1, '2024-12-18', '58624563', 1, 1, 1, 4, 5, NULL, 0, '2024-12-05 22:04:37', '2024-12-08 19:46:09'),
(7, 'Tsotang Khuto', 'info@tsotangman.co.ls', NULL, '$2y$10$wux8MrVzrJScGipRQIbdbeJ8T5S97sYO2BpIoN8gEVgFXnJxHRpxC', '', '', 0, 0, '0', '', 0, 0, 0, 0, 0, NULL, 0, '2024-12-07 15:14:00', '2024-12-07 15:14:00'),
(8, 'Thapelo Lemeko', 'info@NUL.com', NULL, '$2y$10$sXds0gH.khfDsleEexbARecCPjqulfLeRu48VXefi0aF9exTVYn7q', ' ', ' ', 3, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 10, '2024-12-08 23:46:53', '2024-12-08 23:46:53'),
(9, 'Tsotang Khuto', 'info@tsoool.co.ls', NULL, '$2y$10$1dIHIzv8ZuIykJRrjA0RDugmCFzli6b4PRpT84p5nNvHkx2dyqva2', 'abut me the user', '57526173', 3, 1, '2024-12-18', '58624563', 1, 1, 1, 4, 5, NULL, 16, '2024-12-08 23:51:52', '2024-12-08 23:51:52'),
(10, 'Tsotang Khuto', 'info@sussdvtedfzh.co.ls', NULL, '$2y$10$YXMmRKe0eMnKnXs3baF0VuXh4f49dUujAzv38XowHMVo2/AJNwVdm', ' ', ' ', 2, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 12, '2024-12-09 00:24:18', '2024-12-09 00:24:18'),
(11, 'Tsotang Khuto', 'info@sussdvtedfzh.co.ls', NULL, '$2y$10$R5G2Jn.qOfb.sUI0tvuPZugKuJcAKzBtY8JsfU0g0bp82kHbmJrjS', ' ', ' ', 2, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 13, '2024-12-09 00:26:20', '2024-12-09 00:26:20'),
(12, 'Tsotang Khuto', 'info@sussdvtedfzh.co.ls', NULL, '$2y$10$wCLwDCFdyTDgy/MYnSk8y..dN5K3zZH4Tig.8EwmU15kZo1Mj/gxW', ' ', ' ', 2, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 14, '2024-12-09 00:27:32', '2024-12-09 00:27:32'),
(13, 'Tsotang Khuto', 'textscho@chool.com', NULL, '$2y$10$.9OcspnGTC6.3CScJMLVKunWAu4WI4MRzUE6q2SwfWQp.Pw2Rwgk6', ' ', ' ', 2, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 15, '2024-12-09 00:28:26', '2024-12-09 00:28:26'),
(14, 'Tsotang Khuto', 'this@tsot.cl.cd', NULL, '$2y$10$dVASTL6A71X7/oZH3Wdd6eI6ggGwEfGAh.5bVNyOcFrk0cZZDNa/O', ' ', ' ', 1, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 16, '2024-12-09 00:32:55', '2024-12-09 00:32:55'),
(15, 'Tsotang Khuto', 'info@sustech.co.ls', NULL, '$2y$10$LHUN/ODPSAxQTVas6LzdJefVB8P5HA578/n5rCh38SRZXn7EgupZW', ' ', ' ', 3, 0, ' 2024-12-18', '0', 1, 2, 4, 4, 5, NULL, 0, NULL, NULL),
(16, 'Thabo Lemeko', 'info@sufsh.co.ls', NULL, '$2y$10$/vp6YaaXlrmZD.oPp0T7WOXyaGtkZvmBu7jDxa8lPaG9c4/0sw2NS', 'abut me the user', '57526173', 2, 2, '2024-12-18', '58624563', 1, 2, 4, 4, 5, NULL, 16, NULL, NULL),
(17, 'teboho jiki', 'info@gmauoij.co.ls', NULL, '$2y$10$hRNYnBqKCr/KutEnn3V/t.6M2/hLCV/twbm5nKHfKH65E/mmFK6d.', 'SCSACWACASCSA', '62339900', 3, 1, '2024-12-07', '58624563', 1, 2, 4, 4, 5, NULL, 0, NULL, NULL),
(18, 'teboho jiki', 'info@sufshgggg.co.ls', NULL, '$2y$10$Y.VFoplmAfl5D4Nz.9k5a.DUHiLkpEV2tnsC8lUSnNIR9LxseSWzW', 'erg4g4rfg4f4', '56778899', 3, 2, '2024-12-26', '0', 1, 2, 4, 4, 5, NULL, 0, NULL, NULL),
(19, 'teboho jiki', 'info@sudfwecewsfsh.co.ls', NULL, '$2y$10$qAUXhecQT.4ysyqMcwLhKePQAiJWryiPh3eWmbrd1mcT1rGBgxW7K', ' ', ' ', 2, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 17, NULL, NULL),
(20, 'Tom', 'tom@gmail.com', NULL, '$2y$10$mCbaH10t3dXygFrkhW0XOOkVPyZh/s7v4NORdz6i3Q9hPshPVVqZm', ' ', ' ', 3, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 0, NULL, NULL),
(21, 'teboho jiki', 'info@sufsh.co.ls', NULL, '$2y$10$.hkoZT4VPy4TfMSC7B2Sweu4V509iZXI87H4KmIiGaXbxBlkhSFxq', ' ', ' ', 2, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 18, NULL, NULL),
(22, 'water', 'vapor@gmail.com', NULL, '$2y$10$Amy/fs8xEM5Us3AeibxMTOax5A111VqYbCAYTMH83oV7AoDWOTuf2', 'I\'m schooling', '59102030', 3, 1, '2000-02-04', '0', 1, 1, 1, 1, 1, NULL, 0, NULL, NULL),
(23, 'Neo', 'Neo@gmail.com', NULL, '$2y$10$MQiukaNAnGFIPeKCJbPlu.IoOQokzSQ9BpQM1i09GDEkqugD0mBf.', ' ', ' ', 3, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 0, NULL, NULL),
(24, 'chere', 'chere@gmail.com', NULL, '$2y$10$RCRk0jRKLfFE9WYIxXxNSOlvXQLFuss/ZrQ2KS6MWnMn3yB9Uo4ly', 'new student', '58172124', 3, 2, '1900-09-08', '0', 1, 2, 4, 4, 5, NULL, 0, NULL, NULL),
(25, 'chere', 'cher@gmail.com', NULL, '$2y$10$YV/5k5IpgQ/iFfNO4HGudOSLP1G3Y/TNi.SHMnzCQYJZV0jGlbn26', ' ', ' ', 3, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 0, NULL, NULL),
(26, 'boy', 'boy@gmail.com', NULL, '$2y$10$Pl2GRuLGZWPLQYXFQaMQkeVkkdu/edbrgCQoLU5Emfrf8hR7poGCC', ' ', ' ', 3, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 0, NULL, NULL),
(27, 'mahofi', 'mahofi@gmail.com', NULL, '$2y$10$YfrIvsmfip2hTxguiCmI6u8ev2XyJeMwQS9jNJ1JWps7fijR8xSxW', ' ', ' ', 3, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 0, NULL, NULL),
(28, 'infosustech', 'info@sustech.co.ls', NULL, '$2y$10$BXLbKKRW0vXXMG.77HNYi.m1yAt248S8B8cuR8sjxMTHeb4kcOUZC', ' ', ' ', 3, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 0, NULL, NULL),
(29, 'Madeba', 'teboho@gmail.com', NULL, '$2y$10$6poofBwP1uzrY/holu4xD.p/GIbrZYeePIscZQQO0ALQjvQAQKsbC', 'new student', '57972790', 3, 2, '2000-09-07', '0', 1, 2, 4, 4, 5, NULL, 0, NULL, NULL),
(30, 'infosustech', 'info@sustech.co.ls', NULL, '$2y$10$PmPScaabhDn1sL6K/dcOsuQttK3LEVOfpwPJ5hFc1LnHQ1.91rrBy', ' ', ' ', 3, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 0, NULL, NULL),
(31, 'infosustech', 'info@sustech.co.ls', NULL, '$2y$10$NBgq1YkcVLdOlVg2EvQrmOLQowWiqoZhSDktG2w2Y.0v0LOOWeFhS', ' ', ' ', 3, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 0, NULL, NULL),
(32, 'Tau', 'tau@gmail.com', NULL, '$2y$10$PviN0PSoMbEmA3Nt1Q3N7uS23Db3FVXDbZ4Tl.Jqtzrs67KwDDYRe', ' ', ' ', 3, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 0, NULL, NULL),
(33, 'info@susthech', 'info@sustech.co.ls', NULL, '$2y$10$ZQafqmdNLOQCtd8lVAMWQ.nDEZ1s2OIMGmgcaoOfRLz7hEu1R0kHO', ' ', ' ', 3, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 0, NULL, NULL),
(34, 'info@sufsh.co.ls', 'info@sufsh.co.ls', NULL, '$2y$10$/61EMKVzFSmK/tuokOHuvuaaV7dfbXIQEIDPHdFg9dIWob37CXxyK', ' ', ' ', 3, 0, ' ', '0', 0, 0, 0, 0, 0, NULL, 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_permission`
--
ALTER TABLE `admin_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_schools`
--
ALTER TABLE `all_schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_record`
--
ALTER TABLE `application_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_body_record`
--
ALTER TABLE `fee_body_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `otp_student_id_foreign` (`student_id`);

--
-- Indexes for table `school_courses`
--
ALTER TABLE `school_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_fuculties`
--
ALTER TABLE `school_fuculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_admission`
--
ALTER TABLE `student_admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_application`
--
ALTER TABLE `student_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_applications`
--
ALTER TABLE `student_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_student`
--
ALTER TABLE `system_student`
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
-- AUTO_INCREMENT for table `admin_permission`
--
ALTER TABLE `admin_permission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `all_schools`
--
ALTER TABLE `all_schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `application_record`
--
ALTER TABLE `application_record`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fee_body_record`
--
ALTER TABLE `fee_body_record`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_courses`
--
ALTER TABLE `school_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `school_fuculties`
--
ALTER TABLE `school_fuculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_admission`
--
ALTER TABLE `student_admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_application`
--
ALTER TABLE `student_application`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `otp`
--
ALTER TABLE `otp`
  ADD CONSTRAINT `otp_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
