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

    <div id="main" class="flex-column">
        <div class="flex-column"><img src=""><p>Escola Secundária <br> José Estevão</p></div>
        <div class="flex-column"><img src=""><p>Aveiro</p></div>
    </div>

    <div id="contact"></div>

    <div id="footer" class="footer flex-row"></div>
</div>


    <?php include "components/public/menu_aeje.php"; ?>

</div>


<script type="text/javascript" src="js/modal_aeje.js"></script>

</body>
</html>