-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 26, 2019 at 03:22 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(10) NOT NULL auto_increment,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `uname` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `uname`, `password`, `email`, `country`, `gender`, `dob`) VALUES
(2, 'pooja', 'sharma', 'pooja sharma', '123456', 'pooja12@gmail.com', 'Canda', 'female', '23/12/1999'),
(3, 'pooja', 'sadfads', 'status', 'asdfads', 'AshleySears@gmail.com', 'Canda', 'asdf', 'asdfdsf'),
(4, 'priya', 'mahawar', 'priya mahawar', '12345', 'priyamaha12@gmail.com', 'India', 'female', '08/03/1996');
