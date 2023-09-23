-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 12:25 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_text`
--

CREATE TABLE `about_text` (
  `id` int(11) NOT NULL,
  `text` varchar(5000) NOT NULL,
  `img1` varchar(500) NOT NULL,
  `img2` varchar(500) NOT NULL,
  `img3` varchar(500) NOT NULL,
  `img4` varchar(500) NOT NULL,
  `img5` varchar(500) NOT NULL,
  `img6` varchar(500) NOT NULL,
  `img7` varchar(500) NOT NULL,
  `img8` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_text`
--

INSERT INTO `about_text` (`id`, `text`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`) VALUES
(1, '<div class=\"col-md-12\" style=\"text-align: justify;\">\r\n<h3 style=\"text-align: justify; line-height: 1;\"><span style=\"font-family: tahoma, arial, helvetica, sans-serif; font-size: 18pt;\">Introduction:</span></h3>\r\n<p style=\"text-align: justify; line-height: 2;\"><span style=\"font-family: tahoma, arial, helvetica, sans-serif; font-size: 14pt;\">Xtreme Fitness is a web application used by a particular gym. Xtreme Fitness allows the customers to select the fitness activity which they are interested to do and apply the membership via a website and perform in the gym. The User can look their profile about the activity which is selected and even tell about its personal and health information.</span></p>\r\n<p style=\"text-align: justify; line-height: 1;\">&nbsp;</p>\r\n<h3 style=\"text-align: justify; line-height: 1;\"><span style=\"font-family: tahoma, arial, helvetica, sans-serif; font-size: 18pt;\">Objectives:</span></h3>\r\n<p style=\"text-align: justify; line-height: 2;\"><span style=\"font-family: tahoma, arial, helvetica, sans-serif; font-size: 14pt;\">The main objective of Xtreme Fitness is to provide the customers an another option for choosing exercise or any other fitness activities applying membership via web application in order to perform at gym rather than visiting or making phone call.</span></p>\r\n<p style=\"text-align: justify; line-height: 1;\">&nbsp;</p>\r\n<h3 style=\"text-align: justify; line-height: 1;\"><span style=\"font-family: tahoma, arial, helvetica, sans-serif; font-size: 18pt;\">Opening Hours:</span></h3>\r\n<table style=\"border-collapse: collapse; width: 99.9884%;\" border=\"1\"><colgroup><col style=\"width: 25.0261%;\"><col style=\"width: 25.0261%;\"><col style=\"width: 25.0261%;\"><col style=\"width: 25.0261%;\"></colgroup>\r\n<tbody>\r\n<tr>\r\n<td style=\"line-height: 2;\"><span style=\"font-family: tahoma, arial, helvetica, sans-serif; font-size: 14pt;\">Monday 7 AM&ndash;11:55 PM</span></td>\r\n<td style=\"line-height: 2;\"><span style=\"font-family: tahoma, arial, helvetica, sans-serif; font-size: 14pt;\">Tuesday 7 AM&ndash;11:55 PM</span></td>\r\n<td style=\"line-height: 2;\"><span style=\"font-family: tahoma, arial, helvetica, sans-serif; font-size: 14pt;\">Wednesday 7 AM&ndash;11:55 PM</span></td>\r\n<td style=\"line-height: 2;\"><span style=\"font-family: tahoma, arial, helvetica, sans-serif; font-size: 14pt;\">Thursday 7 AM&ndash;11:55 PM</span></td>\r\n</tr>\r\n<tr>\r\n<td style=\"line-height: 2;\"><span style=\"font-family: tahoma, arial, helvetica, sans-serif; font-size: 14pt;\">Friday 7 AM&ndash;11:55 PM</span></td>\r\n<td style=\"line-height: 2;\"><span style=\"font-family: tahoma, arial, helvetica, sans-serif; font-size: 14pt;\">Saturday 8 AM&ndash;11:55 PM</span></td>\r\n<td style=\"line-height: 2;\"><span style=\"font-family: tahoma, arial, helvetica, sans-serif; font-size: 14pt;\">Sunday 8 AM&ndash;11:55 PM</span></td>\r\n<td style=\"line-height: 2;\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: justify;\">&nbsp;</p>\r\n</div>', 'eximg/Gym Photo 1.jpg', 'eximg/Gym Photo 3.jpg', 'eximg/treadmill.jpg', 'eximg/skipping.jpg', 'eximg/squatting.jpg', 'eximg/dumbelling.jpg', 'eximg/gyming1.jpg', 'eximg/plank.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `number` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `subject`, `message`) VALUES
(328, 'Hammad Shah', 'hammad@taxhelpline.com', '03092372779', 'Checking', 'I am just checking the website form');

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `text` mediumtext NOT NULL,
  `img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`id`, `name`, `text`, `img`) VALUES
(13, 'Yoga', '<p style=\"text-align: justify;\">The sport or activity of lifting barbells or other heavy weights. There are two standards lifts in modern weightlifting: the single-movement lift from floor to extended position, and the two-movement lift from floor to shoulder position, and from shoulders to extended position.</p>', 'eximg/squatting.jpg'),
(14, 'Zumba Danace', '<p>The sport or activity of lifting barbells or other heavy weights. There are two standards lifts in modern weightlifting: the single-movement lift from floor to extended position, and the two-movement lift from floor to shoulder position, and from shoulders to extended position.</p>', 'eximg/Gym Photo 1.jpg'),
(15, 'Weight Traning', '<p>The sport or activity of lifting barbells or other heavy weights. There are two standards lifts in modern weightlifting: the single-movement lift from floor to extended position, and the two-movement lift from floor to shoulder position, and from shoulders to extended position.</p>', 'eximg/squatting.jpg'),
(16, 'Calisthenics', '<p>The sport or activity of lifting barbells or other heavy weights. There are two standards lifts in modern weightlifting: the single-movement lift from floor to extended position, and the two-movement lift from floor to shoulder position, and from shoulders to extended position.</p>', 'eximg/Gym Photo 2.jpg'),
(17, 'Crossfit', '<p>The sport or activity of lifting barbells or other heavy weights. There are two standards lifts in modern weightlifting: the single-movement lift from floor to extended position, and the two-movement lift from floor to shoulder position, and from shoulders to extended position.</p>', 'eximg/dumbelling.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `exercise_time`
--

CREATE TABLE `exercise_time` (
  `id` int(11) NOT NULL,
  `dtime` varchar(150) NOT NULL,
  `exercise_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exercise_time`
--

INSERT INTO `exercise_time` (`id`, `dtime`, `exercise_id`) VALUES
(8, 'Mond-Sun 08:30 AM', 13),
(9, 'Mond-Sun 10:30 AM', 13),
(10, 'Mond-Sun 12:00 PM', 13),
(11, 'Mond-Sun 08:30 AM', 14),
(12, 'Mond-Sun 10:30 AM', 14),
(13, 'Mond-Sun 12:00 PM', 14),
(14, 'Mond-Sun 08:30 AM', 15),
(15, 'Mond-Sun 10:30 AM', 15),
(16, 'Mond-Sun 12:00 PM', 15),
(17, 'Mond-Sun 08:30 AM', 16),
(18, 'Mond-Sun 10:30 AM', 16),
(19, 'Mond-Sun 12:00 PM', 16),
(20, 'Mond-Sun 08:30 AM', 17),
(21, 'Mond-Sun 10:30 AM', 17),
(22, 'Mond-Sun 12:00 PM', 17);

-- --------------------------------------------------------

--
-- Table structure for table `fit`
--

CREATE TABLE `fit` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `sname` varchar(150) NOT NULL,
  `card` varchar(150) NOT NULL,
  `cvv` varchar(150) NOT NULL,
  `exp` varchar(150) NOT NULL,
  `bill` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `intensity`
--

CREATE TABLE `intensity` (
  `id` int(11) NOT NULL,
  `added` varchar(150) NOT NULL,
  `exercise_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `intensity`
--

INSERT INTO `intensity` (`id`, `added`, `exercise_id`) VALUES
(7, 'Light Weight', 13),
(8, 'Moderate Weight', 13),
(9, 'Heavy Weight', 13),
(10, 'Light Weight', 14),
(11, 'Moderate Weight', 14),
(12, 'Heavy Weight', 14),
(13, 'Light Weight', 15),
(14, 'Moderate Weight', 15),
(15, 'Heavy Weight', 15),
(16, 'Light Weight', 16),
(17, 'Moderate Weight', 16),
(18, 'Heavy Weight', 16),
(19, 'Light Weight', 17),
(20, 'Moderate Weight', 17),
(21, 'Heavy Weight', 17);

-- --------------------------------------------------------

--
-- Table structure for table `member_pro`
--

CREATE TABLE `member_pro` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `month` varchar(200) NOT NULL,
  `price` varchar(150) NOT NULL,
  `text` varchar(150) NOT NULL,
  `uploadin` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member_pro`
--

INSERT INTO `member_pro` (`id`, `title`, `img`, `month`, `price`, `text`, `uploadin`) VALUES
(30, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]'),
(31, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]'),
(33, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]'),
(34, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]'),
(35, '[value-2]', '[value-3]', '[value-4]', '[value-5]', '[value-6]', '[value-7]'),
(42, '1 Month Membership', 'special/Gym Photo 1.jpg', '', 'Price: 1500 Baht', 'Applicable to all fitness activity', 'Membership'),
(43, '3 Months Membership', 'special/squatting.jpg', '', 'Price: 3900 Baht', 'Applicable to all fitness activity', 'Membership'),
(44, '6 Month Membership', 'special/dumbelling.jpg', '', 'Price: 6900 Baht', 'Applicable to all fitness activity', 'Membership'),
(45, 'Special Promotion (Plan-1)', 'special/squatting.jpg', ' 1 Month', 'Price: 1300 Baht', 'Applicable to all fitness activity', 'Special'),
(46, 'Special Promotion (Plan-2)', 'special/Gym Photo 1.jpg', '3 Months', 'Price: 3300 Baht', 'Applicable to all fitness activity', 'Special'),
(47, 'Special Promotion (Plan-3)', 'special/dumbelling.jpg', '6 Months', 'Price: 6000 Baht', 'Applicable to all fitness activity', 'Special'),
(48, 'Student Promotion (Plan-1)', 'special/treadmill.jpg', '1 Month', 'Price: 1100 Baht', 'Applicable to all fitness activity', 'Student'),
(49, 'Student Promotion (Plan-2)', 'special/Gym Photo 2.jpg', '3 Months', 'Price: 3000 Baht', 'Applicable to all fitness activity', 'Student'),
(50, 'Student Promotion (Plan-3)', 'special/squatting.jpg', '6 Months', 'Price: 6000 Baht', 'Applicable to all fitness activity', 'Student'),
(51, 'Senior Promotion (Plan-1)', 'special/dumbelling.jpg', ' 1 Month', 'Price: 1100 Baht', 'Applicable to all fitness activity', 'Senior'),
(52, 'Senior Promotion (Plan-2)', 'special/squatting.jpg', ' 3 Months', 'Price: 3300 Baht', 'Applicable to all fitness activity', 'Senior'),
(53, 'Senior Promotion (Plan-3)', 'special/Gym Photo 1.jpg', '  6 Months', 'Price: 6000 Baht', 'Applicable to all fitness activity', 'Senior');

-- --------------------------------------------------------

--
-- Table structure for table `tbladdpackage`
--

CREATE TABLE `tbladdpackage` (
  `id` int(11) NOT NULL,
  `category` varchar(45) DEFAULT NULL,
  `titlename` varchar(450) DEFAULT NULL,
  `PackageType` varchar(45) DEFAULT NULL,
  `PackageDuratiobn` varchar(45) DEFAULT NULL,
  `Price` varchar(45) DEFAULT NULL,
  `uploadphoto` varchar(450) DEFAULT NULL,
  `Description` varchar(450) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladdpackage`
--

INSERT INTO `tbladdpackage` (`id`, `category`, `titlename`, `PackageType`, `PackageDuratiobn`, `Price`, `uploadphoto`, `Description`, `create_date`) VALUES
(1, '1', 'Free Fitness Gear Package', '1', '3 Month', '600', NULL, 'Free Fitness Gear\nComplimentary OnePass', '2022-03-05 02:55:34'),
(2, '1', '3 Months Membership Package', '1', '6 Month', '800', NULL, 'Book Six Days Different Trainers Class designed for fast Weight Loss / Weight Gain with combination of Latest Workouts in addition to complimentary access to gym area with personal training.', '2022-03-05 02:56:44'),
(3, '1', 'hgfhfgdfgdf', '1', '4 Month', '12000', NULL, 'hfdgfhfgh<div><br></div><div>fdgdfg</div>', '2022-05-22 02:34:08'),
(7, '1', 'dd', '1', 'ddd', 'ddd', NULL, '<br>', '2023-08-17 14:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `name`, `email`, `mobile`, `password`, `create_date`) VALUES
(1, 'admin', 'admin@gmail.com', '99197896857', '5c428d8875d2948607f3e3fe134d71b4', '2022-01-19 11:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `id` int(11) NOT NULL,
  `package_id` varchar(45) DEFAULT NULL,
  `userid` varchar(45) DEFAULT NULL,
  `booking_date` timestamp NULL DEFAULT current_timestamp(),
  `payment` varchar(45) DEFAULT NULL,
  `paymentType` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `package_id`, `userid`, `booking_date`, `payment`, `paymentType`) VALUES
(1, '2', '1', '2022-03-05 03:53:21', '800', 'Partial Payment'),
(2, '1', '1', '2022-03-05 03:53:28', '600', 'Partial Payment'),
(3, '2', '5', '2022-03-08 17:44:18', '300', 'Full Payment'),
(6, '1', '5', '2022-05-22 02:16:14', NULL, NULL),
(7, '2', '6', '2022-05-22 02:32:45', NULL, 'Full Payment');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `id` int(11) NOT NULL,
  `category_name` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblpackage`
--

CREATE TABLE `tblpackage` (
  `id` int(11) NOT NULL,
  `cate_id` varchar(45) DEFAULT NULL,
  `PackageName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpackage`
--

INSERT INTO `tblpackage` (`id`, `cate_id`, `PackageName`) VALUES
(1, '1', 'fdgdfg'),
(3, '2', 'Package2');

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE `tblpayment` (
  `id` int(11) NOT NULL,
  `bookingID` varchar(45) DEFAULT NULL,
  `paymentType` varchar(45) DEFAULT NULL,
  `payment` varchar(45) DEFAULT NULL,
  `payment_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`id`, `bookingID`, `paymentType`, `payment`, `payment_date`) VALUES
(1, '1', 'Partial Payment', '300', '2022-03-05 03:54:10'),
(4, '1', 'Full Payment', '500', '2022-05-22 01:01:58'),
(5, '3', 'Partial Payment', '300', '2022-05-22 01:09:53'),
(8, '3', 'Full Payment', '500', '2022-05-22 01:19:03'),
(9, '7', 'Partial Payment', '500', '2022-05-22 02:40:34'),
(10, '7', 'Full Payment', '300', '2022-05-22 02:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT current_timestamp(),
  `gender` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `fname`, `lname`, `email`, `mobile`, `password`, `state`, `city`, `address`, `create_date`, `gender`) VALUES
(1, 'atul', 'kumar', 'atul@gmail.com', '8888888888', 'f925916e2754e5e03f75dd58a5733251', 'Uttar Pradesh', 'niuda', 'e-48 new asholk nagar hdd ', '2022-02-16 16:48:25', ''),
(2, 'ddd', 'ddf', 'df@gmail.com', '9968556', 'e10adc3949ba59abbe56e057f20f883e', 'fgfg', 'fsdf', NULL, '2022-02-16 17:00:20', ''),
(3, 'anuj', 'kumar', 'anuj@gmail.com', '9999999999', 'f925916e2754e5e03f75dd58a5733251', 'up', 'noida', NULL, '2022-03-02 15:37:22', ''),
(4, 'sssssss', 'sssssss', 'sssssss', 'sssssss', 'f925916e2754e5e03f75dd58a5733251', 'sssssss', 'sssssss', NULL, '2022-03-05 03:27:28', ''),
(5, 'Anuj k', 'kumar', 'anuj.doca@Gmail.com', '1234567890', '202cb962ac59075b964b07152d234b70', 'sghsdg', 'sahgsh', NULL, '2022-03-08 17:43:23', ''),
(6, 'John', 'Doe', 'john@test.com', '1425635241', 'f925916e2754e5e03f75dd58a5733251', 'Delhi', 'New Delhi', 'ABC Street XYZ Colony', '2022-05-22 02:31:54', '');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `exercise_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`id`, `name`, `exercise_id`) VALUES
(14, 'Kru No', 13),
(15, 'Kru Bally', 13),
(16, 'Kru Oum', 13),
(17, 'Kru No', 14),
(18, 'Kru Bally', 14),
(19, 'Kru Oum', 14),
(20, 'Kru No', 15),
(21, 'Kru Bally', 15),
(22, 'Kru Oum', 15),
(23, 'Kru No', 16),
(24, 'Kru Bally', 16),
(25, 'Kru Oum', 16),
(26, 'Kru No', 17),
(27, 'Kru Bally', 17),
(28, 'Kru Oum', 17);

-- --------------------------------------------------------

--
-- Table structure for table `upapper`
--

CREATE TABLE `upapper` (
  `id` int(11) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `contact` varchar(1000) NOT NULL,
  `aboutus` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `img` varchar(1000) NOT NULL,
  `img1` varchar(1000) NOT NULL,
  `img2` varchar(1000) NOT NULL,
  `img3` varchar(1000) NOT NULL,
  `img4` varchar(1000) NOT NULL,
  `img5` varchar(1000) NOT NULL,
  `img6` varchar(1000) NOT NULL,
  `img7` varchar(1000) NOT NULL,
  `img8` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upapper`
--

INSERT INTO `upapper` (`id`, `email`, `contact`, `aboutus`, `address`, `img`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`) VALUES
(1, 'kaviraaj.2323@gmail.com', '0830219001', 'The main objective of Xtreme Fitness is to provide the customers an another option for choosing exercise or any other fitness activities applying membership via web application in order to perform at gym rather than visiting or making phone call.', '45 43 Charan Sanit Wong Rd, Wat Tha Phra, Bangkok Yai, Bangkok 10600', 'eximg/XtremeFitnessLogo.png', 'eximg/Gym Photo 3.jpg', 'eximg/Gym Photo 1.jpg', 'eximg/Gym Photo 2.jpg', 'eximg/Gym Photo 3.jpg', 'eximg/Gym Photo 1.jpg', 'eximg/squatting.jpg', 'eximg/treadmill.jpg', 'eximg/dumbelling.jpg'),
(2, 'kaviraaj.2323@gmail.com', '0830219001', 'The main objective of Xtreme Fitness is to provide the customers an another option for choosing exercise or any other fitness activities applying membership via web application in order to perform at gym rather than visiting or making phone call.', '45 43 Charan Sanit Wong Rd, Wat Tha Phra, Bangkok Yai, Bangkok 10600', 'eximg/XtremeFitnessLogo.png', 'eximg/Cristiano_Ronaldo_WC2022_-_01_(cropped).jpg', 'eximg/WhatsApp_Image_2023-08-12_at_5.17.13_AM-removebg-preview.png', 'eximg/Lionel-Messi-Argentina-2022-FIFA-World-Cup_(cropped).jpg', 'eximg/Argentina_national_football_team_logo.svg (1).png', 'eximg/lionel-messi-208.png', 'eximg/vs.png', 'eximg/image.png', 'eximg/United_States_Soccer_Federation_logo_2016.svg.png');

-- --------------------------------------------------------

--
-- Table structure for table `usignup`
--

CREATE TABLE `usignup` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `weight` varchar(500) NOT NULL,
  `height` varchar(500) NOT NULL,
  `BMI` varchar(500) NOT NULL,
  `bloodgroup` varchar(500) NOT NULL,
  `food` varchar(500) NOT NULL,
  `health` varchar(500) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `fitness` varchar(150) NOT NULL,
  `time` varchar(150) NOT NULL,
  `intensity` varchar(150) NOT NULL,
  `member` varchar(150) NOT NULL,
  `memberpaid` varchar(150) NOT NULL,
  `fitr` varchar(150) NOT NULL,
  `promotion` varchar(150) NOT NULL,
  `promotionpaid` varchar(150) NOT NULL,
  `diet` varchar(150) NOT NULL,
  `sname` varchar(150) NOT NULL,
  `card` varchar(150) NOT NULL,
  `cvv` varchar(150) NOT NULL,
  `exp` varchar(150) NOT NULL,
  `memberpay` varchar(150) NOT NULL,
  `promotionpay` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usignup`
--

INSERT INTO `usignup` (`id`, `name`, `dob`, `age`, `gender`, `weight`, `height`, `BMI`, `bloodgroup`, `food`, `health`, `phone`, `email`, `password`, `address`, `fitness`, `time`, `intensity`, `member`, `memberpaid`, `fitr`, `promotion`, `promotionpaid`, `diet`, `sname`, `card`, `cvv`, `exp`, `memberpay`, `promotionpay`) VALUES
(18, 'Hammad Shah', '2000-04-11', '23', 'Male', '75 KG', '6 M', '22.8', 'B+', 'None', 'None', '03092372779', 'Hammad@taxhelpline.com', 'hammad', 'Office No 3-6, Ground Floor, Idrees Chamber', 'Weight Traning', 'Mond-Sun 10:30 AM', 'Heavy Weight', '6 Month Membership', 'Yes', 'None', 'Senior Promotion (Plan-2)', 'No', 'Yes, give to you soon', 'Gillani', '42205151511', '252', '15-05-2025', 'Price: 6900 Baht', 'Price: 3300 Baht'),
(19, 'Ahmed Shah', '2000-04-11', '23', 'Male', '56', '6', '25.43', 'B+', 'Yes', 'No', '03092372779', 'ahmedshah@gmail.com', 'ahmed', 'House 11-A, Street No 26, Bhittai Abad Block 9, Gulistan-e-Jauhar, Karachi ', 'Zumba Danace', 'Mond-Sun 10:30 AM', 'Moderate Weight', '', '', 'You need to light weight Excercise', 'Special Promotion (Plan-2)', 'Yes', 'No there is no diet recomndation for you', '', '45545454545454', '222', '45050522', '', 'Price: 3300 Baht'),
(20, 'Shah Fahad Gillani', '2000-08-17', '23', 'Male', '45', '6', '3.20', 'A+', 'Yes', 'Yes', '03020202786', 'shahfahad@gmail.com', 'fahad', 'Office No 3-6, Ground Floor, Idrees Chamber, Talpur Road, Opposite NBP Head, Office Karachi', 'Weight Traning', 'Mond-Sun 08:30 AM', 'Heavy Weight', '3 Months Membership', 'Yes', 'Yes need to ssasdask fckj', 'Student Promotion (Plan-3)', 'No', 'asjhlasjk asas kj caskj', '', '4220177012365', '452', '15-05-2028', 'Price: 3900 Baht', 'Price: 6000 Baht');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_text`
--
ALTER TABLE `about_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercise_time`
--
ALTER TABLE `exercise_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fit`
--
ALTER TABLE `fit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intensity`
--
ALTER TABLE `intensity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_pro`
--
ALTER TABLE `member_pro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladdpackage`
--
ALTER TABLE `tbladdpackage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpackage`
--
ALTER TABLE `tblpackage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpayment`
--
ALTER TABLE `tblpayment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upapper`
--
ALTER TABLE `upapper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usignup`
--
ALTER TABLE `usignup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_text`
--
ALTER TABLE `about_text`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=329;

--
-- AUTO_INCREMENT for table `exercise`
--
ALTER TABLE `exercise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `exercise_time`
--
ALTER TABLE `exercise_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `fit`
--
ALTER TABLE `fit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `intensity`
--
ALTER TABLE `intensity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `member_pro`
--
ALTER TABLE `member_pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbladdpackage`
--
ALTER TABLE `tbladdpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblpackage`
--
ALTER TABLE `tblpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblpayment`
--
ALTER TABLE `tblpayment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `upapper`
--
ALTER TABLE `upapper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usignup`
--
ALTER TABLE `usignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
