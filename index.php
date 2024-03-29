<?php
include("inc/config.php");
$title = 'Accueil';
include("inc/header.php");
?>
    <section id="mytoile">
      <div class="container-mytoile">
        <div class="mytoile">
         <div class="mytoile-img"><a href="" class="btn">S'abonner</a></div>
        </div>
      </div>
    </section>

    <!-- MOVIES LIST -->

    <section id="movie" class="section-64">
      <div class="container-content">
        <h2 class="text-dark my-2 pl-2">Films à l'affiche</h2>
          <?php
              echo '<div class="select-container">';
                echo '<div class="select">';
                  echo '<div class="select__trigger"><span>';
                  if(empty($_GET["genre"])) {
                      echo "Filtrer par genres";
                  } else {
                    echo $_GET["genre"];
                  }
                  echo'</span>';
                  echo '</div>';
                echo '</div>';
                  echo '<div class="option-container">';
                  foreach ($genres as $key => $value) {
                    echo '<a href="index.php?genre=' . $key . '"><div class="option-select">';
                      echo '<span class="option selected" data-value="' . $value["nom"] . '">' . $value["nom"] . '</span>';
                    echo '</div></a>';
            }
                  echo '</div>';
                echo '</div>';
          ?>
            <div class="d-flex row wrap justify-between wrapper">
            <?php
            foreach ($data as $value) {
              $movieCount = 0;
                if (is_array($value) || is_object($value)){
                    foreach ($value as $films) {
                      $movieCount++;
                      if ($movieCount < 9) {
                        echo '<div class="card-xs my-2 mx-2 relative">';
                            echo '<a href="filmsinfo.php?name=' . $films->original_title . '&id=' . $films->id . '">';
                                echo '<img src="' . 'https://image.tmdb.org/t/p/w500' . $films->poster_path . '" alt="' . $films->original_title . '">';
                            echo '</a>';
                        echo '</div>';
                      }
                    }
                }
            }
            ?>
            </div>
            <div class="mt-3 ml-2  mb-3">
              <a href="films.php" class="btn btn-icon-left"><i class="fa-solid fa-plus"></i>Voir tous les films</a>
            </div>
        </div>

    </section>

    <!-- COMMING SOON -->

    <section id="soonMovie" class="section-64">
        <div class="container-content">
        <h2 class="text-dark my-2 pl-2">Prochainement</h2>
            <div class="d-flex row wrap justify-between wrapper">
            <?php
            foreach ($dataCs as $valueCs) {
              $movieCount = 0;
                if (is_array($valueCs) || is_object($valueCs)){
                    foreach ($valueCs as $filmsCs) {
                      if ($movieCount < 8 && !empty($filmsCs->poster_path)) {
                        echo '<div class="my-2 mx-2 relative card-xs ">';
                            echo '<h4 class="text-light absolute pb-2">' . mb_substr($filmsCs->release_date,8,2) . ' ' . $mois[mb_substr($filmsCs->release_date,5,2)] . '</h4>';
                            echo '<a href="filmsinfo.php?name=' . $films->original_title . '&id=' . $films->id . '">';
                                echo '<img src="' . 'https://image.tmdb.org/t/p/w500' . $filmsCs->poster_path . '" alt="' . $filmsCs->original_title . '">';
                            echo '</a>';
                        echo '</div>';
                        $movieCount++;
                      }
                    }
                }
            }
            ?>
            </div>
        </div>
    </section>

    <!-- EVENTS -->

    <section id="events" class="section-64 secondary">
      <div class="container-content">
        <h2 class="text-light my-2 pl-2">Événements</h2>
        <div class="d-flex row wrap justify-between wrapper">
            <?php
              foreach ($events as $key => $value) {
                echo '<div class="card-lg mx-2 my-2">';
                echo '<a href="">';
                    echo '<img src="' . $value["image"] . '" alt="' . $value["title"] . '">';
                echo '</a>';
            echo '</div>';
              }
            ?>
        </div>
        <div class="mt-3 ml-2 mb-3">
          <a href="" class="btn btn-icon-left"><i class="fa-solid fa-plus"></i>Voir tous les événements</a>
        </div>
      </div>
    </section>

    <!-- LUXE DINER -->

    <section id="diner" class="section-64">
      <div class="container">
        <h2 class="text-dark my-2 pl-2">Luxe Diner</h2>
        <div class="luxediner d-flex row wrap justify-between">
          <!-- CARD 1 -->
          <div class="card-horizontal relative my-2 mx-2">
            <h4 class="text-light absolute pb-2">Menu luxe</h4>
            <a href="">
              <img src="src/experience/burger2.jpg" alt="">
            </a>
          </div>
          <div class="card-md relative my-2 mx-2">
            <h4 class="text-light absolute pb-2">Menu luxe</h4>
            <a href="">
              <img src="src/experience/burger.jpg" alt="">
            </a>
          </div>
        <!-- CARD 2 -->
        <div class="card-md relative my-2 mx-2">
            <h4 class="text-light absolute pb-2">Bar à cocktails</h4>
            <a href="">
              <img src="src/experience/cocktail.jpg" alt="">
            </a>
          </div>
        <!-- CARD 3 -->
          <div class="card-md relative my-2 mx-2">
            <h4 class="text-light absolute pb-2">Snack</h4>
            <a href="">
              <img src="src/experience/fries.jpg" alt="">
            </a>
          </div>
        </div>

      </div>
    </section>

    <!-- I-SENSE -->
    <section id="isense" class="section-64">
      <div class="container">
        <div class="container-isense mx-2 d-flex row wrap">

          <!-- CONTENT-1 -->
          <div class="isense-content my-2 w-100 d-flex row wrap justify-between">
            <div class="isense-img w-50 pr-2">
              <img class="w-100" src="src/isense.jpg" alt="">
            </div>
            <div class="isense-txt w-50 pl-2">
              <h2 class="text-dark mb-2">Écran sensationnel</h2>
              <p>Les écrans I-Sense vont du sol au plafond et mur à mur pour créer l’impact le plus visuel.
Vous obtenez également une vue parfaite de l’écran, peu importe où vous vous asseyez dans le cinéma.
</p>
            </div>
          </div>

          <!-- CONTENT-2 -->
          <div class="isense-content my-2 w-100 d-flex row-reverse wrap justify-between">
            <div class="isense-img w-50 pl-2">
              <img class="w-100" src="src/dolby.jpg" alt="">
            </div>
            <div class="isense-txt w-50 pr-2">
              <h2 class="text-dark mb-2">Son sensationnel</h2>
              <p>Les cinémas I-Sense disposent également de haut-parleurs Dolby® Atmos™ de pointe.
Un son puissant et palpitant vous enveloppe dans toutes les directions pour rehausser le réalisme de chaque scène.
</p>
            </div>
          </div>

          <!-- CONTENT-3 -->
          <div class="isense-content my-2 w-100 d-flex row wrap justify-between">
            <div class="isense-img w-50 pr-2">
              <img class="w-100" src="src/4k.jpg" alt="">
            </div>
            <div class="isense-txt w-50 pl-2">
              <h2 class="text-dark mb-2">Images sensationnelles
              </h2>
              <p>Nos projecteurs 4K à la pointe de la technologie offrent une image encore plus lumineuse, plus claire et plus colorée.
Avec jusqu’à 9 millions de pixels façonnant chaque scène, votre film prend vie avec des détails d’une extrême netteté.
</p>
            </div>
          </div>

          <div class="mt-3 mb-3">
              <a href="films.php" class="btn btn-icon-left"><i class="fa-solid fa-plus"></i>Voir tous les films</a>
          </div>

        </div>
      </div>
    </section>

    <!-- FOOTER -->

<?php
  include("inc/footer.php");
?>

