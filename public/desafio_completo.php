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
                <a href="desafios.php" id="voltar" class="voltar pointer"><img class="voltar-size" src="../img/icon/voltar.svg"></a>
                <span class="white font600">voltar</span>
            </div>

        </div>

        <div class="general-box flex-column shadow">

            <!-- animacao - enviado com sucesso -->

            <div class="verification flex-column">

                <div id="verificacao-animacao" class="verification-animation"><!-- nao enviado -> display: none -->
                    <object>
                        <embed id="verificacao" src="../img/icon/verification.svg">
                    </object>
                </div>

                <div class="verification-fade-in flex-column"><!-- nao enviado -> animation-duration: 1s; animation-delay: 0 -->

                    <span id="verificacao-titulo" class="desafio-detalhe-title verification-title font800 green">ENVIADO COM SUCESSO!</span> <!-- nao enviado -> color: #FF0000;  -->


                    <span id="verificacao-tempo" class="verification-time flex-row challenge-time green font500">
                        <img id="relogio-sem-sucesso" class="time verification-time-width" src="../img/icon/relogio_verde.png">15:00</span>  <!-- nao enviado -> color: #FF0000; src="../img/icon/relogio_vermelho.png" -->


                </div>

            </div>

            <div class="verification-fade-in flex-column"><!-- nao enviado -> animation-duration: 1s animation-delay: 0 -->
                <div id="verificacao-fotos" class="images-preview flex-row">
                    <div class="flex-column center-items"><span class="verification-images-preview-title green font500">antes</span><img class="clip-mask" src="../img/preview-images/antes.jpg"></div>
                    <div class="flex-column center-items"><span class="verification-images-preview-title green font500">depois</span><img class="clip-mask" src="../img/preview-images/depois.jpg"></div>
                </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">

/*
    document.getElementById("verificacao").src="../img/icon/verification_error.svg";

    elements_color = document.getElementsByClassName("green");
    for (var i = 0; i < elements_color.length; i++) {
        elements_color[i].style.color="#ff0000";
    }

    elements_photo = document.getElementsByClassName("clip-mask");
    for (var x = 0; x < elements_photo.length; x++) {
        elements_photo[x].style.filter="blur(4px)";
    }

    document.getElementById("verificacao-titulo").innerHTML ="ENVIADO SEM SUCESSO!";
    document.getElementById("relogio-sem-sucesso").src="../img/icon/relogio_vermelho.png";
    document.getElementById("verificacao-tempo").innerHTML ="--";
*/




</script>


</body>
</html>