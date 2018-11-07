-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Nov-2018 às 16:52
-- Versão do servidor: 5.7.17
-- PHP Version: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `encontreseupet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animal`
--

CREATE TABLE `animal` (
  `id` int(11) NOT NULL,
  `id_dono` int(11) DEFAULT NULL,
  `NomePet` varchar(35) DEFAULT NULL,
  `PortePet` float DEFAULT NULL,
  `RacaPet` varchar(35) DEFAULT NULL,
  `CorPet` varchar(35) DEFAULT NULL,
  `SexoPet` bit(1) DEFAULT NULL,
  `PesoPet` float DEFAULT NULL,
  `Idadepet` smallint(35) DEFAULT NULL,
  `NomeDono` varchar(35) DEFAULT NULL,
  `Localizacao` varchar(35) DEFAULT NULL,
  `FotoPet` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `animal`
--

INSERT INTO `animal` (`id`, `id_dono`, `NomePet`, `PortePet`, `RacaPet`, `CorPet`, `SexoPet`, `PesoPet`, `Idadepet`, `NomeDono`, `Localizacao`, `FotoPet`) VALUES
(1, NULL, 'Teste Animal', 1, 'Teste Raça', 'Teste Cor', b'1111111111111111111111111111111', 1, 13, '', '', ''),
(2, NULL, 'Teste Animal 2', 10, 'Teste Raça 2', 'Teste Cor 2', b'1111111111111111111111111111111', 10, 16, '', '', ''),
(3, NULL, 'cindy', 10, 'labrador', 'preto com marrom', b'1111111111111111111111111111111', 10, 7, '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `id_Animal` int(11) NOT NULL,
  `ativo` binary(1) NOT NULL,
  `caminho` varchar(50) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL,
  `dtCriacao` date DEFAULT NULL,
  `hrCriacao` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id`, `id_Animal`, `ativo`, `caminho`, `titulo`, `descricao`, `dtCriacao`, `hrCriacao`) VALUES
(13, 0, 0x31, 'postFile92857.php', 'Novo Post', 'Vamos a um teste !', '2018-10-21', '03:10:51'),
(14, 0, 0x31, 'postFile92665.php', 'Novo Post', '<p>Crie seu post aqui!</p>', '2018-10-21', '03:10:57'),
(15, 0, 0x31, 'postFile53684.php', 'Novo Post', '<p>Crie seu post aqui!</p>', '2018-10-21', '04:10:40'),
(16, 0, 0x31, 'postFile82979.php', 'Novo Post', 'Teste', '2018-10-22', '05:10:29'),
(17, 0, 0x31, 'postFile87043.php', 'Novo Post', 'Teste', '2018-10-22', '01:10:08'),
(18, 0, 0x31, 'postFile33949.php', 'Novo Post', 'teste', '2018-10-28', '02:10:38'),
(19, 0, 0x31, 'postFile43867.php', 'Novo Post', 'teste', '2018-10-28', '02:10:19'),
(20, 0, 0x31, 'postFile11833.php', 'Novo Post', '<p>Crie seu pots aqui!</p>', '2018-10-28', '04:10:17'),
(21, 0, 0x31, 'postFile5784.php', 'Novo Post', '<p>Crie seu pots aqui!</p>', '2018-11-01', '02:11:10'),
(22, 0, 0x31, 'A18110177.php', 'a', '<p>Crie seu pots aqui!</p>', '2018-11-01', '06:11:35'),
(23, 1, 0x31, 'TesteTitulo18110190.php', 'teste Titulo', '<p>TESTE</p>', '2018-11-01', '03:11:45'),
(24, 2, 0x31, 'TesteTitulo218110294.php', 'teste Titulo 2', '<p>Teste animal @</p>', '2018-11-02', '04:11:42'),
(25, 3, 0x31, 'CãoDesaparecido18110230.php', 'cão desaparecido', '<p>encontre meu filho pfvr entre em contato</p>', '2018-11-02', '09:11:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_dono` (`id_dono`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_Animal` (`id_Animal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`id_Animal`) REFERENCES `animal` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
