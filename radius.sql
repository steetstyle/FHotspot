-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 02, 2020 at 06:11 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `radius`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ad_soyad` varchar(200) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `ad_soyad`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Furkan Bostancı'),
(2, 'furkan', 'bdc6a9d55a26ee383a9b5e7bf8e42c83', 'Furkan Bostancı');

-- --------------------------------------------------------

--
-- Table structure for table `cui`
--

CREATE TABLE `cui` (
  `clientipaddress` varchar(15) NOT NULL DEFAULT '',
  `callingstationid` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(64) NOT NULL DEFAULT '',
  `cui` varchar(32) NOT NULL DEFAULT '',
  `creationdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastaccounting` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ghost_settings`
--

CREATE TABLE `ghost_settings` (
  `id` int(11) NOT NULL,
  `dayssms` text NOT NULL,
  `passwordexptime` text NOT NULL,
  `smsuser` text NOT NULL,
  `smspass` text NOT NULL,
  `smsno` text NOT NULL,
  `apiurl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ghost_settings`
--

INSERT INTO `ghost_settings` (`id`, `dayssms`, `passwordexptime`, `smsuser`, `smspass`, `smsno`, `apiurl`) VALUES
(1, 'gerek yok', '50', '5379229197', '31233123', 'ILETI MRKZI', 'http://api.iletimerkezi.com/v1/send-sms ');

-- --------------------------------------------------------

--
-- Table structure for table `hotspotgroup`
--

CREATE TABLE `hotspotgroup` (
  `id` int(11) NOT NULL,
  `group_name` varchar(500) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotspotgroup`
--

INSERT INTO `hotspotgroup` (`id`, `group_name`) VALUES
(11, 'isyeri');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) UNSIGNED NOT NULL,
  `ad` text NOT NULL,
  `soyad` text NOT NULL,
  `telefon` text NOT NULL,
  `hata` text NOT NULL,
  `hatakodu` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nas`
--

CREATE TABLE `nas` (
  `id` int(10) NOT NULL,
  `nasname` varchar(128) NOT NULL,
  `shortname` varchar(32) DEFAULT NULL,
  `type` varchar(30) DEFAULT 'other',
  `ports` int(5) DEFAULT NULL,
  `secret` varchar(60) NOT NULL DEFAULT 'secret',
  `server` varchar(64) DEFAULT NULL,
  `community` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT 'RADIUS Client'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `radacct`
--

CREATE TABLE `radacct` (
  `radacctid` bigint(21) NOT NULL,
  `acctsessionid` varchar(64) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `acctuniqueid` varchar(32) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `username` varchar(64) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `groupname` varchar(64) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `realm` varchar(64) CHARACTER SET latin1 DEFAULT '',
  `nasipaddress` varchar(15) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `nasportid` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `nasporttype` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `acctstarttime` datetime DEFAULT NULL,
  `acctstoptime` datetime DEFAULT NULL,
  `acctsessiontime` int(12) DEFAULT NULL,
  `acctauthentic` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `connectinfo_start` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `connectinfo_stop` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `acctinputoctets` bigint(20) DEFAULT NULL,
  `acctoutputoctets` bigint(20) DEFAULT NULL,
  `calledstationid` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `callingstationid` varchar(50) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `acctterminatecause` varchar(32) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `servicetype` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `framedprotocol` varchar(32) CHARACTER SET latin1 DEFAULT NULL,
  `framedipaddress` varchar(15) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `acctstartdelay` int(12) DEFAULT NULL,
  `acctstopdelay` int(12) DEFAULT NULL,
  `xascendsessionsvrkey` varchar(10) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `radcheck`
--

CREATE TABLE `radcheck` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `attribute` varchar(64) NOT NULL DEFAULT '',
  `op` char(2) NOT NULL DEFAULT '==',
  `value` varchar(253) NOT NULL DEFAULT '',
  `tip` longtext NOT NULL,
  `telefon` longtext NOT NULL,
  `tcno` longtext NOT NULL,
  `adsoyad` longtext NOT NULL,
  `tarih` date NOT NULL,
  `sifre` longtext NOT NULL,
  `dtarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

--
-- Dumping data for table `radcheck`
--

INSERT INTO `radcheck` (`id`, `username`, `attribute`, `op`, `value`, `tip`, `telefon`, `tcno`, `adsoyad`, `tarih`, `sifre`, `dtarih`) VALUES
(1, '31036356670', 'Cleartext-Password', ':=', '15322137', 'Hotspot', '05535850117', '31036356670', 'Recep Furkan Bostancı', '0000-00-00', '', '1997-07-18'),
(2, 'caner', 'Cleartext-Password', ':=', 'caner', 'Hotspot', '055555555', 'caner', 'Caner Hardal', '0000-00-00', '', '1818-12-18'),
(3, 'furkan', 'Cleartext-Password', ':=', 'furkan', '', '', '', '', '0000-00-00', '', '0000-00-00'),
(4, '123123123', 'Cleartext-Password', ':=', '123123123', 'Hotspot', '123123123', '123123123', 'canan Karatay', '2019-01-31', '', '1997-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `radgroupcheck`
--

CREATE TABLE `radgroupcheck` (
  `id` int(11) UNSIGNED NOT NULL,
  `groupname` varchar(64) NOT NULL DEFAULT '',
  `attribute` varchar(64) NOT NULL DEFAULT '',
  `op` char(2) NOT NULL DEFAULT '==',
  `value` varchar(253) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `radgroupreply`
--

CREATE TABLE `radgroupreply` (
  `id` int(11) UNSIGNED NOT NULL,
  `groupname` varchar(64) NOT NULL DEFAULT '',
  `attribute` varchar(64) NOT NULL DEFAULT '',
  `op` char(2) NOT NULL DEFAULT '=',
  `value` varchar(253) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radgroupreply`
--

INSERT INTO `radgroupreply` (`id`, `groupname`, `attribute`, `op`, `value`) VALUES
(1, 'isyeri', 'WISPr-Bandwidth-Max-Down', ':=', '99999'),
(2, 'isyeri', 'WISPr-Bandwidth-Max-Up', ':=', '99999'),
(3, 'isyeri', 'WISPr-Redirection-URL', '==', 'http://www.google.com');

-- --------------------------------------------------------

--
-- Table structure for table `radippool`
--

CREATE TABLE `radippool` (
  `id` int(11) UNSIGNED NOT NULL,
  `pool_name` varchar(30) NOT NULL,
  `framedipaddress` varchar(15) NOT NULL DEFAULT '',
  `nasipaddress` varchar(15) NOT NULL DEFAULT '',
  `calledstationid` varchar(30) NOT NULL,
  `callingstationid` varchar(30) NOT NULL,
  `expiry_time` datetime DEFAULT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `pool_key` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `radpostauth`
--

CREATE TABLE `radpostauth` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `pass` varchar(64) NOT NULL DEFAULT '',
  `reply` varchar(32) NOT NULL DEFAULT '',
  `authdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radpostauth`
--

INSERT INTO `radpostauth` (`id`, `username`, `pass`, `reply`, `authdate`) VALUES
(1, '31036356670', '15322137', 'Access-Reject', '2010-01-01 00:23:32'),
(2, '31036356670', '15322137xx', 'Access-Reject', '2010-01-01 00:23:36'),
(3, 'caner', 'caner', 'Access-Reject', '2010-01-01 00:24:11'),
(4, 'furkan', 'furkan', 'Access-Reject', '2010-01-01 00:27:06'),
(5, 'furkan', 'furkan', 'Access-Reject', '2010-01-01 00:27:12'),
(6, 'furkan', 'furkan', 'Access-Accept', '2010-01-01 00:27:47'),
(7, '31036356670', '15322137xx', 'Access-Reject', '2010-01-01 00:27:55'),
(8, 'caner', 'caner', 'Access-Accept', '2010-01-01 00:28:04'),
(9, '31036356670', '15322137', 'Access-Accept', '2010-01-01 00:28:20'),
(10, '31036356670', '15322137', 'Access-Accept', '2010-01-01 00:44:58'),
(11, '123123123', '123123123', 'Access-Reject', '2019-01-17 16:44:26'),
(12, '123123123', '123123123', 'Access-Reject', '2019-01-17 16:44:31'),
(13, '123123123', '123123123', 'Access-Reject', '2019-01-17 16:44:34'),
(14, '123123123', '123123123', 'Access-Reject', '2019-01-17 16:45:20'),
(15, '123123123', '123123123', 'Access-Reject', '2019-01-17 16:45:50'),
(16, 'caner', 'caner', 'Access-Accept', '2019-01-17 16:45:58'),
(17, '31036356670', '15322137xx', 'Access-Reject', '2019-01-17 16:46:09'),
(18, '31036356670', '15322137', 'Access-Accept', '2019-01-17 16:46:12'),
(19, '123123123', '123123123', 'Access-Reject', '2019-01-17 16:46:39'),
(20, '123123123', '123123123', 'Access-Reject', '2019-01-17 16:47:14'),
(21, '123123123', '123123123', 'Access-Reject', '2019-01-17 16:47:18'),
(22, '123123123', '123123123', 'Access-Reject', '2019-01-17 16:47:55'),
(23, '123123123', '123123123', 'Access-Reject', '2019-01-17 16:54:22'),
(24, '123123123', '123123123', 'Access-Accept', '2019-01-17 16:54:42'),
(25, '123123123', '123123123', 'Access-Accept', '2019-01-17 16:54:43'),
(26, '123123123', '123123123', 'Access-Accept', '2019-01-17 16:54:44'),
(27, '123123123', '123123123', 'Access-Accept', '2019-01-17 16:54:45'),
(28, '123123123', '123123123', 'Access-Accept', '2019-01-17 16:54:46'),
(29, '123123123', '123123123', 'Access-Accept', '2019-01-17 16:54:47'),
(30, '123123123', '123123123', 'Access-Accept', '2019-01-17 16:54:48'),
(31, '123123123', '123123123', 'Access-Accept', '2019-01-17 16:54:49'),
(32, '123123123', '123123123', 'Access-Accept', '2019-01-17 16:54:50'),
(33, '123123123', '123123123', 'Access-Accept', '2019-01-17 16:54:51'),
(34, '123123123', '123123123', 'Access-Accept', '2019-01-17 16:59:44'),
(35, 'admin', '', 'Access-Reject', '2019-01-17 17:27:26'),
(36, 'mekin', '', 'Access-Reject', '2019-01-17 17:27:58'),
(37, '31036356670', '', 'Access-Reject', '2019-01-17 17:28:46'),
(38, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:30:01'),
(39, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:30:50'),
(40, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:32:22'),
(41, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:33:54'),
(42, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:35:27'),
(43, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:36:59'),
(44, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:38:32'),
(45, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:40:04'),
(46, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:41:36'),
(47, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:43:09'),
(48, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:44:41'),
(49, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:46:13'),
(50, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:47:46'),
(51, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:49:18'),
(52, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:50:50'),
(53, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:52:23'),
(54, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:53:55'),
(55, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:55:27'),
(56, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:56:59'),
(57, '31036356670', '15322137', 'Access-Accept', '2019-01-17 17:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `radreply`
--

CREATE TABLE `radreply` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `attribute` varchar(64) NOT NULL DEFAULT '',
  `op` char(2) NOT NULL DEFAULT '=',
  `value` varchar(253) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `radusergroup`
--

CREATE TABLE `radusergroup` (
  `username` varchar(64) NOT NULL DEFAULT '',
  `groupname` varchar(64) NOT NULL DEFAULT '',
  `priority` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radusergroup`
--

INSERT INTO `radusergroup` (`username`, `groupname`, `priority`) VALUES
('123123123', 'isyeri', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wimax`
--

CREATE TABLE `wimax` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `authdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `spi` varchar(16) NOT NULL DEFAULT '',
  `mipkey` varchar(400) NOT NULL DEFAULT '',
  `lifetime` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cui`
--
ALTER TABLE `cui`
  ADD PRIMARY KEY (`username`,`clientipaddress`,`callingstationid`);

--
-- Indexes for table `ghost_settings`
--
ALTER TABLE `ghost_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotspotgroup`
--
ALTER TABLE `hotspotgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nas`
--
ALTER TABLE `nas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nasname` (`nasname`);

--
-- Indexes for table `radacct`
--
ALTER TABLE `radacct`
  ADD PRIMARY KEY (`radacctid`),
  ADD KEY `username` (`username`),
  ADD KEY `framedipaddress` (`framedipaddress`),
  ADD KEY `acctsessionid` (`acctsessionid`),
  ADD KEY `acctsessiontime` (`acctsessiontime`),
  ADD KEY `acctuniqueid` (`acctuniqueid`),
  ADD KEY `acctstarttime` (`acctstarttime`),
  ADD KEY `acctstoptime` (`acctstoptime`),
  ADD KEY `nasipaddress` (`nasipaddress`);

--
-- Indexes for table `radcheck`
--
ALTER TABLE `radcheck`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`(32));

--
-- Indexes for table `radgroupcheck`
--
ALTER TABLE `radgroupcheck`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupname` (`groupname`(32));

--
-- Indexes for table `radgroupreply`
--
ALTER TABLE `radgroupreply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupname` (`groupname`(32));

--
-- Indexes for table `radippool`
--
ALTER TABLE `radippool`
  ADD PRIMARY KEY (`id`),
  ADD KEY `radippool_poolname_expire` (`pool_name`,`expiry_time`),
  ADD KEY `framedipaddress` (`framedipaddress`),
  ADD KEY `radippool_nasip_poolkey_ipaddress` (`nasipaddress`,`pool_key`,`framedipaddress`);

--
-- Indexes for table `radpostauth`
--
ALTER TABLE `radpostauth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radreply`
--
ALTER TABLE `radreply`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`(32));

--
-- Indexes for table `radusergroup`
--
ALTER TABLE `radusergroup`
  ADD KEY `username` (`username`(32));

--
-- Indexes for table `wimax`
--
ALTER TABLE `wimax`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `spi` (`spi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ghost_settings`
--
ALTER TABLE `ghost_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hotspotgroup`
--
ALTER TABLE `hotspotgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nas`
--
ALTER TABLE `nas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `radacct`
--
ALTER TABLE `radacct`
  MODIFY `radacctid` bigint(21) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `radcheck`
--
ALTER TABLE `radcheck`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `radgroupcheck`
--
ALTER TABLE `radgroupcheck`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `radgroupreply`
--
ALTER TABLE `radgroupreply`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `radippool`
--
ALTER TABLE `radippool`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `radpostauth`
--
ALTER TABLE `radpostauth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `radreply`
--
ALTER TABLE `radreply`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wimax`
--
ALTER TABLE `wimax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
