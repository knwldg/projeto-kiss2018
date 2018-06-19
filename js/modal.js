
function get_id(clicked_id) {

    var hide_desafio;
    var hide_desafios;


    document.getElementById(clicked_id).style.display = "none";
    document.getElementById("modal").style.display = "flex";// nao consigo buscar o id

    document.getElementById("lista-fotos1").style.display = "flex";//php
    document.getElementById("desafio1").style.backgroundColor = "#F9FAFB";//php

    hide_desafio = document.getElementById("hide-desafio-content1");
    hide_desafio.style.position = "absolute";
    hide_desafio.style.visibility = "hidden";
    hide_desafio.style.opacity = "0";
    hide_desafio.style.transition = "visibility 0s, opacity 0s ease-out";


    hide_desafios = document.getElementsByClassName("hide-desafio");

    for (var i = 0; i < hide_desafios.length; i++) {

        hide_desafios[i].style.zIndex = "-1";

    }
    document.getElementById("lista-fotos-fundo1").style.position = "relative";//php

    document.getElementById("background").style.backgroundColor = "rgba(140,140,140,0.75)";
    document.getElementById("header").style.zIndex = "-1";
    document.getElementById("chest").style.zIndex = "-1";
}

function validado() {

    var background_desafios;

    document.getElementById("lista-fotos1").style.display = "none";//php

    background_desafios = document.getElementsByClassName("desafio-premios-colecoes");

    for (var i = 0; i < background_desafios.length; i++) {

        background_desafios[i].style.backgroundColor = "transparent";

    }

    document.getElementById("lista-fotos-fundo1").style.position = "absolute";//php
    document.getElementById("lista-fotos-fundo1").style.visibility = "hidden"; //php
    document.getElementById("lista-fotos-fundo1").style.opacity = "0"; //php
    document.getElementById("lista-fotos-fundo1").style.backgroundColor = "#F9FAFB";//php
    document.getElementById("lista-fotos-fundo1").style.border = "3px solid #009245"; //php
    document.getElementById("lista-fotos-fundo1").style.transition = "position 0s, visibility 1s, opacity 1s ease-out"; //php
    document.getElementById("lista-fotos-fundo1").style.transitionDelay = "4s"; //php

    document.getElementById("hide-desafio-content1").style.position = "relative"; //php
    document.getElementById("hide-desafio-content1").style.visibility = "visible"; //php
    document.getElementById("hide-desafio-content1").style.opacity = "1"; //php
    document.getElementById("hide-desafio-content1").style.transition = "visibility 1s, opacity 1s ease-in"; //php
    document.getElementById("hide-desafio-content1").style.transitionDelay = "4.5s"; //php

    document.getElementById("lista-fotos-validar-reportar").style.display = "flex";

    document.getElementById("verificacao").src="../img/icon/verification2.svg";
    document.getElementById("verificacao-titulo").innerHTML ="VALIDADO!";
    document.getElementById("verificacao-titulo").style.color ="#009245";


}

function reportado() {

    var background_desafios;

    document.getElementById("lista-fotos1").style.display = "none";//php

    background_desafios = document.getElementsByClassName("desafio-premios-colecoes");

    for (var i = 0; i < background_desafios.length; i++) {

        background_desafios[i].style.backgroundColor = "transparent";

    }

    document.getElementById("lista-fotos-fundo1").style.position = "absolute";//php
    document.getElementById("lista-fotos-fundo1").style.visibility = "hidden"; //php
    document.getElementById("lista-fotos-fundo1").style.opacity = "0"; //php
    document.getElementById("lista-fotos-fundo1").style.backgroundColor = "#F9FAFB";//php
    document.getElementById("lista-fotos-fundo1").style.border = "3px solid #ff0000"; //php
    document.getElementById("lista-fotos-fundo1").style.transition = "position 0s, visibility 1s, opacity 1s ease-out"; //php
    document.getElementById("lista-fotos-fundo1").style.transitionDelay = "4s"; //php


    document.getElementById("hide-desafio-content1").style.position = "relative"; //php
    document.getElementById("hide-desafio-content1").style.visibility = "visible"; //php
    document.getElementById("hide-desafio-content1").style.opacity = "1"; //php
    document.getElementById("hide-desafio-content1").style.transition = "visibility 1s, opacity 1s ease-in"; //php
    document.getElementById("hide-desafio-content1").style.transitionDelay = "4.5s"; //php

    document.getElementById("lista-fotos-validar-reportar").style.display = "flex";

    document.getElementById("verificacao").src="../img/icon/verification_error2.svg";
    document.getElementById("verificacao-titulo").innerHTML ="REPORTADO!";
    document.getElementById("verificacao-titulo").style.color ="#ff0000";

}

function click_carta() {

    document.getElementById("pop-up-carta-img").style.display = "flex";
    document.getElementById("chest").style.zIndex = "-1";


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


