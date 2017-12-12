-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2017 at 05:57 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roomreservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `reservedId` int(11) DEFAULT NULL,
  `paymentAmount` double(10,2) DEFAULT NULL,
  `paymentstatus` varchar(255) DEFAULT NULL,
  `usersId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `reservedId`, `paymentAmount`, `paymentstatus`, `usersId`) VALUES
(7, 20, 120.00, '1', 2),
(8, 21, 120.00, '0', 2),
(9, 22, 120.00, '1', 2),
(10, 23, 700.00, '0', 2);

-- --------------------------------------------------------

--
-- Table structure for table `reserved_room`
--

CREATE TABLE `reserved_room` (
  `id` int(11) NOT NULL,
  `roomId` int(11) DEFAULT NULL,
  `reserveDate` varchar(255) DEFAULT NULL,
  `reservedSchedule` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserved_room`
--

INSERT INTO `reserved_room` (`id`, `roomId`, `reserveDate`, `reservedSchedule`) VALUES
(20, 1, '2017-12-12', '11:00 AM - 01:00 PM'),
(21, 1, '2017-12-12', '03:00 AM - 05:00 PM'),
(22, 1, '2017-12-21', '09:00 AM - 11:00 AM'),
(23, 2, '2017-12-15', '03:00 AM - 05:00 PM');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `scheduleTime` varchar(255) DEFAULT NULL,
  `price` double(10,2) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `location`, `size`, `scheduleTime`, `price`, `picture`, `description`) VALUES
(1, 'Dhaka', '11 x 13 Square Feet', NULL, 120.00, 'image/pic2.jpg', 'The main part of the Reservation screen contains particulars about the guest\'s stay, including arrival and departure dates, room and rate information, payment method, credit cards, and packages. If the guest\'s stay covers multiple days, certain elements of the reservation, such as the rate code and rate, may not remain the same for the entire stay. If information varies over the length of the stay, the field is highlighted in yellow.\r\n\r\n						When reservation attributes regarding the room type, rate code, number of nights, etc. are made, you will be prompted: \"Please verify the Rate code and Room type availability on the Rate Query Screen.\" OK is set as the default and is the only button for selection. But this message prompt can be hidden and this prompt would never be displayed. (See Pop Up Blockers for details.)\r\n\r\n						For No Show reservations, only the Comments field and Rate filed ellipsis button are active on the Reservation screen. Selecting the ellipsis button displays the Daily Details, Rate Info, and Short Info buttons and when selected, is displayed in view-only so that no modifications can be made.'),
(2, 'Dhaka', '15 x 13 Square Feet', NULL, 700.00, 'image/pic1.jpg', 'The main part of the Reservation screen contains particulars about the guest\'s stay, including arrival and departure dates, room and rate information, payment method, credit cards, and packages. If the guest\'s stay covers multiple days, certain elements of the reservation, such as the rate code and rate, may not remain the same for the entire stay. If information varies over the length of the stay, the field is highlighted in yellow.\r\n\r\n						When reservation attributes regarding the room type, rate code, number of nights, etc. are made, you will be prompted: \"Please verify the Rate code and Room type availability on the Rate Query Screen.\" OK is set as the default and is the only button for selection. But this message prompt can be hidden and this prompt would never be displayed. (See Pop Up Blockers for details.)\r\n\r\n						For No Show reservations, only the Comments field and Rate filed ellipsis button are active on the Reservation screen. Selecting the ellipsis button displays the Daily Details, Rate Info, and Short Info buttons and when selected, is displayed in view-only so that no modifications can be made.'),
(3, 'Room 1002 | 1st  Floor | Dhaka', '15 x 13 Square Feet', NULL, 1200.00, 'image/pic3.jpg', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` text,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `role`) VALUES
(2, 'Sm Shahjalal Shaju', 'shajushahjalal@gmail.com', '1b77f185e34bc52ebf493681b54260c5', 'Dhaka', '0'),
(3, 'Admin', 'Admin@admin.com', 'e3afed0047b08059d0fada10f400c1e5', 'Dhaka', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservedId` (`reservedId`),
  ADD KEY `usersId` (`usersId`);

--
-- Indexes for table `reserved_room`
--
ALTER TABLE `reserved_room`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roomId` (`roomId`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
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
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `reserved_room`
--
ALTER TABLE `reserved_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`reservedId`) REFERENCES `reserved_room` (`id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`usersId`) REFERENCES `users` (`id`);

--
-- Constraints for table `reserved_room`
--
ALTER TABLE `reserved_room`
  ADD CONSTRAINT `reserved_room_ibfk_1` FOREIGN KEY (`roomId`) REFERENCES `room` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
