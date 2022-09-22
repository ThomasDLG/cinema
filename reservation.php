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
        for ($i = 0; $i < 3; $i++) {
            echo '<div class="seat-col d-flew wrap">';
            for ($j = 0; $j < 30; $j++) {
                echo '<input type="checkbox" name="place[]" value="' . $i . '-' . $j . '">';
            }
            echo '</div>';
        }
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
            <h4 class="text-dark">Luxe Wagyu</h4>
            <div class="menu-content my-3 d-flex justify-arround">
                <div class="menu-img">
                    <img src="https://images.unsplash.com/photo-1588168333986-5078d3ae3976?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=627&q=80" alt="">
                </div>
                <div class="menu-list pl-2">
                <ul class="list">
                    <li class="list-item pb-1">Boeuf Wagyu</li>
                    <li class="list-item pb-1">Salade vinaigrette</li>
                    <li class="list-item pb-1">Plateau de fromages</li>
                    <li class="list-item pb-1">Sorbet</li>
                    <li class="list-item pt-2"><strong>Prix : 34 €</strong></li>
                </ul>
                </div>
            </div>
            <a href="#" class="btn btn-icon-right d-flex justify-center">Choisir<i class="fa-solid fa-plus"></i></a>
        </div>

        <div class="menu-card w-40 py-2">
            <h4 class="text-dark">Luxe Burger</h4>
            <div class="menu-content my-3 d-flex justify-arround">
                <div class="menu-img">
                    <img src="https://images.unsplash.com/photo-1565299507177-b0ac66763828?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=722&q=80" alt="">
                </div>
                <div class="menu-list pl-2">
                <ul class="list">
                    <li class="list-item pb-1">Burger premium</li>
                    <li class="list-item pb-1">Frites de patates douces</li>
                    <li class="list-item pb-1">Plateau de fromages</li>
                    <li class="list-item pb-1">Gateau au chocolat</li>
                    <li class="list-item pt-2"><strong>Prix : 40 €</strong></li>
                </ul>
                </div>
            </div>
            <a href="#" class="btn btn-icon-right d-flex justify-center">Choisir<i class="fa-solid fa-plus"></i></a>
        </div>

        <div class="menu-card w-40">
            <h4 class="text-dark">Luxe Chicken</h4>
            <div class="menu-content my-3 d-flex justify-arround">
                <div class="menu-img">
                    <img src="https://images.unsplash.com/photo-1562967916-eb82221dfb92?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=686&q=80" alt="">
                </div>
                <div class="menu-list pl-2">
                <ul class="list">
                    <li class="list-item pb-1">Aiguillette de poulet</li>
                    <li class="list-item pb-1">Rondelles d'oignons à la bière</li>
                    <li class="list-item pb-1">Plateau de fromages</li>
                    <li class="list-item pb-1">Gauffres</li>
                    <li class="list-item pt-2"><strong>Prix : 29 €</strong></li>
                </ul>
                </div>
            </div>
            <a href="#" class="btn btn-icon-right d-flex justify-center">Choisir<i class="fa-solid fa-plus"></i></a>
        </div>

        <div class="menu-card w-40">
            <h4 class="text-dark">Luxe Grillade</h4>
            <div class="menu-content my-3 d-flex justify-arround">
                <div class="menu-img">
                    <img src="https://images.unsplash.com/photo-1625477811233-044633d10dd1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="">
                </div>
                <div class="menu-list pl-2">
                <ul class="list">
                    <li class="list-item pb-1">Porc éffiloché</li>
                    <li class="list-item pb-1">Poivrons farcis à la feta</li>
                    <li class="list-item pb-1">Plateau de fromages</li>
                    <li class="list-item pb-1">Sorbet fraise & citron</li>
                    <li class="list-item pt-2"><strong>Prix : 35 €</strong></li>
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
        <p class="mb-3">Total : 14.40 €</p>

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