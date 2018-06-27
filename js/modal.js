
function get_id(clicked_id) {

   var hide_desafio;
    var hide_desafios;
    var fotos_enviadas = clicked_id + 1;


    document.getElementById("hide-desafio-content"+clicked_id).style.display = "none";
    document.getElementById("modal"+clicked_id).style.display = "flex";


        document.getElementById("lista-fotos"+fotos_enviadas).style.display = "flex";//php
        document.getElementById("desafio"+fotos_enviadas).style.backgroundColor = "#F9FAFB";//p


        hide_desafio = document.getElementById("hide-desafio-content"+fotos_enviadas);
        hide_desafio.style.position = "absolute";
        hide_desafio.style.visibility = "hidden";
        hide_desafio.style.opacity = "0";
        hide_desafio.style.transition = "visibility 0s, opacity 0s ease-out";


    hide_desafios = document.getElementsByClassName("hide-desafio");

    for (var i = 0; i < hide_desafios.length; i++) {

        hide_desafios[i].style.zIndex = "-1";

    }

    document.getElementById("lista-fotos-fundo"+fotos_enviadas).style.position = "relative";//php

    document.getElementById("background").style.backgroundColor = "rgba(140,140,140,0.75)";
    document.getElementById("header").style.zIndex = "-1";
    document.getElementById("chest").style.zIndex = "-1";
}

function rejeitar_desafio(clicked_id) {

    var hide_desafios;

    document.getElementById("hide-desafio-content"+clicked_id).style.display = "block";
    document.getElementById("modal"+clicked_id).style.display = "none";

    hide_desafios = document.getElementsByClassName("hide-desafio");

    for (var i = 0; i < hide_desafios.length; i++) {

        hide_desafios[i].style.zIndex = "0";

    }

    //document.getElementById("lista-fotos-fundo1").style.position = "relative";//php

    document.getElementById("background").style.backgroundColor = "transparent";
    document.getElementById("header").style.zIndex = "0";
    document.getElementById("chest").style.zIndex = "10";

}

function validado(clicked_id) {

    var fotos_enviadas = clicked_id;

    var background_desafios;

    document.getElementById("lista-fotos"+fotos_enviadas).style.display = "none";//php

    background_desafios = document.getElementsByClassName("desafio-premios-colecoes");

    for (var i = 0; i < background_desafios.length; i++) {

        background_desafios[i].style.backgroundColor = "transparent";

    }

    document.getElementById("lista-fotos-fundo"+fotos_enviadas).style.position = "absolute";//php
    document.getElementById("lista-fotos-fundo"+fotos_enviadas).style.visibility = "hidden"; //php
    document.getElementById("lista-fotos-fundo"+fotos_enviadas).style.opacity = "0"; //php
    document.getElementById("lista-fotos-fundo"+fotos_enviadas).style.backgroundColor = "#F9FAFB";//php
    document.getElementById("lista-fotos-fundo"+fotos_enviadas).style.border = "3px solid #009245"; //php
    document.getElementById("lista-fotos-fundo"+fotos_enviadas).style.transition = "position 0s, visibility 1s, opacity 1s ease-out"; //php
    document.getElementById("lista-fotos-fundo"+fotos_enviadas).style.transitionDelay = "4s"; //php

    document.getElementById("hide-desafio-content"+fotos_enviadas).style.position = "relative"; //php
    document.getElementById("hide-desafio-content"+fotos_enviadas).style.visibility = "visible"; //php
    document.getElementById("hide-desafio-content"+fotos_enviadas).style.opacity = "1"; //php
    document.getElementById("hide-desafio-content"+fotos_enviadas).style.transition = "visibility 1s, opacity 1s ease-in"; //php
    document.getElementById("hide-desafio-content"+fotos_enviadas).style.transitionDelay = "4.5s"; //php

    document.getElementById("lista-fotos-validar-reportar"+fotos_enviadas).style.display = "flex";

    document.getElementById("verificacao"+fotos_enviadas).src="../img/icon/verification2.svg";
    document.getElementById("verificacao-titulo"+fotos_enviadas).innerHTML ="VALIDADO!";
    document.getElementById("verificacao-titulo"+fotos_enviadas).style.color ="#009245";


}

function reportado(clicked_id) {

    var fotos_enviadas = clicked_id;

    var background_desafios;

    document.getElementById("lista-fotos"+fotos_enviadas).style.display = "none";//php

    background_desafios = document.getElementsByClassName("desafio-premios-colecoes");

    for (var i = 0; i < background_desafios.length; i++) {

        background_desafios[i].style.backgroundColor = "transparent";

    }

    document.getElementById("lista-fotos-fundo"+fotos_enviadas).style.position = "absolute";//php
    document.getElementById("lista-fotos-fundo"+fotos_enviadas).style.visibility = "hidden"; //php
    document.getElementById("lista-fotos-fundo"+fotos_enviadas).style.opacity = "0"; //php
    document.getElementById("lista-fotos-fundo"+fotos_enviadas).style.backgroundColor = "#F9FAFB";//php
    document.getElementById("lista-fotos-fundo"+fotos_enviadas).style.border = "3px solid #ff0000"; //php
    document.getElementById("lista-fotos-fundo"+fotos_enviadas).style.transition = "position 0s, visibility 1s, opacity 1s ease-out"; //php
    document.getElementById("lista-fotos-fundo"+fotos_enviadas).style.transitionDelay = "4s"; //php


    document.getElementById("hide-desafio-content"+fotos_enviadas).style.position = "relative"; //php
    document.getElementById("hide-desafio-content"+fotos_enviadas).style.visibility = "visible"; //php
    document.getElementById("hide-desafio-content"+fotos_enviadas).style.opacity = "1"; //php
    document.getElementById("hide-desafio-content"+fotos_enviadas).style.transition = "visibility 1s, opacity 1s ease-in"; //php
    document.getElementById("hide-desafio-content"+fotos_enviadas).style.transitionDelay = "4.5s"; //php

    document.getElementById("lista-fotos-validar-reportar"+fotos_enviadas).style.display = "flex";

    document.getElementById("verificacao"+fotos_enviadas).src="../img/icon/verification_error2.svg";
    document.getElementById("verificacao-titulo"+fotos_enviadas).innerHTML ="REPORTADO!";
    document.getElementById("verificacao-titulo"+fotos_enviadas).style.color ="#ff0000";

}


function click_carta(name,id,quantidade) {

    document.getElementById("pop-up-carta-img").style.display = "flex";

    document.getElementById("front").style.background = 'url("../img/cartas/equipa/frente/' + id + '.png") no-repeat center';
    document.getElementById("front").style.backgroundSize = "98%";
    document.getElementById("cards-name").innerHTML = name;

    document.getElementById("chest").style.zIndex = "-1";

    if (quantidade >= 3) {

        document.getElementById("level-up").style.display = "block";

        document.getElementById("level-up").addEventListener("click", function () {

            document.getElementById("front").style.background = 'url("../img/cartas/equipa/frente/evolucoes/' + id + '.png") no-repeat center';
            document.getElementById("front").style.backgroundSize = "98%";

        });

    }

}

function click_carta_professores(name,id,quantidade) {

    document.getElementById("pop-up-carta-img").style.display = "flex";

    document.getElementById("front").style.background = 'url("../img/cartas/professores/frente/' + id + '.png") no-repeat center';
    document.getElementById("front").style.backgroundSize = "98%";
    document.getElementById("cards-name").innerHTML = name;

    document.getElementById("chest").style.zIndex = "-1";

    if (quantidade >= 3) {

        document.getElementById("level-up").style.display = "block";

        document.getElementById("level-up").addEventListener("click", function () {

            document.getElementById("front").style.background = 'url("../img/cartas/professores/frente/evolucoes/' + id + '.png") no-repeat center';
            document.getElementById("front").style.backgroundSize = "98%";

        });

    }

}

function click_carta_funcionarios(name,id,quantidade) {

    document.getElementById("pop-up-carta-img").style.display = "flex";

    document.getElementById("front").style.background = 'url("../img/cartas/funcionarios/frente/' + id + '.png") no-repeat center';
    document.getElementById("front").style.backgroundSize = "98%";
    document.getElementById("cards-name").innerHTML = name;

    document.getElementById("chest").style.zIndex = "-1";

    if (quantidade >= 3) {

        document.getElementById("level-up").style.display = "block";

        document.getElementById("level-up").addEventListener("click", function () {

            document.getElementById("front").style.background = 'url("../img/cartas/funcionarios/frente/evolucoes/' + id + '.png") no-repeat center';
            document.getElementById("front").style.backgroundSize = "98%";

        });

    }

}


function open_menu_home() {

    document.getElementById("main-menu").style.visibility = "visible";
    document.getElementById("main-menu").style.transition = "all 0.2s ease-in";

    document.getElementById("hide-menu").style.visibility = "visible";
    document.getElementById("hide-menu").style.transition = "all 0.2s ease-in";
    document.getElementById("hide-menu").style.transitionDelay = "0.3s";

    document.getElementById("main-menu-itens").style.opacity = "1";
    document.getElementById("main-menu-itens").style.right = "0";
    document.getElementById("main-menu-itens").style.transition = "all 0.3s linear";


}

function close_menu_home() {

    document.getElementById("main-menu").style.visibility = "hidden";
    document.getElementById("main-menu").style.transition = "all 0.2s ease-in";

    document.getElementById("hide-menu").style.visibility = "hidden";
    document.getElementById("hide-menu").style.transition = "all 0.5ms ease-in";

    document.getElementById("main-menu-itens").style.opacity = "0";
    document.getElementById("main-menu-itens").style.right = "24em";
    document.getElementById("main-menu-itens").style.transition = "all 0.3s linear";

}

function open_menu() {

    document.getElementById("chest").style.zIndex = "-1";

    document.getElementById("main-menu").style.visibility = "visible";
    document.getElementById("main-menu").style.transition = "all 0.2s ease-in";

    document.getElementById("hide-menu").style.visibility = "visible";
    document.getElementById("hide-menu").style.transition = "all 0.2s ease-in";
    document.getElementById("hide-menu").style.transitionDelay = "0.3s";

    document.getElementById("main-menu-itens").style.opacity = "1";
    document.getElementById("main-menu-itens").style.right = "0";
    document.getElementById("main-menu-itens").style.transition = "all 0.3s linear";

}

function close_menu() {

    document.getElementById("main-menu").style.visibility = "hidden";
    document.getElementById("main-menu").style.transition = "all 0.2s ease-in";

    document.getElementById("hide-menu").style.visibility = "hidden";
    document.getElementById("hide-menu").style.transition = "all 0.5ms ease-in";

    document.getElementById("main-menu-itens").style.opacity = "0";
    document.getElementById("main-menu-itens").style.right = "24em";
    document.getElementById("main-menu-itens").style.transition = "all 0.3s linear";

    document.getElementById("chest").style.zIndex = "1";
    document.getElementById("chest").style.transitionDelay = "0.2s";

}

function hide_main_pages() {

    document.getElementById("main-pages").style.borderTop = "0";

    document.getElementById("arrow").style.visibility = "hidden";
    document.getElementById("arrow-up").style.visibility = "visible";

    document.getElementById("pages").style.display = "none";
    document.getElementById("pages").style.opacity = "0";
    document.getElementById("pages").style.transition = "all 0.2s ease-in";

}

function show_main_pages() {

    document.getElementById("main-pages").style.borderTop = "2px solid rgba(249, 250, 251, 1)";

    document.getElementById("pages").style.display = "block";
    document.getElementById("pages").style.opacity = "1";
    document.getElementById("pages").style.transition = "all 0.2s ease-in";

    document.getElementById("arrow").style.visibility = "visible";
    document.getElementById("arrow-up").style.visibility = "hidden";


}

function hide_notifications() {


    document.getElementById("notification-line").style.borderBottom = "0";

    document.getElementById("arrow-notifications").style.visibility = "hidden";
    document.getElementById("arrow-notifications-up").style.visibility = "visible";

    document.getElementById("notification-pages").style.display = "none";
    document.getElementById("notification-pages").style.opacity = "0";
    document.getElementById("notification-pages").style.transition = "all 0.2s ease-in";

}

function show_notifications() {

    document.getElementById("notification-line").style.borderBottom = "2px solid rgba(249, 250, 251, 1)";

    document.getElementById("notification-pages").style.display = "block";
    document.getElementById("notification-pages").style.opacity = "1";
    document.getElementById("notification-pages").style.transition = "all 0.2s ease-in";

    document.getElementById("arrow-notifications").style.visibility = "visible";
    document.getElementById("arrow-notifications-up").style.visibility = "hidden";

}



/*function yes_or_not(clicked_id) {

    var hide_desafios;
    //var lista_fotos;





    /*lista_fotos = document.getElementsByClassName("lista-fotos-conteudo");

    for (var i = 0; i < lista_fotos.length; i++) {

        lista_fotos[i].style.display = "flex";
    }


    //lista das fotos enviadas dos utilizadores

}*/


