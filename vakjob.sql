-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2018 at 01:20 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_vakjob`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `wachtwoord` varchar(50) NOT NULL,
  `user_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `wachtwoord`, `user_level`) VALUES
(1, 'timmy1420', 'timmy1420', 1),
(4, 'Rheo', 'test', 2);

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `topic` varchar(45) NOT NULL,
  `description` varchar(512) NOT NULL,
  `img` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img_path` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `admin_id`, `topic`, `description`, `img`, `updated_at`, `created_at`, `img_path`) VALUES
(3, 0, 'Nieuwe update', 'Er is een nieuwe platform beschikbaar', '', '2018-02-07 08:07:15', '2018-02-07 08:07:15', NULL),
(4, 0, 'Directeur verjaring', 'Directeur is jarig', '', '2018-02-07 08:07:15', '2018-02-07 08:07:15', NULL),
(6, 0, 'Goed niews!', 'Dit is een goede topic', '', '2018-02-07 08:07:15', '2018-02-07 08:07:15', NULL),
(7, 1, 'Test', 'Testing this', '../uploads/1519201711.', '2018-02-21 08:28:31', '2018-02-21 08:28:31', NULL),
(15, 1, 'Beheer uitvoer', 'De pagina zal worden beheerd morgen.', '../uploads/1519218191.', '2018-02-21 13:03:11', '2018-02-21 13:03:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(11) NOT NULL,
  `gebruikersnaam` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `bedrijfsnaam` varchar(45) NOT NULL,
  `adres` varchar(45) NOT NULL,
  `wachtwoord` varchar(50) NOT NULL,
  `img_path` text NOT NULL,
  `img_name` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `gebruikersnaam`, `email`, `bedrijfsnaam`, `adres`, `wachtwoord`, `img_path`, `img_name`, `updated_at`, `created_at`) VALUES
(1, 'tim', 'company@gmail.com', 'Software Inc.', '', 'tim', '', '', '2018-02-13 13:57:18', '2018-02-13 13:57:18'),
(2, 'assuria', 'test@test', 'Assuria N.V.', 'test', 'assuria', '', '', '2018-02-13 15:22:08', '2018-02-13 15:22:08'),
(4, 'kirpa', 'kirpa@gmail.com', 'Kirpalani', 'Maagdenstraat', 'kirpa', '', '', '2018-02-21 12:58:51', '2018-02-21 12:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(15) NOT NULL,
  `naam` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `onderwerp` varchar(45) NOT NULL,
  `bericht` varchar(512) NOT NULL,
  `datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `user_type`, `naam`, `email`, `onderwerp`, `bericht`, `datum`) VALUES
(2, 0, '', 'Timothy', 'timothy@email.com', 'Test', 'Dit is een test', '2018-02-11'),
(3, 0, '', 'Rheo', 'rheo@email.com', 'Test', 'Dit is een test 2', '2018-02-11'),
(4, 0, '', '', 'test@email', 'Een bericht', 'DIt is een test', '2018-02-11'),
(5, 0, '', '', '', 'Een report voor vandaag', 'Er is iets', '2018-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `gebruikersnaam` varchar(45) NOT NULL,
  `voornaam` varchar(45) DEFAULT NULL,
  `achternaam` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `school` varchar(45) NOT NULL,
  `adres` varchar(45) NOT NULL,
  `wachtwoord` varchar(50) NOT NULL,
  `geboorte_datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `gebruikersnaam`, `voornaam`, `achternaam`, `email`, `school`, `adres`, `wachtwoord`, `geboorte_datum`, `updated_at`, `created_at`) VALUES
(5, 'hupsel', 'Sheldon', 'Hupsel', 'hupsel@gmail.com', 'NATIN', 'Hermitageweg', 'hupsel', '2018-02-21 10:30:05', '2018-02-07 08:52:33', '2018-02-07 08:52:33'),
(11, 'student', 'Joel', 'Van der San', 'student@gmail.com', 'NATIN', 'erer', 'stu', '2018-02-21 12:06:47', '2018-02-21 11:59:45', '2018-02-21 11:59:45');

-- --------------------------------------------------------

--
-- Table structure for table `vacatures`
--

CREATE TABLE `vacatures` (
  `id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `views` varchar(45) NOT NULL,
  `begin_time` text,
  `end_time` text,
  `location` varchar(45) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longtitude` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vacatures`
--

INSERT INTO `vacatures` (`id`, `employer_id`, `name`, `description`, `views`, `begin_time`, `end_time`, `location`, `latitude`, `longtitude`, `status`, `updated_at`, `created_at`) VALUES
(1, 1, 'HRM Medewerker', 'Functie als een HRM medewerker in ons kantoor', '', '2018-02-17 16:32:02', '2018-02-17 16:32:02', 'Paramaribo', '', '', '', '0000-00-00 00:00:00', '2018-02-17 19:31:36'),
(3, 1, 'Oproep HRM', 'HRM functie vacature', '', '08:00u', '15:00u', 'In de staat', '', '', '', '0000-00-00 00:00:00', '2018-02-21 11:05:37'),
(4, 1, 'test', 'test', '', NULL, NULL, '', '', '', '', '0000-00-00 00:00:00', '2018-02-21 12:34:41'),
(7, 0, '', NULL, '', NULL, NULL, '', '', '', '', '0000-00-00 00:00:00', '2018-02-21 12:37:48'),
(8, 1, 'Keuken', 'Medewerker gezocht in de keuken', '', '08:00u', '15:00u', 'Maagdenstraat', '', '', '', '0000-00-00 00:00:00', '2018-02-21 12:56:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`admin_id`);

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`type`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `vacatures`
--
ALTER TABLE `vacatures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`,`employer_id`,`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `vacatures`
--
ALTER TABLE `vacatures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
