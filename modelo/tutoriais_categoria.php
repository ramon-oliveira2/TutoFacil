<?php
  include 'conexao.php';  
?>
  
<!DOCTYPE html>
	<html lang="pt-br">
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TutoFacil - Tutoriais</title>
    <link rel="stylesheet" type="text/css" href="CSS/style-home.css">
    <link rel="stylesheet" type="text/css" href="CSS/normalize.css">
    <link rel="stylesheet" type="text/css" href="CSS/style-navbar.css">
    <link rel="stylesheet" type="text/css" href="CSS/style-footer.css">
    <link rel="stylesheet" type="text/css" href="CSS/style-lista-tutoriais.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	</head> 
	
  <body>
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
    
    <section>
      <div class="list-div">
        <div class="tuto-div">
          <span id="h1-div">
            <h2>Lista de Tutoriais</h2>
          </span>
          <div>
  			   <?php
              if(isset($_GET['id'])){
                $id_tema = $_GET['id'];
                $query = "SELECT * FROM temas WHERE id_tema LIKE '$id_tema'";
              }else{
                header('Location: index.php');
              }	
              $resultado = mysqli_query($conexao, $query);
              while ($array = mysqli_fetch_array($resultado)) {
                $id = $array['id_tema'];
                $titulo_tema = $array['titulo'];
                $texto = $array['texto'];

  					?>
            <h1><a href="show-tuto.php?id=<?php echo $id ?>"><?php echo $titulo_tema?></a></h1>
            <div class="descrição">
              <?php echo $texto ?>
            </div>
           <?php }?>
          </div>
        </div>
      </div>
    </section>
                 
    <footer>
      <div class="footer-div">
        <h1>Contato dos desenvolvedores:</h1>
        <div class="box-div">
          <div class="box">
            <span><h1>Manel das Quebradas</h1></span>
            <span><p>Email: manuelportugues@gmail.com</p></span><br>
            <span><p>Função: Desenvolvedor da Periferia</p></span><br>
            <span><p>Whatzapp: 606060senãodercerto60denovo</p></span>
       		</div>
          <div class="box">
            <span><h1>Marcus Vinícius</h1></span>
            <span><p>Email: vinnyandrade24@gmail.com</p></span><br>
            <span><p>Função: Desenvolvedor FullStack</p></span><br>
            <span><p>Whatzapp: +85985432811</p></span>
          </div>
          <div class="box">
            <span><h1>José Neilson</h1></span>
            <span><p>Email: neidemel@gmail.com</p></span><br>
            <span><p>Função: Desenvolvedor Back</p></span><br>
            <span><p>Whatzapp: +85940028922</p></span>
          </div>
        </div>
      </div>
    </footer>
              
    <script>
        const menuBtn = document.querySelector(".menu-icon span");
        const searchBtn = document.querySelector(".search-icon");
        const cancelBtn = document.querySelector(".cancel-icon");
        const items = document.querySelector(".nav-items");
        const form = document.querySelector("form");

        menuBtn.onclick = ()=>{
            items.classList.add("active");
            menuBtn.classList.add("hide");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
        }

        cancelBtn.onclick = ()=>{
            items.classList.remove("active");
            menuBtn.classList.remove("hide");
            searchBtn.classList.remove("hide");
            cancelBtn.classList.remove("show");
            form.classList.remove("active");
            cancelBtn.style.color = "#0375B4";
        }

        searchBtn.onclick = ()=>{
            form.classList.add("active");
            searchBtn.classList.add("hide");
            cancelBtn.classList.add("show");
        }
    </script>

  </body>
</html>