
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>juego</title>
    <link rel="stylesheet" type="text/css" href="./css/resetCSS.css" media="all">
    <link rel="stylesheet" type="text/css" href="./css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="./css/stylePortada.css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono&display=swap" rel="stylesheet">



  </head>

  <body>

    <div id="fondo">

      <img src="./img/pantalla.png" alt="fondo_pantalla">

      <div id="pantalla-texto">
        <div id="efecto"></div>
        <H1 id="titulo_principal">TERMINAL FALLOUT</H1>

        <div class="opcionesExtra">
          <label class="checkbox-inline">
            <input id="daltonico" type="checkbox" data-toggle="toggle"> Daltonico
          </label>
          <br>
          <label class="checkbox-inline">
            <input id="extremo" type="checkbox" data-toggle="toggle"> Extremo
          </label>
        </div>

        <div class="opciones">

          <div class="opcion1">
            <div class="juegar">
              <a>JUGAR</a>
            </div>
            <div class="niveles">
              <a id="facil" href="html/index.php">FÁCIL</a>
              <a id="normal" href="html/index.php">NORMAL</a>
              <a id="dificil" href="html/index.php">DIFÍCIL</a>
            </div>
          </div>

          <div id="opcion2">
            <form action="html/ranking.php">
              <input type="submit" value="RANKING" />
            </form>
          </div>

        </div>

      </div> <!-- div pantalla-texto -->
      <div class="resolucion-peque">
        <p>RESOLUCIÓN DE LA PANTALLA DEMASIADO PEQUEÑA</p>
      </div>
    </div> <!-- div fondo -->
  </body>
</html>

<?php
	$data = file_get_contents("resources/dataPlayers.json");

	$arry = json_decode($data,true);

 ?>
