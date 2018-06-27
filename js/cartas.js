//pop-up-cartas e slider

//document.getElementById("slider_carta").style.backgroundColor="transparent";/* resto das cartas */


function change_carta(id) {

   document.getElementById("pop_up_carta"+id).style.display = "none";
    document.getElementById("slider_carta"+id).style.backgroundColor="transparent";/* carta atual */

    // document.getElementById("pop_up_carta").style.backgroundSize = "98%";

    //document.getElementById("slider_carta").style.backgroundColor="transparent"; /* carta anterior */
    // document.getElementById("slider_carta").style.backgroundColor="black"; /* carta atual */

}