<?php

//$carta = getUserCards(1)[0][0];
//$num_cartas = getUserCards(1)[0][1];

#TODO BUSCAR O USER

$carta = getUserCards(1);//com session (?)


?>

<?php foreach ($carta as $k => $v){ ?>
<div id="colecao<?php echo "$k" ?>" class="desafio-premios-colecoes flex-column shadow">

    <div class="premios-title flex-row">

        <span class="premios-title-size font800 orange equipa-color">EQUIPA<span id="premios-subtitle" class="premios-subtitle font600 gray">(5/5)</span></span><!-- quantidade de cartas desbloqueadas -->


        <div id="concluido1" class="premios-unlock flex-column">
            <div><img id="premios-unlock-logo" class="premios-unlock-logo" src="../../img/marca/simbolo-800w.png"></div><!-- colecao bloqueada -> opacity: 0.4 -->
            <span id="premios-unlock-title" class="premios-unlock-title font600 orange">CONCLUÍDO</span><!-- colecao bloqueada -> display: none -->
        </div>

    </div>

    <div class="colection flex-row font700 equipa-color">

        <!-- para o ciclo utilizar este -->

        <div class="carta">
            <a id="carta<?php echo "$v[0]" ?>" href="#pop-up-carta-img<?php echo "$v[0]" ?>" onclick="click_carta()" class="flex-column center-items">
                <img id="carta" class="carta-size" src="../../img/cartas/equipa/frente/equipa<?php echo "$v[0]" ?>.png">
                <span class="colection-numbers"><?php echo "$v[1]"?></span>
            </a>
        </div>


        <!-- para o ciclo utilizar este -->

    </div>

</div>
<?php } ?>


