<?php 
	$data = file_get_contents("resources/dataPlayers.json");
	$data =  json_decode($data);
	echo $data;
 ?>