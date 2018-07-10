
/*
function verification_login() {
    //nao enviado
    document.getElementById("submit").style.background ="0";
    document.getElementById("submit").style.backgroundColor ="#ff0000";
    document.getElementById("submit").value = "incorreto";
    document.getElementById("submit").style.transition = "all 0.1s ease-in";

    document.getElementById("login-verification").style.opacity = "1";
    document.getElementById("login-verification").innerHTML = "verifique o seu username e password";//depois colocas a tua maneira
    document.getElementById("login-verification").style.transition = "opacity 1s ease-in";
    document.getElementById("login-verification").style.transitionDelay = "0.2s";
}

function verification_registo() {
    //enviado
    document.getElementById("submit").style.animation ="0";
    document.getElementById("submit").style.background ="0";
    document.getElementById("submit").style.backgroundColor ="#009245";
    document.getElementById("submit").value = "registado";
    document.getElementById("submit").style.transition = "background 0.1s, background-color 0.1s ease-in";

    //nao enviado
    document.getElementById("submit").style.background ="0";
    document.getElementById("submit").style.backgroundColor ="#ff0000";
    document.getElementById("submit").value = "erro";
    document.getElementById("submit").style.transition = "all 0.1s ease-in";

    document.getElementById("login-verification").style.opacity = "1";
    document.getElementById("login-verification").innerHTML = "username já existente!";//depois colocas a tua maneira
    document.getElementById("login-verification").style.transition = "opacity 1s ease-in";
    document.getElementById("login-verification").style.transitionDelay = "0.2s";
}
*/

function change_submit(clicked_id) {

    document.getElementById("inputUsername").style.border ="2px solid rgba(140,140,140,0.70)";
    document.getElementById("inputPassword").style.border ="2px solid rgba(140,140,140,0.70)";
    document.getElementById("inputEmail").style.border ="2px solid rgba(140,140,140,0.70)";

    document.getElementById(clicked_id).style.borderColor = "rgba(247,152,104,1)";
    document.getElementById(clicked_id).style.opacity = "1";

    document.getElementById("submit").style.visibility ="visible";

    document.getElementById("submit").style.webkitTransition = "visibility 1s ease-in";
    document.getElementById("submit").style.transition = "visibility 1s ease-in";

    document.getElementById("submit").style.background ="linear-gradient(to right, rgba(247,152,104,0.90) , rgba(246,181,62,0.90))";
    document.getElementById("submit").value = "log in";

    document.getElementById("submit").style.webkitTransition = "all 1s ease-out";
    document.getElementById("submit").style.transition = "all 1s ease-out";

    document.getElementById("login-verification").style.opacity = "0";

    document.getElementById("login-verification").style.webkitTransition = "opacity 0.2s ease-out";
    document.getElementById("login-verification").style.transition = "opacity 0.2s ease-out";


}

function change_submit_login(clicked_id) {

    document.getElementById("inputUsername").style.border ="2px solid rgba(140,140,140,0.70)";
    document.getElementById("inputPassword").style.border ="2px solid rgba(140,140,140,0.70)";

    document.getElementById(clicked_id).style.borderColor = "rgba(247,152,104,1)";
    document.getElementById(clicked_id).style.opacity = "1";

    document.getElementById("submit").style.visibility ="visible";

    document.getElementById("submit").style.webkitTransition = "visibility 1s ease-in";
    document.getElementById("submit").style.transition = "visibility 1s ease-in";

    document.getElementById("submit").style.background ="linear-gradient(to right, rgba(247,152,104,0.90) , rgba(246,181,62,0.90))";
    document.getElementById("submit").value = "log in";

    document.getElementById("submit").style.webkitTransition = "all 1s ease-out";
    document.getElementById("submit").style.transition = "all 1s ease-out";

    document.getElementById("login-verification").style.opacity = "0";

    document.getElementById("login-verification").style.webkitTransition = "opacity 0.2s ease-out";
    document.getElementById("login-verification").style.transition = "opacity 0.2s ease-out";

}

function rejeitar_daily_challenge() {

    document.getElementById("rejeitar-desafio").style.display = "none";
    document.getElementById("rejeitar-desafio").style.opacity = "0";

    document.getElementById("rejeitar-desafio").style.webkitTransition = "opacity 2s ease-out";
    document.getElementById("rejeitar-desafio").style.transition = "opacity 2s ease-out";

}