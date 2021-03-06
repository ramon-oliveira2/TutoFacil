<?php
    include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TutoFacil - Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/style-home.css">
    <link rel="stylesheet" type="text/css" href="CSS/normalize.css">
    <link rel="stylesheet" type="text/css" href="CSS/style-navbar.css">
    <link rel="shortcut icon" href="CSS/logo.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head> 
<body>
    <div class="arranjo_tecnico"></div>
    <nav>
        <div class="menu-icon"><span class="fas fa-bars"></span></div>
        <div class="logo"><a href="index.php">TutoFacil</a></div>
        <ul class="nav-items">
            <a href="index.php"><li>Início</li></a>
            <a href="tutoriais.php"><li>Artigos</li></a>
            <a href="sobre.php"><li>Sobre</li></a>
        </ul>
        <div class="search-icon"><span class="fas fa-search"></span></div>
        <div class="cancel-icon"><span class="fas fa-times"></span></div>
        <form action="resultado.php" method="get">
            <input type="search" name="txtpesquisar" class="search-data" placeholder="Pesquisar" required>
            <button type="submit" class="fas fa-search" name="pesquisar"></button>
            <?php
              if (isset($_GET['pesquisar'])) {
                $titulo = $_GET['txtpesquisar'] . '%';
                $query = "SELECT * FROM temas WHERE titulo LIKE '$titulo'";
              }else{
                $query = "SELECT * FROM temas ORDER BY titulo ASC";
              }
              $resultado = mysqli_query($conexao, $query);
              while($array = mysqli_fetch_array($resultado)){
                $titulo = $array['titulo'];
                $texto = $array['texto'];
             
                           
            ?>
            <div class="resultados">
                <h1><?php echo $titulo?></h1>
                <div class="preview"><?php echo $texto?></div>
            </div>

            <?php } ?>
        </form>
    </nav>
    <script src="JS/navbar.js"></script>
    
    <!-- Término do menu de navegação  -->


</body>
</html>