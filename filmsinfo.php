<?php
$ch = curl_init();

$movieId= $_GET['id'];
$movieName = $_GET['name'];

try {

    $proxy = "127.0.0.1:3306";
    $timeout = '3000';
    $curl = NULL;

    curl_setopt($ch, CURLOPT_VERBOSE, 0);

    curl_setopt($ch, CURLOPT_URL, 'https://api.themoviedb.org/3/movie/' . $movieId . '/videos?api_key=41d556b9f4525188759fcf95d4685c62&language=us-US');
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

$datatl = json_decode($response);
?>
<?php
include("inc/config.php");
$title = $movieName;
include("inc/header.php");
?>

<?php
    foreach ($datatl as $value) {
        $trailerCount =0;
        if (is_array($value) || is_object($value)){
            foreach ($value as $trailer) {
                $trailerCount++;
                if($trailerCount < 2){
                    echo '<iframe width="560" height="315" src="https://www.youtube.com/embed/' . $trailer->key . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                }
            }
        }
    }
?>

<?php
  include("inc/footer.php");
?>