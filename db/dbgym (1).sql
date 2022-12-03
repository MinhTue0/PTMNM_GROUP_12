-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 09:46 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgym`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_user`
--

CREATE TABLE `auth_user` (
  `id` int(11) NOT NULL,
  `login_id` varchar(20) NOT NULL,
  `pass_key` varchar(30) NOT NULL,
  `security` varchar(50) NOT NULL,
  `level` int(2) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_user`
--

INSERT INTO `auth_user` (`id`, `login_id`, `pass_key`, `security`, `level`, `sex`, `name`) VALUES
(1, 'admin1', 'admin1', 'admin1', 5, 'male', 'Mr.Admin Toàn'),
(2, 'cashier', 'cashier', 'cashier1', 4, 'male', 'cashier'),
(3, 'root', 'cashier', 'root', 1, 'female', 'Nam'),
(4, 'tam123', 'tam123', 'tam123', 1, 'female', 'tam');

-- --------------------------------------------------------

--
-- Table structure for table `healthstatus`
--

CREATE TABLE `healthstatus` (
  `hs_id` int(20) NOT NULL,
  `id` int(7) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date1` datetime NOT NULL,
  `bodyfat` varchar(25) NOT NULL,
  `water` varchar(30) NOT NULL,
  `muscle` varchar(30) NOT NULL,
  `calorie` varchar(30) NOT NULL,
  `bone` varchar(30) NOT NULL,
  `remarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `healthstatus`
--

INSERT INTO `healthstatus` (`hs_id`, `id`, `name`, `date1`, `bodyfat`, `water`, `muscle`, `calorie`, `bone`, `remarks`) VALUES
(1, 14, '14', '0000-00-00 00:00:00', '200', '100', '12', '13', '14', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `mem_types`
--

CREATE TABLE `mem_types` (
  `id` int(11) NOT NULL,
  `mem_type_id` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `days` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mem_types`
--

INSERT INTO `mem_types` (`id`, `mem_type_id`, `name`, `days`, `rate`, `details`) VALUES
(2, 'XKCLTDSJ', 'Monthly', 30, 1000, 'Monthly'),
(4, 'CEJHUNAD', 'test', 1, 300, 'test'),
(5, 'JHUNWKBI', 'VIP', 90, 1000000, 'Member Vip');

-- --------------------------------------------------------

--
-- Table structure for table `subsciption`
--

CREATE TABLE `subsciption` (
  `id` int(7) NOT NULL,
  `mem_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sub_type` varchar(100) NOT NULL,
  `paid_date` date NOT NULL,
  `expiry` date NOT NULL,
  `total` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `invoice` varchar(30) NOT NULL,
  `sub_type_name` text NOT NULL,
  `bal` int(11) NOT NULL,
  `exp_time` bigint(20) NOT NULL,
  `renewal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subsciption`
--

INSERT INTO `subsciption` (`id`, `mem_id`, `name`, `sub_type`, `paid_date`, `expiry`, `total`, `paid`, `invoice`, `sub_type_name`, `bal`, `exp_time`, `renewal`) VALUES
(16, 1454763163, 'we', 'XKCLTDSJ', '2016-02-06', '2016-03-07', 1000, 0, '54763190hrs', 'Monthly', 1000, 1457305200, 'yes'),
(17, 1454208171, 'Minh Tam', 'XKCLTDSJ', '2022-11-27', '2022-12-27', 1000, 3000, '69524453238', 'Monthly', -2000, 1672095600, 'yes'),
(23, 1669803777, 'Tính', 'CEJHUNAD', '2022-11-30', '2022-12-01', 300, 300, '69803882sdu', 'test', 0, 1669849200, 'yes'),
(24, 1669862425, 'Minh Khánh', 'CEJHUNAD', '2022-12-01', '2022-12-02', 300, 300, '69862475jab', 'test', 0, 1669935600, 'yes'),
(25, 1669864876, 'Nam', 'XKCLTDSJ', '2022-12-01', '2022-12-31', 1000, 5700, '69864948ot2', 'Monthly', -4700, 1672441200, 'no'),
(26, 1669879887, 'Thanh Tu?n', 'CEJHUNAD', '2022-12-01', '2022-12-02', 300, 300, '69879987vh6', 'test', 0, 1669935600, 'yes'),
(29, 1669883513, 'Van Thanh', 'XKCLTDSJ', '2022-12-01', '2022-12-31', 1000, 400, '69883555md4', 'Monthly', 600, 1672441200, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `id` int(11) NOT NULL,
  `mem_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `mem_id`, `name`, `details`, `date`) VALUES
(2, 1454208171, 'abc', 'y5heher', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(7) NOT NULL,
  `newid` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `zipcode` bigint(20) NOT NULL,
  `birthdate` date NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pic_add` text NOT NULL,
  `height` float NOT NULL,
  `weight` int(11) NOT NULL,
  `nationality` text NOT NULL,
  `facebookaccount` text NOT NULL,
  `twitteraccount` text NOT NULL,
  `contactperson` text NOT NULL,
  `previousgym` text NOT NULL,
  `yearstraining` text NOT NULL,
  `joining` date NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `proof` text NOT NULL,
  `other_proof` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `newid`, `name`, `address`, `zipcode`, `birthdate`, `contact`, `email`, `pic_add`, `height`, `weight`, `nationality`, `facebookaccount`, `twitteraccount`, `contactperson`, `previousgym`, `yearstraining`, `joining`, `age`, `sex`, `proof`, `other_proof`) VALUES
(14, 1454208171, 'Minh Tam', 'Cam Hòa, Cam Lâm, Khánh Hòa', 325325345324, '2022-12-01', 2353455, 'hoa@gmail.com', '../uploads/z3888230258016_ea3f64bb27c374a7d77acb48dddd0aed.jpg', 21, 200, 'VietNam', 'we', 'we', 'WE', 'WE', 'WE', '2022-11-27', 28, 'Male', 'GSIS Card', ' '),
(15, 1454763163, 'b', 'weare', 0, '2016-02-04', 9209668897, 'we@gmail.com', '../../uploads/1008768.jpg', 0, 0, 'we', 'we', 'we', 'we', 'we', 'we', '2016-02-06', 34, 'Male', 'GSIS Card', ' '),
(16, 325436377, 'Khánh', 'Nha Trang', 1424154, '2022-11-02', 935969923, 'khanh@gmail.com', 'avt.img', 20, 20, 'VN', 'we', 'we', 'we', 'we', 'we', '2022-11-09', 23, 'male', 'CCCD', ''),
(19, 1669803777, 'Tính', 'Cam Hòa, Cam Lâm, Khánh Hòa', 325325345324, '0000-00-00', 2353455, 'hoangchienpro195@gmail.com', '../../uploads/SOLANI on Twitter.jpg', 21, 22, 'VietNam', 'we', 'wew', 'Hoàng Minh Tâm', 'we', 'we', '2022-11-30', 28, 'Male', 'College/School ID', 'Drink'),
(20, 1669862425, 'Minh Khánh', 'Nha Trang', 325325345324, '0000-00-00', 2353455, 'hoangchienpro195@gmail.com', '../../uploads/SOLANI on Twitter.jpg', 21, 100, 'VietNam', 'we', 'we', 'h?ng ido gtre', 'we', 'we', '2022-12-01', 28, 'Female', 'Voter Card', 'Drink'),
(21, 1669864876, 'Nam', 'Nha Trang', 325325345324, '2022-12-16', 2353455, 'hoangchienpro195@gmail.com', '../uploads/download (1).jpg', 21, 22, 'VietNam', 'we', 'we', 'h?ng ido gtre', 'we', 'we', '2022-12-01', 28, 'Male', 'Voter Card', '11'),
(22, 1669879887, 'Thanh Tu?n', 'Cam Hòa, Cam Lâm, Khánh Hòa', 325325345324, '2022-12-15', 2353455, 'hoangchienpro195@gmail.com', '../../uploads/matching icons, not mine.jpg', 21, 22, 'VietNam', 'we', 'we', 'Hoàng Minh Tâm', 'we', 'we', '2022-12-01', 28, 'Male', 'GSIS Card', 'Drink'),
(24, 1669883513, 'Van Thanh', 'Nha Trang', 325325345324, '2022-12-15', 2353455, 'hoa@gmail.com', '../../uploads/4a944bbfd74e152ccce7db6fc9feb04f.jpg', 21, 22, '', 'we', 'we', 'Kali HA Enssu', 'we', 'we', '2022-12-01', 28, 'Male', 'Voter Card', '11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `healthstatus`
--
ALTER TABLE `healthstatus`
  ADD PRIMARY KEY (`hs_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `mem_types`
--
ALTER TABLE `mem_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mem_type_id` (`mem_type_id`);

--
-- Indexes for table `subsciption`
--
ALTER TABLE `subsciption`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mem_id` (`mem_id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mem_id` (`mem_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `newid` (`newid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `healthstatus`
--
ALTER TABLE `healthstatus`
  MODIFY `hs_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mem_types`
--
ALTER TABLE `mem_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subsciption`
--
ALTER TABLE `subsciption`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `healthstatus`
--
ALTER TABLE `healthstatus`
  ADD CONSTRAINT `healthstatus_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_data` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subsciption`
--
ALTER TABLE `subsciption`
  ADD CONSTRAINT `subsciption_ibfk_1` FOREIGN KEY (`mem_id`) REFERENCES `user_data` (`newid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `time_table`
--
ALTER TABLE `time_table`
  ADD CONSTRAINT `time_table_ibfk_1` FOREIGN KEY (`mem_id`) REFERENCES `user_data` (`newid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
