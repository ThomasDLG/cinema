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

                <div id="radio" class="d-flex wrap my-2 py-2">

                  <div class="radio-date">
                  <label for="date" class="radio-text">
                  <span class="text-center d-block w-100">MER</span>
                  <span class="text-center d-block w-100">05</span>
                  <span class="text-center d-block w-100">JANV</span>
                  </label>
                  <input type="radio" id="date" name="selector">
                  </div>

                  <div class="radio-date">
                  <label for="date" class="radio-text">
                  <span class="text-center d-block w-100">MER</span>
                  <span class="text-center d-block w-100">05</span>
                  <span class="text-center d-block w-100">JANV</span>
                  </label>
                  <input type="radio" id="date" name="selector">
                  </div>

                  <div class="radio-date">
                  <label for="date" class="radio-text">
                  <span class="text-center d-block w-100">MER</span>
                  <span class="text-center d-block w-100">05</span>
                  <span class="text-center d-block w-100">JANV</span>
                  </label>
                  <input type="radio" id="date" name="selector">
                  </div>

                  <div class="radio-date">
                  <label for="date" class="radio-text">
                  <span class="text-center d-block w-100">MER</span>
                  <span class="text-center d-block w-100">05</span>
                  <span class="text-center d-block w-100">JANV</span>
                  </label>
                  <input type="radio" id="date" name="selector">
                  </div>

                </div>
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