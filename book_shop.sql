-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 07, 2014 at 01:22 PM
-- Server version: 5.0.37
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `book_shop`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `book_master`
-- 

CREATE TABLE `book_master` (
  `book_id` int(11) NOT NULL auto_increment,
  `book_name` varchar(60) NOT NULL,
  `book_type` varchar(60) NOT NULL,
  `book_price` varchar(60) NOT NULL,
  `discount` varchar(60) NOT NULL,
  `book_stock` varchar(60) NOT NULL,
  `book_writer` varchar(60) NOT NULL,
  `book_image` varchar(100) NOT NULL,
  PRIMARY KEY  (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `book_master`
-- 

INSERT INTO `book_master` (`book_id`, `book_name`, `book_type`, `book_price`, `discount`, `book_stock`, `book_writer`, `book_image`) VALUES 
(2, 'Let Us C', 'Computer Programming', '230', '20', '20', 'Jasbant Kanethker', 'book_images/259Let Us C_parent.jpg'),
(3, 'Easy C', 'Computer Programming', '180', '12', '30', 'Bala Guo Swami', 'book_images/628Easy C_full4.jpg'),
(4, 'PHP Expose', 'Web development', '260', '23', '12', 'Arindam Roy', 'book_images/202PHP Expose_wood010.jpg'),
(5, '.NET Expert', 'Web development', '460', '12', '34', 'Santanu Roy', 'book_images/976.NET Expert_error.jpg'),
(6, 'Hello Net Work', 'Networking', '890', '10', '45', 'Rituparna Roy', 'book_images/921Hello Net Work_holid020.jpg'),
(7, 'Linux Hacking', 'Hacking', '876', '36', '78', 'HW.Wasking Haswit', 'book_images/264Linux Hacking_Car-price-rise.jpg'),
(9, 'ABC', 'ABC', '345', '34', '23', 'ABC', 'book_images/437ABC_628Easy C_full4.jpg'),
(10, '', '', '', '', '', '', 'book_images/450_264Linux Hacking_Car-price-rise.jpg');

-- --------------------------------------------------------

-- 
-- Table structure for table `pay`
-- 

CREATE TABLE `pay` (
  `uid` int(11) NOT NULL auto_increment,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `add` varchar(100) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `dt` varchar(20) NOT NULL,
  `qty` varchar(10) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

-- 
-- Dumping data for table `pay`
-- 

INSERT INTO `pay` (`uid`, `name`, `email`, `phno`, `add`, `book_name`, `price`, `dt`, `qty`) VALUES 
(1, 'Arindam Roy', 'roy.arindam03@gmail.com', '9804883596', 'kolkata', 'Let Us C', '230', '01/05/14', '3'),
(2, 'Arindam Roy', 'roy.arindam03@gmail.com', '9804883596', 'kolkata', 'Easy C', '180', '01/05/14', '4'),
(3, 'Rituparna Roy', 'roytechnologysolution@gmail.com', '989898989', 'Kolkata', 'Easy C', '180', '01/05/14', '4'),
(4, 'Rituparna Roy', 'roytechnologysolution@gmail.com', '989898989', 'Kolkata', 'Let Us C', '230', '01/05/14', '2'),
(6, 'Me User', 'me@user.com', '9804883596', 'xxxxxxxxxxxxxx', 'PHP Expose', '260', '01/05/14', '3'),
(7, 'Me User', 'me@user.com', '9804883596', 'xxxxxxxxxxxxxx', 'Hello Net Work', '890', '01/05/14', '5'),
(8, 'Me User', 'me@user.com', '9804883596', 'xxxxxxxxxxxxxx', 'Easy C', '180', '01/05/14', '9'),
(9, 'Arindam Roy', 'rtsarindam@gmail.com', '787878787', 'kolkata', 'Hello Net Work', '890', '04/05/14', '4'),
(10, 'Arindam Roy', 'rtsarindam@gmail.com', '787878787', 'kolkata', 'PHP Expose', '260', '04/05/14', '5'),
(11, 'Kunal', 'kunal@gmail.com', '89898989', 'kolkata', 'Hello Net Work', '890', '04/05/14', '3'),
(12, 'Kunal', 'kunal@gmail.com', '89898989', 'kolkata', 'Easy C', '180', '04/05/14', '5'),
(13, 'Kunal', 'kunal@gmail.com', '89898989', 'kolkata', '.NET Expert', '460', '04/05/14', '6'),
(14, 'Subho', 'subho@gmail.com', '90909090', 'kolkata', 'PHP Expose', '260', '06/05/14', '4'),
(15, 'Subho', 'subho@gmail.com', '90909090', 'kolkata', 'Easy C', '180', '06/05/14', '2'),
(16, 'Arindam Roy', 'roy.ari@gmail.com', '89898989', 'kokkata', 'Easy C', '180', '06/05/14', '22'),
(17, 'Arindam Roy', 'roy.ari@gmail.com', '89898989', 'kokkata', 'PHP Expose', '260', '06/05/14', '5'),
(18, 'xyz', 'xyz.gh.bkm', '1234', 'lkgk', 'PHP Expose', '260', '06/05/14', '1'),
(19, '32yr76fg4jg3uigfi', '276fyu389r8yyh', '836ry49hfu', 'yfuewygutguiqwgtg', 'ABC', '345', '07/05/14', '1'),
(20, 'Arindam Roy', 'rtsarindam@gmail.com', '9804021274', 'Kolkata-150', 'ABC', '345', '07/05/14', '3'),
(21, 'Arindam Roy', 'rtsarindam@gmail.com', '9804021274', 'Kolkata-150', '.NET Expert', '460', '07/05/14', '4');

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `uid` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `add` varchar(200) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` (`uid`, `name`, `email`, `pwd`, `phno`, `add`) VALUES 
(1, 'Arindam Roy', 'rtsarindam@gmail.com', '123456', '9804021274', 'Kolkata-150');
