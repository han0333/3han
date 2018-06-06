-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018 年 6 朁E06 日 04:42
-- サーバのバージョン： 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lunch`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `customers`
--

CREATE TABLE `customers` (
  `customer_user_id` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `customer_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_flag` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `customers`
--

INSERT INTO `customers` (`customer_user_id`, `customer_name`, `customer_flag`) VALUES
('hayashida', '平田祐大', NULL),
('hirata12', '平田祐大12', NULL),
('murase', 'aiueo', NULL),
('nakanishi', '中西成人', NULL),
('sakai', '坂井将斗', NULL),
('tashima', '田島直人', NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `dates`
--

CREATE TABLE `dates` (
  `date` date NOT NULL,
  `day` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `dates`
--

INSERT INTO `dates` (`date`, `day`) VALUES
('2018-05-30', '水曜日'),
('2018-05-31', '木曜日'),
('2018-06-06', '水曜日');

-- --------------------------------------------------------

--
-- テーブルの構造 `details`
--

CREATE TABLE `details` (
  `order_id` int(11) NOT NULL,
  `detail_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- テーブルの構造 `lunchshops`
--

CREATE TABLE `lunchshops` (
  `lunchshop_user_id` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lunchshop_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` mediumblob NOT NULL,
  `schedule` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `lunchshops`
--

INSERT INTO `lunchshops` (`lunchshop_user_id`, `lunchshop_name`, `image`, `schedule`) VALUES
('imaizumi', '今泉駿一', '', '毎週火曜日定休日'),
('motoyama', '本山弁当屋', '', '毎週火曜日定休日');

-- --------------------------------------------------------

--
-- テーブルの構造 `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `lunchshop_user_id` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `customer_user_id` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `orders`
--

INSERT INTO `orders` (`order_id`, `lunchshop_user_id`, `customer_user_id`, `product_id`, `date`, `number`) VALUES
(1, 'imaizumi', 'sakai', 1, '2018-05-31', 4),
(2, 'imaizumi', 'sakai', 2, '2018-05-30', 5),
(3, 'imaizumi', 'sakai', 2, '2018-06-06', 10),
(4, 'motoyama', 'tashima', 2, '2018-06-06', 4);

-- --------------------------------------------------------

--
-- テーブルの構造 `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `lunchshop_user_id` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` mediumblob NOT NULL,
  `product_name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `cancel_limit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `products`
--

INSERT INTO `products` (`product_id`, `lunchshop_user_id`, `image`, `product_name`, `price`, `cancel_limit`) VALUES
(1, 'motoyama', '', 'ハンバーグ弁当', 300, 7),
(2, 'motoyama', '', '唐揚弁当', 350, 7);

-- --------------------------------------------------------

--
-- テーブルの構造 `roles`
--

CREATE TABLE `roles` (
  `role_id` int(10) NOT NULL,
  `role_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `permission`) VALUES
(1, '弁当屋', '全てのページにアクセスできる'),
(2, 'ユーザ', '一部のページにアクセスできる');

-- --------------------------------------------------------

--
-- テーブルの構造 `userroles`
--

CREATE TABLE `userroles` (
  `user_id` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `userroles`
--

INSERT INTO `userroles` (`user_id`, `role_id`) VALUES
('gotoh', 2),
('hayashida', 2),
('hirata12', 2),
('imaizumi', 1),
('miyazaki', 2),
('motoyama', 1),
('murase', 2),
('nakanishi', 2),
('saitonaruh', 2),
('sakai', 2),
('tashima', 2);

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `user_id` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mail` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `mail`, `password`) VALUES
('gotoh', '後藤優太郎', 'gotoh@yutaroh.jp', '$2y$10$UzWm5ezZhnC4MrN8Ygs.GOEiUyAbM5npXzBoyxyB3i0j1.1IqT3sW'),
('hayashida', '平田祐大', 'hirata@yudai', '$2y$10$rgIY4Twq45DcTfJdbWOnIunLrAaKFqhSQXoo94V8MHcTo2kQsTNoO'),
('hirata12', '平田祐大12', 'hirata@yudai', '$2y$10$rXZgtahdnuO7Y5eeaFT1meJIbpA2taHLPFJzuHLfuwWEHjDLQhcZG'),
('imaizumi', '今泉駿一', 'ima@izumi', '$2y$10$u/GldAqnf74yTGC655EqCuo9d1NYM1KBiaPH1YP6vbBVx9SgfYZfy'),
('miyazaki', 'miyazaki', 'miya@zaki.jp', 'kazukiiii'),
('motoyama', '本山圭太', 'motoyama@keita.jp', 'motoyama'),
('murase', '村瀨裕一郎', 'murase@yuichiro.jp', 'yuichiro'),
('nakanishi', '中西成人', 'nakanishi@naru', '$2y$10$3oD7734gLPG24Qyvrp9Qoe73LgnbBhHNk5fFpgwrH8gSa5FaT4QG2'),
('saitonaruh', '斎藤成人', 'saito@naru', '$2y$10$X.5ujtcF8HgxBqFNrQGSPO9vtcLEsa1RnZ8IUsRxWcjHTdqstH7i.'),
('sakai', '坂井将斗', 'sakai@masato.jp', 'masato'),
('tashima', '田島直人', 'tashima@naoto', '$2y$10$h69Fsrx.udhO89ZukfjHlOXNJk98RkbaFXVERwep/CVzHsPWmWiVq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_user_id`);

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`detail_id`,`order_id`),
  ADD KEY `details_ibfk_1` (`order_id`);

--
-- Indexes for table `lunchshops`
--
ALTER TABLE `lunchshops`
  ADD PRIMARY KEY (`lunchshop_user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_ibfk_1` (`lunchshop_user_id`),
  ADD KEY `orders_ibfk_2` (`customer_user_id`),
  ADD KEY `orders_ibfk_4` (`date`),
  ADD KEY `orders_ibfk_3` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `products_ibfk_1` (`lunchshop_user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `userroles`
--
ALTER TABLE `userroles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `userroles_ibfk_1` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_name_2` (`user_name`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD KEY `user` (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`customer_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- テーブルの制約 `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- テーブルの制約 `lunchshops`
--
ALTER TABLE `lunchshops`
  ADD CONSTRAINT `lunchshops_ibfk_1` FOREIGN KEY (`lunchshop_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- テーブルの制約 `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`lunchshop_user_id`) REFERENCES `lunchshops` (`lunchshop_user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_user_id`) REFERENCES `customers` (`customer_user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`date`) REFERENCES `dates` (`date`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- テーブルの制約 `userroles`
--
ALTER TABLE `userroles`
  ADD CONSTRAINT `userroles_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userroles_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
