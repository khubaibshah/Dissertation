-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 05, 2018 at 03:05 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmultipage`
--

-- --------------------------------------------------------

--
-- Table structure for table `funvalley`
--

CREATE TABLE `funvalley` (
  `id` int(10) NOT NULL,
  `partydate` varchar(255) NOT NULL,
  `partytime` varchar(255) NOT NULL,
  `partybag` varchar(225) NOT NULL,
  `partyfoodselection1` varchar(255) NOT NULL,
  `partyfoodselection2` varchar(225) NOT NULL,
  `icecream` varchar(225) NOT NULL,
  `foodplatters` varchar(225) NOT NULL,
  `springrolls` varchar(225) NOT NULL,
  `sandwiches` varchar(225) NOT NULL,
  `childsname` varchar(255) NOT NULL,
  `childsage` varchar(225) NOT NULL,
  `morf` varchar(225) NOT NULL,
  `childrenattending` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address1` varchar(225) NOT NULL,
  `postcode` varchar(10) NOT NULL,
  `adultsinattendance` varchar(20) NOT NULL,
  `citytown` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funvalley`
--

INSERT INTO `funvalley` (`id`, `partydate`, `partytime`, `partybag`, `partyfoodselection1`, `partyfoodselection2`, `icecream`, `foodplatters`, `springrolls`, `sandwiches`, `childsname`, `childsage`, `morf`, `childrenattending`, `name`, `contact`, `email`, `address1`, `postcode`, `adultsinattendance`, `citytown`) VALUES
(2, '2018-04-11', 'shuaib_06@hotmail.com', '1111111111', ' ', '', '', '', '', '', 'islam', '0', '', 'United Kingdom', 'bolton', 'Bolton', '818 Marsden House', '', '0', '', ''),
(3, '', '', '0', 'summer', '', '', '', '', '', 'islam', '0', '', 'United Kingdom', 'bolton', 'Bolton', '818 Marsden House', '', '0', '', ''),
(4, '', '', '0', 'summer', '', '', '', '', '', 'islam', '0', '', 'United Kingdom', 'bolton', 'Bolton', '818 Marsden House', '', '0', '', ''),
(5, '2018-04-05', '16:00-18:00', '1111111111', 'a', '', '', '', '', '', 'islam', '0', '', 'United Kingdom', 'bolton', 'Bolton', '818 Marsden House', '', '0', '', ''),
(6, '2018-04-19', '13:00-15:00 ', 'Yes', 'a', '', '', '', '', '', 'islam', '0', '', 'United Kingdom', 'bolton', 'Bolton', '818 Marsden House', '', '0', '', ''),
(7, '2018-04-12', '16:00-18:00', 'Yes', 'None', 'None', '', '', '', '', 'islam', '0', '', 'United Kingdom', 'bolton', 'Bolton', '818 Marsden House', '', '0', '', ''),
(8, '2018-04-19', '16:00-18:00', 'Yes', 'Fish fingers (Standard Pizza slice fries and squash)', 'Beans (Standard Pizza slice fries and squash)', '', '', '', '', 'islam', '0', '', 'United Kingdom', 'bolton', 'Bolton', '818 Marsden House', '', '0', '', ''),
(9, '2018-04-11', '13:00-15:00 ', 'Yes', 'Fish fingers (Standard Pizza slice fries and squash)', 'Spaghetti (Standard Pizza slice fries and squash)', '', '', '', '', 'islam', '0', '', 'United Kingdom', 'bolton', 'Bolton', '818 Marsden House', '', '0', '', ''),
(10, '2018-04-21', '13:00-15:00 ', 'Yes', 'Chicken nuggets (Standard Pizza slice fries and squash)', 'Spaghetti (Standard Pizza slice fries and squash)', 'Bubblegum', 'Vegetable', 'Yes', 'Tuna', 'islam', '0', '', 'United Kingdom', 'bolton', 'Bolton', '818 Marsden House', '', '0', '', ''),
(11, '2018-04-11', '16:00-18:00', 'Yes', 'Chicken nuggets (Standard Pizza slice fries and squash)', 'Beans (Standard Pizza slice fries and squash)', 'Bubblegum', 'Meat', 'No', 'Tuna Sweetcorn', 'khubaib', '0', '', 'United Kingdom', 'bolton', 'Bolton', '818 Marsden House', '', '0', '', ''),
(12, '2018-03-28', '16:00-18:00', 'Yes', 'Chicken nuggets (Standard Pizza slice fries and squash)', 'Beans (Standard Pizza slice fries and squash)', 'Vanilla', 'None', 'No', 'Tuna', 'khubaib', '7759', '', '7', 'bolton', 'Bolton', '818 Marsden House', '', '0', '', ''),
(13, '2018-04-11', '16:00-18:00', 'Yes', 'Fish fingers (Standard Pizza slice fries and squash)', 'Spaghetti (Standard Pizza slice fries and squash)', 'Bubblegum', 'Vegetable', 'No', 'Egg Mayo', 'khubaib', '7926', '', '3', 'bolton', 'Bolton', '818 Marsden House', '', '0', '', ''),
(14, '2018-04-12', '10:00-12:00', 'Yes', 'Fish fingers (Standard Pizza slice fries and squash)', 'Beans (Standard Pizza slice fries and squash)', 'Vanilla', 'Meat', 'No', 'Tuna Sweetcorn', 'khubaib', '7759', 'female', '10', 'bolton', 'Bolton', '818 Marsden House', '', '0', '', ''),
(15, '2018-04-18', '16:00-18:00', 'Yes', 'Chicken nuggets (Standard Pizza slice fries and squash)', 'Beans (Standard Pizza slice fries and squash)', 'Bubblegum', 'Meat', 'No', 'Tuna Sweetcorn', 'khubaib', '7926', 'female', '9', 'khubaib ul haque', '07926247555', '818 Marsden House', '46 thomasson court', 'bl1 4qq', 'testlast', 'bolton'),
(16, '2018-04-05', '13:00-15:00 ', 'Yes', 'Fish fingers (Standard Pizza slice fries and squash)', 'Spaghetti (Standard Pizza slice fries and squash)', 'Vanilla', 'Vegetable', 'Yes', 'Cheese & Onion', 'khubaib', '7926', 'female', '12', 'khubaib ul haque', '07926247555', 'khubaib_12@hotmail.com', '11 stanley street', 'bb9 7el', 'khubaib ul haque', 'nelson'),
(17, '2018-04-11', '16:00-18:00', 'Yes', 'Chicken nuggets (Standard Pizza slice fries and squash)', 'Beans (Standard Pizza slice fries and squash)', 'Vanilla', 'Vegetable', 'No', 'Tuna Sweetcorn', 'khubaib', '7926', 'female', '10', '25', 'khubaib_12@hotmail.com', '11 stanley street', '07926247555', '0', 'khubaib ul haque', 'nelson'),
(18, '2018-04-14', '13:00-15:00 ', 'Yes', 'Fish fingers (Standard Pizza slice fries and squash)', 'Beans (Standard Pizza slice fries and squash)', 'Bubblegum', 'Vegetable', 'No', 'Tuna', 'khubaib', '7926', 'male', '10', '9', 'khubaib_12@hotmail.com', '11 stanley street', '07926247555', '0', 'khubaib ul haque', 'nelson'),
(19, '2018-04-13', '13:00-15:00 ', 'Yes', 'Chicken nuggets (Standard Pizza slice fries and squash)', 'Beans (Standard Pizza slice fries and squash)', 'Bubblegum', 'Vegetable', 'No', 'Tuna Sweetcorn', 'khubaib', '7926', 'female', '10', '1', 'khubaib_12@hotmail.com', '11 stanley street', '07926247555', '0', 'khubaib ul haque', 'nelson'),
(20, '2018-04-13', '16:00-18:00', 'Yes', 'Chicken nuggets (Standard Pizza slice fries and squash)', 'Spaghetti (Standard Pizza slice fries and squash)', 'Vanilla', 'Vegetable', 'No', 'Egg Mayo', 'khubaib', '7926', 'male', '10', '1', 'khubaib_12@hotmail.com', '63 glenworth gardens', '07759133005', '0', 'Humaira batool', 'wolverhampton'),
(21, '2018-04-13', '16:00-18:00', 'Yes', 'Chicken nuggets (Standard Pizza slice fries and squash)', 'Spaghetti (Standard Pizza slice fries and squash)', 'Vanilla', 'Vegetable', 'No', 'Egg Mayo', 'khubaib', '7926', 'male', 'slag', 'slag', 'khubaib_12@hotmail.com', '11 stanley street', '07926247555', '0', 'khubaib ul haque', 'nelson'),
(22, '2018-04-12', '16:00-18:00', 'Yes', 'Chicken nuggets (Standard Pizza slice fries and squash)', 'Beans (Standard Pizza slice fries and squash)', 'Bubblegum', 'Vegetable', 'Yes', 'Tuna', 'khubaib', '1', 'female', '1', '12', 'khubaib_12@hotmail.com', '11 stanley street', '07926247555', 'bb9 7el', 'khubaib ul haque', 'nelson'),
(23, '2018-04-21', '13:00-15:00 ', 'Yes', 'Chicken nuggets (Standard Pizza slice fries and squash)', 'Beans (Standard Pizza slice fries and squash)', 'Bubblegum', 'Vegetable', 'Yes', 'Tuna Sweetcorn', 'khubaib', '1', 'female', '1', '1', 'khubaib_12@hotmail.com', '11 stanley street', '07926247555', 'bb9 7el', 'khubaib ul haque', 'nelson'),
(24, '2018-04-27', '13:00-15:00 ', 'Yes', 'Fish fingers (Standard Pizza slice fries and squash)', 'Spaghetti (Standard Pizza slice fries and squash)', 'Bubblegum', 'Vegetable', 'No', 'Tuna Sweetcorn', 'khubaib', '7926', 'male', '1', '1', 'khubaib_12@hotmail.com', '11 stanley street', '07926247555', 'bb9 7el', 'khubaib ul haque', 'nelson'),
(25, '2018-04-22', '16:00-18:00', 'Yes', 'Chicken nuggets (Standard Pizza slice fries and squash)', 'Beans (Standard Pizza slice fries and squash)', 'Vanilla', 'Vegetable', 'No', 'Cheese & Salad', 'khubaib', '7926', 'male', '1', '1', 'khubaib_12@hotmail.com', '11 stanley street', '07926247555', 'bb9 7el', 'khubaib ul haque', 'nelson'),
(26, '2018-04-07', '16:00-18:00', 'Yes', 'Fish fingers (Standard Pizza slice fries and squash)', 'Beans (Standard Pizza slice fries and squash)', 'Bubblegum', 'Vegetable', 'Yes', 'Cheese & Onion', 'Humaira', '123', 'male', '12', 'te', 'khubaib_12@hotmail.com', '63 glenworth gardens', '07759133005', 'WV6 0SJ', 'Humaira batool', 'wolverhampton'),
(27, '2018-04-07', '16:00-18:00', 'Yes', 'Fish fingers (Standard Pizza slice fries and squash)', 'Beans (Standard Pizza slice fries and squash)', 'Bubblegum', 'pig', 'Yes', 'Cheese & Onion', 'test', '123', 'male', '23', 'khubaib ul haque', '07926247555', 'khubaib_12@hotmail.com', '11 stanley bitch', 'bb9', '786', 'bitch'),
(28, '2018-02-15', '16:00-18:00', 'No', 'Fish fingers (Standard Pizza slice fries and squash)', 'Beans (Standard Pizza slice fries and squash)', 'Vanilla', 'Meat', 'No', 'Tuna Sweetcorn', 'what', 'what', 'female', 'wh', 'what', 'what', 'what', 'what', 'what', 'what', '222'),
(29, '2018-02-15', '13:00-15:00 ', 'Yes', 'Chicken nuggets (Standard Pizza slice fries and squash)', 'Spaghetti (Standard Pizza slice fries and squash)', 'Bubblegum', 'Meat', 'Yes', 'Tuna Sweetcorn', 'test for fFINAL', '123', 'male', '12', '22', '1111111111', 'khubaib_12@hotmail.com', '818 Marsden House', 'BL1 2JX', '12', 'FINAL'),
(30, '2018-04-12', '13:00-15:00 ', 'Yes', 'Fish fingers (Standard Pizza slice fries and squash)', 'Sweetcorn (Standard Pizza slice fries and squash)', 'Bubblegum', 'Meat', 'Yes', 'Egg Mayo', 'testestest', 'testestest', 'female', '786', 'khubaib ul haque', '07926247555', 'khubaib_12@hotmail.com', '11 stanley street', 'bb9 7el', '786', 'nelson'),
(33, ' 2018-07-25 ', '13:00-15:00 ', 'No', ' Chicken nuggets (Standard Pizza slice fries and squash)', 'Sweetcorn (Standard Pizza slice fries and squash)', 'Bubblegum', 'None', 'No', 'Cheese & Salad', 'Sarah', '10', 'female', '10', 'Muniza', '01204666777', 'ameana.mohamed@outlook.com', '12 oriel street', 'BL3 5PD', '5', 'bolton'),
(34, '2018-04-11', '13:00-15:00 ', 'Yes', 'Chicken nuggets (Standard Pizza slice fries and squash)', 'Spaghetti (Standard Pizza slice fries and squash)', 'Vanilla', 'Chicken', 'Yes', 'Tuna Sweetcorn', 'test', '7925', 'male', '10', 'khubaib ul haque', '07926247555', 'khubaib_12@hotmail.com', '11 stanley street', 'bb9 7el', '12', 'nelson'),
(36, '2018-06-28', '16:00-18:00', 'Yes', 'Chicken nuggets (Standard Pizza slice fries and squash)', 'Beans (Standard Pizza slice fries and squash)', 'Vanilla', 'None', 'No', 'Tuna', 'b', 'hhhh', 'male', 'khkhkjhjk', 'mjbmb', 'ppppppppp', 'khubaib_12@hotmail.com', '818 Marsden House, Marsden Road', ',m ,m ,', 'jjjjj', 'n,m ,n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funvalley`
--
ALTER TABLE `funvalley`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funvalley`
--
ALTER TABLE `funvalley`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
