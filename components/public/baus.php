<?php

global $rewards;
global $luck;

$cor = luck();


//$cartas = $_SESSION['cartas'];
?>

<div id="div-baus" class="baus flex-column">

    <!-- grelha de baus -->
    <div id="hide-chests" class="hide-chests text-center flex-column">

        <span class="div-baus-title font700 white">Escolhe um báu</span>
<?php //for($i=0; $i < sizeof($cardList); $i++) {
    //$raridade = $cardList[$i][2];
    ?>
        <div class="chest-line flex-row"><!-- 3 itens -->
            <div id="chest-line-item1" onclick="open_chest(<?php echo"$cor"; ?>)" class="chest-line-item"><img class="chest-line-item-img" src="../../img/icon/chest.png"></div>
            <div id="chest-line-item" onclick="open_chest(<?php echo"$cor"; ?>)" class="chest-line-item"><img class="chest-line-item-img" src="../../img/icon/chest.png"></div>
            <div id="chest-line-item" onclick="open_chest(<?php echo"$cor"; ?>)" class="chest-line-item"><img class="chest-line-item-img" src="../../img/icon/chest.png"></div>
        </div>
        <div class="chest-line flex-row"><!-- 3 itens -->
            <div id="chest-line-item" onclick="open_chest(<?php echo"$cor"; ?>)" class="chest-line-item"><img class="chest-line-item-img" src="../../img/icon/chest.png"></div>
            <div id="chest-line-item" onclick="open_chest(<?php echo"$cor"; ?>)" class="chest-line-item"><img class="chest-line-item-img" src="../../img/icon/chest.png"></div>
            <div id="chest-line-item" onclick="open_chest(<?php echo"$cor"; ?>)" class="chest-line-item"><img class="chest-line-item-img" src="../../img/icon/chest.png"></div>
        </div>
        <div class="chest-line flex-row"> <!-- 3 itens -->
            <div id="chest-line-item" onclick="open_chest(<?php echo"$cor"; ?>)" class="chest-line-item"><img class="chest-line-item-img" src="../../img/icon/chest.png"></div>
            <div id="chest-line-item" onclick="open_chest(<?php echo"$cor"; ?>)" class="chest-line-item"><img class="chest-line-item-img" src="../../img/icon/chest.png"></div>
            <div id="chest-line-item" onclick="open_chest(<?php echo"$cor"; ?>)" class="chest-line-item"><img class="chest-line-item-img" src="../../img/icon/chest.png"></div>
        </div>
        <?php //} ?>
    </div>
    <!-- grelha de baus -->

    <!-- pop-up-cartas | animacao do bau -->

    <div id="cartas-chest-animation" class="cartas-chest-animation">

        <!-- pop-up-cartas -->
        <div id="fundo-carta" class="fundo-carta">

            <div class="flex-column center-items">

                <div class="flex-column text-center">
                    <a href="" onclick="close_baus()" id="voltar" class="voltar pointer"><img class="voltar-size" src="../../img/icon/voltar.png"></a>
                    <span class="black font600">voltar</span>
                </div>


                <div id="pop-up-cartas" class="text-center">

                    <!-- detalhe bau -->
                    <div id="detalhe-bau" class="detalhe-bau shadow center-items flex-column">

                        <img src="../../img/icon/bau5.png" id="detalhe-bau-chest" class="detalhe-bau-img">

                        <div class="detalhe-bau-numero_cartas center-items flex-row">
                            <span class="numero-cartas-item1 font700">CARTAS</span> <span id="detalhe-bau-numero" class="numero-cartas-item2 font800">+<?php //echo "$cartas"; ?></span>
                        </div>

                        <a href="../../public/colecoes.php" id="detalhe-bau-colecoes" class="detalhe-bau-colecoes shadow white font700">coleções</a>
                        <span class="detalhe-bau-descricao gray font500">descubra as nossas coleções</span>

                    </div>
                    <!-- detalhe bau -->

                    <?php

                    //o numero de cartas é dado por sizeOf($rewards) (tamanho do array)

                    $rewards = array();

                    openBox(findIdByUsername($_SESSION['username']));

                    //$sum = sizeOf($rewards);
                    //$_SESSION['cartas'] = $sum;

                    for ($i = 0; $i < sizeof($rewards); $i++) {

                    $img = getCardData(($rewards[$i]))[0];

                    ?>
                    <!-- cartas saidas -->
                    <div class="carta-out"><img id="pop_up_carta<?php echo"$img"?>" src="../../img/cartas/<?php echo"$img"?>.png"
                                                onclick="change_carta(<?php echo"$img"?>)" class="pop-up-carta"></div>


                        <?php
                    }
                    ?>
                        <div id="slider" class="slider flex-row">

                            <!-- detalhe bau -->
                            <div id="slider_detalhe_bau" class="slider-item">&nbsp</div>
                            <!-- detalhe bau -->

                            <?php

                            for ($i = 0; $i < sizeof($rewards); $i++) {

                            $img2 = getCardData(($rewards[$i]))[0];

                            ?>


                                <div id="slider_carta<?php echo"$img2"?>" class="slider-item">&nbsp</div>
                            <!-- cartas saidas -->
                            <?php } ?>

                        </div>
                    <!-- cartas saidas -->

                </div>



            </div>
        </div>
        <!-- pop-up-cartas -->


        <!-- animacao do bau -->

        <div id="chest-animation" class="chest-animation flex">
            <div id="animation" class="chest-animation-item flex"></div>
            <p class="chest-animation-item-img"></p>
        </div>

        <!-- animacao do bau -->
    </div>

    <!-- pop-up-cartas | animacao do bau -->
</div>

<script>
    document.getElementById("chest-line-item1").addEventListener("click", function(){
        <?php //openBox(findIdByUsername($_SESSION['username']));
        //openBox(1);
        ?>
    });
</script>