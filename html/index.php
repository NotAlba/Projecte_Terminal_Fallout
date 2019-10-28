<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>juego</title>
    <link rel="stylesheet" type="text/css" href="../css/resetCSS.css" media="all">
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../js/jsWork2.js"></script>

    <?php
      include '../php/Controller.php';
      $array_palabras = obtenerPalabrasConSimbolitos(); // esto es un string
      $listaCaracter = str_split($array_palabras); // esto es una array
      $decode = html_entity_decode($array_palabras);
     ?>
  </head>

  <body onload="cronoInicio()">

    <div id="fondo">
      <!-- <div id="efecto"></div> -->
      <img src="../img/pantalla.png" alt="fondo_pantalla">

        <!-- El div (pantalla-texto) es para encajar todo el texto que aparece en la pantalla del juego sin que se vea fuera de sitio -->

        <div id="pantalla-texto">
          <div id="efecto"></div>
          <!-- El div (info_vidas) es para mostrar tanto la información de la cabecera como las vidas restantes que le quedan al jugador -->
          <div id="info_vidas">
            <p id="info_juego">ROBCO INDUSTRIES (TN) TERMILINK PROTOCOL ENTER PASSWORD NOW</p>
            <div id="vidas_crono">
              <p id="intentos">4 ATTEMPT(S) LEFT:  <span>[]</span>  <span>[]</span> <span>[]</span> <span>[]</span></p>
              <p id="tiempoCrono"> <span id="minutos">0</span>:<span id="segundos">00</span> </p>
            </div>
            <hr id="filete">
          </div>

          <!-- El div (juego) es para encajar todo los elementos jugables juntos -->
          <div id="juego">
            <!-- El div (caracteres) es para poner todos los caracteres y palabras que contendra el juego -->
            <div class="codigo">
              <?php
                for ($i=0; $i < 16; $i++) {
                  $num = rand(10,99);
                  echo "Ex0$num&nbsp <br>";
                }
              ?>
            </div>
            <div class='buentrabajo' >
              <div id='vaultboywin'>
                <img src="https://media.giphy.com/media/SHT4S1lOyAbaa6UvQZ/giphy.gif" alt="AnimacionGANADO" >
              </div>
              <div id='vaultboyloss'>
                <img src="https://media.giphy.com/media/IbUkU9LrDgx9uEctjD/giphy.gif" alt="AnimacionPERDIDO">
              </div>

            </div>
            <div class="caracteres">
              <?php
              $num_palabras=elegirDificultad();
              $array_ID=[];
              for ($a=0; $a <$num_palabras ; $a++) {
                $base='pal'.$a;
                $array_ID[]=$base;
              }
                $palabraCorrecta = $array_ID[rand(0,$num_palabras-1)];
                $listaSimbolos=devolverArrayEspeciales();

                $contador=0;
                $contadorInterno=0;
                $contadorID=0;
                $guardado="";
                foreach ($listaCaracter as $caracter ) {

                  if ($caracter!='+' && $caracter!='-'){
                    $caracter_modificado=html_entity_decode($caracter);
                    if (!in_array($caracter_modificado, $listaSimbolos)) {
                      if ($contadorInterno==0) {
                        $guardado .= "<span id=".$array_ID[$contadorID]." onClick='comprobar_pal(this,".$palabraCorrecta.")'>".$caracter_modificado;
                        $contadorInterno+=1;
                      }
                      elseif ($contadorInterno==4) {
                        $guardado .= $caracter_modificado."</span>";
                        $contadorInterno=0;
                        $contadorID+=1;

                      }else{
                        $guardado .= $caracter_modificado;
                        $contadorInterno+=1;
                      }

                    }else{
                      $guardado .= $caracter_modificado;
                    }

                    $contador+=1;
                  }
                  if ($contador%12==0) {
                    $guardado .= "</br>";
                  }

                }
                echo "<div class='typing'>".$guardado."</div>";

              ?>

            </div>

            <div class="codigo">
              <?php
                for ($i=0; $i < 16; $i++) {
                  $num = rand(10,99);
                  echo "Ex1$num&nbsp <br>";
                }
              ?>
            </div>






            <!-- El div (mensajes) es para los mensajes de ayuda al hacer pulsar una palabra -->
            <!-- La class (mensaje) es para estructurar el tamaño de cada mensaje -->
            <div id="mensajes">
              <div id="divblink">
                 <p>> </p><p class="blink">█</p>
              </div>
              <div class="mensaje">
                <p class="mensajeFallo"></p>
              </div>
              <div class="mensaje">
                <p class="mensajeFallo"></p>
              </div>
              <div class="mensaje">
                <p class="mensajeFallo"></p>
              </div>
              <div class="mensaje">
                <p class="mensajeFallo"></p>
              </div>
              <div class="mensaje">
                <p iclass="mensajeFallo"></p>
              </div>
              <div class="mensaje">
                <p class="mensajeFallo"></p>
              </div>

            </div>


          </div> <!-- div juego -->
        </div> <!-- div pantalla-texto -->


        <div class="resolucion-peque">
          <p>RESOLUCIÓN DE LA PANTALLA DEMASIADO PEQUEÑA</p>
        </div>
    </div> <!-- div fondo -->

    <form method="post" id="dataRanking" action="../php/WriteData.php" hidden>
      <input type="text" id="player" name="nombre">
      <input type="text" id="time" name="tiempo">
      <input type="text" id="try" name="intentos">
      <input type="submit" name="sendData" name="guardarDatos">
    </form>
  </body>
</html>
