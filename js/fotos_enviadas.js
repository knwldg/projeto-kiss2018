
//enviado
document.getElementById("verificacao").src="../img/icon/verification.svg";

elements_color = document.getElementsByClassName("color");
for (var i = 0; i < elements_color.length; i++) {
    elements_color[i].style.color="#009245";
}

elements_photo = document.getElementsByClassName("clip-mask");
for (var x = 0; x < elements_photo.length; x++) {
    elements_photo[x].style.filter="blur(0px)";
}

document.getElementById("verificacao-titulo").innerHTML ="ENVIADO COM SUCESSO!";
document.getElementById("relogio-sem-sucesso").src="../img/icon/relogio_verde.png";
document.getElementById("verificacao-tempo").innerHTML ="13:00";

document.getElementById("verification-fade-in").style.webkitAnimationDuration = "1.5s";
document.getElementById("verification-fade-in").style.animationDuration = "1.5s";

document.getElementById("verification-fade-in").style.webkitAnimationDelay = "1.8s";
document.getElementById("verification-fade-in").style.animationDelay = "1.8s";

/*
//nao enviado
document.getElementById("verificacao").src="../img/icon/verification_error.svg";

elements_color = document.getElementsByClassName("color");
for (var i = 0; i < elements_color.length; i++) {
    elements_color[i].style.color="#ff0000";
}

elements_photo = document.getElementsByClassName("clip-mask");
for (var x = 0; x < elements_photo.length; x++) {
    elements_photo[x].style.filter="blur(4px)";
}

document.getElementById("verificacao-titulo").innerHTML ="ENVIADO SEM SUCESSO!";
document.getElementById("relogio-sem-sucesso").src="../img/icon/relogio_vermelho.png";
document.getElementById("verificacao-tempo").innerHTML ="--";

document.getElementById("verification-fade-in").style.animationDuration = "1s";
document.getElementById("verification-fade-in").style.animationDelay = "0";*/
