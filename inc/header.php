<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="cinema savourez votre film chez l'étoile">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="scss/main.css" />
    <link rel="stylesheet" href="css/mediaqueries.css">
    <link rel="stylesheet" href="css/style.css" />
    <title><?php echo $title; ?></title>
  </head>
  <body>

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

    <header id="navbar">
      <div class="container">
        <div class="navbar">
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
              <ul>
                <li><a href="index.php"><img src="src/icons/home.svg" alt="">Accueil</a></li>
                <li><a href="#"><img src="src/icons/films.svg" alt="">Films</a></li>
                <li><a href="#"><img src="src/icons/bookmark.svg" alt="">My-Toile</a></li>
                <li><a href="#"><img src="src/icons/about.svg" alt="">Plus</a></li>
                <li><a href="#" id="searching"><img src="src/icons/search.svg" alt="">Recherche</a></li>
              </ul>
            </nav>
          </div>
          <div class="login-navbar">
            <a href="#">Connexion<img src="src/icons/login.svg" alt=""></a>
          </div>
        </div>
      </div>
    </header>