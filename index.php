
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>juego</title>
    <link rel="stylesheet" type="text/css" href="./css/resetCSS.css" media="all">
    <link rel="stylesheet" type="text/css" href="./css/style.css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono&display=swap" rel="stylesheet">



  </head>

  <body>

    <div id="fondo">

      <img src="./img/pantalla.png" alt="fondo_pantalla">

      <div id="pantalla-texto">
        <div id="efecto"></div>
        <div class="opciones">
          <H1 id="titulo_principal">TERMINAL FALLOUT</H1>

          <div id="opcion1">
           <form action="html/index.php">
            <input type="submit" value="JUGAR" />
           </form>
          </div>
          <div id="opcion2">
            <form action="html/ranking.php">
              <input type="submit" value="RANKING" />
              <DIV class="typing">
                <?php  
                for ($i=0; $i <10 ; $i++) { 
                  echo"<h1>a <span>ver</span> VAMOOOOOOOOOS</h1>";
                }
                  
                ?>
              </DIV>
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
