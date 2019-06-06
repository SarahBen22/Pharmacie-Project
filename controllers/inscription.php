<?php
$content = "views/inscription.php";

require_once "models/profil_client.php";

if(isset($_POST['inscription'])){

if ((isset($_POST['nom']) && !empty($_POST['nom']) ) &&
(isset($_POST['prenom']) && !empty($_POST['prenom']))&&
(isset($_POST['adresse']) && !empty($_POST['adresse']))&&
(isset($_POST['code_postal']) && !empty($_POST['code_postal']))&&
(isset($_POST['ville']) && !empty($_POST['ville']))&&
(isset($_POST['telephone']) && !empty($_POST['telephone']))&&
(isset($_POST['email']) && !empty($_POST['email']))&&
(isset($_POST['mot_de_passe']) && !empty($_POST['mot_de_passe']))){


	$insc= new profil_ClientModel (
				 ['nom' => htmlspecialchars($_POST['nom']),
				 'prenom' =>  htmlspecialchars($_POST['prenom']),
				 'adresse' =>  htmlspecialchars($_POST['adresse']),
				 'code_postal' =>  htmlspecialchars($_POST['code_postal']),
				 'ville' =>  htmlspecialchars($_POST['ville']),
				 'telephone' =>  htmlspecialchars($_POST['telephone']),
				 'email' =>  htmlspecialchars($_POST['email']),
				 'mot_de_passe' =>  htmlspecialchars($_POST['mot_de_passe']),
				 'admin' =>'']);



  $erreur= $insc-> createOne($insc);

    if ($erreur==0)
		$_SESSION['nom'] =$insc->nom();
		$_SESSION['prenom'] =$insc->prenom();
		header ("location:./home");

  }
}

else {
    $erreur = 'Au moins un des champs est vide.';
  }

	// $insc=new profil_ClientModel(['nom' => '','prenom' =>'']);

require_once "views/layout.php";
?>
