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
<?php require_once "navigation.php"; ?>
<?php require_once "../php/connection.php"; ?>
<?php require_once "../php/general.php"; ?>
<div id="keys">
    <!-- /.row -->
    <div id="chaves">
        <h1>Chaves</h1>
    </div>
    <div id="table_chaves">
        <table>
            <tr>
                <th class="nome">Utilizador</th>
                <th class="nome">Chaves</th>
            </tr>
            <tr id="echos">
                <?php
                global $userData;
                getUserData(3);

                for($i=0; $i < sizeof($userData); $i++){

                    if (isset($userData[$i])) {

                $username = $userData[$i];
                $keys= $userData[$i];
                ?>
                <th style="height: 4vh">
                <?php echo "$username" ?></th>
                <th style="height: 4vh">
                    <?php echo "$keys" ?></th>

                    <?php }
                }?>
            </tr>

        </table>
    </div>
</div>
<div>
    <button class="apagar_chaves">
        Apagar Chaves
    </button>
    <button class="adicionar_chaves">
        Adicionar Chaves
    </button>
</div>
</body>