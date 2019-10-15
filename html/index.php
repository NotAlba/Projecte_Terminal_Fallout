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
      $array_palabras = obtenerPalabrasConSimbolitos();
      $listaCaracter = str_split($array_palabras);
      $numTotalLista = count($listaCaracter);
      $mitadLista = $numTotalLista/2;
      $mitadLista1 = ($numTotalLista/2)+1;
     ?>
  </head>

  <body>
    <div class="">
      <?php
        echo $array_palabras;
        echo "<br>";
        echo count($listaCaracter);
      ?>
    </div>
    <div id="fondo">
      <img src="../img/pantalla.png" alt="fondo_pantalla">

        <!-- El div (pantalla-texto) es para encajar todo el texto que aparece en la pantalla del juego sin que se vea fuera de sitio -->
        <div id="pantalla-texto">

          <!-- El div (info_vidas) es para mostrar tanto la información de la cabecera como las vidas restantes que le quedan al jugador -->
          <div id="info_vidas">
            <p id="info_juego">ROBCO INDUSTRIES (TN) TERMILINK PROTOCOL ENTER PASSWORD NOW</p>
            <p id="intentos">4 ATTEMPT(S) LEFT:  <span>[]</span>  <span>[]</span> <span>[]</span> <span>[]</span></p>
            <hr id="filete">
          </div>

          <!-- El div (juego) es para encajar todo los elementos jugables juntos -->
          <div id="juego">
            <!-- El div (caracteres) es para poner todos los caracteres y palabras que contendra el juego -->
            <div class="caracteres">
              <?php
                for ($i=1; $i <= $mitadLista; $i++) {
                  $num = rand(10, 99);
                  if ($i==1) {
                    echo "0xE1$num $listaCaracter[0]";
                    echo $listaCaracter[$i];
                  }
                  elseif ($i==$mitadLista) {
                    echo "$listaCaracter[$i] <br>";
                  }
                  else if ($i%12==0) {
                    echo "$listaCaracter[$i] <br>";
                    echo "0xE1$num ";
                  }
                  else{
                    echo $listaCaracter[$i];
                  }
                }
              ?>
            </div>

            <div class="caracteres">
              <p>
                <?php
                  for ($i=($mitadLista1); $i <= $numTotalLista; $i++) {
                    $num = rand(10, 99);
                    if ($i==$mitadLista1) {
                      echo "0xE1$num $listaCaracter[$mitadLista1]";
                    }
                    elseif ($i==$numTotalLista) {
                      echo "$listaCaracter[$i] <br>";
                    }
                    else if ($i%12==0) {
                      echo "$listaCaracter[$i] <br>";
                      echo "0xE1$num ";
                    }
                    else{
                      echo $listaCaracter[$i];
                    }
                  }
                ?>
              </p>
            </div>

            <!-- El div (mensajes) es para los mensajes de ayuda al hacer pulsar una palabra -->
            <!-- La class (mensaje) es para estructurar el tamaño de cada mensaje -->
            <div id="mensajes">
              <div class="mensaje">
                <p>1</p>
              </div>
              <div class="mensaje">
                <p>2</p>
              </div>
              <div class="mensaje">
                <p>3</p>
              </div>
              <div class="mensaje">
                <p>4</p>
              </div>
              <div class="mensaje">
                <p>5</p>
              </div>
              <div class="mensaje">
                <p>6</p>
              </div>
            </div>

          </div> <!-- div juego -->
        </div> <!-- div pantalla-texto -->
        <div class="resolucion-peque">
          <p>RESOLUCIÓN DE LA PANTALLA DEMASIADO PEQUEÑA</p>
        </div>
    </div> <!-- div fondo -->
  </body>
</html>
