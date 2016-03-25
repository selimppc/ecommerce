-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2016 at 05:37 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otw`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8_unicode_ci,
  `featured_image` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured_image_2` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail_2` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_desc` text COLLATE utf8_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sub_page_id` int(11) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `slug`, `type`, `desc`, `featured_image`, `featured_image_2`, `thumbnail`, `thumbnail_2`, `meta_title`, `meta_keyword`, `meta_desc`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `sub_page_id`, `sort_order`) VALUES
(1, 'About us', 'about-us', '3', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:44:01', '2016-03-12 19:44:01', 0, NULL),
(2, 'Delivery & Installation', 'delivery-installation', '3', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:44:37', '2016-03-12 19:44:37', 0, NULL),
(3, 'Wholesale Customers', 'wholesale-customers', '3', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:45:00', '2016-03-12 19:45:00', 0, NULL),
(4, 'Splashbacks', 'splashbacks', '3', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:45:23', '2016-03-12 19:45:23', 0, NULL),
(5, 'Contact us', 'contact-us', '3', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:46:04', '2016-03-12 19:46:04', 0, NULL),
(6, 'STRETCHING PAINTING CANVAS', 'stretching-painting-canvas', '2', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:49:21', '2016-03-12 19:49:21', NULL, NULL),
(7, 'PHOTO FRAMING', 'photo-framing', '2', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:49:48', '2016-03-12 19:49:48', NULL, NULL),
(8, 'COLLAGE FRAMING', 'collage-framing', '2', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:50:07', '2016-03-12 19:50:07', NULL, NULL),
(9, 'MATT CUTTING', 'matt-cutting', '2', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:50:25', '2016-03-12 19:50:25', NULL, NULL),
(10, 'CANVAS PRINTING', 'canvas-printing', '2', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:50:43', '2016-03-12 19:50:43', NULL, NULL),
(11, 'MIRRORS FRAMING', 'mirrors-framing', '2', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:51:01', '2016-03-12 19:51:01', NULL, NULL),
(12, 'ACRYLIC PHOTO MOUNTING', 'acrylic-photo-mounting', '2', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:51:31', '2016-03-12 19:51:31', NULL, NULL),
(13, 'CUSTOM MATTBOARD', 'custom-mattboard', '2', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:51:53', '2016-03-12 19:51:53', NULL, NULL),
(15, 'SHADOW BOX FRAMING', 'shadow-box-framing', '2', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:52:31', '2016-03-12 19:52:31', NULL, NULL),
(16, 'SPORT MEMORABILIA', 'sport-memorabilia', '2', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:52:53', '2016-03-12 19:52:53', NULL, NULL),
(17, 'JERSEY /CRICKET BATS/BOXING COIN/ FRAMING', 'jersey-cricket-batsboxing-coin-framing', '2', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:53:15', '2016-03-12 19:53:15', NULL, NULL),
(18, '3D FRAMING', '3d-framing', '2', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:53:34', '2016-03-12 19:53:34', NULL, NULL),
(19, 'GLASS REPAIR', 'glass-repair', '2', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:53:50', '2016-03-12 19:53:50', NULL, NULL),
(20, 'WALL PAINTING', 'wall-painting', '1', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:54:39', '2016-03-12 19:54:39', NULL, NULL),
(22, 'Art WALL PAINTING', 'art-wall-painting', '1', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:55:19', '2016-03-12 19:55:19', NULL, NULL),
(23, 'CUSTOM MADE PAINTING', 'custom-made-painting', '1', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:55:44', '2016-03-12 19:55:44', NULL, NULL),
(24, 'MODERN ART', 'modern-art', '1', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:56:00', '2016-03-12 19:56:00', NULL, NULL),
(25, 'CLASSICAL ART', 'classical-art', '1', '', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-12 19:56:17', '2016-03-12 19:56:17', NULL, NULL),
(26, 'OFF THE WALL', 'off-the-wall', '3', '<p class="header">\r\n					Serving Australia with a large range of decorative mirrors in our Sydney store\r\n				</p>\r\n				<p>\r\n					Since 2003 Deco Mirrors have provided a magnificent array of decorative wall & bathroom mirrors to Sydney and nationwide customers. We offer a diverse selection of unique mirror designs to suit a whole host of individual settings and we are confident that you can find the mirror to complement your own original style.\r\n				</p>\r\n				<p>\r\n					As one of the most creative and imaginative mirror shops in Sydney, Deco Mirrors are well placed to advise you on what mirrors would best fit your intended location and we offer fantastic prices across our ever-expanding range. \r\n				</p>\r\n				<p>\r\n					We are happy to offer assistance to retail customers and interior designers who are seeking an innovative variety of mirrors in Sydney. Deco Mirrors'' stock of mirrors is constantly changing and as such we cannot display our entire, dynamic collection on this site so visiting our store in Moore Park is a must to experience our extensive and stunning range.\r\n				</p>\r\n				<p class="header">\r\n					Venetian mirrors, custom creations and much more\r\n				</p>\r\n				<p>\r\n					Our huge range includes custom designs tailored to customer requirements with over 1200 frames to choose from, while we also offer distinctive, modern decorative mirrors, a selection of bathroom mirrors and some of the finest venetian mirrors in Sydney\r\n				</p>', NULL, NULL, NULL, NULL, '', '', '', 'active', 0, 0, '2016-03-13 20:05:59', '2016-03-13 20:05:59', 0, NULL),
(29, 'Classical Swing', 'classical-swing', '1', 'Classical art painting of a girl and a boy in romantic premise. this classical art can enhance the classical look of any place its displayed. We do any customized sizes as per your requirement.', 'uploads/featured_image/87177Untitled-1.png', NULL, 'uploads/featured_image/thumb_200x200_337_Untitled-1.png', NULL, '', '', '', 'active', 0, 0, '2016-03-14 18:28:12', '2016-03-15 18:30:06', 25, 0),
(31, 'Classic Kiss', 'classic-kiss', '1', 'This is a classic artwork of "The Stolen Kiss" artwork of late 1780s can look alive at your classic-modern look. the artwork can be printed at any customized size of your request. ', 'uploads/featured_image/75412classical-kiss.png', NULL, 'uploads/featured_image/thumb_200x200_489_classical-kiss.png', NULL, '', '', '', 'active', 0, 0, '2016-03-14 18:30:15', '2016-03-15 18:32:22', 25, 0),
(34, 'Classical arts', 'classical-arts', '1', 'Your hallway or your courtroom can be large with this classical piece. nothing can illustrate your love for classic artwork  more than this. We do any customized sizes as per your requirement.\r\n', 'uploads/featured_image/35552classical-art.png', NULL, 'uploads/featured_image/thumb_200x200_883_classical-art.png', NULL, '', '', '', 'active', 0, 0, '2016-03-14 18:45:47', '2016-03-15 18:34:53', 25, 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_cat`
--

CREATE TABLE `blog_cat` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_item_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `status` enum('active','inactive','ban','review') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_item`
--

CREATE TABLE `blog_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `blog_cat_id` int(10) UNSIGNED DEFAULT NULL,
  `desc` text COLLATE utf8_unicode_ci,
  `meta_title` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_desc` text COLLATE utf8_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cat_slider`
--

CREATE TABLE `cat_slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci,
  `url` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cat_slider`
--

INSERT INTO `cat_slider` (`id`, `title`, `slug`, `desc`, `url`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Home Slider', 'home-slider', '', '#', 'active', 0, 0, '2016-02-23 18:03:11', '2016-02-23 18:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `central_settings`
--

CREATE TABLE `central_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` enum('admin','user') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `central_settings`
--

INSERT INTO `central_settings` (`id`, `title`, `status`, `user_type`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'login-notification', 'no', 'admin', 0, 0, '2015-12-24 02:55:47', '2015-12-24 02:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `code`, `title`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'Afghanistan ', 1, 1, '2015-12-24 02:55:33', '2015-12-24 02:55:33'),
(2, 'AX', 'Åland Islands ', 1, 1, '2015-12-24 02:55:33', '2015-12-24 02:55:33'),
(3, 'AL', 'Albania ', 1, 1, '2015-12-24 02:55:33', '2015-12-24 02:55:33'),
(4, 'DZ', 'Algeria ', 1, 1, '2015-12-24 02:55:33', '2015-12-24 02:55:33'),
(5, 'AS', 'American Samoa ', 1, 1, '2015-12-24 02:55:33', '2015-12-24 02:55:33'),
(6, 'AD', 'Andorra ', 1, 1, '2015-12-24 02:55:33', '2015-12-24 02:55:33'),
(7, 'AO', 'Angola ', 1, 1, '2015-12-24 02:55:33', '2015-12-24 02:55:33'),
(8, 'AI', 'Anguilla ', 1, 1, '2015-12-24 02:55:33', '2015-12-24 02:55:33'),
(9, 'AQ', 'Antarctica ', 1, 1, '2015-12-24 02:55:33', '2015-12-24 02:55:33'),
(10, 'AG', 'Antigua and Barbuda ', 1, 1, '2015-12-24 02:55:33', '2015-12-24 02:55:33'),
(11, 'AR', 'Argentina ', 1, 1, '2015-12-24 02:55:33', '2015-12-24 02:55:33'),
(12, 'AM', 'Armenia ', 1, 1, '2015-12-24 02:55:33', '2015-12-24 02:55:33'),
(13, 'AW', 'Aruba ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(14, 'AU', 'Australia ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(15, 'AT', 'Austria ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(16, 'AZ', 'Azerbaijan ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(17, 'BS', 'Bahamas ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(18, 'BH', 'Bahrain ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(19, 'BD', 'Bangladesh ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(20, 'BB', 'Barbados ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(21, 'BY', 'Belarus ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(22, 'BE', 'Belgium ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(23, 'BZ', 'Belize ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(24, 'BJ', 'Benin ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(25, 'BM', 'Bermuda ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(26, 'BT', 'Bhutan ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(27, 'BO', 'Bolivia, Plurinational State of ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(28, 'BQ', 'Bonaire, Sint Eustatius and Saba ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(29, 'BA', 'Bosnia and Herzegovina ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(30, 'BW', 'Botswana ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(31, 'BV', 'Bouvet Island ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(32, 'BR', 'Brazil ', 1, 1, '2015-12-24 02:55:34', '2015-12-24 02:55:34'),
(33, 'IO', 'British Indian Ocean Territory ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(34, 'BN', 'Brunei Darussalam ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(35, 'BG', 'Bulgaria ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(36, 'BF', 'Burkina Faso ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(37, 'BI', 'Burundi ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(38, 'KH', 'Cambodia ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(39, 'CM', 'Cameroon ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(40, 'CA', 'Canada ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(41, 'CV', 'Cape Verde ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(42, 'KY', 'Cayman Islands ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(43, 'CF', 'Central African Republic ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(44, 'TD', 'Chad ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(45, 'CL', 'Chile ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(46, 'CN', 'China ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(47, 'CX', 'Christmas Island ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(48, 'CC', 'Cocos (Keeling) Islands ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(49, 'CO', 'Colombia ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(50, 'KM', 'Comoros ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(51, 'CG', 'Congo ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(52, 'CD', 'Congo, the Democratic Republic of the ', 1, 1, '2015-12-24 02:55:35', '2015-12-24 02:55:35'),
(53, 'CK', 'Cook Islands ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(54, 'CR', 'Costa Rica ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(55, 'CI', 'Côte d''Ivoire ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(56, 'HR', 'Croatia ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(57, 'CU', 'Cuba ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(58, 'CW', 'Curaçao ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(59, 'CY', 'Cyprus ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(60, 'CZ', 'Czech Republic ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(61, 'DK', 'Denmark ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(62, 'DJ', 'Djibouti ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(63, 'DM', 'Dominica ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(64, 'DO', 'Dominican Republic ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(65, 'EC', 'Ecuador ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(66, 'EG', 'Egypt ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(67, 'SV', 'El Salvador ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(68, 'GQ', 'Equatorial Guinea ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(69, 'ER', 'Eritrea ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(70, 'EE', 'Estonia ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(71, 'ET', 'Ethiopia ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(72, 'FK', 'Falkland Islands (Malvinas) ', 1, 1, '2015-12-24 02:55:36', '2015-12-24 02:55:36'),
(73, 'FO', 'Faroe Islands ', 1, 1, '2015-12-24 02:55:37', '2015-12-24 02:55:37'),
(74, 'FJ', 'Fiji ', 1, 1, '2015-12-24 02:55:37', '2015-12-24 02:55:37'),
(75, 'FI', 'Finland ', 1, 1, '2015-12-24 02:55:37', '2015-12-24 02:55:37'),
(76, 'FR', 'France ', 1, 1, '2015-12-24 02:55:37', '2015-12-24 02:55:37'),
(77, 'GF', 'French Guiana ', 1, 1, '2015-12-24 02:55:37', '2015-12-24 02:55:37'),
(78, 'PF', 'French Polynesia ', 1, 1, '2015-12-24 02:55:37', '2015-12-24 02:55:37'),
(79, 'TF', 'French Southern Territories ', 1, 1, '2015-12-24 02:55:37', '2015-12-24 02:55:37'),
(80, 'GA', 'Gabon ', 1, 1, '2015-12-24 02:55:37', '2015-12-24 02:55:37'),
(81, 'GM', 'Gambia ', 1, 1, '2015-12-24 02:55:37', '2015-12-24 02:55:37'),
(82, 'GE', 'Georgia ', 1, 1, '2015-12-24 02:55:37', '2015-12-24 02:55:37'),
(83, 'DE', 'Germany ', 1, 1, '2015-12-24 02:55:37', '2015-12-24 02:55:37'),
(84, 'GH', 'Ghana ', 1, 1, '2015-12-24 02:55:37', '2015-12-24 02:55:37'),
(85, 'GI', 'Gibraltar ', 1, 1, '2015-12-24 02:55:37', '2015-12-24 02:55:37'),
(86, 'GR', 'Greece ', 1, 1, '2015-12-24 02:55:37', '2015-12-24 02:55:37'),
(87, 'GL', 'Greenland ', 1, 1, '2015-12-24 02:55:37', '2015-12-24 02:55:37'),
(88, 'GD', 'Grenada ', 1, 1, '2015-12-24 02:55:37', '2015-12-24 02:55:37'),
(89, 'GP', 'Guadeloupe ', 1, 1, '2015-12-24 02:55:37', '2015-12-24 02:55:37'),
(90, 'GU', 'Guam ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(91, 'GT', 'Guatemala ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(92, 'GG', 'Guernsey ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(93, 'GN', 'Guinea ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(94, 'GW', 'Guinea-Bissau ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(95, 'GY', 'Guyana ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(96, 'HT', 'Haiti ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(97, 'HM', 'Heard Island and McDonald Islands ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(98, 'VA', 'Holy See (Vatican City State) ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(99, 'HN', 'Honduras ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(100, 'HK', 'Hong Kong ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(101, 'HU', 'Hungary ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(102, 'IS', 'Iceland ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(103, 'IN', 'India ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(104, 'ID', 'Indonesia ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(105, 'IR', 'Iran, Islamic Republic of ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(106, 'IQ', 'Iraq ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(107, 'IE', 'Ireland ', 1, 1, '2015-12-24 02:55:38', '2015-12-24 02:55:38'),
(108, 'IM', 'Isle of Man ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(109, 'IL', 'Israel ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(110, 'IT', 'Italy ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(111, 'JM', 'Jamaica ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(112, 'JP', 'Japan ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(113, 'JE', 'Jersey ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(114, 'JO', 'Jordan ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(115, 'KZ', 'Kazakhstan ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(116, 'KE', 'Kenya ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(117, 'KI', 'Kiribati ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(118, 'KP', 'Korea, Democratic People''s Republic of ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(119, 'KR', 'Korea, Republic of ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(120, 'KW', 'Kuwait ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(121, 'KG', 'Kyrgyzstan ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(122, 'LA', 'Lao People''s Democratic Republic ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(123, 'LV', 'Latvia ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(124, 'LB', 'Lebanon ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(125, 'LS', 'Lesotho ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(126, 'LR', 'Liberia ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(127, 'LY', 'Libya ', 1, 1, '2015-12-24 02:55:39', '2015-12-24 02:55:39'),
(128, 'LI', 'Liechtenstein ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(129, 'LT', 'Lithuania ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(130, 'LU', 'Luxembourg ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(131, 'MO', 'Macao ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(132, 'MK', 'Macedonia, the former Yugoslav Republic of ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(133, 'MG', 'Madagascar ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(134, 'MW', 'Malawi ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(135, 'MY', 'Malaysia ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(136, 'MV', 'Maldives ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(137, 'ML', 'Mali ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(138, 'MT', 'Malta ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(139, 'MH', 'Marshall Islands ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(140, 'MQ', 'Martinique ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(141, 'MR', 'Mauritania ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(142, 'MU', 'Mauritius ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(143, 'YT', 'Mayotte ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(144, 'MX', 'Mexico ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(145, 'FM', 'Micronesia, Federated States of ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(146, 'MD', 'Moldova, Republic of ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(147, 'MC', 'Monaco ', 1, 1, '2015-12-24 02:55:40', '2015-12-24 02:55:40'),
(148, 'MN', 'Mongolia ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(149, 'ME', 'Montenegro ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(150, 'MS', 'Montserrat ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(151, 'MA', 'Morocco ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(152, 'MZ', 'Mozambique ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(153, 'MM', 'Myanmar ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(154, 'NA', 'Namibia ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(155, 'NR', 'Nauru ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(156, 'NP', 'Nepal ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(157, 'NL', 'Netherlands ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(158, 'NC', 'New Caledonia ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(159, 'NZ', 'New Zealand ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(160, 'NI', 'Nicaragua ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(161, 'NE', 'Niger ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(162, 'NG', 'Nigeria ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(163, 'NU', 'Niue ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(164, 'NF', 'Norfolk Island ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(165, 'MP', 'Northern Mariana Islands ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(166, 'NO', 'Norway ', 1, 1, '2015-12-24 02:55:41', '2015-12-24 02:55:41'),
(167, 'OM', 'Oman ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(168, 'PK', 'Pakistan ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(169, 'PW', 'Palau ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(170, 'PS', 'Palestinian Territory, Occupied ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(171, 'PA', 'Panama ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(172, 'PG', 'Papua New Guinea ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(173, 'PY', 'Paraguay ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(174, 'PE', 'Peru ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(175, 'PH', 'Philippines ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(176, 'PN', 'Pitcairn ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(177, 'PL', 'Poland ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(178, 'PT', 'Portugal ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(179, 'PR', 'Puerto Rico ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(180, 'QA', 'Qatar ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(181, 'RE', 'Réunion ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(182, 'RO', 'Romania ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(183, 'RU', 'Russian Federation ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(184, 'RW', 'Rwanda ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(185, 'BL', 'Saint Barthélemy ', 1, 1, '2015-12-24 02:55:42', '2015-12-24 02:55:42'),
(186, 'SH', 'Saint Helena, Ascension and Tristan da Cunha ', 1, 1, '2015-12-24 02:55:43', '2015-12-24 02:55:43'),
(187, 'KN', 'Saint Kitts and Nevis ', 1, 1, '2015-12-24 02:55:43', '2015-12-24 02:55:43'),
(188, 'LC', 'Saint Lucia ', 1, 1, '2015-12-24 02:55:43', '2015-12-24 02:55:43'),
(189, 'MF', 'Saint Martin (French part) ', 1, 1, '2015-12-24 02:55:43', '2015-12-24 02:55:43'),
(190, 'PM', 'Saint Pierre and Miquelon ', 1, 1, '2015-12-24 02:55:43', '2015-12-24 02:55:43'),
(191, 'VC', 'Saint Vincent and the Grenadines ', 1, 1, '2015-12-24 02:55:43', '2015-12-24 02:55:43'),
(192, 'WS', 'Samoa ', 1, 1, '2015-12-24 02:55:43', '2015-12-24 02:55:43'),
(193, 'SM', 'San Marino ', 1, 1, '2015-12-24 02:55:43', '2015-12-24 02:55:43'),
(194, 'ST', 'Sao Tome and Principe ', 1, 1, '2015-12-24 02:55:43', '2015-12-24 02:55:43'),
(195, 'SA', 'Saudi Arabia ', 1, 1, '2015-12-24 02:55:43', '2015-12-24 02:55:43'),
(196, 'SN', 'Senegal ', 1, 1, '2015-12-24 02:55:43', '2015-12-24 02:55:43'),
(197, 'RS', 'Serbia ', 1, 1, '2015-12-24 02:55:43', '2015-12-24 02:55:43'),
(198, 'SC', 'Seychelles ', 1, 1, '2015-12-24 02:55:43', '2015-12-24 02:55:43'),
(199, 'SL', 'Sierra Leone ', 1, 1, '2015-12-24 02:55:44', '2015-12-24 02:55:44'),
(200, 'SG', 'Singapore ', 1, 1, '2015-12-24 02:55:44', '2015-12-24 02:55:44'),
(201, 'SX', 'Sint Maarten (Dutch part) ', 1, 1, '2015-12-24 02:55:44', '2015-12-24 02:55:44'),
(202, 'SK', 'Slovakia ', 1, 1, '2015-12-24 02:55:44', '2015-12-24 02:55:44'),
(203, 'SI', 'Slovenia ', 1, 1, '2015-12-24 02:55:44', '2015-12-24 02:55:44'),
(204, 'SB', 'Solomon Islands ', 1, 1, '2015-12-24 02:55:44', '2015-12-24 02:55:44'),
(205, 'SO', 'Somalia ', 1, 1, '2015-12-24 02:55:44', '2015-12-24 02:55:44'),
(206, 'ZA', 'South Africa ', 1, 1, '2015-12-24 02:55:44', '2015-12-24 02:55:44'),
(207, 'GS', 'South Georgia and the South Sandwich Islands ', 1, 1, '2015-12-24 02:55:44', '2015-12-24 02:55:44'),
(208, 'SS', 'South Sudan ', 1, 1, '2015-12-24 02:55:44', '2015-12-24 02:55:44'),
(209, 'ES', 'Spain ', 1, 1, '2015-12-24 02:55:44', '2015-12-24 02:55:44'),
(210, 'LK', 'Sri Lanka ', 1, 1, '2015-12-24 02:55:44', '2015-12-24 02:55:44'),
(211, 'SD', 'Sudan ', 1, 1, '2015-12-24 02:55:44', '2015-12-24 02:55:44'),
(212, 'SR', 'Suriname ', 1, 1, '2015-12-24 02:55:44', '2015-12-24 02:55:44'),
(213, 'SJ', 'Svalbard and Jan Mayen ', 1, 1, '2015-12-24 02:55:44', '2015-12-24 02:55:44'),
(214, 'SZ', 'Swaziland ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(215, 'SE', 'Sweden ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(216, 'CH', 'Switzerland ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(217, 'SY', 'Syrian Arab Republic ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(218, 'TW', 'Taiwan, Province of China ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(219, 'TJ', 'Tajikistan ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(220, 'TZ', 'Tanzania, United Republic of ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(221, 'TH', 'Thailand ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(222, 'TL', 'Timor-Leste ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(223, 'TG', 'Togo ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(224, 'TK', 'Tokelau ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(225, 'TO', 'Tonga ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(226, 'TT', 'Trinidad and Tobago ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(227, 'TN', 'Tunisia ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(228, 'TR', 'Turkey ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(229, 'TM', 'Turkmenistan ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(230, 'TC', 'Turks and Caicos Islands ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(231, 'TV', 'Tuvalu ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(232, 'UG', 'Uganda ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(233, 'UA', 'Ukraine ', 1, 1, '2015-12-24 02:55:45', '2015-12-24 02:55:45'),
(234, 'AE', 'United Arab Emirates ', 1, 1, '2015-12-24 02:55:46', '2015-12-24 02:55:46'),
(235, 'GB', 'United Kingdom ', 1, 1, '2015-12-24 02:55:46', '2015-12-24 02:55:46'),
(236, 'US', 'United States ', 1, 1, '2015-12-24 02:55:46', '2015-12-24 02:55:46'),
(237, 'UM', 'United States Minor Outlying Islands ', 1, 1, '2015-12-24 02:55:46', '2015-12-24 02:55:46'),
(238, 'UY', 'Uruguay ', 1, 1, '2015-12-24 02:55:46', '2015-12-24 02:55:46'),
(239, 'UZ', 'Uzbekistan ', 1, 1, '2015-12-24 02:55:46', '2015-12-24 02:55:46'),
(240, 'VU', 'Vanuatu ', 1, 1, '2015-12-24 02:55:46', '2015-12-24 02:55:46'),
(241, 'VE', 'Venezuela, Bolivarian Republic of ', 1, 1, '2015-12-24 02:55:46', '2015-12-24 02:55:46'),
(242, 'VN', 'Viet Nam ', 1, 1, '2015-12-24 02:55:46', '2015-12-24 02:55:46'),
(243, 'VG', 'Virgin Islands, British ', 1, 1, '2015-12-24 02:55:46', '2015-12-24 02:55:46'),
(244, 'VI', 'Virgin Islands, U.S. ', 1, 1, '2015-12-24 02:55:46', '2015-12-24 02:55:46'),
(245, 'WF', 'Wallis and Futuna ', 1, 1, '2015-12-24 02:55:46', '2015-12-24 02:55:46'),
(246, 'EH', 'Western Sahara ', 1, 1, '2015-12-24 02:55:46', '2015-12-24 02:55:46'),
(247, 'YE', 'Yemen ', 1, 1, '2015-12-24 02:55:46', '2015-12-24 02:55:46'),
(248, 'ZM', 'Zambia ', 1, 1, '2015-12-24 02:55:46', '2015-12-24 02:55:46'),
(249, 'ZW', 'Zimbabwe ', 1, 1, '2015-12-24 02:55:46', '2015-12-24 02:55:46');

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(255) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `suburb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `address` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `email`, `first_name`, `last_name`, `password`, `suburb`, `postcode`, `state`, `country`, `telephone`, `updated_at`, `created_at`, `address`) VALUES
(20, 'mithi', 'mithu', 'mi', 'i', 'w', 'w', 'w', 'w', 'w', '2016-03-28 00:35:28', '0000-00-00 00:00:00', ''),
(21, '23s@ghil.com', '323', '34', 'f8c0a7bb9ddf07aaf33e3721acfcc1ed4cad759f', 'we', 'sdsds', 'ACT', 'Australia', '0', '2016-03-05 13:41:14', '2016-03-05 13:40:33', 'we');

-- --------------------------------------------------------

--
-- Table structure for table `deliverydetails`
--

CREATE TABLE `deliverydetails` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `suburb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postcode` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `deliverydetails`
--

INSERT INTO `deliverydetails` (`id`, `first_name`, `last_name`, `suburb`, `postcode`, `state`, `country`, `telephone`, `updated_at`, `created_at`, `address`, `user_id`, `email`) VALUES
(20, 'Mithun', 'Adhiakry', 'Mipur', '1213', 'NSW', 'Australia', '01732017886', '2016-03-01 19:32:57', '2016-03-01 19:32:57', 'Dhaka', 19, 'mithun.cse521@gmail.com'),
(21, 'Mithun', 'Adhiakry', 'Mipur', '1213', 'NSW', 'Australia', '01732017886', '2016-03-01 19:38:17', '2016-03-01 19:38:17', 'Dhaka', 19, 'mithun.cse521@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gal_image`
--

CREATE TABLE `gal_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gal_image`
--

INSERT INTO `gal_image` (`id`, `product_id`, `name`, `slug`, `image`, `thumbnail`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 3, 'one 1', 'one-1-1', 'uploads/gallery_image/956productgallery1.jpg', 'uploads/gallery_image/thumb_400x400_801_productgallery1.jpg', 0, 0, 0, '2016-02-24 18:22:44', '2016-02-24 18:22:44'),
(3, 3, 'two 2', 'two-2-2', 'uploads/gallery_image/760productgallery2.jpg', 'uploads/gallery_image/thumb_400x400_128_productgallery2.jpg', 0, 0, 0, '2016-02-24 18:23:06', '2016-02-24 18:23:06'),
(4, 3, 'three', 'three-3', 'uploads/gallery_image/663productgallery3.jpg', 'uploads/gallery_image/thumb_400x400_147_productgallery3.jpg', 0, 0, 0, '2016-02-24 18:23:34', '2016-02-24 18:23:34'),
(5, 4, 'one', 'one-1', 'uploads/gallery_image/662banner2.jpg', 'uploads/gallery_image/thumb_400x400_190_banner2.jpg', 0, 0, 0, '2016-02-24 18:24:26', '2016-02-24 18:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sortorder` int(11) NOT NULL DEFAULT '999'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `title`, `slug`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `sortorder`) VALUES
(10, 'Mirrors', 'mirrors', 'active', 0, 0, '2016-03-12 21:05:35', '2016-03-12 21:05:35', 1),
(11, 'SPECIAL CLEARENCE ITEM', 'special-clearence-item', 'active', 0, 0, '2016-03-12 21:06:12', '2016-03-12 21:06:12', 2);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_name` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` enum('image','pdf','doc') COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt_text` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_type_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` enum('url','ext') COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent` int(10) UNSIGNED DEFAULT NULL,
  `ext_name` enum('skill','team','article','social_icon','blog','gallery','slider') COLLATE utf8_unicode_ci DEFAULT NULL,
  `order` int(10) UNSIGNED DEFAULT NULL,
  `desc` text COLLATE utf8_unicode_ci,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_type`
--

CREATE TABLE `menu_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('main','top','user','side','footer') COLLATE utf8_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8_unicode_ci,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_10_13_071204_create_country_table', 1),
('2015_10_13_085319_create_user_table', 1),
('2015_10_18_114322_create_user_reset_password_table', 1),
('2015_10_28_164029_create_central_settings_table', 1),
('2015_11_24_164202_create_crud_table', 1),
('2015_12_02_121303_create_testimonial_table', 1),
('2015_12_02_134415_create_cat_slider_table', 1),
('2015_12_02_140308_create_cat_gallery_table', 1),
('2015_12_02_144731_create_gal_image_table', 1),
('2015_12_02_145100_create_slider_image_table', 1),
('2015_12_02_165638_create_article_table', 1),
('2015_12_03_134653_create_menu_table', 1),
('2015_12_03_140939_create_menu_type_table', 1),
('2015_12_06_122601_create_media_table', 1),
('2015_12_07_093928_create_widget_table', 1),
('2015_12_08_103821_create_widget_menu_table', 1),
('2015_12_21_110402_create_team_table', 1),
('2015_12_21_142232_create_skills_table', 1),
('2015_12_21_154813_create_social_icon_table', 1),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_10_13_071204_create_country_table', 1),
('2015_10_13_085319_create_user_table', 1),
('2015_10_18_114322_create_user_reset_password_table', 1),
('2015_10_28_164029_create_central_settings_table', 1),
('2015_11_24_164202_create_crud_table', 1),
('2015_12_02_121303_create_testimonial_table', 1),
('2015_12_02_134415_create_cat_slider_table', 1),
('2015_12_02_140308_create_cat_gallery_table', 1),
('2015_12_02_144731_create_gal_image_table', 1),
('2015_12_02_145100_create_slider_image_table', 1),
('2015_12_02_165638_create_article_table', 1),
('2015_12_03_134653_create_menu_table', 1),
('2015_12_03_140939_create_menu_type_table', 1),
('2015_12_06_122601_create_media_table', 1),
('2015_12_07_093928_create_widget_table', 1),
('2015_12_08_103821_create_widget_menu_table', 1),
('2015_12_21_110402_create_team_table', 1),
('2015_12_21_142232_create_skills_table', 1),
('2015_12_21_154813_create_social_icon_table', 1),
('2015_12_21_161752_create_blog_cat_table', 2),
('2015_12_21_165040_create_blog_item_table', 2),
('2015_12_21_171616_create_blog_comment_table', 2),
('2015_12_24_150619_create_dump_sql_table', 2),
('2016_01_04_095645_create_product_category', 2),
('2016_01_04_102630_create_product', 2),
('2016_01_04_104816_create_product_images', 2),
('2016_01_04_105438_create_product_variation', 3),
('2016_01_08_234435_drop_votes_product_category_table', 4),
('2016_01_11_104935_add_is_featured_to_product_category_table', 5),
('2016_01_19_102310_add_images_to_product_table', 6),
('2016_01_26_120055_create_groups_table', 7),
('2016_01_26_121915_create_groups_table', 8),
('2016_01_27_102655_create_product_subgroup_table', 9),
('2016_02_04_112756_add_subgroup_to_product_category_table', 10),
('2016_02_08_110726_add_groupid_subgroupid_to_product_table', 11),
('2016_02_21_094551_modify_productcategorys_table', 12),
('2016_02_21_095323_add_column_productcategorys_table', 12),
('2016_02_29_122141_create_customer_table', 13),
('2016_03_12_104248_create_page_parent_table', 14),
('2016_03_12_111416_drop_page_parent', 15),
('2016_03_12_111638_add_field_page_parent', 16),
('2016_03_12_113542_add_column_article_table', 17),
('2016_03_15_105209_add_column_in_article_table', 18),
('2016_03_15_110140_add_column_in_parent_page_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `page_parent`
--

CREATE TABLE `page_parent` (
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `sort_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `page_parent`
--

INSERT INTO `page_parent` (`title`, `slug`, `id`, `sort_order`) VALUES
('Artworks', 'artworks', 1, 2),
('Picture framing', 'picture_framing', 2, 1),
('General Pages', 'general_pages', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_category_id` int(10) UNSIGNED DEFAULT NULL,
  `product_group_id` int(10) UNSIGNED DEFAULT NULL,
  `product_subgroup_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class` enum('Product','Serice','Soft copy') COLLATE utf8_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sell_rate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cost_price` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sell_unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sell_unit_quantity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stock_unit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stock_unit_quantity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_price_vary` enum('no','yes') COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_featured` enum('No','Yes') COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seats` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `voltage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `features` text COLLATE utf8_unicode_ci NOT NULL,
  `videos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '999',
  `preorder` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_category_id`, `product_group_id`, `product_subgroup_id`, `title`, `slug`, `short_description`, `long_description`, `status`, `sku`, `class`, `group`, `sell_rate`, `cost_price`, `sell_unit`, `sell_unit_quantity`, `stock_unit`, `stock_unit_quantity`, `is_price_vary`, `created_by`, `updated_by`, `created_at`, `updated_at`, `is_featured`, `image`, `thumb`, `brand`, `seats`, `voltage`, `features`, `videos`, `sort_order`, `preorder`) VALUES
(8, NULL, 10, 9, 'Circle Bathroom mirror', 'circle-bathroom-mirror', '<p>This Circle bathroom mirror can be both stylish and functional featuring a striking circle shape.  It comes complete with all the necessary fittings for a quick and easy installation. </p>\r\n<ul>	\r\n<li>Neat and Simple </li>\r\n<li>Attractive, modern design mirror </li>\r\n<li>Quick and easy to install</li>\r\n<li>All fittings included</li>\r\n</ul>\r\n<p>We have different sizes with this design to match your requirements.</p>\r\n', '<table class="table">\r\n<tr><td>Product Code</td><td>M3</td></tr>\r\n<tr><td>Sizes</td><td>760 mm diameter</td></tr>\r\n<tr><td>Price</td><td>Price available upon request.</td></tr><tr>\r\n<td>Price</td><td>$199</td></tr><tr>\r\n<td>Special Price</td><td>$140</td></tr><tr>\r\n<td>Price after Delivery</td><td>0</td></tr><tr>\r\n<td>Stock Level</td><td>6</td></tr>\r\n</table>', 'active', NULL, 'Product', NULL, '199', NULL, NULL, NULL, NULL, '6', 'no', 0, 0, '2016-03-13 19:01:01', '2016-03-14 19:30:16', 'Yes', 'uploads/product_image/998circle-bathroom-mirror.jpg', 'uploads/product_image/thumb_760_circle-bathroom-mirror.jpg', '', '', '', '', '', 0, 0),
(9, NULL, 10, 9, 'Oval Bathroom mirror', 'oval-bathroom-mirror', '<p>Our mirrors are tested to deal with high humidity areas like our bathroom; however not limited and Ideal for use in any room, this Bevel edged oval bathroom mirror can add stylish practicality to any space. It comes complete with all the necessary fittings for a quick and easy installation. </p>\r\n<ul>\r\n	<li>Neat and Simple</li>\r\n	<li>Attractive, modern design mirror </li>\r\n	<li>Quick and easy to install</li>\r\n	<li>All fittings included</li>\r\n</ul>\r\n<p>We can customize the product as per your size requirement.</p>', '<table class="table">\r\n<tr><td>Product Code</td><td>M1</td></tr>\r\n<tr><td>Sizes</td><td>870 x 580 mm</td></tr>\r\n<td>Price</td><td>$190</td></tr><tr>\r\n<td>Special Price</td><td>$120</td></tr><tr>\r\n<td>Price after Delivery</td><td>0</td></tr><tr>\r\n<td>Stock Level</td><td>11</td></tr>\r\n</table>', 'active', NULL, 'Product', NULL, '190', NULL, NULL, NULL, NULL, '11', 'no', 0, 0, '2016-03-13 19:06:26', '2016-03-14 19:35:48', 'Yes', 'uploads/product_image/390oval-bathroom-mirror.jpg', 'uploads/product_image/thumb_782_oval-bathroom-mirror.jpg', '', '', '', '', '', 0, 0),
(10, NULL, 10, 9, 'Rectangle Bathroom mirror', 'rectangle-bathroom-mirror', '<p>Our mirrors are tested to deal with high humidity areas like our bathroom. Ideal for use in any room, this silver framed rectangular bathroom mirror can be hung either horizontally or vertically, depending on your needs. \r\nIt comes complete with all the necessary fittings for a quick and easy installation. \r\n</p>\r\n<ul>\r\n	<li>Neat and Simple</li>\r\n	<li>Attractive, modern design mirror </li>\r\n	<li>Can be hung horizontally or vertically</li>\r\n	<li>Quick and easy to install</li>\r\n	<li>All fittings included</li>\r\n</ul>\r\n<p>We can customize the product as per your size requirement.</p>', '<table class="table">\r\n<tr><td>Product Code</td><td>M1</td></tr>\r\n<tr><td>Sizes</td><td>750 x 1000 mm</td></tr>\r\n<td>Price</td><td>Price available upon request.</td></tr><tr>\r\n<td>Price</td><td>$80</td></tr><tr>\r\n<td>Special Price</td><td>$60</td></tr><tr>\r\n<td>Price after Delivery</td><td>0</td></tr><tr>\r\n<td>Stock Level</td><td>14</td></tr>\r\n</table>', 'active', NULL, 'Product', NULL, '80', NULL, NULL, NULL, NULL, '14', 'no', 0, 0, '2016-03-13 19:08:09', '2016-03-14 19:38:55', 'Yes', 'uploads/product_image/310rectangle-bathroom-mirror.jpg', 'uploads/product_image/thumb_747_rectangle-bathroom-mirror.jpg', '', '', '', '', '', 0, 0),
(11, NULL, 10, 12, 'Black Ornate Square Mirror', 'black-ornate-square-mirror', '<p>A mirror personalizes your home; it complements your furniture and creates an attractive focal point.</p>\r\n<p>This black ornate square mirror will grace any living area, hallway or bedroom with its beautifully ornate frame.</p>\r\n<p>And it also comes in white, gold or silver color finish.\r\n</p>', '<table class="table">\r\n<tr><td>Product Code</td><td>OM2</td></tr>\r\n<tr><td>Sizes</td><td>1000 x 1000 mm</td></tr>\r\n<td>Price</td><td>Price available upon request.</td></tr><tr>\r\n<td>Price</td><td>$520</td></tr><tr>\r\n<td>Special Price</td><td>$480</td></tr><tr>\r\n<td>Price after Delivery</td><td>0</td></tr><tr>\r\n<td>Stock Level</td><td>5</td></tr>\r\n</table>', 'active', NULL, 'Product', NULL, '520', NULL, NULL, NULL, NULL, '5', 'no', 0, 0, '2016-03-13 19:10:32', '2016-03-14 19:41:42', 'Yes', 'uploads/product_image/354BLACK-ORNATE-MIRROR.jpg', 'uploads/product_image/thumb_241_BLACK-ORNATE-MIRROR.jpg', '', '', '', '', '', 0, 0),
(12, NULL, 10, 12, 'Round Decorative mirror', 'round-decorative-mirror', '<p>A mirror personalizes your home; it complements your furniture and creates an attractive focal point.</p>\r\n<p>This round decorative mirror will grace any living area or hallway with its beautifully ornate frame and striking circle shape.</p>\r\n<p>And it also comes in white, gold or silver color finish.</p>', '<table class="table">\r\n<tr><td>Product Code</td><td>OM1</td></tr>\r\n<tr><td>Sizes</td><td>760 mm diameter (including frames)</td></tr>\r\n<td>Price</td><td>$452</td></tr><tr>\r\n<td>Special Price</td><td>$400</td></tr><tr>\r\n<td>Price after Delivery</td><td>0</td></tr><tr>\r\n<td>Stock Level</td><td>4</td></tr>\r\n</table>', 'active', NULL, 'Product', NULL, '450', NULL, NULL, NULL, NULL, '4', 'no', 0, 0, '2016-03-13 19:19:23', '2016-03-14 20:09:10', 'Yes', 'uploads/product_image/245ROUND-DECORATIVE-MIRROR.jpg', 'uploads/product_image/thumb_284_ROUND-DECORATIVE-MIRROR.jpg', '', '', '', '', '', 0, 0),
(13, NULL, 10, 12, 'Silver Ornate Mirror', 'silver-ornate-mirror', '<p>This silver Ornate mirror has a perfect finish and elaboration which is ideal to go over a mantel. A classic and elegant piece that can elevate the space its in.</p>', '<table class="table">\r\n<tr><td>Product Code</td><td>OM3</td></tr>\r\n<tr><td>Sizes</td><td>1000 x 800 mm</td></tr>\r\n<td>Price</td><td>$480</td></tr><tr>\r\n<td>Special Price</td><td>$420</td></tr><tr>\r\n<td>Price after Delivery</td><td>0</td></tr><tr>\r\n<td>Stock Level</td><td>8</td></tr>\r\n</table>', 'active', NULL, 'Product', NULL, '480', NULL, NULL, NULL, NULL, '8', 'no', 0, 0, '2016-03-13 19:21:13', '2016-03-14 20:12:11', 'Yes', 'uploads/product_image/872SILVER-ORNATE-MIRROR.jpg', 'uploads/product_image/thumb_285_SILVER-ORNATE-MIRROR.jpg', '', '', '', '', '', 0, 0),
(14, NULL, 10, 17, 'Free Standing Mirror', 'free-standing-mirror', '<p>This antique design, ornate, wall mirror will make a beautiful addition to any room in the house, from the dining room to the bedroom. this can bring the functionality and the style on any place it be. We have different sizes to match your requirements.</p>', '<table class="table">\r\n<tr><td>Product Code</td><td>M2</td></tr>\r\n<tr><td>Sizes</td><td>750 x 1000 mm</td></tr>\r\n<td>Price</td><td>$320</td></tr><tr>\r\n<td>Special Price</td><td>$280</td></tr><tr>\r\n<td>Price after Delivery</td><td>0</td></tr><tr>\r\n<td>Stock Level</td><td>8</td></tr>\r\n</table>', 'active', NULL, 'Product', NULL, '320', NULL, NULL, NULL, NULL, '4', 'no', 0, 0, '2016-03-13 19:23:22', '2016-03-14 20:14:07', 'Yes', 'uploads/product_image/461FREE-STANDING-MIRROR.jpg', 'uploads/product_image/thumb_845_FREE-STANDING-MIRROR.jpg', '', '', '', '', '', 0, 0),
(15, NULL, 10, 17, 'Neat Floor Mirror', 'neat-floor-mirror', '<p>Full Length Free Standing Mirror, with Silver beaded trim with Bevel Edges. A mix between classical and modern style sure to stun anyone and any place. We have different sizes to match your requirements.\r\n</p>', '<table class="table">\r\n<tr><td>Product Code</td><td>FSM1</td></tr>\r\n<tr><td>Sizes</td><td>2000 x 1100 mm</td></tr>\r\n<td>Price</td><td>$280</td></tr><tr>\r\n<td>Special Price</td><td>$250</td></tr><tr>\r\n<td>Price after Delivery</td><td>0</td></tr><tr>\r\n<td>Stock Level</td><td>18</td></tr>\r\n</table>', 'active', NULL, 'Product', NULL, '280', NULL, NULL, NULL, NULL, '18', 'no', 0, 0, '2016-03-13 19:30:53', '2016-03-14 20:15:43', 'Yes', 'uploads/product_image/123NEAT-FLOORMIRRORS.jpg', 'uploads/product_image/thumb_649_NEAT-FLOORMIRRORS.jpg', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_subgroup`
--

CREATE TABLE `product_subgroup` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_group_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `sort_order` int(11) NOT NULL DEFAULT '999'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_subgroup`
--

INSERT INTO `product_subgroup` (`id`, `product_group_id`, `title`, `slug`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`, `sort_order`) VALUES
(9, 10, 'BATHROOM MIRRORS', 'bathroom-mirrors', 'active', 0, 0, '2016-03-12 21:08:49', '2016-03-12 21:08:49', 0),
(10, 10, 'FRAMLESS MIRRORS', 'framless-mirrors', 'active', 0, 0, '2016-03-12 21:09:36', '2016-03-12 21:09:36', 0),
(11, 10, 'MODERN MIRRORS', 'modern-mirrors', 'active', 0, 0, '2016-03-12 21:09:54', '2016-03-12 21:09:54', 0),
(12, 10, 'ORNATE MIRRORS', 'ornate-mirrors', 'active', 0, 0, '2016-03-12 21:10:10', '2016-03-12 21:10:10', 0),
(13, 10, 'SPLASHBACK MIRRORS', 'splashback-mirrors', 'active', 0, 0, '2016-03-12 21:10:25', '2016-03-12 21:10:25', 0),
(14, 10, 'ROUNDAND SAPE MIRRORS', 'roundand-sape-mirrors', 'active', 0, 0, '2016-03-12 21:10:42', '2016-03-12 21:10:42', 0),
(15, 10, 'BEVELL MIRRORS', 'bevell-mirrors', 'active', 0, 0, '2016-03-12 21:11:03', '2016-03-12 21:11:03', 0),
(16, 10, 'TIMBER LOOK MIRRORS', 'timber-look-mirrors', 'active', 0, 0, '2016-03-12 21:11:18', '2016-03-12 21:11:18', 0),
(17, 10, 'STAND BACK FREE STANDING MIRRORS', 'stand-back-free-standing-mirrors', 'active', 0, 0, '2016-03-12 21:11:37', '2016-03-12 21:11:37', 0),
(18, 10, 'CUSTOM MADE TO SIZES MIRRORS', 'custom-made-to-sizes-mirrors', 'active', 0, 0, '2016-03-12 21:11:54', '2016-03-12 21:11:54', 0),
(19, 11, 'PHOTO FRAMING', 'photo-framing', 'active', 0, 0, '2016-03-12 21:12:25', '2016-03-12 21:12:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_variation`
--

CREATE TABLE `product_variation` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sell_quqntity` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stock_balance` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sell_rate` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cost_proce` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `product_color` varchar(255) NOT NULL,
  `last_url` varchar(255) NOT NULL,
  `last_activity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `desc` text COLLATE utf8_unicode_ci,
  `rating` int(10) UNSIGNED NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE `slider_image` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_slider_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `group` enum('','group_1') COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider_image`
--

INSERT INTO `slider_image` (`id`, `cat_slider_id`, `name`, `slug`, `image`, `thumbnail`, `url`, `group`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(8, 1, 'Looks good looking of our bed-room', 'looks-good-looking-of-our-bed-room', 'uploads/slider_image/48836banner-image.png', 'uploads/slider_image/thumb_50x50_598_banner-image.png', '#', NULL, 'active', 0, 0, '2016-03-13 18:01:59', '2016-03-13 18:01:59'),
(9, 1, 'Our special item increase your beautification', 'our-special-item-increase-your-beautification', 'uploads/slider_image/64260ornates-banner.png', 'uploads/slider_image/thumb_50x50_302_ornates-banner.png', '#', NULL, 'active', 0, 0, '2016-03-13 18:03:18', '2016-03-13 18:03:18'),
(10, 1, 'Bathroom Fittings', 'bathroom-fittings', 'uploads/slider_image/14976bathroom-banner.png', 'uploads/slider_image/thumb_50x50_914_bathroom-banner.png', '#', NULL, 'active', 0, 0, '2016-03-13 18:03:50', '2016-03-13 18:03:50');

-- --------------------------------------------------------

--
-- Table structure for table `social_icon`
--

CREATE TABLE `social_icon` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_plus` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `linkedin` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `designation` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `responsibility` text COLLATE utf8_unicode_ci,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `first_name`, `last_name`, `twitter`, `facebook`, `google_plus`, `linkedin`, `image`, `slug`, `email`, `phone`, `designation`, `responsibility`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Aleesha ', 'Brown', '', '', '', '', 'uploads/team/images/32424alesha.jpg', 'aleesha-brown', 'admin@admin.com', '88', 'MARKETING', '', 'active', 0, 0, '2015-12-31 10:44:15', '2015-12-31 10:44:15'),
(2, 'Mike ', 'Harward', '', '', '', '', 'uploads/team/images/56643mike.jpg', 'mike-harward', 'admin@admin.com', '88', 'ADMINISTRATION', '', 'active', 0, 0, '2015-12-31 10:45:01', '2015-12-31 10:45:01'),
(3, 'Adelia ', 'Lorene', '', '', '', '', 'uploads/team/images/11845adelia.jpg', 'adelia-lorene', 'admin@admin.com', '88', 'DEVELOPMENT', '', 'active', 0, 0, '2015-12-31 10:45:45', '2015-12-31 10:45:45'),
(4, 'Chris ', 'Dand', '', '', '', '', 'uploads/team/images/17425chris.jpg', 'chris-dand', 'admin@admin.com', '88', 'DESIGN', '', 'active', 0, 0, '2015-12-31 10:46:41', '2015-12-31 10:46:41');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `project` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `phone_number` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `image` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` enum('user','admin') COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('','invited','active','inactive') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `address`, `phone_number`, `state`, `country_id`, `image`, `type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '$2y$10$YqJPCkLk81tDaHCVo0lc6e5J9AnR.Xmzkdsdi4uvdZV1M.PTMgHlu', 'Dhaka', '01785987645', 'Dhaka', 19, NULL, 'admin', 'active', 'imqVZe4im6lV6vZUtsK3OAO5tQ9jZ2fEWn8qiblXWhXq3gqwVLLRvkBaSI6U', '2015-12-24 02:55:47', '2016-02-27 18:04:34'),
(2, 'admin', 'admin', 'almasbd@gmail.com', '$2y$10$J1uaZkQoh9PvvY08beAGceWLgjXWsMpysJgCdWI8RQk744aP7TTEW', 'Dhaka', '01785987645', 'Dhaka', 19, NULL, 'admin', 'active', 'fioyugpuiesiorgjhprauehrigpi', '2015-12-24 02:55:47', '2015-12-24 02:55:47'),
(3, 'admin', 'admin', 'tanintjt@gmail.com', '$2y$10$EnoS2cbt.MlZresFSNczaO.tlqTUP/uZnfuz6G7YVr2ifGcSdoXPe', 'Dhaka', '01785987645', 'Dhaka', 19, NULL, 'admin', 'active', 'fioyugpuiesiorgjhprauehrigpi', '2015-12-24 02:55:47', '2015-12-24 02:55:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_reset_password`
--

CREATE TABLE `user_reset_password` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `reset_password_time` datetime NOT NULL,
  `reset_password_expire` datetime NOT NULL,
  `reset_password_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `widget`
--

CREATE TABLE `widget` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `order` int(10) UNSIGNED NOT NULL,
  `position` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci DEFAULT NULL,
  `widget_name` enum('Skill','Team','Article','Social Icon','Blog','Gallery','Slider') COLLATE utf8_unicode_ci DEFAULT NULL,
  `showtitle` enum('yes','no') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `widget`
--

INSERT INTO `widget` (`id`, `title`, `slug`, `content`, `order`, `position`, `status`, `widget_name`, `showtitle`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Footer one', 'footer-one', '<div> <i class="icon-map-marker" style="font-size:25px; "></i>\r\n                    <h4 class="section-title box">  Location</h4>\r\n                </div>\r\n                <div>\r\n                    <img src="etsb/web_assets/slider_assets/img/location_footer.jpg" style="height: 220px; width: 400px;" alt="bzm graphics location map" title="bzm graphics location map">\r\n                </div>\r\n', 1, 'footer_one', 'active', 'Article', 'no', 0, 0, '2015-12-23 17:30:34', '2015-12-23 17:54:02'),
(2, 'Footer Two', 'footer-two', '<h5 class="section-title box"> Connect with  </h5>\r\n                <p>BZM Graphics </p>\r\n                <div class="social-icons">\r\n                    <a href="https://twitter.com/BZMGraphics" class="social-icon" target="_blank"><i class="fa fa-twitter has-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"></i></a>\r\n                    <a href="https://www.facebook.com/pages/bZm-Graphics/157687504299957" class="social-icon" target="_blank"><i class="fa fa-facebook has-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"></i></a>\r\n                    <a href="https://plus.google.com/u/0/b/102881161542509581883/+Bzmgraphics_bd/posts" class="social-icon" target="_blank"><i class="fa fa-google-plus has-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="GooglePlus"></i></a>\r\n<a href="https://www.linkedin.com/company/bzm-graphics?trk=company_logo" class="social-icon" target="_blank"><i class="fa fa-linkedin has-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="LinkedIn"></i></a>\r\n<a href="skype:bzmgraphics?call" class="social-icon" target="_blank"><i class="fa fa-skype has-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype"></i></a>\r\n<a href="https://www.pinterest.com/bzmgraphics/pins/" class="social-icon" target="_blank"><i class="fa fa-pinterest has-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="pinterest"></i></a>\r\n                </div>', 2, 'footer_two', 'active', 'Article', 'yes', 0, 0, '2015-12-23 17:50:56', '2015-12-23 18:10:44'),
(3, 'Footer Three', 'footer-three', '<h5 class="section-title box">Useful Links</h5>               \r\n<ul class="arrow useful-links">\r\n                    <li><a href="photoshop-clipping-path">Photoshop Clipping Path</a></li>\r\n                    <li><a href="image-masking">Image Masking</a></li>\r\n<li><a href="color-separation-correction">Color separation / Correction</a></li>\r\n <li><a href="photo-retouching">Photo Retouching</a></li>\r\n <li><a href="image-manipulation">Image Manipulation</a></li>\r\n<li><a href="shadow-and-reflection-creation">Shadow and Reflection Creation</a></li>\r\n<li><a href="e-commerce-image-optimization">E-commerce Image optimization</a></li>\r\n</ul>''', 3, 'footer_three', 'active', 'Article', 'yes', 0, 0, '2015-12-23 17:52:55', '2015-12-30 08:24:03'),
(4, 'Footer Four', 'footer-four', '<h4 class="section-title box">Write to us</h4><form role="form" action="ajax-send-message" method="post" class="form-wrapper" enctype="multipart/form-data" id="footer-write-to-us">\r\n<input class="form-control" type="text" required placeholder="your name (required)" name="footer-name" id="footer-id-name">  \r\n<input class="form-control" type="email" required placeholder="your email (required)" name="footer-email" id="footer-id-email">\r\n<input class="form-control" type="text" required placeholder="your phone (required)" name="footer-phone" id="footer-id-phone"> \r\n<textarea class="form-control" required placeholder="your message" name="footer-message" rows="2" id="footer-id-message" ></textarea>   \r\n<button type="submit" class="btn btn-md style1 contact-submit-button">Submit</button>\r\n<div style="display: none" id="footer-loader-gif">\r\n    <img src="etsb/img/loader/loading_spinner.gif" width="20px" /> sending ... </div>\r\n </form> \r\n<div style="display: none" id="footer-success-messagessss" >\r\n   <b style="color: darkgreen">Thanks for submitting your query. We will get back to you soon!</b>\r\n</div>', 4, 'footer_four', 'active', 'Article', 'yes', 0, 0, '2015-12-23 17:53:31', '2015-12-30 11:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `widget_menu`
--

CREATE TABLE `widget_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `widget_id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `updated_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `widget_menu`
--

INSERT INTO `widget_menu` (`id`, `widget_id`, `menu_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 1, 1, 0, 0, '2015-12-23 17:54:02', '2015-12-23 17:54:02'),
(4, 1, 2, 0, 0, '2015-12-23 17:54:02', '2015-12-23 17:54:02'),
(5, 3, 1, 0, 0, '2015-12-23 17:59:16', '2015-12-23 17:59:16'),
(6, 3, 2, 0, 0, '2015-12-23 17:59:16', '2015-12-23 17:59:16'),
(9, 2, 1, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(10, 2, 2, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(11, 2, 3, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(12, 2, 7, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(13, 2, 8, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(14, 2, 9, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(15, 2, 10, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(16, 2, 11, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(17, 2, 12, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(18, 2, 13, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(19, 2, 4, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(20, 2, 5, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(21, 2, 6, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(22, 2, 14, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(23, 2, 15, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(24, 2, 16, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(25, 2, 17, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(26, 2, 18, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(27, 2, 19, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(28, 2, 20, 0, 0, '2015-12-29 12:47:22', '2015-12-29 12:47:22'),
(135, 4, 1, 0, 0, '2015-12-30 12:00:39', '2015-12-30 12:00:39'),
(136, 4, 2, 0, 0, '2015-12-30 12:00:39', '2015-12-30 12:00:39'),
(137, 4, 3, 0, 0, '2015-12-30 12:00:39', '2015-12-30 12:00:39'),
(138, 4, 7, 0, 0, '2015-12-30 12:00:39', '2015-12-30 12:00:39'),
(139, 4, 8, 0, 0, '2015-12-30 12:00:39', '2015-12-30 12:00:39'),
(140, 4, 9, 0, 0, '2015-12-30 12:00:39', '2015-12-30 12:00:39'),
(141, 4, 10, 0, 0, '2015-12-30 12:00:39', '2015-12-30 12:00:39'),
(142, 4, 11, 0, 0, '2015-12-30 12:00:39', '2015-12-30 12:00:39'),
(143, 4, 12, 0, 0, '2015-12-30 12:00:39', '2015-12-30 12:00:39'),
(144, 4, 13, 0, 0, '2015-12-30 12:00:39', '2015-12-30 12:00:39'),
(145, 4, 4, 0, 0, '2015-12-30 12:00:39', '2015-12-30 12:00:39'),
(146, 4, 5, 0, 0, '2015-12-30 12:00:39', '2015-12-30 12:00:39'),
(147, 4, 6, 0, 0, '2015-12-30 12:00:39', '2015-12-30 12:00:39'),
(148, 4, 14, 0, 0, '2015-12-30 12:00:39', '2015-12-30 12:00:39'),
(149, 4, 15, 0, 0, '2015-12-30 12:00:39', '2015-12-30 12:00:39'),
(150, 4, 16, 0, 0, '2015-12-30 12:00:40', '2015-12-30 12:00:40'),
(151, 4, 17, 0, 0, '2015-12-30 12:00:40', '2015-12-30 12:00:40'),
(152, 4, 18, 0, 0, '2015-12-30 12:00:40', '2015-12-30 12:00:40'),
(153, 4, 19, 0, 0, '2015-12-30 12:00:40', '2015-12-30 12:00:40'),
(154, 4, 20, 0, 0, '2015-12-30 12:00:40', '2015-12-30 12:00:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `article_slug_unique` (`slug`);

--
-- Indexes for table `blog_cat`
--
ALTER TABLE `blog_cat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_cat_slug_unique` (`slug`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_comment_blog_item_id_foreign` (`blog_item_id`);

--
-- Indexes for table `blog_item`
--
ALTER TABLE `blog_item`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_item_slug_unique` (`slug`),
  ADD KEY `blog_item_blog_cat_id_foreign` (`blog_cat_id`);

--
-- Indexes for table `cat_slider`
--
ALTER TABLE `cat_slider`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cat_slider_slug_unique` (`slug`);

--
-- Indexes for table `central_settings`
--
ALTER TABLE `central_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `country_code_unique` (`code`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD UNIQUE KEY `customer_id_unique` (`id`),
  ADD UNIQUE KEY `customer_email_unique` (`email`);

--
-- Indexes for table `deliverydetails`
--
ALTER TABLE `deliverydetails`
  ADD UNIQUE KEY `customer_id_unique` (`id`);

--
-- Indexes for table `gal_image`
--
ALTER TABLE `gal_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `groups_title_unique` (`title`),
  ADD UNIQUE KEY `groups_slug_unique` (`slug`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menu_name_id_unique` (`name`,`id`);

--
-- Indexes for table `menu_type`
--
ALTER TABLE `menu_type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menu_type_slug_unique` (`slug`);

--
-- Indexes for table `page_parent`
--
ALTER TABLE `page_parent`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_parent_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_title_unique` (`title`),
  ADD UNIQUE KEY `product_slug_unique` (`slug`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_images_title_unique` (`title`),
  ADD UNIQUE KEY `product_images_slug_unique` (`slug`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_subgroup`
--
ALTER TABLE `product_subgroup`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_subgroup_product_group_id_foreign` (`product_group_id`);

--
-- Indexes for table `product_variation`
--
ALTER TABLE `product_variation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_variation_product_id_foreign` (`product_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `skills_slug_unique` (`slug`);

--
-- Indexes for table `slider_image`
--
ALTER TABLE `slider_image`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slider_image_slug_unique` (`slug`),
  ADD KEY `slider_image_cat_slider_id_foreign` (`cat_slider_id`);

--
-- Indexes for table `social_icon`
--
ALTER TABLE `social_icon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `social_icon_slug_unique` (`slug`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_slug_unique` (`slug`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonial_slug_unique` (`slug`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_reset_password`
--
ALTER TABLE `user_reset_password`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_reset_password_user_id_foreign` (`user_id`);

--
-- Indexes for table `widget`
--
ALTER TABLE `widget`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `widget_slug_unique` (`slug`);

--
-- Indexes for table `widget_menu`
--
ALTER TABLE `widget_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `blog_cat`
--
ALTER TABLE `blog_cat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blog_item`
--
ALTER TABLE `blog_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cat_slider`
--
ALTER TABLE `cat_slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `central_settings`
--
ALTER TABLE `central_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;
--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `deliverydetails`
--
ALTER TABLE `deliverydetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `gal_image`
--
ALTER TABLE `gal_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `menu_type`
--
ALTER TABLE `menu_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `page_parent`
--
ALTER TABLE `page_parent`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_subgroup`
--
ALTER TABLE `product_subgroup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `product_variation`
--
ALTER TABLE `product_variation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slider_image`
--
ALTER TABLE `slider_image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `social_icon`
--
ALTER TABLE `social_icon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_reset_password`
--
ALTER TABLE `user_reset_password`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `widget`
--
ALTER TABLE `widget`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `widget_menu`
--
ALTER TABLE `widget_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD CONSTRAINT `blog_comment_blog_item_id_foreign` FOREIGN KEY (`blog_item_id`) REFERENCES `blog_item` (`id`);

--
-- Constraints for table `blog_item`
--
ALTER TABLE `blog_item`
  ADD CONSTRAINT `blog_item_blog_cat_id_foreign` FOREIGN KEY (`blog_cat_id`) REFERENCES `blog_cat` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product_subgroup`
--
ALTER TABLE `product_subgroup`
  ADD CONSTRAINT `product_subgroup_product_group_id_foreign` FOREIGN KEY (`product_group_id`) REFERENCES `groups` (`id`);

--
-- Constraints for table `product_variation`
--
ALTER TABLE `product_variation`
  ADD CONSTRAINT `product_variation_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `slider_image`
--
ALTER TABLE `slider_image`
  ADD CONSTRAINT `slider_image_cat_slider_id_foreign` FOREIGN KEY (`cat_slider_id`) REFERENCES `cat_slider` (`id`);

--
-- Constraints for table `user_reset_password`
--
ALTER TABLE `user_reset_password`
  ADD CONSTRAINT `user_reset_password_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
