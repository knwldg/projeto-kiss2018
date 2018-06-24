function open_menu() {

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

}