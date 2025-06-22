<?php
$base = "https://{$_SERVER{'SERVER_NAME'}}{$_SERVER{'SCRIPT_NAME'}}"


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/all.min.css"> <!-- Font Awesome -->
    
    <link href="imagens/logo2-removebg-preview.png" rel="shortcut icon">

    <title> Dr.Aline Gonçalves </title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
     <!-- chatty chat/ whats -->
     <script id="pixel-chaty" async="true" src="https://cdn.chaty.app/pixel.js?id=rPhJlkBB"></script>
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"><!-- animação git -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
      
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid col-12">
              <a class="navbar-brand" href="home">
                <img src="imagens/logocomtexto3.png" alt="Logo" class="w-100">
              </a>
              <button class="navbar-toggler" type="botao button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar"><i class="fa-solid fa-bars"></i></span>
              </button>
              <div class= listas>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">
                      <i class="fa-solid fa-house"></i> Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="sobre">
                      <i class="fa-solid fa-user-doctor"></i> Sobre</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="localizacao">
                      <i class="fa-solid fa-location-dot"></i> Onde?</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="agendar-horario">
                      <i class="fa-solid fa-calendar-days"></i> Agendar horário</a>
                  </li>
                </div>
            </div>
          </div>
          </nav>
      
          
    </header>
    <main class="container">
    <?php

    //inserir o array 
    include "array.php";

    $pagina = $_GET["param"] ?? "home";

    // $pagina = página que quer abrir

    $pagina = "pages/{$pagina}.php";

    //ver se a pagina existe

    if(file_exists($pagina)) {
      include $pagina;
    } else {
      include "pages/erro.php";
    }
      ?>
      <!--<div class="whats">
          <a href= "https://wa.link/cn062u">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
      </div> -->
    </main>
    <footer>
        </p>
        <div class="redes-sociais">
        <a href="https://www.instagram.com/alinegd28?igsh=MTduOHV2cG1qNXNocg==">
          <i class="fa-brands fa-instagram">
          </i>
        </a>
        <a href="https://www.facebook.com/share/16SygXo4Q2/">
          <i class="fa-brands fa-facebook"></i>
        </a>
      </div>
  <div class="desenvolvedor">
  <p class="user-select-none">
  © Todos os direitos reservados
  </p>
  <br>
      <p class="user-select-none"> Desenvolvido por:
      <a href="https://www.linkedin.com/in/beatriz-gomes-santana-0197b5289?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
        Beatriz Gomes Santana
      </a>
    </p>
  </div>
     
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <!-- const do popOver do bootstrap -->
<script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
</script>

  <!-- script animaçao -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<!-- script lightbox -->
 <script src="https://cdn.jsdelivr.net/npm/fslightbox/index.js" type="module"></script>
 


</body>
</html>