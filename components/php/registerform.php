<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 24-May-18
 * Time: 20:36
 */

session_start();

require_once "./logincontrol.php";


if (registerUser($_POST['inputUsername'], $_POST['inputPassword'], $_POST['inputEmail'])) {

    header('Location: /public/login.php');

} else {
    header('Location: /public/registo.php');
}



