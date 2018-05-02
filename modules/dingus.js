/* dingus, a biblioteca de js mais pequena do mundo para ajudar a animar as páginas */

function what(input) {

    input = input.toString();
    return(document.getElementById(input));

}

function blurBackground(toggle) {

    if (toggle === 1) {

        document.getElementById("blur").style.display = "block";
    }

    if (toggle === 0) {

        document.getElementById("blur").style.display = "none";
    }

}

function chameleon(color, duration) {

    // TODO

}