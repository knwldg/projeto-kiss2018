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