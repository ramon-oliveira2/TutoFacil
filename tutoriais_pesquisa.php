<?php
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TutoFacil - Tutoriais </title>
  <link rel="stylesheet" type="text/css" href="CSS/style-home.css">
  <link rel="stylesheet" type="text/css" href="CSS/normalize.css">
  <link rel="stylesheet" type="text/css" href="CSS/style-navbar.css">
  <link rel="stylesheet" type="text/css" href="CSS/footer.css">
  <link rel="stylesheet" type="text/css" href="CSS/style-lista-tutoriais.css">
  <link rel="shortcut icon" href="CSS/logo.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
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
    <form action="tutoriais.php" method="get">
      <input type="search" name="txtpesquisar" class="search-data" placeholder="Pesquisar" required>
      <button type="submit" name="pesquisar" class="fas fa-search"></button>
    </form>
  </nav>
  <script src="JS/navbar.js"></script>

  <!-- Término do menu de navegação  -->

  <div class="row">
    <div class="tuto-div">
      <?php
      require_once('conexao.php');

      
      if(isset($_GET['txtpesquisar'])){
        $txtpesquisar = $_GET['txtpesquisar'];
        $query = "SELECT * FROM temas WHERE titulo LIKE '%$txtpesquisar%'";
        
      }else{
        header('Location: tutoriais.php');
      }

      $resultado = mysqli_query($conexao, $query);
      while ($array = mysqli_fetch_array($resultado)) {
        $id = $array['id_tema'];
        $titulo_tema = $array['titulo'];
        $texto = $array['texto'];
      ?>
        <div class="tuto-box" id="tuto-box">
          <div class="image">
            <img src="./CSS/imagens/background-aboutus.jpg">
          </div>
          <div class="conteudo">
            <h1><?php echo utf8_encode($titulo_tema) ?></h1>
          </div>
          <div class="text">
              <p><?php echo utf8_encode($texto) ?></p>
          </div>
          <div class="ler-mais">
              <a href="modelo_artigo.php?id=<?php echo $id ?>"> <button>Ler Mais</button></a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  </div>

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
          <form action="#">
            <div class="email">
              <div class="text">Email *</div>
              <input type="email" name="email" required />
            </div>
            <div class="msg">
              <div class="text">Menssagem *</div>
              <textarea name="menssagem" cols="25" rows="7" required></textarea>
            </div>
            <div class="send-btn">
              <button type="submit">Enviar</button>
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