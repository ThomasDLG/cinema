<?php
$title = 'Acceuil';
$classBody = "classBody";
include("inc/header.php");
?>
<section id="login" class=" section-64">
    <div class="container d-flex justify-center wrap">
        <div class="w-100 text-center">
            <h2 class="text-dark pb-5">Avez-vous un compte ?</h2>
            <div class="d-flex justify-center wrap">
            <a href="" class="btn mx-2">Connexion</a>
            <a href="" class="btn mx-2">Inscription</a>
            </div>
        </div>
        <div class="footer-content text-center pt-5">
            <h2 class="text-dark py-2">Continuer sans m'identifier</h2>
            <form action="payment.php" method="POST">
              <input class="newsletter" type="text" placeholder="Votre email" />
              <button class="btn" type="submit">
                <img src="src/icons/sent-white.svg" alt="" />
              </button>
            </form>
          </div>
    </div>
</section>
<?php
include("inc/footer.php")
?>