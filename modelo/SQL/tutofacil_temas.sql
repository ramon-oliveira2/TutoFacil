-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: tutofacil
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `temas`
--

DROP TABLE IF EXISTS `temas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `temas` (
  `id_tema` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `texto` varchar(6000) DEFAULT NULL,
  PRIMARY KEY (`id_tema`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temas`
--

LOCK TABLES `temas` WRITE;
/*!40000 ALTER TABLE `temas` DISABLE KEYS */;
INSERT INTO `temas` VALUES (1,'O que é, para que serve e como tirar \"print\"?','<p>Olá, hoje eu irei explicar para você tudo o que você precisa saber sobre a função \" <strong> <b> Print </b> </strong> <strong> <b> Screen </b> </strong> \" no seu computador e a mesma em sua versão nos celulares.</p>\n<p>Print Screen é um tecla comum nos teclados, tanto os de notebook (embutidos) quanto os separados para desktop (computador pessoal), ela está normalmente localizada no canto superior direito e pode estar escrito de forma abreviada, como “ <strong> <b> PrtScr </b> </strong> ”. </p>\n<p><img src=\"CSS/imagens/imagem1.png\" alt=\"\" /></p>\n<p>O atalho print screen tem a finalidade de realizar <strong> <b> capturas de tela</b></strong><strong> </strong>do exato momento em seu computador, por exemplo, você está fazendo uma pesquisa no Google (site de pesquisa global) e você quer compartilhar os detalhes para alguém, mas você não quer digitar ou copiar tudo o que há no site, então você utiliza o print screen, e ele captura a sua tela, como uma foto e copia essa imagem para a <strong> <b> Área </b></strong><strong><b>de Transferência </b> </strong> , um recurso utilizado por um sistema operacional para o armazenamento de pequenas quantidades de dados para transferência entre documentos ou aplicativos, como copiar, colar ou recortar.</p>\n<p>Vamos para o que mais interessa, como tirar o print screen?</p>\n<p><strong> <b> Passo 1: Computador ou celular? </b> </strong></p>\n<ul>\n<li>Ambos aparelhos eletrônicos, PC e o smartphone tem a mesma função de captura de tela, porém elas são executadas de formas diferentes e em resoluções diferentes. Tenha isso em mente.</li>\n</ul>\n<p><strong> <b> Passo 2: Qual o sistema operacional do seu eletrônico? </b> </strong></p>\n<ul>\n<li>A forma de execução do print screen também muda dependendo do sistema, por exemplo, no MAC/OS não existe um botão específico no teclado que o execute, você tem que apertar as teclas shift + maçã + 3 e a captura vai ser salva diretamente na área de trabalho. Já nos smartphones, existe um botão que pode ser físico ou virtual, e apenas esse fato muda a forma de tirar o print.</li>\n</ul>\n<p><strong> <b> Passo 3: Execute a função de captura de tela. </b> </strong> (Utilizarei como exemplo a fórmula dos sistemas Windows e citarei as duas formas mais comuns de tirar print no celular).</p>\n<p><img src=\"CSS/imagens/imagem2.png\" alt=\"\" /></p>\n<ul>\n<li>Windows: você irá apertar a tecla <strong> <b> “Print </b> </strong> <strong> <b> screen” </b> </strong>  ou  <strong> <b> \"PrtScr\" </b> </strong> no <strong> <b>   </b> </strong> teclado, e a imagem será salva na área de <strong> <b>   </b> </strong> transferência.</li>\n<li>Smartphone: existem duas formas.</li>\n</ul>\n<ol>\n<ol>\n<li>Apertar ao mesmo tempo as teclas: POWER + HOME.</li>\n<li>Apertar ao mesmo tempo as teclas POWER+ Diminuir volume.</li>\n</ol>\n</ol>\n<p><img src=\"CSS/imagens/imagem3.png\" alt=\"\" /></p>\n<p>Botão HOME = Se localiza na parte inferior do smartphone e ele serve para levar você até o ínicio do celular, onde tem os atalhos para os aplicativos. Em modelos mais novos, esse botão deixou de ser físico e passou a funcionar através do touch screen.</p>\n<p>Botão POWER = Se localiza nas laterais do smartphone e serve para ligar e desligar a tela do celular.</p>\n<p><strong> <b> Passo 4: Encontre a imagem. </b> </strong></p>\n<ul>\n<li>Windows: Quando a imagem estiver salva na área de transferência, abre algum programa de edição como o Paint e aperta Ctrl + V, assim você vai colar a captura no programa e assim você pode salvar ele como uma imagem no seu PC.</li>\n<li>Smartphone: Depois que você apertar os botões ao mesmo tempo, sua tela vai piscar, indicando que o print foi tirado. Assim, se você for em sua galeria de fotos, no álbum “Captura de tela”, verá todos os seus prints salvos.</li>\n</ul>');
/*!40000 ALTER TABLE `temas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-23 14:27:45
