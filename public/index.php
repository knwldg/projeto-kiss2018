    <!DOCTYPE html>
<html>
<?php
session_start();
if (isset($_SESSION['username'])) {

    header("Location: homepage.php");
}

?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="../css/style.css">

    <title>Cubo</title>

</head>

<body>

    <div id="conteudo">

        <img src="../img/marca/marca.png" class="cuboinicial" >

        <!--<h1>desafia-te</h1>-->

        <div id="conteudo-login-registo" class="login-registo font700">
            <a href="login.php" id="login" class="login-registo-style gradient-border">log in</a>
            <a href="registo.php" id="registar" class="login-registo-style gradient-border">registar</a>
        </div>


    </div>


</body>

</html>