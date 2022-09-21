<?php
include("inc/config.php");
$title = "Films à l'affiche";
include("inc/header.php");
?>

<section id="movie" class="section-64">
      <div class="container-content">
        <h2 class="text-dark my-2 pl-2">Films à l'affiche</h2>

        <div class="d-flex align-center my-2 pl-2">
            <p class="text-dark mr-2">options :</p>
            <a href="#" class="btn-tags mx-1"><i class="fa-brands fa-accessible-icon"></i></a>
            <a href="#" class="btn-tags mx-1"><i class="fa-solid fa-closed-captioning"></i></i></a>
            <a href="#" class="btn-tags mx-1"><i class="fa-solid fa-star"></i></a>
            <a href="#" class="btn-tags mx-1"><i class="fa-solid fa-vr-cardboard"></i></a>
        </div>

        <?php

$listeMoisRacc["01"] = 'Jan';
$listeMoisRacc["02"] = 'Fév';
$listeMoisRacc["03"] = 'Mar';
$listeMoisRacc["04"] = 'Avr';
$listeMoisRacc["05"] = 'Mai';
$listeMoisRacc["06"] = 'Jui';
$listeMoisRacc["07"] = 'Jui';
$listeMoisRacc["08"] = 'Aou';
$listeMoisRacc["09"] = 'Sep';
$listeMoisRacc["10"] = 'Oct';
$listeMoisRacc["11"] = 'Nov';
$listeMoisRacc["12"] = 'Déc';

$listeJourRacc[1] = 'Lun';
$listeJourRacc[2] = 'Mar';
$listeJourRacc[3] = 'Mer';
$listeJourRacc[4] = 'Jeu';
$listeJourRacc[5] = 'Ven';
$listeJourRacc[6] = 'Sam';
$listeJourRacc[7] = 'Dim';

$annee = date('Y');
$mois = date('m');
$jour = date('d');

echo '<div id="radio" class="d-flex wrap my-2 py-2">';

for ($i = 0; $i < 5 ; $i++) {
  $dateX = mktime(0, 0, 0, $mois, ($jour + $i), $annee);
  echo '<div class="radio-date">';
    echo '<label for="date" class="radio-text">';
      echo '<span class="text-center d-block w-100">' . $listeJourRacc[date('N', $dateX)] . '</span>';
      echo '<span class="text-center d-block w-100">' . date('d', $dateX) . '</span>';
      echo '<span class="text-center d-block w-100">' . $listeMoisRacc[date('m', $dateX)] . '</span>';
    echo '</label>';
      echo '<input type="radio" id="date" name="selector">';
  echo '</div>';
}

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
        </div>

    </section>

<?php
  include("inc/footer.php");
?>