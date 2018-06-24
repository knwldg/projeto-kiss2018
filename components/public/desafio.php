<?php

    
?>
<div id="desafio" class="desafio-premios-colecoes flex-column shadow"> <!-- yes_or_not(document.getElementsByClassName('yes-or-not-display')[0],document.getElementsByClassName('hide-desafio')[0]) -->

    <!-- desafio -->

    <div id="hide-desafio-content"  class="hide-desafio" onclick="get_id(this.id)"><!-- quando clicar no desafio -> display: none -->

        <span class="font800 desafio-title">Mantém o espaço limpo!</span>

        <div class="desafio-content-items flex-row">
            <img src="../../img/marca/simbolo-800w.png" class="desafio-logo">
            <span class="font800 desafio-subtitle">Desafio:</span>
            <span class="font500 desafio-description">Descrição do Desafio para ouvir algo fuixe di fh d </span>
        </div>

        <div class="challenge-time-keys flex-row font500 desafio-time-keys">
            <!-- icon time --> <span class="challenge-time flex-row orange"><img class="time" src="../../img/icon/relogio.png">14:00 - 14:35</span>
            <img class="challenge-keys" src="../../img/icon/chave_laranja.png">
        </div>

    </div>

    <!-- desafio -->

    <!-- yes or not -->
    <div id="modal" class="flex-row yes-or-not yes-or-not-display"><!-- quando clicar no desafio -> .yes-or-not-display -> display: flex -->
        <div id="accept" class="text-center"><a href=""><img class="yes-or-not-item pointer" src="../../img/icon/yes.png"></a></div><!-- aceitar o desafio -->
        <div class="text-center"><img class="yes-or-not-item yes-or-not-item-padding" src="../../img/icon/divisoria.png"></div>
        <div id="reject" class="text-center"><img class="yes-or-not-item yes-or-not-item-width pointer" src="../../img/icon/no.png"></div><!-- rejeitar o desafio -->
    </div>
    <!-- yes or not -->


    <!-- lista de fotos enviadas
    <div id="lista-fotos" class="lista-fotos-conteudo flex-row">
        <div class="flex-column center-items">
            <span class="verification-images-preview-title orange font700">antes</span>
            <img id="lista-fotos-antes" class="clip-mask" src="../../img/preview-images/antes.jpg">
        </div>
        <div class="flex-column center-items"><span class="verification-images-preview-title orange font700">depois</span>
            <img id="lista-fotos-depois" class="clip-mask" src="../../img/preview-images/depois.jpg">
        </div>
        <button onclick="validado()" id="validar" class="btn validar"></button>
        <button onclick="reportado()" id="reportar" class="btn reportar"></button>
    </div>

         validado/reportado
        <div id="lista-fotos-validar-reportar" class="lista-fotos-validar-reportar verification flex-column">

            <div id="verificacao-animacao" class="verification-animation">
                <object>
                    <embed id="verificacao" src="../../img/icon/verification.svg">
                </object>
            </div>

            <div class="verification-fade-in flex-column">
                <span id="verificacao-titulo" class="desafio-detalhe-title verification-title font800 green">VALIDADO!</span>
            </div>

        </div>
         validado/reportado

    lista de fotos enviadas -->


</div>

<div id="desafio1" class="desafio-premios-colecoes flex-column shadow"> <!-- yes_or_not(document.getElementsByClassName('yes-or-not-display')[0],document.getElementsByClassName('hide-desafio')[0]) -->

        <!-- desafio -->

        <div id="hide-desafio-content1"  class="hide-desafio" onclick="get_id(this.id)"><!-- quando clicar no desafio -> display: none -->

            <span class="font800 desafio-title">Mantém o espaço limpo!</span>

            <div class="desafio-content-items flex-row">
                <img src="../../img/marca/simbolo-800w.png" class="desafio-logo">
                <span class="font800 desafio-subtitle">Desafio:</span>
                <span class="font500 desafio-description">Descrição do Desafio para ouvir algo fuixe di fh d </span>
            </div>

            <div class="challenge-time-keys flex-row font500 desafio-time-keys">
                <!-- icon time --> <span class="challenge-time flex-row orange"><img class="time" src="../../img/icon/relogio.png">14:00 - 14:35</span>
                <img class="challenge-keys" src="../../img/icon/chave_laranja.png">
            </div>

        </div>

        <!-- desafio -->

        <!-- yes or not -->

        <div id="modal" class="flex-row yes-or-not yes-or-not-display"><!-- quando clicar no desafio -> .yes-or-not-display -> display: flex -->
            <div id="accept" class="flex"><a href=""><img class="yes-or-not-item pointer" src="../../img/icon/yes.png"></a></div><!-- aceitar o desafio -->
            <div class="flex"><img class="yes-or-not-item yes-or-not-item-padding" src="../../img/icon/divisoria.png"></div>
            <div id="reject" class="flex"><img class="yes-or-not-item yes-or-not-item-width pointer" src="../../img/icon/no.png"></div><!-- rejeitar o desafio -->
        </div>

        <!-- yes or not -->



        <!-- lista de fotos enviadas -->
        <div id="lista-fotos1" class="lista-fotos-conteudo flex-column">
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
                <button onclick="validado()" id="validar" class="btn validar pointer">&nbsp</button>
                <button onclick="reportado()" id="reportar" class="btn reportar pointer">&nbsp</button>
            </div>
        </div>

            <!-- validado/reportado -->
                <div id="lista-fotos-fundo1" class="lista-fotos-fundo flex">

                <div id="lista-fotos-validar-reportar" class="lista-fotos-validar-reportar verification flex-column">

                    <div id="verificacao-animacao-lista-fotos" class="verification-animation-lista-fotos">
                        <object>
                            <embed id="verificacao" src="">
                        </object>
                    </div>

                    <div class="verification-fade-in-fotos flex-column">
                        <span id="verificacao-titulo" class="desafio-detalhe-title verification-title-lista-fotos font800 green"></span>
                    </div>

                </div>
            <!-- validado/reportado -->
                </div>
    <!-- lista de fotos enviadas -->

</div>
