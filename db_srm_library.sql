-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 07:42 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_srm_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL,
  `author` varchar(50) NOT NULL,
  `publisher` varchar(40) NOT NULL,
  `descr` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `title`, `type`, `author`, `publisher`, `descr`) VALUES
(100, 'harry potter', 'fiction', 'j.k.rowling', 'bloomsbury', 'Harry Potter is a series of fantasy novels written by British author J. K. Rowling. The novels chronicle the life of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry.'),
(101, 'mein kampf', 'nfiction', 'adolf hitler', 'Eher Verlag', 'Mein Kampf (German: [ma??n kampf], My Struggle) is a 1925 autobiographical book by Nazi Party leader Adolf Hitler. The work describes the process by which Hitler became antisemitic and outlines his political ideology and future plans for Germany. Volume 1 of Mein Kampf was published in 1925 and Volume 2 in 1926.The book was edited by Hitler\'s deputy Rudolf Hess.'),
(102, 'Introduction to Algorithms', 'cscience', 'Thomas H. Cormen', 'MIT Press', 'Introduction to Algorithms is a book by Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein. The first edition of the book was widely used as the textbook for algorithms courses at many universities and is commonly cited as a reference for algorithms in published papers, with over 10000 citations documented on CiteSeerX.');

-- --------------------------------------------------------

--
-- Table structure for table `book_issue_details`
--

CREATE TABLE `book_issue_details` (
  `Book_Issue_Id` int(11) NOT NULL,
  `Book_ISsue_Date` date NOT NULL,
  `Book_Id` int(11) NOT NULL,
  `User_Id` varchar(50) NOT NULL,
  `Return_Date` date NOT NULL,
  `Return_Status` varchar(50) NOT NULL,
  `Fine_Amount` int(11) NOT NULL,
  `Fine_Amount_Paid` int(11) NOT NULL,
  `Library_Name` varchar(100) NOT NULL,
  `Issued_By` varchar(50) NOT NULL,
  `Returned_By` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_master`
--

CREATE TABLE `book_master` (
  `Book_Id` int(11) NOT NULL,
  `Book_Title` varchar(100) NOT NULL,
  `Edition` varchar(20) NOT NULL,
  `Author1` varchar(50) NOT NULL,
  `Author2` varchar(50) NOT NULL,
  `Author3` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `Publisher` varchar(100) NOT NULL,
  `Book_Type` varchar(50) NOT NULL,
  `Book_Status` varchar(50) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Loc` varchar(50) NOT NULL,
  `Library_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `branch_master`
--

CREATE TABLE `branch_master` (
  `Branch_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dept_master`
--

CREATE TABLE `dept_master` (
  `Dept_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `library_master`
--

CREATE TABLE `library_master` (
  `Library_Name` varchar(100) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Building` varchar(100) NOT NULL,
  `Mail_Id` varchar(100) NOT NULL,
  `Phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `No_Days_Staff` int(11) NOT NULL,
  `No_Days_Stu` int(11) NOT NULL,
  `Fine_Amt_Staff` int(11) NOT NULL,
  `Fine_Amt_Stu` int(11) NOT NULL,
  `Library_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `regno` varchar(15) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`regno`, `uname`, `pwd`, `gender`, `dob`, `dept`, `email`, `mobile`) VALUES
('1243', '121', '12121', 'Male', '121/212/1', 'IT', '1212', '12345'),
('RA1511008010033', 'karan', '1213', 'Male', '10/10/1995', 'CSE', 'jabshda', '9786545'),
('RA1511008010034', 'skr', '123456789', 'Male', '28/09/1997', 'IT', 'karans.raju@gmail.com', '9444677235');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_issue_details`
--
ALTER TABLE `book_issue_details`
  ADD PRIMARY KEY (`Book_Issue_Id`);

--
-- Indexes for table `book_master`
--
ALTER TABLE `book_master`
  ADD PRIMARY KEY (`Book_Id`);

--
-- Indexes for table `branch_master`
--
ALTER TABLE `branch_master`
  ADD PRIMARY KEY (`Branch_Name`);

--
-- Indexes for table `dept_master`
--
ALTER TABLE `dept_master`
  ADD PRIMARY KEY (`Dept_Name`);

--
-- Indexes for table `library_master`
--
ALTER TABLE `library_master`
  ADD PRIMARY KEY (`Library_Name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`No_Days_Staff`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`regno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
