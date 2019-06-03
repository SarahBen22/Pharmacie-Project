<?php require_once "navbar.php" ?>

<div class="conteneur_inscription">
 <h1 id="titre_insc">Inscription</h1>

<form class="inscription">


    <div class="nom_place">

      <label>Nom</label>
      <input name="Nom" type="text" placeholder="Compléter votre nom" size="40" class="nom_insc"
      <?php if (isset($_POST['nom'])) echo htmlentities(trim($_POST['nom'])); ?> >


      <label>&emsp;Prénom</label>
      <input name="Prénom" type="text" placeholder="Compléter votre prénom" size="40" class="nom_insc"
      <?php if (isset($_POST['prenom'])) echo htmlentities(trim($_POST['prenom'])); ?> />
    </div>


<div class="nom_place">
<label>Date de naissance</label>
<input name="Birthdate" type="date"  size="40" class="nom_insc"  />
</div>

<div class="nom_place">
<label>Numéro de téléphone</label>
<input name="tel" type="tel" placeholder="numéro de tel" size="40" class="nom_insc"
<?php if (isset($_POST['telephone'])) echo htmlentities(trim($_POST['telephone'])); ?>/>
<label>&emsp;Adresse</label>
<input name="rue" type="text" placeholder="Adresse" size="40" class="nom_insc"
<?php if (isset($_POST['adresse'])) echo htmlentities(trim($_POST['adresse'])); ?>/>
</div>


<div class="nom_place">
<label>Code postal</label>
<input name="code" type="text" placeholder="code postal" size="40" class="nom_insc"
<?php if (isset($_POST['code_postal'])) echo htmlentities(trim($_POST['code_postal'])); ?> />
<label>&emsp;Ville</label>
<input name="ville" type="text" placeholder="ville" size="40" class="nom_insc"
<?php if (isset($_POST['ville'])) echo htmlentities(trim($_POST['ville'])); ?>/>
</div>

<div class="nom_place">
<label>Email</label>
<input name="Mail" type="email" placeholder="Email" size="40" class="nom_insc"
<?php if (isset($_POST['email'])) echo htmlentities(trim($_POST['email'])); ?> />
<label>&emsp;Mot de passe</label>
<input name="mdp" type="password" placeholder="mot de passe" size="40" class="nom_insc"
<?php if (isset($_POST['mot_de_passe'])) echo htmlentities(trim($_POST['mot_de_passe'])); ?> />
</div>

<button type="submit" form="form1" value="Submit" id="enregistrer_btn" >Enregistrer</button>

</form>
</div>
<?php require_once "footer.php"?>
