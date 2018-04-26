-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 26, 2018 at 09:09 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superhero`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `name` varchar(64) NOT NULL,
  `date` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `date`, `message`) VALUES
(9, 'Superman', '0000-00-00 00:00:00', 'hej'),
(10, 'Superman', '0000-00-00 00:00:00', 'Hey Metron. Thanks for today. I\'ve had a blast of a party'),
(11, 'Superman', '0000-00-00 00:00:00', 'Det her er en test');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(10) NOT NULL,
  `likes` int(10) NOT NULL DEFAULT '0',
  `comments` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `likes`, `comments`) VALUES
(5, 113, 'Det her er en test for at se hvor fucking stressende det her er..'),
(6, 68, 'Super hyggeligt at se dig tidligere i dag'),
(7, 568, 'Alt for fed en person!'),
(8, 113, NULL),
(9, 166, 'Haha Nice profile man'),
(10, 55, 'I have never seen you before. Wanna be friends?'),
(11, 27, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `image` varchar(256) DEFAULT NULL,
  `name` varchar(128) NOT NULL,
  `age` int(11) NOT NULL,
  `superpower` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `image`, `name`, `age`, `superpower`) VALUES
(5, 'https://static.comicvine.com/uploads/scale_small/10/100647/4106515-2587640-metron__02__001__02_.jpg', 'Metron', 1300000000, 'Immortal'),
(6, 'https://static.comicvine.com/uploads/scale_small/10/100647/4144070-878249-black_risen006.jpg', 'Guardians of the Universe', 1300000000, 'Immortal'),
(7, 'https://static.comicvine.com/uploads/scale_small/10/100647/2957134-1364659370.jpg', 'Martian Manhunter', 225000000, 'Immortal'),
(8, 'https://static.comicvine.com/uploads/scale_small/10/100647/4154736-vandal+savage+final.jpg', 'Vandal Savage', 52000, 'Immortal'),
(9, 'https://static.comicvine.com/uploads/scale_small/3/31666/5396930-thorunworth2016001-cov-38b58.jpg', 'Thor', 2000, 'Extended Longevity'),
(10, 'https://static.comicvine.com/uploads/scale_small/3/31666/4956367-invim2015001-maleevvar-d8a38.jpg', 'Iron Man', 44, 'Super Rich'),
(11, 'https://static.comicvine.com/uploads/scale_small/3/31666/4943681-dpool2015007-cov-bec9c.jpg', 'Deadpool', 1000, 'Regenerative Healing Factor'),
(12, 'https://static.comicvine.com/uploads/scale_small/3/31666/5052983-capasr2016001-eptingvar-18bdb.jpg', 'Captain America', 36, 'Super Soldier'),
(13, 'https://pbs.twimg.com/profile_images/1402670329/tkfn5-9dj-dan_882851p_400x400.jpg', 'DJ dan', 2144, 'Pretty good DJ'),
(18, 'https://www.colourbox.dk/preview/7103973-tegneserie-superhelt-koerer-stansning.jpg', 'Green Man', 29, 'Levitate'),
(19, 'https://images-na.ssl-images-amazon.com/images/I/51Lia6un6WL._SX339_BO1,204,203,200_.jpg', 'Speedermen', 21, 'Better than Spiderman'),
(20, 'https://pbs.twimg.com/profile_images/734459168673796096/nK-bk60v_400x400.jpg', 'Fluffy Dog', 61, 'Cute AF '),
(23, 'https://imgix.ranker.com/node_img/173/3447659/original/big-bertha-comic-book-characters-photo-1?w=650&q=60&fm=jpg&fit=crop&crop=faces', 'Big Bertha', 41, 'Extremly huge'),
(24, 'https://qph.ec.quoracdn.net/main-thumb-62062-200-zyIh0Xq9OgfR1QBDggxig7jLZjB9PH3l.jpeg', 'Jarne W. Beutnagel', 1337, 'Master Brain');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
