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
<?php require_once "../php/challengeControl.php"; ?>
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
                <?php  global $challengeList;
                listChallenges();


                for($i=0; $i < sizeof($challengeList); $i++){

                if (isset($challengeList[$i])) {

                $id = $challengeList[$i];
                $title = $challengeList[$i];
                $preview= $challengeList[$i];
                $descricao = $challengeList[$i];
                $categoria = $challengeList[$i];
                $raridade = $challengeList[$i];

                ?>

                <th>
                    <?php echo "$id" ?></th>
                <th>
                    <?php echo " $title" ?></th>
                <th>
                    <?php echo "$preview" ?></th>
                <th>
                    <?php echo "$descricao"?></th>
                <th>
                    <?php echo "$categoria"?></th>
                <th>
                    <? echo  "$raridade"?></th>
                <?php }
                }?>
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