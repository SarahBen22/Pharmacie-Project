<?php
$content = "views/home.php";
require_once "models/profil_client.php";


if (isset($_POST['email']) &&(isset($_POST['mdp']))){
echo'test1';
$profil_client= new profil_ClientModel
        (['nom' =>'',
				 'prenom' => '',
				 'adresse' => '',
				 'code_postal' => 0,
				 'ville' => '',
				 'telephone' => '',
				 'email' => '',
				 'mot_de_passe' => '',
         'admin' =>0]);

  $profil_client=$profil_client->getByData($_POST['email']);

  if($profil_client && (password_verify($_POST['mdp'], $profil_client->mot_de_passe()))){
    // s'il n'est pas vide et pour appeller mon getter via $profil_client
//password_verify= verifie que le mdp ds le formulaire soit le mm que ds la bdd
  $_SESSION['email'] = $profil_client->email();
echo'test2';
		}
		else{

			$erreur= 'l\'un des champs est incorrect';
		}
	}
	else {
		$erreur = 'Au moins un des champs est vide.';
	}

require_once "views/layout.php";

?>
