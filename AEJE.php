<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/aeje_css.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0">
    <title>WebAPP AEJE</title>
</head>
<body>

<div>
    <div class="header-aeje flex-row shadow font700 text-center">
        <button onclick="open_menu()" id="menu" class="menu-img-aeje pointer">&nbsp</button>
        <span class="header-title">PÁGINA PRINCIPAL</span></div>

<div class="flex-column center-items">
    <div id="logo-aeje" class="logo-aeje"></div>

    <div id="main" class="main-aeje flex-column">
        <div class="main-aeje-item flex-column"><img class="img-aeje" src="img/aeje/escola.png"><p class="font700">Escola Secundária <br> José Estevão</p></div>
        <div class="main-aeje-item flex-column"><img class="img-aeje" src="img/aeje/location.png"><p class="font700">Aveiro</p></div>
    </div>

    <div id="contact" class="flex-row">
        <div class="contact-item center-items text-center flex-column">
            <div style="flex-shrink: 0; max-width: 15%;"><img style="width: 100%;" src="img/aeje/phone_number.png"></div>
            <p class="phone-number font700">234 104 910 | 234 104 920</p></div>
        <div class="contact-item-email center-items flex-column"><img class="img-aeje-email" src="img/aeje/email.png"><p class="email font700">geral@aeje.pt</p></div>
    </div>

    <div id="footer" class="footer flex-row">
        <div style="margin: 0.1em;"><img class="ua-aeje" src="img/aeje/ua.png"></div>
    <div style="flex: 0 0 auto; margin: 0.1em;"><p class="txt-aeje font500">Proposta de uma WebApp <br> criada na Universidade de Aveiro</p></div>
    <div style="margin: 0.1em;"><img class="ministerio-aeje" src="img/aeje/ministerio.png"></div>
    </div>
</div>


    <?php include "components/public/menu_aeje.php"; ?>

</div>


<script type="text/javascript" src="js/modal_aeje.js"></script>

</body>
</html>