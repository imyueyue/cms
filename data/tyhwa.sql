-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-11-02 04:46:30
-- 服务器版本： 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `report`
--

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `addwho` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `subtitle`, `content`, `addwho`, `addtime`) VALUES
(0, '121', '33', '3232', '', '2015-10-30 07:52:53'),
(0, '332323', '32323', '32323', '', '2015-10-30 07:53:02'),
(0, '32321', '321321', '321321', '', '2015-10-30 08:06:12'),
(0, '3213', '1321', '32133', '', '2015-10-30 08:06:20');

-- --------------------------------------------------------

--
-- 表的结构 `yy_reports`
--

CREATE TABLE IF NOT EXISTS `yy_reports` (
  `id` int(11) NOT NULL,
  `sku` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `spec` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cdname` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `cdcode` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `lotid` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `supplyid` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `spname` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `spcode` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `picpath` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `udf1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `udf2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `udf3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `udf4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `udf5` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `udf6` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `yy_reports`
--

INSERT INTO `yy_reports` (`id`, `sku`, `spec`, `cdname`, `cdcode`, `lotid`, `supplyid`, `spname`, `spcode`, `picpath`, `udf1`, `udf2`, `udf3`, `udf4`, `udf5`, `udf6`) VALUES
(8, 'SKU000052161', 'spec', 'cdname', 'cdcode', '141230', '徐州医药股份有限公司', '热毒宁注射液', 'RDNZSY', '20151024/9F07A9DA-FE98-44DF-BC49-37368F75.jpg', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `yy_reports`
--
ALTER TABLE `yy_reports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `yy_reports`
--
ALTER TABLE `yy_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
