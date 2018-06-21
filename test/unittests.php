<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 21/06/18
 * Time: 16:33
 */

require_once "../components/php/general.php";
require_once "../components/php/connection.php";

addCard(11, 7);
echo(numCards(11, 7));

addCard(11, 14);
echo(numCards(11, 14));
