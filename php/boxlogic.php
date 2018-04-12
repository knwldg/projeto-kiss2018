<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 4/12/2018
 * Time: 20:15
 */

require_once "../php/general.php";

/* existem caixas brancas (id 0), verdes (1), azuis (2), roxas (3) e douradas (4)
*/

function luck() {

    $first_spin = rand(0, 20);

    if ($first_spin > 8) {
        $second_spin = rand(0, 20);

        if ($second_spin > 10) {
            $third_spin = rand(0, 20);

            if($third_spin > 14) {
                $fourth_spin = rand(0,20);

                if ($fourth_spin > 18) {

                    return 4;

                }

                else return 3;

            }

            else return 2;

        }

        else return 1;

    }

    else return 0;

}
function findIdByUsername($value) {

    // retorna o id do user dado

    global $sql_connection;

    $sql_op = $sql_connection->prepare("SELECT idusers FROM users WHERE username = ?");

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


function createBox($owner) {

    global $sql_connection;

    $type = luck();

    $ownerid = findIdByUsername($owner);

    $sql_op = $sql_connection->prepare("INSERT INTO boxes (type, owner) VALUES (?,?)");

    $sql_op->bind_param('ii', $type,$ownerid);

    $sql_op->execute();

}