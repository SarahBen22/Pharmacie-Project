<?php
require_once "navbar.php"
?>

<div class="services">

<div class="infirmieres">


 <?php foreach($catoList as $categorie){

$proList=$professionnels-> getByType($categorie['type']);

if ( !empty($proList)){echo'

  <div class="div_names"><h2>'.$categorie['type'].'</h2></div>
 <table id="inf">

<tr>
<th class="ligne_trois" >Nom</th>
<th class="ligne_quatre" >Prénom</th>
<th class="ligne_quatre" >Adresse</th>
<th class="ligne_quatre">Numéro de téléphone</th>
<th class="ligne_quatre">Email</th>
</tr>';
//le if = si les catégories sont vides on ne les fait pas apparaître
//.$categorie['type']. = pour recupérer le nom de la catégorie
// il y a 2 foreach car on ajoute un tableau pour chaque catégorie ds ce tableau il y a une ligne par professionnel
foreach($proList as $pros){echo'
<tr>
<td class="ligne_trois">'.$pros['nom'].'</td>
<td class="ligne_quatre">'.$pros['prenom'].'</td>
<td class="ligne_quatre">'.$pros['adresse'].'</td>
<td class="ligne_quatre">'.$pros['telephone'].'</td>
<td class="ligne_quatre">'.$pros['email'].'</td>
</tr>';}

echo'</table>';}}
?>

</div>

<div class="autres">
  <h5 class="informations_utiles">Informations utiles:</h5>
  <ul>

<li>SOS médecins: <strong>08 26 88 91 91</strong></li>
<li>Suicide écoute:<strong> 01 45 39 40 00</strong></li>
<li>Samu: <strong>01 60 90 15 66 ou le 15</strong></li>
<li>Clinique Jules Vallès: 01 69 54 45 45, <br>38 avenue Jules Vallès 91200 Athis-Mons</li>
<li>Clinique Caron: 01 69 57 57 57, <br>111 rue Caron 91200 Athis-Mons</li>
  </ul>
</div>
<div class="carte"></div>

</div>






<?php
require_once "footer.php"
?>
