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

    <title>Desafio - Detalhe</title>
</head>


<body>

<div class="background">

    <div class="background-color">

        <div class="flex login-logo">

            <div class="flex-column">
                <button type="button" id="voltar" class="voltar pointer"><img class="voltar-size" src="../img/icon/voltar.svg"></button>
                <span class="white font400">voltar</span>
            </div>

        </div>

        <div class="general-box flex-column shadow">

            <span class="desafio-detalhe-title font800 orange">Mantem o espaço limpo!</span>

            <div class="lines-content flex-row">
                <div class="line-desafio-detalhe-width line-desafio-detalhe-border"> </div>

                <span class="line-desafio-detalhe-title font800 letter-spacing">DESAFIO</span><!-- muda comforme a data do elemento submetido -->

                <div class="line-desafio-detalhe-width line-desafio-detalhe-border"> </div>
            </div>

            <!-- descricao do desafio -->

            <p class="description-content gray font400">Lorem ipsum dolor sit amet, taciti  facilisis elit blandit commodo dolor magna. Id suscipit iaculis. Porttitor  aliquam id dui amet pulvinar sed, imperdiet erat ullamcorper nunc dignissim ipsa, dapibus egestas libero, vel sagittis dolorum nibh facilisis morbi rutrum</p>

            <!-- descricao do desafio -->

            <div class="desafio-detalhe-time-keys flex-row">

                <p class="center-item font700 orange">TEMPO RESTANTE <br>
                <span class="size-time font700">25:00</span>
                </p>

                <img class="desafio-detalhe-key center-item"  src="../img/icon/chave_laranja.png">

            </div>

            <!-- fotos antes e depois -->

            <div class="fotos flex-row">
                <div class="flex-column">
                    <span class="orange">antes</span>
                    <button type="button" id="foto-antes" class="fotos-antes-depois pointer"><img src="../img/icon/take_photo.png"></button>
                </div> <!-- nao tenho certeza do que colocar -->

                <div class="flex-column">
                    <span class="orange">depois</span>
                    <button type="button" id="foto-depois" class="fotos-antes-depois pointer"><img src="../img/icon/take_photo.png"></button>
                </div> <!-- nao tenho certeza do que colocar -->
            </div>

            <!-- fotos antes e depois -->

        </div>
    </div>
</div>




</body>
</html>