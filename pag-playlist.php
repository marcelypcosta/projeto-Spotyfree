<?php
include('admin/protect.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/reset.css">
    <link rel="stylesheet" href="assets/pag-playlist.css">
    <title>Músicas - Spotyfree</title>
</head>
<body>
    <header class="cabecalho">
        <input type="search" placeholder="Buscar" class="search_cabecalho">
        <p class="perfil_cabecalho"></p>
    </header>
    <nav class="menu-lateral">
        <h1 class="logo_pagina">Spotyfree</h1>
        <a href="painel.html" class="menu-lateral_link menu-lateral_musica">Músicas</a>
        <a href="#" class="menu-lateral_link menu-lateral_radios">Rádios</a>
        <a href="#" class="menu-lateral_link menu-lateral_explorar">Explorar</a>
        <a href="#" class="menu-lateral_link menu-lateral_favoritos menu-lateral_link--ativo">Playlists</a>
        <a href="logout.php" class="logout">Sair</a>
    </nav>

    <main class="principal">
        <section class="playlist_favoritos-1">
            <img src="assets/imagens/capa-playlist.webp" alt="Imagem da playlist" class="img_playlist">
            <div class="dados">
                <h3 class="playlist">Playlist</h3>
                <h1 class="nome_playlist">Summer playlist #1</h1>
                <ul class="dados_playlist">
                    <li class="perfil">João Victor</li>
                    <li class="likes">- 3 likes</li>
                    <li class="qntdd_musicas">- 10 músicas</li>
                    <li class="tempo">- 30 min</li>
                </ul>
            </div>
        </section>

        <section class="playlist_favoritos-2">
            <div class="caixa">
                <button class="play">Play</button>
                <input type="search" placeholder="Buscar música da playlist" class="search_playlist">
            </div>
            <ul class="lista_titulos">
                <li class="titulos">#</li>
                <li class="vazio"></li>
                <li class="titulos">Música</li>
                <li class="titulos">Albúm</li>
                <li class="titulos">Data de adição</li>
                <li class="titulos">Tempo</li>
            </ul>
            <hr>
            <ul class="lista_musicas">
                <li>
                    <ul class="musicas musica-1">
                        <li class="ranking">1</li>
                        <li class="sobre"><img src="assets/imagens/capa-playlist.webp" alt=""></li>
                        <li class="sobre">Rescue Me (feat. A Day To Remember)</li>
                        <li class="sobre">Albúm 1</li>
                        <li class="sobre">10/01/22</li>
                        <li class="sobre">02:10</li>
                    </ul>
                </li>
                <li>
                    <ul class="musicas musica-1">
                        <li class="ranking">2</li>
                        <li class="sobre"><img src="assets/imagens/capa-playlist.webp" alt=""></li>
                        <li class="sobre">Raindrops</li>
                        <li class="sobre">Albúm 2</li>
                        <li class="sobre">10/01/22</li>
                        <li class="sobre">03:30</li>
                    </ul>
                </li>
                <li>
                    <ul class="musicas musica-1">
                        <li class="ranking">3</li>
                        <li class="sobre"><img src="assets/imagens/capa-playlist.webp" alt=""></li>
                        <li class="sobre">Lost Lately</li>
                        <li class="sobre">Albúm 3</li>
                        <li class="sobre">17/02/22</li>
                        <li class="sobre">01:04</li>
                    </ul>
                </li>
                <li>
                    <ul class="musicas musica-1">
                        <li class="ranking">4</li>
                        <li class="sobre"><img src="assets/imagens/capa-playlist.webp" alt=""></li>
                        <li class="sobre">Earthquake</li>
                        <li class="sobre">Albúm 4</li>
                        <li class="sobre">19/02/22</li>
                        <li class="sobre">03:00</li>
                    </ul>
                </li>
                <li>
                    <ul class="musicas musica-1">
                        <li class="ranking">5</li>
                        <li class="sobre"><img src="assets/imagens/capa-playlist.webp" alt=""></li>
                        <li class="sobre">Happier</li>
                        <li class="sobre">Albúm 5</li>
                        <li class="sobre">19/02/22</li>
                        <li class="sobre">01:50</li>
                    </ul>
                </li>
                <li>
                    <ul class="musicas musica-1">
                        <li class="ranking">6</li>
                        <li class="sobre"><img src="assets/imagens/capa-playlist.webp" alt=""></li>
                        <li class="sobre">Get Up</li>
                        <li class="sobre">Albúm 6</li>
                        <li class="sobre">05/04/22</li>
                        <li class="sobre">03:45</li>
                    </ul>
                </li>
                <li>
                    <ul class="musicas musica-1">
                        <li class="ranking">7</li>
                        <li class="sobre"><img src="assets/imagens/capa-playlist.webp" alt=""></li>
                        <li class="sobre">Stars Tonight</li>
                        <li class="sobre">Albúm 7</li>
                        <li class="sobre">07/04/22</li>
                        <li class="sobre">03:00</li>
                    </ul>
                </li>
                <li>
                    <ul class="musicas musica-1">
                        <li class="ranking">8</li>
                        <li class="sobre"><img src="assets/imagens/capa-playlist.webp" alt=""></li>
                        <li class="sobre">All my Friends</li>
                        <li class="sobre">Albúm 8</li>
                        <li class="sobre">01/07/22</li>
                        <li class="sobre">02:44</li>
                    </ul>
                </li>
                <li>
                    <ul class="musicas musica-1">
                        <li class="ranking">9</li>
                        <li class="sobre"><img src="assets/imagens/capa-playlist.webp" alt=""></li>
                        <li class="sobre">We Were Young</li>
                        <li class="sobre">Albúm 9</li>
                        <li class="sobre">01/07/22</li>
                        <li class="sobre">02:03</li>
                    </ul>
                </li>
                <li>
                    <ul class="musicas musica-1">
                        <li class="ranking">10</li>
                        <li class="sobre"><img src="assets/imagens/capa-playlist.webp" alt=""></li>
                        <li class="sobre">TV</li>
                        <li class="sobre">Albúm 10</li>
                        <li class="sobre">10/10/22</li>
                        <li class="sobre">03:00</li>
                    </ul>
                </li>
            </ul>
        </section>
    </main>
</body>
</html>