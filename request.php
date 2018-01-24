<?php




//ajouter a la bdd debut
if (!empty($_POST)&&isset($_POST['users'])) {
	debug($_POST);
	users();
}


function users(){
	global $bdd;
	try {
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$bdd->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$query = "INSERT INTO users (`name`, `username`) VALUES (:name, :username)";
		$reponse = $bdd->prepare($query);

		$reponse->bindParam(':name',$_POST['name'],PDO::PARAM_STR);
		$reponse->bindParam(':username',$_POST['username'],PDO::PARAM_STR);
		
		echo "test";

		$reponse->execute();
		
	} catch (Exception $e) {
		echo "ERREUR: ";
		debug($e->getMessage());
	};
}
//ajouter a la bdd fin


//afiiche dans la première page ce qu'on a ajouter dans la bdd

$query=$bdd->prepare('SELECT * FROM users');
$query->execute();
$taches = $query->fetchAll(PDO::FETCH_ASSOC);
// fin d'afiichache dans la première page ce qu'on a ajouter dans la bdd
