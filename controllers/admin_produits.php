<?php
$content = "views/admin_produits.php";
require_once "models/produits.php";
global $action;

if (isset($_POST['nom_produit'])) {// on cherche à savoir si la pers a appuyé sur le bouton

$produit= new ProduitsModel(['id' => $_POST['id'] ,'nom_produit' => ($_POST['nom_produit']),'id_categories' => ($_POST['id_categories']),
    'prix' => ($_POST['prix']),'image_produit' => ($_POST['image_produit'])]);

  //   //htmlspecialchars= protection des données =SECURITE

    $erreur= $produit-> create($produit);

    if ($erreur==0){
    $_SESSION['nom_produit'] = $_POST['nom_produit'];

  }
  else {
    $erreur = 'Au moins un des champs est vide.';
  }
}


$produit= new ProduitsModel(['id' =>0,'nom_produit' => '','id_categories' =>0,
    'prix' =>0.0,'image_produit' =>'']);

$prodList=$produit->getAll();//récup les données ds la bdd


require_once "views/admin_layout.php";

?>
