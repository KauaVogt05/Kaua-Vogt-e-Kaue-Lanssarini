CREATE DATABASE IF NOT EXISTS `db_pweb1_2024_1`;
USE `db_pweb1_2024_1`;

CREATE TABLE IF NOT EXISTS `aluno` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `telefone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `cpf` varchar(14) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

CREATE TABLE IF NOT EXISTS `versao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `codigo` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '0',
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

INSERT INTO `aluno` (`id`, `nome`, `telefone`, `cpf`) VALUES
	(1, 'Jackson', '49 8800-5500', '002.555.000-55'),
	(2, 'Maria', '49 8800-5501', '002.555.000-11'),
	(3, 'Jackson Five', '49 98866-5500', '000.555.333-55'),
	(9, 'Jackson 3', '49 8800-5503', '002.555.000-53');

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `login` varchar(120) COLLATE utf8mb4_bin DEFAULT NULL,
  `telefone` varchar(12) COLLATE utf8mb4_bin DEFAULT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_bin DEFAULT NULL,
  `senha` varchar(60) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

