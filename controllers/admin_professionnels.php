<?php
$content = "views/admin_professionnels.php";

require_once "models/professionnels.php";
global $action;


  if (isset($_POST['nom'])) {// on cherche à savoir si la pers a appuyé sur le bouton

$pros= new professionnelsModel(['id' => $_POST['id'] ,'nom' => htmlspecialchars($_POST['nom']),'prenom' =>  htmlspecialchars($_POST['prenom']),
    'adresse' =>  htmlspecialchars($_POST['adresse']),'telephone' =>  htmlspecialchars($_POST['telephone']),'id_categories_pro' =>  htmlspecialchars($_POST['id_categories_pro']),'email' =>  htmlspecialchars($_POST['email'])]);

  //   //htmlspecialchars= protection des données =SECURITE

    $erreur= $pros-> create($pros);

    if ($erreur==0){
    $_SESSION['nom'] = $_POST['nom'];

  }
  else {
    $erreur = 'Au moins un des champs est vide.';
  }
}


$pros= new professionnelsModel(['id' =>0,'nom' => '','prenom' =>'',
    'adresse' =>'','telephone' =>'','id_categories_pro' =>0,'email' =>'']);

$prosList=$pros->getAll();//récup les données ds la bdd


require_once "views/admin_layout.php";

?>
