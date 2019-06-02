<?php
$content = "views/admin_categories.php";
require_once "models/categories_pro.php";
require_once "models/categories.php";
global $action;

if (isset($_POST['type'])) {// on cherche à savoir si la pers a appuyé sur le bouton

$categorie= new CategoriesModel(['id' => $_POST['id'] ,'type' => ($_POST['type'])]);

  //   //htmlspecialchars= protection des données =SECURITE

    $erreur= $categorie-> create($categorie);

    if ($erreur==0){
    $_SESSION['type'] = $_POST['type'];

  }
  else {
    $erreur = 'Au moins un des champs est vide.';
  }
}


$categorie= new CategoriesModel(['id' =>0,'type' => '']);

$catList=$categorie->getAll();//récup les données ds la bdd


$categorie_pro= new Categories_proModel(['id' =>0,'type' => '']);

$catproList=$categorie_pro->getAll();//récup les données ds la bdd

// foreach($catList as $cat){echo $cat['type'];}

require_once "views/admin_layout.php";

?>
