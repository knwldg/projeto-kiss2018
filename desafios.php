<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="css/style.css">

    <title>Desafios</title>
</head>

<body>


    <div id="background" class="background"><!-- quando clicar no desafio -> background-color: gray -->

            <div class="flex-column">

                <?php include "components/public/header.php"; ?><!-- quando clicar no desafio -> z-index: -1 -->

                <!-- barra que aparece em cima dos elementos recentes/antigos -->

                <?php include "components/public/barra_recente_antigo.php"; ?>

                <!-- barra que aparece em cima dos elementos recentes/antigos -->


                    <div id="desafio" class="desafio-premios-colecoes flex-column shadow">

                        <div id="hide-desafio-content" class="hide-desafio"><!-- quando clicar no desafio -> display: none -->

                            <span class="font800 desafio-title">Mantém o espaço limpo!</span>

                            <div class="desafio-content-items flex-row">
                                <img src="img/marca/logo-320w.svg" class="desafio-logo">
                                <span class="font800 desafio-subtitle">Desafio:</span>
                                <span class="font500 desafio-description">Descrição do Desafio para ouvir algo fuixe di fh d </span>
                            </div>

                            <div class="challenge-time-keys font500 desafio-time-keys">
                                <!-- icon time --> <span class="challenge-time"><img class="time" src="img/icon/relogio.png">14:00 - 14:35</span>
                                <img class="challenge-keys" src="img/icon/chave_laranja.png">
                            </div>

                        </div>
                            <!-- yes or not -->

                            <div class="flex-row yes-or-not yes-or-not-display"><!-- quando clicar no desafio -> .yes-or-not-display -> display: flex -->
                                <div id="accept" class="flex"><img class="yes-or-not-item pointer" src="img/icon/yes.png"></div><!-- aceitar o desafio -->
                                <div class="flex"><img class="yes-or-not-item yes-or-not-item-padding" src="img/icon/divisoria.png"></div>
                                <div id="reject" class="flex"><img class="yes-or-not-item yes-or-not-item-width pointer" src="img/icon/no.png"></div><!-- rejeitar o desafio -->
                            </div>


                            <!-- yes or not -->

                </div>

                <img class="chest_down" src=""/>

        </div>

    </div>



</body>