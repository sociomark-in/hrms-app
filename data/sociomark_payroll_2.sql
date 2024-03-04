-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 01:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sociomark_payroll_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement_board`
--

CREATE TABLE `announcement_board` (
  `id` int(11) NOT NULL,
  `announcement_text` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement_board`
--

INSERT INTO `announcement_board` (`id`, `announcement_text`, `status`, `author_id`, `created_at`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores incidunt amet odio beatae. Quaerat qui sed itaque, aut eveniet et delectus pariatur sequi vero maiores porro soluta doloremque! Eaque, consequuntur.', 1, 26, '2024-01-31 12:38:49');

-- --------------------------------------------------------

--
-- Table structure for table `app_application_acess`
--

CREATE TABLE `app_application_acess` (
  `id` int(11) NOT NULL,
  `access_id` varchar(64) NOT NULL,
  `subscription_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_application_acess`
--

INSERT INTO `app_application_acess` (`id`, `access_id`, `subscription_id`, `created_at`) VALUES
(1, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 1, '2024-02-05 06:43:51');

-- --------------------------------------------------------

--
-- Table structure for table `app_application_users`
--

CREATE TABLE `app_application_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `role` varchar(100) NOT NULL,
  `app_id` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_application_users`
--

INSERT INTO `app_application_users` (`id`, `first_name`, `last_name`, `email`, `password`, `profile_picture`, `role`, `app_id`, `created_at`, `status`) VALUES
(1, 'Hemant', 'Karekar', 'hemant@sociomark.in', '$2y$10$wckZ1b.VIg9.Xv7gNmQqie99wv7CAhg6jyrzgEdViPujCEwwDMDn.', NULL, '', 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `app_company_attendance`
--

CREATE TABLE `app_company_attendance` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `attendance_date` date DEFAULT NULL,
  `timepunchIn` varchar(20) DEFAULT NULL,
  `timepunchOut` varchar(20) DEFAULT NULL,
  `hours` varchar(100) DEFAULT NULL,
  `added_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_company_attendance`
--

INSERT INTO `app_company_attendance` (`id`, `app_id`, `emp_id`, `attendance_date`, `timepunchIn`, `timepunchOut`, `hours`, `added_at`, `updated_at`, `status`) VALUES
(1, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 1, '2024-03-04', '10:54:01', NULL, NULL, '2024-03-04 10:54:04', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `app_company_employee`
--

CREATE TABLE `app_company_employee` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `pan` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `joining_date` date NOT NULL,
  `leave_date` date NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `report_to` int(11) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT '1' COMMENT '1=present,0=Not present',
  `created_at` datetime DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_company_employee`
--

INSERT INTO `app_company_employee` (`id`, `app_id`, `first_name`, `last_name`, `email`, `emp_id`, `password`, `mobile`, `pan`, `dob`, `gender`, `dept_id`, `designation_id`, `joining_date`, `leave_date`, `profile_picture`, `level`, `report_to`, `status`, `created_at`, `updated_at`) VALUES
(1, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Hemant', 'Karekar', 'hemant@sociomark.in', '', '$2y$10$gPgR/9s6XM6vvzd8e0eo1.00a33VOf.aQwMqaUynO8v7Wq4CWPn5e', '8689862375', '', '0000-00-00', '', 0, 0, '0000-00-00', '0000-00-00', NULL, NULL, NULL, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `app_company_holidays`
--

CREATE TABLE `app_company_holidays` (
  `id` int(11) NOT NULL,
  `app_id` text NOT NULL,
  `title` varchar(200) NOT NULL,
  `from_date` varchar(100) DEFAULT NULL,
  `to_date` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_company_holidays`
--

INSERT INTO `app_company_holidays` (`id`, `app_id`, `title`, `from_date`, `to_date`, `created_at`) VALUES
(1, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Republic Day', '26-01', '26-01', '2024-01-01 07:04:51'),
(2, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Holi / Dhulandi', '25-03', '25-03', '2024-01-01 07:08:38'),
(3, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Gudi Padwa', '09-04', '09-04', '2024-01-01 07:08:38'),
(4, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Maharashtra Day', '01-05', '01-05', '2024-01-01 07:10:04'),
(5, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Independence Day', '15-06', '15-06', '2024-01-01 07:10:04'),
(6, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Ganesh Chaturthi', '07-09', '07-09', '2024-01-01 07:10:04'),
(7, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Gandhi Jayanti', '02-10', '02-10', '2024-01-01 07:10:04'),
(8, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Diwali', '31-10', '31-10', '2024-01-01 07:10:04'),
(9, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Laxmi Pujan / Diwali', '01-11', '01-11', '2024-01-01 07:10:04'),
(10, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Christmas', '25-12', '25-12', '2024-01-01 07:10:04');

-- --------------------------------------------------------

--
-- Table structure for table `app_company_settings`
--

CREATE TABLE `app_company_settings` (
  `id` int(11) NOT NULL,
  `settings_key` text NOT NULL,
  `settings_value` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `app_salary_components`
--

CREATE TABLE `app_salary_components` (
  `id` int(11) NOT NULL,
  `component_name` varchar(200) NOT NULL,
  `component_type` varchar(100) NOT NULL,
  `calculations` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `app_subscriptions`
--

CREATE TABLE `app_subscriptions` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `att_year` varchar(100) NOT NULL,
  `att_month` varchar(100) NOT NULL,
  `present_days` varchar(100) NOT NULL,
  `paid_leaves` varchar(100) NOT NULL,
  `leaves_taken` float DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `changes_history`
--

CREATE TABLE `changes_history` (
  `id` int(11) NOT NULL,
  `change_key` varchar(255) DEFAULT NULL,
  `change_by` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `client_name` varchar(100) DEFAULT NULL,
  `added_at` datetime DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '1=present,0=Not present',
  `logo` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_leaves`
--

CREATE TABLE `client_leaves` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `total_leaves` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `sick_leave` int(11) DEFAULT NULL,
  `paid_leave` int(11) DEFAULT NULL,
  `casual_leave` int(11) DEFAULT NULL,
  `earned_leave` int(11) DEFAULT NULL,
  `paternity_leave` int(11) DEFAULT NULL,
  `maternity_leave` int(11) DEFAULT NULL,
  `privilege_leave` int(11) DEFAULT NULL,
  `medical_leave` int(11) DEFAULT NULL,
  `date` varchar(100) NOT NULL,
  `updated_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_leave_value`
--

CREATE TABLE `client_leave_value` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `start_date` varchar(100) DEFAULT NULL,
  `end_date` varchar(100) DEFAULT NULL,
  `sick_leave` varchar(50) DEFAULT NULL,
  `paid_leave` varchar(50) DEFAULT NULL,
  `casual_leave` varchar(50) DEFAULT NULL,
  `earned_leave` varchar(50) DEFAULT NULL,
  `medical_leave` varchar(50) DEFAULT NULL,
  `maternity_leave` varchar(50) DEFAULT NULL,
  `paternity_leave` varchar(50) DEFAULT NULL,
  `privilege_leave` varchar(50) DEFAULT NULL,
  `total_leaves` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `updated_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_salary_heads`
--

CREATE TABLE `client_salary_heads` (
  `id` int(11) NOT NULL,
  `client_id` int(11) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL COMMENT '1 for active, 0 for inactive',
  `pf` varchar(25) DEFAULT NULL,
  `epf` varchar(25) DEFAULT NULL,
  `esic` varchar(25) DEFAULT NULL,
  `hra` varchar(25) DEFAULT NULL,
  `conveyance` varchar(25) DEFAULT NULL,
  `special_allowance` varchar(25) DEFAULT NULL,
  `medical_allowance` varchar(25) DEFAULT NULL,
  `health_insurance` varchar(25) DEFAULT NULL,
  `pt` varchar(25) DEFAULT NULL,
  `tds` varchar(25) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `updated_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comp_off`
--

CREATE TABLE `comp_off` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `comp_off` varchar(100) NOT NULL,
  `compoff_date` datetime NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT ' 0 = pending , 1= approved , 2= reject',
  `created_at` varchar(50) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `dept_name`, `app_id`, `created_at`) VALUES
(1, 'IT', 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', '2024-02-05 06:46:22'),
(2, 'Marketing', 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', '2024-02-05 06:46:22'),
(3, 'Creative', 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', '2024-02-05 06:46:22'),
(4, 'HR ', 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', '2024-02-05 06:46:22'),
(5, 'Legal', 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', '2024-02-05 06:46:22'),
(6, 'Founder', 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', '2024-02-05 06:46:22'),
(7, 'Accounts ', 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', '2024-02-05 06:46:22');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `designation` varchar(255) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`id`, `app_id`, `designation`, `dept_id`) VALUES
(1, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Sr. Web Developer', 1),
(2, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Social Media Executive', 2),
(3, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Sr. Graphic Designer', 3),
(4, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Graphic Designer', 3),
(5, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Web Developer', 1),
(6, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Sr. Social Media Executive', 2),
(7, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'SEO Specialist', 2),
(17, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Executive - Motion Graphic Designer', 3),
(9, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'CEO & Co-founder', 6),
(10, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'CEO & Creative Director', 6),
(11, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Co-Founder', 6),
(12, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Executive - Motion Graphic Designer & Photographer', 3),
(13, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Sr. Motion Graphic Designer & Illustrator', 3),
(14, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Sr. Motion Graphic Designer', 3),
(15, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Sr. Content Writer', 3),
(16, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Managing Director', 6),
(18, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Intern', 2),
(19, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Executive - SEM', 2),
(20, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'HR Executive ', 4),
(21, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Content Writer', 3),
(22, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Accounts Executive ', 7),
(23, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Business Development Executive ', 2),
(24, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'SEO Executive ', 2),
(25, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Illustrator', 3),
(26, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Public Relations ', 2),
(27, 'IuxZcao13A40gg1YMaNHnWOWJoJoLpJb', 'Ecommerce- Executive', 2);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `app_id` mediumtext NOT NULL,
  `aadhar_card` varchar(50) DEFAULT NULL,
  `proof_type` varchar(50) DEFAULT NULL,
  `pan_card` varchar(50) DEFAULT NULL,
  `last_marksheet` varchar(50) DEFAULT NULL,
  `doctor_certificate` varchar(50) DEFAULT NULL,
  `resigning_letter` varchar(50) DEFAULT NULL,
  `offer_letter` varchar(50) DEFAULT NULL,
  `monthly_salary_slip` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `half_day`
--

CREATE TABLE `half_day` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) DEFAULT NULL,
  `app_id` mediumtext NOT NULL,
  `half_day_date` date DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0=pending , 1= approved , 2 = rejected'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `emp_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `total_days` int(11) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `sl` varchar(30) DEFAULT NULL,
  `pl` varchar(30) DEFAULT NULL,
  `wfh` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0 = pending, 1 = approved ,2 = reject',
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `incentive`
--

CREATE TABLE `incentive` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `amt` float DEFAULT NULL,
  `month` varchar(10) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `added_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landing_application_enquiries`
--

CREATE TABLE `landing_application_enquiries` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `organization_name` varchar(255) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `work_email` varchar(200) NOT NULL,
  `max_employees` int(11) NOT NULL,
  `is_onboarded` int(11) NOT NULL DEFAULT 0,
  `email_validated` int(11) NOT NULL DEFAULT 0,
  `email_validate_key` varchar(20) NOT NULL,
  `email_validate_key_expires` varchar(160) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `landing_application_enquiries`
--

INSERT INTO `landing_application_enquiries` (`id`, `full_name`, `organization_name`, `contact_number`, `work_email`, `max_employees`, `is_onboarded`, `email_validated`, `email_validate_key`, `email_validate_key_expires`, `created_at`) VALUES
(1, 'Hemant Karekar', 'Sociomark', '+91 868 986 2375', 'hemant@sociomark.in', 5, 1, 1, 'ILGUsYAC9tczZy3b', '2024-03-05 03:53:52', '2024-03-04 10:12:44'),
(2, 'Kunal Mahajan', 'Sociomark', '+91 868 986 2375', 'kunal@sociomark.in', 5, 0, 0, 'ESb640n2CuOkayZX', '2024-03-05 05:19:07', '2024-03-04 11:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `leaves` varchar(100) NOT NULL,
  `status` int(11) DEFAULT 1 COMMENT ' 0 = pending , 1= approved , 2= reject',
  `sl` varchar(20) DEFAULT NULL,
  `pl` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `app_id` mediumtext NOT NULL,
  `emp_id` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `package` varchar(100) NOT NULL,
  `status` int(11) DEFAULT 1 COMMENT '0=Deleted,1=Not deleted',
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement_board`
--
ALTER TABLE `announcement_board`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_application_acess`
--
ALTER TABLE `app_application_acess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_application_users`
--
ALTER TABLE `app_application_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_company_attendance`
--
ALTER TABLE `app_company_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_company_employee`
--
ALTER TABLE `app_company_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_company_holidays`
--
ALTER TABLE `app_company_holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_company_settings`
--
ALTER TABLE `app_company_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_salary_components`
--
ALTER TABLE `app_salary_components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_subscriptions`
--
ALTER TABLE `app_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `changes_history`
--
ALTER TABLE `changes_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_leaves`
--
ALTER TABLE `client_leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_leave_value`
--
ALTER TABLE `client_leave_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_salary_heads`
--
ALTER TABLE `client_salary_heads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comp_off`
--
ALTER TABLE `comp_off`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `half_day`
--
ALTER TABLE `half_day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incentive`
--
ALTER TABLE `incentive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing_application_enquiries`
--
ALTER TABLE `landing_application_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement_board`
--
ALTER TABLE `announcement_board`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_application_acess`
--
ALTER TABLE `app_application_acess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_application_users`
--
ALTER TABLE `app_application_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_company_attendance`
--
ALTER TABLE `app_company_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_company_employee`
--
ALTER TABLE `app_company_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_company_holidays`
--
ALTER TABLE `app_company_holidays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `app_company_settings`
--
ALTER TABLE `app_company_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_salary_components`
--
ALTER TABLE `app_salary_components`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_subscriptions`
--
ALTER TABLE `app_subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `changes_history`
--
ALTER TABLE `changes_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_leaves`
--
ALTER TABLE `client_leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_leave_value`
--
ALTER TABLE `client_leave_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_salary_heads`
--
ALTER TABLE `client_salary_heads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comp_off`
--
ALTER TABLE `comp_off`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `half_day`
--
ALTER TABLE `half_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `incentive`
--
ALTER TABLE `incentive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `landing_application_enquiries`
--
ALTER TABLE `landing_application_enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
