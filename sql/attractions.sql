-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:8889
-- Generation Time: Apr 28, 2017 at 12:24 AM
-- Server version: 5.6.34-log
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attractions_tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

CREATE TABLE IF NOT EXISTS `attractions` (
  `id` int(10) unsigned NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'none',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`id`, `place`, `category`, `price`, `address`, `description`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Top of the Hill', 'restaurant', 'low', '100 E Franklin St #3', 'Contemporary late-night brewery offers housemade draft beer, eclectic American fare & patio seating.', 'http://www.thetopofthehill.com/', NULL, NULL),
(2, 'Carolina Coffee Shop', 'restaurant', 'low', '138 E Franklin St, Chapel Hill, NC 27514', 'Cozy, storied spot serving popular breakfasts plus lunch, dinner & drinks to a UNC crowd since 1922.', 'http://www.carolinacoffeeshop.com/', NULL, NULL),
(3, 'Mediterranean Deli', 'restaurant', 'medium', '410 W Franklin St, Chapel Hill', 'Mom-&-pop deli offering a range of prepared Mediterranean foods (with kosher options) & baked goods.', 'http://www.mediterraneandeli.com/', NULL, NULL),
(4, 'Lantern', 'restaurant', 'high', '423 W Franklin St, Chapel Hill', 'Asian fare made with locally sourced ingredients served in a hip storefront space.', 'http://www.lanternrestaurant.com/', NULL, NULL),
(5, 'Spanky''s', 'restaurant', 'medium', '101 E Franklin St, Chapel Hill', 'Buzzy, bi-level hub for burgers, North Carolina BBQ, craft beer & people-watching near UNC campus.', 'http://www.spankysrestaurant.com/', NULL, NULL),
(6, 'Cholanad', 'restaurant', 'medium', '308 W Franklin St, Chapel Hill', 'Traditional & contemporary South Indian cuisine served in a spacious, polished setting.', 'http://www.cholanad.com/', NULL, NULL),
(7, '411 West Italian Cafe', 'medium', 'none', '411 W Franklin St', 'Fresh pastas, wood-fired pizzas & other Italian staples, plus beer & wine galore, in a cozy space.', 'http://www.411west.com/', NULL, NULL),
(8, 'Monterrey Mexican Restaurant', 'restaurant', 'low', 'Village Plaza, 237 S Elliott Rd', 'Mexican favorites & many flavors of margaritas in a casual space with traditional accents.', 'http://monterreychapelhill.com/', NULL, NULL),
(9, 'Raaga Indian', 'restaurant', 'high', '3140 Environ Way, Chapel Hill', 'Stylish Indian eatery serving a menu of traditional & modern fare, plus cocktails amid exotic decor.', 'http://raagachapelhill.com/', NULL, NULL),
(10, 'Sunrise Biscuit Kitchen', 'restaurant', 'low', '1305 E Franklin St', 'No-frills drive-thru window serving sandwiches & country-style biscuits for breakfast & lunch.', 'http://www.sunrisebiscuits.com/main.html?src=%2Findex2.html', NULL, NULL),
(11, 'The Strowd', 'nightlife', 'low', '159 1/2 E Franklin St', 'Modern, spacious, industrial —\r\nThe Strowd is everything the\r\nother bars on East Franklin are not.', 'http://thestrowd.com/', NULL, NULL),
(12, 'Backbar', 'nightlife', 'low', '100 E Franklin St', 'Come relax with your friends, or bring a party! ', 'http://www.thetopofthehill.com/back-bar2/#back-bar', NULL, NULL),
(13, 'Goodfellow''s', 'nightlife', 'low', '149 E Franklin St, Chapel Hill', 'Rustic, easygoing hangout offering 65 varieties of beer, plus weekly trivia nights, karaoke & DJs.', 'http://goodfellowsbar.com/', NULL, NULL),
(14, 'He''s Not Here', 'nightlife', 'low', ' 112 1/2 W Franklin St, Chapel Hill', 'This storied neighborhood haunt offers a multitude of draft beers & an unpretentious vibe.', 'http://hesnotherenc.com/', NULL, NULL),
(15, 'The Library', 'nightlife', 'low', '120 E Franklin St', 'Raucous collegial hangout offering daily drink specials, plus a dance floor & TVs showing sports.', 'https://www.facebook.com/TheLibraryCH/', NULL, NULL),
(16, 'The Crunkleton', 'nightlife', 'medium', '320 W Franklin St', 'The Crunkleton is a private club that makes the old new again by serving up classic cocktails with modern twists to its members and their guests in an authentic, timeless setting.', 'http://thecrunkleton.com/', NULL, NULL),
(17, 'The Blue Horn Lounge', 'nightlife', 'low', '125 E Franklin St', 'Blue Horn Lounge is a small local bar, located conveniently on Franklin Street, right in front of the bus stop. Come on in and grab a beer while your waiting!', 'https://www.facebook.com/pg/bluehornlounge/about/?ref=page_internal', NULL, NULL),
(18, 'Country Fried Duck', 'nightlife', 'low', '157 E Rosemary St, Chapel Hill', 'Chapel Hill''s Country Party Bar', 'http://countryfriedduck.com/', NULL, NULL),
(19, 'Lumina Theatre', 'theater', 'low', '620 Market St', 'Modestly sized theater for first-run films with stadium seating, offering snacks, wine & local beer.', 'http://www.thelumina.com/', NULL, NULL),
(20, 'Silverspot Cinema', 'theater', 'low', 'University Place, 201 S Estes Dr #100', 'Classic movie theater', 'https://www.silverspot.net/Browsing', NULL, NULL),
(21, 'Varsity Theater', 'theater', 'low', '123 E Franklin St, Chapel Hill', 'Set in a circa-1927 building, this landmark cinema has been screening films for half a century.', 'http://www.varsityonfranklin.com/', NULL, NULL),
(22, 'Chelsea Theater', 'theater', 'none', 'Timberlyne Shopping Center, 1129 Weaver Dairy Rd, Chapel Hill', 'Local cinema showing indie & art house films on 3 screens, with beer & wine refreshments.', 'http://www.thechelseatheater.com/', NULL, NULL),
(23, 'Regal Cinemas Timberlyne 6', 'theater', 'low', '120 Banks Dr', 'Theater complex with multiple screens featuring new release films, plush seating & concession stand.', 'http://www.regmovies.com/Theatres/Theatre-Folder/Regal-Timberlyne-6-2077', NULL, NULL),
(24, 'Davis Library', 'library', 'none', 'University of North Carolina at Chapel Hill, 208 Raleigh St, Chapel Hill', 'college library', 'http://library.unc.edu/davis/', NULL, NULL),
(25, 'Chapel Hill Public Library', 'library', 'none', '100 Library Dr, Chapel Hill', 'Gorgeous public library', 'http://chapelhillpubliclibrary.org/', NULL, '0000-00-00 00:00:00'),
(26, 'Health Sciences Library', 'library', 'none', 'University of North Carolina at Chapel Hill, UNC School of Medicine, 335 S Columbia St, Chapel Hill', 'College library', 'http://hsl.lib.unc.edu/', NULL, NULL),
(27, 'Kenan Science Library', 'library', 'none', 'University of North Carolina at Chapel Hill, 125 South Rd, Chapel Hill', 'College Library', 'http://library.unc.edu/science/', NULL, NULL),
(28, 'Library of Music', 'library', 'none', ': University of North Carolina at Chapel Hill, UNC School of Medicine, 201 South Rd #300, Chapel Hill', 'College Library', 'http://library.unc.edu/music/', NULL, NULL),
(29, 'NC Botanical Garden', 'other', 'none', 'University of North Carolina at Chapel Hill, 100 Old Mason Farm Rd, Chapel Hill', 'Free-entry green oasis with display gardens, trails, art exhibits & an education center at UNC.', 'http://ncbg.unc.edu/', NULL, NULL),
(30, 'Finley Golf Club', 'other', 'low', 'University of North Carolina at Chapel Hill, 500 Finley Golf Course Rd, Chapel Hill', 'UNC Finley Golf Course in Chapel Hill, North Carolina, is the home of the North Carolina Tar Heels men''s and women''s golf teams.', 'http://www.uncfinley.com/', NULL, NULL),
(31, 'Dean E. Smith Center', 'other', 'none', 'University of North Carolina at Chapel Hill, 300 Skipper Bowles Dr, Chapel Hill', 'Longtime building for the University of North Carolina''s basketball games with expansive facilities.', 'http://www.goheels.com/ViewArticle.dbml?ATCLID=205720085', NULL, NULL),
(32, 'Ackland Art Museum', 'other', 'none', 'University of North Carolina at Chapel Hill, 101 S Columbia St', 'Wide-ranging collection affiliated with UNC-Chapel Hill, with eclectic programming & free admission.', 'http://ackland.org/', NULL, NULL),
(33, 'Kidzu Children''s Museum', 'other', 'low', 'University Place, 201 S Estes Dr, Chapel Hill', 'Kidzu Children''s Museum is a private, 501 non-profit children''s museum serving ages infant through tween.', 'https://www.kidzuchildrensmuseum.org/', NULL, NULL),
(34, 'The Carolina Inn', 'other', 'high', 'University of North Carolina at Chapel Hill, 211 Pittsboro St, Chapel Hill', 'Campus-based hotel dating from 1924, offering fine dining, shuttle service & sophisticated rooms.', 'http://www.carolinainn.com/', NULL, NULL),
(35, 'Morehead Planetarium', 'other', 'low', 'University of North Carolina at Chapel Hill, 250 E Franklin St, Chapel Hill', '68-ft.-tall campus planetarium & science center with exhibits, shows & classes open to the public.', 'http://moreheadplanetarium.org/', NULL, NULL),
(36, 'Coker Arboretum', 'other', 'none', 'University of North Carolina at Chapel Hill, 399 E Cameron Ave, Chapel Hill', 'Year-round botanical garden on a college campus with hundreds of native & exotic plant species.', 'http://ncbg.unc.edu/coker-arboretum/', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attractions`
--
ALTER TABLE `attractions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attractions`
--
ALTER TABLE `attractions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
