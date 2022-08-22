-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 06:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skills`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(250) NOT NULL,
  `admin_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE `app` (
  `id` int(11) NOT NULL,
  `apptitle` varchar(255) NOT NULL,
  `appdesc` text NOT NULL,
  `appgithub` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `cattype` int(11) NOT NULL COMMENT '0=Parent\r\n1=Question and Answer\r\n2=Quiz\r\n3=App'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `category_name`, `slug`, `pid`, `cattype`) VALUES
(1, 'Home', 'home', 0, 0),
(2, 'Frontend', '', 0, 0),
(3, 'Backend', '', 0, 0),
(4, 'Database', '', 0, 0),
(5, 'Cloud', '', 0, 0),
(6, 'DevOps', '', 0, 0),
(7, 'Test Automation', '', 0, 0),
(8, 'HTML', 'html', 2, 1),
(9, 'CSS', 'css', 2, 1),
(10, 'JavaScript', 'javascript', 2, 1),
(11, 'jQuery', 'jquery', 2, 1),
(12, 'AJAX', 'ajax', 2, 1),
(13, 'Bootstrap', 'bootstrap', 2, 1),
(14, 'Talwind CSS', 'talwindcss', 2, 1),
(15, 'React', 'react', 2, 1),
(16, 'Vue.js', 'vue', 2, 1),
(17, 'HTML Quiz', 'html_quiz', 2, 2),
(18, 'Frontend Apps', 'frontend_apps', 2, 3),
(19, 'PHP', 'php', 3, 1),
(20, 'WordPress', 'wordpress', 3, 1),
(21, 'CodeIgniter', 'codeigniter', 3, 1),
(22, 'Laravel', 'laravel', 3, 1),
(23, 'MySQL', 'mysql', 4, 1),
(24, 'mongoDB', 'mongodb', 4, 1),
(25, 'AWS', 'aws', 5, 1),
(26, 'Azure', 'azure', 5, 1),
(27, 'GIT', 'git', 6, 1),
(28, 'Docker', 'docker', 6, 1),
(29, 'PHPUnit', 'phpunit', 7, 1),
(30, 'Laravel Dusk', 'dusk', 7, 1),
(31, 'Selenium', 'selenium', 7, 1),
(32, 'Quiz', 'quiz', 0, 0),
(33, 'Apps', 'apps', 0, 0),
(34, 'Contact', 'contact', 0, 0),
(37, 'CSS Quiz', '', 2, 2),
(38, 'JavaScript Quiz', '', 2, 2),
(39, 'jQueryQuiz', '', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `qa`
--

CREATE TABLE `qa` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `pageid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qa`
--

INSERT INTO `qa` (`id`, `question`, `answer`, `pageid`) VALUES
(5, 'Define Element, Tag and Attribute in HTML.', '<p>The HTML Element is consists of HTML Tag and and Attributes e.g. Title, Paragraph etc.</p>\r\n            <p>In the following example the paragraph element having  &lt;p&gt; and &lt;/p&gt; as start tag and end tag respectively. The class is the attribute and foo is the value of the attribute.</p>\r\n            <code>\r\n               <pre>&lt;p class=\"foo\"&gt; This is paragraph&lt;/p&gt;</pre>\r\n            </code>', 8),
(6, 'What are void elements in HTML?', 'HTML elements which do not have closing tags or do not need to be closed are Void elements. For Example <code>&lt;br /&gt;, &lt;img /&gt;, &lt;hr /&gt;,</code> etc.', 8);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `options` varchar(500) NOT NULL,
  `answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `question`, `options`, `answer`) VALUES
(3, 'President of India ?', 'Pranav Mukharjee$$Pratibha Patil$$Narendra Modi$$Manmohan singh', 1),
(5, 'Who is the developer of C programming language ?', 'Lokesh$$Bill Gates$$Dennis Ritchie$$Larry Wall$$Sergey Brin', 3),
(6, 'HEllo world', 'l', 1),
(8, 'what the hell are you waiting for?', 'me$$you', 2),
(9, 'WHO ARE YOU?', 'nobody$$me$$you', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz_category`
--

CREATE TABLE `quiz_category` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_category`
--

INSERT INTO `quiz_category` (`id`, `qid`, `cid`) VALUES
(5, 3, 37),
(7, 5, 17),
(19, 8, 17),
(21, 6, 17),
(23, 9, 17);

-- --------------------------------------------------------

--
-- Table structure for table `sc`
--

CREATE TABLE `sc` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `pageid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sc`
--

INSERT INTO `sc` (`id`, `content`, `pageid`) VALUES
(1, '<ul class=\"list-inline\">\n    <li class=\"list-inline-item\"><strong>Frontend:</strong></li>\n    <li class=\"list-inline-item\">HTML</li>\n    <li class=\"list-inline-item\">CSS</li>\n    <li class=\"list-inline-item\">JavaScript</li>            \n    <li class=\"list-inline-item\">jQuery</li>            \n    <li class=\"list-inline-item\">AJAX</li>            \n    <li class=\"list-inline-item\">Bootstrap</li>\n    <li class=\"list-inline-item\">Talwind CSS</li>\n    <li class=\"list-inline-item\">React</li>\n    <li class=\"list-inline-item\">Vue.js</li>\n</ul>\n<ul class=\"list-inline\">\n    <li class=\"list-inline-item\"><strong>Backend:</strong></li>\n    <li class=\"list-inline-item\">PHP</li>\n    <li class=\"list-inline-item\">WordPress</li>\n    <li class=\"list-inline-item\">CodeIgniter</li>\n    <li class=\"list-inline-item\">Laraval</li>\n</ul>\n<ul class=\"list-inline\">\n    <li class=\"list-inline-item\"><strong>Database:</strong></li>\n    <li class=\"list-inline-item\">MySQL</li>\n    <li class=\"list-inline-item\">mongoDB</li>\n</ul>\n<ul class=\"list-inline\">\n    <li class=\"list-inline-item\"><strong>Cloud:</strong></li>\n    <li class=\"list-inline-item\">AWS</li>\n    <li class=\"list-inline-item\">Azure</li>\n</ul>\n<ul class=\"list-inline\">\n    <li class=\"list-inline-item\"><strong>DevOps:</strong></li>\n    <li class=\"list-inline-item\">GIT</li>\n    <li class=\"list-inline-item\">Docker</li>\n</ul>\n<ul class=\"list-inline\">\n    <li class=\"list-inline-item\"><strong>Test Automation:</strong></li>\n    <li class=\"list-inline-item\">Laravel Dusk</li>\n    <li class=\"list-inline-item\">Selenium</li>\n</ul><br>', 1),
(2, '<ul class=\"list-inline\">\n    <li class=\"list-inline-item\"><strong>LinkedIn:</strong></li>\n    <li class=\"list-inline-item\"><a class=\"text-decoration-none\" href=\"https://www.linkedin.com/in/dipankar-sarkar-176a74b/\" target=\"_blank\">https://www.linkedin.com/in/dipankar-sarkar-176a74b/</a></li>\n</ul>\n<ul class=\"list-inline\">\n    <li class=\"list-inline-item\"><strong>GitHub:</strong></li>\n    <li class=\"list-inline-item\"><a href=\"https://github.com/dipankar77\" target=\"_blank\">https://github.com/dipankar77</a></li>\n</ul>\n<ul class=\"list-inline\">\n    <li class=\"list-inline-item\"><strong>Email:</strong></li>\n    <li class=\"list-inline-item\"><a href=\"mailto:dipankar@codersprint.com?subject=CoderSprint Conatct\">dipankar@codersprint.com</a></li>\n</ul>\n<ul class=\"list-inline\">\n    <li class=\"list-inline-item\"><strong>WhatsApp:</strong></li>\n    <li class=\"list-inline-item\"><a href=\"https://api.whatsapp.com/send?phone=919330991909\">+919330991909</a></li>\n</ul>\n<ul class=\"list-inline\">\n    <li class=\"list-inline-item\"><strong>Phone:</strong></li>\n    <li class=\"list-inline-item\"><a href=\"tel:+919330991909\">+919330991909</a></li>\n</ul>', 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `app`
--
ALTER TABLE `app`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qa`
--
ALTER TABLE `qa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_category`
--
ALTER TABLE `quiz_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sc`
--
ALTER TABLE `sc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app`
--
ALTER TABLE `app`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `qa`
--
ALTER TABLE `qa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `quiz_category`
--
ALTER TABLE `quiz_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `sc`
--
ALTER TABLE `sc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
