-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017 年 10 月 26 日 16:35
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
(16, 'ジーズレジデンスⅡ', 107, '0052', '東京都港区赤坂１−２−３', 'A', 200000, 5000, 2, 2, '', '1K', 'ジーズアカデミー東京', 'dejihari@gmail.com', '', '', '', '', 'デジハリ不動産', '', '', '', '', '', '2017年10月26日 16時05分', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017年10月27日', 'クリーニング'),
(18, 'ジーズプラチナ', 107, '0064', '東京都港区北青山３−１', '3-A', 110000, 10000, 2, 2, '', '1K', '現地エントランス横　keybox「0331」', 'g\'s@gmail.com', 'akasaka@yahoo.co.hp', 'every@co.jp', '', '', 'ジーズ不動産', '赤坂不動産', 'エブリー不動産', '', '', '', '2017年10月26日 2時13分', 0, 1, 0, 0, 0, 'エイブル', '0422', '1111', '1111', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'ハイパージーズ', 166, '0022', '東京都杉並区久我山３−１', '203', 78000, 3000, 1, 1, '', '1K', 'オーナー所有', 'minimini@yahoo.co.jp', '', '', '', '', 'ミニミニ浜田山', '', '', '', '', '', '2017年10月26日 14時52分', 0, 0, 0, 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '2017年10月31日', '', ''),
(21, 'ジーズプラチナ', 107, '0064', '東京都港区北青山３−１', '3-E', 110000, 10000, 2, 2, '', '1DK', '現地エントランス横　keybox「0331」', 'g\'s@gmail.com', 'akasaka@yahoo.co.hp', 'every@co.jp', '', '', 'ジーズ不動産', '赤坂不動産', 'エブリー不動産', '', '', '', '2017年10月26日 14時55分', 0, 1, 0, 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '2017年10月28日', '2017年10月28日', '和室を洋室に変更\r\nキッチンを新品に\r\n浴室乾燥機を追加\r\nウォシュレットに変更'),
(22, 'ジーズプラチナ', 107, '0064', '東京都港区北青山３−１', '3-B', 110000, 10000, 2, 2, '', '1K', '現地エントランス横　keybox「0331」', 'g\'s@gmail.com', 'akasaka@yahoo.co.hp', 'every@co.jp', '', '', 'ジーズ不動産', '赤坂不動産', 'エブリー不動産', '', '', '', '2017年10月25日 1時37分', 0, 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017年10月28日', 'クリーニング'),
(23, 'ジーズプラチナ', 107, '0064', '東京都港区北青山３−１', '2-B', 110000, 10000, 2, 2, '', '1R', '現地エントランス横　keybox「0331」', 'g\'s@gmail.com', 'akasaka@yahoo.co.hp', 'every@co.jp', '', '', 'ジーズ不動産', '赤坂不動産', 'エブリー不動産', '', '', '', '2017年10月24日 1時04分', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'ジーズプラチナ', 107, '0064', '東京都港区北青山３−１', '1-A', 110000, 10000, 2, 2, '', '1R', '現地エントランス横　keybox「0331」', 'g\'s@gmail.com', 'akasaka@yahoo.co.hp', 'every@co.jp', '', '', 'ジーズ不動産', '赤坂不動産', 'エブリー不動産', '', '', '', '2017年10月24日 1時04分', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'ジーズプラチナ', 107, '0064', '東京都港区北青山３−１', '1-B', 110000, 10000, 2, 2, '', '1R', '現地エントランス横　keybox「0331」', 'g\'s@gmail.com', 'akasaka@yahoo.co.hp', 'every@co.jp', '', '', 'ジーズ不動産', '赤坂不動産', 'エブリー不動産', '', '', '', '2017年10月24日 1時04分', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(26, 'ハイパージーズ', 166, '0022', '東京都杉並区久我山３−１', '201', 78000, 3000, 1, 1, '', '1R', 'オーナー所有', 'minimini@yahoo.co.jp', '', '', '', '', 'ミニミニ浜田山', '', '', '', '', '', '2017年10月25日 1時36分', 0, 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017年10月26日', 'クリーニング'),
(27, 'ジーズアカデミー', 100, '3211', '埼玉県春日部市栄町１−３１−２', '101', 50000, 2000, 1, 1, '', '1DK', 'オーナー宅', 'yahoo@yahoo.co.jp', '', '', '', '', 'ヤフー不動産', '', '', '', '', '', '2017年10月24日 16時02分', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017年11月09日', ''),
(28, 'ジーズアカデミー', 100, '3211', '埼玉県春日部市栄町１−３１−２', '102', 52000, 2000, 0, 0, '', '1K', 'オーナー宅', 'yahoo@yahoo.co.jp', '', '', '', '', 'ヤフー不動産', '', '', '', '', '', '2017年10月26日 16時05分', 0, 0, 0, 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017年11月03日', 'クリーニング'),
(29, 'ジーズプラチナ', 107, '0064', '東京都港区北青山３−１', '1-C', 110000, 10000, 2, 2, '', '1R', '現地エントランス横　keybox「0331」', 'g\'s@gmail.com', 'akasaka@yahoo.co.hp', 'every@co.jp', '', '', 'ジーズ不動産', '赤坂不動産', 'エブリー不動産', '', '', '', '2017年10月26日 15時56分', 0, 0, 1, 0, 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017年11月02日', '和室を洋室に変更\r\nキッチンを新品に\r\n浴室乾燥機を追加\r\nウォシュレットに変更\r\nフローリングへ'),
(30, 'ハイパージーズ', 166, '0022', '東京都杉並区久我山３−１', '204', 78000, 3000, 1, 1, '', '1R', 'オーナー所有', 'minimini@yahoo.co.jp', '', '', '', '', 'ミニミニ浜田山', '', '', '', '', '', '2017年10月26日 13時51分', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '2017年10月27日', 'クリーニング'),
(31, 'ジーズウルトラ', 180, '0001', '東京都武蔵野市吉祥寺北町１−１３−４', '102', 56000, 4000, 1, 1, '', '1DK', 'オーナー宅', 'ultra@yahoo.co.jp', 'hiper@yahoo.co.jp', '', '', '', 'ウルトラ不動産', 'ハイパー不動産', '', '', '', '', '2017年10月24日 1時01分', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(32, 'ジーズアカデミー', 100, '3211', '埼玉県春日部市栄町１−３１−２', '103', 52000, 2000, 0, 0, '', '1DK', 'オーナー宅', 'yahoo@yahoo.co.jp', '', '', '', '', 'ヤフー不動産', '', '', '', '', '', '2017年10月26日 13時49分', 1, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE `gs_user_table` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `mst_product`
--

CREATE TABLE `mst_product` (
  `code` int(11) NOT NULL,
  `post1` int(10) NOT NULL,
  `post2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gazou` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `traffic1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `station1` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `min1` int(5) NOT NULL,
  `traffic2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `station2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `min2` int(5) NOT NULL,
  `yachin` int(10) NOT NULL,
  `kanri` int(10) NOT NULL,
  `shiki` int(5) NOT NULL,
  `rei` int(5) NOT NULL,
  `hosho` int(10) NOT NULL,
  `shikibiki` int(10) NOT NULL,
  `shokyaku` int(10) NOT NULL,
  `sonpo` int(10) NOT NULL,
  `sonpoyear` int(10) NOT NULL,
  `madori` int(10) NOT NULL,
  `menseki` int(10) NOT NULL,
  `kozo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tikunen1` int(10) NOT NULL,
  `tikunen2` int(10) NOT NULL,
  `floor1` int(10) NOT NULL,
  `floor2` int(10) NOT NULL,
  `hoi` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ziki` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `torihiki` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `setsubi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chukai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `naikan1_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `naikan2_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `naikan3_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `naikan4_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `timedate` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `mst_product`
--

INSERT INTO `mst_product` (`code`, `post1`, `post2`, `gazou`, `address`, `traffic1`, `station1`, `min1`, `traffic2`, `station2`, `min2`, `yachin`, `kanri`, `shiki`, `rei`, `hosho`, `shikibiki`, `shokyaku`, `sonpo`, `sonpoyear`, `madori`, `menseki`, `kozo`, `tikunen1`, `tikunen2`, `floor1`, `floor2`, `hoi`, `ziki`, `torihiki`, `setsubi`, `chukai`, `naikan1_name`, `naikan2_name`, `naikan3_name`, `naikan4_name`, `timedate`) VALUES
(62, 180, '0003', 'gaikan.jpg', '東京都武蔵野市吉祥寺南町３−３２−６', 'JR', '吉祥寺', 4, '井の頭線', '吉祥寺', 3, 8, 2, 1, 1, 1, 1, 1, 2, 2, 1, 20, 'RC', 2017, 2, 2, 2, '南', 'すぐ', '仲介', 'バルニコー', '2', 'room6.jpg', 'room4.jpg', 'room6.jpg', 'room5.jpg', ''),
(69, 830, '0053', 'gaikan.jpg', '福岡県久留米市藤山町', 'JR', '久留米', 3, '西鉄バス', '久留米', 10, 5, 2, 1, 1, 1, 1, 1, 2, 2, 1, 20, 'RC', 2016, 2, 2, 2, '南', '即時', '仲介', '', '1', 'room2.jpg', '', '', '', '2017/10/7 7:09:40'),
(70, 167, '0057', '', '杉並区西荻南３', 'JR', '西荻', 10, 'JR', '荻窪', 25, 9, 1, 1, 1, 0, 0, 0, 2, 2, 1, 20, 'RC', 2016, 2, 2, 2, '南', '即', '仲介', '', '2', '', '', '', '', '2017/10/9 16:02:27');

-- --------------------------------------------------------

--
-- テーブルの構造 `mst_staff`
--

CREATE TABLE `mst_staff` (
  `code` int(11) NOT NULL,
  `name` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `mst_staff`
--

INSERT INTO `mst_staff` (`code`, `name`, `password`) VALUES
(1, 'ろくまる', '12345678901234567890123456789012'),
(24, '田中', '0292e031195ca50fed149b421c7df329'),
(26, '木下', 'd239f852679da3d27bf4cdc77dcef16d'),
(27, '田中', '0292e031195ca50fed149b421c7df329'),
(28, '田中', '0292e031195ca50fed149b421c7df329');

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
-- Indexes for table `estate`
--
ALTER TABLE `estate`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_product`
--
ALTER TABLE `mst_product`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `mst_staff`
--
ALTER TABLE `mst_staff`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estate`
--
ALTER TABLE `estate`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `gs_user_table`
--
ALTER TABLE `gs_user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mst_product`
--
ALTER TABLE `mst_product`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `mst_staff`
--
ALTER TABLE `mst_staff`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `code` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
