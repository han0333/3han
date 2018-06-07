-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018 年 6 朁E07 日 05:43
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
('2018-06-06', '水曜日'),
('2018-06-07', '木曜日'),
('2018-06-08', '金曜日'),
('2018-06-09', '土曜日'),
('2018-06-10', '日曜日'),
('2018-06-11', '月曜日'),
('2018-06-12', '火曜日'),
('2018-06-13', '水曜日'),
('2018-06-14', '木曜日'),
('2018-06-15', '金曜日'),
('2018-06-16', '土曜日'),
('2018-06-17', '日曜日'),
('2018-06-18', '月曜日'),
('2018-06-19', '火曜日'),
('2018-06-20', '水曜日'),
('2018-06-21', '木曜日'),
('2018-06-22', '金曜日'),
('2018-06-23', '土曜日'),
('2018-06-24', '日曜日'),
('2018-06-25', '月曜日'),
('2018-06-26', '火曜日'),
('2018-06-27', '水曜日'),
('2018-06-28', '木曜日'),
('2018-06-29', '金曜日'),
('2018-06-30', '土曜日'),
('2018-07-01', '日曜日'),
('2018-07-02', '月曜日'),
('2018-07-03', '火曜日'),
('2018-07-04', '水曜日'),
('2018-07-05', '木曜日'),
('2018-07-06', '金曜日'),
('2018-07-07', '土曜日'),
('2018-07-08', '日曜日'),
('2018-07-09', '月曜日'),
('2018-07-10', '火曜日'),
('2018-07-11', '水曜日'),
('2018-07-12', '木曜日'),
('2018-07-13', '金曜日'),
('2018-07-14', '土曜日'),
('2018-07-15', '日曜日'),
('2018-07-16', '月曜日'),
('2018-07-17', '火曜日'),
('2018-07-18', '水曜日'),
('2018-07-19', '木曜日'),
('2018-07-20', '金曜日'),
('2018-07-21', '土曜日'),
('2018-07-22', '日曜日'),
('2018-07-23', '月曜日'),
('2018-07-24', '火曜日'),
('2018-07-25', '水曜日'),
('2018-07-26', '木曜日'),
('2018-07-27', '金曜日'),
('2018-07-28', '土曜日'),
('2018-07-29', '日曜日'),
('2018-07-30', '月曜日'),
('2018-07-31', '火曜日'),
('2018-08-01', '水曜日'),
('2018-08-02', '木曜日'),
('2018-08-03', '金曜日'),
('2018-08-04', '土曜日'),
('2018-08-05', '日曜日'),
('2018-08-06', '月曜日'),
('2018-08-07', '火曜日'),
('2018-08-08', '水曜日'),
('2018-08-09', '木曜日'),
('2018-08-10', '金曜日'),
('2018-08-11', '土曜日'),
('2018-08-12', '日曜日'),
('2018-08-13', '月曜日'),
('2018-08-14', '火曜日'),
('2018-08-15', '水曜日'),
('2018-08-16', '木曜日'),
('2018-08-17', '金曜日'),
('2018-08-18', '土曜日'),
('2018-08-19', '日曜日'),
('2018-08-20', '月曜日'),
('2018-08-21', '火曜日'),
('2018-08-22', '水曜日'),
('2018-08-23', '木曜日'),
('2018-08-24', '金曜日'),
('2018-08-25', '土曜日'),
('2018-08-26', '日曜日'),
('2018-08-27', '月曜日'),
('2018-08-28', '火曜日'),
('2018-08-29', '水曜日'),
('2018-08-30', '木曜日'),
('2018-08-31', '金曜日'),
('2018-09-01', '土曜日'),
('2018-09-02', '日曜日'),
('2018-09-03', '月曜日'),
('2018-09-04', '火曜日'),
('2018-09-05', '水曜日'),
('2018-09-06', '木曜日'),
('2018-09-07', '金曜日'),
('2018-09-08', '土曜日'),
('2018-09-09', '日曜日'),
('2018-09-10', '月曜日'),
('2018-09-11', '火曜日'),
('2018-09-12', '水曜日'),
('2018-09-13', '木曜日'),
('2018-09-14', '金曜日'),
('2018-09-15', '土曜日'),
('2018-09-16', '日曜日'),
('2018-09-17', '月曜日'),
('2018-09-18', '火曜日'),
('2018-09-19', '水曜日'),
('2018-09-20', '木曜日'),
('2018-09-21', '金曜日'),
('2018-09-22', '土曜日'),
('2018-09-23', '日曜日'),
('2018-09-24', '月曜日'),
('2018-09-25', '火曜日'),
('2018-09-26', '水曜日'),
('2018-09-27', '木曜日'),
('2018-09-28', '金曜日'),
('2018-09-29', '土曜日'),
('2018-09-30', '日曜日'),
('2018-10-01', '月曜日'),
('2018-10-02', '火曜日'),
('2018-10-03', '水曜日'),
('2018-10-04', '木曜日'),
('2018-10-05', '金曜日'),
('2018-10-06', '土曜日'),
('2018-10-07', '日曜日'),
('2018-10-08', '月曜日'),
('2018-10-09', '火曜日'),
('2018-10-10', '水曜日'),
('2018-10-11', '木曜日'),
('2018-10-12', '金曜日'),
('2018-10-13', '土曜日'),
('2018-10-14', '日曜日'),
('2018-10-15', '月曜日'),
('2018-10-16', '火曜日'),
('2018-10-17', '水曜日'),
('2018-10-18', '木曜日'),
('2018-10-19', '金曜日'),
('2018-10-20', '土曜日'),
('2018-10-21', '日曜日'),
('2018-10-22', '月曜日'),
('2018-10-23', '火曜日'),
('2018-10-24', '水曜日'),
('2018-10-25', '木曜日'),
('2018-10-26', '金曜日'),
('2018-10-27', '土曜日'),
('2018-10-28', '日曜日'),
('2018-10-29', '月曜日'),
('2018-10-30', '火曜日'),
('2018-10-31', '水曜日'),
('2018-11-01', '木曜日'),
('2018-11-02', '金曜日'),
('2018-11-03', '土曜日'),
('2018-11-04', '日曜日'),
('2018-11-05', '月曜日'),
('2018-11-06', '火曜日'),
('2018-11-07', '水曜日'),
('2018-11-08', '木曜日'),
('2018-11-09', '金曜日'),
('2018-11-10', '土曜日'),
('2018-11-11', '日曜日'),
('2018-11-12', '月曜日'),
('2018-11-13', '火曜日'),
('2018-11-14', '水曜日'),
('2018-11-15', '木曜日'),
('2018-11-16', '金曜日'),
('2018-11-17', '土曜日'),
('2018-11-18', '日曜日'),
('2018-11-19', '月曜日'),
('2018-11-20', '火曜日'),
('2018-11-21', '水曜日'),
('2018-11-22', '木曜日'),
('2018-11-23', '金曜日'),
('2018-11-24', '土曜日'),
('2018-11-25', '日曜日'),
('2018-11-26', '月曜日'),
('2018-11-27', '火曜日'),
('2018-11-28', '水曜日'),
('2018-11-29', '木曜日'),
('2018-11-30', '金曜日'),
('2018-12-01', '土曜日'),
('2018-12-02', '日曜日'),
('2018-12-03', '月曜日'),
('2018-12-04', '火曜日'),
('2018-12-05', '水曜日'),
('2018-12-06', '木曜日'),
('2018-12-07', '金曜日'),
('2018-12-08', '土曜日'),
('2018-12-09', '日曜日'),
('2018-12-10', '月曜日'),
('2018-12-11', '火曜日'),
('2018-12-12', '水曜日'),
('2018-12-13', '木曜日'),
('2018-12-14', '金曜日'),
('2018-12-15', '土曜日'),
('2018-12-16', '日曜日'),
('2018-12-17', '月曜日'),
('2018-12-18', '火曜日'),
('2018-12-19', '水曜日'),
('2018-12-20', '木曜日'),
('2018-12-21', '金曜日'),
('2018-12-22', '土曜日'),
('2018-12-23', '日曜日'),
('2018-12-24', '月曜日'),
('2018-12-25', '火曜日'),
('2018-12-26', '水曜日'),
('2018-12-27', '木曜日'),
('2018-12-28', '金曜日'),
('2018-12-29', '土曜日'),
('2018-12-30', '日曜日'),
('2018-12-31', '月曜日'),
('2019-01-01', '火曜日'),
('2019-01-02', '水曜日');

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
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- テーブルのデータのダンプ `orders`
--

INSERT INTO `orders` (`order_id`, `lunchshop_user_id`, `customer_user_id`, `product_id`, `date`) VALUES
(1, 'imaizumi', 'sakai', 1, '2018-05-31'),
(2, 'imaizumi', 'sakai', 2, '2018-05-30'),
(3, 'imaizumi', 'sakai', 2, '2018-06-06'),
(4, 'motoyama', 'tashima', 2, '2018-06-06');

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
