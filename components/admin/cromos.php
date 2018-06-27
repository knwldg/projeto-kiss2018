<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../../css/admin_css.css" rel="stylesheet">

    <title>Cubo_Admin</title>
</head>


<body>
<?php require_once "../php/connection.php"; ?>
<?php require_once "../php/general.php"; ?>
<?php require_once "navigation.php"; ?>



<div id="cromos">
    <!-- /.row -->
    <div id="cards">
        <h1>Cromos</h1>
    </div>
    <div id="table_cromos">
        <table>
            <tr>
                <th class="nome">ID</th>
                <th class="nome">Nome</th>
                <th class="nome">Raridade</th>
                <th class="nome">Coleção</th>
            </tr>
            <tr id="echos">
                <?php
                global $cardList;
                listCards();


                for($i=0; $i < sizeof($cardList); $i++){

                    if (isset($cardList[$i])) {

                        $id = $cardList[$i][0];
                        $name = $cardList[$i][1];
                        $raridade = $cardList[$i][2];
                        $colecao = $cardList[$i][3];



                        ?>
                        <th style="height: 4vh">
                            <? echo "$id"?></th>
                        <th style="height: 4vh">
                            <? echo "$name"?></th>
                        <th style="height: 4vh">
                            <? echo "$raridade"?></th>
                        <th style="height: 4vh">
                            <? echo "$colecao"?></th>
                    <?php }
                }?>

            </tr>
        </table>
    </div>
</div>
<div>
    <button class="apagar_cromo">
        Apagar Cromo
    </button>
    <button class="adicionar_cromo">
        Adicionar Cromo
    </button>
</div>
</body>