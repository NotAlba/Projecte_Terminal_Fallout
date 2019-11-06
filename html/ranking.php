<!DOCTYPE html>
<html lang="en" dir="ltr">
<!DOCTYPE html>
<html>
<head>
	<title>Ranking</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/styleRanking.css" media="all">
	<link rel="stylesheet" type="text/css" href="../css/styleDaltonico.css" media="all">
</head>

<?php

function obtenerDatos(){
			$data = file_get_contents("../resources/dataPlayers.json");

			if($data == ""){
				return array();
			}
			return json_decode($data,true);
		}
?>

<body>
	<h1>RANKING</h1>
	<div class="parametros">
		<table width="100%">
			<tr>
				<th>NOMBRE</th>
				<th>FALLOS</th>
				<th>TIEMPO</th>
			</tr>
		</table>
	</div>
	<div class="numtabla">
		<div class="numeros">
			<table>
				<tr><th>1</th></tr>
				<tr><th>2</th></tr>
				<tr><th>3</th></tr>
				<tr><th>4</th></tr>
				<tr><th>5</th></tr>
				<tr><th>6</th></tr>
				<tr><th>7</th></tr>
				<tr><th>8</th></tr>
				<tr><th>9</th></tr>
				<tr><th>10</th></tr>
			</table>
		</div>
		<div class=tabla>
			<?php
				$limite_elementos=0;

				$array_data= obtenerDatos();
				echo "<table width='100%'>";
				foreach ($array_data as $player) {
					if ($limite_elementos==10) {
						break;
					}else{
						echo "<tr>";
						foreach ($player as $aspectos) {
							echo "<th >".$aspectos."</th>";
						}
						echo "</tr>";
						$limite_elementos+=1;
						}
				}
				echo "</table>"
			?>

		</table>

		</div>
	</div>


	<div class="volver">
		<form action="../index.php">
		 <input type="submit" value="VOLVER" />
		</form>
	</div>


	<div class="selecDaltonico">
		<button id="daltonico" type="checkbox" data-toggle="toggle"> DALTONICO </button>
	</div>

	<div class="efectosSonido">

		<audio id="audios" autoplay loop>
			<source src="./sonido/pc.mp3" type="audio/mp3">
		</audio>
		<button onclick="sonidosMute()" type="button"> MUTE </button>

	</div>

	</body>
</html>
