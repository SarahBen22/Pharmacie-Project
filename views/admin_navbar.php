<div class="bandeau">

<div class="logo"></div>
  <div class="nom">
<a href="/PHARMACIE/index.php/home" class="pharmacie_titre"><h1> Pharmacie de la Mairie</h1></a>
</div>


</div>

<div class="sous_bandeau">

<div class="barre">
<label for="site-search">
<input type="search" id="site-search" name="q" placeholder="Recherche...">
</label>
<button class="recherche">🔍</button>

</div>

  <div class="member-container">

<button type="button" name="button" class="compte" id="btn_mon_compte">Mon compte</button>

      <div class="fenetre" id="fenetre">
        <div class="member">
          <p class="connect">Avez-vous déjà un compte?Connectez-vous!</p>
        </div>

        <div id="form_connect">


            <?php
	if (isset($_SESSION['email'])){
		echo	'<a class="deconnexion" href="/PHARMACIE/index.php/deconnexion">Deconnexion</a>';
	}
	else{

echo'<form class="connexion" action="connexion" method="post">
            <label class="ok">Adresse email<br></label>
              <input name="email" class="taille" type="email" placeholder="Email" />

            <label class="ok">Mot de passe<br></label>
              <input name="mdp" class="taille" type="password" placeholder="Mot de passe" /><br><br>';



		echo	' <input type="submit" name="se_connecter" value="Me connecter" class="connecter" href="/PHARMACIE/index.php/home" />';
	}
	?>
            </form>
          </div>

<div class="creation">
  <p id="no_compte" >Pas de compte?<br>Inscrivez-vous!</p>

  <div class="btn_create_compte">
<a class="inscription_btn" href="/PHARMACIE/index.php/inscription">Créer mon compte</a>
</div>
</div>


<span class="fermer">Fermer</span>
</div>


</div>

</div>
