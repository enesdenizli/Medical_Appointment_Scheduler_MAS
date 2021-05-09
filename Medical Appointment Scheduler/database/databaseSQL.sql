-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 05:02 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medaptsch`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
    `appointment_id` int(11) NOT NULL,
    `physician_id` varchar(255) NOT NULL,
    `patient_id` varchar(255) NOT NULL,
    `nurse_id` varchar(255) NOT NULL,
    `time` varchar(100) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE IF NOT EXISTS `insurance` (
    `insurance_id` varchar(128) NOT NULL,
    `insurance_provider` text NOT NULL,
    `pfirst_name` text NOT NULL,
    `plast_name` text NOT NULL,
    `patient_ssn` int(11) NOT NULL,
    `coverage` varchar(100) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE IF NOT EXISTS `nurse` (
    `nurse_id` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `first_name` text NOT NULL,
    `last_name` text NOT NULL,
    `phone_number` varchar(50) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`nurse_id`, `password`, `first_name`, `last_name`, `phone_number`) VALUES
('Ashleigh123', 'bd93d508f1db51c23d7be08815012c42', 'Ashleigh', 'Jordan', '(646)896-4532'),
('Donnell123', '09a23b7e6a6e45f3f9c33ad8e7161858', 'Donnell', 'Lancaster', '(646)898-1248'),
('Eloisa123', 'fd987397046b6412a7ee5a8b5a5b57bb', 'Eloisa', 'Hibbert', '(646)896-1234'),
('Ishika123', '3fd3e29d04db1a96d1ea2831fa9e677f', 'Ishika', 'Dyer', '(646)896-4566'),
('Marcos123', '806b2d2faa89ef304d696fb0898d9755', 'Marcos', 'Weaver', '(646)896-4567'),
('Milli123', 'ad47bdf6c88af51a998251f8a4a65b59', 'Milli', 'Jeffery', '(646)896-1111'),
('Nolan123', '136c959c47121d02e02b9ee58e8f4e20', 'Nolan', 'Rich', '(646)896-9874'),
('Raul123', 'ef320824f2fb370dae1a48bdf2f5f886', 'Raul', 'Hutchinson', '(646)896-5555'),
('Tarik123', 'f0550592ae34002005bde1c76af6b636', 'Tarik', 'Dyer', '(646)896-7898'),
('Yvie123', '459f42afb9934f34896d4f946f075a77', 'Yvie', 'Shea', '(646)896-3579');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
    `user_id` varchar(255) NOT NULL,
    `password` varchar(100) NOT NULL,
    `first_name` text NOT NULL,
    `last_name` text NOT NULL,
    `date_of_birth` varchar(100) NOT NULL,
    `sex` varchar(100) NOT NULL,
    `ssn` int(11) NOT NULL,
    `insurance_id` int(11) DEFAULT NULL,
    `address` text NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `physician`
--

CREATE TABLE IF NOT EXISTS `physician` (
    `physician_id` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `first_name` text NOT NULL,
    `last_name` text NOT NULL,
    `phone_number` varchar(50) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physician`
--

INSERT INTO `physician` (`physician_id`, `password`, `first_name`, `last_name`, `phone_number`) VALUES
('Arya123', 'ad47bdf6c88af51a998251f8a4a65b59', 'Arya', 'Jeffery', '(813)639-6743'),
('Eamon123', '09a23b7e6a6e45f3f9c33ad8e7161858', 'Eamon', 'Lancaster', '(318)639-6743'),
('Hina123', 'ef320824f2fb370dae1a48bdf2f5f886', 'Hina', 'Hutchinson', '(383)639-6743'),
('Kaylem123', 'aa5ab686352e54781b69ef79f692b255', 'Kaylem', 'Peel', '(313)699-6743'),
('Nicole123', 'bd93d508f1db51c23d7be08815012c42', 'Nicole', 'Jordan', '(317)639-6743'),
('Nisha123', '806b2d2faa89ef304d696fb0898d9755', 'Nisha', 'Weaver', '(313)639-6943'),
('Priyanka123', '89e2ecbc1630979e06b0c7eac9e65fb3', 'Priyanka', 'Zuniga', '(313)639-6773'),
('Rosanna123', '136c959c47121d02e02b9ee58e8f4e20', 'Rosanna', 'Rich', '(319)639-6743'),
('Vickie123', 'f0550592ae34002005bde1c76af6b636', 'Vickie', 'Dyer', '(363)639-6743'),
('Zishan123', '459f42afb9934f34896d4f946f075a77', 'Zishan', 'Shea', '(313)609-6743');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
    ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
    ADD PRIMARY KEY (`insurance_id`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
    ADD PRIMARY KEY (`nurse_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
    ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `physician`
--
ALTER TABLE `physician`
    ADD PRIMARY KEY (`physician_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
    MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
