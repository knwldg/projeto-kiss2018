<?php
/**
 * Created by PhpStorm.
 * User: EleonorSilva
 * Date: 19/06/2018
 * Time: 23:29
 */

require_once "../php/connection.php";
require_once "../php/challengeControl.php";

global $dailyChallenge;

/*
function addDailyChallenge() {

    global $sql_connection;
    global $dailyChallenge;

    try {

    $sql_op = $sql_connection->prepare("DELETE * FROM challenges");

    if (!$sql_op->execute()) {

        return false;

    }

    if (!isset ($sql_connection)) {

        throw new Exception('SQL Connection failure');

    }

        $challengeType = rand(1,3);
        $dailyChallenge = $dailyChallenge+1;
        $dailyDescription = "Descreve tu";

        $sql_op = $sql_connection->prepare("INSERT IGNORE INTO challenges (title, description, reward) VALUES (?,?,1)");

        $dailyTitle = "Desafio Diário #".$dailyChallenge;


        $sql_op->bind_param('ss', $dailyTitle, $dailyChallenge);

        if (!$sql_op->execute()) {
            throw new Exception('Cannot register plant in database');
        }
        else return true;
    }
    catch (Exception $exception) {
        echo ("Error: $exception");
        return false;
    }
}
*/

