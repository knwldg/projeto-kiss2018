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
                <th>Nome</th>
                <th>Coleção</th>
                <th>Raridade</th>

            </tr>
            <tr>
                <!-- /query nome -->
                <?php
                $nome = "SELECT 'name' FROM 'cards'";
                $result = mysqli_query($nome);
                $row_nome = mysqli_query($result);
                ?>
                <!-- /query coleção -->
                <?php
                $rarity = "SELECT 'rarity' FROM 'cards'";
                $result2 = mysqli_query($rarity);
                $row_rarity = mysqli_query($result2);
                ?>
                <!-- /query raridade -->
                <?php
                $collection = "SELECT 'collection' FROM 'cards'";
                $result3 = mysqli_query($collection);
                $row_collection = mysqli_query($result3);
                ?>

                <th id="echos">
                    <?php
                    echo $row_nome["name"];
                    ?></th>
                <th><?php
                    echo $row_rarity['rarity'];
                    ?></th>
                <th><?php
                    echo $row_collection['collection'];
                    ?></th>
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