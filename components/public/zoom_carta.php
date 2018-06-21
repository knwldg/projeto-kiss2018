<div id="pop-up-carta-img" class="pop-up-carta-img zoom-img flex-column">

    <div class="flex-column text-center">
        <a href="" onclick="close_baus()" id="voltar" class="voltar pointer"><img class="voltar-size" src="../../img/icon/voltar.png"></a>
        <span class="black font600">voltar</span>
    </div>

    <div id="flipper" class="flipper flex">
        <div class="aviso flex">
            <h3 class="aviso-title font700">clica na carta para virar</h3>
        </div>
        <div id="front" onclick="flip_back()" class="front pop-up-carta-zoom pointer">&nbsp</div>

        <div id="back" onclick="flip_front()" class="back pop-up-carta-zoom flex-column pointer">
            <h4 class="font700">Maria Almeida</h4>
            <p class="back-descricao font500">eu sou muito linda e gosto muito de ir a praia</p>
        </div>
    </div>

    <div id="level-up" class="chest level"></div>

</div>

<script type="text/javascript">

    document.getElementById("front").style.background = "url('../img/cartas/equipa/frente/equipa1.png') no-repeat center";
    document.getElementById("front").style.backgroundSize = "98%";
    document.getElementById("back").style.background = "url('../img/cartas/equipa/tras/branco.png') no-repeat center";
    document.getElementById("back").style.backgroundSize = "98%";


    function flip_back() {

        document.getElementById("flipper").style.transform = "rotateY(180deg)";
        document.getElementById("front").style.backgroundSize = "rotateY(180deg)";

    }

    function flip_front() {

        document.getElementById("flipper").style.transform = "rotateY(0)";
        document.getElementById("back").style.backgroundSize = "rotateY(0)";

    }

</script>
