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
<div id="desafios">
    <!-- /.row -->
    <div id="desafios_title">
        <h1>Desafios</h1>
    </div>
    <div id="table_desafios">
        <table>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Chaves Atribuidas</th>
            </tr>
            <tr id="echos">
                <?php listUsers() ?>
                <th>
                    <?php echo listUsers($cardList, 'title') ?></th>
                <th>
                    <?php echo listUsers($cardList, 'description') ?></th>
                <th>
                    <?php echo listUsers($cardList, 'reward') ?></th>
            </tr>
        </table>
    </div>
</div>
<div>
    <button class="apagar_desafio">
        Apagar Desafio
    </button>
    <button class="adicionar_desafio">
        Adicionar Desafio
    </button>
    <button class="editar_desafio">
        Editar Desafio
    </button>
</div>
</body>