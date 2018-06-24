<?php
#TODO BUSCAR O USER

global $cardList;

//$carta = getUserCards(1)[0][0];
//$num_cartas = getUserCards(1)[0][1];



//$user = getUserCards(1);//com session (?)
//global $userCollection;

listCards();

/*for($i=0; $i < sizeof($cardList); $i++){

    $colecao = $cardList[$i][3] = 1;

    print_r($colecao);

}*/


?>


<!-- colecao do listCards -->
<div id="colecao1" class="desafio-premios-colecoes flex-column shadow">

    <div class="premios-title flex-row">

        <span class="premios-title-size font800 orange equipa-color">EQUIPA<span id="premios-subtitle" class="premios-subtitle font600 gray">(5/5)</span></span><!-- quantidade de cartas desbloqueadas -->


        <div id="concluido1" class="premios-unlock flex-column">
            <div><img id="premios-unlock-logo" class="premios-unlock-logo" src="../../img/marca/simbolo-800w.png"></div><!-- colecao bloqueada -> opacity: 0.4 -->
            <span id="premios-unlock-title" class="premios-unlock-title font600 orange">CONCLUÍDO</span><!-- colecao bloqueada -> display: none -->
        </div>

    </div>

    <div class="colection flex-row font700 equipa-color">

        <!-- para o ciclo utilizar este -->
        <?php for($i=0; $i < sizeof($cardList); $i++){
            if ($cardList[$i][3] === 1) {

                $colecao = $cardList[$i][3];
                $raridade = $cardList[$i][2];
                $name = $cardList[$i][1];

                ?>
                <div id="carta<?php echo "$colecao" ?>" class="carta">
                    <a href="?id=<?php echo "$raridade"?>&name=<?php echo "$name"?>#pop-up-carta-img" onclick="click_carta()">
                        <img id="carta" class="carta-size" src="../../img/cartas/equipa/frente/equipa<?php echo "$raridade" ?>.png">
                        <!-- raridade do listCards -->
                        <span class="colection-numbers"><?php //$v[1] ?></span>
                    </a>
                </div>

                <?php
            }
        } ?>
        <!-- para o ciclo utilizar este -->

    </div>

</div>

<div id="colecao2" class="desafio-premios-colecoes flex-column shadow">

    <div class="premios-title flex-row">

        <span class="premios-title-size font800 orange equipa-color">PROFESSORES<span id="premios-subtitle" class="premios-subtitle font600 gray">(5/5)</span></span><!-- quantidade de cartas desbloqueadas -->


        <div id="concluido1" class="premios-unlock flex-column">
            <div><img id="premios-unlock-logo" class="premios-unlock-logo" src="../../img/marca/simbolo-800w.png"></div><!-- colecao bloqueada -> opacity: 0.4 -->
            <span id="premios-unlock-title" class="premios-unlock-title font600 orange">CONCLUÍDO</span><!-- colecao bloqueada -> display: none -->
        </div>

    </div>

    <div class="colection flex-row font700 equipa-color">

        <!-- para o ciclo utilizar este -->
        <?php for($i=0; $i < sizeof($cardList); $i++){
            if ($cardList[$i][3] === 2) {
                $colecao = $cardList[$i][3];
                $raridade = $cardList[$i][2];
                $name = $cardList[$i][1];

                ?>
                <div id="carta<?php echo "$colecao" ?>" class="carta">
                    <a href="?id=<?php echo "$raridade"?>&name=<?php echo "$name"?>#pop-up-carta-img" onclick="click_carta()">
                        <img id="carta" class="carta-size" src="../../img/cartas/equipa/frente/equipa<?php echo "$raridade" ?>.png">
                        <!-- raridade do listCards -->
                        <span class="colection-numbers"><?php //$v[1] ?></span>
                    </a>
                </div>

                <?php
            }
        } ?>
        <!-- para o ciclo utilizar este -->

    </div>

</div>

<div id="colecao3" class="desafio-premios-colecoes flex-column shadow">

    <div class="premios-title flex-row">

        <span class="premios-title-size font800 orange equipa-color">FUNCIONÁRIOS<span id="premios-subtitle" class="premios-subtitle font600 gray">(5/5)</span></span><!-- quantidade de cartas desbloqueadas -->


        <div id="concluido1" class="premios-unlock flex-column">
            <div><img id="premios-unlock-logo" class="premios-unlock-logo" src="../../img/marca/simbolo-800w.png"></div><!-- colecao bloqueada -> opacity: 0.4 -->
            <span id="premios-unlock-title" class="premios-unlock-title font600 orange">CONCLUÍDO</span><!-- colecao bloqueada -> display: none -->
        </div>

    </div>

    <div class="colection flex-row font700 equipa-color">

        <!-- para o ciclo utilizar este -->
        <?php for($i=0; $i < sizeof($cardList); $i++){
            if ($cardList[$i][3] === 3) {
                $colecao = $cardList[$i][3];
                $raridade = $cardList[$i][2];
                $name = $cardList[$i][1];

                ?>
                <div id="carta<?php echo "$colecao" ?>" class="carta">
                    <a href="?id=<?php echo "$raridade"?>&name=<?php echo "$name"?>#pop-up-carta-img" onclick="click_carta()">
                        <img id="carta" class="carta-size" src="../../img/cartas/equipa/frente/equipa<?php echo "$raridade" ?>.png">
                        <!-- raridade do listCards -->
                        <span class="colection-numbers"><?php //$v[1] ?></span>
                    </a>
                </div>

                <?php
            }
        } ?>
        <!-- para o ciclo utilizar este -->

    </div>

</div>

<?php

//foreach ($carta as $k => $v){

 //echo "$v[0]"
//echo "$v[1]"


?>



