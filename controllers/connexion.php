<?php
require_once "models/profil_client.php";

// on teste si le visiteur a soumis le formulaire
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {// isset= permet de voir si une variable est définie
	// on teste l'existence de nos variables. On teste également si elles ne sont pas vides
	if ((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['mot_de_passe']) && !empty($_POST['mot_de_passe']))) {


		$client= new profil_ClientModel (['id' => 0 , 'nom' =>"",'prenom' => "",
		'adresse' => "",'telephone' => "",'mot_de_passe' => "",'email' =>"",'admin' => "0"]);
		$client= $client->getByData($_POST['pseudo']);

		if ($client && password_verify($_POST['mot_de_passe'], $client->mot_de_passe())){
// password_verify=pour decripter le mdp pour verifier s il correspond au mdp entré par l utilisateur

			$_SESSION['email'] = $client->email();
			$_SESSION['id'] = $client->id();
			$_SESSION['admin'] = $client->admin();
			$_SESSION['nom'] = $client->nom();
			$_SESSION['prenom'] = $client->prenom();
			$_SESSION['adresse'] = $client->adresse();
			$_SESSION['telephone'] = $client->telephone();
			$_SESSION['email'] = $client->email();
			$_SESSION['mot_de_passe'] = $client->mot_de_passe();
			// on met tous les $ session afin de recup les données à chaque connexion

			header('Location: ./home');
		}
		else{

			$erreur= 'l\'un des champs est incorrect';
		}
	}
	else {
		$erreur = 'Au moins un des champs est vide.';
	}
}


$content = "views/connexion.php";
require_once "views/layout.php";

?>
