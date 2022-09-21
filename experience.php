<?php
include("inc/config.php");
$title = 'Expérience';
include("inc/header.php");
?>

<section class="section-64" id="isense">
    <div class="container relative">
        <h2 class="text-dark">Vivez l'expérience i-Sense</h2>
        <p class="text-dark my-3">Offrez-vous notre meilleure expérience cinématographique dans un cinéma L’étoile I-Sense. Spécialement conçu pour donner à votre film le son et l’image de la plus haute qualité - exactement comme le réalisateur veut que vous le voyiez.   
        L’écran est maintenant encore plus grand pour donner l’impression que votre film est plus grand que nature.         Les projecteurs 4K diffusent quatre fois la résolution des écrans standard pour que l’image soit claire,        détaillée et incroyablement réelle.  
        iSense possède également deux fois plus de  haut- parleurs Dolby Atmos , situés tout autour de vous , même         au-dessus de votre tête, pour offrir un son cristallin dans toutes les directions.
        </p>
        <a href="" class="btn">En savoir plus</a>
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
        <h2 class="text-dark">Savourez votre film avec Luxe Diner</h2>
        <p class="text-dark my-3">Asseyez-vous, enfoncez-vous et tombez amoureux de nos sièges inclinables de luxe faits à la main . C’est tout simplement le moyen le plus confortable de regarder le grand écran.
        Votre siège dispose également d’une table personnelle pour que vous puissiez dîner avec style tout en vous immergeant pleinement dans le film. Chaque siège est le meilleur siège de la maison.
        Offrez-vous comme une célébrité dans notre lieu exclusif. L’étoile Luxe & Dîner vous offre un luxe de première classe, un service sur place et un choix de repas spécialement sélectionnés, parfaits pour les repas au cinéma. 

        </p>
        <a href="" class="btn">En savoir plus</a>
    </div>
</section>


<section id="luxediner" class="section-64">
        <div class="container-content">
        <h2 class="text-dark my-2 pl-2">Nos plâts</h2>
            <div class="d-flex row wrap justify-between wrapper">
            <?php
            foreach ($luxedinerproducts as $key => $value) {
              echo '<div class="card-xs mx-2 my-2">';
                echo '<a href="">';
                    echo '<img class="w-100" src="' . $value["image"] . '" alt="' . $value["title"] . '">';
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