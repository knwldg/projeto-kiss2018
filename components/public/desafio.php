<?php

global $challengeList;

listChallenges(); ?>

<?php for($i=0; $i < sizeof($challengeList); $i++){

    $id = $challengeList[$i][0];
    $title = $challengeList[$i][1];
    $preview = $challengeList[$i][2];
    $description = $challengeList[$i][3];
    $category = $challengeList[$i][4];

    $_SESSION['title'] = $title;
    $_SESSION['description'] = $description;

    ?>

<div id="desafio<?php echo "$id" ?>" class="desafio-premios-colecoes flex-column shadow"> <!-- yes_or_not(document.getElementsByClassName('yes-or-not-display')[0],document.getElementsByClassName('hide-desafio')[0]) -->

    <!-- desafio -->

    <div id="hide-desafio-content<?php echo "$id" ?>"  class="hide-desafio" onclick="get_id(<?php echo "$id" ?>)"><!-- quando clicar no desafio -> display: none -->

        <span class="font800 desafio-title"><?php echo "$title" ?></span>

        <div class="desafio-content-items flex-row">
            <img src="../../img/icon/<?php echo "$category" ?>.png" class="desafio-logo">
            <span class="font800 desafio-subtitle">Desafio:</span>
            <span class="font500 desafio-description"><?php echo "$preview" ?></span>
        </div>

        <div class="challenge-time-keys flex-row font500 desafio-time-keys">
            <!-- icon time --> <span class="challenge-time flex-row orange"><img class="time" src="../../img/icon/relogio.png">14:00 - 14:35</span>
            <img class="challenge-keys" src="../../img/icon/chave_laranja.png">
        </div>

    </div>

    <!-- desafio -->

    <!-- yes or not -->
    <div id="modal<?php echo "$id" ?>" class="flex-row yes-or-not yes-or-not-display"><!-- quando clicar no desafio -> .yes-or-not-display -> display: flex -->
        <div id="accept" class="text-center"><a href="../../public/desafio_detalhe.php"><img class="yes-or-not-item pointer" src="../../img/icon/yes.png"></a></div><!-- aceitar o desafio -->
        <div class="text-center"><img class="yes-or-not-item yes-or-not-item-padding" src="../../img/icon/divisoria.png"></div>
        <div id="reject" onclick="rejeitar_desafio(<?php echo "$id" ?>)" class="text-center"><img class="yes-or-not-item yes-or-not-item-width pointer" src="../../img/icon/no.png"></div><!-- rejeitar o desafio -->
    </div>
    <!-- yes or not -->

    <!-- lista de fotos enviadas -->
    <div id="lista-fotos<?php echo "$id" ?>" class="lista-fotos-conteudo flex-column">
        <div class="flex-row">
            <div class="lista-fotos-size flex-column center-items">
                <span class="verification-images-preview-title orange font700">antes</span>
                <img id="lista-fotos-antes" class="clip-mask" src="../../img/preview-images/antes.jpg">
            </div>
            <div class="lista-fotos-size flex-column center-items"><span class="verification-images-preview-title orange font700">depois</span>
                <img id="lista-fotos-depois" class="clip-mask" src="../../img/preview-images/depois.jpg">
            </div>
        </div>

        <div class="validar-reportar flex-row">
            <button onclick="validado(<?php echo "$id" ?>)" id="validar" class="btn validar pointer">&nbsp</button>
            <button onclick="reportado(<?php echo "$id" ?>)" id="reportar" class="btn reportar pointer">&nbsp</button>
        </div>
    </div>

    <!-- validado/reportado -->
    <div id="lista-fotos-fundo<?php echo "$id" ?>" class="lista-fotos-fundo flex">

        <div id="lista-fotos-validar-reportar<?php echo "$id" ?>" class="lista-fotos-validar-reportar verification flex-column">

            <div id="verificacao-animacao-lista-fotos" class="verification-animation-lista-fotos">
                <object>
                    <embed id="verificacao<?php echo "$id" ?>" src="">
                </object>
            </div>

            <div class="verification-fade-in-fotos flex-column">
                <span id="verificacao-titulo<?php echo "$id" ?>" class="desafio-detalhe-title verification-title-lista-fotos font800 green"></span>
            </div>

        </div>
        <!-- validado/reportado -->
    </div>
    <!-- lista de fotos enviadas -->


</div>

<?php } ?>


