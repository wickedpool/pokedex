
<?php
include_once 'db.php';

if ($_POST["name"]) {
try {
	echo $_POST['name'];
	echo $_POST['type'];
	echo $_POST['height'];
	echo $_POST['weight'];
	echo $_POST['level'];
	echo $_POST['content'];
	$db = new PDO($DB_DSN, $DB_USER, $DB_PASSWORD);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $db->prepare('INSERT INTO pokemon'); // insert
	$stmt->execute();
} catch (PDOException $e) {
	echo $sql.'<br>'.$e->getMessage();
}

$sql = $stmt->fetchAll();
} else {
	header('Location: index.php');
}

$db = null;

?>
