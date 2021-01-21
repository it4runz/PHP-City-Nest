-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2019 at 12:45 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pghouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE IF NOT EXISTS `admin_log` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`aid`, `firstname`, `password`, `username`) VALUES
(1, 'dhyey ', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `applyforhome`
--

CREATE TABLE IF NOT EXISTS `applyforhome` (
  `apid` int(11) NOT NULL AUTO_INCREMENT,
  `pgid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `appdate` varchar(255) NOT NULL,
  PRIMARY KEY (`apid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `applyforhome`
--

INSERT INTO `applyforhome` (`apid`, `pgid`, `uid`, `name`, `mobile`, `email`, `address`, `appdate`) VALUES
(1, 16, 2, 'jigar Sodha', '8889898989', 'jigarsodha@gmail.com', 'Sun Milan co. opp. housing Soc. High tension road, opp. Indian oil petrol pump, Shubhanpura, Vadodara, Gujarat', '2019-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `fdt` date NOT NULL,
  `fdetail` varchar(255) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `uid`, `fdt`, `fdetail`) VALUES
(1, 2, '2019-04-16', 'test message\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `p_g_house`
--

CREATE TABLE IF NOT EXISTS `p_g_house` (
  `houseid` int(11) NOT NULL AUTO_INCREMENT,
  `hdescription` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `hfloor` varchar(30) NOT NULL,
  `hrent` varchar(20) NOT NULL,
  `himg` varchar(255) NOT NULL,
  PRIMARY KEY (`houseid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `p_g_house`
--

INSERT INTO `p_g_house` (`houseid`, `hdescription`, `address`, `hfloor`, `hrent`, `himg`) VALUES
(15, 'Who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultrices auctor malesuada. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi sit amet nunc rhoncus, vulputate odio sed, pretium eros. Nam elementum gravida lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultrices auctor malesuada. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi sit amet nunc rhoncus, vulputate odio sed, pretium eros. Nam elementum gravida lorem. Quisque sit amet tellus in eros feugiat aliquet. Quisque dictum tellus eu nibh tristique, eu volutpat neque suscipit. Morbi sit amet nunc tellus. Fusce sed mauris ex. Aenean venenatis nulla eu lectus pellentesque, et maximus turpis vestibulum. Fusce consectetur, ex non rhoncus ultrices, velit ligula scelerisque mi, ut scelerisque ante enim vitae ligula. Suspendisse cursus leo iaculis, auctor dolor et, faucibus dui. Donec eget nulla elementum tortor ultricies elementum. Mauris volutpat, dui in pharetra porta, ligula felis dapibus mi, id vehicula leo mi ac leo. Duis blandit malesuada nisi vel lacinia. Curabitur euismod ac lacus at ultricies.Quisque sit amet tellus in eros feugiat aliquet. Quisque dictum tellus eu nibh tristique, eu volutpat neque suscipit. Morbi sit amet nunc tellus. Fusce sed mauris ex. Aenean venenatis nulla eu lectus pellentesque, et maximus turpis vestibulum. Fusce consectetur, ex non rhoncus ultrices, velit ligula scelerisque mi, ut scelerisque ante enim vitae ligula. Suspendisse cursus leo iaculis, auctor dolor et, faucibus dui. Donec eget nulla elementum tortor ultricies elementum. Mauris volutpat, dui in pharetra porta, ligula felis dapibus mi, id vehicula leo mi ac leo. Duis blandit malesuada nisi vel lacinia. Curabitur euismod ac lacus at ultricies.', 'Sun Milan co. opp. housing Soc. High tension road, opp. Indian oil petrol pump, Shubhanpura, Vadodar', '1', '20000', 'upload/1.jpg'),
(16, 'Variations of passages of sed will sedavailable, but ut seds the have suffered alteration in some form, by the labours are believable.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultrices auctor malesuada. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi sit amet nunc rhoncus, vulputate odio sed, pretium eros. Nam elementum gravida lorem. Quisque sit amet tellus in eros feugiat aliquet. Quisque dictum tellus eu nibh tristique, eu volutpat neque suscipit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ultrices auctor malesuada. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi sit amet nunc rhoncus, vulputate odio sed, pretium eros. Nam elementum gravida lorem. Quisque sit amet tellus in eros feugiat aliquet. Quisque dictum tellus eu nibh tristique, eu volutpat neque suscipit. Morbi sit amet nunc tellus. Fusce sed mauris ex. Aenean venenatis nulla eu lectus pellentesque, et maximus turpis vestibulum. Fusce consectetur, ex non rhoncus ultrices, velit ligula scelerisque mi, ut scelerisque ante enim vitae ligula. Suspendisse cursus leo iaculis, auctor dolor et, faucibus dui. Donec eget nulla elementum tortor ultricies elementum. Mauris volutpat, dui in pharetra porta, ligula felis dapibus mi, id vehicula leo mi ac leo. Duis blandit malesuada nisi vel lacinia. Curabitur euismod ac lacus at ultricies. Morbi sit amet nunc tellus. Fusce sed mauris ex. Aenean venenatis nulla eu lectus pellentesque, et maximus turpis vestibulum. Fusce consectetur, ex non rhoncus ultrices, velit ligula scelerisque mi, ut scelerisque ante enim vitae ligula. Suspendisse cursus leo iaculis, auctor dolor et, faucibus dui. Donec eget nulla elementum tortor ultricies elementum. Mauris volutpat, dui in pharetra porta, ligula felis dapibus mi, id vehicula leo mi ac leo. Duis blandit malesuada nisi vel lacinia. Curabitur euismod ac lacus at ultricies.', '1025, kailashdham soc. ,\r\nLakshmipura road, Gorwa, Vadodara.', '1', '15000', 'upload/3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uname` varchar(75) NOT NULL,
  `upwd` varchar(20) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `ucontact` varchar(12) NOT NULL,
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `upwd`, `uemail`, `ucontact`, `uid`) VALUES
('dhyey', '7435069833', 'dhyey@gmail.com', '1234567890', 1),
('Divyang Sodha', '123', 'divyangsodha.2330@gmail.com', '9725056044', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
