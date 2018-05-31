<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="css/style.css">

    <title>Coleções</title>
</head>

<body>

<div class="background">

    <div class="flex-column">

        <?php include "components/public/header.php"; ?>

        <!-- barra que aparece em cima dos elementos recentes/antigos -->

        <?php include "components/public/barra_recente_antigo.php"; ?>

        <!-- barra que aparece em cima dos elementos recentes/antigos -->

        <div class="desafio flex-column">

            <div class="premios-title flex-row">

                    <span class="premios-title-size font800 orange equipa-color">EQUIPA</span>
                <span id="premios-subtitle" class="premios-subtitle font600 gray">(5/5)</span><!-- quantidade de cartas desbloqueadas -->

                <div class="premios-unlock flex-column">
                    <img id="premios-unlock-logo" class="premios-unlock-logo" src="img/marca/logo.png" ><!-- colecao bloqueada -> opacity: 0.4 -->
                    <span id="premios-unlock-title" class="premios-unlock-title font600 orange">CONCLUÍDO</span><!-- colecao bloqueada -> display: none -->
                </div>

            </div>

            <div class="colection flex-row font700 equipa-color">
                <!-- array das cartas -->
                <div class="carta flex-column"><img class="carta-size" src="img/cartas/equipa/frente/equipa1.png"><span class="colection-numbers">0</span></div>
                <div class="carta flex-column"><img class="carta-size" src="img/cartas/equipa/frente/equipa2.png"><span class="colection-numbers">0</span></div>
                <div class="carta flex-column"><img class="carta-size" src="img/cartas/equipa/frente/equipa3.png"><span class="colection-numbers">0</span></div>
                <div class="carta flex-column"><img class="carta-size" src="img/cartas/equipa/frente/equipa4.png"><span class="colection-numbers">0</span></div>
                <div class="carta flex-column"><img class="carta-size" src="img/cartas/equipa/frente/equipa5.png"><span class="colection-numbers">0</span></div>

            </div>

        </div>

        <!--<img class="chest_down" src="">-->

    </div>
</div>


</body>
