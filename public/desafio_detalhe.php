<?php

session_start();

require_once "../components/php/connection.php";
require_once "../components/php/challengeControl.php";

$title = $_GET['t'];
$description = $_GET['d'];

?>
<!DOCTYPE html>
<html>

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
                <a href="desafios.php" id="voltar" class="voltar pointer"><img class="voltar-size" src="../img/icon/voltar_branco.png"></a>
                <span class="white font600">voltar</span>
            </div>

        </div>

        <div class="general-box flex-column shadow">

            <span class="desafio-detalhe-title font800 orange"><?php echo"$title"; ?></span>

            <div class="lines-content flex-row">
                <div class="line-desafio-detalhe-width line-desafio-detalhe-border"> </div>

                <span class="line-desafio-detalhe-title font800 letter-spacing">DESAFIO</span><!-- muda comforme a data do elemento submetido -->

                <div class="line-desafio-detalhe-width line-desafio-detalhe-border"> </div>
            </div>

            <!-- descricao do desafio -->

            <p class="description-content gray font500"><?php echo"$description"; ?></p>

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
                    <span class="orange font500">antes</span>
                    <button type="button" onclick="enviado_antes()" class="fotos-antes-depois pointer"><img id="foto-antes" src="../img/icon/take_photo.png"></button>
                </div> <!-- nao tenho certeza do que colocar -->

                <div class="flex-column">
                    <span class="orange font500">depois</span>
                    <a href="desafio_completo.php" type="button" onclick="enviado_depois()" class="fotos-antes-depois pointer"><img id="foto-depois" src="../img/icon/take_photo.png"></a>
                </div> <!-- nao tenho certeza do que colocar -->
            </div>

            <!-- fotos antes e depois -->

            <!-- foto tirada -->

            <div></div>

            <!-- fotos tirada -->

        </div>
    </div>
</div>

<script>
    function enviado_antes() {
        document.getElementById("foto-antes").src ="../img/icon/send_photo.png";
    }

    function enviado_depois() {
        document.getElementById("foto-depois").src ="../img/icon/send_photo.png";
    }
</script>

</body>
</html>