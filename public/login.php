<!DOCTYPE html>
<html>
<?php
session_start();

/*
if (isset($_SESSION['username'])) {

    header('Location: /public/homepage.php');

}
*/

?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="../css/style.css">

    <title>Log In</title>
</head>


<body>

<div class="background">

    <div class="background-color">

        <div class="flex login-logo">
            <img srcset="   ../img/marca/logo-320w.svg 320w,
                            ../img/marca/logo-480w.svg 480w,
                            ../img/marca/logo-800w.svg 800w" sizes="(max-width: 320px) 100px,
                           (max-width: 480px) 150px,
                           200px" src="../img/marca/logo-800w.svg" class="background-color-item">
        </div>

        <div class="login-box flex-column shadow">

            <span class="login-register-title font800 orange">Log In</span>

            <form id="loginForm" action="../components/php/loginform.php" method="post" role="form">

                <div class="login-item flex-row">
                    <img src="../img/icon/user.jpg" class="login-item-img">
                    <!-- Parte do formulário para utilizador-->
                    <input type="text" onfocus="change_submit()" name="inputUsername" id="inputUsername" placeholder="username" class="login-item-form gray font700">
                </div>

                <div class="login-item flex-row">
                    <img src="../img/icon/pass.jpg" class="login-item-img">
                    <!-- Parte do formulário para pass-->
                    <input type="password" onfocus="change_submit()" name="inputPassword" id="inputPassword" placeholder="password" class="login-item-form gray font700">
                </div>

                <div class="login-register-link text-center gray font500">Já se registou? <a href="/public/registo.php"
                                                                                             class="pointer orange font600">Crie
                        agora</a></div>


                <div onclick="verification_login()" class="submit text-center"><input id="submit" type="submit" name="submitlogin" value="log in" class="login-btn gradient-background gradient-border pointer white font700"></div>
                    <h5 id="login-verification" class="verification-login-registo font600"></h5>

            </form>

        </div>
    </div>
</div>

<script src="../js/verifications.js" type="text/javascript"></script>

</body>
</html>