-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 04:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carros`
--

-- --------------------------------------------------------

--
-- Table structure for table `carro`
--

CREATE TABLE `carro` (
  `id` int(11) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `valor` varchar(30) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `ano` varchar(5) NOT NULL,
  `cor` varchar(30) NOT NULL,
  `km` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carro`
--

INSERT INTO `carro` (`id`, `modelo`, `valor`, `imagem`, `ano`, `cor`, `km`) VALUES
(1, 'HB20 Sense', '79420', 'https://www.clubmotor.com.br/wp-content/uploads/2022/04/hyundai-hb20.jpg', '2023', 'Vermelho', '0'),
(3, 'Fiat Doblo', '34800', 'https://upload.wikimedia.org/wikipedia/commons/2/21/2016_Fiat_Doblo_Easy_Multijet_1.6_Front.jpg', '2008', 'Prata', '120000'),
(4, 'Volkswagen Fusca', '38500', 'https://fotos.jornaldocarro.estadao.com.br/uploads/2019/03/30175446/45281968-1160x773.jpg', '1980', 'Azul claro', '1530'),
(8, 'Smart Fortwo', '59900', 'https://carloscunha.com.br/wp-content/uploads/2022/04/smart-brabus-fortwo-2017-01.jpg', '2013', 'Branco', '74000'),
(9, 'Mini Buggy Maria Joaquina', '22500', 'https://http2.mlstatic.com/D_NQ_NP_730201-MLB20270035226_032015-O.jpg', '2020', 'Rosa', '0'),
(11, 'Chevrolet Camaro SS', '189900', 'https://i.pinimg.com/736x/e9/fc/43/e9fc43d07157d2dcfb6cb7eddc0e55f1.jpg', '2011', 'Amarelo', '78000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carro`
--
ALTER TABLE `carro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
