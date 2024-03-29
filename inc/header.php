<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="cinema savourez votre film">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="scss/main.css" />
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="css/style.css" />
    <title><?php echo $title; ?></title>
  </head>
  <body class="<?php if(!empty($classBody)){echo $classBody;} ?>">

  <!-- SEARCHING POPUP -->

  <div class="searching-popup">
      <a href="#" class="close-searching-popup"><img src="src/icons/cross-white.svg" alt="close"></a>
      <div class="content-search">
        <form id="getInputValue" class="flexForm">
          <input type="text" class="searching-popup-input" placeholder="Rechercher" name="searchMovie" id="searchMovie">
          <button type="submit" class="submit-searching"><img src="src/icons/search-white.svg" alt="search icon"></button>
        </form>
          <div id="searchResults" class="posterResults">

          </div>
      </div>
  </div>

  <!-- NAVBAR -->

    <header id="navbar" class="relative">
      <div class="container">
        <div class="navbar py-1">
          <div class="logo-navbar">
            <h1><a href="index.php"><img src="src/logo.svg" alt="logo l'étoile"></a></h1>
          </div>
          <div class="searchbar-navbar">
            <form action="search.php" method="POST">
              <input type="text" class="searchbar" name="research" placeholder="Recherche">
            </form>
          </div>
          <div class="naviguation-navbar">
            <nav>
              <ul class="list">
                <li class="d-inline mr-1"><a class="text-dark bold" href="index.php"><img src="src/icons/home.svg" alt="">Accueil</a></li>
                <li class="d-inline mr-1"><a class="text-dark bold" href="films.php"><img src="src/icons/films.svg" alt="">Films</a></li>
                <li class="d-inline mr-1"><a class="text-dark bold" href="mytoile.php"><img src="src/icons/bookmark.svg" alt="">My-Toile</a></li>
                <li class="d-inline mr-1"><a class="plusbtn text-dark bold" href="#"><img src="src/icons/about.svg" alt="">Plus</a></li>
                <li class="d-inline mr-1"><a class="text-dark bold" href="#" id="searching"><img src="src/icons/search.svg" alt="">Recherche</a></li>
              </ul>
            </nav>
          </div>
          <div class="login-navbar">
            <a class="text-dark bold" href="#">Connexion<img class="ml-1" src="src/icons/login.svg" alt=""></a>
          </div>
        </div>
      </div>
    </header>

      <!-- PLUS MENU -->

  <div id="plus" class="absolute w-100">
    <div class="container-fluid white py-3">
      <div class="container white d-flex row wrap justify-between">
        <!-- ITEM -->
        <div class="plus-item">
          <a href="experience.php"><h4 class="text-dark text-center">Expérience</h4></a>
          <ul class="list mt-1">
            <li class="list-item text-center py-1"><a class="link" href="experience.php">Séance i-sense</a></li>
            <li class="list-item text-center py-1"><a class="link" href="experience.php">Luxe Diner</a></li>
            <li class="list-item text-center py-1"><a class="link" href="experience.php">L'étoile</a></li>
          </ul>
        </div>
        <!-- ITEM -->
        <div class="plus-item">
          <a href="about.php"><h4 class="text-dark text-center">À propos</h4></a>
          <ul class="list mt-1">
            <li class="list-item text-center py-1"><a class="link" href="films.php">Films & Evénements</a></li>
            <li class="list-item text-center py-1"><a class="link" href="#">Luxe Diner</a></li>
            <li class="list-item text-center py-1"><a class="link" href="#">Accessibilité</a></li>
          </ul>
        </div>
        <!-- ITEM -->
        <div class="plus-item">
          <a href="tarifs.php"><h4 class="text-dark text-center">Tarifs</h4></a>
        </div>
        <!-- ITEM -->
        <div class="plus-item">
          <a href="contact.php"><h4 class="text-dark text-center">Contact</h4></a>
        </div>
      </div>
    </div>
  </div>