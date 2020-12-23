<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TutoFacil - Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/style-home.css">
    <link rel="stylesheet" type="text/css" href="CSS/normalize.css">
    <link rel="stylesheet" type="text/css" href="CSS/style-navbar.css">
    <link rel="stylesheet" type="text/css" href="CSS/style-footer.css">
    <link rel="stylesheet" type="text/css" href="CSS/style-show-tuto.css">
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
            <li><a href="home.html">Início</a></li>
            <li><a href="tutoriais.html">Artigos</a></li>
            <li><a href="sobre.html">Sobre</a></li>
        </ul>
        <div class="search-icon"><span class="fas fa-search"></span></div>
        <div class="cancel-icon"><span class="fas fa-times"></span></div>
        <form action="#" method="get">
            <input type="search" name="pesquisar" class="search-data" placeholder="Pesquisar" required>
            <button type="submit" class="fas fa-search"></button>
        </form>
    </nav>
    <section>
        <div class="show-div">
            <div class="titulo">
                <label class="text"><h1>TITULO DO MEU TUTORIAL.</h1></label>
            </div>
            <div class="body-tuto">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <h1>aoiwemjgiawgioawrhkaiohok</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="espace"></div>
        </div>
    </section>
    <footer>
        <div class="footer-div">
            <h1>Contato dos desenvolvedores:</h1>
            <div class="box-div">
                <div class="box">
                    <span><h1>Emanuel Vasconcelos</h1></span>
                    <span><p>Email: emanuelvanobre@gmail.com</p></span><br>
                    <span><p>Função: Desenvolvedor Web</p></span><br>
                    <span><p>Whatzapp: +85940028922</p></span>
                </div>
                <div class="box">
                    <span><h1>Emanuel Vasconcelos</h1></span>
                    <span><p>Email: emanuelvanobre@gmail.com</p></span><br>
                    <span><p>Função: Desenvolvedor Web</p></span><br>
                    <span><p>Whatzapp: +85940028922</p></span>
                </div>
                <div class="box">
                    <span><h1>Emanuel Vasconcelos</h1></span>
                    <span><p>Email: emanuelvanobre@gmail.com</p></span><br>
                    <span><p>Função: Desenvolvedor Web</p></span><br>
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