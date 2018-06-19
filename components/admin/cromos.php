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
                <?php

                require_once "../php/general.php";

                listUsers();

                ?>
                <th>Raridade</th>
                <th>Descrição</th>
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
    <button class="editar_descrição">
        Editar Descrição
    </button>
</div>
</body>