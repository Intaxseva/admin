-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 01:06 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intaxseva`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `foto`) VALUES
(1, 'intaxseva', '1cadb00ca17fabc9138b7cc381b5e992', 'Admin INTAXSEVA', 'intaxseva_logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` bigint(20) NOT NULL,
  `service_type` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `required_doc` varchar(250) NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `service_type`, `description`, `required_doc`, `payment`) VALUES
(1, 'Salaried individual tax filling', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 500),
(2, 'Individual tax', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(3, 'NRI Tax Returns', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(4, 'Residents with foreign income', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(5, 'Tax notice Management', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(6, 'Tax filing for Cryptocurrency gains', 'Startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(7, 'Long term capital gain tax filling', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 1000),
(8, 'Shortterm capital gain tax filling', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 1000),
(9, 'TDS on sale of property', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 1000),
(10, 'Digital signature', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 1000),
(11, 'GST Registeration', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 1000),
(12, 'PF & ESI Registeration', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 1000),
(13, 'Private limited registeration', 'startup.pvt.Ltd', 'pann number/Aadhar number', 10000),
(14, 'Private limited registeration With GST', 'startup.pvt.Ltd', 'pann number/Aadhar number', 10500),
(15, 'Limited Liability Registeration', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 8000),
(16, 'Limited Liability Registeration with Gst', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 8600),
(17, 'One person company registeration', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 10000),
(18, 'One person company registeration with GST', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 10600),
(19, 'NGO Registeration', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 23000),
(20, 'Partnership firm registeration', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 5000),
(21, 'Partnership firm registeration with GST', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 5600),
(22, 'Propertership registeration', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 2000),
(23, 'GST Registeration', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 600),
(24, 'Amendment of GST', 'Changes of Name, Address,Contact etc.,', 'pann number/Aadhar number', 600),
(25, 'GST Compostion scheme Quarterly filing', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 1000),
(26, 'GST Monthly filing upto 300 bills', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 500),
(27, 'GST Monthly filing More than 300 upto 1000', 'startup.pvt.Ltd', 'pann number/Aadhar number', 1200),
(28, 'GST Monthly filing More than 1000', 'startup.pvt.Ltd', 'pann number/Aadhar number', 2000),
(29, 'E way bill upto 500 yearly', 'startup.Pvt.Ltd', 'pann number/Aadhar number', 5000),
(30, 'E way bill upto 500 <1000 yearly', 'startup.pvt.Ltd.', 'pan number/adhaar number', 10000),
(31, 'E way bill upto yearly compo unlimited', 'startup.pvt.Ltd.', 'pan number/adhaar number', 25000),
(32, 'Launch your startup', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(33, 'Startup india registeration', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(34, 'Startup compo services', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(35, 'Winding up', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(36, 'Company name removal', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(37, 'Company and LLP Income tax return', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(38, 'Book keeping and Accounts maintenance', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(39, 'Payroll processing & Preparation', 'startup.Pvt.Ltd', 'pan number.Aadhar number', 1000),
(40, 'Tax filing Security traders', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(41, 'Presumptive income tax return', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(42, 'Business tax return Without audit report', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(43, 'Business tax return With audit report', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(44, 'Provident fund registeration', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 6000),
(45, 'ESI Registeration', 'Startup.Pvt.Ltd', 'pan number/Aadhar number', 5000),
(46, 'FSSAI registeration', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 4000),
(47, 'IE CODE (Import / Export)', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 4000),
(48, 'Proffessional tax registeration', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(49, 'Shop and Establishment act registertion', 'startup.Pvt.Ltd', 'pan number,Aadhar number', 1000),
(50, 'Trade mark for Companies', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 10000),
(51, 'Trade mark for Individual', 'startup.Pvt.ltd', 'pan number/Aadhar number', 5000),
(52, 'Patent & Logo Registeration', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(53, 'MSME / SSI registeration', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(54, 'NBFC registertion from RBI', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(55, 'Foreign exchange Registeration', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(56, 'Micro finance Services', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000),
(57, 'Foreign company registeration compo', 'startup.Pvt.Ltd', 'pan number/Aadhar number', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `transaction_id` text,
  `payment_amount` text NOT NULL,
  `payment_mode` text NOT NULL,
  `service_id` int(11) NOT NULL,
  `datetime` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `user_id`, `transaction_id`, `payment_amount`, `payment_mode`, `service_id`, `datetime`) VALUES
(135, 100, NULL, '1000', '', 3, '2018-07-09 13:37:20'),
(136, 101, NULL, '500', '', 2, '2018-07-09 13:38:50'),
(137, 102, 'MM12JU5431', '1000', 'NetBanking', 4, '2018-07-09 13:49:05'),
(139, 104, NULL, '1000', '', 4, '2018-07-09 16:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` bigint(20) NOT NULL,
  `service_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `deliverydate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_id`, `user_id`, `status`, `datetime`, `deliverydate`) VALUES
(77, 3, 100, '', '2018-07-09 13:37:20', '24/07/2018'),
(78, 2, 101, '', '2018-07-09 13:38:50', '24/07/2018'),
(79, 4, 102, 'pending', '2018-07-09 13:49:05', '24/07/2018'),
(81, 4, 104, '', '2018-07-09 16:24:59', '24/07/2018');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `datetime`, `password`, `foto`) VALUES
(100, 'dhamu', '8667632613', 'dhamotharan@fastura.com', '2018-07-09 13:37:20', '6bfbd328dc2bc5f8f9809a5298a294c1', 'profil1.jpg'),
(101, 'karthik', '8489632803', 'karthikaivel@fastura.com', '2018-07-09 13:38:50', '6bfbd328dc2bc5f8f9809a5298a294c1', 'profil1.jpg'),
(102, 'raja', '8489632810', 'raja@fastura.com', '2018-07-09 13:49:05', '6bfbd328dc2bc5f8f9809a5298a294c1', 'profil1.jpg'),
(104, 'kannan', '8989898988', 'kannan@gmail.com', '2018-07-09 16:24:59', '6bfbd328dc2bc5f8f9809a5298a294c1', 'profil1.jpg');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `insert user id` AFTER INSERT ON `user` FOR EACH ROW BEGIN
insert into service(user_id,datetime) values (New.id,New.datetime);
insert into payment(user_id,datetime) values(New.id,New.datetime);
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
