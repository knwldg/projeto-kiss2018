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

function registerUser($inputUser, $inputPass) {

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
        $sql_op = $sql_connection->prepare("INSERT INTO users (name, password_hash) VALUES (?,?)");
        $sql_op->bind_param('ss', $inputUser, $hash);

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

        $sql_op = $sql_connection->prepare("SELECT password_hash FROM users WHERE name = ?");

        $sql_op->bind_param('s', $inputUser);

        if (!$sql_op->execute()) {

            throw new Exception('SQL query error');

        }

        $sql_op->store_result();
        $sql_op->bind_result($db_hash);
        $sql_op->fetch();

        if ($sql_op->num_rows === 1) {

            if (password_verify($inputPass, $db_hash)) {

                // utilizador autenticado

                $_SESSION['username'] = $inputUser;

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

/*
function contentFetcher($pageId) {

    // define o array $plantData com os índices pageId, nomePlanta e textoPlanta

    global $plantData;
    global $sql_connection;

    try {

        $sql_op = $sql_connection->prepare("SELECT nome_planta, texto_planta FROM plantas WHERE id_plantas = ?");
        $sql_op->bind_param('i', $pageId);

        if (!$sql_op ->execute()) {

            throw new Exception('SQL query error');

        }

        $sql_op->store_result();
        $sql_op->bind_result($nome_planta, $texto_planta);
        $sql_op->fetch();

        $plantData = array('pageId'=>$pageId, 'nomePlanta'=>$nome_planta, 'textoPlanta'=>$texto_planta);

        return true;

    }

    catch (Exception $exception) {

        echo "Error: $exception";

        return false;

    }

}

function privilegeChecker($level, $user) {

    // 1 = user, 2 = editor, 3 = admin

    global $sql_connection;

    $sql_op = $sql_connection->prepare("SELECT roles_id_roles FROM users WHERE nome_user = ?");
    $sql_op->bind_param('s', $user);
    $sql_op->store_result();
    $sql_op->bind_result($role);
    $sql_op->fetch();

    if ($level == $role) {

        return true;

    }

    else {

        return false;

    }



}

function addArticle($plantName, $plantText, $articleSubtitle) {

    global $sql_connection;

    try {

        if (!isset ($sql_connection)) {

            throw new Exception('SQL Connection failure');

        }

        if(checkIfExists(3, $plantName)) {

            throw new Exception('Plant already exists in database');

        }

        $sql_op = $sql_connection->prepare("INSERT INTO plantas (nome_planta, texto_planta, subtitulo_planta) VALUES (?,?,?)");
        $sql_op->bind_param('sss', $plantName, $plantText, $articleSubtitle);

//		var_dump($sql_connection);

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

function editArticle($articleId, $plantText) {

    global $sql_connection;

    try {

        $sql_op = $sql_connection->prepare("UPDATE plantas SET texto_planta = ? WHERE id_plantas = ?");
        $sql_op->bind_param('si', $plantText, $articleId);

        if (!$sql_op->execute()) {

            throw new Exception('Cannot update plant record in database');

        }

    }

    catch (Exception $exception) {

        echo ("Error: $exception");

    }

}

function editUser($userId, $level) {

    global $sql_connection;

    try {

        $sql_op = $sql_connection->prepare("UPDATE users SET roles_id_roles = ? WHERE id_users = ?");
        $sql_op->bind_param('ii', $userId, $level);

        if (!$sql_op->execute()) {

            throw new Exception('Cannot update user record in database');

        }

    }

    catch (Exception $exception) {

        echo ("Error: $exception");

    }

}

function listUsers() {

    global $userList;
    global $sql_connection;

    $sql_op = $sql_connection->query("SELECT nome_user, roles_id_roles, id_users FROM users ORDER BY id_users ASC");

    for ($userList = array(); $row = $sql_op->fetch_assoc(); $userList[] = $row);

}

*/
