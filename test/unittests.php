<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 21/06/18
 * Time: 16:33
 */

global $challenges;
global $cardList;
global $rewards;

$rewards = array();

session_start();

require_once "../components/php/general.php";
require_once "../components/php/connection.php";
require_once "../components/php/challengeControl.php";

openBox(1);


for ($i = 0; $i < sizeof($rewards); $i++) {

    // faz o que entenderes aqui

    echo "recebeste a carta:" . getCardData(($rewards[$i]))[1];

}

