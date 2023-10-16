-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 13, 2023 at 05:28 AM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u640337273_myschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmission_enquiry`
--

CREATE TABLE `addmission_enquiry` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `note` longtext DEFAULT NULL,
  `date` longtext DEFAULT NULL,
  `follow_date` varchar(255) DEFAULT NULL,
  `assigned` varchar(255) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `source` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `number_of_child` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addmission_enquiry`
--

INSERT INTO `addmission_enquiry` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `desc`, `note`, `date`, `follow_date`, `assigned`, `reference`, `source`, `class`, `number_of_child`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Ankit Jalan', 'ankit@gmail.com', '8000000001', 'Jaipur', NULL, 'I want some admission related information', '2023-08-27', '2023-08-30', 'Harshita', 'Self', NULL, '10', '-4', 1, '2023-08-28 06:41:29', '2023-08-28 06:43:59'),
(2, NULL, 'Ravi Singh', 'ravi@gmail.com', '8748437839', 'Jaipur', NULL, 'I want some admission related details', '2023-09-09', '2023-09-10', 'Harshita', 'Social Media', NULL, '8', '2', 1, '2023-09-02 05:08:18', '2023-09-02 05:08:18'),
(3, NULL, 'Sakshi Sharma', 'sakshi@gmail.com', '5678903879', 'Jaipur', NULL, 'I want some admission related details', '2023-09-02', '2023-09-10', 'Harshita', 'Select', NULL, '3', '2', 1, '2023-09-02 05:09:00', '2023-09-02 05:10:55'),
(4, NULL, 'Ravindra Singh', 'ravindra@gmail.com', '7856904328', 'Jaipur', NULL, 'I want some admission related details', '2023-09-07', '2023-09-08', 'Harshita', 'Friend', NULL, '6', '3', 1, '2023-09-02 05:11:50', '2023-09-02 05:11:50'),
(5, NULL, 'Shivani Shukla', 'shivani@gmail.com', '7654367654', 'Jaipur', NULL, 'I want some admission related details', '2023-09-09', '2023-09-10', 'Harshita', 'Social Media', NULL, '8', '2', 1, '2023-09-02 05:13:56', '2023-09-02 05:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `add_attend_staff`
--

CREATE TABLE `add_attend_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `staff_id` varchar(255) DEFAULT NULL,
  `attendance` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_attend_staff`
--

INSERT INTO `add_attend_staff` (`id`, `user_id`, `staff_id`, `attendance`, `desc`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, '5', 'Present', NULL, '2023-08-28', 1, '2023-08-28 12:08:59', '2023-08-28 12:08:59'),
(2, NULL, '4', 'Late', NULL, '2023-08-28', 1, '2023-08-28 12:08:59', '2023-08-28 12:08:59'),
(3, NULL, '3', 'Absent', NULL, '2023-08-28', 1, '2023-08-28 12:08:59', '2023-08-28 12:08:59'),
(4, NULL, '5', 'Present', NULL, '2023-08-29', 1, '2023-08-28 12:10:12', '2023-08-28 12:10:12'),
(5, NULL, '4', 'Present', NULL, '2023-08-29', 1, '2023-08-28 12:10:12', '2023-08-28 12:10:12'),
(6, NULL, '3', 'Present', NULL, '2023-08-29', 1, '2023-08-28 12:10:12', '2023-08-28 12:10:12'),
(7, NULL, '5', 'Present', NULL, '2023-08-31', 1, '2023-08-28 12:11:16', '2023-08-28 12:11:16'),
(8, NULL, '4', 'Absent', NULL, '2023-08-31', 1, '2023-08-28 12:11:16', '2023-08-28 12:11:16'),
(9, NULL, '3', 'Present', NULL, '2023-08-31', 1, '2023-08-28 12:11:16', '2023-08-28 12:11:16'),
(10, NULL, '11', 'Present', NULL, '2023-09-02', 1, '2023-09-02 06:36:23', '2023-09-02 06:36:23'),
(11, NULL, '10', 'Late', NULL, '2023-09-02', 1, '2023-09-02 06:36:23', '2023-09-02 06:36:23'),
(12, NULL, '9', 'Present', NULL, '2023-09-02', 1, '2023-09-02 06:36:23', '2023-09-02 06:36:23'),
(13, NULL, '8', 'Late', NULL, '2023-09-02', 1, '2023-09-02 06:36:23', '2023-09-02 06:36:23'),
(14, NULL, '7', 'Present', NULL, '2023-09-02', 1, '2023-09-02 06:36:23', '2023-09-02 06:36:23'),
(15, NULL, '6', 'Present', NULL, '2023-09-02', 1, '2023-09-02 06:36:23', '2023-09-02 06:36:23'),
(16, NULL, '4', 'Present', NULL, '2023-09-02', 1, '2023-09-02 06:36:23', '2023-09-02 06:36:23'),
(17, NULL, '3', 'Present', NULL, '2023-09-02', 1, '2023-09-02 06:36:23', '2023-09-02 06:36:23'),
(18, NULL, '11', 'Present', NULL, '2023-09-03', 1, '2023-09-02 06:37:25', '2023-09-02 06:37:25'),
(19, NULL, '10', 'Present', NULL, '2023-09-03', 1, '2023-09-02 06:37:25', '2023-09-02 06:37:25'),
(20, NULL, '9', 'Present', NULL, '2023-09-03', 1, '2023-09-02 06:37:25', '2023-09-02 06:37:25'),
(21, NULL, '8', 'Late', NULL, '2023-09-03', 1, '2023-09-02 06:37:25', '2023-09-02 06:37:25'),
(22, NULL, '7', 'Late', NULL, '2023-09-03', 1, '2023-09-02 06:37:25', '2023-09-02 06:37:25'),
(23, NULL, '6', 'Present', NULL, '2023-09-03', 1, '2023-09-02 06:37:25', '2023-09-02 06:37:25'),
(24, NULL, '4', 'Present', NULL, '2023-09-03', 1, '2023-09-02 06:37:25', '2023-09-02 06:37:25'),
(25, NULL, '3', 'Present', NULL, '2023-09-03', 1, '2023-09-02 06:37:25', '2023-09-02 06:37:25'),
(26, NULL, '11', 'Present', NULL, '2023-09-04', 1, '2023-09-02 06:38:05', '2023-09-02 06:38:05'),
(27, NULL, '10', 'Present', NULL, '2023-09-04', 1, '2023-09-02 06:38:05', '2023-09-02 06:38:05'),
(28, NULL, '9', 'Present', NULL, '2023-09-04', 1, '2023-09-02 06:38:05', '2023-09-02 06:38:05'),
(29, NULL, '8', 'Present', NULL, '2023-09-04', 1, '2023-09-02 06:38:05', '2023-09-02 06:38:05'),
(30, NULL, '7', 'Present', NULL, '2023-09-04', 1, '2023-09-02 06:38:05', '2023-09-02 06:38:05'),
(31, NULL, '6', 'Present', NULL, '2023-09-04', 1, '2023-09-02 06:38:05', '2023-09-02 06:38:05'),
(32, NULL, '4', 'Present', NULL, '2023-09-04', 1, '2023-09-02 06:38:05', '2023-09-02 06:38:05'),
(33, NULL, '3', 'Present', NULL, '2023-09-04', 1, '2023-09-02 06:38:05', '2023-09-02 06:38:05'),
(34, NULL, '11', 'Half Day', NULL, '2023-09-05', 1, '2023-09-02 06:38:36', '2023-09-02 06:38:36'),
(35, NULL, '10', 'Absent', NULL, '2023-09-05', 1, '2023-09-02 06:38:36', '2023-09-02 06:38:36'),
(36, NULL, '9', 'Late', NULL, '2023-09-05', 1, '2023-09-02 06:38:36', '2023-09-02 06:38:36'),
(37, NULL, '8', 'Present', NULL, '2023-09-05', 1, '2023-09-02 06:38:36', '2023-09-02 06:38:36'),
(38, NULL, '7', 'Late', NULL, '2023-09-05', 1, '2023-09-02 06:38:36', '2023-09-02 06:38:36'),
(39, NULL, '6', 'Absent', NULL, '2023-09-05', 1, '2023-09-02 06:38:36', '2023-09-02 06:38:36'),
(40, NULL, '4', 'Half Day', NULL, '2023-09-05', 1, '2023-09-02 06:38:36', '2023-09-02 06:38:36'),
(41, NULL, '3', 'Absent', NULL, '2023-09-05', 1, '2023-09-02 06:38:36', '2023-09-02 06:38:36'),
(42, NULL, '11', 'Present', NULL, '2023-09-06', 1, '2023-09-02 06:39:32', '2023-09-02 06:39:32'),
(43, NULL, '10', 'Present', NULL, '2023-09-06', 1, '2023-09-02 06:39:32', '2023-09-02 06:39:32'),
(44, NULL, '9', 'Present', NULL, '2023-09-06', 1, '2023-09-02 06:39:32', '2023-09-02 06:39:32'),
(45, NULL, '8', 'Present', NULL, '2023-09-06', 1, '2023-09-02 06:39:32', '2023-09-02 06:39:32'),
(46, NULL, '7', 'Late', NULL, '2023-09-06', 1, '2023-09-02 06:39:32', '2023-09-02 06:39:32'),
(47, NULL, '6', 'Present', NULL, '2023-09-06', 1, '2023-09-02 06:39:32', '2023-09-02 06:39:32'),
(48, NULL, '4', 'Present', NULL, '2023-09-06', 1, '2023-09-02 06:39:32', '2023-09-02 06:39:32'),
(49, NULL, '3', 'Late', NULL, '2023-09-06', 1, '2023-09-02 06:39:32', '2023-09-02 06:39:32'),
(50, NULL, '11', 'Present', NULL, '2023-09-07', 1, '2023-09-02 06:40:05', '2023-09-02 06:40:05'),
(51, NULL, '10', 'Present', NULL, '2023-09-07', 1, '2023-09-02 06:40:05', '2023-09-02 06:40:05'),
(52, NULL, '9', 'Present', NULL, '2023-09-07', 1, '2023-09-02 06:40:05', '2023-09-02 06:40:05'),
(53, NULL, '8', 'Present', NULL, '2023-09-07', 1, '2023-09-02 06:40:05', '2023-09-02 06:40:05'),
(54, NULL, '7', 'Late', NULL, '2023-09-07', 1, '2023-09-02 06:40:05', '2023-09-02 06:40:05'),
(55, NULL, '6', 'Present', NULL, '2023-09-07', 1, '2023-09-02 06:40:05', '2023-09-02 06:40:05'),
(56, NULL, '4', 'Present', NULL, '2023-09-07', 1, '2023-09-02 06:40:05', '2023-09-02 06:40:05'),
(57, NULL, '3', 'Present', NULL, '2023-09-07', 1, '2023-09-02 06:40:05', '2023-09-02 06:40:05'),
(58, NULL, '11', 'Present', NULL, '2023-09-08', 1, '2023-09-02 06:40:49', '2023-09-02 06:40:49'),
(59, NULL, '10', 'Late', NULL, '2023-09-08', 1, '2023-09-02 06:40:49', '2023-09-02 06:40:49'),
(60, NULL, '9', 'Present', NULL, '2023-09-08', 1, '2023-09-02 06:40:49', '2023-09-02 06:40:49'),
(61, NULL, '8', 'Late', NULL, '2023-09-08', 1, '2023-09-02 06:40:49', '2023-09-02 06:40:49'),
(62, NULL, '7', 'Present', NULL, '2023-09-08', 1, '2023-09-02 06:40:49', '2023-09-02 06:40:49'),
(63, NULL, '6', 'Late', NULL, '2023-09-08', 1, '2023-09-02 06:40:49', '2023-09-02 06:40:49'),
(64, NULL, '4', 'Present', NULL, '2023-09-08', 1, '2023-09-02 06:40:49', '2023-09-02 06:40:49'),
(65, NULL, '3', 'Late', NULL, '2023-09-08', 1, '2023-09-02 06:40:49', '2023-09-02 06:40:49'),
(66, NULL, '11', 'Present', NULL, '2023-09-09', 1, '2023-09-02 06:41:16', '2023-09-02 06:41:16'),
(67, NULL, '10', 'Present', NULL, '2023-09-09', 1, '2023-09-02 06:41:16', '2023-09-02 06:41:16'),
(68, NULL, '9', 'Late', NULL, '2023-09-09', 1, '2023-09-02 06:41:16', '2023-09-02 06:41:16'),
(69, NULL, '8', 'Late', NULL, '2023-09-09', 1, '2023-09-02 06:41:16', '2023-09-02 06:41:16'),
(70, NULL, '7', 'Present', NULL, '2023-09-09', 1, '2023-09-02 06:41:16', '2023-09-02 06:41:16'),
(71, NULL, '6', 'Present', NULL, '2023-09-09', 1, '2023-09-02 06:41:16', '2023-09-02 06:41:16'),
(72, NULL, '4', 'Late', NULL, '2023-09-09', 1, '2023-09-02 06:41:16', '2023-09-02 06:41:16'),
(73, NULL, '3', 'Late', NULL, '2023-09-09', 1, '2023-09-02 06:41:16', '2023-09-02 06:41:16'),
(74, NULL, '11', 'Present', NULL, '2023-09-10', 1, '2023-09-02 06:42:04', '2023-09-02 06:42:04'),
(75, NULL, '10', 'Present', NULL, '2023-09-10', 1, '2023-09-02 06:42:04', '2023-09-02 06:42:04'),
(76, NULL, '9', 'Present', NULL, '2023-09-10', 1, '2023-09-02 06:42:04', '2023-09-02 06:42:04'),
(77, NULL, '8', 'Present', NULL, '2023-09-10', 1, '2023-09-02 06:42:04', '2023-09-02 06:42:04'),
(78, NULL, '7', 'Present', NULL, '2023-09-10', 1, '2023-09-02 06:42:04', '2023-09-02 06:42:04'),
(79, NULL, '6', 'Present', NULL, '2023-09-10', 1, '2023-09-02 06:42:04', '2023-09-02 06:42:04'),
(80, NULL, '4', 'Present', NULL, '2023-09-10', 1, '2023-09-02 06:42:04', '2023-09-02 06:42:04'),
(81, NULL, '3', 'Present', NULL, '2023-09-10', 1, '2023-09-02 06:42:04', '2023-09-02 06:42:04'),
(82, NULL, '11', 'Present', NULL, '2023-09-11', 1, '2023-09-02 06:42:42', '2023-09-02 06:42:42'),
(83, NULL, '10', 'Present', NULL, '2023-09-11', 1, '2023-09-02 06:42:42', '2023-09-02 06:42:42'),
(84, NULL, '9', 'Present', NULL, '2023-09-11', 1, '2023-09-02 06:42:42', '2023-09-02 06:42:42'),
(85, NULL, '8', 'Absent', NULL, '2023-09-11', 1, '2023-09-02 06:42:42', '2023-09-02 06:42:42'),
(86, NULL, '7', 'Half Day', NULL, '2023-09-11', 1, '2023-09-02 06:42:42', '2023-09-02 06:42:42'),
(87, NULL, '6', 'Half Day', NULL, '2023-09-11', 1, '2023-09-02 06:42:42', '2023-09-02 06:42:42'),
(88, NULL, '4', 'Absent', NULL, '2023-09-11', 1, '2023-09-02 06:42:42', '2023-09-02 06:42:42'),
(89, NULL, '3', 'Late', NULL, '2023-09-11', 1, '2023-09-02 06:42:42', '2023-09-02 06:42:42'),
(90, NULL, '11', 'Present', NULL, '2023-09-01', 1, '2023-09-02 06:43:11', '2023-09-02 06:43:11'),
(91, NULL, '10', 'Present', NULL, '2023-09-01', 1, '2023-09-02 06:43:11', '2023-09-02 06:43:11'),
(92, NULL, '9', 'Present', NULL, '2023-09-01', 1, '2023-09-02 06:43:11', '2023-09-02 06:43:11'),
(93, NULL, '8', 'Present', NULL, '2023-09-01', 1, '2023-09-02 06:43:11', '2023-09-02 06:43:11'),
(94, NULL, '7', 'Present', NULL, '2023-09-01', 1, '2023-09-02 06:43:11', '2023-09-02 06:43:11'),
(95, NULL, '6', 'Present', NULL, '2023-09-01', 1, '2023-09-02 06:43:11', '2023-09-02 06:43:11'),
(96, NULL, '4', 'Present', NULL, '2023-09-01', 1, '2023-09-02 06:43:11', '2023-09-02 06:43:11'),
(97, NULL, '3', 'Present', NULL, '2023-09-01', 1, '2023-09-02 06:43:11', '2023-09-02 06:43:11'),
(98, NULL, '11', 'Late', NULL, '2023-09-12', 1, '2023-09-02 06:44:25', '2023-09-02 06:44:25'),
(99, NULL, '10', 'Absent', NULL, '2023-09-12', 1, '2023-09-02 06:44:25', '2023-09-02 06:44:25'),
(100, NULL, '9', 'Present', NULL, '2023-09-12', 1, '2023-09-02 06:44:25', '2023-09-02 06:44:25'),
(101, NULL, '8', 'Present', NULL, '2023-09-12', 1, '2023-09-02 06:44:25', '2023-09-02 06:44:25'),
(102, NULL, '7', 'Present', NULL, '2023-09-12', 1, '2023-09-02 06:44:25', '2023-09-02 06:44:25'),
(103, NULL, '6', 'Present', NULL, '2023-09-12', 1, '2023-09-02 06:44:25', '2023-09-02 06:44:25'),
(104, NULL, '4', 'Present', NULL, '2023-09-12', 1, '2023-09-02 06:44:25', '2023-09-02 06:44:25'),
(105, NULL, '3', 'Present', NULL, '2023-09-12', 1, '2023-09-02 06:44:25', '2023-09-02 06:44:25'),
(106, NULL, '11', 'Present', NULL, '2023-09-13', 1, '2023-09-02 06:44:49', '2023-09-02 06:44:49'),
(107, NULL, '10', 'Present', NULL, '2023-09-13', 1, '2023-09-02 06:44:49', '2023-09-02 06:44:49'),
(108, NULL, '9', 'Present', NULL, '2023-09-13', 1, '2023-09-02 06:44:49', '2023-09-02 06:44:49'),
(109, NULL, '8', 'Present', NULL, '2023-09-13', 1, '2023-09-02 06:44:49', '2023-09-02 06:44:49'),
(110, NULL, '7', 'Present', NULL, '2023-09-13', 1, '2023-09-02 06:44:49', '2023-09-02 06:44:49'),
(111, NULL, '6', 'Present', NULL, '2023-09-13', 1, '2023-09-02 06:44:49', '2023-09-02 06:44:49'),
(112, NULL, '4', 'Present', NULL, '2023-09-13', 1, '2023-09-02 06:44:49', '2023-09-02 06:44:49'),
(113, NULL, '3', 'Present', NULL, '2023-09-13', 1, '2023-09-02 06:44:49', '2023-09-02 06:44:49'),
(114, NULL, '11', 'Half Day', NULL, '2023-09-14', 1, '2023-09-02 06:45:32', '2023-09-02 06:45:32'),
(115, NULL, '10', 'Present', NULL, '2023-09-14', 1, '2023-09-02 06:45:32', '2023-09-02 06:45:32'),
(116, NULL, '9', 'Absent', NULL, '2023-09-14', 1, '2023-09-02 06:45:32', '2023-09-02 06:45:32'),
(117, NULL, '8', 'Present', NULL, '2023-09-14', 1, '2023-09-02 06:45:32', '2023-09-02 06:45:32'),
(118, NULL, '7', 'Present', NULL, '2023-09-14', 1, '2023-09-02 06:45:32', '2023-09-02 06:45:32'),
(119, NULL, '6', 'Late', NULL, '2023-09-14', 1, '2023-09-02 06:45:32', '2023-09-02 06:45:32'),
(120, NULL, '4', 'Present', NULL, '2023-09-14', 1, '2023-09-02 06:45:32', '2023-09-02 06:45:32'),
(121, NULL, '3', 'Present', NULL, '2023-09-14', 1, '2023-09-02 06:45:32', '2023-09-02 06:45:32'),
(122, NULL, '11', 'Present', NULL, '2023-09-15', 1, '2023-09-02 06:45:59', '2023-09-02 06:45:59'),
(123, NULL, '10', 'Present', NULL, '2023-09-15', 1, '2023-09-02 06:45:59', '2023-09-02 06:45:59'),
(124, NULL, '9', 'Late', NULL, '2023-09-15', 1, '2023-09-02 06:45:59', '2023-09-02 06:45:59'),
(125, NULL, '8', 'Present', NULL, '2023-09-15', 1, '2023-09-02 06:45:59', '2023-09-02 06:45:59'),
(126, NULL, '7', 'Late', NULL, '2023-09-15', 1, '2023-09-02 06:45:59', '2023-09-02 06:45:59'),
(127, NULL, '6', 'Present', NULL, '2023-09-15', 1, '2023-09-02 06:45:59', '2023-09-02 06:45:59'),
(128, NULL, '4', 'Present', NULL, '2023-09-15', 1, '2023-09-02 06:45:59', '2023-09-02 06:45:59'),
(129, NULL, '3', 'Present', NULL, '2023-09-15', 1, '2023-09-02 06:45:59', '2023-09-02 06:45:59'),
(130, NULL, '11', 'Present', NULL, '2023-09-16', 1, '2023-09-02 06:53:33', '2023-09-02 06:53:33'),
(131, NULL, '10', 'Present', NULL, '2023-09-16', 1, '2023-09-02 06:53:33', '2023-09-02 06:53:33'),
(132, NULL, '9', 'Present', NULL, '2023-09-16', 1, '2023-09-02 06:53:33', '2023-09-02 06:53:33'),
(133, NULL, '8', 'Present', NULL, '2023-09-16', 1, '2023-09-02 06:53:33', '2023-09-02 06:53:33'),
(134, NULL, '7', 'Present', NULL, '2023-09-16', 1, '2023-09-02 06:53:33', '2023-09-02 06:53:33'),
(135, NULL, '6', 'Present', NULL, '2023-09-16', 1, '2023-09-02 06:53:33', '2023-09-02 06:53:33'),
(136, NULL, '4', 'Present', NULL, '2023-09-16', 1, '2023-09-02 06:53:33', '2023-09-02 06:53:33'),
(137, NULL, '3', 'Present', NULL, '2023-09-16', 1, '2023-09-02 06:53:33', '2023-09-02 06:53:33'),
(138, NULL, '11', 'Present', NULL, '2023-09-17', 1, '2023-09-02 06:54:00', '2023-09-02 06:54:00'),
(139, NULL, '10', 'Present', NULL, '2023-09-17', 1, '2023-09-02 06:54:00', '2023-09-02 06:54:00'),
(140, NULL, '9', 'Present', NULL, '2023-09-17', 1, '2023-09-02 06:54:00', '2023-09-02 06:54:00'),
(141, NULL, '8', 'Present', NULL, '2023-09-17', 1, '2023-09-02 06:54:00', '2023-09-02 06:54:00'),
(142, NULL, '7', 'Present', NULL, '2023-09-17', 1, '2023-09-02 06:54:00', '2023-09-02 06:54:00'),
(143, NULL, '6', 'Present', NULL, '2023-09-17', 1, '2023-09-02 06:54:00', '2023-09-02 06:54:00'),
(144, NULL, '4', 'Present', NULL, '2023-09-17', 1, '2023-09-02 06:54:00', '2023-09-02 06:54:00'),
(145, NULL, '3', 'Present', NULL, '2023-09-17', 1, '2023-09-02 06:54:00', '2023-09-02 06:54:00'),
(146, NULL, '11', 'Present', NULL, '2023-09-18', 1, '2023-09-02 06:54:27', '2023-09-02 06:54:27'),
(147, NULL, '10', 'Present', NULL, '2023-09-18', 1, '2023-09-02 06:54:27', '2023-09-02 06:54:27'),
(148, NULL, '9', 'Present', NULL, '2023-09-18', 1, '2023-09-02 06:54:27', '2023-09-02 06:54:27'),
(149, NULL, '8', 'Late', NULL, '2023-09-18', 1, '2023-09-02 06:54:27', '2023-09-02 06:54:27'),
(150, NULL, '7', 'Present', NULL, '2023-09-18', 1, '2023-09-02 06:54:27', '2023-09-02 06:54:27'),
(151, NULL, '6', 'Present', NULL, '2023-09-18', 1, '2023-09-02 06:54:27', '2023-09-02 06:54:27'),
(152, NULL, '4', 'Present', NULL, '2023-09-18', 1, '2023-09-02 06:54:27', '2023-09-02 06:54:27'),
(153, NULL, '3', 'Present', NULL, '2023-09-18', 1, '2023-09-02 06:54:27', '2023-09-02 06:54:27'),
(154, NULL, '11', 'Present', NULL, '2023-09-19', 1, '2023-09-02 06:55:10', '2023-09-02 06:55:10'),
(155, NULL, '10', 'Present', NULL, '2023-09-19', 1, '2023-09-02 06:55:10', '2023-09-02 06:55:10'),
(156, NULL, '9', 'Present', NULL, '2023-09-19', 1, '2023-09-02 06:55:10', '2023-09-02 06:55:10'),
(157, NULL, '8', 'Present', NULL, '2023-09-19', 1, '2023-09-02 06:55:10', '2023-09-02 06:55:10'),
(158, NULL, '7', 'Present', NULL, '2023-09-19', 1, '2023-09-02 06:55:10', '2023-09-02 06:55:10'),
(159, NULL, '6', 'Present', NULL, '2023-09-19', 1, '2023-09-02 06:55:10', '2023-09-02 06:55:10'),
(160, NULL, '4', 'Present', NULL, '2023-09-19', 1, '2023-09-02 06:55:10', '2023-09-02 06:55:10'),
(161, NULL, '3', 'Present', NULL, '2023-09-19', 1, '2023-09-02 06:55:10', '2023-09-02 06:55:10'),
(162, NULL, '11', 'Present', NULL, '2023-09-20', 1, '2023-09-02 06:55:42', '2023-09-02 06:55:42'),
(163, NULL, '10', 'Present', NULL, '2023-09-20', 1, '2023-09-02 06:55:42', '2023-09-02 06:55:42'),
(164, NULL, '9', 'Present', NULL, '2023-09-20', 1, '2023-09-02 06:55:42', '2023-09-02 06:55:42'),
(165, NULL, '8', 'Late', NULL, '2023-09-20', 1, '2023-09-02 06:55:42', '2023-09-02 06:55:42'),
(166, NULL, '7', 'Present', NULL, '2023-09-20', 1, '2023-09-02 06:55:42', '2023-09-02 06:55:42'),
(167, NULL, '6', 'Present', NULL, '2023-09-20', 1, '2023-09-02 06:55:42', '2023-09-02 06:55:42'),
(168, NULL, '4', 'Present', NULL, '2023-09-20', 1, '2023-09-02 06:55:42', '2023-09-02 06:55:42'),
(169, NULL, '3', 'Present', NULL, '2023-09-20', 1, '2023-09-02 06:55:42', '2023-09-02 06:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `add_class`
--

CREATE TABLE `add_class` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_class`
--

INSERT INTO `add_class` (`id`, `class`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, 1, '2023-07-04 06:31:14', '2023-07-04 06:31:14'),
(2, '2', NULL, 1, '2023-07-04 06:31:41', '2023-07-04 06:31:41'),
(3, '3', NULL, 1, '2023-07-05 03:49:44', '2023-07-05 03:49:44'),
(4, '4', NULL, 1, '2023-07-05 03:49:48', '2023-07-05 03:49:48'),
(5, '5', NULL, 1, '2023-07-05 03:49:51', '2023-07-05 03:49:51'),
(6, '6', NULL, 1, '2023-07-05 03:49:55', '2023-07-05 03:49:55'),
(7, '7', NULL, 1, '2023-07-05 03:49:58', '2023-07-05 03:49:58'),
(9, '8', NULL, 1, '2023-07-05 04:32:49', '2023-07-05 04:32:49'),
(10, '9', NULL, 1, '2023-07-05 04:32:53', '2023-07-05 04:32:53'),
(11, '10', NULL, 1, '2023-07-05 05:16:52', '2023-07-05 05:16:52');

-- --------------------------------------------------------

--
-- Table structure for table `add_class_time`
--

CREATE TABLE `add_class_time` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `staff_id` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `subject_group` varchar(255) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  `room_no` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_class_time`
--

INSERT INTO `add_class_time` (`id`, `user_id`, `staff_id`, `class`, `section`, `subject`, `subject_group`, `start_time`, `end_time`, `room_no`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '10', 'Section-A', 'English', 'Compulsory (Class-10)', '10:10', '23:10', '-2', 1, '2023-08-28 11:42:28', '2023-08-28 11:42:28'),
(2, NULL, NULL, '10', 'Section-B', 'English', 'Compulsory', '09:00', '09:40', '1', 1, '2023-09-02 12:11:31', '2023-09-02 12:11:31'),
(4, NULL, NULL, '8', 'Section-A', 'Hindi', 'Compulsory', '09:00', '09:40', '3', 1, '2023-09-02 12:13:42', '2023-09-02 12:13:42'),
(5, NULL, NULL, '9', 'Section-A', 'Maths', 'Compulsory', '09:00', '09:40', '2', 1, '2023-09-02 12:15:26', '2023-09-02 12:15:26'),
(6, NULL, NULL, '7', 'Section-A', 'Science', 'Compulsory', '09:00', '09:40', '4', 1, '2023-09-02 12:17:11', '2023-09-02 12:17:11'),
(7, NULL, NULL, '6', 'Section-A', 'Social Science', 'Compulsory', '09:00', '09:40', '5', 1, '2023-09-02 12:17:46', '2023-09-02 12:17:46'),
(8, NULL, NULL, '5', 'Section-A', 'Snaskrit', 'Compulsory', '09:00', '09:40', '7', 1, '2023-09-02 12:18:32', '2023-09-02 12:18:32'),
(9, NULL, NULL, '4', 'Section-A', 'English', 'Compulsory', '09:00', '09:40', '8', 1, '2023-09-02 12:28:48', '2023-09-02 12:28:48'),
(10, NULL, NULL, '3', 'Section-A', 'Hindi', 'Compulsory', '09:00', '09:40', '9', 1, '2023-09-02 12:30:24', '2023-09-02 12:30:24'),
(11, NULL, NULL, '10', 'Section-B', 'Hindi', 'Compulsory', '09:40', '10:20', '2', 1, '2023-09-05 08:57:52', '2023-09-05 08:57:52'),
(12, NULL, NULL, '10', 'Section-B', 'Maths', 'Compulsory', '10:20', '11:00', '2', 1, '2023-09-05 08:59:21', '2023-09-05 08:59:21'),
(13, NULL, NULL, '10', 'Section-B', 'Science', 'Compulsory', '11:40', '00:20', '2', 1, '2023-09-05 09:00:48', '2023-09-05 09:00:48'),
(14, NULL, NULL, '10', 'Section-B', 'Social Science', 'Compulsory', '12:40', '13:00', '2', 1, '2023-09-05 09:03:02', '2023-09-05 09:03:02');

-- --------------------------------------------------------

--
-- Table structure for table `add_collect_fees`
--

CREATE TABLE `add_collect_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `stu_id` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `fees_group` varchar(255) DEFAULT NULL,
  `fees_type` varchar(255) DEFAULT NULL,
  `payment_mode` varchar(255) DEFAULT NULL,
  `note` longtext DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_collect_fees`
--

INSERT INTO `add_collect_fees` (`id`, `user_id`, `stu_id`, `date`, `fees_group`, `fees_type`, `payment_mode`, `note`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, '2022-23', '1089', '2023-08-29', '10', NULL, 'Cash', NULL, '6000', 1, '2023-08-28 07:39:57', '2023-08-28 07:39:57'),
(2, '2022-23', '1088', '2023-08-30', '10', NULL, 'Cash', NULL, '8000', 1, '2023-08-28 08:00:17', '2023-08-28 08:00:17'),
(3, '2022-23', '1058', '2023-08-29', '8', NULL, 'Cash', NULL, '5000', 1, '2023-08-28 08:01:00', '2023-08-28 08:01:00'),
(4, '2022-23', '1087', '2023-09-01', '10', NULL, 'Cash', NULL, '9000', 1, '2023-08-28 09:01:58', '2023-08-28 09:01:58'),
(5, '2022-23', '985', '2023-08-28', 'Class-1', NULL, 'Cash', NULL, '8000', 1, '2023-08-28 09:04:27', '2023-08-28 09:04:27'),
(6, '2022-23', '1089', '2023-09-02', '10', NULL, 'Cash', NULL, '8000', 1, '2023-09-02 11:05:31', '2023-09-05 07:56:44'),
(7, '2022-23', '1088', '2023-09-02', '10', NULL, 'Cash', NULL, '10000', 1, '2023-09-02 11:06:53', '2023-09-02 11:06:53'),
(8, '2022-23', '1087', '2023-09-02', '10', NULL, 'Cash', NULL, '19000', 1, '2023-09-02 11:07:24', '2023-09-02 11:07:24'),
(9, '2022-23', '1086', '2023-09-02', '10', NULL, 'Cash', NULL, '26000', 1, '2023-09-02 11:08:38', '2023-09-02 11:08:38'),
(10, '2022-23', '1085', '2023-09-02', '10', NULL, 'Cash', NULL, '22000', 1, '2023-09-02 11:09:10', '2023-09-02 11:09:10'),
(11, '2022-23', '1079', '2023-09-02', '10', NULL, 'Cash', NULL, '38000', 1, '2023-09-02 11:10:36', '2023-09-02 11:10:36'),
(12, '2022-23', '1089', '2023-09-05', '10', NULL, 'Cash', NULL, '2000', 1, '2023-09-05 07:56:56', '2023-09-05 07:56:56'),
(13, '2022-23', '1089', '2023-09-12', '10', NULL, 'Cash', NULL, '1500', 1, '2023-09-05 07:57:07', '2023-09-05 07:57:07'),
(14, '2022-23', '1089', '2023-09-05', '10', NULL, 'Cash', NULL, '5400', 1, '2023-09-05 07:57:30', '2023-09-05 07:57:30'),
(15, '2022-23', '1089', '2023-09-19', '10', NULL, 'Cash', NULL, '9500', 1, '2023-09-05 07:58:18', '2023-09-05 07:58:18'),
(16, '2022-23', '1035', '2023-09-08', '6', NULL, 'Cash', NULL, '5000', 1, '2023-09-08 05:58:46', '2023-09-08 05:58:46');

-- --------------------------------------------------------

--
-- Table structure for table `add_department`
--

CREATE TABLE `add_department` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_department`
--

INSERT INTO `add_department` (`id`, `user_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Teaching', 1, '2023-07-04 03:12:13', '2023-08-28 12:06:20'),
(2, NULL, 'Accounts', 1, '2023-08-28 12:06:28', '2023-08-28 12:06:28'),
(3, NULL, 'Sports', 1, '2023-08-28 12:06:32', '2023-08-28 12:06:32'),
(4, NULL, 'Transportation', 1, '2023-08-28 12:06:39', '2023-08-28 12:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `add_exam_group`
--

CREATE TABLE `add_exam_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `exam_type` varchar(255) DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_exam_group`
--

INSERT INTO `add_exam_group` (`id`, `user_id`, `name`, `exam_type`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(3, NULL, 'Yealy Exam', 'Written', '100 marks subjective', 1, '2023-08-28 10:13:37', '2023-08-28 10:13:37'),
(4, NULL, 'Yearly Exam', 'Oral', '50 Marks descriptive exams (Oral)', 1, '2023-08-28 10:14:31', '2023-08-28 10:14:31'),
(6, NULL, 'Half Yealy', 'Written', 'Descriptive Exam', 1, '2023-08-28 10:15:09', '2023-08-28 10:15:09'),
(7, NULL, 'Half Yearly', 'Oral', NULL, 1, '2023-09-02 08:47:05', '2023-09-02 08:47:05'),
(8, NULL, 'Mid Term', 'Written', NULL, 1, '2023-09-02 09:03:47', '2023-09-02 09:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `add_expense`
--

CREATE TABLE `add_expense` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `expense_head` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `invoice_no` longtext DEFAULT NULL,
  `amount` longtext DEFAULT NULL,
  `date` longtext DEFAULT NULL,
  `document` longtext DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_expense`
--

INSERT INTO `add_expense` (`id`, `user_id`, `expense_head`, `name`, `invoice_no`, `amount`, `date`, `document`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Ajay Kumar', 'Music', '67443', '60000', '2023-08-28', NULL, 'Complete instrument fees', 1, '2023-08-28 09:20:33', '2023-08-28 09:20:33'),
(2, NULL, 'Sooraj Singh Khatri', 'Sports Kit', '752334', '350000', '2023-08-28', NULL, 'Complete sports kit', 1, '2023-08-28 09:24:20', '2023-08-28 09:24:20'),
(3, NULL, 'Sooraj Singh Khatri', 'Computer Lab Instruments', '389432', '160000', '2023-08-24', NULL, 'Complete Lab Instruments', 1, '2023-08-28 09:28:17', '2023-08-28 09:28:17'),
(4, NULL, 'Sooraj Singh Khatri', 'Transportation', '76587', '200000', '2023-09-09', NULL, NULL, 1, '2023-09-02 07:58:18', '2023-09-02 07:58:18');

-- --------------------------------------------------------

--
-- Table structure for table `add_income`
--

CREATE TABLE `add_income` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `income_head` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `invoice_no` longtext DEFAULT NULL,
  `amount` longtext DEFAULT NULL,
  `date` longtext DEFAULT NULL,
  `document` longtext DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `add_leave_type`
--

CREATE TABLE `add_leave_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_leave_type`
--

INSERT INTO `add_leave_type` (`id`, `user_id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Sick Leave', 1, '2023-08-28 12:18:02', '2023-08-28 12:18:02'),
(5, NULL, 'Paid Leave', 1, '2023-08-28 12:31:29', '2023-08-28 12:31:29');

-- --------------------------------------------------------

--
-- Table structure for table `add_lesson`
--

CREATE TABLE `add_lesson` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `subject_group` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `lesson` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `add_notice`
--

CREATE TABLE `add_notice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `title` longtext DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `notice_date` varchar(255) DEFAULT NULL,
  `publish_on` varchar(255) DEFAULT NULL,
  `send_to` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_notice`
--

INSERT INTO `add_notice` (`id`, `user_id`, `title`, `desc`, `notice_date`, `publish_on`, `send_to`, `other`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Summer Vacation', '<p>Our summer vacations are going to commence from 1st september</p>\r\n<p>&nbsp;</p>', '2023-08-28', '2023-08-29', '[\"Admin\",\"Teacher\",\"Student\"]', NULL, 1, '2023-08-28 12:39:09', '2023-08-28 12:40:21'),
(2, NULL, 'Yearly Exams', '<p>Hello dear Students ! Your yearly exams are commencing from 10th September 2023&nbsp;</p>\r\n<div class=\"hHq9Z\">\r\n<div data-hveid=\"CBIQAA\">\r\n<div class=\"gyEfO\">\r\n<div class=\"wDYxhc NFQFxe viOShc LKPcQc\" data-md=\"221\" data-hveid=\"CBcQAA\" data-ved=\"2ahUKEwjG_LWD1YuBAxXXNt4KHYMbCz4QnKEBegQIFxAA\">\r\n<div class=\"ZxoDOe yGdMVd UoezFf\">\r\n<div class=\"UFE1qd\">\r\n<div class=\"PyJv1b gsmt PZPZlf qRofMd\" data-attrid=\"title\" data-hveid=\"CBcQAQ\">&nbsp;</div>\r\n<div class=\"EGmpye Mf9fnc\">&nbsp;</div>\r\n<div class=\"oQDTXb\">\r\n<div data-ias=\"false\">\r\n<div class=\"IpDT1d\">\r\n<div class=\"CcNe6e v4Zpbe\" tabindex=\"0\" role=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"GRl5yb a8pxAe\">\r\n<div id=\"JTPWx\" class=\"FJIcp\" role=\"tablist\" data-hveid=\"CBQQAA\"></div>\r\n</div>', '2023-09-02', '2023-09-02', '[\"Admin\",\"Teacher\",\"Student\"]', NULL, 1, '2023-09-02 10:04:47', '2023-09-02 10:04:47');

-- --------------------------------------------------------

--
-- Table structure for table `add_phone_call`
--

CREATE TABLE `add_phone_call` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `follow_date` varchar(255) DEFAULT NULL,
  `call_duration` varchar(255) DEFAULT NULL,
  `note` longtext DEFAULT NULL,
  `call_type` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_phone_call`
--

INSERT INTO `add_phone_call` (`id`, `user_id`, `phone`, `name`, `date`, `desc`, `follow_date`, `call_duration`, `note`, `call_type`, `other`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, '9116611677', 'Sooraj', '2023-08-28', NULL, '2023-08-30', '12:26', 'For basic enquiries', 'Incoming', NULL, 1, '2023-08-28 06:57:14', '2023-08-28 06:57:14'),
(2, NULL, '9087584789', 'Abhishek', '2023-09-02', NULL, '2023-09-03', '11:57', NULL, 'Incoming', NULL, 1, '2023-09-02 05:27:25', '2023-09-02 05:27:25'),
(3, NULL, '9876789089', 'Vikram', '2023-09-10', NULL, '2023-09-02', '10:59', NULL, 'Outgoing', NULL, 1, '2023-09-02 05:29:00', '2023-09-02 05:29:00'),
(4, NULL, '8790876890', 'Mickey Bhai', '2023-09-02', NULL, '2023-09-04', '12:59', NULL, 'Incoming', NULL, 1, '2023-09-02 05:29:39', '2023-09-02 05:29:39'),
(5, NULL, '8768495897', 'Suman Ma\'am', '2023-09-02', NULL, '2023-09-03', '12:08', NULL, 'Incoming', NULL, 1, '2023-09-02 05:38:58', '2023-09-02 05:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `add_promote_student`
--

CREATE TABLE `add_promote_student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `student_id` varchar(255) DEFAULT NULL,
  `current_result` varchar(255) DEFAULT NULL,
  `session_status` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_promote_student`
--

INSERT INTO `add_promote_student` (`id`, `user_id`, `student_id`, `current_result`, `session_status`, `session`, `class`, `section`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, '1058', 'Pass', 'Continue', '2023-2024', '9', 'Section-A', 1, '2023-08-28 12:01:45', '2023-08-28 12:01:45'),
(2, NULL, '1089', 'Pass', 'Continue', '2022-2023', '10', 'Section-A', 1, '2023-09-02 12:52:37', '2023-09-02 12:52:37'),
(3, NULL, '1088', 'Pass', 'Continue', '2022-2023', '9', 'Section-A', 1, '2023-09-05 10:22:00', '2023-09-05 10:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `add_section`
--

CREATE TABLE `add_section` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_section`
--

INSERT INTO `add_section` (`id`, `section`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Section-A', NULL, 1, '2023-07-04 06:31:27', '2023-08-28 11:38:16'),
(2, 'Section-B', NULL, 1, '2023-07-04 06:31:48', '2023-08-28 11:38:08');

-- --------------------------------------------------------

--
-- Table structure for table `add_staff`
--

CREATE TABLE `add_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `staff_id` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `joining_date` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `marital_status` varchar(255) DEFAULT NULL,
  `staff_image` varchar(255) DEFAULT NULL,
  `cadd` longtext DEFAULT NULL,
  `padd` longtext DEFAULT NULL,
  `qualification` longtext DEFAULT NULL,
  `work_exp` longtext DEFAULT NULL,
  `note` longtext DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_staff`
--

INSERT INTO `add_staff` (`id`, `user_id`, `staff_id`, `role`, `designation`, `department`, `firstname`, `lastname`, `father_name`, `mother_name`, `email`, `gender`, `dob`, `joining_date`, `phone`, `contact_no`, `marital_status`, `staff_image`, `cadd`, `padd`, `qualification`, `work_exp`, `note`, `other`, `status`, `created_at`, `updated_at`) VALUES
(3, NULL, 'STF760', 'Teacher', NULL, 'B.sc', 'Ajay', 'Kumar', 'Vijay Kumar', 'Kamla Devi', 'ajaykumar@gmail.com', 'Male', '1990-07-17', '2023-07-17', '9116611645', '9116611645', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-07-17 07:15:54', '2023-07-17 07:15:54'),
(4, NULL, 'STF584', 'English Teacher', NULL, 'B.sc', 'Jatin', 'Shah', 'Patin Shah', 'Satin Shah', 'jatin@gmail.com', 'Male', '2023-08-21', '2023-08-21', '9775768979', '7467636477', 'Single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-08-21 07:22:39', '2023-08-21 07:22:39'),
(5, NULL, NULL, 'English Teacher', NULL, 'Teaching', 'Gautam', 'Singh', 'Mukesh Singh', 'Shushila Devi', 'gautam@gmail.com', 'Male', '2023-08-28', '2023-08-28', '6456456756', '3456767545', 'Single', NULL, 'Jaipur', 'Jaipur', 'Bsc', '2 Years', NULL, NULL, 0, '2023-08-28 12:08:36', '2023-08-28 12:34:12'),
(6, NULL, 'STF375', 'English Teacher', NULL, 'Teaching', 'Abhimanyu', 'Singh', 'Chetan Singh', 'Chetna Devi', 'abhimanyu@gmail.com', 'Male', '2023-09-02', '2023-09-02', '8689589795', '8986069958', 'Married', NULL, 'Jaipur', 'Jaipur', 'M.A (English)', '3+ Years', NULL, NULL, 1, '2023-09-02 06:05:09', '2023-09-02 06:05:09'),
(7, NULL, 'STF794', 'PT Teacher', NULL, 'Sports', 'Abhay', 'Chaudhary', 'Amitabh Chaudhary', 'Aasha Devi', 'abhay@gmail.com', 'Male', '2023-09-02', '2023-09-02', '5678987654', '5877653546', 'Single', NULL, 'Jaipur', 'Jaipur', 'BP.ed', '5 Years', NULL, NULL, 1, '2023-09-02 06:08:01', '2023-09-02 06:08:01'),
(8, NULL, 'STF209', 'English Teacher', NULL, 'Teaching', 'Aditi', 'Khatri', 'Ashok Khatri', 'Anita Khatri', 'aditi@gmail.com', 'Male', '2023-09-02', '2022-09-02', '1987654323', '0876543345', 'Single', NULL, 'Jaipur', 'Jaipur', 'M.A (English)', '1 Year', NULL, NULL, 1, '2023-09-02 06:14:54', '2023-09-02 06:14:54'),
(9, NULL, 'STF957', 'Hindi Teacher', NULL, 'Teaching', 'Divya', 'Rathore', 'Dharam Singh Rathore', 'Anuradha Rathore', 'divya@gmail.com', 'Female', '1999-09-02', '2023-09-01', '7865674839', '8998497637', 'Single', NULL, 'Jaipur', 'Jaipur', 'M.A (Hindi)', '8 Months', NULL, NULL, 1, '2023-09-02 06:24:08', '2023-09-02 06:24:08'),
(10, NULL, 'STF643', 'Accountant', NULL, 'Accounts', 'Dipti', 'Sharma', 'Deen Dayal Sharma', 'Premlata Sharma', 'dipti@gmail.com', 'Female', '1995-05-02', '2023-09-02', '7864839878', '9873456788', 'Married', NULL, 'Jaipur', 'Jaipur', 'M.Com', '3+ Years', NULL, NULL, 1, '2023-09-02 06:27:22', '2023-09-02 06:27:22'),
(11, NULL, 'STF426', 'Math (Teacher)', NULL, 'Teaching', 'Ishaan', 'Gupta', 'Jaidev Gupta', 'Jiya Gupta', 'ishaan@gmail.com', 'Male', '1996-12-01', '2022-05-17', '7847937689', '8748978873', 'Married', NULL, 'Jaipur', 'Jaipur', 'Jaipur', 'Jaipur', NULL, NULL, 1, '2023-09-02 06:35:07', '2023-09-02 06:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `add_subject`
--

CREATE TABLE `add_subject` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `subject_type` varchar(255) DEFAULT NULL,
  `subject_code` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_subject`
--

INSERT INTO `add_subject` (`id`, `user_id`, `name`, `subject_type`, `subject_code`, `other`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Hindi', 'Theory', 'HIN10', NULL, 1, '2023-08-28 10:04:16', '2023-08-28 10:04:16'),
(2, NULL, 'English', 'Theory', 'Eng10', NULL, 1, '2023-08-28 11:17:02', '2023-08-28 11:17:02'),
(3, NULL, 'Maths', 'Theory', 'Mat10', NULL, 1, '2023-08-28 11:17:27', '2023-08-28 11:17:27'),
(4, NULL, 'Science', 'Theory', 'Sci10', NULL, 1, '2023-08-28 11:17:49', '2023-08-28 11:17:49'),
(5, NULL, 'Social Science', 'Theory', 'SST10', NULL, 1, '2023-08-28 11:18:30', '2023-08-28 11:18:30'),
(6, NULL, 'Snaskrit', 'Theory', 'San10', NULL, 1, '2023-08-28 11:31:15', '2023-08-28 11:31:15');

-- --------------------------------------------------------

--
-- Table structure for table `add_teacher_time`
--

CREATE TABLE `add_teacher_time` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `staff_id` varchar(255) DEFAULT NULL,
  `teacher_name` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `end_time` varchar(255) DEFAULT NULL,
  `room_no` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_teacher_time`
--

INSERT INTO `add_teacher_time` (`id`, `user_id`, `staff_id`, `teacher_name`, `class`, `section`, `subject`, `start_time`, `end_time`, `room_no`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Jatin Shah', '10', 'Section-A', 'English', '17:16', '18:16', '-3', 1, '2023-08-28 11:47:56', '2023-08-28 11:47:56'),
(2, NULL, NULL, 'Ishaan Gupta', '10', 'Section-A', 'English', '09:00', '09:40', '1', 1, '2023-09-02 12:31:49', '2023-09-02 12:31:49'),
(3, NULL, NULL, 'Dipti Sharma', '9', 'Section-A', 'Maths', '09:00', '09:40', '2', 1, '2023-09-02 12:34:15', '2023-09-02 12:34:15'),
(4, NULL, NULL, 'Divya Rathore', '8', 'Section-A', 'Maths', '09:00', '09:40', '3', 1, '2023-09-02 12:35:24', '2023-09-02 12:35:24'),
(5, NULL, NULL, 'Aditi Khatri', '7', 'Section-A', 'Science', '09:00', '09:40', '5', 1, '2023-09-02 12:36:39', '2023-09-02 12:36:39'),
(6, NULL, NULL, 'Abhay Chaudhary', '5', 'Section-A', 'English', '09:00', '09:40', '7', 1, '2023-09-02 12:37:22', '2023-09-02 12:37:22'),
(7, NULL, NULL, 'Abhimanyu Singh', '3', 'Section-A', 'Hindi', '09:00', '09:40', '10', 1, '2023-09-02 12:38:14', '2023-09-02 12:38:14'),
(8, NULL, NULL, 'Jatin Shah', '2', 'Section-A', 'Maths', '09:00', '09:40', '11', 1, '2023-09-02 12:39:22', '2023-09-02 12:39:22'),
(9, NULL, NULL, 'Ajay Kumar', '1', 'Section-A', 'Hindi', '09:00', '09:40', '12', 1, '2023-09-02 12:39:57', '2023-09-02 12:39:57'),
(10, NULL, NULL, 'Ishaan Gupta', '10', 'Section-A', 'Hindi', '09:00', '09:40', '2', 1, '2023-09-05 10:12:05', '2023-09-05 10:12:05'),
(11, NULL, NULL, 'Ishaan Gupta', '9', 'Section-A', 'Hindi', '09:40', '10:20', '2', 1, '2023-09-05 10:13:05', '2023-09-05 10:13:05'),
(12, NULL, NULL, 'Ishaan Gupta', '10', 'Section-A', 'Hindi', '11:40', '00:20', '8', 1, '2023-09-05 10:14:37', '2023-09-05 10:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `add_topic`
--

CREATE TABLE `add_topic` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `subject_group` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `lesson` varchar(255) DEFAULT NULL,
  `topic` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `add_visitor`
--

CREATE TABLE `add_visitor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `purpose` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `id_number` varchar(255) DEFAULT NULL,
  `number_person` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `intime` varchar(255) DEFAULT NULL,
  `outtime` varchar(255) DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_visitor`
--

INSERT INTO `add_visitor` (`id`, `user_id`, `purpose`, `name`, `phone`, `id_number`, `number_person`, `date`, `intime`, `outtime`, `desc`, `document`, `other`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'PTM', 'Ajay Kumar', '8786546789', '4532', NULL, '2023-08-29', '12:23', '14:23', 'For PTM', NULL, NULL, 1, '2023-08-28 06:54:04', '2023-08-28 06:54:04'),
(2, NULL, 'PTM', 'Ajay Kumar', '8799959438', '4532', NULL, '2023-09-09', '10:45', '11:45', 'I am here for PTM', NULL, NULL, 1, '2023-09-02 05:15:40', '2023-09-02 05:15:40'),
(3, NULL, 'PTM', 'Ganesh', '8968789058', '876589', NULL, '2023-09-15', '10:48', '11:48', 'For PTM', NULL, NULL, 1, '2023-09-02 05:18:52', '2023-09-02 05:18:52'),
(4, NULL, 'For Admission', 'Shiv Kumar', '9807689808', '8754', NULL, '2023-09-02', '10:53', '11:53', NULL, NULL, NULL, 1, '2023-09-02 05:23:39', '2023-09-02 05:23:39'),
(5, NULL, 'Meeting', 'Ram Singh', '6859430219', '87594', NULL, '2023-09-29', '10:54', '15:55', NULL, NULL, NULL, 1, '2023-09-02 05:25:23', '2023-09-02 05:25:23');

-- --------------------------------------------------------

--
-- Table structure for table `assign_teacher`
--

CREATE TABLE `assign_teacher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `class_teacher` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_teacher`
--

INSERT INTO `assign_teacher` (`id`, `user_id`, `class_teacher`, `class`, `section`, `other`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Jatin Shah', '10', 'Section-A', NULL, 1, '2023-08-28 11:50:39', '2023-08-28 11:50:39'),
(9, NULL, 'Dipti Sharma', '9', 'Section-A', NULL, 1, '2023-09-08 06:04:14', '2023-09-08 06:04:14'),
(10, NULL, 'Divya Rathore', '8', 'Section-A', NULL, 1, '2023-09-08 06:04:26', '2023-09-08 06:04:26'),
(11, NULL, 'Aditi Khatri', '7', 'Section-A', NULL, 1, '2023-09-08 06:04:36', '2023-09-08 06:04:36'),
(12, NULL, 'Abhay Chaudhary', '6', 'Section-A', NULL, 1, '2023-09-08 06:04:49', '2023-09-08 06:04:49'),
(13, NULL, 'Abhimanyu Singh', '5', 'Section-A', NULL, 1, '2023-09-08 06:05:05', '2023-09-08 06:05:05'),
(14, NULL, 'Gautam Singh', '4', 'Section-A', NULL, 1, '2023-09-08 06:05:23', '2023-09-08 06:05:23'),
(15, NULL, 'Jatin Shah', '3', 'Section-A', NULL, 1, '2023-09-08 06:05:36', '2023-09-08 06:05:36'),
(16, NULL, 'Ajay Kumar', '2', 'Section-A', NULL, 1, '2023-09-08 06:05:50', '2023-09-08 06:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `exam_results`
--

CREATE TABLE `exam_results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `add_no` int(11) NOT NULL,
  `session` varchar(255) DEFAULT NULL,
  `exam_group` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `roll_no` int(11) DEFAULT NULL,
  `total_marks` int(11) DEFAULT NULL,
  `rec_marks` int(11) DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `result` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `st_english` int(11) DEFAULT NULL,
  `st_hindi` int(11) DEFAULT NULL,
  `st_math` int(11) DEFAULT NULL,
  `st_science` int(11) DEFAULT NULL,
  `st_social` int(11) DEFAULT NULL,
  `st_sanskrit` int(11) DEFAULT NULL,
  `half_english` int(11) DEFAULT NULL,
  `half_hindi` int(11) DEFAULT NULL,
  `half_math` int(11) DEFAULT NULL,
  `half_science` int(11) DEFAULT NULL,
  `half_social` int(11) DEFAULT NULL,
  `half_sanskrit` int(11) DEFAULT NULL,
  `anul_english` int(11) DEFAULT NULL,
  `anul_hindi` int(11) DEFAULT NULL,
  `anul_math` int(11) DEFAULT NULL,
  `anul_science` int(11) DEFAULT NULL,
  `anul_social` int(11) DEFAULT NULL,
  `anul_sanskrit` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `exam_status` int(11) NOT NULL DEFAULT 1 COMMENT '1=Active,0=Inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_results`
--

INSERT INTO `exam_results` (`id`, `sname`, `add_no`, `session`, `exam_group`, `class`, `section`, `roll_no`, `total_marks`, `rec_marks`, `percent`, `result`, `other`, `st_english`, `st_hindi`, `st_math`, `st_science`, `st_social`, `st_sanskrit`, `half_english`, `half_hindi`, `half_math`, `half_science`, `half_social`, `half_sanskrit`, `anul_english`, `anul_hindi`, `anul_math`, `anul_science`, `anul_social`, `anul_sanskrit`, `status`, `exam_status`, `created_at`, `updated_at`) VALUES
(1, NULL, 158, '2022-2023', 'PCM', '10', 'section-B', 155, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 90, 90, 90, 90, 90, 90, 1, 1, '2023-07-18 06:40:30', '2023-07-18 06:40:30'),
(2, NULL, 100101, '2022-2023', 'PCM', '10', 'section-A', 100101, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 50, 50, 30, 30, 40, 40, 40, 45, 20, 30, 30, 32, 1, 1, '2023-08-28 04:43:53', '2023-08-28 04:43:53'),
(4, NULL, 100090, '2022-2023', 'Yearly Exam', '10', 'section-A', 100090, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 80, 80, 80, 80, 80, 80, NULL, NULL, 89, NULL, NULL, NULL, 1, 1, '2023-08-28 10:34:09', '2023-08-28 10:34:09'),
(5, NULL, 100096, '2022-2023', 'Yearly Exam', '8', 'Section-A', 100051, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 78, 78, 78, 78, 78, 78, 1, 1, '2023-09-02 09:53:47', '2023-09-02 09:53:47'),
(6, NULL, 100085, '2022-2023', 'Yearly Exam', '8', 'Section-B', 100086, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 86, 86, 86, 86, 86, 86, 1, 1, '2023-09-02 09:56:03', '2023-09-02 09:56:03'),
(7, NULL, 100100, '2022-2023', 'Yearly Exam', '8', 'Section-A', 100088, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 78, 78, 78, 78, 67, 76, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-09-02 10:07:08', '2023-09-02 10:07:08'),
(8, NULL, 100099, '2022-2023', 'Yearly Exam', '10', 'Section-A', 100099, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 32, 38, 38, 37, 36, 35, 41, 48, 41, 46, 36, 36, 1, 1, '2023-09-02 10:14:25', '2023-09-02 10:40:40'),
(9, NULL, 100098, '2022-2023', 'Yearly Exam', '10', 'Section-B', 100098, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 32, 46, 48, 40, 41, 42, 45, 46, 47, 48, 49, 49, 1, 1, '2023-09-02 10:31:36', '2023-09-02 10:33:46'),
(10, NULL, 100078, '2022-2023', 'Yearly Exam', '8', 'Section-B', 100078, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 49, 39, 29, 36, 45, 32, 48, 47, 48, 48, 47, 29, 1, 1, '2023-09-02 10:46:10', '2023-09-02 10:47:24'),
(11, NULL, 100076, '2022-2023', 'Yearly Exam', '8', 'Section-A', 100076, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 40, 41, 42, 43, 44, 45, 45, 45, 45, 46, 45, 25, 1, 1, '2023-09-02 10:48:59', '2023-09-02 10:53:14'),
(12, NULL, 100075, '2022-2023', 'Yearly Exam', '8', 'Section-A', 100075, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 43, 41, 32, 50, 50, 49, 50, 45, 40, 35, 30, 35, 1, 1, '2023-09-02 11:01:18', '2023-09-02 11:01:43'),
(13, NULL, 5489745, '2022-2023', 'Yearly Exam', '10', 'Section-A', 5489745, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 50, 45, 40, 32, 47, 40, 42, 45, 49, 39, 40, 41, 1, 1, '2023-09-05 10:03:25', '2023-09-05 10:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `exam_schedule`
--

CREATE TABLE `exam_schedule` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `exam_group` varchar(255) DEFAULT NULL,
  `date_from` varchar(255) DEFAULT NULL,
  `start_time` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `room_no` varchar(255) DEFAULT NULL,
  `max_marks` varchar(255) DEFAULT NULL,
  `min_marks` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_schedule`
--

INSERT INTO `exam_schedule` (`id`, `subject`, `exam_group`, `date_from`, `start_time`, `duration`, `room_no`, `max_marks`, `min_marks`, `other`, `status`, `created_at`, `updated_at`, `class`) VALUES
(2, 'Hindi', 'PCM', '2023-09-02', '10:00', '100', '1', '100', '33', NULL, 1, '2023-08-28 10:10:38', '2023-09-02 09:07:27', '9'),
(3, 'English', 'Yearly Exam', '2023-09-02', '10:00', '180', '1', '100', '33', NULL, 1, '2023-09-02 09:05:01', '2023-09-02 09:05:01', '10'),
(4, 'Maths', 'Yearly Exam', '2023-09-02', '10:00', '180', '1', '100', '33', NULL, 1, '2023-09-02 09:05:59', '2023-09-02 09:05:59', '10'),
(5, 'Science', 'Yearly Exam', '2023-09-02', '10:00', '180', '1', '100', '33', NULL, 1, '2023-09-02 09:06:53', '2023-09-02 09:06:53', '10'),
(6, 'Social Science', 'Yearly Exam', '2023-09-02', '10:00', '180', '1', '100', '33', NULL, 1, '2023-09-02 09:08:20', '2023-09-02 09:08:20', '10'),
(8, 'Snaskrit', 'Yearly Exam', '2023-09-02', '10:00', '180', '1', '100', '33', NULL, 1, '2023-09-02 09:09:14', '2023-09-02 09:09:14', '10'),
(9, 'Hindi', 'Yealy Exam', '2023-09-02', '10:30', '180', '2', '100', '33', NULL, 1, '2023-09-02 09:10:53', '2023-09-02 09:10:53', '9'),
(10, 'English', 'Yearly Exam', '2023-09-02', '10:30', '180', '2', '100', '33', NULL, 1, '2023-09-02 09:11:59', '2023-09-02 09:11:59', '9'),
(11, 'Maths', 'Yearly Exam', '2023-09-02', '10:30', '180', '2', '100', '33', NULL, 1, '2023-09-02 09:12:45', '2023-09-02 09:12:45', '9'),
(12, 'Science', 'Yearly Exam', '2023-09-02', '10:30', '180', '2', '100', '33', NULL, 1, '2023-09-02 09:14:03', '2023-09-02 09:14:03', '9'),
(13, 'Social Science', 'Yearly Exam', '2023-09-02', '10:30', '180', '2', '100', '33', NULL, 1, '2023-09-02 09:14:44', '2023-09-02 09:14:44', '9'),
(14, 'Snaskrit', 'Yearly Exam', '2023-09-02', '10:30', '180', '2', '100', '33', NULL, 1, '2023-09-02 09:17:13', '2023-09-02 09:17:13', '9'),
(15, 'Hindi', 'Yearly Exam', '2023-09-02', '10:00', '180', '3', '100', '33', NULL, 1, '2023-09-02 09:17:45', '2023-09-02 09:18:02', '8'),
(16, 'English', 'Yearly Exam', '2023-09-02', '10:00', '180', '3', '100', '33', NULL, 1, '2023-09-02 09:18:40', '2023-09-02 09:18:40', '8'),
(17, 'Maths', 'Yearly Exam', '2023-09-02', '10:00', '180', '3', '100', '33', NULL, 1, '2023-09-02 09:19:19', '2023-09-02 09:19:19', '8'),
(18, 'Science', 'Yearly Exam', '2023-09-02', '10:00', '180', '3', '100', '33', NULL, 1, '2023-09-02 09:20:55', '2023-09-02 09:22:32', '8'),
(19, 'Social Science', 'Yearly Exam', '2023-09-02', '10:00', '180', '3', '100', '33', NULL, 1, '2023-09-02 09:24:52', '2023-09-02 09:24:52', '8'),
(20, 'Snaskrit', 'Yearly Exam', '2023-09-02', '10:00', '180', '3', '100', '33', NULL, 1, '2023-09-02 09:25:58', '2023-09-08 05:55:55', '8');

-- --------------------------------------------------------

--
-- Table structure for table `expense_head`
--

CREATE TABLE `expense_head` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expense_head`
--

INSERT INTO `expense_head` (`id`, `user_id`, `name`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Ajay Kumar', 'Instrument fees', 1, '2023-08-28 09:17:12', '2023-08-28 09:17:12'),
(2, NULL, 'Sooraj Singh Khatri', 'Sports Kit', 1, '2023-08-28 09:21:25', '2023-08-28 09:21:25'),
(3, NULL, 'Abhi Kumawat', 'Transportation', 1, '2023-09-02 08:49:05', '2023-09-02 08:49:05');

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
-- Table structure for table `fees_discount`
--

CREATE TABLE `fees_discount` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `fees_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fees_discount`
--

INSERT INTO `fees_discount` (`id`, `user_id`, `name`, `discount`, `amount`, `desc`, `fees_type`, `created_at`, `updated_at`) VALUES
(1, NULL, '2022-23', '10', '38000', '[\"Tuition Fess\"]', NULL, '2023-08-28 07:52:21', '2023-08-28 07:52:21'),
(2, NULL, '2022-23', '9', '36000', '[\"Tuition Fess\",\"Computer Fees\"]', NULL, '2023-09-02 11:52:25', '2023-09-02 11:52:25'),
(3, NULL, '2022-23', '8', '34000', '[\"Tuition Fess\",\"Computer Fees\"]', NULL, '2023-09-02 11:52:37', '2023-09-02 11:52:37'),
(4, NULL, '2022-23', '7', '30000', '[\"Tuition Fess\",\"Computer Fees\"]', NULL, '2023-09-02 11:52:55', '2023-09-02 11:52:55'),
(6, NULL, '2022-23', '6', '28000', '[\"Tuition Fess\",\"Computer Fees\"]', NULL, '2023-09-02 11:54:03', '2023-09-02 11:54:03'),
(7, NULL, '2022-23', '5', '26000', '[\"Tuition Fess\",\"Computer Fees\"]', NULL, '2023-09-02 11:54:33', '2023-09-02 11:54:33'),
(8, NULL, '2022-23', '4', '24000', '[\"Tuition Fess\",\"Computer Fees\"]', NULL, '2023-09-02 11:54:48', '2023-09-02 11:54:48'),
(9, NULL, '2022-23', '3', '22000', '[\"Tuition Fess\",\"Computer Fees\"]', NULL, '2023-09-02 11:55:04', '2023-09-02 11:55:04'),
(10, NULL, '2022-23', '2', '20000', '[\"Tuition Fess\",\"Computer Fees\"]', NULL, '2023-09-02 11:55:14', '2023-09-02 11:55:14'),
(11, NULL, '2022-23', '1', '18000', '[\"Tuition Fess\",\"Computer Fees\"]', NULL, '2023-09-02 11:55:23', '2023-09-02 11:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `fees_group`
--

CREATE TABLE `fees_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fees_master`
--

CREATE TABLE `fees_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `group` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `due_date` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `fine_type` varchar(255) DEFAULT NULL,
  `percentage` varchar(255) DEFAULT NULL,
  `fine_amount` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fees_type`
--

CREATE TABLE `fees_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `fess_code` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fees_type`
--

INSERT INTO `fees_type` (`id`, `user_id`, `name`, `fess_code`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Tuition Fess', NULL, NULL, 1, '2023-08-28 07:43:06', '2023-08-28 07:43:06'),
(2, NULL, 'Computer Fees', NULL, NULL, 1, '2023-08-28 07:56:03', '2023-08-28 07:56:13'),
(3, NULL, 'Admission Fees', NULL, NULL, 1, '2023-09-02 11:55:40', '2023-09-02 11:55:40'),
(4, NULL, 'Exam Fees', NULL, NULL, 1, '2023-09-02 11:55:45', '2023-09-02 11:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `front_cms_career_request`
--

CREATE TABLE `front_cms_career_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `apply_for` varchar(255) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_cms_career_request`
--

INSERT INTO `front_cms_career_request` (`id`, `job_id`, `name`, `number`, `email`, `qualification`, `experience`, `apply_for`, `resume`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Sooraj SIngh Khatri', '67348293748297489', 'sooraj11111111111111@gmail.com', 'MSc', '2+ Years', 'English Teacher', '1693548378.png', 1, '2023-09-01 06:06:18', '2023-09-01 06:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `front_cms_contact_request`
--

CREATE TABLE `front_cms_contact_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `msg` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_cms_contact_request`
--

INSERT INTO `front_cms_contact_request` (`id`, `user_id`, `name`, `email`, `number`, `msg`, `status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'fjhvbdfhjvdyuf biuddjy yfjh yieuyj te7yhfbre yt eyku ey yter yikyurej fy i ytht iueyf yrhg ieryf eyj uyehyiktejyhfytkerjhikyuj iueyh ukyujh h yt yth ytihj y ithytkyh', 'jhdfhdfsdghfyschsdhhdhghfddjhtjuyety78346uufygfhhgcsjdghecukejrhghj@gmail.com', '674346347465734684', 'jhdfhdfsdghfyschsdhhdhghfddjhtjuyety78346uufygfhhgcsjdghecukejrhghj@gmail.comfjhvbdfhjvdyuf biuddjy yfjh yieuyj te7yhfbre yt eyku ey yter yikyurej fy i ytht iueyf yrhg ieryf eyj uyehyiktejyhfytkerjhikyuj iueyh ukyujh h yt yth ytihj y ithytkyh', 1, '2023-09-01 06:02:15', '2023-09-01 06:02:15'),
(3, NULL, 'Sooraj Singh Khatri', 'sooraj@gmail.com', '1928777777', 'I want some admission related details', 1, '2023-09-01 06:04:08', '2023-09-01 06:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `front_cms_gallery`
--

CREATE TABLE `front_cms_gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `gallery` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_cms_gallery`
--

INSERT INTO `front_cms_gallery` (`id`, `user_id`, `gallery`, `status`, `created_at`, `updated_at`) VALUES
(3, NULL, '1674549170.jpg', 1, '2023-01-24 03:02:50', '2023-01-24 03:02:50'),
(4, NULL, '1674549175.jpg', 1, '2023-01-24 03:02:55', '2023-01-24 03:02:55'),
(5, NULL, '1674549179.jpg', 1, '2023-01-24 03:02:59', '2023-01-24 03:02:59'),
(6, NULL, '1674549184.jpg', 1, '2023-01-24 03:03:04', '2023-01-24 03:03:04'),
(7, NULL, '1674549189.jpg', 1, '2023-01-24 03:03:09', '2023-01-24 03:03:09'),
(8, NULL, '1674551090.jpg', 1, '2023-01-24 03:34:50', '2023-01-24 03:34:50'),
(9, NULL, '1674551094.jpg', 1, '2023-01-24 03:34:54', '2023-01-24 03:34:54'),
(10, NULL, '1674551098.jpg', 1, '2023-01-24 03:34:58', '2023-01-24 03:34:58'),
(11, NULL, '1674551106.jpg', 1, '2023-01-24 03:35:06', '2023-01-24 03:35:06'),
(12, NULL, '1674551110.jpg', 1, '2023-01-24 03:35:10', '2023-01-24 03:35:10'),
(13, NULL, '1674551114.jpg', 1, '2023-01-24 03:35:14', '2023-01-24 03:35:14'),
(14, NULL, '1674551118.jpg', 1, '2023-01-24 03:35:18', '2023-01-24 03:35:18');

-- --------------------------------------------------------

--
-- Table structure for table `front_cms_openings`
--

CREATE TABLE `front_cms_openings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `post` varchar(255) DEFAULT NULL,
  `vacancies` varchar(255) DEFAULT NULL,
  `work_status` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_cms_openings`
--

INSERT INTO `front_cms_openings` (`id`, `job_id`, `post`, `vacancies`, `work_status`, `experience`, `qualification`, `location`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Math Teacher', '2', 'Experienced', '2+ Years', 'MSc (Math)', 'Jaipur', 1, '2023-09-01 06:08:10', '2023-09-05 06:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `front_cms_openings_request`
--

CREATE TABLE `front_cms_openings_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `front_cms_parents`
--

CREATE TABLE `front_cms_parents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `says` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_cms_parents`
--

INSERT INTO `front_cms_parents` (`id`, `user_id`, `name`, `job`, `image`, `says`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Arvind Kumar', 'Engineer', '1693547771.jfif', 'I would like to say that I am very impressed with the children\'s events and their performances. Thank You for all the effort the teachers have put in with them. The events are very fun, entertaining and educational for them.', 1, '2023-09-01 05:56:11', '2023-09-01 05:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `front_cms_setting`
--

CREATE TABLE `front_cms_setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `school_code` varchar(255) DEFAULT NULL,
  `school_phone` varchar(255) DEFAULT NULL,
  `school_email` varchar(255) DEFAULT NULL,
  `school_address` longtext DEFAULT NULL,
  `open_start_time` varchar(255) DEFAULT NULL,
  `open_end_time` varchar(255) DEFAULT NULL,
  `web_logo` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `copy_by` varchar(255) DEFAULT NULL,
  `copy_by_url` varchar(255) DEFAULT NULL,
  `about` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_cms_setting`
--

INSERT INTO `front_cms_setting` (`id`, `user_id`, `school_name`, `school_code`, `school_phone`, `school_email`, `school_address`, `open_start_time`, `open_end_time`, `web_logo`, `facebook`, `instagram`, `skype`, `google`, `copy_by`, `copy_by_url`, `about`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'kidsAcademy', 'BTS987', '9911661164', 'info@brixcodetechnologies.com', '61/106, Rajatpath, Mansarovar, Jaipur, Rajasthan 302020, IN', '08:00', '14:00', '1674545578.png', 'https://brixcodetechnologies.com/', 'https://brixcodetechnologies.com/', 'https://brixcodetechnologies.com/', 'https://brixcodetechnologies.com/', 'Brixcode Technologies LLP', 'https://www.brixcodetechnologies.com/', 'Distily enable team driven services through extensive is a relatonships platforms with interactive content. Enthusiastically scale effective.', 1, '2023-01-24 01:43:36', '2023-09-01 05:50:09');

-- --------------------------------------------------------

--
-- Table structure for table `front_cms_teacher`
--

CREATE TABLE `front_cms_teacher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `contact` longtext DEFAULT NULL,
  `email` longtext DEFAULT NULL,
  `about` longtext DEFAULT NULL,
  `personal_statement` longtext DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_setting`
--

CREATE TABLE `general_setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `school_name` longtext DEFAULT NULL,
  `school_code` varchar(255) DEFAULT NULL,
  `school_phone` varchar(255) DEFAULT NULL,
  `school_email` varchar(255) DEFAULT NULL,
  `school_address` longtext DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `session_month` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_setting`
--

INSERT INTO `general_setting` (`id`, `school_name`, `school_code`, `school_phone`, `school_email`, `school_address`, `session`, `session_month`, `other`, `status`, `created_at`, `updated_at`) VALUES
(2, 'kidsAcademy', '12354', '9784565315', 'kidsacademy@gmail.com', 'Jaipur', '2022-23', 'August', NULL, 1, '2023-07-05 23:26:00', '2023-09-01 05:47:06');

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE `homework` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `subject_group` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `homework_date` varchar(255) DEFAULT NULL,
  `sub_date` varchar(255) DEFAULT NULL,
  `evalu_date` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homework`
--

INSERT INTO `homework` (`id`, `user_id`, `teacher`, `class`, `section`, `subject_group`, `subject`, `homework_date`, `sub_date`, `evalu_date`, `document`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(2, '1', 'Admin', '10', 'Section-B', 'Compulsory', 'English', '2023-09-05', '2023-09-05', '2023-09-05', '1693904896.png', '<p>Submit your homework by tomorrow.</p>', 1, '2023-09-05 09:08:16', '2023-09-05 09:08:16'),
(3, '1', 'Admin', '10', 'Section-B', 'Compulsory', 'Hindi', '2023-09-05', '2023-09-05', '2023-09-05', '1693905102.png', '<p>Submit you homework by tomorrow</p>', 1, '2023-09-05 09:11:42', '2023-09-05 09:11:42'),
(4, '1', 'Admin', '10', 'Section-B', 'Compulsory', 'Snaskrit', '2023-09-05', '2023-09-05', '2023-09-05', '1693905145.png', '<p>Submit your homework by tomorrow</p>', 1, '2023-09-05 09:12:25', '2023-09-05 09:12:25'),
(5, '1', 'Admin', '10', 'Section-B', 'Compulsory', 'Maths', '2023-09-05', '2023-09-05', '2023-09-05', '1693905365.png', '<p>Submit your homework by tomorrow</p>', 1, '2023-09-05 09:16:05', '2023-09-05 09:16:05'),
(6, '1', 'Admin', '10', 'Section-B', 'Compulsory', 'Social Science', '2023-09-05', '2023-09-05', '2023-09-05', '1693905459.png', '<p>Submit your work by tomorrow</p>', 1, '2023-09-05 09:17:39', '2023-09-05 09:17:39'),
(7, '1', 'Admin', '10', 'Section-B', 'Compulsory', 'Science', '2023-09-05', '2023-09-05', '2023-09-05', '1693905523.png', '<p>Submit your homework by tomorrow</p>', 1, '2023-09-05 09:18:43', '2023-09-05 09:18:43');

-- --------------------------------------------------------

--
-- Table structure for table `income_head`
--

CREATE TABLE `income_head` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `leave_type` varchar(255) DEFAULT NULL,
  `from_date` varchar(255) DEFAULT NULL,
  `todate` varchar(255) DEFAULT NULL,
  `reason` longtext DEFAULT NULL,
  `note` longtext DEFAULT NULL,
  `document` longtext DEFAULT NULL,
  `same` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_request`
--

INSERT INTO `leave_request` (`id`, `user_id`, `role`, `name`, `date`, `leave_type`, `from_date`, `todate`, `reason`, `note`, `document`, `same`, `status`, `created_at`, `updated_at`) VALUES
(1, '1093', 'Teacher', 'Jatin', '2023-09-02', 'Paid Leave', '2023-09-02', '2023-09-14', '652652', NULL, NULL, 'Approved', 1, '2023-09-01 07:38:04', '2023-09-02 07:42:53'),
(2, '1101', 'Teacher', 'Dipti', '2023-09-08', 'Sick Leave', '2023-09-10', '2023-09-12', 'Due yo high fever', NULL, NULL, 'Disapproved', 1, '2023-09-02 07:00:05', '2023-09-02 07:42:43'),
(3, '1101', 'Teacher', 'Dipti', '2023-09-16', 'Paid Leave', '2023-09-17', '2023-09-18', 'Due to urgent work', NULL, NULL, 'Approved', 1, '2023-09-02 07:00:47', '2023-09-02 07:42:32'),
(4, '1100', 'Teacher', 'Divya', '2023-09-02', 'Paid Leave', '2023-09-03', '2023-09-05', 'Urgent work', NULL, NULL, 'Disapproved', 1, '2023-09-02 07:09:08', '2023-09-02 07:42:16'),
(5, '1100', 'Teacher', 'Divya', '2023-09-04', 'Sick Leave', '2023-09-04', '2023-09-11', 'I\'ll be ill', NULL, NULL, 'Approved', 1, '2023-09-02 07:15:36', '2023-09-02 07:42:09'),
(6, '1097', 'Teacher', 'Abhimanyu', '2023-09-09', 'Paid Leave', '2023-09-12', '2023-09-13', 'Urgent work', NULL, NULL, 'Disapproved', 1, '2023-09-02 07:23:52', '2023-09-02 07:42:01'),
(7, '1097', 'Teacher', 'Abhimanyu', '2023-09-06', 'Sick Leave', '2023-09-12', '2023-09-14', 'I\'ll be ill', NULL, NULL, 'Approved', 1, '2023-09-02 07:24:32', '2023-09-02 07:41:50'),
(8, '1099', 'Teacher', 'Aditi', '2023-09-02', 'Paid Leave', '2023-09-04', '2023-09-06', 'Urgent work', NULL, NULL, 'Disapproved', 1, '2023-09-02 07:26:17', '2023-09-02 07:41:40'),
(9, '1099', 'Teacher', 'Aditi', '2023-09-02', 'Sick Leave', '2023-09-06', '2023-09-07', 'I\'ll be ill', NULL, NULL, 'Approved', 1, '2023-09-02 07:26:48', '2023-09-02 07:41:32'),
(10, '1098', 'Teacher', 'Abhay', '2023-09-02', 'Paid Leave', '2023-09-06', '2023-09-14', 'Urgent work', NULL, NULL, 'Disapproved', 1, '2023-09-02 07:31:21', '2023-09-02 07:39:45'),
(11, '1098', 'Teacher', 'Abhay', '2023-09-02', 'Sick Leave', '2023-09-05', '2023-09-07', 'I\'ll be ill', NULL, NULL, 'Approved', 1, '2023-09-02 07:31:49', '2023-09-02 07:39:37'),
(12, '1102', 'Teacher', 'Ishaan', '2023-09-02', 'Paid Leave', '2023-09-05', '2023-09-07', 'Urgent work', NULL, NULL, 'Disapproved', 1, '2023-09-02 07:34:48', '2023-09-02 07:38:50'),
(13, '1102', 'Teacher', 'Ishaan', '2023-09-02', 'Sick Leave', '2023-09-09', '2023-09-11', 'I\'ll be ill', NULL, NULL, 'Approved', 1, '2023-09-02 07:35:09', '2023-09-02 07:37:20'),
(14, '1102', 'Teacher', 'Ishaan', '2023-09-05', 'Sick Leave', '2023-09-05', '2023-09-07', 'I am sick', NULL, '1693909388.png', 'Pending', 1, '2023-09-05 10:23:08', '2023-09-05 10:23:08');

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
(64, '2023_01_06_055328_create_exam_result', 32),
(78, '2023_01_06_055328_create_exam_result2', 45),
(80, '2023_05_05_121003_create_exam_results_table', 46),
(81, '2023_05_05_121003_create_exam_result_table', 47),
(82, '2023_05_05_122919_create_exam_result_table', 48),
(91, '2014_10_12_000000_create_users_table', 49),
(92, '2014_10_12_100000_create_password_resets_table', 49),
(93, '2019_08_19_000000_create_failed_jobs_table', 49),
(94, '2019_12_14_000001_create_personal_access_tokens_table', 49),
(95, '2022_12_23_085110_create_student_admission', 49),
(96, '2022_12_23_112633_create_add_class', 49),
(97, '2022_12_23_114951_create_add_section', 49),
(98, '2022_12_26_083517_create_fees_group', 49),
(99, '2022_12_26_091652_create_fees_type', 49),
(100, '2022_12_26_094844_create_fees_discount', 49),
(101, '2022_12_26_114841_create_fees_master', 49),
(102, '2022_12_26_122612_create_income_head', 49),
(103, '2022_12_27_043054_create_add_income', 49),
(104, '2022_12_27_054143_create_expense_head', 49),
(105, '2022_12_27_061103_create_add_expense', 49),
(106, '2022_12_27_073002_create_add_leave_type', 49),
(107, '2022_12_27_075744_create_add_department', 49),
(108, '2022_12_27_105207_create_leave_request', 49),
(109, '2022_12_27_121555_create_add_staff', 49),
(110, '2022_12_28_065126_create_add_notice', 49),
(111, '2022_12_28_084727_create_upload_content', 49),
(112, '2022_12_28_104352_create_add_subject', 49),
(113, '2022_12_28_112236_create_subject_group', 49),
(114, '2022_12_28_120214_create_assign_teacher', 49),
(115, '2022_12_29_052421_create_add_visitor', 49),
(116, '2022_12_29_063247_create_add_phone_call', 49),
(117, '2022_12_29_071728_create_addmission_enquiry', 49),
(118, '2022_12_29_093107_create_add_lesson', 49),
(119, '2022_12_29_104900_create_add_topic', 49),
(120, '2023_01_02_103650_create_add_exam_group', 49),
(121, '2023_01_02_110953_create_add_collect_fees', 49),
(122, '2023_01_03_074212_create_add_attend_staff', 49),
(123, '2023_01_03_120215_create_add_teacher_time', 49),
(124, '2023_01_04_054237_create_add_class_time', 49),
(125, '2023_01_04_084810_create_add_promote_student', 49),
(126, '2023_01_05_074416_create_student_leave_request', 49),
(127, '2023_01_05_105708_create_exam_schedule', 49),
(128, '2023_01_06_090030_create_general_setting', 49),
(129, '2023_01_06_121420_create_syllabus', 49),
(130, '2023_01_11_090853_create_homework', 49),
(131, '2023_01_12_052938_create_student_attendance', 49),
(132, '2023_01_24_070257_create_front_cms_setting', 49),
(133, '2023_01_24_075435_create_front_cms_gallery', 49),
(134, '2023_01_24_092712_create_front_cms_parents', 49),
(135, '2023_01_24_103841_create_front_cms_teacher', 49),
(136, '2023_01_25_061338_create_front_cms_contact_request', 49),
(137, '2023_01_25_072408_create_front_cms_career_request', 49),
(138, '2023_01_25_085344_create_front_cms_openings', 49),
(139, '2023_01_25_100636_create_front_cms_openings_request', 49),
(140, '2023_05_04_054344_create_report_cards_table', 49),
(141, '2023_05_05_123553_create_exam_results_table', 49),
(142, '2023_05_10_072219_create_school__information_table', 49);

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
-- Table structure for table `report_cards`
--

CREATE TABLE `report_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school__information`
--

CREATE TABLE `school__information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `addmisan_number` varchar(255) DEFAULT NULL,
  `roll_number` varchar(255) DEFAULT NULL,
  `scode` varchar(255) DEFAULT NULL,
  `semail` varchar(255) DEFAULT NULL,
  `logoimg` varchar(255) DEFAULT NULL,
  `background_img` varchar(255) DEFAULT NULL,
  `ssection` varchar(255) DEFAULT NULL,
  `saddress` varchar(255) DEFAULT NULL,
  `smobile` varchar(255) DEFAULT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `status_school` varchar(255) NOT NULL DEFAULT '0' COMMENT '1=Active,0=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school__information`
--

INSERT INTO `school__information` (`id`, `addmisan_number`, `roll_number`, `scode`, `semail`, `logoimg`, `background_img`, `ssection`, `saddress`, `smobile`, `sname`, `status_school`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'BT1001', 'brixcodetechnologies@gmail.com', '1693056699.png', '1693056699.png', '2022-2023', 'Mansarovar Jaipur', '9116611645', 'Brixcode Technologies LLP', '0', '2023-08-26 13:31:39', '2023-08-26 13:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `student_admission`
--

CREATE TABLE `student_admission` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admission_no` varchar(255) DEFAULT NULL,
  `roll_no` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `conform_password` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `caste` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `admission_date` varchar(255) DEFAULT NULL,
  `student_image` varchar(255) DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `stu_address` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `as_on_date` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `father_mobile` varchar(255) DEFAULT NULL,
  `father_occupation` varchar(255) DEFAULT NULL,
  `father_photo` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `mother_phone` varchar(255) DEFAULT NULL,
  `mother_occu` varchar(255) DEFAULT NULL,
  `mother_photo` varchar(255) DEFAULT NULL,
  `guardian` varchar(255) DEFAULT NULL,
  `gur_name` varchar(255) DEFAULT NULL,
  `gur_relation` varchar(255) DEFAULT NULL,
  `gur_email` varchar(255) DEFAULT NULL,
  `gur_photo` varchar(255) DEFAULT NULL,
  `gur_phone` varchar(255) DEFAULT NULL,
  `gur_occu` varchar(255) DEFAULT NULL,
  `gur_address` varchar(255) DEFAULT NULL,
  `bank_no` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `ifsc` varchar(255) DEFAULT NULL,
  `aadhaar` varchar(255) DEFAULT NULL,
  `lin_no` varchar(255) DEFAULT NULL,
  `rte` varchar(255) DEFAULT NULL,
  `pre_school` longtext DEFAULT NULL,
  `notes` longtext DEFAULT NULL,
  `balance` varchar(255) DEFAULT NULL,
  `current_result` varchar(255) DEFAULT NULL,
  `session_status` varchar(255) DEFAULT NULL,
  `session` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `active_status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `random_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_admission`
--

INSERT INTO `student_admission` (`id`, `admission_no`, `roll_no`, `class`, `section`, `first_name`, `last_name`, `password`, `conform_password`, `gender`, `dob`, `category`, `religion`, `mobile_no`, `caste`, `email`, `admission_date`, `student_image`, `blood_group`, `stu_address`, `height`, `weight`, `as_on_date`, `father_name`, `father_mobile`, `father_occupation`, `father_photo`, `mother_name`, `mother_phone`, `mother_occu`, `mother_photo`, `guardian`, `gur_name`, `gur_relation`, `gur_email`, `gur_photo`, `gur_phone`, `gur_occu`, `gur_address`, `bank_no`, `bank_name`, `ifsc`, `aadhaar`, `lin_no`, `rte`, `pre_school`, `notes`, `balance`, `current_result`, `session_status`, `session`, `status`, `active_status`, `created_at`, `updated_at`, `random_id`) VALUES
(955, '1', '1', '10', 'Section-A', 'Mohan', 'Kumawat', '$2y$10$gFV5eM9mNOOSAcXIDTutluw687D5QKxLWQ2CNJhH3e/47NqgavL2e', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1100000777', NULL, 'mohann101@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706050', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:03', '2023-08-07 10:20:03', 'SA2352'),
(956, '2', '2', '10', 'Section-A', 'Rohan', 'Kumawat', '$2y$10$fwNe.WHJW.LbYAD/a89mSOAS0hvfOG32spLf0qQoY/VGixci88sY2', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1200000000', NULL, 'rohan102@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102030405011', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:04', '2023-08-07 10:20:04', 'SA8100'),
(957, '3', '3', '10', 'Section-A', 'John', 'Kumawat', '$2y$10$w7py/ajjqst1epwifrGkVeVTpl0qtu20Gq/FSC.z5IfjOjhyJTjF6', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1300000000', NULL, 'john102@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110000000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:04', '2023-08-07 10:20:04', 'SA1766'),
(958, '4', '4000', '10', 'Section-A', 'Akash ', 'Garg', '$2y$10$iR3qFmSwEMBSS5Bw.dfm2uvtbkVNPdHpoBwoxZE9aAOurQT3Nqnoe', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1400000000', NULL, 'akash102@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111000000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:04', '2023-08-07 10:20:04', 'SA6757'),
(959, '5', '5', '10', 'Section-A', 'Akshay', 'Singh', '$2y$10$EeWSoKPynIRRkVZcsuTRKeGtZdgbeDlZFtHa.Hu9vPxorNrb.LjH2', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1500000000', NULL, 'akshay102@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111100000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:04', '2023-08-07 10:20:04', 'SA7495'),
(960, '6', '6', '10', 'Section-A', 'Ajay', 'Agrawal', '$2y$10$yRovNESIS02Kq0iZ9HqQjeNRxfRAhG1m.vFeVqjH2X4/FcAeVt3EG', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1600000000', NULL, 'ajay102@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111110000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:04', '2023-08-07 10:20:04', 'SA9484'),
(961, '7', '7', '10', 'Section-A', 'Daksh', 'Singh', '$2y$10$qjukQgk3sGjrbhpULfMSBO9uAoHIU//YXUP6szfXxG6jUm0N9EuP6', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1700000000', NULL, 'daksh102@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111111000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:05', '2023-08-07 10:20:05', 'SA5660'),
(962, '8', '8', '10', 'Section-A', 'Vijay', 'Agrawal', '$2y$10$w3e1Ad4N5h4z18NkiTSMdOMkdheQjpvgZSQkaR6Qar2I.6WJTpol2', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1800000000', NULL, 'vijay102@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111111100000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:05', '2023-08-07 10:20:05', 'SA2912'),
(963, '9', '9', '10', 'Section-A', 'Sanjay', 'Gupta', '$2y$10$AfCHROomDEO8hR758h1.v.uRVYqFbaw5dPt3Nc0t61.EcGIA/5jNG', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1900000000', NULL, 'sanjay102@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '101111111000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:05', '2023-08-07 10:20:05', 'SA3911'),
(964, '10', '10', '10', 'Section-A', 'Sumit', 'Saini', '$2y$10$rNpdGtQ.6WG9ZtTXqUyzI.nckQRGUKCWH/8hM.SNC0dvY3F/k1MzS', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1990000000', NULL, 'sumit102@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '987655123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:05', '2023-08-07 10:20:05', 'SA3599'),
(965, '11', '1100', '10', 'Section-A', 'Mohan', 'Kumawat', '$2y$10$BKg1xia0C29m5FlEqwaLgO9/1Z0jp6yW2v/6JHbyogDsaDIWLKSFW', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1102200000', NULL, 'mohan1002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '764829283848', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:05', '2023-08-07 10:20:05', 'SA1984'),
(966, '12', '1200', '10', 'Section-A', 'Rohan', 'Kumawat', '$2y$10$ITaGykwgIyu4hYqHoNbTLecUaZCJdtzAoEh6WICn03uf84kNHiZDe', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1200220000', NULL, 'rohan1002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '748291746472', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:05', '2023-08-07 10:20:05', 'SA5655'),
(967, '13', '1300', '10', 'Section-A', 'John', 'Kumawat', '$2y$10$Fz/pdrghrvs5z/BQcaezoeVV7WzxzVU5/Li8ILUAdlB/kkXPGAnhO', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1300220000', NULL, 'john1002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '274626266666', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:06', '2023-08-07 10:20:06', 'SA3027'),
(968, '14', '1400', '10', 'Section-A', 'Akash ', 'Garg', '$2y$10$H/GEOK0HtbYYP7fHqpSs.e0q/KVY16Wlng5HD17A.sxoArxUzbdOi', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1400220000', NULL, 'akash1002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '311111111111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:06', '2023-08-07 10:20:06', 'SA7167'),
(969, '15', '1500', '10', 'Section-A', 'Akshay', 'Singh', '$2y$10$Uy2xgnpuKYHKDc5r7KdNk.2/RE.X9gwdShDvhu3d2OnV2egrrEPgK', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1500220000', NULL, 'akshay1002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '311111111123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:06', '2023-08-07 10:20:06', 'SA2184'),
(970, '16', '1600', '10', 'Section-B', 'Ajay', 'Agrawal', '$2y$10$ky16FkrC7vPDAtrMOIiVoecIdxX.vkkY/cyIMAVODMtB/WSKo2R..', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1600220000', NULL, 'ajay1002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '611111111111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:06', '2023-08-07 10:20:06', 'SA8149'),
(971, '17', '1700', '10', 'Section-B', 'Daksh', 'Singh', '$2y$10$dEFMc.GdctKovCRDmgYg5eA82o9r5VDwruasF9m5kg27gkb3QX.JW', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1700220000', NULL, 'daksh1002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '622222222222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:06', '2023-08-07 10:20:06', 'SA8868'),
(972, '18', '1800', '10', 'Section-B', 'Vijay', 'Agrawal', '$2y$10$tFPG31bW9kELgmwCHPSx7ugS4u8/gRYvopA7XqRIRB/txIvJ1cCUa', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1800220000', NULL, 'vijay1002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '633333333333', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:06', '2023-08-07 10:20:06', 'SA8775'),
(973, '19', '1900', '10', 'Section-B', 'Sanjay', 'Gupta', '$2y$10$7hBDGdZYTzJRvDHR3yNQOusObMJiTcXxZrqj7ZadyqMsbs0EhxY.6', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1900220000', NULL, 'sanjay1002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '644444444444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:07', '2023-08-07 10:20:07', 'SA8261'),
(974, '20', '2000', '10', 'Section-B', 'Sumit', 'Saini', '$2y$10$VhoQKUExr7qJz5UwDlarweMNvnKUFXsNzJdb1LjLIIlYsEpf9QpkK', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1000220000', NULL, 'sumit1002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '655555555555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:07', '2023-08-07 10:20:07', 'SA1139'),
(975, '21', '2100', '10', 'Section-B', 'Mohan', 'Kumawat', '$2y$10$wjkHMcEyGZMzEgZaVPr6z.tf1NP9IoIL5oBOEcZy80z7nL/7dYK.i', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1210221110', NULL, 'mohan10002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '666666666666', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:07', '2023-08-07 10:20:07', 'SA2569'),
(976, '22', '2200', '10', 'Section-B', 'Rohan', 'Kumawat', '$2y$10$AWPk4MEXmuFDP7j/1S8Y7uT2u6Ce3jJCfoAOH5QOsBqpPPKNuoexi', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1220221111', NULL, 'rohan10002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '677777777777', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:07', '2023-08-07 10:20:07', 'SA7666'),
(977, '23', '2300', '10', 'Section-B', 'John', 'Kumawat', '$2y$10$u2lQ5thda/xasgjenDvxWu3QKx/K4bEk.Nzry8OzxAQ301lDl8.a6', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1220006400', NULL, 'john10002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '688888888888', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:07', '2023-08-07 10:20:07', 'SA5997'),
(978, '24', '2400', '10', 'Section-B', 'Akash ', 'Garg', '$2y$10$WX8yeRayryUxB28X70p1tOEATQCiWdZDr.0bcDECbT2OjMeEMZR8u', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '2220678000', NULL, 'akash10002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '699999999999', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:08', '2023-08-07 10:20:08', 'SA5301'),
(979, '25', '2500', '10', 'Section-B', 'Akshay', 'Singh', '$2y$10$ZbmbOD4FnXCcqYMfzEJCaepCl8CK12SR89BoCmnp4OGlRjlSpV2qa', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '2250654000', NULL, 'akshay10002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '600000000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:08', '2023-08-07 10:20:08', 'SA7046'),
(980, '26', '2600', '10', 'Section-B', 'Ajay', 'Agrawal', '$2y$10$yiuQIFkrw5qZ4b8XhYuX/uaJ0c3GhOeu3Hsi2w8i6OZbhyDprTTiy', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '2260088700', NULL, 'ajay10002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '911111111111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:08', '2023-08-07 10:20:08', 'SA5589'),
(981, '27', '2700', '10', 'Section-B', 'Daksh', 'Singh', '$2y$10$8AB.eQYBz6RknJolxEA6UetXEYcOzQPWY/vA6FErze8eSp0YZVknG', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '2270887000', NULL, 'daksh10002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '922222222222', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:08', '2023-08-07 10:20:08', 'SA4623'),
(982, '28', '2800', '10', 'Section-B', 'Vijay', 'Agrawal', '$2y$10$AOBHcPcRLGYd.2jPsGu/6u6NPzAkEsI6TBHh4VSo4kS4oxknzEdFq', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '2280087000', NULL, 'vijay10002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '933333333333', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:08', '2023-08-07 10:20:08', 'SA9584'),
(983, '29', '2900', '10', 'Section-B', 'Sanjay', 'Gupta', '$2y$10$OF9nljnc5yO/4rrKnYXxj.PJqN99P8J5Qg1CsgCu11rxv/bWt3/bS', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '2290987656', NULL, 'sanjay10002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '944444444444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:08', '2023-08-07 10:20:08', 'SA8998'),
(984, '30', '3000', '10', 'Section-B', 'Sumit', 'Saini', '$2y$10$mUtfhSQhfSJ8zAltnAZChup/Rl.c4sCrjOWJ0QqL03RWeSUVQb472', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '2500223760', NULL, 'sumit10002@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '955555555555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:20:09', '2023-08-07 10:20:09', 'SA6855'),
(985, '10001', '10001', '1', 'Section-A', 'Mohan', 'Kumawat', '$2y$10$MTK1vznM0NN6xCkc.CvxoOsHDDhQ6X4PMbVITvhZ/Y36QIg.B4yLS', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1100000778', NULL, 'mohann201@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706051', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:26:15', '2023-08-07 10:26:15', 'SA7564'),
(986, '10002', '10002', '1', 'Section-A', 'Rohan', 'Kumawat', '$2y$10$4b5WWvlh5o5oUQ.SLo4vIeoBKF2a40Vt/TXfoXyP4SmKama4Pr/tS', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1200000001', NULL, 'rohan202@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102030405012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:26:15', '2023-08-07 10:26:15', 'SA3824'),
(987, '10003', '10003', '1', 'Section-A', 'John', 'Kumawat', '$2y$10$Zk4xJghiF80Cycug9b0dX.P8yXCNTLDpE9IOeg4EDUsFK77gDGaDu', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1300000002', NULL, 'john203@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110000000003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:26:16', '2023-08-07 10:26:16', 'SA2895'),
(988, '10004', '10004', '1', 'Section-A', 'Akash ', 'Garg', '$2y$10$85rjZ8hBkYquuZEN2zuzuehnDGaxrRoNitk00r5Cr2nKCGrY6GzEC', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1400000003', NULL, 'akash204@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111000000004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:26:16', '2023-08-07 10:26:16', 'SA9066'),
(989, '10005', '10005', '1', 'Section-A', 'Akshay', 'Singh', '$2y$10$QKQfTuNDGvc3ikS7oQ5Nbut6Gw.qENPD151K/oajwPicAKbEgjdkS', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1500000004', NULL, 'akshay205@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111100000005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:26:16', '2023-08-07 10:26:16', 'SA7183'),
(990, '10006', '10006', '1', 'Section-B', 'Mohan', 'Kumawat', '$2y$10$6iiY7qWcXFreriEmmo75oOqzNll5Y0ccLFO14ePCRP047GFpz0N.a', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1100000780', NULL, 'mohann301@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706052', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:30:36', '2023-08-07 10:30:36', 'SA4253'),
(991, '10007', '10007', '1', 'Section-B', 'Rohan', 'Kumawat', '$2y$10$4K3WlLbn0UhVgF9tIIXGkOXLLDVdOV4i0LE2taKgUkgasqdZEGF/W', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1200000081', NULL, 'rohan302@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102030405013', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:30:36', '2023-08-07 10:30:36', 'SA7740'),
(992, '10008', '10008', '1', 'Section-B', 'John', 'Kumawat', '$2y$10$PWLQSiF9UdzKJRTlxnBhy.m2f79g8cFfKAXfJ1HrJTZyE77TkRvGy', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1300000082', NULL, 'john303@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110000000004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:30:37', '2023-08-07 10:30:37', 'SA1300'),
(993, '10009', '10009', '1', 'Section-B', 'Akash ', 'Garg', '$2y$10$6BbFZWOs/ME3eI2bVKxaM.eAUJVEoB2614Fi3etpRLqkzTJV28bvS', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1400000083', NULL, 'akash304@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111000000005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:30:37', '2023-08-07 10:30:37', 'SA9397'),
(994, '100010', '100010', '1', 'Section-B', 'Akshay', 'Singh', '$2y$10$8jaj7S/8ePOvr6eS1BNmYujuWBcqXLzOaPfVBxxUCDjnwZnS4hlPW', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1500000084', NULL, 'akshay305@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111100000006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:30:37', '2023-08-07 10:30:37', 'SA1046'),
(995, '100011', '100011', '1', 'Section-A', 'Mohan', 'Kumawat', '$2y$10$Nt.8MFcRw2PS73BPJYawEOwOLfTQ6LJgTjxxWBFVPT7Ym8TCqL6g.', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1100000785', NULL, 'mohann401@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706061', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:34:41', '2023-08-07 10:34:41', 'SA1866'),
(996, '100012', '100012', '2', 'Section-A', 'Rohan', 'Kumawat', '$2y$10$qZo7YMAmoNwug1UNifPsCekIjBRoy6rjYWfWuFKvaPuOpr7dOCmd2', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1200000086', NULL, 'rohan402@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102030405062', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:34:41', '2023-08-07 10:34:41', 'SA2195'),
(997, '100013', '100013', '2', 'Section-A', 'John', 'Kumawat', '$2y$10$ZTWHLpk4D70aV3z/4O4ZOu8u/ZhzYC5.1C6O5wZZvkyr/hYcK1yXy', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1300000087', NULL, 'john403@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110000000063', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:34:41', '2023-08-07 10:34:41', 'SA3676'),
(998, '100014', '100014', '2', 'Section-A', 'Akash ', 'Garg', '$2y$10$QPtCBlUNXTROxBhQQV1Avur8J6vOnndM9EHsEjBJ21w94IjL4QLjG', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1400000088', NULL, 'akash404@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111000000064', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:34:41', '2023-08-07 10:34:41', 'SA8284'),
(999, '100015', '100015', '2', 'Section-A', 'Akshay', 'Singh', '$2y$10$ELDhIlsaTNi4IKJrmHDM2uVt.9HRNZbf0pzcfPJXWurVh.vmv1nWy', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1500000089', NULL, 'akshay405@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111100000065', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:34:41', '2023-08-07 10:34:41', 'SA6780'),
(1000, '100016', '100016', '2', 'Section-B', 'Mohan', 'Kumawat', '$2y$10$4.Fw7y9gYGkkuBGl.D.yS.0UZAul0AqkTfnB4Fg6fhJk62Rya2QbW', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1100000790', NULL, 'mohann501@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706066', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:37:49', '2023-08-07 10:37:49', 'SA2836'),
(1001, '100017', '100017', '2', 'Section-B', 'Rohan', 'Kumawat', '$2y$10$WGRn1asdn.5HryCJwvhgbO89sRXg6l7lhg9Y54fGtBzDqivPooHKO', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1200000091', NULL, 'rohan502@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102030405067', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:37:49', '2023-08-07 10:37:49', 'SA6301'),
(1002, '100018', '100018', '2', 'Section-B', 'John', 'Kumawat', '$2y$10$0y0NMgmvlQu/aQsQ4iah7eXQ.flUn7FGRqvtcS3wqtpUR3AenQxXy', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1300000092', NULL, 'john503@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110000000068', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:37:49', '2023-08-07 10:37:49', 'SA4246'),
(1003, '100019', '100019', '2', 'Section-B', 'Akash ', 'Garg', '$2y$10$iNKBpTxzOyA8wFINnZDreOaem73kgHBpKjcG1F0cq1pvQa3z1lpK.', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1400000093', NULL, 'akash504@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111000000069', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:37:49', '2023-08-07 10:37:49', 'SA4453'),
(1004, '100020', '100020', '2', 'Section-B', 'Akshay', 'Singh', '$2y$10$5o26JIqEFyhsHxwtL5Qc5OpD4zN3RKHtBO82CWJg3JQKyot9F.4Ru', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1500000094', NULL, 'akshay505@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111100000070', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:37:49', '2023-08-07 10:37:49', 'SA1171'),
(1005, '100021', '100021', '2', 'Section-A', 'Mohan', 'Kumawat', '$2y$10$PFo7/N.AepR6lgRA21qmiOpVCv9qDbZg1g90U1soavN1NBXGmY/PO', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1100000795', NULL, 'mohann601@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706071', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:48:55', '2023-08-07 10:48:55', 'SA8122'),
(1006, '100022', '100022', '3', 'Section-A', 'Rohan', 'Kumawat', '$2y$10$T.D/ibnuQ5LSF0oWdg8R1.U.w0IVW0FRh9xXUxY8FVqpHuSnKWu8.', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1200000096', NULL, 'rohan602@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102030405072', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:48:56', '2023-08-07 10:48:56', 'SA3135'),
(1007, '100023', '100023', '3', 'Section-A', 'John', 'Kumawat', '$2y$10$akktRzaU8z49OVEp6/fVvu98ijxQzVQ6IL6Z0UvxGKeVJZv9jqBj6', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1300000097', NULL, 'john603@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110000000073', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:48:56', '2023-08-07 10:48:56', 'SA2980'),
(1008, '100024', '100024', '3', 'Section-A', 'Akash ', 'Garg', '$2y$10$bu/itElAVJRAoze3h50ylOnpsrA7SEf67xko2bP2R.Wly9AfvFsli', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1400000098', NULL, 'akash604@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111000000074', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:48:56', '2023-08-07 10:48:56', 'SA2734'),
(1009, '100025', '100025', '3', 'Section-A', 'Akshay', 'Singh', '$2y$10$MIvpw9685N9VHQbIJo/IY.ofdjb6fbWGe5cQNAXt1pFpYp2yVEE3i', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1500000099', NULL, 'akshay605@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111100000075', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:48:56', '2023-08-07 10:48:56', 'SA1762'),
(1010, '100026', '100026', '3', 'Section-B', 'Mohan', 'Kumawat', '$2y$10$YxbDcucqm2RwPsCHjr7OPu9DZw/WyIl4LSnXA6gCrFc2PnTWdPxVm', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1100000801', NULL, 'mohann701@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706076', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:52:13', '2023-08-07 10:52:13', 'SA1092'),
(1011, '100027', '100027', '3', 'Section-B', 'Rohan', 'Kumawat', '$2y$10$EfMhfAyWXZ0BJUAMNMKwguBUiSxLFE.b1vpZXCBF1cikeneWR7NDu', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1200000802', NULL, 'rohan702@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102030405077', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:52:13', '2023-08-07 10:52:13', 'SA7123'),
(1012, '100028', '100028', '3', 'Section-B', 'John', 'Kumawat', '$2y$10$9YrXpeUMAsH9X8QAkJ8sY.8vYHIaIFVeWGeG7N0i6P5Qtn9PkFfMi', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1300000803', NULL, 'john703@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110000000078', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:52:13', '2023-08-07 10:52:13', 'SA7338'),
(1013, '100029', '100029', '3', 'Section-B', 'Akash ', 'Garg', '$2y$10$JQWTGNomUsejiZdWxhvgN.AIa081ipSVseo9FkMLZASa8FFQ9iJyy', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1400000804', NULL, 'akash704@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111000000079', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:52:13', '2023-08-07 10:52:13', 'SA7110'),
(1014, '100030', '100030', '3', 'Section-B', 'Akshay', 'Singh', '$2y$10$g2nczOBxPiFE5oFsj/gqpefEK2n.K6HrRLAz7EbrvNiF2o4O1c9tG', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1500000805', NULL, 'akshay705@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111100000080', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:52:14', '2023-08-07 10:52:14', 'SA7755'),
(1015, '100031', '100031', '4', 'Section-A', 'Mohan', 'Kumawat', '$2y$10$TMwt0cQ9gsIemQBcZSDa6uBfhztdMl0nQMCVCnlTKRE4eLgBUFXMS', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1100000806', NULL, 'mohann706@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706081', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:56:00', '2023-08-07 10:56:00', 'SA5504'),
(1016, '100032', '100032', '4', 'Section-A', 'Rohan', 'Kumawat', '$2y$10$d2j001UQFD4mSAEomUOkAOLaEad6wHEKluSgpWTuRzO0wgEsP5sqa', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1200000807', NULL, 'rohan707@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102030405082', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:56:00', '2023-08-07 10:56:00', 'SA1611'),
(1017, '100033', '100033', '4', 'Section-A', 'John', 'Kumawat', '$2y$10$JZEAyz0m/RWEOqo8tx59JOQm6KDOqjEEDib1Y86UN1QVLrTbdvHve', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1300000808', NULL, 'john708@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110000000083', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:56:00', '2023-08-07 10:56:00', 'SA1307'),
(1018, '100034', '100034', '4', 'Section-A', 'Akash ', 'Garg', '$2y$10$EZIQxuAEKppdI5hPUWRBoeahzDIO1XmYR4qs.anvdVXrjOQT90tJq', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1400000809', NULL, 'akash709@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111000000084', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:56:00', '2023-08-07 10:56:00', 'SA4739'),
(1019, '100035', '100035', '4', 'Section-A', 'Akshay', 'Singh', '$2y$10$Z7q3FCQgTsZqrx6uky4jPu8zKRsImhw/lWcqvHWi8kTOwzSHD6Mbe', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1500000810', NULL, 'akshay710@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111100000085', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 10:56:01', '2023-08-07 10:56:01', 'SA1543'),
(1020, '100036', '100036', '4', 'Section-B', 'Mohan', 'Kumawat', '$2y$10$JqQU4fo72GDBdnp65J7tcOtt2OkORL23QMjpPZJMIc5fAaJEmPspK', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1100000811', NULL, 'mohann711@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706086', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:00:44', '2023-08-07 11:00:44', 'SA7153'),
(1021, '100037', '100037', '4', 'Section-B', 'Rohan', 'Kumawat', '$2y$10$TL7Z6/dauUQlH099IA2qd.zUtno0CgROSnPzXVc7DhO0evr42IH2O', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1200000812', NULL, 'rohan712@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102030405087', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:00:44', '2023-08-07 11:00:44', 'SA7391'),
(1022, '100038', '100038', '4', 'Section-B', 'John', 'Kumawat', '$2y$10$s2SWIVIQG5ksX4p/o.1fju3651Zo.HOQivgUpWivBvzuVhZ6czj8W', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1300000813', NULL, 'john713@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110000000088', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:00:44', '2023-08-07 11:00:44', 'SA6653'),
(1023, '100039', '100039', '4', 'Section-B', 'Akash ', 'Garg', '$2y$10$8djXCiNkyJ1zxdYEcdMFZee11UaGorwwMZZyNSZbSKq3ub15xlm3e', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1400000814', NULL, 'akash714@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111000000089', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:00:45', '2023-08-07 11:00:45', 'SA9845'),
(1024, '100040', '100040', '4', 'Section-B', 'Akshay', 'Singh', '$2y$10$P/wMneERbSz2YzHbYTdLzemE5kOoOT33vHbsDiOnVW.V0vfIAlDeq', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1500000815', NULL, 'akshay715@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111100000090', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:00:45', '2023-08-07 11:00:45', 'SA7209'),
(1025, '100041', '100041', '5', 'Section-A', 'Mohan', 'Kumawat', '$2y$10$7Y16kK1OLB8HV3Y5KJKkaekMTLq9imb2mlRFeHy0d1B32TNGTbcU6', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1100000816', NULL, 'mohann716@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706091', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:04:06', '2023-08-07 11:04:06', 'SA1929'),
(1026, '100042', '100042', '5', 'Section-A', 'Rohan', 'Kumawat', '$2y$10$cJUmCzQczCrvL9r4NdeSW.dhtR.349Og8AD7m2pgjOGzOTGGXQQUq', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1200000817', NULL, 'rohan717@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102030405092', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:04:06', '2023-08-07 11:04:06', 'SA8164'),
(1027, '100043', '100043', '5', 'Section-A', 'John', 'Kumawat', '$2y$10$ajS1AMZjy0xj6MO3Hftm5O/Ytcyuwzn8BSkalsCUZhCG3db902PHi', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1300000818', NULL, 'john718@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110000000093', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:04:06', '2023-08-07 11:04:06', 'SA2125'),
(1028, '100044', '100044', '5', 'Section-A', 'Akash ', 'Garg', '$2y$10$SZX8i66aOgCx3EFMse55OeeFAPtLrRezVu1PBjU45qtjnVzPvrIp6', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1400000819', NULL, 'akash719@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111000000094', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:04:06', '2023-08-07 11:04:06', 'SA6843'),
(1029, '100045', '100045', '5', 'Section-A', 'Akshay', 'Singh', '$2y$10$P3IZ1FfGLgurdQVqNi8xW.ewOUOawPmdVKWCMW2KkBtWXJiB.gc4e', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1500000820', NULL, 'akshay720@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111100000095', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:04:07', '2023-08-07 11:04:07', 'SA9548'),
(1030, '100046', '100046', '5', 'Section-B', 'Mohan', 'Kumawat', '$2y$10$bkUsv9uziQo.JELrfiJoB.IE0zHaeVPWDAEQieOzboZZ0mubllbGW', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1100000821', NULL, 'mohann721@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706096', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:09:22', '2023-08-07 11:09:22', 'SA4411'),
(1031, '100047', '100047', '5', 'Section-B', 'Rohan', 'Kumawat', '$2y$10$woFqIJCJljJkDbQodj.2XusJ7/cEds8pc3l9d8IVhm20XCC6MlDNy', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1200000822', NULL, 'rohan722@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102030405097', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:09:22', '2023-08-07 11:09:22', 'SA3955'),
(1032, '100048', '100048', '5', 'Section-B', 'John', 'Kumawat', '$2y$10$yGWFxJoHXh7mxqoyvpW.9.OEsknt754jR5veQQHh20a7vUAIw7nYi', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1300000823', NULL, 'john723@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110000000098', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:09:22', '2023-08-07 11:09:22', 'SA4528'),
(1033, '100049', '100049', '5', 'Section-B', 'Akash ', 'Garg', '$2y$10$vuZhEn.w61Ed9ZBXAyIOluINwj6iKbYMQLS7Ss5eJ1P3cSJh77qqy', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1400000824', NULL, 'akash724@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111000000099', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:09:22', '2023-08-07 11:09:22', 'SA2387'),
(1034, '100050', '100050', '5', 'Section-B', 'Akshay', 'Singh', '$2y$10$t0Mc3tFjBRwxScpWjisnO.thISUAgQaH6MUoredOTxFGqfGhEQidK', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1500000825', NULL, 'akshay725@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111100000100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:09:23', '2023-08-07 11:09:23', 'SA1942'),
(1035, '100051', '100051', '6', 'Section-A', 'Mohan', 'Kumawat', '$2y$10$vEfKoDZQ4K8DNuqrcN.7Ke1uWL6pGb0Gk/BE8pkn0duMH7vy6zMZ6', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1100000826', NULL, 'mohann726@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706101', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:14:33', '2023-08-07 11:14:33', 'SA1618'),
(1036, '100052', '100052', '6', 'Section-A', 'Rohan', 'Kumawat', '$2y$10$FezOHSgDmDaG0BfMgU5MvOh/okNRlfWNx4NTVyVjBGCpb.Lkqf8HK', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1200000827', NULL, 'rohan727@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102030405102', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:14:33', '2023-08-07 11:14:33', 'SA1750'),
(1037, '100053', '100053', '6', 'Section-A', 'John', 'Kumawat', '$2y$10$Sw/kGYLXnEY7BA2t0IZWwOUgZvHENngHgG.n3EwD.QBY0h33vEMwi', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1300000827', NULL, 'john728@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110000000103', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:14:33', '2023-08-07 11:14:33', 'SA2374'),
(1038, '100054', '100054', '6', 'Section-A', 'Akash ', 'Garg', '$2y$10$mWb7AtQ49Yfed69cffxsnOFdy.2mIr0Lr09ly1AzXgdCXu8/30znK', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1400000828', NULL, 'akash729@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111000000104', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:14:33', '2023-08-07 11:14:33', 'SA4091'),
(1039, '100055', '100055', '6', 'section-A', 'Akshay', 'Singh', '$2y$10$razoBek6lV6G4U1yT9CFk.ceXqAH0LisIkpRm3zmGTDLLpC1q/MWK', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1500000829', NULL, 'akshay730@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111100000105', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:14:33', '2023-08-07 11:15:01', 'SA4959'),
(1040, '100056', '100056', '6', 'Section-B', 'Mohan', 'Kumawat', '$2y$10$feP6H8pAd5vrRZkfXzq1R.VhP8PWThn1dL2KSKYM9lDbiuEGICYLa', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1100000830', NULL, 'mohann731@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706106', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:18:06', '2023-08-07 11:18:06', 'SA6311'),
(1041, '100057', '100057', '6', 'Section-B', 'Rohan', 'Kumawat', '$2y$10$Yn8l/RpKfiMUvGsCAyjkNu5xsC7jv5xSdgVG3otYCGO.QPXA1c/4S', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1200000831', NULL, 'rohan732@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102030405107', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:18:06', '2023-08-07 11:18:06', 'SA2788'),
(1042, '100058', '100058', '6', 'Section-B', 'John', 'Kumawat', '$2y$10$GtzK0acmqPCdMmpfZsWeFuq0kK1KojGWq0P.BgBtj553ktqlNZ8M2', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1300000832', NULL, 'john733@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110000000108', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:18:06', '2023-08-07 11:18:06', 'SA2388'),
(1043, '100059', '100059', '6', 'Section-B', 'Akash ', 'Garg', '$2y$10$nY.zzoyJrvRQjwkaY8WSfOgN50BZzh/A8n9ZRbykyylGlcbaHkvXy', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1400000833', NULL, 'akash734@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111000000109', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:18:07', '2023-08-07 11:18:07', 'SA6496');
INSERT INTO `student_admission` (`id`, `admission_no`, `roll_no`, `class`, `section`, `first_name`, `last_name`, `password`, `conform_password`, `gender`, `dob`, `category`, `religion`, `mobile_no`, `caste`, `email`, `admission_date`, `student_image`, `blood_group`, `stu_address`, `height`, `weight`, `as_on_date`, `father_name`, `father_mobile`, `father_occupation`, `father_photo`, `mother_name`, `mother_phone`, `mother_occu`, `mother_photo`, `guardian`, `gur_name`, `gur_relation`, `gur_email`, `gur_photo`, `gur_phone`, `gur_occu`, `gur_address`, `bank_no`, `bank_name`, `ifsc`, `aadhaar`, `lin_no`, `rte`, `pre_school`, `notes`, `balance`, `current_result`, `session_status`, `session`, `status`, `active_status`, `created_at`, `updated_at`, `random_id`) VALUES
(1044, '100060', '100060', '6', 'Section-B', 'Akshay', 'Singh', '$2y$10$GDwW3Ebj2BDqUDrdhBoReOVp5BaflFCgecWCkI6x1WGrBeOojl/5a', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1500000834', NULL, 'akshay735@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111100000110', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:18:07', '2023-08-07 11:18:07', 'SA6841'),
(1045, '100061', '100061', '7', 'Section-A', 'Mohan', 'Kumawat', '$2y$10$QX8GKwiKKRYdG90UxwCvwuLAZEupdzfUeLv1CiYuTPfVoe6fhsc1K', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1100000835', NULL, 'mohann736@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706111', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:21:32', '2023-08-07 11:21:32', 'SA2665'),
(1046, '100062', '100062', '7', 'Section-A', 'Rohan', 'Kumawat', '$2y$10$3ls8V6avux6p/XzeNcPBKeXUSRXlH/1DkKQ1QkZAIjjNVZINVTlKy', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1200000836', NULL, 'rohan737@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '102030405112', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:21:32', '2023-08-07 11:21:32', 'SA8802'),
(1047, '100063', '100063', '7', 'Section-A', 'John', 'Kumawat', '$2y$10$ZERifht26/wcAN5ybKgqZOtpzDyQif4j83wHQqkwM1caLZuRtZYwq', '123456', 'Female', '2000-12-08', 'Student', 'Hindu', '1300000837', NULL, 'john738@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '110000000113', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:21:32', '2023-08-07 11:21:32', 'SA1918'),
(1048, '100064', '100064', '7', 'Section-A', 'Akash ', 'Garg', '$2y$10$YHVCKLcia6jy4CL8YshXXeSD6IS55s/7otgbffD8ViFNiNjAH4oAO', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1400000838', NULL, 'akash739@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111000000114', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:21:32', '2023-08-07 11:21:32', 'SA3474'),
(1049, '100065', '100065', '7', 'Section-A', 'Akshay', 'Singh', '$2y$10$sWUzbnpE82f6k3kFOxpw4u3Sxz1ECUQdLQah84sI3flGWX2xbdywO', '123456', 'Male', '2000-12-08', 'Student', 'Hindu', '1500000839', NULL, 'akshay740@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Rajaram sharma', NULL, 'Teacher', NULL, 'Raju Devi', NULL, NULL, NULL, NULL, 'Rajaram sharma', 'Uncle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '111100000115', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 11:21:33', '2023-08-07 11:21:33', 'SA6280'),
(1053, '100067', '100066', '7', 'section-B', 'Mohan', 'Kumawat', '$2y$10$B7ejgmVAx1TpjZXr7fJ/3uSWOI6Y6jWwLhCp/BSDY65XbZYzFpM5m', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857850', NULL, 'mohann742@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706150', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:29:31', '2023-08-07 12:29:31', 'SA4179'),
(1054, '100068', '100067', '7', 'section-B', 'Rohan', 'Kumawat', '$2y$10$zmsa92q8lp2I2ALFZ1mAvehF3enyP1iz/L3dE/h79AD./7ZgfCIVS', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857851', NULL, 'rohan743@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706151', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:29:31', '2023-08-07 12:29:31', 'SA9313'),
(1055, '100069', '100068', '7', 'section-B', 'John', 'Kumawat', '$2y$10$cdff3HcgwWTyD2YOItB7iu7thr4grvHC4Hhc9TRjf6vNSIp7bGogG', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857852', NULL, 'john744@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706152', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:29:31', '2023-08-07 12:29:31', 'SA6693'),
(1056, '100070', '100069', '7', 'section-B', 'Akash ', 'Garg', '$2y$10$KAhq4vfVrrNITZqgpdMaG.WMeFaJ7362qrDI6jKbm6UYnzXnM1i9a', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857853', NULL, 'akash745@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706153', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:29:32', '2023-08-07 12:29:32', 'SA9146'),
(1057, '100071', '100070', '7', 'section-B', 'Akshay', 'Singh', '$2y$10$hhQJfxF6GUrG3RQg8vgD7.a5H37oTuPCGrOLpnMvEosaMWIvVutkG', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857854', NULL, 'akshay746@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706154', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:29:32', '2023-08-07 12:29:32', 'SA5356'),
(1058, '100072', '100072', '9', 'Section-A', 'Mohan', 'Kumawat', '$2y$10$UJj1e8rgC138ASB6w5cseeXv.3giyplJHzCzRDEtx96h1EsaCYvWm', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857855', NULL, 'mohann747@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706155', NULL, NULL, NULL, NULL, NULL, 'Pass', 'Continue', '2023-2024', 1, 1, '2023-08-07 12:33:22', '2023-08-28 12:01:45', 'SA3148'),
(1059, '100073', '100073', '8', 'section-A', 'Rohan', 'Kumawat', '$2y$10$7JCs9gCZjGG37A75sa/fuO3PZzHorKGj1olBMe/AtS0JnPzYTCh6.', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857855', NULL, 'rohan748@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706156', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:33:23', '2023-08-07 12:33:23', 'SA3561'),
(1060, '100074', '100074', '8', 'section-A', 'John', 'Kumawat', '$2y$10$Pc/52JH4UhMyB3BNnAXLTe0z/LiQjyCS5QqkhsCrzPpejaJRy3GH2', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857857', NULL, 'john749@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706157', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:33:23', '2023-08-07 12:33:23', 'SA7991'),
(1061, '100075', '100075', '8', 'section-A', 'Akash ', 'Garg', '$2y$10$ZgprkassQA8muuKs9mbajOn3X4QCKlIlh2H0tvg30n3wBT.NNMpay', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857858', NULL, 'akash750@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706158', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:33:23', '2023-08-07 12:33:23', 'SA4241'),
(1062, '100076', '100076', '8', 'section-A', 'Akshay', 'Singh', '$2y$10$iF6sIghKXTzy6dtZniBMcOJ3x0so5k0Uls/rkhLiKCcwopOe3XO0y', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857859', NULL, 'akshay751@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706159', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:33:23', '2023-08-07 12:33:23', 'SA8141'),
(1063, '100077', '100077', '8', 'section-B', 'Mohan', 'Kumawat', '$2y$10$4NytyZ0bhG.pq2E4CEZDH.wHoZSsea440VlkEEmtb7WuTf2AkfKzq', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857860', NULL, 'mohann752@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706160', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:36:47', '2023-08-07 12:36:47', 'SA7731'),
(1064, '100078', '100078', '8', 'section-B', 'Rohan', 'Kumawat', '$2y$10$9wzbhHtMI/neBgDlWzShq.2Mph.wF6fsMtjr4jf3yUsUzoRCalLWO', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857861', NULL, 'rohan753@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706161', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:36:47', '2023-08-07 12:36:47', 'SA5430'),
(1065, '100079', '100079', '8', 'section-B', 'John', 'Kumawat', '$2y$10$12vlh5cah9tlTnxs3H0ix.YuHZ40qYU3hUajKzdMDsp9EbO2ND9XK', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857862', NULL, 'john754@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706162', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:36:47', '2023-08-07 12:36:47', 'SA4748'),
(1066, '100080', '100080', '8', 'section-B', 'Akash ', 'Garg', '$2y$10$Zmuwn5cK5zbnyTuIetZiRuVZ/rc1aQWx1k50WNLPFF.LnNi/lPLvq', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857863', NULL, 'akash755@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706163', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:36:47', '2023-08-07 12:36:47', 'SA2442'),
(1067, '100081', '100081', '8', 'section-B', 'Akshay', 'Singh', '$2y$10$itMlMJlEQUeQ5c.uI3PXs.IySalbTWB4nx9rgj3on9LZPHcVTJZZO', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857864', NULL, 'akshay755@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706164', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:36:48', '2023-08-07 12:36:48', 'SA8588'),
(1069, '100082', '100082', '9', 'section-A', 'Mohan', 'Kumawat', '$2y$10$XWxvEKNou/vV3e/lduvzu.WjWpN18pb4FuPChPqTGLaIagib6Nicu', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857865', NULL, 'mohann756@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706166', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:41:02', '2023-08-07 12:41:02', 'SA8463'),
(1070, '100083', '100083', '9', 'section-A', 'Rohan', 'Kumawat', '$2y$10$Bz5lHBptCw90HUvRyRMQoeo7t5sfeh203biR4Cl9QxuygC2YU29qS', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857866', NULL, 'rohan757@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706167', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:41:02', '2023-08-07 12:41:02', 'SA6267'),
(1071, '100084', '100084', '9', 'section-A', 'John', 'Kumawat', '$2y$10$RJwEpNYNNIdlgzsGBDWe6..ZUGEZqLUG08Ior.cmXBEHQSI.3jShy', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857867', NULL, 'john758@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706168', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:41:02', '2023-08-07 12:41:02', 'SA2037'),
(1072, '100085', '100085', '9', 'section-A', 'Akash ', 'Garg', '$2y$10$OEqHrFFWVeB8ysf4nM2HA.mgMT9Q.B31yAl7zIk/e1F5UVMqYD8ua', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857868', NULL, 'akash759@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706169', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:41:03', '2023-08-07 12:41:03', 'SA7916'),
(1073, '100086', '100086', '9', 'section-A', 'Akshay', 'Singh', '$2y$10$GZjBEGXfM5b509iJo5GGC.u4qu.867Ygo9KKxTUk117ULD0ccwv4.', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857869', NULL, 'akshay760@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706170', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:41:03', '2023-08-07 12:41:03', 'SA9795'),
(1074, '100087', '100087', '9', 'section-B', 'Mohan', 'Kumawat', '$2y$10$7.G8GWFUHHvKlGX5K0EjwuISMqs1maXs.gKluOOY4EFNEym7IFloq', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857865', NULL, 'mohann761@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706171', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:43:26', '2023-08-07 12:43:26', 'SA7135'),
(1075, '100088', '100088', '9', 'section-B', 'Rohan', 'Kumawat', '$2y$10$TOX3kmfI6Z6UzUBW73HYXeVn6oc5vsOLaClf2s5kuho9mFrtaEdrq', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857866', NULL, 'rohan762@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706172', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:43:26', '2023-08-07 12:43:26', 'SA5002'),
(1076, '100089', '100089', '9', 'section-B', 'John', 'Kumawat', '$2y$10$4vDbWKt.y.z6DHYBpGKFCeagyVcGtjztpFk8uFnqpHPqvRQYhLPTu', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857867', NULL, 'john763@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706173', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:43:26', '2023-08-07 12:43:26', 'SA9085'),
(1077, '100090', '100090', '9', 'section-B', 'Akash ', 'Garg', '$2y$10$qMSrnB/8wyT/C7QOe5sw2eLrzvyzCJMU0Hw/V6JPARXPUv2XGWAMe', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857868', NULL, 'akash764@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706174', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:43:26', '2023-08-07 12:43:26', 'SA9681'),
(1078, '100091', '100091', '9', 'section-B', 'Akshay', 'Singh', '$2y$10$F2eS/SH.cOfNxajSbJLOROfeqitNs2zT74DQnycQ9Im7fHOXZ/COm', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857869', NULL, 'akshay765@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706175', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:43:27', '2023-08-07 12:43:27', 'SA8396'),
(1079, '100092', '100092', '10', 'section-A', 'Mohan', 'Kumawat', '$2y$10$gvCbyacw.zBYOtTKbzDjxumX0L5vl.yEya5EstwZd95WcIK4nFjYy', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857870', NULL, 'mohann766@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706176', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:46:51', '2023-08-07 12:46:51', 'SA5920'),
(1080, '100093', '100093', '10', 'section-A', 'Rohan', 'Kumawat', '$2y$10$N3g82M7Qm5tpR3dgtERx7.zxPzNj6S4N1p5UjBwfAtpDWCUc4dwjW', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857871', NULL, 'rohan767@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706177', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:46:52', '2023-08-07 12:46:52', 'SA9553'),
(1081, '100094', '100094', '10', 'section-A', 'John', 'Kumawat', '$2y$10$E8ztjKikJsHTHBTOktLCA.DkdfRb6VVx5hpkVQ8Jn5E/MkebjPQWi', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857872', NULL, 'john768@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706178', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:46:52', '2023-08-07 12:46:52', 'SA9612'),
(1082, '100095', '100095', '10', 'section-A', 'Akash ', 'Garg', '$2y$10$irVoGp1Vuc1iMfX0D/46aeig0PvpYn4G05CMtKYlkJCtau7I7EgnS', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857873', NULL, 'akash769@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706179', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:46:52', '2023-08-07 12:46:52', 'SA5215'),
(1083, '100096', '100096', '10', 'section-A', 'Akshay', 'Singh', '$2y$10$j3WW2xkMIDsL2yYYHVkr1.E90WrtLrRY.cDCdd3CBkuvId3eM9zvu', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857874', NULL, 'akshay770@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706180', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:46:52', '2023-08-07 12:46:52', 'SA1002'),
(1084, '100097', '100097', '10', 'section-B', 'Mohan', 'Kumawat', '$2y$10$XjIqNpKhSU5ckRkezU9NLu/UOEi9LyQnBVy4EZl2I35l9do7jsNNm', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857875', NULL, 'mohann771@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706181', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2023-08-07 12:49:56', '2023-08-26 13:27:10', 'SA9652'),
(1085, '100098', '100098', '10', 'section-B', 'Rohan', 'Kumawat', '$2y$10$mNzpmBk60GZ/f9QOXPRTbO6UsZ2l0AigK8wb3RYww8D0dmqIWPo4G', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857876', NULL, 'rohan772@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706182', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:49:56', '2023-08-07 12:49:56', 'SA3493'),
(1086, '100099', '100099', '10', 'section-B', 'John', 'Kumawat', '$2y$10$TYqZStZSO2didZGsAYwGCOmu90ZrQ4mSLWiqAxCry44.VYGszr/4y', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857877', NULL, 'john773@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706183', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:49:56', '2023-08-07 12:49:56', 'SA4515'),
(1087, '100100', '100100', '10', 'section-B', 'Akash ', 'Garg', '$2y$10$RkjduqN3I3r.wjoFzXdHd.YJeZc0QYmzdW.bInovfUiM9t.ohhZny', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857878', NULL, 'akash774@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706184', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2023-08-07 12:49:56', '2023-08-07 12:49:56', 'SA7823'),
(1088, '100101', '100101', '9', 'Section-A', 'Akshay', 'Singh', '$2y$10$fXsOa/U4OoJdcArOHh7jUu171uydoAv13hkUir.qN00m/Uh7Pipxq', '123456', 'Male', '2023-08-07', 'Student', 'Hindu', '5874857879', NULL, 'akshay775@gmail.com', '2023-06-16', NULL, NULL, 'Jaipur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '909090706185', NULL, NULL, NULL, NULL, NULL, 'Pass', 'Continue', '2022-2023', 1, 1, '2023-08-07 12:49:56', '2023-09-05 10:22:00', 'SA4217'),
(1089, '5489745', '5489745', '10', 'Section-A', 'Anju', 'Gupta', '$2y$10$PHpa8e7ac2HekIu3TWgBWeQY8agSFgRvOqkjFINAAZd4TXvEuTjXO', '123456', 'Female', '2023-08-20', 'Student', 'Hindu', '0000000001', NULL, 'anju@gmail.com', '2023-08-29', NULL, NULL, 'Jaipur', NULL, NULL, NULL, 'Vinod Singh', NULL, 'Teacher', NULL, 'Diksha Devi', NULL, NULL, NULL, NULL, 'Ramesh kumar', 'Uncle', NULL, NULL, '56434', NULL, 'Jaipur', NULL, NULL, NULL, '111111111111', NULL, NULL, NULL, NULL, NULL, 'Pass', 'Continue', '2022-2023', 1, 1, '2023-08-28 07:11:41', '2023-09-05 07:34:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` varchar(255) DEFAULT NULL,
  `teacher_name` varchar(255) DEFAULT NULL,
  `stu_id` varchar(255) DEFAULT NULL,
  `admission_no` varchar(255) DEFAULT NULL,
  `roll_no` varchar(255) DEFAULT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `attendance` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `note` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_attendance`
--

INSERT INTO `student_attendance` (`id`, `teacher_id`, `teacher_name`, `stu_id`, `admission_no`, `roll_no`, `student_name`, `class`, `section`, `dob`, `attendance`, `date`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, '1093', 'Jatin', '1082', NULL, NULL, NULL, '10', 'section-A', NULL, 'Present', '2023-08-28', NULL, 1, '2023-08-28 09:41:30', '2023-08-28 09:41:30'),
(2, '1093', 'Jatin', '1083', NULL, NULL, NULL, '10', 'section-A', NULL, 'Present', '2023-08-28', NULL, 1, '2023-08-28 09:41:30', '2023-08-28 09:41:30'),
(3, '1093', 'Jatin', '1089', NULL, NULL, NULL, '10', 'section-A', NULL, 'Present', '2023-08-28', NULL, 1, '2023-08-28 09:41:30', '2023-08-28 09:41:30'),
(4, '1093', 'Jatin', '1081', NULL, NULL, NULL, '10', 'section-A', NULL, 'Present', '2023-08-28', NULL, 1, '2023-08-28 09:41:30', '2023-08-28 09:41:30'),
(5, '1093', 'Jatin', '1079', NULL, NULL, NULL, '10', 'section-A', NULL, 'Late', '2023-08-28', NULL, 1, '2023-08-28 09:41:30', '2023-08-28 09:41:30'),
(6, '1093', 'Jatin', '1080', NULL, NULL, NULL, '10', 'section-A', NULL, 'Absent', '2023-08-28', NULL, 1, '2023-08-28 09:41:30', '2023-08-28 09:41:30'),
(7, '1102', 'Ishaan', '1082', NULL, NULL, NULL, '10', 'section-A', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:54:56', '2023-09-02 08:54:56'),
(8, '1102', 'Ishaan', '1083', NULL, NULL, NULL, '10', 'section-A', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:54:56', '2023-09-02 08:54:56'),
(9, '1102', 'Ishaan', '1089', NULL, NULL, NULL, '10', 'section-A', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:54:56', '2023-09-02 08:54:56'),
(10, '1102', 'Ishaan', '1081', NULL, NULL, NULL, '10', 'section-A', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:54:56', '2023-09-02 08:54:56'),
(11, '1102', 'Ishaan', '1079', NULL, NULL, NULL, '10', 'section-A', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:54:56', '2023-09-02 08:54:56'),
(12, '1102', 'Ishaan', '1080', NULL, NULL, NULL, '10', 'section-A', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:54:56', '2023-09-02 08:54:56'),
(13, '1102', 'Ishaan', '1087', NULL, NULL, NULL, '10', 'section-B', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:55:33', '2023-09-02 08:55:33'),
(14, '1102', 'Ishaan', '1088', NULL, NULL, NULL, '10', 'section-B', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:55:33', '2023-09-02 08:55:33'),
(15, '1102', 'Ishaan', '1086', NULL, NULL, NULL, '10', 'section-B', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:55:33', '2023-09-02 08:55:33'),
(16, '1102', 'Ishaan', '1085', NULL, NULL, NULL, '10', 'section-B', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:55:33', '2023-09-02 08:55:33'),
(17, '1102', 'Ishaan', '1072', NULL, NULL, NULL, '9', 'section-A', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:56:28', '2023-09-02 08:56:28'),
(18, '1102', 'Ishaan', '1073', NULL, NULL, NULL, '9', 'section-A', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:56:28', '2023-09-02 08:56:28'),
(19, '1102', 'Ishaan', '1071', NULL, NULL, NULL, '9', 'section-A', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:56:28', '2023-09-02 08:56:28'),
(20, '1102', 'Ishaan', '1058', NULL, NULL, NULL, '9', 'section-A', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:56:28', '2023-09-02 08:56:28'),
(21, '1102', 'Ishaan', '1069', NULL, NULL, NULL, '9', 'section-A', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:56:28', '2023-09-02 08:56:28'),
(22, '1102', 'Ishaan', '1070', NULL, NULL, NULL, '9', 'section-A', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:56:28', '2023-09-02 08:56:28'),
(23, '1102', 'Ishaan', '1077', NULL, NULL, NULL, '9', 'section-B', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:56:49', '2023-09-02 08:56:49'),
(24, '1102', 'Ishaan', '1078', NULL, NULL, NULL, '9', 'section-B', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:56:49', '2023-09-02 08:56:49'),
(25, '1102', 'Ishaan', '1076', NULL, NULL, NULL, '9', 'section-B', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:56:49', '2023-09-02 08:56:49'),
(26, '1102', 'Ishaan', '1074', NULL, NULL, NULL, '9', 'section-B', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:56:49', '2023-09-02 08:56:49'),
(27, '1102', 'Ishaan', '1075', NULL, NULL, NULL, '9', 'section-B', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:56:49', '2023-09-02 08:56:49'),
(28, '1102', 'Ishaan', '1061', NULL, NULL, NULL, '8', 'section-A', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:57:22', '2023-09-02 08:57:22'),
(29, '1102', 'Ishaan', '1062', NULL, NULL, NULL, '8', 'section-A', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:57:22', '2023-09-02 08:57:22'),
(30, '1102', 'Ishaan', '1060', NULL, NULL, NULL, '8', 'section-A', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:57:22', '2023-09-02 08:57:22'),
(31, '1102', 'Ishaan', '1059', NULL, NULL, NULL, '8', 'section-A', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:57:22', '2023-09-02 08:57:22'),
(32, '1102', 'Ishaan', '1066', NULL, NULL, NULL, '8', 'section-B', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:57:41', '2023-09-02 08:57:41'),
(33, '1102', 'Ishaan', '1067', NULL, NULL, NULL, '8', 'section-B', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:57:41', '2023-09-02 08:57:41'),
(34, '1102', 'Ishaan', '1065', NULL, NULL, NULL, '8', 'section-B', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:57:41', '2023-09-02 08:57:41'),
(35, '1102', 'Ishaan', '1063', NULL, NULL, NULL, '8', 'section-B', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:57:41', '2023-09-02 08:57:41'),
(36, '1102', 'Ishaan', '1064', NULL, NULL, NULL, '8', 'section-B', NULL, 'Present', '2023-09-02', NULL, 1, '2023-09-02 08:57:41', '2023-09-02 08:57:41'),
(37, '1102', 'Ishaan', '960', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(38, '1102', 'Ishaan', '1082', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(39, '1102', 'Ishaan', '958', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(40, '1102', 'Ishaan', '968', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(41, '1102', 'Ishaan', '1083', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(42, '1102', 'Ishaan', '959', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(43, '1102', 'Ishaan', '969', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(44, '1102', 'Ishaan', '1089', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(45, '1102', 'Ishaan', '961', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(46, '1102', 'Ishaan', '1081', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(47, '1102', 'Ishaan', '957', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(48, '1102', 'Ishaan', '967', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(49, '1102', 'Ishaan', '1079', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(50, '1102', 'Ishaan', '955', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(51, '1102', 'Ishaan', '965', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(52, '1102', 'Ishaan', '1080', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(53, '1102', 'Ishaan', '956', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(54, '1102', 'Ishaan', '966', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(55, '1102', 'Ishaan', '963', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(56, '1102', 'Ishaan', '964', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(57, '1102', 'Ishaan', '962', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-05', NULL, 1, '2023-09-05 09:34:51', '2023-09-05 09:34:51'),
(58, '1102', 'Ishaan', '960', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(59, '1102', 'Ishaan', '1082', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(60, '1102', 'Ishaan', '958', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(61, '1102', 'Ishaan', '968', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(62, '1102', 'Ishaan', '1083', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(63, '1102', 'Ishaan', '959', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(64, '1102', 'Ishaan', '969', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(65, '1102', 'Ishaan', '1089', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(66, '1102', 'Ishaan', '961', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(67, '1102', 'Ishaan', '1081', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(68, '1102', 'Ishaan', '957', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(69, '1102', 'Ishaan', '967', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(70, '1102', 'Ishaan', '1079', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(71, '1102', 'Ishaan', '955', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(72, '1102', 'Ishaan', '965', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(73, '1102', 'Ishaan', '1080', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(74, '1102', 'Ishaan', '956', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(75, '1102', 'Ishaan', '966', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(76, '1102', 'Ishaan', '963', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(77, '1102', 'Ishaan', '964', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(78, '1102', 'Ishaan', '962', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-06', NULL, 1, '2023-09-05 09:35:40', '2023-09-05 09:35:40'),
(79, '1102', 'Ishaan', '960', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(80, '1102', 'Ishaan', '1082', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(81, '1102', 'Ishaan', '958', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(82, '1102', 'Ishaan', '968', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(83, '1102', 'Ishaan', '1083', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(84, '1102', 'Ishaan', '959', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(85, '1102', 'Ishaan', '969', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(86, '1102', 'Ishaan', '1089', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Absent', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(87, '1102', 'Ishaan', '961', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(88, '1102', 'Ishaan', '1081', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(89, '1102', 'Ishaan', '957', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(90, '1102', 'Ishaan', '967', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(91, '1102', 'Ishaan', '1079', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(92, '1102', 'Ishaan', '955', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(93, '1102', 'Ishaan', '965', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(94, '1102', 'Ishaan', '1080', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(95, '1102', 'Ishaan', '956', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(96, '1102', 'Ishaan', '966', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(97, '1102', 'Ishaan', '963', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(98, '1102', 'Ishaan', '964', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(99, '1102', 'Ishaan', '962', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-07', NULL, 1, '2023-09-05 09:36:29', '2023-09-05 09:36:29'),
(100, '1102', 'Ishaan', '960', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(101, '1102', 'Ishaan', '1082', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(102, '1102', 'Ishaan', '958', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(103, '1102', 'Ishaan', '968', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(104, '1102', 'Ishaan', '1083', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(105, '1102', 'Ishaan', '959', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(106, '1102', 'Ishaan', '969', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(107, '1102', 'Ishaan', '1089', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(108, '1102', 'Ishaan', '961', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(109, '1102', 'Ishaan', '1081', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(110, '1102', 'Ishaan', '957', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(111, '1102', 'Ishaan', '967', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(112, '1102', 'Ishaan', '1079', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(113, '1102', 'Ishaan', '955', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(114, '1102', 'Ishaan', '965', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(115, '1102', 'Ishaan', '1080', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(116, '1102', 'Ishaan', '956', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(117, '1102', 'Ishaan', '966', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(118, '1102', 'Ishaan', '963', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(119, '1102', 'Ishaan', '964', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(120, '1102', 'Ishaan', '962', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-08', NULL, 1, '2023-09-05 09:43:01', '2023-09-05 09:43:01'),
(121, '1102', 'Ishaan', '960', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(122, '1102', 'Ishaan', '1082', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(123, '1102', 'Ishaan', '958', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(124, '1102', 'Ishaan', '968', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(125, '1102', 'Ishaan', '1083', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(126, '1102', 'Ishaan', '959', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(127, '1102', 'Ishaan', '969', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(128, '1102', 'Ishaan', '1089', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Late', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(129, '1102', 'Ishaan', '961', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(130, '1102', 'Ishaan', '1081', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(131, '1102', 'Ishaan', '957', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(132, '1102', 'Ishaan', '967', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(133, '1102', 'Ishaan', '1079', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(134, '1102', 'Ishaan', '955', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(135, '1102', 'Ishaan', '965', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(136, '1102', 'Ishaan', '1080', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(137, '1102', 'Ishaan', '956', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(138, '1102', 'Ishaan', '966', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(139, '1102', 'Ishaan', '963', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(140, '1102', 'Ishaan', '964', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(141, '1102', 'Ishaan', '962', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-09', NULL, 1, '2023-09-05 09:44:18', '2023-09-05 09:44:18'),
(142, '1102', 'Ishaan', '960', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(143, '1102', 'Ishaan', '1082', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(144, '1102', 'Ishaan', '958', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(145, '1102', 'Ishaan', '968', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(146, '1102', 'Ishaan', '1083', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(147, '1102', 'Ishaan', '959', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(148, '1102', 'Ishaan', '969', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(149, '1102', 'Ishaan', '1089', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(150, '1102', 'Ishaan', '961', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(151, '1102', 'Ishaan', '1081', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(152, '1102', 'Ishaan', '957', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(153, '1102', 'Ishaan', '967', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(154, '1102', 'Ishaan', '1079', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(155, '1102', 'Ishaan', '955', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(156, '1102', 'Ishaan', '965', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(157, '1102', 'Ishaan', '1080', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(158, '1102', 'Ishaan', '956', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(159, '1102', 'Ishaan', '966', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(160, '1102', 'Ishaan', '963', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(161, '1102', 'Ishaan', '964', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(162, '1102', 'Ishaan', '962', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-01', NULL, 1, '2023-09-05 09:46:22', '2023-09-05 09:46:22'),
(163, '1102', 'Ishaan', '960', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(164, '1102', 'Ishaan', '1082', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(165, '1102', 'Ishaan', '958', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(166, '1102', 'Ishaan', '968', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(167, '1102', 'Ishaan', '1083', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(168, '1102', 'Ishaan', '959', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(169, '1102', 'Ishaan', '969', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(170, '1102', 'Ishaan', '1089', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Half Day', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(171, '1102', 'Ishaan', '961', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(172, '1102', 'Ishaan', '1081', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(173, '1102', 'Ishaan', '957', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(174, '1102', 'Ishaan', '967', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(175, '1102', 'Ishaan', '1079', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(176, '1102', 'Ishaan', '955', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(177, '1102', 'Ishaan', '965', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(178, '1102', 'Ishaan', '1080', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(179, '1102', 'Ishaan', '956', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(180, '1102', 'Ishaan', '966', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(181, '1102', 'Ishaan', '963', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(182, '1102', 'Ishaan', '964', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(183, '1102', 'Ishaan', '962', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-11', NULL, 1, '2023-09-05 09:47:38', '2023-09-05 09:47:38'),
(184, '1102', 'Ishaan', '960', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(185, '1102', 'Ishaan', '1082', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(186, '1102', 'Ishaan', '958', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(187, '1102', 'Ishaan', '968', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(188, '1102', 'Ishaan', '1083', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(189, '1102', 'Ishaan', '959', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(190, '1102', 'Ishaan', '969', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(191, '1102', 'Ishaan', '1089', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Absent', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(192, '1102', 'Ishaan', '961', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(193, '1102', 'Ishaan', '1081', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(194, '1102', 'Ishaan', '957', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(195, '1102', 'Ishaan', '967', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(196, '1102', 'Ishaan', '1079', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(197, '1102', 'Ishaan', '955', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(198, '1102', 'Ishaan', '965', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(199, '1102', 'Ishaan', '1080', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(200, '1102', 'Ishaan', '956', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(201, '1102', 'Ishaan', '966', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(202, '1102', 'Ishaan', '963', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(203, '1102', 'Ishaan', '964', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(204, '1102', 'Ishaan', '962', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-12', NULL, 1, '2023-09-05 09:53:47', '2023-09-05 09:53:47'),
(205, '1102', 'Ishaan', '960', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(206, '1102', 'Ishaan', '1082', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(207, '1102', 'Ishaan', '958', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(208, '1102', 'Ishaan', '968', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(209, '1102', 'Ishaan', '1083', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(210, '1102', 'Ishaan', '959', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(211, '1102', 'Ishaan', '969', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(212, '1102', 'Ishaan', '1089', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(213, '1102', 'Ishaan', '961', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(214, '1102', 'Ishaan', '1081', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(215, '1102', 'Ishaan', '957', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(216, '1102', 'Ishaan', '967', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(217, '1102', 'Ishaan', '1079', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(218, '1102', 'Ishaan', '955', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(219, '1102', 'Ishaan', '965', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(220, '1102', 'Ishaan', '1080', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(221, '1102', 'Ishaan', '956', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(222, '1102', 'Ishaan', '966', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(223, '1102', 'Ishaan', '963', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(224, '1102', 'Ishaan', '964', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(225, '1102', 'Ishaan', '962', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-13', NULL, 1, '2023-09-05 09:55:31', '2023-09-05 09:55:31'),
(226, '1102', 'Ishaan', '960', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(227, '1102', 'Ishaan', '1082', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(228, '1102', 'Ishaan', '958', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(229, '1102', 'Ishaan', '968', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(230, '1102', 'Ishaan', '1083', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(231, '1102', 'Ishaan', '959', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(232, '1102', 'Ishaan', '969', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(233, '1102', 'Ishaan', '1089', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Late', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(234, '1102', 'Ishaan', '961', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(235, '1102', 'Ishaan', '1081', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(236, '1102', 'Ishaan', '957', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(237, '1102', 'Ishaan', '967', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(238, '1102', 'Ishaan', '1079', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(239, '1102', 'Ishaan', '955', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(240, '1102', 'Ishaan', '965', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(241, '1102', 'Ishaan', '1080', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(242, '1102', 'Ishaan', '956', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(243, '1102', 'Ishaan', '966', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(244, '1102', 'Ishaan', '963', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(245, '1102', 'Ishaan', '964', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36'),
(246, '1102', 'Ishaan', '962', NULL, NULL, NULL, '10', 'Section-A', NULL, 'Present', '2023-09-14', NULL, 1, '2023-09-05 09:56:36', '2023-09-05 09:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `student_leave_request`
--

CREATE TABLE `student_leave_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `Student_name` varchar(255) DEFAULT NULL,
  `Apply_date` varchar(255) DEFAULT NULL,
  `from_date` varchar(255) DEFAULT NULL,
  `to_date` varchar(255) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `document` longtext DEFAULT NULL,
  `approvalby` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE , 2 = NONE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_leave_request`
--

INSERT INTO `student_leave_request` (`id`, `user_id`, `class`, `section`, `Student_name`, `Apply_date`, `from_date`, `to_date`, `reason`, `document`, `approvalby`, `status`, `created_at`, `updated_at`) VALUES
(1, '1090', '2', 'section-B', 'Pankit Lal', '28-Aug-2023', '2023-08-29', '2023-08-31', 'Sick Leave', '1693215896.png', 'Admin', 0, '2023-08-28 09:44:56', '2023-08-28 09:48:20'),
(2, '1090', '2', 'section-B', 'Pankit Lal', '28-Aug-2023', '2023-08-18', '2023-08-30', 'Urgent work', '1693216449.png', 'Jatin(teacher)', 0, '2023-08-28 09:54:09', '2023-08-28 09:54:41'),
(3, '1090', '2', 'section-B', 'Pankit Lal', '01-Sep-2023', '2023-09-01', '2023-09-02', '2120', '1693554004.pdf', NULL, 1, '2023-09-01 07:40:04', '2023-09-01 07:40:04'),
(4, '1090', '2', 'section-B', 'Pankit Lal', '01-Sep-2023', '2023-10-07', '2023-09-28', 'Chhutti De do', '1693554149.png', 'Jatin(teacher)', 0, '2023-09-01 07:42:29', '2023-09-01 07:44:37'),
(5, '1088', '10', 'section-B', 'Akshay Singh', '02-Sep-2023', '2023-09-02', '2023-09-04', 'Sick Leave', '1693653857.png', 'Ishaan(teacher)', 0, '2023-09-02 11:24:17', '2023-09-02 11:34:37'),
(6, '1087', '10', 'section-B', 'Akash  Garg', '02-Sep-2023', '2023-09-02', '2023-09-04', 'Sick Leave', '1693654129.png', 'Ishaan(teacher)', 0, '2023-09-02 11:28:49', '2023-09-02 11:34:30'),
(7, '1086', '10', 'section-B', 'John Kumawat', '02-Sep-2023', '2023-09-02', '2023-09-07', 'Sick Leave', '1693654587.png', 'Ishaan(teacher)', 0, '2023-09-02 11:36:27', '2023-09-02 11:36:44'),
(8, '1085', '10', 'section-B', 'Rohan Kumawat', '02-Sep-2023', '2023-09-02', '2023-09-03', 'Sick Leave', '1693655113.png', 'Ishaan(teacher)', 0, '2023-09-02 11:45:13', '2023-09-02 11:46:10'),
(9, '1060', '8', 'section-A', 'John Kumawat', '02-Sep-2023', '2023-09-29', '2023-09-30', 'Sick Leave', '1693655421.png', 'Ishaan(teacher)', 0, '2023-09-02 11:50:21', '2023-09-02 11:50:31'),
(10, '1089', '10', 'Section-A', 'Anju Gupta', '05-Sep-2023', '2023-09-05', '2023-09-06', 'Sick Leave', '1693899535.png', 'Ishaan(teacher)', 0, '2023-09-05 07:38:55', '2023-09-05 07:41:42'),
(11, '1089', '10', 'Section-A', 'Anju Gupta', '05-Sep-2023', '2023-09-29', '2023-09-30', 'Urgent work at home', '1693899574.png', 'Ishaan(teacher)', 0, '2023-09-05 07:39:34', '2023-09-05 07:41:50'),
(12, '1089', '10', 'Section-A', 'Anju Gupta', '05-Sep-2023', '2023-10-19', '2023-09-05', 'Sister;s marriage.', '1693899643.png', NULL, 1, '2023-09-05 07:40:43', '2023-09-05 07:40:43'),
(13, '1089', '10', 'Section-A', 'Anju Gupta', '05-Sep-2023', '2023-09-21', '2023-09-25', 'Sick Leave', '1693900308.png', 'Ishaan(teacher)', 0, '2023-09-05 07:51:48', '2023-09-05 07:54:19'),
(14, '1089', '10', 'Section-A', 'Anju Gupta', '05-Sep-2023', '2023-09-05', '2023-09-05', 'Sick leave', '1693900502.png', 'Ishaan(teacher)', 0, '2023-09-05 07:55:02', '2023-09-05 07:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `subject_group`
--

CREATE TABLE `subject_group` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject_group`
--

INSERT INTO `subject_group` (`id`, `user_id`, `name`, `class`, `section`, `Subject`, `desc`, `other`, `status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Compulsory', '5', 'section-A', '[\"Social Science\",\"Science\",\"Maths\",\"English\",\"Hindi\"]', NULL, NULL, 1, '2023-08-28 11:35:26', '2023-09-02 12:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` varchar(255) DEFAULT NULL,
  `content_title` longtext DEFAULT NULL,
  `availabe_for` varchar(255) DEFAULT NULL,
  `syllabus_type` longtext DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `syllabus_file` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`id`, `session`, `content_title`, `availabe_for`, `syllabus_type`, `class`, `subject`, `syllabus_file`, `other`, `status`, `created_at`, `updated_at`) VALUES
(1, '2022-23', 'English Syllabus', 'All', 'Complete Syllabus', '10', 'English', '1693226610.png', NULL, 1, '2023-08-28 12:43:30', '2023-08-28 12:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `upload_content`
--

CREATE TABLE `upload_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `content_type` varchar(255) DEFAULT NULL,
  `availabe_for` varchar(255) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upload_content`
--

INSERT INTO `upload_content` (`id`, `user_id`, `name`, `content_type`, `availabe_for`, `class`, `section`, `date`, `desc`, `document`, `other`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'English Notes', 'Assignments', '[\"All Admin\",\"Available For All Classes\"]', '10', 'Section-A', '2023-08-28', 'Here I have uploaded the notes', '1693226522.png', NULL, 1, '2023-08-28 12:42:02', '2023-08-28 12:42:02'),
(2, NULL, 'Hindi Notes', 'Study Material', '[\"All Student\"]', '10', 'Section-A', '2023-09-05', 'These are important notes', '1693909596.png', NULL, 1, '2023-09-05 10:26:36', '2023-09-05 10:26:36'),
(3, NULL, 'Solved Questions', 'Syllabus', '[\"All Student\"]', '10', 'Section-A', '2023-09-05', 'Important', '1693909693.png', NULL, 1, '2023-09-05 10:28:13', '2023-09-05 10:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0 COMMENT '1=Admin,2=Teacher,3=student',
  `conform_password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `job` varchar(255) DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `add` longtext DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `twitter_profile` varchar(255) DEFAULT NULL,
  `facebook_profile` varchar(255) DEFAULT NULL,
  `instagram_profile` varchar(255) DEFAULT NULL,
  `Linkedin_profile` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 = ACTIVE , 0 = INACTIVE',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `student_rendam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `school_name`, `email`, `password`, `role`, `conform_password`, `image`, `about`, `job`, `otp`, `country`, `add`, `phone`, `twitter_profile`, `facebook_profile`, `instagram_profile`, `Linkedin_profile`, `status`, `remember_token`, `created_at`, `updated_at`, `student_rendam`) VALUES
(1, 'Admin', NULL, 'admin@gmail.com', '$2y$10$6ZiH0uSCar64JuM9g7Se8Owdluo8jJwMNAkWjz/cKWnAcOsnW0ECu', 1, '123456', '1688462111.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-07-04 01:40:46', '2023-08-28 06:36:03', NULL),
(959, NULL, NULL, 'mohann101@gmail.com', '$2y$10$uNdSMXXor2He/C8WdzDr4uQLH3CuiMKDdQgolL8SWwCimU7UzQX6i', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:03', '2023-08-07 10:20:03', 'SA2352'),
(960, NULL, NULL, 'rohan102@gmail.com', '$2y$10$T6t.3mGKNK28BYsKeXsEPOiaBBhD3J5V8S61FiXae/Hw61A5slVCC', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:04', '2023-08-07 10:20:04', 'SA8100'),
(961, NULL, NULL, 'john102@gmail.com', '$2y$10$xVnvZvMWlnY1cZgdApwKH.eMYq3DPD1EshX3fNuKvj3XzPvyzXUQq', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:04', '2023-08-07 10:20:04', 'SA1766'),
(962, NULL, NULL, 'akash102@gmail.com', '$2y$10$oX/eon95wYmJ1binT1fZD.0yzkNkBQvcBfi8pnxnyj0RLsACh/SLW', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:04', '2023-08-07 10:20:04', 'SA6757'),
(963, NULL, NULL, 'akshay102@gmail.com', '$2y$10$t7h5tBh1HZKLTfDGja.H8uYyGbAoOjaSw4VtA3IWvy5kFNaEVoWCG', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:04', '2023-08-07 10:20:04', 'SA7495'),
(964, NULL, NULL, 'ajay102@gmail.com', '$2y$10$3CsNxLlSEx6X.1Fr.TN1qOmAt34b6GcdCtcqL1A78R94BoGRpnWDy', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:04', '2023-08-07 10:20:04', 'SA9484'),
(965, NULL, NULL, 'daksh102@gmail.com', '$2y$10$kSAgq8Wvbja/ZqvVe1MPSe.V.5k2dwcO70lk30sHMBHa50am7wvji', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:05', '2023-08-07 10:20:05', 'SA5660'),
(966, NULL, NULL, 'vijay102@gmail.com', '$2y$10$DTN0MvyQrJQ24H.yhsO0HOYBimn5N7tWShc/DCXhoOK5N1SDiNuP.', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:05', '2023-08-07 10:20:05', 'SA2912'),
(967, NULL, NULL, 'sanjay102@gmail.com', '$2y$10$SITo9ATjTC9llyEmcRxKf.Unzj4lRYVi5hzHrrByXPkWhS3fxVQ.e', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:05', '2023-08-07 10:20:05', 'SA3911'),
(968, NULL, NULL, 'sumit102@gmail.com', '$2y$10$NcDt1Korf0M9IlbEpYumVuPF/JoB9jaBMGt/3TZ1qyWX.2YDI.POi', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:05', '2023-08-07 10:20:05', 'SA3599'),
(969, NULL, NULL, 'mohan1002@gmail.com', '$2y$10$ANkgEDzAQEy5EPGTAAfsdODrybhhfyID8s1C4WHzjVv/B3B3h3Bju', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:05', '2023-08-07 10:20:05', 'SA1984'),
(970, NULL, NULL, 'rohan1002@gmail.com', '$2y$10$n/jIAu5A0qGetW4dGYBon.5c7UmnXAyCQsbo4NYIs2c37jxnk8Owm', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:06', '2023-08-07 10:20:06', 'SA5655'),
(971, NULL, NULL, 'john1002@gmail.com', '$2y$10$OASa2H58.Yo5RELQrmwrBekbacg0f13hH/9C/TpkCmMDjfyhnskNm', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:06', '2023-08-07 10:20:06', 'SA3027'),
(972, NULL, NULL, 'akash1002@gmail.com', '$2y$10$chskR1ZuGmmXg/pQBRBo0uY1BfV4vx7aHId8qgGQtOen/ZlmbNDa.', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:06', '2023-08-07 10:20:06', 'SA7167'),
(973, NULL, NULL, 'akshay1002@gmail.com', '$2y$10$6b0aPfSsCI421919xDPMdu/yCmBprYt78ZvsboaMZHCx8OcEwW79y', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:06', '2023-08-07 10:20:06', 'SA2184'),
(974, NULL, NULL, 'ajay1002@gmail.com', '$2y$10$avEBcmSbV.QJif6XOVdWruXkCgzhiCvaQYHf4G0rjEzjJ8SqDz0i2', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:06', '2023-08-07 10:20:06', 'SA8149'),
(975, NULL, NULL, 'daksh1002@gmail.com', '$2y$10$w68364LzJltSHbZzuhyWPO1qkgQkiyoCbSoaeP449fFuIXDgVaKee', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:06', '2023-08-07 10:20:06', 'SA8868'),
(976, NULL, NULL, 'vijay1002@gmail.com', '$2y$10$K86BCbDBeMrmbXyZaUVuZOmNo2L1s/c7q3OV0H.ZnfftpSZTZZcLm', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:07', '2023-08-07 10:20:07', 'SA8775'),
(977, NULL, NULL, 'sanjay1002@gmail.com', '$2y$10$y3df.c8F7igxHwc6g/D45OQCQVoaxj3RQSmILvYb6kqnCckrcD1pK', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:07', '2023-08-07 10:20:07', 'SA8261'),
(978, NULL, NULL, 'sumit1002@gmail.com', '$2y$10$QjJP1biGB6bx1CX19hOk0OS8qrf2FMFqfP1JaSn5qrbHE0CTz0P.e', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:07', '2023-08-07 10:20:07', 'SA1139'),
(979, NULL, NULL, 'mohan10002@gmail.com', '$2y$10$WMmAYzpUXhSo/M/uIw9TMe0Q7qREhtSk.21zGFSDAYrSuY22a7bvO', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:07', '2023-08-07 10:20:07', 'SA2569'),
(980, NULL, NULL, 'rohan10002@gmail.com', '$2y$10$tBUFFwMC0PhLN5YQwQdHbeaabYbZ96RN/yyppDCDoZfeptaijm9F.', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:07', '2023-08-07 10:20:07', 'SA7666'),
(981, NULL, NULL, 'john10002@gmail.com', '$2y$10$aMiTDHYPHdAQrSByGbUI1./bYBkx7k3mMOUa.PHO6Al8KZ2NEiNQy', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:07', '2023-08-07 10:20:07', 'SA5997'),
(982, NULL, NULL, 'akash10002@gmail.com', '$2y$10$oqUw4Mvj5C/qDuA8stNd/e.LIXKQWjcwtSgOOYx83JViCKPBWyMgm', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:08', '2023-08-07 10:20:08', 'SA5301'),
(983, NULL, NULL, 'akshay10002@gmail.com', '$2y$10$4gdrdhzcDiIvkG97OYxFqONnTaRCMmcEks7HGqij.ckpFrVdet1Wi', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:08', '2023-08-07 10:20:08', 'SA7046'),
(984, NULL, NULL, 'ajay10002@gmail.com', '$2y$10$2z.JgukhsgysQ1RB1iG8B.3MF5T9eEHibAzRRpUmg5HedoXScKwcy', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:08', '2023-08-07 10:20:08', 'SA5589'),
(985, NULL, NULL, 'daksh10002@gmail.com', '$2y$10$2uf0eaN/wjOYtpJFAFmCQu2h05hDB3YYi3Ff.lRzZ36IkGgsNhFYm', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:08', '2023-08-07 10:20:08', 'SA4623'),
(986, NULL, NULL, 'vijay10002@gmail.com', '$2y$10$jfbGPVjEYF0HN2YGZLYU3uW26rIuRJ.zp2c1O5eV08/Bhb6I.Bu.2', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:08', '2023-08-07 10:20:08', 'SA9584'),
(987, NULL, NULL, 'sanjay10002@gmail.com', '$2y$10$XfWCdwouCHAcLMOZxXCVSOZgk1MQgsubRfxQ/nd3//MFmYcd9iU5S', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:08', '2023-08-07 10:20:08', 'SA8998'),
(988, NULL, NULL, 'sumit10002@gmail.com', '$2y$10$bGcU8npY.4D7UArvsURa8OzA42TPrqWE./8xkucgR8C7e6LVto4vu', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:20:09', '2023-08-07 10:20:09', 'SA6855'),
(989, NULL, NULL, 'mohann201@gmail.com', '$2y$10$zmjAwOpUS2qpgo9PtgGM8O.jpSW03DduRcCZZ1TUUqQC20ODc2BaC', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:26:15', '2023-08-07 10:26:15', 'SA7564'),
(990, NULL, NULL, 'rohan202@gmail.com', '$2y$10$4cQiP3Nh4/UKJfJPACqZEOg/x9uljKIANCZBqE1EXomU.zW5CgloO', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:26:16', '2023-08-07 10:26:16', 'SA3824'),
(991, NULL, NULL, 'john203@gmail.com', '$2y$10$otiv.qwcF0x47biZKD9v/en/.pt1S9SLj6s2CZRpZI.dtnX/rsI6u', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:26:16', '2023-08-07 10:26:16', 'SA2895'),
(992, NULL, NULL, 'akash204@gmail.com', '$2y$10$dshBGymunhrRYqN/CSZbVOxxs8h8V1do5762vph7JGpd4psPP4ZdC', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:26:16', '2023-08-07 10:26:16', 'SA9066'),
(993, NULL, NULL, 'akshay205@gmail.com', '$2y$10$ToycuvLM62exYQqgbL3IUeeei0rkPMcxALr83ixPV4VJbOiFVAULm', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:26:16', '2023-08-07 10:26:16', 'SA7183'),
(994, NULL, NULL, 'mohann301@gmail.com', '$2y$10$vvaBdJn.jj1K1eZPeeN7se35x6VkO7bB3xRNOnG3WeGLR6Ie.8lQK', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:30:36', '2023-08-07 10:30:36', 'SA4253'),
(995, NULL, NULL, 'rohan302@gmail.com', '$2y$10$JJS3QEYNQXqs0mSZrr8xyOu3Q0VcECtmTTN3YvHLpgob4BfNHBtX6', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:30:36', '2023-08-07 10:30:36', 'SA7740'),
(996, NULL, NULL, 'john303@gmail.com', '$2y$10$lvWGQNInHC1miBNgfQ4ne.OGA3uPP/eyzHHv9pIMWKPmhbehWDhR.', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:30:37', '2023-08-07 10:30:37', 'SA1300'),
(997, NULL, NULL, 'akash304@gmail.com', '$2y$10$EYS/aXpd9iUIchFN3587a.z0laPJ/8RSsio7Ox2xyyhSSV4wuDyrS', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:30:37', '2023-08-07 10:30:37', 'SA9397'),
(998, NULL, NULL, 'akshay305@gmail.com', '$2y$10$kVuNNSm9h5csbw4wlAuc6.erQtOFnX/OQsq9TVH22TDTtJh4fIVnW', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:30:37', '2023-08-07 10:30:37', 'SA1046'),
(999, NULL, NULL, 'mohann401@gmail.com', '$2y$10$ii7wUmkSjyNfSIwlJeG0BO2OANFSnoHakjp7Zm8OXvgtXWvHSUzlS', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:34:41', '2023-08-07 10:34:41', 'SA1866'),
(1000, NULL, NULL, 'rohan402@gmail.com', '$2y$10$lbYlf/JfF7KZNvjVkCjSku624Sowj/IOFeF.cnI65dpj09ncGhDr6', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:34:41', '2023-08-07 10:34:41', 'SA2195'),
(1001, NULL, NULL, 'john403@gmail.com', '$2y$10$nD5tjYbK62.SP/tioW1XAewN1C97gr0OFTNrOfuUweDwzrQHj6/Vm', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:34:41', '2023-08-07 10:34:41', 'SA3676'),
(1002, NULL, NULL, 'akash404@gmail.com', '$2y$10$MQ/hHwPaxrA.JIQW3eHY5.0L4QK1db9AXZwrc.64HQ0/ptgUMz7gW', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:34:41', '2023-08-07 10:34:41', 'SA8284'),
(1003, NULL, NULL, 'akshay405@gmail.com', '$2y$10$bryxapfB5kxarAvDniZPXufMPzgET4bXGqqKWB.PGaaejaFmgh992', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:34:41', '2023-08-07 10:34:41', 'SA6780'),
(1004, NULL, NULL, 'mohann501@gmail.com', '$2y$10$abNuvSW9Jq3sMEO2VSEWzepgFih1j9ydjE4N5Fp6bjd1/X0i8Ouq2', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:37:49', '2023-08-07 10:37:49', 'SA2836'),
(1005, NULL, NULL, 'rohan502@gmail.com', '$2y$10$pCSd1GOOEtZNSInTqZXt/e3zwbK67mMjmv/YCVPi9A6ky.pRwfYua', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:37:49', '2023-08-07 10:37:49', 'SA6301'),
(1006, NULL, NULL, 'john503@gmail.com', '$2y$10$.wXCvl1D8s05vMjLYC..eO8ijPgm8ZqJu9C1rx82Pkq5uMZoLl..e', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:37:49', '2023-08-07 10:37:49', 'SA4246'),
(1007, NULL, NULL, 'akash504@gmail.com', '$2y$10$noLYZ2PiYH5aTMdvI8fsE.f3iHluOPeCij.w1iCuubqF7q9nPVqVS', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:37:49', '2023-08-07 10:37:49', 'SA4453'),
(1008, NULL, NULL, 'akshay505@gmail.com', '$2y$10$4wc/ATEfsk6FcXhx3OxAD.rKmH/E1aUTevLDfRPnWSBJuyTkVi1Pq', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:37:49', '2023-08-07 10:37:49', 'SA1171'),
(1009, NULL, NULL, 'mohann601@gmail.com', '$2y$10$qaj0SwC1Upd39mIfaHiuH.2khvPavqM5fhaHtCJg3mCiGk0EZjU1e', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:48:56', '2023-08-07 10:48:56', 'SA8122'),
(1010, NULL, NULL, 'rohan602@gmail.com', '$2y$10$.t2Ig.AvxlBeN8I8a9rZUuS5tJrk9hae9X/LIx7acL7eNKgi0iDeq', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:48:56', '2023-08-07 10:48:56', 'SA3135'),
(1011, NULL, NULL, 'john603@gmail.com', '$2y$10$ndUezsVGy1N2.UD8UpuHn.fjPpdxvkBTOw0zsDJy5nMn0GCnHjCdm', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:48:56', '2023-08-07 10:48:56', 'SA2980'),
(1012, NULL, NULL, 'akash604@gmail.com', '$2y$10$vhZ1xB91AvihWZWamDZXnOWq5upFWqQZI1UtAlwW8tn.PovLPW7aW', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:48:56', '2023-08-07 10:48:56', 'SA2734'),
(1013, NULL, NULL, 'akshay605@gmail.com', '$2y$10$JfMr2R7F6/MEekME882CO.bp8mLjCif2T4LaP/FNGjnZ2XUA6BwSS', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:48:56', '2023-08-07 10:48:56', 'SA1762'),
(1014, NULL, NULL, 'mohann701@gmail.com', '$2y$10$BPJE7T8E331TTbBm.lNwduld1kShVPlE91xiVe6aqsekGI2hdLISe', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:52:13', '2023-08-07 10:52:13', 'SA1092'),
(1015, NULL, NULL, 'rohan702@gmail.com', '$2y$10$4DJBcYZTfgTW24qelhvNhuVNEQ39OuLwPxoBLQJc4jvzc5dVte5Ma', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:52:13', '2023-08-07 10:52:13', 'SA7123'),
(1016, NULL, NULL, 'john703@gmail.com', '$2y$10$C3NQiZvIGhHFz52VEKGxg.rmi5xRa55KEIFsG6Yl.qRCuipkzHlUa', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:52:13', '2023-08-07 10:52:13', 'SA7338'),
(1017, NULL, NULL, 'akash704@gmail.com', '$2y$10$t53BGr0uJhyqO1IYr7a0VehzY.6hr8XlnDx2BxAawbk7OeVXWTFBG', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:52:14', '2023-08-07 10:52:14', 'SA7110'),
(1018, NULL, NULL, 'akshay705@gmail.com', '$2y$10$REaI1sO5f4qkQymkKPWmBOjJU89gugQU8PMqzpz14keidzuE9aQZu', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:52:14', '2023-08-07 10:52:14', 'SA7755'),
(1019, NULL, NULL, 'mohann706@gmail.com', '$2y$10$47Grdl8JXp/oc6ZrmJk5zuOVgmFQl3oDaKny2rjINHt7Q8i/Vd7Q2', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:56:00', '2023-08-07 10:56:00', 'SA5504'),
(1020, NULL, NULL, 'rohan707@gmail.com', '$2y$10$JUSm9MWC9xaJkEBrPG48COZPsdwpGKwOBjqZbv0Y3.jSP/CqK4deG', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:56:00', '2023-08-07 10:56:00', 'SA1611'),
(1021, NULL, NULL, 'john708@gmail.com', '$2y$10$aDU/x7HbGZJF81QJTRfpEuPZ.byC9nPzI52CEigC.9Mx2wxl2cpVq', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:56:00', '2023-08-07 10:56:00', 'SA1307'),
(1022, NULL, NULL, 'akash709@gmail.com', '$2y$10$zYZ9CstYC11/RNPeusSTAOvtOXcbSGfBL80gDCHLSh58Gdvs8sV2C', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:56:00', '2023-08-07 10:56:00', 'SA4739'),
(1023, NULL, NULL, 'akshay710@gmail.com', '$2y$10$6dHH9qiY5VeVG26fSnpalukYIZRwSv1lONaL8EeWAgVKB.rX0aW1m', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 10:56:01', '2023-08-07 10:56:01', 'SA1543'),
(1024, NULL, NULL, 'mohann711@gmail.com', '$2y$10$qdEQUXo8oQFZ2uJl2GOgae4NOLek6YdXPtfhg4RaQlZQXXkRwz5f.', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:00:44', '2023-08-07 11:00:44', 'SA7153'),
(1025, NULL, NULL, 'rohan712@gmail.com', '$2y$10$TZ/sytD0O1st1Twnn36J4ORDD0/pn7TdRKjN6xSsUA96gHaN3ibIi', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:00:44', '2023-08-07 11:00:44', 'SA7391'),
(1026, NULL, NULL, 'john713@gmail.com', '$2y$10$O08Zpd.FGXMiIzC5X3BtZO.HwbZftYHo0KPqGAMg9/BvOsP5Lb/8G', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:00:44', '2023-08-07 11:00:44', 'SA6653'),
(1027, NULL, NULL, 'akash714@gmail.com', '$2y$10$iIdDVOfqYK3h6R.YGcd7COoiU3tj9Wxgtg4moT5MwJW3ZfT9y69TC', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:00:45', '2023-08-07 11:00:45', 'SA9845'),
(1028, NULL, NULL, 'akshay715@gmail.com', '$2y$10$7Ws1GTTAoD7qwO6lmGhVxuO6juRB4HLNd34O1Zstuz8DZm30fpVge', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:00:45', '2023-08-07 11:00:45', 'SA7209'),
(1029, NULL, NULL, 'mohann716@gmail.com', '$2y$10$HRnbIpiPFgYFmF.fUO1ebeZ68DqGqzos7qD0L3UtFUBCC2O9Vzc8m', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:04:06', '2023-08-07 11:04:06', 'SA1929'),
(1030, NULL, NULL, 'rohan717@gmail.com', '$2y$10$mLLPrsn2sIJ0hjT3il/d6.xrQBL7Qo7I9VMLveZkG408J9GxYX2Tu', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:04:06', '2023-08-07 11:04:06', 'SA8164'),
(1031, NULL, NULL, 'john718@gmail.com', '$2y$10$tMuaqWM29pMjgv67tlfo9uiLaTutWTIK37zr/1Ao3SCDpCclxw4Pq', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:04:06', '2023-08-07 11:04:06', 'SA2125'),
(1032, NULL, NULL, 'akash719@gmail.com', '$2y$10$V9RER8ordTKjeDnjrfND5eugJ2xyi7scmeYTPgTxtC15R6r79NQ0u', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:04:07', '2023-08-07 11:04:07', 'SA6843'),
(1033, NULL, NULL, 'akshay720@gmail.com', '$2y$10$G2LW6GO1DJoEA3.C2TuaHeJMKhLVKECek.3EUu9l7EqdidaIT/jwC', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:04:07', '2023-08-07 11:04:07', 'SA9548'),
(1034, NULL, NULL, 'mohann721@gmail.com', '$2y$10$PxFsEPRTPG5MAV31DITkcOyvohXk.luC.MguXyNyNRfQDfX1y3MEa', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:09:22', '2023-08-07 11:09:22', 'SA4411'),
(1035, NULL, NULL, 'rohan722@gmail.com', '$2y$10$C9tTqqT8.tTEKU81xyhxju0HubFt0N3TFgVtZeG.n9/9nlUmXx4UG', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:09:22', '2023-08-07 11:09:22', 'SA3955'),
(1036, NULL, NULL, 'john723@gmail.com', '$2y$10$Pp0uWSdbNwHvFUv/CK4rhOGgyo4bg/EiMmiaaxb9S0C2ZtkLchiXq', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:09:22', '2023-08-07 11:09:22', 'SA4528'),
(1037, NULL, NULL, 'akash724@gmail.com', '$2y$10$ltDRNcgIJSROPnff70kYwOmUbs8Vu/K.IkhXypAeo4oGryP.q5GxK', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:09:22', '2023-08-07 11:09:22', 'SA2387'),
(1038, NULL, NULL, 'akshay725@gmail.com', '$2y$10$0pHNkvxJcAzotUOLvGFh8.SvOZSvPS4889OQ/XWdpg1kcFydHhJk2', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:09:23', '2023-08-07 11:09:23', 'SA1942'),
(1039, NULL, NULL, 'mohann726@gmail.com', '$2y$10$/Ccr2tnTrWoX8u1RozCKUucLE04blkaZDVixsl3n00jMrwwEEwlmS', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:14:33', '2023-08-07 11:14:33', 'SA1618'),
(1040, NULL, NULL, 'rohan727@gmail.com', '$2y$10$BUDy00kV3bsk/OWL4.f8Ke9D2ZqBbDX7fvJBFgQSVQJgbpXiofe7u', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:14:33', '2023-08-07 11:14:33', 'SA1750'),
(1041, NULL, NULL, 'john728@gmail.com', '$2y$10$n0q4jF29VUafUOpnS41LFera9SyXRmi2o4N2RoqCW6ociavtOzIpO', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:14:33', '2023-08-07 11:14:33', 'SA2374'),
(1042, NULL, NULL, 'akash729@gmail.com', '$2y$10$sHXPYm3nZwknLHkQaboggO7qx9jqy49bufvDiu3CotUAcDlIA5B0K', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:14:33', '2023-08-07 11:14:33', 'SA4091'),
(1043, 'Akshay Singh', NULL, 'akshay730@gmail.com', '$2y$10$SR3z2wYrt8JcpJVUL.aVf.D1Uqw/zVy/1eFc2m.ix8zCb1qWhIbBq', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:14:33', '2023-08-07 11:15:01', 'SA4959'),
(1044, NULL, NULL, 'mohann731@gmail.com', '$2y$10$EYtSOvqNXn8g9P8G607VT.9FAcbR8z1RxiZ1Pe5X3SWpQCe9fz/c2', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:18:06', '2023-08-07 11:18:06', 'SA6311'),
(1045, NULL, NULL, 'rohan732@gmail.com', '$2y$10$gNAPsdhieYnowcMd/t90D.4V2o7upb1iJ1LFe0MizImjJl4K8oLMG', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:18:06', '2023-08-07 11:18:06', 'SA2788'),
(1046, NULL, NULL, 'john733@gmail.com', '$2y$10$NHA3XwpaEfajN5bq9Q.9AutQNl7dpinxDfVgUnR5EWT7RWE78yPSC', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:18:06', '2023-08-07 11:18:06', 'SA2388'),
(1047, NULL, NULL, 'akash734@gmail.com', '$2y$10$wMNaVHSbhO5vBD.ZN/wgv.h1Eqamh0/NmhGjCczZmuvYEne1ZmTYa', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:18:07', '2023-08-07 11:18:07', 'SA6496'),
(1048, NULL, NULL, 'akshay735@gmail.com', '$2y$10$nQXhqCJeRa6SXqPCuOKkqOJk53mr6SFXn5lFmZlr0FbU7NGzi4gI2', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:18:07', '2023-08-07 11:18:07', 'SA6841'),
(1049, NULL, NULL, 'mohann736@gmail.com', '$2y$10$uEdlxqmu/Of90/F8Klv.dOcObg3XR0AJO02s9lU4U0ptVhL5KYMDG', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:21:32', '2023-08-07 11:21:32', 'SA2665'),
(1050, NULL, NULL, 'rohan737@gmail.com', '$2y$10$WBWA/xwRdiQn2f31YLkcEe.RSZgjWB2/ulx7xDK0v5ox9LJtkA2JC', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:21:32', '2023-08-07 11:21:32', 'SA8802'),
(1051, NULL, NULL, 'john738@gmail.com', '$2y$10$ZtJ3k5fq4tbgt2wD5SLsGe80c7TzbNM/.ah6N4xovJCZc24VwVDUG', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:21:32', '2023-08-07 11:21:32', 'SA1918'),
(1052, NULL, NULL, 'akash739@gmail.com', '$2y$10$O6EQFrh3oq88r84/dA3Z2eBLtChG966R0/H7L8aNbYNMNAXA1qTzq', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:21:32', '2023-08-07 11:21:32', 'SA3474'),
(1053, NULL, NULL, 'akshay740@gmail.com', '$2y$10$.C3fp9A/VlePaO.MT4qmG.mubfa/yYCoJBpFwmK3eFunnWQAiO5Gm', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 11:21:33', '2023-08-07 11:21:33', 'SA6280'),
(1054, 'MahendraSingh', NULL, 'Mahendra@gmail.com', '$2y$10$8AULQpIgwF3y9m7aSNRyWuKUqyryPbo06tEPls8You8R7lIEzQLqC', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, '5874857843', NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:11:14', '2023-08-07 12:11:14', NULL),
(1057, NULL, NULL, 'mohann742@gmail.com', '$2y$10$3GzOk9sSLHO8RidQV9/nie4I9Hp7bBzC5aaDh1f.jVC3ITL7vcfYm', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:29:31', '2023-08-07 12:29:31', 'SA4179'),
(1058, NULL, NULL, 'rohan743@gmail.com', '$2y$10$9tnOy21u1icyLmWyPXxouOjX9nXVSHzCyCLTQaCrpcguytR.x0gHe', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:29:31', '2023-08-07 12:29:31', 'SA9313'),
(1059, NULL, NULL, 'john744@gmail.com', '$2y$10$4N/AMJXvskGCLdKFGJ3UQOOK3Y/t.p08mIfnWaaOX1e62gOeZwvfa', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:29:32', '2023-08-07 12:29:32', 'SA6693'),
(1060, NULL, NULL, 'akash745@gmail.com', '$2y$10$Dsl8Idp/YVaQNA3cyYCFO.P5UdMA49ApTJl1XLG6xJu.6r.b3NeI6', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:29:32', '2023-08-07 12:29:32', 'SA9146'),
(1061, NULL, NULL, 'akshay746@gmail.com', '$2y$10$Uo1K5Zix0mhp3wddqNjLZOu82l0OQ5E7tR6tqfl4TC9no7RNNOH6m', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:29:32', '2023-08-07 12:29:32', 'SA5356'),
(1062, NULL, NULL, 'mohann747@gmail.com', '$2y$10$AVqEV11/T9jARVfOWoZVQecslzHqpJOkS4QIJ78/5OFkjSWgOC1Wm', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:33:22', '2023-08-07 12:33:22', 'SA3148'),
(1063, NULL, NULL, 'rohan748@gmail.com', '$2y$10$7fidA2UTwasc7EJzk3YyA.MeuQGuGjFwQvomqKAGM8IddHeSbUxpa', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:33:23', '2023-08-07 12:33:23', 'SA3561'),
(1064, NULL, NULL, 'john749@gmail.com', '$2y$10$oFge0rV5U6zVotT2QX/2xu9gGfRtdwPGopU5g0duC9/K9Troa5X4C', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:33:23', '2023-08-07 12:33:23', 'SA7991'),
(1065, NULL, NULL, 'akash750@gmail.com', '$2y$10$lCHAIHj2ViUb4L3H/RtKcuaAVx1a2xxGBIG.FlD5kDlO01tqX0pSC', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:33:23', '2023-08-07 12:33:23', 'SA4241'),
(1066, NULL, NULL, 'akshay751@gmail.com', '$2y$10$.unp2dHrVLvpYjqjkT.uF.fWd2KvJQzpEB4YbDTPiEJpkt21Bwb4m', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:33:23', '2023-08-07 12:33:23', 'SA8141'),
(1067, NULL, NULL, 'mohann752@gmail.com', '$2y$10$e.U/l/zJ8snVC0NBrz.LQuvA0WGs/Hn.5Pk9L9Ky8oUHB9BD1.t5q', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:36:47', '2023-08-07 12:36:47', 'SA7731'),
(1068, NULL, NULL, 'rohan753@gmail.com', '$2y$10$FsFWGw1gzjyxaSkTLCyXnes..Cz6Ap6oouYVoP3qGZ0WTJCecKIra', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:36:47', '2023-08-07 12:36:47', 'SA5430'),
(1069, NULL, NULL, 'john754@gmail.com', '$2y$10$eJQyk2C9MBK/mWWImRKL8usweKQqlcFBseW72iaLLtrbriF4f7Ye6', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:36:47', '2023-08-07 12:36:47', 'SA4748'),
(1070, NULL, NULL, 'akash755@gmail.com', '$2y$10$oSNYsboK9ZHShW7F/M628.ALC.ffJZPtxpR.MhrDRomf0.z6WQotq', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:36:47', '2023-08-07 12:36:47', 'SA2442'),
(1071, NULL, NULL, 'akshay755@gmail.com', '$2y$10$5LGT.K8j84F6o9rKgKE6.uacvI4GHJGiUMUB1E982ExYpBzWqSr4u', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:36:48', '2023-08-07 12:36:48', 'SA8588'),
(1073, NULL, NULL, 'mohann756@gmail.com', '$2y$10$JmvybvFM612zSeBy55sz3.xP5nCPjGd6jrspKQrsz3qTvSQqhBg2a', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:41:02', '2023-08-07 12:41:02', 'SA8463'),
(1074, NULL, NULL, 'rohan757@gmail.com', '$2y$10$/7ALPe/K3lShcHkvLEY34eeNz7PRgZSKunP.xp/04uyRouJyq1ZmC', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:41:02', '2023-08-07 12:41:02', 'SA6267'),
(1075, NULL, NULL, 'john758@gmail.com', '$2y$10$Pwu0s7mIInj2Ause60TtOOxqXYNOjzp9Gm7MekM2fG4U7iWs1r7jK', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:41:02', '2023-08-07 12:41:02', 'SA2037'),
(1076, NULL, NULL, 'akash759@gmail.com', '$2y$10$9qzjJpWcWsKAX.S0nNyxseAIayOkFF8IZ3PVcYxxmeKUEGGqxFTuu', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:41:03', '2023-08-07 12:41:03', 'SA7916'),
(1077, NULL, NULL, 'akshay760@gmail.com', '$2y$10$um3EqFhDtheN0jaeAC2K..kOeJBH31cS.iOnHUjQJQ6QKjZlZ6Y62', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:41:03', '2023-08-07 12:41:03', 'SA9795'),
(1078, NULL, NULL, 'mohann761@gmail.com', '$2y$10$Eow7sZ.JkQDw91PTWpERiOCSXZAJjcOpcqamKeAAI.oeKEAI58rK6', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:43:26', '2023-08-07 12:43:26', 'SA7135'),
(1079, NULL, NULL, 'rohan762@gmail.com', '$2y$10$.RNy6FYNCUiW5p3N20tM6O6HRBQO3ku4U5m/6wd6dkyurL6CEFNtm', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:43:26', '2023-08-07 12:43:26', 'SA5002'),
(1080, NULL, NULL, 'john763@gmail.com', '$2y$10$cq2aCfBa3XEMqjMizt6kbe8PSLD83UTeLxBrgRVQtfmMH7YBoVxzi', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:43:26', '2023-08-07 12:43:26', 'SA9085'),
(1081, NULL, NULL, 'akash764@gmail.com', '$2y$10$LSVv5JlIktm073zb7iHJg.P5ZZNkJ//mb7RvHgABbRy19K.XhiDLu', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:43:27', '2023-08-07 12:43:27', 'SA9681'),
(1082, NULL, NULL, 'akshay765@gmail.com', '$2y$10$49om83Ft0c5YMXxnky5pB.lrbKQdV93F1bj2COWsQFSGWgLQCd0TG', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:43:27', '2023-08-07 12:43:27', 'SA8396'),
(1083, NULL, NULL, 'mohann766@gmail.com', '$2y$10$YEVshiKu/6l6jDOyIb/J3.kY2oMhfwMzaBmKqdw1hPfIbD6MrftSe', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:46:51', '2023-08-07 12:46:51', 'SA5920'),
(1084, NULL, NULL, 'rohan767@gmail.com', '$2y$10$20PDA3MT6lnsPV.sLdbvZORL5Fp6Varbw/C.s2FyalfPnRES00dW6', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:46:52', '2023-08-07 12:46:52', 'SA9553'),
(1085, NULL, NULL, 'john768@gmail.com', '$2y$10$ruMDQ8lmqMeCvi2Ie2ipAu1FKjZH41nz5oDeHraX7QOv5VJslgXX.', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:46:52', '2023-08-07 12:46:52', 'SA9612'),
(1086, NULL, NULL, 'akash769@gmail.com', '$2y$10$40n9NCgse1pwuBJYJQSk.ei7w4ACC0yVmP8aE4QyV9FrpS/0bW2TO', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:46:52', '2023-08-07 12:46:52', 'SA5215'),
(1087, NULL, NULL, 'akshay770@gmail.com', '$2y$10$RJIH7OuoVpENQ8UCHzsimenHOBhzCHJ4GeCgvCQ2yI.cYwz0Z3Lqa', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:46:52', '2023-08-07 12:46:52', 'SA1002'),
(1088, NULL, NULL, 'mohann771@gmail.com', '$2y$10$DsjOV3uh2AwkifOKpsqfbeZHck52Jl7yixDQQWlRXs3xL9zaIUU8a', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:49:56', '2023-08-07 12:49:56', 'SA9652'),
(1089, NULL, NULL, 'rohan772@gmail.com', '$2y$10$khTtXI/1/Ah/FjVg43Hcg.9wKDv.d0jpq0J8TL17Gud6zZNmO6d6S', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:49:56', '2023-08-07 12:49:56', 'SA3493'),
(1090, NULL, NULL, 'john773@gmail.com', '$2y$10$F2Oi/jxuyzfAO4r2jWQIzuACAsO6IACJWddgx1dv0zoTqLfnU3.pW', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:49:56', '2023-08-07 12:49:56', 'SA4515'),
(1091, NULL, NULL, 'akash774@gmail.com', '$2y$10$cKYcg1/djkETBWR5nNxAG.TUvv0vB6Jf82yotWnyBPVyoOXkr60oS', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:49:56', '2023-08-07 12:49:56', 'SA7823'),
(1092, NULL, NULL, 'akshay775@gmail.com', '$2y$10$qwfT9zGhJdFMYX09JM5Z9eX72pdThzeFwEe1PcOTFo2Qy.fUj98m.', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2023-08-07 12:49:56', '2023-08-07 12:49:56', 'SA4217'),
(1093, 'Jatin', NULL, 'jatin@gmail.com', '$2y$10$7KozH1rJ8mXVuhFrBbvgVuIBpeNCluIdxhnqTyEIHugBVECvpP7am', 2, '123456', NULL, NULL, NULL, NULL, NULL, NULL, '9775768979', NULL, NULL, NULL, NULL, 1, NULL, '2023-08-21 07:22:39', '2023-08-21 07:22:39', NULL),
(1094, 'Anju Gupta', NULL, 'anju@gmail.com', '$2y$10$mUK135k.eo0uohAzQwP/w.fEgDGf8yBC.Z.AAVW7X5FaqJE3G2B5G', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, '0000000001', NULL, NULL, NULL, NULL, 1, NULL, '2023-08-28 07:11:41', '2023-09-05 07:34:10', NULL),
(1095, 'Kundan Singh', NULL, 'kundan@gmail.com', '$2y$10$W6J6yFgdtNQwE2BjQ/oGk.hsMeBtsl1BRskP0lu1lQY.TpKrdzd2C', 3, '123456', NULL, NULL, NULL, NULL, NULL, NULL, '8787768768', NULL, NULL, NULL, NULL, 1, NULL, '2023-08-28 07:22:01', '2023-09-05 07:10:19', NULL),
(1096, 'Gautam Singh', NULL, 'gautam@gmail.com', '$2y$10$GbM.BvkTM9OgkEpWuPGq4eZPZbyu6glmJskYOPrPNkT4P2Rd7FfWO', 2, '123456', NULL, NULL, NULL, NULL, NULL, NULL, '6456456756', NULL, NULL, NULL, NULL, 1, NULL, '2023-08-28 12:08:36', '2023-08-28 12:34:12', NULL),
(1097, 'Abhimanyu', NULL, 'abhimanyu@gmail.com', '$2y$10$0/hb8SepoUCPIbZWph4eMeH8tg068GOXDDlIlg4ln7SOs3sqcu5lW', 2, '123456', NULL, NULL, NULL, NULL, NULL, NULL, '8689589795', NULL, NULL, NULL, NULL, 1, NULL, '2023-09-02 06:05:09', '2023-09-02 06:05:09', NULL),
(1098, 'Abhay', NULL, 'abhay@gmail.com', '$2y$10$6S3byqW4bTcyIyOH47dnz.19aieR2NbCOui2SwdahQ8JvlGPiJQ0q', 2, '123456', NULL, NULL, NULL, NULL, NULL, NULL, '5678987654', NULL, NULL, NULL, NULL, 1, NULL, '2023-09-02 06:08:01', '2023-09-02 06:08:01', NULL),
(1099, 'Aditi', NULL, 'aditi@gmail.com', '$2y$10$GNcpw5oQzub67TkJOv69Uejjs7Bv7CYuOEVL9D1r0CH4W5UiqMkWi', 2, '123456', NULL, NULL, NULL, NULL, NULL, NULL, '1987654323', NULL, NULL, NULL, NULL, 1, NULL, '2023-09-02 06:14:54', '2023-09-02 06:14:54', NULL),
(1100, 'Divya', NULL, 'divya@gmail.com', '$2y$10$j70q8iA19Be1Fb4QeO7CyezhSvr7GN//10NRe2wuLs33Z3c0Q9iBq', 2, '123456', NULL, NULL, NULL, NULL, NULL, NULL, '7865674839', NULL, NULL, NULL, NULL, 1, NULL, '2023-09-02 06:24:08', '2023-09-02 06:24:08', NULL),
(1101, 'Dipti', NULL, 'dipti@gmail.com', '$2y$10$1mWLGkdp4uyvfADTQSmtXesNIXsP/QpahrVfRPjki13OL7gt19uM.', 2, '123456', NULL, NULL, NULL, NULL, NULL, NULL, '7864839878', NULL, NULL, NULL, NULL, 1, NULL, '2023-09-02 06:27:22', '2023-09-02 06:27:22', NULL),
(1102, 'Ishaan', NULL, 'ishaan@gmail.com', '$2y$10$N8ABibjnGU0AoC8QvRO4LOwd6ZbX0aDU4XBibTcSBfgEMgjLTu8tS', 2, '123456', NULL, NULL, NULL, NULL, NULL, NULL, '7847937689', NULL, NULL, NULL, NULL, 1, NULL, '2023-09-02 06:35:07', '2023-09-02 06:35:07', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmission_enquiry`
--
ALTER TABLE `addmission_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_attend_staff`
--
ALTER TABLE `add_attend_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_class`
--
ALTER TABLE `add_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_class_time`
--
ALTER TABLE `add_class_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_collect_fees`
--
ALTER TABLE `add_collect_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_department`
--
ALTER TABLE `add_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_exam_group`
--
ALTER TABLE `add_exam_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_expense`
--
ALTER TABLE `add_expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_income`
--
ALTER TABLE `add_income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_leave_type`
--
ALTER TABLE `add_leave_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_lesson`
--
ALTER TABLE `add_lesson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_notice`
--
ALTER TABLE `add_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_phone_call`
--
ALTER TABLE `add_phone_call`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_promote_student`
--
ALTER TABLE `add_promote_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_section`
--
ALTER TABLE `add_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_staff`
--
ALTER TABLE `add_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_subject`
--
ALTER TABLE `add_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_teacher_time`
--
ALTER TABLE `add_teacher_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_topic`
--
ALTER TABLE `add_topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_visitor`
--
ALTER TABLE `add_visitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assign_teacher`
--
ALTER TABLE `assign_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_results`
--
ALTER TABLE `exam_results`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exam_results_add_no_unique` (`add_no`);

--
-- Indexes for table `exam_schedule`
--
ALTER TABLE `exam_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_head`
--
ALTER TABLE `expense_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fees_discount`
--
ALTER TABLE `fees_discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_group`
--
ALTER TABLE `fees_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_master`
--
ALTER TABLE `fees_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees_type`
--
ALTER TABLE `fees_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_cms_career_request`
--
ALTER TABLE `front_cms_career_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_cms_contact_request`
--
ALTER TABLE `front_cms_contact_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_cms_gallery`
--
ALTER TABLE `front_cms_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_cms_openings`
--
ALTER TABLE `front_cms_openings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_cms_openings_request`
--
ALTER TABLE `front_cms_openings_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_cms_parents`
--
ALTER TABLE `front_cms_parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_cms_setting`
--
ALTER TABLE `front_cms_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_cms_teacher`
--
ALTER TABLE `front_cms_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_setting`
--
ALTER TABLE `general_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income_head`
--
ALTER TABLE `income_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `report_cards`
--
ALTER TABLE `report_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school__information`
--
ALTER TABLE `school__information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_admission`
--
ALTER TABLE `student_admission`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_admission_admission_no_unique` (`admission_no`),
  ADD UNIQUE KEY `student_admission_email_unique` (`email`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_leave_request`
--
ALTER TABLE `student_leave_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_group`
--
ALTER TABLE `subject_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_content`
--
ALTER TABLE `upload_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmission_enquiry`
--
ALTER TABLE `addmission_enquiry`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `add_attend_staff`
--
ALTER TABLE `add_attend_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `add_class`
--
ALTER TABLE `add_class`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `add_class_time`
--
ALTER TABLE `add_class_time`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `add_collect_fees`
--
ALTER TABLE `add_collect_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `add_department`
--
ALTER TABLE `add_department`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `add_exam_group`
--
ALTER TABLE `add_exam_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `add_expense`
--
ALTER TABLE `add_expense`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_income`
--
ALTER TABLE `add_income`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_leave_type`
--
ALTER TABLE `add_leave_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `add_lesson`
--
ALTER TABLE `add_lesson`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_notice`
--
ALTER TABLE `add_notice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_phone_call`
--
ALTER TABLE `add_phone_call`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `add_promote_student`
--
ALTER TABLE `add_promote_student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_section`
--
ALTER TABLE `add_section`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_staff`
--
ALTER TABLE `add_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `add_subject`
--
ALTER TABLE `add_subject`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `add_teacher_time`
--
ALTER TABLE `add_teacher_time`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `add_topic`
--
ALTER TABLE `add_topic`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_visitor`
--
ALTER TABLE `add_visitor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `assign_teacher`
--
ALTER TABLE `assign_teacher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `exam_results`
--
ALTER TABLE `exam_results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `exam_schedule`
--
ALTER TABLE `exam_schedule`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `expense_head`
--
ALTER TABLE `expense_head`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees_discount`
--
ALTER TABLE `fees_discount`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fees_group`
--
ALTER TABLE `fees_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees_master`
--
ALTER TABLE `fees_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fees_type`
--
ALTER TABLE `fees_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `front_cms_career_request`
--
ALTER TABLE `front_cms_career_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `front_cms_contact_request`
--
ALTER TABLE `front_cms_contact_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `front_cms_gallery`
--
ALTER TABLE `front_cms_gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `front_cms_openings`
--
ALTER TABLE `front_cms_openings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `front_cms_openings_request`
--
ALTER TABLE `front_cms_openings_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_cms_parents`
--
ALTER TABLE `front_cms_parents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `front_cms_setting`
--
ALTER TABLE `front_cms_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `front_cms_teacher`
--
ALTER TABLE `front_cms_teacher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_setting`
--
ALTER TABLE `general_setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `income_head`
--
ALTER TABLE `income_head`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_request`
--
ALTER TABLE `leave_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_cards`
--
ALTER TABLE `report_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school__information`
--
ALTER TABLE `school__information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_admission`
--
ALTER TABLE `student_admission`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1091;

--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `student_leave_request`
--
ALTER TABLE `student_leave_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subject_group`
--
ALTER TABLE `subject_group`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upload_content`
--
ALTER TABLE `upload_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
