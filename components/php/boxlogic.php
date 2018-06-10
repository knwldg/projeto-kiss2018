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



