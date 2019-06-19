<?php
$content = "views/admin_profil_client.php";
require_once "models/profil_client.php";
global $action;

    $id=0;
    $nom="";
    $prenom="";
    $adresse="";
    $code_postal="";
    $ville="";
    $telephone="";
    $email="";

$client= new profil_ClientModel(['id' =>0,'nom' => '','prenom' =>'',
    'adresse' =>'', 'code_postal' =>0, 'ville' =>'','telephone' =>'','mot_de_passe' =>'','email' =>'','admin' => '']);



  if (isset($_POST['email'])) {// on cherche à savoir si la pers a appuyé sur le bouton
    //on teste si le bouton "ajouter" a bien été soumis


$client= new profil_ClientModel([0, 'nom' => htmlspecialchars($_POST['nom']),'prenom' =>  htmlspecialchars($_POST['prenom']),
    'adresse' =>  htmlspecialchars($_POST['adresse']),'code_postal' =>  htmlspecialchars($_POST['code_postal']),
    'ville' =>  htmlspecialchars($_POST['ville']),'telephone' =>  htmlspecialchars($_POST['telephone']),
    'mot_de_passe' =>  htmlspecialchars($_POST['mdp']),'email' =>  htmlspecialchars($_POST['email']),'admin' => "0"]);

  //htmlspecialchars= protection des données =SECURITE remplace les caractère speciaux lors des injections
  // par des caracteres html
 if (isset($_POST['adduser'])){
    $erreur= $client-> createOne($client);

}

else if(isset($_POST['update_user'])){
  $erreur= $client-> update($client);
}


  //   if ($erreur==0){


  // }
  // else {
  //   $erreur = 'Au moins un des champs est vide.';
  // }
}

if(isset($action) && $action == 'update_user'){
  echo'ok';
  if (isset($_GET['id'])){
    echo'oui';
    $client=$client->getByData($_GET['id']);
    echo "jnklnlkn".$client->nom();
    $id=$client->id();
    $nom=$client->nom();
    $prenom=$client->prenom();
    $adresse=$client->adresse();
    $code_postal=$client->code_postal();
    $ville=$client->ville();
    $telephone=$client->telephone();
    $email=$client->email();
    // $mot_de_passe=$client->mot_de_passe();
    // $admin=$client->admin();
  }
}

else if(isset($action) && $action == 'delete_user'){

  $erreur= $client->delete((int)$_GET['id']);
  echo'supprime toi';
}

$usersList=$client->getAll();//récup les données ds la bdd
//  foreach($usersList as $client){echo $client['nom'];}





require_once "views/admin_layout.php";

?>
