<?php
require_once "models/profil_client.php";
$content = "views/navbar";
// on teste si le visiteur a soumis le formulaire
if (isset($_POST['connexion']) && $_POST['connexion'] == 'Connexion') {// isset= permet de voir si une variable est définie
	// on teste l'existence de nos variables. On teste également si elles ne sont pas vides
	if ((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['mot_de_passe']) && !empty($_POST['mot_de_passe']))) {


		$connect= new profil_ClientModel (['email' =>"",'mot_de_passe' => ""]);
		$connect= $client->getByData($_POST['email']);

		if ($connect && password_verify($_POST['mot_de_passe'], $connect->mot_de_passe())){
// password_verify=pour decripter le mdp pour verifier s il correspond au mdp entré par l utilisateur

			$_SESSION['email'] = $connect->email();
			$_SESSION['mot_de_passe'] = $connect->mot_de_passe();
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





?>
