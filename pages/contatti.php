<?php
include_once '../includes/db_connection.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contatti</title>
    <link rel="shortcut icon" href="../drawable/logo-mini.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"
          integrity="sha512-NmLkDIU1C/C88wi324HBc+S2kLhi08PN5GDeUVVVC/BVt/9Izdsc9SVeVfA1UZbY3sHUlDSyRXhCzHfr6hmPPw=="
          crossorigin="anonymous"/>

    <link rel="stylesheet" href="../style/home_page.css"/>
    <link rel="stylesheet" href="../style/contatti.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.min.css"
          integrity="sha512-ztsAq/T5Mif7onFaDEa5wsi2yyDn5ygdVwSSQ4iok5BPJQGYz1CoXWZSA7OgwGWrxrSrbF0K85PD5uLpimu4eQ=="
          crossorigin="anonymous"/>

    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;900&display=swap" rel="stylesheet">
</head>

<body>

<! navbar>
<div class="navbg">
    <navbar>
        <div class="logo ">
            <img src="../drawable/navbar-logo.png" alt="logo-sito">
        </div>
        <ul class="menu">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="meta_selezionata.html">Mete</a></li>
            <li><a href="#">Contatti</a></li>
        </ul>
        <div class="cta">
            <a href="login.html" class="button"> Login</a>
        </div>
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </navbar>
</div>

<! contatti>
<div class="contatti">

    <div class="zoom">

        <h2 align="center" class="big-text">Contatti:</h2>
        <p align="center">
            Telefono: 0883 200300 <br>
            E-mail: info@plan&travel.com
        </p>
        <h2 align="center" class="big-text">Dove siamo:</h2>
        <div align="center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3006.176813203157!2d16.876739015280478!3d41.10882937929088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1347e84f6b3975e1%3A0xb00d07e6c3cc2e4c!2sPolitecnico%20di%20Bari!5e0!3m2!1sit!2sit!4v1619378885087!5m2!1sit!2sit"
                    width="70%" max-width="100%" height="300" align-items="center" ; allowfullscreen="" loading="lazy">
            </iframe>
        </div>


        <div class="form reveal">
            <form action="contatti.php" method="post" enctype="multipart/form-data">
                <h1 class="normal-text">Per maggiori informazioni scrivici!</h1>
                <input name="nome" type="text" class="feedback-input" placeholder="Nome"/>

                <input name="cognome" type="text" class="feedback-input" placeholder="Cognome"/>

                <input name="email" type="text" class="feedback-input" placeholder="Email"/>

                <textarea name="testo" class="feedback-input" placeholder="Oggetto"></textarea>

                <button type="submit" name="invia">INVIA</button>
            </form>
        </div>
    </div>
</div>

<! Carica nel database >
<?php
if (isset($conn)) {
    if (isset($_POST['invia'])) {
        if (!empty($_POST['nome']) && !empty($_POST['cognome']) && !empty($_POST['email']) && !empty($_POST['testo'])) {
            $nome = $_POST['nome'];
            $cognome = $_POST['cognome'];
            $email = $_POST['email'];
            $oggetto = $_POST['testo'];

            $query = "INSERT INTO richiesta(nome, cognome, email, oggetto) VALUES ('$nome', '$cognome', '$email', '$oggetto');";
            $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

            if ($run) {
                echo "<p>Form submitted!</p>";
            } else {
                echo "<p>Form not submitted!</p>";
            }
        } else {
            echo "<p>All fields required</p>";
        }
    }
}
?>

<! Footer>

<footer>
    Plan&Travel | Via Roma, 24 - 55045 Pietrasana (Lucca) ITALIA | P.Iva 000000000 <br>
    <a class="trans-color-text" href="#">info@plan&travel.com</a> | <span itemprop="telephone"><a
                href="#">0883 200300</a></span>
    <br><a href="privacy_and_cookies.html"> privacy</a> | <a href="privacy_and_cookies.html"> cookie policy</a>

    <div class="social-cont">
        <ul class="social-list">
            <li><a target="_blank" href="#"><img
                            src="https://icon-library.com/images/facebook-png-icon-white/facebook-png-icon-white-18.jpg"
                            title="facebook" alt="Facebook icon"></a></li>
            <li><a target="_blank" href="#"><img
                            src="https://icon-library.com/images/white-instagram-icon-png/white-instagram-icon-png-14.jpg"
                            title="Instagram" alt="Instagram icon"></a></li>
            <li><a target="_blank" href="#"><img
                            src="https://www.suiteforlife.it/wp-content/uploads/2019/09/whatsapp-logo-112413FAA7-seeklogo-298x300.png"
                            title="WhatsApp" alt="WhatsApp icon"></a></li>
        </ul>
    </div><!--/fine social cont-->
    Designed by<br>
    <div class="credits">
        <a href="homepage.php"><img width="32" src="../drawable/logo-mini.png" title="Plan&Travel"
                                    alt="Icona Plan&Travel"></a>
    </div>

</footer>


<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/2.2.1/flickity.pkgd.min.js"
        integrity="sha512-Nx/M3T/fWprNarYOrnl+gfWZ25YlZtSNmhjHeC0+2gCtyAdDFXqaORJBj1dC427zt3z/HwkUpPX+cxzonjUgrA=="
        crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {

        /* Open Panel */
        $(".hamburger").on('click', function () {
            $(".menu").toggleClass("menu--open");
        });

    });


    ScrollReveal().reveal('.reveal', {
        distance: '100px',
        duration: 1500,
        easing: 'cubic-bezier(.215, .61, .355, 1)',
        interval: 600
    });

    ScrollReveal().reveal('.zoom', {
        duration: 1500,
        easing: 'cubic-bezier(.215, .61, .355, 1)',
        interval: 200,
        scale: 0.65,
        mobile: false
    });

</script>


</body>
</html>
