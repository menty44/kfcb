-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2016 at 09:28 AM
-- Server version: 5.5.48-37.8
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `b3nd3r4_kfcb`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit_logs`
--

CREATE TABLE IF NOT EXISTS `audit_logs` (
  `id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE IF NOT EXISTS `configs` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `configname` varchar(50) NOT NULL,
  `configvalue` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL DEFAULT '2',
  `updated_at` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `name`, `configname`, `configvalue`, `description`, `created_at`, `created_by`, `updated_at`, `modified_by`, `status`) VALUES
(1, 'PasswordExpiryDays', 'Password Expiry Days', '30', 'Password Expiry Days', '2014-08-16 20:38:45', 2, '2014-08-16 14:39:56', 2, 1),
(2, 'AdminEmail', 'Admin Email', 'info@riverbank.co.ke', 'This is the default email address for Teke', '2014-10-29 13:11:25', 2, '2014-10-29 10:38:27', 2, 1),
(3, 'MailPort', 'Mail Port', '25', 'This is the email port', '2014-10-29 13:13:58', 2, '2014-10-29 10:19:11', 2, 1),
(4, 'SessionExpirationTime', 'Session Expiration Time', '1000', 'The time in seconds when the session expires', '2014-10-29 13:18:33', 2, '2015-03-12 12:11:44', 419, 1),
(5, 'ZiZiSwitchIP', 'ZiZi Switch IP', '37.58.127.211', 'The Switch IP', '2014-11-29 10:01:46', 2, '2014-12-10 21:10:04', 2, 1),
(6, 'ZiZiSwitchPort', 'ZiZi Switch Port', '9393', 'The Switch Port', '2014-11-29 10:02:08', 2, '2015-05-27 00:33:07', 246, 1);

-- --------------------------------------------------------

--
-- Table structure for table `filmgenres`
--

CREATE TABLE IF NOT EXISTS `filmgenres` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `description` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) NOT NULL,
  `genreID` int(11) NOT NULL,
  `moderator` int(11) NOT NULL DEFAULT '0',
  `name` varchar(500) NOT NULL DEFAULT '0',
  `length` varchar(50) NOT NULL DEFAULT '0',
  `year_of_production` year(4) NOT NULL DEFAULT '2000',
  `origin` varchar(50) NOT NULL DEFAULT '0',
  `description` varchar(500) NOT NULL DEFAULT '0',
  `createdby` varchar(500) NOT NULL DEFAULT '0',
  `updatedby` varchar(500) NOT NULL DEFAULT '0',
  `cast` varchar(500) NOT NULL DEFAULT '0',
  `rating` varchar(500) NOT NULL,
  `synopsis` varchar(500) NOT NULL,
  `rated` tinyint(2) NOT NULL DEFAULT '0',
  `ratedby` tinyint(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `genreID`, `moderator`, `name`, `length`, `year_of_production`, `origin`, `description`, `createdby`, `updatedby`, `cast`, `rating`, `synopsis`, `rated`, `ratedby`, `created_at`, `updated_at`) VALUES
(1, 0, 6, 'Nairobi Half Life', '180', 2010, 'Kenya', 'Nairobi other Life', '0', '1', '0', 'pg', 'Fhthrhtbthrytht', 2, 5, '2016-06-09 18:51:51', '2016-06-10 02:19:38'),
(2, 0, 0, 'Last Man Standing', '90', 2015, 'USA', '', '1', '1', '', 'pg', 'Accepted', 1, 5, '2016-06-10 00:56:06', '2016-06-10 02:18:53'),
(3, 0, 6, 'Friends with Benefits', '180', 2009, 'USA', '', '1', '0', '0', 'pg', 'based on the examiners the film is rated pg', 2, 5, '2016-06-10 01:57:18', '2016-06-10 01:57:18'),
(4, 0, 0, 'The Blind Spot', '45', 2015, 'USA', '', '1', '0', '', '', '', 1, 4, '2016-06-16 18:03:01', '2016-06-16 18:03:01');

-- --------------------------------------------------------

--
-- Table structure for table `film_approvers`
--

CREATE TABLE IF NOT EXISTS `film_approvers` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL,
  `groupname` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(1) NOT NULL,
  `createdby` int(11) unsigned zerofill NOT NULL DEFAULT '00000000002',
  `activatedby` int(11) DEFAULT NULL,
  `deactivatedby` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `groupname`, `description`, `created_at`, `updated_at`, `status`, `createdby`, `activatedby`, `deactivatedby`) VALUES
(1, 'Super Admin', 'Owners of the System', '2016-06-10 11:41:27', '2016-06-10 14:55:49', 1, 00000000001, NULL, NULL),
(2, 'Administrator', 'Systems Administrator', '2016-06-10 11:58:53', '2016-06-10 12:05:53', 1, 00000000001, 1, 1),
(3, 'Examinar', 'Persons Who rate the films', '2016-06-10 13:19:42', '2016-06-19 02:48:46', 1, 00000000001, 1, 1),
(4, 'Moderator', 'Moderate Films Based on Examiners', '2016-06-10 13:19:42', '2016-06-10 13:19:49', 1, 00000000001, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `moderation`
--

CREATE TABLE IF NOT EXISTS `moderation` (
  `id` int(10) unsigned NOT NULL,
  `filmID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(1) NOT NULL,
  `ratescore` varchar(500) NOT NULL,
  `synopsis` varchar(500) NOT NULL,
  `createdby` int(11) unsigned zerofill NOT NULL DEFAULT '00000000002',
  `activatedby` int(11) DEFAULT NULL,
  `deactivatedby` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `moderation`
--

INSERT INTO `moderation` (`id`, `filmID`, `userID`, `created_at`, `updated_at`, `status`, `ratescore`, `synopsis`, `createdby`, `activatedby`, `deactivatedby`) VALUES
(1, 3, 6, '2016-06-20 18:17:31', '2016-06-20 18:17:31', 0, 'pg', 'Mild', 00000000006, NULL, NULL),
(2, 1, 6, '2016-06-20 18:23:27', '2016-06-20 18:23:27', 0, 'ge', 'dfgsdgh', 00000000006, NULL, NULL),
(3, 3, 6, '2016-06-20 19:26:26', '2016-06-20 19:26:26', 0, 'pg', 'based on the reviews and my personal preference. its a pg film', 00000000006, NULL, NULL),
(4, 1, 6, '2016-06-21 12:02:38', '2016-06-21 12:02:38', 0, 'pg', 'Movie synopsis goes here', 00000000006, NULL, NULL),
(5, 3, 6, '2016-06-21 13:21:07', '2016-06-21 13:21:07', 0, 'pg', 'based on the examiners the film is rated pg', 00000000006, NULL, NULL),
(6, 1, 6, '2016-06-21 13:21:18', '2016-06-21 13:21:18', 0, 'pg', 'getr', 00000000006, NULL, NULL),
(7, 1, 6, '2016-06-21 13:21:19', '2016-06-21 13:21:19', 0, 'pg', 'Fhthrhtbthrytht', 00000000006, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parameters`
--

CREATE TABLE IF NOT EXISTS `parameters` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL DEFAULT '0',
  `description` varchar(100) NOT NULL DEFAULT '0',
  `themeID` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` datetime NOT NULL,
  `createdby` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1 COMMENT='These are usedd to rate the film and takes into considerations frequency and intensity of said parameter';

--
-- Dumping data for table `parameters`
--

INSERT INTO `parameters` (`id`, `name`, `description`, `themeID`, `created_at`, `updated_at`, `createdby`) VALUES
(1, 'Normalizing the use of violence as a solution to resole problems', 'Normalizing the use of violence as a solution to resole problems', 1, '2016-06-11 02:29:46', '2016-06-10 21:29:46', 1),
(2, 'Depiction of violent gangster behavior ', 'Depiction of violent gangster behavior (e.g self mutilation rites)', 1, '2016-06-11 02:31:38', '2016-06-10 21:31:38', 1),
(3, 'Exposure of fondling of female breasts/human/animal sexual organs', 'Exposure of fondling of female breasts/human/animal sexual organs', 2, '2016-06-11 02:33:49', '2016-06-10 21:33:49', 1),
(14, 'Emphasis on violent techniques/acts (e.g. Methods of torture,gang-Fights, combat techniques)', 'Emphasis on violent techniques/acts (e.g. Methods of torture,gang-Fights, combat techniques)', 1, '0000-00-00 00:00:00', '2016-06-20 00:00:00', 1),
(15, 'Encouraging aggressive and sadistic attitudes towards infliction of pain and violence', 'Encouraging aggressive and sadistic attitudes towards infliction of pain and violence', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(16, 'Explicit and prolonged sexual violence or erotic portrayal of sexual assault /coercion.', 'Explicit and prolonged sexual violence or erotic portrayal of sexual assault /coercion.0', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(17, 'Works portraying excessive blood,gored/dismembered/disfigured parts of a body', 'Works portraying excessive blood,gored/dismembered/disfigured parts of a body', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(18, 'Images of seriously injured people', 'Images of seriously injured people', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(19, 'Images of dead bodies', 'Images of dead bodies', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(20, 'Portrayal of anti-social behavior e.g bullying', 'Portrayal of anti-social behavior e.g bullying', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(21, 'Portrayal of potentially dangerous behavior e.g. hanging, suicide ', 'Portrayal of potentially dangerous behavior e.g. hanging, suicide ', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(22, 'Portrayal of ease of making and accessing weapons', 'Portrayal of ease of making and accessing weapons', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(23, 'Detailed portrayal of criminal and violent techniques', 'Detailed portrayal of criminal and violent techniques', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(24, 'Explicit cruelty or violence towards animals', 'Explicit cruelty or violence towards animals', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(25, 'Exposure or fondling of female breasts/human/animal sexual organs.', 'Exposure or fondling of female breasts/human/animal sexual organs.', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(26, 'Explicit images of sexual activity', 'Explicit images of sexual activity', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(27, 'Behavior/language that is sexually offensive', 'Behavior/language that is sexually offensive', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(28, 'Undressed', 'Undressed', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(29, 'Indecent exposure - if he or she intentionally makes any open and obscene exposure of his or her per', 'Indecent exposure - if he or she intentionally makes any open and obscene exposure of his or her per', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(30, 'Portrayal of children being coerced and or induced to engage in sexual activity', 'Portrayal of children being coerced and or induced to engage in sexual activity', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(31, 'Use of frightening elements and scary scenes', 'Use of frightening elements and scary scenes', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(32, 'Portrayal of magic/super natural forces/events and related', 'Portrayal of magic/super natural forces/events and related', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(33, 'practices such as hypnotism, mind-reading, faith healing.', 'practices such as hypnotism, mind-reading, faith healing.', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(34, 'Portrayal of exorcism (process/action to get rid of evil spirits).', 'Portrayal of exorcism (process/action to get rid of evil spirits).', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(35, 'The paranormal or mysterious events/facts that cannot be explained by science', 'The paranormal or mysterious events/facts that cannot be explained by science', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(36, 'Human or animal sacrifice', 'Human or animal sacrifice', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL DEFAULT '0',
  `filmID` int(11) NOT NULL DEFAULT '0',
  `one` int(11) NOT NULL DEFAULT '0',
  `two` int(11) NOT NULL DEFAULT '0',
  `three` int(11) NOT NULL DEFAULT '0',
  `four` int(11) NOT NULL DEFAULT '0',
  `five` int(11) NOT NULL DEFAULT '0',
  `six` int(11) NOT NULL DEFAULT '0',
  `ratescore` varchar(50) NOT NULL DEFAULT '0',
  `synopsis` varchar(500) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `userID`, `filmID`, `one`, `two`, `three`, `four`, `five`, `six`, `ratescore`, `synopsis`, `created_at`, `updated_at`) VALUES
(1, 5, 3, 1, 1, 4, 1, 2, 1, 'pg', 'Viewed as mild', '2016-06-20 13:12:56', '2016-06-20 13:12:56'),
(2, 4, 3, 4, 2, 2, 2, 2, 2, 'pg', 'The film is mild', '2016-06-20 13:14:25', '2016-06-20 13:14:25'),
(3, 5, 1, 0, 0, 0, 0, 0, 0, 'ge', 'hdjdhj', '2016-06-20 13:20:52', '2016-06-20 13:20:52'),
(4, 3, 3, 1, 1, 1, 1, 1, 1, 'pg', 'sdjfgkl', '2016-06-20 13:33:36', '2016-06-20 13:33:36'),
(5, 7, 1, 1, 3, 1, 2, 1, 2, 'pg', 'PG', '2016-06-20 14:22:36', '2016-06-20 14:22:36'),
(7, 5, 2, 1, 5, 0, 1, 2, 1, '18', 'VERY VIOLENT MOVIE ', '2016-06-21 08:16:47', '2016-06-21 08:16:47'),
(8, 8, 4, 2, 1, 0, 1, 0, 1, 'pg', 'Aaaa', '2016-06-21 08:16:49', '2016-06-21 08:16:49'),
(9, 4, 4, 1, 0, 1, 0, 3, 0, 'pg', 'mild', '2016-06-21 08:16:55', '2016-06-21 08:16:55'),
(10, 4, 4, 1, 0, 1, 0, 3, 0, 'pg', 'mild', '2016-06-21 08:16:55', '2016-06-21 08:16:55'),
(11, 5, 1, 1, 1, 0, 1, 2, 1, 'pg', 'EPIC SCENES', '2016-06-21 08:18:34', '2016-06-21 08:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE IF NOT EXISTS `themes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `createdby` varchar(50) NOT NULL,
  `updated_at` date NOT NULL,
  `updatedby` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COMMENT='Film Themes table';

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `name`, `description`, `created_at`, `createdby`, `updated_at`, `updatedby`) VALUES
(1, 'Violence and Crime', 'Violence and Crime', '2016-06-11 01:29:19', '2016-06-10 23:29:19', '2016-06-10', ''),
(2, 'Sex, Obscenity and Nudity', 'Sex, Obscenity and Nudity', '2016-06-11 02:11:44', '0000-00-00 00:00:00', '2016-06-10', ''),
(5, 'Occult and Horror', 'Occult and Horror', '2016-06-11 02:14:14', '0000-00-00 00:00:00', '2016-06-10', ''),
(6, 'Drugs, Alcohol and other Harmful substances', 'Drugs, Alcohol and other Harmful substances', '2016-06-11 02:18:14', '0000-00-00 00:00:00', '2016-06-10', ''),
(7, 'Religion and Community', 'Religion and Community', '2016-06-11 02:21:23', '0000-00-00 00:00:00', '2016-06-10', ''),
(8, 'Propaganda for War, Hate Speech and Incitement', 'Propaganda for War, Hate Speech and Incitement', '2016-06-11 02:22:13', '0000-00-00 00:00:00', '2016-06-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(2) NOT NULL DEFAULT '0',
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `GroupID` tinyint(2) NOT NULL DEFAULT '3',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `password`, `admin`, `status`, `GroupID`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '', 'larrykip91@gmail.com', '0729629423', '$2y$10$X8T75CnsCEMYLTWfhbxmkO/SvWX7Ec0w3wMmRXwFNlMIz45cnLCuu', 1, 1, 1, 'TErXdudNxCPT6FUjIY0IkjP3e5iLUWYN3UXu6f0CqB408yj9bNCD4DzrpSwt', '2016-06-09 03:08:25', '2016-06-20 14:16:56'),
(2, 'Larry Moses Kiprop', '', 'kiprop.larry@gmail.com', '0729629423', '$2y$10$X8T75CnsCEMYLTWfhbxmkO/SvWX7Ec0w3wMmRXwFNlMIz45cnLCuu', 0, 1, 2, '9JKh9Fh3XluGvXoeqshj3df4HkyDupW97tgeYCXcy3EQ81AuiR3SOnTLbbgZ', '2016-06-09 13:27:20', '2016-06-13 01:38:26'),
(3, 'Jane Kizito', '', 'janelitunda@gmail.com', '', '$2y$10$.7oeUB6V8Kb9BubBG6Xvyee7mmsjIL0kvcqBpSzezebDVtJzQns.G', 0, 1, 3, '5WfCNIP7N5dsaSBXOCSLSqGeVp9kJFHiu7VJNFMyWyvsOvluvqWJKjUA2VVw', '2016-06-13 01:39:09', '2016-06-20 22:16:17'),
(4, 'Fred', '', 'menty44@gmail.com', '', '$2y$10$.7oeUB6V8Kb9BubBG6Xvyee7mmsjIL0kvcqBpSzezebDVtJzQns.G', 0, 1, 3, 'jeepMKTxJt05t7Q8rcIToy2WLv9z6z036IeMZ717EE3n22wnX4ZYXZnK9ASK', '2016-06-17 13:49:28', '2016-06-21 13:18:32'),
(5, 'Margret Muchai', '', 'megmuch@gmail.com', '', '$2y$10$RBFn2lsLJNHZNpZbziyAPuc80yOFc2z2nVFUfj9xofjd46uLA95xC', 0, 1, 3, '1JR4IbRtAxb9AIlKxnofNWpqcmpTkMHzRXEfxmlT1Vey7ZVoJzV7iBgAqjw8', '2016-06-20 14:26:02', '2016-06-21 13:18:52'),
(6, 'Fims Moderator', '', 'films@flag42.com', '', '$2y$10$.7oeUB6V8Kb9BubBG6Xvyee7mmsjIL0kvcqBpSzezebDVtJzQns.G', 0, 1, 4, 'GkrdHupUC1mpxhQK05JoYkmcDQcpu0mLTdr0pl7W84cOwpDjysBX5cAvV8dh', '2016-06-20 14:27:41', '2016-06-21 13:00:29'),
(7, 'newton', '', 'nomitoko@yahoo.com', '', '$2y$10$isOdO3yhSIG30z9AUFdCMejAdGT9jjNgGybimwJg1LYqyhvh8kLvG', 0, 1, 3, 'IMa2aGDKH8rlJGL10THJ9VTcbyLn3zGimO1NZFfetMOo24cW95aXnhqvu3tL', '2016-06-20 19:06:26', '2016-06-20 19:23:38'),
(8, 'Film Rater1', '', 'films1@flag42.com', '', '$2y$10$wVQ6AInKeKG8RMSuAt6OkebkJfQHnibIq1ORqpqZMVvhcIILne.Ra', 0, 0, 3, 'JPsbNwLmzGa30j0h9FB3t4huoOyIGBuRiunC0Qr2Pdm2zg11IuVTQJ14dfzD', '2016-06-21 12:41:49', '2016-06-21 13:19:18'),
(9, 'Film Rater2', '', 'films2@flag42.com', '', '$2y$10$LG8shEgliCjdUHmqxg8W7O1BRM43YROK8AGbaFAILmWWcfDXCrwQ.', 0, 0, 3, NULL, '2016-06-21 12:56:22', '2016-06-21 12:56:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit_logs`
--
ALTER TABLE `audit_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filmgenres`
--
ALTER TABLE `filmgenres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film_approvers`
--
ALTER TABLE `film_approvers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moderation`
--
ALTER TABLE `moderation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parameters`
--
ALTER TABLE `parameters`
  ADD PRIMARY KEY (`id`), ADD KEY `Theme` (`themeID`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audit_logs`
--
ALTER TABLE `audit_logs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `filmgenres`
--
ALTER TABLE `filmgenres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `film_approvers`
--
ALTER TABLE `film_approvers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `moderation`
--
ALTER TABLE `moderation`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `parameters`
--
ALTER TABLE `parameters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `parameters`
--
ALTER TABLE `parameters`
ADD CONSTRAINT `Theme` FOREIGN KEY (`themeID`) REFERENCES `themes` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
