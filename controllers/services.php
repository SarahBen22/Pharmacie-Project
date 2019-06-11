<?php
$content = "views/services.php";
require_once "models/categories_pro.php";
require_once "models/professionnels.php";
// global $action;
$cato= new  Categories_proModel(['id' => 0 ,'type' =>"" ]);

$catoList=$cato-> getAll();

$professionnels= new  professionnelsModel(['id' => 0,'nom' => "",'prenom' => "",
    'adresse' => "",'telephone' => "",'id_categories_pro' => "",'email' => ""]);


require_once "views/layout.php";

?>
