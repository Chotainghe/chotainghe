-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2016 at 03:59 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2basic`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `user` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `ProductName` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Category` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Detail` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImageURL` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `user`, `phone`, `ProductName`, `Price`, `Category`, `Detail`, `ImageURL`) VALUES
(1, '', 1652835592, 'tai nghe cũ', '5000', 'tai nghe', 'cũ 99%', 'uploads/tai nghe cu.jpg'),
(2, '0', 0, 'Áo sơ mi cổ trụ - 1006 Appare SMhong (Hồng sen)', '580000.00', 'Clothing', '', 'http://static.lazada.vn/p/image-4761162-0f604226e6c5bcbcccb67c3180dcc5cd-product.jpg'),
(3, '0', 0, 'Jumpsuit vải jean dạo phố - 1006 Apparel', '650000.00', 'Clothing', '', 'http://static.lazada.vn/p/image-2431562-1a725f4441a030f3dc3a109beade1aaf-product.jpg'),
(4, '0', 0, 'Áo phối ren phong cách nhẹ nhàng – 1006 Apparel Aoboho (Trắng)', '420000.00', 'Clothing', '', 'http://static.lazada.vn/p/image-1002562-b2fb662cb020b16680af3fb520aa69da-product.jpg'),
(5, '0', 0, 'Đầm hở lưng phong cách trẻ trung – 1006 Apparel Damdaopho (Xanh Đen)', '650000.00', 'Clothing', '', 'http://static.lazada.vn/p/image-2002562-232498285a1d0f108e707f72e8416caf-product.jpg'),
(6, '0', 0, 'Đầm phong cách trẻ trung – 1006 Apparel Damdaopho (Hồng phấn)', '650000.00', 'Clothing', '', 'http://static.lazada.vn/p/image-3002562-4dc613982804281a10c53baa7ef6d195-product.jpg'),
(9, 'Haithanh079', 1652835592, 'Tai nghe sony đẹp value', '5000000', 'tai nghe', 'tai nghe đẹp lắm nhé dm =)))', 'uploads/sades-sa-708-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `telephone`, `password`, `email`) VALUES
(1, 'haithanh079', '01652835592', '123456', 'haithanh079@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`telephone`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
