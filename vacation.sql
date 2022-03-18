-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 20, 2019 at 05:40 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vacation`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `locationId` int(11) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `locationPic` text NOT NULL,
  PRIMARY KEY (`locationId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`locationId`, `location`, `locationPic`) VALUES
(1, 'Florida', 'images/Florida.jpg'),
(2, 'France', 'images/France.jpg'),
(3, 'Senegal', 'images/Senegal.jpg'),
(4, 'Spain', 'images/Spain.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `reviewId` int(11) NOT NULL AUTO_INCREMENT,
  `review` text NOT NULL,
  `userId` int(11) NOT NULL,
  `locationId` int(11) NOT NULL,
  PRIMARY KEY (`reviewId`),
  KEY `userId` (`userId`),
  KEY `locationId` (`locationId`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewId`, `review`, `userId`, `locationId`) VALUES
(11, 'Go shelling along white sands and soak up the famous sunsets of Cape Coral, one of the best places to stay in Florida due to its close proximity to the lovely Sanibel Island and the beaches of Fort Myers. You can tee off on the sunny Coral Oaks Golf Course, which has no less than eight lakes, or gear up for a family day at the super-fun Sun Splash Family Water Park. For a more peaceful water-bound activity, rent paddleboards or kayaks and set off with a guide into the balmy barrier island waters.', 1, 1),
(13, 'The surfer hub of New Smyrna Beach offers something a little different from other Florida vacation spots, such as nearby Daytona Beach. Things here roll at a slightly slower pace, allowing you to enjoy the gorgeous white-sand beaches, eco activities, and community events in a relaxed fashion. The Artistsâ€™ Workshop Gallery hosts changing monthly exhibitions and there are several other spaces where you can witness the artistic talents of the local community.', 8, 1),
(14, 'Visit one of Paris&#39; most popular attractions the easy way, with priority access that allows you to skip the long lines. Learn all about the history of the sprawling palace on a guided tour, which includes highlights like the Hall of Mirrors, the State Apartments, and the gardens. Enjoy a delicious lunch with impressive views over the Grand Canal.', 8, 2),
(15, 'Skip the line to the 2nd level of the Eiffel Tower with this combo ticket package in Paris. You&#39;ll have access to go directly up to the 2nd level for an aerial look at the city, plus receive entrance (standard, not skip the line) to the less-visited 3rd level, aka the Summit, for an even higher view. When your Eiffel Tower experience is over, enjoy a 1-hour cruise on the Seine for a look at Paris&#39; riverfront landmarks. Select your preferred time to visit the tower when booking.', 1, 2),
(16, 'Few locals speak English in Senegal. Instead, youâ€™ll hear a mix of Wolof and French. During my travels, I only occasionally encountered guides or drivers who spoke even a little bit of English â€” itâ€™s slightly more common to find people who might speak some Italian, Spanish or even German, thanks to a recent rise in European tourism. People will usually try their best, especially if you start with a friendly â€œBonjour,â€ but knowing a few key words in French can be useful, too.', 1, 3),
(17, 'Senegal is known for its happening music scene and delicious cuisine. Traditional eats like thiebou dieune (savory rice with fresh fish) are often accompanied by live African drumbeats or reggae jams at practically every dining establishment. Beachfront dining is relaxing and cheap, so visit Le Nâ€™Gor in Dakar for marinated shrimp and a crisp glass of wine. You can have a full meal of barbecued fresh-fish skewers, salad and Gazelle beer for under $10 at Chez Poulo in Saly alongside live guitar and typical Wolof tunes. If youâ€™re craving live music, the outdoor stage at Just 4 U is practically an institution in Dakar, featuring many different styles of music.', 8, 3),
(18, 'A little further down the coast, Posada Las Garzas stands just across the street from Playa de Berria, a Blue-Flag sweep of fine white sand thatâ€™s popular with Spanish holidaymakers. For country-style seaside comfort, you canâ€™t do better than this welcoming mango-yellow house, done up in a brightly coloured rustic-modern style, with polished-terracotta floors, wooden banisters, slim staircases and vivid pieces of art on the walls.', 8, 4),
(19, 'Las Arenas Balneario Resort is in a great position for Malvarrosa beach, and also offers an added element of grandeur to any beach stay. Guests are able to retreat from the shoreline to the shaded gardens (where there&#39;s a large swimming pool) or to the luxurious spa, with its thermal pools and soothing treatments. Or else opt for Hotel Balandret, a sleek boutique hotel overlooking Playa de las Arenas. It is a top spot for sampling the famous Valencian paella and other seafood dishes at any of the seafront restaurants or admiring the yachts in the swish marina.', 1, 4),
(20, 'C&#39;est vrai jolie!!!', 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `roleId` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(15) NOT NULL,
  PRIMARY KEY (`roleId`),
  KEY `rollId` (`roleId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleId`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `userName` text NOT NULL,
  `password` varchar(150) NOT NULL,
  `userRole` int(11) NOT NULL,
  PRIMARY KEY (`userId`),
  KEY `userRoll` (`userRole`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `password`, `userRole`) VALUES
(1, 'bayom', '$2y$10$G1rT./2PPdd3Dymww2VL8OjphxfNwTKF6zXJBKiMmHO7ZwSGYSw/W', 2),
(2, 'Admin', '$2y$10$pRcPtWA7S03IHKZyqtYKQOOEoTmkTPgiWdxLrsQhGo0rLXqJCkGTy', 1),
(8, 'meissa', '$2y$10$q0C/gLXu/8Q.TO6gSB9/4OyzVCpWv1.LFS2MgKLEGo55dSEQuntk.', 2),
(9, 'evan', '$2y$10$1TeS.ksK6dMqLVLiebGwKOS0.Tqy3D84xB17ee1UzoM4NTa2.xgK6', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `LFK` FOREIGN KEY (`locationId`) REFERENCES `locations` (`locationId`),
  ADD CONSTRAINT `uFK` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`userRole`) REFERENCES `roles` (`roleId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
