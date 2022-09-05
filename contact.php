<?php
$title = 'Contact';
include("inc/header.php");
?>

<section class="section-64">
    <div class="container">
        <h2 class="text-dark w-100">Contactez-nous</h2>
        <p class="text-dark w-100">Tél. 03 12 34 56 78</p>

        <div class="contactform">
            <form class="d-flex wrap justify-between" action="">
                <div class="contact-field d-flex wrap my-2 w-40">
                <label for="name" class="main-font w-100">Prénom</label>
                <input class="main-font w-100" type="text" id="name" placeholder="Votre prénom">
                </div>

                <div class="contact-field d-flex wrap my-2 w-40">
                <label for="name" class="main-font w-100">Nom</label>
                <input class="main-font w-100" type="text" id="name" placeholder="Votre nom">
                </div>

                <div class="contact-field d-flex wrap my-2 w-40">
                <label for="name" class="main-font w-100">Email</label>
                <input class="main-font w-100" type="text" id="name" placeholder="Votre email">
                </div>

                <div class="contact-field d-flex wrap my-2 w-40">
                <label for="name" class="main-font w-100">Objet</label>
                <input class="main-font w-100" type="text" id="name" placeholder="Votre objet">
                </div>

                <div class="contact-field d-flex wrap my-2 w-100">
                <label for="name" class="main-font w-100">Message</label>
                <textarea class="main-font w-100" name="msg" id="msg" placeholder="Votre message"></textarea>
                </div>

                <button class="btn" type="submit">Envoyer</button>
            </form>
        </div>

        <div class="my-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10385.184737952308!2d2.7747342!3d49.4033043!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x73e1fa311d18ea87!2sMajestic%20Compi%C3%A8gne!5e0!3m2!1sfr!2sfr!4v1662380404253!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<?php
include("inc/footer.php")
?>