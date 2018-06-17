
//pop-up-cartas e slider
document.getElementById("pop_up_carta").style.background = "url('../img/cartas/equipa/frente/equipa2.png') no-repeat center";
document.getElementById("pop_up_carta").style.backgroundSize = "98%";

document.getElementById("slider_carta").style.backgroundColor="black";/* carta atual */
document.getElementById("slider_detalhe_bau").style.backgroundColor="rgb(71,193,102)";/* bau detalhe */
//document.getElementById("slider_carta").style.backgroundColor="transparent";/* resto das cartas */


function change_carta() {

    document.getElementById("pop_up_carta").style.background = "url('../img/cartas/equipa/frente/equipa4.png') no-repeat center";
    document.getElementById("pop_up_carta").style.backgroundSize = "98%";

    //document.getElementById("slider_carta").style.backgroundColor="transparent"; /* carta anterior */
    // document.getElementById("slider_carta").style.backgroundColor="black"; /* carta atual */

}


//baus
function open_chest(id_chest) {


    document.getElementById("hide-chests").style.display = "none";
    document.getElementById("cartas-chest-animation").style.display = "block";
    document.getElementById("chest-close-baus").style.display = "none";
    document.getElementById("chest").style.zIndex = "-1";

}

function open_baus() {

    var hide_desafios;

    document.getElementById("background").style.backgroundColor = "rgba(140, 140, 140, 0.75)";

    document.getElementById("header").style.zIndex = "-1";

    hide_desafios = document.getElementsByClassName("desafio-premios-colecoes");

    for (var x = 0; x < hide_desafios.length; x++) {

        hide_desafios[x].style.position = "relative";
        hide_desafios[x].style.zIndex = "-1";
    }

    document.getElementById("div-baus").style.display = "flex";

    document.getElementById("chest-close-baus").style.display = "block";

}

function close_baus() {

    var show_desafios;

    document.getElementById("background").style.backgroundColor = "rgba(249, 250, 251, 0.75)";
    document.getElementById("header").style.zIndex = "0";

    show_desafios = document.getElementsByClassName("desafio-premios-colecoes");

    for (var i = 0; i < show_desafios.length; i++) {

        show_desafios[i].style.position = "relative";
        show_desafios[i].style.zIndex = "0";
    }

    document.getElementById("div-baus").style.display = "none";

    document.getElementById("chest-close-baus").style.display = "none";

}