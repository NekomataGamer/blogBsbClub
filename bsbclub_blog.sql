-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Ago-2020 às 21:50
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
(3, 'Academias', 'excercise.png', 1),
(4, 'Veículos', 'eco-car.png', 1),
(5, 'Escritórios', 'company.png', 1),
(6, 'Turismo', 'traveler.png', 1),
(7, 'Educação', 'education.png', 1),
(8, 'Imóveis', 'home.png', 1),
(9, 'Moda', 'sarafan.png', 1),
(10, 'Decoração', 'living-room.png', 1),
(11, 'Eletrônicos', 'tv.png', 1),
(12, 'Musica e Hobbie', 'musical-notes.png', 1),
(13, 'Esportes e Lazer', 'sport.png', 1),
(14, 'Saúde', 'health.png', 1),
(15, 'Beleza', 'beleza.png', 1),
(16, 'Moda', 'sarafan.png', 1),
(17, 'Decoração', 'living-room.png', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL DEFAULT '',
  `date_contact` datetime DEFAULT current_timestamp(),
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `phone`, `message`, `date_contact`, `status`) VALUES
(1, 'Alison Vitor Bucker', 'originalalison@gmail.com', '27996333526', 'Olá, é só um teste :P', '2020-08-04 13:44:32', 1),
(2, 'Alison Vitor Bucker', 'originalalison@gmail.com', '27996333526', 'Olá, é só um teste :P', '2020-08-04 13:47:49', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `s_o` varchar(50) NOT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `date_ini` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `leads`
--

INSERT INTO `leads` (`id`, `email`, `ip`, `s_o`, `cidade`, `date_ini`, `status`) VALUES
(12, 'originalalison@gmail.com', '::1', 'Windows', NULL, '2020-08-04 11:43:56', 1),
(13, 'facaparte@gmail.com', '::1', 'Windows', NULL, '2020-08-04 14:41:04', 0);

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
  `email` varchar(550) NOT NULL DEFAULT '0',
  `telefone` varchar(550) NOT NULL DEFAULT '0',
  `map` varchar(550) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `id_admin`, `id_category`, `author`, `description`, `title`, `body`, `date_added`, `discount`, `featured`, `link`, `email`, `telefone`, `map`, `status`) VALUES
(43, 1, 4, 'Alison Bucker', 'Descrição breve do post', 'Post de teste', '<h4>Teste title</h4>\r\neste é um conteúdo de teste, vamos descrever aqui umacoisa nada a ver só pra encher o layout e testar como vai ficar o mais proximo do real.\r\n<h4>Mais um titlulo de teste</h4>\r\nMais uma ves aqui jaziel calixto, seu terapeuta e professor de skate online :D', '2020-07-31 15:43:15', 0, 1, 'https://facebook.com', 'alisonbucker@bluelifeclubnow.com', '(27) 99633-3526', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59796.341331498246!2d-40.39634605669025!3d-20.49510039045709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa8b96cf675c54738!2sLagoa%20Grande%20-%20Ponta%20da%20Fruta!5e0!3m2!1spt-BR!2sbr!4v1595550476087!5m2!1spt-BR!2sbr', 1),
(44, 1, 14, 'Acidentados S.E.O', 'Clinica dos quebrados em acidentes', 'Clinica dos acidentados', 'Clinica dos acidentados ', '2020-08-03 11:51:10', 0, 1, 'https://goo.gl/maps/Ga7VPNZtNBRgpSxV7', '', '(27) 99633325', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.277207064357!2d-40.35291099057546!3d-20.31784144516674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb83c4c1cc0cd29%3A0x9f772349f4554271!2sCl%C3%ADnica%20de%20Acidentados%20de%20Vit%C3%B3ria!5e0!3m2!1spt-BR!2sbr!4v1596466309741!5m2!1spt-BR!2sbr', 1),
(45, 1, 7, ' afdgbrthg', 'Descrição breve do post', 'Mais um Post', 'flgjsçldfkgjwotuy9-5utki[]fg´bkm]MH\\\\\\\\\\\\\\\\FÇKBJ~F\\\\\\\\\\\\\\\\Bregf', '2020-08-03 12:56:00', 0, 1, 'fghsrthgb', '', 'tsfghsgfh', 'hsfthstrgh', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts_comments`
--

CREATE TABLE `posts_comments` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL DEFAULT 0,
  `name` varchar(150) NOT NULL DEFAULT '0',
  `email` varchar(250) NOT NULL DEFAULT '0',
  `comment` text NOT NULL DEFAULT '0',
  `date_comment` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts_comments`
--

INSERT INTO `posts_comments` (`id`, `id_post`, `name`, `email`, `comment`, `date_comment`, `status`) VALUES
(1, 43, 'Alison Vitor Bucker', 'originalalison@gmail.com', 'Empresa Bacana!', '2020-08-04 15:54:25', NULL),
(2, 44, 'Alison Bucker', 'originalalison@gmail.com', 'Gostei da estrutura do hospicio', '2020-08-04 15:58:47', NULL),
(3, 44, 'Alison Bucker', 'originalalison@gmail.com', 'Gostei da estrutura do hospicio', '2020-08-04 15:59:01', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts_images`
--

CREATE TABLE `posts_images` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `urlf` varchar(36) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `posts_images`
--

INSERT INTO `posts_images` (`id`, `id_post`, `urlf`) VALUES
(18, 43, 'c9809c9433bdddca61b13dec763f302d.jpg'),
(19, 43, 'ddd9e1b2728897243ccfe233cd85b520.jpg'),
(21, 45, '3d86c439bd432d82bf758d968cfd6360.jpg'),
(22, 45, 'a5d8bc1c09f6d05bf2a248384d076b29.jpg'),
(23, 45, 'c2bdc9ef1f17892ef9ed02627c2e281c.jpg'),
(24, 34, '5fdac7e9e32aaf5e0287196faf04365b.jpg'),
(25, 44, '13531ad6fb5cd542fa14e8fb0dda581b.jpg');

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
-- Índices para tabela `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts_comments`
--
ALTER TABLE `posts_comments`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `posts_comments`
--
ALTER TABLE `posts_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `posts_images`
--
ALTER TABLE `posts_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
