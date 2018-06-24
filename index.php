<?php
include_once 'db.php';

try {
		$db = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $db->prepare('SELECT * FROM pokemon');
		$stmt->execute();
} catch (PDOException $e) {
	echo $sql.'<br>'.$e->getMessage();
}

$sql = $stmt->fetchAll();

if ($_GET[pokemon]) {
	$nb = $_GET[pokemon];
} else {
	$nb = 0;
}

$db = null;

?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<title>pokedex</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
<a class="addpokemon" href="add_pokemon.php">ADD POKEMON</a>
<div id="pokedex">
  <div id="left">
	<div id="logo"></div>
	<div id="bg_curve1_left"></div>
	<div id="bg_curve2_left"></div>
	<div id="curve1_left">
	  <div id="buttonGlass">
		<div id="reflect"> </div>
	  </div>
	  <div id="miniButtonGlass1"></div>
	  <div id="miniButtonGlass2"></div>
	  <div id="miniButtonGlass3"></div>
	</div>
	<div id="curve2_left">
	  <div id="junction">
		<div id="junction1"></div>
		<div id="junction2"></div>
	  </div>
	</div>
	<div id="screen">
	  <div id="topPicture">
		<div id="buttontopPicture1"></div>
		<div id="buttontopPicture2"></div>
	  </div>
	  <div id="picture">
	  <img class="picture3" src="<?php echo $sql[$nb][picture] ?>" alt="psykokwak" height="170" />
	  </div>
	  <div id="buttonbottomPicture"></div>
	  <div id="speakers">
		<div class="sp"></div>
		<div class="sp"></div>
		<div class="sp"></div>
		<div class="sp"></div>
	  </div>
	</div>
	<div id="bigbluebutton"></div>
	<div id="barbutton1"></div>
	<div id="barbutton2"></div>
	<div id="cross">
	  <div id="leftcross">
		<div id="leftT"></div>
	  </div>
	  <div id="topcross">
		<div id="upT"></div>
	  </div>
	  <div id="rightcross">
		<div id="rightT"></div>
	  </div>
	  <div id="midcross">
		<div id="midCircle"></div>
	  </div>
	  <div id="botcross">
		<div id="downT"></div>
	  </div>
	</div>
  </div>
  <div id="right">
	<div id="stats">
	<strong>Name :</strong> <?php echo $sql[$nb][name] ?> <br/>
	  <strong>Type :</strong> <?php echo $sql[$nb][type] ?> <br/>
	  <strong>Height :</strong> <?php echo $sql[$nb][height] ?> <br/>
	  <strong>Weight :</strong> <?php echo $sql[$nb][weight] ?> <br/><br/>
	  <strong>The duck Pokemon</strong><br/>
 		<?php echo $sql[$nb][content] ?> 
	</div>
	<div id="blueButtons1">
	  <div onClick="window.location='http://localhost:8888/pokedex2/index.php?pokemon=0';" class="blueButton"></div>
	  <div onClick="window.location='http://localhost:8888/pokedex2/index.php?pokemon=1';" class="blueButton"></div>
	  <div onClick="window.location='http://localhost:8888/pokedex2/index.php?pokemon=2';" class="blueButton"></div>
	  <div onClick="window.location='http://localhost:8888/pokedex2/index.php?pokemon=3';" class="blueButton"></div>
	  <div onClick="window.location='http://localhost:8888/pokedex2/index.php?pokemon=4';" class="blueButton"></div>
	</div>
	<div id="blueButtons2">
	  <div onClick="window.location='http://localhost:8888/pokedex2/index.php?pokemon=5';" class="blueButton"></div>
	  <div onClick="window.location='http://localhost:8888/pokedex2/index.php?pokemon=6';" class="blueButton"></div>
	  <div onClick="window.location='http://localhost:8888/pokedex2/index.php?pokemon=7';" class="blueButton"></div>
	  <div onClick="window.location='http://localhost:8888/pokedex2/index.php?pokemon=8';" class="blueButton"></div>
	  <div onClick="window.location='http://localhost:8888/pokedex2/index.php?pokemon=9';" class="blueButton"></div>
	</div>
	<div id="miniButtonGlass4"></div>
	<div id="miniButtonGlass5"></div>
	<div id="barbutton3"></div>
	<div id="barbutton4"></div>
	<div id="yellowBox1"></div>
	<div id="yellowBox2"></div>
	<div id="bg_curve1_right"></div>
	<div id="bg_curve2_right"></div>
	<div id="curve1_right"></div>
	<div id="curve2_right"></div>
  </div>
</div>
 </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
// Button ID to traverse pokedex up = topcross
// Button ID to traverse pokedex down = botcross

//http://www.pokemon.com/us/pokedex/
//http://bulbapedia.bulbagarden.net/wiki/Rattata_(Pok%C3%A9mon)

(function($) {
	console.log($);

	var data = [{
	number: '#001',
		name: 'Bulbasaur',
		type: 'Grass/ Poison',
		description: 'It bears the seed of a plant on its back from birth. The seed slowly develops. Researchers are unsure whether to classify Bulbasaur as a plant or animal. Bulbasaur are extremely calm and very difficult to capture in the wild.',
		picture: '//bulbapedia.bulbagarden.net/wiki/File:001Bulbasaur.png',
		link: '//bulbapedia.bulbagarden.net/wiki/Bulbasaur_(Pok%C3%A9mon)'
	}, {
	number: '#002',
		name: 'Ivysaur',
		type: 'Grass/ Poison',
		description: 'The Seed Pokémon, Ivysaur, Bulbasaur’s evolved form. The bulb on its back absorbs nourishment and blooms into a large flower.',
		picture: '//bulbapedia.bulbagarden.net/wiki/File:002Ivysaur.png',
		link: '//bulbapedia.bulbagarden.net/wiki/Ivysaur_(Pok%C3%A9mon)'
	}, {
	number: '#003',
		name: 'Venusaur',
		type: 'Grass/ Poison',
		description: "Venusaur, the final form of the Bulbasaur evolution. This Seed Pokémon soaks up the sun's rays as a source of energy.",
		picture: '//bulbapedia.bulbagarden.net/wiki/File:003Venusaur.png',
		link: '//bulbapedia.bulbagarden.net/wiki/Venusaur_(Pok%C3%A9mon)'
	}];



})(jQuery);
</script>
</html>
