<?php
$_SESSION = array();

session_start();
session_unset();
session_destroy();

header('Location: /public/login.php');
