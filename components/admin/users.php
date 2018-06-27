<?php session_start();?>
<html>

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
                <th class="nome">Username</th>
            </tr>
            <tr id="echos">
                <?php
                global $userList;
                listUsers();
                for($i=0; $i < sizeof($userList); $i++){

            if (isset($userList[$i])) {

                $username = $userList[$i];
                ?>
                <th style="height: 4vh">
                    <?php echo "$username" ?></th>
            <?php }
            }?>

            </tr>
        </table>
    </div>
</div>
<div>
    <button class="apagar_utilizador" onclick="">
         Apagar Utilizador
    </button>
</div>
</body>