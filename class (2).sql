-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2017 at 11:23 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class`
--
CREATE DATABASE IF NOT EXISTS `class` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `class`;

-- --------------------------------------------------------

--
-- Table structure for table `all_users`
--

DROP TABLE IF EXISTS `all_users`;
CREATE TABLE `all_users` (
  `roll_no` varchar(32) NOT NULL,
  `password` varchar(200) NOT NULL,
  `pic` varchar(200) NOT NULL DEFAULT '../images/default.jpg',
  `user_type` int(2) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_users`
--

INSERT INTO `all_users` (`roll_no`, `password`, `pic`, `user_type`) VALUES
('144007', '827ccb0eea8a706c4c34a16891f84e7b', 'images/144007.jpg', 2),
('144024', '94754d0abb89e4cf0a7f1c494dbb9d2c', 'images/akash.jpg', 2),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'images/pic.jpg', 1),
('PC1003', '4297f44b13955235245b2497399d7a93', 'images/default.jpg', 3),
('PCHOD', '9ad110b6373ea8e60d3e6df0270e4271', 'images/default.jpg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `category`) VALUES
(1, 'Student'),
(2, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `comment_id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `email_add` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feed_entries`
--

DROP TABLE IF EXISTS `feed_entries`;
CREATE TABLE `feed_entries` (
  `rollno` int(6) NOT NULL,
  `course_code` varchar(9) NOT NULL,
  `q_id` int(2) NOT NULL,
  `q_value` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_entries`
--

INSERT INTO `feed_entries` (`rollno`, `course_code`, `q_id`, `q_value`) VALUES
(144007, 'R14CP3402', 1, 3),
(144007, 'R14CP3402', 2, 2),
(144007, 'R14CP3402', 3, 2),
(144007, 'R14CP3402', 4, 2),
(144007, 'R14CP3402', 5, 3),
(144007, 'R14CP3402', 6, 3),
(144007, 'R14CP3402', 7, 2),
(144007, 'R14CP3402', 8, 2),
(144007, 'R14CP3403', 1, 3),
(144007, 'R14CP3403', 2, 2),
(144007, 'R14CP3403', 3, 2),
(144007, 'R14CP3403', 4, 2),
(144007, 'R14CP3403', 5, 3),
(144007, 'R14CP3403', 6, 2),
(144007, 'R14CP3403', 7, 2),
(144007, 'R14CP3403', 8, 2),
(144007, 'R14CP4404', 1, 2),
(144007, 'R14CP4404', 2, 2),
(144007, 'R14CP4404', 3, 2),
(144007, 'R14CP4404', 4, 2),
(144007, 'R14CP4404', 5, 2),
(144007, 'R14CP4404', 6, 3),
(144007, 'R14CP4404', 7, 2),
(144007, 'R14CP4404', 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `feed_office`
--

DROP TABLE IF EXISTS `feed_office`;
CREATE TABLE `feed_office` (
  `rollno` int(9) NOT NULL,
  `value` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_office`
--

INSERT INTO `feed_office` (`rollno`, `value`) VALUES
(144007, 3);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `file` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `fname`, `file`) VALUES
(1, 'Gooner', 0x332c372c31342044756e67656f6e7320416e6420447261676f6e73284b696e67735f4f665f45736c617669615f5448652042656767656e696e6729416e20526f6c652d506c6179696e672047616d652e646f63),
(2, 'ads', 0x332c372c31342044756e67656f6e7320416e6420447261676f6e73284b696e67735f4f665f45736c617669615f5448652042656767656e696e6729416e20526f6c652d506c6179696e672047616d652e646f63);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mst_admin`
--

DROP TABLE IF EXISTS `mst_admin`;
CREATE TABLE `mst_admin` (
  `id` int(11) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_admin`
--

INSERT INTO `mst_admin` (`id`, `loginid`, `pass`) VALUES
(1, 'sanjeev', 'sanjeev');

-- --------------------------------------------------------

--
-- Table structure for table `mst_question`
--

DROP TABLE IF EXISTS `mst_question`;
CREATE TABLE `mst_question` (
  `que_id` int(5) NOT NULL,
  `test_id` int(5) DEFAULT NULL,
  `que_desc` varchar(150) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_question`
--

INSERT INTO `mst_question` (`que_id`, `test_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(16, 8, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2),
(17, 8, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3),
(18, 8, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1),
(19, 9, 'Which of the follwing contexts are available in the add watch window?', 'Project', 'Module', 'Procedure', 'All', 4),
(20, 9, 'Which window will allow you to halt the execution of your code when a variable changes?', 'The call stack window', 'The immedite window', 'The locals window', 'The watch window', 4),
(22, 9, 'How can you print the object name associated with the last VB  error to the Immediate window?', 'Debug.Print Err.Number', 'Debug.Print Err.Source', 'Debug.Print Err.Description', 'Debug.Print Err.LastDLLError', 2),
(23, 9, 'How can you print the object name associated with the last VB  error to the Immediate window?', 'Debug.Print Err.Number', 'Debug.Print Err.Source', 'Debug.Print Err.Description', 'Debug.Print Err.LastDLLError', 2),
(24, 9, 'What function does the TabStop property on a command button perform?', 'It determines whether the button can get the focus', 'If set to False it disables the Tabindex property.', 'It determines the order in which the button will receive the focus', 'It determines if the access key swquence can be used', 1),
(25, 10, 'You application creates an instance of a form. What is the first event that will be triggered in the from?', 'Load', 'GotFocus', 'Instance', 'Initialize', 4),
(26, 10, 'Which of the following is Hungarian notation for a menu?', 'Menu', 'Men', 'mnu', 'MN', 3),
(27, 10, 'You are ready to run your program to see if it works.Which key on your keyboard will start the program?', 'F2', 'F3', 'F4', 'F5', 4),
(28, 10, 'Which of the following snippets of code will unload a form named frmFo0rm from memory?', 'Unload Form', 'Unload This', 'Unload Me', 'Unload', 3),
(29, 10, 'You want the text in text box named txtMyText to read My Text.In which property will you place this string?', 'Caption', 'Text', 'String', 'None of the above', 2),
(30, 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0),
(31, 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mst_result`
--

DROP TABLE IF EXISTS `mst_result`;
CREATE TABLE `mst_result` (
  `roll_no` varchar(20) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_result`
--

INSERT INTO `mst_result` (`roll_no`, `test_id`, `test_date`, `score`) VALUES
('raj', 8, '0000-00-00', 3),
('raj', 9, '0000-00-00', 3),
('raj', 8, '0000-00-00', 1),
('ashish', 10, '0000-00-00', 3),
('ashish', 9, '0000-00-00', 2),
('ashish', 10, '0000-00-00', 0),
('raj', 8, '0000-00-00', 0),
('ankur', 11, '0000-00-00', 0),
('raj', 8, '0000-00-00', 3),
('raj', 9, '0000-00-00', 3),
('raj', 8, '0000-00-00', 1),
('ashish', 10, '0000-00-00', 3),
('ashish', 9, '0000-00-00', 2),
('ashish', 10, '0000-00-00', 0),
('raj', 8, '0000-00-00', 0),
('ankur', 11, '0000-00-00', 0),
('144007', 8, '2020-05-17', 1),
('144007', 8, '2020-05-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_subject`
--

DROP TABLE IF EXISTS `mst_subject`;
CREATE TABLE `mst_subject` (
  `sub_id` int(5) NOT NULL,
  `sub_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_subject`
--

INSERT INTO `mst_subject` (`sub_id`, `sub_name`) VALUES
(1, 'VB'),
(2, 'Oracle'),
(3, 'Java'),
(4, 'PHP'),
(5, 'Computer Fundamental'),
(6, 'Networking'),
(7, 'mysql'),
(8, 'PCM');

-- --------------------------------------------------------

--
-- Table structure for table `mst_test`
--

DROP TABLE IF EXISTS `mst_test`;
CREATE TABLE `mst_test` (
  `test_id` int(5) NOT NULL,
  `sub_id` int(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `total_que` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_test`
--

INSERT INTO `mst_test` (`test_id`, `sub_id`, `test_name`, `total_que`) VALUES
(8, 1, 'VB Basic Test', '3'),
(9, 1, 'Essentials of VB', '5'),
(10, 1, 'Creating User Services', '5'),
(11, 7, 'function', '5'),
(12, 8, '100', '2');

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

DROP TABLE IF EXISTS `mst_user`;
CREATE TABLE `mst_user` (
  `user_id` int(5) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`user_id`, `login`, `pass`, `username`, `address`, `city`, `phone`, `email`) VALUES
(1, 'raj', 'raj', 'Rajen', 'limbdi', 'limbdi', 9999, 'raj@yahoo.com'),
(12, 'ashish', 'shah', 'ashish', 'laskdjf', 'S\'nagar', 228585, 'ashish@yahoo.com'),
(14, 'Dhaval123', 'a', 'a', 'a', 'a', 0, 'dhaval@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `mst_useranswer`
--

DROP TABLE IF EXISTS `mst_useranswer`;
CREATE TABLE `mst_useranswer` (
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_useranswer`
--

INSERT INTO `mst_useranswer` (`sess_id`, `test_id`, `que_des`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `your_ans`) VALUES
('2b8e3337837b82112def8d3e2f42f26e', 8, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2, 1),
('2b8e3337837b82112def8d3e2f42f26e', 8, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3, 3),
('2b8e3337837b82112def8d3e2f42f26e', 8, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1, 3),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 2),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 3),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 4),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 4),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 3),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 2),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 2),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('2b8e3337837b82112def8d3e2f42f26e', 8, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2, 1),
('2b8e3337837b82112def8d3e2f42f26e', 8, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3, 3),
('2b8e3337837b82112def8d3e2f42f26e', 8, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1, 3),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 2),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 3),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 4),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 4),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 3),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 2),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 2),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('f8b2r1g66sdjfvp5le2egdlvr5', 8, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2, 1),
('f8b2r1g66sdjfvp5le2egdlvr5', 8, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3, 1),
('f8b2r1g66sdjfvp5le2egdlvr5', 8, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
CREATE TABLE `notices` (
  `post_id` int(10) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` varchar(300) NOT NULL,
  `category` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`post_id`, `user_id`, `title`, `body`, `category`, `file`) VALUES
(1, 'PC1003', 'Absent NO', 'Parents Meet', 'Student', 'CLASS_logo_temp.png'),
(2, 'PC1003', 'Staff NOtice', 'Meeting on 26/05/2017', 'Staff', 'Employee-Referral-Sample.doc'),
(11, 'pc1003', '12345', 'sadlij', 'Student', 'pc1003_35421.png'),
(10, 'pc1003', '11', '112', 'Student', 'pc1003_728fe02a-8a0f-da76.pdf'),
(9, 'pc1003', '11', '112', 'Student', '_728fe02a-8a0f-da76.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `user_id` int(6) NOT NULL,
  `post` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `like_cnt` int(4) NOT NULL,
  `dislike_cnt` int(4) NOT NULL,
  `report_count` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post1`
--

DROP TABLE IF EXISTS `post1`;
CREATE TABLE `post1` (
  `post_id` int(11) NOT NULL,
  `user_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `posted` datetime NOT NULL,
  `report` int(2) NOT NULL,
  `like_post` mediumint(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post1`
--

INSERT INTO `post1` (`post_id`, `user_id`, `title`, `body`, `category_id`, `posted`, `report`, `like_post`) VALUES
(5, '1', 'Template Info', 'SimpleBlog 1.0 is a free, W3C-compliant, CSS-based website template by styleshout.com. This work is distributed under the Creative Commons Attribution 2.5 License, which means that you are free to use and modify it for any purpose. All I ask is that you include a link back to my website in your credits.\r\nFor more free designs, you can visit my website to see my other works.\r\nGood luck and I hope you find my free templates useful!', 2, '2017-02-18 00:00:00', 0, 0),
(1, '3', 'exam iom', 'Tomorrow there will be test on IOM @10:30 and after that the lecture will be taken', 1, '2017-02-18 00:00:00', 0, 0),
(6, '1', 'Image and text', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Aliquam ornare diam iaculis nibh. Proin luctus, velit pulvinar ullamcorper nonummy, mauris enim eleifend urna, congue egestas elit lectus eu est.', 2, '2017-02-18 00:00:00', 0, 0),
(9, '1', 'akash', 'Something I want to write baby', 1, '2017-02-18 08:23:18', 0, 0),
(11, '1', 'CWIT', 'What you are thinking.....', 1, '2017-02-20 01:32:47', 0, 0),
(12, '144007', 'akkkkkkkkkkkooooo', '354351435143s435435d4x35d4s35d43s5ds4d35sd435435sd4s53dcxzczc3x5c34xz353z533zc435zx4c', 1, '2017-05-16 06:34:29', 0, 1),
(13, '144007', 'akki', 'whtssss upppp????', 2, '2017-05-16 06:35:07', 2, 2),
(15, '144007', 'HB', 'hbbbbbbbbbbbbbbpooooooooooo', 1, '2017-05-17 02:53:44', 0, 4),
(16, 'PC1003', 'teacher', 'alllllllllskdlaksdlkdlkdldsl', 2, '2017-05-17 02:54:30', 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `presentation`
--

DROP TABLE IF EXISTS `presentation`;
CREATE TABLE `presentation` (
  `id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `staff_id` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presentation`
--

INSERT INTO `presentation` (`id`, `subject`, `topic`, `file`, `staff_id`) VALUES
(26, 'SQL Tutorial', 'SQL PDF', 'sql_tutorial.pdf', 'PC1003'),
(30, 'prog1', 'PDF Format', 'python_tutorial.pdf', '0'),
(31, 'prog2', 'PDF Format', 'servlets_tutorial.pdf', 'PC1003'),
(32, 'prog4', 'PDF Format', 'jsp_tutorial.pdf', 'PC1003'),
(33, 'prog5', 'PDF Format', 'ruby_tutorial.pdf', '0'),
(34, 'prog6', 'PDF Format', 'struts2_tutorial.pdf', '0'),
(44, 'jh', 'jh', 'pc1003hb.jpg', 'pc1003'),
(45, 'R14CP4404', 'zas', 'pc1003_35421.png', 'pc1003');

-- --------------------------------------------------------

--
-- Table structure for table `question_bank`
--

DROP TABLE IF EXISTS `question_bank`;
CREATE TABLE `question_bank` (
  `q_id` int(2) NOT NULL,
  `question` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_bank`
--

INSERT INTO `question_bank` (`q_id`, `question`) VALUES
(1, 'Uniform coverage of Syllabus'),
(2, 'Explaination of the Subject by relating it to practical examples'),
(3, 'Communication skill, delivery, explanation of the subject.'),
(4, 'Use of black board, teaching aids (projector / OHP) for teaching.'),
(5, 'Creating interest about the subject and encouraging discussion.'),
(6, 'Timely assessment of Term work, Test etc.'),
(7, 'Development of confidence and preparation for examination.'),
(10, 'Counselling, motivation for self learning and extending help');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `rollno` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `subject_regi` varchar(9) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollno`, `name`, `subject_regi`) VALUES
(144007, 'Harshal', 'R14CP4404'),
(144007, 'Harshal', 'R14CP3403'),
(144007, 'Harshal', 'R14CP3402');

-- --------------------------------------------------------

--
-- Table structure for table `student_at`
--

DROP TABLE IF EXISTS `student_at`;
CREATE TABLE `student_at` (
  `rollno` int(6) NOT NULL,
  `date` date NOT NULL,
  `subject` varchar(9) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_at`
--

INSERT INTO `student_at` (`rollno`, `date`, `subject`) VALUES
(144001, '2017-05-18', 'R14CP4403'),
(144002, '2017-05-18', 'R14CP4403'),
(144001, '2017-05-18', 'R14CP4403'),
(144002, '2017-05-18', 'R14CP4403'),
(144001, '2017-05-18', 'R14CP4403'),
(144002, '2017-05-18', 'R14CP4403'),
(144002, '2017-05-18', 'R14CP4404'),
(144007, '2017-05-18', 'R14CP4404'),
(144002, '2017-05-18', 'R14CP4404'),
(144007, '2017-05-18', 'R14CP4404'),
(144002, '2017-05-18', 'R14CP4403'),
(144002, '2017-05-18', 'R14CP4403'),
(144002, '2017-05-18', 'R14CP4403'),
(144002, '2017-05-18', 'R14CP4403'),
(144002, '2017-05-18', 'R14CP4403'),
(144002, '2017-05-18', 'R14CP4403'),
(144002, '2017-05-18', 'R14CP4403'),
(144002, '2017-05-18', 'R14CP4403'),
(144002, '2017-05-18', 'R14CP4403'),
(144002, '2017-05-18', 'R14CP4403'),
(144002, '2017-05-18', 'R14CP4403'),
(144002, '2017-05-18', 'R14CP4404'),
(144007, '2017-05-18', 'R14CP4404'),
(144002, '2017-05-18', 'R14CP4403'),
(144007, '2017-05-19', 'R14CP4404'),
(144001, '2017-05-19', 'R14CP4404'),
(144007, '2017-05-19', 'R14CP4404'),
(144001, '2017-05-18', 'pccc'),
(144002, '2017-05-18', 'pccc'),
(144001, '2017-05-18', 'pccc'),
(144002, '2017-05-18', 'pccc'),
(144003, '2017-05-18', 'pccc'),
(144007, '2017-05-18', 'pccc'),
(144002, '2017-05-18', 'pccc'),
(144003, '2017-05-18', 'pccc'),
(144007, '2017-05-18', 'pccc'),
(144007, '2017-05-20', 'R14CP4404'),
(144007, '2017-05-20', 'R14CP4404');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

DROP TABLE IF EXISTS `student_info`;
CREATE TABLE `student_info` (
  `rollno` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `mobile` int(12) DEFAULT NULL,
  `category` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`rollno`, `first_name`, `last_name`, `dob`, `address`, `mobile`, `category`) VALUES
('100', 'ak', 'jd', '2017-04-13', 'asrtyui', 12321, 2),
('12', 'qw', 'qws', '2017-05-09', 'asdad', 212, 2),
('144024', 'akash', 'jadhav', '1998-12-10', 'hadapsar', 79808, 2),
('10', 'ak', 'ja', '1998-12-10', 'desai', 3409, 1),
('144007', 'hb', 'bo', '2001-01-01', 'dfsvsdf szdfzxvc', 1234567, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stud_result`
--

DROP TABLE IF EXISTS `stud_result`;
CREATE TABLE `stud_result` (
  `q_id` int(2) NOT NULL,
  `course_code` varchar(9) NOT NULL,
  `5` float NOT NULL,
  `4` float NOT NULL,
  `3` float NOT NULL,
  `2` float NOT NULL,
  `1` float NOT NULL,
  `t_per` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `course_name` varchar(32) NOT NULL,
  `course_code` int(32) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject_info`
--

DROP TABLE IF EXISTS `subject_info`;
CREATE TABLE `subject_info` (
  `course_code` varchar(9) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_staff_id` varchar(10) NOT NULL,
  `lect_taken` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_info`
--

INSERT INTO `subject_info` (`course_code`, `course_name`, `course_staff_id`, `lect_taken`) VALUES
('R14CP3402', 'Computer Organisation', '12', 0),
('R14CP3403', 'Operating System', '12', 0),
('R14CP4404', 'P. C. Maintainence', 'PC1003', 36),
('R14CP4403', 'Microprocessor', 'PC1003', 27);

-- --------------------------------------------------------

--
-- Table structure for table `suggestion`
--

DROP TABLE IF EXISTS `suggestion`;
CREATE TABLE `suggestion` (
  `s_id` int(255) NOT NULL,
  `comments` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestion`
--

INSERT INTO `suggestion` (`s_id`, `comments`) VALUES
(1, 'akkakkkakk');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

DROP TABLE IF EXISTS `syllabus`;
CREATE TABLE `syllabus` (
  `course_code` varchar(9) NOT NULL,
  `tot_ut_com` int(10) NOT NULL,
  `tot_ut` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`course_code`, `tot_ut_com`, `tot_ut`) VALUES
('R14CP4404', 6, 6),
('R14CP3402', 3, 6),
('R14CP3403', 4, 6),
('R14CP4403', 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `sess_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task`, `date`, `time`, `sess_id`) VALUES
(60, 'klk', '2017-05-20', '03:42:07', '144007'),
(62, 'kjsdhasdjl', '2017-05-20', '07:44:51', '144007'),
(64, 'asjiaolsa', '2017-05-20', '07:45:38', '144007'),
(71, 'kasdoih', '2017-05-20', '08:02:13', '144007'),
(72, 'dasfas', '2017-05-20', '08:43:15', '144007'),
(73, 'SDAfas', '2017-05-20', '08:43:20', '144007');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `rollno` int(6) NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`rollno`, `name`) VALUES
(23, 'Kamble Sir'),
(12, 'MADDAAM'),
(23, 'Kamble Sir'),
(12, 'MADDAAM');

-- --------------------------------------------------------

--
-- Table structure for table `teach_info`
--

DROP TABLE IF EXISTS `teach_info`;
CREATE TABLE `teach_info` (
  `rollno` varchar(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `dob` date NOT NULL,
  `dept_id` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_info`
--

INSERT INTO `teach_info` (`rollno`, `first_name`, `last_name`, `qualification`, `address`, `mobile`, `dob`, `dept_id`) VALUES
('0', '0', '0', '0', '0', NULL, '0000-00-00', 1),
('PC1003', 'poi', 'lkj', 'we', 'tgadfgdf', 2345, '2009-01-02', 2);

-- --------------------------------------------------------

--
-- Table structure for table `test_table`
--

DROP TABLE IF EXISTS `test_table`;
CREATE TABLE `test_table` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_table`
--

INSERT INTO `test_table` (`id`, `name`) VALUES
(1, 'akash'),
(2, 'harshal'),
(3, 'kshit');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

DROP TABLE IF EXISTS `time_table`;
CREATE TABLE `time_table` (
  `dept_id` int(2) NOT NULL,
  `term` int(1) NOT NULL,
  `day` varchar(9) NOT NULL,
  `9:30am` varchar(15) NOT NULL,
  `10:30am` varchar(15) NOT NULL,
  `11:25am` varchar(15) NOT NULL,
  `12:20pm` varchar(15) NOT NULL,
  `1:15pm` varchar(15) NOT NULL,
  `2:00pm` varchar(15) NOT NULL,
  `3:00pm` varchar(15) NOT NULL,
  `4:00pm` varchar(15) NOT NULL,
  `5:00pm` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='the timetable';

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`dept_id`, `term`, `day`, `9:30am`, `10:30am`, `11:25am`, `12:20pm`, `1:15pm`, `2:00pm`, `3:00pm`, `4:00pm`, `5:00pm`) VALUES
(10, 2, 'asd', 'asd', 'sd', 'sad', 'asd', 'asd', 'asd', 'asd', 'as', 'a'),
(10, 2, 'asd', 'asd', 'asd', 'lk', 'j', 'klj', 'jk', 'jkl', 'jk', 'ljkl'),
(10, 2, 'j', 'klj', 'klj', 'klj', 'klj', 'lk', 'jlk', 'jkl', 'j', 'klj'),
(10, 2, 'klj', 'lkj', 'klj', 'kl', 'jkl', 'jkl', 'kl', 'n', 'mln', 'm,n'),
(10, 2, 'm,n', 'm,n', 'm,', 'nm,', 'nm,', 'nm', ',n', 'mn', 'm,n', 'm,n'),
(10, 2, 'm,', 'nm,', 'nm', ',n', 'm,n', 'm,n', 'mn', 'm,n', ',m', 'mn');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `atte` int(11) NOT NULL,
  `syll` int(11) NOT NULL,
  `mock` int(11) NOT NULL,
  `per` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `atte`, `syll`, `mock`, `per`) VALUES
(1, 23, 23, 23, 23),
(2, 80, 80, 80, 85),
(3, 60, 100, 60, 70),
(4, 80, 100, 90, 90),
(5, 35, 100, 50, 52),
(6, 70, 80, 75, 68),
(7, 50, 100, 75, 72),
(8, 100, 100, 90, 93),
(9, 63, 87, 82, 84);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_users`
--
ALTER TABLE `all_users`
  ADD UNIQUE KEY `roll_no` (`roll_no`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_admin`
--
ALTER TABLE `mst_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_question`
--
ALTER TABLE `mst_question`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `mst_subject`
--
ALTER TABLE `mst_subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `mst_test`
--
ALTER TABLE `mst_test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `post1`
--
ALTER TABLE `post1`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_bank`
--
ALTER TABLE `question_bank`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `suggestion`
--
ALTER TABLE `suggestion`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_table`
--
ALTER TABLE `test_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mst_admin`
--
ALTER TABLE `mst_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mst_question`
--
ALTER TABLE `mst_question`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `mst_subject`
--
ALTER TABLE `mst_subject`
  MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mst_test`
--
ALTER TABLE `mst_test`
  MODIFY `test_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `post_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `post1`
--
ALTER TABLE `post1`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `question_bank`
--
ALTER TABLE `question_bank`
  MODIFY `q_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `suggestion`
--
ALTER TABLE `suggestion`
  MODIFY `s_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `test_table`
--
ALTER TABLE `test_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
