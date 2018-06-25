<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 21/06/18
 * Time: 16:33
 */

global $challenges;
global $cardList;

session_start();

require_once "../components/php/general.php";
require_once "../components/php/connection.php";
require_once "../components/php/challengeControl.php";

/*echo(findIdByUsername($_SESSION['username']));

echo(findIdByUsername($_SESSION['userId']));

echo(numKeys(findIdByUsername($_SESSION['username'])));

addKey(findIdByUsername($_SESSION['username']));

echo(numKeys(findIdByUsername($_SESSION['username'])));

openBox($_SESSION['userId']);*/

//issueChallenge("Ajuda um colega!","Tira uma fotografia com o que estiveste a ajudar o teu colega com, e mostra o bom camarada que és!",1);