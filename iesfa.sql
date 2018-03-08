-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jan-2018 às 21:20
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iesfa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_blog`
--

CREATE TABLE `categoria_blog` (
  `id_cat_bg` int(11) NOT NULL,
  `nome_cat_bg` varchar(50) DEFAULT NULL,
  `descricao_cat_bg` varchar(90) DEFAULT NULL,
  `data_cat_bg` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria_blog`
--

INSERT INTO `categoria_blog` (`id_cat_bg`, `nome_cat_bg`, `descricao_cat_bg`, `data_cat_bg`) VALUES
(1, 'educação', 'cart001', '2017-11-05 15:57:42'),
(2, 'Pesquisa escolar', 'ps0235', '2017-11-05 17:16:26'),
(3, 'O futuro da educação', 'ps02125', '2017-11-05 17:17:00'),
(4, 'Educação Ambiental', 'meio ambiente', '2017-12-03 18:55:10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria_eventos`
--

CREATE TABLE `categoria_eventos` (
  `id_cat_ev` int(11) NOT NULL,
  `nome_cat_evento` varchar(100) DEFAULT NULL,
  `cod_ev` int(11) DEFAULT NULL,
  `data_criacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria_eventos`
--

INSERT INTO `categoria_eventos` (`id_cat_ev`, `nome_cat_evento`, `cod_ev`, `data_criacao`) VALUES
(1, 'aniversario', 12, '2017-11-07 20:59:32'),
(2, '7 de setembro 2017', 21, '2017-11-07 21:01:19'),
(3, 'São João', 4588, '2017-11-07 21:03:22'),
(4, 'São Bento', 4589, '2017-11-07 21:06:35'),
(5, 'Noticias 2017', 0, '2017-11-08 22:02:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `colaborador`
--

CREATE TABLE `colaborador` (
  `id_col` int(11) NOT NULL,
  `nome_col` varchar(100) DEFAULT NULL,
  `funcao_col` varchar(100) DEFAULT NULL,
  `formacao_col` varchar(100) DEFAULT NULL,
  `cargo_col` enum('1','2','3','4','5','6','7') DEFAULT NULL,
  `email_col` varchar(100) DEFAULT NULL,
  `tel_col` varchar(20) DEFAULT NULL,
  `obs_col` text,
  `foto_col` varchar(60) DEFAULT NULL,
  `dir_fk_col` int(11) DEFAULT NULL,
  `data_cria_col` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `colaborador`
--

INSERT INTO `colaborador` (`id_col`, `nome_col`, `funcao_col`, `formacao_col`, `cargo_col`, `email_col`, `tel_col`, `obs_col`, `foto_col`, `dir_fk_col`, `data_cria_col`) VALUES
(16, 'Beatriz Amorim dias Vargas', 'Pedagoga', 'Pedagogia', '2', 'bia@gmail.com', '(74)99965-2510', 'teste...........................', '1593184740.jpg', NULL, '2017-12-06 20:24:27'),
(17, 'Guilherme Baltazar', 'Orintador', 'Letras', '3', 'gui@outlook.com', '(74)98847-2533', 'teste de Guilherme', '183337217.jpg', NULL, '2017-12-06 20:25:55'),
(18, 'Letícia Barrom Sousa', 'Professsora', 'Matemática', '4', 'lele@gmail.com', '(74)96633-5247', 'tteste lalalalla', '415896464.jpg', NULL, '2017-12-06 20:27:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `file_agenda`
--

CREATE TABLE `file_agenda` (
  `id_f` int(11) NOT NULL,
  `cat_fk_f` int(11) DEFAULT NULL,
  `file_img_f` varchar(90) DEFAULT NULL,
  `data_f` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `file_agenda`
--

INSERT INTO `file_agenda` (`id_f`, `cat_fk_f`, `file_img_f`, `data_f`) VALUES
(28, 1, '1776882509.pdf', '2017-12-06 14:44:14'),
(30, 3, '1421009890.pdf', '2017-12-06 14:44:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `informa_escola`
--

CREATE TABLE `informa_escola` (
  `id_esc` int(11) NOT NULL,
  `nome_esc` varchar(100) DEFAULT NULL,
  `email_esc` varchar(50) DEFAULT NULL,
  `tel_esc` varchar(20) DEFAULT NULL,
  `endereco_esc` varchar(50) DEFAULT NULL,
  `bairro_esc` varchar(50) DEFAULT NULL,
  `cidade_esc` varchar(50) DEFAULT NULL,
  `ponto_ref_esc` text,
  `sobre_int_esc` text,
  `palavra_dir` text,
  `esc_estrutura` text,
  `escola_curso` text,
  `dir_fk_esc` int(11) DEFAULT NULL,
  `data_cad` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `informa_escola`
--

INSERT INTO `informa_escola` (`id_esc`, `nome_esc`, `email_esc`, `tel_esc`, `endereco_esc`, `bairro_esc`, `cidade_esc`, `ponto_ref_esc`, `sobre_int_esc`, `palavra_dir`, `esc_estrutura`, `escola_curso`, `dir_fk_esc`, `data_cad`) VALUES
(1, 'Iesfa - Institudo social de cidadanis escola', 'iesfa@gmail.com', '(74)3541-8555', 'rua das flores', 'centro', 'Juazeiro ba', 'Próximo a escola', 'A instituição também se preocupa com a convivência equilibrada entre os alunos de diferentes faixas etárias, por isso edificamos                                                      ', '                                                              O Colégio IESFA terá, para 2017, como eixo norteador de suas atividades, o Projeto Avante. Nome bem propício para uma escola dinâmica, que visa à excelência de ensino e qualidade de formação.\r\n                                                        ', ' • Um prédio para funcionamento da Educação Infantil.\r\n• Um prédio para funcionamento do Ensino Fundamental (Anos inciais).\r\n• Um prédio para funcionamento do Ensino Fundamental (Anos finais) e Ensino Médio, todos ligados internamente.', '\r\n• Laboratório de ciências.\r\n• Laboratório de Tecnologias.\r\n• Laboratório da Mind Lab.\r\n• Salas de aula amplas e arejadas.     ', 1, '2017-11-05 02:48:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `post_ps`
--

CREATE TABLE `post_ps` (
  `id_ps` int(11) NOT NULL,
  `titulo_ps` varchar(100) DEFAULT NULL,
  `conteudo_ps` text,
  `categoria_fk_ps` int(11) DEFAULT NULL,
  `img_ps` varchar(60) DEFAULT NULL,
  `data_cad_ps` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `publicado_por_fk_ps` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `post_ps`
--

INSERT INTO `post_ps` (`id_ps`, `titulo_ps`, `conteudo_ps`, `categoria_fk_ps`, `img_ps`, `data_cad_ps`, `publicado_por_fk_ps`) VALUES
(10, 'Copom baixa juro básico para 7% ao ano', 'Comitê de Política Monetária (Copom) do Banco Central anunciou nesta quarta-feira (6) o corte da taxa básica de juros da economia brasileira de 7,5% para 7% ao ano.', 2, '237685658.jpg', '2017-12-06 20:30:59', 0),
(11, 'Estácio anuncia \'demissão em massa\'', 'grupo de ensino superior Estácio promoveu nesta semana uma \"demissão em massa\" no seu quadro de professores, segundo o Sindicato dos Professores do Município do Rio de Janeiro (SinproRio). Em comunicado divulgado, a Estácio confirmou a \"reorganização em sua base de docentes\", mas questionada pelo G1, não informou o número de demissões.', 1, '743146041.jpg', '2017-12-06 20:36:46', 0),
(12, 'Programa \'Geladeiras Literárias\'', 'Como parte da programação em homenagem ao aniversário de 362 anos de Jundiaí (SP), os terminais urbanos da cidade estão recebendo o programa \"Geladeiras Literárias\", para incentivar a leitura.\r\nCada terminal conta com uma geladeira com diversos livros para retirada e leitura pelos usuários. Após o uso, o livro deve ser devolvido em qualquer um dos sete terminais. O terminal Vila Arens foi o primeiro a receber o equipamento, na segunda-feira (4).', 3, '2022845736.jpg', '2017-12-06 20:38:19', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_cat_prof_materia`
--

CREATE TABLE `tbl_cat_prof_materia` (
  `id_pf` int(11) NOT NULL,
  `nome_cat_pf` varchar(50) DEFAULT NULL,
  `turno_pf` enum('1','2') DEFAULT NULL,
  `fk_prof_pf` int(11) DEFAULT NULL,
  `fk_materia_pf` int(11) DEFAULT NULL,
  `cat_pf_data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_curso_materia`
--

CREATE TABLE `tbl_curso_materia` (
  `id_cm` int(11) NOT NULL,
  `materia_mt` varchar(50) DEFAULT NULL,
  `codigo_mt` int(11) NOT NULL,
  `data_mt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_curso_materia`
--

INSERT INTO `tbl_curso_materia` (`id_cm`, `materia_mt`, `codigo_mt`, `data_mt`) VALUES
(1, 'Geografia', 12458, '2017-11-08 22:46:20'),
(3, 'Português', 12345, '2017-11-08 23:09:42'),
(7, 'Ciências da Natureza', 12388, '2017-11-09 00:18:43'),
(8, 'Educação física', 12400, '2017-11-09 00:19:09'),
(9, 'História', 12377, '2017-11-09 00:19:31'),
(10, 'Matemática', 45899, '2017-11-09 00:19:50'),
(11, 'Português', 45894, '2017-11-09 00:20:08'),
(12, 'Recreação', 34333, '2017-11-09 00:21:39'),
(13, 'Reforço escolar', 37337, '2017-11-09 00:22:33');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_email`
--

CREATE TABLE `tbl_email` (
  `id_em` int(11) NOT NULL,
  `nome_em` varchar(100) DEFAULT NULL,
  `email_em` varchar(100) DEFAULT NULL,
  `assunto_em` varchar(50) DEFAULT NULL,
  `telef_em` varchar(20) DEFAULT NULL,
  `texto_em` text,
  `data_em` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_email`
--

INSERT INTO `tbl_email` (`id_em`, `nome_em`, `email_em`, `assunto_em`, `telef_em`, `texto_em`, `data_em`) VALUES
(1, 'Edmundo Bispo dos Santos', 'edidi@gmail.com', 'Matricula escolar', '74-89562-8855', 'Quanto está a matricula da escola, tem bolsas.', '2017-12-04 01:50:59'),
(3, 'Rasputya Aguia Veigas', 'rarazinha@gmail.com', 'Vagas de emprego', '(74) 98852-3655', 'Então, a solução para que seu e-mail chegue na caixa de entrada do seu destinatário', '2017-12-04 02:26:32');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_eventos`
--

CREATE TABLE `tbl_eventos` (
  `id_ev` int(11) NOT NULL,
  `titulo_ev` varchar(100) DEFAULT NULL,
  `assunto_ev` text,
  `cat_fk_ev` int(11) DEFAULT NULL,
  `img_ev` varchar(60) DEFAULT NULL,
  `data_ev` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_eventos`
--

INSERT INTO `tbl_eventos` (`id_ev`, `titulo_ev`, `assunto_ev`, `cat_fk_ev`, `img_ev`, `data_ev`) VALUES
(15, 'Encontro com alunos', 'O Encontro com Alunos tem como objetivo apresentar os cursos da UniCarioca para os novos alunos, além de ser uma boa oportunidade para que os coordenadores possam dar aos participantes uma visão geral sobre as demandas do mercado de trabalho relacionado à área de formação, a remuneração de cada carreira e, ainda, esclarecer as principais dúvida dos alunos sobre cada curso, criando sentimento de pertencimento entre os participantes.', 5, '1985156390.jpg', '2017-12-06 21:38:44'),
(16, 'Encontro dos alunos', 'Neste ano, estaremos nos reunindo nos dias 27, 28, 29 e 30 de setembro, no CPTEC/INPE, em Cachoeira Paulista (SP).\r\nO evento trata-se de uma ótima oportunidade para a interação entre os discentes para que haja debates científicos e divulgação das pesquisas realizadas por cada um. Nos quatorze eventos anteriores, docentes e pesquisadores renomados também fizeram parte e contribuíram com suas experiencias na área', 1, '657870855.jpg', '2017-12-06 21:39:50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_galeria`
--

CREATE TABLE `tbl_galeria` (
  `ig_gl` int(11) NOT NULL,
  `id_gl_mg` int(11) DEFAULT NULL,
  `texto_gl` varchar(50) DEFAULT NULL,
  `img_gl` varchar(30) DEFAULT NULL,
  `data_gl` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_galeria`
--

INSERT INTO `tbl_galeria` (`ig_gl`, `id_gl_mg`, `texto_gl`, `img_gl`, `data_gl`, `created`, `modified`, `status`) VALUES
(45, 2, 'teste 2', '145379178.jpg', '2017-11-30 12:35:11', '2017-11-30 15:35:11', '2017-11-30 15:35:11', 0),
(47, 3, 'teste 1', '572846332.jpg', '2017-11-30 12:44:08', '2017-11-30 15:44:08', '2017-11-30 15:44:08', 0),
(49, 6, 'Encontro de aprendizado.', '735306851.jpg', '2017-11-30 20:34:25', '2017-11-30 23:34:25', '2017-11-30 23:34:25', 0),
(50, 6, 'Aulas de artes', '1246074447.jpg', '2017-11-30 21:57:04', '2017-12-01 00:57:04', '2017-12-01 00:57:04', 1),
(51, 7, 'nova imagem', '1964463348.jpg', '2017-12-28 10:46:50', '2017-12-28 13:46:50', '2017-12-28 13:46:50', 1),
(52, 7, 'nova imagem 4 serie', '224438978.jpg', '2017-12-28 10:47:40', '2017-12-28 13:47:40', '2017-12-28 13:47:40', 1),
(53, 1, 'nova imagem 1 serie', '1861999899.jpg', '2017-12-28 10:48:30', '2017-12-28 13:48:30', '2017-12-28 13:48:30', 1),
(54, 8, 'teste 9 ano', '2005151325.jpg', '2017-12-28 11:00:41', '2017-12-28 14:00:41', '2017-12-28 14:00:41', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_grade`
--

CREATE TABLE `tbl_grade` (
  `id_g` int(11) NOT NULL,
  `dia_g` int(11) NOT NULL,
  `periodo_g` int(11) NOT NULL,
  `hora_aula_g` int(11) NOT NULL,
  `turma_g` int(11) NOT NULL,
  `prof_g` int(11) NOT NULL,
  `data_g` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_turma`
--

CREATE TABLE `tbl_turma` (
  `id_t` int(11) NOT NULL,
  `nome_turma_t` varchar(50) DEFAULT NULL,
  `codigo_t` varchar(10) DEFAULT NULL,
  `data_t` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbl_turma`
--

INSERT INTO `tbl_turma` (`id_t`, `nome_turma_t`, `codigo_t`, `data_t`) VALUES
(1, '1º ano', '777', '2017-11-12 02:36:44'),
(2, '2º ano', '45888', '2017-11-12 02:37:20'),
(3, '3º ano', '1255', '2017-11-12 02:48:54'),
(4, '6º ano', '58888', '2017-11-12 13:24:57'),
(5, '5º ano', '12544', '2017-11-12 13:53:18'),
(6, '7º ano', '450', '2017-11-27 10:50:08'),
(7, '4º ano', '12541', '2017-12-03 17:38:29'),
(8, '9 ano', '12554', '2017-12-28 10:59:42');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_diretor`
--

CREATE TABLE `user_diretor` (
  `id_dir` int(11) NOT NULL,
  `nome_dir` varchar(90) DEFAULT NULL,
  `email_dir` varchar(50) DEFAULT NULL,
  `tel_dir` varchar(15) DEFAULT NULL,
  `img_dir` varchar(50) DEFAULT NULL,
  `login_fk_dir` int(11) DEFAULT NULL,
  `data_cad_dir` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user_diretor`
--

INSERT INTO `user_diretor` (`id_dir`, `nome_dir`, `email_dir`, `tel_dir`, `img_dir`, `login_fk_dir`, `data_cad_dir`) VALUES
(1, 'Junior Cesar Pinto', 'junio_iesfar@gmail.com', '(74)9.8858-6974', '1204943885.jpg', 1, '2017-11-05 01:04:49');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`) VALUES
(1, 'iesfa@gmail.com', 'iesfa123'),
(2, 'kaila@gmail.com', '123665');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria_blog`
--
ALTER TABLE `categoria_blog`
  ADD PRIMARY KEY (`id_cat_bg`);

--
-- Indexes for table `categoria_eventos`
--
ALTER TABLE `categoria_eventos`
  ADD PRIMARY KEY (`id_cat_ev`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `colaborador`
--
ALTER TABLE `colaborador`
  ADD PRIMARY KEY (`id_col`),
  ADD KEY `fk_diretor_col` (`dir_fk_col`);

--
-- Indexes for table `file_agenda`
--
ALTER TABLE `file_agenda`
  ADD PRIMARY KEY (`id_f`);

--
-- Indexes for table `informa_escola`
--
ALTER TABLE `informa_escola`
  ADD PRIMARY KEY (`id_esc`),
  ADD KEY `fk_diretor` (`dir_fk_esc`);

--
-- Indexes for table `post_ps`
--
ALTER TABLE `post_ps`
  ADD PRIMARY KEY (`id_ps`),
  ADD KEY `fk_categoria_do_blog` (`categoria_fk_ps`);

--
-- Indexes for table `tbl_cat_prof_materia`
--
ALTER TABLE `tbl_cat_prof_materia`
  ADD PRIMARY KEY (`id_pf`),
  ADD KEY `prof_pf_fk` (`fk_prof_pf`),
  ADD KEY `materia_pf_fk` (`fk_materia_pf`);

--
-- Indexes for table `tbl_curso_materia`
--
ALTER TABLE `tbl_curso_materia`
  ADD PRIMARY KEY (`id_cm`);

--
-- Indexes for table `tbl_email`
--
ALTER TABLE `tbl_email`
  ADD PRIMARY KEY (`id_em`);

--
-- Indexes for table `tbl_eventos`
--
ALTER TABLE `tbl_eventos`
  ADD PRIMARY KEY (`id_ev`);

--
-- Indexes for table `tbl_galeria`
--
ALTER TABLE `tbl_galeria`
  ADD PRIMARY KEY (`ig_gl`),
  ADD KEY `fk_turma` (`id_gl_mg`);

--
-- Indexes for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  ADD PRIMARY KEY (`id_g`);

--
-- Indexes for table `tbl_turma`
--
ALTER TABLE `tbl_turma`
  ADD PRIMARY KEY (`id_t`);

--
-- Indexes for table `user_diretor`
--
ALTER TABLE `user_diretor`
  ADD PRIMARY KEY (`id_dir`),
  ADD KEY `id_user_dir_fk` (`login_fk_dir`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria_blog`
--
ALTER TABLE `categoria_blog`
  MODIFY `id_cat_bg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categoria_eventos`
--
ALTER TABLE `categoria_eventos`
  MODIFY `id_cat_ev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `colaborador`
--
ALTER TABLE `colaborador`
  MODIFY `id_col` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `file_agenda`
--
ALTER TABLE `file_agenda`
  MODIFY `id_f` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `informa_escola`
--
ALTER TABLE `informa_escola`
  MODIFY `id_esc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_ps`
--
ALTER TABLE `post_ps`
  MODIFY `id_ps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_cat_prof_materia`
--
ALTER TABLE `tbl_cat_prof_materia`
  MODIFY `id_pf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_curso_materia`
--
ALTER TABLE `tbl_curso_materia`
  MODIFY `id_cm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_email`
--
ALTER TABLE `tbl_email`
  MODIFY `id_em` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_eventos`
--
ALTER TABLE `tbl_eventos`
  MODIFY `id_ev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_galeria`
--
ALTER TABLE `tbl_galeria`
  MODIFY `ig_gl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  MODIFY `id_g` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_turma`
--
ALTER TABLE `tbl_turma`
  MODIFY `id_t` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_diretor`
--
ALTER TABLE `user_diretor`
  MODIFY `id_dir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `colaborador`
--
ALTER TABLE `colaborador`
  ADD CONSTRAINT `fk_diretor_col` FOREIGN KEY (`dir_fk_col`) REFERENCES `user_diretor` (`login_fk_dir`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `informa_escola`
--
ALTER TABLE `informa_escola`
  ADD CONSTRAINT `fk_diretor` FOREIGN KEY (`dir_fk_esc`) REFERENCES `user_diretor` (`id_dir`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `post_ps`
--
ALTER TABLE `post_ps`
  ADD CONSTRAINT `fk_categoria_do_blog` FOREIGN KEY (`categoria_fk_ps`) REFERENCES `categoria_blog` (`id_cat_bg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tbl_cat_prof_materia`
--
ALTER TABLE `tbl_cat_prof_materia`
  ADD CONSTRAINT `materia_pf_fk` FOREIGN KEY (`fk_materia_pf`) REFERENCES `tbl_curso_materia` (`id_cm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prof_pf_fk` FOREIGN KEY (`fk_prof_pf`) REFERENCES `colaborador` (`id_col`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tbl_galeria`
--
ALTER TABLE `tbl_galeria`
  ADD CONSTRAINT `fk_turma` FOREIGN KEY (`id_gl_mg`) REFERENCES `tbl_turma` (`id_t`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
