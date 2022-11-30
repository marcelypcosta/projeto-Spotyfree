<?php
include('admin/protect.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="assets/painel.css">
    <link rel="stylesheet" href="assets/reset.css">
    <title>Spotyfree</title>
</head>
<body>
    <header class="cabecalho">
        <input type="search" name="Buscar" placeholder="Buscar" class="search_cabecalho">
        <p class="perfil_cabecalho"></p>
    </header>
    <nav class="menu-lateral">
        <h1 class="logo_pagina">Spotyfree</h1>
        <a href="#" class="menu-lateral_link menu-lateral_musica menu-lateral_link--ativo">Músicas</a>
        <a href="#" class="menu-lateral_link menu-lateral_radios">Rádios</a>
        <a href="#" class="menu-lateral_link menu-lateral_explorar">Explorar</a>
        <a href="pag-playlist.html" class="menu-lateral_link menu-lateral_favoritos">Playlists</a>
        <a href="admin/logout.php" class="logout">Sair</a>
    </nav>
</body>
</html>