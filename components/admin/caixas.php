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
<div id="boxes">
    <!-- /.row -->
    <div id="caixas">
        <h1>Baús</h1>
    </div>
    <div id="table_caixas">
        <table>
            <tr>
                <th>Username</th>
                <th>Brancos</th>
                <th>Verdes</th>
                <th>Azuis</th>
                <th>Roxos</th>
                <th>Dourados</th>
            </tr>
        </table>
    </div>
</div>
<div>
    <button class="apagar_caixa">
        Apagar Baú
    </button>
    <button class="adicionar_caixa">
        Adicionar Baú
    </button>
</div>
</body>