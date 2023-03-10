-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2023 at 12:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fruitful_well`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_article` int(11) NOT NULL,
  `article_title` varchar(100) NOT NULL,
  `article_author` varchar(100) NOT NULL,
  `cover_image` varchar(100) NOT NULL,
  `article_content` text NOT NULL,
  `date_post` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_article`, `article_title`, `article_author`, `cover_image`, `article_content`, `date_post`) VALUES
(1, 'ff33', '334rr545', 'eerdsww', 'weeee5433', '2021-01-19 00:00:00'),
(2, 'Hello', 'admin123', 'default.png', 'Hello world, hello world', '2021-01-31 14:56:39'),
(3, 'Hello', 'admin123', 'default.png', 'Hello world, hello world', '2021-01-31 14:57:57'),
(4, 'new article', 'moses', 'default.png', 'Hello world', '2021-01-31 15:05:21'),
(5, 'Hello', 'admin123', 'C:\\fakepath\\1 edited.jpg', 'www', '2021-02-02 08:12:48'),
(6, 'Hello', 'admin123', 'C:\\fakepath\\1 edited.jpg', 'ssss', '2021-02-02 08:13:21'),
(7, 'Hello', 'admin123', 'C:\\fakepath\\104626279_883888642124471_6650578571932409402_n.jpg', 'sss', '2021-02-02 08:13:34'),
(8, 'We are together', 'Jacques Baeni', 'C:\\fakepath\\104626279_883888642124471_6650578571932409402_n.jpg', 'sss', '2021-02-02 08:13:52'),
(9, 'Second composed article', 'Cedrick K', 'C:\\fakepath\\1 edited.jpg', 'Hetertggsggsgsg', '2021-02-02 08:15:10'),
(10, 'We are the world', 'zzz', 'C:\\fakepath\\104580934_883889085457760_1730235287395134272_n.jpg', 'zzzz', '2021-02-02 08:16:49'),
(11, 'Good article', 'Moses', 'cover0202202109351785581671234.jpg', 'Here i am a good article', '2021-02-02 10:35:18'),
(12, 'Hello', 'Cedrick K', 'cover0202202110055497065585308.jpg', 'vvvv', '2021-02-02 11:05:54'),
(13, 'Yes ', 'Jacques Baeni', 'cover0202202110164819290424708.jpg', 'IT WORKS', '2021-02-02 11:16:48'),
(14, 'Hello', 'admin123', 'default_avatar.jpg', 'yyeyey', '2021-02-02 11:41:30'),
(15, 'New article', 'Zannif', 'cover0502202116113028198689694.jpg', 'Hello world', '2021-02-05 17:11:30'),
(16, 'New blog', 'Cedrick K', 'cover0208202106571784758787747.jpg', 'rrrrrtt', '2021-08-02 06:57:17'),
(17, 'New demonstration garden in Ntcheu', 'Moses', 'default.jpg', '<p>The new demonstration garden has been implemented in Ntcheu. This is a great news to all of us</p><p>&nbsp;</p><blockquote><p><strong>This is a great improvement&nbsp;</strong></p></blockquote><p>&nbsp;</p><figure class=\"table\"><table><tbody><tr><td>Name</td><td>Surname</td><td>Age</td><td>Amount</td><td>Price</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><p>&nbsp;</p>', '2021-09-05 15:56:06'),
(18, 'one', 'two', 'default_avatar.jpg', 'Hello', '2022-03-30 17:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `priority`, `avatar`) VALUES
(1, 'admin', 'admin123', NULL, 1, 'default_avatar.jpg'),
(2, 'Moses', 'Ufanuzi2020', 'mosesprodt@gmail.com', 2, 'moses_2020.jpg'),
(3, 'admin', 'eee', 'mosesprodt@gmail.com', 2, 'avatar0909202016382378618146339.jpg'),
(4, 'Emmanuel Rusaka', 'emma', 'emmanuel@gmail.com', 2, 'avatar0909202016395571173362315.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
