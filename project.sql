-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 16, 2020 at 11:19 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
CREATE TABLE IF NOT EXISTS `donor` (
  `DonorID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Age` varchar(30) DEFAULT NULL,
  `BloodGroup` varchar(5) DEFAULT NULL,
  `Mobile` varchar(15) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`DonorID`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`DonorID`, `Name`, `Age`, `BloodGroup`, `Mobile`, `Address`, `City`) VALUES
(1, 'Tisha', '23', 'B+', '01758-804845', 'SHH', 'Luxmipur'),
(2, 'Sinthia', '23', 'B+', '01824-842616', 'BBFMH', 'Gazipur'),
(3, 'Promi', '22', 'O+', '01993-759393', 'SHH', 'B.Baria'),
(4, 'Nazma', '22', 'B+', '01715-988858', 'SHH', 'B.Baria'),
(5, 'Dola', '23', 'AB+', '01766-759511', 'SHH', 'Rajbari'),
(6, 'Nishat', '22', 'A+', '01708-378125', 'BKZH', 'Comilla'),
(7, 'Preeti', '18', 'B+', '01533-119041', 'BSKH', 'Luxmipur'),
(8, 'Faiza', '18', 'AB+', '01968-332224', 'BSKH', 'Shatkhira'),
(9, 'Kamelia', '22', 'O+', '01746-379333', 'BSKH', 'Kushtia'),
(10, 'Pallabi', '20', 'A+', '01794-956679', 'BKZH', 'Jheneidhah'),
(11, 'Salma', '23', 'A+', '01721-449208', 'BKZH', 'Jessore'),
(12, 'Rimi', '23', 'O-', '01970-347909', 'PH', 'Norshingdi'),
(13, 'Toma', '19', 'A+', '01616-136091', 'PH', 'Noakhali'),
(14, 'Papri', '21', 'AB+', '01922-213062', 'PH', 'Shariotpur'),
(15, 'Shahrin', '19', 'A+', '01782-799769', 'PH', 'Noakhali'),
(16, 'Mallika', '23', 'O+', '01551-635655', 'JIH', 'Chittagong'),
(17, 'Rifat', '19', 'B+', '01981-964860', 'JIH', 'Barishal'),
(18, 'Prema', '20', 'A+', '01906-086622', 'JIH', 'Pabna'),
(19, 'Tania', '21', 'B+', '01627-305078', 'NFH', 'Netrokona'),
(20, 'Misty', '18', 'O+', '01686-946129', 'NFH', 'Shariotpur'),
(21, 'Shohana', '21', 'B+', '01777-988261', 'FH', 'Sirajgonj'),
(22, 'Rahat', '18', 'O+', '01733-374033', 'RTH', 'Norshingdi'),
(23, 'Alif', '20', 'B+', '01940-659629', 'AFKH', 'Barishal'),
(24, 'Maksud', '21', 'A+', '01990-420314', 'MBH', 'Mymensingh'),
(25, 'Dipu', '22', 'O-', '01781-190926', 'MBH', 'Norshingdi'),
(26, 'Saom', '22', 'AB+', '01912-177703', 'MBH', 'Chuadanga'),
(27, 'Mahim', '21', 'O+', '01982-474475', 'BBH', 'Rajshahi'),
(28, 'Mohidul', '20', 'O+', '01686-577576', 'RTH', 'Mymensingh'),
(29, 'Nirjhor', '20', 'A+', '01754-087210', 'MH', 'Mymensingh'),
(30, 'Fahim', '23', 'O+', '01715-221011', 'RTH', 'Manikgonj'),
(31, 'Shaikh', '23', 'B+', '01824-050513', 'MH', 'Norshingdi'),
(32, 'Forhad', '18', 'B+', '01759-194103', 'BBH', 'Jessore'),
(33, 'Emon', '23', 'O+', '01779-082637', 'MBH', 'Comilla'),
(34, 'Hridoy', '18', 'B+', '01747-574012', 'AFKH', 'Munshigonj'),
(35, 'Sajjad', '21', 'O+', '01755-367448', 'SRJ', 'Gazipur'),
(36, 'Azizul', '22', 'A+', '01621-814167', 'SRJ', 'Norshingdi'),
(37, 'Arafat', '23', 'A+', '01729-435809', 'BBH', 'Mymensingh'),
(38, 'Shohag', '19', 'B+', '01865-898088', 'MBH', 'Magura'),
(39, 'Rahul', '19', 'O+', '01620-664852', 'BBH', 'Chittagong'),
(40, 'Robin', '18', 'B+', '01875-601992', 'MBH', 'Norshingdi'),
(41, 'Shuvo', '23', 'O+', '01521-455418', 'BBH', 'Khulna'),
(42, 'Afnan', '21', 'B+', '01795-234404', 'BBH', 'Gazipur'),
(43, 'Ruhul', '20', 'A+', '01797-214811', 'SRJ', 'Chittagong'),
(44, 'Bayejid', '21', 'A+', '01762-768739', 'MBH', 'Rangpur'),
(45, 'Shakil', '21', 'B+', '01741-264013', 'SRJ', 'Kushtia'),
(46, 'Himu', '20', 'A+', '01680-990294', 'SRJ', 'Gopalgonj'),
(47, 'Ahsan', '21', 'O+', '01815-532283', 'RTH', 'Chadpur'),
(48, 'Nayan', '19', 'O+', '01930-264879', 'BBH', 'B.Baria'),
(49, 'Yasar', '23', 'O+', '01799-677652', 'BBH', 'Mymensingh'),
(50, 'Taz', '22', 'O+', '01750-587623', 'MBH', 'Dinajpur'),
(51, 'Akram', '23', 'O+', '01776-624584', 'MBH', 'Norshingdi'),
(52, 'Mawa', '20', 'A+', '01710-305460', 'JIH', 'Chadpur'),
(53, 'Shohan', '22', 'O+', '01747-999546', 'AFKH', 'Manikgonj'),
(54, 'Mim', '21', 'B+', '01989-787764', 'JIH', 'Khulna'),
(73, 'Mahmuda Tani', '18', 'A+', '01305264747', 'Gerua Hall', 'Chadpur'),
(74, 'Shohag', '22', 'B+', '01865898088', 'MBH', 'Magura'),
(72, 'Mehedi Hasan Dipu', '22', 'O-', '01781190926', 'AFMKUH', 'Norshingdi'),
(71, 'sajjad', '21', 'O+', '01755367448', 'SRJ', 'Dhaka'),
(75, 'hello', 'world', 'F+', '1343431', 'ha ha hi hi', 'ho ho ho ho'),
(76, 'sohan', '28', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
