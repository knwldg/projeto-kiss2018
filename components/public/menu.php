<div id="main-menu" class="back-style pointer">

    <div id="hide-menu" class="hide-menu" onclick="close_menu()"></div>

    <div id="main-menu-itens" class="main-menu-style">

        <!--<div id="profile-menu" class="profile-menu-style">
            <?php include "../../components/public/profile_details.php"; ?>
        </div>-->

        <div id="menu" class="menu-pages border"><!-- responsive mode: width 15% -->

            <ul id="menu-pages" style="padding-left: 0.3em">

                <li class="home-page lineT stroke2">
                    <a href="../../public/homepage.php" class="home flex-row">
                        <img class="menu-icon" src="../../img/icon/menu-home.png">
                        <span class="home-text menu-text">PÁGINA PRINCIPAL</span></a>
                    <img id="arrow" onclick="hide_main_pages()" class="menu-icon-arrow pointer" src="../../img/icon/arrow_down.png">
                    <img id="arrow-up" onclick="show_main_pages()" class="arrow-up pointer" src="../../img/icon/arrow_up.png"></li>

                <li id="main-pages" class="lineT stroke2">

                    <ul id="pages"> <!-- pages -->

                        <li class="lineB stroke1"><a href="../../public/homepage.php#desafio-do-dia" onclick="close_menu()"><span>DESAFIO DO DIA</span></a></li>
                        <li class="lineB stroke1"><a href="../../public/homepage.php#baus" onclick="close_menu()"><span>BAÚS</span></a></li>
                        <li class="lineB stroke1"><a href="../../public/desafios.php"><span>DESAFIOS</span></a></li>
                        <li class="lineB stroke1"><a href="../../public/colecoes.php"><div><span>COLEÇÕES</span></a></li>
                        <li><a href="../../public/premios.php"><span>PRÊMIOS</span></a></li>

                    </ul>

                </li>

                <li id="notification-line" class="pages lineB lineT stroke2"><img class="menu-icon" src="../../img/icon/notifications.png">
                    <span class="menu-text">NOVIDADES</span>
                    <div class="main-new gray font600 text-center">0</div>
                    <img id="arrow-notifications" onclick="hide_notifications()"  class="menu-icon-arrow pointer" src="../../img/icon/arrow_down.png">
                    <img id="arrow-notifications-up" onclick="show_notifications()"  class="arrow-up pointer" src="../../img/icon/arrow_up.png">
                </li>

                <li id="main-pages">

                    <ul id="notification-pages">
                        <li class="pages-item lineB stroke1">
                            <a class="notification-pages-item flex-row" href="../../public/desafios.php"><span>DESAFIOS</span>
                                <div class="new gray font600 text-center">0</div></a></li>
                        <li class="pages-item">
                            <a class="notification-pages-item flex-row" href="../../public/premios.php"><span>PRÊMIOS</span>
                                <div class="new gray font600 text-center">0</div></a></li>
                    </ul>

                </li>

                <li class="lineB lineT stroke2"><a class="flex-row" href="../../public/info.php"><img class="menu-icon" src="../../img/icon/help.png"><span class="click-area">AJUDA</span></a></li><!--icon-->

                <li class="lineB stroke2"><a class="flex-row" href=""><img class="menu-icon" src="../../img/icon/out.png"><span class="click-area">SAIR</span></a></li><!--icon-->

            </ul>

        </div>

    </div>

</div>