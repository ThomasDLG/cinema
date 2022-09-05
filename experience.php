<?php
include("inc/config.php");
$title = 'Expérience';
include("inc/header.php");
?>

<section class="section-64" id="isense">
    <div class="container">
        <img src="" alt="" class="relative">
        <h4 class="text-light absolute">Vivez l'expérience i-Sense</h4>
        <h4 class="text-dark">Un son et des images exceptionnelles</h4>
    </div>
</section>

<section id="isense" class="section-64 secondary">
      <div class="container-content">
        <h2 class="text-light my-2 pl-2">Nos salles i-Sense</h2>
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
      <a href="films.php" class="btn btn-icon-left"><i class="fa-solid fa-plus"></i>Voir les films</a>
    </div>
    </div>
</section>

<section class="section-64" id="luxediner">
    <div class="container">
        <img src="" alt="" class="relative">
        <h4 class="text-light absolute">Savourez votre film avec Luxe Diner</h4>
    </div>
</section>


<section id="luxediner" class="section-64">
        <div class="container-content">
        <h2 class="text-dark my-2 pl-2">Nos plâts</h2>
            <div class="d-flex row wrap justify-between wrapper">
            <?php
            foreach ($dataCs as $valueCs) {
              $movieCount = 0;
                if (is_array($valueCs) || is_object($valueCs)){
                    foreach ($valueCs as $filmsCs) {
                      if ($movieCount < 8 && !empty($filmsCs->poster_path)) {
                        echo '<div class="my-2 mx-2 relative card-xs ">';
                            echo '<h4 class="text-light absolute pb-2">' . $filmsCs->release_date .'</h4>';
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



<?php
include("inc/footer.php")
?>