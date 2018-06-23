<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 4/11/2018
 * Time: 22:12
 */

require_once "connection.php";

function listUsers()
{

    // disponibiliza lista de utilizadores por ordem de registo na db no array global $userList

    global $sql_connection;
    global $userList;

    $userList = [];
    $sql_op = $sql_connection->prepare("SELECT name FROM users");
    $sql_op->execute();
    $sql_op->store_result();

    $num_users = $sql_op->num_rows;

    for ($i = 0; $i < $num_users; $i++) {

        $sql_op->store_result();
        $sql_op->bind_result($userList[$i]);
        $sql_op->fetch();

    }

    return true;

}


function listCards() {

    // disponibiliza lista de cartas por ordem de registo na db no array global $cardList

    global $sql_connection;
    global $cardList;

    $cardList = [];
    $sql_op = $sql_connection->prepare("SELECT name, rarity, collection FROM cards");
    $sql_op->execute();
    $sql_op->store_result();

    $num_cards = $sql_op->num_rows;

    for ($i = 0; $i < $num_cards; $i++) {

        $sql_op->store_result();
        $sql_op->bind_result($cardList[$i]);
        $sql_op->fetch();

    }

    return true;

}

function getUserCards($userId)
{

    global $sql_connection;
    global $userCollection;

    if ($sql_connection->connect_errno) {
        printf("Connect failed: %s\n", $sql_connection->connect_error);
        exit();
    }

    $query = $sql_connection->prepare("SELECT `cards_idcards`, `quantity` FROM ark WHERE users_idusers = ?");
    $query->bind_param("i", $userId);
    $query->execute();
    $result = $query->get_result();

    $userCollection = array();

    if ($result->num_rows === 0) exit('No rows');
    while ($row = $result->fetch_assoc()) {
        $cardId[] = $row['cards_idcards'];
        $quantity[] = $row['quantity'];
    }

    for ($i = 0; $result->num_rows > $i; $i++) {

        array_push($userCollection, [$cardId[$i], $quantity[$i]]);
    }

    $query->close();

    return $userCollection;

}



function getUserData($userId)
{

    global $sql_connection;
    global $name;
    global $keys;

    $sql_op = $sql_connection->prepare("SELECT `name`, `keys` FROM users WHERE idusers = ?");

    $sql_op->bind_param('i', $userId);

    if (!$sql_op->execute()) {

        return false;

    }

    $sql_op->store_result();
    $sql_op->bind_result($name, $keys);
    $sql_op->fetch();

    return array($name, $keys);

}

function findIdByUsername($value)
{

    // retorna o id do user dado

    global $sql_connection;

    $sql_op = $sql_connection->prepare("SELECT idusers FROM users WHERE name = ?");

    try {

        if (isset($sql_op)) {

            $sql_op->bind_param('s', $value);

            if (!$sql_op->execute()) {

                throw new Exception('SQL query failure');

            }

            $sql_op->store_result();
            $sql_op->bind_result($value_db);
            $sql_op->fetch();

            if ($sql_op->num_rows > 0) {

                return $value_db;

            } else return false;

        } else {

            throw new Exception('Type not defined');

        }

    } catch (Exception $exception) {

        echo("Error: $exception");
        return true;

    }

}

function loot($userId) {

    whatCard();

    addCard($userId, whatCard());


}

function whatCard() {

    // retorna o id da carta de reward

      return rand(1, 19);

}

function numCards($userId, $cardId)
{

    global $sql_connection;

    $sql_op = $sql_connection->prepare("SELECT quantity FROM ark WHERE users_idusers = ? AND cards_idcards = ?");

    $sql_op->bind_param('ii', $userId, $cardId);

    if (!$sql_op->execute()) {

        return false;

    }

    $sql_op->store_result();
    $sql_op->bind_result($quantity);
    $sql_op->fetch();

    return $quantity;

}

function addCard($userId, $cardId)
{

    global $sql_connection;

    try {

        if (!isset ($sql_connection)) {

            throw new Exception('SQL Connection failure');

        }

        $quantity = numCards($userId, $cardId);

        if ($quantity == 0) {

            $sql_op = $sql_connection->prepare("INSERT INTO ark (users_idusers, cards_idcards, quantity) VALUES (?,?,1)");

            $sql_op->bind_param('ii', $userId, $cardId);

            if (!$sql_op->execute()) {
                throw new Exception('Error');
            }


        }

        else {

            $newQuantity = $quantity+1;

            $sql_op = $sql_connection->prepare("UPDATE ark SET quantity = ? WHERE users_idusers = ? AND cards_idcards = ?");
            $sql_op->bind_param('iii', $newQuantity, $userId, $cardId);

            if (!$sql_op->execute()) {
                throw new Exception('error');
            }

            else return true;
        }


        }

    catch (Exception $exception) {
        echo ("Error: $exception");
        return false;
    }
    return true;
}

function evolveCard($userId, $cardId)
{

    global $sql_connection;

    try {

        if (!isset ($sql_connection)) {

            throw new Exception('SQL Connection failure');

        }

        $quantity = numCards($userId, $cardId);

        if ($quantity > 2) {

            $newQuantity = $quantity - 4;

            $sql_op = $sql_connection->prepare("UPDATE ark SET quantity = ? WHERE users_idusers = ? AND cards_idcards = ?");
            $sql_op->bind_param('iii', $newQuantity, $userId, $cardId);


            if (!$sql_op->execute()) {
                throw new Exception('Error');
            }

            $evolutionId = $cardId + 1000;

            addCard($userId, $evolutionId);

        } else {

            exit("not enough cards bud");

        }


    } catch (Exception $exception) {
        echo("Error: $exception");
        return false;
    }
    return true;

}

function luck()
{

    $first_spin = rand(0, 20);

    if ($first_spin > 8) {
        $second_spin = rand(0, 20);

        if ($second_spin > 10) {
            $third_spin = rand(0, 20);

            if ($third_spin > 14) {
                $fourth_spin = rand(0, 20);

                if ($fourth_spin > 18) {

                    return 4;

                } else return 3;

            } else return 2;

        } else return 1;

    } else return 0;

}

function openBox($userId)
{

    global $rewards;

    $rewards = array();

    //determinar a luck, aka quantas cartas vamos dar

    $luck = luck();

    //array com os rewards para mostrar clientside

    $rewards = array();

    for ($i = 0; $luck > $i; $i++) {

        $rewardCard = addCard($userId, whatCard());

        array_push($rewards, $rewardCard);

    }

}


