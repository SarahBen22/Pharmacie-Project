<?php
$content = "views/services.php";

require_once "models/professionnels.php";
// global $action;

$professionnelsList=$prof->getByType();//récup les données ds la bdd

require_once "views/layout.php";

?>
