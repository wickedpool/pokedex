<?php

include_once 'db.php';

try {
	$DB = explode(';', $DB_DSN);
	$database = substr($DB[1], 7);
	echo $database;
	$db = new PDO("$DB[0]", $DB_USER, $DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->exec("use $database");
	/* first one */
	$name = "Pikachu";
	$type = "Electric";
	$height = "0,4";
	$weight = "6,0";
	$content = "Les jours d'orages, on peut apercevoir des Pikachu regroupés en haut des arbres ou des poteaux. Ces Pokémons attendent patiemment que la foudre leur tombe dessus, pour pouvoir recharger au maximum leur réserve d'électricité.";
	$level = "3";
	$picture = "./img/pikatchu.png";
	$stmt = $db->prepare('INSERT INTO pokemon (name, type, height, weight, content, level, picture) VALUES (:name, :type, :height, :weight, :content, :level, :picture)');
	$stmt->bindParam(':name', $name, PDO::PARAM_STR);
	$stmt->bindParam(':type', $type, PDO::PARAM_STR);
	$stmt->bindParam(':height', $height, PDO::PARAM_STR);
	$stmt->bindParam(':weight', $weight, PDO::PARAM_STR);
	$stmt->bindParam(':content', $content, PDO::PARAM_STR);
	$stmt->bindParam(':level', $level, PDO::PARAM_STR);
	$stmt->bindParam(':picture', $picture, PDO::PARAM_STR);
	$stmt->execute();
	/* other one */
	$name = "salameche";
	$type = "feu";
	$height = "0,6";
	$weight = "8,5";
	$content = "Salamèche est un Pokémon bipède et reptilien avec un corps orange, tandis que son ventre et la plante de ses pieds sont couleur jaune.";
	$level = "3";
	$picture = "./img/salameche.png";
	$stmt = $db->prepare('INSERT INTO pokemon (name, type, height, weight, content, level, picture) VALUES (:name, :type, :height, :weight, :content, :level, :picture)');
	$stmt->bindParam(':name', $name, PDO::PARAM_STR);
	$stmt->bindParam(':type', $type, PDO::PARAM_STR);
	$stmt->bindParam(':height', $height, PDO::PARAM_STR);
	$stmt->bindParam(':weight', $weight, PDO::PARAM_STR);
	$stmt->bindParam(':content', $content, PDO::PARAM_STR);
	$stmt->bindParam(':level', $level, PDO::PARAM_STR);
	$stmt->bindParam(':picture', $picture, PDO::PARAM_STR);
	$stmt->execute();
} catch (PDOException $e) {
	echo $sql.'<br>'.$e->getMessage();
}
$db = null;
?>

<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<title>Camagru</title>
  </head>
  <body>
	<form action="index.php" class="inline">
		<button autofocus="autofocus" tabindex="1">Index</button>
	</form>
  </body>
</html>
