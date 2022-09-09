<?php
include("inc/config.php");
$title = 'Expérience';
include("inc/header.php");
?>

<section class="section-64" id="isense">
    <div class="container relative">
        <img src="src/experience/isense.webp" alt="" class="relative w-100">
        <h2 class="text-light absolute mx-4 my-4">Vivez l'expérience i-Sense</h2>
        <h2 class="text-dark">Un son et des images exceptionnelles</h2>
    </div>
</section>

<section id="isense" class="section-64 secondary">
      <div class="container-content">
        <h2 class="text-light my-2 pl-2">Nos salles i-Sense</h2>
        <div class="d-flex row wrap justify-between wrapper">
            <?php
              foreach ($salle as $key => $value) {
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
    <div class="container relative">
        <img src="src/experience/luxediner.jpg" alt="luxediner" class="w-100">
        <h2 class="text-light absolute mx-4 my-4">Savourez votre film avec Luxe Diner</h2>
    </div>
</section>


<section id="luxediner" class="section-64">
        <div class="container-content">
        <h2 class="text-dark my-2 pl-2">Nos plâts</h2>
            <div class="d-flex row wrap justify-between wrapper">
            <?php
            foreach ($luxedinerproducts as $key => $value) {
              echo '<div class="card-lg mx-2 my-2">';
                echo '<a href="">';
                    echo '<img src="' . $value["image"] . '" alt="' . $value["title"] . '">';
                echo '</a>';
              echo '</div>';
            }
            ?>
        </div>
    </div>
</section>



<?php
include("inc/footer.php")
?>