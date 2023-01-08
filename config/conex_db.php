<?php



try {
	$conex = new PDO('mysql:host=localhost;dbname=music_play', 'root', '');

} catch (Exception $e) {
	
	echo "<label>conexao falhou<label>";
}








  ?>