-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2014 at 04:30 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vip`
--

-- --------------------------------------------------------

--
-- Table structure for table `backend_user`
--

CREATE TABLE IF NOT EXISTS `backend_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `activkey` char(36) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_by` int(11) NOT NULL,
  `modified_user_id` int(11) NOT NULL,
  `date_entered` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `backend_user`
--

INSERT INTO `backend_user` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `role`, `activkey`, `status`, `deleted`, `created_by`, `modified_user_id`, `date_entered`, `date_modified`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'User1', 'neeraj24a@gmail.com', 1, 'd75565c3-0b28-4222-e480-536f95aa80f9', 1, 0, 1, 1, '2013-09-19 00:00:00', '2014-05-11 11:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE IF NOT EXISTS `downloads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `songs` char(36) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `is_delete` tinyint(1) DEFAULT '0',
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL COMMENT '1-song, 2-video',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0',
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `created_by` char(36) COLLATE utf8_unicode_ci NOT NULL,
  `modified_user_id` char(36) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `type`, `name`, `parent`, `slug`, `status`, `isDeleted`, `createdAt`, `updatedAt`, `created_by`, `modified_user_id`) VALUES
(1, 1, 'Hip-Hop', 0, 'hip-hop', 1, 0, '2014-08-10 00:00:00', '0000-00-00 00:00:00', '1', ''),
(2, 1, 'Pop', 0, 'pop', 1, 0, '2014-08-10 00:00:00', '0000-00-00 00:00:00', '1', ''),
(3, 1, 'Dance', 0, 'dance', 1, 0, '2014-08-10 00:00:00', '0000-00-00 00:00:00', '1', ''),
(4, 1, 'Country', 0, 'country', 1, 0, '2014-08-10 00:00:00', '2014-08-10 00:00:00', '1', ''),
(5, 1, 'Original', 1, 'original', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', ''),
(6, 1, 'Quickhit', 1, 'quickhit', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', ''),
(7, 1, 'Extend', 1, 'extend', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', ''),
(8, 1, 'sub-pop', 2, 'sub-pop', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', ''),
(9, 2, 'v Hip-Hop', 0, 'v-hip-hop', 1, 0, '2014-08-10 00:00:00', '0000-00-00 00:00:00', '1', ''),
(10, 2, 'v Pop', 0, 'v-pop', 1, 0, '2014-08-10 00:00:00', '0000-00-00 00:00:00', '1', ''),
(11, 2, 'v Dance', 0, 'v-dance', 1, 0, '2014-08-10 00:00:00', '0000-00-00 00:00:00', '1', ''),
(12, 2, 'v Country', 0, 'v-country', 1, 0, '2014-08-10 00:00:00', '2014-08-10 00:00:00', '1', ''),
(13, 2, 'v Original', 9, 'v-original', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', ''),
(14, 2, 'v Quickhit', 9, 'v-quickhit', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', ''),
(15, 2, 'v Extend', 9, 'v-extend', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', ''),
(16, 2, 'v sub-pop', 10, 'v-sub-pop', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `minitrafic`
--

CREATE TABLE IF NOT EXISTS `minitrafic` (
  `id` int(1) unsigned NOT NULL,
  `traff` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `minitrafic`
--

INSERT INTO `minitrafic` (`id`, `traff`) VALUES
(1, '{"today":{"visits":4,"visitors":["::1"],"online":{"::1":1416254329},"maxonline":[1,1416254223]},"yesterday":{"visits":0,"visitors":0,"maxonline":0},"record":{"visits":[4,1416254329],"visitors":[1,1416254223],"online":[1,1416254223]},"total_visits":4,"day":17,"start":1416254199}');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'dj'),
(3, 'uploader');

-- --------------------------------------------------------

--
-- Table structure for table `song_lists`
--

CREATE TABLE IF NOT EXISTS `song_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `songType` int(1) NOT NULL DEFAULT '1' COMMENT '1-music, 2-video',
  `songName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci,
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fileSize` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bpm` int(4) DEFAULT NULL,
  `songDescription` text COLLATE utf8_unicode_ci,
  `filePath` text COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fileName` text COLLATE utf8_unicode_ci,
  `thumbnail` text COLLATE utf8_unicode_ci,
  `subGenre` int(11) DEFAULT NULL,
  `artistName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `userId` int(11) DEFAULT NULL,
  `total_play` int(11) NOT NULL DEFAULT '0',
  `total_download` int(11) NOT NULL DEFAULT '0',
  `top_of_the_week` int(11) NOT NULL DEFAULT '0',
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL,
  `isDeleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `song_lists`
--

INSERT INTO `song_lists` (`id`, `songType`, `songName`, `slug`, `version`, `fileSize`, `bpm`, `songDescription`, `filePath`, `genre`, `fileName`, `thumbnail`, `subGenre`, `artistName`, `status`, `userId`, `total_play`, `total_download`, `top_of_the_week`, `createdAt`, `updatedAt`, `isDeleted`) VALUES
(1, 1, 'Lorem Centre', 'lorem-centre-1', '6', '5678', 128, NULL, '../assets/songs/Hip-Hop/Original/Lorem Centre-Neeraj Kumar.mp3', '1', 'Lorem Centre-Neeraj Kumar.mp3', NULL, 5, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(2, 1, 'Lorem Events Centre', 'lorem-events-centre-2', '6', '5678', 128, NULL, '../assets/songs/Hip-Hop/Original/Lorem Events Centre-Neeraj Kumar.mp3', '1', 'Lorem Events Centre-Neeraj Kumar.mp3', NULL, 5, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(3, 1, 'Td Lorem', 'td-lorem-3', '6', '5678', 128, NULL, '../assets/songs/Hip-Hop/Original/Td Lorem-Neeraj Kumar.mp3', '1', 'Td Lorem-Neeraj Kumar.mp3', NULL, 5, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(4, 2, 'Lorem Centre', 'lorem-centre-3', '4', '5678', 128, NULL, '../assets/videos/v Hip-Hop/v Original/Lorem Centre-Neeraj Kumar.mp4', '9', 'Lorem Centre-Neeraj Kumar.mp4', NULL, 13, 'Neeraj Kumar', 1, 1, 77, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(5, 2, 'Lorem Events Centre', 'lorem-events-centre-5', '4', '5678', 128, NULL, '../assets/videos/v Hip-Hop/v Original/Lorem Events Centre-Neeraj Kumar.mp4', '9', 'Lorem Events Centre-Neeraj Kumar.mp4', NULL, 13, 'Neeraj Kumar', 1, 1, 5, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(6, 2, 'Td Lorem', 'td-lorem-6', '4', '5678', 128, NULL, '../assets/video/v Hip-Hop/v Original/Td Lorem-Neeraj Kumar.mp4', '9', 'Td Lorem-Neeraj Kumar.mp4', NULL, 13, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(7, 1, 'Lorem Centre', 'lorem-centre-7', '6', '5678', 128, NULL, '../assets/songs/Hip-Hop/Original/Lorem Centre-Neeraj Kumar.mp3', '1', 'Lorem Centre-Neeraj Kumar.mp3', NULL, 5, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(8, 1, 'Lorem Events Centre', 'lorem-events-centre-8', '6', '5678', 128, NULL, '../assets/songs/Hip-Hop/Original/Lorem Events Centre-Neeraj Kumar.mp3', '1', 'Lorem Events Centre-Neeraj Kumar.mp3', NULL, 5, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(9, 1, 'Td Lorem', 'td-lorem-9', '6', '5678', 128, NULL, '../assets/songs/Hip-Hop/Original/Td Lorem-Neeraj Kumar.mp3', '1', 'Td Lorem-Neeraj Kumar.mp3', NULL, 5, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(10, 2, 'Lorem Centre', 'lorem-centre-10', '4', '5678', 128, NULL, '../assets/videos/v Hip-Hop/v Original/Lorem Centre-Neeraj Kumar.mp4', '9', 'Lorem Centre-Neeraj Kumar.mp4', NULL, 13, 'Neeraj Kumar', 1, 1, 1, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(11, 2, 'Lorem Events Centre', 'lorem-events-centre-11', '4', '5678', 128, NULL, '../assets/videos/v Hip-Hop/v Original/Lorem Events Centre-Neeraj Kumar.mp4', '9', 'Lorem Events Centre-Neeraj Kumar.mp4', NULL, 13, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(12, 2, 'Td Lorem', 'td-lorem-12', '4', '5678', 128, NULL, '../assets/video/v Hip-Hop/v Original/Td Lorem-Neeraj Kumar.mp4', '9', 'Td Lorem-Neeraj Kumar.mp4', NULL, 13, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(13, 1, 'Lorem Centre', 'lorem-centre-13', '6', '5678', 128, NULL, '../assets/songs/Hip-Hop/Original/Lorem Centre-Neeraj Kumar.mp3', '1', 'Lorem Centre-Neeraj Kumar.mp3', NULL, 5, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(14, 1, 'Lorem Events Centre', 'lorem-events-centre-14', '6', '5678', 128, NULL, '../assets/songs/Hip-Hop/Original/Lorem Events Centre-Neeraj Kumar.mp3', '1', 'Lorem Events Centre-Neeraj Kumar.mp3', NULL, 5, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(15, 1, 'Td Lorem', 'td-lorem-15', '6', '5678', 128, NULL, '../assets/songs/Hip-Hop/Original/Td Lorem-Neeraj Kumar.mp3', '1', 'Td Lorem-Neeraj Kumar.mp3', NULL, 5, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(16, 2, 'Lorem Centre', 'lorem-centre-16', '4', '5678', 128, NULL, '../assets/videos/v Hip-Hop/v Original/Lorem Centre-Neeraj Kumar.mp4', '9', 'Lorem Centre-Neeraj Kumar.mp4', NULL, 13, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(17, 2, 'Lorem Events Centre', 'lorem-events-centre-17', '4', '5678', 128, NULL, '../assets/videos/v Hip-Hop/v Original/Lorem Events Centre-Neeraj Kumar.mp4', '9', 'Lorem Events Centre-Neeraj Kumar.mp4', NULL, 13, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(18, 2, 'Td Lorem', 'td-lorem-18', '4', '5678', 128, NULL, '../assets/video/v Hip-Hop/v Original/Td Lorem-Neeraj Kumar.mp4', '9', 'Td Lorem-Neeraj Kumar.mp4', NULL, 13, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(19, 1, 'Lorem Centre', 'lorem-centre-19', '6', '5678', 128, NULL, '../assets/songs/Hip-Hop/Original/Lorem Centre-Neeraj Kumar.mp3', '1', 'Lorem Centre-Neeraj Kumar.mp3', NULL, 5, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(20, 1, 'Lorem Events Centre', 'lorem-events-centre-20', '6', '5678', 128, NULL, '../assets/songs/Hip-Hop/Original/Lorem Events Centre-Neeraj Kumar.mp3', '1', 'Lorem Events Centre-Neeraj Kumar.mp3', NULL, 5, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(21, 1, 'Td Lorem', 'td-lorem-21', '6', '5678', 128, NULL, '../assets/songs/Hip-Hop/Original/Td Lorem-Neeraj Kumar.mp3', '1', 'Td Lorem-Neeraj Kumar.mp3', NULL, 5, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(22, 2, 'Lorem Centre', 'lorem-centre-22', '4', '5678', 128, NULL, '../assets/videos/v Hip-Hop/v Original/Lorem Centre-Neeraj Kumar.mp4', '9', 'Lorem Centre-Neeraj Kumar.mp4', NULL, 13, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(23, 2, 'Lorem Events Centre', 'lorem-events-centre-23', '4', '5678', 128, NULL, '../assets/videos/v Hip-Hop/v Original/Lorem Events Centre-Neeraj Kumar.mp4', '9', 'Lorem Events Centre-Neeraj Kumar.mp4', NULL, 13, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(24, 2, 'Td Lorem', 'td-lorem-24', '4', '5678', 128, NULL, '../assets/video/v Hip-Hop/v Original/Td Lorem-Neeraj Kumar.mp4', '9', 'Td Lorem-Neeraj Kumar.mp4', NULL, 13, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(25, 1, 'Lorem Centre', 'lorem-centre-25', '6', '5678', 128, NULL, '../assets/songs/Hip-Hop/Original/Lorem Centre-Neeraj Kumar.mp3', '1', 'Lorem Centre-Neeraj Kumar.mp3', NULL, 5, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(26, 1, 'Lorem Events Centre', 'lorem-events-centre-26', '6', '5678', 128, NULL, '../assets/songs/Hip-Hop/Quickhit/Lorem Events Centre-Neeraj Kumar.mp3', '1', 'Lorem Events Centre-Neeraj Kumar.mp3', NULL, 6, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(27, 1, 'Td Lorem', 'td-lorem-27', '6', '5678', 128, NULL, '../assets/songs/Pop/sub-pop/Td Lorem-Neeraj Kumar.mp3', '2', 'Td Lorem-Neeraj Kumar.mp3', NULL, 8, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(28, 2, 'Lorem Centre', 'lorem-centre-28', '4', '5678', 128, NULL, '../assets/videos/v Hip-Hop/v Extend/Lorem Centre-Neeraj Kumar.mp4', '9', 'Lorem Centre-Neeraj Kumar.mp4', NULL, 15, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(29, 2, 'Lorem Events Centre', 'lorem-events-centre-29', '4', '5678', 128, NULL, '../assets/videos/v Pop/v sub-pop/Lorem Events Centre-Neeraj Kumar.mp4', '10', 'Lorem Events Centre-Neeraj Kumar.mp4', NULL, 16, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0),
(30, 2, 'Td Lorem', 'td-lorem-30', '4', '5678', 128, NULL, '../assets/video/v Pop/v sub-pop/Td Lorem-Neeraj Kumar.mp4', '10', 'Td Lorem-Neeraj Kumar.mp4', NULL, 16, 'Neeraj Kumar', 1, 1, 0, 0, 0, '2014-12-04 00:00:00', '2014-12-04 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `song_tags`
--

CREATE TABLE IF NOT EXISTS `song_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `song` int(11) NOT NULL,
  `genre` int(11) NOT NULL,
  `createdAt` datetime NOT NULL,
  `updatedAt` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `isDeleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `version`
--

CREATE TABLE IF NOT EXISTS `version` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('song','video') NOT NULL,
  `name` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `version`
--

INSERT INTO `version` (`id`, `type`, `name`) VALUES
(4, 'video', 'Clean'),
(5, 'video', 'Dirty'),
(6, 'song', 'Clean'),
(7, 'song', 'Dirty');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
