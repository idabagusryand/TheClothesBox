-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 08:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theclothesbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ReceiverID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `PhoneNum` bigint(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ReceiverID`, `Name`, `PhoneNum`, `Email`, `Password`) VALUES
(2, 'Naufal Hadi Syukrima', 872546631, 'naufalhadi@wearit.com', '7f51b484536ce6e850172ee26a47ea1f'),
(3, 'Ammar Hawari Abdillah', 12345767889, 'ammarhawari@wearit.com', '09115307a518b34633798c646a99e096'),
(4, 'receiver', 1234567, 'receiver@wearit.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Test Account 2', 17127176565, 'test2@gmail.com', '4d9593b8834348d421e2b60c7837ee56'),
(0, 'admin', 1234567, 'admin@gmail.com', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

CREATE TABLE `distributor` (
  `DonorID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `PhoneNum` bigint(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`DonorID`, `Name`, `PhoneNum`, `Email`, `Password`) VALUES
(1, 'Naufal Hadi Syukrima', 82227164531, 'naufalhadi@wearit.com', '7f51b484536ce6e850172ee26a47ea1f'),
(3, 'carina', 8134573221, 'carina@wearit.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(4, 'donor', 1234567, 'donor@wearit.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(14, 'Test Account', 82227164531, 'test@gmail.com', '33c0fc48dfec3ddae7e3398e30e89a61'),
(16, 'anonymous', 12345678, 'anon@gmail.com', '068f01f2e4285e6cd2afb2186b98a1bd'),
(0, 'Ida Bagus Ryand', 87719033060, 'bagusryand77@gmail.com', 'da1778fb0f0df8833da1b707db5d17c1'),
(0, 'coba', 12345678, 'coba@gmail.com', 'a3040f90cc20fa672fe31efcae41d2db');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id` int(11) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `donasi` text NOT NULL,
  `description` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `datepost` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `PhoneNum` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id`, `picture`, `donasi`, `description`, `name`, `email`, `datepost`, `PhoneNum`) VALUES
(1, 'd41d8cd98f00b204e9800998ecf8427e1640254541.jpg', 'Oversized Denim Jacket', 'Oversized jacket in denim with a collar, buttons down the front, a yoke at the back, low dropped shoulders and long, wide sleeves with buttoned cuffs. Large chest and front pockets and a straight hem. Some of the cotton content of the jacket is recycled.', 'carina', 'carina@wearit.com', '2022-01-26 17:25:35', '8134573221'),
(2, 'd41d8cd98f00b204e9800998ecf8427e1640255666.jpg', 'Oversized Shirt Jacket', 'Oversized shirt jacket in woven fabric with a collar, buttons down the front and a yoke at the back. Open chest pockets, discreet pockets in the side seams, dropped shoulders and long sleeves. Lined.', 'carina', 'carina@wearit.com', '2022-01-26 17:25:37', '8134573221'),
(3, 'd41d8cd98f00b204e9800998ecf8427e1640255781.jpg', 'Cotton Sweatshirt', 'Long-sleeved top in cotton sweatshirt fabric with press-studs on one shoulder, lapped ribbing at the neckline and ribbing at the cuffs and hem.', 'carina', 'carina@wearit.com', '2022-01-26 17:25:40', '8134573221'),
(4, 'd41d8cd98f00b204e9800998ecf8427e1640256236.jpg', 'Ribbed Cotton Set', 'Set with a long-sleeved top and pair of trousers in soft, ribbed organic cotton jersey. Top with a concealed press-stud on one shoulder (except in sizes 2-4Y) and ribbed cuffs. Trousers with covered elastication at the waist and ribbed hems. For kids.', 'carina', 'carina@wearit.com', '2022-01-26 17:25:42', '8134573221'),
(5, 'd41d8cd98f00b204e9800998ecf8427e1640632961.jpg', 'Hooded Puffer Jacket', 'Puffer jacket in woven fabric with a lined hood, zip and wind flap with press-studs down the front and side pockets. Gently rounded and slightly longer at the back. Recycled polyester lining and filling. The polyester content of the jacket’s outer layer is partly recycled.', 'carina', 'carina@wearit.com', '2022-01-26 17:25:45', '8134573221'),
(6, 'd41d8cd98f00b204e9800998ecf8427e1641882891.jpg', 'Green Shirt', ' Green shirt size L, contact me via WA for fast response', 'carina', 'carina@wearit.com', '2022-01-11 06:37:28', '8134573221'),
(7, 'd41d8cd98f00b204e9800998ecf8427e1643217721.jpg', 'The Mini Work Tote', 'The Mini Work Tote is just like the original in a more compact silhouette, its like a tiny house, if a house could be an on-the-go mobile office in a tote bag! We designed the original because there was not one good-looking bag on the market that we felt just as good carrying to work, to after work cocktails and to all our out-of-office adventures.', 'carina', 'carina@wearit.com', '2022-01-26 17:22:01', '8134573221'),
(8, 'd41d8cd98f00b204e9800998ecf8427e1685866104jpeg', 'baju kaos', 'baik', 'Ida Bagus Ryand', 'bagusryand77@gmail.com', '2023-06-04 16:08:24', '87719033060'),
(9, 'd41d8cd98f00b204e9800998ecf8427e1685866158jpeg', 'kaos 2', 'baik', 'Ida Bagus Ryand', 'bagusryand77@gmail.com', '2023-06-04 16:09:18', '87719033060'),
(10, 'd41d8cd98f00b204e9800998ecf8427e1685868640jpeg', 'kaos lagi', 'baik', 'Ida Bagus Ryand', 'bagusryand77@gmail.com', '2023-06-04 16:50:40', '87719033060'),
(11, 'd41d8cd98f00b204e9800998ecf8427e1685875512.png', 'sitemap', 'coba', 'coba', 'coba@gmail.com', '2023-06-04 18:45:12', '12345678'),
(12, 'd41d8cd98f00b204e9800998ecf8427e1685875529.png', 'coba', 'coba2', 'coba', 'coba@gmail.com', '2023-06-04 18:45:29', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `toEmail` varchar(255) NOT NULL,
  `fromEmail` varchar(255) NOT NULL,
  `fullname` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `message` text NOT NULL,
  `reply` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `toEmail`, `fromEmail`, `fullname`, `date`, `message`, `reply`) VALUES
(23, 'carina@wearit.com', 'receiver@wearit.com', 'Receiver', '2022-01-16 12:03:57', 'Donor is humble and responsive, thanks for the shirt, have a great day', 'Thank you!');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `tanggal`) VALUES
(1, '2023-06-01'),
(2, '2023-05-31'),
(3, '2023-06-02'),
(4, '2023-06-02'),
(5, '2023-06-02'),
(6, '2023-06-02'),
(7, '2023-06-02'),
(8, '2023-06-02'),
(9, '2023-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `donor` text NOT NULL,
  `receiver` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `postedby` varchar(200) NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `user_id` int(30) NOT NULL,
  `contentfile` varchar(200) DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`postedby`, `category`, `title`, `content`, `user_id`, `contentfile`, `date_created`, `id`) VALUES
('Carina', 'tech', 'New Budget Phone', ' This new asus zenfone is a budget phone that have a good specs, screen, and camera', 0, 'd41d8cd98f00b204e9800998ecf8427e1641883774.jpg', '2022-01-11 13:49:34', 12),
('Carina', 'datatest', 'datatest', ' datatest', 0, 'd41d8cd98f00b204e9800998ecf8427e1641886632.jpg', '2022-01-11 14:37:12', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
