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

    <title>Desafio - Completo</title>
</head>


<body>

<div class="background">

    <div class="background-color">

        <div class="flex login-logo">

            <div class="flex-column">
                <a href="desafios.php" id="voltar" class="voltar pointer"><img class="voltar-size" src="../img/icon/voltar_branco.png"></a>
                <span class="white font600">voltar</span>
            </div>

        </div>

        <div class="general-box flex-column shadow">

            <div class="verification flex-column">

                <div id="verificacao-animacao" class="verification-animation"><!-- nao enviado -> display: none -->
                    <object>
                        <embed id="verificacao" src="">
                    </object>
                </div>

                <div class="verification-fade-in flex-column">

                    <span id="verificacao-titulo" class="desafio-detalhe-title verification-title font800 color"></span>


                    <span id="verificacao-tempo" class="verification-time flex-row challenge-time color font500">
                        <img id="relogio-sem-sucesso" class="time verification-time-width" src="../img/icon/relogio_verde.png"></span>


                </div>

            </div>

            <div class="verification-fade-in flex-column">
                <div id="verificacao-fotos" class="images-preview flex-row">
                    <div class="flex-column center-items"><span class="verification-images-preview-title color font500">antes</span><img class="clip-mask" src="../img/preview-images/antes.jpg"></div>
                    <div class="flex-column center-items"><span class="verification-images-preview-title color font500">depois</span><img class="clip-mask" src="../img/preview-images/depois.jpg"></div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--<script type="text/javascript" src="../js/fotos_enviadas.js"></script>-->


</body>
</html>