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

function getUserCards($userId) {

    global $sql_connection;
    global $userCards;

    $sql_op = $sql_connection->prepare("SELECT `cards_idcards`, `quantity` FROM ark WHERE users_idusers = ?");

    $sql_op->bind_param('i', $userId);

    if (!$sql_op->execute()) {

        return false;

    }

    echo($sql_op->num_rows);

    $sql_op->store_result();
    $sql_op->bind_result($cards, $quantity);
    $sql_op->fetch();


    $userCards = [$cards, $quantity];


    return $userCards;

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


// TODO redo this

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


