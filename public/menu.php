<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="../css/style.css">

    <title>Desafio - Completo</title>
</head>
<body>

<div id="back" class="back-style">

    <div id="main-menu" class="main-menu-style">

        <div id="profile-menu" class="profile-menu-style">
        <?php include "../components/public/profile_details.php"; ?>
        </div>

        <div id="menu" class="menu-pages border"><!-- responsive mode: width 15% -->

            <ul id="menu-pages" style="padding-left: 0.3em">

                <li class="pages lineT stroke2"><img class="menu-icon" src="../img/icon/menu-home.png"><span class="menu-text">PÁGINA PRINCIPAL</span><img class="menu-icon-arrow pointer" src="../img/icon/arrow-down.png"></li><!--icon e seta-->

                <li id="main-pages" class="lineT stroke2">

                    <ul id="pages"> <!-- pages -->

                        <li class="lineB stroke1"><a href="homepage.php#desafio-do-dia"><span>DESAFIO DO DIA</span></a></li>
                        <li class="lineB stroke1"><a href="homepage.php#baus"><span>BAÚS</span></a></li>
                        <li class="lineB stroke1"><a href="homepage.php#desafios"><span>DESAFIOS</span></a></li>
                        <li class="lineB stroke1"><a href="homepage.php#colecoes"><div><span>COLEÇÕES</span></a></li>
                        <li><a href="homepage.php#premios"><span>PRÊMIOS</span></a></li>

                    </ul>

                </li>

                <li class="pages lineB lineT stroke2"><img class="menu-icon" src="../img/icon/menu-home.png"><span class="menu-text">NOVIDADES</span><img class="menu-icon-arrow" src="../img/icon/arrow-down.png"></li>

                <li id="main-pages">

                    <ul id="notification-pages">
                        <li class="pages-item lineB stroke1"><a href="desafios.php"><span>DESAFIOS</span></a></li>
                        <li class="pages-item"><a href="premios.php"><span>PRÊMIOS</span></a></li>
                    </ul>

                </li>

                <li class="lineB lineT stroke2"><a href="info.php"><span class="click-area"><img src="">AJUDA</span></a></li><!--icon-->

                <li class="lineB stroke2"><a href=""><span class="click-area"><img src="">SAIR</span></a></li><!--icon-->

            </ul>

        </div>

    </div>

</div>

</body>
</html>