<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 24-May-18
 * Time: 20:36
 */

session_start();

require_once "./logincontrol.php";

if (loginUser($_POST['inputUsername'], $_POST['inputPassword'])) {

    header('Location: /public/homepage.php');
} else {
    header('Location: /public/login.php');
}


