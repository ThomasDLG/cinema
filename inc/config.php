<?php
$ch = curl_init();
$cs = curl_init();

$events = array(
  array(
    "image" => "src/events/e1.jpg",
    "title" => "event"
  ),
  array(
    "image" => "src/events/e2.jpg",
    "title" => "event"
  ),
  array(
    "image" => "src/events/e3.jpg",
    "title" => "event"
  ),
  array(
    "image" => "src/events/e4.jpg",
    "title" => "event"
  ),
  array(
    "image" => "src/events/e5.jpg",
    "title" => "event"
  ),
  array(
    "image" => "src/events/e6.jpg",
    "title" => "event"
  ),
);

$food = array(
  array(
    "nom" => "Popcorn",
    "image" => "src/food/popcorn.png",
    "prix" => "5.90€",
  ),
  array(
    "nom" => "Doritos",
    "image" => "src/food/doritos.png",
    "prix" => "3.50€",
  ),
  array(
    "nom" => "Guimauve",
    "image" => "src/food/guimauve.png",
    "prix" => "3.10€",
  ),
  array(
    "nom" => "Hot-Dog",
    "image" => "src/food/hotdogs.png",
    "prix" => "7.90€",
  ),
  array(
    "nom" => "Nuggets",
    "image" => "src/food/nuggets.png",
    "prix" => "6.50€",
  ),
  array(
    "nom" => "Sticks",
    "image" => "src/food/mozarella.png",
    "prix" => "6.90€",
  ),
  array(
    "nom" => "Cocacola",
    "image" => "src/food/cocacola.png",
    "prix" => "2.50€",
  ),
  array(
    "nom" => "Ice-Tea",
    "image" => "src/food/ice-tea.png",
    "prix" => "2.50€",
  ),
  array(
    "nom" => "Evian",
    "image" => "src/food/evian.png",
    "prix" => "1.90€",
  ),
);

$genres = array(
  "Action" => array('nom' => 'Action', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=28&without_genres=35%2C12%2C16%2C80%2C99%2C18%2C10751%2C14%2C36%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37&with_watch_monetization_types=buy'),
  "Aventure" => array('nom' => 'Aventure', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=12&without_genres=35%2C28%2C16%2C80%2C99%2C18%2C10751%2C14%2C36%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Animation" => array('nom' => 'Animation', 'url' =>'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=16&without_genres=35%2C28%2C12%2C80%2C99%2C18%2C10751%2C14%2C36%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Comédie" => array('nom' => 'Comédie', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=35&without_genres=16%2C28%2C12%2C80%2C99%2C18%2C10751%2C14%2C36%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Crime" => array('nom' => 'Crime', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=80&without_genres=16%2C28%2C12%2C35%2C99%2C18%2C10751%2C14%2C36%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Drame" => array('nom' => 'Drame', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=18&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C10751%2C14%2C36%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Familial" => array('nom' => 'Familial', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=10751&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C14%2C36%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Fantastique" => array('nom' => 'Fantastique', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=14&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C36%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Histoire" => array('nom' => 'Histoire', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=36&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C14%2C27%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Horreur" => array('nom' => 'Horreur', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=27&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C14%2C36%2C10402%2C9648%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Mystère" => array('nom' => 'Mystère', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=9648&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C14%2C36%2C10402%2C27%2C10749%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Romance" => array('nom' => 'Romance', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=10749&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C14%2C36%2C10402%2C27%2C9648%2C878%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Science-Fiction" => array('nom' => 'Science-Fiction', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=878&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C14%2C36%2C10402%2C27%2C9648%2C10749%2C10770%2C53%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Thriller" => array('nom' => 'Thriller', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=53&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C14%2C36%2C10402%2C27%2C9648%2C10749%2C10770%2C878%2C10752%2C37%2C&with_watch_monetization_types=buy'),
  "Guerre" => array('nom' => 'Guerre', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=10752&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C14%2C36%2C10402%2C27%2C9648%2C10749%2C10770%2C878%2C53%2C37%2C&with_watch_monetization_types=buy'),
  "Western" => array('nom' => 'Western', 'url' => 'discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&release_date.gte=2021-01-01&with_genres=10752&without_genres=16%2C28%2C12%2C35%2C99%2C80%2C18%2C10751%2C14%2C36%2C10402%2C27%2C9648%2C10749%2C10770%2C878%2C53%2C37%2C&with')
);

$mainUrl = "discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&primary_release_date.gte=2000-04-01&primary_release_date.lte=2022-06-14&language=fr-FR&adult=false";

if (!empty($_GET["genre"])) {
  $mainUrl = $genres[$_GET["genre"]]["url"];
} else {
  $mainUrl = "discover/movie?api_key=41d556b9f4525188759fcf95d4685c62&primary_release_date.gte=2000-04-01&primary_release_date.lte=2022-06-14&language=fr-FR&adult=false";
}
try {

    $proxy = "127.0.0.1:3306";
    $timeout = '3000';
    $curl = NULL;

    curl_setopt($ch, CURLOPT_VERBOSE, 0);

    curl_setopt($ch, CURLOPT_URL, 'https://api.themoviedb.org/3/' . $mainUrl . '');
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 3);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($cs, CURLOPT_URL, 'https://api.themoviedb.org/3/movie/upcoming?api_key=41d556b9f4525188759fcf95d4685c62&language=fr-FR&adult=false');
    curl_setopt($cs, CURLOPT_HEADER, false);
    curl_setopt($cs, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($cs, CURLOPT_CONNECTTIMEOUT, 15);
    curl_setopt($cs, CURLOPT_TIMEOUT, 15);
    curl_setopt($cs, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($cs, CURLOPT_MAXREDIRS, 3);
    curl_setopt($cs, CURLOPT_SSL_VERIFYPEER, false);

    $response = curl_exec($ch);
    $commingSoon = curl_exec($cs);

    if (curl_errno($ch)) {
        echo curl_error($ch);
        die();
    }
    if (curl_errno($cs)) {
      echo curl_error($cs);
      die();
    }
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if($http_code == intval(200)){
        // var_dump(json_decode($response));
    }
    else{
        echo "Ressource introuvable : " . $http_code;
    }
    $http_codeCs = curl_getinfo($cs, CURLINFO_HTTP_CODE);
    if($http_codeCs == intval(200)){
        // var_dump(json_decode($response));
    }
    else{
        echo "Ressource introuvable : " . $http_codeCs;
    }
} catch (\Throwable $th) {
    throw $th;
} finally {
    curl_close($ch);
    curl_close($cs);
}

$data = json_decode($response);
$dataCs = json_decode($commingSoon);