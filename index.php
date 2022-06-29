<?php
include("inc/config.php");
$title = 'Acceuil';
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
        <h2 class="my-2 text-dark">Films à l'affiche</h2>
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
                        echo '<div class="my-2 mx-2 relative my-2 mx-2 relative card">';
                            echo '<a href="">';
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
              <a href="" class="btn btn-icon-left"><i class="fa-solid fa-plus"></i>Voir tous les films</a>
            </div>
        </div>

    </section>

    <!-- COMMING SOON -->

    <section id="soonMovie" class="section-64">
        <div class="container-content">
        <h2 class="my-2 text-dark">Prochainement</h2>
            <div class="d-flex row wrap justify-between wrapper">
            <?php
            foreach ($dataCs as $valueCs) {
              $movieCount = 0;
                if (is_array($valueCs) || is_object($valueCs)){
                    foreach ($valueCs as $filmsCs) {
                      if ($movieCount < 8 && !empty($filmsCs->poster_path)) {
                        echo '<div class="my-2 mx-2 relative card ">';
                            echo '<h4>' . $filmsCs->release_date .'</h4>';
                            echo '<a href="">';
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
        <h2 class="my-2 text-light">Événements</h2>
        <div class="d-flex row wrap justify-between wrapper">
            <?php
              foreach ($events as $key => $value) {
                echo '<div class="event-card">';
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
        <h2 class="my-2 text-dark">Luxe Diner</h2>
        <div class="luxediner">

        </div>
      </div>
    </section>

    <!-- I-SENSE -->
    <section id="isense" class="section-64">
      <div class="container">
        <div class="container-isense mx-2 d-flex row wrap">

          <!-- CONTENT-1 -->
          <div class="isense-content my-2 w-100 d-flex row justify-between">
            <div class="isense-img pr-2">
              <img src="src/img1.jpg" alt="">
            </div>
            <div class="isense-txt pl-2">
              <h2 class="text-dark mb-2">Title Sample</h2>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
          </div>

          <!-- CONTENT-2 -->
          <div class="isense-content my-2 w-100 d-flex row-reverse justify-between">
            <div class="isense-img pl-2">
              <img src="src/img1.jpg" alt="">
            </div>
            <div class="isense-txt pr-2">
              <h2 class="text-dark mb-2">Title Sample</h2>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
          </div>

          <!-- CONTENT-3 -->
          <div class="isense-content my-2 w-100 d-flex row justify-between">
            <div class="isense-img pr-2">
              <img src="src/img1.jpg" alt="">
            </div>
            <div class="isense-txt pl-2">
              <h2 class="text-dark mb-2">Title Sample</h2>
              <p>Lorem ipsum dolor sit amet.</p>
            </div>
          </div>

          <div class="mt-3 mb-3">
              <a href="" class="btn btn-icon-left"><i class="fa-solid fa-plus"></i>Voir tous les films</a>
          </div>

        </div>
      </div>
    </section>

    <!-- FOOTER -->

<?php
  include("inc/footer.php");
?>

