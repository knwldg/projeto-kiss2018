<?php
#TODO BUSCAR O USER


global $cardList;
global $userCollection;

//$carta = getUserCards(1)[0][0];
//$num_cartas = getUserCards(1)[0][1];



getUserCards(1);//com session (?)

listCards();

for($i=0; $i < sizeof($userCollection); $i++){

    $user_cards_id = $userCollection[$i][0];
    $user_cards_num = $userCollection[$i][1];

}



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

                $raridade = $cardList[$i][2];
                $name = $cardList[$i][1];
                $id = $cardList[$i][0];

                ?>
                <div class="carta">
                    <a id="carta<?php echo "$id" ?>" href="#pop-up-carta-img" onclick="click_carta('<?php echo "$name"?>',<?php echo "$raridade" ?>)">
                        <img class="carta-size" src="../../img/cartas/equipa/frente/equipa<?php echo "$raridade" ?>.png">
                        <!-- userCards -->
                        <?php
                        foreach ($userCollection as $v){
                        if($v[0] == $id) {
                            ?>
                        <span class="colection-numbers"><?php echo"$v[1]" ?></span>
                        <?php }
                        }?>
                        <!-- userCards -->
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

                $raridade = $cardList[$i][2];
                $name = $cardList[$i][1];
                $id = $cardList[$i][0];

                ?>
                <div id="carta<?php echo "$id" ?>" class="carta">
                    <a href="?id=<?php echo "$raridade"?>&name=<?php echo "$name"?>#pop-up-carta-img" onclick="click_carta('<?php echo "$name"?>',<?php echo "$raridade" ?>)">
                        <img id="carta" class="carta-size" src="../../img/cartas/equipa/frente/equipa<?php echo "$raridade" ?>.png">
                        <!-- userCards -->
                        <?php
                        foreach ($userCollection as $v){
                            if($v[0] == $id) {
                                ?>
                                <span class="colection-numbers"><?php echo"$v[1]" ?></span>
                            <?php }
                        }?>
                        <!-- userCards -->
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

                $raridade = $cardList[$i][2];
                $name = $cardList[$i][1];
                $id = $cardList[$i][0];

                ?>
                <div id="carta<?php echo "$id" ?>" class="carta">
                    <a href="?id=<?php echo "$raridade"?>&name=<?php echo "$name"?>#pop-up-carta-img" onclick="click_carta('<?php echo "$name"?>',<?php echo "$raridade" ?>)">
                        <img id="carta" class="carta-size" src="../../img/cartas/equipa/frente/equipa<?php echo "$raridade" ?>.png">
                        <!-- userCards -->
                        <?php
                        foreach ($userCollection as $v){
                            if($v[0] == $id) {
                                ?>
                                <span class="colection-numbers"><?php echo"$v[1]" ?></span>
                            <?php }
                        }?>
                        <!-- userCards -->
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



