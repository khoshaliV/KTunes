-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2015 at 01:41 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forum_cw`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
`answerId` int(11) NOT NULL,
  `userId` varchar(100) DEFAULT '0',
  `questionId` varchar(100) DEFAULT '0',
  `answer` varchar(100) DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answerId`, `userId`, `questionId`, `answer`) VALUES
(1, ' root', ' 1', '\r\n                '),
(2, ' root', ' 1', 'feafasa\r\n                '),
(3, ' root', ' 2', 'gtgtg\r\n                ');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('55c984d825a19cb4cd16e1c8bf240fc5', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421087247, ''),
('787916ab4c537d04d5d189bd0be2dea5', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421086304, ''),
('d715d94d388ff05ee1bb38349c24405d', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421098190, ''),
('e67794babc144f84d9652abe18af346f', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421085627, ''),
('f3c1485d28da7c5e9ae3ba5dca6b3700', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36', 1421091363, '');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE IF NOT EXISTS `logins` (
  `name` varchar(500) NOT NULL,
  `session_id` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`name`, `session_id`) VALUES
('kami', 'b812ee634cd3f53acaa1c7d33c88793f'),
('kami', 'e637145f80b1c61891ce321956592be4'),
('root', '353a63de03c18763af73d1b88d70183a'),
('root', '7115c44ec8958e9a16e48b9b8aa7d993'),
('root', '7115c44ec8958e9a16e48b9b8aa7d993'),
('root', 'b931ccb7cefff7b9358e6f1220a48057'),
('root', 'b931ccb7cefff7b9358e6f1220a48057'),
('root', 'cc6cb63f290538dc1bb57f97ed3fe71a'),
('root', 'cc6cb63f290538dc1bb57f97ed3fe71a'),
('root', 'd88a851588c036310f3a613d853d6ba4'),
('root', 'd88a851588c036310f3a613d853d6ba4'),
('root', 'd88a851588c036310f3a613d853d6ba4'),
('root', '3d947cdedc143942a6107394acdc5f67'),
('root', '3d947cdedc143942a6107394acdc5f67'),
('root', '3899efb5d9252f34ff0d321e3bfb4cf3'),
('root', '5aa77ae8d5a3560b05c7353ab5aacaa5'),
('123', '5aa77ae8d5a3560b05c7353ab5aacaa5'),
('root', 'fb2733e7125a5f6bb255e63606565e2f'),
('root', 'fb2733e7125a5f6bb255e63606565e2f'),
('root', 'b08d8551d902e81b48d4277f8880bb8c'),
('root', 'f15eb18a94ff9e3667484c3de57a337a'),
('root', 'f15eb18a94ff9e3667484c3de57a337a'),
('root', '92c67aad2fe3188df22827cd78935363'),
('root', '92c67aad2fe3188df22827cd78935363'),
('root', '0bbdc9005a097f81668d746769f8a80c'),
('root', 'c35052de57789e56a95acf79bfe66b88'),
('root', 'c35052de57789e56a95acf79bfe66b88'),
('root', 'd06cf1ae13a02cdb47262565e0265311'),
('root', 'd06cf1ae13a02cdb47262565e0265311'),
('root', 'aeafe828f704fe152196bd20037b92d3'),
('root', 'aeafe828f704fe152196bd20037b92d3'),
('root', 'c8f743d339fd2687d128cd37f27b0ead'),
('root', 'c8f743d339fd2687d128cd37f27b0ead'),
('root', '70b195fa5314fa43734bb6357c1c2967'),
('root', '0df11c3446cb74d4b1c25313e7520fc7'),
('root', '4c6231164d21684cfe846a00e63b1c15'),
('root', '55c984d825a19cb4cd16e1c8bf240fc5'),
('root', '0a5ea7acab4c7cc4fc137fa046219313'),
('root', '0a5ea7acab4c7cc4fc137fa046219313'),
('root', '0a5ea7acab4c7cc4fc137fa046219313'),
('root', 'f9c8b73ddd3a5427eae1775ec74f4028'),
('root', 'd9772599ca23051c861454cb03b56b80'),
('root', 'd9772599ca23051c861454cb03b56b80'),
('root', '2fa6f0b1873adbf3339dbdeeede46f6b'),
('root', '2fa6f0b1873adbf3339dbdeeede46f6b'),
('root', '2fa6f0b1873adbf3339dbdeeede46f6b'),
('root', '459b1948cfcc88e1e973b45a85e10892'),
('root', 'f3c1485d28da7c5e9ae3ba5dca6b3700'),
('root', '2c7389b971852c3b30f77dff24e6a21e'),
('root', '2bf6f43cd22ef9510393ceecaf43a471'),
('root', 'efac64f9f19ad51e1c910e1a076ca853'),
('root', 'df51118e2121b12d3137080dfec663a5'),
('root', 'df51118e2121b12d3137080dfec663a5');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
`questionID` int(12) NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `title` varchar(50) NOT NULL,
  `sum` varchar(200) NOT NULL,
  `likes` int(12) NOT NULL,
  `userID` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`questionID`, `keyword`, `category`, `title`, `sum`, `likes`, `userID`) VALUES
(1, 'pin', 'Contemporary', 'pins are good', 'music tray', -1, 'root'),
(2, 'Sample Question', 'Classic', 'This is a simple description for a question', 'tag1 tag2 tag3 lastTag', 1, 'root'),
(3, 'ewrwr', 'Classic', 'rewrwwe', 'tags', 0, 'root');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `tags` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Salt` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `password`, `Salt`) VALUES
('jim', '123', '7e74e61e040f068072069077313f8348c94b1de8', '52677edc1869e47984e4'),
('de', 'abc', '59578062b22651ff1d96f823fb9a4e0a5b32109b', '1fd949061e80ce3cd9a6'),
('kami', 'kami', '7fc45f29c0f9a49cd92a56d740dde5a2f45369df', 'e5fdcd3271133a46d197'),
('Khoshali', 'root', '971bfd35b6965484d8da037ba90cc5b5409a716e', '78e05294ab720f454182'),
('Khoshali', 'test', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'd1cdb7ff284237579155ea'),
('Khoshali', 'usr', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2dfab469547407055e2476');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
 ADD PRIMARY KEY (`answerId`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
 ADD PRIMARY KEY (`questionID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
MODIFY `answerId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
MODIFY `questionID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
