<?php
$movieName = $_GET['movieName'];
include("inc/config.php");
$title = "Réservation $movieName";
include("inc/header.php");
?>
<section id="seat" class="section-64">
    <div class="container">
        <h2 class="text-dark my-2">Choisissez votre place</h2>
        <div class="relative screen">
            <p class="absolute text-dark">Écran</p>
        </div>
        <div class="d-flex row justify-between">
        <?php
        echo '<div>';
            for ($i=0; $i < 10; $i++) {
                echo '<div>';
                    echo '<input type="checkbox" id="">';
                    echo '<input type="checkbox" id="">';
                    echo '<input type="checkbox" id="">';
                    echo '<input type="checkbox" id="">';
                echo '</div>';
            }
        echo '</div>';
        ?>
        <?php
        echo '<div>';
            for ($i=0; $i < 10; $i++) {
                echo '<div>';
                    echo '<input type="checkbox" id="">';
                    echo '<input type="checkbox" id="">';
                    echo '<input type="checkbox" id="">';
                    echo '<input type="checkbox" id="">';
                echo '</div>';
            }
        echo '</div>';
        ?>
        <?php
        echo '<div>';
            for ($i=0; $i < 10; $i++) {
                echo '<div>';
                    echo '<input type="checkbox" id="">';
                    echo '<input type="checkbox" id="">';
                    echo '<input type="checkbox" id="">';
                    echo '<input type="checkbox" id="">';
                echo '</div>';
            }
        echo '</div>';
        ?>
        </div>
    </div>
</section>

<section id="food" class="section-64">
    <div class="container">
        <h2 class="text-dark">Une petite faim ?</h2>
        <div class="food-list d-flex wrap justify-between">

        <?php
            foreach ($food as $key => $value) {
                echo '<div class="food-item d-flex col align-center text-center my-2">';
                echo '<p>' . $value["nom"] . '</p>';
            echo '<img src="' . $value["image"] . '" alt="">';
            echo '<p>' . $value["prix"] . '</p>';

            echo '<div class="select-food d-flex">';
                echo '<div class="select-plus">';
                    echo '<i class="fa-solid fa-plus"></i>';
                echo '</div>';
                    echo '<span>0</span>';
                    echo '<div class="select-minus">';
                        echo '<i class="fa-solid fa-minus"></i>';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
            }
        ?>

        </div>
    </div>
</section>

<section id="menu" class="section-64">
    <div class="container">
        <h2 class="text-dark">Une grande faim&#8239;? <br> Choisissez Luxe Diner !</h2>
    </div>
    <div class="container d-flex wrap justify-between">

        <div class="menu-card w-40 py-2">
            <h4 class="text-dark">Menu...</h4>
            <div class="menu-content my-3 d-flex justify-arround">
                <div class="menu-img">
                    <img src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=710&q=80" alt="">
                </div>
                <div class="menu-list pl-2">
                <ul class="list">
                    <li class="list-item pb-1">Paragraph sample text</li>
                    <li class="list-item pb-1">Paragraph sample text</li>
                    <li class="list-item pb-1">Paragraph sample text</li>
                    <li class="list-item pb-1">Paragraph sample text</li>
                    <li class="list-item pt-2"><strong>Prix : 18 €</strong></li>
                </ul>
                </div>
            </div>
            <a href="#" class="btn btn-icon-right d-flex justify-center">Choisir<i class="fa-solid fa-plus"></i></a>
        </div>

        <div class="menu-card w-40 py-2">
            <h4 class="text-dark">Menu...</h4>
            <div class="menu-content my-3 d-flex justify-arround">
                <div class="menu-img">
                    <img src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=710&q=80" alt="">
                </div>
                <div class="menu-list pl-2">
                <ul class="list">
                    <li class="list-item pb-1">Paragraph sample text</li>
                    <li class="list-item pb-1">Paragraph sample text</li>
                    <li class="list-item pb-1">Paragraph sample text</li>
                    <li class="list-item pb-1">Paragraph sample text</li>
                    <li class="list-item pt-2"><strong>Prix : 18 €</strong></li>
                </ul>
                </div>
            </div>
            <a href="#" class="btn btn-icon-right d-flex justify-center">Choisir<i class="fa-solid fa-plus"></i></a>
        </div>

        <div class="menu-card w-40">
            <h4 class="text-dark">Menu...</h4>
            <div class="menu-content my-3 d-flex justify-arround">
                <div class="menu-img">
                    <img src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=710&q=80" alt="">
                </div>
                <div class="menu-list pl-2">
                <ul class="list">
                    <li class="list-item pb-1">Paragraph sample text</li>
                    <li class="list-item pb-1">Paragraph sample text</li>
                    <li class="list-item pb-1">Paragraph sample text</li>
                    <li class="list-item pb-1">Paragraph sample text</li>
                    <li class="list-item pt-2"><strong>Prix : 18 €</strong></li>
                </ul>
                </div>
            </div>
            <a href="#" class="btn btn-icon-right d-flex justify-center">Choisir<i class="fa-solid fa-plus"></i></a>
        </div>

        <div class="menu-card w-40">
            <h4 class="text-dark">Menu...</h4>
            <div class="menu-content my-3 d-flex justify-arround">
                <div class="menu-img">
                    <img src="https://images.unsplash.com/photo-1482049016688-2d3e1b311543?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=710&q=80" alt="">
                </div>
                <div class="menu-list pl-2">
                <ul class="list">
                    <li class="list-item pb-1">Paragraph sample text</li>
                    <li class="list-item pb-1">Paragraph sample text</li>
                    <li class="list-item pb-1">Paragraph sample text</li>
                    <li class="list-item pb-1">Paragraph sample text</li>
                    <li class="list-item pt-2"><strong>Prix : 18 €</strong></li>
                </ul>
                </div>
            </div>
            <a href="#" class="btn btn-icon-right d-flex justify-center">Choisir<i class="fa-solid fa-plus"></i></a>
        </div>

    </div>
</section>

<section id="checkout" class="section-64">
    <div class="container">
        <h2 class="text-dark">Récapitulatif de votre réservation</h2>

        <h4>Tickets</h4>
        <p class="mb-3">Total : 14.90 €</p>

        <div class="cart-item main-font d-flex py-2 px-2 justify-between">
            <span>Place <strong>B27</strong></span><span> | </span><span>Avatar</span><span> | </span><span>20h00 - <strong>7,45 €</strong></span><span class="ml-2"><i class="fa-solid fa-xmark"></i></span>
        </div>

        <br>

        <div class="cart-item main-font d-flex py-2 px-2 justify-between">
            <span>Place <strong>B28</strong></span><span> | </span><span>Avatar</span><span> | </span><span>20h00 - <strong>7,45 €</strong></span><span class="ml-2"><i class="fa-solid fa-xmark"></i></span>
        </div>

        <h4 class="mt-3">Nouritures & boissons</h4>
        <p class="mb-3">Total : 14.40 € €</p>

        <div class="cart-item main-font d-flex py-2 px-2 justify-between">
            <span>Popcorn - <strong>5.90 €</strong></span><span class="ml-2"><i class="fa-solid fa-xmark"></i></span>
        </div>

        <br>

        <div class="cart-item main-font d-flex py-2 px-2 justify-between">
            <span>Doritos - <strong>3.50 €</strong></span><span class="ml-2"><i class="fa-solid fa-xmark"></i></span>
        </div>

        <br>

        <div class="cart-item main-font d-flex py-2 px-2 justify-between">
            <span>Cocacola - <strong>2.50 €</strong></span><span class="ml-2"><i class="fa-solid fa-xmark"></i></span>
        </div>

        <br>

        <div class="cart-item main-font d-flex py-2 px-2 justify-between">
            <span>Cocacola - <strong>2.50 €</strong></span><span class="ml-2"><i class="fa-solid fa-xmark"></i></span>
        </div>

        <div class="d-flex justify-between my-3">
            <h4><strong>Total :</strong></h4>
            <h4><strong>29.30 €</strong></h4>
        </div>
        <a href="login.php" class="btn d-flex justify-center">Payer</a>
    </div>
</section>
<?php
include("inc/footer.php");
?>