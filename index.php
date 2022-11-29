<?php
	# área de conteúdo
	if(empty($_SERVER["QUERY_STRING"])){
	        $var = "home.php";
	        include_once("$var");
	}else{
	        $pg = $_GET['pg'];
	        include_once("$pg.php");
	}

	?>s