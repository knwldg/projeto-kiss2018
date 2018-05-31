<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="stylesheet" href="css/style.css">

    <title>Página Principal</title>
</head>
<div class="background flex-column">

<!-- header -->

    <div class="homepage-header font700 white">

        <img src="img/icon/menu-home.png"><!-- hamburguer menu-->
        <span>PÁGINA PRINCIPAL</span>

    </div>

<!-- header -->

<!-- profile -->

    <div class="profile profile-menu-style"> <!-- PHP -->

        <form id="profile-image" method="post" action="">

            <div class="image-upload">

                <div class="select-image">

                    <img id="default-image" class="default-position image-default" src="img/icon/default_profile.png"> <!-- php -->

                    <input type="file" name="image-uploaded" class=""><!-- default-image; background-image; display:block -> display:none -->

                </div>

                <span id="user-name" class="profile-position font600">Ricardo Jorge</span>

            </div>


        </form>

        <div class="count-keys font700">
            <span id="keys">CHAVES</span>
            <img src="img/icon/chave_icon.png" id="icon-key" class="center">
            <span id="keys-number" class="profile-font-size">0</span>
        </div>

    </div>

<!-- profile -->


<!-- desafio do dia -->

    <div class="day-challenge-title font700 white">DESAFIO DO DIA</div>

    <div class="day-challenge gradient-border">

        <span class="day-challenge-description font600">Necessitas de limpar o mais rapido possivel</span><!-- descricao do desafio -->

        <div class="accept-or-decline font600">

            <a class="accept-or-decline-item gradient-background gradient-border white" href="">aceitar</a>
                <a class="accept-or-decline-item gradient-border gray" href="">rejeitar</a>

        </div>

        <div class="challenge-time-keys font500">                                                   <!-- start  end -->
             <!-- icon time --> <span class="challenge-time"><img class="time" src="img/icon/relogio.png">14:00 - 14:35</span>
            <img class="challenge-keys" src="img/icon/chave_laranja.png"> <!-- img nr chaves -->
        </div>

    </div>

<!-- desafio do dia -->


<!-- home -->

    <!-- LOOTBOXES -->
    <div class="homepage-content">

        <div class="homepage-content-elements">

            <div class="homepage-content-lines">
                <div class="homepage-content-line gradient-border-homepage"> line1</div>
                <img class="homepage-content-icon-lootboxes" src="img/icon/colecoes_icon.png"> <!-- icon de cada conteudo (desafio, premio, colecao, etc) css: colocar por cima da div "lines" -->
                <div class="homepage-content-line gradient-border-homepage"> lin2</div>
            </div>


            <span class="homepage-content-description font500">Necessitas de limpar o mais rapido possivel</span> <!-- descricao do conteudo -->


            <a class="homepage-content-link-item gradient-background gradient-border white font600" href="">abrir báus</a> <!-- hiperligaçao de cada pagina; #links = #login -->


        </div>

    </div>
    <!-- LOOTBOXES -->

    <!-- KEYS -->
    <div class="homepage-content">

        <div class="homepage-content-elements">

            <div class="homepage-content-lines">
                <div class="homepage-content-line gradient-border-homepage"> line1</div>
                <img class="homepage-content-icon-keys" src="img/icon/premios_icon.png"> <!-- icon de cada conteudo (desafio, premio, colecao, etc) css: colocar por cima da div "lines" -->
                <div class="homepage-content-line gradient-border-homepage"> lin2</div>
            </div>


            <span class="homepage-content-description font500">Necessitas de limpar o mais rapido possivel</span> <!-- descricao do conteudo -->


            <a class="homepage-content-link-item gradient-background gradient-border white font600" href="">abrir báus</a> <!-- hiperligaçao de cada pagina; #links = #login -->


        </div>

    </div>
    <!-- KEYS -->

    <!-- COLECTIONS -->
    <div class="homepage-content">

        <div class="homepage-content-elements">

            <div class="homepage-content-lines">
                <div class="homepage-content-line gradient-border-homepage"> line1</div>
                <img class="homepage-content-icon-colections" src="img/icon/premios_icon.png"> <!-- icon de cada conteudo (desafio, premio, colecao, etc) css: colocar por cima da div "lines" -->
                <div class="homepage-content-line gradient-border-homepage"> lin2</div>
            </div>


            <span class="homepage-content-description font500">Necessitas de limpar o mais rapido possivel</span> <!-- descricao do conteudo -->


            <a class="homepage-content-link-item gradient-background gradient-border white font600" href="">abrir báus</a> <!-- hiperligaçao de cada pagina; #links = #login -->


        </div>

    </div>
    <!-- COLECTIONS -->

    <!-- AWARDS -->
    <div class="homepage-content">

        <div class="homepage-content-elements">

            <div class="homepage-content-lines">
                <div class="homepage-content-line gradient-border-homepage"> line1</div>
                <img class="homepage-content-icon-awards" src="img/icon/premios_icon.png"> <!-- icon de cada conteudo (desafio, premio, colecao, etc) css: colocar por cima da div "lines" -->
                <div class="homepage-content-line gradient-border-homepage"> lin2</div>
            </div>


            <span class="homepage-content-description font500">Necessitas de limpar o mais rapido possivel</span> <!-- descricao do conteudo -->


            <a class="homepage-content-link-item gradient-background gradient-border white font600" href="">abrir báus</a> <!-- hiperligaçao de cada pagina; #links = #login -->


        </div>

    </div>
    <!-- AWARDS -->



<!-- home -->


</div>