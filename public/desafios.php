<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="../css/style.css">

    <title>Desafios</title>
</head>

<body>


    <div id="background" class="desafio-background"><!-- quando clicar no desafio -> background-color: gray -->

            <div id="hide-content" class="flex-column position-chest">

                <?php include "../components/public/header.php"; ?><!-- quando clicar no desafio -> z-index: -1 -->

                <!-- barra que aparece em cima dos elementos recentes/antigos -->

                <?php include "../components/public/barra_recente_antigo.php"; ?>

                <!-- barra que aparece em cima dos elementos recentes/antigos -->


                <div id="desafio" class="desafio-premios-colecoes flex-column shadow" onclick="yes_or_not()"> <!-- yes_or_not(document.getElementsByClassName('yes-or-not-display')[0],document.getElementsByClassName('hide-desafio')[0]) -->

                        <div id="hide-desafio-content"  class="hide-desafio" onclick="get_id(this.id)"><!-- quando clicar no desafio -> display: none -->

                            <span class="font800 desafio-title">Mantém o espaço limpo!</span>

                            <div class="desafio-content-items flex-row">
                                <img src="../img/marca/logo-320w.svg" class="desafio-logo">
                                <span class="font800 desafio-subtitle">Desafio:</span>
                                <span class="font500 desafio-description">Descrição do Desafio para ouvir algo fuixe di fh d </span>
                            </div>

                            <div class="challenge-time-keys flex-row font500 desafio-time-keys">
                                <!-- icon time --> <span class="challenge-time flex-row orange"><img class="time" src="../img/icon/relogio.png">14:00 - 14:35</span>
                                <img class="challenge-keys" src="../img/icon/chave_laranja.png">
                            </div>

                        </div>
                            <!-- yes or not -->

                            <div id="modal" class="flex-row yes-or-not yes-or-not-display"><!-- quando clicar no desafio -> .yes-or-not-display -> display: flex -->
                                <div id="accept" class="flex"><a href=""><img class="yes-or-not-item pointer" src="../img/icon/yes.png"></a></div><!-- aceitar o desafio -->
                                <div class="flex"><img class="yes-or-not-item yes-or-not-item-padding" src="../img/icon/divisoria.png"></div>
                                <div id="reject" class="flex"><img class="yes-or-not-item yes-or-not-item-width pointer" src="../img/icon/no.png"></div><!-- rejeitar o desafio -->
                            </div>

                            <!-- yes or not -->
                    </div>

                <div id="desafio" class="desafio-premios-colecoes flex-column shadow" onclick="yes_or_not()"> <!-- yes_or_not(document.getElementsByClassName('yes-or-not-display')[0],document.getElementsByClassName('hide-desafio')[0]) -->

                    <div id="hide-desafio-content" class="hide-desafio" onclick="get_id(this.id)"><!-- quando clicar no desafio -> display: none -->

                        <span class="font800 desafio-title">Mantém o espaço limpo!</span>

                        <div class="desafio-content-items flex-row">
                            <img src="../img/marca/logo-320w.svg" class="desafio-logo">
                            <span class="font800 desafio-subtitle">Desafio:</span>
                            <span class="font500 desafio-description">Descrição do Desafio para ouvir algo fuixe di fh d </span>
                        </div>

                        <div class="challenge-time-keys flex-row font500 desafio-time-keys">
                            <!-- icon time --> <span class="challenge-time flex-row orange"><img class="time" src="../img/icon/relogio.png">14:00 - 14:35</span>
                            <img class="challenge-keys" src="../img/icon/chave_laranja.png">
                        </div>

                    </div>
                    <!-- yes or not -->

                    <div id="modal" onload="get_id_modal(this.id)" class="flex-row yes-or-not yes-or-not-display"><!-- quando clicar no desafio -> .yes-or-not-display -> display: flex -->
                        <div id="accept" class="flex"><a href=""><img class="yes-or-not-item pointer" src="../img/icon/yes.png"></a></div><!-- aceitar o desafio -->
                        <div class="flex"><img class="yes-or-not-item yes-or-not-item-padding" src="../img/icon/divisoria.png"></div>
                        <div id="reject" class="flex"><img class="yes-or-not-item yes-or-not-item-width pointer" src="../img/icon/no.png"></div><!-- rejeitar o desafio -->
                    </div>

                    <!-- yes or not -->
                </div>

                <div id="desafio" class="desafio-premios-colecoes flex-column shadow" onclick="yes_or_not()"> <!-- yes_or_not(document.getElementsByClassName('yes-or-not-display')[0],document.getElementsByClassName('hide-desafio')[0]) -->

                    <div id="hide-desafio-content" class="hide-desafio"><!-- quando clicar no desafio -> display: none -->

                        <span class="font800 desafio-title">Mantém o espaço limpo!</span>

                        <div class="desafio-content-items flex-row">
                            <img src="../img/marca/logo-320w.svg" class="desafio-logo">
                            <span class="font800 desafio-subtitle">Desafio:</span>
                            <span class="font500 desafio-description">Descrição do Desafio para ouvir algo fuixe di fh d </span>
                        </div>

                        <div class="challenge-time-keys flex-row font500 desafio-time-keys">
                            <!-- icon time --> <span class="challenge-time flex-row orange"><img class="time" src="../img/icon/relogio.png">14:00 - 14:35</span>
                            <img class="challenge-keys" src="../img/icon/chave_laranja.png">
                        </div>

                    </div>
                    <!-- yes or not -->

                    <div id="modal" class="flex-row yes-or-not yes-or-not-display"><!-- quando clicar no desafio -> .yes-or-not-display -> display: flex -->
                        <div id="accept" class="flex"><a href=""><img class="yes-or-not-item pointer" src="../img/icon/yes.png"></a></div><!-- aceitar o desafio -->
                        <div class="flex"><img class="yes-or-not-item yes-or-not-item-padding" src="../img/icon/divisoria.png"></div>
                        <div id="reject" class="flex"><img class="yes-or-not-item yes-or-not-item-width pointer" src="../img/icon/no.png"></div><!-- rejeitar o desafio -->
                    </div>

                    <!-- yes or not -->
                </div>

                <div id="desafio" class="desafio-premios-colecoes flex-column shadow" onclick="yes_or_not()"> <!-- yes_or_not(document.getElementsByClassName('yes-or-not-display')[0],document.getElementsByClassName('hide-desafio')[0]) -->

                    <div id="hide-desafio-content" class="hide-desafio"><!-- quando clicar no desafio -> display: none -->

                        <span class="font800 desafio-title">Mantém o espaço limpo!</span>

                        <div class="desafio-content-items flex-row">
                            <img src="../img/marca/logo-320w.svg" class="desafio-logo">
                            <span class="font800 desafio-subtitle">Desafio:</span>
                            <span class="font500 desafio-description">Descrição do Desafio para ouvir algo fuixe di fh d </span>
                        </div>

                        <div class="challenge-time-keys flex-row font500 desafio-time-keys">
                            <!-- icon time --> <span class="challenge-time flex-row orange"><img class="time" src="../img/icon/relogio.png">14:00 - 14:35</span>
                            <img class="challenge-keys" src="../img/icon/chave_laranja.png">
                        </div>

                    </div>
                    <!-- yes or not -->

                    <div id="modal" class="flex-row yes-or-not yes-or-not-display"><!-- quando clicar no desafio -> .yes-or-not-display -> display: flex -->
                        <div id="accept" class="flex"><a href=""><img class="yes-or-not-item pointer" src="../img/icon/yes.png"></a></div><!-- aceitar o desafio -->
                        <div class="flex"><img class="yes-or-not-item yes-or-not-item-padding" src="../img/icon/divisoria.png"></div>
                        <div id="reject" class="flex"><img class="yes-or-not-item yes-or-not-item-width pointer" src="../img/icon/no.png"></div><!-- rejeitar o desafio -->
                    </div>

                    <!-- yes or not -->
                </div>

                <div id="desafio" class="desafio-premios-colecoes flex-column shadow" onclick="yes_or_not()"> <!-- yes_or_not(document.getElementsByClassName('yes-or-not-display')[0],document.getElementsByClassName('hide-desafio')[0]) -->

                    <!-- desafio -->
                    <div id="hide-desafio-content" class="hide-desafio"><!-- quando clicar no desafio -> display: none -->

                        <span class="font800 desafio-title">Mantém o espaço limpo!</span>

                        <div class="desafio-content-items flex-row">
                            <img src="../img/marca/logo-320w.svg" class="desafio-logo">
                            <span class="font800 desafio-subtitle">Desafio:</span>
                            <span class="font500 desafio-description">Descrição do Desafio para ouvir algo fuixe di fh d </span>
                        </div>

                        <div class="challenge-time-keys flex-row font500 desafio-time-keys">
                            <!-- icon time --> <span class="challenge-time flex-row orange"><img class="time" src="../img/icon/relogio.png">14:00 - 14:35</span>
                            <img class="challenge-keys" src="../img/icon/chave_laranja.png">
                        </div>

                    </div>
                    <!-- desafio -->

                    <!-- yes or not -->

                    <div id="modal" class="flex-row yes-or-not yes-or-not-display"><!-- quando clicar no desafio -> .yes-or-not-display -> display: flex -->
                        <div id="accept" class="flex"><a href=""><img class="yes-or-not-item pointer" src="../img/icon/yes.png"></a></div><!-- aceitar o desafio -->
                        <div class="flex"><img class="yes-or-not-item yes-or-not-item-padding" src="../img/icon/divisoria.png"></div>
                        <div id="reject" class="flex"><img class="yes-or-not-item yes-or-not-item-width pointer" src="../img/icon/no.png"></div><!-- rejeitar o desafio -->
                    </div>

                    <!-- yes or not -->
                </div>


                <div id="div-baus" class="baus flex-column">

                    <div id="hide-chests" class="text-center flex-column">

                        <span class="div-baus-title font700 white">Escolhe um báu</span>

                        <div class="chest-line flex-row">
                            <div class="chest-line-item"><img class="chest-line-item-img" src="../img/icon/chest.png"></div>
                            <div class="chest-line-item"><img class="chest-line-item-img" src="../img/icon/chest.png"></div>
                            <div id="chest-line-item" onclick="open_chest(this.id)" class="chest-line-item"><img class="chest-line-item-img" src="../img/icon/chest.png"></div>
                        </div>
                        <div class="chest-line flex-row">
                            <div class="chest-line-item"><img class="chest-line-item-img" src="../img/icon/chest.png"></div>
                            <div class="chest-line-item"><img class="chest-line-item-img" src="../img/icon/chest.png"></div>
                            <div class="chest-line-item"><img class="chest-line-item-img" src="../img/icon/chest.png"></div>
                        </div>
                        <div class="chest-line flex-row">
                            <div class="chest-line-item"><img class="chest-line-item-img" src="../img/icon/chest.png"></div>
                            <div class="chest-line-item"><img class="chest-line-item-img" src="../img/icon/chest.png"></div>
                            <div class="chest-line-item"><img class="chest-line-item-img" src="../img/icon/chest.png"></div>
                        </div>

                    </div>


                    <!-- animacao do bau -->

                    <div id="chest-animation" class="chest-animation flex">
                        <div id="animation" class="chest-animation-item flex bau-verde"></div>
                        <p class="chest-animation-item-img"></p>
                    </div>

                    <!-- animacao do bau -->

            </div>

                <div id="chest" class="chest" onclick="open_baus()">
                    <img id="chest-img" class="icon-bau" src="../img/icon/icon_chest.png"/>
                </div>

                <div id="chest-close-baus" class="chest-close-baus chest" onclick="close_baus()">
                    <img class="icon-bau" src="../img/icon/close_baus.png"/>
                </div>

        </div>



    </div>

<script type="text/javascript">



function open_chest(id_chest) {


    document.getElementById("hide-chests").style.display = "none";
    document.getElementById("div-baus").style.backgroundColor = "#F9FAFB";
    document.getElementById("chest-animation").style.display = "flex";
    document.getElementById("chest-close-baus").style.display = "none";
    document.getElementById("chest").style.zIndex = "-1";

    /*
        window.location = "http://localhost/projeto-kiss2018/public/colecoes.php";
*/
}

function open_baus() {

    var hide_desafios;


    document.getElementById("background").style.backgroundColor = "rgba(140, 140, 140, 0.75)";

    document.getElementById("header").style.zIndex = "-1";

    hide_desafios = document.getElementsByClassName("desafio-premios-colecoes");

    for (var x = 0; x < hide_desafios.length; x++) {

        hide_desafios[x].style.position = "relative";
        hide_desafios[x].style.zIndex = "-1";
    }

    document.getElementById("div-baus").style.display = "flex";

    document.getElementById("chest-close-baus").style.display = "block";

}

function close_baus() {

    var show_desafios;

    document.getElementById("background").style.backgroundColor = "rgba(249, 250, 251, 0.75)";
    document.getElementById("header").style.zIndex = "0";

    show_desafios = document.getElementsByClassName("desafio-premios-colecoes");

    for (var i = 0; i < show_desafios.length; i++) {

        show_desafios[i].style.position = "relative";
        show_desafios[i].style.zIndex = "0";
    }

    document.getElementById("div-baus").style.display = "none";

    document.getElementById("chest-close-baus").style.display = "none";

}


function get_id(clicked_id) {

        document.getElementById(clicked_id).style.display = "none";
        document.getElementById("modal").style.display = "flex";
}

function yes_or_not() {

    var hide_desafios;

    hide_desafios = document.getElementsByClassName("hide-desafio");

    for (var x = 0; x < hide_desafios.length; x++) {

        hide_desafios[x].style.position = "relative";
        hide_desafios[x].style.zIndex = "-1";
    }

    document.getElementById("background").style.backgroundColor = "rgba(140,140,140,0.75)";
    document.getElementById("header").style.zIndex = "-1";

}


</script>



</body>