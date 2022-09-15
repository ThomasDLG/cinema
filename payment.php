<?php
$title = 'Paiement';
include("inc/header.php");
?>

<section class="section-64">
    <div class="container">

    <div class="payment-option d-flex justify-center mb-3">
        <div class="visa mx-1">
            <div class="pt-2">
            <img src="src/icons/visa.svg" alt="">
            <img src="src/icons/american-express.svg" alt="">
            </div>
            <p class="pb-2">Visa Mastercard</p>
        </div>
        <div class="paypal mx-1">
            <div class="pt-2">
                <img src="src/icons/paypal.svg" alt="">
            </div>
            <p class="pb-2">Paypal</p>
        </div>
        <div class="apple mx-1">
            <div class="pt-2">
                <img src="src/icons/apple-pay.svg" alt="">
            </div>
            <p class="pb-2" >Apple pay</p>
        </div>
    </div>
        <div class="container-creditcard">
        <div class="card-container">

<div class="front">
    <div class="image">
        <img src="src/chip.png" alt="">
        <img src="src/visa.png" alt="">
    </div>
    <div class="card-number-box main-font">################</div>
    <div class="flexbox">
        <div class="box">
            <span class="main-font">nom</span>
            <div class="card-holder-name main-font">John Doe</div>
        </div>
        <div class="box">
            <span class="main-font">date d'expiration</span>
            <div class="expiration">
                <span class="exp-month main-font">mm</span>
                <span class="exp-year main-font">yy</span>
            </div>
        </div>
    </div>
</div>

<div class="back">
    <div class="stripe"></div>
    <div class="box">
        <span class="main-font">cvv</span>
        <div class="cvv-box"></div>
        <img src="image/visa.png" alt="">
    </div>
</div>

</div>

<form action="checkin.php">
<div class="inputBox w-100">
    <span class="main-font">numéro de carte</span>
    <input type="text" maxlength="16" class="card-number-input">
</div>
<div class="inputBox w-100">
    <span class="main-font">nom</span>
    <input type="text" class="card-holder-input">
</div>
<div class="flexbox">
    <div class="inputBox w-100">
        <span class="main-font">expiration</span>
        <select name="" id="" class="month-input main-font">
            <option value="month" selected disabled>mois</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
    </div>
    <div class="inputBox">
        <span class="main-font">expiration</span>
        <select name="" id="" class="year-input main-font">
            <option value="year" selected disabled>année</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
            <option value="2030">2030</option>
        </select>
    </div>
    <div class="inputBox">
        <span class="main-font">cvv</span>
        <input type="text" maxlength="4" class="cvv-input">
    </div>
</div>
</form>
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
        <a href="checkin.php" class="btn d-flex justify-center">Payer</a>
    </div>
</section>

<?php
include("inc/footer.php")
?>