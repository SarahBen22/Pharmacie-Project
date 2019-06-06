<?php
$content = "views/services.php";

require_once "models/professionnels.php";
// global $action;


//   if (isset($_POST['nom'])) {// on cherche à savoir si la pers a appuyé sur le bouton

// $prof= new professionnelsModel(['id' => $_POST['id'] ,'nom' => htmlspecialchars($_POST['nom']),'prenom' =>  htmlspecialchars($_POST['prenom']),
//     'adresse' =>  htmlspecialchars($_POST['adresse']),'telephone' =>  htmlspecialchars($_POST['telephone']),'id_categories_pro' =>  htmlspecialchars($_POST['id_categories_pro']),'email' =>  htmlspecialchars($_POST['email'])]);

//   //   //htmlspecialchars= protection des données =SECURITE

//     $erreur= $prof-> create($prof);

//     if ($erreur==0){
//     $_SESSION['nom'] = $_POST['nom'];

//   }
//   else {
//     $erreur = 'Au moins un des champs est vide.';
//   }
// }


// $prof= new professionnelsModel(['id' =>0,'nom' => '','prenom' =>'',
//     'adresse' =>'','telephone' =>'','id_categories_pro' =>0,'email' =>'']);

// $profList=$prof->getAll();//récup les données ds la bdd

require_once "views/layout.php";

?>
