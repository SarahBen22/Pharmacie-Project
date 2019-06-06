<div class="bandeau">

  <div class="logo"></div>
  <div class="nom">
    <a href="/PHARMACIE/index.php" class="pharmacie_titre"><h1> Pharmacie de la Mairie</h1></a>
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
		echo	'<a class="deconnexion" href="/PHARMACIE/index.php/home">Deconnexion</a>';
	}
	else{

echo'<form class="connexion" action="home" method="post">
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
    <span class="fermer" id="btn_fermer">Fermer</span>
  </div>
  </div>
</div>


<nav class="navigation" role="navigation">
  <div id="menuToggle">
    <input type="checkbox" />

    <span></span>
    <span></span>
    <span></span>

    <ul id="menu">
      <a href="/PHARMACIE/index.php"><li>Page d'accueil</li></a>
      <a href="/PHARMACIE/index.php/phyto"><li>Phytothérapie & Aromathérapie</li></a>
      <a href="/PHARMACIE/index.php/homeo"><li>Homéopathie</li></a>
      <a href="/PHARMACIE/index.php/cosmeto"><li>Cosmétologie</li></a>
      <a href="/PHARMACIE/index.php/bb"><li>Univers de bébé</li></a>
      <a href="/PHARMACIE/index.php/ortho"><li>Orthopédie & Matériel médical</li></a>
      <a href="/PHARMACIE/index.php/prodvet"><li>Vétérinaire</li></a>
       <a href="/PHARMACIE/index.php/services"><li>Services</li></a>

    </ul>
  </div>
</nav>
