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

   <script type="text/javascript">
        function validateForm() {

            var username = document.forms["loginForm"]["inputUsername"].value;
            var password = document.forms["loginForm"]["inputPassword"].value;

            var id_password = document.getElementById("inputPassword");


            if (!(username === "") && password === ""){

                document.getElementById("inputPassword").style.border ="2px solid #ff0000";

                document.getElementById("submit").style.background ="0";
                document.getElementById("submit").style.backgroundColor ="#ff0000";
                document.getElementById("submit").value = "erro";
                document.getElementById("submit").style.transition = "all 0.1s ease-in";

                document.getElementById("login-verification").style.opacity = "1";
                document.getElementById("login-verification").innerHTML = "é necessário password!";//depois colocas a tua maneira
                document.getElementById("login-verification").style.transition = "opacity 1s ease-in";
                document.getElementById("login-verification").style.transitionDelay = "0.2s";
                return false;
            }

            if (!(password === "") && username === ""){

                document.getElementById("inputUsername").style.border ="2px solid #ff0000";

                document.getElementById("submit").style.background ="0";
                document.getElementById("submit").style.backgroundColor ="#ff0000";
                document.getElementById("submit").value = "erro";
                document.getElementById("submit").style.transition = "all 0.1s ease-in";

                document.getElementById("login-verification").style.opacity = "1";
                document.getElementById("login-verification").innerHTML = "é necessário username!";
                document.getElementById("login-verification").style.transition = "opacity 1s ease-in";
                document.getElementById("login-verification").style.transitionDelay = "0.2s";
                return false;

            }

            if(!(password === "") && !(username === "")){

                if(id_password.value.length >= 8) {

                    document.getElementById("submit").style.animation ="0";
                    document.getElementById("submit").style.background ="0";
                    document.getElementById("submit").style.backgroundColor ="#009245";
                    document.getElementById("submit").style.transition = "background 0.1s, background-color 0.1s ease-in";
                    return true;

                } else {

                    document.getElementById("inputPassword").style.border ="2px solid #ff0000";

                    document.getElementById("submit").style.background ="0";
                    document.getElementById("submit").style.backgroundColor ="#ff0000";
                    document.getElementById("submit").value = "erro";
                    document.getElementById("submit").style.transition = "all 0.1s ease-in";

                    document.getElementById("login-verification").style.opacity = "1";
                    document.getElementById("login-verification").innerHTML = "igual ou maior a 8 caracteres!";
                    document.getElementById("login-verification").style.transition = "opacity 1s ease-in";
                    document.getElementById("login-verification").style.transitionDelay = "0.2s";
                    return false;
                }

            } else {
                document.getElementById("inputUsername").style.border ="2px solid #ff0000";
                document.getElementById("inputPassword").style.border ="2px solid #ff0000";

                document.getElementById("submit").style.background ="0";
                document.getElementById("submit").style.backgroundColor ="#ff0000";
                document.getElementById("submit").value = "erro";
                document.getElementById("submit").style.transition = "all 0.1s ease-in";

                document.getElementById("login-verification").style.opacity = "1";
                document.getElementById("login-verification").innerHTML = "é necessário username e password!";//depois colocas a tua maneira
                document.getElementById("login-verification").style.transition = "opacity 1s ease-in";
                document.getElementById("login-verification").style.transitionDelay = "0.2s";
                return false;
            }


        }
    </script>


</head>


<body>

<div class="background">

    <div class="background-color">

        <div class="flex login-logo">
            <div><img src="../img/marca/simbolo-800w.png" class="simbolo"></div>
        </div>

        <div class="login-box flex-column shadow">

            <span class="login-register-title font800 orange">Log In</span>

            <form id="loginForm" action="../components/php/loginform.php" method="post" onsubmit="return validateForm()" role="form">

                <div class="login-item flex-row">
                    <img src="../img/icon/user.jpg" class="login-item-img">
                    <!-- Parte do formulário para utilizador-->
                    <input type="text" onfocus="change_submit_login(this.id)" name="inputUsername" id="inputUsername" placeholder="username" class="login-item-form gray font700">
                </div>

                <div class="login-item flex-row">
                    <img src="../img/icon/pass.jpg" class="login-item-img">
                    <!-- Parte do formulário para pass-->
                    <input type="password" onfocus="change_submit_login(this.id)" name="inputPassword" id="inputPassword" placeholder="password" class="login-item-form gray font700">
                </div>

                <div class="login-register-link text-center gray font500">Já se registou? <a href="registo.php" class="pointer orange font600">Crie agora</a></div>


                <div onclick="" class="submit text-center"><input id="submit" type="submit" name="submitlogin" value="log in" class="login-btn gradient-background gradient-border pointer white font700"></div>
                    <h5 id="login-verification" class="verification-login-registo font600"></h5>

            </form>

        </div>
    </div>
</div>

<script src="../js/verifications.js" type="text/javascript"></script>

</body>
</html>