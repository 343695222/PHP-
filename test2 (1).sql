-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3306
-- 生成日期： 2019-12-07 17:24:20
-- 服务器版本： 5.7.24
-- PHP 版本： 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `test2`
--

-- --------------------------------------------------------

--
-- 表的结构 `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `chatdate` time DEFAULT NULL,
  `msg` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `logined`
--

DROP TABLE IF EXISTS `logined`;
CREATE TABLE IF NOT EXISTS `logined` (
  `usr` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `logined`
--

INSERT INTO `logined` (`usr`) VALUES
('11'),
('');

-- --------------------------------------------------------

--
-- 表的结构 `ly_content`
--

DROP TABLE IF EXISTS `ly_content`;
CREATE TABLE IF NOT EXISTS `ly_content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usernameid` int(10) NOT NULL,
  `headimg` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `content` text,
  `time` bigint(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ly_content`
--

INSERT INTO `ly_content` (`id`, `usernameid`, `headimg`, `title`, `content`, `time`) VALUES
(94, 333, './photo/20190605115313307.jpg', 'gg', 'frg', 1559713529),
(95, 44, './photo/20190605153427747.jpg', 'bgbbb', '川端康成你死定了才能到vvcnwnvc1', 1559720097),
(99, 11, './photo/20190526001018849.jpg', 'btgbtbtb', '川端康成你死定了才能到vvcnwnvc1', 1560233646),
(98, 123, './photo/20190605154321375.jpg', 'gg', 'grgrgrg', 1559720618),
(97, 111111, './photo/20190605113959341.png', '1', '1', 1559720428),
(96, 111111, './photo/20190605113959341.png', '在在草地上GV个', '方不方便吧', 1559720399),
(92, 333, './photo/20190605115313307.jpg', 'gg', '方不csc', 1559708807),
(93, 333, './photo/20190605115313307.jpg', 'bgbbb', '方不方便吧', 1559713490),
(87, 111, '', 'bgbbb', 'btgbtbbgt', 1559667038),
(86, 11, './photo/20190526001018849.jpg', 'llll', '方不方便吧', 1559116644),
(91, 333, './photo/20190605115313307.jpg', '在在草地上GV个', '方不方便吧', 1559706816),
(90, 1, './photo/20190605114609659.jpg', 'btgbtbtb', 'grgrgrg', 1559706447),
(89, 1, './photo/20190605114609659.jpg', 'bgbbb', 'grgrgrg', 1559706387),
(85, 11, './photo/20190526001018849.jpg', 'btgbtbtb', 'grgrgrg', 1558811469),
(84, 11, './photo/20190526001018849.jpg', 'btgbtbtb', 'grgrgrg', 1558811450),
(83, 11, './photo/20190526001018849.jpg', 'btgbtbtb', 'grgrgrg', 1558811435),
(82, 11, './photo/20190526001018849.jpg', 'bgbbb', 'btgbtbbgt', 1558811422),
(81, 11, 'Array', 'bgbbb', 'btgbtbbgt', 1558810549),
(80, 11, 'Array', 'btgbtbtb', 'frg', 1558810392),
(79, 11, 'Array', 'btgbtbtb', 'grgrgrg', 1558810375),
(78, 11, '', 'btgbtbtb', 'grgrgrg', 1558810284),
(76, 11, 'Array', 'bgbbb', 'btgbtbbgt', 1558809950);

-- --------------------------------------------------------

--
-- 表的结构 `ly_user`
--

DROP TABLE IF EXISTS `ly_user`;
CREATE TABLE IF NOT EXISTS `ly_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `headimg` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `tel` bigint(11) DEFAULT NULL,
  `emai` varchar(255) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `ly_user`
--

INSERT INTO `ly_user` (`id`, `username`, `nickname`, `headimg`, `password`, `tel`, `emai`, `ip`) VALUES
(1, '1231', NULL, NULL, '456', NULL, NULL, NULL),
(2, '1232', NULL, NULL, '456', NULL, NULL, NULL),
(3, 'poi', NULL, NULL, '456', NULL, NULL, NULL),
(4, '1234', NULL, NULL, '456', NULL, NULL, NULL),
(5, '1235', NULL, NULL, '456', NULL, NULL, NULL),
(6, '1236', NULL, NULL, '456', NULL, NULL, NULL),
(7, '1237', NULL, NULL, '456', NULL, NULL, NULL),
(8, '1238', NULL, NULL, '456', NULL, NULL, NULL),
(9, '1239', NULL, NULL, '456', NULL, NULL, NULL),
(10, '12310', NULL, NULL, '456', NULL, NULL, NULL),
(11, '12311', NULL, NULL, '456', NULL, NULL, NULL),
(12, '12312', NULL, NULL, '45666', NULL, NULL, NULL),
(16, '12', NULL, NULL, '12', NULL, NULL, NULL),
(13, 'asd', NULL, NULL, 'qwer', NULL, NULL, NULL),
(17, '111', NULL, NULL, '111', NULL, NULL, NULL),
(18, '1111', NULL, './photo/20190525233018521.jpg', '1111', NULL, NULL, NULL),
(19, '11', NULL, './photo/20190526001018849.jpg', '11', NULL, NULL, NULL),
(20, 'cdx', NULL, './photo/20190526024345387.jpg', 'cdx', NULL, NULL, NULL),
(21, '11111', NULL, './photo/20190605113930856.jpg', '11111', NULL, NULL, NULL),
(22, '111111', NULL, './photo/20190605113959341.png', '111111', NULL, NULL, NULL),
(23, 'zzz', NULL, './photo/20190605114121305.png', '11111', NULL, NULL, NULL),
(24, 'abc', NULL, './photo/20190605114222484.jpg', 'abc', NULL, NULL, NULL),
(25, '1', NULL, './photo/20190605114609659.jpg', '1', NULL, NULL, NULL),
(26, '333', NULL, './photo/20190605115313307.jpg', '333', NULL, NULL, NULL),
(27, '44', NULL, './photo/20190605153427747.jpg', '44', NULL, NULL, NULL),
(28, '111111', NULL, './photo/20190605153937951.jpg', '111111', NULL, NULL, NULL),
(29, '123', NULL, './photo/20190605154321375.jpg', '123', NULL, NULL, NULL),
(30, '3333', NULL, './photo/20190612105820490.jpg', '3333', NULL, NULL, NULL),
(31, 'root', NULL, './photo/20191208011207374.jpg', 'root', NULL, NULL, NULL),
(32, '123', NULL, './photo/20191208011353665.jpg', '123', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
