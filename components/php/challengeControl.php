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

//TODO make this not horribly broken
/*
function retrieveChallenges() {

    global $sql_connection;
    global $challenges;

    if ($sql_connection->connect_errno) {
        printf("Connect failed: %s\n", $sql_connection->connect_error);
        exit();
    }

    $result = $sql_connection->query("SELECT `title`, `description`, `rewards` FROM challenges");

    $challenges = array();

    if ($result->num_rows === 0) exit('No rows');
    while ($row = $result->fetch_assoc()) {
        $title[] = $row['title'];
        $description[] = $row['description'];
        $rewards[] = $row['rewards'];
    }

    for ($i = 0; $result->num_rows > $i; $i++) {

        array_push($challenges, [$title[$i], $description[$i], $rewards[$i]]);
    }

}
*/