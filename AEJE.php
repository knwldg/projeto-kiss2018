<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/aeje_css.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <title>WebAPP AEJE</title>
</head>
<body>

<div>
    <div class="header-aeje flex-row shadow font700 text-center">
        <button onclick="open_menu()" id="menu" class="menu-img pointer">&nbsp</button>
        <span class="header-title">PÁGINA PRINCIPAL</span></div>

<div class="flex-column center-items">
    <div id="logo-aeje" class="logo-aeje"></div>

    <div id="main" class="main-aeje flex-column">
        <div class="main-aeje-item flex-column"><img class="img-aeje" src="img/aeje/escola.png"><p class="font700">Escola Secundária <br> José Estevão</p></div>
        <div class="main-aeje-item flex-column"><img class="img-aeje" src="img/aeje/location.png"><p class="font700">Aveiro</p></div>
    </div>

    <div id="contact" class="flex-row">
        <div class="contact-item center-items text-center flex-column"><img class="img-aeje" src="img/aeje/phone_number.png"><p class="phone-number font700">234 104 910 | 234 104 920</p></div>
        <div class="contact-item-email center-items flex-column"><img class="img-aeje-email" src="img/aeje/email.png"><p class="email font700">geral@aeje.pt</p></div>
    </div>

    <div id="footer" class="footer flex-row"></div>
</div>


    <?php include "components/public/menu_aeje.php"; ?>

</div>


<script type="text/javascript" src="js/modal_aeje.js"></script>

</body>
</html>