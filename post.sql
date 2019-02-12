-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2019 at 01:48 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post`
--

-- --------------------------------------------------------

--
-- Table structure for table `posttable`
--

CREATE TABLE `posttable` (
  `postid` int(5) NOT NULL,
  `post_title` varchar(1000) NOT NULL,
  `post_intro` varchar(2000) NOT NULL,
  `post_desc` varchar(10000) NOT NULL,
  `post_author` varchar(500) NOT NULL,
  `post_img` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posttable`
--

INSERT INTO `posttable` (`postid`, `post_title`, `post_intro`, `post_desc`, `post_author`, `post_img`) VALUES
(7, 'textarea testing ', 'this is intro of the post', 'this is  a new updated discription', '226', 'https://image.winudf.com/v2/image/Y29tLkdhbGF4eUx3cC5UZWNobm8wNl9zY3JlZW5fMV85OWJxNDd1bw/screen-1.jpg?h=800&fakeurl=1&type=.jpg'),
(8, 'new post', 'this is intro of the post', 'some description', '225', 'http://fossbytes.com/wp-content/uploads/2016/02/learn-to-code-what-is-programming.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posttable`
--
ALTER TABLE `posttable`
  ADD PRIMARY KEY (`postid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posttable`
--
ALTER TABLE `posttable`
  MODIFY `postid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
