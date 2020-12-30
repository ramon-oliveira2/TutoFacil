<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TutoFacil - Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/style-home.css" />
    <link rel="stylesheet" type="text/css" href="CSS/normalize.css" />
    <link rel="stylesheet" type="text/css" href="CSS/style-navbar.css" />
    <link rel="stylesheet" type="text/css" href="CSS/footer.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <!-- Inicio do menu de navegação  -->
    <div class="arranjo_tecnico"></div>
    <nav>
        <div class="menu-icon"><span class="fas fa-bars"></span></div>
        <div class="logo">TutoFacil</div>
        <ul class="nav-items">
            <li><a href="index.php">Início</a></li>
            <li><a href="tutoriais.php">Artigos</a></li>
            <li><a href="sobre.php">Sobre</a></li>
        </ul>
        <div class="search-icon"><span class="fas fa-search"></span></div>
        <div class="cancel-icon"><span class="fas fa-times"></span></div>
        <form action="tutoriais_pesquisa.php" method="get">
            <input type="search" name="txtpesquisar" class="search-data" placeholder="Pesquisar" required />
            <button type="submit" class="fas fa-search" name="pesquisar"></button>
        </form>
    </nav>
    <script src="JS/navbar.js"></script>

    <!-- Término do menu de navegação  -->

    <!-- Início do header -->

    <div class="header" id="home">
        <div class="header__container">
            <h1 class="header__heading">A vida é um <span>Aprendizado</span></h1>
            <p class="header__description">Sua dúvida, nossa solução!</p>
            <button class="main__btn" id="#down"><span id="#downyes">Leia Agora</span></button>
        </div>
    </div>
    <script src="JS/scroll.js"></script>

    <!-- Fim do header -->

    <!-- Seção Sobre -->

    <div class="main" id="about">
        <div class="main__container">
            <div class="main__img--container">
                <div class="main__img--card"><i class="fas fa-users"></i></div>
            </div>
            <div class="main__content">
                <h1><span>Não sabe como fazer um email?</span></h1>
                <h2>No TutoFacil você encontra a resposta para suas dúvidas.</h2><br>
                <h2>Explore nossos artigos e tutorias e aprenda mais sobre o mundo da informática!</h2>
            </div>
        </div>
    </div>

    <!-- Fim do Sobre -->

    <!-- Seção Artigos Em Destaque  -->

    <article class="article" id="article">
        <h1>Artigos Em Destaque</h1>
        <div class="article__wrapper">
            <?php
            require_once('conexao.php');

            $query = "SELECT * FROM temas WHERE id_tema <= 4";
            $resultado = mysqli_query($conexao, $query);
            while ($array = mysqli_fetch_array($resultado)) {
                $id = $array['id_tema'];
                $titulo_tema = $array['titulo'];
            ?>
                <div class="article__card">
                    <h2><?php echo $titulo_tema ?></h2>
                    <div class="article__btn"><button><a href="modelo_artigo.php?id=<?php echo $id ?>">Ler Mais</a></button></div>
                </div>
            <?php } ?>
            <!--
            <div class="article__card">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet consectetur</p>
                <div class="article__btn"><button>Ler Mais</button></div>
            </div>
            <div class="article__card">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet consectetur</p>
                <div class="article__btn"><button>Ler Mais</button></div>
            </div>
            <div class="article__card">
                <h2>Lorem ipsum dolor sit amet</h2>
                <p>Lorem ipsum dolor sit amet consectetur</p>
                <div class="article__btn"><button>Ler Mais</button></div>
            </div>-->
        </div>
    </article>

    <!-- Fim da Seção Artigos Em Destaque  -->

    <!-- Footer -->
    <div class="espacamento"></div>

    <footer>
        <div class="main-content">
            <div class="left box">
                <h2>Considerações</h2>
                <div class="content">
                    <p>
                        Este projeto foi uma colaboração feita entre os alunos da EEEP
                        Professor César Campelo da turma de 3º ano do Curso Técnico em Informática.
                        Nos dispomos a solucionar qualquer problema que envolva o site. Qualquer dúvida entre em contato conosco.
                    </p>
                </div>
            </div>

            <div class="center box">
                <h2>Endereço</h2>
                <div class="content">
                    <div class="place">
                        <span class="fas fa-map-marker-alt"></span>
                        <span>Fortaleza, Ceará</span>
                    </div>
                    <div class="email">
                        <span class="fas fa-envelope"></span>
                        <span>tutofacil.ep@gmail.com</span>
                    </div>
                </div>
            </div>

            <div class="right box">
                <h2>Fale Conosco</h2>
                <div class="content">
                    <form action="#" method="POST">
                        <div class="email">
                            <div class="text">Email *</div>
                            <input type="email" name="email" required />
                        </div>
                        <div class="msg">
                            <div class="text">Menssagem *</div>
                            <textarea name="mensagem" cols="25" rows="7" required></textarea>
                        </div>
                        <div class="send-btn">
                            <button type="submit" name="enviar">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="bottom">
            <center>
                <span class="credit">Criado por</span> Equipe TutoFacil <span> | </span>
                <span class="far fa-copyright"></span><span> 2020</span>
            </center>
        </div>
    </footer>
</body>

</html>
<?php 
  if(isset($_POST['enviar'])){
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    $sql_mensagem = "INSERT INTO mensagens(email,mensagem) VALUES ('$email','$mensagem')";
    $mandar_mensagem = mysqli_query($conexao, $sql_mensagem);
    
    if($mandar_mensagem){
      echo "<script type='text/javascript'>alert('Mensagem enviada com sucesso!');</script>"; 
    }else{
      echo "<script type='text/javascript'>alert('Houve um erro ao enviar a mensagem!');</script>"; 
    }
  }
?>