-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 06, 2015 at 01:15 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ch18`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
`category_id` int(10) unsigned NOT NULL,
  `category` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `var` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
`event_id` int(10) unsigned NOT NULL,
  `event_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `event_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `event_date` datetime NOT NULL,
  `fk_event_admin` int(10) NOT NULL,
  `attending` int(11) NOT NULL DEFAULT '0',
  `fk_venue_id` int(10) NOT NULL,
  `image_name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `fk_object_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_desc`, `event_date`, `fk_event_admin`, `attending`, `fk_venue_id`, `image_name`, `created`, `fk_object_id`) VALUES
(13, 'Test event', 'this shouskjdlskdjsld', '2015-02-01 13:05:33', 2, 0, 1, 'a7d1229da200aa95f92280bda4dc58ca.jpg', '2015-01-14 13:42:44', 0),
(14, 'Rehab', 'This is a great event called rehab.', '2015-02-01 13:05:33', 2, 0, 1, '030d7e8e966169ab4c7f67c291c333f4.jpg', '2015-01-14 13:44:36', 0),
(15, 'Beat Boutique', 'Thia is a beat boutique event!', '2015-02-01 13:05:33', 2, 0, 1, 'fa1b23d10091fbd259217b9d00b5f213.jpg', '2015-01-14 13:47:39', 0),
(16, 'New event!!!', 'Best event ever!!!!! Yes it is!', '2015-02-01 13:05:33', 2, 0, 1, '', '2015-01-15 13:52:43', 0),
(17, 'Test', 'This WILL work!', '2015-02-01 13:05:33', 2, 0, 1, '0', '2015-01-15 13:53:16', 0),
(18, 'NEW Hahaha will work', 'this will for sure work ma nigga!', '2015-02-01 13:05:33', 2, 0, 1, 'img_5b1761c09f0a72aa42848daf8f5bfd0a.jpg', '2015-01-15 13:54:17', 0),
(19, 'NAJAJAJA', 'hahaka ksadkhjlksasasas', '2015-02-01 13:05:33', 2, 0, 1, 'crop-large_a5b94bd9a45233444295261bd6cadd72.jpg', '2015-01-15 15:36:33', 0),
(20, 'NEWWWWW', 'lkjslkjslkajlskajslakjslaksjasas', '2015-02-01 13:05:33', 2, 0, 1, 'crop-large_82d97581e616c2225ea0cfb45dc626e5.jpg', '2015-01-15 15:39:14', 0),
(21, 'BEST EVENT', 'Yes yes', '2015-02-01 13:05:33', 2, 0, 1, 'wonderland_teaser.jpg', '2015-02-13 10:58:25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `facebook_likes`
--

CREATE TABLE `facebook_likes` (
`facebook_like_id` int(10) unsigned NOT NULL,
  `liked_page_id` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_user_id` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `fk_user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
`relationship_id` int(10) unsigned NOT NULL,
  `fk_user_id` int(10) unsigned NOT NULL,
  `friend_id` int(10) unsigned NOT NULL,
  `is_confirmed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
`gallery_id` int(10) unsigned NOT NULL,
  `gallery_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `added` datetime NOT NULL,
  `fk_user_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`gallery_id`, `gallery_name`, `added`, `fk_user_id`) VALUES
(3, 'aaaa', '2015-01-14 16:21:50', 2),
(6, 'sdsdsd', '2015-01-14 16:27:09', 2),
(7, 'TESTTTA', '2015-01-14 16:56:36', 2),
(8, 'SEXXAAA', '2015-01-14 17:02:12', 2),
(9, 'BABY', '2015-01-14 17:02:59', 2);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
`image_id` int(10) unsigned NOT NULL,
  `fk_gallery_id` int(11) NOT NULL,
  `image_title` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `image_file` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `image_tags` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`image_id`, `fk_gallery_id`, `image_title`, `image_file`, `image_tags`) VALUES
(1, 3, 'crop-large_742a7615b535959e2c370a9cacee8d31.jpg', 'crop-large_742a7615b535959e2c370a9cacee8d31.jpg', ''),
(2, 3, 'crop-large_1391e1b29da7aad463ea144ff25f914c.jpg', 'crop-large_1391e1b29da7aad463ea144ff25f914c.jpg', ''),
(3, 3, 'crop-large_09358edbc0af386a347148ec744a6762.jpg', 'crop-large_09358edbc0af386a347148ec744a6762.jpg', ''),
(4, 3, 'crop-large_0937874a075e1435bf0a077ac9dd6cc9.jpg', 'crop-large_0937874a075e1435bf0a077ac9dd6cc9.jpg', ''),
(5, 3, 'crop-large_30810995a230aef4557a48d13fa12e0b.jpg', 'crop-large_30810995a230aef4557a48d13fa12e0b.jpg', ''),
(6, 3, 'crop-large_154795685184bd182f013dfac124174d.jpg', 'crop-large_154795685184bd182f013dfac124174d.jpg', ''),
(7, 6, 'img_6f57055b84fd054bc6051e76d7958c76.jpg', 'img_6f57055b84fd054bc6051e76d7958c76.jpg', ''),
(8, 6, 'img_6f94023ce0ff2cb4d8160eaf67d87dc2.jpg', 'img_6f94023ce0ff2cb4d8160eaf67d87dc2.jpg', ''),
(9, 6, 'img_6fddce7f8ca08da44699eaebcb1106f4.jpg', 'img_6fddce7f8ca08da44699eaebcb1106f4.jpg', ''),
(10, 6, 'img_7a3cfda9662979d159871dc02cfd99f7.jpg', 'img_7a3cfda9662979d159871dc02cfd99f7.jpg', ''),
(11, 6, 'img_7a60ef8be1d3e640592dbc69a9a5c4e8.jpg', 'img_7a60ef8be1d3e640592dbc69a9a5c4e8.jpg', ''),
(12, 7, 'img_6bcf220eace41ea839b65274d24a68d2.jpg', 'img_6bcf220eace41ea839b65274d24a68d2.jpg', ''),
(13, 7, 'img_6be2744fcc1edf7ed1808101155d2f8d.jpg', 'img_6be2744fcc1edf7ed1808101155d2f8d.jpg', ''),
(14, 7, 'img_6c286ba13730ed0e83e2b5940fab5a6f.jpg', 'img_6c286ba13730ed0e83e2b5940fab5a6f.jpg', ''),
(15, 7, 'img_6ca13363a9f789d104772fd28449ca8b.jpg', 'img_6ca13363a9f789d104772fd28449ca8b.jpg', ''),
(16, 7, 'img_6cb283e144d79ff96625ad341a29c4c4.jpg', 'img_6cb283e144d79ff96625ad341a29c4c4.jpg', ''),
(17, 8, 'img_53fb51542ef54e4eba99ba0a73830d61.jpg', '', ''),
(18, 8, 'img_54a3199262bb9b8a5acec7f1971fab7d.jpg', '', ''),
(19, 8, 'img_54c244800c5d350b20d27acb99370716.jpg', '', ''),
(20, 8, 'img_55fcc25e24859a080a32fb28c91e4ec3.jpg', '', ''),
(21, 8, 'img_59c8571bcd3d2d942e4e851722e374a7.jpg', '', ''),
(22, 9, 'crop-large_54b4abb153851acf359e9a6df0d86db0.jpg', 'crop-large_54b4abb153851acf359e9a6df0d86db0.jpg', ''),
(23, 9, 'crop-large_82d97581e616c2225ea0cfb45dc626e5.jpg', 'crop-large_82d97581e616c2225ea0cfb45dc626e5.jpg', ''),
(24, 9, 'crop-large_190f12f6eda92316d9d3221dc7c82a30.jpg', 'crop-large_190f12f6eda92316d9d3221dc7c82a30.jpg', ''),
(25, 9, 'crop-large_352ea21c5024319e68d32a8a0c98e5cf.jpg', 'crop-large_352ea21c5024319e68d32a8a0c98e5cf.jpg', ''),
(26, 9, 'crop-large_376a585b184cbf9c9c37969d61ad13f4.jpg', 'crop-large_376a585b184cbf9c9c37969d61ad13f4.jpg', ''),
(27, 9, 'crop-large_448fb884e11fc7d35f242e341d66eabd.jpg', 'crop-large_448fb884e11fc7d35f242e341d66eabd.jpg', ''),
(28, 9, 'crop-large_701b3875c449b3456e84e0082f664774.jpg', 'crop-large_701b3875c449b3456e84e0082f664774.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `guestlists`
--

CREATE TABLE `guestlists` (
`guestlist_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `fk_event_id` int(11) NOT NULL,
  `guests` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guestlists`
--

INSERT INTO `guestlists` (`guestlist_id`, `fk_user_id`, `fk_event_id`, `guests`) VALUES
(1, 2, 14, 10),
(2, 2, 15, 2);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
`lang_id` tinyint(3) unsigned NOT NULL,
  `lang` varchar(60) NOT NULL,
  `lang_eng` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`lang_id`, `lang`, `lang_eng`) VALUES
(21, 'English', 'English'),
(29, 'Svenska', 'Swedish');

-- --------------------------------------------------------

--
-- Table structure for table `master_log`
--

CREATE TABLE `master_log` (
`object_id` int(10) unsigned NOT NULL,
  `session_id` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `php_self` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `request_method` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `request_time` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `query_string` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remote_addr` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remote_host` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `remote_port` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `time_logged` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `master_log`
--

INSERT INTO `master_log` (`object_id`, `session_id`, `php_self`, `request_method`, `request_time`, `query_string`, `remote_addr`, `remote_host`, `remote_port`, `time_logged`) VALUES
(1, 'f4e9ee3e8aa1068fe1822b161e52cd40', '/klubbah_v2/html/index.php', 'GET', '1424287648', '', '::1', '127.0.0.1', '55599', '2015-02-18 14:27:28'),
(2, 'f4e9ee3e8aa1068fe1822b161e52cd40', '/klubbah_v2/html/index.php', 'GET', '1424287669', '', '::1', '127.0.0.1', '55609', '2015-02-18 14:27:49'),
(3, 'f4e9ee3e8aa1068fe1822b161e52cd40', '/klubbah_v2/html/index.php', 'GET', '1424287728', '', '::1', '127.0.0.1', '55625', '2015-02-18 14:28:48'),
(4, 'e2187a677b903320412aa7bbea87aa41', '/klubbah_v2/html/e-member.php', 'GET', '1424474347', '', '::1', '127.0.0.1', '55433', '2015-02-21 00:19:07'),
(5, 'e2187a677b903320412aa7bbea87aa41', '/klubbah_v2/html/rep.php', 'GET', '1424474468', '', '::1', '127.0.0.1', '55443', '2015-02-21 00:21:08'),
(6, 'e2187a677b903320412aa7bbea87aa41', '/klubbah_v2/html/vip.php', 'GET', '1424475211', '', '::1', '127.0.0.1', '55474', '2015-02-21 00:33:31');

-- --------------------------------------------------------

--
-- Table structure for table `matchmaker`
--

CREATE TABLE `matchmaker` (
`match_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `liked_user_id` int(11) NOT NULL,
  `liked` datetime NOT NULL,
  `matched` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
`message_id` int(10) unsigned NOT NULL,
  `fk_user_id` int(10) unsigned NOT NULL,
  `recipient_id` int(10) unsigned NOT NULL,
  `message_subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message_content` text COLLATE utf8_unicode_ci NOT NULL,
  `sent_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `fk_user_id`, `recipient_id`, `message_subject`, `message_content`, `sent_date`) VALUES
(1, 3, 2, 'Hello Matt', 'Hello Matthew, nice to see you.', '0000-00-00 00:00:00'),
(2, 6, 2, 'Hello mate!', 'Yo, you free to party?', '0000-00-00 00:00:00'),
(3, 3, 2, 'DEV!!', 'Making an app bro!', '0000-00-00 00:00:00'),
(4, 1, 2, 'I got a cool idea for an app!', 'Ahh yea bro, you gon'' make trillions.', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
`news_id` int(10) unsigned NOT NULL,
  `news_headline` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `news_content` text COLLATE utf8_unicode_ci NOT NULL,
  `posted` datetime NOT NULL,
  `featured_image` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `fk_user_id` int(10) NOT NULL,
  `fk_object_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_headline`, `news_content`, `posted`, `featured_image`, `fk_user_id`, `fk_object_id`) VALUES
(1, 'Come to the club!!', 'More news about the club!!!', '2015-01-14 15:19:07', 'fa1b23d10091fbd259217b9d00b5f213.jpg', 2, 0),
(2, 'We are open this wee', 'Come and check us out this week as we are open and ready to party.', '2015-01-14 15:43:55', 'cf189545495533089806278d35726cc6.jpg', 2, 0),
(3, 'More fucking news', 'This is some news about the club!', '2015-01-14 15:44:21', '29b0bc7984762807640b1850a5f6deb0.jpg', 2, 0),
(4, 'More news', 'wqkejlqkwjelqkjwelkwjelqkjweweqwewe', '2015-01-14 16:48:48', 'e061864916d1e693fd857214de3ab086.jpg', 2, 0),
(5, 'hahaha TEST', 'Can i be replaced? nah I am from outer space!', '2015-01-15 13:40:12', 'crop-large_1391e1b29da7aad463ea144ff25f914c.jpg', 2, 0),
(6, 'New news', 'dong dong dond', '2015-01-15 14:07:23', 'crop-large_49f888869a5d68096c83fe9e8611bc3e.jpg', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
`offer_id` int(10) unsigned NOT NULL,
  `offer_headline` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `offer_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `fk_user_id` int(10) NOT NULL,
  `fk_object_id` int(10) NOT NULL,
  `added` datetime NOT NULL,
  `expires` datetime NOT NULL,
  `featured_image` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offer_id`, `offer_headline`, `offer_desc`, `fk_user_id`, `fk_object_id`, `added`, `expires`, `featured_image`) VALUES
(7, 'Girls FREE!!!', 'Free entry if you have tits!', 2, 0, '2015-01-14 18:15:07', '2015-02-01 13:05:33', 'img_4f5e8c3984f1a95c83865d227a09da1b.jpg'),
(8, 'Best offer ever!', 'Thisis the offer and the current number displayed is 12.', 2, 13, '2015-01-14 19:35:02', '2015-02-01 13:05:33', 'crop-large_190f12f6eda92316d9d3221dc7c82a30.jpg'),
(9, 'test test', 'offer of the yeat!!!', 2, 50, '2015-01-14 20:15:45', '2015-02-01 13:05:33', 'crop-large_1fac5ecb24e84933451264e73620b641.jpg'),
(10, '2 for free!', 'This is the best offer ever!!!!', 2, 89, '2015-01-15 13:56:33', '2015-02-01 13:05:33', 'crop-large_49f888869a5d68096c83fe9e8611bc3e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_contents`
--

CREATE TABLE `order_contents` (
`oc_id` int(10) unsigned NOT NULL,
  `order_id` int(10) unsigned NOT NULL,
  `print_id` int(10) unsigned NOT NULL,
  `quantity` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `price` decimal(6,2) unsigned NOT NULL,
  `ship_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_contents`
--

INSERT INTO `order_contents` (`oc_id`, `order_id`, `print_id`, `quantity`, `price`, `ship_date`) VALUES
(1, 1, 1, 100, 100.00, NULL),
(2, 2, 1, 12, 100.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
`order_id` int(10) unsigned NOT NULL,
  `customer_id` int(10) unsigned NOT NULL,
  `total` decimal(10,2) unsigned NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `total`, `order_date`) VALUES
(1, 1, 178.93, '2015-01-13 13:42:50'),
(2, 1, 178.93, '2015-01-13 13:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
`page_id` int(10) unsigned NOT NULL,
  `page_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `template_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `page_order` tinyint(4) NOT NULL,
  `page_location` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
`tag_id` int(10) unsigned NOT NULL,
  `fk_post_id` int(11) NOT NULL,
  `tag` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
`post_id` int(10) unsigned NOT NULL,
  `post_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8_unicode_ci NOT NULL,
  `posted` datetime NOT NULL,
  `fk_user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
`profile_id` int(10) unsigned NOT NULL,
  `fk_user_id` int(10) unsigned NOT NULL,
  `facebook_link` varchar(512) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_id` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_bio` text COLLATE utf8_unicode_ci NOT NULL,
  `facebook_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_first_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_gender` int(11) NOT NULL,
  `facebook_last_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_timezone` int(11) NOT NULL,
  `facebook_updated` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_verified` tinyint(1) NOT NULL,
  `facebook_birthday` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_count` bigint(20) NOT NULL,
  `following_count` bigint(20) NOT NULL,
  `follower_count` bigint(20) NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `skills` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`profile_id`, `fk_user_id`, `facebook_link`, `facebook_id`, `facebook_bio`, `facebook_email`, `facebook_first_name`, `facebook_gender`, `facebook_last_name`, `facebook_locale`, `facebook_name`, `facebook_timezone`, `facebook_updated`, `facebook_verified`, `facebook_birthday`, `about`, `bio`, `location`, `post_count`, `following_count`, `follower_count`, `telephone`, `website`, `skills`) VALUES
(1, 2, '', '', '', '', '', 0, '', '', '', 0, '', 0, '', 'Lead developer, tech nut and nature lover. In a great relationship with an amazing woman. Co-founder of Evereti and ex-DJ. Love life, working out and everything this amazing world has to offer. Web of Change.', 'You can read about me when I''m dead, because right now I''m busy writing my story.', 'Amsterdam, NL', 2600, 0, 1000, '46 760-246-236', 'www.evereti.com', 'UI Design:Clean and Modern Web Design:PHP and MySQL Programming:Vector Design');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
`status_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `status_text` text COLLATE utf8_unicode_ci NOT NULL,
  `posted` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`status_id`, `fk_user_id`, `status_text`, `posted`) VALUES
(1, 4, 'dssdsdsd', '2015-02-12 19:07:25'),
(2, 4, 'TEst post', '2015-02-12 19:22:24'),
(3, 4, 'I love to post!', '2015-02-12 19:22:30'),
(4, 4, 'I could keep fucking doing it!\r\n', '2015-02-12 19:22:39'),
(5, 4, 'I could keep fucking doing it!\r\n', '2015-02-12 19:24:14'),
(6, 4, 'I could keep fucking doing it!\r\n', '2015-02-12 19:24:38'),
(11, 2, 'Founder of this site bitches!', '2015-02-12 19:34:14'),
(12, 2, 'Just testing this shit out!', '2015-02-12 19:50:49'),
(13, 2, 'TEST', '2015-02-12 19:56:50'),
(14, 2, 'Hello', '2015-02-12 20:50:36'),
(15, 2, '<h4>YO YO YO</h4>', '2015-02-13 10:38:36'),
(16, 2, '', '2015-02-13 10:42:17'),
(17, 2, 'TEST', '2015-02-13 10:42:45'),
(18, 2, 'sdsd', '2015-02-13 10:44:47'),
(19, 2, 'Still building this tool, I hope someday it will be useful to people.', '2015-02-13 12:21:35'),
(20, 2, 'Just a test ma nigga!', '2015-02-13 15:09:12'),
(21, 2, 'What next?', '2015-02-13 19:31:49'),
(22, 2, 'Sign up today!', '2015-02-14 00:27:10'),
(23, 2, 'Yo yo\r\n', '2015-02-14 00:58:04'),
(24, 2, 'HAHAHA', '2015-02-14 01:12:20'),
(25, 2, 'kjhksjdsdsd', '2015-02-14 02:53:23'),
(28, 2, 'Hello baby.', '2015-02-28 17:16:37'),
(33, 2, 'sdsd', '2015-02-28 11:28:49'),
(35, 2, 'My status test.', '2015-02-28 11:31:09'),
(36, 2, 'My status test.', '2015-02-28 11:31:19'),
(37, 2, 'tes', '2015-02-28 11:31:53'),
(38, 2, 'tes', '2015-02-28 11:33:44'),
(39, 2, 'Doing another day of dev.', '2015-02-28 11:34:50'),
(40, 2, 'A proper status, now the styling is somewhat fixed to see what happens to long strings of text.', '2015-02-28 11:46:58'),
(41, 2, 'pi 3.14159265359', '2015-03-01 15:44:59'),
(42, 2, 'Love life!', '2015-03-02 14:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`user_id` int(10) unsigned NOT NULL,
  `first_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `pass` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `user_level` int(4) unsigned NOT NULL DEFAULT '0',
  `active` char(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `registration_date` datetime NOT NULL,
  `is_rep` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_vip` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `rep_points` int(11) NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `pass`, `user_level`, `active`, `registration_date`, `is_rep`, `is_vip`, `rep_points`, `username`) VALUES
(1, 'matt', 'carr', 'weareevereti@gmail.com', '71665542ce4cadafef98bf50d8cefdf3b4935db6', 0, '8a19f5c606432e62fb07b9a3dcb4410a', '2015-01-13 13:53:43', 0, 0, 0, '1'),
(2, 'Matt', 'Carr', 'matt@evereti.com', '71665542ce4cadafef98bf50d8cefdf3b4935db6', 2600, NULL, '2015-01-13 14:08:07', 0, 0, 1700047030, 'matt'),
(3, 'james', 'walker', 'james@james.com', '71665542ce4cadafef98bf50d8cefdf3b4935db6', 0, '7d5e529d6e7f678a9f431084b7918ed8', '2015-01-13 17:36:00', 0, 0, 0, 'god'),
(4, 'dev', 'developer', 'dev@dev.com', '71665542ce4cadafef98bf50d8cefdf3b4935db6', 0, NULL, '2015-01-13 18:27:48', 1, 0, 17000, 'dev'),
(5, 'Jack', 'James', 'james@me.com', '71665542ce4cadafef98bf50d8cefdf3b4935db6', 0, 'fa9fb4c9e8d1ce0a521c35054e36793a', '2015-02-17 16:17:45', 0, 0, 0, ''),
(6, 'Jack', 'James', 'janne@hotmail.com', '71665542ce4cadafef98bf50d8cefdf3b4935db6', 0, 'e517558785533e4bd37dbbcb2aa3415c', '2015-02-17 16:19:10', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
`video_id` int(10) unsigned NOT NULL,
  `vimeo_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `video_title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `fk_object_id` int(10) NOT NULL,
  `fk_user_id` int(10) NOT NULL,
  `video_location` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `added` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `vimeo_id`, `video_title`, `fk_object_id`, `fk_user_id`, `video_location`, `added`) VALUES
(1, '83966577', 'SIROCCO', 0, 2, 'homepage', '2015-01-14 15:34:18'),
(2, '53493332', 'WONDERLAND', 0, 2, 'homepage', '2015-01-14 15:36:15'),
(3, '44258084', 'BOILING POINT', 0, 2, 'homepage', '2015-01-14 15:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `words`
--

CREATE TABLE `words` (
`word_id` tinyint(3) unsigned NOT NULL,
  `lang_id` tinyint(3) unsigned NOT NULL,
  `title` varchar(80) NOT NULL,
  `intro` tinytext NOT NULL,
  `home` varchar(30) NOT NULL,
  `forum_home` varchar(40) NOT NULL,
  `language` varchar(40) NOT NULL,
  `register` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `logout` varchar(30) NOT NULL,
  `new_thread` varchar(40) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `body` varchar(30) NOT NULL,
  `submit` varchar(30) NOT NULL,
  `posted_on` varchar(30) NOT NULL,
  `posted_by` varchar(30) NOT NULL,
  `replies` varchar(30) NOT NULL,
  `latest_reply` varchar(40) NOT NULL,
  `post_a_reply` varchar(40) NOT NULL,
  `news` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`word_id`, `lang_id`, `title`, `intro`, `home`, `forum_home`, `language`, `register`, `login`, `logout`, `new_thread`, `subject`, `body`, `submit`, `posted_on`, `posted_by`, `replies`, `latest_reply`, `post_a_reply`, `news`) VALUES
(1, 1, 'PHP and MySQL for Dynamic Web Sites: The Forum!', '<p>Welcome to our site.... please use the links above... blah, blah, blah.</p>\r\n<p>Welcome to our site....please use the links above...blah, blah, blah.</p>', 'Home', 'Forum Home', 'Language', 'Register', 'Login', 'Logout', 'New Thread', 'Subject', 'Body', 'Submit', 'Posted on', 'Posted by', 'Replies', 'Latest Reply', 'Post a Reply', ''),
(2, 21, '', 'Helllo blaaaa', 'Home', '', 'Language', '', '', '', '', '', '', 'Submit', '', '', '', '', '', 'NEWS'),
(3, 29, '', '', '', '', 'Sprak', '', '', '', '', '', '', 'Skicka', '', '', '', '', '', 'NYHETER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `facebook_likes`
--
ALTER TABLE `facebook_likes`
 ADD PRIMARY KEY (`facebook_like_id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
 ADD PRIMARY KEY (`relationship_id`), ADD KEY `fk_user_id` (`fk_user_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
 ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
 ADD PRIMARY KEY (`image_id`), ADD KEY `fk_gallery_id` (`fk_gallery_id`);

--
-- Indexes for table `guestlists`
--
ALTER TABLE `guestlists`
 ADD PRIMARY KEY (`guestlist_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
 ADD PRIMARY KEY (`lang_id`), ADD UNIQUE KEY `lang` (`lang`);

--
-- Indexes for table `master_log`
--
ALTER TABLE `master_log`
 ADD PRIMARY KEY (`object_id`), ADD KEY `remote_addr` (`remote_addr`);

--
-- Indexes for table `matchmaker`
--
ALTER TABLE `matchmaker`
 ADD PRIMARY KEY (`match_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`message_id`), ADD KEY `fk_user_id` (`fk_user_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
 ADD PRIMARY KEY (`offer_id`), ADD KEY `fk_user_id` (`fk_user_id`);

--
-- Indexes for table `order_contents`
--
ALTER TABLE `order_contents`
 ADD PRIMARY KEY (`oc_id`), ADD KEY `order_id` (`order_id`), ADD KEY `print_id` (`print_id`), ADD KEY `ship_date` (`ship_date`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`order_id`), ADD KEY `customer_id` (`customer_id`), ADD KEY `order_date` (`order_date`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
 ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
 ADD PRIMARY KEY (`profile_id`), ADD UNIQUE KEY `fk_user_id` (`fk_user_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
 ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`), ADD KEY `login` (`email`,`pass`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
 ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `words`
--
ALTER TABLE `words`
 ADD PRIMARY KEY (`word_id`), ADD UNIQUE KEY `lang_id` (`lang_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
MODIFY `event_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `facebook_likes`
--
ALTER TABLE `facebook_likes`
MODIFY `facebook_like_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
MODIFY `relationship_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
MODIFY `gallery_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
MODIFY `image_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `guestlists`
--
ALTER TABLE `guestlists`
MODIFY `guestlist_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
MODIFY `lang_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `master_log`
--
ALTER TABLE `master_log`
MODIFY `object_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `matchmaker`
--
ALTER TABLE `matchmaker`
MODIFY `match_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `message_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `news_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
MODIFY `offer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `order_contents`
--
ALTER TABLE `order_contents`
MODIFY `oc_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
MODIFY `page_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
MODIFY `tag_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `post_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
MODIFY `profile_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
MODIFY `video_id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `words`
--
ALTER TABLE `words`
MODIFY `word_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `friends`
--
ALTER TABLE `friends`
ADD CONSTRAINT `friends_ibfk_1` FOREIGN KEY (`fk_user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`fk_user_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
