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
-- テーブルの構造 `estate`
--

CREATE TABLE `estate` (
  `code` int(11) NOT NULL,
  `real_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `post1` int(10) NOT NULL,
  `post2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `roomNumber` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `yachin` int(16) NOT NULL,
  `kyoeki` int(16) NOT NULL,
  `shiki` int(4) NOT NULL DEFAULT '0',
  `rei` int(4) NOT NULL DEFAULT '0',
  `madori` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `madoriType` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `keyLocation` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email1` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email2` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email3` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email4` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email5` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `company1` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `company2` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `company3` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `company4` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `company5` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `other` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `timedate` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kushitsu` int(1) NOT NULL DEFAULT '0',
  `moshikomi` int(1) NOT NULL DEFAULT '0',
  `keiyaku` int(1) NOT NULL DEFAULT '0',
  `akiyote` int(1) NOT NULL DEFAULT '0',
  `reform` int(1) NOT NULL DEFAULT '0',
  `moshikomiCompany` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `moshikomiTel1` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `moshikomiTel2` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `moshikomiTel3` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `keiyakusya1` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `keiyaku1Tel1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `keiyaku1Tel2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `keiyaku1Tel3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hosyonin1` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `hosyonin1Tel1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hosyonin1Tel2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hosyonin1Tel3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `akiyoteDay` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `reformDay` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `reform_naiyo` varchar(600) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `estate`
--

INSERT INTO `estate` (`code`, `real_name`, `post1`, `post2`, `address`, `roomNumber`, `yachin`, `kyoeki`, `shiki`, `rei`, `madori`, `madoriType`, `keyLocation`, `email1`, `email2`, `email3`, `email4`, `email5`, `company1`, `company2`, `company3`, `company4`, `company5`, `other`, `timedate`, `kushitsu`, `moshikomi`, `keiyaku`, `akiyote`, `reform`, `moshikomiCompany`, `moshikomiTel1`, `moshikomiTel2`, `moshikomiTel3`, `keiyakusya1`, `keiyaku1Tel1`, `keiyaku1Tel2`, `keiyaku1Tel3`, `hosyonin1`, `hosyonin1Tel1`, `hosyonin1Tel2`, `hosyonin1Tel3`, `akiyoteDay`, `reformDay`, `reform_naiyo`) VALUES
(12, 'ジーズプラチナ', 107, '0064', '東京都港区北青山３−１', '3-D', 100000, 10000, 2, 2, '', '1DK', '現地エントランス横　keybox「0331」', 'g\'s@gmail.com', 'akasaka@yahoo.co.hp', 'every@co.jp', '', '', 'ジーズ不動産', '赤坂不動産', 'エブリー不動産', '', '', '', '2017年10月26日 2時13分', 0, 1, 0, 0, 0, 'エイブル', '0422', '1111', '1111', '', '', '', '', '', '', '', '', '', '2017年10月27日', 'クリーニング'),
(13, 'ハイパージーズ', 166, '0022', '東京都杉並区久我山３−１', '202', 77000, 3000, 1, 1, '', '1LDK', 'オーナー所有', 'minimini@yahoo.co.jp', '', '', '', '', 'ミニミニ浜田山', '', '', '', '', '', '2017年10月26日 13時51分', 0, 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017年11月03日', 'クリーニング'),
(15, 'スーパージーズ', 125, '0053', '東京都葛飾区金町３−４−３', '101', 65000, 4000, 1, 1, '', '1K', '俺の家', 'katsushika@yahoo.co.jp', 'takasago@gmail.com', 'ue@yahoo.co.jp', '', '', '葛飾不動産', '高砂不動産', '海岸不動産', '', '', '', '2017年10月26日 2時03分', 0, 1, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'ジーズレジデンスⅡ', 107, '0052', '東京都港区赤坂１−２−３', 'A', 200000, 5000, 2, 2, '', '1K', 'ジーズアカデミー東京', 'dejihari@gmail.com', '', '', '', '', 'デジハリ不動産', '', '', '', '', '', '2017年10月24日 8時28分', 0, 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017年10月27日', 'クリーニング'),
(18, 'ジーズプラチナ', 107, '0064', '東京都港区北青山３−１', '3-A', 110000, 10000, 2, 2, '', '1K', '現地エントランス横　keybox「0331」', 'g\'s@gmail.com', 'akasaka@yahoo.co.hp', 'every@co.jp', '', '', 'ジーズ不動産', '赤坂不動産', 'エブリー不動産', '', '', '', '2017年10月26日 2時13分', 0, 1, 0, 0, 0, 'エイブル', '0422', '1111', '1111', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'ハイパージーズ', 166, '0022', '東京都杉並区久我山３−１', '203', 78000, 3000, 1, 1, '', '1K', 'オーナー所有', 'minimini@yahoo.co.jp', '', '', '', '', 'ミニミニ浜田山', '', '', '', '', '', '2017年10月26日 14時52分', 0, 0, 0, 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '2017年10月31日', '', ''),
(21, 'ジーズプラチナ', 107, '0064', '東京都港区北青山３−１', '3-E', 110000, 10000, 2, 2, '', '1DK', '現地エントランス横　keybox「0331」', 'g\'s@gmail.com', 'akasaka@yahoo.co.hp', 'every@co.jp', '', '', 'ジーズ不動産', '赤坂不動産', 'エブリー不動産', '', '', '', '2017年10月26日 14時55分', 0, 1, 0, 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '2017年10月28日', '2017年10月28日', '和室を洋室に変更\r\nキッチンを新品に\r\n浴室乾燥機を追加\r\nウォシュレットに変更'),
(22, 'ジーズプラチナ', 107, '0064', '東京都港区北青山３−１', '3-B', 110000, 10000, 2, 2, '', '1K', '現地エントランス横　keybox「0331」', 'g\'s@gmail.com', 'akasaka@yahoo.co.hp', 'every@co.jp', '', '', 'ジーズ不動産', '赤坂不動産', 'エブリー不動産', '', '', '', '2017年10月25日 1時37分', 0, 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017年10月28日', 'クリーニング'),
(23, 'ジーズプラチナ', 107, '0064', '東京都港区北青山３−１', '2-B', 110000, 10000, 2, 2, '', '1R', '現地エントランス横　keybox「0331」', 'g\'s@gmail.com', 'akasaka@yahoo.co.hp', 'every@co.jp', '', '', 'ジーズ不動産', '赤坂不動産', 'エブリー不動産', '', '', '', '2017年10月24日 1時04分', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'ジーズプラチナ', 107, '0064', '東京都港区北青山３−１', '1-A', 110000, 10000, 2, 2, '', '1R', '現地エントランス横　keybox「0331」', 'g\'s@gmail.com', 'akasaka@yahoo.co.hp', 'every@co.jp', '', '', 'ジーズ不動産', '赤坂不動産', 'エブリー不動産', '', '', '', '2017年10月24日 1時04分', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'ジーズプラチナ', 107, '0064', '東京都港区北青山３−１', '1-B', 110000, 10000, 2, 2, '', '1R', '現地エントランス横　keybox「0331」', 'g\'s@gmail.com', 'akasaka@yahoo.co.hp', 'every@co.jp', '', '', 'ジーズ不動産', '赤坂不動産', 'エブリー不動産', '', '', '', '2017年10月24日 1時04分', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 'ハイパージーズ', 166, '0022', '東京都杉並区久我山３−１', '201', 78000, 3000, 1, 1, '', '1R', 'オーナー所有', 'minimini@yahoo.co.jp', '', '', '', '', 'ミニミニ浜田山', '', '', '', '', '', '2017年10月25日 1時36分', 0, 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017年10月26日', 'クリーニング'),
(27, 'ジーズアカデミー', 100, '3211', '埼玉県春日部市栄町１−３１−２', '101', 50000, 2000, 1, 1, '', '1DK', 'オーナー宅', 'yahoo@yahoo.co.jp', '', '', '', '', 'ヤフー不動産', '', '', '', '', '', '2017年10月24日 16時02分', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017年11月09日', ''),
(28, 'ジーズアカデミー', 100, '3211', '埼玉県春日部市栄町１−３１−２', '102', 52000, 2000, 0, 0, '', '1K', 'オーナー宅', 'yahoo@yahoo.co.jp', '', '', '', '', 'ヤフー不動産', '', '', '', '', '', '2017年10月24日 1時03分', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(29, 'ジーズプラチナ', 107, '0064', '東京都港区北青山３−１', '1-C', 110000, 10000, 2, 2, '', '1R', '現地エントランス横　keybox「0331」', 'g\'s@gmail.com', 'akasaka@yahoo.co.hp', 'every@co.jp', '', '', 'ジーズ不動産', '赤坂不動産', 'エブリー不動産', '', '', '', '2017年10月26日 15時56分', 0, 0, 1, 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017年11月02日', '和室を洋室に変更\r\nキッチンを新品に\r\n浴室乾燥機を追加\r\nウォシュレットに変更\r\nフローリングへ'),
(30, 'ハイパージーズ', 166, '0022', '東京都杉並区久我山３−１', '204', 78000, 3000, 1, 1, '', '1R', 'オーナー所有', 'minimini@yahoo.co.jp', '', '', '', '', 'ミニミニ浜田山', '', '', '', '', '', '2017年10月26日 13時51分', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017年10月27日', 'クリーニング'),
(31, 'ジーズウルトラ', 180, '0001', '東京都武蔵野市吉祥寺北町１−１３−４', '102', 56000, 4000, 1, 1, '', '1DK', 'オーナー宅', 'ultra@yahoo.co.jp', 'hiper@yahoo.co.jp', '', '', '', 'ウルトラ不動産', 'ハイパー不動産', '', '', '', '', '2017年10月24日 1時01分', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 'ジーズアカデミー', 100, '3211', '埼玉県春日部市栄町１−３１−２', '103', 52000, 2000, 0, 0, '', '1DK', 'オーナー宅', 'yahoo@yahoo.co.jp', '', '', '', '', 'ヤフー不動産', '', '', '', '', '', '2017年10月26日 13時49分', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estate`
--
ALTER TABLE `estate`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estate`
--
ALTER TABLE `estate`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
