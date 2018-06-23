<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 21/06/18
 * Time: 16:33
 */

require_once "../components/php/general.php";
require_once "../components/php/connection.php";

addCard(12, 7);
addCard(12, 14);

print_r(findIdByUsername("testing"));

findIdByUsername("testing");

evolveCard(12, 7);


