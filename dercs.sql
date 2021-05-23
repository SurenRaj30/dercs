-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 02:36 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dercs`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `custID` int(10) UNSIGNED NOT NULL,
  `user_fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` enum('Staff','Customer','Runner') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`custID`, `user_fullname`, `user_address`, `user_email`, `user_password`, `user_type`) VALUES
(1, 'suren', 'no 75 jln 3/8', 'rj', '12', 'Customer'),
(2, 'Tzuyu', 'No 75', 'rajsuren@gmail.com', '12', 'Customer'),
(3, 'theva', 'no 75', 'rj@gmail.com', '12', 'Customer'),
(4, 'priya raj', 'no 75 jln 3/8', 'priya@gmail.com', '12', 'Customer'),
(5, 'priya raj', 'no 75 jln 3/8', 'priya@gmail.com', '12', 'Customer'),
(6, 'Pavi', 'no 75 jln 3/8', 'raj@gmail.com', '12', 'Customer'),
(7, 'Pavi', 'no 75 jln 3/8', 'raj@gmail.com', '12', 'Customer'),
(8, 'Pavi', 'no 75 jln 3/8', 'raj@gmail.com', '12', 'Customer'),
(9, 'Pavi', 'no 75 jln 3/8', 'raj@gmail.com', '12', 'Customer'),
(10, 'Pavi', 'no 75 jln 3/8', 'raj@gmail.com', '12', 'Customer'),
(11, 'Pavi', 'no 75 jln 3/8', 'raj@gmail.com', '12', 'Customer'),
(12, 'Pavi', 'no 75 jln 3/8', 'raj@gmail.com', '12', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_100000_create_password_resets_table', 1),
(10, '2019_08_19_000000_create_failed_jobs_table', 1),
(11, '2021_05_23_021301_create_customers_table', 2),
(12, '2021_05_23_023002_create_staff_table', 3),
(16, '2021_05_23_025919_create_runners_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `runners`
--

CREATE TABLE `runners` (
  `runID` int(10) UNSIGNED NOT NULL,
  `run_fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `run_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `run_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `run_age` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL,
  `run_lang` enum('English','Malay') COLLATE utf8mb4_unicode_ci NOT NULL,
  `run_citizen` enum('Malaysian','Non-Malaysian') COLLATE utf8mb4_unicode_ci NOT NULL,
  `run_license` enum('Yes','No') COLLATE utf8mb4_unicode_ci NOT NULL,
  `run_agree` enum('Yes') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Runner'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `runners`
--

INSERT INTO `runners` (`runID`, `run_fullname`, `run_email`, `run_password`, `run_age`, `run_lang`, `run_citizen`, `run_license`, `run_agree`, `user_type`) VALUES
(1, 'rj', 'rj@gmail.com', '12', 'Yes', 'English', 'Malaysian', 'Yes', 'Yes', 'Runner'),
(2, 'sana', '0t9@gmail.com', '12', 'Yes', 'English', 'Malaysian', 'Yes', 'Yes', 'Runner');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` int(10) UNSIGNED NOT NULL,
  `staff_fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `staff_fullname`, `staff_email`, `staff_password`, `user_type`) VALUES
(1, 'rja', 'rj@gmail.com', '12', 'Staff'),
(2, 'Jihyo', 'jih@gmail.com', '12', 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`custID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `runners`
--
ALTER TABLE `runners`
  ADD PRIMARY KEY (`runID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `custID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `runners`
--
ALTER TABLE `runners`
  MODIFY `runID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
