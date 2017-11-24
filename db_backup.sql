-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.20-0ubuntu0.17.10.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for sistema_ce
CREATE DATABASE IF NOT EXISTS `sistema_ce` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sistema_ce`;

-- Dumping structure for table sistema_ce.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table sistema_ce.empresa: ~0 rows (approximately)
DELETE FROM `empresa`;
/*!40000 ALTER TABLE `empresa` DISABLE KEYS */;
INSERT INTO `empresa` (`id`, `nome`, `telefone`, `endereco`) VALUES
	(1, 'Matriz', '(55) 99999-999', 'Rua do comércio');
/*!40000 ALTER TABLE `empresa` ENABLE KEYS */;

-- Dumping structure for table sistema_ce.fornecedores
CREATE TABLE IF NOT EXISTS `fornecedores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table sistema_ce.fornecedores: ~0 rows (approximately)
DELETE FROM `fornecedores`;
/*!40000 ALTER TABLE `fornecedores` DISABLE KEYS */;
INSERT INTO `fornecedores` (`id`, `nome`, `cidade`, `estado`, `email`, `telefone`) VALUES
	(1, 'Casa das Canetas', 'IjuÃ­', 'RS', 'vinirssantos@gmail.com', '(55) 99999-9999');
/*!40000 ALTER TABLE `fornecedores` ENABLE KEYS */;

-- Dumping structure for table sistema_ce.marcas
CREATE TABLE IF NOT EXISTS `marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table sistema_ce.marcas: ~5 rows (approximately)
DELETE FROM `marcas`;
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
INSERT INTO `marcas` (`id`, `nome`) VALUES
	(1, 'HP'),
	(2, 'BIC'),
	(3, 'Chamex'),
	(4, 'Dell'),
	(5, ''),
	(6, '');
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;

-- Dumping structure for table sistema_ce.pedidos
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor_total` float NOT NULL,
  `situacao` int(4) NOT NULL,
  `descricao` text NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data_finalizacao` datetime DEFAULT NULL,
  `fornecedores_id` int(11) DEFAULT NULL,
  `empresa_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pedidos_fornecedores1_idx` (`fornecedores_id`),
  KEY `fk_pedidos_empresa1_idx` (`empresa_id`),
  CONSTRAINT `fk_pedidos_empresa1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_pedidos_fornecedores1` FOREIGN KEY (`fornecedores_id`) REFERENCES `fornecedores` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table sistema_ce.pedidos: ~2 rows (approximately)
DELETE FROM `pedidos`;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` (`id`, `valor_total`, `situacao`, `descricao`, `data`, `data_finalizacao`, `fornecedores_id`, `empresa_id`) VALUES
	(1, 3, 3, 'dsadasd', '2017-10-27 06:10:26', NULL, 1, NULL),
	(2, 200, 6, 'gdsfgdfsg', '2017-11-03 04:11:27', NULL, 1, NULL);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;

-- Dumping structure for table sistema_ce.pedidos_has_produtos
CREATE TABLE IF NOT EXISTS `pedidos_has_produtos` (
  `pedidos_id` int(11) NOT NULL,
  `produtos_id` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  PRIMARY KEY (`pedidos_id`,`produtos_id`),
  KEY `fk_pedidos_has_produtos_produtos1_idx` (`produtos_id`),
  KEY `fk_pedidos_has_produtos_pedidos1_idx` (`pedidos_id`),
  CONSTRAINT `fk_pedidos_has_produtos_pedidos1` FOREIGN KEY (`pedidos_id`) REFERENCES `pedidos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pedidos_has_produtos_produtos1` FOREIGN KEY (`produtos_id`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table sistema_ce.pedidos_has_produtos: ~2 rows (approximately)
DELETE FROM `pedidos_has_produtos`;
/*!40000 ALTER TABLE `pedidos_has_produtos` DISABLE KEYS */;
INSERT INTO `pedidos_has_produtos` (`pedidos_id`, `produtos_id`, `qtd`) VALUES
	(1, 3, 20),
	(2, 2, 30),
	(2, 8, 100);
/*!40000 ALTER TABLE `pedidos_has_produtos` ENABLE KEYS */;

-- Dumping structure for table sistema_ce.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `qtd` int(11) NOT NULL,
  `marcas_id` int(11) DEFAULT NULL,
  `empresa_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_produtos_marcas_idx` (`marcas_id`),
  KEY `fk_produtos_empresa1_idx` (`empresa_id`),
  CONSTRAINT `fk_produtos_empresa1` FOREIGN KEY (`empresa_id`) REFERENCES `empresa` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `fk_produtos_marcas` FOREIGN KEY (`marcas_id`) REFERENCES `marcas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- Dumping data for table sistema_ce.produtos: ~5 rows (approximately)
DELETE FROM `produtos`;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`id`, `nome`, `valor`, `data_cadastro`, `qtd`, `marcas_id`, `empresa_id`) VALUES
	(1, 'Tonner Impessora 1220', 20, '2017-10-26 19:19:35', 4, 1, 1),
	(2, 'Caneta Azul', 2, '2017-10-26 19:21:26', 20, 2, 1),
	(3, 'Pct 300 Folha A4', 4, '2017-10-26 19:22:28', 30, 3, 1),
	(8, 'Caneta Preta', 0, '2017-10-27 00:20:56', 0, 2, 1),
	(9, 'Caneta Vermelha', 0, '2017-10-27 00:45:51', 0, 2, 1),
	(10, 'matheus', 0, '2017-10-27 15:32:58', 0, 1, 1),
	(11, 's', 0, '2017-11-14 14:37:57', 0, 1, 1);
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
