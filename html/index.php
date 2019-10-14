<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php 
      include '../php/Controller.php';
      $array_palabras = obtenerPalabrasConSimbolitos();
     ?>
    <meta charset="utf-8">
    <title>juego</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono&display=swap" rel="stylesheet">
    <script type="text/javascript" src="../js/jsWork2.js"></script>
  </head>

  <body>
      <div><?php echo $array_palabras ?></div>
    <div id="fondo">
      <img src="../img/pantalla.png" alt="fondo_pantalla">

        <!-- El div (pantalla-texto) es para encajar todo el texto que aparece en la pantalla del juego sin que se vea fuera de sitio -->
        <div id="pantalla-texto">

          <!-- El div (info_vidas) es para mostrar tanto la información de la cabecera como las vidas restantes que le quedan al jugador -->
          <div id="info_vidas">
            <p id="info_juego">ROBCO INDUSTRIES (TN) TERMILINK PROTOCOL ENTER PASSWORD NOW</p>
            <p id="intentos">4 ATTEMPT(S) LEFT:  <span>[]</span>  <span>[]</span> <span>[]</span> <span>[]</span></p>
          </div>
          <hr>

          <!-- El div (juego) es para encajar todo los elementos jugables juntos -->
          <div id="juego">
            <!-- El div (codigo) es para poner el código fijo del juego -->
            <!-- El div (caracteres) es para poner todos los caracteres y palabras que contendra el juego -->
            <div class="codigo">
              <p>0xE101</p>
              <p>0xE102</p>
              <p>0xE103</p>
              <p>0xE104</p>
              <p>0xE105</p>
              <p>0xE106</p>
              <p>0xE107</p>
              <p>0xE108</p>
              <p>0xE109</p>
              <p>0xE110</p>
              <p>0xE111</p>
              <p>0xE112</p>
              <p>0xE113</p>
              <p>0xE114</p>
              <p>0xE115</p>
              <p>0xE116</p>
            </div>
            <div class="caracteres">
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <span>1 2 3 4 5 6 7 8 9 0 1 2</span>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
            </div>
            <div class="codigo">
              <p>0xE117</p>
              <p>0xE118</p>
              <p>0xE119</p>
              <p>0xE120</p>
              <p>0xE121</p>
              <p>0xE122</p>
              <p>0xE123</p>
              <p>0xE124</p>
              <p>0xE125</p>
              <p>0xE126</p>
              <p>0xE127</p>
              <p>0xE128</p>
              <p>0xE129</p>
              <p>0xE130</p>
              <p>0xE131</p>
              <p>0xE132</p>
            </div>
            <div class="caracteres">
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 <span>4 5 6 7</span> 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
              <p>1 2 3 4 5 6 7 8 9 0 1 2</p>
            </div>

            <!-- El div (mensajes) es para los mensajes de ayuda al hacer pulsar una palabra -->
            <!-- La class (mensaje) es para estructurar el tamaño de cada mensaje -->
            <!-- La class (mensaje1/2) es para estructurar el posicionamiento de cada mensaje -->
            <!-- El class (mens) es para dierenciar cada div-->
            <div id="mensajes">
              <div class="mensaje mensaje1 mens1">
                <p>1</p>
              </div>
              <div class="mensaje mensaje2 mens2">
                <p>2</p>
              </div>
              <div class="mensaje mensaje2 mens3">
                <p>3</p>
              </div>
              <div class="mensaje mensaje2 mens4">
                <p>4</p>
              </div>
              <div class="mensaje mensaje2 mens5">
                <p>5</p>
              </div>
              <div class="mensaje mensaje2 mens5">
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
