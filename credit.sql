-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 06:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `credit`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE history (
  id int(11) NOT NULL,
  sender varchar(15) NOT NULL,
  receiver varchar(35) NOT NULL,
  trans_amount int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE users (
  user_id int(11) NOT NULL,
  user_name varchar(40) NOT NULL,
  email varchar(50) NOT NULL,
  user_credits int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO users (user_id, user_name, email, user_credits) VALUES
(1, 'Michael Scott', 'michaelscott@gmail.com',1000),
(2, 'Dwight Schrute', 'dwightkschrute@gmail.com', 20000),
(3, 'Jim Halpert', 'halpertjim@gmail.com', 7000),
(4, 'Pam Beesly ', 'pamartist@gmail.com', 3000),
(5, 'Andrew Bernard', 'narddog@gmail.com', 500),
(6, 'Kevin Malone', 'cookiemonster@gmail.com', 6969),
(7, 'Angela Martin', 'angela@gmail.com', 8000),
(8, 'Oscar Nunez', 'nunezgay@gmail.com', 15000),
(9, 'Kelly Kapoor', 'Kelly@gmail.com', 100),
(10, 'Creed Bratton', 'Bratton@gmail.com', 12000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE history
  ADD PRIMARY KEY (id);

--
-- Indexes for table `users`
--
ALTER TABLE users
  ADD PRIMARY KEY (user_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE history
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE users
  MODIFY user_id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
