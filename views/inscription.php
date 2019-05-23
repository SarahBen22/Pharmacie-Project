<?php require_once "navbar.php" ?>


<div class="conteneur_inscription">

 <h1 id="titre_insc">Inscription</h1>

<form class="inscription">


<label id="nom_place">Nom
<input name="Nom" type="text" placeholder="Compléter votre nom" size="40" class="nom_insc" />
</label>


<label id="prenom_place">Prénom
<input name="Prénom" type="text" placeholder="Compléter votre prénom" size="40" class="nom_insc"  />
</label>


<label id="date_place">Date de naissance
<input name="Birthdate" type="date"  size="40" class="nom_inscr"  />
</label>


<label id="num_place">Numéro de téléphone
<input name="tel" type="tel" placeholder="numéro de tel" size="40" class="nom_insc" />
</label>


<label id="adresse_place">Adresse
<input name="rue" type="text" placeholder="Adresse" size="40" class="nom_insc" />
</label>

<label id="code_place">Code postal
<input name="code" type="text" placeholder="code postal" size="40" class="nom_insc" />
</label>

<label id="ville_place">Ville
<input name="ville" type="text" placeholder="ville" size="40" class="nom_insc" />
</label>

<label id="mail_place">Email
<input name="Mail" type="email" placeholder="Email" size="40" class="nom_insc" />
</label>

<label id="mdp_place">Mot de passe
<input name="mdp" type="password" placeholder="mot de passe" size="40" class="nom_insc" />
</label>
<br>
<button type="submit" form="form1" value="Submit" id="enregistrer_btn" >Enregistrer</button>
</form>
</div>



<?php require_once "footer.php"?>
