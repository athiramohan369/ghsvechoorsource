-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2016 at 04:25 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `albumname` varchar(300) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`albumname`, `description`, `image`) VALUES
('kjkkj', 'kjkjnkj', NULL),
('Alumni meet', '', NULL),
('Activities', '', 'DSC00012.JPG'),
('Activities', '', 'DSC00017.JPG'),
('Activities', '', 'DSC00018.JPG'),
('Activities', '', 'DSC00043.JPG'),
('Activities', '', 'DSC00051.JPG'),
('Activities', '', 'DSC00052.JPG'),
('Artworks by Reghunath Sir', 'jhsdkfjhkjsdfkajffflkajdaksdlkas', 'pic1.jpg'),
('nnnn', NULL, NULL),
('Artworks by Reghunath Sir', '', 'pic2.jpg'),
('Artworks by Reghunath Sir', '', 'pic4.jpg'),
('Artworks by Reghunath Sir', '', 'pic5.jpg'),
('Artworks by Reghunath Sir', '', 'pic3.jpg'),
('Artworks by Reghunath Sir', '', 'pic6.jpg'),
('Artworks by Reghunath Sir', '', 'pic7.jpg'),
('Artworks by Reghunath Sir', '', 'pic8.jpg'),
('Artworks by Reghunath Sir', '', 'pic9.jpg'),
('Artworks by Reghunath Sir', '', 'pic10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `uname` varchar(20) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `utype` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uname`, `password`, `utype`) VALUES
('admin', 'admin@123', 'admin'),
('teacher', 'teacher@123', 'teacher'),
('staff', 'staff@123', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `Sender` varchar(100) NOT NULL,
  `Date` datetime NOT NULL,
  `Message` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`Sender`, `Date`, `Message`) VALUES
('Meena', '2016-08-09 00:00:00', 'Class 10 A need new benches'),
('Swapna', '2016-08-28 00:00:00', 'Special class for class X on saturday'),
('P S Noorjihan', '2016-09-26 00:00:00', 'Evening class for class X students'),
('K S Mini', '2016-11-02 07:07:41', 'Special class');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `nid` varchar(50) NOT NULL,
  `title` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nid`, `title`, `description`, `image`, `status`) VALUES
('1', 'celebration', 'on september ', '', 'Show'),
('2', 'Special Class', 'Saturday will be a working day for class X students', '', 'Show'),
('3', 'Study Tour', 'This years tour is on  November 10', 'back.jpg', 'Show'),
('4', 'Industrial Visit', 'An Industrial visit is planned to VSSC, Trivandrum', '6478_373625132738653_528610767_n.jpg', 'Show');

-- --------------------------------------------------------

--
-- Table structure for table `principal`
--

CREATE TABLE IF NOT EXISTS `principal` (
  `name` varchar(100) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `doj` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `principal`
--

INSERT INTO `principal` (`name`, `hname`, `street`, `city`, `state`, `pin`, `dob`, `doj`, `email`, `phone`, `qualification`, `designation`, `photo`, `status`) VALUES
('P S Noorjihan', '', 'Alappuzha', 'Alappuzha', 'Kerala', '', '1968-05-30', '1997-06-23', 'noorjihannoordeen@gmail.com', '04772292827', 'BSc BEd', 'In-Charge', 'hm.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `pta`
--

CREATE TABLE IF NOT EXISTS `pta` (
  `desig` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `hname` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `pin` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pta`
--

INSERT INTO `pta` (`desig`, `name`, `hname`, `street`, `city`, `pin`, `email`, `phone`) VALUES
('President', 'T S Thankamani', '', '', '', '', '', '7878687687'),
('Vice President', 'Rajesh', '', '', '', '', '', '7777777'),
('PTA Member', 'Prakashan', '', '', '', '', '', '9747772798'),
('PTA Member', 'Renjith', '', '', '', '', '', '77777'),
('PTA Member', 'K C Jayakumar', '', '', '', '', '', '7777777777'),
('PTA Member', 'Jyothi', '', '', '', '', '', '9544081321'),
('PTA Member', 'Asha', '', '', '', '', '', '9847819963'),
('PTA Member', 'Sujatha', '', '', '', '', '', '9349939407'),
('PTA Member', 'Ramachandran', '', '', '', '', '', '7777777777'),
('PTA Member', 'Feeba', '', '', '', '', '', '9633643371'),
('PTA Member', 'Minimol', '', '', '', '', '', '9747243738'),
('PTA Member', 'Jisha', '', '', '', '', '', '8606747983');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `num` varchar(200) NOT NULL,
  `teacher` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `day` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`num`, `teacher`, `message`, `day`) VALUES
('1', 'P S Noorjihan', 'bjh', '2016-11-01 13:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `admno` varchar(20) NOT NULL,
  `name` varchar(70) DEFAULT NULL,
  `Class` varchar(10) DEFAULT NULL,
  `division` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` varchar(20) NOT NULL,
  `doadm` varchar(20) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `hname` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(20) NOT NULL,
  `pin` varchar(50) DEFAULT NULL,
  `fathersname` varchar(50) DEFAULT NULL,
  `mothersname` varchar(50) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `aadharno` varchar(300) NOT NULL,
  `email` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`admno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`admno`, `name`, `Class`, `division`, `gender`, `dob`, `doadm`, `bloodgroup`, `hname`, `street`, `city`, `state`, `pin`, `fathersname`, `mothersname`, `phone`, `aadharno`, `email`, `photo`) VALUES
('113', 'Anju ', '4', 'A', 'female', '2001-12-02', '2016-05-18', 'A+', 'Anju H', 'SL Puram', 'Alappuzha', 'Kerala', '686607', 'Kumar P', 'Ammu ', '9547896545', '', 'anju@gm.com', '113.png'),
('112', 'Anu', '1', 'A', 'female', '', '', 'A+', 'Green H', '', '', 'Kerala', '', 'Appu', 'Ammu', '2545877', '', 'anu@gm.com', '112.png'),
('102', 'Arya Mohan', '9', 'D', 'female', '1995-04-25', '2016-09-13', 'B+', 'Pazhanilathil', 'Thalayazham PO ', 'Vaikom', 'Kerala', '686607', 'C Mohanan', 'Binu Mohan', '9447569084', '', 'aryamohan333@gmail.c', '102.png'),
('145', 'Devan Unni', '1', 'B', 'male', '2010-06-08', '2016-07-01', 'B+', 'Green House', 'Kottayam', 'Kottayam', 'Kerala', '687777', 'Stalin', 'Soumya', '9545555555', '933222222222', 'munni333@gmail.com', '145.png'),
('222', 'Naina Mohan', '2', 'B', 'female', '', '', 'A+', 'Green Villa', 'Kottayam', 'Kottayam', 'Kerala', '686655', 'K G Mohanan', 'Mini', '9698949263', '1.15545E+11', 'naina@gmail.com', ''),
('221', 'Aparna V', '1', 'A', 'female', '', '', 'A+', 'Rose Villa', 'Kottayam', 'Kottayam', 'Kerala', '686655', 'Varun Kumar', 'Lathika', '9598979699', '114485678954', 'aparna@gmail.com', '221.png');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `tid` int(20) NOT NULL,
  `name` varchar(70) DEFAULT NULL,
  `hname` varchar(50) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(20) NOT NULL,
  `pin` int(50) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `doj` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `designation` varchar(20) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `name`, `hname`, `street`, `city`, `state`, `pin`, `dob`, `doj`, `email`, `phone`, `qualification`, `designation`, `photo`, `status`) VALUES
(101, 'P S Noorjihan', '', '', 'Alappuzha', '', 0, '1968-05-30', '1997-06-23', 'noorjihannoordeen@gmail.com', '0477229282', 'BSc BEd', 'HSA Mathematics', 'blnk.jpeg', 'Active'),
(102, 'P R Jayasree', '', 'Ullala', 'Vaikom', 'Kerala', 0, '1997-03-22', '1992-06-01', '', '0482922981', 'BA BEd', 'HSA Malayalam', 'blnk.jpeg', 'Active'),
(103, 'Sreerenjith G', '', 'Vadayar', 'Vaikom', 'Kerala', 0, '1971-03-03', '2004-08-04', '', '8281712098', 'BSc BEd', 'HSA (PS)', 'blnk.jpeg', 'Active'),
(104, 'K S Vijayakumar', '', 'SL Puram', 'Alappuzha', 'Kerala', 0, '1974-05-10', '2007-07-02', '', '04782186061', 'BA BEd', 'HSA Malayalam', 'blnk.jpeg', 'Active'),
(105, 'Lizmol Joseph', '', 'Kalathippadi', 'Kottayam', 'Kerala', 0, '1975-10-16', '2008-09-22', 'lizjojenmj@gmail.com', '9447909904', 'MA BEd', 'HSA English', 'blnk.jpeg', 'Active'),
(106, 'Swapna G', '', 'Onamthuruth', 'Kottayam', 'Kerala', 0, '1978-05-04', '2010-06-21', '', '9645901194', 'MA BEd', 'HSA Hindi', 'blnk.jpeg', 'Active'),
(107, 'V R Reghunath', '', 'Alappuzha', 'Alappuzha', 'Kerala', 0, '1961-05-30', '1986-12-05', 'reghunathvr61@gmail.com', '9946609053', 'Diploma in Drawing', 'Drawing Teacher', 'blnk.jpeg', 'Active'),
(108, 'P P Leela', '', 'Edayazham', 'Vaikom', 'Kerala', 0, '1968-03-04', '1994-06-06', '', '9495481448', 'Certificate in Physical Education Training', 'Physical Education', 'blnk.jpeg', 'Active'),
(109, 'K S Mini', '', 'Vechoor', 'Vaikom', 'Kerala', 0, '1969-05-29', '1999-07-31', '', '9446942004', 'BSc BEd', 'P D teacher', 'blnk.jpeg', 'Active'),
(110, 'K P Girija', '', 'Vaikom', 'Vaikom', 'Kerala', 0, '1964-05-15', '1997-08-14', '', '9895793353', 'BA BEd', 'P D teacher', 'blnk.jpeg', 'Active'),
(111, 'Tessymol P I', '', '', 'Cherthala', 'Kerala', 0, '1976-05-22', '2003-09-26', '', '9495787673', 'TTC', 'P D teacher', 'blnk.jpeg', 'Active'),
(112, 'Rani K Mathews', '', 'Pala', 'Kottayam', 'Kerala', 0, '1969-04-28', '2005-11-29', '', '9947159144', 'TTC', 'P D teacher', 'blnk.jpeg', 'Active'),
(113, 'C V Praseena ', '', 'T V Puram', 'Vaikom', 'Kerala', 0, '1984-05-02', '2007-02-15', '', '9497665292', 'TTC', 'LPSA', 'blnk.jpeg', 'Active'),
(114, 'Anilkumar P K', '', 'Kothanelloor', '', 'Kerala', 0, '1963-05-24', '1992-06-19', '', '9656505600', 'TTC', 'P D teacher', 'blnk.jpeg', 'Active');
