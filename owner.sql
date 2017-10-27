-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017 年 10 月 26 日 15:58
-- サーバのバージョン： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_shop`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `owner`
--

CREATE TABLE `owner` (
  `code` int(8) NOT NULL,
  `lastname` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `post1` int(10) NOT NULL,
  `post2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `tel1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tel2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tel3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fax1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fax2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `fax3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cell1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cell2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `cell3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `owner`
--

INSERT INTO `owner` (`code`, `lastname`, `firstname`, `post1`, `post2`, `address`, `tel1`, `tel2`, `tel3`, `fax1`, `fax2`, `fax3`, `cell1`, `cell2`, `cell3`, `email`, `id`, `pass`) VALUES
(1, 'ジーズ', '太郎', 107, '0061', '東京都港区北青山3-5-6 青朋ビル2F', '03', '5413', '5045', '03', '5413', '5046', '090', '1111', '1111', 'g&#039;s_taro@gmail.com', 'gs', '589e21c41609fadbfc2ab32bfcfb7a53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
