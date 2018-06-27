<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 23/06/18
 * Time: 14:24
 */

require_once "general.php";

function issueChallenge($title, $description, $level)
{

    global $sql_connection;

    if (!isset ($sql_connection)) {

        return false;

    }

    $sql_op = $sql_connection->prepare("INSERT INTO challenges (title, description, reward) VALUES (?,?,?)");

    $sql_op->bind_param('ssi', $title, $description, $level);

    if (!$sql_op->execute()) {
        return false;
    }

    return true;
}

function dailyChallenge()
{

    issueChallenge("Desafio Diário!", "Faz não sei quê!", 3);

}

function listChallenges()
{

    // disponibiliza lista de cartas por ordem de registo na db no array global $cardList

    global $sql_connection;
    global $challengeList;

    if ($sql_connection->connect_errno) {
        printf("Connect failed: %s\n", $sql_connection->connect_error);
        exit();
    }

    $legendaryCap = 4;

    $query = $sql_connection->prepare("SELECT * FROM challenges WHERE reward < ?");
    $query->bind_param("i", $legendaryCap);
    $query->execute();
    $result = $query->get_result();

    $challengeList = array();

    if ($result->num_rows === 0) exit('No rows');
    while ($row = $result->fetch_assoc()) {
        $challengeId[] = $row['idchallenge'];
        $challengeTitle[] = $row['title'];
        $challengePreview[] = $row['preview'];
        $challengeDescription[] = $row['description'];
        $challengeCategory[] = $row['categoria'];
        $challengeDuration[] = $row['duracao'];
        $challengeRarity[] = $row['reward'];
    }

    for ($i = 0; $result->num_rows > $i; $i++) {

        array_push($challengeList, [$challengeId[$i],$challengeTitle[$i],$challengePreview[$i],$challengeDescription[$i],$challengeCategory[$i],$challengeDuration[$i],$challengeRarity[$i]]);
    }

    $query->close();

    return $challengeList;

}
