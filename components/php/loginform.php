<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 24-May-18
 * Time: 20:36
 */

session_start();

#TODO páginas em baixo

if (loginUser($_POST['inputUsername'], $_POST['inputPassword'])) {
    $_SESSION['user'] = $_POST['inputUsername'];
    /* header('Location: ../AFTER_LOGIN.php'); */
} else {

    exit();
}