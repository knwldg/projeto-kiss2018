<?php



#TODO buscar o user; tenta ver se consegues o nr de cartas do user; bug depois da evolucao começa a adc cartas novas ( ver modal.js a funcao click_carta() )



global $cardList;
global $userCollection;

getUserCards(1);//com session (?)

listCards();

//$num_cartas = $_SESSION['id'];
//$num_cartas_user = $_SESSION['cartas'];

//$num_cartas2 = $_SESSION['id2'];
//$num_cartas_user2 = $_SESSION['cartas2'];

?>


<!-- colecao do listCards -->
<div id="colecao1" class="desafio-premios-colecoes flex-column shadow">

    <div class="premios-title flex-row">

        <span class="premios-title-size font800 orange equipa-color">EQUIPA<span id="premios-subtitle" class="premios-subtitle font600 gray">(<?php //echo "$num_cartas_user"?>/<?php// echo "$num_cartas"?>)</span></span><!-- quantidade de cartas desbloqueadas -->


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
                        <!-- userCards -->

                    <?php
                    foreach ($userCollection as $v){

                        if($v[0] == $id) {

                            $_SESSION['quantidade'] = $v[1];
                            $quantidade = $_SESSION['quantidade'];
                            $_SESSION['id'] = $id;

                            ?>
                        <a id="carta<?php echo "$id" ?>" href="?id=<?php echo "$id"?>&quant=<?php echo "$quantidade"?>#pop-up-carta-img" onclick="click_carta('<?php echo "$name"?>',<?php echo "$id" ?>,<?php echo "$quantidade" ?>)">
                            <img class="carta-size" src="../../img/cartas/equipa/frente/equipa<?php echo "$id" ?>.png">
                            <span class="colection-numbers"><?php echo"$v[1]" ?></span>
                        </a>
                        <?php


                            //$cartas = $v[0]++;

                            //$_SESSION['cartas'] = $cartas;

                            /*if($cartas === 5){
                                echo "<script type='text/javascript'>document.getElementById(\"premios-unlock-logo\").style.opacity = \"1\";</script>";
                                echo "<script type='text/javascript'>document.getElementById(\"premios-unlock-title\").style.display = \"block\";</script>";
                            } else {
                                echo "<script type='text/javascript'>document.getElementById(\"premios-unlock-logo\").style.opacity = \"0.4\";</script>";
                                echo "<script type='text/javascript'>document.getElementById(\"premios-unlock-title\").style.display = \"none\";</script>";
                            }*/
                        }

                    }?>
                </div>
                <?php
            }
        } ?>
        <!-- para o ciclo utilizar este -->

    </div>

</div>

<div id="colecao2" class="desafio-premios-colecoes flex-column shadow">

    <div class="premios-title flex-row">

        <span class="premios-title-size font800 orange equipa-color">PROFESSORES<span id="premios-subtitle" class="premios-subtitle font600 gray">(<?php// echo "$num_cartas_user2"?>/<?php //echo "$num_cartas2"?>)</span></span><!-- quantidade de cartas desbloqueadas -->


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
                $colecao = $cardList[$i][3];

                ?>
                <div class="carta">
                        <!-- userCards -->
                        <?php foreach ($userCollection as $v){
                            if($v[0] == $id) { ?>
                    <a id="carta<?php echo "$id" ?>" href="#pop-up-carta-img" onclick="click_carta('<?php echo "$name"?>',<?php echo "$id" ?>,<?php echo "$quantidade" ?>)">
                            <img class="carta-size" src="../../img/cartas/equipa/frente/equipa<?php echo "$id" ?>.png">
                                <span class="colection-numbers"><?php echo"$v[1]" ?></span>
                    </a>
                                <?php

                                /*if($cartas === 7){
                                    echo "<script type='text/javascript'>document.getElementById(\"premios-unlock-logo\").style.opacity = \"1\";</script>";
                                    echo "<script type='text/javascript'>document.getElementById(\"premios-unlock-title\").style.display = \"block\";</script>";
                                } else {
                                    echo "<script type='text/javascript'>document.getElementById(\"premios-unlock-logo\").style.opacity = \"0.4\";</script>";
                                    echo "<script type='text/javascript'>document.getElementById(\"premios-unlock-title\").style.display = \"none\";</script>";
                                }*/
                            }

                        }

                        ?>
                        <!-- userCards -->

                </div>

                <?php

                //$colecao2 = sizeof($id);
               // $_SESSION['id2'] = $colecao2;
                //print_r($colecao2);
            }
        } ?>
        <!-- para o ciclo utilizar este -->

    </div>

</div>

<div id="colecao3" class="desafio-premios-colecoes flex-column shadow">

    <div class="premios-title flex-row">

        <span class="premios-title-size font800 orange equipa-color">FUNCIONÁRIOS<span id="premios-subtitle" class="premios-subtitle font600 gray">(5/5)</span></span><!-- quantidade de cartas desbloqueadas -->

        <?php ?>
        <div id="concluido1" class="premios-unlock flex-column">
            <div><img id="premios-unlock-logo" class="premios-unlock-logo" src="../../img/marca/simbolo-800w.png"></div><!-- colecao bloqueada -> opacity: 0.4 -->
            <span id="premios-unlock-title" class="premios-unlock-title font600 orange">CONCLUÍDO</span><!-- colecao bloqueada -> display: none -->
        </div>
        <?php ?>
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

                        <!-- userCards -->
                        <?php
                        foreach ($userCollection as $v){
                            if($v[0] == $id) {
                                ?>
                        <a href="#pop-up-carta-img" onclick="click_carta('<?php echo "$name"?>',<?php echo "$id" ?>,<?php echo "$quantidade" ?>)">
                            <img id="carta" class="carta-size" src="../../img/cartas/equipa/frente/equipa<?php echo "$id" ?>.png">
                                <span class="colection-numbers"><?php echo"$v[1]" ?></span>
                        </a>
                            <?php }
                        }?>
                        <!-- userCards -->

                </div>

                <?php
            }
        } ?>
        <!-- para o ciclo utilizar este -->

    </div>

</div>

<?php




?>



