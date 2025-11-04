-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2025 at 04:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noodlenest`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `singleprice` decimal(10,2) DEFAULT NULL,
  `wholeprice` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `Stock` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `singleprice`, `wholeprice`, `image`, `Stock`) VALUES
(1, 'Ultra Volcano Chicken', 1430.00, 28300.00, '1 (18).jpg', 1),
(2, 'Shin Shin | ပုစွန်ချဥ်စပ်အရသာ', 800.00, 23800.00, '1 (1).jpg', 1),
(3, 'Wah-Lah | XOXO Spicy မီးတောက် (Big size-Sichet)', 1300.00, 38000.00, '1 (1).png', 1),
(4, 'Ultra | Mala Xiang Guo', 1430.00, 28300.00, '1 (4).png', 1),
(5, 'Wah-Lah | မီးတောက် - Tom Yum (Big size-Sichet)', 1300.00, 38000.00, '1 (9).png', 1),
(6, 'Ultra | BBQ Chicken', 1430.00, 28300.00, '1 (19).jpg', 1),
(7, 'Ultra | Chilli Chicken', 1430.00, 28300.00, '1 (21).jpg', 1),
(8, 'အဲ့မီး | ရှမ်းကော်ရည်\r\nတစ်ဖာ(အထုတ် ၆၀)', 1800.00, 108000.00, '1 (9).jpg', 1),
(9, 'ယိုးဒယား | ကြာပြာ', 2000.00, 59500.00, '1 (11).jpg', 1),
(10, 'Jjang | Korean Kimchi Noodle', 1100.00, 31500.00, '1 (12).jpg', 1),
(11, 'NomNom | Seafood Flavour ကြာဇံပြုတ်', 1900.00, 57600.00, '1 (14).jpg', 1),
(12, 'NomNom | ကြက်သားအရသာကြေးအိုး', 1900.00, 57600.00, '1 (15).jpg', 1),
(13, 'NomNom | ပဲခေါက်ဆွဲ(Green)', 1900.00, 57600.00, '1 (16).jpg', 1),
(14, 'NomNom | Spicy Noodle', 1900.00, 57600.00, '1 (17).jpg', 1),
(15, 'Snin Shin | ကြာဇံအထောင်းအရသာ', 1200.00, 35500.00, '1 (28).jpg', 1),
(16, 'Shin Shin | မူလအရသာ(ကြာဇံပြုတ်)', 800.00, 23500.00, '1 (2).jpg', 1),
(17, 'Yum Yum | သတ်သတ်လွတ် သီးရွက်စုံအရသာ ခေါက်ဆွဲ', 800.00, 23000.00, '1 (23).jpg', 1),
(18, 'အဲမီး | မိုးကုတ်မီးရှည်\r\nတစ်ဖာ(အထုတ် ၆၀)', 1800.00, 108000.00, '1 (7).jpg', 1),
(19, 'NomNom | မာလာရှမ်းကောအရသာ', 1900.00, 57600.00, '1 (2).png', 1),
(20, 'ယိုးဒယား | မျက်လုံး', 1700.00, 51000.00, '1 (20).jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
