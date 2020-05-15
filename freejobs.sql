-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Maio-2020 às 21:02
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freejobs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` text COLLATE utf8_bin NOT NULL,
  `email` varchar(32) COLLATE utf8_bin NOT NULL,
  `login` varchar(32) COLLATE utf8_bin NOT NULL,
  `senha` varchar(80) COLLATE utf8_bin NOT NULL,
  `cpf` int(32) NOT NULL,
  `servico` varchar(32) COLLATE utf8_bin NOT NULL,
  `sexo` varchar(32) COLLATE utf8_bin NOT NULL,
  `id` int(252) NOT NULL,
  `arquivo` varchar(40) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `email`, `login`, `senha`, `cpf`, `servico`, `sexo`, `id`, `arquivo`) VALUES
('felipe', 'flima835@gmail.com', 'flima835@gmail.com', '123', 0, '', '', 73, '1589562273');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(252) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
