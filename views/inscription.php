<?php require_once "navbar.php" ?>

<div class="conteneur_inscription">
 <h1 id="titre_insc">Inscription</h1>

<form class="inscription" action="./inscription" method="post">


    <div class="nom_place">

      <label>Nom</label>
      <input name="nom" type="text" placeholder="Compléter votre nom" size="40" class="nom_insc"/>


      <label>&emsp;Prénom</label>
      <input name="prenom" type="text" placeholder="Compléter votre prénom" size="40" class="nom_insc"/>
    </div>


<!-- <div class="nom_place">
<label>Date de naissance</label>
<input name="Birthdate" type="date"  size="40" class="nom_insc"  />
</div> -->



 <div class="nom_place">
<label>Numéro de téléphone</label>
<input name="telephone" type="tel" placeholder="numéro de tel" size="40" class="nom_insc"/>

<label>&emsp;Adresse</label>
<input name="adresse" type="text" placeholder="Adresse" size="40" class="nom_insc"/>
</div>


<div class="nom_place">
<label>Code postal</label>
<input name="code_postal" type="text" placeholder="code postal" size="40" class="nom_insc"/>

<label>&emsp;Ville</label>
<input name="ville" type="text" placeholder="ville" size="40" class="nom_insc"/>
</div>

<div class="nom_place">
<label>Email</label>
<input name="email" type="email" placeholder="Email" size="40" class="nom_insc"/>

<label>&emsp;Mot de passe</label>
<input name="mot_de_passe" type="password" placeholder="mot de passe" size="40" class="nom_insc"/>

</div>

<button type="submit" id="enregistrer_btn" name="inscription" value="Enregistrer" >Enregistrer</button>

</form>
</div>

<div class="msg">
	<?php
	if ($erreur!=0) echo '<br />'.$erreur;//
	?>
	</div>

<?php require_once "footer.php"?>
