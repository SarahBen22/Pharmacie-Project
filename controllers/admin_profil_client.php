<?php
$content = "views/admin_profil_client.php";
require_once "models/profil_client.php";
global $action;


  if (isset($_POST['email'])) {// on cherche à savoir si la pers a appuyé sur le bouton

$client= new profil_ClientModel(['id' => $_POST['id'] ,'nom' => htmlspecialchars($_POST['nom']),'prenom' =>  htmlspecialchars($_POST['prenom']),
    'adresse' =>  htmlspecialchars($_POST['adresse']),'code_postal' =>  htmlspecialchars($_POST['code_postal']),'ville' =>  htmlspecialchars($_POST['ville']),'telephone' =>  htmlspecialchars($_POST['telephone']),'mot_de_passe' =>  htmlspecialchars($_POST['mot_de_passe']),'email' =>  htmlspecialchars($_POST['email']),'admin' => "0"]);

  //htmlspecialchars= protection des données =SECURITE

    $erreur= $client-> create($client);

    if ($erreur==0){
    $_SESSION['email'] = $_POST['email'];

  }
  else {
    $erreur = 'Au moins un des champs est vide.';
  }
}


$client= new profil_ClientModel(['id' =>0,'nom' => '','prenom' =>'',
    'adresse' =>'', 'code_postal' =>0, 'ville' =>'','telephone' =>'','mot_de_passe' =>'','email' =>'','admin' => '']);

$usersList=$client->getAll();//récup les données ds la bdd
//  foreach($usersList as $client){echo $client['nom'];}





require_once "views/admin_layout.php";

?>
