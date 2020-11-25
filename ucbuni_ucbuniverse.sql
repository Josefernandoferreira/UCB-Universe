-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Nov-2019 às 17:59
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ucbuni_ucbuniverse`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `produtos_id` int(11) NOT NULL,
  `parceiro_id` int(11) NOT NULL,
  `codigo` varchar(45) NOT NULL,
  `hrcompra` datetime NOT NULL,
  `entrega` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `compras`
--

INSERT INTO `compras` (`id`, `users_id`, `produtos_id`, `parceiro_id`, `codigo`, `hrcompra`, `entrega`) VALUES
(110, 1, 3, 1, '70f037f50e08', '2019-11-27 11:35:45', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiros`
--

CREATE TABLE `parceiros` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `parceiros`
--

INSERT INTO `parceiros` (`id`, `login`, `senha`, `nome`) VALUES
(1, 'jose.araujo', 'ucb2019', 'Sr. Brigadeiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `planetas`
--

CREATE TABLE `planetas` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `planetas`
--

INSERT INTO `planetas` (`id`, `nome`) VALUES
(1, 'Estrela Central'),
(2, 'Planeta Biblioteca'),
(3, 'Planeta K'),
(4, 'Planeta M'),
(5, 'Planeta S'),
(6, 'Lua');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos`
--

CREATE TABLE `pontos` (
  `id` int(11) NOT NULL,
  `total` int(11) NOT NULL DEFAULT 0,
  `timeupdate` datetime NOT NULL,
  `users_id` int(11) NOT NULL,
  `UCBCoins` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pontos`
--

INSERT INTO `pontos` (`id`, `total`, `timeupdate`, `users_id`, `UCBCoins`) VALUES
(1, 9999, '2019-11-27 13:25:21', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `valor` varchar(45) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `retirada` varchar(45) NOT NULL,
  `parceiro_id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `valor`, `descricao`, `quantidade`, `retirada`, `parceiro_id`, `logo`) VALUES
(1, 'Sra Brigadeiro', '850', 'Brigadeiro', 5, '25/11', 1, '../pix/srabrigadeiro.jpg'),
(2, 'Banzos', '450', 'Produto X', 10, '26/11', 1, '../pix/banzos.jpg'),
(3, 'Cacau Show', '200', 'Cesta de Shocolate', 4, '27/11', 1, '../pix/cacaushow.jpg'),
(4, 'Fada Café', '250', 'Almoço', 3, '27/11', 1, '../pix/fadacafe.jpg'),
(5, 'FoodTruck', '350', 'Pastel', 10, '27/11', 1, '../pix/foodtruck.png'),
(6, 'G7', '100', 'Ingressos para 31/12', 11, '27/11', 1, '../pix/g7.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE `questoes` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `enunciado` varchar(300) NOT NULL,
  `resposta` varchar(45) NOT NULL,
  `pontuacao` int(11) NOT NULL,
  `planetas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `questoes`
--

INSERT INTO `questoes` (`id`, `titulo`, `enunciado`, `resposta`, `pontuacao`, `planetas_id`) VALUES
(1, 'Desafio 1', 'Já pegou a senha para responder esta charada?\r\n- Você precisa passar por ele para ingressar na Universidade e será muito requisitado no decorrer do curso.\r\n- Espaço onde você pode esclarecer as suas dúvidas acadêmicas.', 'SOL232', 100, 1),
(2, 'Desafio 2', 'Junte a galera e venham me conhecer!\r\n- Maior espaço da Universidade para vivenciar novas experiências, conviver e interagir com seus colegas.\r\n- Novo espaço entre o Bloco Central e o M, projetado e dedicado ao bem-estar de toda Comunidade Acadêmica.', 'SOL548', 100, 1),
(3, 'Desafio 3', 'Sou a representação do corpo de Cristo dentro da Universidade. Aqui você encontra conforto e aprender mais sobre o amor de Deus.\r\n- Espaço de encontro com o Divino, reservado a celebrações eucarísticas e reflexões.\r\n- Local sagrado que já serviu de palco para o casamento de ex-estudantes da UCB.', 'SOL336', 100, 1),
(4, 'Desafio 4', 'Contribuo com a promoção dos aspectos psicológicos e psicopedagógicos dos estudantes e de toda comunidade acadêmica. Essa eu duvido você acertar!\r\n- As vezes precisamos de apoio para seguir na vida acadêmica.  Aqui, você encontra atendimento e acompanhamento psicológico, clínico e acadêmico, individ', 'SOL225', 100, 1),
(5, 'Desafio 5', 'Aqui o preconceito não tem vez. Sabe quem eu sou?\r\n- Proporciono as pessoas a conquista da sua independência para que possam ultrapassar barreiras. Aqui, a pior deficiência é o preconceito.\r\n- Na vida e no jogo nem sempre da para lutar sozinho, então, conte com a nossa equipe. Neste lugar você encon', 'SOL975', 100, 1),
(6, 'Desafio 1', 'Um espaço americano no coração da Biblioteca Central. Duvido você acertar quem eu sou.\r\n- Único no Brasil, eu sou um espaço aberto a qualquer pessoa que tenha interesse em obter mais informações sobre o meio ambiente, tecnologia, saúde e muitos outros temas.\r\n- A esquina mais inovadora da Universida', 'JUPTER055', 100, 2),
(7, 'Desafio 2', 'Sou o melhor lugar para você que adora ler revistas científicas ou até mesmo se atualizar lendo aquela revista de variedades. E se precisar consultar materiais audiovisuais, também pode contar comigo. Quem eu sou?\r\n- Precisa complementar seus estudos? Aqui você encontra informações atualizadas seja ', 'JUPTER548', 100, 2),
(8, 'Desafio 3', 'Precisa de um espaço para estudar individualmente ou reunir a galera para discutir sobre o trabalho em grupo? Venha me conhecer!\r\n-  Sou um lugar onde o silêncio reina e sua capacidade de foco e aprendizado são bastante exigidos. Aqui você pode estudar sozinho ou em grupo. Quem eu sou?\r\n- Sou uma pe', 'JUPTER124', 100, 2),
(9, 'Desafio 4', 'Aqui você encontra quadros, registros fotográficos, esculturas, maquetes e muito mais. Quem eu sou?\r\n- Não sou um museu, mas abrigo várias exposições de artes durante o ano letivo.\r\n- Sou um espaço rico em arte e cultura e sou o local ideal para você vivenciar uma experiencia marcante.', 'JUPTER111', 100, 2),
(10, 'Desafio 1', 'Criatividade e Inovação se encontram aqui! Adivinha quem sou eu!\r\n- Sou um espaço equipado com poderosas impressoras 3D para tirar todas as ideias do papel. Aqui a criatividade e a inovação andam de mãos dadas.\r\n- Acolho empresas com demandas reais e as coloco em diálogo direto com pesquisadores e e', 'TERRA541', 100, 3),
(11, 'Desafio 2', 'O verdadeiro Vale do Silício dentro da Universidade Catolica de Brasília (UCB)! Sabe de quem estamos falando?\r\n- Sou um programa de incubação e aceleração de negócios que conta com a participação ativa dos estudantes da Universidade. Já ouviu falar de mim?\r\n- Sou um programa promovido pela Coordenaç', 'TERRA235', 100, 3),
(12, 'Desafio 3', 'Conhecimento, pesquisa e empreendedorismo nunca são demais!\r\n- Sou um laboratório, um espaço onde os estudantes da Instituição podem exercer o empreendedorismo, o conhecimento e a pesquisa. Quem sou eu?\r\n- Fui construído em parceria com a maior empresa de empreendedorismo no Brasil e ainda possuo o ', 'TERRA987', 100, 3),
(13, 'Desafio 4', 'Além do Startup Católica, Colabid, Espaco Maker e Espaço Sebrae, aqui você experimenta o empreendedorismo o tempo inteiro. Essa ficou super fácil...\r\n- Muitos me conhecem por Conex, Ecoa Ambiental, Logica, Matriz Comunicação, Ofitex, Proad, Omega, Ethos e Entre. Quem sou eu?\r\n- Sou composta por apro', 'TERRA647', 100, 3),
(14, 'Desafio 5', 'Sou uma das grandes joias dessa Universidade e muitos me cobiçam. Aprendizagem, inovação e tecnologia você encontra aqui!\r\n- Apenas duas universidades no Brasil contam com um espaço como este, e a UCB e uma delas. Sou o lugar ideal para você que ama tecnologia e esta sempre antenado com as novidades', 'TERRA877', 100, 3),
(15, 'Desafio 1', 'Aqui você pode adquirir muitos conhecimentos sobre Historia Natural. Quem sou eu?\r\n- faço parte de um dos projetos de Extensão vinculados ao curso de Ciências Biológicas da Universidade e estou sempre aberto a visitações, que podem ou não contar com a orientação de um guia.\r\n- Realizo participações ', 'MARTE765', 100, 4),
(16, 'Desafio 2', 'Esta está muito fácil! Precisa de ajuda para navegar?? Aqui é o lugar ideal!\r\n- Muitos me procuram para acessar a Internet e fazer suas pesquisas.\r\n- Sou um laboratório com muitos computadores e posso ser utilizado pelos estudantes e toda a comunidade acadêmica.\r\n- Você pode me encontrar aqui no Blo', 'MARTE349', 100, 4),
(17, 'Desafio 3', 'Ta precisando carregar o celular? Vem comigo que no caminho eu explico!\r\n- Aqui você pode conectar seu notebook, carregar seu celular e conversar com seus amigos.\r\n- Estou presente em vários blocos, mas aqui no M, vocês me procuram para seus momentos de estudo, bate-papo e convivência com a galera.\r', 'MARTE607', 100, 4),
(18, 'Desafio 4', 'Esta está muito fácil: Sou um projeto vinculado ao curso de Psicologia da Universidade, que oferece atendimento psicológico gratuito aos estudantes e toda a Comunidade. Quem sou eu?\r\n- Sou o lugar ideal para aqueles que estão enfrentando momentos difíceis ou frente a alguns problemas que aparentemen', 'MARTE625', 100, 4),
(19, 'Desafio 5', 'Algumas vezes o que você procura pode estar aqui, e em outras não. Mas se o que você procura foi encontrado na UCB, provavelmente será trazido para mim. Quem sou eu?\r\n- Nem tudo está perdido. Basta você me procurar e provavelmente resolverei seu problema.\r\n- O que você perdeu na UCB pode ser achado ', 'MARTE441', 100, 4),
(20, 'Desafio 1', 'Mais do que um objeto decorativo da Universidade, sou um espaço que gera bastante curiosidade entre os estudantes. Quem sou eu?\r\n- Sou um dos experimentos que consiste em uma das maneiras mais simples e elegantes de se provar a rotação da Terra e sou considerado por muitos físicos como um dos dez ma', 'NETUNO412', 100, 5),
(21, 'Desafio 2', 'Nos meus 17 anos de implantação já devolvi e melhorei a saúde bucal de mais de 330 mil pessoas. Aqui, o sorriso e a autoestima ganham novos sentidos! Quem sou eu?\r\n- Sou um projeto vinculado ao curso de Odontologia da Universidade, que oferece atendimento odontológico gratuito à Comunidade.\r\n- Aqui,', 'NETUNO235', 100, 5),
(22, 'Desafio 3', 'Sou um espaço rico em soluções tecnológicas que contribuirão diretamente com o seu aprendizado.\r\n- Fui construída em parceria com uma das gigantes da tecnologia e, por meio de uma plataforma própria, torno possível o acesso de qualquer dispositivo móvel conectado à internet, possibilitando uma aula ', 'NETUNO001', 100, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `users_id` int(11) NOT NULL,
  `planetas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `matricula` varchar(10) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `curso` varchar(45) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `matricula`, `nome`, `email`, `senha`, `curso`, `tipo`) VALUES
(1, 'UC19101366', 'José Fernando', 'jose.araujo@ucb.br', 'ucb2019', 'ADS', 1),
(2, 'UC20101234', 'João Paulo', 'joao@gmail.com', 'ucb2019', 'ADS', 1),
(3, 'UC18101366', 'José Fernando', 'jose.araujo@ucb.br', 'ucb2019', 'ADS', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_questoes`
--

CREATE TABLE `users_questoes` (
  `users_id` int(11) NOT NULL,
  `questoes_id` int(11) NOT NULL,
  `planetas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users_questoes`
--

INSERT INTO `users_questoes` (`users_id`, `questoes_id`, `planetas_id`) VALUES
(2, 12, 3),
(2, 13, 3),
(2, 14, 3),
(3, 1, 1),
(3, 2, 1),
(3, 3, 1),
(3, 4, 1),
(3, 5, 1),
(3, 6, 2),
(3, 7, 2),
(3, 8, 2),
(3, 9, 2),
(3, 10, 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_compras_users1_idx` (`users_id`),
  ADD KEY `fk_compras_produtos1_idx` (`produtos_id`);

--
-- Índices para tabela `parceiros`
--
ALTER TABLE `parceiros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `planetas`
--
ALTER TABLE `planetas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pontos`
--
ALTER TABLE `pontos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pontos_users1_idx` (`users_id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_questoes_planetas1_idx` (`planetas_id`);

--
-- Índices para tabela `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ticket_users1_idx` (`users_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users_questoes`
--
ALTER TABLE `users_questoes`
  ADD PRIMARY KEY (`users_id`,`questoes_id`),
  ADD KEY `fk_users_has_questoes_questoes1_idx` (`questoes_id`),
  ADD KEY `fk_users_has_questoes_users1_idx` (`users_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de tabela `parceiros`
--
ALTER TABLE `parceiros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `planetas`
--
ALTER TABLE `planetas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `pontos`
--
ALTER TABLE `pontos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `questoes`
--
ALTER TABLE `questoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_compras_produtos1` FOREIGN KEY (`produtos_id`) REFERENCES `produtos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_compras_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pontos`
--
ALTER TABLE `pontos`
  ADD CONSTRAINT `fk_pontos_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `questoes`
--
ALTER TABLE `questoes`
  ADD CONSTRAINT `fk_questoes_planetas1` FOREIGN KEY (`planetas_id`) REFERENCES `planetas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `fk_ticket_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `users_questoes`
--
ALTER TABLE `users_questoes`
  ADD CONSTRAINT `fk_users_has_questoes_questoes1` FOREIGN KEY (`questoes_id`) REFERENCES `questoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_questoes_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
