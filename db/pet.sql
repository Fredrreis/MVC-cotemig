-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 27-Abr-2021 às 21:27
-- Versão do servidor: 8.0.18
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadpet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet`
--

DROP TABLE IF EXISTS `pet`;
CREATE TABLE IF NOT EXISTS `pet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomeDono` varchar(40) NOT NULL,
  `nomeAnimal` varchar(40) NOT NULL,
  `tipoAnimal` varchar(100) NOT NULL,
  `peso` double(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `pet`
--

INSERT INTO `pet` (`id`, `nomeDono`, `nomeAnimal`, `tipoAnimal`, `peso`) VALUES
(1, 'Gustavo', 'Raven', 'Papagaio', 1.00),
(2, 'Mariana', 'Dory', 'Cachorro', 6.00),
(3, 'Amanda', 'Cachorro', 'Maya', 16.00),
(4, 'Fred', 'Sheilla', 'Furão', 0.70),
(5, 'Gabriela', 'Mr Felix', 'Gato', 8.80),
(6, 'Fernando', 'Zeus', 'Cachorro', 15.00),
(7, 'Matheus', 'Rebecca', 'Maritaca', 0.60),
(8, 'Arthur', 'Dimitri', 'Gato', 6.00),
(9, 'Mauricio', 'Athenas', 'Cacatua', 0.90),
(10, 'William', 'Alex o Leão', 'Leão', 190.00),
(11, 'George', 'Duquesa', 'Hamster', 0.15);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
