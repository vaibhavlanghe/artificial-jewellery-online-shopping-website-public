-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 06:24 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abhushan`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`abhushan`@`localhost` PROCEDURE `imageInsert` (IN `getPID` INT, IN `getName` VARCHAR(150), IN `getPath` VARCHAR(255), IN `getType` VARCHAR(150))  BEGIN
INSERT INTO images(PID, PNAME, PATH, TYPE) VALUES (getPID, getName, getPath, getType);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `CID` int(11) NOT NULL,
  `PATID` int(11) NOT NULL,
  `PAYTYPE` varchar(40) NOT NULL,
  `PAYDATE` date NOT NULL,
  `STATUS` varchar(20) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`CID`, `PATID`, `PAYTYPE`, `PAYDATE`, `STATUS`) VALUES
(1, 1, 'Debit Card', '2019-08-01', 'successful');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `PID` int(11) NOT NULL,
  `CARTID` int(11) NOT NULL,
  `QUANTITY` int(11) DEFAULT NULL,
  `TOTALPRICE` decimal(10,0) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`PID`, `CARTID`, `QUANTITY`, `TOTALPRICE`) VALUES
(1, 1, 1, '23000');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CID` int(11) NOT NULL,
  `CNAME` varchar(40) NOT NULL,
  `CDOB` date NOT NULL,
  `u_gender` varchar(10) NOT NULL,
  `CAGE` int(11) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `CPASS` varchar(16) NOT NULL,
  `CLOCALADDR` text NOT NULL,
  `CSTATE` text NOT NULL,
  `CPINCODE` varchar(8) NOT NULL,
  `CPHNO` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CID`, `CNAME`, `CDOB`, `u_gender`, `CAGE`, `EMAIL`, `CPASS`, `CLOCALADDR`, `CSTATE`, `CPINCODE`, `CPHNO`) VALUES
(1, 'VAIBHAV LANGHE', '1997-12-06', '', 20, 'vaibhavlanghe@gmail.com', 'vaibhav123', 'mulund mumbai', 'mumbai', '400081', '9967126272');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `ID` int(11) NOT NULL,
  `PID` int(11) DEFAULT NULL,
  `PNAME` varchar(150) NOT NULL,
  `PATH` varchar(255) NOT NULL,
  `TYPE` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ID`, `PID`, `PNAME`, `PATH`, `TYPE`) VALUES
(1, 1, 'ring1.jpg', 'pics/rings/ring1.jpg', 'image/jpeg'),
(2, 2, 'neck1.jpg', 'pics/necklace/neck1.jpg', 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `PID` int(11) NOT NULL,
  `pnumber` int(11) NOT NULL,
  `pname` text,
  `pdescription` longtext,
  `pprice` decimal(8,2) DEFAULT NULL,
  `ptype` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`PID`, `pnumber`, `pname`, `pdescription`, `pprice`, `ptype`) VALUES
(1, 1, 'gold ring', 'Only Certified Jewellery\r\nWe aim to provide genuine and certified products to our esteemed customers, thus each jewellery product is quality assured by the most recognised authority of certification.\r\n\r\nCertification:\r\n\r\n- All our Gold & Diamond jewellery is BIS Hallmarked.\r\n\r\n- Diamond jewellery is certified by International Gemological Laboratory (IGI).\r\n\r\n- Platinum jewellery is certified by Platinum Guild India (PGI).\r\n\r\nOur 22KT gold jewellery boasts of 916 hallmark and18KT gold jewellery of 750 hallmark which includes five specific marks of authentication; Malabar Identification mark, Year of making, Hallmark centre code, BIS Logo and Purity Grade. IGI certifiaction code (for diamond jewellery).', '6000.00', 'rings'),
(2, 2, 'Never-Ending Love Diamond Necklace', 'The Inspiration\r\nHere\'s a necklace that\'s lightweight, beautifully crafted, and dusted with diamonds - making it perfect for every day.\r\n\r\n2\r\nThe Design Story\r\nWe made it possible for you to wear diamond necklaces whenever you feel like, with this delicate (yet sturdy) design, that you can sport every day of the week.\r\n\r\n3\r\nThe Style Element\r\nIf you\'re all for dainty neckpieces, you can pick a couple to layer with. Or fly solo with a bold piece, if you\'re in the mood to make a fashion statement.', '12000.00', 'necklace');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_fname` varchar(150) NOT NULL,
  `u_mname` varchar(150) NOT NULL,
  `u_lname` varchar(150) NOT NULL,
  `u_gender` varchar(10) NOT NULL,
  `u_email` varchar(150) NOT NULL,
  `u_pass` varchar(150) NOT NULL,
  `u_b_date` date NOT NULL,
  `u_contact` varchar(13) NOT NULL,
  `u_local_add` text NOT NULL,
  `u_town` varchar(60) NOT NULL,
  `u_state` varchar(30) NOT NULL,
  `u_city` varchar(30) NOT NULL,
  `u_pin` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_fname`, `u_mname`, `u_lname`, `u_gender`, `u_email`, `u_pass`, `u_b_date`, `u_contact`, `u_local_add`, `u_town`, `u_state`, `u_city`, `u_pin`) VALUES
(9, 'aditya', 'prakash', 'mohite', 'Male', 'adityap123@gmail.com', '92210d4af4c05e04c82ff02220d50695', '2019-10-09', '+919976872346', 'lbs road', 'kanjur marg', 'maharashtra', 'mumbai', '400085');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`PATID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CARTID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `PID` (`PID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`PID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `email` (`u_email`,`u_contact`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `PID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
