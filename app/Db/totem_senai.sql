-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 02:16 AM
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
-- Database: `totem_senai`
--

-- --------------------------------------------------------

--
-- Table structure for table `flags`
--

CREATE TABLE `flags` (
  `id_flag` int(11) NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `flags`
--

INSERT INTO `flags` (`id_flag`, `flag`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `respostas`
--

CREATE TABLE `respostas` (
  `id_resposta` int(100) NOT NULL,
  `resposta1` varchar(100) NOT NULL,
  `resposta2` varchar(100) NOT NULL,
  `resposta3` varchar(100) NOT NULL,
  `resposta4` varchar(100) NOT NULL,
  `resposta5` varchar(100) NOT NULL,
  `resposta6` varchar(100) NOT NULL,
  `resposta7` varchar(100) NOT NULL,
  `resposta8` varchar(100) NOT NULL,
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `respostas`
--

INSERT INTO `respostas` (`id_resposta`, `resposta1`, `resposta2`, `resposta3`, `resposta4`, `resposta5`, `resposta6`, `resposta7`, `resposta8`, `data`) VALUES
(12, 'Excelente', 'Bom', 'Regular', 'Ruim', 'Excelente', 'Bom', 'Regular', 'Ruim', '2023-04-22 11:34:58'),
(13, 'Excelente', 'Bom', 'Regular', 'Ruim', 'Excelente', 'Bom', 'Regular', 'Ruim', '2023-04-22 11:37:59'),
(14, 'Excelente', 'Bom', 'Regular', 'Ruim', 'Excelente', 'Bom', 'Regular', 'Ruim', '2023-04-22 11:46:48'),
(15, 'Excelente', 'Bom', 'Regular', 'Ruim', 'Excelente', 'Bom', 'Regular', 'Ruim', '2023-04-22 20:16:01'),
(16, 'Excelente', 'Bom', 'Regular', 'Ruim', 'Excelente', 'Bom', 'Regular', 'Ruim', '2023-04-22 21:22:02'),
(17, 'Excelente', 'Bom', 'Regular', 'Ruim', 'Excelente', 'Bom', 'Regular', 'Ruim', '2023-04-27 01:14:35'),
(18, 'Bom', 'Bom', 'Bom', 'Regular', 'Regular', 'Regular', 'Regular', 'Regular', '2023-05-11 00:04:15'),
(19, 'Excelente', 'Excelente', 'Excelente', 'Excelente', 'Excelente', 'Excelente', 'Excelente', 'Excelente', '2023-05-31 04:42:04'),
(20, 'Excelente', 'Excelente', 'Excelente', 'Excelente', 'Excelente', 'Excelente', 'Excelente', 'Excelente', '2023-05-31 04:47:28'),
(21, 'Ruim', 'Ruim', 'Ruim', 'Ruim', 'Ruim', 'Ruim', 'Ruim', 'Ruim', '2023-05-31 04:58:48'),
(22, 'Bom', 'Bom', 'Bom', 'Bom', 'Bom', 'Bom', 'Bom', 'Bom', '2023-05-31 05:00:14'),
(23, 'Bom', 'Bom', 'Bom', 'Bom', 'Bom', 'Bom', 'Bom', 'Bom', '2023-05-31 05:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `senha`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flags`
--
ALTER TABLE `flags`
  ADD PRIMARY KEY (`id_flag`);

--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id_resposta`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flags`
--
ALTER TABLE `flags`
  MODIFY `id_flag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id_resposta` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
