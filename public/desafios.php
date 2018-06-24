<?php

require_once "../components/php/general.php";
require_once "../components/php/connection.php";

?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="../css/style.css">

    <title>Desafios</title>
</head>

<body>


    <div id="background" class="desafio-background"><!-- quando clicar no desafio -> background-color: gray -->

            <div id="hide-content" class="flex-column position-chest">

                <?php include "../components/public/header.php"; ?><!-- quando clicar no desafio -> z-index: -1 -->

                <!-- barra que aparece em cima dos elementos recentes/antigos -->

                <?php include "../components/public/barra_recente_antigo.php"; ?>

                <!-- barra que aparece em cima dos elementos recentes/antigos -->

                <?php include "../components/public/desafio.php"; ?>

                <?php include "../components/public/baus.php"; ?>

                <?php include "../components/public/icon_chest.php"; ?>

                <?php include "../components/public/menu.php"; ?>

             </div>

    </div>


<script type="text/javascript" src="../js/modal.js"></script>
<script type="text/javascript" src="../js/baus.js"></script>
<script type="text/javascript" src="../js/cartas.js"></script>


</body>