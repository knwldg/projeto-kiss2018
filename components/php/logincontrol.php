<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 4/11/2018
 * Time: 22:12
 */

require_once "general.php";
require_once "connection.php";

global $sql_connection;

function checkIfUserExists($value) {

    // retorna false se não existir user e true se existir

    global $sql_connection;

    $sql_op = $sql_connection->prepare("SELECT name FROM users WHERE name = ?");

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

                return true;

            }

            else return false;

        }

        else {

            throw new Exception('Type not defined');

        }

    }

    catch (Exception $exception) {

        echo("Error: $exception");
        return true;

    }

}

function registerUser($inputUser, $inputPass, $inputEmail)
{

    // retorna verdadeiro se o registo foi feito com sucesso
    // caso contrário, retorna falso

    global $sql_connection;

    try {

        unset($sql_op);

        /*

        if (!isset ($sql_connection)) {

            throw new Exception('SQL Connection failure');

        }

        if (!isset($_POST['inputUsername']) || !isset($_POST['inputPassword'])){

            throw new Exception('One or more fields were incorrectly filled');

        }


         if(checkIfUserExists($inputUser)) {

            throw new Exception('User already exists in database');

        }

        */

        $hash = password_hash($inputPass, PASSWORD_DEFAULT);

        $sql_op = $sql_connection->prepare("INSERT INTO users (name, email , password_hash) VALUES (?,?,?)");

        $sql_op->bind_param('sss', $inputUser, $inputEmail, $hash);

        if (!$sql_op->execute()) {

            throw new Exception('Cannot register user in database');

        }

        else return true;

    }

    catch (Exception $exception) {

        echo "Error: $exception";

        return false;

    }

}

function loginUser($inputUser, $inputPass) {
    global $sql_connection;
    try {
        $sql_op = $sql_connection->prepare("SELECT password_hash, idusers FROM users WHERE name = ? LIMIT 1");
        $sql_op->bind_param('s', $inputUser);
        if (!$sql_op->execute()) {
            throw new Exception('SQL query error');
        }
        $sql_op->store_result();
        $sql_op->bind_result($db_hash, $userId);
        $sql_op->fetch();
        if ($sql_op->num_rows === 1) {
            if (password_verify($inputPass, $db_hash)) {
                $_SESSION['username'] = $inputUser;
                $_SESSION['userId'] = $userId;
                return true;
            }
            else throw new Exception('No user found or password incorrect');
        }
        else throw new Exception('No user found or password incorrect');
    }
    catch(Exception $exception) {
        echo("Error: $exception");
        return false;
    }
}

