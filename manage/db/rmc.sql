-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 10:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmc`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `stext` text NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `heading`, `image`, `stext`, `text`) VALUES
(1, 'We Are Leader In RMC Agency', 'about.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim, accusamus qui voluptatibus blanditiis ad alias error officiis vero labore nemo libero commodi saepe consequatur porro totam voluptatem deleniti voluptas harum ipsum sint iste exercitationem quis sapiente. Dolorum repudiandae asperiores minima voluptas et praesentium explicabo atque corporis modi quisquam quis vitae tempora ipsum blanditiis cumque corrupti, vel unde debitis pariatur sunt reprehenderit ducimus error? A voluptatem minus rerum recusandae inventore harum possimus hic quae dolores eos, quaerat adipisci voluptas. Perspiciatis, soluta doloremque. Molestias expedita eligendi ipsa. Corporis, velit ad. Voluptatibus dicta nostrum illo velit. Deleniti facilis repellendus nostrum illo molestiae magnam.', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy</p>\r\n<!--</body--><!--</body--><!--</body--><!--</body--><!--</body--><!--</body--><!--</body--><!--</body--><!--</body-->');

-- --------------------------------------------------------

--
-- Table structure for table `brochure`
--

CREATE TABLE `brochure` (
  `id` int(11) NOT NULL,
  `pdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brochure`
--

INSERT INTO `brochure` (`id`, `pdf`) VALUES
(1, 'dummy.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `subject`, `text`, `date`) VALUES
(1, 'Satyendra Sharma', '9565650124', 'officialsatya16@gmail.com', 'Testing Contect form ', 'I am Satendra Sharma in this website is developed by me.', '2023-12-26 11:35:59'),
(2, 'Satyendra Sharma', '9565650124', 'officialsatya16@gmail.com', 'Testing Contect form ', 'hi my name is satya', '2023-12-26 19:41:34');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `type` varchar(500) NOT NULL,
  `point` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `type`, `point`, `date`) VALUES
(1, '1', 'Gorakhpur', '2023-12-24 15:38:05'),
(2, '2', 'Gorakhpur', '2023-12-24 15:38:16'),
(3, '3', 'Gorakhpur', '2023-12-24 15:38:39'),
(4, '1', 'Running Plants', '2023-12-24 16:07:33'),
(5, '2', 'Supply Location', '2023-12-24 16:07:44'),
(6, '3', 'Upcoming Plants', '2023-12-24 16:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `password`, `status`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `text`, `date`) VALUES
(2, 'Product Name', '11771992_677.jpeg', '<p>Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product Product&nbsp;</p>\r\n<!--</body--><!--</body--><!--</body-->', '2023-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `location` varchar(5000) NOT NULL,
  `image` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `location`, `image`, `date`) VALUES
(1, 'Project name', 'Gorakhpur', '11771992_677.jpeg', '2023-12-26 14:35:41');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service` text NOT NULL,
  `image` text NOT NULL,
  `stext` text NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service`, `image`, `stext`, `text`, `date`) VALUES
(3, 'RMC Trucks', 'service-2.jpg', 'Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in. ', '<p>Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in. Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in. Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in. Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in. Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in. Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in. Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in. Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.&nbsp;</p>\r\n<ul>\r\n<li>sdlfh hsd&nbsp;</li>\r\n<li>a uasdh sad&nbsp;</li>\r\n<li>asd ;asdf kosd j</li>\r\n<li>s jshdkjh df&nbsp;</li>\r\n<li>d<img src=\"https://www.google.com/logos/google.jpg\" alt=\"My alt text\" width=\"354\" height=\"116\"></li>\r\n</ul>\r\n<!--</body--><!--</body-->', '2023-12-19'),
(4, 'RMC Pumping', 'service-1.png', 'Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.', '', '2023-12-19'),
(5, 'Ready Mix Concrete', 'service-service-3.JPG', 'Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.', '', '2023-12-21');

-- --------------------------------------------------------

--
-- Table structure for table `strip`
--

CREATE TABLE `strip` (
  `id` int(11) NOT NULL,
  `heading1` text NOT NULL,
  `text1` varchar(255) NOT NULL,
  `heading2` text NOT NULL,
  `text2` text NOT NULL,
  `heading3` text NOT NULL,
  `text3` text NOT NULL,
  `heading4` text NOT NULL,
  `text4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `strip`
--

INSERT INTO `strip` (`id`, `heading1`, `text1`, `heading2`, `text2`, `heading3`, `text3`, `heading4`, `text4`) VALUES
(1, 'Global Cities', '1', 'Our Happy Clients', '2', 'Expert Employees', '3', 'Project Completed', '4');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `image`, `text`, `date`) VALUES
(2, 'Satyendra Sharma', '1701876444799.jpg', 'Hi I am Satyendra Sharma and I am developing this website', '2023-12-23 17:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `vision`
--

CREATE TABLE `vision` (
  `id` int(11) NOT NULL,
  `heading1` text NOT NULL,
  `text1` text NOT NULL,
  `heading2` text NOT NULL,
  `text2` text NOT NULL,
  `heading3` text NOT NULL,
  `text3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vision`
--

INSERT INTO `vision` (`id`, `heading1`, `text1`, `heading2`, `text2`, `heading3`, `text3`) VALUES
(1, 'Experienced Workers', 'Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in. satya', 'Reliable Industrial Services', 'Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in. satya', '24/7 Customer Support', 'Vivamus ac ultrices diam, vitae accumsan tellus. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in. satya');

-- --------------------------------------------------------

--
-- Table structure for table `website_info`
--

CREATE TABLE `website_info` (
  `id` int(11) NOT NULL,
  `website_name` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `ig_link` text NOT NULL,
  `fb_link` text NOT NULL,
  `tw_link` text NOT NULL,
  `contact1` varchar(255) NOT NULL,
  `contact2` varchar(255) NOT NULL,
  `email1` varchar(2555) NOT NULL,
  `email2` varchar(2555) NOT NULL,
  `address` text NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website_info`
--

INSERT INTO `website_info` (`id`, `website_name`, `logo`, `ig_link`, `fb_link`, `tw_link`, `contact1`, `contact2`, `email1`, `email2`, `address`, `video`) VALUES
(1, 'Shri Tirupati Balaji agency', 'SHRI TIRUPATI BALAJI AGENCY .png', 'https://www.instagram.com', 'https://www.facebook.com/', 'https://www.twitter.com', '8299271312', '9838075284', 'info@stba.com', 'support@stba.com', '222N, Basharat East, Medical College Road, Gorakhpor -273004', 'Drone Final.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brochure`
--
ALTER TABLE `brochure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strip`
--
ALTER TABLE `strip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vision`
--
ALTER TABLE `vision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_info`
--
ALTER TABLE `website_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brochure`
--
ALTER TABLE `brochure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `strip`
--
ALTER TABLE `strip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vision`
--
ALTER TABLE `vision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `website_info`
--
ALTER TABLE `website_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
