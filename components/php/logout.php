<?php
$_SESSION = array();

session_start();
session_unset();
session_destroy();

header("location: login.php");