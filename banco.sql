--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `descricao` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `descricao`) VALUES
(1, 'Eletrônicos', 'Aparelhos eletroeletrônicos'),
(3, 'Roupas', 'Peças de Roupas'),
(4, 'Ferramentas', 'Ferramentas'),
(5, 'Acessórios', ''),
(6, 'Perfumes', ''),
(7, 'Sapatos', ''),
(8, 'Livros', ''),
(9, 'Filmes', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(70) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salario` decimal(15,2) DEFAULT NULL,
  `sexo` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` date DEFAULT NULL,
  `obs` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `cpf`, `salario`, `sexo`, `data`, `obs`) VALUES
(1, 'Maria Bezerra', 'Maria@iftm.edu.br', '79845613210', NULL, 'F', '2023-09-08', 'Teste Testes');

-- --------------------------------------------------------

--
-- Estrutura para tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `filme` varchar(45) NOT NULL,
  `descricao` text NOT NULL,
  `diretor` varchar(45) NOT NULL,
  `duracao` time NOT NULL,
  `estudante` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `filmes`
--

INSERT INTO `filmes` (`id`, `genero`, `filme`, `descricao`, `diretor`, `duracao`, `estudante`) VALUES
(1, 'Fantasia', 'O Senhor dos Aneis', 'Em uma terra fantástica e única, um hobbit recebe de presente de seu tio um anel mágico e maligno que precisa ser destruído antes que caia nas mãos do mal. Para isso, o hobbit Frodo tem um caminho árduo pela frente, onde encontra perigo, medo e seres bizarros. Ao seu lado para o cumprimento desta jornada, ele aos poucos pode contar com outros hobbits, um elfo, um anão, dois humanos e um mago, totalizando nove seres que formam a Sociedade do Anel.', 'Peter Jackson', '02:58:00', 'Dênis Lima'),
(4, 'Animação', 'Barbie e as 12 Princesas Bailarinas', 'Meu favorito', 'Greg Richardson, Terry Klassen', '01:26:00', 'Maria Eduarda Antunes Godoy'),
(6, 'Romance', 'A Cinco Passos de Você', 'Stella passa muito tempo no hospital por causa de uma fibrose cística. Lá, ela conhece Will, que sofre da mesma doença. Eles são obrigados a manter distância, mas mesmo assim se apaixonam.', 'Justin Baldoni', '01:57:00', 'Ester Almeida'),
(7, 'Comédia', 'As Branquelas', 'Dois irmãos agentes do FBI, Marcus e Kevin Copeland, acidentalmente evitam que bandidos sejam presos em uma apreensão de drogas. Como castigo, eles são forçados a escoltar um par de socialites nos Hamptons. Quando as meninas descobrem o plano da agência, elas se recusam a ir. Sem opções, Marcus e Kevin, dois homens negros, decidem fingir que são as irmãs e se transformam em um par de loiras.', ' Keenen Ivory Wayans', '01:49:00', 'Sara Cristina'),
(8, 'Anime', 'Dragon Ball Super: SUPER HERO', 'Uma organização do mal busca vingança com androids novos e melhores, Gamma 1 e Gamma 2.', 'Tetsurô Kodama', '01:40:00', 'Paulo Henrique Marques Silva'),
(9, 'Ficção Científica', 'Planeta dos Macacos: A Extinção', 'Rodolfo', 'Rodolfo', '04:20:00', 'Pedro Henrique'),
(10, 'Comédia', 'A Volta das que Não Foram', 'Um Filme de Comédia onde reúne as principais Caricatas do Rio de Janeiro. É como se misturassem Sex and the City e RuPaul’s Drag Race! O Elenco é formado por Samara Rios Karina KarãoFabyolla Nitchelly Desiree Cher Participações Especiais de: Aline Ramos, Renata Zorah, Wanda Camburao e Suzy Brasil', 'Rafael Ramos', '00:52:00', 'Rafael Duarte Silva'),
(11, 'Terror', 'A Freira 2', 'Apenas para maiores de 18', 'Michael Chaves', '01:49:00', 'Isac Silva De Oliveira'),
(13, 'Ação', '+ Velozes + Furiosos', 'O ex-policial Brian OConner se muda de Los Angeles para Miami para recomeçar sua vida. Ele acaba se envolvendo em rachas na sua nova cidade com seu amigo Tej e Suki.', 'John Singleton', '01:48:00', 'Ana Júlia Malheiros Trindade'),
(16, 'Comédia', 'Gente Grande', 'Seu ator principal: Adam Sandler. ', 'Dennis Dugan', '01:42:00', 'Murilo Nunes Braga'),
(17, ' Ação/Ficção', 'Transformers: O Último Cavaleiro', 'Transformers: O Último Cavaleiro\r\n', 'Michael Bay', '02:40:00', 'André de Paula Chagas'),
(18, 'Ação', 'Divergente', '', '', '02:19:00', 'Isadora'),
(19, 'Independente/Drama', 'Moonlight', 'Black trilha uma jornada de autoconhecimento enquanto tenta escapar do caminho fácil da criminalidade e do mundo das drogas de Miami. Encontrando amor em locais surpreendentes, ele sonha com um futuro maravilhoso.', 'Barry Jenkins', '01:51:00', 'Henrique Borges Cunha'),
(20, 'Super Herói e Animação', 'Homem-Aranha: Através do Aranhaverso', 'Filme doido esse.', ' Joaquim Dos Santos, Justin K. Thompson e Kem', '02:20:00', 'João Victor Rosa'),
(23, 'Suspense', 'Clube da Luta', 'Um homem deprimido que sofre de insônia conhece um estranho vendedor chamado Tyler Durden e se vê morando em uma casa suja depois que seu perfeito apartamento é destruído.', 'David Fincher', '02:19:00', 'João Victor Dias'),
(26, 'Terror', 'Hereditário', 'Trata-se de um terror psicológico sobre uma família atormentada por forças sobrenaturais e segredos sombrios.', 'Ari Aster', '02:07:00', 'Sara Mie'),
(27, 'Fantasia', 'Alice no País das Maravilhas', 'Ainda garotinha, Alice Kingsleigh visitou um lugar mágico pela primeira vez e não tinha mais lembranças sobre o local a não ser em seus sonhos. Em uma festa da nobreza, a jovem vê um coelho branco. Alice o segue e cai em um buraco, indo parar em um mundo estranho: o País das Maravilhas. Lá, ela reencontra personagens que estavam guardados em sua memória através dos sonhos.', 'Tim Burton', '01:48:00', 'Ana Lídia'),
(28, 'Romance', 'A Bela e a Fera', 'Esse filme...', 'Gary Trousdale, Kirk Wise', '20:50:00', 'Ana Clara Santos Souza'),
(29, 'romance', '16 Desejos', '', 'Peter DeLuise ', '01:30:00', 'Maria Carolina Oliveira Silva'),
(30, 'terros/fantasia', 'A lenda do cavaleiro sem cabeça', 'Ichabod Crane é enviado ao vilarejo de Sleepy Hollow, onde um cavaleiro sem cabeça está deixando um rastro de corpos decapitados. Os métodos investigativos de Ichabod são postos à prova, pois um ser sobrenatural pode ser o causador dos crimes.', ' Tim Burton', '01:50:00', 'Flavia Alves'),
(31, 'Ação/Ficção científica', 'Jogos Vorazes', 'Na região antigamente conhecida como América do Norte, a Capital de Panem controla 12 distritos e os força a escolher um garoto e uma garota, conhecidos como tributos, para competir em um evento anual televisionado. Todos os cidadãos assistem aos temidos jogos, no qual os jovens lutam até a morte, de modo que apenas um saia vitorioso. A jovem Katniss Everdeen, do Distrito 12, confia na habilidade de caça e na destreza com o arco, além dos instintos aguçados, nesta competição mortal.', 'Gary Ross', '02:22:00', 'Grazielly Freitas Costa'),
(32, 'Aventura', 'Planeta dos Macacos: o Filme', 'Planeta de macacos', 'Rodolfo', '02:30:00', 'Rodolfo Gabriel'),
(33, 'Ficção Científica/Ação', 'Guardiões da Galáxia ', 'num sei', 'James Gunn', '02:02:00', 'Raul Brasiel'),
(34, 'Anime', 'Dragon Ball Super: Broly\r\n', 'Apesar da Terra estar em um período de calmaria, Goku se recusa a parar de treinar constantemente. O que ele não imaginava era que seu novo inimigo seria Broly, um poderoso super saiyajin sedento por vingança, que deseja destruir todos que encontrar pela frente.', 'Tatsuya Nagamine', '01:40:00', 'Bruno de Carvalho Ferreira');

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogos`
--

CREATE TABLE `jogos` (
  `id` int(11) NOT NULL,
  `jogo` varchar(45) DEFAULT NULL,
  `numero_integrantes` int(11) DEFAULT NULL,
  `regras` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `jogos`
--

INSERT INTO `jogos` (`id`, `jogo`, `numero_integrantes`, `regras`, `created`, `modified`) VALUES
(1, 'Compre na shopee', 7, 'n', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `valor` decimal(15,2) DEFAULT NULL,
  `codigo` varchar(13) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `descricao` text,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `valor`, `codigo`, `quantidade`, `descricao`, `categoria_id`) VALUES
(1, 'xBox', 8000.00, '123', 1, 'Teste', 3),
(2, 'Play5 &#039;', 3500.00, '2', 7, 'asdfasf', 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produtos_categorias_idx` (`categoria_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_produtos_categorias` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
