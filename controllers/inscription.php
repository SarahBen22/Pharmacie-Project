<?php
$content = "views/inscription.php";
require_once "views/layout.php";
require_once "models/profil_client.php";

// on teste si le visiteur a soumis le formulaire
if (true) {// isset= permet de voir si une variable est définie
  // on teste l'existence de nos variables. On teste également si elles ne sont pas vides
  if (isset($_POST['email'])) {// on cherche à savoir si la pers a appuyé sur le bouton

    $client= new profil_ClientModel(['id' => $_POST['id'] ,'nom' => htmlspecialchars($_POST['nom']),'prenom' =>  htmlspecialchars($_POST['prenom']),
    'adresse' =>  htmlspecialchars($_POST['adresse']),'telephone' =>  htmlspecialchars($_POST['telephone']),'mot_de_passe' =>  htmlspecialchars($_POST['mot_de_passe']),'email' =>  htmlspecialchars($_POST['email']),'admin' => "0"]);

    //htmlspecialchars= protection des données =SECURITE

    $erreur= $client-> create($client);

    if ($erreur==0)
    $_SESSION['email'] = $_POST['email'];

  }
  else {
    $erreur = 'Au moins un des champs est vide.';
  }
}
?>
