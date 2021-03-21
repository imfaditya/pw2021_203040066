-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2021 at 06:00 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040066`
--

-- --------------------------------------------------------

--
-- Table structure for table `furniture_items`
--

CREATE TABLE `furniture_items` (
  `id` int(11) NOT NULL,
  `furniture_name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `color` varchar(15) NOT NULL,
  `price` int(20) NOT NULL,
  `stock_quantity` int(20) NOT NULL,
  `picture` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `furniture_items`
--

INSERT INTO `furniture_items` (`id`, `furniture_name`, `description`, `color`, `price`, `stock_quantity`, `picture`) VALUES
(1, 'INGMARSÖ', 'Sofa 2 dudukan untuk di dalam/luar ruangan', 'Putih', 1499000, 10, '1.jpg'),
(2, 'BRUSEN', 'Sofa 3 dudukan untuk di luar ruangan', 'Merah', 499999, 15, '2.jpg'),
(3, 'NYHAMN', 'Sofa tempat tidur dengan tiga bantal kursi, dengan kasur kantong pegas', 'Abu-Abu', 5795000, 52, '3.jpg'),
(4, 'FRIHETEN', 'Sofa tempat tidur 3 dudukan', 'Abu-Abu', 8495000, 24, '4.jpg'),
(5, 'LENNART', 'Unit laci', 'Putih', 249000, 250, '5.jpg'),
(6, 'BRUSALI', 'Meja', 'Putih', 999000, 351, '6.jpg'),
(7, 'ALEX', 'Unit laci beroda', 'Biru', 1999000, 161, '7.jpg'),
(8, 'ÖRFJÄLL', 'Kursi untuk meja anak', 'Biru', 799000, 58, '8.jpg'),
(9, 'HEMNES', 'Kabinet cermin 2 pintu', 'Hitam', 1995000, 6, '9.jpg'),
(10, 'FINTORP', 'Tempat pisau bermagnet', 'Hitam', 149000, 189, '10.jpg'),
(11, 'VARIERA', 'Baki perkakas dapur, bambu', 'Coklat', 199000, 584, '11.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `furniture_items`
--
ALTER TABLE `furniture_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `furniture_items`
--
ALTER TABLE `furniture_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
