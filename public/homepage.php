<!DOCTYPE html>

<?php
/*
if (!isset($_SESSION['username'])) {

    header('Location: /public/login.php');

}
*/
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="../css/style.css">

    <title>Página Principal</title>
</head>
<div class="background flex-column">

<!-- header -->

    <div class="homepage-header flex-row shadow font700 white">

        <button id="menu" class="menu-img">&nbsp</button><!-- hamburguer menu-->
        <span class="center">PÁGINA PRINCIPAL</span>

    </div>

<!-- header -->

<!-- profile -->
    <div id="profile-menu" class="profile-menu-style-homepage gradient-background white">

    <?php include "../components/public/profile_details.php"; ?>

    </div>
    <!-- profile -->


<!-- daily challenge -->

    <div id="desafio-do-dia" class="day-challenge-title font700 white">DESAFIO DO DIA</div>

    <div class="day-challenge gradient-border">

        <span class="day-challenge-description font600">Necessitas de limpar o mais rapido possivel</span><!-- descricao do desafio -->

        <div class="accept-or-decline font600">

            <a class="accept-or-decline-item gradient-background gradient-border white" href="">aceitar</a>
                <a class="accept-or-decline-item gradient-border orange" href="">rejeitar</a>

        </div>

        <div class="flex-row challenge-time-keys font500">                                                   <!-- start  end -->
             <!-- icon time --> <span class="challenge-time flex-row orange"><img class="time" src="../img/icon/relogio.png">14:00 - 14:35</span>
            <img class="challenge-keys" src="../img/icon/chave_laranja.png"> <!-- img nr chaves -->
        </div>

    </div>

<!-- daily challenge -->


<!-- home -->

    <!-- LOOTBOXES -->
    <div id="baus" class="homepage-content">

        <div class="homepage-content-elements">

            <div class="homepage-content-lines flex-row">
                <div class="homepage-content-line gradient-border-homepage"> line1</div>
                <img class="homepage-content-icon" src="../img/icon/colecoes_icon.png"> <!-- icon de cada conteudo (desafio, premio, colecao, etc) css: colocar por cima da div "lines" -->
                <div class="homepage-content-line gradient-border-homepage"> lin2</div>
            </div>


            <span class="homepage-content-description font500">Necessitas de limpar o mais rapido possivel</span> <!-- descricao do conteudo -->


            <a class="homepage-content-link-item gradient-background gradient-border shadow white font600" href="">abrir báus</a> <!-- hiperligaçao de cada pagina; #links = #login -->


        </div>

    </div>
    <!-- LOOTBOXES -->

    <!-- CHALLENGES -->
<div id="desafios" class="homepage-content">

        <div class="homepage-content-elements">

            <div class="homepage-content-lines flex-row">
                <div class="homepage-content-line gradient-border-homepage"> line1</div>
                <img class="homepage-content-icon" src="../img/icon/premios_icon.png"> <!-- icon de cada conteudo (desafio, premio, colecao, etc) css: colocar por cima da div "lines" -->
                <div class="homepage-content-line gradient-border-homepage"> lin2</div>
            </div>


            <span class="homepage-content-description font500">Necessitas de limpar o mais rapido possivel</span> <!-- descricao do conteudo -->


            <a class="homepage-content-link-item gradient-background gradient-border shadow white font600" href="">desafios</a> <!-- hiperligaçao de cada pagina; #links = #login -->


        </div>

    </div>
    <!-- CHALLENGES -->

    <!-- COLECTIONS -->
    <div id="colecoes" class="homepage-content">

        <div class="homepage-content-elements">

            <div class="homepage-content-lines flex-row">
                <div class="homepage-content-line gradient-border-homepage"> line1</div>
                <img class="homepage-content-icon" src="../img/icon/premios_icon.png"> <!-- icon de cada conteudo (desafio, premio, colecao, etc) css: colocar por cima da div "lines" -->
                <div class="homepage-content-line gradient-border-homepage"> lin2</div>
            </div>


            <span class="homepage-content-description font500">Necessitas de limpar o mais rapido possivel</span> <!-- descricao do conteudo -->


            <a class="homepage-content-link-item gradient-background gradient-border shadow white font600" href="">coleções</a> <!-- hiperligaçao de cada pagina; #links = #login -->


        </div>

    </div>
    <!-- COLECTIONS -->

    <!-- AWARDS -->
    <div id="premios" class="homepage-content">

        <div class="homepage-content-elements">

            <div class="homepage-content-lines flex-row">
                <div class="homepage-content-line gradient-border-homepage"> line1</div>
                <img class="homepage-content-icon" src="../img/icon/premios_icon.png"> <!-- icon de cada conteudo (desafio, premio, colecao, etc) css: colocar por cima da div "lines" -->
                <div class="homepage-content-line gradient-border-homepage"> lin2</div>
            </div>


            <span class="homepage-content-description font500">Necessitas de limpar o mais rapido possivel</span> <!-- descricao do conteudo -->


            <a class="homepage-content-link-item gradient-background gradient-border shadow white font600" href="">prêmios</a> <!-- hiperligaçao de cada pagina; #links = #login -->


        </div>

    </div>
    <!-- AWARDS -->

<!-- home -->


</div>