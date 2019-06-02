<?php
$content = "views/admin_categories.php";


global $action;

if (isset($_POST['type'])) {// on cherche à savoir si la pers a appuyé sur le bouton

$categorie_pro= new Categories_proModel(['id' => $_POST['id'] ,'type' => ($_POST['type'])]);

  //   //htmlspecialchars= protection des données =SECURITE

    $erreur= $categorie_pro-> create($categorie_pro);

    if ($erreur==0){
    $_SESSION['type'] = $_POST['type'];

  }
  else {
    $erreur = 'Au moins un des champs est vide.';
  }
}


$categorie_pro= new Categories_proModel(['id' =>0,'type' => '']);

$catproList=$categorie_pro->getAll();//récup les données ds la bdd

require_once "views/admin_layout.php";

?>
