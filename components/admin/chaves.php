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
                <th>Utilizador</th>
                <th>Nome Real</th>
                <th>Chaves</th>
            </tr>
            <tr id="echos">
                <?php listUsers() ?>
                <th>
                    <?php echo listUsers($userList, 'username') ?></th>
                <th>
                    <?php echo listUsers($userList, 'nome real') ?></th>
                <th>
                    <?php echo listUsers($userList, 'keys') ?></th>
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