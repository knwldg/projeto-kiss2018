<!DOCTYPE html>

<?php
session_start();

require_once "../components/php/general.php";
require_once "../components/php/logincontrol.php";
require_once "../components/php/challengeControl.php";

if (!isset($_SESSION['username'])) {

    header("Location: /public/login.php");

}

global $userData;

getUserData($_SESSION['userId']);

dailyChallenge();

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

<body>

<div id="background" class="desafio-background"><!-- quando clicar no desafio -> background-color: gray -->

    <div id="hide-content" class="flex-column position-chest">
        <!-- header -->

        <div id="header" class="homepage-header flex-row shadow font700 white">

            <button onclick="open_menu_home()" id="menu" class="menu-img pointer">&nbsp</button><!-- hamburguer menu-->
            <span class="center">PÁGINA PRINCIPAL</span>

        </div>

        <!-- header -->

        <!-- profile -->

        <div id="profile-menu" class="profile-menu-style-homepage gradient-background white">
            <?php include "../components/public/profile_details.php"; ?>
         </div>

        <!-- profile -->

        <!-- daily challenge -->
        <div id="rejeitar-desafio" class="home-hide-content flex-column">

            <div id="desafio-do-dia" class="day-challenge-title font700 white">DESAFIO DO DIA</div>

            <div class="day-challenge gradient-border">

                <span class="day-challenge-description font600">Necessitas de limpar o mais rapido possivel</span><!-- descricao do desafio -->

                <div class="accept-or-decline font600">

                    <a class="accept-or-decline-item gradient-background gradient-border white" href="desafio_detalhe.php">aceitar</a>
                    <span class="accept-or-decline-item gradient-border orange pointer" onclick="rejeitar_daily_challenge()">rejeitar</span>

                </div>

                <div class="flex-row challenge-time-keys font500">                                                   <!-- start  end -->
                    <!-- icon time --> <span class="challenge-time flex-row orange"><img class="time" src="../img/icon/relogio.png">14:00 - 14:35</span>
                    <img class="challenge-keys" src="../img/icon/chave_laranja.png"> <!-- img nr chaves -->
                </div>

            </div>

        </div>
        <!-- daily challenge -->

        <!-- LOOTBOXES -->
        <div id="baus" class="home-hide-content homepage-content">

            <div class="homepage-content-elements">

                <div class="homepage-content-lines flex-row">
                    <div class="homepage-content-line gradient-border-homepage"> line1</div>
                    <img class="homepage-content-icon" src="../img/icon/bau_home2.png"> <!-- icon de cada conteudo (desafio, premio, colecao, etc) css: colocar por cima da div "lines" -->
                    <div class="homepage-content-line gradient-border-homepage"> lin2</div>
                </div>


                <span class="homepage-content-description font500">Necessitas de limpar o mais rapido possivel</span> <!-- descricao do conteudo -->


                <div class="homepage-content-link-item gradient-background gradient-border shadow white font600 pointer" onclick="open_baus_homepage()">abrir báus</div> <!-- hiperligaçao de cada pagina; #links = #login -->


            </div>

        </div>
        <!-- LOOTBOXES -->

        <!-- CHALLENGES -->
        <div id="desafios" class="home-hide-content homepage-content">

            <div class="homepage-content-elements">

                <div class="homepage-content-lines flex-row">
                    <div class="homepage-content-line gradient-border-homepage"> line1</div>
                    <img class="challenge homepage-content-icon" src="../img/icon/chave_home.png"> <!-- icon de cada conteudo (desafio, premio, colecao, etc) css: colocar por cima da div "lines" -->
                    <div class="homepage-content-line gradient-border-homepage"> lin2</div>
                </div>


                <span class="homepage-content-description font500">Necessitas de limpar o mais rapido possivel</span> <!-- descricao do conteudo -->


                <a class="homepage-content-link-item gradient-background gradient-border shadow white font600" href="desafios.php">desafios</a> <!-- hiperligaçao de cada pagina; #links = #login -->


            </div>

        </div>
        <!-- CHALLENGES -->

        <!-- COLECTIONS -->
        <div id="colecoes" class="home-hide-content homepage-content">

            <div class="homepage-content-elements">

                <div class="homepage-content-lines flex-row">
                    <div class="homepage-content-line gradient-border-homepage"> line1</div>
                    <img class="homepage-content-icon" src="../img/icon/colecoes_home.png"> <!-- icon de cada conteudo (desafio, premio, colecao, etc) css: colocar por cima da div "lines" -->
                    <div class="homepage-content-line gradient-border-homepage"> lin2</div>
                </div>


                <span class="homepage-content-description font500">Necessitas de limpar o mais rapido possivel</span> <!-- descricao do conteudo -->


                <a class="homepage-content-link-item gradient-background gradient-border shadow white font600" href="colecoes.php">coleções</a> <!-- hiperligaçao de cada pagina; #links = #login -->


            </div>

        </div>
        <!-- COLECTIONS -->

        <!-- AWARDS -->
        <div id="premios" class="home-hide-content homepage-content">

            <div class="homepage-content-elements">

                <div class="homepage-content-lines flex-row">
                    <div class="homepage-content-line gradient-border-homepage"> line1</div>
                    <img class="homepage-content-icon" src="../img/icon/premios_home.png"> <!-- icon de cada conteudo (desafio, premio, colecao, etc) css: colocar por cima da div "lines" -->
                    <div class="homepage-content-line gradient-border-homepage"> lin2</div>
                </div>


                <span class="homepage-content-description font500">Necessitas de limpar o mais rapido possivel</span> <!-- descricao do conteudo -->


                <a class="homepage-content-link-item gradient-background gradient-border shadow white font600" href="premios.php">prêmios</a> <!-- hiperligaçao de cada pagina; #links = #login -->


            </div>

        </div>
        <!-- AWARDS -->

        <?php include "../components/public/baus.php"; ?>

        <!-- menu -->
        <div id="main-menu" class="back-style pointer">

            <div id="hide-menu" class="hide-menu" onclick="close_menu_home()">&nbsp;</div>



            <div id="main-menu-itens" class="main-menu-style">

                <div id="profile-menu" class="profile-menu-style">
                    <?php include "../components/public/profile_details.php"; ?>
                </div>

                <div id="menu" class="menu-pages border"><!-- responsive mode: width 15% -->

                    <ul id="menu-pages" style="padding-left: 0.3em">

                        <li class="home-page lineT stroke2">
                            <a href="homepage.php" class="home flex-row">
                                <img class="menu-icon" src="../img/icon/menu-home.png">
                                <span class="home-text menu-text">PÁGINA PRINCIPAL</span></a>
                            <img id="arrow" onclick="hide_main_pages()" class="menu-icon-arrow pointer" src="../img/icon/arrow_down.png">
                            <img id="arrow-up" onclick="show_main_pages()" class="arrow-up pointer" src="../img/icon/arrow_up.png"></li><!--icon e seta-->

                        <li id="main-pages" class="lineT stroke2">

                            <ul id="pages"> <!-- pages -->

                                <li class="lineB stroke1"><a href="../public/homepage.php#desafio-do-dia" onclick="close_menu_home()"><span>DESAFIO DO DIA</span></a></li>
                                <li class="lineB stroke1"><a href="../public/homepage.php#baus" onclick="close_menu_home()"><span>BAÚS</span></a></li>
                                <li class="lineB stroke1"><a href="../public/desafios.php"><span>DESAFIOS</span></a></li>
                                <li class="lineB stroke1"><a href="../public/colecoes.php"><div><span>COLEÇÕES</span></a></li>
                                <li><a href="../public/premios.php"><span>PRÊMIOS</span></a></li>

                            </ul>

                        </li>

                        <li id="notification-line" class="pages lineB lineT stroke2"><img class="menu-icon" src="../img/icon/notifications.png">
                            <span class="menu-text">NOVIDADES</span>
                            <div class="main-new gray font600 text-center">0</div>
                            <img id="arrow-notifications" onclick="hide_notifications()"  class="menu-icon-arrow pointer" src="../img/icon/arrow_down.png">
                            <img id="arrow-notifications-up" onclick="show_notifications()"  class="arrow-up pointer" src="../img/icon/arrow_up.png">
                        </li>

                        <li id="main-pages">

                            <ul id="notification-pages">
                                <li class="pages-item lineB stroke1">
                                    <a class="notification-pages-item flex-row" href="../public/desafios.php"><span>DESAFIOS</span>
                                        <div class="new gray font600 text-center">0</div></a></li>
                                <li class="pages-item">
                                    <a class="notification-pages-item flex-row" href="../public/premios.php"><span>PRÊMIOS</span>
                                        <div class="new gray font600 text-center">0</div></a></li>
                            </ul>

                        </li>

                        <li class="lineB lineT stroke2"><a class="flex-row" href="../public/info.php"><img class="menu-icon" src="../img/icon/help.png"><span class="click-area">AJUDA</span></a></li><!--icon-->

                        <li class="lineB stroke2"><a class="flex-row" href=""><img class="menu-icon" src="../img/icon/out.png"><span class="click-area">SAIR</span></a></li><!--icon-->

                    </ul>

                </div>

            </div>

        </div>
        <!-- menu -->

    </div>
</div>

<script type="text/javascript" src="../js/verifications.js"></script>
<script type="text/javascript" src="../js/baus.js"></script>
<script type="text/javascript" src="../js/modal.js"></script>

</body>