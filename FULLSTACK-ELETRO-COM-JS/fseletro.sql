-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Out-2020 às 02:59
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fseletro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `nome_cliente` varchar(80) NOT NULL,
  `endereco` text NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `valor_unitario` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `valor_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `nome_cliente`, `endereco`, `nome_produto`, `valor_unitario`, `quantidade`, `valor_total`) VALUES
(2, 'Thiago Souza Ferraz', 'Av. Graciela Flores de Piteri 255 bl 39 apto 42', 'Geladeira genérica', 900.99, 1, 900.99),
(3, 'Lero Lero da Silva Junior de Alcantara', 'Avenida Brasil 2044', 'Geladeira Eletrolux', 1200.99, 2, 1401.98);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `Categoria` varchar(50) NOT NULL,
  `Descricao` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `preco` float NOT NULL,
  `precofinal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `Categoria`, `Descricao`, `imagem`, `preco`, `precofinal`) VALUES
(1, 'Geladeira', 'Geladeira Eletrolux', 'imagens/produtos/geladeira 1.webp', 1550, 1200),
(2, 'Geladeira', 'Geladeira Genérica', 'imagens/produtos/geladeira 2.webp', 1200, 900),
(3, 'Geladeira', 'Geladeira Eletrolux 2', 'imagens/produtos/geladeira 3.webp', 1950, 1500),
(4, 'Fogao', 'Fogão do Drift', 'imagens/produtos/fogao 1.webp', 8888, 7777),
(5, 'Fogao', 'Fogão Genérico', 'imagens/produtos/fogao 2.webp', 900, 600),
(6, 'Microondas', 'Micro-ondas normal', 'imagens/produtos/microondas 1.webp', 900, 800),
(7, 'Microondas', 'Micro-ondas genérico', 'imagens/produtos/microondas 2.webp', 1220, 999),
(8, 'Lava-Roupa', 'Lava roupas', 'imagens/produtos/lavaroupa 1.webp', 2000, 1777),
(9, 'Lava-Roupa', 'Lava Roupa Genérico', 'imagens/produtos/lavaroupa 2.webp', 1500, 1220),
(10, 'Lava-Louça', 'Lava louças', 'imagens/produtos/lavalouca 1.webp', 2500, 1500);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
