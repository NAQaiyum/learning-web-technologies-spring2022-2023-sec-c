-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 09:47 PM
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
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `username`, `email`, `password`) VALUES
(1, 'ppp', 'ppp1231234', 'ppp@gmail.com'),
(2, 'ppp', 'ppp1231234', 'ppp@gmail.com'),
(3, 'nnnn', 'nnn12345', 'nnn@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `agreement`
--

CREATE TABLE `agreement` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agreement`
--

INSERT INTO `agreement` (`id`, `username`, `password`) VALUES
(1, 'Nayeem', '12345'),
(4, 'Sadia', '1234'),
(5, 'Sarif Ahmed', '54321'),
(6, 'Alvi', '12345'),
(7, 'tanvir', '0000'),
(8, 'alvi', '00220022');

-- --------------------------------------------------------

--
-- Table structure for table `bike`
--

CREATE TABLE `bike` (
  `id` int(100) NOT NULL,
  `schedule` varchar(100) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bike`
--

INSERT INTO `bike` (`id`, `schedule`, `time`) VALUES
(1, 'Personal Bike', '9:30am - 3:30pm'),
(2, 'Uber', '5:00pm - 9:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `cal`
--

CREATE TABLE `cal` (
  `id` int(11) NOT NULL,
  `month` varchar(11) NOT NULL,
  `date` int(11) NOT NULL,
  `activites` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cal`
--

INSERT INTO `cal` (`id`, `month`, `date`, `activites`) VALUES
(1, 'Jannuary', 1, 'semester st'),
(2, 'Jannuary', 1, 'semester st'),
(3, 'january', 13, 'addingdropp'),
(4, 'january', 13, 'addingdropp'),
(5, 'february', 10, 'quiz start'),
(6, 'february', 10, 'quiz start'),
(7, 'march ', 15, 'mid term ex'),
(8, 'april', 2, 'final term '),
(9, 'may', 10, 'quiz start'),
(10, 'may', 27, 'final exam');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(100) NOT NULL,
  `schedule` varchar(100) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `schedule`, `time`) VALUES
(1, 'Private Car', '9:30am - 3:30pm'),
(2, 'Hiace Car', '5:00pm - 9:00pm');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contactNo` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `contactNo`, `username`, `password`) VALUES
(2, 'G.M. Alvi Siddique', '01518632105', 'alvi', '99999999');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `tuition` int(11) NOT NULL,
  `labs` int(11) NOT NULL,
  `miscellaneous` int(11) NOT NULL,
  `activities` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `username`, `tuition`, `labs`, `miscellaneous`, `activities`, `total`) VALUES
(3, 'alvi', 66000, 5000, 7500, 3500, 82000),
(4, 'tanvir', 55000, 3000, 5000, 2000, 65000);

-- --------------------------------------------------------

--
-- Table structure for table `firstsemester`
--

CREATE TABLE `firstsemester` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `firstsemester`
--

INSERT INTO `firstsemester` (`id`, `name`, `code`) VALUES
(1, 'Math1', 101),
(4, 'english1', 111),
(5, 'c++', 121);

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `username`, `password`) VALUES
(1, 'shafi', 'shafi123'),
(2, 'sworno', 'sworno123'),
(3, 'ooooo', 'ooooo123'),
(4, 'sadia', 'sadia123');

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `id` int(100) NOT NULL,
  `mission` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `mission`, `date`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia in perferendis reprehenderit moles', '2022-09-08'),
(2, 'Perferendis, odio quos, nam quo aspernatur excepturi, iusto blanditiis magnam illum nobis rerum prov', '2022-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notice` varchar(5000) NOT NULL,
  `time` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notice`, `time`) VALUES
(1, 'Hellow user, Welcome', '2023-04-02 18:13:01'),
(15, 'Final Term Coming Soon', '2023-04-09 06:40:46'),
(17, 'Final term on next month', '2023-04-09 06:44:15');

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `id` int(100) NOT NULL,
  `policy` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`id`, `policy`, `type`) VALUES
(1, 'Quality shall be adhered to in conformity with the prescribed national and international standards o', 'Information'),
(2, 'The ABC is committed to translate into actions the programs, projects and activities related to the ', 'Commitment');

-- --------------------------------------------------------

--
-- Table structure for table `secoundsemester`
--

CREATE TABLE `secoundsemester` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `secoundsemester`
--

INSERT INTO `secoundsemester` (`id`, `name`, `code`) VALUES
(1, 'english2', '202'),
(2, 'math2', '203'),
(3, 'python', '321');

-- --------------------------------------------------------

--
-- Table structure for table `somoy`
--

CREATE TABLE `somoy` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `somoy`
--

INSERT INTO `somoy` (`id`, `username`, `password`) VALUES
(1, 'alifa', 'alifa123'),
(2, 'partha', 'partha123'),
(3, 'partha', 'partha123'),
(4, 'sadia', 'sadia123'),
(5, 'rrr', 'rrrrrrrr13'),
(6, 'sadia', 'sadia123'),
(7, 'alvi', '4444');

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sec` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`id`, `name`, `sec`) VALUES
(1, 'Bangla', 'A'),
(2, 'Bangla', 'C'),
(3, 'English(101)', 'A,D,O'),
(4, 'CSE(221)', 'B,W,T');

-- --------------------------------------------------------

--
-- Table structure for table `sub_reg`
--

CREATE TABLE `sub_reg` (
  `id` int(100) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `section` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_reg`
--

INSERT INTO `sub_reg` (`id`, `subject`, `section`) VALUES
(1, 'Bangla', 'C'),
(2, 'English(101)', 'D'),
(3, 'Bangla', 'D'),
(4, 'CN', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `thesis`
--

CREATE TABLE `thesis` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thesis`
--

INSERT INTO `thesis` (`id`, `username`, `password`) VALUES
(1, 'Nayeem', '54321'),
(2, 'alvi', '55555555');

-- --------------------------------------------------------

--
-- Table structure for table `usermarks`
--

CREATE TABLE `usermarks` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `marks` int(11) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usermarks`
--

INSERT INTO `usermarks` (`id`, `username`, `marks`, `course`) VALUES
(1, 'alvi', 95, 'WebTech'),
(4, 'alvi', 97, 'DataCom'),
(5, 'tanvir', 98, 'WebTech'),
(6, 'tanvir', 91, 'OOP1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(26) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'Nayeem', '12345678', 'nayeem@gmail.com'),
(2, 'Sadia', 'sadia123', 'sadia@gmail.com'),
(3, 'Sumit', '12345678', 'sumit@gmail.com'),
(4, 'alvi', '00000000', 'alvi@abc.com'),
(7, 'tanvir', '11111111', 'tanvir@abc.com'),
(8, 'alvi', '11111111', 'abc@aaa.com');

-- --------------------------------------------------------

--
-- Table structure for table `vision`
--

CREATE TABLE `vision` (
  `id` int(100) NOT NULL,
  `vision` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vision`
--

INSERT INTO `vision` (`id`, `vision`, `date`) VALUES
(1, 'ABC envisions promoting professionals and excellent leadership catering to the technological progres', '2022-06-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agreement`
--
ALTER TABLE `agreement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bike`
--
ALTER TABLE `bike`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cal`
--
ALTER TABLE `cal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `firstsemester`
--
ALTER TABLE `firstsemester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secoundsemester`
--
ALTER TABLE `secoundsemester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `somoy`
--
ALTER TABLE `somoy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_reg`
--
ALTER TABLE `sub_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thesis`
--
ALTER TABLE `thesis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usermarks`
--
ALTER TABLE `usermarks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `agreement`
--
ALTER TABLE `agreement`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bike`
--
ALTER TABLE `bike`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cal`
--
ALTER TABLE `cal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `firstsemester`
--
ALTER TABLE `firstsemester`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `secoundsemester`
--
ALTER TABLE `secoundsemester`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `somoy`
--
ALTER TABLE `somoy`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_reg`
--
ALTER TABLE `sub_reg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `thesis`
--
ALTER TABLE `thesis`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usermarks`
--
ALTER TABLE `usermarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vision`
--
ALTER TABLE `vision`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
