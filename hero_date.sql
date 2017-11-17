-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2017 at 10:16 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hero_date`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL,
  `message` longtext NOT NULL,
  `senderId` int(20) NOT NULL,
  `receiverId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `date`, `message`, `senderId`, `receiverId`) VALUES
(2, '2017-11-16 20:47:00', 'I don\'t know this Cartman person that you talk about. But he sounds keewl.', 3, 5),
(3, '2017-11-16 22:17:32', 'Hey Call Girl. U wanna go watch a movie?', 10, 8),
(4, '2017-11-16 22:18:55', 'You\'ve ever been with a cyborg before?', 9, 8),
(5, '2017-11-16 22:25:10', 'Oh man! This datingsite is way to much pressure! Aaargh!', 7, 5),
(8, '2017-11-16 23:01:38', 'hi yal', 2, 7),
(32, '2017-11-17 13:14:32', 'Testing receiving', 9, 1),
(35, '2017-11-17 13:37:33', 'saddsa', 1, 8),
(48, '2017-11-17 14:12:43', 'yuhhhu', 1, 2),
(49, '2017-11-17 14:14:30', 'yuhhhu', 1, 2),
(50, '2017-11-17 14:17:06', 'yuhhhu', 1, 2),
(51, '2017-11-17 17:08:41', 'asdasdsa', 1, 3),
(64, '2017-11-17 20:58:14', 'asda', 1, 12),
(65, '2017-11-17 20:58:16', 'sadsad', 1, 12),
(66, '2017-11-17 21:25:02', 'Ã¦Ã¸Ã¥ special chars?', 1, 5),
(67, '2017-11-17 21:51:06', 'asdadsÃ¦', 1, 12),
(68, '2017-11-17 21:51:40', '"', 1, 12),
(69, '2017-11-17 21:51:57', ' "', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `gifts`
--

CREATE TABLE `gifts` (
  `receiverId` int(11) NOT NULL,
  `senderId` int(11) NOT NULL,
  `date` timestamp NOT NULL,
  `giftId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gifts`
--

INSERT INTO `gifts` (`receiverId`, `senderId`, `date`, `giftId`) VALUES
(2, 3, '2017-11-17 17:50:57', 1),
(3, 1, '2017-11-17 17:59:16', 2),
(8, 1, '2017-11-17 17:59:39', 3),
(1, 9, '2017-11-17 18:08:02', 1),
(10, 7, '2017-11-17 18:31:44', 2);

-- --------------------------------------------------------

--
-- Table structure for table `gift_identify`
--

CREATE TABLE `gift_identify` (
  `id` int(1) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gift_identify`
--

INSERT INTO `gift_identify` (`id`, `name`, `image`, `description`) VALUES
(1, 'Quesadilla Especial', 'qsdilla.jpg', 'Restores a moderate amount of health to a targeted team member'),
(2, 'Chocolate Membrito', 'membrito.jpg', 'Mmmmm.... r\'member, right? Ahhh, i r\'member.'),
(3, 'Flowers', 'flower.jpg', 'Tasty flowers');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `receiverID` int(11) NOT NULL,
  `senderID` int(11) NOT NULL,
  `date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like_id`, `receiverID`, `senderID`, `date`) VALUES
(2, 6, 4, '2017-11-17 09:58:32'),
(3, 6, 9, '2017-11-17 10:04:17'),
(5, 10, 3, '2017-11-17 10:22:30'),
(6, 7, 8, '2017-11-17 10:22:30'),
(7, 4, 10, '2017-11-17 10:22:44'),
(8, 9, 10, '2017-11-17 10:22:44'),
(9, 8, 10, '2017-11-17 10:23:43'),
(10, 8, 5, '2017-11-17 10:23:43'),
(15, 3, 1, '2017-11-17 10:54:03'),
(16, 11, 1, '2017-11-17 10:54:09'),
(17, 11, 1, '2017-11-17 10:54:12'),
(18, 11, 1, '2017-11-17 10:54:21'),
(19, 11, 1, '2017-11-17 10:54:22'),
(20, 11, 1, '2017-11-17 10:54:23'),
(21, 6, 1, '2017-11-17 10:54:35'),
(22, 6, 1, '2017-11-17 10:54:38'),
(23, 12, 1, '2017-11-17 10:55:39'),
(24, 4, 1, '2017-11-17 10:57:21'),
(25, 13, 1, '2017-11-17 11:25:38'),
(26, 3, 1, '2017-11-17 17:56:31'),
(27, 3, 1, '2017-11-17 17:59:13'),
(28, 3, 1, '2017-11-17 18:53:11'),
(29, 3, 1, '2017-11-17 18:53:17'),
(30, 3, 1, '2017-11-17 18:53:18'),
(31, 3, 1, '2017-11-17 18:53:20'),
(32, 1, 1, '2017-11-17 20:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `pms`
--

CREATE TABLE `pms` (
  `id` int(11) NOT NULL,
  `message` longtext NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pms`
--

INSERT INTO `pms` (`id`, `message`, `from_id`, `to_id`, `date`) VALUES
(1, 'hi kenny', 1, 4, '2017-11-17 11:08:49'),
(6, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, 12, '2017-11-17 13:44:43'),
(7, 'Hi how are you?', 8, 1, '2017-11-17 17:35:29'),
(8, 'Good, how are you?', 1, 8, '2017-11-17 17:35:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `born` year(4) NOT NULL,
  `powersource` text NOT NULL,
  `image` text NOT NULL,
  `description` longtext NOT NULL,
  `coins` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `gender`, `born`, `powersource`, `image`, `description`, `coins`) VALUES
(1, 'aaaaaaa', 'other', 2001, 'anonymitet', 'placeholder.png', 'eeeeeeeee', 500),
(2, 'Wonder Bebe', 'female', 2007, 'Cheers', 'bebe.png', 'Bebe is usually a friendly person, and is seen hanging out with other characters, mainly the other girls in school. However, she has had rocky relations with the male students.\r\nBebe has long, frizzy golden blonde hair, parted to her left side. While her hair hangs down to about her right elbow.', 55),
(3, 'The Coon', 'male', 2007, 'Coon DNA', 'The-coon.png', 'The Coon is a "superhero" and the costumed alter-ego of Eric Cartman. He first appears in the self-titled episode "The Coon." He was also the leader of Coon and Friends in "Coon 2: Hindsight," but he was kicked out by the other members because he was beating them up and blackmailing other heroes.', 1057),
(4, 'Mysterion', 'male', 2007, 'Cthulu', 'Mysterion_2.png', 'Mysterion was first introduced in "The Coon", when he appeared near Cartman (as the Coon) on the roof of Walgreens. Cartman tried to find out his identity (a process largely relying on Mysterion "tripping up" over his own speech), but he fails. Mysterion leaves and reports to the local police station the next night to report various crimes - mostly just public order offenses (however, the police are quite impressed). Upon leaving, he is confronted again by the Coon, who feels that he is being ripped off. ', 3),
(5, 'Super Craig', 'male', 2007, 'Love', 'Superherores-super-craig.png', 'Super Craig Tucker is super all the time, even when not playing superheroes. Super strong. Super pissed. Super at flipping people off and punching them really hard.', 198),
(6, 'Human Kite', 'male', 2006, 'Solar Winds', 'Humankite.transparent.png', 'An alien combating the persecution of kites across the galaxy, Human Kite, aka Kyle Broflovski, is an Elementalist/Blaster hybrid with fucking laser eyes. Nemesis: Human Kite from an Alternate Universe.', 685),
(7, 'Wonder Tweek', 'male', 2008, 'Love / Caffeine', 'Wonder-tweek-000.png', 'As Tweek Tweak innocently watched the Weather Channel, a solar anomaly granted him power over the primal elements of earth, lightning, water and caffeine.', 241),
(8, 'Call Girl', 'female', 2007, '\r\nTechnology', 'wendy.png', 'A Gadgeteer and white-hat hacker with a heart of gold, Call Girl viciously trolls crime on social media and IRL. Equally adept at doxing, trolling, and debuffing.', 305),
(9, 'Tupperware', 'male', 2007, 'SkyMaul catalog', 'tupperware.png', 'Tupperware is a superhero alter-ego of Token Black, who appears in the superhero arc. He is a member of the superheroes group Coon and Friends. His voice is slightly echoed by the plastic jug surrounding his head. In his imaginary backstory, he became Tupperware after he was run over and put back together with Tupperware parts.\r\n\r\nA one-in-a-million pantry accident turned Token Black into Tupperware, Cyborg superhero with the power to construct deadly Tupper Turrets and keep food fresh.', 265),
(10, 'Toolshed', 'male', 2007, '220v', 'toolshed.png', 'A freak lightning strike transformed affable everybody Stan Marsh into Toolshed, master of power tools. Great shame: useless with a hammer', 165),
(11, 'Captain Hindsight', 'male', 1981, 'Superhuman hindsight', 'Captain-hindsight', 'Jack Brolin, a news reporter, wanted to improve his hindsight by using an experimental machine. However, a retroactive spider got into the machine and his hindsight was blasted to superhuman levels. He became known under the pseudonym, Captain Hindsight, as he fought for peace and the American way with his 3 companions, Shoulda, Coulda, and Woulda.', 455),
(12, 'Wonder Woman', 'female', 1994, 'Superhuman power', 'wwoman.jpg', 'Princess Diana commands respect both as Wonder Woman and Diana Prince; her epithetical title – The Amazon Princess – illustrates the dichotomy of her character. She is a powerful, strong-willed character who does not back down from a fight or a challenge. Yet, she is a diplomat who strongly "favors the pen", and a lover of peace who would never seek to fight or escalate a conflict. She\'s simultaneously both the most fierce and most nurturing member of the Justice League; and her political connections as a United Nations Honorary Ambassador and the ambassador of a warrior nation makes her an invaluable addition to the team. With her powerful abilities, centuries of training and experienced at handling threats that range from petty crime to threats that are of a magical or supernatural nature, Diana is capable of competing with nearly any hero or villain.', 465),
(13, 'Fastpass', 'male', 2007, 'Bionic Implants', 'Fastpass-00.png', '<b>Fastpass is a Speedster.</b>\r\n\r\n\r\nMild-mannered stand-up comedian Jimmy Valmer by day, classic Speedster by night, Fastpass blind sides evil with quickness, invisibility, and a potent heal. Also provides a handy fast-travel service.\r\n', 428);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sendBy` (`senderId`),
  ADD KEY `receiverId` (`receiverId`);

--
-- Indexes for table `gifts`
--
ALTER TABLE `gifts`
  ADD KEY `receiverId` (`receiverId`),
  ADD KEY `senderId` (`senderId`),
  ADD KEY `receiverId_2` (`receiverId`),
  ADD KEY `giftId` (`giftId`);

--
-- Indexes for table `gift_identify`
--
ALTER TABLE `gift_identify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`),
  ADD KEY `receiverID` (`receiverID`),
  ADD KEY `receiverID_2` (`receiverID`),
  ADD KEY `senderID` (`senderID`);

--
-- Indexes for table `pms`
--
ALTER TABLE `pms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_id` (`from_id`),
  ADD KEY `to_id` (`to_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `pms`
--
ALTER TABLE `pms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`receiverId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`senderId`) REFERENCES `users` (`id`);

--
-- Constraints for table `gifts`
--
ALTER TABLE `gifts`
  ADD CONSTRAINT `gifts_ibfk_1` FOREIGN KEY (`receiverId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `gifts_ibfk_2` FOREIGN KEY (`senderId`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `gifts_ibfk_3` FOREIGN KEY (`giftId`) REFERENCES `gift_identify` (`id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`receiverID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`senderID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pms`
--
ALTER TABLE `pms`
  ADD CONSTRAINT `pms_ibfk_1` FOREIGN KEY (`from_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pms_ibfk_2` FOREIGN KEY (`to_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
