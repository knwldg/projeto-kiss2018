<?php
/**
 * Created by PhpStorm.
 * User: Rodrigo
 * Date: 21/06/18
 * Time: 16:33
 */

global $challenges;

require_once "../components/php/general.php";
require_once "../components/php/connection.php";
require_once "../components/php/challengeControl.php";

issueChallenge("farts", "butts", 2);

dailyChallenge();
