-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 10:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tee-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`) VALUES
(1, 'Tech', 'This is the Technology category'),
(7, 'Food', 'food doood'),
(8, 'wildlife', 'Wildlife'),
(10, 'Uncategorized', 'Uncategorized'),
(12, 'Education', 'For Edu'),
(14, 'Politics', 'For politics');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `is_featured` int(11) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `category`, `body`, `is_featured`, `thumbnail`, `date`) VALUES
(3, 2, 1, 'Fashion', 'Tech', 'This is about fashion', 0, '1669291695summer_relax-wallpaper-1280x1024 (2).jpg', '2022-11-24 13:08:15'),
(4, 1, 7, 'Foodie', 'Food', 'This about food', 0, '1669292723workplace.jpg', '2022-11-24 13:25:23'),
(8, 1, 12, 'About Education', 'Education', 'At W3Schools you will find complete references about HTML elements, attributes, events, color names, entities, character-sets, URL encoding, language codes, HTTP messages, browser support, and more: Uncategorized', 0, '1669894156full_moon_reflection-wallpaper-1280x1024.jpg', '2022-12-01 12:29:16'),
(9, 1, 10, 'Sports today', 'Uncategorized', 'This is the headline body Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dolorem quos doloribus iure! Soluta culpa porro excepturi. Architecto, nihil optio suscipit cupiditate quam distinctio hic reiciendis tempora ratione ea consectetur qui, pariatur quisquam porro omnis repellendus ipsa, id laudantium totam veniam quibusdam. hitecto, nihil optio suscipit cupiditate quam distinctio hic reiciendis tempora ratione ea consectetur qui, pariatur quisquam porro omnis repellendus ipsa, id laudantium totam veniam quibusdam.', 0, '1669955876studio2.jpg', '2022-12-02 05:37:56'),
(10, 1, 14, 'Nigeria today', 'Politics', 'This is the headline body Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dolorem quos doloribus iure! Soluta culpa porro excepturi. Architecto, nihil optio suscipit cupiditate quam distinctio hic reiciendis tempora ratione ea consectetur qui, pariatur quisquam porro omnis repellendus ipsa, id laudantium totam veniam quibusdam. hitecto, nihil optio suscipit cupiditate quam distinctio hic reiciendis tempora ratione ea consectetur qui, pariatur quisquam porro omnis repellendus ipsa, id laudantium totam veniam quibusdam.', 0, '1669955999landscape15.jpg', '2022-12-02 05:39:59'),
(11, 1, 8, 'This is wildlife', 'wildlife', 'This is the headline body Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta dolorem quos doloribus iure! Soluta culpa porro excepturi. Architecto, nihil optio suscipit cupiditate quam distinctio hic reiciendis tempora ratione ea consectetur qui, pariatur quisquam porro omnis repellendus ipsa, id laudantium totam veniam quibusdam. hitecto, nihil optio suscipit cupiditate quam distinctio hic reiciendis tempora ratione ea consectetur qui, pariatur quisquam porro omnis repellendus ipsa, id laudantium totam veniam quibusdam.', 0, '1669956061landscape7.jpg', '2022-12-02 05:41:01'),
(12, 1, 10, 'qwerty', 'Uncategorized', 'Checkboxes and radios\r\nEach checkbox and radio &lt;input&gt; and &lt;label&gt; pairing is wrapped in a &lt;div&gt; to create our custom control. Structurally, this is the same approach as our default .form-check.\r\n\r\nWe use the sibling selector (~) for all our &lt;input&gt; states&mdash;like :checked&mdash;to properly style our custom form indicator. When combined with the .custom-control-label class, we can also style the text for each item based on the &lt;input&gt;&rsquo;s state.\r\n\r\nWe hide the default &lt;input&gt; with opacity and use the .custom-control-label to build a new custom form indicator in its place with ::before and ::after. Unfortunately we can&rsquo;t build a custom one from just the &lt;input&gt; because CSS&rsquo;s content doesn&rsquo;t work on that element.\r\n\r\nIn the checked states, we use base64 embedded SVG icons from Open Iconic. This provides us the best control for styling and positioning across browsers and devices.\r\nCheckboxes and radios\r\nEach checkbox and radio &lt;input&gt; and &lt;label&gt; pairing is wrapped in a &lt;div&gt; to create our custom control. Structurally, this is the same approach as our default .form-check.\r\n\r\nWe use the sibling selector (~) for all our &lt;input&gt; states&mdash;like :checked&mdash;to properly style our custom form indicator. When combined with the .custom-control-label class, we can also style the text for each item based on the &lt;input&gt;&rsquo;s state.\r\n\r\nWe hide the default &lt;input&gt; with opacity and use the .custom-control-label to build a new custom form indicator in its place with ::before and ::after. Unfortunately we can&rsquo;t build a custom one from just the &lt;input&gt; because CSS&rsquo;s content doesn&rsquo;t work on that element.\r\n\r\nIn the checked states, we use base64 embedded SVG icons from Open Iconic. This provides us the best control for styling and positioning across browsers and devices.\r\nCheckboxes and radios\r\nEach checkbox and radio &lt;input&gt; and &lt;label&gt; pairing is wrapped in a &lt;div&gt; to create our custom control. Structurally, this is the same approach as our default .form-check.\r\n\r\nWe use the sibling selector (~) for all our &lt;input&gt; states&mdash;like :checked&mdash;to properly style our custom form indicator. When combined with the .custom-control-label class, we can also style the text for each item based on the &lt;input&gt;&rsquo;s state.\r\n\r\nWe hide the default &lt;input&gt; with opacity and use the .custom-control-label to build a new custom form indicator in its place with ::before and ::after. Unfortunately we can&rsquo;t build a custom one from just the &lt;input&gt; because CSS&rsquo;s content doesn&rsquo;t work on that element.\r\n\r\nIn the checked states, we use base64 embedded SVG icons from Open Iconic. This provides us the best control for styling and positioning across browsers and devices.', 1, '1669975566landscape4.jpg', '2022-12-02 11:06:06'),
(13, 1, 14, 'This is politics nigeria', 'Politics', 'Checkboxes and radios\r\nEach checkbox and radio &lt;input&gt; and &lt;label&gt; pairing is wrapped in a &lt;div&gt; to create our custom control. Structurally, this is the same approach as our default .form-check.\r\n\r\nWe use the sibling selector (~) for all our &lt;input&gt; states&mdash;like :checked&mdash;to properly style our custom form indicator. When combined with the .custom-control-label class, we can also style the text for each item based on the &lt;input&gt;&rsquo;s state.\r\n\r\nWe hide the default &lt;input&gt; with opacity and use the .custom-control-label to build a new custom form indicator in its place with ::before and ::after. Unfortunately we can&rsquo;t build a custom one from just the &lt;input&gt; because CSS&rsquo;s content doesn&rsquo;t work on that element.\r\n\r\nIn the checked states, we use base64 embedded SVG icons from Open Iconic. This provides us the best control for styling and positioning across browsers and devices.t, 2) ?&gt;', 0, '1670067736studio16.jpg', '2022-12-02 11:17:02'),
(14, 2, 8, 'Nature', 'wildlife', 'Checkboxes and radios\r\nEach checkbox and radio &lt;input&gt; and &lt;label&gt; pairing is wrapped in a &lt;div&gt; to create our custom control. Structurally, this is the same approach as our default .form-check.\r\n\r\nWe use the sibling selector (~) for all our &lt;input&gt; states&mdash;like :checked&mdash;to properly style our custom form indicator. When combined with the .custom-control-label class, we can also style the text for each item based on the &lt;input&gt;&rsquo;s state.\r\n\r\nWe hide the default &lt;input&gt; with opacity and use the .custom-control-label to build a new custom form indicator in its place with ::before and ::after. Unfortunately we can&rsquo;t build a custom one from just the &lt;input&gt; because CSS&rsquo;s content doesn&rsquo;t work on that element.\r\n\r\nIn the checked states, we use base64 embedded SVG icons from Open Iconic. This provides us the best control for styling and positioning across browsers and devices.', 0, '1669985467landscape16.jpg', '2022-12-02 13:51:07'),
(15, 1, 10, 'Testing', 'Uncategorized', 'dfgyxhbjfnmklsdxc.vnbkdfcmbv', 0, '1677587132banner.jpg', '2023-02-28 13:25:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(50) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `avatar`, `is_admin`, `date`) VALUES
(1, 'Tochukwu', 'Emeh', 'TeeCee', 'admin@gmail.com', '$2y$10$BMwUppk61TiFeGoqIEdJUOPUuYjdbUlxQyADS1UuRdLiqh7Ass00m', '16645345851.jpg', 1, '2022-09-30 10:43:05'),
(2, 'Chioma', 'Goodness', 'chommy', 'chioma123@gmail.com', '$2y$10$34JWwsEiYGEmjNH1imdltOjiTH47nDKfxnkdydhkWy7k0mz5opKDy', '1665052123about-img-3.png', 0, '2022-10-06 10:28:43'),
(3, 'Monday', 'Emeh', 'Montee', 'joshuagabriel985@gmail.com', '$2y$10$OrmI6eGEZON4q3BnjokcHemY/nxc93fPfoi29r4cgTJD.uHqag7eq', '16660932773.jpg', 1, '2022-10-18 11:41:17'),
(6, 'John', 'Deo', 'JDeo', 'jdeo@gmail.com', '$2y$10$uUoIb19VqtNKIbw4X9I5DOYeP3gs2Jjdmfx7/KGHX8JK7ea2k14OO', '16698906553.jpg', 0, '2022-12-01 10:30:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id_fk` (`author_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `author_id_fk` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
