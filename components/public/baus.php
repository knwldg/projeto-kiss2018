<div id="div-baus" class="baus flex-column">

    <!-- grelha de baus -->
    <div id="hide-chests" class="hide-chests text-center flex-column">

        <span class="div-baus-title font700 white">Escolhe um báu</span>

        <div class="chest-line flex-row"><!-- 3 itens -->
            <div id="chest-line-item" onclick="open_chest(this.id)" class="chest-line-item"><img class="chest-line-item-img" src="../img/icon/chest.png"></div>
        </div>
        <div class="chest-line flex-row"><!-- 3 itens -->

        </div>
        <div class="chest-line flex-row"> <!-- 3 itens -->

        </div>

    </div>
    <!-- grelha de baus -->

    <!-- pop-up-cartas | animacao do bau -->

    <div id="cartas-chest-animation" class="cartas-chest-animation">

        <!-- pop-up-cartas -->
        <div id="fundo-carta" class="fundo-carta fundo-verde">

            <div class="flex-column center-items">
                <div class="flex-column text-center">
                    <a href="" onclick="close_baus()" id="voltar" class="voltar pointer"><img class="voltar-size" src="../img/icon/voltar.png"></a>
                    <span class="black font600">voltar</span>
                </div>

                <div id="pop-up-cartas" class="text-center">

                    <!-- cartas saidas -->
                    <div id="pop_up_carta" onclick="change_carta()" class="pop-up-carta">&nbsp</div>
                    <!-- cartas saidas -->

                    <!-- detalhe bau -->
                    <div class="detalhe-bau shadow center-items flex-column">

                        <div id="detalhe-bau-chest" class="detalhe-bau-img">&nbsp</div>

                        <div class="detalhe-bau-numero_cartas center-items flex-row">
                            <span class="numero-cartas-item1 font700">CARTAS</span> <span id="detalhe-bau-numero" class="numero-cartas-item2 font800">+5</span>
                        </div>

                        <a href="colecoes.php" id="detalhe-bau-colecoes" class="detalhe-bau-colecoes shadow white font700 bau-verde">coleções</a>
                        <span class="detalhe-bau-descricao gray font500">descubra as nossas coleções</span>

                    </div>
                    <!-- detalhe bau -->

                </div>

                <div id="slider" class="flex-row">
                    <!-- cartas saidas -->
                    <div id="slider_carta" class="slider-item">&nbsp</div>
                    <!-- cartas saidas -->

                    <!-- detalhe bau -->
                    <div id="slider_detalhe_bau" class="slider-item">&nbsp</div>
                    <!-- detalhe bau -->

                </div>
            </div>
        </div>
        <!-- pop-up-cartas -->


        <!-- animacao do bau -->
        <div id="chest-animation" class="chest-animation flex">
            <div id="animation" class="chest-animation-item flex bau-verde"></div>
            <p class="chest-animation-item-img"></p>
        </div>
        <!-- animacao do bau -->
    </div>

    <!-- pop-up-cartas | animacao do bau -->
</div>