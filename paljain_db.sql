-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2022 at 09:52 PM
-- Server version: 10.3.32-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paljain_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `book_condition` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `author`, `book_name`, `category`, `book_condition`) VALUES
(1, 'James', 'The Deccan chronicles', 'fiction', 'poor'),
(2, 'Michael', 'The legends of IUPUI', 'comic', 'average'),
(3, 'Valmiki', 'Ramayana', 'drama', 'good'),
(4, 'Ved vyas', 'Mahabharata', 'drama', 'excellent'),
(5, 'Chetan bhagat', 'Five point someone', 'drama', 'good'),
(6, 'Allen carr', 'Quit smoking', 'motivational', 'very good'),
(8, 'Gandhi', 'Life of pie', 'motivational', 'excellent'),
(9, 'Mohanlal', 'Fun of life', 'comic', 'excellent'),
(10, 'Adam', 'Miracles', 'fiction', 'good'),
(11, 'James Allen', 'As a men thinketh', 'motivational', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `trade_status` varchar(50) NOT NULL,
  `availability` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`user_id`, `book_id`, `trade_status`, `availability`) VALUES
(100, 2, 'Exchange', 'Y'),
(103, 3, 'Exchange', 'Y'),
(102, 4, 'Exchange', 'Y'),
(101, 5, 'Free', 'N'),
(103, 6, 'Exchange', 'Y'),
(105, 1, 'Exchange', 'Y'),
(107, 9, 'Exchange', 'Y'),
(108, 10, 'Exchange', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `phone`, `password`) VALUES
(100, 'Vijay', 'vjmittal@gmail.com', '94348634634', 'vjmittal1234'),
(101, 'Palak', 'palak@gmail.com', '56734544634', 'palak1234'),
(102, 'Sowmya', 'Sowmya@gmail.com', '87345486634', 'sowmya1234'),
(103, 'Garric', 'garric@gmail.com', '23345634634', 'garric1234'),
(104, 'Sagar', 'sagar@gmail.com', '54863477634', 'sagar1234'),
(105, 'Rahul', 'Rahul@gmail.com', '34128634634', 'rahul1234'),
(106, 'kumar', 'kumar@gmail.com', '37632462378', 'kumar1234'),
(107, 'Ganesh', 'gan@gmail.com', '33333534543', 'ganesh1234'),
(108, 'Gulshan', 'Gul@gmail.com', '2328424284', 'gulshan1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `status_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
