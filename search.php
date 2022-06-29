<?php
$ch = curl_init();

$research = $_POST['research'];

try {

    $proxy = "127.0.0.1:3306";
    $timeout = '3000';
    $curl = NULL;

    curl_setopt($ch, CURLOPT_VERBOSE, 0);

    curl_setopt($ch, CURLOPT_URL, 'https://api.themoviedb.org/3/search/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&query=' . $research . '&page=1&include_adult=false');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);

    if (curl_errno($ch)) {
        echo curl_error($ch);
        die();
    }
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if($http_code == intval(200)){
        // var_dump(json_decode($response));
    }
    else{
        echo "Ressource introuvable : " . $http_code;
    }
} catch (\Throwable $th) {
    throw $th;
} finally {
    curl_close($ch);

}

$data = json_decode($response);
?>
<?php
  $title = 'Résultats de recherche pour ' . '"' . $research . '"' . '';
  include("inc/header.php");
?>

    <section id="research-results" class="section-64">
        <div class="container-content">
          <?php echo'<h2>Résultats pour la recherche ' . '"' . $research . '"' . '</h2>' ?>
            <div class="d-flex row wrap justify-between wrapper">
                <?php
                    foreach ($data as $value) {
                          if (is_array($value) || is_object($value)){
                              foreach ($value as $films) {
                                  echo '<div class="my-2 mx-2 relative my-2 mx-2 relative card">';
                                      echo '<a href="#">';
                                          echo '<img src="' . 'https://image.tmdb.org/t/p/w500' . $films->poster_path . '" alt="' . $films->original_title . '">';
                                      echo '</a>';
                                  echo '</div>';
                              }
                          }
                      }
                ?>
            </div>
        </div>
    </section>

    <!-- FOOTER -->

<?php
  include("inc/footer.php");
?>

  </body>
</html>
