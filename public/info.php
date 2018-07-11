<?php

session_start();

require_once "../components/php/general.php";
require_once "../components/php/logincontrol.php";

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

    <title>Cubo</title>
</head>

<body>

<div id="header" class="header flex-row shadow font700 white">

    <button onclick="open_menu_home()" id="menu" class="menu-img pointer">&nbsp</button><!-- hamburguer menu-->
    <span>AJUDA</span>
    <button id="filtro" class="filtro-img">&nbsp</button><!-- filter -->

</div>


<div id="cubo" class="info_box shadow font700">
    <h1>
        O que é o Cubo?
    </h1>
    <p class="info_cubo">
O Cubo é uma web-app que pretende tornar atividades e ações civicas num jogo !
        Uma forma dinâmica de ganhares prémios, fazendo boas ações!
    <p class="info_strong">
        Explora o Jogo!
    </p>
</div>

<div id="jogar" class="info_box shadow font700">
    <h1>
        Como Jogar?
    </h1>
    <p class="info_cubo">
Completa Desafios para obteres chaves !
        Com as chaves podes abrir baús, que contêm cromos que podes colecionar e trocar por prémios!
        Os baús podem ser de comum (branco) até raro (dourado), mas se escolheres bem, há sempre a possibilidade de ser
        um baú raro que te dá mais e melhores cromos!
        Os cromos também têm grau de raridade, sendo que podes ficar com alguns repetidos, que te permite evoluir o cromo!
        Para reclamares o teu prémio, vai à pagina dos prémios e segue o que a descrição do prémio te diz!
        <p class="info_strong">
        Diverte-te
    </p>
</div>
<div id="feito" class="info_box shadow font700">
    <h1>
        Desenvolvido por:
    </h1>
    <p class="info_cubo">
    O jogo Cubo foi desenvolvido no ambito da disciplina de Projeto da licenciatura de Novas Tecnologias da Comunicação,
        pelos alunos : Eleonor Silva; José Marinho; Maria Almeida e Rodrigo Sousa,
        orientados pelo professor Óscar Mealha e com Cossupervisão do Diretor do Agrupamento Escolas José Estêvão de Aveiro (AEJE)
        Fernando Delgado

        .
        Está inserido tambem no projeto KISS (Knowledge Interface School-Society), e em co-design com membros do
        Agrupamento de Escolas José Estevão!
        São tambem essenciais para o desenvolvimento deste projeto, os alunos que puderam participar nos grupos focais,
        e deram uma ajuda especial aos desenvolvedores da web-app!

    </p>
</div>
<div id="thanks" class="info_box shadow font700">
    <h1>
        Agradecimentos
    </h1>
    <p class="info_cubo">
Agradecemos a todos envolvidos neste projeto, mas em especial a:
        Professor Óscar Mealha;
        Professor Fernando Delgado;
        Professora Carla Carvalho;
        Professora Anabela Pais;
        E a todos os co-designers que fizeram parte do desenvolvimento do jogo!
    </p>

</div>

<?php include "../components/public/menu.php"; ?>

<script type="text/javascript" src="../js/modal.js"></script>

</body>
</html>