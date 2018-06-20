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
<div id="users">
    <!-- /.row -->
    <div id="utilizadores">
        <h1>Utilizadores</h1>
    </div>
    <div id="table_users">
        <table>
            <tr>
                <th>Username</th>
                <th>Nome Real</th>
                <th>Email</th>
            </tr>
            <tr id="echos">
                <?php listUsers() ?>
                <th>
                    <?php echo listUsers($userList, 'name') ?></th>
                <th>
                    <?php echo listUsers($userList, 'realname') ?></th>
                <th>
                    <?php echo listUsers($userList, 'email') ?></th>
            </tr>
        </table>
    </div>
</div>
<div>
    <button class="apagar_utilizador">
        Apagar Utilizador
    </button>
</div>
</body>