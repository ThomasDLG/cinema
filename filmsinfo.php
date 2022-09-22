<?php

$fi = curl_init();
$desc = curl_init();

$movieId = $_GET['id'];
$movieName = $_GET['name'];

try {

$proxy = "127.0.0.1:3306";
$timeout = '3000';
$curl = NULL;

curl_setopt($fi, CURLOPT_VERBOSE, 0);

curl_setopt($fi, CURLOPT_URL, 'https://api.themoviedb.org/3/movie/' . $movieId . '/videos?api_key=41d556b9f4525188759fcf95d4685c62&language=us-US');
curl_setopt($fi, CURLOPT_HEADER, false);
curl_setopt($fi, CURLOPT_RETURNTRANSFER, true);
curl_setopt($fi, CURLOPT_CONNECTTIMEOUT, 15);
curl_setopt($fi, CURLOPT_TIMEOUT, 15);
curl_setopt($fi, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($fi, CURLOPT_MAXREDIRS, 3);
curl_setopt($fi, CURLOPT_SSL_VERIFYPEER, false);

curl_setopt($desc, CURLOPT_URL, 'https://api.themoviedb.org/3/movie/' . $movieId . '?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR');
curl_setopt($desc, CURLOPT_HEADER, false);
curl_setopt($desc, CURLOPT_RETURNTRANSFER, true);
curl_setopt($desc, CURLOPT_CONNECTTIMEOUT, 15);
curl_setopt($desc, CURLOPT_TIMEOUT, 15);
curl_setopt($desc, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($desc, CURLOPT_MAXREDIRS, 3);
curl_setopt($desc, CURLOPT_SSL_VERIFYPEER, false);

$filmsInfo = curl_exec($fi);
$filmsDesc = curl_exec($desc);

if (curl_errno($fi)) {
  echo curl_error($fi);
  die();
}
if (curl_errno($desc)) {
    echo curl_error($desc);
    die();
  }

$http_codeFi = curl_getinfo($fi, CURLINFO_HTTP_CODE);
if($http_codeFi == intval(200)){
    // var_dump(json_decode($response));
}
else{
    echo "Ressource introuvable : " . $http_codeFi;
}

$http_codedesc = curl_getinfo($desc, CURLINFO_HTTP_CODE);
if($http_codedesc == intval(200)){
    // var_dump(json_decode($response));
}
else{
    echo "Ressource introuvable : " . $http_codedesc;
}

} catch (\Throwable $th) {
  throw $th;
} finally {
  curl_close($fi);
  curl_close($desc);
}
?>
<?php
$dataFi = json_decode($filmsInfo);
$datadesc = json_decode($filmsDesc);

include("inc/config.php");
$title = $movieName;
include("inc/header.php");
?>

    <section id="filmInfo" class="section-64">
        <div class="container">
            <?php
            foreach ($dataFi as $valueFi) {
                $trailerCount =0;
                if (is_array($valueFi) || is_object($valueFi)){
                    foreach ($valueFi as $trailer) {
                        $trailerCount++;
                        if($trailerCount < 2){
                            echo '<iframe width="100%" height="600" src="https://www.youtube.com/embed/' . $trailer->key . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                        }
                    }
                }
            }
            ?>
            <?php
            echo '<h2 class="text-dark my-2">' . $movieName . '</h2>';
            ?>
            <?php
                echo '<div class="d-flex wrap my-2">';
                echo '<p class="text-dark pr-2"><strong>Genres&#8239;: </strong></p>';
                $i = 1;
                foreach (($datadesc->genres) as $genres) {
                    echo '<p class="text-dark">' . $genres->name . '</p>';
                    if($i < count($datadesc->genres)) {
                        echo ',&nbsp';
                    }
                    $i++;
                }
                echo '</div>';

                echo '<div class="d-flex my-2">';
                echo '<p class="text-dark pr-2"><strong>Critique :</strong></p>';
                echo '<p class="text-dark">' . intval($datadesc->vote_average) . ' ' . "<strong>/10</strong>" . ' </p>';
                echo '</div>';

                echo '<div class="d-flex wrap my-2">';
                    echo '<p class="text-dark pr-2"><strong>Résumé :</strong></p>';
                    echo '<p class="text-dark">' . $datadesc->overview . '</p>';
                echo '</div>';
            ?>
        </div>
        <div class="container">
        <a href="#" class="text-dark link-icon-left mx-1"><i class="fa-solid fa-share"></i>Partager</a>
        <a href="#" class="text-dark link-icon-left mx-1"><i class="fa-solid fa-heart"></i>Aimer</a>
        <a href="#" class="text-dark link-icon-left mx-1"><i class="fa-solid fa-plus"></i>Ajouter</a>
        </div>
    </section>
    <section id="reservation" class="section-64 secondary">
        <div class="container">
        <h2 class="text-light py-3">Réservation</h2>

<h3 class="text-light">Date :</h3>
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

<?php
    echo '<div class="py-3">';
        echo '<a href="reservation.php?movieName=' . $movieName . '" class="btn w-100 py-3">Réserver</a>';
    echo '</div>';
?>
        </div>
    </section>
    <section class="section-64">
        <div class="container">
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