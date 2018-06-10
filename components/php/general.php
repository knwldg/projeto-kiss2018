<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 4/11/2018
 * Time: 22:12
 */
require_once "../php/connection.php";

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

/*
function createBox($owner)
{

    global $sql_connection;

    $type = luck();

    $ownerid = findIdByUsername($owner);

    $sql_op = $sql_connection->prepare("INSERT INTO boxes (type, owner) VALUES (?,?)");

    $sql_op->bind_param('ii', $type, $ownerid);

    $sql_op->execute();

}

/
