-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Maio-2024 às 13:12
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `chocolateshow`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbchocolates`
--

CREATE TABLE `tbchocolates` (
  `id` int(11) NOT NULL,
  `tipo` int(50) NOT NULL,
  `recheio` int(50) NOT NULL,
  `caloria` int(50) NOT NULL,
  `validade` year(4) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ingredientes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbchocolates`
--

INSERT INTO `tbchocolates` (`id`, `tipo`, `recheio`, `caloria`, `validade`, `codigo`, `foto`, `ingredientes`) VALUES
(7, 1, 1, 180, '2023', 'dd-01', '664f321a56756alexandre_orange_400x.avif', 'farinha'),
(8, 1, 3, 480, '2024', 'aa011', '664f3415bce1abuche_blanc_400x.avif', 'farinha chocolate agua'),
(9, 2, 4, 480, '2024', 'aa01', '664f3471da7b1buche_lait_400x.avif', 'oreo chocolate limão'),
(10, 3, 3, 175, '2023', 'aa02', '664f34a753fd3buche_noir_400x.avif', 'morango chocolate limão'),
(11, 3, 3, 285, '2024', 'aa06', '664f378b0b509buche_pistache_400x.avif', 'chocolate castanha lima'),
(12, 2, 3, 2000, '2024', 'al20', '664f7e4aef3adcoeur_framboise_400x.avif', 'framboesa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbutilizadores`
--

CREATE TABLE `tbutilizadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbutilizadores`
--

INSERT INTO `tbutilizadores` (`id`, `nome`, `email`, `password`) VALUES
(1, 'Ana Silva', 'ana_@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'João Silvano', 'joao_@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbchocolates`
--
ALTER TABLE `tbchocolates`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbutilizadores`
--
ALTER TABLE `tbutilizadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbchocolates`
--
ALTER TABLE `tbchocolates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tbutilizadores`
--
ALTER TABLE `tbutilizadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
