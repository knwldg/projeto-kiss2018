<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 24-May-18
 * Time: 20:36
 */

session_start();

require_once "./logincontrol.php";

if (registerUser($_POST['inputUsername'], $_POST['inputPassword']))
{    header('Location: /projeto-kiss2018/public/homepage.php');}
else header('Location: /projeto-kiss2018/public/login.php');


