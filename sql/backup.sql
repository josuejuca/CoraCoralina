-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2023 às 03:41
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `coracoralina`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `acervo`
--

CREATE TABLE `acervo` (
  `idacervo` int(11) NOT NULL COMMENT 'PK: chave primaria na tabela ''acervo''.',
  `autor` varchar(100) NOT NULL COMMENT 'Campo autor: cadastro do autor do livro na tabela ''acervo''.',
  `sinopse` varchar(3000) NOT NULL COMMENT 'campo sinopse: cadastro da sinopse do livro na tabela ''acervo''.',
  `quantidade` int(20) NOT NULL COMMENT 'Campo quantidade: cadastro da quantidade de livros na tabela ''acervo''.',
  `midia` int(10) NOT NULL COMMENT 'Campo midia: cadastro do tipo de mídia dos livros na tabela ''acervo''.',
  `capa` varchar(500) NOT NULL COMMENT 'Campo capa: cadastro da capa dos livros na tabela ''acervo''.',
  `livro_nome` varchar(100) NOT NULL COMMENT 'Campo livro_nome: cadastro do livro na tabela ''acervo''.',
  `isbn` varchar(50) NOT NULL COMMENT 'Campo ISBN: cadastro do numero do livro reconhecido mundialmente na tabela ''acervo''.',
  `sobre_autor` varchar(3000) DEFAULT NULL COMMENT 'Campo sobre_autor: cadastro de uma breve biografia do autor do livro na tabela ''acervo''.',
  `genero` varchar(45) DEFAULT NULL COMMENT 'Campo genero: cadastro do gênero literario na tabela ''acervo''.',
  `data_cadastro` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Campo data: cadastro da data do livro na tabela ''acervo''.',
  `data_livro` year(4) DEFAULT NULL COMMENT 'Campo data_livro: cadastro da data do livro na tabela ''acervo''.',
  `editora` varchar(50) DEFAULT NULL COMMENT 'Campo editora: cadastro da editora que lançou o livro na tabela ''acervo''.',
  `idioma` varchar(50) DEFAULT NULL COMMENT 'Campo idioma: cadastro do idioma do acervo na tabela ''acervo''.',
  `num_pa` varchar(50) DEFAULT NULL COMMENT 'Campo num_pa: cadastro da quantidade de pagina dos livros na tabela ''acervo''.',
  `info_ad1` varchar(50) DEFAULT NULL COMMENT 'Campo info_ad2: cadastro de alguma informação adicional do acervo na tabela ''acervo''.',
  `info_ad2` varchar(50) DEFAULT NULL COMMENT 'Campo info_ad2: cadastro de alguma informação adicional do acervo na tabela ''acervo''.',
  `info_ad3` varchar(50) DEFAULT NULL COMMENT 'Campo info_ad3: cadastro de alguma informação adicional do acervo na tabela ''acervo''.',
  `usuario_idusuario` int(10) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela ''usuario''.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `acervo`
--

INSERT INTO `acervo` (`idacervo`, `autor`, `sinopse`, `quantidade`, `midia`, `capa`, `livro_nome`, `isbn`, `sobre_autor`, `genero`, `data_cadastro`, `data_livro`, `editora`, `idioma`, `num_pa`, `info_ad1`, `info_ad2`, `info_ad3`, `usuario_idusuario`) VALUES
(10, 'Gege Akutami', 'O estudante colegial Yuuta Okkotsu deseja ser executado porque sofre com as ações de Rika Orimoto, espírito rancoroso que o possuiu. Enquanto isso, Satoru Gojou, professor que ensina a exorcizar \"maldições\", transfere Yuuta para a Escola Técnica Superior de Jujutsu de Tokyo. Tem início a pré-sequência da série Jujutsu Kaisen!', 2, 1, '../../assets/img/capa/615ZVNEaoWL._SY344_BO1,204,203,200_QL70_ML2_.jpg', 'Jujutsu Kaisen 0', '6555127279', 'Gege Akutami é um artista de mangá japonês, conhecido por seu trabalho Jujutsu Kaisen.', 'Gibis', '2023-06-28 23:30:33', '2001', 'Panini', 'Português', '200', '1 março 2021', NULL, NULL, 4),
(11, ' J.K. Rowling', 'Harry Potter é um garoto cujos pais, feiticeiros, foram assassinados por um poderosíssimo bruxo quando ele ainda era um bebê. Ele foi levado, então, para a casa dos tios que nada tinham a ver com o sobrenatural. Pelo contrário. Até os 10 anos, Harry foi uma espécie de gata borralheira: maltratado pelos tios, herdava roupas velhas do primo gorducho, tinha óculos remendados e era tratado como um estorvo. No dia de seu aniversário de 11 anos, entretanto, ele parece deslizar por um buraco sem fundo, como o de Alice no país das maravilhas, que o conduz a um mundo mágico. Descobre sua verdadeira história e seu destino: ser um aprendiz de feiticeiro até o dia em que terá que enfrentar a pior força do mal, o homem que assassinou seus pais. O menino de olhos verde, magricela e desengonçado, tão habituado à rejeição, descobre, também, que é um herói no universo dos magos. Potter fica sabendo que é a única pessoa a ter sobrevivido a um ataque do tal bruxo do mal e essa é a causa da marca em forma de raio que ele carrega na testa. Ele não é um garoto qualquer, ele sequer é um feiticeiro qualquer ele é Harry Potter, símbolo de poder, resistência e um líder natural entre os sobrenaturais. A fábula, recheada de fantasmas, paredes que falam, caldeirões, sapos, unicórnios, dragões e gigantes, não é, entretanto, apenas um passatempo.', 4, 1, '../../assets/img/capa/B01LQM96G4_76c6ddc3_cover.jpeg', 'Harry Potter e a Pedra Filosofa', '8532530788', 'Joanne \"Jo\" Rowling OBE FRSL, mais conhecida como J. K. Rowling, é uma escritora, roteirista e produtora cinematográfica britânica, notória por escrever a série de livros Harry Potter.', 'Literatura Estrangeira', '2023-06-28 20:22:14', '2019', 'Rocco', 'Português', '208', '19 agosto 2017', NULL, NULL, 4),
(12, ' J.K. Rowling', 'Depois de férias aborrecidas na casa dos tios trouxas, está na hora de Harry Potter voltar a estudar. Coisas acontecem, no entanto, para dificultar o regresso de Harry. Persistente e astuto, o herói não se deixa intimidar pelos obstáculos e, com a ajuda dos fiéis amigos Weasley, começa o ano letivo na Escola de Magia e Bruxaria de Hogwarts. As novidades não são poucas. Novos colegas, novos professores, muitas e boas descobertas e um grande e perigosos desafio. Alguém ou alguma coisa ameaça a segurança e a tranquilidade dos membros de Hogwarts.', 0, 1, '../../assets/img/capa/B01LQM96K0.01._SCLZZZZZZZ_SX500_.jpg', 'Harry Potter e a Câmara Secreta', '8532530796', 'Nada informado', 'Literatura Estrangeira', '2023-06-28 19:19:07', '2019', 'Rocco', 'Português', '200', '19 agosto 2017', NULL, NULL, 4),
(13, 'William P. Young', 'Durante uma viagem de fim de semana, a filha mais nova de Mack Allen Phillips é raptada e evidências de que ela foi brutalmente assassinada são encontradas numa velha cabana.\r\n\r\nApós quatro anos vivendo numa tristeza profunda causada pela culpa e pela saudade da menina, Mack recebe um estranho bilhete, aparentemente escrito por Deus, convidando-o a voltar à cabana onde acontecera a tragédia.\r\n\r\nApesar de desconfiado, ele vai ao local numa tarde de inverno e adentra passo a passo o cenário de seu mais terrível pesadelo. Mas o que ele encontra lá muda o seu destino para sempre.\r\n\r\nEm um mundo cruel e injusto, A cabana levanta um questionamento atemporal: se Deus é tão poderoso, por que não faz nada para amenizar nosso sofrimento?', 1, 1, '../../assets/img/capa/B01NAU1MWU_c243a74d_cover.jpeg', 'A cabana', '8599296361', 'não valido', 'Outro Genero', '2023-06-24 02:59:52', '2001', 'Rocco', 'Português', '22', '1 março 2021', NULL, NULL, 4),
(14, 'W. Bruce Cameron (Autor), Regina Lyra (Tradutor)', 'O LIVRO QUE INSPIROU O FILME! \"Esta história vivaz e emocionante encantará a todos os apaixonados por cachorros.\" ? Booklist Esta é a inesquecível história de um cão que, após renascer várias vezes, imagina que haja uma razão para seu retorno, um propósito a cumprir e que, enquanto não o alcançar, continuará renascendo. Narrado pelo próprio animal, Quatro vidas de um cachorro aborda a questão mais básica da vida: por que estamos aqui? Emocionante e com boas doses de humor, este é um livro para todas as idades, que mostra o olhar de um cão sobre o relacionamento entre as pessoas e os laços eternos entre os seres humanos e seus animais. Se você gostou de Marley & eu, vai adorar esta aventura que agora ganha as telas do cinema.', 0, 1, '../../assets/img/capa/B01M10HCQ8.01._SCLZZZZZZZ_SX500_.jpg', 'Quatro Vidas de Um Cachorro - Capa do Filme', '8569514719', 'TESTE', 'Outro Genero', '2023-06-23 23:38:17', '2023', 'TESTE', 'Português', '250', '2023', NULL, NULL, 4),
(15, 'Haemin Sunim (Autor), Rafaella Lemos (Tradutor)', 'De tempos em tempos, surge um livro que, com sua maneira original de iluminar importantes temas espirituais, se torna um fenômeno tão grande em seu país de origem que acaba chamando a atenção e encantando leitores de todo o mundo.\r\n\r\nEscrito pelo mestre zen-budista sul-coreano Haemin Sunim, As coisas que você só vê quando desacelera é um desses raros e tão necessários livros para quem deseja tranquilizar os pensamentos e cultivar a calma e a autocompaixão.\r\n\r\nIlustrado com extrema delicadeza, ele nos ajuda a entender nossos relacionamentos, nosso trabalho, nossas aspirações e nossa espiritualidade sob um novo prisma, revelando como a prática da atenção plena pode transformar nosso modo de ser e de lidar com tudo o que fazemos.\r\n\r\nVocê vai descobrir que a forma como percebemos o mundo é um reflexo do que se passa em nossa mente. Quando nossa mente está alegre e compassiva, o mundo também está. Quando ela está repleta de pensamentos negativos, o mundo parece sombrio. E quando nossa mente descansa, o mundo faz o mesmo.\r\n\r\n\"Um livro para os dias de hoje, repleto de verdades universais, lindamente escrito e ilustrado. Cada parágrafo possui a própria semente, que cria raízes para a sabedoria mais profunda e atemporal. Uma obra para se ter sempre à mão.\" – Mark Williams, coautor de Atenção plena.', 1, 1, '../../assets/img/capa/B075NTMDR3.01._SCLZZZZZZZ_SX500_.jpg', 'As coisas que você só vê quando desacelera: Como manter a calma em um mundo frenético Capa dura', '8543105293', 'TESTE', 'Outro Genero', '2023-06-24 03:11:26', '2023', 'TESTE', 'Português', '300', '2023', NULL, NULL, 4),
(16, 'Zoe Hana Mikuta (Autor), Ana Beatriz Omuro (Tradutor)', '“A ficção científica na sua melhor forma.”\r\nCHLOE GONG, autora de Prazeres violentos\r\n\r\nFazendo uso de gigantes armas mecânicas conhecidas como Windups, o governo tirânico de Godolia lança seus tentáculos por todo o território que o cerca, levando guerra e opressão ao cotidiano das Terras Baldias, lar de pessoas como Eris Shindanai.\r\nA garota é uma Gearbreaker, uma jovem rebelde impetuosa especializada em derrubar Windups e conhecida pela alcunha de Geada. Quando uma de suas missões dá errado e ela acaba em uma prisão em Godolia, Eris conhece Sona Steelcrest, uma piloto de Windup aprimorada tecnologicamente para ser uma arma de destruição.\r\nA princípio, Eris vê Sona como sua inimiga mortal e um alvo a ser eliminado, mas, com o passar do tempo, descobre que Sona guarda um segredo: ela se infiltrou intencionalmente\r\nno Programa de Windups com o objetivo de destruir Godolia a partir de dentro. E Eris terá a oportunidade de entender os motivos por trás dos planos de vingança de Sona.\r\nÀ medida que sua missão mais mortal se aproxima – um ataque direto que pode acabar com o reinado de Godolia de uma vez por todas –, o relacionamento entre Eris e Sona também se estreita, como parceiras, amigas, e talvez algo mais…', 1, 1, '../../assets/img/capa/B0BYBDZC76.01._SCLZZZZZZZ_SX500_.jpg', 'Gearbreakers: Matadores de robôs', '6555395826', 'TESTE', 'Outro Genero', '2023-06-24 03:13:16', '2023', 'TESTE', 'Português', '500', '2023', NULL, NULL, 4),
(17, 'Colleen Hoover (Autor) ', 'Novo romance da autora de O lado feio do amor. Fallon conhece Ben, um aspirante a escritor, bem no dia da sua mudança de Los Angeles para Nova York. A química instantânea entre os dois faz com que passem o dia inteiro juntos – a vida atribulada de Fallon se torna uma grande inspiração para o romance que Ben pretende escrever. A mudança de Fallon é inevitável, mas eles prometem se encontrar todo ano, sempre no mesmo dia. Até que Fallon começa a suspeitar que o conto de fadas do qual faz parte pode ser uma fabricação de Ben em nome do enredo perfeito. Será que o relacionamento de Ben com Fallon, e o livro que nasce dele, pode ser considerado uma história de amor mesmo se terminar em corações partidos?', 1, 1, '../../assets/img/capa/B01MA41MMA.01._SCLZZZZZZZ_SX500_.jpg', 'Novembro, 9 ', '65168498465', 'TESTE', 'Outro Genero', '2023-06-24 03:16:20', '2023', 'TESTE', 'Português', '120', '2023', NULL, NULL, 4),
(18, 'Gege Akutami', 'TESTE', 1, 1, '../../assets/img/capa/B083V5G644.01._SCLZZZZZZZ_SX500_.jpg', 'O livro que você gostaria que seus pais tivessem lido: (e seus filhos ficarão gratos por você ler)', '8584391606', 'TESTE', 'Outro Genero', '2023-06-28 20:10:46', '2023', 'teste', 'Português', '22', '2023', NULL, NULL, 4),
(19, 'teste', 'TESTE', 1, 1, '../../assets/img/capa/B0BDSB3YLP.01._SCLZZZZZZZ_SX500_.jpg', 'É assim que começa (Vol. 2 É assim que acaba)', '6559811395', 'TESTE', 'Outro Genero', '2023-06-24 03:22:39', '2023', 'Rocco', 'Português', '22', '2023', NULL, NULL, 4),
(20, 'J.K. Rowling', 'Descrição', 0, 1, 'https://covers.openlibrary.org/b/id/12369745-L.jpg', 'Harry Potter e a Ordem da Fenix - Edicao Comemorativa dos 20 anos da Colecao Harry Potter', '8532531806', 'Nada informado', 'Literatura Estrangeira', '2023-06-28 14:59:38', '0000', 'Rocco', 'Português', '200', 'Nov 13, 2019', NULL, NULL, 4),
(21, 'teste', 'teste', 0, 1, '../../assets/img/capa/419DMZkvVbL._BG0,0,0,0_FMpng_AC_SY320_SX320_.png', 'Teste', '123456789', 'teste', 'Infantis', '2023-06-26 00:39:42', '2023', 'TESTE', 'teste', '200', '2023', NULL, NULL, 4),
(22, 'Curi', 'Hazel é uma paciente terminal. Ainda que, por um milagre da medicina, seu tumor tenha encolhido bastante ? o que lhe dá a promessa de viver mais alguns anos ?, o último capítulo de sua história foi escrito no momento do diagnóstico.\r\n\r\nMas em todo bom enredo há uma reviravolta, e a de Hazel se chama Augustus Waters, um garoto bonito que certo dia aparece no Grupo de Apoio a Crianças com Câncer. Juntos, os dois vão preencher o pequeno infinito das páginas em branco de suas vidas.\r\n\r\nInspirador, corajoso, irreverente e brutal, A culpa é das estrelas é a obra mais ambiciosa e emocionante de John Green, sobre a alegria e a tragédia que é viver e amar.', 0, 1, '../../assets/img/capa/41yToN1cOML._SX334_BO1,204,203,200_.jpg', 'A culpa é do Curi', '8580573807', 'Nada informado', 'Romance', '2023-06-28 19:28:41', '2023', 'Curi Produções', 'Portugues ', '250', '2023', NULL, NULL, 4),
(23, 'Rachael Lippincott', '\r\nStella Grant gosta de estar no controle. Ela parece ser uma adolescente típica, mas em sua rotina há listas de tarefas e inúmeros remédios que ela deve tomar para controlar a fibrose cística, uma doença crônica que impede que seus pulmões funcionem como deveriam. Suas prioridades são manter seus pais felizes e conseguir um transplante – e uma coisa não existe sem a outra. Mas para ganhar pulmões novos, Stella precisa seguir seu tratamento à risca e eliminar qualquer chance de infecção, o que significa que ela não pode ficar a menos que dois metros de distância – ou seis passos – de outros pacientes com a doença. O primeiro item é fácil para ela, mas o segundo pode se provar mais difícil do que ela esperava.\r\n\r\nO único controle que Will Newman deseja é o de sua própria vida. Ele não dá a mínima para o novo tratamento experimental para o qual foi selecionado e não aguenta mais a pressão de sua mãe para que melhore. Prestes a completar dezoito anos, ele mal pode esperar para finalmente se livrar das máquinas e hospitais, usando o pouco de vida que ainda lhe resta para conhecer o mundo. Stella e Will são muito diferentes. Ao mesmo tempo, a doença que os une não é a única coisa que têm em comum. Eles têm que ficar a cinco passos um do outro, mas, conforme a conexão entre os dois aumenta, a vontade de burlar a distância física parece insuportável. Um grande amor vale um passo roubado?', 0, 1, '../../assets/img/capa/4164jpw+6lL._SY344_BO1,204,203,200_.jpg', 'A cinco passos de você', '8525067423', 'Nada informado', 'Romance', '2023-06-28 19:30:57', '2023', 'Curi Produções', 'Portugues ', '254', '2023', NULL, NULL, 4),
(24, 'Stephenie Meyer', 'Crepúsculo poderia ser uma história comum, não fosse um elemento irresistível: o objeto da paixão da protagonista é um vampiro. Assim, soma-se à paixão um perigo sobrenatural temperado com muito suspense, e o resultado é uma leitura de tirar o fôlego. Um romance repleto das angústias e incertezas da juventude - o arrebatamento, a atração, a ansiedade que antecede cada palavra, cada gesto, e todos os medos.\r\n\r\nIsabella Swan chega à nublada e chuvosa cidadezinha de Forks - último lugar onde gostaria de viver. Tenta se adaptar à vida provinciana na qual aparentemente todos se conhecem, lidar com sua constrangedora falta de coordenação motora e se habituar a morar com um pai com quem nunca conviveu. Em seu destino está Edward Cullen.\r\n\r\nLindo, perfeito, misterioso, ele é à primeira vista, hostil à presença de Bella - o que provoca nela uma inquietação desconcertante. Ela se apaixona. Ele, no melhor estilo \"amor proibido\", alerta: Sou um risco para você. Ela é uma garota incomum. Ele é um vampiro. Ela precisa aprender a controlar seu corpo quando ele a toca. Ele, a controlar sua sede pelo sangue dela. Em meio a descobertas e sobressaltos, Edward é, sim, perigoso: um perigo que qualquer mulher escolheria correr.\r\n\r\nNesse universo fantasioso, os personagens construídos por Stephenie Meyer - humanos ou não - se mostram de tal forma familiares em seus dilemas e em seu comportamento que o sobrenatural parece real. Meyer torna perfeitamente plausível - e irresistível - a paixão de uma garota de 17 anos por um vampiro encantador.\r\n\r\nCom direitos vendidos para mais de 40 países e para o cinema, Crepúsculo chegou às telas em 2008, em filme assinado pelos produtores de O Diabo Veste Prada, protagonizado por Robert Pattinson e Kristen Stewart e dirigido por Catherine Hardwicke.', 0, 1, '../../assets/img/capa/crep.jpg', 'Crepúsculo', '9788580570304', 'Não informado', 'Ação e Aventura', '2023-06-28 19:36:17', '2012', 'Juca PRODUÇÕES', 'Portugues ', '478', '2012', NULL, NULL, 4),
(25, ' Masashi Kishimoto ', '\r\nObito se tornou o jinchuuriki da Jyuubi. Seu poder, que agora conta com uma bijuu, é capaz de destruir o mundo! Em desvantagem, Naruto e Sasuke aproveitam as habilidades dos Hokages e buscam uma oportunidade para o contra-ataque!!', 0, 1, '../../assets/img/capa/51wkkEAJlkL._SX341_BO1,204,203,200_.jpg', 'Naruto Gold Vol. 67', '655512900X', 'Nada informado', 'Gibis', '2023-06-28 19:37:37', '2030', 'Teste', 'Português', '254', '30 março 2022', NULL, NULL, 4),
(26, 'Stephenie Meyer', 'Para Bella Swan, há um coisa mais importante do que a própria vida: Edward Cullen. Mas estar apaixonada por um vampiro é ainda mais perigoso do que ela poderia ter imaginado. Edward já resgatara Bella das garras de um monstro cruel, mas agora, quando o relacionamento ousado do casal ameaça tudo o que lhes é próximo e querido, eles percebem que seus problemas podem estar apenas começando...\r\n\r\nLegiões de leitores que ficaram em transe com o best-seller Crepúsculo estão ávidos pela sequência da história de amor de Bella e Edward. Em Lua nova, Stephenie Meyer nos dá outra combinação irresistível de romance e suspense com um toque sobrenatural. Apaixonante e cheia de reviravoltas surpreendentes, essa saga de amor e vampiros segue rumo à imortalidade literária.\r\n\r\nCom direitos vendidos para mais de 40 países e para o cinema, Lua nova chegou às telas em 2009, em filme protagonizado por Kristen Stewart, Robert Pattinson e Taylor Lautner e dirigido por Chirs Weitz.', 0, 1, '../../assets/img/capa/lua nova.jpg', 'Lua nova', '9788580570328', '', 'Ação e Aventura', '2023-06-28 19:38:03', '2012', 'Juca PRODUÇÕES', 'Portugues ', '533', '2012', NULL, NULL, 4),
(27, 'Stephenie Meyer', 'Enquanto Seattle é assolada por uma sequência de assassinatos misteriosos e uma vampira maligna continua em sua busca por vingança, Bella está cercada de perigos outra vez. Em meio a isso, ela é forçada a escolher entre seu amor por Edward e sua amizade com Jacob - sabendo que essa decisão tem o potencial para reacender o conflito perene entre vampiros e lobisomens.\r\n\r\nCom a proximidade da formatura, Bella tem mais uma decisão a tomar: vida ou morte. Mas o que representará cada uma dessas escolhas?\r\n\r\nOs leitores fascinados por Crepúsculo e Lua nova vão devorar ansiosamente Eclipse - o terceiro livro da excitante saga de amor e vampiros assinada por Stephenie Meyer.', 0, 1, '../../assets/img/capa/31zRy3HoV+L.jpg', 'Eclipse', '978-8598078410', '', 'Ação e Aventura', '2023-06-28 19:39:52', '2012', 'Juca PRODUÇÕES', 'Portugues ', '607', '2012', NULL, NULL, 4),
(28, ' Andrzej Sapkowski ', 'Geralt de Rívia é um bruxo sagaz e habilidoso. Um assassino impiedoso e de sangue-frio treinado, desde a infância, para caçar e eliminar monstros. Seu único objetivo: destruir as criaturas do mal que assolam o mundo. Um mundo fantástico criado por Sapkowski com claras influências da mitologia eslava. Um mundo em que nem todos os que parecem monstros são maus nem todos os que parecem anjos são bons...', 0, 1, '../../assets/img/capa/B013RCB3VM.01._SCLZZZZZZZ_SX500_.jpg', 'O Último Desejo - The Witcher: Volume 1', '8578279581', 'Nada informado', 'Ação e Aventura', '2023-06-28 19:40:20', '2015', 'Teste', 'Português', '250', '2015', NULL, NULL, 4),
(29, 'Stephenie Meyer', 'Empurrada em uma direção por sua intensa paixão por Edward Cullen, e em outra por sua profunda ligação com o lobisomem Jacob Black, ela resistiu a um tumultuado ano de tentação, perda e conflito até o momento da decisão definitiva. A escolha entre fazer parte do obscuro, mas sedutor, mundo dos imortais ou permanecer vivendo como humana se tornou o marco que poderá transformar o destino dos dois clãs: vampiros e lobisomens.\r\n\r\nAgora que Bella tomou sua decisão, uma corrente de acontecimentos sem precedentes se desdobrará, com consequências devastadoras. No momento em que as feridas parecem prontas para ser cicatrizadas, e os desgastantes confrontos da vida de Bella, resolvidos, isso pode significar a destruição. Para todos. Para sempre.', 0, 1, '../../assets/img/capa/31dpT5p78nL.jpg', 'Amanhecer', '9788580570366', '', 'Ação e Aventura', '2023-06-28 19:41:30', '2012', 'Juca PRODUÇÕES', 'Portugues ', '768', '2012', NULL, NULL, 4),
(30, ' Andrzej Sapkowski ', 'Geralt de Rívia é um bruxo. Um feiticeiro cheio de astúcia. Um matador impiedoso. Um assassino de sangue-frio, treinado desde a infância para caçar e eliminar monstros. Seu único objetivo: destruir as criaturas do mal que assolam o mundo. Um mundo fantástico criado por Sapkowski com claras influências da mitologia eslava. Um mundo em que nem todos os que parecem monstros são maus e nem todos os que parecem anjos são bons.A espada do destino é o segundo livro da saga do bruxo Geralt de Rívia e terá continuidade com O sangue dos elfos.', 0, 1, '../../assets/img/capa/B013RCC9U6.01._SCLZZZZZZZ_SX500_.jpg', 'A espada do destino - The Witcher - A saga do bruxo Geralt de Rívia: 2', '857827556X', 'Nada informado', 'Ação e Aventura', '2023-06-28 19:42:09', '2012', 'Teste', 'Português', '250', '2012', NULL, NULL, 4),
(31, 'Stephenie Meyer', 'Um dos maiores fenômenos editoriais dos últimos tempos, a saga Crepúsculo narra a icônica história de amor de Bella Swan, uma garota tímida e desastrada, que acaba de mudar de cidade, e Edward Cullen, um rapaz misterioso que esconde um segredo aterrorizante: é um vampiro. Desde a primeira troca de olhares, ele fez tudo para ficar longe dela, mas e se as coisas não tiverem acontecido exatamente assim?\r\n\r\nAté agora, os leitores conheceram essa trama inesquecível apenas pelos olhos de Bella. No aguardado Sol da meia-noite, vamos testemunhar o nascimento desse amor pelo olhar de Edward, mergulhando em um universo novo, sombrio e surpreendente, cheio de revelações.\r\n\r\nConhecer Bella foi o que aconteceu de mais irritante e instigante em todos os anos de Edward como vampiro. À medida que conhecemos detalhes sobre seu passado e a complexidade de seus pensamentos, conseguimos entender por que Bella se tornou o eixo central de uma batalha decisiva em sua vida. Como Edward poderia seguir seu coração se isso significava colocar a amada em perigo? Do que ele seria capaz de abrir mão?\r\n\r\nEm Sol da meia-noite, Stephenie Meyer faz um retorno triunfal ao universo de Crepúsculo e nos transporta mais uma vez para Forks, convidando-nos a revisitar cada detalhe dessa história que conquistou milhões de fãs em todo o mundo. Em meio a uma paixão cercada de perigos sobrenaturais, vamos descobrir como Edward encara seus prazeres mais profundos e as consequências devastadoras de um amor proibido e imortal.', 0, 1, '../../assets/img/capa/419bUDieKNL.jpg', 'Sol da meia-noite', '978-6555600292', '', 'Ação e Aventura', '2023-06-28 19:43:10', '2020', 'Juca PRODUÇÕES', 'Portugues ', '915', '2020', NULL, NULL, 4),
(32, ' Andrzej Sapkowski ', 'Geralt de Rívia é um bruxo sagaz e habilidoso. Um assassino impiedoso e de sangue-frio treinado, desde a infância, para caçar e eliminar monstros. Seu único objetivo: destruir as criaturas do mal que assolam o mundo. Um mundo fantástico criado por Sapkowski com claras influências da mitologia eslava. Um mundo em que nem todos os que parecem monstros são maus e nem todos os que parecem anjos são bons...', 0, 1, '../../assets/img/capa/B013RCGE2A.01._SCLZZZZZZZ_SX500_.jpg', 'O sangue dos elfos - The Witcher - A saga do bruxo Geralt de Rívia: 3', '857827685X', 'Nada informado', 'Ação e Aventura', '2023-06-28 19:44:43', '2013', 'Teste', 'Português', '250', '2013', NULL, NULL, 4),
(33, ' Andrzej Sapkowski ', 'Tempo do desprezo é o quarto livro da saga do bruxo Geralt de Rívia. Geralt lutou contra monstros e demônios por todo o país, mas até ele pode não estar preparado para o que está acontecendo com seu mundo. Há intrigas, divergências e rebeliões por todo lado. Os Elfos e outros seres não humanos vivem sob repressão há décadas. Os Magos brigam uns com os outros, alguns a soldo dos reis, outros simpatizantes dos elfos. E, nesse cenário de medo e desprezo, Geralt e sua amante Yennefer precisam proteger Ciri, herdeira órfã e procurada por todos os lados. Ela tem o poder de salvar o mundo ou, talvez, acabar com ele.', 0, 1, '../../assets/img/capa/B013RBMQAA.01._SCLZZZZZZZ_SX500_.jpg', 'Tempo do desprezo - The Witcher - A saga do bruxo Geralt de Rívia: 4', '8578278429', 'Nada informado', 'Ação e Aventura', '2023-06-28 19:47:49', '2014', 'Teste', 'Português', '250', '2014', NULL, NULL, 4),
(34, ' Akira Toriyama ', 'Alguns meses se passaram desde a grande luta entre Goku e Majin Boo. Mas uma nova ameaça vem para acabar com a paz. Parece que o próximo inimigo vem do Sexto Universo e nossos heróis mal podem esperar para enfrenta-lo e testar a sua força. A aclamada série de Akira Toriyama finalmente tem a sua continuação.', 2, 1, '../../assets/img/capa/B0884ZWV36.01._SCLZZZZZZZ_SX500_.jpg', 'Dragon Ball Super - vol. 1', '2545774554', 'Nada informado', 'Gibis', '2023-06-28 19:53:43', '2018', 'Teste', 'Português', '250', '2018', NULL, NULL, 4),
(35, 'Gege Akutami', 'Descrição', 1, 1, '../../assets/img/capa/B0BDSB3YLP.01._SCLZZZZZZZ_SX500_.jpg', 'Jujutsu Kaisen 10', '12345678978', 'Sobre o autor ', 'Gibis', '2023-06-29 04:35:14', '2023', 'Teste', 'Português', '251', '2023', NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `devolucao`
--

CREATE TABLE `devolucao` (
  `iddevolucao` int(11) NOT NULL COMMENT 'PK:chave primaria da tabela ''devolucao''.',
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Campo data: cadastro da data da devolução do livro na tabela ''devolucao''.',
  `emprestimo_idemprestimo` int(11) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela ''emprestimo''.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `doacao`
--

CREATE TABLE `doacao` (
  `iddoacao` int(11) NOT NULL COMMENT 'PK:chave primaria na tabela ''doacao''.',
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Campo data: cadastro da data da doação na tabela ''doacao''.',
  `acervo_idacervo` int(11) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela ''acervo''.',
  `usuario_idusuario` int(10) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela ''usuario''.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `idemprestimo` int(11) NOT NULL COMMENT 'PK: chave primaria da tabela ''emprestimo''.',
  `data` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'campo data: cadastro da data do emprestimo na tabela ''emprestimo''.',
  `status` varchar(100) NOT NULL COMMENT 'campo status: cadastro do status do emprestimo na tabela ''emprestimo''.',
  `usuario_idusuario` int(10) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela ''usuario''.',
  `acervo_idacervo` int(11) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela ''acervo''.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `emprestimo`
--

INSERT INTO `emprestimo` (`idemprestimo`, `data`, `status`, `usuario_idusuario`, `acervo_idacervo`) VALUES
(17, '2023-06-28 20:10:46', 'Devolvido', 4, 18),
(18, '2023-06-28 20:22:14', 'Devolvido', 4, 11),
(19, '2023-06-28 22:20:24', 'Devolvido', 4, 10),
(20, '2023-06-24 04:38:17', 'Emprestado', 4, 14),
(21, '2023-06-26 05:38:53', 'Emprestado', 4, 10),
(22, '2023-06-26 05:39:42', 'Emprestado', 4, 21),
(23, '2023-06-28 19:59:38', 'Emprestado', 4, 20),
(24, '2023-06-29 00:19:07', 'Emprestado', 4, 12),
(25, '2023-06-28 20:12:15', 'Devolvido', 4, 10),
(26, '2023-06-28 20:15:05', 'Devolvido', 4, 10),
(27, '2023-06-28 22:02:51', 'Devolvido', 4, 10),
(28, '2023-06-28 23:30:33', 'Devolvido', 4, 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `opiniao`
--

CREATE TABLE `opiniao` (
  `idopiniao` int(11) NOT NULL COMMENT 'PK:chave primaria da tabela ''opiniao''.',
  `opiniao` varchar(1000) NOT NULL COMMENT 'Campo descricao: descricao da opinião do leitor na tabela ''opiniao''.',
  `nota` int(5) NOT NULL COMMENT 'Campo nota: nota do leitor sobre o livro na tabela ''opiniao''.',
  `data` date NOT NULL COMMENT 'Campo data: cadastro da data do emprestimo na tabela ''opiniao''.',
  `usuario_idusuario` int(10) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela ''usuario''.',
  `acervo_idacervo` int(11) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela ''acervo''.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `perfil`
--

CREATE TABLE `perfil` (
  `idperfil` int(10) NOT NULL COMMENT 'PK: chave primaria da tabela ''perfil''.',
  `perfil` varchar(100) NOT NULL COMMENT 'Campo descricao: descricao do perfil na tabela ''perfil''.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `perfil`
--

INSERT INTO `perfil` (`idperfil`, `perfil`) VALUES
(1, 'Administrador'),
(2, 'Funcionario'),
(3, 'Comunidade');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(10) NOT NULL COMMENT 'PK:chave primaria na tabela ''usuario''.',
  `email` varchar(50) NOT NULL COMMENT 'Campo email: cadastro do email na tabela ''usuario''.',
  `senha` varchar(32) NOT NULL COMMENT 'Campo senha: cadastro da senha na tabela ''usuario''.',
  `nome` varchar(60) NOT NULL COMMENT 'Campo nome: cadastro do nome na tabela ''usuario''.',
  `dt_nasc` date NOT NULL COMMENT 'Campo dt_nasc: cadastro da data de nascimento na tabela ''usuario''.',
  `cpf` varchar(14) NOT NULL COMMENT 'Campo cpf: cadastro do cpf na tabela ''usuario''.',
  `rg` varchar(14) NOT NULL COMMENT 'Campo rg: cadastro do rg na tabela ''usuario''.',
  `endereco` varchar(60) NOT NULL COMMENT 'Campo endereco: cadastro do endereço na tabela ''usuario''.',
  `telefone` varchar(20) NOT NULL COMMENT 'Campo telefone: cadastro do telefone na tabela ''usuario''.',
  `perfil_idperfil` int(10) NOT NULL COMMENT 'FK: chave estrangeira com relacionamento com a tabela ''perfil''.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `email`, `senha`, `nome`, `dt_nasc`, `cpf`, `rg`, `endereco`, `telefone`, `perfil_idperfil`) VALUES
(4, 'juca@juca.com', '7b5a67574d8b1d77d2803b24946950f0', 'Josué Juca', '2003-12-19', '092.403.801-24', '00.000.000-0', 'endereco', '(61) 9 8463-4855', 1),
(7, 'funcionario@cecilia.com', '7b5a67574d8b1d77d2803b24946950f0', 'Ana Cecilia teste', '2023-06-21', '082.928.021-94', '00.000.000-0', 'endereco', '(61) 9 8262-9868', 2),
(8, 'pedro@pedro.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Pedro Henrique', '2002-10-25', '082.928.021-93', '00.000.000-0', 'ceilandia', '(61) 9 9999-9999', 3),
(11, 'teste@juca.com', '7b5a67574d8b1d77d2803b24946950f0', 'Teste ', '2023-06-27', '666.666.666-66', '66.666.666-6', 'Ceilandia', '(61) 6 6666-6666', 3),
(12, 'awp@awp.com', '7b5a67574d8b1d77d2803b24946950f0', 'Funcionario', '2023-06-13', '666.666.666-66', '66.666.666-6', 'Ceilandia', '61982629868', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `acervo`
--
ALTER TABLE `acervo`
  ADD PRIMARY KEY (`idacervo`),
  ADD KEY `fk_acervo_usuario1_idx` (`usuario_idusuario`);

--
-- Índices de tabela `devolucao`
--
ALTER TABLE `devolucao`
  ADD PRIMARY KEY (`iddevolucao`),
  ADD KEY `fk_devolucao_emprestimo1_idx` (`emprestimo_idemprestimo`);

--
-- Índices de tabela `doacao`
--
ALTER TABLE `doacao`
  ADD PRIMARY KEY (`iddoacao`),
  ADD KEY `fk_doacao_acervo1_idx` (`acervo_idacervo`),
  ADD KEY `fk_doacao_usuario1_idx` (`usuario_idusuario`);

--
-- Índices de tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`idemprestimo`),
  ADD KEY `fk_emprestimo_acervo1_idx` (`acervo_idacervo`),
  ADD KEY `fk_emprestimo_usuario1_idx` (`usuario_idusuario`);

--
-- Índices de tabela `opiniao`
--
ALTER TABLE `opiniao`
  ADD PRIMARY KEY (`idopiniao`),
  ADD KEY `fk_opiniao_acervo1_idx` (`acervo_idacervo`),
  ADD KEY `fk_opiniao_usuario1_idx` (`usuario_idusuario`);

--
-- Índices de tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idperfil`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_usuario_perfil_idx` (`perfil_idperfil`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acervo`
--
ALTER TABLE `acervo`
  MODIFY `idacervo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK: chave primaria na tabela ''acervo''.', AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `devolucao`
--
ALTER TABLE `devolucao`
  MODIFY `iddevolucao` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK:chave primaria da tabela ''devolucao''.';

--
-- AUTO_INCREMENT de tabela `doacao`
--
ALTER TABLE `doacao`
  MODIFY `iddoacao` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK:chave primaria na tabela ''doacao''.';

--
-- AUTO_INCREMENT de tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `idemprestimo` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK: chave primaria da tabela ''emprestimo''.', AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `opiniao`
--
ALTER TABLE `opiniao`
  MODIFY `idopiniao` int(11) NOT NULL AUTO_INCREMENT COMMENT 'PK:chave primaria da tabela ''opiniao''.';

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idperfil` int(10) NOT NULL AUTO_INCREMENT COMMENT 'PK: chave primaria da tabela ''perfil''.', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(10) NOT NULL AUTO_INCREMENT COMMENT 'PK:chave primaria na tabela ''usuario''.', AUTO_INCREMENT=13;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `acervo`
--
ALTER TABLE `acervo`
  ADD CONSTRAINT `fk_acervo_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `devolucao`
--
ALTER TABLE `devolucao`
  ADD CONSTRAINT `fk_devolucao_emprestimo1` FOREIGN KEY (`emprestimo_idemprestimo`) REFERENCES `emprestimo` (`idemprestimo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `doacao`
--
ALTER TABLE `doacao`
  ADD CONSTRAINT `fk_doacao_acervo1` FOREIGN KEY (`acervo_idacervo`) REFERENCES `acervo` (`idacervo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_doacao_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD CONSTRAINT `fk_emprestimo_acervo1` FOREIGN KEY (`acervo_idacervo`) REFERENCES `acervo` (`idacervo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_emprestimo_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `opiniao`
--
ALTER TABLE `opiniao`
  ADD CONSTRAINT `fk_opiniao_acervo1` FOREIGN KEY (`acervo_idacervo`) REFERENCES `acervo` (`idacervo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_opiniao_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_perfil` FOREIGN KEY (`perfil_idperfil`) REFERENCES `perfil` (`idperfil`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
