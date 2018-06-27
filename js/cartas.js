

function change_carta(id) {

   document.getElementById("pop_up_carta"+id).style.display = "none";
    document.getElementById("slider_carta"+id).style.backgroundColor="transparent";

    if(!id){
        document.getElementById("detalhe-bau").style.zIndex="0";
    }



}