-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2026 at 04:09 PM
-- Server version: 8.0.30
-- PHP Version: 8.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kasir_ujikom`
--

DELIMITER $$
--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `fn_generate_order_no` () RETURNS VARCHAR(20) CHARSET utf8mb4 COLLATE utf8mb4_unicode_ci DETERMINISTIC RETURN DATE_FORMAT(NOW(), 'ORD%y%m%d%H%i%s')$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `address`) VALUES
(1, 'Umum', '-', '-'),
(2, 'Rinda', '081214137112', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `order_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `customer_id` int DEFAULT NULL,
  `order_date` datetime NOT NULL,
  `subtotal` decimal(12,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `tax` decimal(12,2) NOT NULL DEFAULT '0.00',
  `total` decimal(12,2) NOT NULL DEFAULT '0.00',
  `payment_type_id` int NOT NULL,
  `paid_amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `change_amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `status` enum('PAID','VOID') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PAID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_no`, `user_id`, `customer_id`, `order_date`, `subtotal`, `discount`, `tax`, `total`, `payment_type_id`, `paid_amount`, `change_amount`, `status`) VALUES
(1, 'ORD250820074202', 6, NULL, '2025-08-20 07:42:02', '1000.00', '0.00', '0.00', '1000.00', 1, '5000.00', '4000.00', 'PAID'),
(2, 'ORD250820074437', 6, NULL, '2025-08-20 07:44:37', '4000.00', '0.00', '0.00', '4000.00', 3, '40000.00', '36000.00', 'PAID'),
(3, 'ORD250820074559', 6, 2, '2025-08-20 07:45:59', '23000.00', '2.00', '0.00', '22998.00', 2, '35000.00', '12002.00', 'PAID'),
(4, 'ORD250820074754', 6, NULL, '2025-08-20 07:47:54', '1000.00', '1.00', '0.20', '999.00', 3, '5000.00', '4000.80', 'PAID'),
(5, 'ORD250825080241', 6, NULL, '2025-08-25 08:02:41', '180000.00', '0.00', '0.00', '180000.00', 3, '200000.00', '20000.00', 'PAID'),
(6, 'ORD250825100411', 6, NULL, '2025-08-25 10:04:11', '50000.00', '0.00', '0.00', '50000.00', 3, '100000.00', '50000.00', 'PAID'),
(7, 'ORD250825104200', 6, NULL, '2025-08-25 10:42:00', '35000.00', '0.00', '0.00', '35000.00', 1, '50000.00', '15000.00', 'PAID'),
(8, 'ORD260206225032', 6, NULL, '2026-02-06 22:50:32', '2000.00', '1.00', '2000.00', '3999.00', 1, '30000.00', '26001.00', 'PAID');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `qty` int NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `line_total` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `qty`, `price`, `line_total`) VALUES
(1, 1, 5, 1, '1000.00', '1000.00'),
(2, 2, 5, 4, '1000.00', '4000.00'),
(3, 3, 5, 5, '1000.00', '5000.00'),
(4, 3, 3, 1, '18000.00', '18000.00'),
(5, 4, 5, 1, '1000.00', '1000.00'),
(6, 5, 3, 10, '18000.00', '180000.00'),
(7, 6, 5, 50, '1000.00', '50000.00'),
(8, 7, 1, 10, '3500.00', '35000.00'),
(9, 8, 5, 2, '1000.00', '2000.00');

-- --------------------------------------------------------

--
-- Table structure for table `payment_types`
--

CREATE TABLE `payment_types` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_types`
--

INSERT INTO `payment_types` (`id`, `name`, `active`) VALUES
(1, 'Tunai', 1),
(2, 'QRIS', 1),
(3, 'Kartu Debit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `sku` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(12,2) NOT NULL DEFAULT '0.00',
  `stock` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sku`, `name`, `price`, `stock`) VALUES
(1, 'SKU-001', 'Indomie Goreng', '3500.00', 100),
(2, 'SKU-002', 'Sabun Mandi', '8000.00', 50),
(3, 'SKU-003', 'Minyak Goreng 1L', '18000.00', 30),
(5, 'SKU-004', 'gehu', '1000.00', 50),
(6, 'sku003', 'apel', '15000.00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','petugas','pimpinan','konsumen') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'konsumen',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password_hash`, `role`, `active`, `created_at`) VALUES
(6, 'Administrator', 'admin', '$2y$10$evzOu6PX6UkRBnm/YssB9.Q.zyqxBJm5tQpRMRqxey/QGWh42sE7i', 'admin', 1, '2025-08-16 12:34:38'),
(11, 'Pimpinan Toko', 'pimpinan', '$2y$10$evzOu6PX6UkRBnm/YssB9.Q.zyqxBJm5tQpRMRqxey/QGWh42sE7i', 'pimpinan', 1, '2025-08-16 12:46:19'),
(12, 'Petugas Kasir', 'petugas', '$2y$10$evzOu6PX6UkRBnm/YssB9.Q.zyqxBJm5tQpRMRqxey/QGWh42sE7i', 'petugas', 1, '2025-08-16 12:46:19'),
(13, 'Rinda Konsumen', 'rinda', '$2y$10$evzOu6PX6UkRBnm/YssB9.Q.zyqxBJm5tQpRMRqxey/QGWh42sE7i', 'konsumen', 1, '2025-08-16 12:54:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_no` (`order_no`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `payment_type_id` (`payment_type_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payment_types`
--
ALTER TABLE `payment_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sku` (`sku`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment_types`
--
ALTER TABLE `payment_types`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`payment_type_id`) REFERENCES `payment_types` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
