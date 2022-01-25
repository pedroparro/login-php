-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 25-Jan-2022 às 18:47
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `loginPhp`
--

CREATE TABLE `loginPhp` (
  `id` int(11) NOT NULL,
  `nome` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `pwd` varchar(90) NOT NULL,
  `adm` int(1) NOT NULL,
  `user` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `loginPhp`
--

INSERT INTO `loginPhp` (`id`, `nome`, `email`, `pwd`, `adm`, `user`) VALUES
(1, 'pedro', 'pedro@gmail.com', '$2y$10$NZCugDQaNVfEuZQWYu7mDOxV1XQl2.B8/6Bfc/LssnMmILjW1WXs2\r\n', 1, 0),
(2, 'enzo', 'enzo@gmail.com', '$2y$10$fpszQoSAZhTAynOPiBEcOeSEHHdmgjYuwKpGaKebOa7u1eq9t.uL2\r\n', 0, 2),
(3, 'clara', 'clara@gmail.com', '1020', 0, 2),
(4, 'zeca', 'zeca@gmail.com', '1020', 0, 2),
(5, 'almir', 'almir@gmail.com', '1020', 0, 2),
(6, 'ivone', 'ivone@gmail.com', '1020', 0, 2),
(7, 'beth', 'beth@gmail.com', '1020', 0, 2),
(8, 'reinaldo', 'reinaldo@gmail.com', '1020', 0, 2),
(9, 'gumercindo', 'gumercindo@gmail.com', '1020', 0, 2),
(10, 'maria', 'maria@gmail.com', '1020', 0, 2),
(11, 'carolina', 'carolina@gmail.com', '1020', 0, 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `loginPhp`
--
ALTER TABLE `loginPhp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `loginPhp`
--
ALTER TABLE `loginPhp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
