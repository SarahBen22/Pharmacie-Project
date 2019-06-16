<?php
require_once "models/profil_client.php";
$content = "views/navbar";
// on teste si le visiteur a soumis le formulaire
//isset= permet de voir si une variable est définie
// on teste l'existence de nos variables. On teste également si elles ne sont pas vides
// echo '<script>';
//   echo 'console.log('. json_encode( 'je suis là' ) .')';
//   echo '</script>';
	if ((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['mdp']) && !empty($_POST['mdp']))) {
// echo '<script>';
//   echo 'console.log('. json_encode( 'tu fonctionnes' ) .')';
//   echo '</script>';

		// $connect= new profil_ClientModel (['email' =>"",'mot_de_passe' => ""]);
		$connect= new profil_ClientModel
        (['nom' =>'',
				 'prenom' => '',
				 'adresse' => '',
				 'code_postal' => 0,
				 'ville' => '',
				 'telephone' => '',
				 'email' => '',
				 'mot_de_passe' => '',
         'admin' =>0]);

		$connect= $connect->getByData($_POST['email']);
echo$connect->mot_de_passe();
		if ($connect && password_verify($_POST['mdp'], $connect->mot_de_passe())){
// // password_verify=pour decripter le mdp pour verifier s il correspond au mdp entré par l utilisateur
// echo '<script>';
//   echo 'console.log('. json_encode( 'tu déchires' ) .')';
//   echo '</script>';
			$_SESSION['email'] = $connect->email();
			$_SESSION['mdp'] = $connect->mot_de_passe();
			$_SESSION['admin'] = $connect->admin();
			$_SESSION['prenom'] = $connect->prenom();
			// on met tous les $ session afin de recup les données à chaque connexion


		}
		else{

			$erreur= 'l\'un des champs est incorrect';
		}
	}
	else {
		$erreur = 'Au moins un des champs est vide.';
	}

	header('Location: ./home');




?>
