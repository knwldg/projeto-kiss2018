
//baus - passar id
function open_chest(raridade) {

    document.getElementById("hide-chests").style.display = "none";
    document.getElementById("cartas-chest-animation").style.display = "block";
    document.getElementById("chest-close-baus").style.display = "none";
    document.getElementById("chest").style.zIndex = "-1";

    switch (raridade) {
        case 1:
            document.getElementById("animation").style.background = "linear-gradient(to top, rgb(236,233,230) , rgb(255,255,255))";
            break;
        case 2:
            document.getElementById("animation").style.background = "linear-gradient(to top, rgb(123,146,10) , rgb(173,209,0))";
            break;
        case 3:
            document.getElementById("animation").style.background = "linear-gradient(to top, rgb(58,123,213) , rgb(0,210,255))";
            break;
        case 4:
            document.getElementById("animation").style.background = "linear-gradient(to top, rgb(110,72,170) , rgb(157,80,221))";
            break;
        case 5:
            document.getElementById("animation").style.background = "linear-gradient(to top, rgb(244,208,63) , rgb(255,242,0))";
            break;
    }



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

function open_baus_homepage() {

    var hide_homepage_content;

    document.getElementById("background").style.backgroundColor = "rgba(140, 140, 140, 0.75)";

    document.getElementById("header").style.zIndex = "-1";

    hide_homepage_content = document.getElementsByClassName("home-hide-content");

    for (var x = 0; x < hide_homepage_content.length; x++) {

        hide_homepage_content[x].style.position = "relative";
        hide_homepage_content[x].style.zIndex = "-1";
    }

    document.getElementById("div-baus").style.display = "flex";

}