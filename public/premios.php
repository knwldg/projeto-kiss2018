<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="../css/style.css">

    <title>Prémios</title>
</head>

<body>

<div class="background">

    <div class="flex-column">

        <?php include "../components/public/header.php"; ?>

        <!-- barra que aparece em cima dos elementos recentes/antigos -->

        <?php include "../components/public/barra_recente_antigo.php"; ?>

        <!-- barra que aparece em cima dos elementos recentes/antigos -->

        <div class="desafio-premios-colecoes flex-column shadow">

            <div class="premios-title flex-row">

                    <span class="premios-title-size font800 orange">ALMOÇO<span id="premios-subtitle" class="premios-subtitle font600 gray">(5/5)</span></span><!-- quantidade de cartas desbloqueadas -->


                <div class="premios-unlock flex-column">
                    <img id="premios-unlock-logo" class="premios-unlock-logo" src="../img/marca/logo-480w.svg" ><!-- colecao bloqueada -> opacity: 0.4 -->
                    <span id="premios-unlock-title" class="premios-unlock-title font500 orange">CONCLUÍDO</span><!-- colecao bloqueada -> display: none -->
                </div>

            </div>

            <div class="colection flex-row">
                <!-- array das cartas -->
                <img class="carta-size" src="../img/cartas/equipa/frente/equipa1.png">
                <img class="carta-size" src="../img/cartas/equipa/frente/equipa2.png">
                <img class="carta-size" src="../img/cartas/equipa/frente/equipa3.png">
                <img class="carta-size" src="../img/cartas/equipa/frente/equipa4.png">
                <img class="carta-size" src="../img/cartas/equipa/frente/equipa5.png">

            </div>

            <div class="colection-numbers flex-row">

            </div>

        </div>

        <!--<img class="chest_down" src="">-->

    </div>
</div>


</body>