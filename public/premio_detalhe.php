<!DOCTYPE html>
<html>
<?php session_start(); ?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="../css/style.css">

    <title>Prêmio - Detalhe</title>
</head>


<body>

<div class="background">

    <div class="background-color">

        <div class="flex login-logo">

            <div class="flex-column">
                <a href="premios.php" id="voltar" class="voltar pointer"><img class="voltar-size" src="../img/icon/voltar_branco.png"></a>
                <span class="white font600">voltar</span>
            </div>

        </div>

        <div class="general-box flex-column shadow center-items">

            <span class="premio-detalhe-title font800">Que tal um <span class="premio-detalhe-extra">almoço</span>?</span>

            <div class="flex-column">

                <div class="premio-detalhe-colecao flex-row"><!-- colecao1 -->
                    <div class="carta flex"><img class="carta-size" src="../img/cartas/equipa/thumbnail/frente/equipa1.png"></div>
                    <div class="carta flex"><img class="carta-size" src="../img/cartas/equipa/thumbnail/frente/equipa2.png"></div>
                    <div class="carta flex"><img class="carta-size" src="../img/cartas/equipa/thumbnail/frente/equipa3.png"></div>
                    <div class="carta flex"><img class="carta-size" src="../img/cartas/equipa/thumbnail/frente/equipa4.png"></div>
                    <div class="carta flex"><img class="carta-size" src="../img/cartas/equipa/thumbnail/frente/equipa5.png"></div>
                </div>



            </div>

            <span class="line-desafio-detalhe-title font800 letter-spacing">O QUE VAI GANHAR</span>

            <p class="description-content gray font400">Habilita-te a ganhar um almoço na cantina da tua escola</p>

            <span id="premio-detalhe-btn" onclick="" class="detalhe-bau-colecoes premio-detalhe-btn shadow white font700">utilizar</span><!-- bloqueado -> linear-gradient(to right, rgba(247,152,104,0.4) , rgba(246,181,62,0.4)) -->

        </div>
    </div>
</div>




</body>
</html>