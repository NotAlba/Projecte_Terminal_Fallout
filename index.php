<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>juego</title>
    <link rel="stylesheet" type="text/css" href="./css/resetCSS.css" media="all">
    <link rel="stylesheet" type="text/css" href="./css/stylePortada.css" media="all">
    <link rel="stylesheet" type="text/css" href="./css/style.css" media="all">;
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <script type="text/javascript" src="js/jsWork2.js"></script> 
    <?php 
          if(isset($_POST['isSelected'])){
              if($_POST['isSelected'] == "false"){
              }else if($_POST['isSelected'] == "true"){
                echo  '<link rel="stylesheet" type="text/css" href="./css/styleDaltonico.css" media="all">';
              }
           }else{
                echo  '<link rel="stylesheet" type="text/css" href="./css/style.css" media="all">';
           } 
     ?>
  </head>

  <body>

    <div id="fondo">

      <img src="./img/pantalla.png" alt="fondo_pantalla">

      <div id="pantalla-texto">
        <div id="efecto"></div>

        <div class="opcionesExtra">
          <label class="checkbox-inline">
            <form action=<?php echo $_SERVER["PHP_SELF"] ?>  method ="post" id="formDaltonic">
              <input id="daltonico"  onclick="changeDaltonic()" 
                                  <?php 
                                        if(isset($_POST['isSelected'])){
                                            if($_POST['isSelected'] == "true"){
                                              echo "checked";
                                            }
                                         }
                                  ?> 
              type="checkbox" data-toggle="toggle" name="daltonico"> Daltonico
              <input type="text" id="isSelected" name="isSelected" hidden>

            </form>
          </label>
          <br>
          <label class="checkbox-inline">
            <input id="extremo" type="checkbox" data-toggle="toggle"> Extremo
          </label>
        </div>

        <H1 id="titulo_principal">TERMINAL FALLOUT</H1>

        <div class="opciones">

          <form id="formDificultad" method="post" action="html/index.php">
          <div class="opcion1">
                <div class="juegar">
                  <a>JUGAR</a>
                </div>
                <div class="niveles">
                  <a onclick="eleccionDificultad(this)" id="facil">FÁCIL</a>
                  <a onclick="eleccionDificultad(this)" id="normal">NORMAL</a>
                  <a onclick="eleccionDificultad(this)" id="dificil">DIFÍCIL</a>
                  <input type="hidden" id="dificultadElegida" name="dificultadElegida" />
                </div>
            </div>
          </form>


          <div id="opcion2">
            <a href="html/ranking.php">RANKING</a>
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
