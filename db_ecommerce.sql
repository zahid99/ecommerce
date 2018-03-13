-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2017 at 06:52 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` smallint(6) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(250) NOT NULL,
  `password` varchar(32) NOT NULL,
  `access_level` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin_name`, `admin_email`, `password`, `access_level`) VALUES
(1, 'Md.ZahidHasan', 'zh@gmail.com', '0f4dbe309348718e246f4566bbb76602', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `category_desc` varchar(250) NOT NULL,
  `category_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_desc`, `category_status`) VALUES
(7, 'Mobile', 'all brand mobile', 1),
(8, 'Laptop', 'laptop', 1),
(9, 'Camera', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zip_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `customer_name`, `email_address`, `password`, `dob`, `city`, `country`, `zip_code`) VALUES
(1, 'MD.ZAHID HASAN', 'zh@gmail.com', '0f4dbe309348718e246f4566bbb76602', '1995-08-08', 'BOGRA', 'BANGLADESH', '5800'),
(6, 'MD.ZUNAID HASAN', 'zunaid@gmail.com', '0f4dbe309348718e246f4566bbb76602', '1995-05-05', 'Bogra', 'Bangladesh', '5800');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manufacturer`
--

CREATE TABLE `tbl_manufacturer` (
  `manufacturer_id` int(11) NOT NULL,
  `manufacturer_name` varchar(100) NOT NULL,
  `manufacturer_desc` varchar(250) NOT NULL,
  `publication_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_manufacturer`
--

INSERT INTO `tbl_manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_desc`, `publication_status`) VALUES
(1, 'Sony', 'Sony Manufacturer description', 1),
(2, 'Samsung', 'Samsung Manufacturer ', 0),
(3, 'lenovo', 'global brand', 1),
(4, 'ASUS', 'Asus mobile', 1),
(5, 'Microsoft', 'Microsoft Laptop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shiping_id` varchar(20) NOT NULL,
  `paymet_id` int(11) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `order_total` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `modified_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shiping_id`, `paymet_id`, `order_status`, `order_total`, `created_at`, `modified_at`) VALUES
(3, 1, '', 6, '', 211500, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_sales_quantity` tinyint(11) NOT NULL,
  `product_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `product_image`) VALUES
(4, '3', 14, 'microsoft S', 90000, 2, '680374.jpg'),
(12, 'acc4n24qoide07of77p3do1707', 13, 'lenovo lapt', 35000, 1, '18530.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `customer_id`, `payment_type`, `payment_status`) VALUES
(6, 1, 'Cash On Delivery', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `category_id` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `reorder_label` int(11) NOT NULL,
  `is_featured` tinyint(4) NOT NULL,
  `product_short_desc` text NOT NULL,
  `product_long_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `publication_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `product_name`, `category_id`, `manufacturer_id`, `product_price`, `product_quantity`, `reorder_label`, `is_featured`, `product_short_desc`, `product_long_desc`, `product_image`, `publication_status`) VALUES
(12, 'asus zenfone 2 laser', 7, 4, 17000.00, 10, 1, 1, 'asus mobile', 'asus mobile', '249408.jpg', 1),
(13, 'lenovo laptop', 8, 3, 35000.00, 10, 1, 1, 'Lenovo laptop', '<div>Lenovo laptop&nbsp;Lenovo laptop&nbsp;Lenovo laptop&nbsp;Lenovo laptop</div><div>Lenovo laptop</div>', '18530.png', 1),
(14, 'microsoft Surface', 8, 5, 90000.00, 10, 1, 1, 'Microsoft surface', 'Microsoft surface&nbsp;Microsoft surface&nbsp;Microsoft surface', '680374.jpg', 1),
(15, 'zenfone max 3', 7, 4, 21000.00, 10, 1, 1, 'asus zenfone max 3', '', '788512.jpg', 1),
(16, 'Sony Laptop', 8, 1, 58000.00, 10, 1, 1, 'Sony laptop<br>', 'Sony laptop Sony laptop Sony laptop', '632509.jpg', 1),
(17, 'SAMSUNG mobile', 7, 2, 20000.00, 10, 1, 1, 'samsung mobile<br>', 'samsung mobile samsung mobile samsung mobile samsung mobile', '873997.jpg', 1),
(18, 'Sony Camera', 9, 1, 38000.00, 10, 1, 1, 'Sony Camera<br>', 'Sony Camera Sony Camera Sony Camera', '331845.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `email_address` (`email_address`);

--
-- Indexes for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`),
  ADD UNIQUE KEY `manufacturer_name` (`manufacturer_name`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_manufacturer`
--
ALTER TABLE `tbl_manufacturer`
  MODIFY `manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
