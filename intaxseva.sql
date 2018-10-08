-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2018 at 06:38 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `photo`) VALUES
(1, 'intaxseva', '1cadb00ca17fabc9138b7cc381b5e992', 'Admin INTAXSEVA', 'intaxseva_logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` bigint(20) NOT NULL,
  `service_type` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `required_doc` varchar(250) NOT NULL,
  `payment` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=latin1;

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
-- Table structure for table `kelamin`
--

CREATE TABLE IF NOT EXISTS `kelamin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelamin`
--

INSERT INTO `kelamin` (`id`, `nama`) VALUES
(1, 'Laki laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `payment_amount` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama`, `payment_amount`) VALUES
(3, 'Blitarg6', 5),
(17, 'Jakarta', 0),
(21, 'Surabaya', 0),
(22, 'Paris', 0),
(24, 'Swizz', 0),
(25, 'Blitarg6', 1),
(26, 'Blitarg6', 1),
(27, 'Blitarg6', 1),
(28, 'Blitarg6', 1),
(29, 'adf', 2),
(30, 'Blitarg6', 29),
(31, 'Blitarg6', 1),
(32, 'Blitarg6', 1),
(33, 'skafd', 0),
(34, 'Blitarg6', 122),
(35, 'Blitarg6', 124),
(36, 'Blitarg6', 45),
(37, 'Blitarg6', 45),
(38, 'Blitarg6', 221),
(39, 'Blitarg6', 321),
(40, 'kkarthik', 10),
(41, 'asd', 333),
(42, 'Blitarg6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` bigint(20) NOT NULL,
  `transaction_id` text,
  `payment_amount` text NOT NULL,
  `payment_mode` text NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `service_id` int(11) NOT NULL,
  `datetime` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `transaction_id`, `payment_amount`, `payment_mode`, `user_phone`, `service_id`, `datetime`) VALUES
(78, '123', '500', 'Online', '8489632803', 1, 'June 13, 2018, 7:53 pm IST'),
(79, '1234', '1000', 'Online', '8489632803', 2, 'June 13, 2018, 7:58 pm IST'),
(80, '', '1500', '', '8489632803', 3, 'June 13, 2018, 8:23 pm IST'),
(81, '', '2000', '', '8989898989', 3, 'June 13, 2018, 8:34 pm IST');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` text NOT NULL,
  `paymentamount` text,
  `transaction_id` text,
  `paymentmode` text,
  `user_id` text,
  `service_id` text,
  `datetime` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `paymentamount`, `transaction_id`, `paymentmode`, `user_id`, `service_id`, `datetime`) VALUES
('10', 'Antony Febriansyah Hartono', '082199568540', '1', '2', '1', '1'),
('11', 'Hafizh Asrofil Al Banna', '087859615271', '1', '1', '1', '1'),
('12', 'Faiq Fajrullah', '085736333728', '1', '1', '2', '1'),
('3', 'Mustofa Halim', '081330493322', '1', '1', '3', '1'),
('4', 'Dody Ahmad Kusuma Jaya', '083854520015', '1', '1', '2', '1'),
('5', 'Mokhammad Choirul Ikhsan', '085749535400', '3', '1', '2', '2'),
('7', 'Achmad Chadil Auwfar', '08984119934', '2', '1', '1', '1'),
('8', 'Rizal Ferdian', '087777284179', '1', '1', '3', '1'),
('9', 'Redika Angga Pratama', '083834657395', '1', '1', '3', '1'),
('2', 'Wawan Dwi Prasetyo', '085745966707', '4', '1', '4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE IF NOT EXISTS `posisi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id`, `nama`) VALUES
(1, 'IT'),
(2, 'Quaterly'),
(3, 'Keuangan'),
(4, 'Produk'),
(5, 'Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` bigint(20) NOT NULL,
  `service_id` bigint(20) NOT NULL,
  `user_phone` varchar(15) NOT NULL,
  `status` varchar(30) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_id`, `user_phone`, `status`, `datetime`) VALUES
(13, 1, '8489632803', '', 'June 13, 2018, 7:53 pm IST'),
(14, 2, '8489632803', 'pending', 'June 13, 2018, 7:58 pm IST'),
(15, 3, '8489632803', 'pending', 'June 13, 2018, 8:23 pm IST'),
(16, 3, '8989898989', '', 'June 13, 2018, 8:34 pm IST');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint(20) NOT NULL,
  `username` varchar(40) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone`, `email`, `datetime`) VALUES
(23, 'karthikaivel', '8489632803', 'karthiksuthan234@gmail.com', 'June 13, 2018, 7:53 pm IST'),
(24, 'dhamotharan', '8989898989', 'dhamu@gmail.com', 'June 13, 2018, 8:34 pm IST');

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
-- Indexes for table `kelamin`
--
ALTER TABLE `kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
