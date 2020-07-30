-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jul-2020 às 21:58
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bsbclub_blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `passwd` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `login`, `passwd`) VALUES
(1, 'AlisonBucker', '17f8365416be129cbc7701838a8e5349');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 inativa 1 ativa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `title`, `icon`, `status`) VALUES
(3, 'Academias', 'excercise', 1),
(4, 'Veículos', 'eco-car', 1),
(5, 'Escritórios', 'company', 1),
(6, 'Turismo', 'traveler', 1),
(7, 'Educação', 'education', 1),
(8, 'Imóveis', 'home', 1),
(9, 'Moda', 'sarafan', 1),
(10, 'Decoração', 'living-room', 1),
(11, 'Eletrônicos', 'tv', 1),
(12, 'Musica e Hobbie', 'musical-notes', 1),
(13, 'Esportes e Lazer', 'sport', 1),
(14, 'Saúde', 'health', 1),
(15, 'Beleza', 'beleza', 1),
(16, 'Moda', 'sarafan', 1),
(17, 'Decoração', 'living-room', 1),
(18, 'Eletrônicos', 'tv', 1),
(19, 'Musica e Hobbie', 'musical-notes', 1),
(20, 'Esportes e Lazer', 'sport', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `author` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(300) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `body` text NOT NULL DEFAULT '',
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `discount` int(11) NOT NULL DEFAULT 0,
  `featured` int(1) NOT NULL DEFAULT 0,
  `link` varchar(550) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `id_admin`, `id_category`, `author`, `description`, `title`, `body`, `date_added`, `discount`, `featured`, `link`, `status`) VALUES
(7, 1, 9, 'Alison Bucker', '', 'Mais um Post', '<h1>topper</h1>', '2020-07-30 11:28:48', 0, 1, '0', 1),
(8, 1, 3, 'Gabriela Passos', '', 'Segundo Post', 'To com fome', '2020-07-30 11:59:23', 5, 1, '0', 1),
(9, 1, 3, 'Sua mãe', '', 'Segundo Post', 'teste do corpo', '2020-07-30 13:05:55', 80, 1, '0', 1),
(10, 1, 5, 'Gabriela Passos', 'lorem impsun is a default lorem impsun is a default lorem impsun is a default lorem dfgfdshgrtahgrth', 'Dopamine Pagina de vendas01', 'koé rapaziada', '2020-07-30 13:09:43', 10, 1, '0', 1),
(11, 1, 5, 'Alison Bucker', 'lorem impsun is a lorem impsun is a default lorem impsun is a default lorem dfgfdshgrtahgrth default', 'Teste com nome do autor', 'teste com o nome do altor', '2020-07-30 13:13:36', 50, 1, 'http://www.excellenceeduc.com/http://bsbclub.com.br/sistema/classified.html#', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts_images`
--

CREATE TABLE `posts_images` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `url` varchar(32) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts_images`
--
ALTER TABLE `posts_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
