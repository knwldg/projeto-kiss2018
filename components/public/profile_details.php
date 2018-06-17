<?php
session_start();

#TODO FIX THIS STUPID INCLUDE

$sql_connection = new mysqli('localhost', 'root', '', 'kiss');
mysqli_set_charset($sql_connection, "utf8");

function getUserData($userId)
{

    global $sql_connection;
    global $name;
    global $keys;

    $sql_op = $sql_connection->prepare("SELECT `name`, `keys` FROM users WHERE name = ?");

    $sql_op->bind_param('i', $userId);

    if (!$sql_op->execute()) {

        return false;

    }

    $sql_op->store_result();
    $sql_op->bind_result($name, $keys);
    $sql_op->fetch();

    return array($name, $keys);

}

$userData = getUserData($_SESSION['username']);

?>


<form id="profile-image" method="post" action="">

    <div class="image-upload">

        <div class="select-image">

            <input type="file" name="image-uploaded" class="pointer">
            <!-- default-image; background-image; display:block -> display:none -->

        </div>

        <span id="user-name" class="profile-position font600"><?= $_SESSION['username']; ?></span>

    </div>


</form>

<div class="count-keys font700">
    <span>CHAVES</span>
    <span id="icon-key" class="center">&nbsp</span>
    <span class="profile-font-size"><?= $userData[1] ?></span>
</div>

