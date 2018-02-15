-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2018 at 12:51 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalakal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_tbl`
--

CREATE TABLE `customer_tbl` (
  `customerID` int(11) NOT NULL,
  `custName` varchar(11) NOT NULL,
  `custAddress` varchar(11) NOT NULL,
  `custContact` varchar(11) NOT NULL,
  `custEmail` varchar(11) NOT NULL,
  `custUsername` varchar(11) NOT NULL,
  `custPassword` varchar(50) NOT NULL,
  `custLogin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_tbl`
--

INSERT INTO `customer_tbl` (`customerID`, `custName`, `custAddress`, `custContact`, `custEmail`, `custUsername`, `custPassword`, `custLogin`) VALUES
(7, '123', '123', '123', '123@asdasd', '123123', '601f1889667efaebb33b8c12572835da3f027f78', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cust_orderlist_tbl`
--

CREATE TABLE `cust_orderlist_tbl` (
  `custOrdListID` int(11) NOT NULL,
  `custOrderID` int(11) NOT NULL,
  `custProductID` int(11) NOT NULL,
  `custOrdListQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cust_order_tbl`
--

CREATE TABLE `cust_order_tbl` (
  `custOrderID` int(11) NOT NULL,
  `custOrderDate` varchar(11) NOT NULL,
  `custOrderInvoice` varchar(11) NOT NULL,
  `custOrderNotes` varchar(255) NOT NULL,
  `custOrderPayStat` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_tbl`
--

CREATE TABLE `manufacturer_tbl` (
  `manufacturerID` int(11) NOT NULL,
  `manuName` varchar(11) NOT NULL,
  `manuAddress` varchar(11) NOT NULL,
  `manuContact` varchar(11) NOT NULL,
  `manuEmail` varchar(11) NOT NULL,
  `manuUsername` varchar(11) NOT NULL,
  `manuPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer_tbl`
--

INSERT INTO `manufacturer_tbl` (`manufacturerID`, `manuName`, `manuAddress`, `manuContact`, `manuEmail`, `manuUsername`, `manuPassword`) VALUES
(1, 'asdasasd', 'asd', '12345678901', 'asdas@gagas', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_tbl`
--

CREATE TABLE `newsletter_tbl` (
  `newsletterID` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `email` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter_tbl`
--

INSERT INTO `newsletter_tbl` (`newsletterID`, `name`, `email`) VALUES
(1, 'asdasd', 'asdasd@asda'),
(2, 'asdasd', 'asdasd@asda'),
(3, 'asdas', 'asdasd@asda'),
(4, 'asdasdasdas', 'asdasd@asda');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `productID` int(11) NOT NULL,
  `productName` varchar(11) NOT NULL,
  `productDescription` varchar(255) NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productCategory` varchar(11) NOT NULL,
  `productImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prod_vendor_tbl`
--

CREATE TABLE `prod_vendor_tbl` (
  `prodVendorID` int(11) NOT NULL,
  `prodVendPrice` int(11) NOT NULL,
  `prodVendQty` int(11) NOT NULL,
  `vendorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_tbl`
--

CREATE TABLE `vendor_tbl` (
  `vendorID` int(11) NOT NULL,
  `vendName` varchar(11) NOT NULL,
  `vendAddress` varchar(11) NOT NULL,
  `vendContact` varchar(11) NOT NULL,
  `vendEmail` varchar(11) NOT NULL,
  `vendUsername` varchar(11) NOT NULL,
  `vendPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendor_tbl`
--

INSERT INTO `vendor_tbl` (`vendorID`, `vendName`, `vendAddress`, `vendContact`, `vendEmail`, `vendUsername`, `vendPassword`) VALUES
(1, 'asdasd', '123123', '123132123', '123123@asd', 'asd', '123'),
(2, 'asdasasas', 'asd', 'asd2', 'asd@asd123.', 'asd2', 'asd2'),
(3, 'asd', 'asd', '09123123', 'asd@asd', 'asd', 'f10e2821bbbea527ea02200352313bc059445190');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `cust_orderlist_tbl`
--
ALTER TABLE `cust_orderlist_tbl`
  ADD PRIMARY KEY (`custOrdListID`);

--
-- Indexes for table `cust_order_tbl`
--
ALTER TABLE `cust_order_tbl`
  ADD PRIMARY KEY (`custOrderID`);

--
-- Indexes for table `manufacturer_tbl`
--
ALTER TABLE `manufacturer_tbl`
  ADD PRIMARY KEY (`manufacturerID`);

--
-- Indexes for table `newsletter_tbl`
--
ALTER TABLE `newsletter_tbl`
  ADD PRIMARY KEY (`newsletterID`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `prod_vendor_tbl`
--
ALTER TABLE `prod_vendor_tbl`
  ADD PRIMARY KEY (`prodVendorID`);

--
-- Indexes for table `vendor_tbl`
--
ALTER TABLE `vendor_tbl`
  ADD PRIMARY KEY (`vendorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_tbl`
--
ALTER TABLE `customer_tbl`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cust_orderlist_tbl`
--
ALTER TABLE `cust_orderlist_tbl`
  MODIFY `custOrdListID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cust_order_tbl`
--
ALTER TABLE `cust_order_tbl`
  MODIFY `custOrderID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacturer_tbl`
--
ALTER TABLE `manufacturer_tbl`
  MODIFY `manufacturerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter_tbl`
--
ALTER TABLE `newsletter_tbl`
  MODIFY `newsletterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prod_vendor_tbl`
--
ALTER TABLE `prod_vendor_tbl`
  MODIFY `prodVendorID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendor_tbl`
--
ALTER TABLE `vendor_tbl`
  MODIFY `vendorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
