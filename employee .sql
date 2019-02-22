CREATE DATABASE employee;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `sell_list` (
  `sell_no` int(11) NOT NULL,
  `date` date NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `per_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
ALTER TABLE `sell_list`
  ADD PRIMARY KEY (`sell_no`);

--
ALTER TABLE `sell_list`
  MODIFY `sell_no` int(11) NOT NULL AUTO_INCREMENT;
