-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2022 at 05:27 AM
-- Server version: 8.0.29
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compara`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int NOT NULL,
  `nome` varchar(45) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Alimentação'),
(2, 'Moda'),
(3, 'Beleza'),
(4, 'Tecnologia'),
(6, 'Entretenimento'),
(8, 'Papelaria'),
(9, 'Saúde'),
(10, 'Casa');

-- --------------------------------------------------------

--
-- Table structure for table `favoritos`
--

CREATE TABLE `favoritos` (
  `id` int NOT NULL,
  `id_usuario` int NOT NULL,
  `id_postagem` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lojas`
--

CREATE TABLE `lojas` (
  `id` int NOT NULL,
  `nome` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `endereco` varchar(250) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lojas`
--

INSERT INTO `lojas` (`id`, `nome`, `endereco`) VALUES
(1, 'Agafarma', 'Rua Conceição, 516, Centro'),
(2, 'Supermercado Bohlke', 'Av. Borges de Medeiros, 2390, Centro'),
(3, 'Supermercado Avenida', 'Rua Tenente Pedro Won Mühlen, 307, Centro'),
(4, 'Supermercado Reichert', 'Rua Conceição, 526, Centro'),
(5, 'Mercado Amizade', 'Rua Emílio Marmitt, 233, Centro'),
(6, 'Padaria Palito', 'Av. Borges de Medeiros, 2113, Centro'),
(7, 'Padaria Sandea', 'Av. Emílio Schimidt, 693, Centro'),
(8, 'Padaria Conrad', 'Av. Ten. Pedro Von Muhlen, 116, Centro'),
(9, 'Padaria Doce Art', 'Av. Bento Gonçalves, 765, Rio Branco'),
(10, 'Xis do Baum', 'Av. Bento Gonçalves, 1825, Rio Branco'),
(11, 'Cebola Lanches', 'Av. Getúlio Vargas, 196, Centro'),
(12, 'Hamburgueria Central', 'Av. Getúlio Vargas, 208, Centro'),
(13, 'Xis do Vini', 'Av. Borges de Medeiros, 1664, Centro'),
(14, 'Modelo', 'Av. Borges de Medeiros, 2006, Centro'),
(15, 'Ponto Econômico', 'Rua Pedro Schneider, 260, Centro'),
(16, 'Boutique Atitude', 'Rua Conceição, 765, Centro'),
(17, 'Lebes', 'Av. Borges de Medeiros, 1545, Centro'),
(18, 'Sammy Calçados', 'Av. Borges de Medeiros, 1869, Centro'),
(19, 'Malu Calçados', 'Rua Pedro Schneider, 298, Centro'),
(20, 'Por Menos', 'Av. Borges de Medeiros, 1968, Centro'),
(21, 'Lado Eme', 'Rua Emílio Marmit, Centro\r\n'),
(22, 'Studio A', 'Av. Cel. João Linck, 721, Centro'),
(23, 'Beleza e Cia', 'Rua Vinte e Oito de Fevereiro, 698, Centro'),
(24, 'Farmácias São João', 'Av. Borges de Medeiros, 2040, Centro'),
(25, 'Farmácia Popular do Palmarito', 'Av. Borges de Medeiros, 2011, Centro'),
(27, 'Farmácia Rolantense', 'Av. Borges de Medeiros, 1920, Centro'),
(28, 'Farmácia Muller', 'Rua Pedro Schneider, 232, Centro'),
(29, 'Paper Papyrus & Artist', 'Av. Borges de Medeiros, 1679, Centro'),
(30, 'Ducanto', 'Rua Conceição, 775, Centro'),
(31, 'Xispa Bazar', 'Av. Borges de Medeiros, 2126, Centro'),
(32, 'Bazar Arte e Cor', 'Rua Pedro Schneider, 236, Centro'),
(34, 'Americanas', 'Av. Borges de Medeiros, 1839, Centro'),
(35, 'Vivaz Loja de Variedades', 'Av. Borges de Medeiros, 2120, Centro'),
(36, 'EA Informática', 'Av. Borges de Medeiros, 1867, Centro'),
(37, 'Suporte Informática', 'Av. Getúlio Vargas, 167 (sala 2), Centro'),
(38, 'Star Telecom', 'Rua Henrique Grassmann, 23, Centro'),
(39, 'Netcomet', 'Rua Bernardo Henrique Bohlke Filho, 30, Centro\r\n'),
(41, 'Chalé da Borges', 'Av. Borges de Medeiros, 2276, Centro');

-- --------------------------------------------------------

--
-- Table structure for table `postagens`
--

CREATE TABLE `postagens` (
  `id` int NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `preco` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `qtd_favoritos` int NOT NULL DEFAULT '0',
  `id_usuario` int NOT NULL,
  `id_loja` int NOT NULL,
  `id_categoria` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postagens`
--

INSERT INTO `postagens` (`id`, `descricao`, `imagem`, `preco`, `qtd_favoritos`, `id_usuario`, `id_loja`, `id_categoria`) VALUES
(20, 'sadsad', '1670390403.jpg', '145145', 0, 5, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `segue`
--

CREATE TABLE `segue` (
  `id` int NOT NULL,
  `usuario_segue` int NOT NULL,
  `usuario_seguido` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `segue`
--

INSERT INTO `segue` (`id`, `usuario_segue`, `usuario_seguido`) VALUES
(1, 1, 3),
(2, 4, 3),
(5, 1, 5),
(6, 5, 4),
(7, 5, 1),
(8, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nome` varchar(45) COLLATE utf8mb4_general_ci NOT NULL,
  `sobrenome` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(64) COLLATE utf8mb4_general_ci NOT NULL,
  `imagem` varchar(125) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'avatar_padrao.png',
  `qtd_publicacoes` int NOT NULL DEFAULT '0',
  `qtd_seguidores` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `email`, `senha`, `imagem`, `qtd_publicacoes`, `qtd_seguidores`) VALUES
(1, 'Arthur', 'Both1', 'arthurboth2@gmail.com', '123456789', 'avatar_padrao.png', 1457, 54154),
(3, 'Larissa', 'Farias', 'contaslari@gmail.com', 'abcdfghijkl', 'avatar_padrao.png', 0, 0),
(4, 'Eva', 'Cristian Mendes Benites', 'evabenitesdefarias@hotmail.com', 'arvore', 'avatar_padrao.png', 0, 0),
(5, 'Gustavo', 'Ranft', 'gusranft@gmail.com', '789456123', '1670381823.jpg', 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`,`id_postagem`),
  ADD KEY `id_postagem` (`id_postagem`);

--
-- Indexes for table `lojas`
--
ALTER TABLE `lojas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postagens`
--
ALTER TABLE `postagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_loja` (`id_loja`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `segue`
--
ALTER TABLE `segue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_segue` (`usuario_segue`),
  ADD KEY `usuario_seguido` (`usuario_seguido`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lojas`
--
ALTER TABLE `lojas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `postagens`
--
ALTER TABLE `postagens`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `segue`
--
ALTER TABLE `segue`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_ibfk_1` FOREIGN KEY (`id_postagem`) REFERENCES `postagens` (`id`),
  ADD CONSTRAINT `favoritos_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `postagens`
--
ALTER TABLE `postagens`
  ADD CONSTRAINT `postagens_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `postagens_ibfk_2` FOREIGN KEY (`id_loja`) REFERENCES `lojas` (`id`),
  ADD CONSTRAINT `postagens_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Constraints for table `segue`
--
ALTER TABLE `segue`
  ADD CONSTRAINT `segue_ibfk_1` FOREIGN KEY (`usuario_segue`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `segue_ibfk_2` FOREIGN KEY (`usuario_seguido`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
